<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_tugas_mahasiswa";

$koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi) {
    echo "database terkoneksi: ";
}else {
    echo "database tidak terkoneksi: ";
}
?>