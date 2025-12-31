<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .navbar { background-color: #1a1a1a !important; }
        .btn-warning { background-color: #ffc107; border: none; font-weight: 600; }
        .card { border: none; transition: transform 0.3s; }
        .card:hover { transform: translateY(-10px); }
    </style>
    <meta charset="utf-8" />
    <title>@yield('title', 'SMP Budi Mulia Pangururan')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="{{ asset('guest/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('guest/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet">

    <!-- Agency CSS -->
    <link href="{{ asset('guest/assets/css/styles.css') }}" rel="stylesheet">
</head>
<body id="page-top">

    @yield('content')

    <!-- JS -->
    <script src="{{ asset('guest/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('guest/assets/js/scripts.js') }}"></script>
</body>
</html>
