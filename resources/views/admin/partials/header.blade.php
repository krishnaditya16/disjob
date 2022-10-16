<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/contact" class="nav-link  {{ $elementActive == 'contact' ? 'active' : '' }}">Contact</a>
      </li>
    </ul>
 
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a href="/logout" class="nav-link" onclick="return confirm('Apakah anda yakin ingin logout?')">
          <i class="nav-icon fas fa-sign-out-alt"></i> Logout
        </a> -->

        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
          <i class="nav-icon fas fa-sign-out-alt"></i> Logout
        </a>  
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        
      </li> 
    </ul>
  </nav>