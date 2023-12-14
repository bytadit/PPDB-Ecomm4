@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/bg_5.jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Program Pendaftaran</h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>Program Pendaftaran</li>
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
                            <div data-aos="fade-up" data-aos-delay="100">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                            <h3>Daftar Program Yang Sedang Dibuka</h3>
                                            <div class="container m-4">
                                                <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Periode</th>
                                                        <th>Jenjang</th>
                                                        <th>Jalur</th>
                                                        <th>Deadline Pendaftaran</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (\App\Models\Penerimaan::all()->where('is_open', 1) as $penerimaan)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>
                                                                    {{$penerimaan->periode}}
                                                                </td>
                                                                <td>
                                                                    {{$penerimaan->jenjang->nama}}
                                                                </td>
                                                                <td>{{$penerimaan->jalur->nama}}</td>
                                                                <td> null </td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-info mr-1 text-white"  data-bs-toggle="modal" data-bs-target="#showReqs1">
                                                                        Detail
                                                                    </button>
                                                                    <button class="btn btn-sm btn-primary mr-1">
                                                                        Daftar
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
