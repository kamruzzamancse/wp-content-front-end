<div class="document-oversight">
    <div class="do-header">
        <h1>Document Oversight</h1>
        <p>View and manage all uploaded documents in the system</p>
    </div>

    <!-- Stats Cards -->
    <div class="do-stats-grid">
        <div class="do-stat-card">
            <div class="do-stat-icon">
                <span class="dashicons dashicons-admin-page"></span>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">1,247</div>
                <div class="do-stat-label">TOTAL DOCUMENTS</div>
                <div class="do-stat-trend positive">+142 this month</div>
            </div>
        </div>

        <div class="do-stat-card">
            <div class="do-stat-icon">
                <span class="dashicons dashicons-media-document"></span>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">384</div>
                <div class="do-stat-label">CONTRACTS</div>
                <div class="do-stat-trend positive">+28 this month</div>
            </div>
        </div>

        <div class="do-stat-card">
            <div class="do-stat-icon">
                <span class="dashicons dashicons-format-image"></span>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">563</div>
                <div class="do-stat-label">IMAGES</div>
                <div class="do-stat-trend positive">+67 this month</div>
            </div>
        </div>

        <div class="do-stat-card">
            <div class="do-stat-icon">
                <span class="dashicons dashicons-media-text"></span>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">427</div>
                <div class="do-stat-label">PDF FILES</div>
                <div class="do-stat-trend negative">-12 this month</div>
            </div>
        </div>
    </div>

    <!-- Filters and Actions -->
    <div class="do-actions-bar">
        <div class="do-search-box">
            <span class="dashicons dashicons-search"></span>
            <input type="text" placeholder="Search documents..." class="do-search-input">
        </div>
        
        <div class="do-filter-group">
            <select class="do-filter-select">
                <option value="all">All Types</option>
                <option value="contract">Contracts</option>
                <option value="image">Images</option>
                <option value="pdf">PDFs</option>
                <option value="deed">Deeds</option>
                <option value="agreement">Agreements</option>
            </select>
            
            <select class="do-filter-select">
                <option value="all">All Statuses</option>
                <option value="approved">Approved</option>
                <option value="pending">Pending Review</option>
                <option value="rejected">Rejected</option>
            </select>
            
            <select class="do-filter-select">
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
                <option value="name">Name (A-Z)</option>
                <option value="size">Size (Largest)</option>
            </select>
        </div>
        
        <div class="do-action-buttons">
            <button class="do-btn do-btn-secondary">
                <span class="dashicons dashicons-update"></span>
                Refresh
            </button>
            <button class="do-btn do-btn-primary" id="doDownloadAll">
                <span class="dashicons dashicons-download"></span>
                Download All
            </button>
        </div>
    </div>

    <!-- Documents Table -->
    <div class="do-documents-card">
        <div class="do-card-header">
            <h2>All Documents</h2>
            <span class="do-showing">Showing 1-15 of 1,247 documents</span>
        </div>
        
        <div class="do-table-container">
            <table class="do-documents-table">
                <thead>
                    <tr>
                        <th class="do-checkbox-cell cb-th-td">
                            <input type="checkbox" id="doSelectAll">
                        </th>
                        <th class="do-name-cell">Name</th>
                        <th class="do-type-cell">Type</th>
                        <th class="do-size-cell">Size</th>
                        <th class="do-owner-cell">Owner</th>
                        <th class="do-date-cell">Uploaded</th>
                        <th class="do-status-cell">Status</th>
                        <th class="do-actions-cell" style="text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="do-checkbox-cell cb-th-td"><input type="checkbox" class="do-document-checkbox"></td>
                        <td class="do-name-cell" data-label="Name">
                            <div class="do-document-info">
                                <span class="dashicons dashicons-media-document do-file-icon"></span>
                                <div class="do-document-details">
                                    <div class="do-document-name">Purchase_Agreement_1256.pdf</div>
                                    <div class="do-document-description">Property: 123 Main St, New York</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell" data-label="Type">Contract</td>
                        <td class="do-size-cell" data-label="Size">2.4 MB</td>
                        <td class="do-owner-cell" data-label="Owner">John Smith</td>
                        <td class="do-date-cell" data-label="Uploaded">Jun 15, 2023</td>
                        <td class="do-status-cell" data-label="Status">
                            <span class="do-status-badge do-status-approved">Approved</span>
                        </td>
                        <td class="do-actions-cell" data-label="Actions">
                            <div class="do-action-menu">
                                <button class="do-action-trigger"><span class="dashicons dashicons-menu"></span></button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item do-btn-view"><span class="dashicons dashicons-visibility"></span> View Details</button>
                                    <button class="do-action-item do-btn-download"><span class="dashicons dashicons-download"></span> Download</button>
                                    <button class="do-action-item do-btn-share"><span class="dashicons dashicons-share"></span> Share</button>
                                    <button class="do-action-item do-btn-delete"><span class="dashicons dashicons-trash"></span> Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td class="do-checkbox-cell cb-th-td"><input type="checkbox" class="do-document-checkbox"></td>
                        <td class="do-name-cell" data-label="Name">
                            <div class="do-document-info">
                                <span class="dashicons dashicons-format-image do-file-icon"></span>
                                <div class="do-document-details">
                                    <div class="do-document-name">Property_Photos_123_Main_St.zip</div>
                                    <div class="do-document-description">15 exterior and interior photos</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell" data-label="Type">Image Archive</td>
                        <td class="do-size-cell" data-label="Size">18.7 MB</td>
                        <td class="do-owner-cell" data-label="Owner">Emily Johnson</td>
                        <td class="do-date-cell" data-label="Uploaded">Jun 14, 2023</td>
                        <td class="do-status-cell" data-label="Status">
                            <span class="do-status-badge do-status-pending">Pending Review</span>
                        </td>
                        <td class="do-actions-cell" data-label="Actions">
                            <div class="do-action-menu">
                                <button class="do-action-trigger"><span class="dashicons dashicons-menu"></span></button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item do-btn-view"><span class="dashicons dashicons-visibility"></span> View Details</button>
                                    <button class="do-action-item do-btn-download"><span class="dashicons dashicons-download"></span> Download</button>
                                    <button class="do-action-item do-btn-share"><span class="dashicons dashicons-share"></span> Share</button>
                                    <button class="do-action-item do-btn-delete"><span class="dashicons dashicons-trash"></span> Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="do-checkbox-cell cb-th-td"><input type="checkbox" class="do-document-checkbox"></td>
                        <td class="do-name-cell" data-label="Name">
                            <div class="do-document-info">
                                <span class="dashicons dashicons-media-text do-file-icon"></span>
                                <div class="do-document-details">
                                    <div class="do-document-name">Deed_456_Oak_Ave.pdf</div>
                                    <div class="do-document-description">Property deed documentation</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell" data-label="Type">Deed</td>
                        <td class="do-size-cell" data-label="Size">5.2 MB</td>
                        <td class="do-owner-cell" data-label="Owner">Michael Brown</td>
                        <td class="do-date-cell" data-label="Uploaded">Jun 12, 2023</td>
                        <td class="do-status-cell" data-label="Status">
                            <span class="do-status-badge do-status-approved">Approved</span>
                        </td>
                        <td class="do-actions-cell" data-label="Actions">
                            <div class="do-action-menu">
                                <button class="do-action-trigger"><span class="dashicons dashicons-menu"></span></button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item do-btn-view"><span class="dashicons dashicons-visibility"></span> View Details</button>
                                    <button class="do-action-item do-btn-download"><span class="dashicons dashicons-download"></span> Download</button>
                                    <button class="do-action-item do-btn-share"><span class="dashicons dashicons-share"></span> Share</button>
                                    <button class="do-action-item do-btn-delete"><span class="dashicons dashicons-trash"></span> Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td class="do-checkbox-cell cb-th-td"><input type="checkbox" class="do-document-checkbox"></td>
                        <td class="do-name-cell" data-label="Name">
                            <div class="do-document-info">
                                <span class="dashicons dashicons-edit do-file-icon"></span>
                                <div class="do-document-details">
                                    <div class="do-document-name">Lease_Agreement_789.pdf</div>
                                    <div class="do-document-description">Rental agreement for 789 Pine Rd</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell" data-label="Type">Agreement</td>
                        <td class="do-size-cell" data-label="Size">3.1 MB</td>
                        <td class="do-owner-cell" data-label="Owner">Sarah Williams</td>
                        <td class="do-date-cell" data-label="Uploaded">Jun 10, 2023</td>
                        <td class="do-status-cell" data-label="Status">
                            <span class="do-status-badge do-status-approved">Approved</span>
                        </td>
                        <td class="do-actions-cell" data-label="Actions">
                            <div class="do-action-menu">
                                <button class="do-action-trigger"><span class="dashicons dashicons-menu"></span></button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item do-btn-view"><span class="dashicons dashicons-visibility"></span> View Details</button>
                                    <button class="do-action-item do-btn-download"><span class="dashicons dashicons-download"></span> Download</button>
                                    <button class="do-action-item do-btn-share"><span class="dashicons dashicons-share"></span> Share</button>
                                    <button class="do-action-item do-btn-delete"><span class="dashicons dashicons-trash"></span> Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td class="do-checkbox-cell cb-th-td"><input type="checkbox" class="do-document-checkbox"></td>
                        <td class="do-name-cell" data-label="Name">
                            <div class="do-document-info">
                                <span class="dashicons dashicons-analytics do-file-icon"></span>
                                <div class="do-document-details">
                                    <div class="do-document-name">Property_Listings_Q2.xlsx</div>
                                    <div class="do-document-description">Quarterly listings report</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell" data-label="Type">Spreadsheet</td>
                        <td class="do-size-cell" data-label="Size">1.8 MB</td>
                        <td class="do-owner-cell" data-label="Owner">Robert Davis</td>
                        <td class="do-date-cell" data-label="Uploaded">Jun 8, 2023</td>
                        <td class="do-status-cell" data-label="Status">
                            <span class="do-status-badge do-status-rejected">Rejected</span>
                        </td>
                        <td class="do-actions-cell" data-label="Actions">
                            <div class="do-action-menu">
                                <button class="do-action-trigger"><span class="dashicons dashicons-menu"></span></button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item do-btn-view"><span class="dashicons dashicons-visibility"></span> View Details</button>
                                    <button class="do-action-item do-btn-download"><span class="dashicons dashicons-download"></span> Download</button>
                                    <button class="do-action-item do-btn-share"><span class="dashicons dashicons-share"></span> Share</button>
                                    <button class="do-action-item do-btn-delete"><span class="dashicons dashicons-trash"></span> Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="do-table-footer">
            <div class="do-selection-info">
                <span id="doSelectedCount">0</span> documents selected
            </div>
            <div class="do-pagination">
                <button class="do-pagination-btn" disabled><span class="dashicons dashicons-arrow-left-alt2"></span></button>
                <span class="do-pagination-info">Page 1 of 84</span>
                <button class="do-pagination-btn"><span class="dashicons dashicons-arrow-right-alt2"></span></button>
            </div>
            <div class="do-batch-actions">
                <button class="do-btn do-btn-outline" id="doDownloadSelected" disabled>
                    <span class="dashicons dashicons-download"></span> Download Selected
                </button>
            </div>
        </div>
    </div>
