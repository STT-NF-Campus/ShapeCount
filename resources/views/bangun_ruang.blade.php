<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShapeCount - Bangun Ruang</title>
    <!-- Icon Page -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/dist/img/icon.png') }}" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/Project-Grid-image.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/styles.css') }}">
</head>

<body>
    <!-- Header-->
    <a href="{{ url('/') }}" class="text-decoration-none">
        <header class="bg-primary bg-gradient py-5">
            <div class="container px-3 px-lg-4 my-4">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder pb-4">Shape<span class="fst-italic text-warning">Count</span></h1>
                    <br>
                    <br>
                </div>
            </div>
        </header>
    </a>
    <div class="garis-container">
        <div class="garis"></div>
        <div class="tulisan-di-tengah">
            <span class="bg-dark bg-gradient text-white fs-4 fw-bolder px-5 rounded-5">Bangun Ruang</span>
        </div>
    </div>
    <!-- Tutup Header -->

    <!-- Section-BangunRuang -->
    <section class="py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('kubus.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-primary text-white">Kubus</h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('tabung.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-warning text-white">Tabung</h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('balok.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-danger text-white">Balok</h2>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('kerucut.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-danger text-white">Kerucut
                        </h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('limas.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-primary text-white">Limas</h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('bola.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-warning text-white">Bola
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup Section-BangunRuang -->

    <!-- Footer -->
    <div class="container-fluid bg-primary bg-gradient p-3">
        <div class="row text-white">
            <div class="col-8 text-start">
                <strong>
                    &copy;2024 Copyright <a class="text-white text-decoration-none"
                        href="https://github.com/MuchamadZainuri" target="_blank">ShapeCount@FourGroup</a>.
                </strong>
            </div>
            <div class="col">
                <p class="m-0 fw-bold">Syarat & Ketentuan</p>
            </div>
            <div class="col">
                <p class="m-0 fw-bold">Kebijakan Privasi</p>
            </div>
        </div>
    </div>
    <!-- Tutup Footer -->

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animation JS -->
    <script src="{{ asset('assets/dist/js/bs-init.js') }}"></script>
</body>

</html>
