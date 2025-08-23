<!-- Client Create Modal -->
<div id="amClientCreateModal" class="modal-overlay-create" style="display:none; align-items:center; justify-content:center; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:9999;">
    <div class="modal-content-create">

        <div class="client-create-container">
            <div class="create-header">
                <h2>Create New Client</h2>
                <span id="closeClientCreateModal" class="close-button-create">&times;</span>
            </div>

            <form id="createClientForm" method="POST" enctype="multipart/form-data" novalidate>
                <div class="create-content">
                    <div class="create-pic-container">
                        <label for="create_client_profile_picture" title="Click to upload profile picture">
                            <img class="create-client-avatar" id="createPreviewClientAvatar" src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>" alt="Profile Preview">
                            <input type="file" id="create_client_profile_picture" name="client_profile_picture" accept="image/*" style="display:none;">
                        </label>
                        <p>Click image to upload</p>
                    </div>

                    <div class="create-details">

                        <div class="create-detail-row">
                            <label class="create-detail-label" for="create_client_full_name">Full Name:</label>
                            <input class="create-detail-value" type="text" id="create_client_full_name" name="client_full_name" required placeholder="Enter full name">
                        </div>

                        <div class="create-detail-row">
                            <label class="create-detail-label" for="create_client_email">Email:</label>
                            <input class="create-detail-value" type="email" id="create_client_email" name="client_email" required placeholder="Enter email address">
                        </div>

                        <div class="create-detail-row">
                            <label class="create-detail-label" for="create_client_phone">Phone Number:</label>
                            <input class="create-detail-value" type="text" id="create_client_phone" name="client_phone" placeholder="Enter phone number">
                        </div>

                        <div class="create-detail-row">
                            <label class="create-detail-label" for="create_client_address">Address:</label>
                            <input class="create-detail-value" type="text" id="create_client_address" name="client_address" placeholder="Enter address">
                        </div>

                        <div class="create-detail-row">
                            <label class="create-detail-label" for="create_client_company">Company Name:</label>
                            <input class="create-detail-value" type="text" id="create_client_company" name="client_company" placeholder="Enter company name">
                        </div>

                        <div class="create-detail-row">
                            <label class="create-detail-label" for="create_client_reference_number">Client Reference Number:</label>
                            <input class="create-detail-value" type="text" id="create_client_reference_number" name="client_reference_number" placeholder="Enter reference number">
                        </div>

                    </div>
                </div>

                <div style="text-align: right; margin-top: 20px;">
                    <button type="submit" class="create-submit-btn">Create Client</button>
                </div>
            </form>
        </div>

    </div>
</div>