</div>


<style>
/* ==============================
   Document Oversight Styles
   ============================== */
.document-oversight {
    background-color: #f5f7f9;
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
}

.do-header {
    margin-bottom: 24px;
}

.do-header h1 {
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 28px;
}

.do-header p {
    color: #7f8c8d;
    margin: 0;
    font-size: 16px;
}

/* ==============================
   Stats Grid
   ============================== */
.do-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

/* Tablets (2 columns) */
@media (max-width: 992px) {
    .do-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Mobiles (1 column) */
@media (max-width: 576px) {
    .do-stats-grid {
        grid-template-columns: 1fr;
    }
}

.do-stat-card {
    background: white;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
    transition: transform 0.2s, box-shadow 0.2s;
}

.do-stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
}

.do-stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 16px;
    color: white;
    font-size: 20px;
}

.do-stat-card:nth-child(2) .do-stat-icon {
    background: linear-gradient(135deg, #2ecc71, #27ae60);
}

.do-stat-card:nth-child(3) .do-stat-icon {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
}

.do-stat-card:nth-child(4) .do-stat-icon {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
}

.do-stat-value {
    font-size: 28px;
    font-weight: 700;
    color: #2c3e50;
    line-height: 1;
    margin-bottom: 4px;
}

.do-stat-label {
    font-size: 14px;
    color: #7f8c8d;
    margin-bottom: 6px;
    font-weight: 500;
}

.do-stat-trend {
    font-size: 12px;
    font-weight: 600;
}

.do-stat-trend.positive {
    color: #27ae60;
}

.do-stat-trend.negative {
    color: #e74c3c;
}

/* ==============================
   Actions Bar
   ============================== */
.do-actions-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    gap: 16px;
    flex-wrap: wrap;
}

