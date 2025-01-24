@extends('template')
@section('title', 'Project')
@section('content-title', 'service')
@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Utama</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hidden {
            display: none;
        }
        body {
            background-color: #f8f9fa; /* Light background for better contrast */
        }
        .sidebar {
            background-color: #343a40; /* Dark sidebar */
            color: white;
        }
        .card {
            border-radius: 15px; /* Rounded corners for cards */
        }
        .card-title {
            font-size: 1.25rem; /* Adjusted font size for title */
        }
        .card-text {
            font-size: 0.9rem; /* Adjusted font size for text */
        }
    </style>
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column p-3 sidebar" style="height: inherit; min-height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: xx-large;"><span class="fw-bold fs-4">BelajarBS</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="home.html" id="rumah" class="nav-link text-white"><i class="bi bi-house-door"></i> Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="project.html" id="project" class="nav-link text-white"><i class="bi bi-journal"></i> Proyek Utama</a>
                </li>
                <li class="nav-item">
                    <a href="service.html" id="service" class="nav-link text-white"><i class="bi bi-box-seam"></i> Layanan Utama</a>
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
                <div class="row">
                    <h4 class="p-3 m-3">Layanan Utama</h4>
                </div>
                <div class="row">    
                    <div class="row">
                        <div class="row p-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Desainer Web UI/UX</h5>
                                        <p class="card-text">Kami membantu membuat desain antarmuka yang menarik dan mudah digunakan untuk website Anda.</p>
                                        <a href="#" class="btn btn-success">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pengembang Front-End</h5>
                                        <p class="card-text">Kami membangun tampilan depan website yang responsif dan menarik untuk pengalaman pengguna yang lebih baik.</p>
                                        <a href="#" class="btn btn-success">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pengembang Back-End</h5>
                                        <p class="card-text">Kami mengelola dan mengembangkan server serta database untuk mendukung website Anda.</p>
                                        <a href="#" class="btn btn-success">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pengembang Full-stack</h5>
                                        <p class="card-text">Kami ahli dalam mengembangkan aplikasi web dari awal hingga akhir, mengintegrasikan front-end dan back-end.</p>
                                        <a href="#" class="btn btn-success">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal" class="fade" aria-hidden="true"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>
