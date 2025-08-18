<div class="dashboard-section leads-section">
    <h1 class="ab-header-title">Leads</h1>
    <table class="leads-table">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Last Touch</th>
                <th>Status</th>
                <th>Notes</th>
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
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="lead-popup-overlay" id="leadPopupOverlay">
    <div class="lead-popup">
        <button class="close-popup">&times;</button>
        <div class="popup-header">
            <h1 class="popup-heading">Leads</h1>
            <h2 class="popup-client-name">John Smith</h2>
        </div>
        
        <div class="popup-grid">
            <div class="popup-column">
                <div class="popup-section">
                    <span class="popup-label">Last Touch</span>
                    <span class="popup-value">20 July 25, 11pm</span>
                </div>
            </div>
            
            <div class="popup-column">
                <div class="popup-section">
                    <span class="popup-label">Status</span>
                    <div class="status-container">
                        <span class="status-dot status-hot"></span>
                        <span class="status-text">Hot</span>
                    </div>
                </div>
            </div>
            
            <div class="popup-fullwidth">
                <div class="popup-section">
                    <span class="popup-label">Notes</span>
                    <p class="popup-value">Just a quick update about contract.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
/* General Styling */
.dashboard-section {
  padding: 16px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  overflow-x: auto;
}

.ab-header-title {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 12px;
  color: #333;
}

/* Table Styling (Desktop) */
.leads-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.leads-table th,
.leads-table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #eee;
}

/* .leads-table th {
  background: #f5f5f5;
  font-weight: 600;
  color: #444;
} */

/* Status Dots */
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
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
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
    flex: 1; /* takes left side */
    text-align: left;
  }

  /* ✅ FIX: Keep status dot + text together */
  .leads-table td[data-label="Status"] {
    justify-content: flex-start;
    gap: 10px;
  }

  .leads-table td[data-label="Status"]::before {
    margin-right: auto; /* keeps "Status" label aligned left */
  }

  .leads-table td[data-label="Status"] span,
  .leads-table td[data-label="Status"] {
    align-items: center;
    gap: 6px;
  }
}
</style>