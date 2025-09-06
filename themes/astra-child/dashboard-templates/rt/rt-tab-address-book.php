<div class="ab-container">
    <div class="ab-table-header">
        <div class="ab-header-left">
            <h1 class="header-title">Address Book</h1>
        </div>
        <div class="ab-header-right">
            <div class="ab-search-box">
                <span class="pt-search-icon">🔍</span>
                <input type="text" class="pt-search-input" placeholder="Search: Client Name">
            </div>
            <div class="ab-action-buttons">
                <button class="ab-btn ab-btn-import">
                    <span style="color: #000" class="dashicons dashicons-upload"></span> Import
                </button>
                <!-- Fancy Export Dropdown Button -->
                <div class="ab-export-dropdown">
                    <button class="ab-btn ab-btn-export">
                        <span class="dashicons dashicons-download"></span> Export
                    </button>
                </div>
            </div>
        </div>
    </div>
    <table>
      <thead>
          <tr>
              <th class="ab-sl-column">Profile</th>
              <th class="client-name">Client Name</th>
              <th class="email">Email</th>
              <th class="phone-number">Phone Number</th>
              <th class="notes">Notes</th>
              <th class="ab-actions-column">Actions</th>
          </tr>
      </thead>
      <tbody>
          <?php
          // Array of clients
          $clients = [
              ['name'=>'Afsana Hamid Mim','email'=>'Support.info@gmail.com','phone'=>'999-888-666','notes'=>'Prefers evening meetings. Interested in commercial properties.'],
              ['name'=>'John D. Smith','email'=>'john.smith@business.com','phone'=>'555-123-4567','notes'=>'Looking for luxury apartments. Budget: $500K-$800K. Quick decision maker.'],
              ['name'=>'Emily Carter','email'=>'emily.carter@example.com','phone'=>'777-222-9999','notes'=>'First-time home buyer. Needs guidance through the process. Flexible on location.'],
              ['name'=>'Michael Johnson','email'=>'michael.johnson@example.com','phone'=>'888-333-4444','notes'=>'Investment properties only. Prefers multi-family units. Cash buyer.'],
              ['name'=>'Sophia Williams','email'=>'sophia.williams@example.com','phone'=>'999-555-1111','notes'=>'Downsizing after retirement. Wants single-story home. Must have garden space.'],
              ['name'=>'David Brown','email'=>'david.brown@example.com','phone'=>'444-777-2222','notes'=>'Vacation home buyer. Interested in beachfront properties. Visits quarterly.'],
              ['name'=>'Olivia Martinez','email'=>'olivia.martinez@example.com','phone'=>'333-666-8888','notes'=>'Relocating for work. Needs to close within 60 days. School district important.'],
              ['name'=>'James Lee','email'=>'james.lee@example.com','phone'=>'222-444-5555','notes'=>'Looking for fixer-upper properties. Handyman background. Budget conscious.'],
              ['name'=>'Isabella Thompson','email'=>'isabella.thompson@example.com','phone'=>'555-888-9999','notes'=>'Eco-friendly features required. Solar panels, energy efficient. Willing to pay premium.'],
              ['name'=>'William Garcia','email'=>'william.garcia@example.com','phone'=>'777-999-0000','notes'=>'Property developer. Seeks land for new construction. Minimum 5 acres.']
          ];

          foreach($clients as $index => $client):
          ?>
          <tr class="client-row" data-client-id="<?php echo $index+1; ?>">
              <td class="ab-sl-column" data-label="#SL">
                  <!-- Random Profile Pic -->
                  <img src="https://i.pravatar.cc/40?img=<?php echo rand(1,70); ?>" 
                      alt="Profile Pic" class="profile-pic">
              </td>
              <td data-label="Client Name"><?php echo $client['name']; ?></td>
              <td data-label="Email"><?php echo $client['email']; ?></td>
              <td data-label="Phone Number"><?php echo $client['phone']; ?></td>
              <td data-label="Notes"><?php echo $client['notes']; ?></td>
              <td class="ab-actions-column" data-label="Actions">
                  <div class="ab-action-icons">
                      <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                      <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                      <span class="ab-action-icon" title="Delete">🗑️</span>
                  </div>
              </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>

