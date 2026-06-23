@extends('layouts.admin')

@section('title', 'Dashboard - Paskibra Ganesha')
@section('page-title', 'Dashboard')

@section('content')
@if(auth()->user()->role === 'admin')
    <!-- ADMIN DASHBOARD -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ \App\Models\User::count() }}</h3>
                    <p>Total Pengguna</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ \App\Models\User::where('role', 'calon_anggota')->count() }}</h3>
                    <p>Calon Anggota</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ \App\Models\User::where('role', 'pengurus')->count() }}</h3>
                    <p>Pengurus</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ \App\Models\FormulirPendaftaran::count() }}</h3>
                    <p>Registrasi</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Quick Actions -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-bolt me-2"></i>Aksi Cepat</h3>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-primary btn-block mb-2">
                        <i class="fas fa-user-plus me-2"></i>Buat Pengguna Baru
                    </a>
                    <a href="#" class="btn btn-outline-success btn-block mb-2">
                        <i class="fas fa-calendar-alt me-2"></i>Kelola Jadwal
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-block">
                        <i class="fas fa-chart-bar me-2"></i>Lihat Laporan
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-history me-2"></i>Aktivitas Terbaru</h3>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="time-label">
                            <span class="bg-red">2 hari yang lalu</span>
                        </div>
                        <div>
                            <i class="fas fa-check bg-green"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Registrasi ditutup</h3>
                            </div>
                        </div>
                        <div class="time-label">
                            <span class="bg-orange">1 minggu yang lalu</span>
                        </div>
                        <div>
                            <i class="fas fa-user bg-blue"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Pengurus baru ditambahkan</h3>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@elseif(auth()->user()->role === 'pengurus')
    <!-- PENGURUS DASHBOARD -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ \App\Models\FormulirPendaftaran::where('status', 'pending')->count() ?? 0 }}</h3>
                    <p>Pendaftaran Baru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ \App\Models\FormulirPendaftaran::where('status', 'approved')->count() ?? 0 }}</h3>
                    <p>Disetujui</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ \App\Models\FormulirPendaftaran::where('status', 'rejected')->count() ?? 0 }}</h3>
                    <p>Ditolak</p>
                </div>
                <div class="icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Quick Actions -->
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-tasks me-2"></i>Kelola Pendaftaran</h3>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-primary btn-block mb-2">
                        <i class="fas fa-list me-2"></i>Lihat Semua Pendaftaran
                    </a>
                    <a href="#" class="btn btn-outline-success btn-block mb-2">
                        <i class="fas fa-calendar-alt me-2"></i>Buat Jadwal Seleksi
                    </a>
                    <a href="#" class="btn btn-outline-info btn-block">
                        <i class="fas fa-download me-2"></i>Ekspor Data
                    </a>
                </div>
            </div>
        </div>

        <!-- Pending -->
        <div class="col-md-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-hourglass me-2"></i>Menunggu Review</h3>
                </div>
                <div class="card-body text-center">
                    <p class="text-muted">
                        <i class="fas fa-inbox"></i> Belum ada pendaftaran yang menunggu review
                    </p>
                </div>
            </div>
        </div>
    </div>

@else
    <!-- CALON ANGGOTA DASHBOARD -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                        @php
                            $formulir = auth()->user()->formulirPendaftaran;
                            echo $formulir ? ucfirst(str_replace('_', ' ', $formulir->status ?? 'belum terdaftar')) : 'Belum Mendaftar';
                        @endphp
                    </h3>
                    <p>Status Pendaftaran</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Segera</h3>
                    <p>Jadwal Seleksi</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>
                    <p>Notifikasi Baru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-bell"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Status Pendaftaran -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-info-circle me-2"></i>Status Pendaftaran Anda</h3>
                </div>
                <div class="card-body">
                    @php
                        $formulir = auth()->user()->formulirPendaftaran;
                    @endphp

                    @if($formulir)
                        <div class="alert alert-info">
                            <h5>Status Saat Ini</h5>
                            @if($formulir->status === 'pending')
                                <p><i class="fas fa-hourglass me-2"></i><strong>Menunggu Review</strong></p>
                            @elseif($formulir->status === 'approved')
                                <p><i class="fas fa-check-circle me-2"></i><strong>Diterima - Lanjut ke Tahap Seleksi</strong></p>
                            @elseif($formulir->status === 'rejected')
                                <p><i class="fas fa-times-circle me-2"></i><strong>Tidak Lolos</strong></p>
                            @else
                                <p>{{ ucfirst($formulir->status) }}</p>
                            @endif
                        </div>

                        <div class="alert alert-secondary">
                            <h5>Tanggal Pendaftaran</h5>
                            <p>{{ $formulir->created_at?->format('d M Y H:i') ?? 'N/A' }}</p>
                        </div>
                    @else
                        <div class="alert alert-warning text-center">
                            <p class="mb-3">Anda belum mengisi formulir pendaftaran</p>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fas fa-file-alt me-2"></i>Isi Formulir Pendaftaran
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Informasi Penting -->
        <div class="col-md-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-exclamation-circle me-2"></i>Informasi Penting</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-info mb-3">
                        <h5><i class="fas fa-calendar me-2"></i>Batas Pendaftaran</h5>
                        <p class="mb-0">31 Desember 2026</p>
                    </div>

                    <div class="alert alert-success mb-3">
                        <h5><i class="fas fa-bullseye me-2"></i>Tahap Seleksi</h5>
                        <p class="mb-0">Tes Tertulis, Wawancara, Pemeriksaan Kesehatan</p>
                    </div>

                    <div class="alert alert-secondary">
                        <h5><i class="fas fa-phone me-2"></i>Hubungi Kami</h5>
                        <p class="mb-0">admin@paskibra.local</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
