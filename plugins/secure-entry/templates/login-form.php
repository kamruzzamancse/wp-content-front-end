<div class="enhanced-login-form">  
    <!-- Drawer Toggle Button -->
    <button class="drawer-toggle" type="button">
        <span class="hamburger-icon"></span>
    </button>
    
    <!-- Drawer Panel -->
    <div class="drawer-panel">
        <div class="drawer-header">
            <h3>Background Styles</h3>
            <button class="drawer-close">&times;</button>
        </div>
        <div class="drawer-content">
            <button class="bg-option active" data-bg="wave">
                <span class="bg-preview wave-preview"></span>
                <span>Wave Lines</span>
            </button>
            <button class="bg-option" data-bg="geometric">
                <span class="bg-preview geometric-preview"></span>
                <span>Geometric</span>
            </button>
            <button class="bg-option" data-bg="gradient">
                <span class="bg-preview gradient-preview"></span>
                <span>Gradient</span>
            </button>
        </div>
    </div>
    
    <!-- Login Form -->
    <form id="enhanced-login" method="post">
        <div class="form-logo">
            <img src="http://localhost/mary/wp-content/uploads/2025/07/logo.png" alt="Company Logo">
        </div>
        <div class="company-name">Synchronest</div>
        
        <div class="form-header">
            <h2><?php _e('Login', 'enhanced-login'); ?></h2>
        </div>
        <div class="form-group">
            <label for="username"><?php _e('Username or Email', 'enhanced-login'); ?></label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password"><?php _e('Password', 'enhanced-login'); ?></label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group remember-me">
            <input type="checkbox" name="rememberme" id="rememberme">
            <label for="rememberme"><?php _e('Remember Me', 'enhanced-login'); ?></label>
        </div>
        <div class="enhanced-login-message"></div>
        <div class="form-group">
            <button type="submit"><?php _e('Log In', 'enhanced-login'); ?></button>
        </div>
        <div class="form-links">
            <a href="<?php echo wp_lostpassword_url(); ?>"><?php _e('Lost your password?', 'enhanced-login'); ?></a>
            <?php if (get_option('users_can_register')) : ?>
                | <a href="<?php echo home_url('/registration/'); ?>"><?php _e('Register', 'enhanced-login'); ?></a>
            <?php endif; ?>
        </div>
        <input type="hidden" name="redirect" value="<?php echo esc_url($redirect); ?>">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('enhanced-login-nonce'); ?>">
        <input type="hidden" name="action" value="enhanced_login">
    </form>
</div>

<script>
    // Toggle password visibility
    const loginPasswordToggle = document.createElement('span');
    loginPasswordToggle.textContent = '👁️';
    loginPasswordToggle.style.position = 'absolute';
    loginPasswordToggle.style.right = '10px';
    loginPasswordToggle.style.top = '75%';
    loginPasswordToggle.style.transform = 'translateY(-50%)';
    loginPasswordToggle.style.cursor = 'pointer';
    loginPasswordToggle.style.color = '#fff';
    const passwordField = document.getElementById('password');
    passwordField.parentElement.style.position = 'relative';
    passwordField.parentElement.appendChild(loginPasswordToggle);
    loginPasswordToggle.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            this.textContent = '🔒';
        } else {
            passwordField.type = 'password';
            this.textContent = '👁️';
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const drawerToggle = document.querySelector('.drawer-toggle');
    const drawerPanel = document.querySelector('.drawer-panel');
    const drawerClose = document.querySelector('.drawer-close');
    const bgOptions = document.querySelectorAll('.bg-option');
    const loginForm = document.querySelector('.enhanced-login-form');
    
    // Toggle drawer open/close
    drawerToggle.addEventListener('click', function() {
        drawerPanel.classList.toggle('open');
    });
    
    drawerClose.addEventListener('click', function() {
        drawerPanel.classList.remove('open');
    });
    
    // Handle background option selection
    bgOptions.forEach(option => {
        option.addEventListener('click', function() {
            const bgType = this.getAttribute('data-bg');
            
            // Remove all active classes
            bgOptions.forEach(opt => opt.classList.remove('active'));
            loginForm.classList.remove('bg-wave', 'bg-geometric', 'bg-gradient');
            
            // Add new active class
            this.classList.add('active');
            loginForm.classList.add(`bg-${bgType}`);
            
            // Save selection to localStorage
            localStorage.setItem('selectedBg', bgType);
            
            // Close drawer
            drawerPanel.classList.remove('open');
        });
    });
    
    // Load previous selection
    const savedBg = localStorage.getItem('selectedBg');
    if (savedBg) {
        bgOptions.forEach(opt => {
            opt.classList.remove('active');
            if (opt.getAttribute('data-bg') === savedBg) {
                opt.classList.add('active');
            }
        });
        loginForm.classList.add(`bg-${savedBg}`);
    } else {
        // Default selection
        bgOptions[0].classList.add('active');
        loginForm.classList.add('bg-wave');
    }
    
    // Close drawer when clicking outside
    document.addEventListener('click', function(e) {
        if (!drawerPanel.contains(e.target) && !drawerToggle.contains(e.target)) {
            drawerPanel.classList.remove('open');
        }
    });
});
</script>