<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('styles')
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column p-3 sidebar" style="height: inherit; min-height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: xx-large;">
                <span class="fw-bold fs-4">BelajarBS</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('home.index') }}" class="nav-link text-white"><i class="bi bi-house-door"></i> Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('master.index') }}" class="nav-link text-white"><i class="bi bi-journal"></i> Proyek Utama</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.index') }}" class="nav-link text-white"><i class="bi bi-box-seam"></i> Layanan Utama</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.index') }}" class="nav-link text-white"><i class="bi bi-box-seam"></i> master court</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-wrench"></i> Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-10 text-dark d-flex overflow-auto" style="height:100vh;">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>
