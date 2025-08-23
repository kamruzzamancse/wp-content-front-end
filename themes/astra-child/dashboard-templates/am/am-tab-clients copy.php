<div class="ab-container">
    <div class="ab-table-header">
        <div class="ab-header-left">
            <h1 class="header-title">Clients</h1>
        </div>
        <div class="ab-header-right">
            <div class="ab-search-box">
                <span class="pt-search-icon">🔍</span>
                <input type="text" class="pt-search-input" placeholder="Search: Client Name">
            </div>
            <div class="ab-action-buttons">
                <button class="ab-btn ab-btn-import">Import</button>
                <button class="ab-btn ab-btn-export">Export</button>
                <button class="ab-btn ab-btn-create ab-openCreateClient">+ Add Client</button>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th class="ab-sl-column" style="width: 50px">#SL</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th class="ab-actions-column">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Repeat rows with proper client data -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">01</td>
                <td data-label="Client Name">Afsana Hamid Mim</td>
                <td data-label="Email">Support.info@gmail.com</td>
                <td data-label="Phone Number">999-888-666</td>
                <td data-label="Address">New York</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="1"
                            data-name="Afsana Hamid Mim"
                            data-email="Support.info@gmail.com"
                            data-phone="999-888-666"
                            data-address="New York"
                            data-company="Client Corp"
                            data-broker="BRK-2025-1234"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">02</td>
                <td data-label="Client Name">Jackson Lee</td>
                <td data-label="Email">jackson.lee@example.com</td>
                <td data-label="Phone Number">321-456-7890</td>
                <td data-label="Address">Los Angeles</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="2"
                            data-name="Jackson Lee"
                            data-email="jackson.lee@example.com"
                            data-phone="321-456-7890"
                            data-address="Los Angeles"
                            data-company="TechWave LLC"
                            data-broker="BRK-2025-5678"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">03</td>
                <td data-label="Client Name">Maria Gonzalez</td>
                <td data-label="Email">maria.g@example.org</td>
                <td data-label="Phone Number">555-123-4567</td>
                <td data-label="Address">Chicago</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="3"
                            data-name="Maria Gonzalez"
                            data-email="maria.g@example.org"
                            data-phone="555-123-4567"
                            data-address="Chicago"
                            data-company="Gonzalez Group"
                            data-broker="BRK-2025-9988"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">04</td>
                <td data-label="Client Name">Liam Turner</td>
                <td data-label="Email">liam.t@example.net</td>
                <td data-label="Phone Number">888-222-1111</td>
                <td data-label="Address">Austin</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="4"
                            data-name="Liam Turner"
                            data-email="liam.t@example.net"
                            data-phone="888-222-1111"
                            data-address="Austin"
                            data-company="Turner & Co"
                            data-broker="BRK-2025-4455"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">05</td>
                <td data-label="Client Name">Sophia Nguyen</td>
                <td data-label="Email">sophia.n@domain.com</td>
                <td data-label="Phone Number">444-777-9999</td>
                <td data-label="Address">San Francisco</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="5"
                            data-name="Sophia Nguyen"
                            data-email="sophia.n@domain.com"
                            data-phone="444-777-9999"
                            data-address="San Francisco"
                            data-company="Nguyen Solutions"
                            data-broker="BRK-2025-3030"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">06</td>
                <td data-label="Client Name">Ethan Roberts</td>
                <td data-label="Email">ethan.roberts@mail.com</td>
                <td data-label="Phone Number">212-555-6789</td>
                <td data-label="Address">Seattle</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="6"
                            data-name="Ethan Roberts"
                            data-email="ethan.roberts@mail.com"
                            data-phone="212-555-6789"
                            data-address="Seattle"
                            data-company="Skyline Corp"
                            data-broker="BRK-2025-1122"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">07</td>
                <td data-label="Client Name">Olivia Davis</td>
                <td data-label="Email">olivia.davis@business.org</td>
                <td data-label="Phone Number">666-999-3333</td>
                <td data-label="Address">Denver</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="7"
                            data-name="Olivia Davis"
                            data-email="olivia.davis@business.org"
                            data-phone="666-999-3333"
                            data-address="Denver"
                            data-company="Davis Holdings"
                            data-broker="BRK-2025-7210"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">08</td>
                <td data-label="Client Name">Noah Walker</td>
                <td data-label="Email">noah.w@startup.com</td>
                <td data-label="Phone Number">909-404-3020</td>
                <td data-label="Address">Miami</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="8"
                            data-name="Noah Walker"
                            data-email="noah.w@startup.com"
                            data-phone="909-404-3020"
                            data-address="Miami"
                            data-company="Walker Ventures"
                            data-broker="BRK-2025-8181"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">09</td>
                <td data-label="Client Name">Emily Carter</td>
                <td data-label="Email">emily.carter@outlook.com</td>
                <td data-label="Phone Number">777-888-9999</td>
                <td data-label="Address">Boston</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="9"
                            data-name="Emily Carter"
                            data-email="emily.carter@outlook.com"
                            data-phone="777-888-9999"
                            data-address="Boston"
                            data-company="Carter Consulting"
                            data-broker="BRK-2025-5643"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column" data-label="#SL">10</td>
                <td data-label="Client Name">Benjamin Scott</td>
                <td data-label="Email">ben.scott@companymail.com</td>
                <td data-label="Phone Number">123-123-1234</td>
                <td data-label="Address">Atlanta</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClient" title="Edit"
                            data-id="10"
                            data-name="Benjamin Scott"
                            data-email="ben.scott@companymail.com"
                            data-phone="123-123-1234"
                            data-address="Atlanta"
                            data-company="Scott Enterprises"
                            data-broker="BRK-2025-7777"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>

