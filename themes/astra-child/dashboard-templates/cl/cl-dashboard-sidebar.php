<?php
/**
 * Client Dashboard Sidebar Component
 */
$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'dashboard';
?>

<aside class="cl-ds-sidebar">
    <div class="cl-ds-header">
        <h2>SynchroNest</h2>
        <p>SINY SYNCHEL SINY AHEAD</p>
    </div>
    
    <ul class="cl-ds-menu">
        <li class="<?php echo $current_tab === 'dashboard' ? 'active' : ''; ?>">
            <a href="?tab=dashboard">
                <span class="cl-ds-checkbox">- [ ]</span> Dashboard
            </a>
        </li>
        <li class="<?php echo $current_tab === 'bookings' ? 'active' : ''; ?>">
            <a href="?tab=bookings">
                <span class="cl-ds-checkbox">- [x]</span> My Property
            </a>
        </li>
        <li class="<?php echo $current_tab === 'favorites' ? 'active' : ''; ?>">
            <a href="?tab=favorites">
                <span class="cl-ds-checkbox">- [ ]</span> Document
            </a>
        </li>
        <li class="<?php echo $current_tab === 'messages' ? 'active' : ''; ?>">
            <a href="?tab=messages">
                <span class="cl-ds-checkbox">- [x]</span> Messages
            </a>
        </li>
        <li class="<?php echo $current_tab === 'settings' ? 'active' : ''; ?>">
            <a href="?tab=settings">
                <span class="cl-ds-checkbox">- [ ]</span> Settings
            </a>
        </li>
        <li>
            <a href="#" id="cl-ds-logout-trigger">
                <span class="cl-ds-checkbox">- [ ]</span> Logout
            </a>
        </li>
    </ul>
</aside>

<!-- Logout Confirmation Modal -->
<div class="cl-ds-modal" id="cl-ds-logout-modal">
    <div class="cl-ds-modal-content">
        <h2>Confirm Logout</h2>
        <p>Are you sure you want to logout?</p>
        <div class="cl-ds-modal-actions">
            <button type="button" id="cl-ds-cancel-btn">No</button>
            <a href="<?php echo esc_url(wp_logout_url(home_url('/login/'))); ?>" class="cl-ds-confirm-btn">Logout</a>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($){
    const modal = $('#cl-ds-logout-modal');
    $('#cl-ds-logout-trigger').on('click', function(e){
        e.preventDefault();
        modal.fadeIn();
    });
    $('#cl-ds-cancel-btn').on('click', function(){
        modal.fadeOut();
    });
    $(document).on('keydown', function(e){
        if(e.key === "Escape") modal.fadeOut();
    });
    modal.on('click', function(e){
        if(e.target === this) modal.fadeOut();
    });
});
</script>