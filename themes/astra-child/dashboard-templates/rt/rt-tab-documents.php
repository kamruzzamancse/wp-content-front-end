<div class="cld-task-section">
    <div class="cld-task-header">
        <h2 class="header-title">Task Assigned</h2>
        <button class="cld-upload-btn" data-modal="cl-upload-document-modal">
            Upload Document <span class="dashicons dashicons-media-document"></span>
        </button>
    </div>

    <div class="modules-container">
        <div class="module">
            <div class="module-box"></div>
            <div class="module-label">Business cards</div>
        </div>
        
        <div class="module">
            <div class="module-box"></div>
            <div class="module-label">Sellers Checklist</div>
        </div>
        
        <div class="module">
            <div class="module-box"></div>
            <div class="module-label">Buyers Checklist</div>
        </div>
    </div> 
</div>

<style>   

/* Container */
.cld-task-section {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

/* Header */
.cld-task-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.cld-upload-btn {
    background: #fff;
    border: 1px solid #0073e6;
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    color: #0073e6;
    display: flex;
    align-items: center;
    gap: 6px;
}

.cld-upload-btn:hover {
    color: #FFF!important;
    background: #0073e6;
}
     
/* Container */
.cld-task-section {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

/* Header */
.cld-task-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.cld-upload-btn {
    background: #fff;
    border: 1px solid #0073e6;
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    color: #0073e6;
    display: flex;
    align-items: center;
    gap: 6px;
}

.cld-upload-btn:hover {
    color: #FFF!important;
    background: #0073e6;
}

/* Modules Container */
.modules-container {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    width: 100%;
}

.module {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 280px;
    transition: transform 0.3s ease;
    flex-shrink: 0;
}

.module:hover {
    transform: translateY(-5px);
}

.module-box {
    width: 100%;
    height: 180px;
    background-color: #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    transition: background-color 0.3s ease;
}

.module:hover .module-box {
    background-color: #d0d0d0;
}

.module-label {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .modules-container {
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding: 10px 0;
    }
    
    .module {
        width: 100%;
        max-width: 350px;
        flex-shrink: 0;
    }
    
    .module-box {
        height: 150px;
    }
}

@media (max-width: 480px) {
    .cld-task-header {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
    }
    
    .cld-upload-btn {
        align-self: stretch;
        justify-content: center;
    }
    
    .modules-container {
        padding: 5px 0;
        gap: 15px;
    }
    
    .module {
        max-width: 100%;
    }
    
    .module-box {
        height: 120px;
    }
    
    .module-label {
        font-size: 14px;
    }
}
</style>