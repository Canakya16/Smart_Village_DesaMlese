<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/logos.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">

    <title>Smart Village - Mlese</title>

    <!-- Tambahkan ini di layout.blade.php atau di bagian head HTML Anda -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .navbar-brand img {
            max-width: 700px; /* Sesuaikan ukuran logo di sini */
            height: 75px;
        }

        .navbar-nav {
            margin-left: auto; /* Agar item di navbar terletak di sebelah kanan */
        }

        .navbar-nav .nav-item {
            margin-left: 15px; /* Menambahkan spasi antar item navbar */
        }

        @media (max-width: 768px) {
            .navbar-brand img {
                max-width: 80px; /* Ukuran logo lebih kecil untuk perangkat mobile */
            }

            .navbar-nav {
                margin-left: 0; /* Menghilangkan margin di perangkat mobile */
                text-align: center; /* Agar item navbar terpusat di perangkat mobile */
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .float-whatsapp {
            position: fixed;
            width: auto;
            height: auto;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .float-whatsapp:hover {
            background-color: #128C7E;
            color: #FFF;
            text-decoration: none;
        }

        .my-float-whatsapp {
            margin-right: 10px;
        }

        .float-text {
            font-size: 16px;
            font-weight: bold;
            display: none;
        }

        @media (min-width: 768px) {
            .float-text {
                display: inline;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark py-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logos.png') }}" class="d-inline-block align-top" alt="Smart Village Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-uppercase">
                    @yield('nav')
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Header -->
    @yield('content')

    <!-- JS -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/all.js"></script>

    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/script.js"></script>

    <a href="https://wa.me/6285156165458" class="float-whatsapp" target="_blank">
        <i class="fab fa-whatsapp my-float-whatsapp"></i>
        <span class="float-text">Butuh bantuan? Chat kami!</span>
    </a>

</body>

</html>