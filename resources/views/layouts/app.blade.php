<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paskibra Ganesha')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #ffffff;
            padding-top: 0;
            padding-bottom: 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.2rem;
            color: #000 !important;
            display: flex;
            align-items: center;
            gap: 10px;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .navbar-brand i {
            font-size: 2rem;
        }

        .nav-item {
            margin: 0 !important;
        }

        .nav-link {
            color: #000 !important;
            font-weight: 700;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            padding: 1.5rem 1.2rem !important;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-link:hover, .nav-link.active {
            color: #d10000 !important;
        }
        
        .dropdown-toggle::after {
            display: none;
        }
        
        .dropdown-menu {
            border: none;
            border-radius: 0 0 0.5rem 0.5rem;
            background-color: #ffffff;
            padding: 0;
            margin: 0;
            min-width: 200px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .dropdown-item {
            color: #333 !important;
            padding: 0.8rem 1.5rem;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: all 0.2s ease;
            font-weight: 600;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #d10000 !important;
        }

        @media all and (min-width: 992px) {
            .navbar .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
            .navbar .nav-item.dropdown:hover > .nav-link {
                color: #d10000 !important;
            }
        }

        /* Main Content */
        main {
            min-height: 600px;
        }

        /* Footer */
        footer {
            background-color: #f4f4f4;
            color: #333;
            padding: 4rem 0 2rem 0;
            margin-top: 5rem;
            font-size: 0.9rem;
        }
        
        .footer-logo-text {
            font-weight: 700;
            font-size: 1.2rem;
            color: #000;
        }

        /* Alerts */
        .alert {
            border-radius: 0.5rem;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* Buttons */
        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #c82333;
            border-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220,53,69,0.3);
        }

        /* Cards */
        .card {
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transform: translateY(-4px);
        }

        /* Section Titles */
        .section-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: #dc3545;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://ui-avatars.com/api/?name=PG&background=000&color=fff&rounded=true" alt="Logo" width="45" height="45" class="me-2 rounded-circle" style="border: 2px solid #000;">
                <div style="line-height: 1.1;">
                    <div style="font-size: 1.25rem; letter-spacing: 1px; font-weight: 900; color: #000;">PASKIBRA GANESHA</div>
                    <div style="font-size: 0.8rem; font-weight: 600; letter-spacing: 0.5px; color: #333;">SMA NEGERI 1 PONTIANAK</div>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars" style="color: #000; font-size: 1.5rem;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tentang <i class="fas fa-chevron-down ms-1" style="font-size: 0.7em;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Jadwal</a>
                    </li>
                    <li class="nav-item dropdown ms-lg-3 my-2 my-lg-0 d-flex align-items-center">
                        <a class="btn btn-danger fw-bold rounded-3" href="{{ route('login') }}" role="button" data-bs-toggle="dropdown" style="background-color: #d10000; border: none; padding: 0.6rem 1.2rem; display: inline-flex; align-items: center; gap: 8px;">
                            MASUK <i class="fas fa-chevron-down" style="font-size: 0.7em;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" style="border-radius: 0.5rem; min-width: 150px;">
                            <li><a class="dropdown-item fw-semibold py-2" href="{{ route('register') }}">Daftar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('hero')
        
        <div class="container-lg mt-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Sukses!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <strong>Error!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container-lg">
            <div class="row mb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://ui-avatars.com/api/?name=PG&background=000&color=fff&rounded=true" alt="Logo" width="50" height="50" class="me-3 rounded-circle" style="border: 2px solid #000;">
                        <span class="footer-logo-text fw-black" style="font-weight: 900;">PASKIBRA GANESHA</span>
                    </div>
                    <p style="color: #333; max-width: 280px; font-size: 0.95rem; line-height: 1.6;">Platform Resmi Informasi dan Seleksi Penerimaan Anggota Pasukan Pengibar Bendera</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h6 class="fw-bold mb-3 text-dark" style="font-size: 1.05rem;">Media Sosial</h6>
                    <ul class="list-unstyled" style="color: #333; line-height: 1.8;">
                        <li><a href="https://www.instagram.com/bragas_sman1ptk?igsh=MWwzbzNhdzhzOW5oeA==" class="text-decoration-none" style="color: #333;">Instagram</a></li>
                        <li><a href="https://www.tiktok.com/@paskibraganesha?_r=1&_t=ZS-97fPekDQ656" class="text-decoration-none" style="color: #333;">Tiktok</a></li>
                        <li><a href="https://wa.me/6285753702222" class="text-decoration-none" style="color: #333;">Whatsapp</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold mb-3 text-dark" style="font-size: 1.05rem;">Alamat</h6>
                    <p style="color: #333; line-height: 1.6; max-width: 300px;">
                        Jl. Gusti Johan Idrus,<br>
                        Kelurahan Akcaya, Kecamatan<br>
                        Pontianak Selatan, Kota Pontianak,<br>
                        Kalimantan Barat
                    </p>
                </div>
            </div>
            <hr class="mb-3 mt-4" style="border-top: 1px solid #000; opacity: 1;">
            <div style="font-size: 0.95rem; color: #333;">
                <div class="fw-bold mb-1">Paskibra SMA Negeri 1 Pontianak</div>
                <div style="color: #555;">&copy; 2026 Paskibra Ganesha. All rights reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
