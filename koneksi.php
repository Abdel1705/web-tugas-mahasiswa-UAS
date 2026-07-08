<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_tugas_mahasiswa";

$koneksi = mysqli_connect($host, $username, $password, $database);

?>
<?php

$conn = mysqli_connect("localhost", "root", "", "db_tugas_mahasiswa");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>