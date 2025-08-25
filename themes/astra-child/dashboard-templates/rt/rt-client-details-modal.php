<!-- Client Details Modal Structure -->
<?php
    $upload_dir = wp_upload_dir();
    $image_url = $upload_dir['baseurl'];
    $client_id      = 123; // Example ID, replace dynamically
    // Use the WordPress site name for company name
    $company_name = get_bloginfo('name');
    if (empty($company_name)) {
        $role_names = [
            'realtor' => 'Realtor',
            'client' => 'Client',
            'administrator' => 'Admin'
        ];
        $user_roles = $current_user->roles;
        $company_name = $role_names[$user_roles[0]] ?? ucfirst($user_roles[0]);
    }
?>
<div class="modal-overlay-address-book" id="clientDetailsModal">
    <div class="modal-container">
        <div class="modal-header-realtor">
            <h1 class="header-title" style="margin-bottom: 20px">Client Details</h1>
            <div class="client-profile-container">
                <img class="client-avatar" src="<?php echo esc_url( $image_url . '/2025/08/client-photo.jpg' ); ?>" alt="Client Photo">
                <span class="client-info">
                    <span class="client-name"><?php echo esc_html($current_user->display_name); ?></span><br>
                    <?php echo esc_html($company_name); ?>
                </span>
            </div>
        </div>
        <div class="modal-body">
            <table class="client-details">
                <tr><td>Client Name</td><td>Afsana Hamid Mim</td></tr>
                <tr><td>Email</td><td>Support.info@gmail.com</td></tr>
                <tr><td>Phone Number</td><td>999-888-666</td></tr>
                <tr><td>Address</td><td>Le Marais, Paris</td></tr>
                <tr><td>Date of Birth</td><td>11 Oct 24, 1995</td></tr>
                <tr><td>House Closing Date</td><td>11 Aug 25, 2025</td></tr>
            </table>

            <h2 class="modal-title" style="margin-bottom: 10px">Assigned Property</h2>
            <div class="property-item-modal">
                <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard.png' ); ?>" alt="Lakeview Standard" class="main-image client-details-property-details">
                    <div class="property-details">
                    <h3 class="property-title">Lakeview Standard Apartment</h3>
                    <div class="property-price">$1,600</div>
                    <div class="property-location">
                        <span class="dashicons dashicons-location"></span> Midtown, New York
                    </div>
                    <div class="gallery">
                        <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-4.png' ); ?>" alt="Gallery Image 1">
                        <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-5.png' ); ?>" alt="Gallery Image 2">
                        <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-6.png' ); ?>" alt="Gallery Image 3">
                    </div>
                    <button class="view-details-btn">View Details</button>
                </div>
            </div>

            <h2 class="modal-title" style="margin: 20px 0 10px;">Suggested Clients</h2>
            <div class="client-card-container">
                <div class="client-card">
                    <img class="client-avatar" src="<?php echo esc_url( $image_url . '/2025/08/client-photo.jpg' ); ?>" alt="Client Photo">
                    <div class="client-info">
                        <div class="client-name">Ariyana</div>
                        <div class="client-role">Client</div>
                        <div class="client-location">Le Marais, Paris</div>
                    </div>
                </div>
                <div class="client-card">
                    <img class="client-avatar" src="<?php echo esc_url( $image_url . '/2025/08/client-photo.jpg' ); ?>" alt="Client Photo">
                    <div class="client-info">
                        <div class="client-name">Ayesha</div>
                        <div class="client-role">Client</div>
                        <div class="client-location">Le Marais, Paris</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="close-btn" id="closeClientDetailsModal">Close</button>
        </div>
    </div>
</div>

<?php 
    include locate_template('dashboard-templates/rt/rt-property-details-modal.php');
?>