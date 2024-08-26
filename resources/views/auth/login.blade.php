@extends('layout.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <a href="{{ route('landing') }}" class="d-inline-block mb-3">
                            <img src="{{ asset('assets/img/logos.png') }}" alt="Smart Village Logo" class="img-fluid" style="max-width: 200px;">
                        </a>
                        <h2 class="card-title">Login <span style="color: #28a745;">Smart Village Desa Mlese</span></h2>
                    </div>

                    @if ($message = Session::get('usernotfound'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('loginpost') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Ketikkan Username" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ketikkan Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">MASUK AKUN</button>
                    </form>

                    <div class="text-center mt-4">
                        <p>Belum Punya Akun? <a href="{{ route('register') }}" class="text-primary">Register</a></p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 text-muted">
                <small>&copy; 2024 Smart Village Desa Mlese. All rights reserved.</small>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        border: none;
        border-radius: 15px;
    }
    .form-control {
        border-radius: 25px;
    }
    .btn-primary {
        border-radius: 25px;
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-primary:hover {
        background-color: #218838;
        border-color: #218838;
    }
</style>
@endsection