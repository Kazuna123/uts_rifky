<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>
    

    <div class="bg-primary text-white text-center py-5">
        <h1 class="display-4 fw-bold">Welcome to Website</h1>
        
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <h2 id="products" class="text-center mb-5">Products</h2>
            <div class="card h-100 shadow">
              <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="card-footer">
                <a class="btn btn-primary btn-sm" href="#">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h2 id="about" class="text-center mb-5">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
          </div>
        </div>
      </div>


    @vite('resources/js/app.js')
</body>
</html>
