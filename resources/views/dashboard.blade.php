@extends('layouts.admin')

@section('title', 'Dashboard - Paskibra Ganesha')

@section('content')
@if(auth()->user()->role === 'admin')
    <!-- ADMIN DASHBOARD -->
    
    <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
        <div>
            <h3 class="font-weight-bold" style="color: #111827; letter-spacing: -0.5px; margin-bottom: 0.2rem;">Dashboard</h3>
            <p class="text-muted mb-0" style="font-size: 0.95rem;">Paskibra Management</p>
        </div>
        <div class="d-none d-md-flex align-items-center gap-3" style="gap: 1rem;">
            <!-- Removed local toggle. The global toggle is now in the top navbar -->
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="stat-card-gradient bg-gradient-red-1">
                <div class="stat-info">
                    <span class="value">{{ \App\Models\User::count() }}</span>
                    <span class="label">Total Pengguna</span>
                </div>
                <div class="icon-circle"><i class="fas fa-users"></i></div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="stat-card-gradient bg-gradient-white">
                <div class="stat-info">
                    <span class="value">{{ \App\Models\User::where('role', 'calon_anggota')->count() }}</span>
                    <span class="label">Calon Anggota</span>
                </div>
                <div class="icon-circle"><i class="fas fa-user-graduate"></i></div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="stat-card-gradient bg-gradient-red-2">
                <div class="stat-info">
                    <span class="value">{{ \App\Models\User::where('role', 'pengurus')->count() }}</span>
                    <span class="label">Pengurus Aktif</span>
                </div>
                <div class="icon-circle"><i class="fas fa-user-tie"></i></div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Quick Actions -->
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h3 class="m-0" style="font-weight: 700; font-size: 1.1rem; color: #111827;">Akses Cepat</h3>
                </div>
                <div class="card-body d-flex flex-column pt-3">
                    <button class="btn-soft btn-soft-primary">
                        <span><i class="fas fa-user-plus mr-2"></i> Tambah Pengguna</span>
                        <i class="fas fa-chevron-right text-muted" style="font-size: 0.85rem;"></i>
                    </button>
                    <button class="btn-soft btn-soft-primary">
                        <span><i class="fas fa-calendar-alt mr-2"></i> Kelola Jadwal</span>
                        <i class="fas fa-chevron-right text-muted" style="font-size: 0.85rem;"></i>
                    </button>
                    <button class="btn-soft btn-soft-primary mb-0">
                        <span><i class="fas fa-chart-pie mr-2"></i> Laporan Aktivitas</span>
                        <i class="fas fa-chevron-right text-muted" style="font-size: 0.85rem;"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="col-lg-8 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="m-0" style="font-weight: 700; font-size: 1.1rem; color: #111827;">Aktivitas Terbaru</h3>
                    <button class="btn btn-sm btn-light rounded-pill px-3 border text-muted" style="margin-left: auto;">Lihat semua <i class="fas fa-chevron-right ml-1" style="font-size:0.7rem;"></i></button>
                </div>
                <div class="card-body">
                    <ul class="timeline-modern mt-2">
                        <li>
                            <span class="time"><i class="far fa-clock mr-2"></i> Hari ini, 10:23 AM</span>
                            <span class="desc">Budi Santoso mendaftar sebagai Calon Anggota</span>
                        </li>
                        <li>
                            <span class="time"><i class="far fa-clock mr-2"></i> Kemarin, 14:50 PM</span>
                            <span class="desc">Admin memperbarui jadwal Seleksi Fisik</span>
                        </li>
                        <li>
                            <span class="time"><i class="far fa-clock mr-2"></i> 2 hari yang lalu</span>
                            <span class="desc">Siti Aminah diangkat menjadi Pengurus</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@elseif(auth()->user()->role === 'pengurus')
    <!-- PENGURUS DASHBOARD -->
    <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
        <div>
            <h4 class="font-weight-bold" style="color: #111827; letter-spacing: -0.5px;">Halo, {{ explode(' ', auth()->user()->nama_lengkap)[0] }}!</h4>
            <p class="text-muted mb-0" style="font-size: 0.95rem;">Berikut adalah rekap pendaftaran calon anggota terbaru.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Pendaftaran Baru</p>
                        <div style="background: rgba(59, 130, 246, 0.1); color: #3b82f6; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bold mb-3 text-dark">{{ \App\Models\FormulirPendaftaran::where('status_pendaftaran', 'pending')->count() ?? 0 }}</h2>
                    <div class="d-flex align-items-center">
                        <span class="text-success font-weight-bold" style="font-size: 0.9rem;"><i class="fas fa-arrow-up mr-1"></i> +{{ rand(5,15) }}%</span> 
                        <span class="text-muted ml-2" style="font-size: 0.9rem;">vs bulan lalu</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Pendaftar Disetujui</p>
                        <div style="background: rgba(16, 185, 129, 0.1); color: #10b981; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-check-double"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bold mb-3 text-dark">{{ \App\Models\FormulirPendaftaran::where('status_pendaftaran', 'approved')->count() ?? 0 }}</h2>
                    <div class="d-flex align-items-center">
                        <span class="text-success font-weight-bold" style="font-size: 0.9rem;"><i class="fas fa-arrow-up mr-1"></i> +{{ rand(5,15) }}%</span> 
                        <span class="text-muted ml-2" style="font-size: 0.9rem;">vs bulan lalu</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Pendaftar Ditolak</p>
                        <div style="background: rgba(239, 68, 68, 0.1); color: #ef4444; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bold mb-3 text-dark">{{ \App\Models\FormulirPendaftaran::where('status_pendaftaran', 'rejected')->count() ?? 0 }}</h2>
                    <div class="d-flex align-items-center">
                        <span class="text-danger font-weight-bold" style="font-size: 0.9rem;"><i class="fas fa-arrow-down mr-1"></i> -{{ rand(2,10) }}%</span> 
                        <span class="text-muted ml-2" style="font-size: 0.9rem;">vs bulan lalu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Quick Actions -->
        <div class="col-md-5 mb-4">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-header bg-white border-bottom pt-4 pb-3">
                    <h5 class="font-weight-bold m-0 text-dark"><i class="fas fa-tasks text-primary mr-2"></i> Kelola Pendaftaran</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush border-0">
                        <a href="{{ route('pendaftaran.index') }}" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex align-items-center justify-content-between">
                            <span class="font-weight-bold text-dark"><i class="fas fa-list text-muted mr-3" style="width: 20px; text-align: center;"></i> Lihat Semua Pendaftaran</span>
                            <i class="fas fa-chevron-right text-muted"></i>
                        </a>
                        <a href="{{ route('jadwal.index') }}" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calendar-alt text-muted mr-3" style="font-size: 1.1rem; width: 24px; text-align: center;"></i>
                                <span class="font-weight-bold text-dark">Jadwal Seleksi</span>
                            </div>
                            <span class="text-muted" style="font-size: 0.8rem;"><i class="fas fa-chevron-right"></i></span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action px-4 py-3 d-flex align-items-center justify-content-between border-0">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-file-pdf text-muted mr-3" style="font-size: 1.1rem; width: 24px; text-align: center;"></i>
                                <span class="font-weight-bold text-dark">Ekspor Laporan PDF</span>
                            </div>
                            <span class="text-muted" style="font-size: 0.8rem;"><i class="fas fa-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending -->
        <div class="col-md-7 mb-4">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-header bg-white border-bottom pt-4 pb-3 d-flex justify-content-between align-items-center">
                    <h5 class="font-weight-bold m-0 text-dark"><i class="fas fa-clock text-warning mr-2"></i> Menunggu Review</h5>
                    <button class="btn btn-sm btn-light border px-3 rounded-pill text-muted font-weight-bold">
                        <i class="fas fa-sync-alt mr-1"></i> Segarkan
                    </button>
                </div>
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="mb-4" style="width: 60px; height: 60px; background: rgba(16, 185, 129, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-check text-success" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-2">Semua pendaftaran telah diulas</h5>
                    <p class="text-muted mb-0">Belum ada formulir baru masuk saat ini. Silakan periksa kembali nanti.</p>
                </div>
            </div>
        </div>
    </div>

