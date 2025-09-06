<div class="dashboard-top">
    <!-- LEFT SIDE -->
    <div class="dashboard-top-left">
        <!-- <div class="stats-grid">
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
        </div> -->

        <div class="tpg-dashboard-container">
            <div class="tpg-tracking-section">

                <!-- Header with Dropdown -->
                <div class="tpg-tracking-header">
                    <h1 class="tpg-section-title">Tracking Property</h1>

                    <div class="tpg-tracking-summary">
                        <span class="tpg-amount" id="tpg-amount">$8.24k</span>
                        <span class="tpg-year">2025</span>
                    </div>

                    <!-- Property Dropdown -->
                    <select id="tpg-property-select">
                        <option value="property1">Property 1</option>
                        <option value="property2">Property 2</option>
                        <option value="property3">Property 3</option>
                    </select>
                </div>

                <div class="tpg-chart-container">

                    <!-- Y Axis -->
                    <div class="tpg-y-axis">
                        <span>9k</span>
                        <span>7k</span>
                        <span>5k</span>
                        <span>3k</span>
                        <span>1k</span>
                    </div>

                    <!-- Line Chart -->
                    <svg class="tpg-line-chart" viewBox="0 0 600 250" preserveAspectRatio="none">
                        <polyline id="tpg-line" points="0,210 100,180 200,150 300,120 400,80 500,40" />
                        <circle cx="0" cy="210" r="5" data-value="$2.10k"></circle>
                        <circle cx="100" cy="180" r="5" data-value="$3.20k"></circle>
                        <circle cx="200" cy="150" r="5" data-value="$4.80k"></circle>
                        <circle cx="300" cy="120" r="5" data-value="$6.20k"></circle>
                        <circle cx="400" cy="80" r="5" data-value="$7.50k"></circle>
                        <circle cx="500" cy="40" r="5" data-value="$8.24k"></circle>
                    </svg>

                    <!-- X Axis -->
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

        <!-- Header -->
        <div class="header">
            <h1>Notes</h1>
            <button id="add-note-btn">+</button>
        </div>
        
        <!-- Sticky Notes Container -->
        <div id="sticky-notes-container"></div>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const line = document.getElementById('tpg-line');
    const circles = document.querySelectorAll('.tpg-line-chart circle');
    const amount = document.getElementById('tpg-amount');

    const data = {
        property1: { points: "0,210 100,180 200,150 300,120 400,80 500,40", values: ["$2.10k","$3.20k","$4.80k","$6.20k","$7.50k","$8.24k"], total: "$8.24k" },
        property2: { points: "0,200 100,170 200,140 300,110 400,70 500,30", values: ["$2.00k","$3.00k","$4.50k","$6.00k","$7.00k","$8.00k"], total: "$8.00k" },
        property3: { points: "0,220 100,190 200,160 300,130 400,90 500,50", values: ["$2.20k","$3.50k","$5.00k","$6.50k","$7.80k","$8.50k"], total: "$8.50k" },
    };

    function updateChart(prop) {
        line.setAttribute('points', data[prop].points);
        circles.forEach((circle, i) => {
            const coords = data[prop].points.split(" ")[i].split(",");
            circle.setAttribute('cx', coords[0]);
            circle.setAttribute('cy', coords[1]);
            circle.setAttribute('data-value', data[prop].values[i]);
        });
        amount.textContent = data[prop].total;
    }

    document.getElementById('tpg-property-select').addEventListener('change', function() {
        updateChart(this.value);
    });

    circles.forEach(point => {
        point.addEventListener('click', function() {
            alert('Value: ' + this.getAttribute('data-value'));
        });
    });
});
</script>

<style>
/* Message Realtor Box Styles */
.cld-box {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: all 0.3s ease;
}

