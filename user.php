<?php
include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM user_login");
?>

<!DOCTYPE html> 
     <html lang="id">
          <head>
     <meta 
        charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>
        Data User
    </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
                <p class="text-muted">Kelola seluruh data user.</p>
            </div>
            <a href="dashboard.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Dashboard
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <a href="tambah_user.php" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Tambah User
                    </a>
                    <small id="dataCounter" class="text-secondary">
                        Menampilkan 0 dari 0 data
                    </small>
                    <input type="text" id="searchInput" class="form-control" placeholder="🔍 Cari user..." style="width:250px;">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-search">
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
                            $no=1;
                            while($row=mysqli_fetch_assoc($data)){
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= ucfirst($row['role']); ?></td>
                                    <td>
                                        <span class="badge-status">
                                            <?= ucfirst($row['status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="edit_user.php?id=<?= $row['id_user']; ?>" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="hapus_user.php?id=<?= $row['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>