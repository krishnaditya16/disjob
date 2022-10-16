<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('assets/img/disjob_logo.png') }}" alt="DisJob Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DisJob</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/profile_picture.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div>
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MODULES</li>
          <li class="nav-item">
            <a href="/admin" class="nav-link {{ $elementActive == 'home' ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/user" class="nav-link  {{ $elementActive == 'user' ? 'active' : '' }}">
            <i class="nav-icon fa-fw fas fa-user nav-icon"></i>
              <p>
                Users
              </p>
            </a>
          </li>        
          <li class="nav-item">
            <a href="/admin/job" class="nav-link  {{ $elementActive == 'job' ? 'active' : '' }}">
            <i class="nav-icon fa-fw fas fa-briefcase"></i>
              <p>
                Jobs
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="/admin/perusahaan" class="nav-link  {{ $elementActive == 'perusahaan' ? 'active' : '' }}">
            <i class="nav-icon fa-fw fas fa-building"></i>
              <p>
                Companies
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/contact" class="nav-link  {{ $elementActive == 'contact' ? 'active' : '' }}">
            <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>  
          <li class="nav-header">JOB ATTRIBUTES</li>  
          <li class="nav-item">
            <a href="/admin/kategori" class="nav-link  {{ $elementActive == 'kategori' ? 'active' : '' }}">
            <i class="nav-icon fa-fw fas fa-tags"></i>
              <p>
                Categories
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="/admin/lokasi" class="nav-link  {{ $elementActive == 'lokasi' ? 'active' : '' }}">
            <i class="nav-icon fa-fw fas fa-map-marker-alt"></i>
              <p>
                Locations
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="/admin/type" class="nav-link  {{ $elementActive == 'type' ? 'active' : '' }}">
            <i class="nav-icon fab fa-black-tie"></i>
              <p>
                Job Types
              </p>
            </a>
          </li>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>