<style>
/* Updated Tracking Property Section */
.tpg-dashboard-container {
    background: #ffffff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.tpg-tracking-section {
    position: relative;
}

.tpg-tracking-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
    gap: 15px;
}

.tpg-section-title {
    margin: 0;
    font-size: 1.5rem!important;
    font-weight: 600;
    color: #2c3e50;
}

.tpg-tracking-summary {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #f8fafd;
    padding: 10px 15px;
    border-radius: 8px;
}

.tpg-amount {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
}

.tpg-year {
    background: #e6f0ff;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 14px;
    color: #4e6ef2;
    font-weight: 500;
}

.tpg-chart-container {
    display: flex;
    height: 250px;
    margin-top: 20px;
    position: relative;
    background: #fafbfc;
    border-radius: 8px;
    padding: 15px;
}

.tpg-y-axis {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding-right: 15px;
    font-size: 12px;
    color: #7f8c8d;
    font-weight: 500;
}

.tpg-bars-container {
    flex: 1;
    display: flex;
    align-items: flex-end;
    gap: 20px;
    padding-bottom: 30px;
    border-bottom: 1px solid #eaeaea;
}

.tpg-chart-bar {
    width: 35px;
    background: linear-gradient(to top, #4e6ef2, #6c8dfa);
    border-radius: 6px 6px 0 0;
    position: relative;
    transition: all 0.3s ease;
    cursor: pointer;
}

.tpg-chart-bar:hover {
    opacity: 0.8;
    transform: translateY(-2px);
}

.tpg-chart-bar::after {
    content: attr(data-value);
    position: absolute;
    top: -25px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 12px;
    font-weight: 600;
    color: #4e6ef2;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.tpg-chart-bar:hover::after {
    opacity: 1;
}

.tpg-x-axis {
    position: absolute;
    bottom: 0;
    left: 45px;
    right: 0;
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
    font-size: 12px;
    color: #7f8c8d;
    font-weight: 500;
}

/* Responsive Design */
@media (max-width: 768px) {
    .tpg-tracking-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .tpg-tracking-summary {
        width: 100%;
        justify-content: space-between;
    }
    
    .tpg-chart-container {
        flex-direction: column;
        height: auto;
    }
    
    .tpg-y-axis {
        flex-direction: row;
        padding-right: 0;
        padding-bottom: 10px;
        order: 2;
    }
    
    .tpg-bars-container {
        flex-direction: row;
        align-items: flex-end;
        gap: 10px;
        padding-bottom: 0;
        border-bottom: none;
        border-left: 1px solid #eaeaea;
        padding-left: 25px;
        order: 1;
        margin-bottom: 15px;
    }
    
    .tpg-chart-bar {
        width: 100%;
        height: auto !important;
        border-radius: 0 6px 6px 0;
    }
    
    .tpg-x-axis {
        position: static;
        flex-wrap: wrap;
        gap: 10px;
        padding-top: 15px;
        padding-left: 45px;
        order: 3;
    }
    
    .tpg-chart-bar::after {
        top: 50%;
        left: -35px;
        transform: translateY(-50%);
    }
}

@media (max-width: 480px) {
    .tpg-bars-container {
        gap: 8px;
    }
    
    .tpg-chart-bar {
        width: 100%;
    }
    
    .tpg-x-axis {
        flex-direction: column;
        gap: 5px;
    }
    
    .tpg-x-axis span {
        margin-bottom: 5px;
    }
}
</style>

<div class="dashboard-top">
    <!-- LEFT SIDE -->
    <div class="dashboard-top-left">
        <div class="stats-grid">
            <div class="stat-card">
                <h3><span class="dashicons dashicons-building"></span> Total Properties</h3>
                <p>20</p>
            </div>
            <div class="stat-card">
                <h3><span class="dashicons dashicons-media-document"></span> Documents</h3>
                <p>5</p>
            </div>
            <div class="stat-card">
                <h3><span class="dashicons dashicons-clock"></span> Pending Tasks</h3>
                <p>10</p>
            </div>
        </div>
        
        <div class="tpg-dashboard-container">
            <!-- Tracking Property Section -->
            <div class="tpg-tracking-section">
                <div class="tpg-tracking-header">
                    <h1 class="tpg-section-title">Tracking Property</h1>
                    <div class="tpg-tracking-summary">
                        <span class="tpg-amount">$8.24k</span>
                        <span class="tpg-year">2025</span>
                    </div>
                </div>
                
                <div class="tpg-chart-container">
                    <div class="tpg-y-axis">
                        <span>9k</span>
                        <span>7k</span>
                        <span>5k</span>
                        <span>3k</span>
                        <span>1k</span>
                    </div>
                    
                    <div class="tpg-bars-container">
                        <div class="tpg-chart-bar" style="height: 85%" data-value="$8.24k"></div>
                        <div class="tpg-chart-bar" style="height: 75%" data-value="$7.50k"></div>
                        <div class="tpg-chart-bar" style="height: 60%" data-value="$6.20k"></div>
                        <div class="tpg-chart-bar" style="height: 45%" data-value="$4.80k"></div>
                        <div class="tpg-chart-bar" style="height: 30%" data-value="$3.20k"></div>
                        <div class="tpg-chart-bar" style="height: 20%" data-value="$2.10k"></div>
                    </div>
                    
                    <div class="tpg-x-axis">
                        <span>10:30 AM</span>
                        <span>11:30 AM</span>
                        <span>12:30 PM</span>
                        <span>1:30 PM</span>
                        <span>2:30 PM</span>
                        <span>3:30 PM</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Realtor under the graph -->
        <div class="cld-box cld-message-box">
            <div class="cld-box-header">
                <span>Message Realtor</span>
                <button class="cld-send-btn">Send</button>
            </div>
            <div class="cld-box-body">
                <textarea class="cld-textarea" placeholder="type message here"></textarea>
            </div>
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

        <!-- Notes under the calendar -->
        <div class="cld-box cld-notes-box">
            <div class="cld-box-header">
                <span>Notes</span>
            </div>
            <div class="cld-box-body">
                <a href="#" class="cld-note-link">+ Note</a>
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
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #eee;
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

<style>
/* Message and Notes Box Styles */
.cld-box {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.cld-box-header {
  background: #3578c6;
  color: #fff;
  padding: 12px 16px;
  font-size: 16px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.cld-send-btn {
  background: transparent;
  border: 2px solid #fff;
  color: #fff;
  font-size: 14px;
  padding: 4px 12px;
  border-radius: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.cld-send-btn:hover {
  background: #fff;
  color: #3578c6;
}

.cld-box-body {
  padding: 16px;
}

.cld-textarea {
  width: 100%;
  min-height: 120px;
  resize: vertical;
  padding: 10px;
  font-size: 14px;
  border: 1px solid #ddd;
  border-radius: 8px;
  outline: none;
  transition: border-color 0.3s ease;
}
.cld-textarea:focus {
  border-color: #3578c6;
}

.cld-note-link {
  display: inline-block;
  font-size: 14px;
  color: #3578c6;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}
.cld-note-link:hover {
  color: #245a92;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
  .dashboard-top {
    display: flex;
    flex-direction: column;
  }
  .dashboard-top-left,
  .dashboard-top-right {
    width: 100%;
  }
  .cld-box {
    margin-top: 15px;
  }
}

@media (max-width: 600px) {
  .cld-box-header {
    font-size: 14px;
    padding: 10px;
  }
  .cld-send-btn {
    font-size: 12px;
    padding: 3px 10px;
  }
  .cld-textarea {
    min-height: 100px;
    font-size: 13px;
  }
}
</style>

<script>
// Add interactivity to the chart bars
document.addEventListener('DOMContentLoaded', function() {
    const bars = document.querySelectorAll('.tpg-chart-bar');
    
    bars.forEach(bar => {
        bar.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            alert('Selected value: ' + value);
        });
    });
});
</script>