@extends('template')
@section('title', 'Project')
@section('content-title', 'service')
@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Ubah latar belakang */
        }
        .sidebar {
            background-color: #343a40; /* Ubah warna sidebar */
        }
        .text-white {
            font-size: 1.1rem; /* Sesuaikan ukuran font */
        }
        .table th, .table td {
            font-size: 0.9rem; /* Sesuaikan ukuran font tabel */
        }
        .card-header h5 {
            font-size: 1.2rem; /* Sesuaikan ukuran font header kartu */
        }
        .modal-title {
            font-size: 1.5rem; /* Sesuaikan ukuran font modal */
        }
        .form-label {
            font-size: 1rem; /* Sesuaikan ukuran font label */
        }
    </style>
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column p-3 text-white sidebar" style="height: inherit; min-height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: xx-large;"><span class="fw-bold">BelajarBS</span></a>
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
                    <h4 class="p-3 m-3">Proyek Utama</h4>
                </div>
                <div class="row">    
                    <div id="vice" class="col-md-8">
                        <div class="card shadow">
                            <div class="card-header"><h6>Data Proyek</h6></div>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col" style="width: 50%;">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Website Indonesia</td>
                                            <td>Website ini dikerjakan oleh organisasi tim gelap </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye-fill"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Game Defense</td>
                                            <td>Bahwasannya game ini sangat susah untuk dipelajari oleh penggemar game!</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye-fill"></i></a>
                                                <a href="#" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>  
                                
                                <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Proyek</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan perubahan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="form-section" class="col-md-4"> 
                        <div class="card">
                            <div class="card-header"><h5>Formulir</h5></div>
                            <div class="card-body">
                                <form action="">
                                    <label class="form-label" for="">Jenis Layanan</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">Web</option>
                                        <option value="">Mobile</option>
                                        <option value="">Desktop</option>
                                    </select>
                                    <label class="form-label" for="">Nama Proyek</label>
                                    <input type="text" class="form-control" minlength="5" required>
                                    <label class="form-label" for="">Tanggal Proyek</label>
                                    <input type="date" class="form-control">
                                    <label class="form-label" for="">Gambar Proyek</label>
                                    <input type="file" class="form-control">
                                    <label class="form-label" for="">Deskripsi</label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                    <label class="form-label" for="">Status Proyek</label>
                                    <div class="form-check">
                                        <input name="status" type="radio" class="form-check-input" id="finish">
                                        <label for="finish" class="form-check-label">Selesai</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="status" type="radio" class="form-check-input" id="done">
                                        <label for="done" class="form-check-label">Dikerjakan</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                                    <button type="reset" class="btn btn-warning mt-3">Hapus</button>
                                </form>
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
