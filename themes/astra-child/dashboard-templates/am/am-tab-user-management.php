<div class="assignment-dashboard">
    <div class="ad-header">
        <h1>Assign Realtors and Clients to Each Other</h1>
        <p>Manage relationships between realtors and their assigned clients</p>
    </div>

    <!-- Stats Cards -->
    <div class="ad-stats-grid">
        <div class="ad-stat-card">
            <div class="ad-stat-icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="ad-stat-content">
                <div class="ad-stat-value">24</div>
                <div class="ad-stat-label">TOTAL REALTORS</div>
                <div class="ad-stat-trend positive">+3 this month</div>
            </div>
        </div>

        <div class="ad-stat-card">
            <div class="ad-stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="ad-stat-content">
                <div class="ad-stat-value">142</div>
                <div class="ad-stat-label">ACTIVE CLIENTS</div>
                <div class="ad-stat-trend positive">+12 this month</div>
            </div>
        </div>

        <div class="ad-stat-card">
            <div class="ad-stat-icon">
                <i class="fas fa-link"></i>
            </div>
            <div class="ad-stat-content">
                <div class="ad-stat-value">5.9</div>
                <div class="ad-stat-label">AVERAGE ASSIGNMENTS</div>
                <div class="ad-stat-trend negative">-0.3 from last month</div>
            </div>
        </div>

        <div class="ad-stat-card">
            <div class="ad-stat-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="ad-stat-content">
                <div class="ad-stat-value">18</div>
                <div class="ad-stat-label">UNASSIGNED CLIENTS</div>
                <div class="ad-stat-trend negative">-4 from last week</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ad-content-grid">
        <!-- Assignment Form -->
        <div class="ad-form-section">
            <div class="ad-card">
                <div class="ad-card-header">
                    <h2>Create New Assignment</h2>
                    <div class="ad-card-actions">
                        <button class="ad-btn ad-btn-icon">
                            <i class="fas fa-history"></i>
                        </button>
                    </div>
                </div>
                <div class="ad-card-body">
                    <div class="ad-form">
                        <div class="ad-form-group">
                            <label class="ad-form-label">Assignment Type</label>
                            <div class="ad-radio-group">
                                <label class="ad-radio">
                                    <input type="radio" name="assignmentType" checked>
                                    <span class="ad-radio-checkmark"></span>
                                    Assign Realtor to Client
                                </label>
                                <label class="ad-radio">
                                    <input type="radio" name="assignmentType">
                                    <span class="ad-radio-checkmark"></span>
                                    Assign Client to Realtor
                                </label>
                            </div>
                        </div>

                        <div class="ad-form-row">
                            <div class="ad-form-group">
                                <label class="ad-form-label">Select Realtor</label>
                                <div class="ad-select-wrapper">
                                    <select class="ad-select">
                                        <option value="">Choose a realtor</option>
                                        <option value="realtor1">John Smith (12 clients)</option>
                                        <option value="realtor2">Emily Johnson (8 clients)</option>
                                        <option value="realtor3">Michael Brown (6 clients)</option>
                                        <option value="realtor4">Sarah Williams (9 clients)</option>
                                        <option value="realtor5">Robert Davis (4 clients)</option>
                                    </select>
                                    <i class="fas fa-chevron-down ad-select-arrow"></i>
                                </div>
                            </div>

                            <div class="ad-form-group">
                                <label class="ad-form-label">Select Client</label>
                                <div class="ad-select-wrapper">
                                    <select class="ad-select">
                                        <option value="">Choose a client</option>
                                        <option value="client1">Jennifer Lee (Unassigned)</option>
                                        <option value="client2">David Miller (Unassigned)</option>
                                        <option value="client3">Lisa Johnson (John Smith)</option>
                                        <option value="client4">James Wilson (Emily Johnson)</option>
                                        <option value="client5">Maria Garcia (Unassigned)</option>
                                    </select>
                                    <i class="fas fa-chevron-down ad-select-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="ad-form-group">
                            <label class="ad-form-label">Assignment Notes (Optional)</label>
                            <textarea class="ad-textarea" placeholder="Add any specific notes about this assignment"></textarea>
                        </div>

                        <div class="ad-form-actions">
                            <button class="ad-btn ad-btn-secondary">Clear</button>
                            <button class="ad-btn ad-btn-primary">
                                <i class="fas fa-link ad-btn-icon"></i>
                                Create Assignment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="ad-activity-section">
            <div class="ad-card">
                <div class="ad-card-header">
                    <h2>Recent Assignments</h2>
                    <button class="ad-btn ad-btn-text">View All</button>
                </div>
                <div class="ad-card-body">
                    <div class="ad-activity-list">
                        <div class="ad-activity-item">
                            <div class="ad-activity-content">
                                <div class="ad-activity-main">
                                    <span class="ad-activity-title">John Smith assigned to Jennifer Lee</span>
                                    <span class="ad-activity-time">Today, 10:30 AM</span>
                                </div>
                                <div class="ad-activity-meta">
                                    <span class="ad-activity-author">By: Admin User</span>
                                </div>
                            </div>
                            <div class="ad-activity-actions">
                                <button class="ad-btn ad-btn-icon">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="ad-activity-item">
                            <div class="ad-activity-content">
                                <div class="ad-activity-main">
                                    <span class="ad-activity-title">Emily Johnson assigned to David Miller</span>
                                    <span class="ad-activity-time">Yesterday, 3:45 PM</span>
                                </div>
                                <div class="ad-activity-meta">
                                    <span class="ad-activity-author">By: Admin User</span>
                                </div>
                            </div>
                            <div class="ad-activity-actions">
                                <button class="ad-btn ad-btn-icon">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="ad-activity-item">
                            <div class="ad-activity-content">
                                <div class="ad-activity-main">
                                    <span class="ad-activity-title">Michael Brown assigned to Maria Garcia</span>
                                    <span class="ad-activity-time">Jun 12, 2023, 11:20 AM</span>
                                </div>
                                <div class="ad-activity-meta">
                                    <span class="ad-activity-author">By: Admin User</span>
                                </div>
                            </div>
                            <div class="ad-activity-actions">
                                <button class="ad-btn ad-btn-icon">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="ad-activity-item">
                            <div class="ad-activity-content">
                                <div class="ad-activity-main">
                                    <span class="ad-activity-title">Sarah Williams assigned to Thomas Moore</span>
                                    <span class="ad-activity-time">Jun 11, 2023, 4:15 PM</span>
                                </div>
                                <div class="ad-activity-meta">
                                    <span class="ad-activity-author">By: Admin User</span>
                                </div>
                            </div>
                            <div class="ad-activity-actions">
                                <button class="ad-btn ad-btn-icon">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Realtor List -->
        <div class="ad-realtors-section">
            <div class="ad-card">
                <div class="ad-card-header">
                    <h2>Realtor Assignments</h2>
                    <div class="ad-filter">
                        <select class="ad-filter-select">
                            <option>All Realtors</option>
                            <option>Active Only</option>
                        </select>
                    </div>
                </div>
                <div class="ad-card-body">
                    <div class="ad-realtor-list">
                        <div class="ad-realtor-item">
                            <div class="ad-realtor-avatar">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith">
                            </div>
                            <div class="ad-realtor-info">
                                <h3>John Smith</h3>
                                <p>12 assigned clients</p>
                            </div>
                            <div class="ad-realtor-actions">
                                <button class="ad-btn ad-btn-text">View</button>
                            </div>
                        </div>

                        <div class="ad-realtor-item">
                            <div class="ad-realtor-avatar">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emily Johnson">
                            </div>
                            <div class="ad-realtor-info">
                                <h3>Emily Johnson</h3>
                                <p>8 assigned clients</p>
                            </div>
                            <div class="ad-realtor-actions">
                                <button class="ad-btn ad-btn-text">View</button>
                            </div>
                        </div>

                        <div class="ad-realtor-item">
                            <div class="ad-realtor-avatar">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Michael Brown">
                            </div>
                            <div class="ad-realtor-info">
                                <h3>Michael Brown</h3>
                                <p>6 assigned clients</p>
                            </div>
                            <div class="ad-realtor-actions">
                                <button class="ad-btn ad-btn-text">View</button>
                            </div>
                        </div>

                        <div class="ad-realtor-item">
                            <div class="ad-realtor-avatar">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah Williams">
                            </div>
                            <div class="ad-realtor-info">
                                <h3>Sarah Williams</h3>
                                <p>9 assigned clients</p>
                            </div>
                            <div class="ad-realtor-actions">
                                <button class="ad-btn ad-btn-text">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unassigned Clients -->
        <div class="ad-unassigned-section">
            <div class="ad-card">
                <div class="ad-card-header">
                    <h2>Unassigned Clients</h2>
                    <span class="ad-badge">18</span>
                </div>
                <div class="ad-card-body">
                    <div class="ad-unassigned-list">
                        <div class="ad-unassigned-item">
                            <div class="ad-unassigned-info">
                                <h3>Christopher Adams</h3>
                                <p>Registered: Jun 10, 2023</p>
                            </div>
                            <button class="ad-btn ad-btn-primary ad-btn-sm">Assign</button>
                        </div>

                        <div class="ad-unassigned-item">
                            <div class="ad-unassigned-info">
                                <h3>Amanda Roberts</h3>
                                <p>Registered: Jun 8, 2023</p>
                            </div>
                            <button class="ad-btn ad-btn-primary ad-btn-sm">Assign</button>
                        </div>

                        <div class="ad-unassigned-item">
                            <div class="ad-unassigned-info">
                                <h3>Daniel White</h3>
                                <p>Registered: Jun 5, 2023</p>
                            </div>
                            <button class="ad-btn ad-btn-primary ad-btn-sm">Assign</button>
                        </div>

                        <div class="ad-unassigned-item">
                            <div class="ad-unassigned-info">
                                <h3>Jessica Thompson</h3>
                                <p>Registered: Jun 3, 2023</p>
                            </div>
                            <button class="ad-btn ad-btn-primary ad-btn-sm">Assign</button>
                        </div>

                        <div class="ad-view-more">
                            <a href="#">View all 18 unassigned clients</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.assignment-dashboard {
    background-color: #f5f7f9;
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.ad-header {
    margin-bottom: 24px;
}

.ad-header h1 {
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 28px;
}

.ad-header p {
    color: #7f8c8d;
    margin: 0;
    font-size: 16px;
}

/* Stats Grid */
.ad-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.ad-stat-card {
    background: white;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
    transition: transform 0.2s, box-shadow 0.2s;
}

.ad-stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
}

