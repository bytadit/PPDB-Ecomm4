@extends('layouts.main')
@section('title')
    @lang('Program Penerimaan')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/libs/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{ URL::asset('assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')
    @component('components.breadcrumb')
    @slot('li_1')
        Halaman Admin
    @endslot
    @slot('li_2')
        Program Penerimaan
    @endslot
    @slot('li_2_link')
            {{ route('program-penerimaan.index') }}
        @endslot
    @slot('title')
        Penerimaan {{$penerimaan->first()->jenjang->nama}} Jalur {{$penerimaan->first()->jalur->nama}} Periode {{$penerimaan->first()->periode}}
    @endslot
    @endcomponent
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-n4 mx-n4">
                            <div class="bg-soft-warning">
                                <div class="card-body pb-0 px-4">
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <div class="row align-items-center g-3">

                                                <div class="col-md">
                                                    <div>
                                                        <h4 class="fw-bold">Penerimaan {{$penerimaan->first()->jenjang->nama}} Jalur {{$penerimaan->first()->jalur->nama}} Periode {{$penerimaan->first()->periode}}</h4>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <div><i class="ri-building-line align-bottom me-1"></i> {{$penerimaan->first()->jenjang->nama}}
                                                            </div>
                                                            <div class="vr"></div>
                                                            <div><span class="fw-medium">Periode {{$penerimaan->first()->periode}}</span></div>
                                                            <div class="vr"></div>
                                                            <div><span class="fw-medium">Jalur {{$penerimaan->first()->jalur->nama}}</span></div>
                                                            <div class="vr"></div>
                                                            <div class="badge rounded-pill fs-12 {{$penerimaan->first()->is_open === 1 ? 'bg-success' : 'bg-danger'}} text-light">
                                                                {{ $penerimaan->first()->is_open === 1 ? 'Dibuka' : 'Ditutup' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#jadwal-kegiatan"
                                                role="tab">
                                                Jadwal Kegiatan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#biaya"
                                               role="tab">
                                                Biaya
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#persyaratan"
                                                role="tab">
                                                Persyaratan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#dokumen"
                                                role="tab">
                                                Dokumen
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#rapor"
                                                role="tab">
                                                Nilai Rapor
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#tes"
                                                role="tab">
                                                Nilai Tes
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end card body -->
                            </div>
                        </div>
                            @if (session()->has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content text-muted">
                            <div class="tab-pane fade show active" id="jadwal-kegiatan" role="tabpanel">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                                <p class="text-muted mb-0">Silakan mengatur jadwal kegiatan program berikut!</p>
                                            </div>
                                            @if ($jenis_kegiatans->whereNotIn('id', $kegiatans->where('id_penerimaan', $penerimaan->first()->id)->pluck('id_jenis_kegiatan'))->count() > 0)
                                                <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                                        data-bs-toggle="modal" data-bs-target="#createDataJadwal">
                                                    <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                                    Tambah Data
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                {{--                Modals Area--}}
                                @include('dashboard.admin.program.modals.jadwal.create')
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                            <span>Status program <strong id="alert-message"></strong> diubah!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Jadwal Kegiatan Program</h1>
                                            </div>
                                            <div class="card-body">
                                                <table id="alternative-pagination"
                                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Kegiatan</th>
                                                        <th>Tanggal Awal</th>
                                                        <th>Tanggal Akhir</th>
                                                        <th>Durasi (hari)</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($kegiatans as $kegiatan)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$kegiatan->jenisKegiatan->nama}}</td>
                                                            <td>{{date('d-m-Y', strtotime($kegiatan->tgl_awal))}}</td>
                                                            <td>{{date('d-m-Y', strtotime($kegiatan->tgl_akhir))}}</td>
                                                            <td>{{round((strtotime($kegiatan->tgl_akhir) - strtotime($kegiatan->tgl_awal)) / (60 * 60 * 24))}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataJadwal{{$kegiatan->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-soft-danger mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#deleteDataJadwal{{$kegiatan->id}}">
                                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.admin.program.modals.jadwal.delete')
                                                        @include('dashboard.admin.program.modals.jadwal.edit')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane fade" id="biaya" role="tabpanel">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                                <p class="text-muted mb-0">Silakan mengatur biaya program berikut!</p>
                                            </div>
                                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                                    data-bs-toggle="modal" data-bs-target="#createDataBiaya">
                                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                @include('dashboard.admin.program.modals.biaya.editDaftar')
                                <div class="row pb-1">
                                    <div class="col-md-6">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5 class="fw-medium text-muted mb-0">Biaya Pendaftaran</h5>
                                                        <h2 class="mt-4 ff-secondary fw-semibold">Rp.<span class="counter-value"
                                                                data-target="{{$penerimaan->first()->biaya_pendaftaran}}">0</span></h2>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <button class="btn btn-sm btn-soft-warning mx-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editBiayaDaftar{{$penerimaan->first()->id}}">
                                                                <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div>
                                {{--                Modals Area--}}
                                @include('dashboard.admin.program.modals.biaya.create')
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                            <span>Data biaya program <strong id="alert-message"></strong> diubah!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Daftar Biaya Tambahan</h1>
                                            </div>
                                            <div class="card-body">
                                                <table id="alternative-pagination"
                                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Biaya</th>
                                                        <th>Pengaturan</th>
                                                        <th>Nominal</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($biayas as $biaya)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$biaya->nama}}</td>
                                                            <td>
                                                                @if ($biaya->setting == 1)
                                                                    Kurang Dari (<)
                                                                @elseif ($biaya->setting == 2)
                                                                    Lebih Dari (>)
                                                                @elseif($biaya->setting == 3)
                                                                    Sama Dengan (==)
                                                                @elseif ($biaya->setting == 4)
                                                                    Tidak Sama Dengan (!=)
                                                                @endif
                                                            </td>
                                                            <td>@currency($biaya->nominal)</td>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataBiaya{{$biaya->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-soft-danger mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#deleteDataBiaya{{$biaya->id}}">
                                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.admin.program.modals.biaya.delete')
                                                        @include('dashboard.admin.program.modals.biaya.edit')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane fade" id="persyaratan" role="tabpanel">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                                <p class="text-muted mb-0">Silakan mengatur persyaratan program berikut!</p>
                                            </div>
                                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                                    data-bs-toggle="modal" data-bs-target="#createDataPersyaratan">
                                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                {{--                Modals Area--}}
                                @include('dashboard.admin.program.modals.syarat.create')
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                            <span>Data persyaratan program <strong id="alert-message"></strong> diubah!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Daftar Persyaratan Kondisional</h1>
                                            </div>
                                            <div class="card-body">
                                                <table id="alternative-pagination-1"
                                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Persyaratan</th>
                                                        <th>Pengaturan</th>
                                                        <th>Nilai</th>
                                                        <th>Deskripsi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($persyaratans->where('jenis_persyaratan', 2) as $persyaratan)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$persyaratan->nama}}</td>
                                                            <td>
                                                                @if ($persyaratan->setting == 1)
                                                                    Kurang Dari (<)
                                                                @elseif ($persyaratan->setting == 2)
                                                                    Lebih Dari (>)
                                                                @elseif($persyaratan->setting == 3)
                                                                    Sama Dengan (==)
                                                                @elseif ($persyaratan->setting == 4)
                                                                    Tidak Sama Dengan (!=)
                                                                @endif
                                                            </td>
                                                            <td>{{$persyaratan->value}}</td>
                                                            <td>{{$persyaratan->deskripsi}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataPersyaratan{{$persyaratan->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button>
                                                                    @if($persyaratan->is_mandatory == false)
                                                                        <button class="btn btn-sm btn-soft-danger mx-1"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteDataPersyaratan{{$persyaratan->id}}">
                                                                            <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.admin.program.modals.syarat.delete')
                                                        @include('dashboard.admin.program.modals.syarat.edit')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Daftar Persyaratan Tekstual</h1>
                                            </div>
                                            <div class="card-body">
                                                <table id="alternative-pagination"
                                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Persyaratan</th>
                                                        <th>Isi Persyaratan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($persyaratans->where('jenis_persyaratan', 1) as $persyaratan)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$persyaratan->nama}}</td>
                                                            <td>{{$persyaratan->deskripsi}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataPersyaratan{{$persyaratan->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button>
                                                                    @if($persyaratan->is_mandatory == false)
                                                                        <button class="btn btn-sm btn-soft-danger mx-1"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteDataPersyaratan{{$persyaratan->id}}">
                                                                            <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.admin.program.modals.syarat.delete')
                                                        @include('dashboard.admin.program.modals.syarat.edit')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane fade" id="dokumen" role="tabpanel">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                                <p class="text-muted mb-0">Silakan mengatur berkas dokumen program berikut!</p>
                                            </div>
                                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                                    data-bs-toggle="modal" data-bs-target="#createDataDokumen">
                                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                {{--                Modals Area--}}
                                @include('dashboard.admin.program.modals.dokumen.create')
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                            <span>Data biaya program <strong id="alert-message"></strong> diubah!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Daftar Berkas Dokumen Program</h1>
                                            </div>
                                            <div class="card-body">
                                                <table id="alternative-pagination"
                                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Dokumen</th>
                                                        <th>Tipe Dokumen</th>
                                                        <th>Jumlah</th>
                                                        <th>Deskripsi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($dokumens as $dokumen)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$dokumen->nama}}</td>
                                                            <td>
                                                                @if ($dokumen->tipe == 1)
                                                                    PDF
                                                                @elseif ($dokumen->tipe == 2)
                                                                    Docx
                                                                @elseif($dokumen->tipe == 3)
                                                                    Gambar
                                                                @elseif($dokumen->tipe == 4)
                                                                    Video
                                                                @endif
                                                            </td>
                                                            <td>{{$dokumen->jumlah}}</td>
                                                            <td>{{$dokumen->deskripsi}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataDokumen{{$dokumen->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-soft-danger mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#deleteDataDokumen{{$dokumen->id}}">
                                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.admin.program.modals.dokumen.delete')
                                                        @include('dashboard.admin.program.modals.dokumen.edit')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane fade" id="rapor" role="tabpanel">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                                <p class="text-muted mb-0">Silakan mengatur syarat nilai rapor berikut!</p>
                                            </div>
                                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                                    data-bs-toggle="modal" data-bs-target="#createDataRapor">
                                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                {{--                Modals Area--}}
                                @include('dashboard.admin.program.modals.rapor.create')
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                            <span>Data rapor <strong id="alert-message"></strong> diubah!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Daftar Ketentuan Semester Nilai Rapor</h1>
                                            </div>
                                            <div class="card-body">
                                                <table id="alternative-pagination"
                                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Semester</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($rapors as $rapor)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>Semester {{$rapor->nama_semester}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    {{-- <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataRapor{{$rapor->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button> --}}
                                                                    <button class="btn btn-sm btn-soft-danger mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#deleteDataRapor{{$rapor->id}}">
                                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.admin.program.modals.rapor.delete')
                                                        @include('dashboard.admin.program.modals.rapor.edit')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="tab-pane fade" id="tes" role="tabpanel">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                                <p class="text-muted mb-0">Silakan mengatur syarat nilai tes berikut!</p>
                                            </div>
                                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                                    data-bs-toggle="modal" data-bs-target="#ubahDataNilai">
                                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                                Ubah Data
                                            </button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                {{--                Modals Area--}}
                                @include('dashboard.admin.program.modals.batas-nilai.edit')
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                            <span>Batas Nilai Tes<strong id="alert-message"></strong> diubah!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h1 class="mb-0">Daftar Batas Nilai</h1>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card card-animate">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <h5 class="fw-medium text-muted mb-0">Batas Nilai Tes Akademik</h5>
                                                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                                                data-target="{{ $batas_nilai->count() > 0 ? $batas_nilai->first()->tes_akademik : 0 }}"></span></h2>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div> <!-- end card-->
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card card-animate">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <h5 class="fw-medium text-muted mb-0">Batas Nilai Tes Wawancara</h5>
                                                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                                                data-target="{{$batas_nilai->count() > 0 ? $batas_nilai->first()->tes_wawancara : 0}}"></span></h2>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div> <!-- end card-->
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card card-animate">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <h5 class="fw-medium text-muted mb-0">Batas Nilai Akhir</h5>
                                                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                                                data-target="{{$batas_nilai->count() > 0 ? $batas_nilai->first()->nilai_akhir : 0}}"></span></h2>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div> <!-- end card-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                @push('scripts')
                    <script src="{{ URL::asset('assets/js/pages/project-overview.init.js') }}"></script>
                @endpush
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/quill/quill.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
</div>
