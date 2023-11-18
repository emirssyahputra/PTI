-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 09:06 AM
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
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `alamat`, `jam`, `map`) VALUES
(1, 'Kopi Loer Sudirman', '20 Ilir D. IV, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan', 'Buka: Senin-Minggu 09.30-23.00', 'https://maps.app.goo.gl/4NnJLekm3jfXvkmEA'),
(2, 'Kopi Loer Celentang', 'Jalan Brigjen Hasan K, 30A, Bukit Sangkal, Kec. Kalidoni, Kota Palembang, Sumatera Selatan 30114', 'Buka: Senin-Minggu 07.00-22.00', 'https://maps.app.goo.gl/iJyWz7niWQm8nUUP8'),
(3, 'Rumah Loer Merdeka', 'Jl. Merdeka No. 349, Kecamatan Bukit Kecil, Kota Palembang, Sumatera Selatan 30135', 'Buka: Senin-Minggu 09.30-23.00', 'https://maps.app.goo.gl/9bgPN9EVKK66RgbUA'),
(4, 'Kora Coffee The Hub Sudirman', 'Jl. Jend Sudirman No.3264 & 3265, Kota Palembang, Sumatera Selatan 30129', 'Buka: Senin-Minggu 09.30-21.00', 'https://maps.app.goo.gl/zYpdg2dEyLX3WDbB9');

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
  `linkedin` varchar(100) DEFAULT NULL,
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
  `id_loker` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`id_form`, `nama`, `jenkel`, `pend`, `email`, `no_telp`, `alamat`, `linkedin`, `surat_lamaran`, `cv`, `ktp`, `ijazah`, `skck`, `packlaring`, `sertifikat_kompetensi`, `waktu_apply`, `status_adm`, `komentar_adm`, `status_wwc`, `komentar_wwc`, `status_uji`, `komentar_uji`, `status_akhir`, `komentar_akhir`, `id_loker`, `id_pengguna`) VALUES
(7, 'Pengguna', 'Laki-laki', 'SLTA Sederajat', 'pengguna@mail.com', '08123456789', 'ITERA', 'https://itera.com', '1699521093_ceb27cfca67a60a62ed8.pdf', '1699521093_abcd0f6486b058ee4181.pdf', '1699521093_29d44607cdf4dc70ce63.pdf', '1699521093_8339a9861f000ee52afd.pdf', '1699521093_e1a0457722b8a7af5af2.pdf', '1699521093_9bfb0210e4f6e150093e.pdf', '', '2023-11-09 16:11:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 21),
(8, 'Pengguna', 'Laki-laki', 'SLTA Sederajat', 'pengguna@mail.com', '08123456789', 'WarJo', 'https://itera.com', '1699685281_73d08a1d8feb6668ee2e.pdf', '1699685281_ffb31b2714a56ba72807.pdf', '1699685281_cb6545e8789d4eb1d2eb.pdf', '1699685281_1ddcc0f3492e549f3a86.pdf', '1699685281_ed0dd7c6aa0cc807d9cb.pdf', '1699685281_392adec70dc0a75454d9.pdf', '', '2023-11-11 13:48:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 21);

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
  `id_loker` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `jangka_waktu` datetime NOT NULL,
  `kualifikasi` varchar(255) NOT NULL,
  `jobdesk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lowongan_pekerjaan`
--

INSERT INTO `lowongan_pekerjaan` (`id_loker`, `Nama`, `jangka_waktu`, `kualifikasi`, `jobdesk`) VALUES
(1, 'Cashier', '2023-11-01 07:34:47', 'Bertanggung jawab untuk menerima dan mencatat setiap transaksi penjualan baik cash, credit & debit serta pembayaran dana elektronik. Memahami sistem billing dan pengoperasian sistem pembayaran EDC dan lainnya. Memiliki pengetahuan dasar tentang hospitalit', 'Berpenampilan menarik. Berkomunikasi dengan baik dan cakap. Berkepribadian baik, jujur, amanah dan Tangguh. Mampu dan teliti dalam hitung-menghitung . Bekerja secara team dan sanggup bekerja shift  \r\n. Mempunyai minat tinggi di posisi pengkasiran\r\n'),
(2, 'COOK & COOK HELPER', '2023-11-01 07:36:38', 'Bertanggung jawab untuk membantu Head Cook dalam pengelolaan dapur, menjaga standarisasi menu produksi baik cita rasa maupun penyajiannya, turut membantu Head Cook dalam menyeimbangkan biaya produksi dan strategi penjualan produk makanan', 'Berkomunikasi dengan baik dan cakap. Paham akan bahan baku dan harga pasar dengan baik. Menguasai standar kebersihan bahan makan, alat masak dan ruang dapur, paham akan cooking method\r\nMengerti dan mempunyai referensi jenis masakan nusantara dan western. '),
(3, 'BARISTA', '2023-11-02 07:44:35', 'Bertanggung jawab untuk memberikan pelayanan terbaik dan menyajikan produk sesuai dengan standar kualitas yang diterapkan kepada pelanggan dengan sigap dan cekatan. Barista menguasai pengetahuan mendasar akan kopi dan industrinya, serta pengetahuan dasar ', 'Berpenampilan menarik. Berkomunikasi dengan baik dan cakap. Modis, mempunyai ketertarikan dengan bidang pelayanan. Berkepribadian ramah, kreatif dan berinisiatif tinggi. Bekerja secara team dan sanggup bekerja shift. Mengerti tentang minuman kopi dan pros'),
(4, 'MANAGER', '2023-11-02 07:46:19', 'Bertanggung jawab terhadap fungsi pengarahan dan supervisi, rancangan organisasi dan pekerjaan, proses rekrutmen seperti seleksi, pelatihan dan penilaian serta fungsi controlling (pengendalian), reward & punishment. Memiliki kemampuan untuk memimpin, memp', 'Memiliki pengalaman di bidang F&B Min. 2 Tahun. Mampu mengoperasikan Ms. Office (Excel & Word)\r\nBerpenampilan menarik. Berkomunikasi dengan baik dan cakap. Berkepribadian baik, jujur dan tangguh. Berjiwa kepemimpinan, kreatif & inisiatif. Sanggup bekerja ');

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
(23, 'penggunaa@mail.com', '$2y$10$Qsp1kWeIwM3T3LE3V38v1OeexgHpEljd.APXpfnFe53coPTdDtA1e', 'Pengguna', 2, NULL),
(24, 'rio123@gmail.com', '$2y$10$XLSuf38guV24hFoG8/9BTu15irTEWd/p433tI3wREngqXBBOdxaSS', 'Rio', 1, NULL);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_loker` (`id_loker`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `nama` (`nama`),
  ADD KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `lowongan_pekerjaan`
--
ALTER TABLE `lowongan_pekerjaan`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  ADD CONSTRAINT `form_pendaftaran_ibfk_1` FOREIGN KEY (`id_loker`) REFERENCES `lowongan_pekerjaan` (`id_loker`),
  ADD CONSTRAINT `form_pendaftaran_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

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
