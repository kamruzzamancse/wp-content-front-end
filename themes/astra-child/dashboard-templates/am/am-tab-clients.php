<div class="ab-container">
    <div class="ab-table-header">
        <div class="ab-header-left">
            <h1 class="header-title">Clients</h1>
        </div>
        <div class="ab-header-right">
            <div class="ab-search-box">
                <span class="pt-search-icon">🔍</span>
                <input type="text" class="pt-search-input" placeholder="Search: Realtor Name">
            </div>
            <div class="ab-action-buttons">
                <button class="ab-btn ab-btn-import">
                    <span class="dashicons dashicons-upload"></span> Import
                </button>
                <button class="ab-btn ab-btn-export">
                    <span class="dashicons dashicons-download"></span> Export
                </button>
                <button class="ab-btn ab-btn-create ab-openCreateRealtor">
                    <span class="dashicons dashicons-plus-alt"></span> Add Clients
                </button>
            </div>

        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th class="ab-sl-column">#SL</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th class="ab-actions-column">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row 01 -->
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
                            data-company="Best Realty"
                            data-broker="BRK-2025-1234"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 02 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">02</td>
                <td data-label="Client Name">Liam Anderson</td>
                <td data-label="Email">liam.anderson@realtorspro.com</td>
                <td data-label="Phone Number">888-123-4567</td>
                <td data-label="Address">Dallas, TX</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="2"
                            data-name="Liam Anderson"
                            data-email="liam.anderson@realtorspro.com"
                            data-phone="888-123-4567"
                            data-address="Dallas, TX"
                            data-company="Realtors Pro"
                            data-broker="BRK-2025-5678"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 03 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">03</td>
                <td data-label="Client Name">Amelia Johnson</td>
                <td data-label="Email">ameliaj@homesales.net</td>
                <td data-label="Phone Number">555-777-2323</td>
                <td data-label="Address">Orlando, FL</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="3"
                            data-name="Amelia Johnson"
                            data-email="ameliaj@homesales.net"
                            data-phone="555-777-2323"
                            data-address="Orlando, FL"
                            data-company="Home Sales"
                            data-broker="BRK-2025-9012"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 04 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">04</td>
                <td data-label="Client Name">Noah Wilson</td>
                <td data-label="Email">noah.wilson@estateplus.org</td>
                <td data-label="Phone Number">321-654-9870</td>
                <td data-label="Address">Atlanta, GA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="4"
                            data-name="Noah Wilson"
                            data-email="noah.wilson@estateplus.org"
                            data-phone="321-654-9870"
                            data-address="Atlanta, GA"
                            data-company="Estate Plus"
                            data-broker="BRK-2025-3456"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 05 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">05</td>
                <td data-label="Client Name">Emma Davis</td>
                <td data-label="Email">emma.davis@realtymarket.io</td>
                <td data-label="Phone Number">707-555-9087</td>
                <td data-label="Address">San Diego, CA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="5"
                            data-name="Emma Davis"
                            data-email="emma.davis@realtymarket.io"
                            data-phone="707-555-9087"
                            data-address="San Diego, CA"
                            data-company="Realty Market"
                            data-broker="BRK-2025-7890"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 06 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">06</td>
                <td data-label="Client Name">William Moore</td>
                <td data-label="Email">willmoore@prohomes.biz</td>
                <td data-label="Phone Number">800-333-4466</td>
                <td data-label="Address">Phoenix, AZ</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="6"
                            data-name="William Moore"
                            data-email="willmoore@prohomes.biz"
                            data-phone="800-333-4466"
                            data-address="Phoenix, AZ"
                            data-company="Pro Homes"
                            data-broker="BRK-2025-4321"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 07 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">07</td>
                <td data-label="Client Name">Charlotte Lee</td>
                <td data-label="Email">charlotte.lee@urbanestate.com</td>
                <td data-label="Phone Number">609-901-7890</td>
                <td data-label="Address">Seattle, WA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="7"
                            data-name="Charlotte Lee"
                            data-email="charlotte.lee@urbanestate.com"
                            data-phone="609-901-7890"
                            data-address="Seattle, WA"
                            data-company="Urban Estate"
                            data-broker="BRK-2025-6543"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 08 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">08</td>
                <td data-label="Client Name">Benjamin Harris</td>
                <td data-label="Email">ben.harris@luxuryrealtors.co</td>
                <td data-label="Phone Number">444-222-9999</td>
                <td data-label="Address">Las Vegas, NV</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="8"
                            data-name="Benjamin Harris"
                            data-email="ben.harris@luxuryrealtors.co"
                            data-phone="444-222-9999"
                            data-address="Las Vegas, NV"
                            data-company="Luxury Realtors"
                            data-broker="BRK-2025-8765"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 09 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">09</td>
                <td data-label="Client Name">Harper White</td>
                <td data-label="Email">harper.white@primehomes.info</td>
                <td data-label="Phone Number">212-888-1234</td>
                <td data-label="Address">Charlotte, NC</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="9"
                            data-name="Harper White"
                            data-email="harper.white@primehomes.info"
                            data-phone="212-888-1234"
                            data-address="Charlotte, NC"
                            data-company="Prime Homes"
                            data-broker="BRK-2025-9876"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>

            <!-- Row 10 -->
            <tr>
                <td class="ab-sl-column" data-label="#SL">10</td>
                <td data-label="Client Name">Elijah Martin</td>
                <td data-label="Email">elijah@martinrealtygroup.com</td>
                <td data-label="Phone Number">999-101-5050</td>
                <td data-label="Address">Nashville, TN</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span 
                            class="ab-action-icon ab-editClient" 
                            title="Edit"
                            data-id="10"
                            data-name="Elijah Martin"
                            data-email="elijah@martinrealtygroup.com"
                            data-phone="999-101-5050"
                            data-address="Nashville, TN"
                            data-company="Martin Realty Group"
                            data-broker="BRK-2025-1122"
                            data-avatar="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>">✏️
                        </span>
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
/* ---------------------- Responsive Table ---------------------- */
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
        background: #f9f9ff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
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
        color: #333;
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
    tbody td {
        max-width: none!important;
    }
}

