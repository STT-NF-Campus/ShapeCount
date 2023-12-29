<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShapeCount - Bangun Datar</title>
    <!-- Icon Page -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/dist/img/icon.png') }}" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/dist/css/styles.css') }}" rel="stylesheet" />
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/Project-Grid-image.css') }}">
</head>

<body id="page-top">
    <!-- Header-->
    <a href="{{ url('/') }}" class="text-decoration-none">
        <header class="bg-gradient bg-primary py-5">
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
            <span class="bg-dark bg-gradient text-white fs-4 fw-bolder px-5 rounded-5">Bangun Datar</span>
        </div>
    </div>
    <!-- Tutup Header -->

    <!-- Section-BangunDatar -->
    <section class="py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('persegi.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-primary text-white">Persegi</h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('segitiga.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-warning text-white">Segitiga</h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('lingkaran.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-danger text-white">Lingkaran</h2>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('persegipanjang.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-danger text-white">Persegi Panjang
                        </h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('jajargenjang.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-primary text-white">Jajargenjang</h2>
                    </a>
                </div>
                <div class="col-4 " data-bss-hover-animate="pulse">
                    <a href="{{ route('belahketupat.showPage') }}" class="text-decoration-none">
                        <h2 class="px-lg-5 my-5 py-5 mx-2 rounded-3 bg-gradient bg-warning text-white">Belah Ketupat
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup Section-BangunDatar -->

    <!-- Footer-->
    <footer class="">
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
    </footer>
    <!-- Tutup Footer -->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/dist/js/scripts.js') }}"></script>
    <!-- Start Bootstrap Form JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Animation JS -->
    <script src="{{ asset('assets/dist/js/bs-init.js') }}"></script>
</body>

</html>