.cld-box-header {
    background: #3578c6;
    color: #fff;
    padding: 12px 16px;
    font-size: 20px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.cld-send-btn {
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    font-size: 14px;
    padding: 6px 14px;
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
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.cld-textarea:focus {
    border-color: #3578c6;
    box-shadow: 0 0 5px rgba(53,120,198,0.3);
}

/* Responsive Adjustments */
@media (max-width: 1024px) {
    .cld-box {
        margin-top: 15px;
    }
}

@media (max-width: 600px) {
    .cld-box-header {
        font-size: 14px;
        padding: 10px 12px;
    }

    .cld-send-btn {
        font-size: 12px;
        padding: 4px 10px;
    }

    .cld-textarea {
        min-height: 100px;
        font-size: 13px;
    }
}
</style>

<style>
/* Updated Tracking Property Section (Line Chart) */
.tpg-dashboard-container {
    background: #ffffff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
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
    position: relative;
    height: 250px;
    background: #fafbfc;
    border-radius: 8px;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Y Axis */
.tpg-y-axis {
    position: absolute;
    top: 15px;
    bottom: 30px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    font-size: 12px;
    color: #7f8c8d;
    font-weight: 500;
    padding-right: 5px;
}

/* X Axis */
.tpg-x-axis {
    position: absolute;
    bottom: 0;
    left: 40px;
    right: 0;
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    color: #7f8c8d;
    font-weight: 500;
    padding-top: 5px;
}

/* Line Chart SVG */
.tpg-line-chart {
    width: 100%;
    height: 100%;
}

.tpg-line-chart polyline {
    fill: none;
    stroke: #4e6ef2;
    stroke-width: 3;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.tpg-line-chart circle {
    fill: #4e6ef2;
    cursor: pointer;
    transition: transform 0.3s, fill 0.3s;
}

.tpg-line-chart circle:hover {
    transform: scale(1.2);
    fill: #6c8dfa;
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
        padding: 10px;
    }
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

/* Add this for the calendar container */
.dashboard-top-right {
  padding: 16px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  overflow-x: auto;
  height: 100%;
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
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
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

/* Add Note Button Style */
#add-note-btn {
    background-color: #2196F3;
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    transition: background-color 0.3s;
}

#add-note-btn:hover {
    background-color: #0b7dda;
}

/* Sticky Notes Container */
    .header {
        background: #3578c6;
        color: #fff;
        padding: 8px 16px;
        font-size: 16px!important;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .header h1{
        font-size: 20px;
        font-weight: 600;
        color: #FFF;
    }
    
    /* Add Note Button Style */
    #add-note-btn {
        background-color: #3578c6;
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        transition: background-color 0.3s;
    }
    
    #add-note-btn:hover {
        background-color: #2a5a94;
    }
    
    /* Sticky Notes Container */
    #sticky-notes-container {
        position: relative;
        min-height: 300px;
        padding: 20px;
        border: 1px solid #CCC;
        border-radius: 0 0 12px 12px
    }
    
    /* Sticky Note Style */
    .sticky-note {
        width: 280px;
        min-height: 250px;
        background: #fff59d;
        border: 1px solid #f0e68c;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        margin: 10px;
        position: absolute;
        cursor: move;
        display: flex;
        flex-direction: column;
    }
    
    .note-header {
        display: flex;
        justify-content: flex-end;
        padding: 5px;
    }
    
    .sticky-note textarea {
        flex: 1;
        width: 100%;
        border: none;
        background: transparent;
        resize: none;
        font-size: 16px;
        outline: none;
        padding: 0 10px 10px 10px;
        box-sizing: border-box;
        overflow-y: auto;
    }
    
    /* Custom scrollbar styling */
    .sticky-note textarea::-webkit-scrollbar {
        width: 8px;
    }
    
    .sticky-note textarea::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .sticky-note textarea::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
    }
    
    .sticky-note textarea::-webkit-scrollbar-thumb:hover {
        background: rgba(0, 0, 0, 0.3);
    }
    
    /* Delete Button Style */
    .delete-btn {
        width: 24px;
        height: 24px;
        border: none;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        color: #333;
        font-weight: bold;
        background: transparent;
        z-index: 10;
    }
    
    .delete-btn:hover {
        color: #d32f2f;
    }
</style>

<script>
    /* Sticky Note JS */
    const container = document.getElementById('sticky-notes-container');
    const addBtn = document.getElementById('add-note-btn');
    let notesData = JSON.parse(localStorage.getItem('stickyNotes') || '[]');
    
    function saveNotes() {
        localStorage.setItem('stickyNotes', JSON.stringify(notesData));
    }
    
    function createNote(noteObj) {
        const note = document.createElement('div');
        note.className = 'sticky-note';
        note.style.top = noteObj.top + 'px';
        note.style.left = noteObj.left + 'px';
        
        // Create header with delete button
        const noteHeader = document.createElement('div');
        noteHeader.className = 'note-header';
        
        // Create delete button
        const deleteBtn = document.createElement('button');
        deleteBtn.className = 'delete-btn';
        deleteBtn.innerHTML = '×';
        deleteBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent triggering drag
            deleteNote(noteObj, note);
        });
        
        // Create textarea
        const textarea = document.createElement('textarea');
        textarea.value = noteObj.text;
        
        // Append elements
        noteHeader.appendChild(deleteBtn);
        note.appendChild(noteHeader);
        note.appendChild(textarea);
        container.appendChild(note);
        
        // Update text in localStorage
        textarea.addEventListener('input', () => {
            noteObj.text = textarea.value;
            saveNotes();
        });
        
        makeDraggable(note, noteObj);
    }
    
    // Delete note function
    function deleteNote(noteObj, noteElement) {
        // Remove from DOM
        noteElement.remove();
        
        // Remove from data array
        const index = notesData.indexOf(noteObj);
        if (index > -1) {
            notesData.splice(index, 1);
            saveNotes();
        }
    }
    
    // Make note draggable
    function makeDraggable(el, noteObj) {
        let isDown = false;
        let offset = [0,0];
        
        el.addEventListener('mousedown', function(e) {
            // Only start dragging if not clicking on delete button or textarea
            if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'TEXTAREA') {
                isDown = true;
                offset = [
                    el.offsetLeft - e.clientX,
                    el.offsetTop - e.clientY
                ];
            }
        }, true);
        
        document.addEventListener('mouseup', function() {
            isDown = false;
        }, true);
        
        document.addEventListener('mousemove', function(e) {
            if (isDown) {
                el.style.left = (e.clientX + offset[0]) + 'px';
                el.style.top  = (e.clientY + offset[1]) + 'px';
                
                // Save position
                noteObj.left = e.clientX + offset[0];
                noteObj.top = e.clientY + offset[1];
                saveNotes();
            }
        }, true);
    }
    
    // Load existing notes
    notesData.forEach(noteObj => createNote(noteObj));
    
    // Add new note
    addBtn.addEventListener('click', () => {
        // Adjust starting position to avoid overlapping with header
        const noteObj = { 
            text: '', 
            top: 80 + (notesData.length * 20), 
            left: 20 + (notesData.length * 20) 
        };
        notesData.push(noteObj);
        createNote(noteObj);
        saveNotes();
    });
</script>