</div>

<!-- Edit Client Modal -->
<div id="editClientModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeEditModal">&times;</span>
    <h2 class="modal-title">Edit Client Details</h2>
    <form id="editClientForm">
      <div class="form-group">
        <label for="clientName">Client Name</label>
        <input type="text" id="clientName" name="clientName" required>
      </div>
      <div class="form-group">
        <label for="clientEmail">Email</label>
        <input type="email" id="clientEmail" name="clientEmail" required>
      </div>
      <div class="form-group">
        <label for="clientPhone">Phone Number</label>
        <input type="tel" id="clientPhone" name="clientPhone" pattern="[0-9\-]+" required>
      </div>
      <div class="form-group">
        <label for="clientNotes">Notes</label>
        <input type="text" id="clientNotes" name="clientNotes" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="closingDate">House Closing Date</label>
        <input type="date" id="closingDate" name="closingDate" required>
      </div>
      <button type="submit" class="save-btn" style="color: #FFF!important;">Save</button>
    </form>
  </div>
</div>

<?php 
    include locate_template('dashboard-templates/rt/rt-client-details-modal.php');
?>


<style>
.dashicons {
  color: #FFF;
}
/* Base Table Styling */
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  font-size: 14px;
  background: #fff;
  table-layout: fixed; /* Ensures column widths are respected */
}

/* Column Width Adjustments */
.ab-sl-column {
  width: 50px;
  text-align: center;
}

.ab-actions-column {
  width: 50px;
}

/* Set specific widths for each column using class names */
.client-name {
  width: 15%;
  min-width: 150px;
  font-size: 14px;
  color: #FFF;
  font-weight: 600;
}

.email {
  width: 15%;
  min-width: 150px;
}

.phone-number {
  width: 15%;
  min-width: 150px;
}

.notes {
  width: 40%;
  min-width: 330px;
}

/* Table Head */
thead th {
  text-align: left;
  padding: 10px;
  border-bottom: 2px solid #ddd;
  font-weight: 600;
}

