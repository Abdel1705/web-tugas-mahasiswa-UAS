<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-header bg-success text-white py-4">

            <div class="d-flex align-items-center">

                <div class="me-3">
                    <i class="bi bi-person-plus-fill display-5"></i>
                </div>

                <div>
                    <h2 class="fw-bold mb-1">Tambah Data Mahasiswa</h2>
                    <p class="mb-0">
                        Silakan isi data mahasiswa dengan lengkap.
                    </p>
                </div>

            </div>

        </div>

        <div class="card-body p-4">

            <form action="proses_tambah_mahasiswa.php" method="POST">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-card-text"></i>
                            NIM
                        </label>

                        <input
                            type="text"
                            name="nim"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-person-fill"></i>
                            Nama Mahasiswa
                        </label>

                        <input
                            type="text"
                            name="nama_mahasiswa"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-book"></i>
                            Program Studi
                        </label>

                        <input
                            type="text"
                            name="prodi"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-mortarboard"></i>
                            Kelas
                        </label>

                        <input
                            type="text"
                            name="kelas"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-envelope-fill"></i>
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-telephone-fill"></i>
                            No HP
                        </label>

                        <input
                            type="text"
                            name="no_hp"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-12 mb-4">
                        <label class="form-label">
                            <i class="bi bi-check-circle-fill"></i>
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Nonaktif</option>

                        </select>
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-3">

                    <a href="mahasiswa.php" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i>
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save-fill"></i>
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>