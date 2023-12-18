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
                                <!--end row-->
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
                                                <h1 class="mb-0">Daftar Biaya Program</h1>
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
                                                <h1 class="mb-0">Daftar Persyaratan Program</h1>
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
                                                        <th>Nilai</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($persyaratans as $persyaratan)
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
                                                            <td>
                                                                <div class="d-flex align-items-center fw-medium">
                                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editDataPersyaratan{{$persyaratan->id}}">
                                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-soft-danger mx-1"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#deleteDataPersyaratan{{$persyaratan->id}}">
                                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                                    </button>
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
                            <div class="tab-pane fade" id="presensi" role="tabpanel">
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Peserta wkwk</h5>
                                            </div>
                                            <div class="card-body">
                                                <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Jabatan Peserta</th>
                                                        <th>Role Rapat</th>
                                                        <th>Status Konfirmasi</th>
                                                        <th>Detail Konfirmasi</th>
                                                        <th>Status Kehadiran</th>
                                                        <th>Detail Kehadiran</th>
                                                        {{--                                <th>Aksi</th>--}}
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {{-- @foreach ($presensis as $presensi)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $users->where('id', $pegawais->where('id', $presensi->id_pegawai)->first()->id_user)->first()->name }}
                                                            </td>
                                                            <td>{{ $presensi->jabatan_peserta }}</td>
                                                            <td>
                                                                @if($users->find($pegawais->where('id', $presensi->id_pegawai)->first()->id_user)->hasRole('penanggung-jawab', $this_team) == true)
                                                                    Penanggung Jawab
                                                                @elseif($users->find($pegawais->where('id', $presensi->id_pegawai)->first()->id_user)->hasRole('notulis', $this_team) == true)
                                                                    Notulis
                                                                @else
                                                                    Anggota
                                                                @endif
                                                            </td>
                                                            <td><span class="badge
                                                    @if ($presensi->status_konfirmasi == 0)
                                                        bg-danger
                                                    @elseif ($presensi->status_konfirmasi  == 1)
                                                        bg-success
                                                    @elseif($presensi->status_konfirmasi  == 2)
                                                        bg-warning
                                                    @elseif($presensi->status_konfirmasi  == 3)
                                                        bg-dark
                                                    @endif
                                                    ">
                                                    @if ($presensi->status_konfirmasi == 0)
                                                                        Tidak Hadir
                                                                    @elseif ($presensi->status_konfirmasi == 1)
                                                                        Hadir
                                                                    @elseif($presensi->status_konfirmasi == 2)
                                                                        Izin
                                                                    @elseif($presensi->status_konfirmasi == 3)
                                                                        Sakit
                                                                    @endif
                                                </span>
                                                            </td>
                                                            <td>{{ $presensi->detail_konfirmasi == null ? 'Belum Terisi' : $presensi->detail_konfirmasi }}</td>
                                                            <td><span class="badge
                                                    @if ($presensi->status_kehadiran == 0)
                                                        bg-danger
                                                    @elseif ($presensi->status_kehadiran  == 1)
                                                        bg-success
                                                    @elseif($presensi->status_kehadiran  == 2)
                                                        bg-warning
                                                    @elseif($presensi->status_kehadiran  == 3)
                                                        bg-dark
                                                    @endif
                                                    ">
                                                    @if ($presensi->status_kehadiran == 0)
                                                                        Tidak Hadir
                                                                    @elseif ($presensi->status_kehadiran == 1)
                                                                        Hadir
                                                                    @elseif($presensi->status_kehadiran == 2)
                                                                        Izin
                                                                    @elseif($presensi->status_kehadiran == 3)
                                                                        Sakit
                                                                    @endif
                                                </span>
                                                            </td>
                                                            <td>{{ $presensi->detail_kehadiran == null ? 'Belum Terisi' : $presensi->detail_kehadiran }}</td>

                                                        </tr>
                                                    @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end team list -->
                            </div>
                            <!-- end tab pane -->
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
