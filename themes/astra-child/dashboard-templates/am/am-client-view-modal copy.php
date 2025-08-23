<!-- Client View Modal -->
<div id="amClientViewModal" class="modal-overlay-create" style="display:none; align-items:center; justify-content:center; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:9999;">
    <div class="modal-content-create">

        <div class="client-view-container">
            <div class="create-header">
                <h2>Client Details</h2>
                <span id="closeClientViewModal" class="close-button-create">&times;</span>
            </div>

            <div class="create-content">
                <div class="create-pic-container">
                    <img class="create-client-avatar" id="viewClientAvatar" src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/08/client-photo.jpg'); ?>" alt="Client Avatar">
                </div>

                <div class="create-details">
                    <div class="create-detail-row">
                        <label class="create-detail-label">Full Name:</label>
                        <p id="view_client_full_name" class="create-detail-value" style="border:none; padding-left:0;">Md. Anamul Haque</p>
                    </div>

                    <div class="create-detail-row">
                        <label class="create-detail-label">Email:</label>
                        <p id="view_client_email" class="create-detail-value" style="border:none; padding-left:0;">anamul.haque@example.com</p>
                    </div>

                    <div class="create-detail-row">
                        <label class="create-detail-label">Phone Number:</label>
                        <p id="view_client_phone" class="create-detail-value" style="border:none; padding-left:0;">01971843463</p>
                    </div>

                    <div class="create-detail-row">
                        <label class="create-detail-label">Address:</label>
                        <p id="view_client_address" class="create-detail-value" style="border:none; padding-left:0;">123 Midtown Ave, New York, NY 10001</p>
                    </div>

                    <div class="create-detail-row">
                        <label class="create-detail-label">Company Name:</label>
                        <p id="view_client_company" class="create-detail-value" style="border:none; padding-left:0;">Prime Realty Associates</p>
                    </div>

                    <div class="create-detail-row">
                        <label class="create-detail-label">Client Reference Number:</label>
                        <p id="view_client_reference_number" class="create-detail-value" style="border:none; padding-left:0;">BRK-2023-5876</p>
                    </div>
                </div>
        </div>
    </div>
</div>

<style>
/* Modal Overlay */
.modal-overlay-create {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 9999;
  align-items: center;
  justify-content: center;
  overflow-y: auto;
  padding: 1rem;
  box-sizing: border-box;
}

/* Show modal when active */
.modal-overlay-create.active {
  display: flex;
}

/* Modal content box */
.modal-content-create {
  background: #fff;
  border-radius: 8px;
  max-width: 500px;
  width: 100%;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  padding: 20px 30px;
  box-sizing: border-box;
  position: relative;
  animation: fadeInScale 0.3s ease forwards;
}

/* Animation for modal */
@keyframes fadeInScale {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Header */
.create-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
  border-bottom: 1px solid #e0e0e0;
  padding-bottom: 10px;
}

.create-header h2 {
  margin: 0;
  font-size: 1.5rem;
  font-weight: 600;
  color: #333;
}

/* Close button */
.close-button-create {
  cursor: pointer;
  font-size: 1.8rem;
  color: #666;
  line-height: 1;
  transition: color 0.2s ease;
}

.close-button-create:hover {
  color: #000;
}

/* Container for avatar and details */
.client-view-container {
  display: flex;
  flex-direction: column;
}

/* Avatar container */
.create-pic-container {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.create-client-avatar {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #ddd;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Details */
.create-details {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.create-detail-row {
  display: flex;
  gap: 0.75rem;
  align-items: flex-start;
  border-bottom: 1px solid #eee;
}

.create-detail-label {
  flex-shrink: 0;
  width: 200px;
  font-weight: 600;
  color: #555;
  font-size: 1rem;
}

.create-detail-value {
  flex-grow: 1;
  color: #222;
  font-size: 1rem;
  margin: 0;
  padding-left: 0;
  border: none;
  word-wrap: break-word;
  line-height: 1.4;
}

/* Responsive adjustments */
@media (max-width: 600px) {
  .modal-content-create {
    padding: 15px 20px;
    margin: 1rem;
  }
  
  .create-detail-row {
    flex-direction: column;
    gap: 0.25rem;
  }
  
  .create-detail-label {
    width: 100%;
  }
}

</style>
