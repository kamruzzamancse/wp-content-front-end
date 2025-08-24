<div class="task-monitoring-content">
    <!-- Stats Cards -->
    <div class="tm-stats-cards">
        <div class="tm-stat-card">
            <h3>TOTAL TASKS</h3>
            <div class="tm-number">42</div>
            <div class="tm-indicator tm-up">+5% from last week</div>
        </div>
        <div class="tm-stat-card">
            <h3>PENDING TASKS</h3>
            <div class="tm-number">18</div>
            <div class="tm-indicator tm-up">+2% from last week</div>
        </div>
        <div class="tm-stat-card">
            <h3>IN PROGRESS</h3>
            <div class="tm-number">12</div>
            <div class="tm-indicator tm-down">-3% from last week</div>
        </div>
        <div class="tm-stat-card">
            <h3>COMPLETED</h3>
            <div class="tm-number">12</div>
            <div class="tm-indicator tm-up">+8% from last week</div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="tm-dashboard-container">
        <!-- Left Column -->
        <div class="tm-left-column">
            <!-- Task List Card -->
            <div class="tm-card">
                <div class="tm-card-header">
                    <h2>All Tasks by Status</h2>
                </div>
                <div class="tm-filter-options">
                    <select id="tm-status-filter">
                        <option value="all">All Statuses</option>
                        <option value="pending">Pending</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                    <select id="tm-realtor-filter">
                        <option value="all">All Realtors</option>
                        <option value="realtor1">John Smith</option>
                        <option value="realtor2">Emily Johnson</option>
                        <option value="realtor3">Michael Brown</option>
                    </select>
                    <input type="text" placeholder="Search tasks...">
                    <button class="tm-filter-btn">Apply Filters</button>
                </div>
                <div class="tm-task-list">
                    <!-- Task Items -->
                    <div class="tm-task-item">
                        <div class="tm-task-header">
                            <div class="tm-task-title">Property Documentation Review</div>
                            <div class="tm-task-status">Pending</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Realtor: John Smith</div>
                            <div>Client: Robert Davis</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Due: 2023-06-15</div>
                            <div>Property: 123 Main St</div>
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary" onclick="tmOpenReassignModal()">Reassign</button>
                            <button class="tm-btn tm-btn-danger" onclick="tmCancelTask()">Cancel</button>
                        </div>
                    </div>

                    <div class="tm-task-item tm-in-progress">
                        <div class="tm-task-header">
                            <div class="tm-task-title">Contract Signing</div>
                            <div class="tm-task-status">In Progress</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Realtor: Emily Johnson</div>
                            <div>Client: Sarah Wilson</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Due: 2023-06-18</div>
                            <div>Property: 456 Oak Ave</div>
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary" onclick="tmOpenReassignModal()">Reassign</button>
                            <button class="tm-btn tm-btn-danger" onclick="tmCancelTask()">Cancel</button>
                        </div>
                    </div>

                    <div class="tm-task-item tm-completed">
                        <div class="tm-task-header">
                            <div class="tm-task-title">Initial Consultation</div>
                            <div class="tm-task-status">Completed</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Realtor: Michael Brown</div>
                            <div>Client: Jennifer Lee</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Completed: 2023-06-10</div>
                            <div>Property: 789 Pine Rd</div>
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary" onclick="tmOpenReassignModal()">Reassign</button>
                            <button class="tm-btn tm-btn-danger" onclick="tmCancelTask()">Cancel</button>
                        </div>
                    </div>

                    <div class="tm-task-item">
                        <div class="tm-task-header">
                            <div class="tm-task-title">Home Inspection</div>
                            <div class="tm-task-status">Pending</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Realtor: John Smith</div>
                            <div>Client: David Miller</div>
                        </div>
                        <div class="tm-task-details">
                            <div>Due: 2023-06-20</div>
                            <div>Property: 101 Elm St</div>
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary" onclick="tmOpenReassignModal()">Reassign</button>
                            <button class="tm-btn tm-btn-danger" onclick="tmCancelTask()">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="tm-right-column">
            <!-- Realtor-Client Interactions Card -->
            <div class="tm-card">
                <div class="tm-card-header">
                    <h2>Realtor-Client Interactions</h2>
                </div>
                <div class="tm-filter-options">
                    <select>
                        <option value="all">All Interactions</option>
                        <option value="message">Messages</option>
                        <option value="meeting">Meetings</option>
                        <option value="call">Calls</option>
                    </select>
                </div>
                <div class="tm-interaction-list">
                    <!-- Interaction Items -->
                    <div class="tm-interaction-item">
                        <div class="tm-interaction-header">
                            <div class="tm-interaction-title">John Smith → Robert Davis</div>
                            <div class="tm-interaction-time">Today, 10:30 AM</div>
                        </div>
                        <div class="tm-interaction-details">
                            Message: Discussed property documentation requirements
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary">View Details</button>
                        </div>
                    </div>

                    <div class="tm-interaction-item">
                        <div class="tm-interaction-header">
                            <div class="tm-interaction-title">Emily Johnson → Sarah Wilson</div>
                            <div class="tm-interaction-time">Yesterday, 3:45 PM</div>
                        </div>
                        <div class="tm-interaction-details">
                            Meeting: Contract review at client's office
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary">View Details</button>
                        </div>
                    </div>

                    <div class="tm-interaction-item">
                        <div class="tm-interaction-header">
                            <div class="tm-interaction-title">Michael Brown → Jennifer Lee</div>
                            <div class="tm-interaction-time">Jun 12, 2023, 11:20 AM</div>
                        </div>
                        <div class="tm-interaction-details">
                            Call: Initial consultation about property requirements
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary">View Details</button>
                        </div>
                    </div>

                    <div class="tm-interaction-item">
                        <div class="tm-interaction-header">
                            <div class="tm-interaction-title">John Smith → David Miller</div>
                            <div class="tm-interaction-time">Jun 11, 2023, 4:15 PM</div>
                        </div>
                        <div class="tm-interaction-details">
                            Message: Scheduled home inspection for next week
                        </div>
                        <div class="tm-task-actions">
                            <button class="tm-btn tm-btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reassign Task Modal -->