.ad-stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 16px;
    color: white;
    font-size: 20px;
}

.ad-stat-card:nth-child(2) .ad-stat-icon {
    background: linear-gradient(135deg, #2ecc71, #27ae60);
}

.ad-stat-card:nth-child(3) .ad-stat-icon {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
}

.ad-stat-card:nth-child(4) .ad-stat-icon {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
}

.ad-stat-value {
    font-size: 28px;
    font-weight: 700;
    color: #2c3e50;
    line-height: 1;
    margin-bottom: 4px;
}

.ad-stat-label {
    font-size: 14px;
    color: #7f8c8d;
    margin-bottom: 6px;
    font-weight: 500;
}

.ad-stat-trend {
    font-size: 12px;
    font-weight: 600;
}

.ad-stat-trend.positive {
    color: #27ae60;
}

.ad-stat-trend.negative {
    color: #e74c3c;
}

/* Content Grid */
.ad-content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 20px;
    grid-template-areas:
        "form activity"
        "realtors unassigned";
}

.ad-form-section {
    grid-area: form;
}

.ad-activity-section {
    grid-area: activity;
}

.ad-realtors-section {
    grid-area: realtors;
}

.ad-unassigned-section {
    grid-area: unassigned;
}

/* Card Styles */
.ad-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.ad-card-header {
    padding: 20px 24px;
    border-bottom: 1px solid #ecf0f1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.ad-card-header h2 {
    margin: 0;
    font-size: 18px;
    color: #2c3e50;
    font-weight: 600;
}

