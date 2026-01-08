<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SMP Budi Mulia Pangururan</title>
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('agency/css/styles.css') }}" rel="stylesheet" />

    <style>
        header.masthead {
            padding-top: 10.5rem;
            padding-bottom: 6rem;
            text-align: center;
            color: #fff;
            background-image: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.7)), 
                              url("{{ asset('Admin/img/profil/sekolah-bg.jpg') }}") !important;
            background-repeat: no-repeat !important;
            background-attachment: scroll !important;
            background-position: center center !important;
            background-size: cover !important;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .navbar {
            transition: all 0.3s ease-in-out;
            padding: 1.5rem 0;
        }
        .navbar-shrink {
            padding: 0.8rem 0 !important;
            background-color: #1a3b91 !important; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .structure-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
        }
        .structure-img-limited {
            width: 100%;
            max-width: 500px !important;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 5px solid #fff;
        }
    </style>
</head>
<body id="page-top">
    @include('guest.sections.navbar')
    @include('guest.sections.hero')
    @include('guest.sections.about')
    @include('guest.sections.news')
    @include('guest.sections.announcement')
    @include('guest.sections.gallery')
    @include('guest.sections.contact')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('agency/js/scripts.js') }}"></script>
    
    <script>
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                document.querySelector('.navbar').classList.add('navbar-shrink');
            } else {
                document.querySelector('.navbar').classList.remove('navbar-shrink');
            }
        });
    </script>
</body>
</html>