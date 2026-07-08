<?php
include "koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, "UPDATE mahasiswa SET
    nim='$nim',
    nama_mahasiswa='$nama_mahasiswa',
    prodi='$prodi',
    kelas='$kelas',
    email='$email',
    no_hp='$no_hp',
    status='$status'
WHERE id_mahasiswa='$id'");

if($query){
    echo "<script>
        alert('Data mahasiswa berhasil diperbarui!');
        window.location='mahasiswa.php';
    </script>";
}else{
    echo "<script>
        alert('Data mahasiswa gagal diperbarui!');
        window.history.back();
    </script>";
}
?>