@extends('layout.landing')

@section('content')
    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark py-4" style="background-color: #4A0E4E;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logos.png') }}" alt="Smart Village Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('pojokbaca') }}">Pojok Baca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-core" href="{{ route('login') }}">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="header" style="position: relative; background-image: linear-gradient(135deg, #4A0E4E, #D4AF37); background-size: cover; background-position: center; padding: 80px 0; margin-top: 76px;">
        <!-- Overlay dengan Gradien -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(47, 79, 79, 0.8), rgba(119, 136, 153, 0.8)); z-index: 1;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row d-flex align-items-center">
                <div class="col-xl-12 text-center">
                    <h1 style="color: #FFF; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); font-size: 3.5rem; font-weight: bold;"><span>BAGYO LURIK</span></h1>
                    <p style="color: #FFD700; font-size: 1.4rem; font-weight: 500;">Informasi mengenai UMKM Bagyo Lurik di Desa Mlese.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->


    <!-- Main Content -->
    <section class="content py-5" style="background-color: #F5E6D3;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2 style="color: #4A0E4E; border-bottom: 2px solid #D4AF37; padding-bottom: 10px;">Alamat</h2>
                    <p style="color: #333;">Jl. Parkisit, Area Sawah, Mlsee, Kec. Cawas, Kabupaten Klaten, Jawa Tengah 57463</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h2 style="color: #4A0E4E; border-bottom: 2px solid #D4AF37; padding-bottom: 10px;">Lokasi di Google Maps</h2>
                    <div class="iframe-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12169.139293150267!2d110.7057697!3d-7.7445614!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a475f5a111c6b%3A0x31273f92a2a461b5!2sBagyo%20Lurik!5e1!3m2!1sid!2sid!4v1723999115844!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0; position:absolute; top:0; left:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <h2 class="mt-5" style="color: #4A0E4E; border-bottom: 2px solid #D4AF37; padding-bottom: 10px;">Galeri</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="figure">
                        <div class="figure-img">
                            <img src="{{ asset('assets/img/bagyolurik1.jpg') }}" alt="Bagyo Lurik 1" class="img-fluid mb-4 shadow-sm rounded">
                        </div>
                        <h5 class="text-center" style="color: #4A0E4E; font-weight: bold;">Bagyo Lurik 1</h5>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="figure">
                        <div class="figure-img">
                            <img src="{{ asset('assets/img/bagyolurik2.jpg') }}" alt="Bagyo Lurik 2" class="img-fluid mb-4 shadow-sm rounded">
                        </div>
                        <h5 class="text-center" style="color: #4A0E4E; font-weight: bold;">Bagyo Lurik 2</h5>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="figure">
                        <div class="figure-img">
                            <img src="{{ asset('assets/img/bagyolurik3.jpg') }}" alt="Bagyo Lurik 3" class="img-fluid mb-4 shadow-sm rounded">
                        </div>
                        <h5 class="text-center" style="color: #4A0E4E; font-weight: bold;">Bagyo Lurik 3</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4" style="background-color: #4A0E4E;">
        <div class="container text-center text-white">
            <p>&copy; 2024 Smart Village - Desa Mlese. All rights reserved.</p>
        </div>
    </footer>
@endsection

<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<style>
    .navbar-dark .navbar-nav .nav-link {
        color: #FFD700;
        font-weight: 500;
    }
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #FFF;
    }
    .btn-success {
        background-color: #D4AF37;
        border-color: #D4AF37;
    }
    .btn-success:hover {
        background-color: #C19B30;
        border-color: #C19B30;
    }
    .figure-img {
        border: 3px solid #4A0E4E;
        transition: transform 0.3s ease;
    }
    .figure-img:hover {
        transform: scale(1.05);
    }
    .figure-caption h5 {
        color: #4A0E4E;
        font-weight: bold;
    }
</style>