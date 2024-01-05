@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
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
                                        <div class="info-item d-flex flex-column justify-content-center align-items-center mb-3">
                                            <h3>Data Sekolah Asal</h3>
                                            <form action="{{ route('guest.registration.step4.post', ['program' => $program->first()->id]) }}" method="post" class="container">
                                                @csrf
                                                <div class="container">
                                                    <div class="mb-3">
                                                        <label for="npsn" class="form-label">NPSN <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="npsn"
                                                            placeholder="Masukkan Nomor NPSN..." required="" name="npsn"
                                                            value="{{ $sekolah->npsn ?? '' }}">
                                                        <div class="invalid-feedback">
                                                            Masukkan nomor NPSN dengan benar!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama Sekolah<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="nama"
                                                            placeholder="Masukkan Nama Sekolah..." required="" name="nama"
                                                            value="{{ $sekolah->nama ?? '' }}">
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama Sekolah dengan benar!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status Sekolah<span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-check form-radio-primary mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="status" id="statusNegeri"
                                                                value="1"
                                                                {{ isset($sekolah->status) && $sekolah->status == 1 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="statusNegeri">
                                                                Negeri
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-radio-danger mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="status" id="statusSwasta"
                                                                value="2"
                                                                {{ isset($sekolah->status) && $sekolah->status == 2 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="statusSwasta">
                                                                Swasta
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat<span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Sekolah..." required="">{{ $sekolah->alamat ?? '' }}</textarea>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal_lulus" class="form-label">Tanggal lulus<span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" id="tanggal_lulus"
                                                            placeholder="Masukkan Tanggal Lulus..." required="" name="tanggal_lulus"
                                                            value="{{ date('Y-m-d', strtotime($sekolah->tanggal_lulus ?? '')) ?? '' }}">

                                                    </div>
                                                    <a class="btn btn-danger float-start"
                                                        href="{{ route('guest.registration.step3', ['program' => $program->first()->id]) }}">
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
