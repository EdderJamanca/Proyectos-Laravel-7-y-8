<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/inicio')}}" class="brand-link">
        <img src="{{url('/')}}/images/icono.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host"><div class="os-resize-observer observed" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer observed"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 620px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Adiministrador</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{--====================================
                            Botón Blog
            ==================================== --}}
            <li class="nav-item">

                <a href="{{url('/inicio')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Inicio</p>
                </a>

            </li>
         {{--====================================
                            Usuarios
            ==================================== --}}
            <li class="nav-item">

                <a href="{{url('/usuarios')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i> 
                    <p>Usuarios</p>
                </a>

            </li>
            {{--====================================
                            Slide
            ==================================== --}}
            <li class="nav-item">

                <a href="{{url('/inicio')}}" class="nav-link">
                    <i class="nav-icon fas fa-image"></i> 
                    <p>Slide</p>
                </a>

            </li>
             {{--====================================
                            Categoria
            ==================================== --}}
            <li class="nav-item">

                <a href="{{url('/inicio')}}" class="nav-link">
                    <i class=" nav-icon fas fa-list-ul"></i> 
                    <p>Categoría</p>
                </a>

            </li>
            {{--====================================
                            Excursiones
            ==================================== --}}
            <li class="nav-item">

                <a href="{{url('/inicio')}}" class="nav-link">
                    <i class="nav-icon fas fa-taxi"></i> 
                    <p>Categoría</p>
                </a>

            </li>
            {{--====================================
                            Mensaje
            ==================================== --}}
            <li class="nav-item">

                <a href="{{url('/inicio')}}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i> 
                    <p>Mensaje</p>
                </a>

            </li>
   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 44.7729%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>