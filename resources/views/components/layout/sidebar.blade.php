{{--
/**
 * G.A.M.A. SOLUTIONS S.A. de C.V.
 * "El factor de cambio en tu tecnología"
 *
 * @descripcion     Vista de Sidebar y Toggle móvil
 * @autor           Rubén Alejandro Nolasco Ruiz
 * @autorizador     Rubén Alejandro Nolasco Ruiz
 * @prueba          Diego Miguel Hernandez Fabela  
 * @mantenimiento   Ghael Garcia Manjarrez 
 * @version       0.1.0
 * @creado        11/04/2026
 * @modificado    11/04/2026
 *
 * @cambios
 * Fecha       | Autor             | Descripción
 * ------------|-------------------|------------------------------------------
 * 03/04/2026  | Rubén Alejandro   | Implementación inicial de Sidebar y Toggle móvil.
 * 11/04/2026  | Rubén Alejandro   | Ajuste de estructura de prólogo según manual GAMA-MPL-03.
 */
--}}     
     
     
     <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" id="mobileMenuToggle">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <!-- Sidebar Overlay -->
      <div class="sidebar-overlay" id="sidebarOverlay"></div>

      <!-- Sidebar -->
      <aside class="sidebar" id="sidebar">
        <!-- Brand Header -->
        <div class="sidebar-brand">
          <div class="logo-icon">
            <img src="{{ asset('img/gama-logo.png') }}" alt="G.A.M.A Solutions">
          </div>
        </div>

        <!-- User Info -->
        <div class="sidebar-user">
          <div class="user-avatar">US</div>
          <div class="user-info">
            <span class="user-name">Usuario name</span>
            <span class="user-role">Administrador</span>
          </div>
        </div>

        <!-- Navigation -->
        <nav class="sidebar-nav">
          <!-- Principal -->
          <div class="nav-section">
            <span class="nav-label">Principal</span>
            <a href="#" class="nav-item active" data-tooltip="Dashboard">
              <i class="fas fa-home nav-icon"></i>
              <span class="nav-text">Dashboard</span>
            </a>
          </div>

          <!-- Módulos -->
          <div class="nav-section">
            <span class="nav-label">Módulos</span>
            <a href="#" class="nav-item" data-tooltip="Reportes">
              <i class="fas fa-chart-bar nav-icon"></i>
              <span class="nav-text">Reportes</span>
            </a>
            <a href="#" class="nav-item" data-tooltip="Usuarios">
              <i class="fas fa-users nav-icon"></i>
              <span class="nav-text">Usuarios</span>
              <span class="badge">3</span>
            </a>
            <a href="#" class="nav-item" data-tooltip="Campo Genérico 1">
              <i class="fas fa-layer-group nav-icon"></i>
              <span class="nav-text">Campo Genérico 1</span>
            </a>
            <a href="#" class="nav-item" data-tooltip="Campo Genérico 2">
              <i class="fas fa-layer-group nav-icon"></i>
              <span class="nav-text">Campo Genérico 2</span>
            </a>
            <a href="#" class="nav-item" data-tooltip="Campo Genérico 3">
              <i class="fas fa-layer-group nav-icon"></i>
              <span class="nav-text">Campo Genérico 3</span>
            </a>
          </div>

          <!-- Configuración -->
          <div class="nav-section">
            <span class="nav-label">Configuración</span>
            <a href="#" class="nav-item" data-tooltip="Ajustes">
              <i class="fas fa-cog nav-icon"></i>
              <span class="nav-text">Ajustes</span>
            </a>
          </div>
        </nav>

        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
          <a href="#" class="nav-item" data-tooltip="Mi Perfil">
            <i class="fas fa-user-circle nav-icon"></i>
            <span class="nav-text">Mi Perfil</span>
          </a>
          <a
            href="{{ route('login') }}"
            class="nav-item logout"
            data-tooltip="Cerrar sesión"
          >
            <i class="fas fa-sign-out-alt nav-icon"></i>
            <span class="nav-text">Cerrar sesión</span>
          </a>
        </div>
      </aside>

      <script>
        // Mobile menu toggle
        const sidebar = document.getElementById("sidebar");
        const sidebarOverlay = document.getElementById("sidebarOverlay");
        const mobileMenuToggle = document.getElementById("mobileMenuToggle");

        mobileMenuToggle.addEventListener("click", () => {
          sidebar.classList.toggle("active");
          sidebarOverlay.classList.toggle("active");
          mobileMenuToggle.classList.toggle("active");
        });

        sidebarOverlay.addEventListener("click", () => {
          sidebar.classList.remove("active");
          sidebarOverlay.classList.remove("active");
          mobileMenuToggle.classList.remove("active");
        });
      </script>