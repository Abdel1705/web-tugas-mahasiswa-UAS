<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Data Mahasiswa
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <style>



    </style>

</head>

<body>

<div class="container py-5">

 <div 
class="d-flex justify-content-between align-items-center mb-4">

<div>

<h2 
class="page-title">
<i class="bi bi-mortarboard-fill"
></i>
Data Mahasiswa
</h2>

<p class="text-secondary">
Kelola seluruh data mahasiswa
</p>

</div>

<div>

<a href="dashboard.php" class="btn btn-secondary">
<i 
class="bi bi-arrow-left">
</i>
Dashboard
</a>

</div>

</div>

<div 
class="card card-custom">

<div 
class="card-body">

<div
 class="d-flex justify-content-between align-items-center mb-4">

<a href="tambah_mahasiswa.php" class="btn btn-primary">
<i class="bi bi-plus-circle"></i>
Tambah Mahasiswa
</a>

<input
type="text"
class="form-control"
placeholder="Cari mahasiswa..."
style="max-width:280px;">

</div>

<div class="table-responsive">

<table
 class="table table-hover align-middle">

<thead>



<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Prodi</th>
<th>Kelas</th>
<th>Email</th>
<th>No HP</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>
<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>

    <td class="text-center"><?= $no++; ?></td>

    <td>
        <?= $row['nim']; ?>
    </td>

    <td>
        <?= $row['nama_mahasiswa']; ?></td>

    <td>
        <?= $row['prodi']; ?>
    </td>

    <td>
        <?= $row['kelas']; ?>
    </td>

    <td>
        <?= $row['email']; ?></td>

    <td>
        <?= $row['no_hp']; ?>
    </td>

    <td
     class="text-center">
        <span
         class="badge-status">
            <?= $row['status']; ?>
        </span>
    </td>

    <td 
    class="text-center">
        <a 
        href="edit_mahasiswa.php?id=<?= $row['id_mahasiswa']; ?>"
   class="btn btn-warning btn-sm">
    <i 
    class="bi bi-pencil-square"
    ></i>
</a>

        <a href="hapus_mahasiswa.php?id=<?= $row['id_mahasiswa']; ?>"
           class="btn btn-danger btn-sm"
           onclick="return confirm('Yakin ingin menghapus data ini?')">
            <i class="bi bi-trash"></i>
        </a>

    </td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>