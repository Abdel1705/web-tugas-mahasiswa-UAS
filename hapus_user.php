<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM user_login WHERE id_user='$id'");

if($query){
    echo "<script>
        alert('Data user berhasil dihapus!');
        window.location='user.php';
    </script>";
}else{
    echo "<script>
        alert('Data user gagal dihapus!');
        window.location='user.php';
    </script>";
}
?>