<div class="tm-modal" id="tm-reassignModal">
    <div class="tm-modal-content">
        <div class="tm-modal-header">
            <h2>Reassign Task</h2>
            <span class="tm-close" onclick="tmCloseReassignModal()">&times;</span>
        </div>
        <div class="tm-form-group">
            <label for="tm-task-name">Task Name</label>
            <input type="text" id="tm-task-name" value="Property Documentation Review" disabled>
        </div>
        <div class="tm-form-group">
            <label for="tm-current-realtor">Current Realtor</label>
            <input type="text" id="tm-current-realtor" value="John Smith" disabled>
        </div>
        <div class="tm-form-group">
            <label for="tm-new-realtor">Assign to New Realtor</label>
            <select id="tm-new-realtor">
                <option value="">Select a realtor</option>
                <option value="realtor1">John Smith</option>
                <option value="realtor2">Emily Johnson</option>
                <option value="realtor3">Michael Brown</option>
            </select>
        </div>
        <div class="tm-form-group">
            <label for="tm-reassign-reason">Reason for Reassignment</label>
            <textarea id="tm-reassign-reason" rows="3" placeholder="Provide a reason for reassignment"></textarea>
        </div>
        <div class="tm-form-actions">
            <button class="tm-btn tm-btn-danger" onclick="tmCloseReassignModal()">Cancel</button>
            <button class="tm-btn tm-btn-primary" onclick="tmConfirmReassignment()">Confirm Reassignment</button>
        </div>
    </div>
</div>

<style>
/* Task Monitoring Specific Styles - Won't interfere with existing styles */
.task-monitoring-content {
    background-color: #F5F9FF;
    min-height: calc(100vh - 60px);
}

.tm-stats-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.tm-stat-card {
    background: #FFFFFF;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.tm-stat-card h3 {
    color: #757575;
    font-size: 14px;
    margin-bottom: 10px;
}

.tm-stat-card .tm-number {
    font-size: 28px;
    font-weight: 700;
    color: #1976D2;
}

.tm-stat-card .tm-indicator {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    font-size: 14px;
}

