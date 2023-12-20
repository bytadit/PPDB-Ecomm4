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
        @slot('title')
            Program Penerimaan
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
                                <p class="text-muted mb-0">Silakan mengatur program penerimaan berikut!</p>
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
                @include('dashboard.admin.program.modals.create')
                {{-- @include('dashboard.admin.feature1.modals.report') --}}
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Success Alert -->
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                            <span>Status program <strong id="alert-message"></strong> diubah!</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="mb-0">Program Penerimaan</h1>
                            </div>
                            <div class="card-body">
                                <table id="alternative-pagination"
                                       class="table nowrap dt-responsive align-middle table-hover table-bordered"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Periode</th>
                                        <th>Jenjang</th>
                                        <th>Jalur</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($penerimaans as $penerimaan)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$penerimaan->periode}}</td>
                                            <td>{{$penerimaan->jenjang->nama}}</td>
                                            <td>{{$penerimaan->jalur->nama}}</td>
                                            <td>
                                                <select class="form-select status-dropdown" data-program-id="{{ $penerimaan->id }}">
                                                    <option value="0" {{ $penerimaan->is_open === 0 ? 'selected' : '' }}>Closed</option>
                                                    <option value="1" {{ $penerimaan->is_open === 1 ? 'selected' : '' }}>Open</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center fw-medium">

                                                    <a href="{{route('programs.detail-program', ['penerimaan' => $penerimaan->id])}}" class="btn btn-sm btn-soft-warning mx-1">
                                                        <i class="ri-eye-line"></i> <span>@lang('Lihat Detail')</span>
                                                    </a>
                                                    <button class="btn btn-sm btn-soft-danger ml-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteData{{$penerimaan->id}}">
                                                        <i class="ri-delete-bin-line"></i> <span>@lang('Hapus')</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('dashboard.admin.program.modals.delete')
                                        {{-- @include('dashboard.admin.penerimaan.modals.show') --}}
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

    <script>
        $(document).ready(function () {
            $('.status-dropdown').on('change', function () {
                var programId = $(this).data('program-id');
                var isOpen = $(this).val();

                $.ajax({
                    type: 'PATCH',
                    url: 'program-penerimaan/update-status/' + programId,
                    data: {
                        is_open: isOpen,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (data) {
                        console.log(data.message);
                        // You can add additional logic or UI updates here
                        // Show the success alert and update the message
                        $('#alert-message').text(data.message);
                        $('.alert-success').show();
                    },
                    error: function (error) {
                        console.log('Error:', error);
                    },
                });
            });
        });
    </script>

@endsection
