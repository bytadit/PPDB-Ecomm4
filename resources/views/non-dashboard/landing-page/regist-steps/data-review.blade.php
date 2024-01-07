@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
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
                                        <div
                                            class="info-item d-flex flex-column justify-content-center align-items-center mb-3">
                                            <h3>Review Data</h3>
                                            <div class="container">
                                                <h6>Silakan Review Data Kamu sebelum melakukan Kunci Data</h6>
                                                <h3>Data Siswa</h3>
                                                <ul>
                                                    <li>NISN : {{ session()->has('pendaftar') ? $pendaftar['nisn'] : '' }}</li>
                                                    <li>NIK : {{ session()->has('pendaftar') ? $pendaftar['nik'] : '' }}</li>
                                                    <li>Nama : {{ session()->has('pendaftar') ? $pendaftar['nama'] : '' }}</li>
                                                    <li>Jenis Kelamin : {{ session()->has('pendaftar') ? $pendaftar['gender'] : '' }}</li>
                                                    <li>Tanggal Lahir : {{ session()->has('pendaftar') ? $pendaftar['tgl_lahir'] : '' }}</li>
                                                    <li>Alamat : {{ session()->has('pendaftar') ? $pendaftar['alamat'] : '' }}</li>
                                                    <li>Email Aktif : {{ session()->has('pendaftar') ? $pendaftar['email'] : '' }}</li>
                                                </ul>
                                                <h3>Data Orang Tua</h3>
                                                <ul><h5>Data Ayah</h5>
                                                    <li>Nama : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 1)->first())['nama'] : '' }}</li>
                                                    <li>Pekerjaan : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 1)->first())['pekerjaan'] : '' }}</li>
                                                    <li>Penghasilan : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 1)->first())['penghasilan'] : '' }}</li>
                                                </ul>
                                                <ul><h5>Data Ibu</h5>
                                                    <li>Nama : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 2)->first())['nama'] : '' }}</li>
                                                    <li>Pekerjaan : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 2)->first())['pekerjaan'] : '' }}</li>
                                                    <li>Penghasilan : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 2)->first())['penghasilan'] : '' }}</li>
                                                </ul>
                                                <ul><h5>Data Wali</h5>
                                                    <li>Nama : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 3)->first())['nama'] : '' }}</li>
                                                    <li>Pekerjaan : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 3)->first())['pekerjaan'] : '' }}</li>
                                                    <li>Penghasilan : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 3)->first())['penghasilan'] : '' }}</li>
                                                    <li>Jenis Kelamin : {{ session()->has('orangtua') ? optional(collect(session()->get('orangtua'))->where('status', 3)->first())['gender'] : '' }}</li>
                                                </ul>
                                                <h3>Data Sekolah Asal</h3>
                                                <ul>
                                                    <li>NPSN : {{ session()->has('sekolah') ? $sekolah['npsn'] : '' }}</li>
                                                    <li>Nama : {{ session()->has('sekolah') ? $sekolah['nama'] : '' }}</li>
                                                    <li>Status Sekolah : {{ session()->has('sekolah') ? $sekolah['status'] : '' }}</li>
                                                    <li>Alamat : {{ session()->has('sekolah') ? $sekolah['alamat'] : '' }}</li>
                                                    <li>Tanggal Lulus : {{ session()->has('sekolah') ? $sekolah['tanggal_lulus'] : '' }}</li>
                                                </ul>
                                                <h3>Data Nilai Rapor</h3>
                                                <ul>
                                                    @if (session()->has('nilai'))
                                                        @foreach ($nilai_pendaftar as $nilai)
                                                        <li>
                                                            Nilai Semester {{$rapors->where('id', $nilai['id_rapor'])->first()->nama_semester}} : {{$nilai['nilai_rata']}}
                                                        </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                                <form
                                                    action="{{ route('guest.registration.step6.verify', ['program' => $program->first()->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    <a class="btn btn-danger float-start"
                                                        href="{{ route('guest.registration.step5', ['program' => $program->first()->id]) }}">
                                                        Kembali
                                                    </a>
                                                    <button class="btn btn-primary float-end" type="submit">
                                                        Kunci Data
                                                    </button>
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
            </div>
        </section>
        <!-- End Projet Details Section -->
    </main>
    <!-- End #main -->
@endsection
