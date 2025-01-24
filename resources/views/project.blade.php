@extends('template')
@section('title', 'Project')
@section('content-title')
@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .hidden {
        display: none;
      }
      body {
          font-size: 16px; /* Ukuran huruf dasar */
      }
      .sidebar {
          background-color: #003366; /* Biru tua */
      }
      .sidebar a {
          font-size: 18px; /* Ukuran huruf untuk tautan */
      }
      .card-header h1 {
          font-size: 24px; /* Ukuran huruf untuk judul kartu */
      }
      .card-body h5 {
          font-size: 20px; /* Ukuran huruf untuk judul layanan */
      }
    </style>
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column p-3 text-white sidebar" style="height: inherit; min-height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: x-large;"><span class="fw-bold fs-4">BelajarBS</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="home.html" id="rumah" class="nav-link text-white"><i class="bi bi-house-door"></i> Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="project.html" id="project" class="nav-link text-white"><i class="bi bi-journal"></i> Proyek Utama</a>
                </li>
                <li class="nav-item">
                    <a href="service.html" id="Service" class="nav-link text-white"><i class="bi bi-box-seam"></i> Layanan Utama</a>
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
                    <div class="col-md-10 text-dark d-flex" style="height:100vh;">
                        <div class="container-fluid">
                            <div class="column">
                                <div class="col-md-12 pe-3 mt-3 ps-3">
                                    <!-- proyek -->
                                    <div class="card">
                                        <div class="card-header"><h1>Nama Proyek</h1></div>
                                        <div class="card-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Nama Proyek</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Desain Web</td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-success">Ubah</a>
                                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Database</td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-success">Ubah</a>
                                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- layanan -->
                                    <div class="card mt-3">
                                        <div class="card-header"><h1><span>Ulasan Layanan</span></h1></div>
                                        <div class="card-body">
                                            <div class="row p-3">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Desainer UI/UX</h5>
                                                            <p class="card-text">Kami menawarkan desain antarmuka yang menarik dan pengalaman pengguna yang optimal.</p>
                                                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Pengembang Front-End</h5>
                                                            <p class="card-text">Menciptakan tampilan yang responsif dan interaktif untuk website Anda.</p>
                                                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Pengembang Back-end</h5>
                                                            <p class="card-text">Mengelola server dan database untuk memastikan kinerja optimal.</p>
                                                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Pengembang Full-stack</h5>
                                                            <p class="card-text">Mampu menangani proyek dari sisi depan hingga belakang.</p>
                                                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>