/* Table Body */
tbody td {
  padding: 10px;
  border-bottom: 1px solid #eee;
  vertical-align: middle;
  /* overflow handling */
  max-width: 200px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Tooltip style */
tbody td:hover::after {
  content: attr(title); /* will show text from title attribute */
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
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
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

/* Clickable row styles */
tbody tr.client-row {
  cursor: pointer;
  transition: background-color 0.2s;
}

tbody tr.client-row:hover {
  background-color: #f5f5f5;
}

/* Don't apply hover effect to actions column */
tbody tr.client-row .ab-actions-column {
  cursor: default;
}

tbody tr.client-row .ab-actions-column:hover {
  background-color: transparent;
}

/* Mobile Responsive (Card Layout) */
@media screen and (max-width: 768px) {
  /* Reset table elements to block layout */
  table:not(.client-details),
  table:not(.client-details) thead,
  table:not(.client-details) tbody,
  table:not(.client-details) th,
  table:not(.client-details) tr {
    display: block;
    width: 100%;
  }
  
  /* Hide table header */
  table:not(.client-details) thead {
    display: none;
  }
  
  /* Style each table row as a card */
  table:not(.client-details) tr {
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 12px;
    background: #f9f9ff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    box-sizing: border-box; /* Ensure padding is included in width calculation */
  }
  
  /* Style each table cell */
  table:not(.client-details) td {
    display: flex;
    flex-direction: column; /* Stack label and value vertically */
    width: 100%; /* Ensure cell takes full width */
    padding: 8px 0;
    border: none;
    border-bottom: 1px solid #eee;
    max-width: none !important;
    white-space: normal;
    overflow: visible;
    text-overflow: unset;
    box-sizing: border-box; /* Ensure padding is included in width calculation */
  }
  
  /* Remove border from last cell */
  table:not(.client-details) td:last-child {
    border-bottom: none;
  }
  
  /* Style the label (from data-label attribute) */
  table:not(.client-details) td::before {
    content: attr(data-label);
    font-weight: 600;
    color: #333;
    margin-bottom: 4px; /* Space between label and value */
  }
  
  /* Special handling for actions column */
  table:not(.client-details) .ab-actions-column {
    flex-direction: row; /* Keep actions horizontal */
    justify-content: space-between; /* Align label and icons to opposite ends */
    align-items: center; /* Vertically center content */
    padding: 8px 0;
  }
  
  /* Style the label for actions column */
  table:not(.client-details) .ab-actions-column::before {
    content: attr(data-label);
    font-weight: 600;
    color: #333;
    margin-bottom: 0; /* Remove margin since it's now horizontal */
    margin-right: 0; /* Remove margin since we're using justify-content */
  }
  
  /* Ensure action icons are properly spaced */
  table:not(.client-details) .ab-action-icons {
    gap: 10px;
  }
  
  /* Reset hover tooltip for mobile */
  table:not(.client-details) td:hover::after {
    display: none;
  }
}
</style>

<style>
/* Modal Styles */
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  width: 400px;
  max-width: 90%;
  position: relative;
}

.close {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 24px;
  cursor: pointer;
}

.modal-title {
  text-align: left; /* Left align title */
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: bold;
}

/* Form Styles */
.form-group {
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
  font-weight: 600;
  text-align: left; /* Left align labels */
}

input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Button Style */
.save-btn {
  background: #007bff!important; /* Blue Button */
  border: none;
  padding: 10px 15px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  transition: 0.3s;
}

.save-btn:hover {
  background: #0056b3;
}
</style>

<script>
  document.querySelectorAll('.ab-action-icon[title="Edit"]').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('editClientModal').style.display = 'flex';
    });
  });

  document.getElementById('closeEditModal').addEventListener('click', () => {
    document.getElementById('editClientModal').style.display = 'none';
  });

  document.getElementById('editClientForm').addEventListener('submit', function(e) {
    e.preventDefault();
    if (!this.checkValidity()) {
      alert('Please fill in all fields correctly.');
      return;
    }
    alert('Client details saved successfully!');
    document.getElementById('editClientModal').style.display = 'none';
  });
</script>

<script>
  const clientDetailsModal = document.getElementById('clientDetailsModal');
  const closeClientDetailsModalBtn = document.getElementById('closeClientDetailsModal');
  
  // View button click handlers
  document.querySelectorAll('.ab-viewClientDetails').forEach(btn => {
      btn.addEventListener('click', function(e) {
          e.stopPropagation(); // Prevent row click event from firing
          if(clientDetailsModal){
              clientDetailsModal.style.display = 'flex';
          }
      });
  });
  
  // Row click handlers
  document.querySelectorAll('tbody tr.client-row').forEach(row => {
      row.addEventListener('click', function(e) {
          // Check if click was on actions column or any of its children
          if (e.target.closest('.ab-actions-column')) {
              return; // Do nothing if clicked on actions column
          }
          
          // Find the view button in this row and trigger its click
          const viewButton = this.querySelector('.ab-viewClientDetails');
          if (viewButton) {
              viewButton.click();
          }
      });
  });
  
  if (closeClientDetailsModalBtn) {
      closeClientDetailsModalBtn.addEventListener('click', () => {
          if(clientDetailsModal){
              clientDetailsModal.style.display = 'none';
          }
      });
  }
  
  if (clientDetailsModal) {
      clientDetailsModal.addEventListener('click', e => {
          if(e.target === clientDetailsModal){
              clientDetailsModal.style.display = 'none';
          }
      });
  }
</script>