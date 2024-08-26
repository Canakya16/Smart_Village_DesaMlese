@extends('layout.landing')

@section('nav')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('landing') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pojokbaca') }}">Pojok Baca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-core" href="{{ route('login') }}">masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <section class="header bg-dark text-white py-5">
        <div class="container">
            <h1 class="display-4 text-center">PROFIL</h1>
            <p class="lead text-center">Temukan informasi mengenai Profil Desa Mlese.</p>
        </div>
    </section>

    <section class="content py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-instansi-tab" data-toggle="tab" href="#nav-instansi" role="tab" aria-controls="nav-instansi" aria-selected="true">Profil Instansi</a>
                                    <a class="nav-item nav-link" id="nav-visi-misi-tab" data-toggle="tab" href="#nav-visi-misi" role="tab" aria-controls="nav-visi-misi" aria-selected="false">Visi & Misi</a>
                                    <a class="nav-item nav-link" id="nav-peta-tab" data-toggle="tab" href="#nav-peta" role="tab" aria-controls="nav-peta" aria-selected="false">Peta Desa</a>
                                    <a class="nav-item nav-link" id="nav-umkm-tab" data-toggle="tab" href="#nav-umkm" role="tab" aria-controls="nav-umkm" aria-selected="false">UMKM Tenun Lurik</a>
                                </div>
                            </nav>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-instansi" role="tabpanel" aria-labelledby="nav-instansi-tab">
                                    <h4>Profil Instansi</h4>
                                    <p><strong>Nama Instansi:</strong> Desa Mlese</p>
                                    <p><strong>Alamat:</strong> Dusun II, Mlese, Kec. Cawas, Kabupaten Klaten, Jawa Tengah 57463</p>
                                </div>
                                <div class="tab-pane fade" id="nav-visi-misi" role="tabpanel" aria-labelledby="nav-visi-misi-tab">
                                    <h4>Visi</h4>
                                    <p>Terwujudnya Desa Mlese yang Maju Mandiri Berdaya saing, sehat, damai, iman, amam dan sejahtera.</p>
                                    <h4>Misi</h4>
                                    <ul>
                                        <li>Mewujudkan pemerintahan desa yang tertib dan berwibawa.</li>
                                        <li>Mewujudkan Sarana dan Prasarana Desa yang memadai.</li>
                                        <li>Mewujudkan Keamanan dan Kesejahteraan masyarakat desa.</li>
                                        <li>Mengupayakan pemeliharaan jalan lingkungan/pedukuhan.</li>
                                        <li>Mewujudkan sarana dan prasarana pertanian.</li>
                                        <li>Meningkatkan derajad kesehatan masyarakat desa Mlese.</li>
                                        <li>Meningkatkan sarana prasarana dasar pemukiman.</li>
                                        <li>Melestarikan Adat istiadat dan budaya asli desa.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-peta" role="tabpanel" aria-labelledby="nav-peta-tab">
                                    <h4>Peta Desa</h4>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.562599068302!2d110.68333697431642!3d-7.759954899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3398aadb6517%3A0x580dea8c6a5a1a0!2sMlese%2C%20Kec.%20Cawas%2C%20Kabupaten%20Klaten%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1649815796254!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-umkm" role="tabpanel" aria-labelledby="nav-umkm-tab">
                                    <h4>Edupark UMKM Tenun Lurik</h4>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Lawe Jowo</h5>
                                                    <p class="card-text">Dusun II, Mlese, Kec. Cawas, Kabupaten Klaten, Jawa Tengah 57463. No. 0815-4847-6182</p>
                                                    <a href="https://luriklawejowo.blogspot.com/" class="btn btn-primary" target="_blank">Kunjungi Website</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bagyo Lurik</h5>
                                                    <p class="card-text">Jl. Parikesit, Area Sawah, Mlese, Kec. Cawas, Kabupaten Klaten, Jawa Tengah 57463. No. 0857-2548-5557</p>
                                                    <a href="{{ route('umkm.bagyolurik') }}" class="btn btn-primary" target="_blank">Kunjungi Website</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Sri Rejeki Tek</h5>
                                                    <p class="card-text">Deskripsi singkat tentang UMKM C.</p>
                                                    <a href="http://website-umkm-c.com" class="btn btn-primary" target="_blank">Kunjungi Website</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
    .nav-tabs .nav-link {
        color: #495057;
    }
    .nav-tabs .nav-link.active {
        color: #007bff;
    }
    @media (max-width: 768px) {
        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .nav-tabs .nav-item {
            flex: 0 0 auto;
        }
    }
</style>
@endsection