<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    die("ID pengumpulan tidak ditemukan!");
}

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM pengumpulan WHERE id_pengumpulan='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data pengumpulan tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengumpulan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h3>Edit Pengumpulan Tugas</h3>

    <form action="proses_edit_pengumpulan.php" method="POST">

        <input type="hidden" name="id_pengumpulan" value="<?= $data['id_pengumpulan']; ?>">

        <div class="mb-3">
            <label>Link File</label>
            <input type="text"
                   name="link_file"
                   class="form-control"
                   value="<?= $data['link_file']; ?>">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status_pengumpulan" class="form-control">
                <option value="dikumpulkan" <?= $data['status_pengumpulan']=="dikumpulkan"?"selected":""; ?>>Dikumpulkan</option>

                <option value="belum" <?= $data['status_pengumpulan']=="belum"?"selected":""; ?>>Belum</option>

                <option value="terlambat" <?= $data['status_pengumpulan']=="terlambat"?"selected":""; ?>>Terlambat</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Nilai</label>
            <input type="number"
                   name="nilai"
                   class="form-control"
                   value="<?= $data['nilai']; ?>">
        </div>

        <div class="mb-3">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control"><?= $data['catatan']; ?></textarea>
        </div>

        <div class="mb-3">
            <label>Feedback</label>
            <textarea name="feedback" class="form-control"><?= $data['feedback']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Perubahan
        </button>

        <a href="pengumpulan.php" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>