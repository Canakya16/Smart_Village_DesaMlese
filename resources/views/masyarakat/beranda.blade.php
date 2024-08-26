@extends('layout.masyarakat')

@section('nav')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Request::is('masyarakat/home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('masyarakat.home') }}">Beranda</a>
        </li>
        <li class="nav-item {{ Request::is('pengajuan_surat') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pengajuan_surat') }}">Pengajuan</a>
        </li>
        <li class="nav-item {{ Request::is('pengaduan_layanan') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pengaduan_layanan') }}">Pengaduan</a>
        </li>
    </ul>
@endsection

@section('content')
<div class="container mt-5 pt-5">
    @if (count($berita) != 0)
        <div id="carouselBerita" class="carousel slide shadow" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($berita as $index => $item)
                    <li data-target="#carouselBerita" data-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner rounded">
                @foreach ($berita as $data)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row align-items-center bg-light p-4">
                            <div class="col-md-6">
                                <img src="{{ Storage::url('img/' . $data->gambar) }}" class="img-fluid rounded" alt="{{ $data->judul_berita }}">
                            </div>
                            <div class="col-md-6">
                                <h3 class="font-weight-bold">{{ $data->judul_berita }}</h3>
                                <p class="text-muted">{{ Str::limit($data->detail_berita, 150, '...') }}</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#beritaModal{{ $data->id }}">
                                    Baca Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselBerita" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselBerita" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endif
</div>

@foreach ($berita as $data)
    <div class="modal fade" id="beritaModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="beritaModalLabel{{ $data->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="beritaModalLabel{{ $data->id }}">{{ $data->judul_berita }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ Storage::url('img/' . $data->gambar) }}" class="img-fluid mb-3 rounded" alt="{{ $data->judul_berita }}">
                    <p>{{ $data->detail_berita }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Langkah Pengajuan Surat</h5>
                </div>
                <div class="card-body">
                    <div id="accordionPengajuan">
                        @foreach(['Pilih menu pengajuan pada navbar', 'Isi formulir pengajuan surat', 'Cek status pengajuan surat'] as $index => $step)
                            <div class="card mb-2 border-0">
                                <div class="card-header bg-light" id="headingPengajuan{{ $index }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapsePengajuan{{ $index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapsePengajuan{{ $index }}">
                                            Langkah {{ $index + 1 }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsePengajuan{{ $index }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="headingPengajuan{{ $index }}" data-parent="#accordionPengajuan">
                                    <div class="card-body">
                                        {{ $step }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('pengajuan_surat') }}" class="btn btn-primary btn-block">Lakukan Pengajuan Surat</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Langkah Pengaduan Layanan</h5>
                </div>
                <div class="card-body">
                    <div id="accordionPengaduan">
                        @foreach(['Pilih menu pengaduan pada navbar', 'Isi formulir pengaduan layanan', 'Cek status pengaduan'] as $index => $step)
                            <div class="card mb-2 border-0">
                                <div class="card-header bg-light" id="headingPengaduan{{ $index }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapsePengaduan{{ $index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapsePengaduan{{ $index }}">
                                            Langkah {{ $index + 1 }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsePengaduan{{ $index }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="headingPengaduan{{ $index }}" data-parent="#accordionPengaduan">
                                    <div class="card-body">
                                        {{ $step }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('pengaduan_layanan') }}" class="btn btn-success btn-block">Lakukan Pengaduan Layanan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @if ($message = Session::get('success'))
        <script>
            swal("{{ $message }}", " ", "success");
        </script>
    @elseif($message = Session::get('duplicate'))
        <script>
            swal("{{ $message }}", " ", "error");
        </script>
    @endif
@endsection