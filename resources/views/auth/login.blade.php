<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrator Login | SMP Budi Mulia</title>

    <link href="{{ asset('Admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('Admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body.bg-gradient-primary {
            background: radial-gradient(circle at top right, #4e73df, #1a3b91) !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 15px;
        }

        .card {
            border: none !important;
            border-radius: 25px !important;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3) !important;
            overflow: visible;
        }

        .logo-wrapper {
            background: #ffffff;
            width: 100px;
            height: 100px;
            margin: -50px auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            padding: 10px;
            border: 5px solid #f8f9fc;
            z-index: 10;
        }

        .login-logo {
            max-width: 100%;
            height: auto;
        }

        .system-tag {
            display: inline-block;
            background: rgba(78, 115, 223, 0.1);
            color: #4e73df;
            padding: 4px 15px;
            border-radius: 50px;
            font-size: 0.65rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .input-group-custom {
            background: #f8f9fc;
            border: 1px solid #d1d3e2;
            border-radius: 12px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            padding: 2px 15px;
        }

        .input-group-custom:focus-within {
            background: #fff;
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.1);
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
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.3);
        }

        .footer-link {
            color: #858796;
            font-size: 0.85rem;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: #4e73df;
        }
    </style>
</head>

<body class="bg-gradient-primary">

<div class="login-container">
    <div class="card shadow-lg">
        <div class="card-body p-4 p-md-5">
            
            <div class="logo-wrapper">
                <img src="{{ asset('Admin/img/logo-sekolah.jpg') }}" alt="Logo" class="login-logo">
            </div>

            <div class="text-center mb-4">
                <span class="system-tag">Administrator Access</span>
                <h1 class="h4 text-gray-900 font-weight-bold mb-1">SMP Budi Mulia</h1>
                <p class="text-muted small mb-0">Pangururan, Samosir</p>
            </div>

            <form action="{{ route('login.process') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label class="small font-weight-bold text-gray-700 ml-1">Email Sekolah</label>
                    <div class="input-group-custom">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="admin@budimulia.sch.id" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="small font-weight-bold text-gray-700 ml-1">Password</label>
                    <div class="input-group-custom">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-admin">
                    MASUK KE SISTEM <i class="fas fa-sign-in-alt ml-2"></i>
                </button>
            </form>

            <div class="mt-4 pt-3 border-top text-center">
                <a href="/" class="footer-link">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali ke Website Utama
                </a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger border-0 shadow-sm mt-4 small text-center" style="border-radius: 10px;">
                    <i class="fas fa-exclamation-circle mr-1"></i> {{ $errors->first() }}
                </div>
            @endif

        </div>
    </div>

    <div class="text-center mt-4" style="color: rgba(255,255,255,0.5); font-size: 0.75rem;">
        &copy; {{ date('Y') }} Sistem Informasi SMP Budi Mulia <br>
        Built for Excellence
    </div>
</div>

<script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>