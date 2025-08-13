<!-- Property Details Modal -->

<div id="propertyDetailsModal" class="property-modal">
    <div class="property-modal-content">
        <h1 class="property-title">Property Details</h1>
        <span class="close-property-modal">&times;</span>

        <div class="container">
            <div class="left-column">
                <!-- Image Gallery -->
                <div class="image-gallery-container">
                    <div class="thumbnail-gallery">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-4.png" 
                             onclick="changeImage(this.src, this)" 
                             alt="Gallery Image 1">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-5.png" 
                             onclick="changeImage(this.src, this)" 
                             alt="Gallery Image 2">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard-6.png" 
                             onclick="changeImage(this.src, this)" 
                             alt="Gallery Image 3">
                    </div>
                    <div class="main-image-container">
                        <img src="http://localhost/mary/wp-content/uploads/2025/08/lakeview-standard.png" 
                             id="mainPreview" 
                             class="main-image" 
                             alt="Main Image">
                    </div>
                </div>
                
                <!-- Property Header -->
                <div class="property-header">
                    <h1 class="property-title">Lakeview Premium Apartment</h1>
                    <p class="property-description">
                        Discover luxury living at the heart of the city with this stunning Lakeview Premium Apartment, 
                        offering breathtaking views of the lake and a modern, high-end finish throughout.
                    </p>
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
        </div>
    </div>
</div>

<style>
/* Property Details Modal Styles */
.property-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    overflow-y: auto;
    padding: 20px;
    box-sizing: border-box;
}

.property-modal-content {
    background-color: white;
    border-radius: 10px;
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.close-property-modal {
    position: absolute;
    top: 15px;
    right: 25px;
    font-size: 28px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
    transition: color 0.3s;
}

.close-property-modal:hover {
    color: #2271b1;
}

/* Main content container */
.container {
    display: flex;
    gap: 30px;
    margin-top: 20px;
}

.left-column {
    flex: 1;
}

/* Image gallery section */
.image-gallery-container {
    display: flex;
    gap: 15px;
    margin-bottom: 25px;
}

.thumbnail-gallery {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 80px;
}

.thumbnail-gallery img {
    width: 200px;
    height: 100px;
    object-fit: cover;
    border-radius: 5px;
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.thumbnail-gallery img:hover,
.thumbnail-gallery img.active {
    border-color: #2271b1;
}

.main-image-container {
    flex: 1;
    position: relative;
}

.main-image {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Property details section */
.property-header {
    margin-bottom: 20px;
}

.property-title {
    font-size: 28px;
    font-weight: 700;
    color: #222;
    margin-bottom: 5px;
}

.property-description {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

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

<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Get modal and buttons
    const modal = document.getElementById('propertyDetailsModal');
    const viewButtons = document.querySelectorAll('.view-details-btn');
    const closeBtn = document.querySelector('.close-property-modal');
    
    // Add click event to all view buttons
    /* viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Show the modal
            modal.style.display = 'block';
            
            // Set first thumbnail as active (if needed)
            const firstThumbnail = document.querySelector('.thumbnail-gallery img');
            if (firstThumbnail && !firstThumbnail.classList.contains('active')) {
                firstThumbnail.classList.add('active');
            }
        });
    }); */

    // Add click event to all view buttons
    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Show the property modal
            modal.style.display = 'block';
            
            // Hide the address book modal if it exists
            const addressBookModal = document.getElementById('clientDetailsModal');
            if (addressBookModal) {
                addressBookModal.style.display = 'none';
            }
            
            // Set first thumbnail as active (if needed)
            const firstThumbnail = document.querySelector('.thumbnail-gallery img');
            if (firstThumbnail && !firstThumbnail.classList.contains('active')) {
                firstThumbnail.classList.add('active');
            }
        });
    });
    
    // Close modal when clicking close button
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    
    // Close when clicking outside modal
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
    
    // Thumbnail image switching functionality
    function changeImage(src, clickedElement) {
        // Update main image
        document.getElementById('mainPreview').src = src;
        
        // Remove active class from all thumbnails
        const thumbnails = document.querySelectorAll('.thumbnail-gallery img');
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        
        // Add active class to clicked thumbnail
        clickedElement.classList.add('active');
    }
    
    // Attach click events to thumbnails (if not already in HTML)
    const thumbnails = document.querySelectorAll('.thumbnail-gallery img');
    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function() {
            changeImage(this.src, this);
        });
    });
});
</script>