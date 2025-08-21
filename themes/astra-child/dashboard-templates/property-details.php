<?php 
    $upload_dir = wp_upload_dir(); 
    $image_url = $upload_dir['baseurl']; 
    $site_url = site_url();
?>

<div class="back-link">
    <a href="<?php echo esc_url( $site_url . '/realtor-dashboard/?tab=properties' ); ?>" class="pd-back-link">
        <span class="pd-back-link__arrow">←</span>
        <h1 class="pd-back-link__title">Property Details</h1>
    </a>
</div>

<div class="pd-container">
    <div class="pd-left-column">
        <div class="pd-top-controls">
            <button class="pd-btn pd-btn-edit" onclick="openEditModal()">Edit</button>
            <button class="pd-btn pd-btn-delete">Delete</button>
        </div>

        <div class="pd-image-gallery-container">
            <div class="pd-thumbnail-gallery">
                <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-4.png' ); ?>" onclick="changeImage(this.src)" alt="Gallery Image 1">
                <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-5.png' ); ?>" onclick="changeImage(this.src)" alt="Gallery Image 2">
                <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-6.png' ); ?>" onclick="changeImage(this.src)" alt="Gallery Image 3">
            </div>
            <div class="pd-main-image-container">
                <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard.png' ); ?>" id="pd-mainPreview" class="pd-main-image" alt="Main Image">
            </div>
        </div>

        <div class="pd-property-title">Lakeview Standard Apartment</div>
        <div class="pd-property-description">
            Discover luxury living at the heart of the city with this stunning Lakeview Premium Apartment, offering breathtaking views of the lake and a modern, high-end finish throughout.
        </div>

        <!-- Property Features Grid -->
        <div class="property-features">
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-location"></span> Location</div>
                <div class="feature-value">Le Marais, Paris, France</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-admin-home"></span> Property Type</div>
                <div class="feature-value">Apartment</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-money"></span> Price</div>
                <div class="feature-value">450,000</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-admin-users"></span> Bedrooms</div>
                <div class="feature-value">3</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-admin-tools"></span> Bathrooms</div>
                <div class="feature-value">2</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-randomize"></span> Property Size</div>
                <div class="feature-value">140 m²</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-admin-site"></span> Furnished</div>
                <div class="feature-value">Fully Furnished</div>
            </div>
            <div class="feature-box">
                <div class="feature-label"><span class="dashicons dashicons-car"></span> Parking Available</div>
                <div class="feature-value">Underground</div>
            </div>
        </div>
    </div>

    <div class="pd-right-column">
        <div class="pd-right-box pd-assigned-client">
            <strong style="font-size: 16px; margin-bottom: 10px; display: block;">Assigned Client</strong>
            <div class="pd-client-name">
                <img style="border-radius: 50%; width:50px; margin-right: 12px" src="<?php echo esc_url( $image_url . '/2025/08/client-photo.jpg' ); ?>" alt="Client Photo">
                Afsana Hamid mim
            </div>
            <div class="pd-info-row"><span>Phone Number:</span><span>999-888-666</span></div>
            <div class="pd-info-row"><span>Email:</span><span>support.info@gmail.com</span></div>
            <div class="pd-info-row"><span>Address:</span><span>Le Marais, Paris, France</span></div>
            <div class="pd-info-row"><span>Added Date:</span><span>10 June, 2025</span></div>
            <div class="pd-info-row"><span>Last Update:</span><span>28 June, 2025</span></div>
        </div>

        <div class="pd-right-box pd-task-details">
            <strong style="font-size: 16px; margin-bottom: 10px; display: block;">Task Details</strong>
            <div class="pd-task-row"><label>Property Name</label><span>1234 Elm Street, NY 10001</span></div>
            <div class="pd-task-row"><label>Document Title</label><span>Final Inspection Report</span></div>
            <div class="pd-task-row"><label>Document Type</label><span>Inspection Report</span></div>
            <div class="pd-task-row"><label>Due Date</label><span>11 Oct, 2025</span></div>
            <div class="pd-task-notes">
                <label>Notes</label>
                <textarea rows="4" readonly>Just a quick reminder to review the listings I sent and let me know which properties you'd like to visit. Also, please have your pre-approval letter ready if you're planning to make an offer soon!</textarea>
            </div>
            <div class="pd-pdf-file">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="PDF Icon">
                <div>PDF File</div>
            </div>
        </div>
    </div>
</div>

<?php include locate_template('dashboard-templates/property-edit-modal.php'); ?>


<style>

/* Property features grid - 2 rows */
/* Property Features Grid - Exact Match to Screenshot */
.property-features {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-top: 20px;
}

.feature-box {
    display: flex;
    flex-direction: column;
    padding: 12px;
    background-color: #f5f5f5;
    border-radius: 6px;
    min-height: 60px;
    box-sizing: border-box;
}

.feature-label {
    font-size: 13px;
    color: #666;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.feature-value {
    font-size: 15px;
    font-weight: 500;
    color: #333;
    padding-left: 28px;
}

/* Specific icon colors */
.dashicons-location { color: #e74c3c; }
.dashicons-admin-home { color: #3498db; }
.dashicons-money { color: #2ecc71; }
.dashicons-admin-users { color: #9b59b6; }
.dashicons-admin-tools { color: #1abc9c; }
.dashicons-randomize { color: #f39c12; }
.dashicons-admin-site { color: #d35400; }
.dashicons-car { color: #27ae60; }

/* Responsive adjustments */
@media (max-width: 1024px) {
    .property-features {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .property-features {
        grid-template-columns: 1fr;
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }
    
    .image-gallery-container {
        flex-direction: column-reverse;
    }
    
    .thumbnail-gallery {
        flex-direction: row;
        width: 100%;
        overflow-x: auto;
        padding-bottom: 10px;
    }
    
    .property-features {
        grid-template-columns: 1fr;
    }
    
    .property-modal-content {
        padding: 15px;
    }
}
</style>