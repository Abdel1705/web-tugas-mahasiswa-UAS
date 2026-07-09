<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tugas | Sistem Manajemen Tugas Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

    <header class="main-header">
        <div class="container py-3 d-flex align-items-center justify-content-between">
            <a href="dashboard.php" class="text-decoration-none brand-title fs-4">Tugas Mahasiswa</a>

            <ul class="top-nav">
                <li><a href="dashboard.php" class="active">Dashboard</a></li>

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

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1">CRUD Data Tugas</h2>
                    <p class="text-secondary mb-0">Tambah, edit, hapus, cari, dan kelola deadline tugas mahasiswa.</p>
                </div>
                <a href="#form-tugas" class="btn btn-primary mt-3 mt-md-0">Tambah Tugas</a>
            </div>

            <section class="content-card p-4 mb-4" id="form-tugas">
                <h5 class="fw-bold mb-3">Form Tambah / Edit Tugas</h5>

                <form action="#" method="post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Judul Tugas</label>
                            <input type="text" class="form-control" name="judul_tugas" placeholder="Contoh: Membuat Website Profil" required>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Mata Kuliah</label>
                            <input type="text" class="form-control" name="mata_kuliah" placeholder="Pemrograman Web" required>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Kelas</label>
                            <input type="text" class="form-control" name="kelas" placeholder="Unit 01" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Tanggal Dibuat</label>
                            <input type="date" class="form-control" name="tanggal_dibuat" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Deadline</label>
                            <input type="datetime-local" class="form-control" name="deadline" required>
                            <small class="text-secondary">Gunakan tanggal dan jam akhir pengumpulan.</small>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Status Tugas</label>
                            <select class="form-select" name="status_tugas" required>
                                <option value="">Pilih status</option>
                                <option value="draft">Draft</option>
                                <option value="aktif">Aktif</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold">File Instruksi</label>
                            <input type="text" class="form-control" name="file_instruksi" placeholder="Contoh: instruksi-tugas.pdf atau link Google Drive">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold">Deskripsi Tugas</label>
                            <textarea class="form-control" name="deskripsi" rows="4" placeholder="Tuliskan instruksi tugas secara lengkap" required></textarea>
                        </div>

                        <div class="col-md-12 d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                            <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
                        </div>
                    </div>
                </form>
            </section>

            <section class="content-card p-4">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-3">
                    <h5 class="fw-bold mb-3 mb-md-0">Daftar Tugas</h5>

                    <form action="#" method="get" class="search-box w-100">
                        <input type="search" class="form-control" name="keyword" placeholder="Cari judul, mata kuliah, atau kelas">
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Tugas</th>
                                <th>Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Membuat Halaman Login</strong>
                                    <div class="text-secondary small">HTML, CSS, Bootstrap</div>
                                </td>
                                <td>Pemrograman Web</td>
                                <td>Unit 01</td>
                                <td>10 Juli 2026, 23:59</td>
                                <td><span class="badge badge-soft-primary">Aktif</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Desain Database MySQL</strong>
                                    <div class="text-secondary small">ERD dan SQL</div>
                                </td>
                                <td>Basis Data</td>
                                <td>Unit 01</td>
                                <td>12 Juli 2026, 23:59</td>
                                <td><span class="badge badge-soft-primary">Aktif</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>CRUD Data Mahasiswa</strong>
                                    <div class="text-secondary small">Form dan tabel data</div>
                                </td>
                                <td>Pemrograman Web</td>
                                <td>Unit 02</td>
                                <td>15 Juli 2026, 23:59</td>
                                <td><span class="badge badge-soft-warning">Draft</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </main>

</body>
</html>