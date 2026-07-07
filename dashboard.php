<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Sistem Manajemen Tugas Mahasiswa</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                        <a href="Data_mahasiswa.php">DataMahasiswa</a>
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

              <li><a href="#" onclick="logout()">Logout</a></li>  
            </ul>
        </div>
    </header>

    <main class="page-section">
        <div class="container">

            <section class="hero-card mb-5">

    <div class="row justify-content-center align-items-center text-center">
        <div class="hero-box text-center">
        <div class="col-lg-8"></div>

            <span class="hero-label">
                Dashboard Utama
            </span>

            <h1 class="hero-title">
                Monitoring
                <span>Tugas Mahasiswa</span>
            </h1>

            <p class="hero-text">
                Kelola tugas, pantau deadline, lihat statistik pengumpulan
                dan pantau perkembangan mahasiswa dalam satu dashboard.
            </p>

            <div class="mt-4">

                <a href="tugas.php" class="btn btn-primary btn-lg">
                    Kelola Tugas
                </a>

                <a href="rekap.php" class="btn btn-outline-primary btn-lg ms-2">
                    Rekap
                </a>

            </div>
            <div class="hero-plane">
    <i class="bi bi-send"></i>
</div>

<div class="hero-spark">
    <i class="bi bi-stars"></i>
</div>

<div class="hero-list">
    <i class="bi bi-card-checklist"></i>
</div>

<div class="hero-chart">
    <i class="bi bi-pie-chart"></i>
</div>

<svg class="hero-line" viewBox="0 0 300 180">
    <path d="M20 150 C80 20 170 210 280 30"
          stroke="#3b82f6"
          stroke-width="3"
          stroke-dasharray="10 8"
          fill="none"/>
</svg>

        </div>
        </div>


    </div>

</section>

            <section class="row g-4 mb-4">
                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-secondary mb-1">Total Tugas</p>
                                <h3 class="fw-bold mb-0">12</h3>
                            </div>
                            <div class="icon-circle icon-blue">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-secondary mb-1">Dikumpulkan</p>
                                <h3 class="fw-bold mb-0">84</h3>
                            </div>
                            <div class="icon-circle icon-green">
                                <i class=" bi bi-check-circle-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-secondary mb-1">Belum</p>
                                <h3 class="fw-bold mb-0">19</h3>
                            </div>
                            <div class="icon-circle icon-yellow">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stats-card p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-secondary mb-1">Terlambat</p>
                                <h3 class="fw-bold mb-0">7</h3>
                            </div>
                            <div class="icon-circle icon-red">
                                <i class="bi bi-x-circle-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row g-4">
                <div class="col-lg-8">
                    <div class="content-card p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0">Tugas Terbaru</h5>
                            <a href="tugas.php" class="btn btn-sm btn-primary">Lihat Semua</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Tugas</th>
                                        <th>Mata Kuliah</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Membuat Halaman Login</td>
                                        <td>Pemrograman Web</td>
                                        <td>10 Juli 2026, 23:59</td>
                                        <td><span class="badge badge-soft-primary">Aktif</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Desain Database MySQL</td>
                                        <td>Basis Data</td>
                                        <td>12 Juli 2026, 23:59</td>
                                        <td><span class="badge badge-soft-primary">Aktif</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>CRUD Data Mahasiswa</td>
                                        <td>Pemrograman Web</td>
                                        <td>15 Juli 2026, 23:59</td>
                                        <td><span class="badge badge-soft-warning">Draft</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="content-card p-4">
                        <h5 class="fw-bold mb-3">Ringkasan Sistem</h5>
                        <div class="mb-3">
                            <p class="text-secondary mb-1">Persentase Pengumpulan</p>
                            <div class="progress rounded-pill" style="height: 12px;">
                                <div class="progress-bar" style="width: 78%;">78%</div>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="pengumpulan.php" class="btn btn-outline-primary">Daftar Pengumpulan</a>
                            <a href="rekap.php" class="btn btn-outline-success">Rekap Pengumpulan</a>
                            <a href="#" onclick="logout()" class="btn btn-outline-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <footer class="py-4">
    <div class="container text-center footer-text">
        Sistem Manajemen Tugas Mahasiswa
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function logout() {
    Swal.fire({
        title: 'Konfirmasi Logout',
        text: 'Apakah Anda yakin ingin keluar dari sistem?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "index.php";
        }
    });
}
</script>

</body>
</html>

</body>
</html>