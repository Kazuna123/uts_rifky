<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success text-light">
        <div class="container">
            <a class="navbar-brand mb-0 h1"><i class="bi bi-shop"></i> Data Master Barang</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link">List Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>
    
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="position-relative">
                    <div class="rounded-circle bg-secondary border border-light d-flex justify-content-center align-items-center" style="width: 150px; height: 150px;">
                        <i class="bi bi-person-fill text-light" style="font-size: 3rem;"></i>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-4">
                <h2 class="mb-3">Bio Data Mahasiswa</h2>
                <div class="row">
                    <div class="col-6">
                        <p>Nama:</p>
                        <p>NIM:</p>
                        <p>Program Studi:</p>
                        <p>Universitas:</p>
                    </div>
                    <div class="col-6">
                        <p>Rifky Adhiansyah S</p>
                        <p>1204220120</p>
                        <p>Sistem Informasi</p>
                        <p>University Telkom Surabaya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>