  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('guest.home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <images src="images/logo.png" alt=""> -->
        <h1>TOP SCHOOL<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('guest.home') }}" class="{{ Request::routeIs('guest.home') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('guest.about') }}" class="{{ Request::routeIs('guest.about') ? 'active' : '' }}">Tentang Sekolah</a></li>
          <li><a href="{{ route('guest.registration.home') }}" class="{{ Request::routeIs('guest.registration.home') ? 'active' : '' }}">Pendaftaran</a></li>
          <li><a href="{{ route('guest.guide') }}" class="{{ Request::routeIs('guest.guide') ? 'active' : '' }}">Panduan</a></li>
          {{-- <li class="dropdown">
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
          </li> --}}
          <li><a href="{{ route('guest.contact') }}" class="{{ Request::routeIs('guest.contact') ? 'active' : '' }}">Kontak</a></li>
          @if (Auth::check())
            <li><a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">Beranda</a></li>
          @else
            <li><a href="{{ route('login') }}" class="{{ Request::routeIs('auth.login') ? 'active' : '' }}">Masuk</a></li>
          @endif
        </ul>
      </nav>
      <!-- .navbar -->
    </div>

  </header><!-- End Header -->
