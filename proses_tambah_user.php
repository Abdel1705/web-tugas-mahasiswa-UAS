<?php
include "koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, "INSERT INTO user_login
(nama_lengkap, username, password, role, status)
VALUES
('$nama_lengkap','$username','$password','$role','$status')");

if($query){
    echo "<script>
        alert('Data user berhasil ditambahkan!');
        window.location='user.php';
    </script>";
}else{
    echo "<script>
        alert('Data user gagal ditambahkan!');
        window.history.back();
    </script>";
}
?>