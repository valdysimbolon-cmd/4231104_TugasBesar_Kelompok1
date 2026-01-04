<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SMP Budi Mulia Pangururan</title>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('agency/css/styles.css') }}" rel="stylesheet" />
    <style>
        /* Masukkan CSS Style yang Anda punya tadi di sini */
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; background-color: #fcfcfc; }
        .masthead { background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=1351&q=80') !important; background-size: cover; }
        .card-custom { border-radius: 20px; transition: 0.3s; background: #fff; }
        .text-primary { color: #ffc800 !important; }
        .bg-primary { background-color: #ffc800 !important; }
    </style>
</head>
<body id="page-top">
    @include('guest.sections.navbar')
    @include('guest.sections.hero')
    @include('guest.sections.about')
    @include('guest.sections.services')
    @include('guest.sections.news')
    @include('guest.sections.announcement')
    @include('guest.sections.gallery')
    @include('guest.sections.contact')
    @include('guest.sections.footer')
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('agency/js/scripts.js') }}"></script>
</body>
</html>