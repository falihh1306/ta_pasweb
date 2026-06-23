@extends("layouts.app")

@section("title", "Beranda - Paskibra Ganesha")

@section("content")
<!-- Hero Section -->
<section class="py-5 mb-5">
    <div class="text-center">
        <div class="mb-4">
            <i class="fas fa-shield-alt" style="font-size: 4rem; color: #dc3545;"></i>
        </div>
        <h1 class="display-3 fw-bold mb-3" style="color: #2c3e50;">Selamat Datang di Paskibra Ganesha</h1>
        <p class="lead text-muted mb-4" style="max-width: 600px; margin: 0 auto;">
            Organisasi Paskibra Ganesha adalah wadah bagi para pecinta nilai-nilai Pancasila dan kebangsaan untuk berkembang bersama.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-danger btn-lg">
                    <i class="fas fa-arrow-right me-2"></i>Masuk Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-danger btn-lg">
                    <i class="fas fa-sign-in-alt me-2"></i>Login Sekarang
                </a>
                <a href="{{ route('register') }}" class="btn btn-outline-danger btn-lg">
                    <i class="fas fa-user-plus me-2"></i>Daftar Calon Anggota
                </a>
            @endauth
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 mb-5">
    <h2 class="section-title text-center mb-5">Fitur Utama</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="fas fa-clipboard-list" style="font-size: 2.5rem; color: #dc3545;"></i>
                    </div>
                    <h5 class="card-title fw-bold">Manajemen Pendaftaran</h5>
                    <p class="card-text text-muted">Kelola pendaftaran calon anggota dengan mudah dan transparan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="fas fa-calendar-alt" style="font-size: 2.5rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title fw-bold">Jadwal Kegiatan</h5>
                    <p class="card-text text-muted">Pantau jadwal acara dan latihan organisasi secara real-time.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="fas fa-images" style="font-size: 2.5rem; color: #007bff;"></i>
                    </div>
                    <h5 class="card-title fw-bold">Galeri & Berita</h5>
                    <p class="card-text text-muted">Lihat momen-momen berharga dan berita terbaru organisasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 text-center" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 1rem;">
    <h2 class="fw-bold mb-3" style="color: #2c3e50; font-size: 2rem;">Siap Bergabung?</h2>
    <p class="lead text-muted mb-4">Daftarkan diri Anda sebagai calon anggota Paskibra Ganesha hari ini.</p>
    @guest
        <a href="{{ route('register') }}" class="btn btn-danger btn-lg">
            <i class="fas fa-rocket me-2"></i>Mulai Pendaftaran Sekarang
        </a>
    @endguest
    @auth
        <p class="text-muted">Akses penuh tersedia di dashboard Anda</p>
    @endauth
</section>
@endsection
