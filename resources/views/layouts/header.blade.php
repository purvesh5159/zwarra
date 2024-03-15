  <!-- mital -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand zw_bg_f7e9ec navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="brand-link">
        <img src="dist/img/zwaaralogo.svg" alt="Zwaara Logo" class="brand-image ">
        <!-- <span class="brand-text font-weight-light">Zwarra Admin Panel</span> -->
      </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
      <a class="btn zw_lanbtn float-right m-2 poppins-medium zw_18" data-toggle="dropdown" href="#" href="http://localhost/zwarra/public/serviceproviders/create">
        Languages <img src="dist/img/languages_icon.svg" alt="languages" class="brand-image " style="padding: 0 20px;"><i class="fas fa-angle-down right mr-2"></i>
      </a>
        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a> -->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
           English
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           Arebic
          </a>
        </div>
      </li>
      @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="{{ route('register-user') }}">Register</a> -->
            <!-- <a class="nav-link" href="{{ route('users.create') }}">Register</a> -->
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
          </li>
          @endguest
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->
