@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_1.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Pendaftaran</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>3. Data Orang Tua atau Wali</li>
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
                        
                        <h3>Data Ayah</h3>
                        </br>
                        <form action="form_datasiswa.php" method="post" >
                          <label for="email">Nama Lengkap :</label><br>
                          <input type="text" id="nama" name="nama" required><br><br>

                          <label for="jurusan">NIK :</label><br>
                          <input type="text" id="nik" name="nik" required><br><br>
              
                          <label for="nama">Pekerjaan :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>

                          <label for="nama">Penghasilan :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>

                
                  
                      </form>

                      
                        </div>
                    </div>
                                   
                  </div>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        
                        <h3>Data Ibu</h3>
                        </br>
                        <form action="form_datasiswa.php" method="post" >
                          <label for="email">Nama Lengkap :</label><br>
                          <input type="text" id="nama" name="nama" required><br><br>

                          <label for="jurusan">NIK :</label><br>
                          <input type="text" id="nik" name="nik" required><br><br>
              
                          <label for="nama">Pekerjaan :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>

                          <label for="nama">Penghasilan :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>
                  
                      </form>
 
                        </div>
                    </div>
                                   
                  </div>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        
                        <h3>Data Wali</h3>
                        </br>
                        <form action="form_datasiswa.php" method="post" >
                          <label for="email">Nama Lengkap :</label><br>
                          <input type="text" id="nama" name="nama" required><br><br>

                          <label for="jurusan">NIK :</label><br>
                          <input type="text" id="nik" name="nik" required><br><br>
              
                          <label for="nama">Pekerjaan :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>

                          <label for="nama">Penghasilan :</label><br>
                          <input type="text" id="nis" name="nis" required><br><br>

                          <label for="email">Jenis Kelamin :</label><br>
                          <input type="radio" id="jk1" name="nama" required>
                          <label for="jk1">Laki-laki</label>
                          <input type="radio" id="jk2" name="nama" required>
                          <label for="jk2">Perempuan</label><br><br>

                  
                      </form>

                      
                        </div>
                    </div>
                                   
                  </div>
                </div>

                </div>
              </br>
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran2") }}" style="position:absolute;left:10%; background-color:red;">Kembali</a>
              
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran4") }}" style="position:absolute;left:90%">Lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->
@endsection