.do-search-box {
    position: relative;
    flex: 1;
    max-width: 300px;
}

.do-search-box i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #95a5a6;
}

.do-search-input {
    width: 100%;
    padding: 10px 12px 10px 40px;
    border: 1px solid #dcdee0;
    border-radius: 8px;
    font-size: 14px;
}

.do-search-input:focus {
    outline: none;
    border-color: #3498db;
    box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
}

.do-filter-group {
    display: flex;
    gap: 10px;
}

.do-filter-select {
    padding: 10px 12px;
    border: 1px solid #dcdee0;
    border-radius: 8px;
    font-size: 14px;
    background: white;
    color: #2c3e50;
}

.do-action-buttons {
    display: flex;
    gap: 10px;
}

/* ==============================
   Button Styles
   ============================== */
.do-btn {
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.do-btn-primary {
    background: #3498db;
    color: white;
}

.do-btn-primary:hover {
    background: #2980b9;
}

.do-btn-secondary {
    background: #95a5a6;
    color: white;
}

.do-btn-secondary:hover {
    background: #7f8c8d;
}

.do-btn-outline {
    background: transparent;
    border: 1px solid #3498db;
    color: #3498db;
}

.do-btn-outline:hover {
    background: rgba(52, 152, 219, 0.1);
}

.do-btn-outline:disabled {
    border-color: #bdc3c7;
    color: #bdc3c7;
    cursor: not-allowed;
}

/* ==============================
   Documents Card
   ============================== */
.do-documents-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    overflow: hidden;
}

