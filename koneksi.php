<?php
$server = "localhost";
$user = "root";
$pass = "";
$nama_db = "jwb";

$connect = mysqli_connect($server, $user, $pass, $nama_db);
echo "";

if(!$connect) {
    die("GAGAL TERHUBUNG KE DB : " . mysqli_connect_error());
}

?>