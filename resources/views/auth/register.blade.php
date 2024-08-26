@extends('layout.auth')

@section('title')
    <title>Smart Village - REGISTER</title>
@endsection

@section('nav')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logos.png" width="236" height="77" class="d-inline-block align-top" alt="logoSleman">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <span class="nav-link nav-link-register">
                        <a href="{{ route('login') }}"> Login</a>
                    </span>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End of Navbar -->
@endsection

@section('content')
    <section class="my-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Register <span class="text-success">- Smart Village Desa Mlese</span></h4>

                            @if ($message = Session::get('usernotfound'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <form method="POST" enctype="multipart/form-data" action="{{ route('registerpost') }}" class="my-login-validation">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required autofocus maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="jenis_kelamin" required>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki - Laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="status_perkawinan" required>
                                            <option value="">Status Perkawinan</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Cerai">Cerai</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="dusun" placeholder="Dusun / Apabila tidak ada, beri tanda -" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="rt" placeholder="RT / Apabila tidak ada, beri tanda -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="rw" placeholder="RW / Apabila tidak ada, beri tanda -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="agama" required>
                                            <option value="">Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katholik">Katholik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Tidak Memiliki Agama">Tidak Memiliki Agama</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="kk" placeholder="Nomor KK" required maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="username" placeholder="username" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required>
                                            @error('password')
                                            <div class="alert alert-danger">{{ "Mohon periksa password" }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder=" ketik ulang password">
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-success btn-block">REGISTER AKUN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <small class="text-muted">Copyright &copy; 2024 &mdash; Smart Village Desa Mlese</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
    body {
        background-color: #f8f9fa;
        padding-top: 100px;
    }
    .card {
        border: none;
        border-radius: 15px;
    }
    .form-control {
        border-radius: 10px;
    }
    .btn-success {
        border-radius: 25px;
    }
    @media (max-width: 768px) {
        body {
            padding-top: 80px;
        }
        .card-body {
            padding: 1.25rem;
        }
    }
</style>
@endsection