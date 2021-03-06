<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=" {{route('admin.index')}} " class="brand-link">
      <img src=" {{asset('assets/admin/images/AdminLTELogo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2 h-100">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Panel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-rectangle-list ml-2"></i>
              <p class="ml-2">
                Bölmə
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.category.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bölmələrin siyahısı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('admin.category.create')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bölmə əlavə et</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.tag.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Taqların siyahısı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('admin.tag.create')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag əlavə et</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-rectangle-list ml-2"></i>
              <p class="ml-2">
                Post
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.post.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postların siyahısı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('admin.post.create')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post əlavə et</p>
                </a>
              </li>
            </ul>
          </li>
          @auth
          <li class="nav-item">
            <a href=" {{ route('admin.logout') }} " class="nav-link">
            <i class="fas fa-user ml-2"></i>
              <p class="ml-2">
                Çıxış
              </p>
            </a>
          </li>
          @endauth
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>