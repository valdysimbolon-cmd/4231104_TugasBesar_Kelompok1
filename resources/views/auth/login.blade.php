<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin - SMP Budi Mulia</title>

    <!-- Custom fonts -->
    <link href="{{ asset('Admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('Admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body.bg-gradient-primary {
            /* Gradasi Biru yang lebih dalam dan profesional */
            background: radial-gradient(circle at top right, #4e73df, #1a3b91) !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
        }

        /* Container utama agar card tepat di tengah */
        .login-container {
            width: 100%;
            max-width: 450px;
            padding: 15px;
        }

        .card {
            border: none !important;
            border-radius: 25px !important;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3) !important;
            overflow: visible; /* Penting untuk efek logo floating */
        }

        /* Efek Logo Lencana (Floating Logo) */
        .logo-wrapper {
            background: #ffffff;
            width: 110px;
            height: 110px;
            margin: -55px auto 20px; /* Menaruh logo di tengah garis atas card */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            padding: 10px;
            border: 6px solid #f8f9fc;
            z-index: 10;
        }

        .login-logo {
            max-width: 100%;
            height: auto;
        }

        .admin-header {
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .system-tag {
            display: inline-block;
            background: rgba(78, 115, 223, 0.1);
            color: #4e73df;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 0.65rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        /* Styling Input Modern */
        .input-group-custom {
            background: #f8f9fc;
            border: 1px solid #d1d3e2;
            border-radius: 12px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            padding: 5px 15px;
        }

        .input-group-custom:focus-within {
            background: #fff;
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.15);
        }

        .input-group-custom i {
            color: #b7b9cc;
            margin-right: 12px;
        }

        .input-group-custom input {
            border: none !important;
            background: transparent !important;
            box-shadow: none !important;
            padding: 12px 0 !important;
            width: 100%;
            font-size: 0.9rem;
            color: #495057;
        }

        /* Tombol Login Admin */
        .btn-admin {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            border: none;
            border-radius: 12px !important;
            padding: 14px !important;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 1px;
            margin-top: 10px;
            transition: all 0.3s;
        }

        .btn-admin:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.4);
        }

        .footer-links a {
            color: #858796;
            font-size: 0.8rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #4e73df;
            text-decoration: none;
        }

        .copyright-text {
            color: rgba(255,255,255,0.5);
            font-size: 0.75rem;
            margin-top: 25px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-gradient-primary">

<div class="login-container">
    <div class="card shadow-lg">
        <div class="card-body p-4 p-md-5">
            
            <!-- Logo Floating -->
            <div class="logo-wrapper">
                <img src="{{ asset('Admin/img/logo-sekolah.jpg') }}" alt="Logo SMP Budi Mulia" class="login-logo">
            </div>

            <div class="text-center admin-header">
                <span class="system-tag">Administrator Access</span>
                <h1 class="h4 text-gray-900 font-weight-bold mb-0">SMP Budi Mulia</h1>
                <p class="text-muted small">Pangururan, Samosir</p>
            </div>

            {{-- FORM LOGIN --}}
            <form action="{{ route('login.process') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="form-group mb-3">
                    <label class="small font-weight-bold text-gray-700 ml-1">Email Sekolah</label>
                    <div class="input-group-custom">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="admin@budimulia.sch.id" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="form-group mb-4">
                    <label class="small font-weight-bold text-gray-700 ml-1">Password</label>
                    <div class="input-group-custom">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-admin shadow">
                    MASUK KE SISTEM <i class="fas fa-sign-in-alt ml-2"></i>
                </button>
            </form>

            <div class="mt-4 pt-2 border-top">
                <div class="text-center footer-links d-flex justify-content-between">
                    <a href="/"><i class="fas fa-home mr-1"></i> Website Utama</a>
                    <a href="#">Lupa Password?</a>
                </div>
            </div>

            {{-- ERROR HANDLING --}}
            @if ($errors->any())
                <div class="alert alert-danger border-0 shadow-sm mt-4 small text-center" style="border-radius: 10px;">
                    <i class="fas fa-exclamation-circle mr-1"></i> {{ $errors->first() }}
                </div>
            @endif

        </div>
    </div>

    <!-- Copyright Footer -->
    <div class="copyright-text">
        &copy; {{ date('Y') }} Sistem Informasi SMP Budi Mulia <br>
        Crafted for Excellence
    </div>
</div>

<!-- JS -->
<script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('Admin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>