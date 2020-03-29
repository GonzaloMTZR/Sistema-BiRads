
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
            
            @role('Responsable Estatal de Programa')
            <!-- Menu de jurisdicciones-->
                <li class="nav-item {{ request()->is('jurisdicciones/*') ? 'active' : '' }}" data-item="jurisdicciones">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="nav-text">Jurisdicciones y Unidades Médicas</span>
                    </a>
                    <div class="triangle" ></div>
                </li>
                
                <!-- Menu de registro de usuarios -->
                <li class="nav-item {{ request()->is('registro/*') ? 'active' : '' }}" data-item="registro">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="nav-text">Registro de usuarios</span>
                    </a>
                    <div class="triangle"></div>
                </li>
            @endrole
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
        
        @role('Responsable Estatal de Programa')
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
                        <a href="/unidades-medicas/create">
                            <i class="nav-icon i-Clock-4"></i>
                            <span class="item-name">Agregar una unidad médica</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/unidades-medicas">
                            <i class="nav-icon i-Clock-4"></i>
                            <span class="item-name">Ver Listado de unidades médicas</span>
                        </a>
                    </li>
                </li>
            </ul>
        @else
        @endrole
        

        <!-- Submenu de registro de usuarios -->
        <ul class="childNav" data-parent="registro">
            <li class="nav-item">
                <a href="/usuarios/create">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Registrar un Usuario</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/usuarios">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Ver Usuarios en el sistema</span>
                </a>
            </li>
        </ul> 

    </div>
    <div class="sidebar-overlay"></div>
</div>