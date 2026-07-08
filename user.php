<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM user_login");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        
    </style>
</head>

<body>

<div class="container py-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<div>
<h2 class="page-title">
<i class="bi bi-people-fill"></i>
Data User
</h2>
<p class="text-secondary">Kelola seluruh data user</p>
</div>

<div>
<a href="dashboard.php" class="btn btn-secondary">
<i class="bi bi-arrow-left"></i> Dashboard
</a>
</div>

</div>

<div class="card card-custom">

<div class="card-body">

<div class="d-flex justify-content-between align-items-center mb-4">

<a href="tambah_user.php" class="btn btn-primary">
<i class="bi bi-plus-circle"></i> Tambah User
</a>

<input type="text" class="form-control" placeholder="Cari user..." style="max-width:280px;">

</div>

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead>
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Username</th>
<th>Role</th>
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
<td><?= $row['nama_lengkap']; ?></td>
<td><?= $row['username']; ?></td>
<td><?= $row['role']; ?></td>

<td class="text-center">
<span class="badge-status"><?= $row['status']; ?></span>
</td>

<td class="text-center">
<a href="hapus_user.php?id=<?= $row['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">
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

</body>
</html>