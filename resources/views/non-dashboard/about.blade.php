@extends('layouts.guestmain')

@section('main')
    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('images/bg_1.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Tentang Sekolah</h2>
          <ol>
            <li><a href="{{ url("index.html") }}">Home</a></li>
            <li>Tentang Sekolah</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row position-relative">
            <div class="col-lg-7 about-img" style="background-image: url(images/sekolah3.jpg)"></div>

            <div class="col-lg-7">
              <h2>Yayasan Tuna Pertama</h2>
              <div class="our-story">
                <h4>Berdiri Sejak 1999</h4>
                <h3>Jakarta</h3>
                <p>
                  Yayasan Tuna Pertama telah berdiri sejak 1999. Yayasan Tuna Pertama telah menghasilkan banyak generasi penerus bangsa. Di yayasan ini siswa akan didampingi dengan guru-guru professional. Siswa diyakini dapat berkembang
                  dengan baik. Moto kami yaitu:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> <span>Meningkatkan derajat pendidikan masyarakat guna mewujudkan generasi yang berakhlak mulia"</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Mengambangkan sistem pendidikan yang dapat meningkatkan derajat pendidikan masyarakat guna menghasilkan pribadi yang mulia."</span></li>
                </ul>
                <div class="watch-video d-flex align-items-center position-relative">
                  <i class="bi bi-play-circle"></i>
                  <a href="https://www.youtube.com/embed/8CSsUC4CSnY?si=N6BOJetYUGKV3zq3" class="glightbox stretched-link">Video Profil Yayasan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
    </main>
    <!-- End #main -->
@endsection