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
                <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1" style="text-align:center;">Data Sekolah</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Nama Lengkap</label>
                                    <input type="password" class="form-control" id="sekolah-nama">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">NPSN Sekolah</label>
                                    <input type="password" class="form-control" id="sekolah-npsn">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Status Sekolah</label>
                                    <input type="password" class="form-control" id="sekolah-status">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Model Ujian Sekolah</label>
                                    <input type="password" class="form-control" id="sekolah-model-ujian">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Alamat Sekolah</label>
                                    <input type="password" class="form-control" id="sekolah-alamat">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="labelInput" class="form-label">Tahun Lulus</label>
                                    <input type="password" class="form-control" id="sekolah-tahun-lulus">
                                </div>
                            </div>
                            <!--end col-->
                            </div>
                        <!--end row-->
                    </div>
                    
                </div>

                
                </div>
                </br>
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran3") }}" style="position:absolute;left:10%; background-color:red;">Kembali</a>
              
                <a type="button" class="btn btn-primary" href="{{ url("pendaftaran5") }}" style="position:absolute;left:85%">Lanjut</a>
                
            </div>
          </div>
        </div>
</div>

      </section>
      <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->

@endsection