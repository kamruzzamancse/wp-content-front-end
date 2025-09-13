<!-- Client Create Modal -->
<div class="amClientCreateModal modal-overlay-create" style="display:none; align-items:center; justify-content:center; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:9999;">
  <div class="modal-content-create">
    <div class="client-create-container">
      <div class="create-header">
        <h2>Create New Client</h2>
        <span class="closeClientCreateModal close-button-create">&times;</span>
      </div>
      <form class="createClientForm" method="POST" enctype="multipart/form-data" novalidate>
        <div class="create-content">
          <div class="create-pic-container">
            <label class="create-client-avatar-label" title="Click to upload profile picture">
              <img class="create-client-avatar previewAvatar" src="https://placehold.co/200x200?text=Upload+Photo" alt="Profile Preview">
              <input type="file" class="create_client_profile_picture" name="client_profile_picture" accept="image/*" style="display:none;">
            </label>
            <p>Click image to upload</p>
          </div>
          <div class="create-details">
            <div class="create-detail-row">
              <label class="create-detail-label">Full Name:</label>
              <input class="create-detail-value create_client_full_name" type="text" name="client_full_name" required placeholder="Enter full name">
            </div>
            <div class="create-detail-row">
              <label class="create-detail-label">Email:</label>
              <input class="create-detail-value create_client_email" type="email" name="client_email" required placeholder="Enter email address">
            </div>
            <div class="create-detail-row">
              <label class="create-detail-label">Phone Number:</label>
              <input class="create-detail-value create_client_phone" type="text" name="client_phone" placeholder="Enter phone number">
            </div>
            <div class="create-detail-row">
              <label class="create-detail-label">Address:</label>
              <input class="create-detail-value create_client_address" type="text" name="client_address" placeholder="Enter address">
            </div>
            <div class="create-detail-row">
              <label class="create-detail-label">Company Name:</label>
              <input class="create-detail-value create_client_company_name" type="text" name="client_company_name" placeholder="Enter company name">
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

<style>
/* Modal overlay */
.amClientCreateModal {
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
.modal-content-create {
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
.client-create-container .create-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 25px 0 25px;
}

.client-create-container .create-header h2 {
  font-size: 22px;
  font-weight: 700;
  margin: 0;
}

.closeClientCreateModal {
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
  color: #555;
  transition: 0.2s;
}

.closeClientCreateModal:hover {
  color: #000;
}

/* Content layout */
.create-content {
  display: flex;
  padding: 20px 25px;
  gap: 30px;
}

/* Avatar section */
.create-pic-container {
  flex: 0 0 150px;
  text-align: center;
}

.create-client-avatar {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  cursor: pointer;
  border: 2px solid #ddd;
  transition: 0.2s;
}

.create-client-avatar:hover {
  border-color: #007bff;
}

.create-pic-container p {
  margin-top: 8px;
  font-size: 13px;
  color: #555;
}

/* Form fields */
.create-details {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.create-detail-row {
  display: flex;
  flex-direction: column;
}

.create-detail-label {
  font-weight: 600;
  margin-bottom: 5px;
  color: #333;
}

.create-detail-value {
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
  outline: none;
  transition: 0.2s;
}

.create-detail-value:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 2px rgba(0,123,255,0.2);
}

/* Submit button */
button[type="submit"] {
  margin: 0 25px 20px;
  background-color: #007bff;
  color: #fff!important;
  border: none;
  padding: 12px 25px;
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
  .create-content {
    flex-direction: column;
    align-items: center;
  }
  .create-pic-container {
    margin-bottom: 20px;
  }
  .modal-content-create {
    width: 100%;
  }
}

/* Animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px);}
  to { opacity: 1; transform: translateY(0);}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Image preview functionality
  document.querySelectorAll('.create_client_profile_picture').forEach(input => {
    input.addEventListener('change', function() {
      const file = this.files[0];
      if(file) {
        const reader = new FileReader();
        reader.onload = e => {
          this.closest('.create-pic-container').querySelector('.previewAvatar').src = e.target.result;
        }
        reader.readAsDataURL(file);
      }
    });
  });

  // Modal close functionality
  document.querySelectorAll('.closeClientCreateModal').forEach(btn => {
    btn.addEventListener('click', function() {
      this.closest('.amClientCreateModal').style.display = 'none';
    });
  });

  document.querySelectorAll('.amClientCreateModal').forEach(modal => {
    modal.addEventListener('click', e => {
      if(e.target === modal) modal.style.display = 'none';
    });
  });

  // Form submission
  document.querySelectorAll('.createClientForm').forEach(form => {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Client created successfully! (This is a demo)');
      this.closest('.amClientCreateModal').style.display = 'none';
    });
  });
});
</script>