<?php
include ("koneksi.php");

//Cek apakah ada pengiriman data dari Formulir
if (isset($_POST['simpan'])){
    //Ambil data dari formulir
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $durasi = $_POST['durasi'];
    $peserta = $_POST['peserta'];
    $diskon = $_POST['diskon'];
    $paket = ($_POST['pilihan']);
    $harga_paket = $_POST['harga_paket'];
    $total_biaya = $_POST['total_biaya'];

    $sql = "INSERT INTO pesanan (nama_pemesan, no_telp, durasi, jmlh_peserta, diskon, paket, harga, jumlah) VALUE ('$nama', '$nohp', '$durasi', '$peserta', '$diskon', '$paket', '$harga_paket', '$total_biaya')";

    $query = mysqli_query($connect, $sql);

        if($query) {
            echo "<h2>Terima Kasih Wir, Pesanan Anda Akan Segera Kami Proses !<h2>";
        }
        else {
            echo "Maaf Data Yang Dimasukkan Gagal Disimpan Wir";
        }
    }
    else {
        die ("Akses Dilarang Wir...");
    }
?>

<!--button back-->
<div class="d-flex justify-content-center">
      <button type="button" class="btn btn-warning me-2" onclick="window.location.href='pemesanan.php'">Kembali</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Beranda</button>
    </div>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
