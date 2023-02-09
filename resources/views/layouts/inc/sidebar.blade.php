<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/uploads/logo/dawat_logo.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dawat PK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">{{strtoupper(Auth()->user()->name)}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a class="nav-link {{'dashboard'== request()->path() ? 'active' :''}}" href="{{('/dashboard')}}" >
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{'categories'== request()->path() ? 'active' :''}}" href="{{url('/categories')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Categories
                      <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{'add_Category'== request()->path() ? 'active' :''}} " href="{{url('/add_Category')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Add Categories
                      <i class="right fas fa-angle-left"></i>
                    </p>

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{'vendors'== request()->path() ? 'active' :''}}" href="{{url('/vendors')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Vendors
                      <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{'add_vendors'== request()->path() ? 'active' :''}} " href="{{url('/add_vendors')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Add Vendors
                      <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
              </li>


              <li class="nav-item">
                <a class="nav-link text-white " href="../pages/notifications.html">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                       Notifications
                      <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

{{-- <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">

        <span class="ms-1 font-weight-bold text-white">DAWAT.PK</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{'dashboard'== request()->path() ? 'active' :''}}" href="{{('/dashboard')}}" >
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{'categories'== request()->path() ? 'active' :''}}" href="{{url('/categories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{'add_Category'== request()->path() ? 'active' :''}} " href="{{url('/add_Category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{'vendors'== request()->path() ? 'active' :''}}" href="{{url('/vendors')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Vendors</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{'add_vendors'== request()->path() ? 'active' :''}} " href="{{url('/add_vendors')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Vendors</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>



      </ul>
    </div>

  </aside> --}}