.ad-card-body {
    padding: 24px;
    flex: 1;
}

/* Form Styles */
.ad-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.ad-form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.ad-form-label {
    font-weight: 600;
    color: #2c3e50;
    font-size: 14px;
}

.ad-radio-group {
    display: flex;
    gap: 24px;
}

.ad-radio {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    font-size: 14px;
    color: #34495e;
}

.ad-radio-checkmark {
    width: 18px;
    height: 18px;
    border: 2px solid #bdc3c7;
    border-radius: 50%;
    display: inline-block;
    position: relative;
}

.ad-radio input:checked + .ad-radio-checkmark {
    border-color: #3498db;
}

.ad-radio input:checked + .ad-radio-checkmark::after {
    content: "";
    width: 10px;
    height: 10px;
    background: #3498db;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.ad-radio input {
    display: none;
}

.ad-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.ad-select-wrapper {
    position: relative;
}

/* .ad-select {
    width: 100%;
    border: 1px solid #dcdee0;
    border-radius: 8px;
    font-size: 14px;
    appearance: none;
    background: white;
    color: #2c3e50;
} */

.ad-select-arrow {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #7f8c8d;
    pointer-events: none;
}

.ad-textarea {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #dcdee0;
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    resize: vertical;
    min-height: 80px;
}

