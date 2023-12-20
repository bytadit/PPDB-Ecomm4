@extends('layouts.guestmain')

@section('main')
<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_1.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>Pendaftaran</h2>
          <ol>
            <li><a href="{{ url("home") }}">Home</a></li>
            <li>2. Data Siswa</li>
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
              <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1" style="text-align:center;">Data Siswa</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Nama Lengkap</label>
                                    <input type="password" class="form-control" id="siswa-nama">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">NIK</label>
                                    <input type="password" class="form-control" id="siswa-nik">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">NISN</label>
                                    <input type="password" class="form-control" id="siswa-nisn">
                                </div>
                            </div>
                            <!--end col-->
                            
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">NIS</label>
                                    <input type="password" class="form-control" id="siswa-nis">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Jenis Kelamin</label><br>
                                    <input type="radio"  id="siswa-jenis-kelamin" value="laki-laki"><label for="laki-laki"> Laki-Laki</label><br>
                                    <input type="radio"  id="siswa-jenis-kelamin" value="perempuan"><label for="perempuan"> Perempuan</label>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Agama</label>
                                    <input type="password" class="form-control" id="siswa-agama">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Tempat Lahir</label>
                                    <input type="password" class="form-control" id="siswa-tempat-lahir">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleInputdate" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="siswa-tanggal-lahir">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Alamat</label>
                                    <input type="password" class="form-control" id="siswa-alamat">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">No. Handphone</label>
                                    <input type="password" class="form-control" id="siswa-no-handphone">
                                </div>
                            </div>
                            <!--end col-->
                            </div>
                        <!--end row-->
                    </div>
                    
                </div>

                
                </div>
                </br>
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran1") }}" style="position:absolute;left:10%; background-color:red;">Kembali</a>
              
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran3") }}" style="position:absolute;left:85%">Lanjut</a>
                
            </div>
          </div>
        </div>
      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->

@endsection