<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM user_login WHERE id_user='$id'");
$row = mysqli_fetch_assoc($query);

if(!$row){
    die("Data user tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-primary text-white py-4">
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <div class="bg-white rounded-circle shadow d-flex justify-content-center align-items-center"
                            style="width:80px; height:80px;">
                            <i class="bi bi-person-fill text-primary fs-1"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="fw-bold mb-2">
                            <i class="bi bi-pencil-square me-2"></i>
                            Edit Data User
                        </h2>
                        <p class="mb-0 fs-5">
                            Silakan ubah data akun pengguna kemudian klik tombol Simpan Perubahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <form action="proses_edit_user.php" method="POST">
                <input
                type="hidden"
                name="id"
                value="<?= $row['id_user']; ?>">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">
                            <i class="bi bi-person-fill me-2"></i>
                            Nama Lengkap
                        </label>
                        <input
                        type="text"
                        name="nama_lengkap"
                        class="form-control"
                        value="<?= $row['nama_lengkap']; ?>"
                        required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">
                            <i class="bi bi-person-circle me-2"></i>
                            Username
                        </label>
                        <input
                        type="text"
                        name="username"
                        class="form-control"
                        value="<?= $row['username']; ?>"
                        required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">
                            <i class="bi bi-lock-fill me-2"></i>
                            Password
                        </label>
                        <input
                        type="text"
                        name="password"
                        class="form-control"
                        value="<?= $row['password']; ?>"
                        required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">
                            <i class="bi bi-person-badge-fill me-2"></i>
                            Role
                        </label>
                        <select
                        name="role"
                        class="form-select"
                        required>
                            <option value="">Pilih Role</option>
                            <option value="admin" <?= $row['role']=="admin" ? "selected" : ""; ?>>
                                Admin
                            </option>
                            <option value="dosen" <?= $row['role']=="dosen" ? "selected" : ""; ?>>
                                Dosen
                        </option>
                        <option value="mahasiswa" <?= $row['role']=="mahasiswa" ? "selected" : ""; ?>>
                            Mahasiswa
                        </option>
                    </select>
                </div>

                <div class="col-12 mb-4">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        Status
                    </label>
                    <select name="status" class="form-select" required>
                        <option value="aktif" <?= $row['status']=="aktif" ? "selected" : ""; ?>>
                            Aktif
                        </option>
                        <option value="nonaktif" <?= $row['status']=="nonaktif" ? "selected" : ""; ?>>
                            nonaktif
                        </option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-3 mt-3">
                <a href="user.php" class="btn btn-outline-secondary px-4 py-2">
                    <i class="bi bi-arrow-left-circle"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-save-fill"></i>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

</div>

</body>
</html>