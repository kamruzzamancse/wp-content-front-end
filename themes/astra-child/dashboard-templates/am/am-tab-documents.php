<div class="document-oversight">
    <div class="do-header">
        <h1>Document Oversight</h1>
        <p>View and manage all uploaded documents in the system</p>
    </div>

    <!-- Stats Cards -->
    <div class="do-stats-grid">
        <div class="do-stat-card">
            <div class="do-stat-icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">1,247</div>
                <div class="do-stat-label">TOTAL DOCUMENTS</div>
                <div class="do-stat-trend positive">+142 this month</div>
            </div>
        </div>

        <div class="do-stat-card">
            <div class="do-stat-icon">
                <i class="fas fa-file-contract"></i>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">384</div>
                <div class="do-stat-label">CONTRACTS</div>
                <div class="do-stat-trend positive">+28 this month</div>
            </div>
        </div>

        <div class="do-stat-card">
            <div class="do-stat-icon">
                <i class="fas fa-file-image"></i>
            </div>
            <div class="do-stat-content">
                <div class="do-stat-value">563</div>
                <div class="do-stat-label">IMAGES</div>
                <div class="do-stat-trend positive">+67 this month</div>
            </div>
        </div>

        <div class="do-stat-card">
            <div class="do-stat-icon">
                <i class="fas fa-file-pdf"></i>
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
            <i class="fas fa-search"></i>
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
                <i class="fas fa-sync-alt"></i>
                Refresh
            </button>
            <button class="do-btn do-btn-primary" id="doDownloadAll">
                <i class="fas fa-download"></i>
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
                        <th class="do-checkbox-cell">
                            <input type="checkbox" id="doSelectAll">
                        </th>
                        <th class="do-name-cell">Name</th>
                        <th class="do-type-cell">Type</th>
                        <th class="do-size-cell">Size</th>
                        <th class="do-owner-cell">Owner</th>
                        <th class="do-date-cell">Uploaded</th>
                        <th class="do-status-cell">Status</th>
                        <th class="do-actions-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="do-checkbox-cell">
                            <input type="checkbox" class="do-document-checkbox">
                        </td>
                        <td class="do-name-cell">
                            <div class="do-document-info">
                                <i class="fas fa-file-contract do-file-icon"></i>
                                <div class="do-document-details">
                                    <div class="do-document-name">Purchase_Agreement_1256.pdf</div>
                                    <div class="do-document-description">Property: 123 Main St, New York</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell">Contract</td>
                        <td class="do-size-cell">2.4 MB</td>
                        <td class="do-owner-cell">John Smith</td>
                        <td class="do-date-cell">Jun 15, 2023</td>
                        <td class="do-status-cell">
                            <span class="do-status-badge do-status-approved">Approved</span>
                        </td>
                        <td class="do-actions-cell">
                            <div class="do-action-menu">
                                <button class="do-action-trigger">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item">
                                        <i class="fas fa-eye"></i>
                                        View Details
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-share"></i>
                                        Share
                                    </button>
                                    <button class="do-action-item do-action-danger">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="do-checkbox-cell">
                            <input type="checkbox" class="do-document-checkbox">
                        </td>
                        <td class="do-name-cell">
                            <div class="do-document-info">
                                <i class="fas fa-file-image do-file-icon"></i>
                                <div class="do-document-details">
                                    <div class="do-document-name">Property_Photos_123_Main_St.zip</div>
                                    <div class="do-document-description">15 exterior and interior photos</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell">Image Archive</td>
                        <td class="do-size-cell">18.7 MB</td>
                        <td class="do-owner-cell">Emily Johnson</td>
                        <td class="do-date-cell">Jun 14, 2023</td>
                        <td class="do-status-cell">
                            <span class="do-status-badge do-status-pending">Pending Review</span>
                        </td>
                        <td class="do-actions-cell">
                            <div class="do-action-menu">
                                <button class="do-action-trigger">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item">
                                        <i class="fas fa-eye"></i>
                                        View Details
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-share"></i>
                                        Share
                                    </button>
                                    <button class="do-action-item do-action-danger">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="do-checkbox-cell">
                            <input type="checkbox" class="do-document-checkbox">
                        </td>
                        <td class="do-name-cell">
                            <div class="do-document-info">
                                <i class="fas fa-file-pdf do-file-icon"></i>
                                <div class="do-document-details">
                                    <div class="do-document-name">Deed_456_Oak_Ave.pdf</div>
                                    <div class="do-document-description">Property deed documentation</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell">Deed</td>
                        <td class="do-size-cell">5.2 MB</td>
                        <td class="do-owner-cell">Michael Brown</td>
                        <td class="do-date-cell">Jun 12, 2023</td>
                        <td class="do-status-cell">
                            <span class="do-status-badge do-status-approved">Approved</span>
                        </td>
                        <td class="do-actions-cell">
                            <div class="do-action-menu">
                                <button class="do-action-trigger">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item">
                                        <i class="fas fa-eye"></i>
                                        View Details
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-share"></i>
                                        Share
                                    </button>
                                    <button class="do-action-item do-action-danger">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="do-checkbox-cell">
                            <input type="checkbox" class="do-document-checkbox">
                        </td>
                        <td class="do-name-cell">
                            <div class="do-document-info">
                                <i class="fas fa-file-signature do-file-icon"></i>
                                <div class="do-document-details">
                                    <div class="do-document-name">Lease_Agreement_789.pdf</div>
                                    <div class="do-document-description">Rental agreement for 789 Pine Rd</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell">Agreement</td>
                        <td class="do-size-cell">3.1 MB</td>
                        <td class="do-owner-cell">Sarah Williams</td>
                        <td class="do-date-cell">Jun 10, 2023</td>
                        <td class="do-status-cell">
                            <span class="do-status-badge do-status-approved">Approved</span>
                        </td>
                        <td class="do-actions-cell">
                            <div class="do-action-menu">
                                <button class="do-action-trigger">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item">
                                        <i class="fas fa-eye"></i>
                                        View Details
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-share"></i>
                                        Share
                                    </button>
                                    <button class="do-action-item do-action-danger">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="do-checkbox-cell">
                            <input type="checkbox" class="do-document-checkbox">
                        </td>
                        <td class="do-name-cell">
                            <div class="do-document-info">
                                <i class="fas fa-file-excel do-file-icon"></i>
                                <div class="do-document-details">
                                    <div class="do-document-name">Property_Listings_Q2.xlsx</div>
                                    <div class="do-document-description">Quarterly listings report</div>
                                </div>
                            </div>
                        </td>
                        <td class="do-type-cell">Spreadsheet</td>
                        <td class="do-size-cell">1.8 MB</td>
                        <td class="do-owner-cell">Robert Davis</td>
                        <td class="do-date-cell">Jun 8, 2023</td>
                        <td class="do-status-cell">
                            <span class="do-status-badge do-status-rejected">Rejected</span>
                        </td>
                        <td class="do-actions-cell">
                            <div class="do-action-menu">
                                <button class="do-action-trigger">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="do-action-dropdown">
                                    <button class="do-action-item">
                                        <i class="fas fa-eye"></i>
                                        View Details
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-download"></i>
                                        Download
                                    </button>
                                    <button class="do-action-item">
                                        <i class="fas fa-share"></i>
                                        Share
                                    </button>
                                    <button class="do-action-item do-action-danger">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
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
                <button class="do-pagination-btn" disabled>
                    <i class="fas fa-chevron-left"></i>
                </button>
                <span class="do-pagination-info">Page 1 of 84</span>
                <button class="do-pagination-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="do-batch-actions">
                <button class="do-btn do-btn-outline" id="doDownloadSelected" disabled>
                    <i class="fas fa-download"></i>
                    Download Selected
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.document-oversight {
    padding: 20px;
    background-color: #f5f7f9;
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

/* Stats Grid */
.do-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 30px;
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

/* Actions Bar */
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

/* Button Styles */
.do-btn {
    padding: 10px 16px;
    border-radius: 8px;
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
    background: #ecf0f1;
    color: #7f8c8d;
}

.do-btn-secondary:hover {
    background: #dde4e6;
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

/* Documents Card */
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

/* Table Styles */
.do-table-container {
    overflow-x: auto;
}

.do-documents-table {
    width: 100%;
    border-collapse: collapse;
}

.do-documents-table th {
    text-align: left;
    padding: 16px;
    font-weight: 600;
    color: #2c3e50;
    border-bottom: 2px solid #ecf0f1;
    background: #f8f9fa;
    white-space: nowrap;
}

.do-documents-table td {
    padding: 16px;
    border-bottom: 1px solid #ecf0f1;
    vertical-align: middle;
}

.do-documents-table tbody tr:hover {
    background: #f8f9fa;
}

.do-checkbox-cell {
    width: 40px;
}

.do-name-cell {
    min-width: 300px;
    max-width: 350px;
}

.do-type-cell, .do-size-cell, .do-status-cell {
    width: 120px;
}

.do-owner-cell {
    width: 150px;
}

.do-date-cell {
    width: 120px;
}

.do-actions-cell {
    width: 60px;
}

/* Document Info */
.do-document-info {
    align-items: center;
    gap: 12px;
}

.do-file-icon {
    font-size: 24px;
    color: #3498db;
    width: 32px;
    text-align: center;
    flex-shrink: 0;
}

.do-document-details {
    flex: 1;
    min-width: 0;
}

.do-document-name {
    font-weight: 500;
    color: #2c3e50;
    margin-bottom: 4px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.do-document-description {
    font-size: 13px;
    color: #7f8c8d;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Status Badges */
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

/* Action Menu */
.do-action-menu {
    position: relative;
    display: flex;
    justify-content: center;
}

.do-action-trigger {
    padding: 6px 10px;
    border: none;
    background: transparent;
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

.do-action-menu:hover .do-action-dropdown {
    display: block;
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

.do-action-danger {
    color: #e74c3c;
}

.do-action-danger:hover {
    background: #fdecea;
}

/* Table Footer */
.do-table-footer {
    padding: 16px 24px;
    border-top: 1px solid #ecf0f1;
    display: flex;
    justify-content: space-between;
    align-items: center;
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

/* Responsive Design */
@media (max-width: 1200px) {
    .do-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 992px) {
    .do-actions-bar {
        flex-direction: column;
        align-items: stretch;
    }
    
    .do-search-box {
        max-width: 100%;
    }
    
    .do-filter-group {
        flex-wrap: wrap;
    }
}

@media (max-width: 768px) {
    .do-stats-grid {
        grid-template-columns: 1fr;
    }
    
    .do-table-footer {
        flex-direction: column;
        gap: 16px;
        align-items: stretch;
    }
    
    .do-pagination {
        justify-content: center;
    }
    
    .do-batch-actions {
        justify-content: center;
    }
    
    .do-documents-table {
        font-size: 14px;
    }
    
    .do-documents-table th,
    .do-documents-table td {
        padding: 12px 8px;
    }
    
    .do-type-cell, .do-size-cell, .do-date-cell {
        display: none;
    }
    
    .do-action-dropdown {
        right: auto;
        left: 0;
    }
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
            // Close any other open menus
            document.querySelectorAll('.do-action-dropdown').forEach(dropdown => {
                if (dropdown !== this.nextElementSibling) {
                    dropdown.style.display = 'none';
                }
            });
            
            // Toggle this menu
            const dropdown = this.nextElementSibling;
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });
    });
    
    // Close dropdowns when clicking elsewhere
    document.addEventListener('click', function() {
        document.querySelectorAll('.do-action-dropdown').forEach(dropdown => {
            dropdown.style.display = 'none';
        });
    });
    
    // Prevent dropdown from closing when clicking inside it
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
            
            // Hide the dropdown after action
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