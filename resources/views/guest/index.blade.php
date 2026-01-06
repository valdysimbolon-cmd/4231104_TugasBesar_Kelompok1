<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Website Resmi SMP Budi Mulia Pangururan - Cerdas, Berkarakter, Berbudaya" />
    <meta name="author" content="Kelompok PSW IT Del" />
    
    <title>SMP Budi Mulia Pangururan | Beranda</title>
    
    <!-- FAVICON (Opsional: tambahkan jika ada) -->
    <link rel="icon" type="image/x-icon" href="{{ asset('Admin/img/favicon.ico') }}" />

    <!-- FONTS & ICON PACKS -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    
    <!-- CSS UTAMA (VENDORS) -->
    <link href="{{ asset('agency/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    
    <!-- CUSTOM STYLING & OVERRIDES -->
    <style>
        /* --- GLOBAL RESETS --- */
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; background-color: #ffffff; color: #333; }
        section { scroll-margin-top: 70px; }

        /* --- HERO SECTION (MASTHEAD) --- */
        .masthead { 
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                              url('{{ asset('Admin/img/profil/sekolah-bg.jpg') }}') !important; 
            background-size: cover !important; 
            background-position: center !important;
            background-repeat: no-repeat !important;
            padding-top: 15rem;
            padding-bottom: 10rem;
        }

        /* --- TYPOGRAPHY & COLORS --- */
        .section-heading { font-weight: 700; color: #212529; text-transform: uppercase; }
        .text-primary { color: #0d6efd !important; } 
        .bg-light-custom { background-color: #f8f9fa !important; }
        
        /* --- COMPONENT FIXES --- */
        .table-dark { background-color: #212529; }
        .rounded-4 { border-radius: 1rem !important; }
    </style>
</head>

<body id="page-top">

    {{-- BAGIAN 1: NAVIGASI --}}
    @include('guest.sections.navbar')

    {{-- BAGIAN 2: HERO SECTION (SAMBUTAN) --}}
    @include('guest.sections.hero')
    
    {{-- BAGIAN 3: PROFIL SEKOLAH (VISI, MISI, SEJARAH, STRUKTUR) --}}
    @include('guest.sections.about')
    
    {{-- BAGIAN 4: BERITA & KEGIATAN TERBARU --}}
    @include('guest.sections.news')

    {{-- BAGIAN 5: PENGUMUMAN RESMI SEKOLAH --}}
    @include('guest.sections.announcement')

    {{-- BAGIAN 6: DOKUMENTASI GALERI FOTO --}}
    @include('guest.sections.gallery')

    {{-- BAGIAN 7: KONTAK & FOOTER TERINTEGRASI --}}
    @include('guest.sections.contact')


    <!-- CORE SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('agency/js/scripts.js') }}"></script>

</body>
</html>