<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'");

if($query){
    echo "<script>
        alert('Data mahasiswa berhasil dihapus!');
        window.location='mahasiswa.php';
    </script>";
}else{
    echo "<script>
        alert('Data mahasiswa gagal dihapus!');
        window.location='mahasiswa.php';
    </script>";
}
?>