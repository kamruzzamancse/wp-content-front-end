<div class="dashboard-section leads-section">
    <div class="leads-header">
        <h1 class="header-title">Leads</h1>
        <button id="addLeadBtn" class="add-lead-btn">+ Add Lead</button>
    </div>
    <table class="leads-table">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Last Touch</th>
                <th>Status</th>
                <th>Notes</th>
                <th style="width:80px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $leads = [
                ['name' => 'John Smith', 'time' => '20 July 25, 11pm', 'status' => 'hot', 'notes' => 'Contract update'],
                ['name' => 'Sarah Johnson', 'time' => '19 July 25, 3pm', 'status' => 'warm', 'notes' => 'Follow up needed']
            ];
            
            foreach ($leads as $lead): ?>
            <tr>
                <td data-label="Client Name"><?php echo esc_html($lead['name']); ?></td>
                <td data-label="Last Touch"><?php echo esc_html($lead['time']); ?></td>
                <td data-label="Status">
                    <span class="status-dot status-<?php echo esc_attr($lead['status']); ?>"></span>
                    <?php echo ucfirst($lead['status']); ?>
                </td>
                <td data-label="Notes"><?php echo esc_html($lead['notes']); ?></td>
                <td data-label="Action" style="text-align: center">
                    <span class="edit-lead-btn" title="Edit">✏️</span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Add/Edit Lead Modal -->
<div class="lead-add-modal" id="leadAddModal">
  <div class="lead-add-content">

    <!-- header row -->
    <div class="lead-add-header">
      <h1 class="header-title">Add / Edit Lead</h1>
      <span class="close-lead-modal">&times;</span>
    </div>

    <label for="clientSelect">Select Client:</label>
    <select id="clientSelect">
        <option value="">Choose from Address Book</option>
        <option>John D. Smith</option>
        <option>Emily Carter</option>
        <option>Michael Johnson</option>
        <option>Sophia Williams</option>
    </select><br />

    <label for="statusSelect">Status:</label>
    <select id="statusSelect">
        <option value="hot">Hot</option>
        <option value="warm">Warm</option>
        <option value="cold">Cold</option>
    </select><br />

    <label for="notesInput">Notes:</label>
    <textarea id="notesInput" placeholder="Write notes..." rows="4"></textarea><br />

    <!-- footer row -->
    <div class="lead-add-footer">
      <button id="saveLeadBtn">Save Lead</button>
    </div>

  </div>
</div>

<style>
/* css for lead add modal */
.add-lead-title, #clientSelect, #statusSelect, #notesInput {
  margin-bottom: 20px
}
/* header */
.lead-add-header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 12px;
}
.close-lead-modal {
  font-size: 20px;
  cursor: pointer;
}

/* footer */
.lead-add-footer {
  display: flex;
  justify-content: flex-end; /* aligns button to right */
  margin-top: 16px;
}

#saveLeadBtn {
  background: #2980b9;
  color: #FFF!important;
  padding: 8px 16px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
#saveLeadBtn:hover {
  background: #096cad;
}
.lead-add-modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
  z-index: 2000;
}
.lead-add-content {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  width: 400px;
  max-width: 90%;
}
#notesInput {
  width: 100%;
  padding: 8px;
  border-radius: 6px;
  border: 1px solid #ccc;
  resize: vertical; /* allow vertical resizing only */
  font-family: inherit;
  font-size: 14px;
}
#notesInput:focus {
  outline: none;
  border-color: #2980b9;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}
</style>

<style>
/* General Styling */
.dashboard-section {
  padding: 16px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  overflow-x: auto;
}

/* Table Styling (Desktop) */
.leads-table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd; /* optional table border */
    border-radius: 6px;
    overflow: hidden; /* ensures rounded corners show */
}

.leads-table thead th:first-child {
    border-top-left-radius: 6px;
}

.leads-table thead th:last-child {
    border-top-right-radius: 6px;
}

.leads-table th,
.leads-table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #eee;
}

.status-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-right: 6px;
}

