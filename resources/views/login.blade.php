{{--
/**
 * G.A.M.A. SOLUTIONS S.A. de C.V.
 * "El factor de cambio en tu tecnología"
 *
 * @descripcion    Interfaz de autenticación dual (Login y Registro) con validación de fuerza de contraseña.
 * @autor          Rubén Alejandro Nolasco Ruiz
 * @autorizador    Rubén Alejandro Nolasco Ruiz
 * @prueba         Diego Miguel Hernandez Fabela  
 * @mantenimiento  Ghael Garcia Manjarrez 
 * @version        1.0.0
 * @creado         11/04/2026
 * @modificado     11/04/2026
 *
 * @cambios
 * Fecha       | Autor             | Descripción
 * ------------|-------------------|------------------------------------------
 * 11/04/2026  | Rubén Alejandro   | Implementación de vista de Login/Registro con validaciones JS.
 * 11/04/2026  | Rubén Alejandro   | Estandarización de prólogo según manual GAMA-MPL-03.
 */
--}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - G.A.M.A Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/gama-login.css">
    <script src="js/auth-tabs.js" defer></script>
</head>
<body class="auth-page">
    <!-- Left Side - Branding -->
    <div class="auth-branding">
        <div class="branding-content">
            <div class="branding-logo">
                <img src="{{ asset('img/gama-logo.png') }}" alt="G.A.M.A Solutions" class="logo-image">
            </div>
            <h1 class="branding-title">"El factor de cambio en tu tecnología"</h1>
            <p class="branding-subtitle">
                Sistemas modulares diseñados para evolucionar al ritmo de su demanda
            </p>

            <div class="branding-features">
                <div class="branding-feature">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <span>Ética y Resguardo de Activos</span>
                </div>
                <div class="branding-feature">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span>Manejo de datos en tiempo real y análisis</span>
                </div>
                <div class="branding-feature">
                    <div class="feature-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <span>Fácil de utilizar</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side - Form -->
    <div class="auth-form-container">
        <div class="auth-form-wrapper">
            <div class="form-header">
                <h1>Bienvenido de nuevo</h1>
                <p>Ingresa tus credenciales para acceder a tu cuenta</p>
            </div>

            <!-- Tab Switcher -->
            <div class="auth-tabs">
                <button class="auth-tab active" data-form="login">Iniciar sesión</button>
                <button class="auth-tab" data-form="register">Registrarse</button>
            </div>

            <!-- Login Form -->
            <form class="auth-form active" id="loginForm">
                <div class="form-group">
                    <label class="form-label">Dirección de correo electrónico</label>
                    <div class="form-input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-input" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <div class="form-input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" id="loginPassword" placeholder="Ingresa tu contraseña" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('loginPassword')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="checkbox-wrapper" onclick="toggleCheckbox(this)">
                        <div class="checkbox">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="checkbox-label">Recordarme</span>
                    </div>
                    <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>

                <div class="divider">
                    <div class="divider-line"></div>
                    <span class="divider-text">o continúa con</span>
                    <div class="divider-line"></div>
                </div>

                <div class="social-buttons">
                    <button type="button" class="social-btn">
                        <i class="fab fa-google"></i>
                        <span>Google</span>
                    </button>
                    
                </div>

                <p class="form-footer">
                    ¿No tienes una cuenta? <a href="#" id="switchToRegister">Regístrate gratis</a>
                </p>
            </form>

            <!-- Register Form -->
            <form class="auth-form" id="registerForm">
                <div class="form-group">
                    <label class="form-label">Nombre completo</label>
                    <div class="form-input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-input" placeholder="Ingresa tu nombre completo" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Dirección de correo electrónico</label>
                    <div class="form-input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-input" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <div class="form-input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" id="registerPassword" placeholder="Crea una contraseña" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('registerPassword')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="password-strength">
                        <div class="strength-bar"></div>
                        <div class="strength-bar"></div>
                        <div class="strength-bar"></div>
                        <div class="strength-bar"></div>
                    </div>
                    <p class="strength-text">Usa 8+ caracteres con una mezcla de letras, números y símbolos</p>
                </div>

                <div class="form-group">
                    <div class="checkbox-wrapper" onclick="toggleCheckbox(this)">
                        <div class="checkbox">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="checkbox-label">
                            Acepto los <a href="#">Términos de Servicio</a> y la <a href="#">Política de Privacidad</a>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Crear cuenta</button>

                <div class="divider">
                    <div class="divider-line"></div>
                    <span class="divider-text">o continúa con</span>
                    <div class="divider-line"></div>
                </div>

                <div class="social-buttons">
                    <button type="button" class="social-btn">
                        <i class="fab fa-google"></i>
                        <span>Google</span>
                    </button>
                    <button type="button" class="social-btn">
                        <i class="fab fa-apple"></i>
                        <span>Apple</span>
                    </button>
                </div>

                <p class="form-footer">
                    ¿Ya tienes una cuenta? <a href="#" id="switchToLogin">Inicia sesión</a>
                </p>
            </form>
        </div>

        <p class="copyright">
            Copyright &copy; 2026 G.A.M.A Solutions. Todos los derechos reservados.
        </p>
    </div>

    <script>
        // Toggle password visibility
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.parentElement.querySelector('.password-toggle i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Calculate password strength
        function calculatePasswordStrength(password) {
            let strength = 0;
            
            // Mínimo 8 caracteres
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;
            
            // Tiene letras mayúsculas
            if (/[A-Z]/.test(password)) strength++;
            
            // Tiene letras minúsculas
            if (/[a-z]/.test(password)) strength++;
            
            // Tiene números
            if (/\d/.test(password)) strength++;
            
            // Tiene caracteres especiales
            if (/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password)) strength++;
            
            return strength;
        }

        // Update password strength bars
        function updatePasswordStrength(inputId) {
            const input = document.getElementById(inputId);
            const passwordStrength = input.parentElement.parentElement.querySelector('.password-strength');
            
            if (!passwordStrength) return;
            
            const bars = passwordStrength.querySelectorAll('.strength-bar');
            const strength = calculatePasswordStrength(input.value);
            
            // Reset all bars
            bars.forEach(bar => {
                bar.classList.remove('weak', 'medium', 'strong');
            });
            
            // Fill bars based on strength
            let className = '';
            let filledBars = 0;
            
            if (strength <= 2) {
                className = 'weak';
                filledBars = Math.min(strength, 2);
            } else if (strength <= 4) {
                className = 'medium';
                filledBars = strength - 2;
            } else {
                className = 'strong';
                filledBars = 4;
            }
            
            for (let i = 0; i < filledBars; i++) {
                bars[i].classList.add(className);
            }
        }

        // Toggle checkbox
        function toggleCheckbox(wrapper) {
            const checkbox = wrapper.querySelector('.checkbox');
            checkbox.classList.toggle('checked');
        }

        // Add password strength listener to register password field
        const registerPasswordInput = document.getElementById('registerPassword');
        if (registerPasswordInput) {
            registerPasswordInput.addEventListener('input', function() {
                updatePasswordStrength('registerPassword');
            });
        }
    </script>
</body>
</html>
