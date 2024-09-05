<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan Tour Gunung</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #f8f9fa; /* Warna background yang lebih terang */
      }
    </style>
  </head>
  <body>
    <h2 class="text-center">GASSKEUN TOUR KE GUNUNG BOLOOO</h2>

    <!-- gambar awal -->
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

    <!-- data pesanan -->
    <br>
    <div class="container">
    <h1>Ini adalah Data Pesanan</h1>

    <!-- tabel pesanan -->
    <div style="margin-top: 30px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pemesan</th>
          <th scope="col">No Telp</th>
          <th scope="col">Durasi</th>
          <th scope="col">Peserta</th>
          <th scope="col">Total Biaya</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>   
      <tbody>

      <?php 
      include 'koneksi.php';
      $data_pesanan = mysqli_query($connect, "SELECT * from pesanan");
      $no = 1; 
      foreach ($data_pesanan as $pesanan) { ?> 
        <tr>
          <td><?php echo $no ; ?></td>
          <td><?php echo $pesanan['nama_pemesan']; ?></td>
          <td><?php echo $pesanan['no_telp']; ?></td>
          <td><?php echo $pesanan['durasi']; ?></td>
          <td><?php echo $pesanan['jmlh_peserta']; ?></td>
          <td><?php echo $pesanan['jumlah']; ?></td>
          <td><a href="edit.php?id=<?php echo $pesanan['id']; ?>"><button type="button" class="btn btn-warning">EDIT</button></a>&nbsp
          <a href="hapus.php?id=<?php echo $pesanan['id']; ?>" ><button type="button" class="btn btn-danger">DELETE</button></a></td>
        </tr>
        <?php $no++ ; }
        ?> 
      </tbody>
    </table>

    <!--button-->
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" onclick="window.location.href='pemesanan.php'">Kembali</button>
    </div>

    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>