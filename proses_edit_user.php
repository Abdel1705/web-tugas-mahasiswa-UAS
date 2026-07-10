<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$status = $_POST['status'];


$query = mysqli_query($koneksi, 
"UPDATE user_login SET
nama_lengkap='$nama',
username='$username',
password='$password',
role='$role',
status='$status'
WHERE id_user='$id'
");


if($query){
    echo "
    <script>
        alert('Data user berhasil diubah!');
        window.location='user.php';
    </script>
    ";
}else{
    die("Error: " . mysqli_error($koneksi));
}
?>