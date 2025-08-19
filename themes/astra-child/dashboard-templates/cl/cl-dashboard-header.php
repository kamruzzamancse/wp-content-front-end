<?php
/**
 * Dashboard Header Component
 */
$current_user = wp_get_current_user();
$dashboard_url = current_user_can('client') ? home_url('/cl/client-dashboard/') : home_url('/');
$upload_dir = wp_upload_dir();
$image_url = $upload_dir['baseurl'];
?>

<!-- Desktop Header -->

<header class="dashboard-header desktop-header">
    
    <div class="header-row-1">
        <a href="<?php echo esc_url($dashboard_url); ?>">
            <img src="<?php echo esc_url(content_url('/uploads/2025/08/mary-logo.png')); ?>" 
                alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo" 
                class="site-logo">
        </a>

        <div class="user-info">
            <a href="?tab=notifications" class="notification-icon" aria-label="Notifications">
                <span class="dashicons dashicons-bell"></span>
            </a>

            <div class="profile-header">
                <div class="profile-pic">
                    <img class="realtor-avatar" src="<?php echo esc_url( $image_url . '/2025/08/client-photo.jpg' ); ?>" alt="Realtor Profile Pic">
                </div>
            </div>

            <div class="user-details">
                <span class="user-name"><?php echo esc_html($current_user->display_name); ?></span>
                <span class="user-role-dashboard-header">
                    <?php
                    $role_names = [
                        'realtor' => 'Realtor',
                        'agent' => 'Agent',
                        'subscriber' => 'Subscriber'
                    ];
                    $user_roles = $current_user->roles;
                    echo esc_html($role_names[$user_roles[0]] ?? ucfirst($user_roles[0]));
                    ?>
                </span>
            </div>
        </div>
    </div>

    <!-- Hamburger menu container -->
    <div class="header-row-2">
        <div class="hamburger-menu" id="desktop-hamburger" aria-label="Open menu" role="button" tabindex="0">
            <span class="dashicons dashicons-menu"></span>
        </div>
    </div>

    <?php
        /**
         * Modal Sidebar Navigation
         */
        $current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
    ?>

    <!-- Modal sidebar -->
    <div class="modal-sidebar" id="modal-sidebar" aria-hidden="true" role="dialog" aria-label="Sidebar menu">
        <button class="close-sidebar" id="close-sidebar" aria-label="Close menu">&times;</button>
        <nav class="sidebar-nav">
            <ul>
                <li class="<?php echo $current_tab === 'dashboard' ? 'active' : ''; ?>">
                    <a href="?tab=dashboard">
                        <span class="dashicons dashicons-admin-home"></span> Dashboard
                    </a>
                </li>
                <li class="<?php echo $current_tab === 'properties' ? 'active' : ''; ?>">
                    <a href="?tab=properties">
                        <span class="dashicons dashicons-building"></span> My Properties
                    </a>
                </li>
                <li class="<?php echo $current_tab === 'address-book' ? 'active' : ''; ?>">
                    <a href="?tab=address-book">
                        <span class="dashicons dashicons-book"></span> Address Book
                    </a>
                </li>
                <li class="<?php echo $current_tab === 'messages' ? 'active' : ''; ?>">
                    <a href="?tab=messages">
                        <span class="dashicons dashicons-email"></span> Message
                    </a>
                </li>
                <li class="<?php echo $current_tab === 'settings' ? 'active' : ''; ?>">
                    <a href="?tab=settings">
                        <span class="dashicons dashicons-admin-settings"></span> Setting
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(wp_logout_url(home_url('/login/'))); ?>">
                        <span class="dashicons dashicons-exit"></span> Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Overlay background -->
    <div class="modal-overlay" id="modal-overlay" tabindex="-1"></div>

</header>