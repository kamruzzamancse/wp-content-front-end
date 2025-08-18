<?php
/**
 * Client Dashboard Header Component
 */
$current_user = wp_get_current_user();
$dashboard_url = home_url('/client-dashboard/');
$upload_dir = wp_upload_dir();
$image_url = $upload_dir['baseurl'];
?>

<!-- Client Dashboard Header -->
<header class="dashboard-header desktop-header">

    <!-- Row 1 -->
    <div class="cl-dh-header-row-1">
        <a href="<?php echo esc_url($dashboard_url); ?>">
            <img src="<?php echo esc_url(content_url('/uploads/2025/08/mary-logo.png')); ?>" 
                 alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo" 
                 class="cl-dh-logo">
        </a>

        <div class="cl-dh-user-info">
            <a href="?tab=notifications" class="cl-dh-notification" aria-label="Notifications">
                <span class="dashicons dashicons-bell"></span>
            </a>

            <div class="cl-dh-profile">
                <div class="cl-dh-avatar">
                    <img src="<?php echo esc_url($image_url . '/2025/08/client-photo.jpg'); ?>" 
                         alt="Client Profile Picture">
                </div>
                <div class="cl-dh-user-details">
                    <span class="cl-dh-username"><?php echo esc_html($current_user->display_name); ?></span>
                    <span class="cl-dh-role">Client</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2 (Hamburger) -->
    <div class="cl-dh-header-row-2">
        <div class="cl-dh-hamburger" id="cl-dh-hamburger" aria-label="Open menu" role="button" tabindex="0">
            <span class="dashicons dashicons-menu"></span>
        </div>
    </div>

    <?php $current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard'; ?>

    <!-- Mobile Modal Sidebar -->
    <div class="cl-dh-modal-sidebar" id="cl-dh-modal-sidebar">
        <button class="cl-dh-close-btn" id="cl-dh-close-btn" aria-label="Close menu">&times;</button>
        <nav class="cl-dh-nav">
            <ul>
                <li class="<?php echo $current_tab === 'dashboard' ? 'active' : ''; ?>">
                    <a href="?tab=dashboard"><span class="dashicons dashicons-admin-home"></span> Dashboard</a>
                </li>
                <li class="<?php echo $current_tab === 'bookings' ? 'active' : ''; ?>">
                    <a href="?tab=bookings"><span class="dashicons dashicons-calendar-alt"></span> My Bookings</a>
                </li>
                <li class="<?php echo $current_tab === 'favorites' ? 'active' : ''; ?>">
                    <a href="?tab=favorites"><span class="dashicons dashicons-heart"></span> Favorites</a>
                </li>
                <li class="<?php echo $current_tab === 'messages' ? 'active' : ''; ?>">
                    <a href="?tab=messages"><span class="dashicons dashicons-email"></span> Messages</a>
                </li>
                <li class="<?php echo $current_tab === 'settings' ? 'active' : ''; ?>">
                    <a href="?tab=settings"><span class="dashicons dashicons-admin-settings"></span> Settings</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(wp_logout_url(home_url('/login/'))); ?>">
                        <span class="dashicons dashicons-exit"></span> Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Overlay -->
    <div class="cl-dh-overlay" id="cl-dh-overlay"></div>
</header>
