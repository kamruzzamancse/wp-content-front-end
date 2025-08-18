<?php
/**
 * Astra Child Theme Functions
 * Optimized version with consolidated enqueues, dashboard handling, and security
 */

/**
 * Load parent + child theme styles
 */
function astra_child_enqueue_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style']);
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_theme_styles');

/**
 * Enqueue general child theme assets (CSS + JS)
 */
function astra_child_enqueue_assets() {
    $assets = [
        // CSS
        'todo-calendar-css'       => 'assets/css/rt-todo-calendar.css',
        'property-management-css' => 'assets/css/rt-property-management.css',
        'messages-css'            => 'assets/css/rt-messages.css',
        'address-book-css'        => 'assets/css/rt-address-book.css',
        'realtor-settings-css'    => 'assets/css/rt-realtor-settings.css',
        'cl-dashboard-css'        => 'assets/css/cl-dashboard.css',

        // JS
        'todo-calendar-js'        => 'assets/js/rt-todo-calendar.js',
        'property-management-js'  => 'assets/js/rt-property-management.js',
        'address-book-js'         => 'assets/js/rt-address-book.js',
        'realtor-settings-js'     => 'assets/js/rt-realtor-settings.js',
    ];

    foreach ($assets as $handle => $path) {
        $full_path = get_stylesheet_directory() . '/' . $path;
        $uri = get_stylesheet_directory_uri() . '/' . $path;

        if (file_exists($full_path)) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext === 'css') {
                wp_enqueue_style($handle, $uri, [], filemtime($full_path));
            } elseif ($ext === 'js') {
                wp_enqueue_script($handle, $uri, ['jquery'], filemtime($full_path), true);
            }
        }
    }

    // Localize scripts
    if (wp_script_is('todo-calendar-js', 'enqueued')) {
        wp_localize_script('todo-calendar-js', 'todoCalendarVars', [
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('todo_calendar_nonce'),
            'i18n'    => [
                'confirmDelete' => __('Are you sure you want to delete this todo?', 'astra-child'),
                'saving'        => __('Saving...', 'astra-child'),
            ]
        ]);
    }

    if (wp_script_is('address-book-js', 'enqueued')) {
        wp_localize_script('address-book-js', 'propertyDetailsAjax', [
            'ajaxurl' => admin_url('admin-ajax.php')
        ]);
    }
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_assets');

/**
 * Conditionally enqueue dashboard assets
 */
