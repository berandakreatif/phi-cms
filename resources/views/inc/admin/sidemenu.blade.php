<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="">
      <img src="{{asset('logo-light.png')}}" alt="PhiCMS" class="brand-image" style="max-width:75%; padding: 15px;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <hr>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/dashboard')}}" class="nav-link @if(request()->segment(2) == "dashboard") active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/widgets')}}" class="nav-link @if(request()->segment(2) == "widgets") active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item @if(request()->segment(2) == "pages") menu-open @endif">
            <a href="#" class="nav-link @if(request()->segment(2) == "pages") active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/pages')}}" class="nav-link @if((request()->segment(2) == "pages") && (request()->segment(3) == "")) active-submenu @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Pages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/pages/create')}}" class="nav-link nav-link  @if((request()->segment(2) == 'pages') && (request()->segment(3) == 'create')) active-submenu @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(request()->segment(2) == "posts") menu-open @endif">
            <a href="#" class="nav-link @if(request()->segment(2) == "posts") active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Posts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/posts')}}" class="nav-link @if((request()->segment(2) == "posts") && (request()->segment(3) == "")) active-submenu @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/posts/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Post</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>