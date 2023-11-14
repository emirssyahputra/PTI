-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 06:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loergroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL,
  `startDay` varchar(20) NOT NULL,
  `endDay` varchar(20) NOT NULL,
  `jamBuka` time NOT NULL,
  `jamTutup` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama`, `alamat`, `jam`, `map`, `startDay`, `endDay`, `jamBuka`, `jamTutup`) VALUES
(1, 'Kopi Loer Sudirman', '20 Ilir D. IV, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan', 'Senin-Minggu 09.30-23.00', 'https://maps.app.goo.gl/4NnJLekm3jfXvkmEA', '', '', '00:00:00', '00:00:00'),
(2, 'Kopi Loer Celentang', 'Jalan Brigjen Hasan K, 30A, Bukit Sangkal, Kec. Kalidoni, Kota Palembang, Sumatera Selatan 30114', 'Senin-Minggu 07.00-22.00', 'https://maps.app.goo.gl/iJyWz7niWQm8nUUP8', '', '', '00:00:00', '00:00:00'),
(3, 'Rumah Loer Merdeka', 'Jl. Merdeka No. 349, Kecamatan Bukit Kecil, Kota Palembang, Sumatera Selatan 30135', 'Senin-Minggu 09.30-23.00', 'https://maps.app.goo.gl/9bgPN9EVKK66RgbUA', '', '', '00:00:00', '00:00:00'),
(4, 'Kora Coffee The Hub Sudirman', 'Jl. Jend Sudirman No.3264 & 3265, Kota Palembang, Sumatera Selatan 30129', 'Senin-Minggu 09.30-21.00', 'https://maps.app.goo.gl/zYpdg2dEyLX3WDbB9', '', '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form_pendaftaran`
--

CREATE TABLE `form_pendaftaran` (
  `id_form` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` varchar(100) NOT NULL,
  `pend` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `surat_lamaran` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `skck` varchar(255) NOT NULL,
  `packlaring` varchar(255) NOT NULL,
  `sertifikat_kompetensi` varchar(255) NOT NULL,
  `waktu_apply` datetime NOT NULL,
  `status_adm` int(11) DEFAULT NULL,
  `komentar_adm` longtext DEFAULT NULL,
  `status_wwc` int(11) DEFAULT NULL,
  `komentar_wwc` longtext DEFAULT NULL,
  `status_uji` int(11) DEFAULT NULL,
  `komentar_uji` longtext DEFAULT NULL,
  `status_akhir` int(11) DEFAULT NULL,
  `komentar_akhir` longtext DEFAULT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_loker` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`id_form`, `nama`, `jenkel`, `pend`, `email`, `no_telp`, `alamat`, `linkedin`, `surat_lamaran`, `cv`, `ktp`, `ijazah`, `skck`, `packlaring`, `sertifikat_kompetensi`, `waktu_apply`, `status_adm`, `komentar_adm`, `status_wwc`, `komentar_wwc`, `status_uji`, `komentar_uji`, `status_akhir`, `komentar_akhir`, `id_pengguna`, `id_loker`) VALUES
(8, 'Pengguna', 'Laki-laki', 'SLTA Sederajat', 'pengguna@mail.com', '081312345678', 'Kampus ITERA', 'https://itera.com', '1699941294_a86fa0945ea8f493a87d.pdf', '1699941294_c9e0b4a106f20a6bbe14.pdf', '1699941294_c11630f4bb0a3c52d0a2.pdf', '1699941294_23043c812a6263e5c3d7.pdf', '1699941294_e21f9339869eaf39b4f8.pdf', '1699941294_32b6e1a43d82b8532927.pdf', '', '2023-11-14 12:54:53', 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, 21, 'JOB0003');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_kerja`
--

CREATE TABLE `kontrak_kerja` (
  `id_kontrak` int(11) NOT NULL,
  `jangka_waktu` datetime NOT NULL,
  `id_pdf` varchar(255) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_pekerjaan`
--

