<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $judul_tugas = $_POST['judul_tugas'];
    $deskripsi = $_POST['deskripsi'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $kelas = $_POST['kelas'];
    $tanggal_dibuat = $_POST['tanggal_dibuat'];
    $deadline = $_POST['deadline'];
    $file_instruksi = $_POST['file_instruksi'];
    $status_tugas = $_POST['status_tugas'];

    mysqli_query($koneksi, "INSERT INTO tugas
    (judul_tugas, deskripsi, mata_kuliah, kelas, tanggal_dibuat, deadline, file_instruksi, status_tugas)
    VALUES
    ('$judul_tugas','$deskripsi','$mata_kuliah','$kelas','$tanggal_dibuat','$deadline','$file_instruksi','$status_tugas')");
}

$data = mysqli_query($koneksi, "SELECT * FROM tugas ORDER BY id_tugas DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tugas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<header class="main-header">
    <div class="container py-3 d-flex align-items-center justify-content-between">

        <a href="dashboard.php" class="text-decoration-none brand-title fs-4">
            Tugas Mahasiswa
        </a>

        <ul class="top-nav">
            <li><a href="dashboard.php">Dashboard</a></li>

            <li>
                <a href="#">Data Master ▾</a>

                <div class="dropdown-css">
                    <a href="tugas.php">Data Tugas</a>
                    <a href="mahasiswa.php">Data Mahasiswa</a>
                    <a href="user.php">Data User</a>
                </div>
            </li>

            <li>
                <a href="#">Pengumpulan ▾</a>

                <div class="dropdown-css">
                    <a href="pengumpulan.php">Daftar Pengumpulan</a>
                    <a href="rekap.php">Rekap Pengumpulan</a>
                </div>
            </li>

            <li><a href="#">Logout</a></li>

        </ul>

    </div>
</header>
<main class="page-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">
                    <i class="bi bi-journal-text text-primary"></i>
                    CRUD Data Tugas
                </h2>
                <p class="text-secondary">
                    Kelola data tugas mahasiswa, mulai dari menambah, mengubah, hingga menghapus.
                </p>
            </div>
            <a href="#form-tugas" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
                Tambah Tugas
            </a>
        </div>
        <section class="content-card p-4 mb-4" id="form-tugas">
            <form method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Judul Tugas</label>
                        <input type="text" name="judul_tugas" class="form-control" required placeholder="membuat website sederhana">
                    </div>
                    <div class="col-md-3">
                        <label>Mata Kuliah</label>
                        <input type="text" name="mata_kuliah" class="form-control" required placeholder="Contoh: Pemrograman Web">
                    </div>
                    <div class="col-md-3">
                        <label>Kelas</label>
                        <input type="text" name="kelas" class="form-control" required placeholder="Contoh: unit 01">
                    </div>
                    <div class="col-md-4">
                        <label>Tanggal Dibuat</label>
                        <input type="date" name="tanggal_dibuat" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label>Deadline</label>
                        <input type="datetime-local" name="deadline" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label>Status</label>
                        <select name="status_tugas" class="form-select">
                            <option value="draft">Draft</option>
                            <option value="aktif">Aktif</option>
                            <option value="selesai">Selesai</option>

                        </select>
                    </div>

                    <div class="col-12">
                        <label>File Instruksi</label>
                        <input type="text"
                        name="file_instruksi"
                        class="form-control"
                        placeholder="Contoh: instruksi_tugas.pdf">
                    </div>
                    <div class="col-12">
                        <label>Deskripsi</label>
                        <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="4"
                        placeholder="Deskripsi tugas..."></textarea>
                    </div>
                    <div class="col-12">
                        <button
                        type="submit"
                        name="simpan"
                        class="btn btn-primary px-4">
                        <i class="bi bi-save"></i>
                        Simpan
                    </button>
                    <button
                    type="reset"
                    class="btn btn-outline-secondary ms-2">
                    <i class="bi bi-arrow-clockwise"></i>
                    Reset
                </button>
                </div>
            </div>
        </form>
    </section>
    <section class="content-card p-4">
        <div class="row mb-3">
        <div class="col-md-4">
        <input
            type="text"
            id="searchInput"
            class="form-control"
            placeholder="🔍 Cari judul, mata kuliah, atau kelas...">
        </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="tableTugas">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>
<?php
$no = 1;

while ($row = mysqli_fetch_assoc($data)) {
?>
  <tr>
    <td><?= $no++; ?></td>
    <td>
        <strong><?= $row['judul_tugas']; ?></strong><br>
        <small><?= $row['deskripsi']; ?></small>
    </td>
    <td><?= $row['mata_kuliah']; ?></td>
    <td><?= $row['kelas']; ?></td>
    <td><?= date('d-m-Y H:i', strtotime($row['deadline'])); ?></td>
    <td>
        <?php if ($row['status_tugas'] == "aktif") { ?>
            <span class="badge bg-success">Aktif</span>

        <?php } elseif ($row['status_tugas'] == "draft") { ?>
            <span class="badge bg-warning text-dark">Draft</span>

        <?php } else { ?>
            <span class="badge bg-secondary">Selesai</span>

        <?php } ?>
    </td>
       <td>
        <a href="edit_tugas.php?id=<?= $row['id_tugas']; ?>" class="btn btn-warning btn-sm">
            <i class="bi bi-pencil-square"></i>
        </a>
         <a href="hapus_tugas.php?id=<?= $row['id_tugas']; ?>"
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

</section>

</div>

</main>
<script src="assets/js/script.js"></script>
</body>
</html>