<?php
    include locate_template('dashboard-templates/am/am-client-view-modal.php');
    include locate_template('dashboard-templates/am/am-client-create-modal.php');
    include locate_template('dashboard-templates/am/am-client-edit-modal.php');
?>

<style>
/* ---------------------- Responsive Client Table ---------------------- */
@media screen and (max-width: 768px) {
    table:not(.client-details),
    table:not(.client-details) thead,
    table:not(.client-details) tbody,
    table:not(.client-details) th,
    table:not(.client-details) tr {
        display: block;
        width: 100%;
    }

    table:not(.client-details) thead {
        display: none;
    }

    table:not(.client-details) tr {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 12px;
        background: #f4faff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    table:not(.client-details) td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border: none;
        border-bottom: 1px solid #eee;
    }

    table:not(.client-details) td:last-child {
        border-bottom: none;
    }

    table:not(.client-details) td::before {
        content: attr(data-label);
        font-weight: 600;
        color: #222;
        flex: 1;
        text-align: left;
    }

    table:not(.client-details) .ab-actions-column {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
    }

    table:not(.client-details) .ab-action-icons {
        gap: 10px;
    }
}

/* ---------------------- Client Table Styles ---------------------- */
.client-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Segoe UI', sans-serif;
    font-size: 14px;
    background-color: #fff;
}

.client-table thead th {
    text-align: left;
    padding: 10px;
    border-bottom: 2px solid #ddd;
    font-weight: 600;
    background: #f2f2f2;
}

th {
    padding: 8px!important;
}

.client-table tbody td {
    padding: 10px;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
    max-width: 220px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    position: relative;
}

