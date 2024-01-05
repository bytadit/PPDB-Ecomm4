@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
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
                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div
                                            class="info-item d-flex flex-column justify-content-center align-items-center mb-3">
                                            <h3>Data Siswa</h3>
                                            <div class="container">
                                            <form
                                                action="{{ route('guest.registration.step2.post', ['program' => $program->first()->id]) }}"
                                                method="post" class="container">
                                                @csrf
                                                <input type="hidden" name="id_penerimaan"
                                                    value="{{ $program->first()->id }}">
                                                <div class="mb-3">
                                                    <label for="nisn" class="form-label">NISN <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nisn"
                                                        placeholder="Masukkan Nomor NISN..." required="" name="nisn"
                                                        value="{{ $pendaftar->nisn ?? '' }}">
                                                    <div class="invalid-feedback">
                                                        Masukkan nomor NISN dengan benar!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nik" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nik"
                                                        placeholder="Masukkan Nomor NIK..." required="" name="nik"
                                                        value="{{ $pendaftar->nik ?? '' }}">
                                                    <div class="invalid-feedback">
                                                        Masukkan nomor NIK dengan benar!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Lengkap <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Masukkan Nama Lengkap..." required="" name="nama"
                                                        value="{{ $pendaftar->nama ?? '' }}">
                                                    <div class="invalid-feedback">
                                                        Masukkan Nama Lengkap dengan benar!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">Jenis Kelamin <span
                                                            class="text-danger">*</span></label>
                                                    <div class="form-check form-radio-primary mb-3">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="genderMale" value="1"
                                                            {{ isset($pendaftar->gender) && $pendaftar->gender == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="genderMale">
                                                            Laki-Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-radio-danger mb-3">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="genderFemale" value="2"
                                                            {{ isset($pendaftar->gender) && $pendaftar->gender == 2 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="genderFemale">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Masukkan Jenis Kelamin dengan benar!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="tgl_lahir"
                                                        placeholder="Masukkan Tanggal Lahir..." required=""
                                                        name="tgl_lahir"
                                                        value="{{ date('Y-m-d', strtotime($pendaftar->tgl_lahir ?? '')) ?? '' }}">
                                                    <div class="invalid-feedback">
                                                        Masukkan Tanggal Lahir dengan benar!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat<span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat..." required="">{{ $pendaftar->alamat ?? '' }}</textarea>
                                                    <div class="invalid-feedback">
                                                        Masukkan Alamat dengan benar!
                                                    </div>
                                                </div>
                                                <a class="btn btn-danger float-start"
                                                    href="{{ route('guest.registration.step1', ['program' => $program->first()->id]) }}">
                                                    Kembali
                                                </a>
                                                <button class="btn btn-primary float-end" type="submit">
                                                    Lanjut
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->
@endsection