/* ---------------------- Table Styles ---------------------- */
table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 14px;
    background: #fff;
}
thead th {
    text-align: left;
    padding: 10px;
    border-bottom: 2px solid #ddd;
    font-weight: 600;
}
tbody td {
    padding: 10px;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Tooltip for truncated text */
tbody td:hover::after {
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
    box-shadow: 0 2px 8px rgba(0,0,0,0.3);
}

/* Action Icons */
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

/* ---------------------- Modal Styles ---------------------- */
.modal-overlay {
    display: flex;
    visibility: hidden;
    opacity: 0;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease;
}
.modal-overlay.active {
    visibility: visible;
    opacity: 1;
}
.modal-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 6px;
    max-width: 700px;
    width: 95%;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
}
.close-button {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.ab-viewClientDetails');
    const modal = document.getElementById('amRealtorViewModal');
    const closeModalBtn = document.getElementById('closeRealtorModal');

    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (modal) modal.classList.add('active');
        });
    });

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', () => {
            if (modal) modal.classList.remove('active');
        });
    }

    if (modal) {
        modal.addEventListener('click', e => {
            if (e.target === modal) modal.classList.remove('active');
        });
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const createButtons = document.querySelectorAll('.ab-openCreateRealtor'); // Add this class to your "Create Realtor" button(s)
    const createModal = document.getElementById('amRealtorCreateModal');
    const closeCreateBtn = document.getElementById('closeRealtorCreateModal');
    const createAvatarInput = document.getElementById('create_realtor_profile_picture');
    const createAvatarPreview = document.getElementById('createPreviewAvatar');

    // Open modal
    createButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (createModal) createModal.style.display = 'flex';
        });
    });

    // Close on close button
    if (closeCreateBtn) {
        closeCreateBtn.addEventListener('click', () => {
            if (createModal) createModal.style.display = 'none';
        });
    }

    // Close on outside click
    if (createModal) {
        createModal.addEventListener('click', e => {
            if (e.target === createModal) {
                createModal.style.display = 'none';
            }
        });
    }

    // Handle avatar preview
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
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.ab-editClient');
    const editModal = document.getElementById('amClientEditModal');
    const closeBtn = document.getElementById('closeClientEditModal');
    const avatarInput = document.getElementById('edit_realtor_profile_picture');
    const avatarPreview = document.getElementById('editPreviewAvatar');

    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (!editModal) return;

            // Safely set field values
            const setValue = (id, value) => {
                const field = document.getElementById(id);
                if (field) field.value = value || '';
            };

            setValue('edit_realtor_id', button.dataset.id);
            setValue('edit_realtor_full_name', button.dataset.name);
            setValue('edit_realtor_email', button.dataset.email);
            setValue('edit_realtor_phone', button.dataset.phone);
            setValue('edit_realtor_address', button.dataset.address);
            setValue('edit_realtor_company_name', button.dataset.company);
            // Removed broker number since no field exists

            avatarPreview.src = button.dataset.avatar || "<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>";

            editModal.style.display = 'flex';
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            editModal.style.display = 'none';
        });
    }

    if (editModal) {
        editModal.addEventListener('click', e => {
            if (e.target === editModal) {
                editModal.style.display = 'none';
            }
        });
    }

    // Handle avatar change
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
    }
});
</script>


