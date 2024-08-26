@extends('layout.verifikator')

@section('nav')

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('verifikator.home') }}">Beranda</a>
    </li>

@endsection

@section('notifikasi')
    <li class="nav-item dropdown text-lowercase">
        @php
            $jumlah = 0;
        @endphp
        @foreach ($notif as $data)
            @php
                $jumlah = $jumlah + $data->jumlah;
            @endphp
        @endforeach
        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-bell"></i> <span class="badge badge-pill badge-core">{{ $jumlah }}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="transform: translateX(-39%);">


            @foreach ($notif as $data)
                @if ($data->jumlah != '0')
                    @if ($data->jenis == 'akun')
                        <a href="{{ route('daftar_masyarakat') }}" class="dropdown-item"><span
                                class="badge badge-pill badge-core">{{ $data->jumlah }} </span> {{ $data->pesan }}</a>
                    @elseif($data->jenis == "Pengaduan")
                        <a href="{{ route('daftar_pengaduan') }}" class="dropdown-item"><span
                                class="badge badge-pill badge-core">{{ $data->jumlah }} </span> {{ $data->pesan }}</a>
                    @elseif($data->jenis == "Pengajuan")
                        <a href="{{ route('daftar_pengajuan') }}" class="dropdown-item"><span
                                class="badge badge-pill badge-core">{{ $data->jumlah }} </span> {{ $data->pesan }}</a>
                    @endif
                @endif
            @endforeach

            @if ($jumlah == '0')

                <p style="margin: 10px"> Belum ada pemberitahuan </p>
            @endif

        </div>
    </li>
@endsection

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="mb-4">Selamat Datang, Verifikator</h2>
    
    @if (count($berita) != 0)
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Berita Terkini</h5>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($berita as $data)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <img src="{{ Storage::url('img/' . $data->gambar) }}" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-8">
                                <h5>{{ $data->judul_berita }}</h5>
                                <p>{{ Str::limit($data->detail_berita, 100, '...') }}
                                    @if (Str::length($data->detail_berita) >= 100)
                                    <a href="#" data-toggle="modal" data-target="#Selengkapnya{{ $data->id }}">Selengkapnya</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Verifikasi User (Masyarakat)</h5>
                    <p class="card-text">Lakukan verifikasi akun pengguna baru.</p>
                    <a href="{{ route('daftar_masyarakat') }}" class="btn btn-primary">Verifikasi User</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Verifikasi Pengajuan Surat</h5>
                    <p class="card-text">Proses pengajuan surat dari masyarakat.</p>
                    <a href="{{ route('daftar_pengajuan') }}" class="btn btn-primary">Verifikasi Pengajuan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Verifikasi Pengaduan Layanan</h5>
                    <p class="card-text">Tangani pengaduan layanan dari masyarakat.</p>
                    <a href="{{ route('daftar_pengaduan') }}" class="btn btn-primary">Verifikasi Pengaduan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk detail berita -->
@foreach ($berita as $data)
<div class="modal fade" id="Selengkapnya{{ $data->id }}" tabindex="-1" aria-labelledby="SelengkapnyaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SelengkapnyaLabel">{{ $data->judul_berita }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $data->detail_berita }}
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
