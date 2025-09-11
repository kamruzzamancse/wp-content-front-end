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
              <td class="ab-sl-column" data-label=" ">
                  <img src="https://i.pravatar.cc/40?img=<?php echo rand(1,70); ?>" alt="Profile Pic" class="profile-pic">
              </td>
              <td class="client-name" data-label="Client Name">
                  <span class="client-name-text"><?php echo $client['name']; ?></span>
              </td>
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
      <button type="submit" class="save-btn">Save</button>
    </form>
  </div>
</div>

<?php 
    include locate_template('dashboard-templates/rt/rt-client-details-modal.php');
?>

<style>
/* ==== Table & Modal CSS ==== */
table { width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px; background: #fff; table-layout: fixed; }
.ab-sl-column { width: 50px; text-align: center; }
.ab-actions-column { width: 50px; }
.client-name { width: 15%; min-width: 150px; font-size: 14px; font-weight: 600; }
.client-name-text { cursor: pointer; color: #0073aa; text-decoration: underline; }
.client-name-text:hover { color: #0056b3; }
.email { width: 15%; min-width: 150px; }
.phone-number { width: 15%; min-width: 150px; }
.notes { width: 40%; min-width: 330px; }
thead th { text-align: left; padding: 10px; border-bottom: 2px solid #ddd; font-weight: 600; }
tbody td { padding: 10px; border-bottom: 1px solid #eee; vertical-align: middle; max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
tbody td:hover::after { content: attr(title); position: absolute; left: 0; top: 100%; background: #333; color: #fff; padding: 6px 10px; border-radius: 4px; white-space: normal; min-width: 200px; max-width: 400px; z-index: 1000; font-size: 13px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
.ab-action-icons { display: flex; gap: 8px; }
.ab-action-icon { cursor: pointer; font-size: 16px; transition: transform 0.2s; }
.ab-action-icon:hover { transform: scale(1.2); }
tbody tr.client-row:hover { background-color: #f5f5f5; }
tbody tr.client-row .ab-actions-column { cursor: default; }
tbody tr.client-row .ab-actions-column:hover { background-color: transparent; }

/* Modal & Form */
.modal { display: none; position: fixed; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center; }
.modal-content { background: #fff; padding: 25px; border-radius: 8px; width: 400px; max-width: 90%; position: relative; }
.close { position: absolute; top: 10px; right: 15px; font-size: 24px; cursor: pointer; }
.modal-title { text-align: left; margin-bottom: 15px; font-size: 20px; font-weight: bold; }
.form-group { margin-bottom: 15px; display: flex; flex-direction: column; }
label { margin-bottom: 5px; font-weight: 600; text-align: left; }
input { padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
.save-btn { background: #007bff!important; color: #FFF!important; border: none; padding: 10px 15px; font-size: 16px; border-radius: 4px; cursor: pointer; width: 100%; transition: 0.3s; }
.save-btn:hover { background: #0056b3; }

/* Responsive Table */
@media screen and (max-width: 768px) {
  table:not(.client-details), table:not(.client-details) thead, table:not(.client-details) tbody, table:not(.client-details) th, table:not(.client-details) tr { display: block; width: 100%; }
  table:not(.client-details) thead { display: none; }
  table:not(.client-details) tr { margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px; padding: 12px; background: #f9f9ff; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
  table:not(.client-details) td { display: flex; flex-direction: column; width: 100%; padding: 8px 0; border: none; border-bottom: 1px solid #eee; max-width: none !important; white-space: normal; overflow: visible; text-overflow: unset; }
  table:not(.client-details) td:last-child { border-bottom: none; }
  table:not(.client-details) td::before { content: attr(data-label); font-weight: 600; color: #333; margin-bottom: 4px; }
  table:not(.client-details) .ab-actions-column { flex-direction: row; justify-content: space-between; align-items: center; padding: 8px 0; }
  table:not(.client-details) .ab-actions-column::before { content: attr(data-label); font-weight: 600; color: #333; margin-bottom: 0; margin-right: 0; }
  table:not(.client-details) .ab-action-icons { gap: 10px; }
  table:not(.client-details) td:hover::after { display: none; }
}

table {
    border-collapse: separate; /* Required for border-radius to work on tables */
    border-spacing: 0;         /* Remove gaps between cells */
    border: 1px solid #ddd;    /* Optional: keeps border visible */
    border-radius: 10px 10px 0 0; /* Top-left & top-right rounded */
    overflow: hidden;          /* Ensures rounding shows */
}

/* Optional: Match the top header row */
table thead th:first-child {
    border-top-left-radius: 10px;
}
table thead th:last-child {
    border-top-right-radius: 10px;
}
.modal button:last-child {
    color: #fff!important;
}
</style>

<script>
// Edit Client Modal
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
    if (!this.checkValidity()) { alert('Please fill in all fields correctly.'); return; }
    alert('Client details saved successfully!');
    document.getElementById('editClientModal').style.display = 'none';
});

// View Client Modal (only Client Name text)
const clientDetailsModal = document.getElementById('clientDetailsModal');
const closeClientDetailsModalBtn = document.getElementById('closeClientDetailsModal');
document.querySelectorAll('tbody tr.client-row td.client-name .client-name-text').forEach(span => {
    span.addEventListener('click', function(e){
        e.stopPropagation();
        const row = this.closest('tr');
        const viewButton = row.querySelector('.ab-viewClientDetails');
        if(viewButton) viewButton.click();
    });
});
document.querySelectorAll('.ab-viewClientDetails').forEach(btn => {
    btn.addEventListener('click', function(e){
        e.stopPropagation();
        if(clientDetailsModal) clientDetailsModal.style.display = 'flex';
    });
});
if(closeClientDetailsModalBtn){
    closeClientDetailsModalBtn.addEventListener('click', () => { if(clientDetailsModal) clientDetailsModal.style.display = 'none'; });
}
if(clientDetailsModal){
    clientDetailsModal.addEventListener('click', e => { if(e.target === clientDetailsModal){ clientDetailsModal.style.display = 'none'; } });
}
</script>