.tm-indicator.tm-up {
    color: #4CAF50;
}

.tm-indicator.tm-down {
    color: #F44336;
}

.tm-dashboard-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 20px;
}

.tm-card {
    background: #FFFFFF;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.tm-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.tm-card-header h2 {
    color: #1976D2;
    font-size: 18px;
}

.tm-filter-options {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.tm-filter-options select, .tm-filter-options input {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

.tm-filter-btn {
    background: #1976D2;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.tm-task-list {
    max-height: 400px;
    overflow-y: auto;
}

.tm-task-item {
    padding: 15px;
    border-left: 4px solid #FF9800;
    border-radius: 5px;
    margin-bottom: 15px;
    background: #f9f9f9;
}

.tm-task-item.tm-in-progress {
    border-left-color: #2196F3;
}

.tm-task-item.tm-completed {
    border-left-color: #4CAF50;
}

.tm-task-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.tm-task-title {
    font-weight: 600;
    color: #333333;
}

.tm-task-status {
    font-size: 12px;
    padding: 4px 8px;
    border-radius: 15px;
    background: #BBDEFB;
    color: #1976D2;
}

.tm-task-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    font-size: 14px;
    color: #757575;
}

.tm-task-actions {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.tm-btn {
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 13px;
}

.tm-btn-primary {
    background: #1976D2;
    color: white;
}

.tm-btn-danger {
    background: #F44336;
    color: white;
}

.tm-interaction-list {
    max-height: 400px;
    overflow-y: auto;
}

.tm-interaction-item {
    padding: 15px;
    border-left: 4px solid #2196F3;
    border-radius: 5px;
    margin-bottom: 15px;
    background: #f9f9f9;
}

.tm-interaction-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.tm-interaction-title {
    font-weight: 600;
    color: #333333;
}

.tm-interaction-time {
    font-size: 12px;
    color: #757575;
}

.tm-interaction-details {
    font-size: 14px;
    color: #757575;
    margin-bottom: 10px;
}

.tm-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.tm-modal-content {
    background: white;
    padding: 25px;
    border-radius: 10px;
    width: 500px;
    max-width: 90%;
}

.tm-modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.tm-modal-header h2 {
    color: #1976D2;
}

.tm-close {
    font-size: 24px;
    cursor: pointer;
}

.tm-form-group {
    margin-bottom: 15px;
}

.tm-form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
}

.tm-form-group select, .tm-form-group input, .tm-form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

.tm-form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
}

@media (max-width: 1200px) {
    .tm-stats-cards {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .tm-dashboard-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .tm-stats-cards {
        grid-template-columns: 1fr;
    }
    
    .tm-filter-options {
        flex-direction: column;
    }
}
</style>

<script>
// Function to open reassign modal
function tmOpenReassignModal() {
    document.getElementById('tm-reassignModal').style.display = 'flex';
}

// Function to close reassign modal
function tmCloseReassignModal() {
    document.getElementById('tm-reassignModal').style.display = 'none';
}

// Function to confirm reassignment
function tmConfirmReassignment() {
    const newRealtor = document.getElementById('tm-new-realtor').value;
    const reason = document.getElementById('tm-reassign-reason').value;
    
    if (!newRealtor) {
        alert('Please select a realtor to assign this task to.');
        return;
    }
    
    if (!reason) {
        alert('Please provide a reason for reassignment.');
        return;
    }
    
    // In a real application, you would send this data to the server
    alert(`Task reassigned successfully to ${newRealtor}`);
    tmCloseReassignModal();
}

// Function to cancel a task
function tmCancelTask() {
    if (confirm('Are you sure you want to cancel this task? This action cannot be undone.')) {
        // In a real application, you would send a request to the server
        alert('Task cancelled successfully');
    }
}

// Close modal if clicked outside of modal content
window.onclick = function(event) {
    const modal = document.getElementById('tm-reassignModal');
    if (event.target === modal) {
        tmCloseReassignModal();
    }
};

// Filter functionality
document.getElementById('tm-status-filter').addEventListener('change', function() {
    // In a real application, this would filter the task list
    console.log('Filtering by status:', this.value);
});
</script>