.status-hot { background-color: #e74c3c; }   /* Red */
.status-warm { background-color: #f39c12; }  /* Orange */
.status-cold { background-color: #3498db; }  /* Blue */

.add-lead-btn {
    padding: 8px 16px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    font-weight: 500;
    font-size: 14px;
    white-space: nowrap;
    min-width: 100px;
    background: #2980b9;
    color: #FFF!important;
}
.add-lead-btn:hover {
  background: #096cad;
}
.leads-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Style the ✏️ edit icon */
.edit-lead-btn {
  cursor: pointer;
  font-size: 18px;
  padding: 4px;
  transition: transform 0.2s ease;
}
.edit-lead-btn:hover {
  transform: scale(1.2);
}

/* Remove pointer cursor from table rows and cells */
.leads-table tr,
.leads-table td {
  cursor: default !important;
}

/* Mobile Responsive (Card Style) */
@media screen and (max-width: 768px) {
  .leads-table,
  .leads-table thead,
  .leads-table tbody,
  .leads-table th,
  .leads-table tr {
    display: block;
    width: 100%;
  }

  .leads-table thead {
    display: none;
  }

  .leads-table tr {
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 12px;
    background: #f9f9ff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  }

  .leads-table td {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #eee;
  }

  .leads-table td:last-child {
    border-bottom: none;
  }

  .leads-table td::before {
    content: attr(data-label);
    font-weight: 600;
    color: #333;
    flex: 1;
    text-align: left;
  }

  .leads-table td[data-label="Status"] {
    justify-content: flex-start;
    gap: 10px;
  }

  .leads-table td[data-label="Status"]::before {
    margin-right: auto;
  }
}
</style>

<script>
  /* js for modal control new row insert & edit */
  const modal = document.getElementById('leadAddModal');
  const openBtn = document.getElementById('addLeadBtn');
  const closeBtn = document.querySelector('.close-lead-modal');
  const saveBtn = document.getElementById('saveLeadBtn');
  const leadsTable = document.querySelector('.leads-table tbody');

  let editingRow = null;

  openBtn.addEventListener('click', () => {
    editingRow = null; // reset edit state
    document.getElementById('clientSelect').value = "";
    document.getElementById('statusSelect').value = "hot";
    document.getElementById('notesInput').value = "";
    modal.style.display = 'flex';
  });

  closeBtn.addEventListener('click', () => modal.style.display = 'none');
  window.addEventListener('click', e => { if(e.target === modal) modal.style.display = 'none'; });

  document.addEventListener('click', e => {
    const editBtn = e.target.closest('.edit-lead-btn'); // finds closest element
    if (editBtn) {
      e.stopPropagation();

      editingRow = editBtn.closest('tr'); // get the row
      document.getElementById('clientSelect').value = editingRow.querySelector('td[data-label="Client Name"]').innerText;
      document.getElementById('statusSelect').value = editingRow.querySelector('td[data-label="Status"]').innerText.trim().toLowerCase();
      document.getElementById('notesInput').value = editingRow.querySelector('td[data-label="Notes"]').innerText;

      modal.style.display = 'flex';
    }
  });

  saveBtn.addEventListener('click', () => {
    const client = document.getElementById('clientSelect').value;
    const status = document.getElementById('statusSelect').value;
    const notes = document.getElementById('notesInput').value;

    if (!client) return alert("Please select a client!");

    if (editingRow) {
      editingRow.querySelector('td[data-label="Client Name"]').innerText = client;
      editingRow.querySelector('td[data-label="Status"]').innerHTML = `<span class="status-dot status-${status}"></span>${status.charAt(0).toUpperCase() + status.slice(1)}`;
      editingRow.querySelector('td[data-label="Notes"]').innerText = notes;
      editingRow = null;
      modal.style.display = 'none';
      return;
    }

    const now = new Date();
    const day = now.getDate();
    const month = now.toLocaleString('default', { month: 'long' });
    const year = now.getFullYear().toString().slice(-2);
    let hours = now.getHours();
    const ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12 || 12;
    const formattedDate = `${day} ${month} ${year}, ${hours}${ampm}`;

    const row = document.createElement('tr');
    row.innerHTML = `
      <td data-label="Client Name">${client}</td>
      <td data-label="Last Touch">${formattedDate}</td>
      <td data-label="Status">
          <span class="status-dot status-${status}"></span>
          ${status.charAt(0).toUpperCase() + status.slice(1)}
      </td>
      <td data-label="Notes">${notes}</td>
      <td data-label="Action">
          <span class="edit-lead-btn" title="Edit">✏️</span>
      </td>
    `;

    leadsTable.appendChild(row);
    modal.style.display = 'none';
  });
</script>
