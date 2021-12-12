<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-grid-large menu-icon" style="font-size: 25px; margin-right: 10px;"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-snapchat " style="font-size: 30px; margin-right: 10px;"></i>
          <span class="menu-title">Informasi</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.html">
          <i class="  mdi mdi-image-album "  style="font-size: 30px; margin-right: 10px;"></i>
          <span class="menu-title">Galeri</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-account-box" style="font-size: 30px; margin-right:10px;"></i>
          <span class="menu-title">Kontak</span>
        </a>
      </li>
     @if (auth()->user()->role == 'superadmin')
     <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="mdi mdi-account" style="font-size: 30px; margin-right:10px;"></i>
        <span class="menu-title">Admin</span>
      </a>
    </li>
     @endif
     
    </ul>
  </nav>