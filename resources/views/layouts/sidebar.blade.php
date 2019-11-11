
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <!-- Menu de pacientes -->
            <li class="nav-item {{ request()->is('paciente/*') ? 'active' : '' }}" data-item="paciente">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Pacientes</span>
                </a>
                <div class="triangle"></div>
            </li>

            <!-- Menu de jurisdicciones-->
            <li class="nav-item {{ request()->is('jurisdicciones/*') ? 'active' : '' }}" data-item="jurisdicciones">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">jurisdicciones</span>
                </a>
                <div class="triangle" ></div>
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
        
        <!-- Submenu jurisdicciones -->
        <ul class="childNav" data-parent="jurisdicciones">
            <li class="nav-item">
                <a href="/jurisdicciones/create">
                        <i class="nav-icon i-Clock-3"></i>
                        <span class="item-name">Agregar jurisdicción</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/jurisdicciones">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">Ver Listado de jurisdicciones</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/unidades-medicas">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">Ver Listado de unidades medicas</span>
                    </a>
                </li>
            </li>
        </ul>

    </div>
    <div class="sidebar-overlay"></div>
</div>