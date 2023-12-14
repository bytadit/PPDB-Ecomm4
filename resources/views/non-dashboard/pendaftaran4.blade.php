@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_1.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Pendaftaran</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>4. Data Sekolah</li>
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
                        
                        <h3>Data Sekolah</h3>
                        </br>
                        <form action="form_datasiswa.php" method="post" >
                          <label for="nama">NPSN Sekolah :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>
                  
                          <label for="nim">Nama Sekolah :</label><br>
                          <input type="text" id="nisn" name="nisn" required><br><br>
                  
                          <label for="jurusan">Status Sekolah :</label><br>
                          <input type="text" id="nik" name="nik" required><br><br>
                  
                          <label for="email">Alamat Sekolah :</label><br>
                          <input type="text" id="nama" name="nama" required><br><br>

                          <label for="email">Tahun lulus :</label><br>
                          <input type="text" id="nama" name="nama" required><br><br>
                  
                      </form>
                        </div>
                    </div>
                                   
                  </div>
                </div>

                
                </div>
              </br>
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran3") }}" style="position:absolute;left:10%; background-color:red;">Kembali</a>
              
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran5") }}" style="position:absolute;left:90%">Lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->

@endsection