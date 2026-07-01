@extends("layouts.app")

@section("title", "Beranda - Paskibra Ganesha")

@section("hero")
<!-- Hero Section -->
<section style="position: relative; min-height: 85vh; background-image: url('/images/fotoawal.png'); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; padding-top: 4rem;">
    <!-- Overlay to make background darker -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0,0,0,0.4); z-index: 1;"></div>
    
    <div class="position-relative w-100 px-3" style="z-index:2;">
        <div class="row align-items-center justify-content-center mb-5 mt-5 text-center">
            <div class="col-12">
                <h5 class="fw-bold mb-4 text-white" style="letter-spacing: 1px;">Sistem Informasi Seleksi Penerimaan Anggota</h5>
                <h1 class="fw-black mb-4 text-white" style="font-size: clamp(2.2rem, 5vw, 6rem); line-height: 1; font-family: 'Arial Black', Impact, sans-serif; letter-spacing: 2px; text-shadow: 2px 4px 8px rgba(0,0,0,0.5);">PASKIBRA GANESHA</h1>
                <h4 class="fw-bold text-white mt-3" style="font-size: 2.2rem; letter-spacing: 2px; text-shadow: 1px 2px 4px rgba(0,0,0,0.5);">SMA NEGERI 1 PONTIANAK</h4>
            </div>
        </div>
        
        <!-- Floating Card -->
        <div class="row justify-content-center mt-4">
            <div class="col-xl-9 col-lg-10">
                <div class="card shadow-lg border-0" style="background-color: #d10000; color: white; border-radius: 1rem; transform: translateY(25%);">
                    <div class="card-body p-4 p-md-5 text-center">
                        <div class="d-inline-block mb-3">
                            <h4 class="fw-bold mb-2">PASKIBRA SMA NEGERI 1 PONTIANAK</h4>
                            <div style="height: 2px; background-color: white; width: 100%;"></div>
                        </div>
                        <p class="mb-0" style="font-size: 1.15rem; line-height: 1.6;">
                            Selamat datang di Website Paskibra Ganesha SMA Negeri 1 Pontianak. Website ini hadir sebagai media informasi serta sistem informasi seleksi penerimaan anggota yang bertujuan untuk memudahkan calon anggota dalam memperoleh informasi, melakukan pendaftaran, dan mengikuti proses seleksi secara lebih efektif dan terstruktur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("content")
<!-- Adjust top margin because of floating card -->
<div style="margin-top: 5rem;"></div>

