-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2026 at 03:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `prodi`, `kelas`, `email`, `no_hp`, `status`, `created_at`) VALUES
(1, '230101001', 'Ahmad Fauzan', 'Pendidikan Teknologi Informasi', 'Unit 02', 'ahmad@example.com', '081234567890', 'aktif', '2026-07-01 02:21:02'),
(2, '230101002', 'Siti Aisyah', 'Pendidikan Teknologi Informasi', 'Unit 01', 'siti@example.com', '081234567891', 'aktif', '2026-07-01 02:21:02'),
(3, '230101003', 'Muhammad Rizki', 'Pendidikan Teknologi Informasi', 'Unit 02', 'rizki@example.com', '081234567892', 'aktif', '2026-07-01 02:21:02'),
(6, '250212030', 'Nadya Adelya', 'Pendidikan Teknologi Informasi ', 'Unit 02', 'na@gmail', '081234567890', 'aktif', '2026-07-07 05:27:44'),
(11, '12556789', 'rajulun', 'bahasa arab', 'unit4', 'asal@trus', '098776655443', 'nonaktif', '2026-07-09 08:54:34'),
(14, '123456789', 'helmi', 'matimatika', 'Unit 02', 'helmiatunnisa68@gmail.com', '081234567890', 'nonaktif', '2026-07-09 06:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `pengumpulan_tugas`
--

CREATE TABLE `pengumpulan_tugas` (
  `id_pengumpulan` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `tanggal_pengumpulan` datetime DEFAULT NULL,
  `link_file` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `status_pengumpulan` enum('dikumpulkan','belum','terlambat') DEFAULT 'belum',
  `nilai` decimal(5,2) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumpulan_tugas`
--

INSERT INTO `pengumpulan_tugas` (`id_pengumpulan`, `id_tugas`, `id_mahasiswa`, `tanggal_pengumpulan`, `link_file`, `catatan`, `status_pengumpulan`, `nilai`, `feedback`, `created_at`) VALUES
(1, 1, 1, '2026-07-08 20:15:00', 'https://github.com/demo/project-login', 'Sudah dikumpulkan melalui GitHub.', 'dikumpulkan', 90.00, 'Tampilan sudah baik.', '2026-07-01 02:21:02'),
(2, 1, 2, NULL, NULL, NULL, 'belum', NULL, NULL, '2026-07-01 02:21:02'),
(3, 1, 3, '2026-07-11 08:30:00', 'https://github.com/demo/project-web', 'Terlambat mengumpulkan.', 'terlambat', 75.00, 'Perhatikan deadline.', '2026-07-01 02:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `judul_tugas` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `deadline` datetime NOT NULL,
  `file_instruksi` varchar(255) DEFAULT NULL,
  `status_tugas` enum('draft','aktif','selesai') DEFAULT 'aktif',
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `judul_tugas`, `deskripsi`, `mata_kuliah`, `kelas`, `tanggal_dibuat`, `deadline`, `file_instruksi`, `status_tugas`, `id_user`, `created_at`) VALUES
(1, 'Membuat Halaman Login', 'Mahasiswa membuat halaman login menggunakan HTML, CSS, dan Bootstrap.', 'Pemrograman Web', 'Unit 01', '2026-07-01', '2026-07-10 23:59:00', 'instruksi-login.pdf', 'aktif', 2, '2026-07-01 02:21:02'),
(2, 'Desain Database MySQL', 'Mahasiswa merancang database sederhana sesuai studi kasus masing-masing.', 'Basis Data', 'Unit 01', '2026-07-01', '2026-07-12 23:59:00', 'instruksi-database.pdf', 'aktif', 2, '2026-07-01 02:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','dosen','mahasiswa') DEFAULT 'mahasiswa',
  `status` enum('aktif','nonaktif') DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'Administrator Sistem', 'admin', 'admin123', 'dosen', 'aktif', '2026-07-01 02:21:02'),
(2, 'Dosen Pengampu', 'dosen', 'dosen123', 'dosen', 'aktif', '2026-07-01 02:21:02'),
(3, 'Mahasiswa Demo', 'mahasiswa', 'mhs123', 'mahasiswa', 'nonaktif', '2026-07-01 02:21:02'),
(7, 'Helmiatun Nisa m.pd.spd', 'Nisa', '7690865', 'dosen', 'nonaktif', '2026-07-09 05:36:50');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rekap_pengumpulan`
-- (See below for the actual view)
--
CREATE TABLE `view_rekap_pengumpulan` (
`id_tugas` int(11)
,`judul_tugas` varchar(150)
,`mata_kuliah` varchar(100)
,`kelas` varchar(20)
,`total_data` bigint(21)
,`total_dikumpulkan` decimal(22,0)
,`total_belum` decimal(22,0)
,`total_terlambat` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Structure for view `view_rekap_pengumpulan`
--
DROP TABLE IF EXISTS `view_rekap_pengumpulan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rekap_pengumpulan`  AS SELECT `t`.`id_tugas` AS `id_tugas`, `t`.`judul_tugas` AS `judul_tugas`, `t`.`mata_kuliah` AS `mata_kuliah`, `t`.`kelas` AS `kelas`, count(`p`.`id_pengumpulan`) AS `total_data`, sum(case when `p`.`status_pengumpulan` = 'dikumpulkan' then 1 else 0 end) AS `total_dikumpulkan`, sum(case when `p`.`status_pengumpulan` = 'belum' then 1 else 0 end) AS `total_belum`, sum(case when `p`.`status_pengumpulan` = 'terlambat' then 1 else 0 end) AS `total_terlambat` FROM (`tugas` `t` left join `pengumpulan_tugas` `p` on(`t`.`id_tugas` = `p`.`id_tugas`)) GROUP BY `t`.`id_tugas`, `t`.`judul_tugas`, `t`.`mata_kuliah`, `t`.`kelas` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD PRIMARY KEY (`id_pengumpulan`),
  ADD UNIQUE KEY `unique_pengumpulan` (`id_tugas`,`id_mahasiswa`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  MODIFY `id_pengumpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD CONSTRAINT `pengumpulan_tugas_ibfk_1` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengumpulan_tugas_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_login` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