.ad-form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    margin-top: 8px;
}

/* Button Styles */
.ad-btn {
    padding: 10px 16px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.ad-btn-primary {
    background: #3498db;
    color: white;
}

.ad-btn-primary:hover {
    background: #2980b9;
}

.ad-btn-secondary {
    background: #ecf0f1;
    color: #7f8c8d;
}

.ad-btn-secondary:hover {
    background: #dde4e6;
}

.ad-btn-text {
    background: transparent;
    color: #3498db;
    padding: 6px 12px;
}

.ad-btn-text:hover {
    background: rgba(52, 152, 219, 0.1);
}

.ad-btn-icon {
    padding: 8px;
    border-radius: 6px;
}

.ad-btn-sm {
    padding: 6px 12px;
    font-size: 13px;
}

/* Activity List */
.ad-activity-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.ad-activity-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px;
    background: #f8f9fa;
    border-radius: 8px;
}

.ad-activity-content {
    flex: 1;
}

.ad-activity-main {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
}

.ad-activity-title {
    font-weight: 500;
    color: #2c3e50;
}

.ad-activity-time {
    font-size: 12px;
    color: #7f8c8d;
}

.ad-activity-meta {
    font-size: 12px;
    color: #95a5a6;
}

.ad-activity-actions {
    margin-left: 12px;
}

/* Realtor List */
.ad-realtor-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.ad-realtor-item {
    display: flex;
    align-items: center;
    padding: 16px;
    background: #f8f9fa;
    border-radius: 8px;
}

.ad-realtor-avatar {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    overflow: hidden;
    margin-right: 12px;
}

.ad-realtor-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.ad-realtor-info {
    flex: 1;
}

.ad-realtor-info h3 {
    margin: 0 0 4px 0;
    font-size: 15px;
    color: #2c3e50;
}

.ad-realtor-info p {
    margin: 0;
    font-size: 13px;
    color: #7f8c8d;
}

.ad-realtor-actions {
    margin-left: 12px;
}

/* Unassigned List */
.ad-unassigned-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.ad-unassigned-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 16px;
    background: #f8f9fa;
    border-radius: 8px;
}

.ad-unassigned-info h3 {
    margin: 0 0 4px 0;
    font-size: 15px;
    color: #2c3e50;
}

.ad-unassigned-info p {
    margin: 0;
    font-size: 13px;
    color: #7f8c8d;
}

.ad-badge {
    background: #e74c3c;
    color: white;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.ad-view-more {
    text-align: center;
    margin-top: 12px;
}

.ad-view-more a {
    color: #3498db;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
}

.ad-view-more a:hover {
    text-decoration: underline;
}

/* Filter Styles */
.ad-filter-select {
    padding: 6px 12px;
    border: 1px solid #dcdee0;
    border-radius: 6px;
    font-size: 13px;
    background: white;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .ad-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .ad-content-grid {
        grid-template-columns: 1fr;
        grid-template-areas:
            "form"
            "activity"
            "realtors"
            "unassigned";
    }
}

@media (max-width: 768px) {
    .ad-stats-grid {
        grid-template-columns: 1fr;
    }
    
    .ad-form-row {
        grid-template-columns: 1fr;
    }
    
    .ad-radio-group {
        flex-direction: column;
        gap: 12px;
    }
    
    .ad-activity-main {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle radio button changes
    const radioButtons = document.querySelectorAll('input[name="assignmentType"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'client-to-realtor') {
                // This would be handled in a real application
                console.log('Assignment type changed to: Assign Client to Realtor');
            } else {
                console.log('Assignment type changed to: Assign Realtor to Client');
            }
        });
    });

    // Handle form submission
    const form = document.querySelector('.ad-form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        // Form validation would go here in a real application
        alert('Assignment created successfully!');
        form.reset();
    });

    // Add click handlers for assign buttons
    const assignButtons = document.querySelectorAll('.ad-btn-primary.ad-btn-sm');
    assignButtons.forEach(button => {
        button.addEventListener('click', function() {
            const clientName = this.closest('.ad-unassigned-item').querySelector('h3').textContent;
            alert(`Assigning ${clientName} to a realtor...`);
        });
    });
});
</script>