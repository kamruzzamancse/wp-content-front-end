<?php
    $upload_dir = wp_upload_dir();
    $image_url  = $upload_dir['baseurl'];
?>

<div class="pt-toolbar-container">
    
    <div class="pt-left-section">
            <h1 class="header-title">All Properties</h1>
            <div class="pt-search-box">
                <span class="pt-search-icon">🔍</span>
                <input type="text" class="pt-search-input" placeholder="Search: Property Name" />
            </div>
        <div class="pt-sort-container">
            <select class="pt-sort-select">
            <option value="">Sort by</option>
            <option value="price-asc">Price: Low to High</option>
            <option value="price-desc">Price: High to Low</option>
            <option value="name-asc">Name: A to Z</option>
            <option value="name-desc">Name: Z to A</option>
            <option value="date-asc">Date: Oldest First</option>
            <option value="date-desc">Date: Newest First</option>
            </select>
        </div>
    </div>

    <!-- <div class="pt-right-section">
        <button class="pt-action-button pt-export-btn">
            <span class="dashicons dashicons-download"></span> Export
        </button>
        <button class="pt-action-button pt-add-task-btn">
            <span class="dashicons dashicons-plus-alt"></span> Add Task
        </button>
        <button class="pt-action-button pt-create-property-btn" onclick="openCreateModal()">
            <span class="dashicons dashicons-admin-home"></span> Create Property
        </button>
    </div> -->

</div>

<div class="pt-property-container">
    <div class="pt-property-list">
        <!-- Property Example -->
        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-08-15</span>
                <div class="pt-property-price">$1,100</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Downtown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-8.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9-1.png' ); ?>" alt="Gallery Image 3">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9.png' ); ?>" alt="Gallery Image 4">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-8.png' ); ?>" alt="Gallery Image 5">
                </div>
            </div>
        </div>

        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard.png' ); ?>" alt="Lakeview Standard" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Standard Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-07-20</span>
                <div class="pt-property-price">$1,600</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Midtown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-4.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-5.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-6.png' ); ?>" alt="Gallery Image 3">
                </div>
            </div>
        </div>

        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium.png' ); ?>" alt="Lakeview Premium" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Premium Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-08-01</span>
                <div class="pt-property-price">$2,900</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Uptown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium-1.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium-2.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium-3.png' ); ?>" alt="Gallery Image 3">
                </div>
            </div>
        </div>

        <!-- 4th Property -->
        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-05-15</span>
                <div class="pt-property-price">$1,100</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Downtown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-8.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9-1.png' ); ?>" alt="Gallery Image 3">
                </div>
            </div>
        </div>

        <!-- 5th Property -->
        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-06-14</span>
                <div class="pt-property-price">$1,800</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Downtown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-8.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9-1.png' ); ?>" alt="Gallery Image 3">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-8.png' ); ?>" alt="Gallery Image 2">
                </div>
            </div>
        </div>

        <!-- 6th Property -->
        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard.png' ); ?>" alt="Lakeview Standard" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Standard Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-05-19</span>
                <div class="pt-property-price">$1,800</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Midtown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-4.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-5.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard-6.png' ); ?>" alt="Gallery Image 3">
                </div>
            </div>
        </div>

        <!-- 7th Property -->
        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium.png' ); ?>" alt="Lakeview Premium" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Premium Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-02-15</span>
                <div class="pt-property-price">$2,500</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Uptown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium-1.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium-2.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium-3.png' ); ?>" alt="Gallery Image 3">
                </div>
            </div>
        </div>

        <!-- 8th Property -->
        <div class="pt-property-item">
            <a href="?tab=cl-property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=cl-property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
                <span class="pt-property-date" style="display: none;">2025-08-23</span>
                <div class="pt-property-price">$1,400</div>
                <div class="pt-property-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Downtown, New York</span>
                </div>
                <div class="pt-gallery">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9.png' ); ?>" alt="Gallery Image 1">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-8.png' ); ?>" alt="Gallery Image 2">
                    <img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic-9-1.png' ); ?>" alt="Gallery Image 3">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* ================================
   PROPERTY TOOLBAR STYLES
=================================== */
.pt-toolbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding: 15px;
    background: #f8f8f8;
    border-bottom: 1px solid #ddd;
    gap: 10px;
}

.pt-left-section {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.header-title {
    font-size: 1.5rem;
    margin: 0;
}

.pt-search-box {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px 10px;
    background: #fff;
}

.pt-search-icon {
    margin-right: 5px;
}

.pt-search-input {
    border: none;
    outline: none;
    width: 150px;
    font-size: 14px;
}

.pt-sort-container select {
    padding: 5px;
    font-size: 14px;
}

/* ================================
   PROPERTY LIST GRID
=================================== */
.pt-property-container {
    padding: 20px;
}

.pt-property-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.pt-property-item {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pt-property-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.pt-main-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
    display: block;
}

.pt-property-details {
    padding: 15px;
}

.pt-property-title {
    font-size: 1.1rem;
    margin: 0 0 8px;
    color: #333;
}

.pt-property-price {
    font-size: 1rem;
    font-weight: bold;
    color: #27ae60;
    margin-bottom: 8px;
}

.pt-property-location {
    font-size: 0.9rem;
    color: #666;
    display: flex;
    align-items: center;
    gap: 5px;
    margin-bottom: 10px;
}

.pt-gallery {
    display: flex;
    gap: 5px;
    flex-wrap: wrap;
}

.pt-gallery img {
    width: calc(33.33% - 4px);
    height: 60px;
    object-fit: cover;
    border-radius: 5px;
}

/* ================================
   RESPONSIVE DESIGN
=================================== */

/* Tablets */
@media (max-width: 992px) {
    .pt-toolbar-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .pt-search-input {
        width: 120px;
    }
}

/* Mobile */
@media (max-width: 600px) {
    .header-title {
        font-size: 1.2rem;
    }

    .pt-property-list {
        grid-template-columns: 1fr; /* Single column */
    }

    .pt-main-image {
        height: 200px;
    }

    .pt-gallery img {
        width: calc(50% - 4px); /* 2 images per row */
    }

    .pt-search-input {
        width: 100px;
    }
}

/* Extra Small Screens */
@media (max-width: 400px) {
    .pt-gallery img {
        width: 100%; /* Full width images */
    }
    .pt-property-container{
        padding: 10px;
    }
}

</style>