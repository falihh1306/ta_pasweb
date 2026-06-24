@extends("layouts.app")

@section("title", "Beranda - Transparansi Paskibraka")

@section("hero")
<section style="background-color: #d10000; color: white; position: relative; overflow: hidden; min-height: calc(100vh - 76px); display: flex; align-items: center; padding-bottom: 10vw;">
    <div class="container-lg position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-md-0">
                <h1 class="fw-bold mb-4" style="font-size: 3.5rem; line-height: 1.1;">Selamat Datang<br>Putra Putri Terbaik<br>Indonesia</h1>
                <p class="mb-4" style="font-size: 1.1rem; max-width: 80%; line-height: 1.6;">
                    Segera daftarkan diri anda sebagai<br>Pasukan Pengibar Bendera Pusaka<br>pada website ini ya!
                </p>
                <!-- Buttons Daftar and Masuk have been removed as requested -->
            </div>
            <div class="col-md-6 text-center position-relative">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Lambang_Paskibraka.svg" alt="Logo Paskibraka" style="max-width: 75%; filter: drop-shadow(0 15px 25px rgba(0,0,0,0.4));">
            </div>
        </div>
    </div>
    
    <!-- Huge PASKIBRAKA text -->
    <div style="position: absolute; bottom: -2vw; left: 0; width: 100%; text-align: center; font-size: 18vw; font-weight: 900; color: white; line-height: 0.75; font-family: 'Arial Black', Impact, sans-serif; z-index: 1;">
        PASKIBRAKA
    </div>
</section>
@endsection

@section("content")
@endsection
