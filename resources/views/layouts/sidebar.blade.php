<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
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
                    <a class="nav-link menu-link fw-medium {{ Request::is('guestbook') ? 'active fw-bold' : '' }}" href="/guestbook"
                       role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-book-2-line"></i> <span >@lang('Riwayat Tamu')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-medium {{ Request::is('guests') ? 'active fw-bold' : '' }}" href="/guests"
                       role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-team-line"></i> <span >@lang('Data Tamu')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-medium {{ Request::is('analytics') ? 'active fw-bold' : '' }}" href="/analytics"
                       role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-line-chart-line"></i> <span >@lang('Analitik Data')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-medium {{ Request::is('problems') ? 'active fw-bold' : '' }}" href="/problems"
                       role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-briefcase-line"></i> <span >@lang('Kategori Keperluan')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-medium {{ Request::is('units') ? 'active fw-bold' : '' }}" href="/units"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-community-line"></i> <span >@lang('Daftar Unit')</span>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link {{ Request::is('games') ? 'active' : '' }}" href="/games"--}}
{{--                       role="button" aria-expanded="false" aria-controls="sidebarApps">--}}
{{--                        <i class="ri-gamepad-line"></i> <span >@lang('Main Game')</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
     <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
