<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - SMP Budi Mulia Pangururan</title>
    <link href="{{ asset('Admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-text mx-3">SMP Budi Mulia</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Konten</div>
            <li class="nav-item"><a class="nav-link" href="{{ route('profil-sekolah.index') }}"><i class="fas fa-fw fa-university"></i><span>Profil Sekolah</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}"><i class="fas fa-fw fa-newspaper"></i><span>Berita</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pengumuman.index') }}"><i class="fas fa-fw fa-bullhorn"></i><span>Pengumuman</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('galeri.index') }}"><i class="fas fa-fw fa-images"></i><span>Galeri</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('kontak.index') }}"><i class="fas fa-fw fa-address-book"></i><span>Kontak</span></a></li>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('Admin/img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profil Saya</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5>Yakin ingin keluar?</h5></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="POST">@csrf<button class="btn btn-primary">Logout</button></form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>