<?php
/**
 * Dashboard Sidebar Navigation with Logout Confirmation Modal
 */
$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
?>

<aside class="dashboard-sidebar">
    <ul class="sidebar-menu">
        <!-- Dashboard Overview -->
        <li class="<?php echo $current_tab === 'dashboard' ? 'active' : ''; ?>">
            <a href="?tab=dashboard">
                <span class="dashicons dashicons-admin-home"></span>
                <span>Dashboard Overview</span>
            </a>
        </li>

        <!-- Realtors/Clients/Properties -->
        <li class="<?php echo $current_tab === 'properties' ? 'active' : ''; ?>">
            <a href="?tab=properties">
                <span class="dashicons dashicons-building"></span>
                <span>Property Management</span>
            </a>
        </li>
        <li class="<?php echo $current_tab === 'realtors' ? 'active' : ''; ?>">
            <a href="?tab=realtors">
                <span class="dashicons dashicons-groups"></span>
                <span>Realtors</span>
            </a>
        </li>
        <li class="<?php echo $current_tab === 'clients' ? 'active' : ''; ?>">
            <a href="?tab=clients">
                <span class="dashicons dashicons-groups"></span>
                <span>Clients</span>
            </a>
        </li>

        <!-- Task Monitoring -->
        <li class="<?php echo $current_tab === 'task-status' ? 'active' : ''; ?>">
            <a href="?tab=task-status">
                <span class="dashicons dashicons-clock"></span>
                <span>Task Status Overview</span>
            </a>
        </li>

        <!-- Task Management -->
        <!-- <li class="<?php //echo $current_tab === 'task-management' ? 'active' : ''; ?>">
            <a href="?tab=task-management">
                <span class="dashicons dashicons-update"></span>
                <span>Task Management</span>
            </a>
        </li> -->

        <!-- User Management -->
        <li class="<?php echo $current_tab === 'user-management' ? 'active' : ''; ?>">
            <a href="?tab=user-management">
                <span class="dashicons dashicons-admin-users"></span>
                <span>User Management</span>
            </a>
        </li>

        <!-- Document Oversight -->
        <li class="<?php echo $current_tab === 'documents' ? 'active' : ''; ?>">
            <a href="?tab=documents">
                <span class="dashicons dashicons-media-document"></span>
                <span>Documents</span>
            </a>
        </li>

        <!-- Settings -->
        <li class="<?php echo $current_tab === 'settings' ? 'active' : ''; ?>">
            <a href="?tab=settings">
                <span class="dashicons dashicons-admin-settings"></span>
                <span>Settings</span>
            </a>
        </li>

        <!-- Logout -->
        <li>
            <a href="#" id="sup-logout-trigger">
                <span class="dashicons dashicons-migrate"></span>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>


<!-- Logout Confirmation Modal -->
<div class="sup-modal" id="sup-logout-modal">
    <div class="sup-modal-content">
        <div class="sup-modal-header">
            <h2 class="sup-modal-title">Confirm Logout</h2>
        </div>
        <div class="sup-modal-body">
            <p class="sup-modal-text">Are you sure you want to logout?</p>
        </div>
        <div class="sup-modal-footer">
            <button type="button" class="sup-modal-button" id="sup-logout-cancel">No</button>
            <a href="<?php echo esc_url(wp_logout_url(home_url('/login/'))); ?>" class="sup-modal-button sup-modal-button-primary" id="sup-logout-confirm">Logout</a>
        </div>
    </div>
</div>

<style>
/* Modal Styles */
.sup-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

.sup-modal-content {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 400px;
    overflow: hidden;
}

.sup-modal-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
}

.sup-modal-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    color: #333;
    text-align: center;
}

.sup-modal-body {
    padding: 20px;
}

.sup-modal-text {
    font-size: 16px;
    color: #555;
    margin: 0;
    text-align: center;
}

.sup-modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.sup-modal-button {
    padding: 8px 16px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
    border: 1px solid #ddd;
    background-color: #f8f9fa;
    color: #333;
    text-decoration: none;
}

.sup-modal-button-primary {
    background-color: #e74c3c;
    color: white;
    border-color: #e74c3c;
}

.sup-modal-button-primary:hover {
    background-color: #c0392b;
    border-color: #c0392b;
}
</style>

<script>
jQuery(document).ready(function($) {
    // Modal elements
    const logoutModal = $('#sup-logout-modal');
    const logoutTrigger = $('#sup-logout-trigger');
    const logoutCancel = $('#sup-logout-cancel');
    
    // Show modal when logout is clicked
    logoutTrigger.on('click', function(e) {
        e.preventDefault();
        logoutModal.css('display', 'flex');
    });
    
    // Hide modal when No is clicked
    logoutCancel.on('click', function() {
        logoutModal.css('display', 'none');
    });
    
    // Close modal when clicking outside content
    logoutModal.on('click', function(e) {
        if (e.target === this) {
            $(this).css('display', 'none');
        }
    });
    
    // Close modal with Escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            logoutModal.css('display', 'none');
        }
    });
});
</script>