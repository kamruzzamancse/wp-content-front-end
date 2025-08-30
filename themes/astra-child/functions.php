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
    $template = locate_template('dashboard-templates/rt/rt-property-details-modal.php');
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
        'admin'   => 'manage_options',
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
        $template = locate_template("dashboard-templates/rt/{$role}-dashboard.php");
    }
    elseif ($role === 'admin') {
        $template = locate_template("dashboard-templates/am/admin-dashboard.php");
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
add_shortcode('mdk_admin_dashboard', 'mdk_dashboard_shortcode');

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
        'admin'   => home_url('/am/admin-dashboard/'),
        'realtor' => home_url('/rt/realtor-dashboard/'),
        'client'  => home_url('/cl/client-dashboard/'),
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
        if (array_intersect(['realtor', 'client', 'admin'], $user->roles)) {
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
    add_role('admin', 'Admin', [
        'read'            => true,
        'manage_options'  => true,
    ]);

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

/* ===========================
   Profile Updating Section
   =========================== */

// Enqueue scripts and styles
function enqueue_profile_scripts() {
    wp_enqueue_script('profile-ajax', get_template_directory_uri() . '/js/profile-ajax.js', array('jquery'), null, true);
    wp_localize_script('profile-ajax', 'profile_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('profile_ajax_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_profile_scripts');

// Handle profile data loading
function load_profile_data() {
    if (!wp_verify_nonce($_POST['nonce'], 'profile_ajax_nonce')) {
        wp_die('Security check failed');
    }
    
    $user_id = get_current_user_id();
    if ($user_id == 0) {
        wp_send_json_error('User not logged in');
    }
    
    $user_info = get_userdata($user_id);
    $broker_number = get_user_meta($user_id, 'broker_number', true);
    $company_name = get_user_meta($user_id, 'company_name', true);
    $profile_picture = get_user_meta($user_id, 'profile_picture', true);
    $default_picture = get_template_directory_uri() . '/images/default-avatar.jpg';
    
    $response = array(
        'full_name' => $user_info->display_name,
        'email' => $user_info->user_email,
        'broker_number' => $broker_number,
        'company_name' => $company_name,
        'profile_picture' => $profile_picture ? $profile_picture : $default_picture
    );
    
    wp_send_json_success($response);
}
add_action('wp_ajax_load_profile_data', 'load_profile_data');

// Handle profile data saving
function save_profile_data() {
    if (!wp_verify_nonce($_POST['nonce'], 'profile_ajax_nonce')) {
        wp_die('Security check failed');
    }
    
    $user_id = get_current_user_id();
    if ($user_id == 0) {
        wp_send_json_error('User not logged in');
    }
    
    if (isset($_POST['broker_number'])) {
        update_user_meta($user_id, 'broker_number', sanitize_text_field($_POST['broker_number']));
    }
    
    if (isset($_POST['company_name'])) {
        update_user_meta($user_id, 'company_name', sanitize_text_field($_POST['company_name']));
    }
    
    wp_send_json_success('Profile updated successfully');
}
add_action('wp_ajax_save_profile_data', 'save_profile_data');

// Handle profile picture upload
function upload_profile_picture() {
    if (!wp_verify_nonce($_POST['nonce'], 'profile_ajax_nonce')) {
        wp_die('Security check failed');
    }
    
    $user_id = get_current_user_id();
    if ($user_id == 0) {
        wp_send_json_error('User not logged in');
    }
    
    if (!function_exists('wp_handle_upload')) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
    }
    
    $uploadedfile = $_FILES['profile_picture'];
    $upload_overrides = array('test_form' => false);
    $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
    
    if ($movefile && !isset($movefile['error'])) {
        update_user_meta($user_id, 'profile_picture', $movefile['url']);
        wp_send_json_success(array('url' => $movefile['url']));
    } else {
        wp_send_json_error($movefile['error']);
    }
}
add_action('wp_ajax_upload_profile_picture', 'upload_profile_picture');

/**
 * Add custom user fields
 */
function add_custom_user_fields($user) {
    ?>
    <h3>Broker Information</h3>
    <table class="form-table">
        <tr>
            <th><label for="broker_number">Broker Number</label></th>
            <td>
                <input type="text" name="broker_number" id="broker_number" value="<?php echo esc_attr(get_user_meta($user->ID, 'broker_number', true)); ?>" class="regular-text" /><br />
                <span class="description">Enter your broker license number.</span>
            </td>
        </tr>
        <tr>
            <th><label for="company_name">Company Name</label></th>
            <td>
                <input type="text" name="company_name" id="company_name" value="<?php echo esc_attr(get_user_meta($user->ID, 'company_name', true)); ?>" class="regular-text" /><br />
                <span class="description">Enter your company name.</span>
            </td>
        </tr>
        <tr>
            <th><label for="profile_picture">Profile Picture URL</label></th>
            <td>
                <input type="text" name="profile_picture" id="profile_picture" value="<?php echo esc_attr(get_user_meta($user->ID, 'profile_picture', true)); ?>" class="regular-text" /><br />
                <span class="description">Enter the URL of your profile picture.</span>
            </td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'add_custom_user_fields');
add_action('edit_user_profile', 'add_custom_user_fields');

/**
 * Save custom user fields
 */
function save_custom_user_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    
    if (isset($_POST['broker_number'])) {
        update_user_meta($user_id, 'broker_number', sanitize_text_field($_POST['broker_number']));
    }
    
    if (isset($_POST['company_name'])) {
        update_user_meta($user_id, 'company_name', sanitize_text_field($_POST['company_name']));
    }
    
    if (isset($_POST['profile_picture'])) {
        update_user_meta($user_id, 'profile_picture', esc_url_raw($_POST['profile_picture']));
    }
}
add_action('personal_options_update', 'save_custom_user_fields');
add_action('edit_user_profile_update', 'save_custom_user_fields');

add_action('init', function() {
    if(isset($_GET['export_addressbook']) && $_GET['export_addressbook'] == '1') {
        $format = isset($_GET['format']) ? $_GET['format'] : 'csv';

        // Example data — replace with your dynamic table data
        $clients = [
            ['sl'=>'01','name'=>'Afsana Hamid Mim','email'=>'Support.info@gmail.com','phone'=>'999-888-666','address'=>'New York'],
            ['sl'=>'02','name'=>'John D. Smith','email'=>'john.smith@business.com','phone'=>'555-123-4567','address'=>'Los Angeles, CA'],
            ['sl'=>'03','name'=>'Emily Carter','email'=>'emily.carter@example.com','phone'=>'777-222-9999','address'=>'Chicago, IL'],
            ['sl'=>'04','name'=>'Michael Johnson','email'=>'michael.johnson@example.com','phone'=>'888-333-4444','address'=>'Houston, TX'],
            ['sl'=>'05','name'=>'Sophia Williams','email'=>'sophia.williams@example.com','phone'=>'999-555-1111','address'=>'San Francisco, CA'],
            ['sl'=>'06','name'=>'David Brown','email'=>'david.brown@example.com','phone'=>'444-777-2222','address'=>'Miami, FL'],
            ['sl'=>'07','name'=>'Olivia Martinez','email'=>'olivia.martinez@example.com','phone'=>'333-666-8888','address'=>'Seattle, WA'],
            ['sl'=>'08','name'=>'James Lee','email'=>'james.lee@example.com','phone'=>'222-444-5555','address'=>'Boston, MA'],
            ['sl'=>'09','name'=>'Isabella Thompson','email'=>'isabella.thompson@example.com','phone'=>'555-888-9999','address'=>'Denver, CO'],
            ['sl'=>'10','name'=>'William Garcia','email'=>'william.garcia@example.com','phone'=>'777-999-0000','address'=>'Phoenix, AZ'],
        ];

        // CSV Export
        if($format == 'csv'){
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="address_book.csv"');
            $output = fopen('php://output', 'w');
            fputcsv($output, ['#SL', 'Client Name', 'Email', 'Phone Number', 'Address']);
            foreach($clients as $c){
                fputcsv($output, [$c['sl'],$c['name'],$c['email'],$c['phone'],$c['address']]);
            }
            fclose($output);
            exit;
        }

        // JSON Export
        if($format == 'json'){
            header('Content-Type: application/json');
            header('Content-Disposition: attachment; filename="address_book.json"');
            echo json_encode($clients, JSON_PRETTY_PRINT);
            exit;
        }
    }
});






// RentCast Properties API Integration with Exact Code
/* function fetch_rentcast_properties_exact($atts) {
    // Default attributes for the shortcode
    $atts = shortcode_atts([
        'limit'   => 2,
        'city'    => 'New York',
        'state'   => 'NY',
        'address' => ''
    ], $atts, 'rentcast_properties_exact');
    
    $api_key = 'e1b32defe4904ec5929664d0df7a2a4a'; // Your API key here
    
    // Build the API URL based on parameters (address, city, state)
    $api_url = "https://api.rentcast.io/v1/properties?";
    if (!empty($atts['address'])) {
        $api_url .= "address=" . urlencode($atts['address']) . "&";
    }
    $api_url .= "city=" . urlencode($atts['city']) . "&state=" . urlencode($atts['state']);

    // Initialize cURL session
    $curl = curl_init();
    
    // Set cURL options
    curl_setopt_array($curl, [
        CURLOPT_URL            => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => "",
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST  => "GET",
        CURLOPT_HTTPHEADER     => [
            "X-Api-Key: " . $api_key,
            "accept: application/json"
        ],
    ]);
    
    // Execute cURL request and get the response
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    // Close cURL session
    curl_close($curl);
    
    // Error handling
    if ($err) {
        return '<div class="api-error">cURL Error: ' . $err . '</div>';
    }
    
    // Decode JSON response
    $data = json_decode($response, true);
    
    // Check if valid data is received
    if (empty($data) || !is_array($data)) {
        return '<div class="api-error">No valid data received from API</div>';
    }
    
    // Build property cards (output HTML)
    $output = '';
    $property_count = 0;
    
    foreach ($data as $property) {
        if ($property_count >= $atts['limit']) break; // Limit results based on 'limit' attribute
        $property_count++;

        // Extract property details
        $property_id = $property['id'] ?? uniqid(); // Unique property ID
        $address = $property['formattedAddress'] ?? $property['addressLine1'] ?? 'Property Address';
        $city = $property['city'] ?? '';
        $state = $property['state'] ?? '';
        $zipcode = $property['zipCode'] ?? '';

        // Generate dynamic content based on property details
        $price = number_format(rand(1500, 3500)); // Random price generation (replace with real data)
        $bedrooms = rand(1, 4); // Random bedroom count
        $bathrooms = rand(1, 3); // Random bathroom count
        $sqft = rand(600, 2000); // Random square footage
        
        // Property title (split address to get the first part)
        $title_parts = explode(',', $address);
        $title = trim($title_parts[0]);
        
        // Generate property-specific image
        $image_url = generate_property_image_from_address($address, $property_count);
        
        // Generate property card HTML
        $output .= '<div class="pt-property-item">';
        
        // Property image
        $output .= '<a href="?tab=rt-property-details&id=' . urlencode($property_id) . '">';
        $output .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($title) . '" class="pt-main-image">';
        $output .= '</a>';
        
        $output .= '<div class="pt-property-details">';
        
        // Property title link
        $output .= '<a href="?tab=rt-property-details&id=' . urlencode($property_id) . '">';
        $output .= '<h3 class="pt-property-title">' . esc_html($title) . '</h3>';
        $output .= '</a>';
        
        // Hidden date (optional)
        $output .= '<span class="pt-property-date" style="display: none;">' . date('Y-m-d') . '</span>';
        
        // Price
        $output .= '<div class="pt-property-price">$' . $price . '</div>';
        
        // Location (City, State)
        $location = $city . ', ' . $state;
        $output .= '<div class="pt-property-location">';
        $output .= '<i class="fas fa-map-marker-alt"></i>';
        $output .= '<span>' . esc_html($location) . '</span>';
        $output .= '</div>';
        
        // Gallery (Features)
        $output .= '<div class="pt-gallery">';
        
        // Bedrooms
        $output .= '<div class="pt-gallery-item">';
        $output .= '<span class="pt-gallery-icon">🛏️</span>';
        $output .= '<span class="pt-gallery-text">' . $bedrooms . ' Bed</span>';
        $output .= '</div>';
        
        // Bathrooms
        $output .= '<div class="pt-gallery-item">';
        $output .= '<span class="pt-gallery-icon">🚿</span>';
        $output .= '<span class="pt-gallery-text">' . $bathrooms . ' Bath</span>';
        $output .= '</div>';
        
        // Square footage
        $output .= '<div class="pt-gallery-item">';
        $output .= '<span class="pt-gallery-icon">📏</span>';
        $output .= '<span class="pt-gallery-text">' . number_format($sqft) . ' sqft</span>';
        $output .= '</div>';
        
        $output .= '</div>'; // End pt-gallery
        $output .= '</div>'; // End pt-property-details
        $output .= '</div>'; // End pt-property-item
    }
    
    return $output; // Return generated HTML
}

// Address-based image generation function (example)
function generate_property_image_from_address($address, $index) {
    // Create a unique hash based on address for consistent images
    $hash = md5($address);
    $image_index = hexdec(substr($hash, 0, 8)) % 1000; // Generate a consistent image index
    
    // Use Picsum Photos for property-specific images (replace with a custom image source if required)
    return 'https://picsum.photos/seed/' . $image_index . '/500/300';
}

// Register the shortcode
add_shortcode('rentcast_properties_exact', 'fetch_rentcast_properties_exact'); */


// RentCast Properties API Integration with Exact Code
function fetch_rentcast_properties_exact($atts) {
    // Set default parameters and extract shortcode attributes
    $atts = shortcode_atts([
        'limit' => 2,
        'city' => 'New York',
        'state' => 'NY',
        'address' => ''
    ], $atts, 'rentcast_properties_exact');
    
    $api_key = 'e1b32defe4904ec5929664d0df7a2a4a';
    
    // Build API URL based on provided parameters
    if (!empty($atts['address'])) {
        $api_url = "https://api.rentcast.io/v1/properties?address=" . urlencode($atts['address']) . "&city=" . urlencode($atts['city']) . "&state=" . urlencode($atts['state']);
    } else {
        $api_url = "https://api.rentcast.io/v1/properties?city=" . urlencode($atts['city']) . "&state=" . urlencode($atts['state']);
    }
    
    // Initialize cURL request using exact code from RentCast API documentation
    $curl = curl_init();
    
    // Configure cURL options
    curl_setopt_array($curl, [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-Api-Key: " . $api_key,
            "accept: application/json"
        ],
    ]);
    
    // Execute API request
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    // Close cURL connection
    curl_close($curl);
    
    // Handle API errors
    if ($err) {
        return '<div class="api-error">cURL Error: ' . $err . '</div>';
    }
    
    // Decode JSON response from API
    $data = json_decode($response, true);
    
    // Validate API response data
    if (empty($data) || !is_array($data)) {
        return '<div class="api-error">No valid data received from API</div>';
    }
    
    // Initialize output variable
    $output = '';
    $property_count = 0;
    
    // Loop through each property in the API response
    foreach ($data as $property) {
        // Stop if reached the limit
        if ($property_count >= $atts['limit']) break;
        $property_count++;
        
        // Extract property details from API response
        $property_id = $property['id'] ?? uniqid();
        $address = $property['formattedAddress'] ?? $property['addressLine1'] ?? 'Property Address';
        $city = $property['city'] ?? '';
        $state = $property['state'] ?? '';
        $zipcode = $property['zipCode'] ?? '';
        
        // Generate dynamic content for display (since API doesn't provide all details)
        $price = number_format(rand(1500, 3500));
        $bedrooms = rand(1, 4);
        $bathrooms = rand(1, 3);
        $sqft = rand(600, 2000);
        
        // Create property title from address
        $title_parts = explode(',', $address);
        $title = trim($title_parts[0]);
        
        // Generate property-specific image based on address
        $image_url = generate_property_image_from_address($address, $property_count);
        
        // Build property card HTML structure
        $output .= '<div class="pt-property-item">';
        
        // Property image section
        $output .= '<a href="?tab=rt-property-details&id=' . urlencode($property_id) . '">';
        $output .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($title) . '" class="pt-main-image">';
        $output .= '</a>';
        
        $output .= '<div class="pt-property-details">';
        
        // Property title section
        $output .= '<a href="?tab=rt-property-details&id=' . urlencode($property_id) . '">';
        $output .= '<h3 class="pt-property-title">' . esc_html($title) . '</h3>';
        $output .= '</a>';
        
        // Hidden date field (for potential future use)
        $output .= '<span class="pt-property-date" style="display: none;">' . date('Y-m-d') . '</span>';
        
        // Property price display
        $output .= '<div class="pt-property-price">$' . $price . '</div>';
        
        // Property location display
        $location = $city . ', ' . $state;
        $output .= '<div class="pt-property-location">';
        $output .= '<i class="fas fa-map-marker-alt"></i>';
        $output .= '<span>' . esc_html($location) . '</span>';
        $output .= '</div>';
        
        // Property features gallery
        $output .= '<div class="pt-gallery">';
        
        // Bedrooms feature
        $output .= '<div class="pt-gallery-item">';
        $output .= '<span class="pt-gallery-icon">🛏️</span>';
        $output .= '<span class="pt-gallery-text">' . $bedrooms . ' Bed</span>';
        $output .= '</div>';
        
        // Bathrooms feature
        $output .= '<div class="pt-gallery-item">';
        $output .= '<span class="pt-gallery-icon">🚿</span>';
        $output .= '<span class="pt-gallery-text">' . $bathrooms . ' Bath</span>';
        $output .= '</div>';
        
        // Square footage feature
        $output .= '<div class="pt-gallery-item">';
        $output .= '<span class="pt-gallery-icon">📏</span>';
        $output .= '<span class="pt-gallery-text">' . number_format($sqft) . ' sqft</span>';
        $output .= '</div>';
        
        $output .= '</div>'; // End pt-gallery
        $output .= '</div>'; // End pt-property-details
        $output .= '</div>'; // End pt-property-item
    }
    
    return $output;
}

// Generate consistent property images based on address
function generate_property_image_from_address($address, $index) {
    // Create unique hash from address to ensure consistent images for same properties
    $hash = md5($address);
    $image_index = hexdec(substr($hash, 0, 8)) % 1000;
    
    // Use Picsum Photos service with seed parameter for consistent property-specific images
    return 'https://picsum.photos/seed/' . $image_index . '/500/300';
}

// Register shortcode for WordPress
add_shortcode('rentcast_properties_exact', 'fetch_rentcast_properties_exact');
