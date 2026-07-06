@extends('layouts.app')

@section('title', 'Galeri Paskibra - Paskibra Ganesha')

@section('content')
<div class="container py-5" style="margin-top: 80px;">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold" style="color: #111827; letter-spacing: -1px;">Galeri Foto</h2>
        <p class="text-muted text-lg">Dokumentasi momen-momen berharga dan kegiatan Paskibra Ganesha.</p>
    </div>

    @if($galeris->isEmpty())
        <div class="text-center py-5">
            <div class="text-muted mb-3"><i class="fas fa-camera fa-4x" style="opacity: 0.2;"></i></div>
            <h5 class="text-muted">Belum ada foto di dalam galeri saat ini.</h5>
        </div>
    @else
        <!-- Masonry Grid Style -->
        <div class="gallery-grid">
            @foreach($galeris as $galeri)
            <div class="gallery-item-wrap" data-toggle="modal" data-target="#lightboxModal" onclick="openLightbox('{{ asset('storage/' . $galeri->file_foto) }}', '{{ addslashes($galeri->judul_foto) }}', '{{ \Carbon\Carbon::parse($galeri->tanggal_upload)->format('d M Y') }}')">
                <div class="card bg-dark text-white border-0 shadow-sm" style="border-radius: 1rem; overflow: hidden; cursor: pointer;">
                    <img src="{{ asset('storage/' . $galeri->file_foto) }}" class="card-img gallery-img-public" alt="{{ $galeri->judul_foto }}">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                        <div class="gallery-info p-3">
                            <h5 class="card-title font-weight-bold mb-1" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8); font-size: 1.1rem;">{{ $galeri->judul_foto }}</h5>
                            <p class="card-text mb-0" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8); font-size: 0.85rem;"><i class="far fa-calendar-alt mr-1"></i> {{ \Carbon\Carbon::parse($galeri->tanggal_upload)->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center mt-5">
            {{ $galeris->links() }}
        </div>
    @endif
</div>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightboxModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center position-relative">
                <button type="button" class="close text-white position-absolute" data-dismiss="modal" aria-label="Close" style="top: -30px; right: 0; font-size: 2rem; text-shadow: 0 0 10px rgba(0,0,0,0.5); opacity: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="" id="lightbox-img" class="img-fluid" style="border-radius: 0.5rem; max-height: 85vh; object-fit: contain; background: rgba(0,0,0,0.5);">
                <div class="mt-3 text-white">
                    <h5 id="lightbox-title" class="font-weight-bold mb-1"></h5>
                    <p id="lightbox-date" class="text-white-50 mb-0" style="font-size: 0.9rem;"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* CSS Columns for Pinterest-like Masonry */
    .gallery-grid {
        column-count: 3;
        column-gap: 1.5rem;
    }
    .gallery-item-wrap {
        break-inside: avoid;
        margin-bottom: 1.5rem;
        position: relative;
        transition: transform 0.3s ease;
    }
    .gallery-item-wrap:hover {
        transform: translateY(-5px);
        z-index: 10;
    }
    .gallery-img-public {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }
    .gallery-item-wrap:hover .gallery-img-public {
        transform: scale(1.05);
    }
    .gallery-info {
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.5) 60%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .gallery-item-wrap:hover .gallery-info {
        opacity: 1;
    }
    
    @media (max-width: 991px) {
        .gallery-grid {
            column-count: 2;
        }
    }
    @media (max-width: 575px) {
        .gallery-grid {
            column-count: 1;
        }
        .gallery-info {
            opacity: 1; /* Always show info on mobile */
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%);
        }
    }
</style>

<script>
    function openLightbox(imgSrc, title, date) {
        document.getElementById('lightbox-img').src = imgSrc;
        document.getElementById('lightbox-title').innerText = title;
        document.getElementById('lightbox-date').innerText = date;
    }
</script>
@endsection