.do-card-header {
    padding: 20px 24px;
    border-bottom: 1px solid #ecf0f1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.do-card-header h2 {
    margin: 0;
    font-size: 18px;
    color: #2c3e50;
    font-weight: 600;
}

.do-showing {
    font-size: 14px;
    color: #7f8c8d;
}

/* ==============================
   Table Styles
   ============================== */
.do-table-container {
    overflow-x: auto;
    width: 100%;
}

.do-documents-table {
    width: 100%;
    border-collapse: collapse;
    table-layout: auto;
}

.do-documents-table th,
.do-documents-table td {
    text-align: left;
    padding: 14px 16px;
    border-bottom: 1px solid #ecf0f1;
    vertical-align: middle;
}

.do-documents-table th {
    font-weight: 600;
    white-space: nowrap;
}

.do-documents-table td {
    font-size: 14px;
    color: #2c3e50;
}

/* ==============================
   Desktop Table Mode
   ============================== */
@media (min-width: 577px) {
    .do-documents-table td::before {
        content: none !important;
    }
    .do-documents-table tbody tr {
        display: table-row !important;
        box-shadow: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    .do-documents-table td {
        display: table-cell !important;
    }
}

/* ==============================
   Mobile Card View (<=576px)
   ============================== */
@media (max-width: 576px) {
    .do-documents-table thead {
        display: none;
    }

    .do-documents-table,
    .do-documents-table tbody,
    .do-documents-table tr,
    .do-documents-table td {
        display: block;
        width: 100%;
    }

    .do-documents-table tr {
        background: white;
        margin-bottom: 12px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        padding: 12px;
    }

    .do-documents-table td {
        padding: 8px 0;
        border: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .do-documents-table td::before {
        content: attr(data-label);
        font-weight: 600;
        color: #7f8c8d;
        flex: 0 0 45%;
        text-align: left;
        padding-right: 8px;
    }

    .do-documents-table td:last-child {
        border-bottom: none;
    }
}

/* ==============================
   Status Badges
   ============================== */
.do-status-badge {
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
    width: fit-content;
}

.do-status-approved {
    background: #e7f6ef;
    color: #27ae60;
}

.do-status-pending {
    background: #fef5e7;
    color: #f39c12;
}

.do-status-rejected {
    background: #fdecea;
    color: #e74c3c;
}

/* ==============================
   Action Menu
   ============================== */
.do-action-menu {
    position: relative;
    display: flex;
    justify-content: center;
}

.do-action-trigger {
    padding: 6px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: #7f8c8d;
}

.do-action-trigger:hover {
    background: #f0f0f0;
    color: #3498db;
}

.do-action-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    z-index: 10;
    min-width: 180px;
    padding: 8px 0;
    margin-top: 4px;
}

.do-action-item {
    width: 100%;
    padding: 10px 16px;
    border: none;
    background: transparent;
    text-align: left;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: #2c3e50;
}

.do-action-item:hover {
    background: #f8f9fa;
}

.do-action-item i {
    width: 16px;
    text-align: center;
}

/* Action button colors */
.do-btn-view { color: #3498db; }
.do-btn-download { color: #2ecc71; }
.do-btn-share { color: #f39c12; }
.do-btn-delete { color: #e74c3c; }

.do-btn-view:hover { background: rgba(52, 152, 219, 0.1); }
.do-btn-download:hover { background: rgba(46, 204, 113, 0.1); }
.do-btn-share:hover { background: rgba(243, 156, 18, 0.1); }
.do-btn-delete:hover { background: rgba(231, 76, 60, 0.1); }

/* ==============================
   Table Footer
   ============================== */
.do-table-footer {
    padding: 16px 24px;
    border-top: 1px solid #ecf0f1;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
}

.do-selection-info {
    font-size: 14px;
    color: #7f8c8d;
}

.do-pagination {
    display: flex;
    align-items: center;
    gap: 12px;
}

.do-pagination-btn {
    padding: 6px 10px;
    border: 1px solid #dcdee0;
    background: white;
    border-radius: 6px;
    cursor: pointer;
    color: #2c3e50;
}

.do-pagination-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.do-pagination-info {
    font-size: 14px;
    color: #7f8c8d;
}

.do-batch-actions {
    display: flex;
    gap: 10px;
}

.cb-th-td {
    text-align: center!important;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all checkbox functionality
    const selectAllCheckbox = document.getElementById('doSelectAll');
    const documentCheckboxes = document.querySelectorAll('.do-document-checkbox');
    const selectedCount = document.getElementById('doSelectedCount');
    const downloadSelectedBtn = document.getElementById('doDownloadSelected');

    selectAllCheckbox.addEventListener('change', function() {
        documentCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateSelectionCount();
    });

    documentCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelectionCount);
    });

    function updateSelectionCount() {
        const selected = Array.from(documentCheckboxes).filter(checkbox => checkbox.checked).length;
        selectedCount.textContent = selected;
        downloadSelectedBtn.disabled = selected === 0;

        // Update select all checkbox state
        selectAllCheckbox.checked = selected === documentCheckboxes.length;
        selectAllCheckbox.indeterminate = selected > 0 && selected < documentCheckboxes.length;
    }

    // Action menu functionality
    const actionTriggers = document.querySelectorAll('.do-action-trigger');

    actionTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = this.nextElementSibling;

            // Close all other dropdowns
            document.querySelectorAll('.do-action-dropdown').forEach(d => {
                if (d !== dropdown) d.style.display = 'none';
            });

            // Toggle this one
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Close dropdowns when clicking elsewhere
    document.addEventListener('click', function() {
        document.querySelectorAll('.do-action-dropdown').forEach(dropdown => {
            dropdown.style.display = 'none';
        });
    });

    // Prevent dropdown close when clicking inside
    document.querySelectorAll('.do-action-dropdown').forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });

    // Action item functionality
    const actionItems = document.querySelectorAll('.do-action-item');

    actionItems.forEach(item => {
        item.addEventListener('click', function() {
            const action = this.textContent.trim();
            const documentName = this.closest('tr').querySelector('.do-document-name').textContent;
            alert(`${action}: ${documentName}`);

            // Hide dropdown
            this.closest('.do-action-dropdown').style.display = 'none';
        });
    });

    // Download selected functionality
    downloadSelectedBtn.addEventListener('click', function() {
        const selected = Array.from(documentCheckboxes).filter(checkbox => checkbox.checked).length;
        alert(`Preparing to download ${selected} documents...`);
    });

    // Download all functionality
    document.getElementById('doDownloadAll').addEventListener('click', function() {
        alert('Preparing to download all documents...');
    });
});

</script>

