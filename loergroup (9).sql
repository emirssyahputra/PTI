-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2023 pada 18.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `cabang`
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
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama`, `alamat`, `jam`, `map`, `startDay`, `endDay`, `jamBuka`, `jamTutup`) VALUES
(1, 'Kopi Loer Sudirman', '20 Ilir D. IV, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan', 'Senin-Minggu 09.30-23.00', 'https://maps.app.goo.gl/4NnJLekm3jfXvkmEA', '', '', '00:00:00', '00:00:00'),
(2, 'Kopi Loer Celentang', 'Jalan Brigjen Hasan K, 30A, Bukit Sangkal, Kec. Kalidoni, Kota Palembang, Sumatera Selatan 30114', 'Senin-Minggu 07.00-22.00', 'https://maps.app.goo.gl/iJyWz7niWQm8nUUP8', '', '', '00:00:00', '00:00:00'),
(3, 'Rumah Loer Merdeka', 'Jl. Merdeka No. 349, Kecamatan Bukit Kecil, Kota Palembang, Sumatera Selatan 30135', 'Senin-Minggu 09.30-23.00', 'https://maps.app.goo.gl/9bgPN9EVKK66RgbUA', '', '', '00:00:00', '00:00:00'),
(4, 'Kora Coffee The Hub Sudirman', 'Jl. Jend Sudirman No.3264 & 3265, Kota Palembang, Sumatera Selatan 30129', 'Senin-Minggu 09.30-21.00', 'https://maps.app.goo.gl/zYpdg2dEyLX3WDbB9', '', '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pendaftaran`
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
  `id_loker` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`id_form`, `nama`, `jenkel`, `pend`, `email`, `no_telp`, `alamat`, `linkedin`, `surat_lamaran`, `cv`, `ktp`, `ijazah`, `skck`, `packlaring`, `sertifikat_kompetensi`, `waktu_apply`, `status_adm`, `komentar_adm`, `status_wwc`, `komentar_wwc`, `status_uji`, `komentar_uji`, `status_akhir`, `komentar_akhir`, `id_loker`, `id_pengguna`) VALUES
