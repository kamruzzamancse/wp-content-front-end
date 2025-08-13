// Search functionality
document.querySelector('.ab-search-input').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Modal functionality for client details

const clientDetailsModal = document.getElementById('clientDetailsModal'); // Assuming modal ID unchanged in PHP template
const viewClientDetailsBtn = document.getElementById('ab-viewClientDetails');
const closeClientDetailsModalBtn = document.getElementById('closeClientDetailsModal');

if (viewClientDetailsBtn) {
    viewClientDetailsBtn.addEventListener('click', () => {
        if (clientDetailsModal) {
            clientDetailsModal.style.display = 'flex';
        }
    });
}

if (closeClientDetailsModalBtn) {
    closeClientDetailsModalBtn.addEventListener('click', () => {
        if (clientDetailsModal) {
            clientDetailsModal.style.display = 'none';
        }
    });
}

// Close modal when clicking outside the modal container
if (clientDetailsModal) {
    clientDetailsModal.addEventListener('click', (e) => {
        if (e.target === clientDetailsModal) {
            clientDetailsModal.style.display = 'none';
        }
    });
}

// Property details modal script

document.addEventListener("DOMContentLoaded", function () {
    const openTriggers = document.querySelectorAll(".client-details-property-details");
    const propertyModal = document.getElementById("propertyDetailsModal");
    const clientModal = document.getElementById("clientDetailsModal");
    const closeBtn = document.getElementById("closePropertyDetailsModal");
    const modalContent = document.querySelector(".property-details-content");

    openTriggers.forEach(trigger => {
        trigger.addEventListener("click", function (e) {
            e.preventDefault();

            const propertyId = this.dataset.propertyId || null;

            // Hide Client Details Modal if open
            if (clientModal) clientModal.style.display = "none";

            // Build AJAX URL with action and propertyId if exists
            let ajaxUrl = propertyDetailsAjax.ajaxurl + "?action=get_property_details";
            if (propertyId) {
                ajaxUrl += "&property_id=" + propertyId;
            }

            fetch(ajaxUrl)
                .then(response => response.text())
                .then(html => {
                    modalContent.innerHTML = html;
                    propertyModal.style.display = "flex";
                })
                .catch(err => console.error("Error loading property details:", err));
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            propertyModal.style.display = "none";
        });
    }

    window.addEventListener("click", function (e) {
        if (e.target === propertyModal) {
            propertyModal.style.display = "none";
        }
    });
});
