@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_1.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Panduan</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>Panduan</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row position-relative">
            <div class="col-lg-7 about-img" style="background-image: url(images/alu2.jpg)"></div>

            <div class="col-lg-7">
              <h2>Panduan Pendaftaran</h2>
              <div class="our-story">
                <h4>Panduan Pendaftaran Peserta Didik Baru</h4>
                <p><br />Panduan ini berisi mengenai informasi dan alur pendaftaran</p>
                <a type="button" class="btn btn-primary" href="{{ url("ppdb.pdf") }}" download="ppdb.pdf">Download</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
    </main>
    <!-- End #main -->
  @include('layouts.footer')
@endsection