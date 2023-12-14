@extends('layouts.main')
@section('title')
    @lang('Jalur Penerimaan')
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
        @slot('title')
            Jalur Penerimaan
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
                                <p class="text-muted mb-0">Silakan mengatur jalur penerimaan berikut!</p>
                            </div>
                            <button type="button" class="btn btn-success btn-lg btn-label waves-effect waves-light mx-2"
                                    data-bs-toggle="modal" data-bs-target="#createData">
                                <i class="ri-menu-add-line label-icon align-middle fs-16 me-2"></i>
                                Tambah Data
                            </button>

                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                {{--                Modals Area--}}
                @include('dashboard.admin.jalur.modals.create')
                {{-- @include('dashboard.admin.feature1.modals.report') --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="mb-0">Jalur Penerimaan</h1>
                            </div>
                            <div class="card-body">
                                <table id="alternative-pagination"
                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Jalur</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jalurs as $jalur)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$jalur->nama}}</td>
                                            <td>
                                                <div class="d-flex align-items-center fw-medium">

                                                    <button class="btn btn-sm btn-soft-warning mx-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editData{{$jalur->id}}">
                                                        <i class="ri-pencil-line"></i> <span>@lang('Ubah')</span>
                                                    </button>
                                                    <button class="btn btn-sm btn-soft-danger ml-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteData{{$jalur->id}}">
                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('dashboard.admin.jalur.modals.edit')
                                        @include('dashboard.admin.jalur.modals.delete')
                                        {{-- @include('dashboard.admin.jalur.modals.show') --}}
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
    <script src="{{ URL::asset('/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
