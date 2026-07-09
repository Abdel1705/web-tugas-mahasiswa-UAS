<?php
include 'koneksi.php';
?>
<!DOCTYPE html >
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumpulan Tugas | Sistem Manajemen Tugas Mahasiswa</title>

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

                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <main class="page-section">
        <div class="container">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1">Daftar Pengumpulan Tugas</h2>
                    <p class="text-secondary mb-0">Pantau status dikumpulkan, belum dikumpulkan, dan terlambat.</p>
                </div>
                <a href="#form-pengumpulan" class="btn btn-primary mt-3 mt-md-0">Input Pengumpulan</a>
            </div>

            <section class="content-card p-4 mb-4" id="form-pengumpulan">
                <h5 class="fw-bold mb-3">Form Input Pengumpulan Tugas</h5>

                <form action="#" method="post">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Nama Mahasiswa</label>
                            <select class="form-select" name="id_mahasiswa" required>
                                <option value="">Pilih mahasiswa</option>
                                <option value="1">230101001 - Ahmad Fauzan</option>
                                <option value="2">230101002 - Siti Rahmah</option>
                                <option value="3">230101003 - Muhammad Rizki</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Judul Tugas</label>
                            <select class="form-select" name="id_tugas" required>
                                <option value="">Pilih tugas</option>
                                <option value="1">Membuat Halaman Login</option>
                                <option value="2">Desain Database MySQL</option>
                                <option value="3">CRUD Data Mahasiswa</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Tanggal Pengumpulan</label>
                            <input type="datetime-local" class="form-control" name="tanggal_pengumpulan">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Link File</label>
                            <input type="url" class="form-control" name="link_file" placeholder="https://github.com/username/project">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Status</label>
                            <select class="form-select" name="status_pengumpulan" required>
                                <option value="">Pilih status</option>
                                <option value="dikumpulkan">Dikumpulkan</option>
                                <option value="belum">Belum</option>
                                <option value="terlambat">Terlambat</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Nilai</label>
                            <input type="number" class="form-control" name="nilai" min="0" max="100" step="0.01" placeholder="0 sampai 100">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Catatan Mahasiswa</label>
                            <textarea class="form-control" name="catatan" rows="3" placeholder="Catatan dari mahasiswa"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Feedback Dosen</label>
                            <textarea class="form-control" name="feedback" rows="3" placeholder="Masukkan feedback penilaian"></textarea>
                        </div>

                        <div class="col-md-12 d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                            <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
                        </div>
                    </div>
                </form>
            </section>

            <section class="content-card p-4">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center mb-3">
                    <h5 class="fw-bold mb-3 mb-lg-0">Data Pengumpulan</h5>

                    <div class="d-flex flex-column flex-md-row gap-2">
                        <form action="#" method="get">
                            <input type="search" class="form-control" name="keyword" placeholder="Cari nama, NIM, atau tugas">
                        </form>

                        <form action="#" method="get">
                            <select class="form-select" name="status">
                                <option value="">Semua Status</option>
                                <option value="dikumpulkan">Dikumpulkan</option>
                                <option value="belum">Belum</option>
                                <option value="terlambat">Terlambat</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mahasiswa</th>
                                <th>Tugas</th>
                                <th>Tanggal Kumpul</th>
                                <th>Link File</th>
                                <th>Status</th>
                                <th>Nilai</th>
                                <th width="170">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Ahmad Fauzan</strong>
                                    <div class="small text-secondary">230101001</div>
                                </td>
                                <td>Membuat Halaman Login</td>
                                <td>8 Juli 2026, 20:15</td>
                                <td><a href="#" class="text-decoration-none">Lihat File</a></td>
                                <td><span class="badge badge-soft-success">Dikumpulkan</span></td>
                                <td>90</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Siti Rahmah</strong>
                                    <div class="small text-secondary">230101002</div>
                                </td>
                                <td>Membuat Halaman Login</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge badge-soft-warning">Belum</span></td>
                                <td>-</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>Muhammad Rizki</strong>
                                    <div class="small text-secondary">230101003</div>
                                </td>
                                <td>Membuat Halaman Login</td>
                                <td>11 Juli 2026, 08:30</td>
                                <td><a href="#" class="text-decoration-none">Lihat File</a></td>
                                <td><span class="badge badge-soft-danger">Terlambat</span></td>
                                <td>75</td>
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