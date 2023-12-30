<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hitung Luas</title>
    <!-- Icon Page -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/dist/img/icon.png') }}" />
    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body id="top" style="background-color: #F4F9FD">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand ps-2" href="/">
                <img src="{{ asset('assets/dist/img/icon.png') }}" alt="Logo" width="52"
                    class="d-inline-block align-text-center rounded-3" />
                <span class="text-light fw-bold ps-2">Shape<span class="text-warning fst-italic">Count</span></span>
            </a>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-4">
                            <a class="nav-link text-light fw-bolder hvr-grow" href="{{route('bangun-datar')}}">Bangun Datar</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-light fw-bolder hvr-grow" href="{{route('bangun-ruang')}}">Bangun Ruang</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-light fw-bolder hvr-grow" href="{{url('/')}}#team">Team</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-light fw-bolder hvr-grow" href="{{url('/')}}#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Tutup Navbar -->

    <!-- Section -->
    <div class="container-fluid pb-5"
        style="background-image: url('{{ asset('assets/dist/img/body3.svg') }}');background-repeat: no-repeat;background-size: cover;">
        <div class="row py-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <br>
                        <br>
                        <br>
                        <div class="title pb-4">
                            <p class="fs-2 text-center text-primary fw-bold">Hitung Luas Bola</p>
                        </div>
                        <!-- Form Input -->
                        <form method="POST" action="{{ route('bola.hitungLuas') }}#hasil">
                            @csrf
                            <div class="form-floating mb-5">
                                <input type="number" class="form-control border-1 border-dark" id="jarijari"
                                    @if (isset($data['jarijari'])) value="{{ $data['jarijari'] }}" @endif name="jarijari"
                                    placeholder="Jari-Jari">
                                <label for="jarijari">Jari-Jari</label>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4">
                                    <button name="submit" type="submit"
                                        class="btn btn-warning btn-lg text-white fw-bold px-5 py-2">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- Tutup Form Input -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card border-2 border-dark shadow bg-warning" style="width: 25rem">
                            <img src="{{ asset('assets/dist/img/BangunRuang/Bola.png') }}" alt="shape.png" class="p-3 rounded-5 ">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <br>

        <!-- cek apakah inputan kosong atau tidak -->
        @if (isset($data['luas']) && isset($data['jarijari']))
            <!-- Hasil Output -->
            <div class="row pt-3 pb-4" id="hasil">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card border-success">
                        <div class="card-header text-center fs-5 fw-bold bg-success-subtle">
                            Hasil
                        </div>
                        <div class="card-body">
                            <div class="text-end mb-3">
                                <a href="{{ route('bola.showPage') }}" class="btn btn-success rounded-3"><i
                                        class="bi bi-arrow-clockwise"></i></a>
                            </div>
                            <!-- Table Hasil Output-->
                            <table class="table table-bordered table-hover border-dark">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">Properti</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>Jari-Jari</td>
                                        <td><?= $data['jarijari'] ?> cm</td>
                                    </tr>
                                    <tr>
                                        <td>Rumus</td>
                                        <td>4 x π x r<sup>2</sup></td>
                                    </tr>
                                    <tr class="table-success border-2 border-success">
                                        <td>Luas</td>
                                        <td><?= $data['luas'] ?> cm<sup>2</sup></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Tutup Table Hasil Output -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- Tutup Hasil Output -->
        @endif
    </div>
    <!-- Tutup Section -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid bg-primary bg-gradient p-3">
            <div class="row text-white">
                <div class="col-8 text-start">
                    <strong>
                        &copy;2024 Copyright
                        <a class="text-white text-decoration-none" href="https://github.com/MuchamadZainuri"
                            target="_blank">ShapeCount@FourGroup</a>.
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
