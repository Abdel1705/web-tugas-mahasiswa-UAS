<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Manajemen Tugas Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="login-page">

    <main class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card login-card p-4 p-md-5">
            <div class="text-center mb-4">
                <div class="logo-box mx-auto mb-3">TM</div>
                <h3 class="fw-bold mb-1">Sistem Manajemen Tugas Mahasiswa</h3>
                <p class="text-secondary mb-0">Silakan login untuk masuk ke dashboard</p>
            </div>

            <form action="dashboard.php" method="get">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="text-decoration-none fw-semibold">Lupa password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-3">
                    Login
                </button>
            </form>

            <div class="text-center mt-4">
    
            </div>
        </div>
    </main>

</body>
</html>