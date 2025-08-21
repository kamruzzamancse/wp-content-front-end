<?php 
    $upload_dir = wp_upload_dir(); 
    $image_url = $upload_dir['baseurl']; 
?>
<div class="back-link">
    <a href="?tab=settings" class="pd-back-link">
        <span class="pd-back-link__arrow">←</span>
        <h1 class="header-title">Settings</h1>
    </a>
</div>

<div class="piv-realtor-profile-container">
    <div class="piv-profile-header">
        <h2>Personal Information</h2>
        <a href="?tab=rt-settings-pi-edit" class="piv-edit-button-link">
            <button class="piv-edit-button">Edit Profile</button>
        </a>
    </div>
    
    <div class="piv-profile-content">
        <div class="piv-profile-pic-container">
            <img class="realtor-avatar" src=<?php echo esc_url( $image_url . '/2025/08/client-photo.jpg' ); ?> alt="Realtor Profile Pic">
            <span class="user-role-name">Realtor</span>
        </div>
        
        <div class="piv-profile-details">
            <div class="piv-detail-row">
                <span class="piv-detail-label">Full Name:</span>
                <span class="piv-detail-value">Anisur Rahman</span>
            </div>
            
            <div class="piv-detail-row">
                <span class="piv-detail-label">Broker Number:</span>
                <span class="piv-detail-value">BRK-2023-5876</span>
            </div>
            
            <div class="piv-detail-row">
                <span class="piv-detail-label">Email:</span>
                <span class="piv-detail-value">anis@gmail.com</span>
            </div>
            
            <div class="piv-detail-row">
                <span class="piv-detail-label">Company Name:</span>
                <span class="piv-detail-value">Prime Realty Associates</span>
            </div>
        </div>
    </div>
</div>