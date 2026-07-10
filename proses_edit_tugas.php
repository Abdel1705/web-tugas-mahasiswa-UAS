<?php
include "koneksi.php";

$id = $_POST['id_tugas'];
$judul_tugas = $_POST['judul_tugas'];
$mata_kuliah = $_POST['mata_kuliah'];
$kelas = $_POST['kelas'];
$tanggal_dibuat = $_POST['tanggal_dibuat'];
$deadline = $_POST['deadline'];
$file_instruksi = $_POST['file_instruksi'];
$deskripsi = $_POST['deskripsi'];
$status_tugas = $_POST['status_tugas'];

mysqli_query($koneksi, "UPDATE tugas SET
judul_tugas='$judul_tugas',
mata_kuliah='$mata_kuliah',
kelas='$kelas',
tanggal_dibuat='$tanggal_dibuat',
deadline='$deadline',
file_instruksi='$file_instruksi',
deskripsi='$deskripsi',
status_tugas='$status_tugas'
WHERE id_tugas='$id'");
echo"<script>
alert('data berhasil di uabah');
window.location.href='tugas.php';
</script>";