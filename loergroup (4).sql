-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 07.45
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
  `id_loker` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Cashier', '2023-11-01 07:34:47', 'asdadadad', 'fwqeqsdafz'),
(2, 'Chef', '2023-11-01 07:36:38', 'dasdadw', 'wqeqrqwasdada');

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
(15, 'emirssyah13@gmail.com', '$2y$10$oJ6.v6y3HluNpYMSwSssWuZNGgzVEi.W9hoAOYCMFy4oKfG3BGaWe', 'Emirssyah Putra', 2, 187689);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `verif`
--

CREATE TABLE `verif` (
  `id_otp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `verif`
--
ALTER TABLE `verif`
  ADD PRIMARY KEY (`id_otp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontrak_kerja`
--
ALTER TABLE `kontrak_kerja`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lowongan_pekerjaan`
--
ALTER TABLE `lowongan_pekerjaan`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pendaftaran`
--
ALTER TABLE `riwayat_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `verif`
--
ALTER TABLE `verif`
  MODIFY `id_otp` int(11) NOT NULL AUTO_INCREMENT;

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
