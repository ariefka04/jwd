<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan Tour GunungDemo</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #f8f9fa; /* Warna background yang lebih terang */
      }
    </style>
  </head>
  <body>
    <h2 class="text-center">GASSKEUN TOUR KE GUNUNG BOLOOO</h2>

    <!-- gambar beranda -->
    <div class="container mt-4">
      <img src="image/gambar2.jpg" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover;" alt="Banner Wisata">
    </div>

    <!-- Tampilan pilihan navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Beranda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pemesanan.php">Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tabel_pesanan.php">Form Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galery.html">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="login.php" aria-disabled="true">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Tampilan card -->
    <div class="container mt-5">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
        <div class="col">
          <div class="card h-100">
            <img src="image/gambar1.jpg" class="card-img-top" alt="Gunung Lawu">
            <div class="card-body text-center">
              <h5 class="card-title">Gunung Lawu</h5>
              <p class="card-text">Gasss Muncak Gunung Lawu Bolo.</p>
              <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/gambar3.jpg" class="card-img-top" alt="Gunung Merbabu">
            <div class="card-body text-center">
              <h5 class="card-title">Gunung Merbabu</h5>
              <p class="card-text">Gasss Muncak Gunung Merbabu Bolo.</p>
              <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/gambar4.jpg" class="card-img-top" alt="Gunung Semeru">
            <div class="card-body text-center">
              <h5 class="card-title">Gunung Semeru</h5>
              <p class="card-text">Gasss Muncak Gunung Semeru Bolo.</p>
              <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/gambar5.jpeg" class="card-img-top" alt="Gunung Rinjani">
            <div class="card-body text-center">
              <h5 class="card-title">Gunung Rinjani</h5>
              <p class="card-text">Gasss Muncak Gunung Rinjani Bolo.</p>
              <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>