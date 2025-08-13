<!-- Modal Structure -->
<div class="modal-overlay" id="clientDetailsModal">
    <div class="modal-container">
        <div class="modal-header">
            <h1 class="ab-header-title" style="margin-bottom: 20px">Client Details</h1>
            <div class="client-profile-container">
                <img class="client-avatar" src="http://localhost/mary/wp-content/uploads/2025/08/client-photo.jpg" alt="Client Photo">
                <span class="client-info"><span class="client-name">Afsana Hamid mim</span><br>Client</span>
            </div>
        </div>
        <div class="modal-body">
            <table class="client-details">
                <tr>
                    <td>Client Name</td>
                    <td>Afsana Hamid mim</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>Support.info@gmail.com</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>999-888-666</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>Le Marais, Paris</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>11 Oct 24, 1995</td>
                </tr>
                <tr>
                    <td>House Closing Date</td>
                    <td>11 Aug 25, 2025</td>
                </tr>
            </table>
            <h2 class="modal-title" style="margin-bottom: 10px">Assigned Property</h2>
            <div class="property-item-modal">
                <a href="#"><img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard.png" alt="Lakeview Standard" class="main-image client-details-property-details"></a>
                <div class="property-details">
                    <a href="?tab=property-details"><h3 class="property-title">Lakeview Standard Apartment</h3></a>
                    <span class="property-date" style="display: none;">2025-07-20</span>
                    <div class="property-price">$1,600</div>
                    <div class="property-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Midtown, New York</span>
                    </div>
                    <div class="gallery">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-4.png" alt="Gallery Image 1">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-5.png" alt="Gallery Image 2">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-6.png" alt="Gallery Image 3">
                    </div>
                </div>
            </div>
            
            <div class="suggested-client-section">
                <h2 class="modal-title" style="margin: 20px 0 10px;">Suggested Clients</h2>
                <div class="client-card-container">
                    <!-- Client 1 -->
                    <div class="client-card">
                        <img class="client-avatar" src="http://localhost/mary/wp-content/uploads/2025/08/client-photo.jpg" alt="Client Photo">
                        <div class="client-info">
                            <div class="client-name">Ariyana</div>
                            <div class="client-role">Client</div>
                            <div class="client-location">Le Marais, Paris</div>
                        </div>
                    </div>

                    <!-- Client 2 -->
                    <div class="client-card">
                        <img class="client-avatar" src="http://localhost/mary/wp-content/uploads/2025/08/client-photo.jpg" alt="Client Photo">
                        <div class="client-info">
                            <div class="client-name">Ayesha</div>
                            <div class="client-role">Client</div>
                            <div class="client-location">Le Marais, Paris</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button class="close-btn" id="closeClientDetailsModal">Close</button>
        </div>
    </div>
</div>

<?php //include locate_template('dashboard-templates/property-details-modal.php'); ?>

<!-- Property Details Modal Skeleton (initially hidden) -->
<div class="modal-overlay" id="propertyDetailsModal" style="display: none;">
    <div class="modal-container large">
        <div class="modal-header">
            <h2 class="modal-title">Property Details</h2>
            <button class="close-btn" id="closePropertyDetailsModal">&times;</button>
        </div>
        <div class="modal-body property-details-content">
            <!-- AJAX content will load here -->
        </div>
    </div>
</div>