function mdk_enqueue_dashboard_assets() {
    global $post;
    if (!is_admin() && is_a($post, 'WP_Post')) {
        $dashboard_slugs = ['realtor-dashboard', 'admin-dashboard', 'client-dashboard'];

        if (in_array($post->post_name, $dashboard_slugs)) {
            $assets = [
                'mdk-dashboard-style'  => 'assets/css/rt-dashboard.css',
                'mdk-dashboard-script' => 'assets/js/rt-dashboard.js',
            ];

            foreach ($assets as $handle => $path) {
                $full_path = get_stylesheet_directory() . '/' . $path;
                $uri = get_stylesheet_directory_uri() . '/' . $path;

                if (file_exists($full_path)) {
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    if ($ext === 'css') {
                        wp_enqueue_style($handle, $uri, [], filemtime($full_path));
                    } else {
                        wp_enqueue_script($handle, $uri, ['jquery'], filemtime($full_path), true);
                    }
                }
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'mdk_enqueue_dashboard_assets');

/**
 * Ajax: Load property details (modal)
 */
add_action('wp_ajax_get_property_details', 'load_property_details');
add_action('wp_ajax_nopriv_get_property_details', 'load_property_details');
function load_property_details() {
    $template = locate_template('dashboard-templates/rt-property-details-modal.php');
    if ($template) {
        include $template;
    }
    wp_die();
}

/**
 * Include classes
 */
require_once get_stylesheet_directory() . '/includes/class-todo-calendar.php';

/**
 * Initialize Todo Calendar
 */
function astra_child_init_todo_calendar() {
    new Todo_Calendar();
}
add_action('init', 'astra_child_init_todo_calendar');

/**
 * Create dashboard pages (runs on theme activation)
 */
function mdk_create_dashboard_pages() {
    $pages = [
        'admin-dashboard'   => ['title' => 'Admin Dashboard',   'content' => '[mdk_admin_dashboard]'],
        'realtor-dashboard' => ['title' => 'Realtor Dashboard', 'content' => '[mdk_realtor_dashboard]'],
        'client-dashboard'  => ['title' => 'Client Dashboard',  'content' => '[mdk_client_dashboard]'],
    ];

    foreach ($pages as $slug => $page) {
        if (!get_page_by_path($slug)) {
            wp_insert_post([
                'post_title'   => $page['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => $page['content'],
            ]);
        }
    }
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'mdk_create_dashboard_pages');

/**
 * Secure dashboard template loader
 */
function mdk_load_dashboard_template($template) {
    global $post;
    if (!$post || !is_page()) return $template;

    $dashboard_map = [
        'admin-dashboard'   => ['template' => 'admin',   'capability' => 'manage_options'],
        'realtor-dashboard' => ['template' => 'realtor', 'capability' => 'edit_properties'],
        'client-dashboard'  => ['template' => 'client',  'capability' => 'read_properties'],
    ];

    if (isset($dashboard_map[$post->post_name])) {
        $dashboard = $dashboard_map[$post->post_name];

        if (!current_user_can($dashboard['capability'])) {
            wp_redirect(wp_login_url(get_permalink()));
            exit;
        }

        $template_path = locate_template([
            "dashboard-templates/{$dashboard['template']}-dashboard.php",
            "dashboard-templates/default-dashboard.php"
        ]);

        if ($template_path) return $template_path;
    }

    return $template;
}
add_filter('template_include', 'mdk_load_dashboard_template', 99);

/**
 * Unified dashboard shortcode handler
 */
function mdk_dashboard_shortcode($atts, $content = null, $tag = '') {
    $role = str_replace(['mdk_', '_dashboard'], '', $tag);

    $capabilities = [
        'realtor' => 'edit_properties',
        'client'  => 'read_properties',
    ];

    if (!isset($capabilities[$role])) {
        return '<div class="mdk-alert">Invalid dashboard role.</div>';
    }

    if (!is_user_logged_in() || !current_user_can($capabilities[$role])) {
        return mdk_dashboard_login_message(ucfirst($role));
    }

    ob_start();

    if ($role === 'client') {
        $template = locate_template("dashboard-templates/cl/{$role}-dashboard.php");
    } 
    elseif ($role === 'realtor') {
       $template = locate_template("dashboard-templates/{$role}-dashboard.php");
    }
    elseif ($role === 'administrator') {
        $template = locate_template("dashboard-templates/{$role}-dashboard.php");
    }

    if ($template) {
        include $template;
    } else {
        echo '<div class="mdk-alert">Dashboard template not found.</div>';
    }

    return ob_get_clean();
}
add_shortcode('mdk_realtor_dashboard', 'mdk_dashboard_shortcode');
add_shortcode('mdk_client_dashboard', 'mdk_dashboard_shortcode');

/**
 * Login message helper
 */
function mdk_dashboard_login_message($role) {
    return sprintf(
        '<div class="mdk-alert">%s <a href="%s">%s</a></div>',
        sprintf(__('You need to be logged in as a %s to view this page.', 'astra-child'), esc_html($role)),
        esc_url(wp_login_url()),
        __('Login here', 'astra-child')
    );
}

/**
 * Redirect users after login based on role
 */
function mdk_login_redirect($redirect_to, $request, $user) {
    if (!isset($user->roles) || !is_array($user->roles)) {
        return $redirect_to;
    }

    $role = $user->roles[0];

    $dashboards = [
        'realtor' => home_url('/realtor-dashboard/'),
        'client'  => home_url('/cl/client-dashboard/')
    ];

    if (isset($dashboards[$role])) {
        return $dashboards[$role];
    }

    return $redirect_to;
}
add_filter('login_redirect', 'mdk_login_redirect', 10, 3);

/**
 * Add body class for hiding header/footer for certain roles
 */
function add_user_role_body_class($classes) {
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        if (array_intersect(['realtor', 'client'], $user->roles)) {
            $classes[] = 'hide-header-footer';
        }
    }
    return $classes;
}
add_filter('body_class', 'add_user_role_body_class');

/**
 * Add custom user roles
 */
function mdk_add_user_roles() {
    add_role('realtor', 'Realtor', [
        'read'            => true,
        'edit_properties' => true,
        'edit_clients'    => true,
    ]);

    add_role('client', 'Client', [
        'read'            => true,
        'read_properties' => true,
    ]);
}
add_action('init', 'mdk_add_user_roles');

/**
 * Deactivation cleanup
 */
function mdk_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'mdk_deactivate');
