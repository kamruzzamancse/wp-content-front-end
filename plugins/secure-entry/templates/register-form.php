<div class="form-container">
    <!-- Registration Form -->
    <div class="enhanced-register-form">
        <div class="form-header">
            <h2>Registration</h2>
            <p>Create your account to get started.</p>
        </div>
        
        <form id="enhanced-register" method="post">
            <div class="form-group">
                <label for="reg-username">Username</label>
                <input type="text" name="username" id="reg-username" required placeholder="Choose a username">
            </div>

            <div class="form-group">
                <label for="reg-email">Email</label>
                <input type="email" name="email" id="reg-email" required placeholder="Enter your email">
            </div>

            <div class="name-fields">
                <div class="form-group">
                    <label for="reg-first-name">First Name</label>
                    <input type="text" name="first_name" id="reg-first-name" placeholder="Enter your first name">
                </div>

                <div class="form-group">
                    <label for="reg-last-name">Last Name</label>
                    <input type="text" name="last_name" id="reg-last-name" placeholder="Enter your last name">
                </div>
            </div>

            <div class="form-group">
                <label for="reg-role">Register As</label>
                <select name="role" id="reg-role" required>
                    <option value="">Select Role</option>
                    <option value="realtor">Realtor</option>
                    <option value="client">Client</option>
                </select>
            </div>

            <div class="form-group">
                <label for="reg-password">Password</label>
                <div class="password-field">
                    <input type="password" name="password" id="reg-password" required placeholder="Create a password">
                    <span class="toggle-password">👁️</span>
                </div>
                <div class="password-strength-meter" data-strength="0"></div>
            </div>

            <div class="form-group">
                <label for="reg-confirm-password">Confirm Password</label>
                <div class="password-field">
                    <input type="password" name="confirm_password" id="reg-confirm-password" required placeholder="Confirm your password">
                    <span class="toggle-password">👁️</span>
                </div>
            </div>

            <div class="enhanced-register-message"></div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>

            <input type="hidden" name="redirect" value="">
            <input type="hidden" name="nonce" value="">
            <input type="hidden" name="action" value="enhanced_register">
        </form>
        
        <div class="form-navigation">
            <p>Already have an account? <a href="/mary/login">Login</a></p>
        </div>
    </div>
</div>

<script>
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.parentElement.querySelector('input');
            if (input.type === 'password') {
                input.type = 'text';
                this.textContent = '🔒';
            } else {
                input.type = 'password';
                this.textContent = '👁️';
            }
        });
    });
</script>