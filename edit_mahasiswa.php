<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white p-4">
                    <h2 class="mb-1">
                        <i class="bi bi-pencil-square"></i>
                        Edit Data Mahasiswa
                    </h2>
                    <p class="mb-0">
                        Silakan ubah data mahasiswa kemudian klik tombol Simpan Perubahan.
                    </p>
                </div>
                <div class="card-body p-4">
                    <form action="proses_edit_mahasiswa.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id_mahasiswa']; ?>">
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
                                value="<?= $row['nim']; ?>">
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
                                value="<?= $row['nama_mahasiswa']; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    <i class="bi bi-mortarboard-fill"></i>
                                    Program Studi
                                </label>
                                <input
                                type="text"
                                name="prodi"
                                class="form-control"
                                value="<?= $row['prodi']; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    <i class="bi bi-building"></i>
                                    Kelas
                                </label>
                                <input
                                type="text"
                                name="kelas"
                                class="form-control"
                                value="<?= $row['kelas']; ?>">
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
                                value="<?= $row['email']; ?>">
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
                                value="<?= $row['no_hp']; ?>">

                            </div>

                            <div class="col-md-12 mb-4">

                            <label class="form-label">
                                <i class="bi bi-check-circle-fill"></i>
                                Status
                            </label>

                            <select
                            name="status"
                            class="form-select">

                            <option value="aktif"
                            <?= $row['status']=="aktif" ? "selected" : ""; ?>>
                            Aktif
                        </option>

                        <option value="nonaktif"
                        <?= $row['status']=="nonaktif" ? "selected" : ""; ?>>
                        Nonaktif
                    </option>

                </select>
            </div>
        </div>
        <div class="text-end">
            <a href="mahasiswa.php" class="btn btn-outline-secondary px-4">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>

            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save"></i>
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>