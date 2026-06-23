@extends('layouts.app')

@section('title', 'Login - Paskibra Ganesha')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <i class="fas fa-shield-alt" style="font-size: 3rem; color: #dc3545;"></i>
                    <h2 class="mt-3 fw-bold" style="color: #2c3e50;">Login Paskibra</h2>
                    <p class="text-muted small">Silakan masuk dengan akun Anda</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

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

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <!-- Role Selection (Info Only) -->
                    <div class="alert alert-info mb-4">
                        <p class="small fw-bold mb-3">
                            <i class="fas fa-info-circle me-2"></i>Tipe Pengguna:
                        </p>
                        <div class="form-check small mb-2">
                            <input class="form-check-input" type="radio" name="user_type" value="admin" id="admin" checked>
                            <label class="form-check-label" for="admin">
                                <strong>Admin</strong> - Kelola sistem organisasi
                            </label>
                        </div>
                        <div class="form-check small mb-2">
                            <input class="form-check-input" type="radio" name="user_type" value="pengurus" id="pengurus">
                            <label class="form-check-label" for="pengurus">
                                <strong>Pengurus</strong> - Kelola pendaftaran & acara
                            </label>
                        </div>
                        <div class="form-check small">
                            <input class="form-check-input" type="radio" name="user_type" value="calon_anggota" id="calon">
                            <label class="form-check-label" for="calon">
                                <strong>Calon Anggota</strong> - Ikuti proses seleksi
                            </label>
                        </div>
                        <p class="text-muted small mt-2 mb-0">
                            💡 Pilihan ini hanya untuk referensi. Sistem akan otomatis mengenali role Anda.
                        </p>
                    </div>

                    <!-- NISN / NIP Input -->
                    <div class="mb-3">
                        <label for="nisn" class="form-label fw-bold">NISN / NIP</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            <input 
                                type="text" 
                                id="nisn" 
                                name="nisn" 
                                value="{{ old('nisn') }}" 
                                placeholder="Masukkan NISN atau NIP Anda"
                                class="form-control @error('nisn') is-invalid @enderror"
                                required
                            >
                            @error('nisn')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Masukkan password"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            >
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-danger w-100 fw-bold py-2">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </button>

                    <!-- Register Link -->
                    <div class="text-center mt-3">
                        <p class="text-muted small mb-0">
                            Belum punya akun? 
                            <a href="{{ route('register') }}" class="text-danger fw-bold">Daftar di sini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Demo Credentials Info -->
        <div class="alert alert-warning mt-4 small" role="alert">
            <i class="fas fa-key me-2"></i><strong>Demo Admin:</strong>
            <br>NISN/NIP: <code>199305052023211016</code>
            <br>Password: <code>admin123</code>
        </div>
    </div>
</div>
@endsection
