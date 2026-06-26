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
            background-color: #d10000;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.2rem;
            color: white !important;
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
            color: white !important;
            font-weight: 500;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            padding: 1.5rem 1.5rem !important;
        }

        .nav-link:hover, .nav-link.active {
            color: rgba(255,255,255,0.8) !important;
        }
        
        .dropdown-toggle::after {
            display: none;
        }
        
        .dropdown-menu {
            border: none;
            border-radius: 0;
            background-color: #bc0000;
            padding: 0;
            margin: 0;
            min-width: 220px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .dropdown-item {
            color: white !important;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            transition: all 0.2s ease;
            font-weight: 400;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background-color: #990000;
        }

        @media all and (min-width: 992px) {
            .navbar .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
            .navbar .nav-item.dropdown:hover > .nav-link {
                background-color: #bc0000;
                color: rgba(255,255,255,0.8) !important;
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
        <div class="container-lg">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://ui-avatars.com/api/?name=PG&background=fff&color=d10000&rounded=true" alt="Logo" width="40" height="40" class="me-2 rounded-circle bg-white p-1">
                <div style="line-height: 1.1;">
                    <div style="font-size: 1.1rem; letter-spacing: 1px; font-weight: bold;">BRAGAS</div>
                    <div style="font-size: 0.75rem; font-weight: 400; letter-spacing: 0.5px;">SMA NEGERI 1 PONTIANAK</div>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars" style="color: white; font-size: 1.5rem;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tentang</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('login') }}">Masuk</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Daftar</a></li>
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
                        <img src="https://ui-avatars.com/api/?name=PG&background=d10000&color=fff&rounded=true" alt="Logo" width="50" height="50" class="me-3 rounded-circle">
                        <span class="footer-logo-text">PASKIBRA GANESHA</span>
                    </div>
                    <p class="text-muted" style="max-width: 250px;">Platform Resmi Informasi dan Seleksi Penerimaan Anggota Pasukan Pengibar Bendera</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h6 class="fw-bold mb-3 text-dark">Media Sosial</h6>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none"><i class="fab fa-instagram me-2"></i>Instagram</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none"><i class="fab fa-tiktok me-2"></i>Tiktok</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none"><i class="fab fa-whatsapp me-2"></i>Whatsapp</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold mb-3 text-dark">Alamat</h6>
                    <p class="text-muted">
                        Jl. Gusti Johan Idrus,<br>
                        Kelurahan Akcaya, Kecamatan<br>
                        Pontianak Selatan, Kota Pontianak,<br>
                        Kalimantan Barat
                    </p>
                </div>
            </div>
            <hr class="mb-4" style="border-color: #ccc;">
            <div class="d-flex justify-content-between flex-wrap text-muted" style="font-size: 0.85rem;">
                <div class="fw-bold text-dark">Paskibra SMA Negeri 1 Pontianak</div>
                <div>&copy; 2026 Paskibra Ganesha. All rights reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
