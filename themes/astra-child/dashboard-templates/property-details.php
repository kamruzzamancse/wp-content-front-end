<div class="pd-property-details-back-link">
    <a href="http://localhost/mary/realtor-dashboard/?tab=properties" class="pd-back-link">
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
                <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-4.png" onclick="changeImage(this.src)" alt="Gallery Image 1">
                <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-5.png" onclick="changeImage(this.src)" alt="Gallery Image 2">
                <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-6.png" onclick="changeImage(this.src)" alt="Gallery Image 3">
            </div>
            <div class="pd-main-image-container">
                <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard.png" id="pd-mainPreview" class="pd-main-image" alt="Main Image">
            </div>
        </div>

        <div class="pd-property-title">Lakeview Standard Apartment</div>
        <div class="pd-property-description">
            Discover luxury living at the heart of the city with this stunning Lakeview Premium Apartment, offering breathtaking views of the lake and a modern, high-end finish throughout.
        </div>

        <div class="pd-property-features">
            <div class="pd-feature-box"><i class="fas fa-map-marker-alt"></i> Le Marais, Paris, France</div>
            <div class="pd-feature-box"><i class="fas fa-building"></i> Apartment</div>
            <div class="pd-feature-box"><i class="fas fa-euro-sign"></i> 450,000</div>
            <div class="pd-feature-box"><i class="fas fa-bed"></i> 3 Bedrooms</div>
            <div class="pd-feature-box"><i class="fas fa-bath"></i> 2 Bathrooms</div>
            <div class="pd-feature-box"><i class="fas fa-ruler-combined"></i> 140 m²</div>
            <div class="pd-feature-box"><i class="fas fa-couch"></i> Fully Furnished</div>
            <div class="pd-feature-box"><i class="fas fa-parking"></i> Underground Parking</div>
        </div>
    </div>

    <div class="pd-right-column">
        <div class="pd-right-box pd-assigned-client">
            <strong style="font-size: 16px; margin-bottom: 10px; display: block;">Assigned Client</strong>
            <div class="pd-client-name">
                <img style="border-radius: 50%; width:50px; margin-right: 12px" src="http://localhost/mary/wp-content/uploads/2025/08/client-photo.jpg" alt="Client Photo">
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
                <textarea rows="4" readonly>Just a quick reminder to review the listings I sent and let me know which properties you’d like to visit. Also, please have your pre-approval letter ready if you’re planning to make an offer soon!</textarea>
            </div>
            <div class="pd-pdf-file">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="PDF Icon">
                <div>PDF File</div>
            </div>
        </div>
    </div>
</div>

<?php include locate_template('dashboard-templates/property-edit-modal.php'); ?>
