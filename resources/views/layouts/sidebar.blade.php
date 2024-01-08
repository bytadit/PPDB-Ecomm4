<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/cendikia_logo1.png') }}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/cendikia_logo1.png') }}" alt="" height="30">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/cendikia_logo1.png') }}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/cendikia_logo1.png') }}" alt="" height="30">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav d-flex justify-content-between" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link fw-medium {{ Request::routeIs('dashboard') ? 'active fw-bold' : '' }}" href="{{route('dashboard')}}"
                       role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-home-2-line"></i> <span >@lang('Beranda')</span>
                    </a>
                </li>
                @role('superadmin')
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-medium {{ Request::routeIs('referensi-kegiatan.index') ? 'active fw-bold' : '' }}" href="{{route('referensi-kegiatan.index')}}"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-run-line"></i> <span >@lang('Referensi Kegiatan')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-medium {{ Request::routeIs('jenjang-pendidikan.index') ? 'active fw-bold' : '' }}" href="{{route('jenjang-pendidikan.index')}}"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-briefcase-line"></i> <span >@lang('Jenjang Pendidikan')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-medium {{ Request::routeIs('jalur-penerimaan.index') ? 'active fw-bold' : '' }}" href="{{route('jalur-penerimaan.index')}}"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-rocket-line"></i> <span >@lang('Jalur Penerimaan')</span>
                        </a>
                    </li>
                @endrole
                @role('adminjenjang')
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-medium {{ (Request::routeIs('program-penerimaan.index') || Request::is('dashboard/admin/program-penerimaan/*')) ? 'active fw-bold' : '' }}" href="{{route('program-penerimaan.index')}}"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-folder-user-fill"></i> <span >@lang('Program Penerimaan')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-medium {{ Request::routeIs('data-pendaftar.index') ? 'active fw-bold' : '' }}" href="{{route('data-pendaftar.index')}}"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-team-line"></i> <span >@lang('Data Pendaftar')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-medium {{ Request::routeIs('data-pendaftar.index') ? 'active fw-bold' : '' }}" href="{{route('data-pendaftar.index')}}"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-team-line"></i> <span >@lang('Seleksi')</span>
                        </a>
                    </li>
                @endrole
                @role('pendaftar')
                @endrole
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn nav-link menu-link fw-medium {{ Request::routeIs('logout') ? 'active fw-bold' : '' }}"
                          type="submit" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-logout-box-r-line"></i> <span >@lang('Keluar')</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
     <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
