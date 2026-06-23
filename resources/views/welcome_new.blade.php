@extends('layouts.app')

@section('title', 'Beranda - Paskibra Ganesha')

@section('content')
<!-- Hero Section -->
<section class="text-center py-16">
    <div class="mb-8">
        <div class="w-24 h-24 bg-red-600 rounded-full flex items-center justify-center mx-auto text-white text-5xl font-bold mb-6">P</div>
    </div>
    <h1 class="text-5xl font-bold text-gray-800 mb-4">Selamat Datang di Paskibra Ganesha</h1>
    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
        Organisasi Paskibra Ganesha adalah wadah bagi para pecinta nilai-nilai Pancasila dan kebangsaan untuk berkembang bersama.
    </p>
    <div class="flex gap-4 justify-center">
        @auth
            <a href="{{ route('dashboard') }}" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                Masuk Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                Login Sekarang
            </a>
            <a href="{{ route('register') }}" class="px-8 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition font-semibold">
                Daftar Calon Anggota
            </a>
        @endauth
    </div>
</section>

<!-- Features Section -->
<section class="py-16">
    <h2 class="text-3xl font-bold text-center mb-12">Fitur Utama</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                <span class="text-2xl">📋</span>
            </div>
            <h3 class="text-xl font-bold mb-3">Manajemen Pendaftaran</h3>
            <p class="text-gray-600">Kelola pendaftaran calon anggota dengan mudah dan transparan.</p>
        </div>

        <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                <span class="text-2xl">📅</span>
            </div>
            <h3 class="text-xl font-bold mb-3">Jadwal Kegiatan</h3>
            <p class="text-gray-600">Pantau jadwal acara dan latihan organisasi secara real-time.</p>
        </div>

        <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                <span class="text-2xl">📸</span>
            </div>
            <h3 class="text-xl font-bold mb-3">Galeri & Berita</h3>
            <p class="text-gray-600">Lihat momen-momen berharga dan berita terbaru organisasi.</p>
        </div>
    </div>
</section>

<!-- Role Information -->
<section class="py-16 bg-white rounded-lg shadow-md p-12">
    <h2 class="text-3xl font-bold text-center mb-12">Peran dalam Organisasi</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="border-l-4 border-red-600 pl-6">
            <h3 class="text-xl font-bold mb-2">Admin</h3>
            <p class="text-gray-700">Mengelola sistem, user, dan aktivitas organisasi secara keseluruhan.</p>
        </div>

        <div class="border-l-4 border-yellow-600 pl-6">
            <h3 class="text-xl font-bold mb-2">Pengurus</h3>
            <p class="text-gray-700">Mengelola pendaftaran, jadwal kegiatan, dan koordinasi dengan anggota.</p>
        </div>

        <div class="border-l-4 border-blue-600 pl-6">
            <h3 class="text-xl font-bold mb-2">Calon Anggota</h3>
            <p class="text-gray-700">Calon anggota yang sedang mengikuti proses seleksi organisasi.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Siap Bergabung?</h2>
    <p class="text-xl text-gray-600 mb-8">Daftarkan diri Anda sebagai calon anggota Paskibra Ganesha hari ini.</p>
    @guest
        <a href="{{ route('register') }}" class="inline-block px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
            Mulai Pendaftaran
        </a>
    @endguest
</section>
@endsection
