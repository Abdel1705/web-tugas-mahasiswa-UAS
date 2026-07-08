<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM user_login");
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
body{
    background:#f5f7fb;
}

.page-title{
    font-size:30px;
    font-weight:bold;
    color:#1e3a8a;
}

.card{
    border:none;
    border-radius:18px;
    box-shadow:0 8px 20px rgba(0,0,0,.1);
}

.table thead{
    background:#2563eb;
    color:#fff;
}

.table th,
.table td{
    text-align:center;
    vertical-align:middle;
}

.badge-status{
    background:#198754;
    color:#fff;
    padding:6px 12px;
    border-radius:20px;
}
         </style>

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
                    <input type="text" class="form-control" placeholder="Cari user..." style="width:250px;">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
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
                                        <a href="edit_user.php=<?= $row['id_user']; ?>" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="hapus_user.php=<?= $row['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">
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