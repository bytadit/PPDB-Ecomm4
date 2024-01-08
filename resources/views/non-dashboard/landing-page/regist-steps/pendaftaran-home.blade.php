@extends('layouts.guestmain')

@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/images/bgd_1.jpg')">
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
                                        <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1" style="text-align:center;">Daftar Program Yang Sedang Dibuka</h4>
                                        </div>
                                            <div class="container " style=" margin-left: -12px;margin-bottom: -16px;">
                                                <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:102.3%; text-align:center;">
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
                                                                {{-- {{date('d-m-Y', strtotime($kegiatan->tgl_akhir))}} --}}
                                                                <td>{{date('d-m-Y', strtotime(\App\Models\Kegiatan::all()->where('id_penerimaan', $penerimaan->id)->where('id_jenis_kegiatan', 2)->first()->tgl_akhir))}}</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-primary mr-1" href="{{route('guest.registration.step1', ['program' => $penerimaan->id])}}">
                                                                        Daftar
                                                                    </a>
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
