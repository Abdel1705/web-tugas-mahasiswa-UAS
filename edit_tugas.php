<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tugas WHERE id_tugas='$id'");
$row = mysqli_fetch_assoc($query);

if (!$row) {
    die("Data tugas tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>
                <i class="bi bi-pencil-square"></i>
                Edit Data Tugas
            </h3>
        </div>

        <div class="card-body">

            <form action="proses_edit_tugas.php" method="POST">

                <input type="hidden" name="id_tugas" value="<?= $row['id_tugas']; ?>">

                <div class="mb-3">
                    <label>Judul Tugas</label>
                    <input type="text" name="judul_tugas" class="form-control"
                    value="<?= $row['judul_tugas']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Mata Kuliah</label>
                    <input type="text" name="mata_kuliah" class="form-control"
                    value="<?= $row['mata_kuliah']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control"
                    value="<?= $row['kelas']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Tanggal Dibuat</label>
                    <input type="date" name="tanggal_dibuat" class="form-control"
                    value="<?= $row['tanggal_dibuat']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Deadline</label>
                    <input type="datetime-local" name="deadline" class="form-control"
                    value="<?= date('Y-m-d\TH:i', strtotime($row['deadline'])); ?>" required>
                </div>

                <div class="mb-3">
                    <label>File Instruksi</label>
                    <input type="text" name="file_instruksi" class="form-control"
                    value="<?= $row['file_instruksi']; ?>">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required><?= $row['deskripsi']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Status</label>

                    <select name="status_tugas" class="form-select">

                        <option value="draft" <?= $row['status_tugas']=="draft" ? "selected" : ""; ?>>
                            Draft
                        </option>

                        <option value="aktif" <?= $row['status_tugas']=="aktif" ? "selected" : ""; ?>>
                            Aktif
                        </option>

                        <option value="selesai" <?= $row['status_tugas']=="selesai" ? "selected" : ""; ?>>
                            Selesai
                        </option>

                    </select>

                </div>

                <a href="tugas.php" class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>