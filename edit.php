<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan JWD</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script>
      // Fungsi Untuk Memilih Paket dari Combo Box
      function pilihPaket(pkt) {
        var selectedpaket = "";
        var jumlahPaket = 0;
        var potongan = 0;
        var hargaPaket = 0;
        //nilai input text durasi
        var durasi = document.getElementById("durasi").value;
        //nilai input peserta
        var peserta = document.getElementById("peserta").value;

        // Hitung panjang array dan tentukan potongan diskon
        for (i = 0; i < pkt.paket.length; i++) {
          if (pkt.paket[i].checked) {
            selectedpaket += pkt.paket[i].value + " ";
            //menentukan potongan, dibagi 3 karena masuk dalam perulangan
            jumlahPaket += pkt.paket.length / 3;
            //menentukan diskon, pilih 2 paket diberikan diskon 5% jika 3 paket diskon 10%
            potongan = (jumlahPaket - 1) * 5;
          }
        }

        // Menentukan harga paket berdasarkan kombinasi yang dipilih
        if (pkt.paket[0].checked && pkt.paket[1].checked && pkt.paket[2].checked) {
          hargaPaket = 2000000;
        } else if (pkt.paket[0].checked && pkt.paket[1].checked) {
          hargaPaket = 1500000;
        } else if (pkt.paket[0].checked && pkt.paket[2].checked) {
          hargaPaket = 1500000;
        } else if (pkt.paket[1].checked && pkt.paket[2].checked) {
          hargaPaket = 1000000;
        } else if (pkt.paket[1].checked) {
          hargaPaket = 500000;
        } else if (pkt.paket[2].checked) {
          hargaPaket = 500000;
        } else if (pkt.paket[0].checked) {
          hargaPaket = 1000000;
        }

        // Menghitung total biaya dengan diskon
        var total = durasi * peserta * hargaPaket - ((durasi * peserta * hargaPaket) * (potongan / 100));

        // Menampilkan hasil
        document.getElementById("pilihan").value = selectedpaket.trim();
        document.getElementById("diskon").value = potongan;
        document.getElementById("harga_paket").value = hargaPaket;
        document.getElementById("total_biaya").value = total;
      }
    </script>
  </head>

  <!--batas logic coy-->

  <body>
    <h2 class="text-center">GASS PESAN BOLOOO</h2>

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

<!-- bagian db -->
<?php 
    include ("koneksi.php");
    $id = $_GET['id']; //ambil id yang dikirim dari halaman tabel pesanan

    $data = mysqli_query($connect, "SELECT * from pesanan WHERE id='$id'");
    $row = mysqli_fetch_assoc($data);
    //var_dump($row);

?>

<!-- form pemesanan -->
<h2 class="text-center">Pemesanan Tour Gunung</h2>
<br>
<form action="kirim_data.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-center">Silahkan Isikan Data Pemesanan Anda</h4>
            <div class="col-6">

                <!-- Nama Pemesan -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="nama" value="<?php echo isset($row['nama_pemesan']) ? $row['nama_pemesan'] : ''; ?>">
                </div>

                <!-- Nomor HP -->
                <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Nomor HP" name="nohp" value="<?php echo isset($row['no_telp']) ? $row['no_telp'] : ''; ?>">
                </div>

                <!-- Durasi Perjalanan -->
                <label for="durasi" class="form-label">Durasi Perjalanan</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="durasi" placeholder="0" name="durasi" value="<?php echo isset($row['durasi']) ? $row['durasi'] : ''; ?>" required>
                    <span class="input-group-text" id="basic-addon2">Hari</span>
                </div>

                <!-- Jumlah Peserta -->
                <label for="peserta" class="form-label">Jumlah Peserta</label> &nbsp;
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="peserta" name="peserta" value="<?php echo isset($row['jmlh_peserta']) ? $row['jmlh_peserta'] : ''; ?>" required>
                    <span class="input-group-text" id="basic-addon2">Orang</span>
                </div>

                <!-- Paket Perjalanan -->
                <label for="paket" class="form-label">Paket Perjalanan</label><br>
                <div class="form-check form-check-inline">
                    <input name="paket[]" class="form-check-input" type="checkbox" id="penginapan" value="P" <?php echo (isset($row['paket']) && strpos($row['paket'], 'P') !== false) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="penginapan">Penginapan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input name="paket[]" class="form-check-input" type="checkbox" id="transportasi" value="T" <?php echo (isset($row['paket']) && strpos($row['paket'], 'T') !== false) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="transportasi">Transportasi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input name="paket[]" class="form-check-input" type="checkbox" id="makan" value="M" <?php echo (isset($row['paket']) && strpos($row['paket'], 'M') !== false) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="makan">Makan</label>
                </div>

                <!-- Diskon -->
                <label for="diskon" class="form-label">Diskon</label> &nbsp;
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="diskon" placeholder="0" name="diskon" disabled value="<?php echo isset($row['diskon']) ? $row['diskon'] : ''; ?>">
                    <span class="input-group-text" id="basic-addon2">%</span>
                </div>

                <!-- Harga Paket -->
                <label for="harga_paket" class="form-label">Harga Paket</label><br>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" name="harga_paket" id="harga_paket" disabled value="<?php echo isset($row['harga']) ? $row['harga'] : ''; ?>">
                    <span class="input-group-text">.00</span>
                </div>

                <!-- Jumlah Tagihan -->
                <label for="total_biaya" class="form-label">Jumlah Tagihan</label><br>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" name="total_biaya" id="total_biaya" disabled value="<?php echo isset($row['jumlah']) ? $row['jumlah'] : ''; ?>">
                    <span class="input-group-text">.00</span>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary me-2" onclick="window.location.href='tabel_pesanan.php'">Lihat Pesanan</button>
                    <button type="submit" class="btn btn-success me-auto" name="simpan">Simpan</button>
                    <button type="submit" class="btn btn-warning me-auto" name="edit">Edit</button>
                    <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
