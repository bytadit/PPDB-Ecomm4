@extends('layouts.main')
@section('title')
    @lang('Seleksi Pendaftar')
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
            Program Pendaftar
        @endslot
        @slot('li_2_link')
            {{route('data-pendaftar.all')}}
        @endslot
        @slot('title')
            Seleksi Pendaftar
        @endslot
    @endcomponent
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Selamat Datang Admin</h4>
                                <p class="text-muted mb-0">Silakan melihat data pendaftar berikut!</p>
                            </div>
                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                    data-bs-toggle="modal" data-bs-target="">
                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                Ekspor Data
                            </button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                {{--                Modals Area--}}
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Success Alert -->
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="mb-0">Data Pendaftar</h1>
                            </div>
                            <div class="card-body">
                                <table id="alternative-pagination"
                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>NISN</th>
                                        <th>Gender</th>
                                        <th>Status Finalisasi</th>
                                        <th>Status Verifikasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pendaftars as $pendaftar)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$pendaftar->nama}}</td>
                                            <td>{{$pendaftar->user->nik}}</td>
                                            <td>{{$pendaftar->nisn}}</td>
                                            <td>{{$pendaftar->gender == 1 ? 'Laki-laki' : 'Perempuan'}}</td>
                                            <td>{{$pendaftar->is_final == 1 ? 'Final' : 'Belum Final'}}</td>
                                            <td>
                                                @if ($pendaftar->is_verified == 0)
                                                    Belum Diverifikasi
                                                @elseif($pendaftar->is_verified == 1)
                                                    Terverifikasi
                                                @elseif($pendaftar->is_verified == 2)
                                                    Perbaikan
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center fw-medium">
                                                    <a href="{{route('pendaftar.index', ['penerimaan' => $penerimaan_id])}}" class="btn btn-sm btn-soft-warning mx-1">
                                                        <i class="ri-eye-line"></i> <span>@lang('Lihat Data')</span>
                                                    </a>
                                                    <a href="{{route('pendaftar.index', ['penerimaan' => $penerimaan_id])}}" class="btn btn-sm btn-soft-warning mx-1">
                                                        <i class="ri-eye-line"></i> <span>@lang('Verifikasi Data')</span>
                                                    </a>
                                                    <button class="btn btn-sm btn-soft-danger ml-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="">
                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Ubah Verifikasi')</span>
                                                    </button>
                                                    <a href="{{route('pendaftar.index', ['penerimaan' => $penerimaan_id])}}" class="btn btn-sm btn-soft-warning mx-1">
                                                        <i class="ri-eye-line"></i> <span>@lang('Cetak Data')</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- @include('dashboard.admin.program.modals.delete') --}}
                                        {{-- @include('dashboard.admin.pendaftar.modals.show') --}}
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div> <!-- end .h-100-->

        </div> <!-- end col -->
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
    <script src='{{ URL::asset('/assets/libs/choices.js/choices.js.min.js') }}'></script>
    <script src='{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}'></script>
    <script src="{{ URL::asset('/assets/js/pages/form-editor.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection
