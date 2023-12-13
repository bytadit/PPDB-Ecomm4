  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url("home") }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <images src="images/logo.png" alt=""> -->
        <h1>SIPENSARU<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url("home") }}" class="active">Home</a></li>
          <li><a href="{{ url("about") }}">Tentang Sekolah</a></li>
          <li><a href="{{ url("pendaftaran") }}">Pendaftaran</a></li>
          <li><a href="{{ url("panduan") }}">Panduan</a></li>
          <li class="dropdown">
            <a href="{{ url("#") }}"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ url("#") }}">Pengumuman 1</a></li>
              <li class="dropdown">
                <a href="{{ url("#") }}"><span>Pengumuman 2</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{ url("#") }}"></a></li>
                  <li><a href="{{ url("#") }}">Pengumuman Khusus 1</a></li>
                  <li><a href="{{ url("#") }}">Pengumuman Khusus 2</a></li>
                  <li><a href="{{ url("#") }}">Pengumuman Khusus 3</a></li>
                  <li><a href="{{ url("#") }}">Pengumuman Khusus 4</a></li>
                </ul>
              </li>
              <li><a href="{{ url("#") }}">Pengumuman 3</a></li>
              <li><a href="{{ url("#") }}">Pengumuman 4</a></li>
              <li><a href="{{ url("#") }}">Pengumuman 5</a></li>
            </ul>
          </li>
          <li><a href="{{ url("contact") }}">Kontak</a></li>
          <li><a href="{{ url("login") }}">Login</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>

  </header><!-- End Header -->
