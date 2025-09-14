<!-- Client Edit Modal -->
<div class="amClientEditModal modal-overlay-edit" style="display:none; align-items:center; justify-content:center; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:9999;">
    <div class="modal-content-edit">

        <div class="client-edit-container">
            <div class="edit-header">
                <h2>Edit Client Details</h2>
                <span class="closeClientEditModal close-button-edit">&times;</span>
            </div>

            <form class="editClientForm" method="POST" enctype="multipart/form-data" novalidate>
                <div class="edit-content">
                    <div class="edit-pic-container">
                        <label class="edit-client-avatar-label" title="Click to upload profile picture">
                            <img class="edit-client-avatar previewAvatar" src="https://placehold.co/200x200?text=Profile+Photo" alt="Profile Preview">
                            <input type="file" class="edit_client_profile_picture" name="client_profile_picture" accept="image/*" style="display:none;">
                        </label>
                        <p>Click image to change</p>
                    </div>

                    <div class="edit-details">

                        <div class="edit-detail-row">
                            <label class="edit-detail-label">Full Name:</label>
                            <input class="edit-detail-value edit_client_full_name" type="text" name="client_full_name" required placeholder="Enter full name">
                        </div>

                        <div class="edit-detail-row">
                            <label class="edit-detail-label">Email:</label>
                            <input class="edit-detail-value edit_client_email" type="email" name="client_email" required placeholder="Enter email address">
                        </div>

                        <div class="edit-detail-row">
                            <label class="edit-detail-label">Phone Number:</label>
                            <input class="edit-detail-value edit_client_phone" type="text" name="client_phone" placeholder="Enter phone number">
                        </div>

                        <div class="edit-detail-row">
                            <label class="edit-detail-label">Address:</label>
                            <input class="edit-detail-value edit_client_address" type="text" name="client_address" placeholder="Enter address">
                        </div>

                        <div class="edit-detail-row">
                            <label class="edit-detail-label">Note:</label>
                            <textarea class="edit-detail-value edit_client_note" name="client_note" rows="4" placeholder="Enter note"></textarea>
                        </div>

                    </div>
                </div>

                <div style="text-align: right; margin-top: 20px;">
                    <button type="submit" class="edit-submit-btn">Save Changes</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image preview functionality
    document.querySelectorAll('.edit_client_profile_picture').forEach(input => {
        input.addEventListener('change', function() {
            const file = this.files[0];
            if(file) {
                const reader = new FileReader();
                reader.onload = e => {
                    this.closest('.edit-pic-container').querySelector('.previewAvatar').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    });

    // Modal close functionality
    document.querySelectorAll('.closeClientEditModal').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.amClientEditModal').style.display = 'none';
        });
    });

    document.querySelectorAll('.amClientEditModal').forEach(modal => {
        modal.addEventListener('click', e => {
            if(e.target === modal) modal.style.display = 'none';
        });
    });

    // Form submission
    document.querySelectorAll('.editClientForm').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Client details updated successfully! (This is a demo)');
            this.closest('.amClientEditModal').style.display = 'none';
        });
    });
});
</script>

<style>
/* Modal overlay */
.amClientEditModal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* Modal content */
.modal-content-edit {
    background: #fff;
    border-radius: 12px;
    width: 600px;
    max-width: 95%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.2);
    animation: fadeIn 0.2s ease-in-out;
}

/* Header */
.client-edit-container .edit-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 25px 0 25px;
}

.client-edit-container .edit-header h2 {
    font-size: 22px;
    font-weight: 700;
    margin: 0;
}

.closeClientEditModal {
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    color: #555;
    transition: 0.2s;
}

.closeClientEditModal:hover {
    color: #000;
}

/* Content layout */
.edit-content {
    display: flex;
    padding: 20px 25px;
    gap: 30px;
}

/* Avatar section */
.edit-pic-container {
    flex: 0 0 150px;
    text-align: center;
}

.edit-client-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
    border: 2px solid #ddd;
    transition: 0.2s;
}

.edit-client-avatar:hover {
    border-color: #007bff;
}

.edit-pic-container p {
    margin-top: 8px;
    font-size: 13px;
    color: #555;
}

/* Form fields */
.edit-details {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.edit-detail-row {
    display: flex;
    flex-direction: column;
}

.edit-detail-label {
    font-weight: 600;
    margin-bottom: 5px;
    color: #333;
}

.edit-detail-value {
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    outline: none;
    transition: 0.2s;
}

.edit-detail-value:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0,123,255,0.2);
}

/* Submit button */
/* Submit button */
button[type="submit"] {
  margin: 0 25px 20px;
  background-color: #007bff;
  color: #fff!important;
  border: none;
  padding: 10px 25px;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

/* Responsive */
@media screen and (max-width: 768px) {
    .edit-content {
        flex-direction: column;
        align-items: center;
    }

    .edit-pic-container {
        margin-bottom: 20px;
    }

    .modal-content-edit {
        width: 100%;
    }
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px);}
    to { opacity: 1; transform: translateY(0);}
}
</style>

