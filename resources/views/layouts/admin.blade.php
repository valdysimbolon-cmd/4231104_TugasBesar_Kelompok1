<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - SMP Budi Mulia Pangururan</title>

    <link href="{{ asset('Admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('Admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .sidebar-brand { height: auto !important; padding: 1.5rem 1rem !important; }
        .sidebar-brand-icon img { width: 45px; height: auto; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.15); }
        .sidebar-brand-text { font-size: 0.75rem !important; line-height: 1.2; text-align: left; margin-left: 10px; }
        .topbar { background-color: #fff !important; }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('Admin/img/logo-sekolah.jpg') }}" alt="Logo">
                </div>
                <div class="sidebar-brand-text mx-1 font-weight-bold">
                    SMP BUDI MULIA <br>
                    <span style="font-size: 0.6rem; font-weight: 400; opacity: 0.8;">PANGURURAN</span>
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Manajemen Konten</div>

            <li class="nav-item {{ request()->routeIs('profil-sekolah.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profil-sekolah.index') }}">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Profil Sekolah</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('berita.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('berita.index') }}">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita & Kegiatan</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('pengumuman.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pengumuman.index') }}">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Pengumuman</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('galeri.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('galeri.index') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Galeri Foto</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('kontak.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kontak.index') }}">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Kontak & Lokasi</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="h5 mb-0 font-weight-bold text-gray-800 d-none d-sm-inline-block ml-3">
                        Panel Kendali Administrasi
                    </h1>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small font-weight-bold">
                                    {{ Auth::user()->name }}
                                </span>
                                <img class="img-profile rounded-circle border shadow-sm" src="{{ asset('Admin/img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i> Profil Saya
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="font-weight-bold">Copyright &copy; SMP Budi Mulia {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <div class="modal fade" id="logoutModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title font-weight-bold">Konfirmasi Logout</h5>
                    <button class="close text-white" type="button" data-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body text-center py-4">
                    <i class="fas fa-sign-out-alt fa-3x text-gray-200 mb-3"></i>
                    <p>Apakah Anda yakin ingin mengakhiri sesi admin saat ini?</p>
                </div>
                <div class="modal-footer bg-light">
                    <button class="btn btn-secondary px-4" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary px-4 shadow">Logout Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('Admin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>