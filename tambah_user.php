<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white py-4">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-person-plus-fill display-5"></i>
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1">
                                Tambah Data User
                            </h2>
                            <p class="mb-0">
                                Silakan isi data user dengan lengkap.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <form action="proses_tambah_user.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                <i class="bi bi-person-fill"></i>
                                Nama Lengkap
                            </label>
                            <input
                            type="text"
                            name="nama_lengkap"
                            class="form-control"
                            required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                <i class="bi bi-person-circle"></i>
                                Username
                            </label>
                            <input
                            type="text"
                            name="username"
                            class="form-control"
                            required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                <i class="bi bi-lock-fill"></i>
                                Password
                            </label>
                            <input
                            type="password"
                            name="password"
                            class="form-control"
                            required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                <i class="bi bi-person-badge-fill"></i>
                                Role
                            </label>
                            <select
                            name="role"
                            class="form-select"
                            required>
                            <option value="">Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="dosen">Dosen</option>
                            <option value="mahasiswa">Mahasiswa</option>
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label class="form-label">
                            <i class="bi bi-check-circle-fill"></i>
                            Status
                        </label>
                        <select name="status" class="form-select" required>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                        </select>
                    </div>
                </div>
            </div>
        <div class="d-flex justify-content-end gap-3">
            <a href="user.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i>
                Kembali
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save-fill"></i>
                Simpan
            </button>
        </div>
    </form>
</div>

</div>

</div>

</body>
</html>