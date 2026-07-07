<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Pengumpulan | Sistem Manajemen Tugas Mahasiswa</title>

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
                        <a href="#">Data Mahasiswa</a>
                        <a href="#">Data User</a>
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

            <div class="mb-4">
                <h2 class="fw-bold mb-1">Rekap Pengumpulan Tugas</h2>
                <p class="text-secondary mb-0">Lihat ringkasan pengumpulan tugas berdasarkan judul tugas dan kelas.</p>
            </div>

            <section class="row g-4 mb-4">
                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <p class="text-secondary mb-1">Total Mahasiswa</p>
                        <h3 class="fw-bold mb-0">32</h3>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <p class="text-secondary mb-1">Total Tugas</p>
                        <h3 class="fw-bold mb-0">12</h3>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <p class="text-secondary mb-1">Sudah Kumpul</p>
                        <h3 class="fw-bold text-success mb-0">84</h3>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <p class="text-secondary mb-1">Belum / Terlambat</p>
                        <h3 class="fw-bold text-danger mb-0">26</h3>
                    </div>
                </div>
            </section>

            <section class="content-card p-4 mb-4">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-3">
                    <h5 class="fw-bold mb-3 mb-md-0">Filter Rekap</h5>

                    <form action="#" method="get" class="d-flex flex-column flex-md-row gap-2">
                        <input type="search" class="form-control" name="keyword" placeholder="Cari judul tugas">
                        <select class="form-select" name="kelas">
                            <option value="">Semua Kelas</option>
                            <option value="Unit 01">Unit 01</option>
                            <option value="Unit 02">Unit 02</option>
                        </select>
                        <select class="form-select" name="mata_kuliah">
                            <option value="">Semua Mata Kuliah</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Basis Data">Basis Data</option>
                        </select>
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </form>
                </div>
            </section>

            <section class="content-card p-4">
                <h5 class="fw-bold mb-3">Tabel Rekap Pengumpulan</h5>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Tugas</th>
                                <th>Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>Total Data</th>
                                <th>Dikumpulkan</th>
                                <th>Belum</th>
                                <th>Terlambat</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Membuat Halaman <Login class="php">Login.php</Login></td>
                                <td>Pemrograman Web</td>
                                <td>Unit 01</td>
                                <td>32</td>
                                <td><span class="badge badge-soft-success">25</span></td>
                                <td><span class="badge badge-soft-warning">5</span></td>
                                <td><span class="badge badge-soft-danger">2</span></td>
                                <td>
                                    <div class="progress rounded-pill" style="height: 10px;">
                                        <div class="progress-bar" style="width: 78%;"></div>
                                    </div>
                                    <small class="text-secondary">78%</small>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Desain Database MySQL</td>
                                <td>Basis Data</td>
                                <td>Unit 01</td>
                                <td>32</td>
                                <td><span class="badge badge-soft-success">28</span></td>
                                <td><span class="badge badge-soft-warning">3</span></td>
                                <td><span class="badge badge-soft-danger">1</span></td>
                                <td>
                                    <div class="progress rounded-pill" style="height: 10px;">
                                        <div class="progress-bar" style="width: 87%;"></div>
                                    </div>
                                    <small class="text-secondary">87%</small>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>CRUD Data Mahasiswa</td>
                                <td>Pemrograman Web</td>
                                <td>Unit 02</td>
                                <td>30</td>
                                <td><span class="badge badge-soft-success">20</span></td>
                                <td><span class="badge badge-soft-warning">7</span></td>
                                <td><span class="badge badge-soft-danger">3</span></td>
                                <td>
                                    <div class="progress rounded-pill" style="height: 10px;">
                                        <div class="progress-bar" style="width: 66%;"></div>
                                    </div>
                                    <small class="text-secondary">66%</small>
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