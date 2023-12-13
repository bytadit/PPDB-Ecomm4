<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPENSARU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/images/favicon.png") }}" rel="icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("/css/main.css") }}" rel="stylesheet">
</head>

<body>

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
          <li><a href="{{ url("index.html") }}" class="active">Home</a></li>
          <li><a href="{{ url("about.html") }}">Tentang Sekolah</a></li>
          <li><a href="{{ url("pendaftaran.html") }}">Pendaftaran</a></li>
          <li><a href="{{ url("panduan.html") }}">Panduan</a></li>
          <li class="dropdown">
            <a href="{{ url("#") }}"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ url("#") }}">Pengumuman 1</a></li>
              <li class="dropdown">
                <a href="{{ url("#") }}"><span>Pengumuman 2</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{ url("#") }}"></a></li>
                  <li><a href="{{ url("#") }}">Pengemuman Khusus 1</a></li>
                  <li><a href="{{ url("#") }}">Pengemuman Khusus 2</a></li>
                  <li><a href="{{ url("#") }}">Pengemuman Khusus 3</a></li>
                  <li><a href="{{ url("#") }}">Pengemuman Khusus 4</a></li>
                </ul>
              </li>
              <li><a href="{{ url("#") }}">Pengumuman 3</a></li>
              <li><a href="{{ url("#") }}">Pengumuman 4</a></li>
              <li><a href="{{ url("#") }}">Pengumuman 5</a></li>
            </ul>
          </li>
          <li><a href="{{ url("contact.html") }}">Kontak</a></li>
          <li><a href="{{ url("") }}">Login</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Selamat Datang di  <span>SIPENSARU</span></h2>
            <p data-aos="fade-up">Sipensaru adalah portal untuk mendaftarkan peserta didik baru pada yayasan Tuna Pertama.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="{{ url("pendaftaran.html") }}" class="btn-get-started">Mulai</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(images/bg_5.jpg)"></div>
      <div class="carousel-item" style="background-image: url(images/bg_5.jpg)"></div>
      <div class="carousel-item" style="background-image: url(images/bg_5.jpg)"></div>
      <div class="carousel-item" style="background-image: url(images/bg_5.jpg)"></div>
      <div class="carousel-item" style="background-image: url(images/bg_5.jpg)"></div>

      <a class="carousel-control-prev" href="{{ url("#hero-carousel") }}" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="{{ url("#hero-carousel") }}" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->


  <a href="{{ url("#") }}" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset("/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/js/main.js") }}"></script>

</body>

</html>