(5, 'Pengguna', 'Laki-laki', 'SLTA Sederajat', 'pengguna@mail.com', '0812345678', 'JL. Mekarsari', 'https://xxx.com', '1699416795_7f14dfcf70caa518f969.pdf', '1699416795_f53e4cfdaaea199917d5.pdf', '1699416795_a81e7f0aefa84f71eddc.pdf', '1699416795_c232bdab848a6caec49a.pdf', '1699416795_01790cd1949069866d94.pdf', '1699416795_81aab4834f3aa8819d95.pdf', '', '2023-11-08 11:13:15', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Enim blandit volutpat maecenas volutpat blandit aliquam. Dictum varius duis at consectetur lorem donec massa sapien. Duis tristique sollicitudin nibh sit amet commodo nulla. Vulputate dignissim suspendisse in est ante. Elit pellentesque habitant morbi tristique. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Risus quis varius quam quisque id diam vel quam. Condimentum mattis pellentesque id nibh tortor id aliquet. Eget dolor morbi non arcu risus quis. Turpis egestas integer eget aliquet nibh praesent tristique magna. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Vivamus arcu felis bibendum ut tristique et egestas quis ipsum. Enim nec dui nunc mattis enim ut tellus.\r\n\r\nSed cras ornare arcu dui vivamus. Senectus et netus et malesuada fames ac turpis. Aliquam id diam maecenas ultricies mi eget mauris pharetra. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Ultrices neque ornare aenean euismod elementum nisi quis. Aliquam nulla facilisi cras fermentum. Et molestie ac feugiat sed. Sit amet consectetur adipiscing elit ut aliquam purus sit. Dui nunc mattis enim ut tellus elementum sagittis vitae. Suspendisse ultrices gravida dictum fusce ut. Vulputate ut pharetra sit amet aliquam.\r\n\r\nRisus commodo viverra maecenas accumsan lacus. Accumsan sit amet nulla facilisi morbi tempus. Fermentum et sollicitudin ac orci phasellus egestas tellus. Ligula ullamcorper malesuada proin libero nunc. Ac tortor dignissim convallis aenean. Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Neque aliquam vestibulum morbi blandit cursus risus at ultrices mi. Bibendum est ultricies integer quis. Pulvinar mattis nunc sed blandit libero volutpat. At tellus at urna condimentum mattis pellentesque id nibh. Non arcu risus quis varius quam quisque. In vitae turpis massa sed elementum tempus.\r\n\r\nSed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. In hac habitasse platea dictumst vestibulum rhoncus. Sagittis id consectetur purus ut faucibus pulvinar. Nisl pretium fusce id velit ut tortor pretium viverra. Leo integer malesuada nunc vel risus commodo viverra maecenas. Justo nec ultrices dui sapien eget. Morbi blandit cursus risus at ultrices mi tempus. Ullamcorper velit sed ullamcorper morbi. Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. Molestie at elementum eu facilisis sed odio morbi quis commodo. Risus quis varius quam quisque id diam. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur. Neque gravida in fermentum et sollicitudin ac orci. Mauris cursus mattis molestie a. Turpis nunc eget lorem dolor sed viverra ipsum nunc.\r\n\r\nLectus proin nibh nisl condimentum id venenatis a condimentum. Nec feugiat in fermentum posuere urna nec tincidunt praesent. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Lobortis scelerisque fermentum dui faucibus in. Orci ac auctor augue mauris augue. Arcu vitae elementum curabitur vitae. Commodo odio aenean sed adipiscing diam donec. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Sed euismod nisi porta lorem mollis. Dui nunc mattis enim ut tellus elementum sagittis. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Mattis nunc sed blandit libero volutpat sed cras ornare arcu. Ultrices neque ornare aenean euismod elementum nisi. Amet massa vitae tortor condimentum lacinia quis vel eros. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Quis risus sed vulputate odio. A lacus vestibulum sed arcu. Netus et malesuada fames ac turpis egestas maecenas pharetra. Pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper.', NULL, NULL, NULL, NULL, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Enim blandit volutpat maecenas volutpat blandit aliquam. Dictum varius duis at consectetur lorem donec massa sapien. Duis tristique sollicitudin nibh sit amet commodo nulla. Vulputate dignissim suspendisse in est ante. Elit pellentesque habitant morbi tristique. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Risus quis varius quam quisque id diam vel quam. Condimentum mattis pellentesque id nibh tortor id aliquet. Eget dolor morbi non arcu risus quis. Turpis egestas integer eget aliquet nibh praesent tristique magna. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Vivamus arcu felis bibendum ut tristique et egestas quis ipsum. Enim nec dui nunc mattis enim ut tellus.', 2, 21),
(6, 'Emirssyah Putra', 'Laki-laki', 'S1', 'emirssyah13@gmail.com', '081368620646', 'Jl Blora No 9 ', 'https://www.linkedin.com/in/emirssyah-putra-91644a213/', '1699626061_e0e34e73950a0a7b5612.pdf', '1699626061_a62a2e50aca5c30ea691.pdf', '1699626061_f68413a35a284c76cb07.pdf', '1699626061_4422ef079bdbf3a23b67.pdf', '1699626061_56e20b0770ada4ee29f4.pdf', '1699626061_e51a38b77a922594d209.pdf', '', '2023-11-10 21:21:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 15),
(7, 'Emirssyah Putra', 'Laki-laki', 'S1', 'emirssyah13@gmail.com', '081368620646', 'jalan blora no 9 ', 'https://www.linkedin.com/in/emirssyah-putra-91644a213/', '1699626203_f02c37d56f47cc4e455b.pdf', '1699626203_3c4e9ff231ba34934682.pdf', '1699626203_c87b8e866a202321d790.pdf', '1699626203_9a6e700eb538b1dc039b.pdf', '1699626203_42da793bf73aca5bec57.pdf', '1699626203_48e022bca35dc9070ae7.pdf', '', '2023-11-10 21:23:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak_kerja`
--

CREATE TABLE `kontrak_kerja` (
  `id_kontrak` int(11) NOT NULL,
  `jangka_waktu` datetime NOT NULL,
  `id_pdf` varchar(255) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_pekerjaan`
--

CREATE TABLE `lowongan_pekerjaan` (
  `id_loker` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `jangka_waktu` datetime NOT NULL,
  `kualifikasi` varchar(255) NOT NULL,
  `jobdesk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lowongan_pekerjaan`
--

INSERT INTO `lowongan_pekerjaan` (`id_loker`, `Nama`, `jangka_waktu`, `kualifikasi`, `jobdesk`) VALUES
(1, 'Cashier', '2023-11-01 07:34:47', 'Bertanggung jawab untuk menerima dan mencatat setiap transaksi penjualan baik cash, credit & debit serta pembayaran dana elektronik. Memahami sistem billing dan pengoperasian sistem pembayaran EDC dan lainnya. Memiliki pengetahuan dasar tentang hospitalit', 'Berpenampilan menarik. Berkomunikasi dengan baik dan cakap. Berkepribadian baik, jujur, amanah dan Tangguh. Mampu dan teliti dalam hitung-menghitung . Bekerja secara team dan sanggup bekerja shift  \r\n. Mempunyai minat tinggi di posisi pengkasiran\r\n'),
(2, 'COOK & COOK HELPER', '2023-11-01 07:36:38', 'Bertanggung jawab untuk membantu Head Cook dalam pengelolaan dapur, menjaga standarisasi menu produksi baik cita rasa maupun penyajiannya, turut membantu Head Cook dalam menyeimbangkan biaya produksi dan strategi penjualan produk makanan', 'Berkomunikasi dengan baik dan cakap. Paham akan bahan baku dan harga pasar dengan baik. Menguasai standar kebersihan bahan makan, alat masak dan ruang dapur, paham akan cooking method\r\nMengerti dan mempunyai referensi jenis masakan nusantara dan western. '),
(3, 'BARISTA', '2023-11-02 07:44:35', 'Bertanggung jawab untuk memberikan pelayanan terbaik dan menyajikan produk sesuai dengan standar kualitas yang diterapkan kepada pelanggan dengan sigap dan cekatan. Barista menguasai pengetahuan mendasar akan kopi dan industrinya, serta pengetahuan dasar ', 'Berpenampilan menarik. Berkomunikasi dengan baik dan cakap. Modis, mempunyai ketertarikan dengan bidang pelayanan. Berkepribadian ramah, kreatif dan berinisiatif tinggi. Bekerja secara team dan sanggup bekerja shift. Mengerti tentang minuman kopi dan pros'),
(4, 'MANAGER', '2023-11-02 07:46:19', 'Bertanggung jawab terhadap fungsi pengarahan dan supervisi, rancangan organisasi dan pekerjaan, proses rekrutmen seperti seleksi, pelatihan dan penilaian serta fungsi controlling (pengendalian), reward & punishment. Memiliki kemampuan untuk memimpin, memp', 'Memiliki pengalaman di bidang F&B Min. 2 Tahun. Mampu mengoperasikan Ms. Office (Excel & Word)\r\nBerpenampilan menarik. Berkomunikasi dengan baik dan cakap. Berkepribadian baik, jujur dan tangguh. Berjiwa kepemimpinan, kreatif & inisiatif. Sanggup bekerja ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
-- Dumping data untuk tabel `pengguna`
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
-- Struktur dari tabel `riwayat_pendaftaran`
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
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indeks untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_loker` (`id_loker`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `nama` (`nama`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indeks untuk tabel `lowongan_pekerjaan`
--
ALTER TABLE `lowongan_pekerjaan`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_form` (`id_form`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lowongan_pekerjaan`
--
ALTER TABLE `lowongan_pekerjaan`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD CONSTRAINT `form_pendaftaran_ibfk_1` FOREIGN KEY (`id_loker`) REFERENCES `lowongan_pekerjaan` (`id_loker`),
  ADD CONSTRAINT `form_pendaftaran_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  ADD CONSTRAINT `kontrak_kerja_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `riwayat_pendaftaran` (`id_pendaftaran`);

--
-- Ketidakleluasaan untuk tabel `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  ADD CONSTRAINT `riwayat_pendaftaran_ibfk_1` FOREIGN KEY (`id_form`) REFERENCES `form_pendaftaran` (`id_form`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
