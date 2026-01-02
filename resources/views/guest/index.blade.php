<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SMP Budi Mulia Pangururan</title>

    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    <!-- AGENCY CSS -->
    <link href="{{ asset('agency/css/styles.css') }}" rel="stylesheet" />

    <style>
        html { scroll-behavior: smooth; } 
        body { font-family: 'Poppins', sans-serif; background-color: #fcfcfc; color: #333; }
        
        .masthead {
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=1351&q=80') !important;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-size: cover;
        }

        /* Navigasi Ikon */
        .nav-icon-box { transition: all 0.3s ease; border-radius: 15px; padding: 20px; text-decoration: none !important; }
        .nav-icon-box:hover { background: #fff; transform: translateY(-10px); box-shadow: 0 10px 30px rgba(0,0,0,0.08); }

        /* Kartu Visi Misi */
        .card-custom { border-radius: 20px; border: none; transition: 0.3s; background: #fff; }
        .card-custom:hover { box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important; }

        /* Bar Kuning di Heading */
        .pill-heading {
            width: fit-content; 
            padding-right: 35px !important;
            box-shadow: 0 4px 10px rgba(255, 200, 0, 0.3);
        }

        .portfolio-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .section-heading { font-weight: 700; color: #212529; }
        .text-primary { color: #ffc800 !important; }
        .btn-primary { background-color: #ffc800; border-color: #ffc800; color: #000; font-weight: bold; border-radius: 50px; }
        .btn-primary:hover { background-color: #d9aa00; border-color: #d9aa00; color: #000; }
        
        .bg-light-custom { background-color: #f8f9fa; }
    </style>
</head>

<body id="page-top">

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold" href="#page-top">SMP Budi Mulia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                Menu <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#announcement">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-warning text-dark px-4 ms-lg-3 shadow-sm" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ================= HERO ================= -->
    <header class="masthead">
        <div class="container text-center text-white">
            <div class="masthead-subheading">Selamat Datang di Portal Resmi</div>
            <div class="masthead-heading text-uppercase">SMP Budi Mulia Pangururan</div>
            <a class="btn btn-primary btn-xl text-uppercase px-5 shadow" href="#services">Kenali Kami Lebih Dekat</a>
        </div>
    </header>

    <!-- ================= SECTION PROFIL KREATIF ================= -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Profil Sekolah</h2>
                <h3 class="section-subheading text-muted">Membangun Masa Depan Berlandaskan Iman dan Ilmu</h3>
            </div>

            <!-- 1. Ikon Navigasi Cepat -->
            <div class="row text-center mb-5 g-4">
                <div class="col-md-4">
                    <a href="#detail-visi-misi" class="nav-icon-box d-block">
                        <span class="fa-stack fa-4x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bullseye fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="fw-bold text-dark">Visi & Misi</h4>
                        <p class="text-muted small">Tujuan Strategis Sekolah</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#detail-sejarah" class="nav-icon-box d-block">
                        <span class="fa-stack fa-4x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-history fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="fw-bold text-dark">Sejarah</h4>
                        <p class="text-muted small">Perjalanan Kami Sejak 1953</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#struktur-organisasi" class="nav-icon-box d-block">
                        <span class="fa-stack fa-4x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-sitemap fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="fw-bold text-dark">Struktur</h4>
                        <p class="text-muted small">Manajemen Pengelola</p>
                    </a>
                </div>
            </div>

            <!-- 2. Visi & Misi (Bar Kuning dengan Logo) -->
            <div id="detail-visi-misi" class="row g-4 mb-5 pt-5">
                <div class="col-lg-6">
                    <div class="card card-custom h-100 shadow-sm p-4">
                        <div class="d-flex align-items-center bg-primary rounded-pill p-1 mb-4 pill-heading">
                            <img src="{{ asset('Admin/img/profil/logo.png') }}" class="rounded-circle bg-white p-1" style="width: 50px; height: 50px; object-fit: contain;" onerror="this.src='https://via.placeholder.com/50?text=Logo'">
                            <h3 class="fw-bold mb-0 ms-3 text-dark">VISI</h3>
                        </div>
                        <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8; text-align: justify; padding-left: 10px;">
                            "{{ $profil->visi ?? 'Visi belum tersedia.' }}"
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-custom h-100 shadow-sm p-4">
                        <div class="d-flex align-items-center bg-primary rounded-pill p-1 mb-4 pill-heading">
                            <img src="{{ asset('Admin/img/profil/logo.png') }}" class="rounded-circle bg-white p-1" style="width: 50px; height: 50px; object-fit: contain;" onerror="this.src='https://via.placeholder.com/50?text=Logo'">
                            <h3 class="fw-bold mb-0 ms-3 text-dark">MISI</h3>
                        </div>
                        <div class="text-muted" style="white-space: pre-line; line-height: 1.8; text-align: justify; padding-left: 10px;">
                            {{ $profil->misi ?? 'Misi belum tersedia.' }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Sejarah (Gaya Majalah) -->
            <div id="detail-sejarah" class="row align-items-center py-5 border-top border-bottom bg-light bg-opacity-50">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="position-relative p-3">
                        <div class="bg-primary position-absolute w-100 h-100 rounded-4" style="top:0; left:0; transform: rotate(-3deg); z-index: -1;"></div>
                        <img src="{{ asset('Admin/img/profil/sekolah_depan.jpg') }}" class="img-fluid rounded-4 shadow-lg border border-white border-4" alt="Gedung Sekolah" onerror="this.src='https://images.unsplash.com/photo-1541339907198-e08756ebafe3?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <h2 class="fw-bold mb-4">Sejarah Perjalanan Kami</h2>
                    <div class="text-muted" style="line-height: 1.8; text-align: justify; white-space: pre-line;">
                        {{ $profil->sejarah ?? 'Sejarah belum tersedia.' }}
                    </div>
                </div>
            </div>

            <!-- 4. Struktur Organisasi -->
            <div id="struktur-organisasi" class="row mt-5 pt-5">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold text-uppercase mb-5">Struktur Organisasi</h2>
                    <div class="p-3 bg-white rounded-4 shadow-sm border mx-auto" style="max-width: 900px;">
                        <img src="{{ asset('Admin/img/profil/struktur.jpg') }}" class="img-fluid rounded-3" alt="Struktur Organisasi" onerror="this.src='https://via.placeholder.com/1200x600?text=Bagan+Struktur+Organisasi+Belum+Diunggah'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= BERITA ================= -->
    <section class="page-section bg-light-custom" id="news">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Berita & Kegiatan</h2>
                <h3 class="section-subheading text-muted">Aktivitas Terbaru Siswa SMP Budi Mulia</h3>
            </div>
            <div class="row">
                @forelse($beritas as $b)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item card card-custom h-100 shadow-sm border-0">
                        <img class="img-fluid" src="{{ asset('Admin/img/berita/'.$b->gambar) }}" alt="{{ $b->judul }}">
                        <div class="portfolio-caption p-4 bg-white rounded-bottom text-center">
                            <div class="portfolio-caption-heading fw-bold h5 mb-2">{{ $b->judul }}</div>
                            <div class="portfolio-caption-subheading text-muted small">{{ Str::limit($b->isi, 100) }}</div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center"><p class="text-muted">Belum ada berita terbaru.</p></div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ================= PENGUMUMAN ================= -->
    <section class="page-section" id="announcement">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Pengumuman</h2>
                <h3 class="section-subheading text-muted">Unduh Informasi Resmi</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive shadow-sm bg-white rounded-4 overflow-hidden border">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-dark text-white text-uppercase small">
                                <tr>
                                    <th class="ps-4 py-4">No</th>
                                    <th>Judul Pengumuman</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pengumumans as $i => $p)
                                <tr>
                                    <td class="ps-4">{{ $i + 1 }}</td>
                                    <td class="fw-semibold">{{ $p->judul }}</td>
                                    <td class="text-center">
                                        <a href="{{ asset('Admin/files/pengumuman/'.$p->file_upload) }}" class="btn btn-sm btn-success px-4 rounded-pill shadow-sm" target="_blank">
                                            <i class="fas fa-download me-1"></i> Download
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="3" class="text-center py-5 text-muted">Tidak ada pengumuman tersedia.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= GALERI ================= -->
    <section class="page-section bg-light-custom" id="gallery">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Galeri Sekolah</h2>
                <h3 class="section-subheading text-muted">Momen Kegiatan Belajar & Mengajar</h3>
            </div>
            <div class="row g-3">
                <div class="col-md-3 col-6"><img src="https://via.placeholder.com/400x400?text=Kegiatan+1" class="img-fluid rounded shadow-sm border border-white border-3"></div>
                <div class="col-md-3 col-6"><img src="https://via.placeholder.com/400x400?text=Kegiatan+2" class="img-fluid rounded shadow-sm border border-white border-3"></div>
                <div class="col-md-3 col-6"><img src="https://via.placeholder.com/400x400?text=Kegiatan+3" class="img-fluid rounded shadow-sm border border-white border-3"></div>
                <div class="col-md-3 col-6"><img src="https://via.placeholder.com/400x400?text=Kegiatan+4" class="img-fluid rounded shadow-sm border border-white border-3"></div>
            </div>
        </div>
    </section>

    <!-- ================= KONTAK ================= -->
    <section class="page-section" id="contact" style="background: #212529;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase text-white">Hubungi Kami</h2>
                <h3 class="section-subheading text-muted">Lokasi Kami di Pangururan, Samosir</h3>
            </div>
            <div class="row text-center text-white g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 bg-white bg-opacity-10 h-100 border border-secondary border-opacity-25">
                        <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Alamat</h5>
                        <p class="small opacity-75">Jl. Pelajar, Pangururan, Kabupaten Samosir, Sumatera Utara</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 bg-white bg-opacity-10 h-100 border border-secondary border-opacity-25">
                        <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Telepon</h5>
                        <p class="small opacity-75">+62 812-xxxx-xxxx</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 bg-white bg-opacity-10 h-100 border border-secondary border-opacity-25">
                        <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Email</h5>
                        <p class="small opacity-75">admin@smpbudimulia.sch.id</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer py-4 bg-dark text-white border-top border-warning border-4">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-4 text-lg-start small opacity-75">Copyright &copy; SMP Budi Mulia {{ date('Y') }}</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2 border border-secondary" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2 border border-secondary" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end small opacity-75">Develop by Kelompok PSW IT Del</div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('agency/js/scripts.js') }}"></script>
</body>
</html>