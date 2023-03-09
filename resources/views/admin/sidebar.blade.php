<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">

      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('user')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('showfoodmenu')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Foodmenu</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('showreservation')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Reservation</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('showchef')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Chef</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('showorder')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>


    </ul>
  </nav>
