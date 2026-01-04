<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase fw-bold"  href="#page-top">SMP Budi Mulia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            Menu <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#news">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#announcement">Pengumuman</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                <li class="nav-item"><a class="nav-link btn btn-warning text-dark px-4 ms-lg-3 shadow-sm" href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>