/* Tooltip for long text */
.client-table tbody td:hover::after {
    content: attr(title);
    position: absolute;
    left: 0;
    top: 100%;
    background: #333;
    color: #fff;
    padding: 6px 10px;
    border-radius: 4px;
    white-space: normal;
    min-width: 200px;
    max-width: 400px;
    z-index: 1000;
    font-size: 13px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

/* ---------------------- Client Action Icons ---------------------- */
.ab-action-icons {
    display: flex;
    gap: 8px;
}
.ab-action-icon {
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.2s;
}
.ab-action-icon:hover {
    transform: scale(1.2);
}

/* ---------------------- Shared Modal Overlay Styles ---------------------- */
.client-modal-overlay,
.modal-overlay-create {
    display: flex;
    visibility: hidden;
    opacity: 0;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.client-modal-overlay.active,
.modal-overlay-create.active {
    visibility: visible;
    opacity: 1;
}

/* ---------------------- Modal Content ---------------------- */
.client-modal-content,
.modal-content-create {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    max-width: 700px;
    width: 95%;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transform: scale(0.95);
    transition: transform 0.3s ease;
}

.client-modal-overlay.active .client-modal-content,
.modal-overlay-create.active .modal-content-create {
    transform: scale(1);
}

/* Close button for modals */
.client-close-button,
.close-button-create {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
    transition: color 0.3s;
}
.client-close-button:hover,
.close-button-create:hover {
    color: #0052cc;
}

/* ---------------------- Shared Modal Overlay ---------------------- */
.modal-overlay {
    display: flex;
    visibility: hidden;
    opacity: 0;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.modal-overlay.active {
    visibility: visible;
    opacity: 1;
}

/* ---------------------- Shared Modal Content ---------------------- */
.modal-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    max-width: 700px;
    width: 95%;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transform: scale(0.95);
    transition: transform 0.3s ease;
}

.modal-overlay.active .modal-content {
    transform: scale(1);
}

/* ---------------------- Shared Close Button ---------------------- */
.modal-close-button {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
    transition: color 0.3s;
}
.modal-close-button:hover {
    color: #0052cc;
}


</style>

<script>
/* document.addEventListener('DOMContentLoaded', function () {
    // View Client Modal
    const viewButtons = document.querySelectorAll('.ab-viewClientDetails');
    const viewModal = document.getElementById('amClientViewModal');
    const closeViewBtn = document.getElementById('closeClientViewModal');

    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (!viewModal) return;

            // No dynamic assignments needed – values are already static in HTML
            viewModal.classList.add('active');
            viewModal.style.display = 'flex';
        });
    });

    if (closeViewBtn) {
        closeViewBtn.addEventListener('click', () => {
            if (viewModal) {
                viewModal.classList.remove('active');
                viewModal.style.display = 'none';
            }
        });
    }

    if (viewModal) {
        viewModal.addEventListener('click', e => {
            if (e.target === viewModal) {
                viewModal.classList.remove('active');
                viewModal.style.display = 'none';
            }
        });
    }
}); */
</script>

<!-- Modal JS -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const createButtons = document.querySelectorAll('.ab-openCreateClient');
    const createModal = document.getElementById('amClientCreateModal');
    const closeCreateBtn = document.getElementById('closeClientCreateModal');
    const createAvatarInput = document.getElementById('create_client_profile_picture');
    const createAvatarPreview = document.getElementById('createPreviewClientAvatar');

    // Open modal
    createButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (createModal) createModal.classList.add('active');
        });
    });

    // Close modal with X
    if (closeCreateBtn) {
        closeCreateBtn.addEventListener('click', () => {
            if (createModal) createModal.classList.remove('active');
        });
    }

    // Close modal on overlay click
    if (createModal) {
        createModal.addEventListener('click', e => {
            if (e.target === createModal) {
                createModal.classList.remove('active');
            }
        });
    }

    // Preview avatar image
    if (createAvatarInput && createAvatarPreview) {
        createAvatarInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    createAvatarPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Close modal on ESC key
    document.addEventListener('keydown', function (e) {
        if (e.key === "Escape" && createModal.classList.contains('active')) {
            createModal.classList.remove('active');
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.ab-editClient');
    const editModal = document.getElementById('amClientEditModal');
    const closeEditBtn = document.getElementById('closeClientEditModal');
    const avatarInput = document.getElementById('edit_client_profile_picture');
    const avatarPreview = document.getElementById('editPreviewClientAvatar');

    // Open modal on any edit button click
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Get data attributes from the clicked button
            const clientId = button.getAttribute('data-id');
            const clientName = button.getAttribute('data-name');
            const clientEmail = button.getAttribute('data-email');
            const clientPhone = button.getAttribute('data-phone');
            const clientAddress = button.getAttribute('data-address');
            const clientCompany = button.getAttribute('data-company');
            const clientBroker = button.getAttribute('data-broker');
            const clientAvatar = button.getAttribute('data-avatar');
            
            // Populate the form fields with the data
            document.getElementById('edit_client_id').value = clientId;
            document.getElementById('edit_client_full_name').value = clientName;
            document.getElementById('edit_client_email').value = clientEmail;
            document.getElementById('edit_client_phone').value = clientPhone;
            document.getElementById('edit_client_address').value = clientAddress;
            document.getElementById('edit_client_company').value = clientCompany;
            document.getElementById('edit_client_reference_number').value = clientBroker;
            document.getElementById('editPreviewClientAvatar').src = clientAvatar;
            
            // Show the modal
            if (editModal) {
                editModal.style.display = 'flex';
                setTimeout(() => {
                    editModal.classList.add('active');
                }, 10);
            }
        });
    });

    // Close modal on "X"
    if (closeEditBtn) {
        closeEditBtn.addEventListener('click', () => {
            if (editModal) {
                editModal.classList.remove('active');
                setTimeout(() => {
                    editModal.style.display = 'none';
                }, 300);
            }
        });
    }

    // Close modal when clicking outside content
    if (editModal) {
        editModal.addEventListener('click', e => {
            if (e.target === editModal) {
                editModal.classList.remove('active');
                setTimeout(() => {
                    editModal.style.display = 'none';
                }, 300);
            }
        });
    }

    // Avatar preview
    if (avatarInput && avatarPreview) {
        avatarInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    avatarPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        
        // Click on image to trigger file input
        avatarPreview.addEventListener('click', function() {
            avatarInput.click();
        });
    }
    
    // Form submission
    const editClientForm = document.getElementById('editClientForm');
    if (editClientForm) {
        editClientForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Client information updated successfully!');
            editModal.classList.remove('active');
            setTimeout(() => {
                editModal.style.display = 'none';
            }, 300);
        });
    }
});
</script>
