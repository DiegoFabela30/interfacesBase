/* ========================================
   Auth Tabs (Login Page)
======================================== */
function initAuthTabs() {
    const authTabs = document.querySelectorAll('.auth-tab');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const formHeader = document.querySelector('.form-header');

    authTabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            authTabs.forEach(function(t) {
                t.classList.remove('active');
            });
            tab.classList.add('active');

            if (tab.dataset.form === 'login') {
                if (loginForm) loginForm.classList.add('active');
                if (registerForm) registerForm.classList.remove('active');
                if (formHeader) {
                    formHeader.querySelector('h1').textContent = 'Bienvenido de nuevo';
                    formHeader.querySelector('p').textContent = 'Ingresa tus credenciales para acceder a tu cuenta';
                }
            } else {
                if (registerForm) registerForm.classList.add('active');
                if (loginForm) loginForm.classList.remove('active');
                if (formHeader) {
                    formHeader.querySelector('h1').textContent = 'Crear cuenta';
                    formHeader.querySelector('p').textContent = 'Comienza en G.A.M.A. Solutions hoy';
                }
            }
        });
    });

    // Quick switch links
    const switchToRegister = document.getElementById('switchToRegister');
    const switchToLogin = document.getElementById('switchToLogin');

    if (switchToRegister && authTabs[1]) {
        switchToRegister.addEventListener('click', function(e) {
            e.preventDefault();
            authTabs[1].click();
        });
    }

    if (switchToLogin && authTabs[0]) {
        switchToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            authTabs[0].click();
        });
    }
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAuthTabs);
} else {
    initAuthTabs();
}
