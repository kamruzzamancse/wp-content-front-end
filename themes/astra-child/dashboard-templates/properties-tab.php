<?php
    $upload_dir = wp_upload_dir();
    $image_url  = $upload_dir['baseurl'];
?>

<div class="pt-toolbar-container">
  <div class="pt-left-section">
    <h1 class="ab-header-title">All Properties</h1>
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

  <div class="pt-right-section">
    <button class="pt-action-button pt-export-btn">Export</button>
    <button class="pt-action-button pt-add-task-btn">Add Task</button>
    <button class="pt-action-button pt-create-property-btn" onclick="openCreateModal()">Create Property</button>
  </div>
</div>

<div class="pt-property-container">
    <div class="pt-property-list">
        <!-- Property Example -->
        <div class="pt-property-item">
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard.png' ); ?>" alt="Lakeview Standard" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Standard Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium.png' ); ?>" alt="Lakeview Premium" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Premium Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-standard.png' ); ?>" alt="Lakeview Standard" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Standard Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-premium.png' ); ?>" alt="Lakeview Premium" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Premium Apartment</h3></a>
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
            <a href="?tab=property-details"><img src="<?php echo esc_url( $image_url . '/2025/08/lakeview-basic.png' ); ?>" alt="Lakeview Basic" class="pt-main-image"></a>
            <div class="pt-property-details">
                <a href="?tab=property-details"><h3 class="pt-property-title">Lakeview Basic Apartment</h3></a>
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

<h1 class="ab-header-title">Recent Document</h1>

<div class="pt-documents-container">
    <!-- Document 1 -->
    <div class="pt-document-card">
        <div class="pt-document-header">
            <div class="pt-document-icon">IMG</div>
            <div class="pt-document-name">Lease Agreement.jpg</div>
        </div>
        <div class="pt-document-size">2.3MB</div>
        <div class="pt-document-info">Processed: 1 week ago</div>
        <div class="pt-document-actions">
            <button class="pt-action-btn">View</button>
            <button class="pt-action-btn">Download</button>
        </div>
    </div>

    <!-- Document 2 -->
    <div class="pt-document-card">
        <div class="pt-document-header">
            <div class="pt-document-icon">IMG</div>
            <div class="pt-document-name">Lease Agreement.jpg</div>
        </div>
        <div class="pt-document-size">2.3MB</div>
        <div class="pt-document-info">Processed 1 week ago</div>
        <div class="pt-document-actions">
            <button class="pt-action-btn">View</button>
            <button class="pt-action-btn">Download</button>
        </div>
    </div>

    <!-- Document 3 -->
    <div class="pt-document-card">
        <div class="pt-document-header">
            <div class="pt-document-icon">IMG</div>
            <div class="pt-document-name">Lease Agreement.jpg</div>
        </div>
        <div class="pt-document-size">2.3MB</div>
        <div class="pt-document-info">Processed 1 week ago</div>
        <div class="pt-document-actions">
            <button class="pt-action-btn">View</button>
            <button class="pt-action-btn">Download</button>
        </div>
    </div>

    <!-- Document 4 -->
    <div class="pt-document-card">
        <div class="pt-document-header">
            <div class="pt-document-icon">IMG</div>
            <div class="pt-document-name">Lease Agreement.jpg</div>
        </div>
        <div class="pt-document-size">2.3MB</div>
        <div class="pt-document-info">Processed 1 week ago</div>
        <div class="pt-document-actions">
            <button class="pt-action-btn">View</button>
            <button class="pt-action-btn">Download</button>
        </div>
    </div>

    <!-- Document 5 -->
    <div class="pt-document-card">
        <div class="pt-document-header">
            <div class="pt-document-icon">IMG</div>
            <div class="pt-document-name">Lease Agreement.jpg</div>
        </div>
        <div class="pt-document-size">2.3MB</div>
        <div class="pt-document-info">Processed 1 week ago</div>
        <div class="pt-document-actions">
            <button class="pt-action-btn">View</button>
            <button class="pt-action-btn">Download</button>
        </div>
    </div>

    <!-- Document 6 -->
    <div class="pt-document-card">
        <div class="pt-document-header">
            <div class="pt-document-icon">IMG</div>
            <div class="pt-document-name">Lease Agreement.jpg</div>
        </div>
        <div class="pt-document-size">2.3MB</div>
        <div class="pt-document-info">Processed 1 week ago</div>
        <div class="pt-document-actions">
            <button class="pt-action-btn">View</button>
            <button class="pt-action-btn">Download</button>
        </div>
    </div>
</div>

<?php include locate_template('dashboard-templates/property-create-modal.php'); ?>