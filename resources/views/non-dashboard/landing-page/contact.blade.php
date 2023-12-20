@extends('layouts.guestmain')

@section('main')
    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_1.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Kontak</h2>
          <ol>
            <li><a href="home">Home</a></li>
            <li>Kontak</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-map"></i>
                <h3>Alamat</h3>
                <p>Jalan Semangat No 7, Toriyo, Bendosari, Sukoharjo</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>kelompok4@gmail.com</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-telephone"></i>
                <h3>Telepon</h3>
                <p>+62 888 06 713 716</p>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <div class="row gy-4 mt-1">
            <div class="col-lg-6">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15820.51548303819!2d110.8360682!3d-7.5609252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14234667a3fd%3A0xbda63b32997616ad!2sUniversitas%20Sebelas%20Maret!5e0!3m2!1sid!2sid!4v1701907467566!5m2!1sid!2sid"
                frameborder="0"
                style="border: 0; width: 100%; height: 384px"
                allowfullscreen
              ></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row gy-4">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required />
                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required />
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Pesan (Kritik / Saran / Pertanyaan)" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesanmu berhasil dikirim, Terimakasih!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    @include('layouts.footer')
@endsection