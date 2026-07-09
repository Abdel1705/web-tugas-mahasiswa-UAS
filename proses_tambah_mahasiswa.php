<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, "INSERT INTO mahasiswa
(nim, nama_mahasiswa, prodi, kelas, email, no_hp, status)
VALUES
('$nim', '$nama_mahasiswa', '$prodi', '$kelas', '$email', '$no_hp', '$status')");

if($query){
    echo "<script>
        alert('Data mahasiswa berhasil ditambahkan!');
        window.location='mahasiswa.php';
    </script>";
}else{
    echo "<script>
        alert('Data mahasiswa gagal ditambahkan!');
        window.history.back();
    </script>";
}
?>