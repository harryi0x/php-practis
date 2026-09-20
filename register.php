<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Clinic Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        
        .register-container {
            width: 100%;
            max-width: 550px;
        }
        
        .register-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            animation: fadeInUp 0.6s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .register-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px;
            text-align: center;
            color: white;
        }
        
        .register-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        
        .register-header p {
            margin: 10px 0 0;
            opacity: 0.9;
        }
        
        .register-body {
            padding: 40px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        
        .input-group {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .input-group:focus-within {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .input-group-text {
            background: #f8f9fa;
            border: none;
            color: #667eea;
        }
        
        .form-control {
            border: none;
            padding: 12px 15px;
        }
        
        .form-control:focus {
            box-shadow: none;
            outline: none;
        }
        
        .role-selector {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .role-option {
            flex: 1;
            text-align: center;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .role-option:hover {
            border-color: #667eea;
            transform: translateY(-2px);
        }
        
        .role-option.selected {
            border-color: #667eea;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .role-option i {
            font-size: 32px;
            margin-bottom: 10px;
            display: block;
        }
        
        .role-option .role-title {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .role-option .role-desc {
            font-size: 11px;
            opacity: 0.8;
        }
        
        .btn-register {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            color: white;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            color: white;
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }
        
        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }
        
        .password-strength {
            margin-top: 8px;
            font-size: 12px;
        }
        
        .strength-meter {
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            margin-top: 8px;
            overflow: hidden;
        }
        
        .strength-meter-fill {
            height: 100%;
            width: 0%;
            transition: width 0.3s;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <h2><i class="fas fa-user-plus me-2"></i>Create Account</h2>
                <p>Join our clinic management system</p>
            </div>
            <div class="register-body">
                <div id="alertMessage"></div>
                
                <div class="role-selector">
                    <div class="role-option" data-role="patient" onclick="selectRole('patient')">
                        <i class="fas fa-user"></i>
                        <div class="role-title">Patient</div>
                        <div class="role-desc">Book appointments</div>
                    </div>
                    <div class="role-option" data-role="doctor" onclick="selectRole('doctor')">
                        <i class="fas fa-user-md"></i>
                        <div class="role-title">Doctor</div>
                        <div class="role-desc">Manage patients</div>
                    </div>
                </div>
                
                <form id="registerForm">
                    <input type="hidden" id="role" value="patient">
                    
                    <div class="form-group">
                        <label><i class="fas fa-user me-2"></i>Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fas fa-envelope me-2"></i>Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fas fa-lock me-2"></i>Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="Create a password" required onkeyup="checkPasswordStrength()">
                        </div>
                        <div class="password-strength">
                            <div class="strength-meter">
                                <div class="strength-meter-fill" id="strengthFill"></div>
                            </div>
                            <span id="strengthText" style="color: #999;"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fas fa-check-circle me-2"></i>Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#" style="color: #667eea;">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-register" id="registerBtn">
                        <i class="fas fa-user-plus me-2"></i>Create Account
                    </button>
                </form>
                
                <div class="login-link">
                    Already have an account? <a href="login.html">Login here</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedRole = 'patient';
        
        function selectRole(role) {
            selectedRole = role;
            document.getElementById('role').value = role;
            
            document.querySelectorAll('.role-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            document.querySelector(`.role-option[data-role="${role}"]`).classList.add('selected');
        }
        
        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            
            let strength = 0;
            if (password.length >= 6) strength++;
            if (password.match(/[a-z]+/)) strength++;
            if (password.match(/[A-Z]+/)) strength++;
            if (password.match(/[0-9]+/)) strength++;
            if (password.match(/[$@#&!]+/)) strength++;
            
            const width = (strength / 5) * 100;
            strengthFill.style.width = width + '%';
            
            if (strength <= 2) {
                strengthFill.style.background = '#dc3545';
                strengthText.textContent = 'Weak password';
                strengthText.style.color = '#dc3545';
            } else if (strength <= 4) {
                strengthFill.style.background = '#ffc107';
                strengthText.textContent = 'Medium password';
                strengthText.style.color = '#ffc107';
            } else {
                strengthFill.style.background = '#28a745';
                strengthText.textContent = 'Strong password';
                strengthText.style.color = '#28a745';
            }
        }
        
        function showAlert(message, type) {
            const alertDiv = document.getElementById('alertMessage');
            alertDiv.innerHTML = `
                <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'} me-2"></i>
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
            
            setTimeout(() => {
                const alert = document.querySelector('.alert');
                if (alert) alert.remove();
            }, 3000);
        }
        
        document.getElementById('registerForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const role = document.getElementById('role').value;
            const registerBtn = document.getElementById('registerBtn');
            
            if (!name || !email || !password || !confirmPassword) {
                showAlert('Please fill all fields', 'danger');
                return;
            }
            
            if (password !== confirmPassword) {
                showAlert('Passwords do not match', 'danger');
                return;
            }
            
            if (password.length < 6) {
                showAlert('Password must be at least 6 characters', 'danger');
                return;
            }
            
            registerBtn.disabled = true;
            registerBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Creating account...';
            
            try {
                const response = await fetch('api/auth.php?action=register', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, email, password, role })
                });
                
                const result = await response.json();
                
                if (result.success) {
                    showAlert('Registration successful! Redirecting to login...', 'success');
                    setTimeout(() => {
                        window.location.href = 'login.html';
                    }, 2000);
                } else {
                    showAlert(result.message, 'danger');
                    registerBtn.disabled = false;
                    registerBtn.innerHTML = '<i class="fas fa-user-plus me-2"></i>Create Account';
                }
            } catch (error) {
                showAlert('Connection error. Please try again.', 'danger');
                registerBtn.disabled = false;
                registerBtn.innerHTML = '<i class="fas fa-user-plus me-2"></i>Create Account';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>