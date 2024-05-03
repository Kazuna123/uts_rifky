<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container text-center my-5">
       
          <h1 class="text-white mb-4 display-4 fw-bold">WELCOME</h1>
          <div class="card bg-light text-dark shadow">
            <div class="card-body">
              <p class="lead mb-4"><strong>Biodata Mahasiswa:</strong></p>
              <ul class="list-unstyled">
                <li><strong>Nama:</strong> Rifky Adhiansyah S</li>
                <li><strong>Kelas:</strong> SI 05-03</li>
                <li><strong>NIM:</strong> 1204220120</li>
                <li><strong>Prodi:</strong> Sistem Informasi</li>
                <li><strong>Kampus:</strong> University Telkom Surabaya</li>
              </ul>
            </div>
          </div>
          <a class="btn btn-dark bi bi-house-check-fill mt-2" href="<?php echo e(route('home')); ?>"> Home</a>
        </div>
      </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\Administrator\masterBarangUts\resources\views/welcome.blade.php ENDPATH**/ ?>