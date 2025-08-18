<!-- HEADER (updated to match screenshot) -->
    <header class="cd-header">
        <div class="cd-header-left">
            <div class="cd-header-logo">SynchroNest</div>
        </div>
        <div class="cd-header-right">
            <div class="cd-user-avatar">A</div>
            <span>Anisur Rahman</span>
        </div>
    </header>

    <!-- MAIN CONTAINER -->
    <div class="cd-container">
        <!-- LEFT SIDEBAR -->
        <div class="cd-sidebar">
            <div class="cd-logo">SynchroNest</div>
            <div class="cd-sublogo">STAY SYNCHED. STAY AHEAD.</div>
            
            <div class="cd-user-info">
                <span class="cd-user-name">Anisur Rahman</span>
                <span class="cd-user-title">Realtor</span>
            </div>
            
            <ul class="cd-menu">
                <li class="cd-menu-item">
                    <input type="checkbox" id="cd-dashboard">
                    <label for="cd-dashboard">Dashboard</label>
                </li>
                <li class="cd-menu-item">
                    <input type="checkbox" id="cd-properties" checked>
                    <label for="cd-properties">My Properties</label>
                </li>
                <li class="cd-menu-item">
                    <input type="checkbox" id="cd-address-book">
                    <label for="cd-address-book">Address Book</label>
                </li>
                <li class="cd-menu-item">
                    <input type="checkbox" id="cd-message">
                    <label for="cd-message">Message</label>
                </li>
                <li class="cd-menu-item">
                    <input type="checkbox" id="cd-setting">
                    <label for="cd-setting">Setting</label>
                </li>
                <li class="cd-menu-item">
                    <input type="checkbox" id="cd-logout">
                    <label for="cd-logout">Logout</label>
                </li>
            </ul>
        </div>

        <!-- MAIN CONTENT AREA -->
        <main class="cd-content">
            <!-- Page content would go here -->
        </main>
    </div>

<style>
        /* BACKGROUND COLOR (applies to whole page) */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        /* HEADER SECTION - updated to match screenshot */
        .cd-header {
            background-color: white;
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
        }

        .cd-header-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cd-header-logo {
            font-weight: bold;
            font-size: 18px;
        }

        .cd-header-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cd-user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* MAIN CONTAINER - holds both sidebar and content */
        .cd-container {
            display: flex;
            min-height: calc(100vh - 61px); /* Subtract header height */
        }

        /* LEFT SIDEBAR (the visible panel in your screenshot) */
        .cd-sidebar {
            width: 250px;
            background-color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        /* CONTENT AREA (empty in your screenshot) */
        .cd-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f5f5f5;
        }

        /* Logo styles */
        .cd-logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }
        
        .cd-sublogo {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
            margin-bottom: 30px;
        }
        
        /* User info section */
        .cd-user-info {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .cd-user-name {
            font-weight: bold;
            font-size: 16px;
        }
        
        .cd-user-title {
            font-size: 14px;
            color: #666;
        }
        
        /* Menu styles */
        .cd-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .cd-menu-item {
            padding: 12px 0;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .cd-menu-item input[type="checkbox"] {
            margin-right: 10px;
        }
        
        .cd-menu-item label {
            cursor: pointer;
        }
        
        .cd-menu-item:hover {
            color: #000;
        }
    </style>