<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>TOP SCHOOL</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{URL::asset('assets/images/favicon.png')}}" rel="icon" />
    <link href="{{URL::asset('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>

  <body>
    @include('layouts.nav')

    <div class="main">
        @yield('main')
    </div>


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{URL::asset('assets/js/main.js')}}"></script>

  </body>
</html>
