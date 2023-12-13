@extends('layouts.guestmain')

@section('main')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">Selamat Datang di  <span>SIPENSARU</span></h2>
                    <p data-aos="fade-up">Sipensaru adalah portal untuk mendaftarkan peserta didik baru pada yayasan Tuna Pertama.</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="{{ url("about") }}" class="btn-get-started">Mulai</a>
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
@endsection