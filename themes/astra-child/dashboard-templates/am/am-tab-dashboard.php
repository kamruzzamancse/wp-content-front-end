<div class="dashboard-top">
    <div class="dashboard-top-left">
        <!-- Dashboard Overview Section -->
        <div class="stats-grid">
            <!-- Total Properties Card -->
            <div class="stat-card">
                <h3>
                    <span class="dashicons dashicons-admin-home"></span> 
                    <?php echo esc_html__('Total Properties', 'text-domain'); ?>
                </h3>
                <p><?php echo esc_html(50); ?></p>
            </div>

            <!-- Total Realtors Card -->
            <div class="stat-card">
                <h3>
                    <span class="dashicons dashicons-groups"></span> 
                    <?php echo esc_html__('Total Realtors', 'text-domain'); ?>
                </h3>
                <p><?php echo esc_html(60); ?></p>
            </div>

            <!-- Total Clients Card -->
            <div class="stat-card">
                <h3>
                    <span class="dashicons dashicons-groups"></span> 
                    <?php echo esc_html__('Total Clients', 'text-domain'); ?>
                </h3>
                <p><?php echo esc_html(70); ?></p>
            </div>
        </div>

        <!-- Task Status Overview Section -->
        <div class="task-status-overview">
            <div class="status-card pending">
                <div class="status-icon">
                    <span class="dashicons dashicons-clock"></span>
                </div>
                <h3>Pending Tasks</h3>
                <p class="task-count">35 Tasks</p>
                <p class="description">Tasks awaiting assignment or action from realtor/client.</p>
                <button class="view-tasks">View Pending Tasks</button>
                <div class="progress-bar" style="width: 70%;"></div>
            </div>

            <div class="status-card in-progress">
                <div class="status-icon">
                    <span class="dashicons dashicons-update"></span>
                </div>
                <h3>In Progress Tasks</h3>
                <p class="task-count">25 Tasks</p>
                <p class="description">Tasks currently being worked on or under review.</p>
                <button class="view-tasks">View In Progress Tasks</button>
                <div class="progress-bar" style="width: 50%;"></div>
            </div>

            <div class="status-card completed">
                <div class="status-icon">
                    <span class="dashicons dashicons-yes"></span>
                </div>
                <h3>Completed Tasks</h3>
                <p class="task-count">45 Tasks</p>
                <p class="description">Tasks that are finalized and submitted.</p>
                <button class="view-tasks">View Completed Tasks</button>
                <div class="progress-bar" style="width: 100%;"></div>
            </div>
        </div>

        <!-- System Activity Logs Section -->
        <div class="system-activity-logs">
            <h1 class="header-title">System Activity Logs</h1>
            <table class="activity-logs-table">
                <thead>
                    <tr>
                        <th>Log Type</th>
                        <th>Details</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PHP Loop or Static Random Logs -->
                    <?php
                    $activity_types = ['Login', 'Task Assignment', 'Task Completion', 'File Upload', 'Message Sent'];
                    $users = ['Admin', 'Realtor John', 'Client Sarah', 'Realtor Mike', 'Admin'];
                    $activities = [
                        'User "Admin" logged in',
                        'Task "Review Property" assigned to Realtor John',
                        'Task "Complete Property Review" marked as completed',
                        'File "PropertyDetails.pdf" uploaded by Admin',
                        'Message "Meeting Request" sent to Client Sarah'
                    ];
                    for ($i = 0; $i < 10; $i++) {
                        $activity = $activities[array_rand($activities)];
                        $activity_type = $activity_types[array_rand($activity_types)];
                        $user = $users[array_rand($users)];
                        $date = date("Y-m-d H:i:s", strtotime("-" . rand(1, 7) . " days"));
                        echo "<tr>
                                <td>$activity_type</td>
                                <td>$activity</td>
                                <td>$date</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<style>
/* General Styling for Dashboard */
.dashboard-top {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 20px 0;
    width: 100%; /* Ensure the content spans full width */
    max-width: 100%; /* Prevent unnecessary constraining */
}

.dashboard-top-left {
    flex: 70%; /* Takes up most of the space */
    max-width: 100%; /* Ensures full use of the width */
}

.dashboard-top-right {
    flex: 30%; /* Takes up remaining space */
    max-width: 100%; /* Ensures full use of the width */
}

/* Stats Grid */
.stats-grid {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    width: 100%; /* Ensure the cards span full width */
}

.stat-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    flex: 1;
    text-align: center;
    width: 100%; /* Ensure cards span full width */
}

.stat-card h3 {
    font-size: 1.4rem;
    font-weight: 600;
    margin: 10px 0;
}

.stat-card p {
    font-size: 1.6rem;
    font-weight: 700;
}

/* Task Status Overview */
.task-status-overview {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    width: 100%; /* Ensure the cards span full width */
}

.status-card {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    width: 32%; /* Ensure cards span full width */
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.status-card h3 {
    font-size: 1.4rem;
    font-weight: 600;
    margin: 10px 0;
}

.status-card .task-count {
    font-size: 1.6rem;
    font-weight: 700;
}

.status-card .progress-bar {
    height: 6px;
    background-color: #f2f2f2;
    margin-top: 15px;
    border-radius: 3px;
}

.status-card .progress-bar::after {
    content: "";
    display: block;
    height: 100%;
    background-color: #3498db;
    border-radius: 3px;
}

/* Custom Background for each status */
.pending {
    background-color: #fff3e0;
    border-left: 6px solid #f39c12;
}

.in-progress {
    background-color: #eaf7ff;
    border-left: 6px solid #2980b9;
}

.completed {
    background-color: #d4edda;
    border-left: 6px solid #27ae60;
}

/* System Activity Logs */
.system-activity-logs {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    width: 100%; /* Ensure it takes full width */
}

.activity-logs-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    margin-top: 20px;
}

.activity-logs-table th, .activity-logs-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.activity-logs-table th {
    background: #046bd2;
    font-weight: 600;
    color: #FFF;
}

/* Mobile Responsive */
@media screen and (max-width: 768px) {
    .stats-grid, .task-status-overview {
        flex-direction: column;
    }

    .stat-card, .status-card {
        width: 100%; /* Ensure cards are full width on mobile */
    }

    .activity-logs-table {
        display: block;
        width: 100%;
    }

    .activity-logs-table th, .activity-logs-table td {
        display: block;
        width: 100%;
    }
}
</style>
