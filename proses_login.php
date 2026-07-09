<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user_login WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_array($query);

if($data){

if($data['role'] =="dosen" ||
   $data['role'] =="asisten_dosen" ||
   $data['role'] =="mahasiswa"){

   $_SESSION['username'] = $data['username'];
   $_SESSION['role'] = $data['role'];

    header("location:
    dashboard.php");
    exit;

}else{
    echo "Anda tidak memiliki akses ke halaman ini.";
}

}else{
    echo "Username atau password salah.";
}
?>