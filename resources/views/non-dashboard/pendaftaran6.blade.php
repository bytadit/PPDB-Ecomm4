@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Pendaftaran</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>6. Konfirmasi</li>
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
                        
                        <h3>Konfirmasi</h3>
                        </br>
                        <h3>Apakah data calon siswa sudah sesuai dan lengkap?</h3>
                            <div class="testimonial-item">
      
                              <div class="form-check" >
                                <input class="form-check-input" type="radio" value="" id="ketentuan" />
                                <label class="form-check-label" for="ketentuan">Ya, Data sudah sesuai dan lengkap.</label>
                              </div>
                            </div>
                        </div>
                    </div>
                                   
                  </div>
                </div>

                
                </div>
              </br>
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran5") }}" style="position:absolute;left:10%; background-color:red;">Kembali</a>
              
                <a type="button" class="btn btn-primary" href="{{ url("dashboard") }}" style="position:absolute;left:90%;background-color:green;">DAFTAR</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->

@endsection