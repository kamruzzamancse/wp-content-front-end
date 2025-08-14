<?php
/**
 * Realtor Dashboard Main Template ()
 */

if (!defined('ABSPATH')) exit;

// Authentication check
if (!is_user_logged_in() || !current_user_can('realtor')) {
    wp_redirect(home_url('/login/'));
    exit;
}

$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
$dashboard_data = load_realtor_dashboard_data($current_tab);

if (!$dashboard_data) {
    echo '<div class="error">Failed to load dashboard data.</div>';
    get_footer();
    exit;
}

get_header();
?>

<div class="dashboard-container">
    <?php include locate_template('dashboard-templates/dashboard-header.php'); ?>
    
    <div class="dashboard-content">
        <?php include locate_template('dashboard-templates/dashboard-sidebar.php'); ?>
        
        <main class="dashboard-main">
            <?php
            switch($current_tab) {
                case 'dashboard':
                    include locate_template('dashboard-templates/dashboard-tab.php');
                    break;
                    
                case 'properties':
                    include locate_template('dashboard-templates/properties-tab.php');
                    break;
                    
                case 'address-book':
                    include locate_template('dashboard-templates/address-book-tab.php');
                    break;
                    
                case 'messages':
                    include locate_template('dashboard-templates/messages-tab.php');
                    break;
                    
                case 'settings':
                    include locate_template('dashboard-templates/settings-tab.php');
                    break;

                case 'notifications':
                    include locate_template('dashboard-templates/notifications-tab.php');
                    break;

                case 'property-details':
                    include locate_template('dashboard-templates/property-details.php');
                    break;

                case 'settings-realtor-pi':
                    include locate_template('dashboard-templates/settings-realtor-pi.php');
                    break;

                 case 'settings-realtor-cp':
                    include locate_template('dashboard-templates/settings-realtor-cp.php');
                    break;

                case 'settings-realtor-pi-edit':
                    include locate_template('dashboard-templates/settings-realtor-pi-edit.php');
                    break;

                 case 'settings-support':
                    include locate_template('dashboard-templates/settings-support.php');
                    break;
                    
                default:
                    wp_redirect(add_query_arg('tab', 'dashboard'));
                    exit;
            }
            ?>
        </main>
    </div>
</div>

<?php 
include locate_template('dashboard-templates/profile-modal.php');
get_footer(); 
?>