CREATE TABLE `lowongan_pekerjaan` (
  `id_loker` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `waktu_mulai` date NOT NULL,
  `waktu_akhir` date NOT NULL,
  `kualifikasi` longtext NOT NULL,
  `jobdesk` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lowongan_pekerjaan`
--

INSERT INTO `lowongan_pekerjaan` (`id_loker`, `Nama`, `waktu_mulai`, `waktu_akhir`, `kualifikasi`, `jobdesk`) VALUES
('JOB0003', 'FINANCE', '2023-11-13', '2023-11-14', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
('JOB0004', 'FINANCE', '2023-11-02', '2023-11-03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,'),
('JOB0005', 'COOK & COOK HELPER', '2023-11-14', '2023-11-16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `email`, `password`, `nama`, `id_role`, `code`) VALUES
(5, 'emir@gmail.com', '$2y$10$KeqCRykP8CA4uEyeR5QeNe2BS1qpdbDQZHfVJ86OUbaFSOwXw56cC', 'EMIRSSYAH PUTRA', 2, 242194),
(14, 'emirssyah14@gmail.com', '$2y$10$CNJkjF3F4eAvbQTXKn0p/.GpBg0.8dusSkJEdatpJXhibqh69OOV6', 'Emir', 2, 179616),
(15, 'emirssyah13@gmail.com', '$2y$10$IfjMxuVrf6HSavBj5IRHoeQ4urGxVCURy2ceDEo4Yf.U7de1GOTVq', 'Emirssyah Putra', 2, 0),
(16, 'syafirawulandrr@gmail.com', '$2y$10$hMDhq3DvcDwP.0ydSzhfGOW3GBu2U6w91GBCIgtGV1//VBRIdCD9m', 'Syafira Wulandari', 2, NULL),
(17, 'Mega@gmail.com', '$2y$10$kvcsXbBO.e1iqNfrNMLO4eJVUhTdGXE8/ItQXC7K5dEy.300HTd/2', 'Mery', 2, NULL),
(18, 'emirssyah11@gmail.com', '$2y$10$WjmEWjTK.QCWTpsOFeuf8uAGQeq6.GwndH9QC18Yif9THA710k1Yq', 'Emirssyah Putra', 2, NULL),
(19, 'emirssyahputra@gmail.com', '$2y$10$IfjMxuVrf6HSavBj5IRHoeQ4urGxVCURy2ceDEo4Yf.U7de1GOTVq', 'Emirssyah ', 1, NULL),
(20, 'merysah@gmail.com', '$2y$10$IfjMxuVrf6HSavBj5IRHoeQ4urGxVCURy2ceDEo4Yf.U7de1GOTVq', 'Merysah', 1, NULL),
(21, 'pengguna@mail.com', '$2y$10$MM.3otB/vt9BElGdZTSlX.a0Mq7eYocwzocLRNBzvU9b.pMUiNV7a', 'Pengguna', 2, NULL),
(22, 'admin@gmail.com', '$2y$10$eg8REd856.lfsj7KNhUsG./i.1NRbgTn2MtWwu9cOP.xRIn30hNEu', 'Admin', 1, NULL),
(23, 'penggunaa@mail.com', '$2y$10$Qsp1kWeIwM3T3LE3V38v1OeexgHpEljd.APXpfnFe53coPTdDtA1e', 'Pengguna', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendaftaran`
--

CREATE TABLE `riwayat_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `waktu_pendaftaran` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `id_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `nama` (`nama`),
  ADD KEY `email` (`email`),
  ADD KEY `id_loker` (`id_loker`);

--
-- Indexes for table `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `lowongan_pekerjaan`
--
ALTER TABLE `lowongan_pekerjaan`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_form` (`id_form`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD CONSTRAINT `form_pendaftaran_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `form_pendaftaran_ibfk_3` FOREIGN KEY (`id_loker`) REFERENCES `lowongan_pekerjaan` (`id_loker`);

--
-- Constraints for table `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  ADD CONSTRAINT `kontrak_kerja_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `riwayat_pendaftaran` (`id_pendaftaran`);

--
-- Constraints for table `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  ADD CONSTRAINT `riwayat_pendaftaran_ibfk_1` FOREIGN KEY (`id_form`) REFERENCES `form_pendaftaran` (`id_form`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
