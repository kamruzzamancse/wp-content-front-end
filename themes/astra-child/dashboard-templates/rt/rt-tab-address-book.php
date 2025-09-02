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
                    <span class="dashicons dashicons-upload"></span> Import
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
                <th class="ab-sl-column">#SL</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th class="ab-actions-column">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="client-row" data-client-id="1">
                <td class="ab-sl-column" data-label="#SL">01</td>
                <td data-label="Client Name">Afsana Hamid Mim</td>
                <td data-label="Email">Support.info@gmail.com</td>
                <td data-label="Phone Number">999-888-666</td>
                <td data-label="Address">New York</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                    <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                    <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                    <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="2">
                <td class="ab-sl-column" data-label="#SL">02</td>
                <td data-label="Client Name">John D. Smith</td>
                <td data-label="Email">john.smith@business.com</td>
                <td data-label="Phone Number">555-123-4567</td>
                <td data-label="Address">Los Angeles, CA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="3">
                <td class="ab-sl-column" data-label="#SL">03</td>
                <td data-label="Client Name">Emily Carter</td>
                <td data-label="Email">emily.carter@example.com</td>
                <td data-label="Phone Number">777-222-9999</td>
                <td data-label="Address">Chicago, IL</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="4">
                <td class="ab-sl-column" data-label="#SL">04</td>
                <td data-label="Client Name">Michael Johnson</td>
                <td data-label="Email">michael.johnson@example.com</td>
                <td data-label="Phone Number">888-333-4444</td>
                <td data-label="Address">Houston, TX</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="5">
                <td class="ab-sl-column" data-label="#SL">05</td>
                <td data-label="Client Name">Sophia Williams</td>
                <td data-label="Email">sophia.williams@example.com</td>
                <td data-label="Phone Number">999-555-1111</td>
                <td data-label="Address">San Francisco, CA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="6">
                <td class="ab-sl-column" data-label="#SL">06</td>
                <td data-label="Client Name">David Brown</td>
                <td data-label="Email">david.brown@example.com</td>
                <td data-label="Phone Number">444-777-2222</td>
                <td data-label="Address">Miami, FL</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="7">
                <td class="ab-sl-column" data-label="#SL">07</td>
                <td data-label="Client Name">Olivia Martinez</td>
                <td data-label="Email">olivia.martinez@example.com</td>
                <td data-label="Phone Number">333-666-8888</td>
                <td data-label="Address">Seattle, WA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="8">
                <td class="ab-sl-column" data-label="#SL">08</td>
                <td data-label="Client Name">James Lee</td>
                <td data-label="Email">james.lee@example.com</td>
                <td data-label="Phone Number">222-444-5555</td>
                <td data-label="Address">Boston, MA</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="9">
                <td class="ab-sl-column" data-label="#SL">09</td>
                <td data-label="Client Name">Isabella Thompson</td>
                <td data-label="Email">isabella.thompson@example.com</td>
                <td data-label="Phone Number">555-888-9999</td>
                <td data-label="Address">Denver, CO</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
            <tr class="client-row" data-client-id="10">
                <td class="ab-sl-column" data-label="#SL">10</td>
                <td data-label="Client Name">William Garcia</td>
                <td data-label="Email">william.garcia@example.com</td>
                <td data-label="Phone Number">777-999-0000</td>
                <td data-label="Address">Phoenix, AZ</td>
                <td class="ab-actions-column" data-label="Actions">
                    <div class="ab-action-icons">
                        <span class="ab-action-icon ab-viewClientDetails" title="View">👁️</span>
                        <span class="ab-action-icon ab-editClientDetails" title="Edit">✏️</span>
                        <span class="ab-action-icon" title="Delete">🗑️</span>
                    </div>
                </td>
            </tr>
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
        <label for="clientAddress">Address</label>
        <input type="text" id="clientAddress" name="clientAddress" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="closingDate">House Closing Date</label>
        <input type="date" id="closingDate" name="closingDate" required>
      </div>
      <button type="submit" class="save-btn">Save</button>
    </form>
  </div>
</div>

<?php 
    include locate_template('dashboard-templates/rt/rt-client-details-modal.php');
?>
<style>
/* Mobile Responsive (Card Layout) */
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
}
/* Base Table Styling */
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  font-size: 14px;
  background: #fff;
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
  max-width: 200px;              /* adjust per column */
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
  box-shadow: 0 2px 8px rgba(0,0,0,0.3);
}
/* Responsive: Add data-label before content on small screens */
@media (max-width: 768px) {
  table thead {
    display: none; /* hide headers */
  }
  table, tbody, tr, td {
    display: block;
    width: 100%;
  }
  tbody tr {
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    background: #f9f9ff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  }
  tbody td {
    display: flex;
    justify-content: space-between;   /* label left, value right */
    align-items: center;
    padding: 8px 0;
    border: none;
    border-bottom: 1px solid #eee;
    max-width: none!important;
  }
  tbody td:last-child {
    border-bottom: none;
  }
  tbody td::before {
    content: attr(data-label);
    font-weight: 600;
    color: #333;
    flex: 1;
    text-align: left;                 /* label left aligned */
  }
  tbody td {
    text-align: right;                /* value right aligned */
  }
  /* Actions row special style */
  tbody td.ab-actions-column {
    justify-content: flex-end;
  }
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

/* New styles for clickable rows */
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
  background: #007bff; /* Blue Button */
  color: white;
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