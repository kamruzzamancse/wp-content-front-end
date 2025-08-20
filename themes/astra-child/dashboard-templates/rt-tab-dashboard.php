<div class="dashboard-top">
    <div class="dashboard-top-left">
        <div class="stats-grid">
            <div class="stat-card">
                <h3><span class="dashicons dashicons-admin-home"></span> Total Properties</h3>
                <p>50</p>
            </div>
            <div class="stat-card">
                <h3><span class="dashicons dashicons-groups"></span> Total Client</h3>
                <p>60</p>
            </div>
            <div class="stat-card" id="upload-document">
                <h3><span class="dashicons dashicons-media-document"></span> Upload Document</h3>
                <div class="upload-icons">
                    <span class="dashicons dashicons-upload" title="Upload"></span>
                </div>
            </div>
        </div>

        <div class="dashboard-section active-clients-section">
            <h1 class="ab-header-title">Active Clients</h1>
            <table class="active-clients-table">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Address</th>
                        <th>Closing Date</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 6; $i++): ?>
                    <tr>
                        <td data-label="Client Name">Insurance</td>
                        <td data-label="Address">New York</td>
                        <td data-label="Closing Date">22 July</td>
                        <td data-label="Notes">Just a quick follow-up on documents.</td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- RIGHT SIDE -->
    <div class="dashboard-top-right">
        <?php
          $current_user = wp_get_current_user();
          $user_email   = $current_user->user_email;

          if ($user_email) {
              global $wpdb;
              $calendar_id = $wpdb->get_var($wpdb->prepare("
                  SELECT ID 
                  FROM $wpdb->posts 
                  WHERE post_type = 'calendar' 
                    AND post_status = 'publish'
                    AND post_title = %s
                  LIMIT 1
              ", $user_email));

              if ($calendar_id) {
                  echo do_shortcode('[calendar id="' . intval($calendar_id) . '"]');
              } else {
                  echo '<p>No calendar found for your account.</p>';
              }
          } else {
              echo '<p>Please login to see your calendar.</p>';
          }
        ?>
    </div>

<?php include locate_template('dashboard-templates/rt-leads-section.php'); ?>

<style>
/* General Styling */
.dashboard-section {
  padding: 16px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  overflow-x: auto;
}

.ab-header-title {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 12px;
  color: #333;
}

/* Table Styling (Desktop) */
.active-clients-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.active-clients-table th,
.active-clients-table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #eee;
}

/* .active-clients-table th {
  background: #f5f5f5;
  font-weight: 600;
  color: #444;
} */

/* Mobile Responsive (Card Style) */
@media screen and (max-width: 480px) {
  .active-clients-table,
  .active-clients-table thead,
  .active-clients-table tbody,
  .active-clients-table th,
  .active-clients-table tr {
    display: block;
    width: 100%;
  }

  .active-clients-table thead {
    display: none;
  }

  .active-clients-table tr {
    margin-bottom: 15px;
    border-radius: 8px;
    background: #f9f9ff;
    padding: 0 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  }

  .active-clients-table td {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px solid #eee;
  }

  .active-clients-table td:last-child {
    border-bottom: none;
  }

  .active-clients-table td::before {
    content: attr(data-label);
    font-weight: 600;
    color: #333;
  }

  .dashboard-section {
    padding: 10px;
   }

   table {
        border-width: 0!important;
    }

}
</style>