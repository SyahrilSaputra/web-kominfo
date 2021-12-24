  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/admin/images/kominfo.png') }}" alt="logo"  style="width:80px; height:80px;"/>
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}">
            <h5 class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22">
                <path
                  d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                />
              </svg>
            </h5>
            <h5 class="text">Dashboard</h5>
          </a>
        </li>
        <li class="nav-item nav-item-has-children {{ Request::is('dashboard/profile/*') ? 'active' : '' }}">
          <a
            href="#0"
            class="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#ddmenu_2"
            aria-controls="ddmenu_2"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <h5 class="icon">
              <i class="lni lni-producthunt"></i>
            </h5>
            <h5 class="text">Profile</h5>
          </a>
          <ul id="ddmenu_2" class="collapse {{ Request::is('dashboard/profile/*') ? 'show' : '' }} dropdown-nav">
            <li>
              <a class="{{ Request::is('dashboard/profile/visi-misi') | Request::is('dashboard/profile/visi-misi/edit-visi-misi/*') ? 'active' : '' }}" href="{{ route('visiMisi') }}"><h6 class="text-gray">Visi dan Misi</h6></a>
            </li>
            <li>
              <a class="{{ Request::is('dashboard/profile/tentang-kami') | Request::is('dashboard/profile/tentang-kami/edit-tentang-kami/*') ? 'active' : '' }}" href="{{ route('tentangKami') }}"><h6 class="text-gray">Tentang Kami</h6></a>
            </li>
            <li>
              <a class="{{ Request::is('dashboard/profile/pimpinan') | Request::is('dashboard/profile/pimpinan/edit-pimpinan/*') ? 'active' : '' }}" href="{{ route('pimpinan') }}"><h6 class="text-gray">Pimpinan</h6></a>
            </li>
          </ul>
        </li>
        <li class="nav-item {{ Request::is('dashboard/galeri') | Request::is('dashboard/galeri/add-galeri') | Request::is('dashboard/galeri/galeri-show/*') ? 'active' : '' }}">
          <a href="{{ route('galeri') }}">
            <h5 class="icon">
              <i class="lni lni-image"></i>
            </h5>
            <h5 class="text">Galeri</h5>
          </a>
        </li>
        <li class="nav-item {{ Request::is('dashboard/informasi') | Request::is('dashboard/informasi/create-informasi') | Request::is('dashboard/informasi/detail-informasi/*') | Request::is('dashboard/informasi/edit-informasi/*') ? 'active' : '' }}">
          <a href="{{ route('informasi') }}">
            <h5 class="icon">
              <i class="lni lni-information"></i>
            </h5>
            <h5 class="text">Informasi</h5>
          </a>
        </li>
        
        <li class="nav-item {{ Request::is('dashboard/contact') | Request::is('dashboard/contact/create-contact') | Request::is('dashboard/contact/edit-contact/*') ? 'active' : '' }}">
          <a href="{{ route('contact') }}">
            <h5 class="icon">
             <i class="lni lni-phone"></i>
            </h5>
            <h5 class="text">Kontak</h5>
          </a>
        </li>
        @if (auth()->user()->role == 'superadmin')
        <li class="nav-item {{ Request::is('dashboard/admin') | Request::is('dashboard/admin/create-admin') | Request::is('dashboard/admin/edit-admin/*') ? 'active' : '' }}">
          <a href="{{ route('admin') }}">
            <h5 class="icon">
             <i class="lni lni-user"></i>
            </h5>
            <h5 class="text">Admin</h5>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <div class="promo-box">
      <h3>Kominfo Bone</h3>
      <p>Website Sistem Informasi Kementrian Komunikasi Informatika dan Persandian Kabupaten Bone</p>
      <a
        href="{{ route('logout') }}"
        rel="nofollow"
        class="main-btn primary-btn btn-hover"
      >
        Logout
      </a>
    </div>
  </aside>