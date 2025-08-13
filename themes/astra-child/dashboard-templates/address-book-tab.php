<div class="ab-container">
    <div class="ab-table-header">
        <div class="ab-header-left">
            <h1 class="ab-header-title">Address Book</h1>
        </div>
        <div class="ab-header-right">
            <div class="ab-search-box">
                <span class="pt-search-icon">🔍</span>
                <input type="text" class="pt-search-input" placeholder="Search: Client Name">
            </div>
            <div class="ab-action-buttons">
                <button class="ab-btn ab-btn-import">
                    <span class="dashicons dashicons-upload"></span> Import
                </button>
                <button class="ab-btn ab-btn-export">
                    <span class="dashicons dashicons-download"></span> Export
                </button>
            </div>
        </div>
    </div>
    
    <table>
        <thead>
            <tr>
                <th class="ab-sl-column">#SL</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th class="ab-actions-column">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ab-sl-column">01</td>
                <td>Afsana Hamid Mim</td>
                <td>Support.info@gmail.Com</td>
                <td>999-888-666</td>
                <td>New York</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" id="ab-viewClientDetails" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column">02</td>
                <td>John D. Smith</td>
                <td>john.smith@business.com</td>
                <td>555-123-4567</td>
                <td>Los Angeles, CA</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column">03</td>
                <td>Maria Garcia</td>
                <td>maria.g@example.org</td>
                <td>444-789-0123</td>
                <td>Miami, FL</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column">04</td>
                <td>Robert Johnson</td>
                <td>robert.j@tech.io</td>
                <td>777-555-1212</td>
                <td>Chicago, IL</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column">05</td>
                <td>Sarah Williams</td>
                <td>sarah.w@design.net</td>
                <td>222-333-4444</td>
                <td>Seattle, WA</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column">06</td>
                <td>David Kim</td>
                <td>david.k@services.com</td>
                <td>888-999-0000</td>
                <td>Boston, MA</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="ab-sl-column">07</td>
                <td>Emma Thompson</td>
                <td>emma.t@consulting.co</td>
                <td>333-222-1111</td>
                <td>Denver, CO</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #CCC">
                <td class="ab-sl-column">08</td>
                <td>Michael Brown</td>
                <td>michael.b@enterprise.com</td>
                <td>666-777-8888</td>
                <td>Austin, TX</td>
                <td class="ab-actions-column">
                    <div class="ab-action-icons">
                        <span class="dashicons dashicons-visibility ab-action-icon" title="View"></span>
                        <span class="dashicons dashicons-edit ab-action-icon" title="Edit"></span>
                        <span class="dashicons dashicons-trash ab-action-icon" title="Delete"></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php 
    include locate_template('dashboard-templates/client-details-modal.php');
?>
