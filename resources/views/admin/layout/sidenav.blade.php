
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           
          <img src=" {{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/admin/websites" 
                @if(\Request::is('admin/websites')) class="nav-link active" @endif
                class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Websites
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/categories" 
                @if(\Request::is('admin/categories')) class="nav-link active" @endif
                class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Categories
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/articles" 
                @if(\Request::is('admin/articles')) class="nav-link active" @endif
                class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Articles
                  </p>
                </a>
              </li>
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>