<!-- Document Download Section -->
<section class="py-5 mb-5">
     <!-- Garis Merah -->
    <div class="container mb-5">
        <hr style=" border: 0; border-top: 2px solid #dc3545; opacity: 1; width: 100%; margin: 0 auto;">
    </div>
    <div class="row justify-content-center text-center g-4">
        <!-- Doc 1 -->
        <div class="col-6 col-md-3">
            <div class="d-flex flex-column align-items-center">
                <i class="far fa-file-pdf mb-3" style="font-size: 3rem; color: #dc3545;"></i>
                <h6 class="fw-bold" style="font-size: 0.9rem; min-height: 40px;">Surat Izin Orang Tua</h6>
                <div style="width: 65%; height: 2px; background-color: #dc3545; margin: 10px 0;"></div>
                <a href="#" class="text-decoration-none fw-bold" style="color: #0d6efd; font-size: 0.85rem;">Download PDF</a>
            </div>
        </div>
        <!-- Doc 2 -->
        <div class="col-6 col-md-3">
            <div class="d-flex flex-column align-items-center">
                <i class="far fa-file-pdf mb-3" style="font-size: 3rem; color: #dc3545;"></i>
                <h6 class="fw-bold" style="font-size: 0.9rem; min-height: 40px;">Perpang TNI<br>No. 57 & 58</h6>
                <div style="width: 65%; height: 2px; background-color: #dc3545; margin: 10px 0;"></div>
                <a href="#" class="text-decoration-none fw-bold" style="color: #0d6efd; font-size: 0.85rem;">Download PDF</a>
            </div>
        </div>
        <!-- Doc 3 -->
        <div class="col-6 col-md-3">
            <div class="d-flex flex-column align-items-center">
                <i class="far fa-file-pdf mb-3" style="font-size: 3rem; color: #dc3545;"></i>
                <h6 class="fw-bold" style="font-size: 0.9rem; min-height: 40px;">Buku Teks Utama<br>Pancasila Kelas X</h6>
                <div style="width: 65%; height: 2px; background-color: #dc3545; margin: 10px 0;"></div>
                <a href="#" class="text-decoration-none fw-bold" style="color: #0d6efd; font-size: 0.85rem;">Download PDF</a>
            </div>
        </div>
        <!-- Doc 4 -->
        <div class="col-6 col-md-3">
            <div class="d-flex flex-column align-items-center">
                <i class="far fa-file-pdf mb-3" style="font-size: 3rem; color: #dc3545;"></i>
                <h6 class="fw-bold" style="font-size: 0.9rem; min-height: 40px;">Tabel Penilaian Fisik</h6>
                <div style="width: 65%; height: 2px; background-color: #dc3545; margin: 10px 0;"></div>
                <a href="#" class="text-decoration-none fw-bold" style="color: #0d6efd; font-size: 0.85rem;">Download PDF</a>
            </div>
        </div>
    </div>
</section>

<!-- Sejarah Section -->
<section class="mb-5 mt-5" style="margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); background-color: #fffafb; padding: 4rem 0;">
    <div class="container-fluid px-4 px-xl-5">
        <div class="mb-4">
            <span class="d-inline-block text-white fw-bold px-3 py-1 mb-2" style="background-color: #d10000; font-size: 2rem; letter-spacing: 1px;">SEJARAH</span>
            <h2 class="fw-black mb-0" style="color: #d10000; font-size: 2.2rem; font-weight: 900; letter-spacing: 0.5px;">PASKIBRA SMA NEGERI 1 PONTIANAK</h2>
        </div>
        <div class="row align-items-stretch g-4 mt-1">
            <div class="col-md-9">
                <div class="h-100 p-5 p-lg-5 bg-white d-flex flex-column" style="border: 1px solid #d10000; border-radius: 0.8rem;">
                    <p style="font-size: 1.2rem; line-height: 1.8; text-align: justify; color: #000; margin-bottom: 2rem;">
                        Berawal dari keberhasilan Akhdan Wahyu, Dian Astiningsih, dan Nudi Wicaksono yang terpilih sebagai Paskibraka tingkat Provinsi dan Nasional pada tahun 1991-1992, muncul semangat untuk membentuk wadah pembinaan bagi generasi penerus di SMA Negeri 1 Pontianak. Berbekal pengalaman dan dedikasi mereka, <strong>lahirlah Paskibra SMA Negeri 1 Pontianak</strong> sebagai organisasi yang berkomitmen membina karakter, kedisiplinan, jiwa kepemimpinan, serta semangat nasionalisme bagi para siswa.
                    </p>
                    <div class="mt-auto">
                        <a href="{{ route('sejarah') }}" class="text-decoration-none fw-bold" style="color: #d10000; font-size: 1.15rem;">Lihat Selengkapnya <i class="fas fa-chevron-right ms-2" style="font-size: 0.9rem;"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 bg-white p-3" style="border: 1px solid #d10000; border-radius: 0.8rem;">
                    <img src="images/fotosejarah.png" alt="Paskibra SMA N 1 Pontianak" class="img-fluid w-100 h-100 object-fit-cover" style="border-radius: 0.5rem;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tahapan Penerimaan Anggota Section -->
