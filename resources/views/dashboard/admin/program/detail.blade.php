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

{{-- <div>


        {{-- modal delete --}}
        <div wire:ignore.self class="modal fade" id="modalDeleteDokumentasi" tabindex="-1" aria-labelledby="modalDeleteDokumentasiLabel" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDeleteDokumentasiLabel">Konfirmasi Penghapusan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4">
                        <h6>Apakah yakin ingin menghapus Dokumen <strong>{{ $dokumentasi_old }}</strong> ?</h6>
                    </div>
                    <div class="modal-footer">
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button wire:click='cancel()'type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button wire:click='deleteDokumentasi()'type="submit" class="btn btn-primary">Yakin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal delete --}}
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
                                            <h4 class="fw-bold">{{ $judul_rapat }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><i class="ri-building-line align-bottom me-1"></i> {{ $team_nama }}
                                                </div>
                                                <div class="vr"></div>
                                                <div><span class="fw-medium">{{ $waktu_mulai . ' WIB'. ' s/d ' . $waktu_selesai . ' WIB'  }}</span></div>

                                                <div class="vr"></div>
                                                <div class="badge rounded-pill fs-12 bg-white text-dark
                                                    {{ $kategori_rapat }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="hstack gap-1 flex-wrap">
                                    <button type="button" class="btn py-0 fs-16 favourite-btn active shadow-none"
                                    data-toggle="favorite" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tandai Rapat">
                                        <i class="ri-star-fill"></i>
                                    </button>
                                    <a type="button" href="{{ route('daftar-rapat.edit', ['team'=>$team, 'rapat'=>$rapat_slug]) }}" class="btn py-0 fs-16 text-body shadow-none"
                                        data-toggle="edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ubah Rapat">
                                        <i class="ri-edit-box-fill"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#detail-rapat"
                                    role="tab">
                                    Detail
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#notulensi"
                                   role="tab">
                                    Notulensi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#dokumentasi"
                                    role="tab">
                                    Dokumentasi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#presensi"
                                    role="tab">
                                    Presensi
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
                <div class="tab-pane fade show active" id="detail-rapat" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted">
                                        <h6 class="mb-3 fw-semibold text-uppercase">Deskripsi Rapat</h6>
                                        {!! $deskripsi !!}


                                        <div class="pt-3 border-top border-top-dashed mt-4">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Prioritas :</p>
                                                        <div class="badge fs-12
                                                            @if ($prioritas == 1)
                                                                bg-success
                                                            @elseif ($prioritas == 2)
                                                                bg-warning
                                                            @elseif ($prioritas == 3)
                                                                bg-danger
                                                            @endif
                                                        ">
                                                            @if ($prioritas == 1)
                                                                Rendah
                                                            @elseif ($prioritas == 2)
                                                                Sedang
                                                            @elseif ($prioritas == 3)
                                                                Tinggi
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Status :</p>
                                                        <div class="badge fs-12
                                                            @if ($status_rapat == 0)
                                                                bg-primary
                                                            @elseif ($status_rapat == 1)
                                                                bg-success
                                                            @elseif ($status_rapat == 2)
                                                                bg-dark
                                                            @endif
                                                        ">
                                                        @if ($status_rapat == 0)
                                                            Dijadwalkan
                                                        @elseif ($status_rapat == 1)
                                                            Berlangsung
                                                        @elseif ($status_rapat == 2)
                                                            Selesai
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Komentar</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{-- <span class="text-muted">Recent<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span> --}}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Recent</a>
                                                <a class="dropdown-item" href="#">Top Rated</a>
                                                <a class="dropdown-item" href="#">Previous</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div data-simplebar style="height: 300px;" class="px-3 mx-n3 mb-2">
                                        <div class="d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="fs-13">Joseph Parker <small class="text-muted ms-2">20
                                                        Dec 2021 - 05:47AM</small></h5>
                                                <p class="text-muted">I am getting message from customers that when
                                                    they place order always get error message .</p>
                                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}"
                                                            alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-13">Alexis Clarke <small
                                                                class="text-muted ms-2">22 Dec 2021 - 02:32PM</small>
                                                        </h5>
                                                        <p class="text-muted">Please be sure to check your Spam mailbox
                                                            to see if your email filters have identified the email from
                                                            Dell
                                                            as spam.</p>
                                                        <a href="javascript: void(0);"
                                                            class="badge text-muted bg-light"><i
                                                                class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="fs-13">Donald Palmer <small class="text-muted ms-2">24
                                                        Dec 2021 - 05:20PM</small></h5>
                                                <p class="text-muted">If you have further questions, please contact
                                                    Customer Support from the “Action Menu” on your <a
                                                        href="javascript:void(0);"
                                                        class="text-decoration-underline">Online
                                                        Order Support</a>.</p>
                                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="fs-13">Alexis Clarke <small class="text-muted ms-2">26
                                                        min ago</small></h5>
                                                <p class="text-muted">Your <a href="javascript:void(0)"
                                                        class="text-decoration-underline">Online Order Support</a>
                                                    provides
                                                    you with the most current status of your order. To help manage your
                                                    order refer to the “Action Menu” to initiate return, contact
                                                    Customer
                                                    Support and more.</p>
                                                <div class="row g-2 mb-3">
                                                    <div class="col-lg-1 col-sm-2 col-6">
                                                        <img src="{{ URL::asset('assets/images/small/img-4.jpg') }}"
                                                            alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-lg-1 col-sm-2 col-6">
                                                        <img src="{{ URL::asset('assets/images/small/img-5.jpg') }}"
                                                            alt="" class="img-fluid rounded">
                                                    </div>
                                                </div>
                                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}"
                                                            alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-13">Donald Palmer <small
                                                                class="text-muted ms-2">8 sec ago</small></h5>
                                                        <p class="text-muted">Other shipping methods are available at
                                                            checkout if you want your purchase delivered faster.</p>
                                                        <a href="javascript: void(0);"
                                                            class="badge text-muted bg-light"><i
                                                                class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="mt-4">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label text-body">Berikan Komentar</label>
                                                <textarea class="form-control bg-light border-light" id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="Masukkan komentar..."></textarea>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="button"
                                                    class="btn btn-ghost-secondary btn-icon waves-effect me-1 shadow-none"><i
                                                        class="ri-attachment-line fs-16"></i></button>
                                                <a href="javascript:void(0);" class="btn btn-success">Kirim</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- ene col -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex border-bottom-dashed">
                                    <h5 class="card-title mb-0 flex-grow-1">Topik Rapat</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h5 class="card-title mb-4">Topik Rapat</h5> --}}
                                    <div class="d-flex flex-wrap gap-2 fs-16">
                                        <h6 class="fw-medium">{{ $topik_rapat }}</h6>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <div class="card">
                                <div class="card-header align-items-center d-flex border-bottom-dashed">
                                    <h5 class="card-title mb-0 flex-grow-1">Lokasi Rapat</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h5 class="card-title mb-4">Topik Rapat</h5> --}}
                                    <div class="d-flex flex-wrap gap-2 fs-16">
                                        <h6 class="fw-medium">{{ $lokasi_rapat }}</h6>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <div class="card">
                                <div class="card-header align-items-center d-flex border-bottom-dashed">
                                    <h5 class="card-title mb-0 flex-grow-1">Penganggung Jawab Rapat</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h5 class="card-title mb-4">Topik Rapat</h5> --}}
                                    <div class="d-flex flex-wrap gap-2 fs-16">
                                        <h6 class="fw-medium">{{ $users->where('id',$pegawais->where('id',$jabatan_pegawais->where('id', $penanggung_jawab)->first()->id_pegawai)->first()->id_user)->first()->name }}</h6>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <div class="card">
                                <div class="card-header align-items-center d-flex border-bottom-dashed">
                                    <h5 class="card-title mb-0 flex-grow-1">Notulis Rapat</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h5 class="card-title mb-4">Topik Rapat</h5> --}}
                                    <div class="d-flex flex-wrap gap-2 fs-16">
                                        <h6 class="fw-medium">{{ $users->where('id',$pegawais->where('id',$jabatan_pegawais->where('id', $notulis)->first()->id_pegawai)->first()->id_user)->first()->name }}</h6>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header align-items-center d-flex border-bottom-dashed">
                                    <h4 class="card-title mb-0 flex-grow-1">Peserta Rapat</h4>
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('rapat-members', ['team' => $team, 'rapat' => $rapat_slug]) }}"type="button" class="btn btn-soft-danger btn-sm shadow-none">
                                            <i class="ri-add-circle-fill me-1 align-bottom"></i>
                                            Tambah
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div data-simplebar class="mx-n3 px-3">
                                        <div class="vstack gap-3">
                                            @foreach ($members as $member)
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs flex-shrink-0 me-3">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}"
                                                            alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-13 mb-0"><a href="#"
                                                                class="text-body d-block">{{ $users->where('id',$pegawais->where('id', $member->id_pegawai)->first()->id_user)->first()->name }}</a></h5>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- end list -->
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="dokumentasi" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h5 class="card-title flex-grow-1">Dokumentasi Rapat</h5>

                                @if($user->hasRole('notulis', $this_team))
                                    <button wire:click='getCreateDokumentasi({{$rapat_id}})' type="button" class="btn btn-sm btn-info edit-item-btn align-middle" data-bs-toggle="modal" data-bs-target="#modalCreateDokumentasi">
                                        Tambah Dokumentasi +
                                    </button>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Nama Dokumen</th>
                                                    <th scope="col">Tipe</th>
                                                    <th scope="col">Ukuran</th>
                                                    <th scope="col">Tanggal Upload</th>
                                                    <th scope="col" style="width: 120px;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($documents as $document)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div
                                                                    class="avatar-title bg-light text-secondary rounded fs-24 shadow">
                                                                    <i class="ri-folder-zip-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h5 class="fs-14 mb-0"><a href="javascript:void(0)"
                                                                        class="text-dark">{{$document->nama}}</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{$getTipeFile($document->path)}}
                                                    </td>
                                                    <td>{{ number_format(Storage::size($document->path) /  1048576, 2)}} MB</td>
                                                    <td>{{$document->created_at->format('d-m-Y')}}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                        <span wire:click='deleteDokumentasiConfirmation({{ $document->id }})'
                                              class="cursor-pointer" data-bs-toggle="modal"
                                              data-bs-target="#modalDeleteDokumentasi">
                                            <a class="btn btn-sm btn-danger edit-item-btn align-middle" data-toggle="delete"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Dokumen">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </span>
                                                            <span wire:click="getDokumentasi({{ $document->id }})" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalEditDokumentasi">
                                            <a class="btn btn-sm btn-warning edit-item-btn align-middle" data-bs-toggle="tooltip"
                                               data-bs-placement="right" title="Ubah Data">
                                                <i class="mdi mdi-pencil-box-multiple"></i>
                                            </a>
                                        </span>
                                                            <span wire:click="unduhDokumen({{$document->id}})" class="cursor-pointer">
                                            <button class="btn btn-sm btn-success edit-item-btn align-middle" data-bs-toggle="tooltip"
                                               data-bs-placement="top" title="Unduh Dokumen"
                                              >
                                                <i class="mdi mdi-download"></i>
                                            </button>
                                        </span>
                                                        </div>
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
                <!-- end tab pane -->

                <div class="tab-pane fade" id="notulensi" role="tabpanel">
                    <div class="d-flex justify-content-end mb-3">
                        @if($user->hasRole('notulis', $this_team))
                            @if($notulensi->where('id_rapat', $rapat_id)->count() < 1)
                                <a class="btn btn-sm btn-info edit-item-btn align-middle" data-bs-toggle="tooltip"
                                   data-bs-placement="top" title="Tambah Notulensi"
                                   href="{{ route('jadwal-rapat.notulensi', ['team' => $team, 'rapat' => $rapat_slug]) }}">
                                    <i class="ri-edit-box-fill"></i>
                                    Buat Notulensi
                                </a>
                            @else
                                <a class="btn btn-sm btn-info edit-item-btn align-middle" data-bs-toggle="tooltip"
                                   data-bs-placement="top" title="Ubah Notulensi"
                                   href="{{ route('jadwal-rapat.notulensi-edit', ['team' => $team, 'rapat' => $rapat_slug]) }}">
                                    <i class="ri-edit-box-fill"></i>
                                    Ubah Notulensi
                                </a>
                            @endif
                        @endif
                    </div>
                    <div class="col-xxl-4">
                        <div class="card border card-border-info">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Hasil Rapat</h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    @if($hasil_rapat == '')
                                        <i>Hasil Rapat Masih Kosong....</i>
                                    @else
                                        {!!  $hasil_rapat !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card border card-border-info">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Catatan Rapat</h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    @if($catatan == '')
                                        <i>Catatan Rapat Masih Kosong....</i>
                                    @else
                                        {!! $catatan !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>


                <!-- end tab pane -->
                <div class="tab-pane fade" id="presensi" role="tabpanel">
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Peserta {{ $judul_rapat }}</h5>
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
                                        @foreach ($presensis as $presensi)
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
                                        @endforeach
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
</div> --}}
