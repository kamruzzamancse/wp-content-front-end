<?php
/**
 * Dashboard Sidebar Navigation with Logout Confirmation Modal
 */
$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
?>

<aside class="dashboard-sidebar" id="dashboard-sidebar-am">
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
            <a href="#" id="sup-am-logout-trigger">
                <span class="dashicons dashicons-migrate"></span>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>


<!-- Logout Confirmation Modal -->
<div class="sup-am-modal" id="sup-am-logout-modal">
    <div class="sup-am-modal-content">
        <div class="sup-am-modal-header">
            <h2 class="sup-am-modal-title">Confirm Logout</h2>
        </div>
        <div class="sup-am-modal-body">
            <p class="sup-am-modal-text">Are you sure you want to logout?</p>
        </div>
        <div class="sup-am-modal-footer">
            <button type="button" class="sup-am-modal-button" id="sup-am-logout-cancel">No</button>
            <a href="<?php echo esc_url(wp_logout_url(home_url('/login/'))); ?>" class="sup-am-modal-button sup-am-modal-button-primary" id="sup-am-logout-confirm">Logout</a>
        </div>
    </div>
</div>

<style>
/* Modal Styles */
.sup-am-modal {
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

.sup-am-modal-content {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 400px;
    overflow: hidden;
}

.sup-am-modal-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
}

.sup-am-modal-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    color: #333;
    text-align: center;
}

.sup-am-modal-body {
    padding: 20px;
}

.sup-am-modal-text {
    font-size: 16px;
    color: #555;
    margin: 0;
    text-align: center;
}

.sup-am-modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.sup-am-modal-button {
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

.sup-am-modal-button-primary {
    background-color: #e74c3c;
    color: white;
    border-color: #e74c3c;
}

.sup-am-modal-button-primary:hover {
    background-color: #c0392b;
    border-color: #c0392b;
}

.dashboard-sidebar.collapsed {
    width: 5px;
    overflow: hidden;
}

.dashboard-sidebar.collapsed .sidebar-menu span {
    display: none;
}
</style>

<script>
jQuery(document).ready(function($) {
    // Modal elements
    const logoutModal = $('#sup-am-logout-modal');
    const logoutTrigger = $('#sup-am-logout-trigger');
    const logoutCancel = $('#sup-am-logout-cancel');
    
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('dashboard-sidebar-am');
    const toggleBtn = document.getElementById('sidebar-toggle-am');
    const dashboardContent = document.querySelector('.dashboard-content');

    // Sidebar toggle
    function updateDashboardLayout() {
        if (window.innerWidth >= 768) {
            dashboardContent.style.display = 'grid';
            dashboardContent.style.gridTemplateColumns = sidebar.classList.contains('collapsed') ? '0px 1fr' : '250px 1fr';
            dashboardContent.style.minHeight = 'calc(100vh - 65px)';
        } else {
            dashboardContent.style.display = '';
            dashboardContent.style.gridTemplateColumns = '';
            dashboardContent.style.minHeight = '';
        }
    }
    updateDashboardLayout();
    toggleBtn.addEventListener('click', e => {
        e.preventDefault();
        sidebar.classList.toggle('collapsed');
        updateDashboardLayout();
    });
    window.addEventListener('resize', updateDashboardLayout);

    // Logout modal
    const logoutModal = document.getElementById('sup-am-logout-modal');
    const logoutTrigger = document.getElementById('sup-am-logout-trigger');
    const logoutCancel = document.getElementById('sup-am-logout-cancel');

    logoutTrigger.addEventListener('click', e => {
        e.preventDefault();
        logoutModal.style.display = 'flex';
    });
    logoutCancel.addEventListener('click', () => logoutModal.style.display = 'none');
    logoutModal.addEventListener('click', e => { if (e.target === logoutModal) logoutModal.style.display = 'none'; });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') logoutModal.style.display = 'none'; });
});
</script>