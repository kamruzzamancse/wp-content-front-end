<div class="cld-task-section">
    <div class="cld-task-header">
        <h2 class="header-title">Documents</h2>
        <button class="cld-upload-btn" data-modal="cl-upload-document-modal">
            Upload Document <span class="dashicons dashicons-media-document"></span>
        </button>
    </div>

    <!-- Dashboard Cards Grid -->
    <div class="stats-grid">
        <!-- Business Cards Card -->
        <a href="#" class="stat-card">
            <h3>
                <span class="dashicons dashicons-admin-users"></span> 
                <?php echo esc_html__('Business Cards', 'text-domain'); ?>
            </h3>
        </a>

        <!-- Sellers Checklist Card -->
        <a href="#" class="stat-card">
            <h3>
                <span class="dashicons dashicons-clipboard"></span> 
                <?php echo esc_html__('Sellers Checklist', 'text-domain'); ?>
            </h3>
        </a>

        <!-- Buyers Checklist Card -->
        <a href="#" class="stat-card">
            <h3>
                <span class="dashicons dashicons-portfolio"></span> 
                <?php echo esc_html__('Buyers Checklist', 'text-domain'); ?>
            </h3>
        </a>
    </div>

    <!-- Documents Table -->
    <div class="documents-section">
        <table class="documents-table">
            <thead>
                <tr>
                    <th style="width:50px; background:#0073e6; color:#fff;">#</th>
                    <th style="background:#0073e6; color:#fff;">Document Title</th>
                    <th style="background:#0073e6; color:#fff;">Document Type</th>
                    <th style="background:#0073e6; color:#fff;">File</th>
                    <th style="width:120px; background:#0073e6; color:#fff;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom:1px solid #CCC;">
                    <td data-label="#">1</td>
                    <td data-label="Document Title">Business Card Template</td>
                    <td data-label="Document Type">Business Cards</td>
                    <td data-label="File">business_card.pdf</td>
                    <td data-label="Actions">
                        <a href="#" class="doc-action download" title="Download">⬇️</a>
                        <a href="#" class="doc-action edit" title="Edit">✏️</a>
                        <a href="#" class="doc-action delete" title="Delete">🗑️</a>
                    </td>
                </tr>
                <tr>
                    <td data-label="#">2</td>
                    <td data-label="Document Title">Seller Checklist Form</td>
                    <td data-label="Document Type">Seller Checklist</td>
                    <td data-label="File">seller_checklist.pdf</td>
                    <td data-label="Actions">
                        <a href="#" class="doc-action download" title="Download">⬇️</a>
                        <a href="#" class="doc-action edit" title="Edit">✏️</a>
                        <a href="#" class="doc-action delete" title="Delete">🗑️</a>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #CCC">
                    <td data-label="#">3</td>
                    <td data-label="Document Title">Buyer Checklist Form</td>
                    <td data-label="Document Type">Buyer Checklist</td>
                    <td data-label="File">buyer_checklist.pdf</td>
                    <td data-label="Actions">
                        <a href="#" class="doc-action download" title="Download">⬇️</a>
                        <a href="#" class="doc-action edit" title="Edit">✏️</a>
                        <a href="#" class="doc-action delete" title="Delete">🗑️</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php 
include locate_template('dashboard-templates/rt/rt-upload-document-modal.php');
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal functionality
    const modalButtons = document.querySelectorAll('.cld-upload-btn');
    modalButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = document.getElementById(btn.dataset.modal);
            if(modal) modal.classList.add('show');
        });
    });

    const closeButtons = document.querySelectorAll('.clup-close-btn, .clup-cancel');
    closeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.clup-modal-overlay');
            if(modal) modal.classList.remove('show');
        });
    });

    const modals = document.querySelectorAll('.clup-modal-overlay');
    modals.forEach(modal => {
        modal.addEventListener('click', e => {
            if(e.target === modal) modal.classList.remove('show');
        });
    });

    const browseButtons = document.querySelectorAll('.clup-browse');
    browseButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const fileInput = btn.parentElement.querySelector('.clup-file-input');
            if(fileInput) fileInput.click();
        });
    });

    // Actions for table links
    document.querySelectorAll('.doc-action.download').forEach(link => {
        link.addEventListener('click', e => { e.preventDefault(); alert('Download document'); });
    });
    document.querySelectorAll('.doc-action.edit').forEach(link => {
        link.addEventListener('click', e => { e.preventDefault(); alert('Edit document'); });
    });
    document.querySelectorAll('.doc-action.delete').forEach(link => {
        link.addEventListener('click', e => { e.preventDefault(); alert('Delete document'); });
    });
});
</script>

<style>
/* Container */
.cld-task-section {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
    overflow-x: hidden;
}

/* Header */
.cld-task-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.cld-upload-btn {
    background: #fff;
    border: 1px solid #0073e6;
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    color: #0073e6;
    display: flex;
    align-items: center;
    gap: 6px;
}
.cld-upload-btn:hover { color: #FFF!important; background: #0073e6; }

/* Dashboard Cards Grid */
.stats-grid {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}
.stat-card {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 100%;
    max-width: 200px;
    padding: 20px;
    background: #f5f5f5;
    border-radius: 8px;
    text-decoration: none;
    color: #333;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    cursor: pointer;
}
.stat-card:hover {
    background: #FFF;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}
.stat-card h3 {
    font-size: 16px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0;
}

/* Documents Table */
.documents-section {
    margin-top: 30px;
    overflow-x: auto;
}
.documents-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
}
.documents-table th,
.documents-table td {
    padding: 12px 15px;
    text-align: left;
    border: 1px solid #ddd;
    font-size: 14px;
}
.documents-table th {
    font-weight: 600;
}
.doc-action {
    font-size: 14px;
    margin-right: 5px;
    text-decoration: none;
    cursor: pointer;
}
.doc-action.download { color: #2f64e2; }
.doc-action.edit { color: #ffb400; }
.doc-action.delete { color: #e63946; }
.doc-action:hover { text-decoration: underline; }

/* Tablet Responsive */
@media (max-width: 768px) {
    .stats-grid { justify-content: center; gap: 15px; }

    /* Table turns into card-style list */
    .documents-table,
    .documents-table thead,
    .documents-table tbody,
    .documents-table th,
    .documents-table td,
    .documents-table tr {
        display: block;
        width: 73%;
    }
    .documents-table thead tr { display: none; }
    .documents-table tr {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        background: #fff;
    }
    .documents-table td {
        padding: 10px;
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        text-align: right;
    }
    .documents-table td:last-child { border-bottom: none; }
    .documents-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: 600;
        text-align: left;
        color: #333;
    }
    .doc-action { margin-right: 10px; }
    .cld-task-section {
        width: 57%;
    }
    .cld-task-section {
        width: 57%;
    }
}

/* Mobile Responsive */
@media (max-width: 480px) {
    .cld-task-header { flex-direction: column; gap: 15px; align-items: flex-start; }
    .cld-upload-btn { align-self: stretch; justify-content: center; }
    .stat-card { max-width: 100%; padding: 15px; }
}
</style>