<section class="py-5 mb-5">
    <div class="text-center mb-5">
        <h6 class="fw-bold" style="color: #d10000; letter-spacing: 2px;">PROSES SELEKSI</h6>
        <h2 class="fw-bold text-dark">Tahapan Penerimaan Anggota</h2>
        <p class="text-muted">Proses seleksi dilaksanakan secara transparan dan terstruktur.</p>
    </div>
    
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card h-100 p-4 border-0" style="border-radius: 1rem; box-shadow: inset 0 0 0 1px #f5c2c7, 0 4px 6px rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h3 class="fw-bold mb-0" style="color: #d10000;">01</h3>
                    <div class="p-2" style="background-color: #ffeeee; border-radius: 0.5rem;">
                        <i class="far fa-file-alt" style="color: #d10000; font-size: 1.2rem;"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark">Administrasi</h5>
                <p class="text-muted small mb-0">Memverifikasi kelengkapan dan keabsahan berkas pendaftar.</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card h-100 p-4 border-0" style="border-radius: 1rem; box-shadow: inset 0 0 0 1px #f5c2c7, 0 4px 6px rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h3 class="fw-bold mb-0" style="color: #d10000;">02</h3>
                    <div class="p-2" style="background-color: #ffeeee; border-radius: 0.5rem;">
                        <i class="fas fa-clipboard-list" style="color: #d10000; font-size: 1.2rem;"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark">Kesehatan & Parade</h5>
                <p class="text-muted small mb-0">Menilai kesehatan, postur tubuh, dan penampilan.</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card h-100 p-4 border-0" style="border-radius: 1rem; box-shadow: inset 0 0 0 1px #f5c2c7, 0 4px 6px rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h3 class="fw-bold mb-0" style="color: #d10000;">03</h3>
                    <div class="p-2" style="background-color: #ffeeee; border-radius: 0.5rem;">
                        <i class="fas fa-running" style="color: #d10000; font-size: 1.2rem;"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark">Samapta</h5>
                <p class="text-muted small mb-0">Mengukur kemampuan fisik, daya tahan, kecepatan, dan kekuatan tubuh.</p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-4">
            <div class="card h-100 p-4 border-0" style="border-radius: 1rem; box-shadow: inset 0 0 0 1px #f5c2c7, 0 4px 6px rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h3 class="fw-bold mb-0" style="color: #d10000;">04</h3>
                    <div class="p-2" style="background-color: #ffeeee; border-radius: 0.5rem;">
                        <i class="fas fa-shoe-prints" style="color: #d10000; font-size: 1.2rem;"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark">PBB</h5>
                <p class="text-muted small mb-0">Menilai kemampuan baris-berbaris, ketegasan & kebenaran gerakan sesuai Perpang TNI No. 57 & 58.</p>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4">
            <div class="card h-100 p-4 border-0" style="border-radius: 1rem; box-shadow: inset 0 0 0 1px #f5c2c7, 0 4px 6px rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h3 class="fw-bold mb-0" style="color: #d10000;">05</h3>
                    <div class="p-2" style="background-color: #ffeeee; border-radius: 0.5rem;">
                        <i class="fas fa-users" style="color: #d10000; font-size: 1.2rem;"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark">Kepribadian</h5>
                <p class="text-muted small mb-0">Menilai wawasan kebangsaan, intelegensia umum, motivasi, karakter, dan komitmen.</p>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4">
            <div class="card h-100 p-4 border-0" style="border-radius: 1rem; box-shadow: inset 0 0 0 1px #f5c2c7, 0 4px 6px rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h3 class="fw-bold mb-0" style="color: #d10000;">06</h3>
                    <div class="p-2" style="background-color: #ffeeee; border-radius: 0.5rem;">
                        <i class="fas fa-award" style="color: #d10000; font-size: 1.2rem;"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark">Hasil Akhir</h5>
                <p class="text-muted small mb-0">Hasil seleksi diumumkan melalui akun masing-masing Calon Anggota.</p>
            </div>
        </div>
    </div>
</section>
@endsection