@else
    <!-- CALON ANGGOTA DASHBOARD -->
    <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
        <div>
            <h4 class="font-weight-bold" style="color: #111827; letter-spacing: -0.5px;">Selamat datang, {{ explode(' ', auth()->user()->nama_lengkap)[0] }}!</h4>
            <p class="text-muted mb-0" style="font-size: 0.95rem;">Persiapkan dirimu sebaik mungkin untuk seleksi Paskibra.</p>
        </div>
    </div>
    
    <div class="row">
        <!-- Status Pendaftaran Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0 h-100" style="border-radius: 0.75rem;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Status Pendaftaran</p>
                        <div style="background: rgba(59, 130, 246, 0.1); color: #3b82f6; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                            <i class="fas fa-file-signature"></i>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3 text-dark flex-grow-1">
                        @php
                            $formulir = auth()->user()->formulirPendaftaran;
                            echo $formulir ? ucfirst(str_replace('_', ' ', $formulir->status_pendaftaran ?? 'belum terdaftar')) : 'Belum Mendaftar';
                        @endphp
                    </h4>
                    <div class="d-flex align-items-center mt-auto">
                        <span class="text-success font-weight-bold" style="font-size: 0.85rem;"><i class="fas fa-check-circle mr-1"></i> Terkini</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jadwal Seleksi Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0 h-100" style="border-radius: 0.75rem;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Jadwal Seleksi</p>
                        <div style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3 text-dark flex-grow-1">Menunggu</h4>
                    <div class="d-flex align-items-center mt-auto">
                        <span class="text-warning font-weight-bold" style="font-size: 0.85rem;"><i class="fas fa-clock mr-1"></i> Segera hadir</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notifikasi Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0 h-100" style="border-radius: 0.75rem;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Notifikasi Baru</p>
                        <div style="background: rgba(16, 185, 129, 0.1); color: #10b981; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                            <i class="fas fa-bell"></i>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3 text-dark flex-grow-1">0 Pesan</h4>
                    <div class="d-flex align-items-center mt-auto">
                        <span class="text-muted font-weight-bold" style="font-size: 0.85rem;"><i class="fas fa-envelope-open mr-1"></i> Semua dibaca</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <!-- Status Pendaftaran -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-header bg-white border-bottom pt-4 pb-3">
                    <h5 class="font-weight-bold m-0 text-dark"><i class="fas fa-clipboard-check text-primary mr-2"></i> Detail Status Anda</h5>
                </div>
                <div class="card-body p-4 d-flex flex-column justify-content-center">
                    @php
                        $formulir = auth()->user()->formulirPendaftaran;
                    @endphp

                    @if($formulir)
                        <div class="p-4 mb-4 rounded" style="background: rgba(59, 130, 246, 0.05); border-left: 4px solid #3b82f6;">
                            <h6 class="font-weight-bold mb-3" style="color: #3b82f6;">Status Saat Ini</h6>
                            @if($formulir->status_pendaftaran === 'pending')
                                <div class="d-flex align-items-center text-dark"><i class="fas fa-hourglass-half text-warning mr-3" style="font-size: 1.5rem;"></i> <span class="font-weight-bold" style="font-size: 1.1rem;">Menunggu Review Panitia</span></div>
                            @elseif($formulir->status_pendaftaran === 'approved')
                                <div class="d-flex align-items-center text-dark"><i class="fas fa-check-circle text-success mr-3" style="font-size: 1.5rem;"></i> <span class="font-weight-bold" style="font-size: 1.1rem;">Diterima - Lanjut ke Tahap Seleksi</span></div>
                            @elseif($formulir->status_pendaftaran === 'rejected')
                                <div class="d-flex align-items-center text-dark"><i class="fas fa-times-circle text-danger mr-3" style="font-size: 1.5rem;"></i> <span class="font-weight-bold" style="font-size: 1.1rem;">Tidak Lolos Seleksi Berkas</span></div>
                            @else
                                <div class="text-dark font-weight-bold">{{ ucfirst($formulir->status_pendaftaran) }}</div>
                            @endif
                        </div>

                        <div class="p-3 rounded" style="background: #f9fafb; border-left: 4px solid #d1d5db;">
                            <h6 class="font-weight-bold text-secondary mb-2">Tanggal Pendaftaran</h6>
                            <div class="text-dark"><i class="far fa-clock mr-2 text-muted"></i> {{ $formulir->created_at?->format('d M Y, H:i') ?? 'N/A' }}</div>
                        </div>
                    @else
                        <div class="text-center py-4">
                            <div class="mb-4" style="width: 70px; height: 70px; background: rgba(239, 68, 68, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fas fa-file-signature text-danger" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="font-weight-bold text-dark mb-2">Anda belum mengisi formulir</h5>
                            <p class="text-muted mb-4 small">Silakan lengkapi biodata dan unggah berkas pendaftaran Anda.</p>
                            <a href="{{ route('pendaftaran.index') }}" class="btn btn-danger px-4 py-2 font-weight-bold rounded-pill shadow-sm">
                                <i class="fas fa-pen mr-2"></i> Isi Formulir Sekarang
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Informasi Penting -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 0.75rem;">
                <div class="card-header bg-white border-bottom pt-4 pb-3">
                    <h5 class="font-weight-bold m-0 text-dark"><i class="fas fa-bullhorn text-warning mr-2"></i> Papan Pengumuman</h5>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 py-3 d-flex align-items-start border-bottom">
                            <div class="mr-3 text-danger mt-1">
                                <i class="fas fa-exclamation-circle" style="font-size: 1.1rem;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold text-dark">Batas Akhir Pendaftaran</h6>
                                <p class="mb-0 text-danger font-weight-bold small">31 Desember 2026</p>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-3 d-flex align-items-start border-bottom">
                            <div class="mr-3 text-primary mt-1">
                                <i class="fas fa-check-circle" style="font-size: 1.1rem;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold text-dark">Tahapan Seleksi</h6>
                                <p class="mb-0 text-muted small">Meliputi Tes Fisik, Peraturan Baris Berbaris (PBB), dan Wawancara.</p>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-3 d-flex align-items-start">
                            <div class="mr-3 text-success mt-1">
                                <i class="fas fa-headset" style="font-size: 1.1rem;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold text-dark">Pusat Bantuan</h6>
                                <p class="mb-0 text-muted small">Jika mengalami kendala, hubungi <a href="#" class="text-success font-weight-bold text-decoration-none">admin@paskibra.local</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
