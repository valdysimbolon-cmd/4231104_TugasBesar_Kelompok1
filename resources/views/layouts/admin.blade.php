<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin SMP Budi Mulia">
    <meta name="author" content="">

    <title>Admin - SMP Budi Mulia Pangururan</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('Admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('Admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    
    <style>
        /* Optimasi Tampilan Brand/Logo */
        .sidebar-brand { height: auto !important; padding: 1.5rem 1rem !important; }
        .sidebar-brand-text { text-transform: uppercase; letter-spacing: 0.5px; }
        .topbar { height: 4.375rem; }
        
        /* Agar sidebar saat di-minimize tetap rapi */
        .sidebar-toggled .sidebar-brand-text { display: none; }
    </style>
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon">
                    <!-- MENGGUNAKAN LOGO SEKOLAH -->
                    <img src="{{ asset('Admin/img/logo-sekolah.jpg') }}" alt="Logo" style="width: 45px; height: auto;">
                </div>
                <div class="sidebar-brand-text mx-2 text-left" style="font-size: 0.7rem; line-height: 1.2; font-weight: 800;">
                    SMP BUDI MULIA <br> 
                    <span style="font-size: 0.6rem; font-weight: 400; color: rgba(255,255,255,0.8);">PANGURURAN</span>
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Manajemen Konten</div>

            <li class="nav-item {{ Request::is('profil*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profil-sekolah.index') }}">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Profil Sekolah</span>
                </a>
            </li>

            <li class="nav-item {{ Request::is('berita*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('berita.index') }}">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita & Kegiatan</span>
                </a>
            </li>

            <li class="nav-item {{ Request::is('pengumuman*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pengumuman.index') }}">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Pengumuman</span>
                </a>
            </li>

            <li class="nav-item {{ Request::is('galeri*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('galeri.index') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Galeri Foto</span>
                </a>
            </li>

            <li class="nav-item {{ Request::is('kontak*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kontak.index') }}">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Manajemen Kontak</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Title -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 text-gray-800">
                        <h1 class="h5 mb-0 font-weight-bold">Panel Administrasi Sekolah</h1>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="text-right mr-2 d-none d-lg-inline">
                                    <!-- PERUBAHAN 1: Menampilkan Nama Admin Secara Dinamis -->
                                    <span class="text-gray-600 small d-block font-weight-bold">{{ Auth::user()->name }}</span>
                                    <span class="text-success smaller" style="font-size: 0.7rem;"><i class="fas fa-circle fa-xs"></i> Online</span>
                                </div>
                                <img class="img-profile rounded-circle border shadow-sm"
                                    src="{{ asset('Admin/img/undraw_profile.svg') }}">
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- PERUBAHAN 2: Menghubungkan ke Route Profil -->
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil Saya
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar (Logout)
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

            <footer class="sticky-footer bg-white shadow-sm">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto font-weight-bold text-gray-600">
                        <span>Copyright &copy; SMP Budi Mulia Pangururan {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white border-0">
                    <h5 class="modal-title font-weight-bold">Konfirmasi Keluar</h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center py-4">
                    <i class="fas fa-sign-out-alt fa-3x text-gray-300 mb-3"></i>
                    <p class="mb-0">Apakah Anda yakin ingin mengakhiri sesi admin saat ini?</p>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button class="btn btn-secondary px-3" type="button" data-dismiss="modal">Batal</button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary px-4 shadow">Logout Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('Admin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>