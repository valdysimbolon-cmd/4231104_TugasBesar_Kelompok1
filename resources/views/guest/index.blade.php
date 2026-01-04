<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SMP Budi Mulia Pangururan</title>
    
    <!-- Font & Icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    
    <!-- CSS Utama -->
    <link href="{{ asset('agency/css/styles.css') }}" rel="stylesheet" />
    
    <style>
        html { scroll-behavior: smooth; }
        section {scroll-margin-top: 70px;}
        body { font-family: 'Poppins', sans-serif; background-color: #ffffff; }
        
        /* CSS Untuk Header/Hero dengan Gambar Sekolah Asli */
        .masthead { 
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                              url('{{ asset('Admin/img/profil/sekolah-bg.jpg') }}') !important; 
            background-size: cover !important; 
            background-position: center !important;
            background-repeat: no-repeat !important;
            padding-top: 15rem;
            padding-bottom: 10rem;
        }

        .section-heading { font-weight: 700; color: #212529; }
        .text-primary { color: #0d6efd !important; } 
        .bg-light { background-color: #f8f9fa !important; }
        .table-dark { background-color: #212529; }
    </style>
</head>
<body id="page-top">

    {{-- 1. Navigasi --}}
    @include('guest.sections.navbar')

    {{-- 2. Hero Section --}}
    @include('guest.sections.hero')
    
    {{-- 3. Profil Lengkap (Visi Misi + Sejarah + Tabel Struktur) --}}
    {{-- SEMUA DATA PROFIL MASUK DI SINI --}}
    @include('guest.sections.about')
    
    {{-- File Services DIHAPUS agar tidak duplikat --}}
    
    {{-- 4. Berita Terbaru --}}
    @include('guest.sections.news')

    {{-- 5. Pengumuman Resmi --}}
    @include('guest.sections.announcement')

    {{-- 6. Galeri Kegiatan --}}
    @include('guest.sections.gallery')

    {{-- 7. Kontak & Lokasi --}}
    @include('guest.sections.contact')

    {{-- 8. Footer --}}
    @include('guest.sections.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('agency/js/scripts.js') }}"></script>
</body>
</html>