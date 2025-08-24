<?php
/**
 * Dashboard Sidebar Navigation with Logout Confirmation Modal
 */
$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
?>

<aside class="dashboard-sidebar">
    <ul class="sidebar-menu">
        <li class="<?php echo $current_tab === 'dashboard' ? 'active' : ''; ?>">
            <a href="?tab=dashboard">
                <span class="dashicons dashicons-admin-home"></span>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="<?php echo $current_tab === 'properties' ? 'active' : ''; ?>">
            <a href="?tab=properties">
                <span class="dashicons dashicons-building"></span>
                <span>Properties</span>
            </a>
        </li>
        <li class="<?php echo $current_tab === 'documents' ? 'active' : ''; ?>">
            <a href="?tab=documents">
                <span class="dashicons dashicons-book-alt"></span>
                <span>Documents</span>
            </a>
        </li>
        <li class="<?php echo $current_tab === 'messages' ? 'active' : ''; ?>">
            <a href="?tab=messages">
                <span class="dashicons dashicons-email"></span>
                <span>Message</span>
            </a>
        </li>
        <li class="<?php echo $current_tab === 'settings' ? 'active' : ''; ?>">
            <a href="?tab=settings">
                <span class="dashicons dashicons-admin-settings"></span>
                <span>Setting</span>
            </a>
        </li>
        <li>
            <a href="#" id="sup-cl-logout-trigger">
                <span class="dashicons dashicons-migrate"></span>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>

<!-- Logout Confirmation Modal -->
<div class="sup-cl-modal" id="sup-cl-logout-modal">
    <div class="sup-cl-modal-content">
        <div class="sup-cl-modal-header">
            <h2 class="sup-cl-modal-title">Confirm Logout</h2>
        </div>
        <div class="sup-cl-modal-body">
            <p class="sup-cl-modal-text">Are you sure you want to logout?</p>
        </div>
        <div class="sup-cl-modal-footer">
            <button type="button" class="sup-cl-modal-button" id="sup-cl-logout-cancel">No</button>
            <a href="<?php echo esc_url(wp_logout_url(home_url('/login/'))); ?>" class="sup-cl-modal-button sup-cl-modal-button-primary" id="sup-cl-logout-confirm">Logout</a>
        </div>
    </div>
</div>

<style>
/* Modal Styles */
.sup-cl-modal {
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

.sup-cl-modal-content {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 400px;
    overflow: hidden;
}

.sup-cl-modal-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
}

.sup-cl-modal-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    color: #333;
    text-align: center;
}

.sup-cl-modal-body {
    padding: 20px;
}

.sup-cl-modal-text {
    font-size: 16px;
    color: #555;
    margin: 0;
    text-align: center;
}

.sup-cl-modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.sup-cl-modal-button {
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

.sup-cl-modal-button-primary {
    background-color: #e74c3c;
    color: white;
    border-color: #e74c3c;
}

.sup-cl-modal-button-primary:hover {
    background-color: #c0392b;
    border-color: #c0392b;
}
</style>

<script>
jQuery(document).ready(function($) {
    // Modal elements
    const logoutModal = $('#sup-cl-logout-modal');
    const logoutTrigger = $('#sup-cl-logout-trigger');
    const logoutCancel = $('#sup-cl-logout-cancel');
    
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