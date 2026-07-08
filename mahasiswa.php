<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">
                <i class="bi bi-people-fill text-primary"></i>
                Data Mahasiswa
            </h2>
            <p class="text-muted mb-0">
                Sistem Manajemen Tugas Mahasiswa
            </p>
        </div>

        <a href="dashboard.php" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                <i class="bi bi-person-vcard"></i>
                Daftar Mahasiswa
            </h5>

            <button class="btn btn-light btn-sm">
                <i class="bi bi-plus-circle"></i>
                Tambah Data
            </button>

        </div>

        <div class="card-body">

           <div class="mb-3">
    <input
        type="text"
        id="cariMahasiswa"
        class="form-control"
        placeholder="Cari mahasiswa...">
</div>

            <table class="table table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>250212036</td>
                        <td>Ahmad Fauzan</td>
                        <td>Pendidikan Teknologi Informasi</td>
                        <td>
                
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>250212037</td>
                        <td>Siti Rahmah</td>
                        <td>Teknik Informatika</td>
                        <td>
                    
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>250212038</td>
                        <td>Helmiatun Nisa</td>
                        <td>Pendidikan Teknologi Informasi</td>
                        <td>

                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>