<div class="dashboard-top">

    <div class="dashboard-top-left">
      
        <!-- <div class="stats-grid">
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
        </div> -->

        <div class="dashboard-section active-clients-section">
          <h1 class="header-title">Active Clients</h1>
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
                  <?php
                  $clients = ["Insurance Co", "Tech Solutions", "Green Energy", "HealthPlus", "Bright Finance", "Global Trade"];
                  $cities = ["New York", "Los Angeles", "Chicago", "Houston", "Miami", "San Francisco"];
                  $notesArr = [
                      "Follow-up required next week.",
                      "Client requested a meeting.",
                      "Pending documents.",
                      "Urgent response needed.",
                      "Initial contact completed.",
                      "Schedule demo session."
                  ];

                  for ($i = 0; $i < 6; $i++):
                      $clientName = $clients[array_rand($clients)];
                      $address = $cities[array_rand($cities)];
                      // Random closing date within next 60 days
                      $closingDate = date("d F", strtotime("+".rand(1,60)." days"));
                      $notes = $notesArr[array_rand($notesArr)];
                  ?>
                  <tr>
                      <td data-label="Client Name"><?= $clientName ?></td>
                      <td data-label="Address"><?= $address ?></td>
                      <td data-label="Closing Date"><?= $closingDate ?></td>
                      <td data-label="Notes"><?= $notes ?></td>
                  </tr>
                  <?php endfor; ?>
              </tbody>
          </table>
        </div>

        <?php include locate_template('dashboard-templates/rt/rt-leads-section.php'); ?>

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

<style>
/* General Styling */
.dashboard-section {
  padding: 16px;
  background: #fff;
  border-radius: 8px; /* Reduced from 12px */
  box-shadow: 0 1px 3px rgba(0,0,0,0.05); /* Softer shadow */
  overflow-x: auto;
}

/* Add this for the calendar container */
.dashboard-top-right {
  padding: 16px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
  overflow-x: auto;
  height: 100%;
}

.calendar-container {
    padding: 16px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    overflow-x: auto;
}

/* Table Styling (Desktop) */
.active-clients-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.active-clients-table th,
.active-clients-table td {
  padding: 8px; /* Reduced from 10px */
  text-align: left;
  border-bottom: 1px solid #f5f5f5; /* Lighter border color */
}

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
    margin-bottom: 10px; /* Reduced from 15px */
    border-radius: 6px; /* Reduced from 8px */
    background: #f9f9ff;
    padding: 0 6px; /* Reduced from 8px */
    box-shadow: 0 1px 2px rgba(0,0,0,0.03); /* Softer shadow */
  }
  
  .active-clients-table td {
    display: flex;
    justify-content: space-between;
    padding: 6px 0; /* Reduced from 8px */
    border-bottom: 1px solid #f8f8f8; /* Lighter border color */
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
    padding: 8px; /* Reduced from 10px */
  }
  
  table {
    border-width: 0 !important;
  }
}
</style>