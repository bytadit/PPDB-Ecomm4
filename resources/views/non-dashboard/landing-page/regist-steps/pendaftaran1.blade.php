@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Pendaftaran</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>1. Ketentuan Pendaftaran</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Pendaftaran Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-12">
              <div class="portfolio-description">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        
                        <h3>Ketentuan</h3>
                        </br>
                        <img src="{{ asset("images/ketentuan.jpg") }}" alt="ketentuan">
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                      <p>Apakah Anda setuju dengan ketentuan diatas?</p>
                      <div class="form-check" >
                        <input class="form-check-input" type="radio" value="" id="ketentuan" />
                        <label class="form-check-label" for="ketentuan">Ya, Saya Setuju</label>
                      </div>
                    </div>
                    
                  </div>
                </div>

                
                </div>
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran2") }}" style="position:absolute;left:90%">Lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->
@endsection