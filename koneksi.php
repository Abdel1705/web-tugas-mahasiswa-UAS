<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_tugas_mahasiswa";

$koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi) {
    echo "Alhamdulillah, Php sudah konek" . $database;
} else {
    die ("koneksi gagal ey" . mysqli_connect_error());
}
?>