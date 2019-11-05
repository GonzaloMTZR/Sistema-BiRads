
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
                                <li class="nav-item {{ request()->is('dashboard/*') ? 'active' : '' }}" data-item="paciente">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Pacientes</span>
                </a>
                <div class="triangle"></div>
            </li>

            
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu pacientes -->
        <ul class="childNav" data-parent="paciente">
            <li class="nav-item">
                <a href="/pacientes/create">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Agregar Paciente</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/pacientes">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Ver Listado de Pacientes</span>
                </a>
            </li>
        </ul>                
    </div>
    <div class="sidebar-overlay"></div>
</div>