<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShapeCount - Selamat Datang</title>
    <!-- Icon Page -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/dist/img/icon.png') }}" />
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/home.css') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/hover-min.css') }}">
</head>

<body id="top">
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-primary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand ps-2" href="/">
                <img src="{{ asset('assets/dist/img/icon.png') }}" alt="Logo" width="52"
                    class="d-inline-block align-text-center rounded-3">
                <span class="text-light fw-bold ps-2 ">Shape<span class="text-warning fst-italic">Count</span></span>
            </a>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-4">
                            <a class="nav-link text-light fw-bolder hvr-grow" aria-current="page"
                                href="#top">Home</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link text-light fw-bolder hvr-grow" href="#team">Team</a>
                        </li>
                        <li class="nav-item mx-4 ">
                            <a class="nav-link text-light fw-bolder hvr-grow" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Tutup Navbar -->

    <!-- Header-->
    <div class="container-fluid" id="main-one"
        style="background-image: url('{{ asset('assets/dist/img/body.svg') }}');">
        <div class="row">
            <div class="col-md-6 p-5">
                <div class="title-center">
                    <span class="fs-1 fw-bolder">Kalkulator <i class="bi bi-calculator text-primary"></i></span>
                    <br>
                    <span class="font-monospace fs-3">Bangun Datar & Bangun Ruang</span>
                    <br>
                    <span class="fs-6">Penghitung Luas dari Bangun Datar dan Bangun Ruang, Mudah dan Cepat untuk
                        digunakan dijamin Pekerjaan Rumah Anda Cepat Selesai.</span>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg mt-3 hvr-forward">Get Started &nbsp;<i
                            class="bi bi-arrow-right"></i></button>
                </div>
            </div>
            <div class="col-md-6 sidebar">
                <div class="center-box">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('bangun-datar') }}" class="text-decoration-none">
                                <div class="kotak1 bg-gradient hvr-float-shadow">
                                    <div class="text-center text-white fs-3 font-monospace">
                                        Bangun Datar
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('bangun-ruang') }}" class="text-decoration-none">
                                <div class="kotak2 bg-danger bg-gradient hvr-float-shadow">
                                    <p class="text-center text-light fs-3 font-monospace">
                                        Bangun Ruang
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutup Header -->

    <!-- Section-Team -->
    <div class="container-fluid our-team" style="background-image: url('{{ asset('assets/dist/img/body1.svg') }}');"
        id="team">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center pb-5">
                    <p class="fs-1 fw-bold">Our <span class="text-primary">Team</span></p>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex">
                                        <div class="card container bg-dark bg-gradient fatih"
                                            style="width: 18rem; border-radius:20px">
                                            <br>
                                            <img src="{{ asset('assets/dist/img/fatih.png') }}" class="card-img-top"
                                                alt="fatih.png" style="border-radius:5px ;">
                                            <div class="card-body">
                                                <h4 class="card-title text-white"><b>Muhammad Fatih</b></h4>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                        <div class="card container bg-dark bg-gradient jay"
                                            style="width: 18rem; border-radius:20px">
                                            <br>
                                            <img src="{{ asset('assets/dist/img/jay.png') }}" class="card-img-top"
                                                alt="jay.png" style="border-radius:5px ;">
                                            <div class="card-body">
                                                <h4 class="card-title text-white"><b>Muchamad Zainuri</b></h4>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                        <div class="card container bg-dark bg-gradient nisa"
                                            style="width: 18rem; border-radius:20px">
                                            <br>
                                            <img src="{{ asset('assets/dist/img/nisa.png') }}" class="card-img-top"
                                                alt="nisa.png" style="border-radius:5px ;">
                                            <div class="card-body">
                                                <h4 class="card-title text-white"><b>Nuranisah</b></h4>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="card container bg-dark bg-gradient hudan"
                                            style="width: 18rem; border-radius:20px">
                                            <br>
                                            <img src="{{ asset('assets/dist/img/hudan.png') }}" class="card-img-top"
                                                alt="hudan.png" style="border-radius:5px ;">
                                            <div class="card-body">
                                                <h4 class="card-title text-white"><b>Aa D.A Hudan A.N</b></h4>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                        <div class="card container bg-dark bg-gradient tasya"
                                            style="width: 18rem; border-radius:20px">
                                            <br>
                                            <img src="{{ asset('assets/dist/img/tasya.jpg') }}" class="card-img-top"
                                                alt="tasya.jpg" style="border-radius:5px ;">
                                            <div class="card-body">
                                                <h4 class="card-title text-white"><b>Aulya Natasya</b></h4>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                        <div class="card container bg-dark bg-gradient abrar"
                                            style="width: 18rem; border-radius:20px">
                                            <br>
                                            <img src="{{ asset('assets/dist/img/abrar.png') }}" class="card-img-top"
                                                alt="abrar.png" style="border-radius:5px ;">
                                            <div class="card-body">
                                                <h4 class="card-title text-white"><b>M Abrar Al Arkan</b></h4>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutup Section-Team -->

    <!-- Footer -->
    <footer class="contact" style="background-image: url('{{ asset('assets/dist/img/body2.svg') }}');">
        <div class="container-fluid">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="text-center" id="contact">
                <p class="fs-1 fw-bold"><span class="text-warning">Con</span>tact</p>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-white">
                        <div class="fs-5 p-3 bg-dark rounded-circle">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                    </div>
                    <div class="ps-3">
                        <div class="fw-bold fs-5">Call Us</div>
                        <div class="">+62 813 8180 5291</div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-white">
                        <div class="fs-5 p-3 bg-dark rounded-circle">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                    </div>
                    <div class="ps-3">
                        <div class="fw-bold fs-5">Address</div>
                        <div class="">Jl.Raksa Hijau No.98 Kampung Durian Runtuh, Jakarta</div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="text-white">
                        <div class="fs-5 p-3 bg-dark bg-dark rounded-circle">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                    </div>
                    <div class="ps-3">
                        <div class="fw-bold fs-5">Email</div>
                        <div class="">hello@ShapeCount</div>
                    </div>
                </div>
            </div>
            <form>
                <br>
                <br>
                <div class="form-group row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <label class="fs-5 fw-bolder pb-2">Email</label>
                        <input id="email" name="email" placeholder="Masukan Nama Anda" type="email"
                            class="form-control py-3" required="required">
                    </div>
                    <div class="col-5">
                        <label class="fs-5 fw-bolder pb-2">Nama</label>
                        <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text"
                            class="form-control py-3" required="required">
                    </div>
                    <div class="col-1"></div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <label class="fs-5 fw-bolder pb-2">Pesan</label>
                        <textarea id="pesan" name="pesan" cols="40" rows="5" placeholder="Masukan Pesan.."
                            required="required" class="form-control"></textarea>
                    </div>
                    <div class="col-1"></div>
                </div>
                <br>
                <br>
                <div class="form-group row">
                    <div class="offset-5 col-6">
                        <button name="submit" type="submit"
                            class="btn btn-warning btn-lg text-light hvr-grow">Kirim Pesan</button>
                    </div>
                </div>
            </form>
            <br>
            <br>
            <br>
        </div>
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

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
