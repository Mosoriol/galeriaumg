<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="http://galeriaumg.test/cms/public/dist/img/umg.jpg" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrador.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
              <li class="nav-item">
                <a href="{{url('/inicio') }}" class="nav-link">
                 <i class="fas fa-home"></i>
                  <p>Inicio</p>
                </a>
              </li>
              

              <li class="nav-item">
                <a href="{{url('/usuarios') }}" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Usuarios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/slide') }}" class="nav-link">
                  <i class="fab fa-slideshare"></i>
                  <p>Slider</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/categoriasproyectos') }}" class="nav-link">
                  <i class="fas fa-book-open"></i>
                  <p>Categoria proyectos</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('/proyectos') }}" class="nav-link">
                  <i class="fas fa-tools"></i>
                  <p>Proyectos</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book-open"></i>
                  <p>Categoria Biografías</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-tools"></i>
                  <p>Biografías</p>
                </a>
              </li>


              


              <li class="nav-item">
                <a href="{{url('/mensajes') }}" class="nav-link">
                  <i class="far fa-comment"></i>
                  <p>Mensajes</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>