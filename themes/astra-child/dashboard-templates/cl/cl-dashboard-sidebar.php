<?php
/**
 * Dashboard Sidebar Navigation with Logout Confirmation Modal
 */
$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
?>

<aside class="dashboard-sidebar" id="dashboard-sidebar-cl">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('dashboard-sidebar-cl');
    const toggleBtn = document.getElementById('sidebar-toggle-cl');
    const dashboardContent = document.querySelector('.dashboard-content');

    // Function to update dashboard layout ONLY on desktop
    function updateDashboardLayout() {
        // Apply only if screen width >= 768px (desktop)
        if (window.matchMedia("(min-width: 768px)").matches) {
            if (sidebar.classList.contains('collapsed')) {
                dashboardContent.style.display = 'grid';
                dashboardContent.style.gridTemplateColumns = '0px 1fr';
                dashboardContent.style.minHeight = 'calc(100vh - 65px)';
            } else {
                dashboardContent.style.display = 'grid';
                dashboardContent.style.gridTemplateColumns = '250px 1fr';
                dashboardContent.style.minHeight = 'calc(100vh - 65px)';
            }
        } else {
            // On mobile, remove inline styles so content takes full width
            dashboardContent.style.display = '';
            dashboardContent.style.gridTemplateColumns = '';
            dashboardContent.style.minHeight = '';
        }
    }

    // Initial layout update
    updateDashboardLayout();

    // Toggle sidebar and update layout
    toggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        sidebar.classList.toggle('collapsed');
        updateDashboardLayout();
    });

    // Update layout on window resize
    window.addEventListener('resize', updateDashboardLayout);

    // Logout modal
    const logoutModal = document.getElementById('sup-cl-logout-modal');
    const logoutTrigger = document.getElementById('sup-cl-logout-trigger');
    const logoutCancel = document.getElementById('sup-cl-logout-cancel');

    logoutTrigger.addEventListener('click', function(e) {
        e.preventDefault();
        logoutModal.style.display = 'flex';
    });

    logoutCancel.addEventListener('click', function() {
        logoutModal.style.display = 'none';
    });

    logoutModal.addEventListener('click', function(e) {
        if (e.target === logoutModal) {
            logoutModal.style.display = 'none';
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            logoutModal.style.display = 'none';
        }
    });
});
</script>


