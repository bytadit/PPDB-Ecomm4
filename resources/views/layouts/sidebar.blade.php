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
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span >Menu User</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Edit Profil</span>
                    </a>
                </li> <!-- end Dashboard Menu User -->

                <li class="menu-title"><span >Menu Admin</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Dashboard</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Kegiatan</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Jenjang Penerimaan</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Jalur Penerimaan</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Program Penerimaan</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Data Pendaftar</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Data Kelulusan</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Pengumuman</span>
                    </a>
                </li> <!-- end Dashboard Menu Admin -->

                <li class="menu-title"><span >Menu Bendahara</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Dashboard</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i  class="ri-dashboard-2-line" ></i> <span >Data Pendaftar</span>
                    </a>
                </li> <!-- end Dashboard Menu Bendahara -->

                <li class="menu-title"><span >Menu Calon Pendaftar</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line" href=""></i> <span >Dashboard</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i  class="ri-dashboard-2-line" ></i> <span >Biodata</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i  class="ri-dashboard-2-line" ></i> <span >Pendaftaran Saya</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i  class="ri-dashboard-2-line" ></i> <span >Pembayaran Saya</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i  class="ri-dashboard-2-line" ></i> <span >Pengumuman</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ url("") }}"  role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i  class="ri-dashboard-2-line" ></i> <span >Panduan</span>
                    </a>
                </li> <!-- end Dashboard Menu Calon -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
     <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
