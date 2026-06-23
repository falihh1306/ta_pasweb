@extends('layouts.app')

@section('title', 'Daftar Calon Anggota - Paskibra Ganesha')

@section('content')
<div class="row justify-content-center my-5">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <i class="fas fa-clipboard" style="font-size: 3rem; color: #28a745;"></i>
                    <h2 class="mt-3 fw-bold" style="color: #2c3e50;">Daftar Calon Anggota</h2>
                    <p class="text-muted small">Bergabunglah dengan Paskibra Ganesha</p>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('register.post') }}" method="POST">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-bold">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input 
                                type="text" 
                                id="nama_lengkap" 
                                name="nama_lengkap" 
                                value="{{ old('nama_lengkap') }}"
                                placeholder="Masukkan nama lengkap Anda"
                                class="form-control @error('nama_lengkap') is-invalid @enderror"
                                required
                            >
                            @error('nama_lengkap')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- NISN -->
                    <div class="mb-3">
                        <label for="nisn" class="form-label fw-bold">NISN <small class="text-muted">(Nomor Induk Siswa Nasional)</small></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            <input 
                                type="text" 
                                id="nisn" 
                                name="nisn" 
                                value="{{ old('nisn') }}"
                                placeholder="Masukkan NISN Anda (10 digit)"
                                class="form-control @error('nisn') is-invalid @enderror"
                                required
                            >
                            @error('nisn')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Minimal 8 karakter"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            >
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password Confirmation -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label fw-bold">Konfirmasi Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                placeholder="Ulangi password Anda"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                required
                            >
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="alert alert-info small mb-4" role="alert">
                        <i class="fas fa-info-circle me-2"></i>Dengan mendaftar, Anda setuju mengikuti proses seleksi Paskibra Ganesha sesuai ketentuan yang berlaku.
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                        <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                    </button>

                    <!-- Login Link -->
                    <div class="text-center mt-3">
                        <p class="text-muted small mb-0">
                            Sudah punya akun? 
                            <a href="{{ route('login') }}" class="text-danger fw-bold">Login di sini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
