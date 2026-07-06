<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\UserFormulirController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/visi-misi', function () {
    return view('visi-misi');
})->name('visi-misi');

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
})->name('struktur-organisasi');

// Removed static galeri route

Route::get('/berita', [BeritaController::class, 'publicIndex'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'publicShow'])->name('berita.show');

Route::get('/jadwal', [JadwalController::class, 'publicIndex'])->name('jadwal');
Route::get('/galeri', [GaleriController::class, 'publicIndex'])->name('galeri');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])
    ->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])
    ->name('register.post');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pendaftaran', [UserFormulirController::class, 'index'])->name('pendaftaran.index');
    Route::post('/pendaftaran', [UserFormulirController::class, 'store'])->name('pendaftaran.store');

    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi.index');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    
    // Hanya Admin
    Route::middleware('admin')->group(function () {
        Route::resource('users', UserController::class)->except(['create', 'edit', 'show']);
        Route::resource('berita', BeritaController::class);
        Route::resource('jadwal', JadwalController::class)->except(['create', 'show', 'edit']);
        Route::resource('galeri', GaleriController::class)->except(['create', 'show', 'edit', 'update']);
        Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    });
    
    // Admin & Pengurus
    Route::middleware('admin:admin,pengurus')->group(function () {
        // Pendaftaran Routes
        Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
        Route::get('pendaftaran/{id}', [PendaftaranController::class, 'show'])->name('pendaftaran.show');
        Route::patch('pendaftaran/{id}/status', [PendaftaranController::class, 'updateStatus'])->name('pendaftaran.updateStatus');

        // Seleksi Routes
        Route::get('seleksi', [SeleksiController::class, 'index'])->name('seleksi.index');
        Route::get('seleksi/{id}', [SeleksiController::class, 'show'])->name('seleksi.show');
        Route::post('seleksi/{id}', [SeleksiController::class, 'store'])->name('seleksi.store');
        Route::delete('seleksi/hasil/{id}', [SeleksiController::class, 'destroy'])->name('seleksi.destroy');
    });
});
