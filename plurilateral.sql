-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2019 pada 04.50
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plurilateral`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(255) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tempat` varchar(500) NOT NULL,
  `event` int(110) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` text NOT NULL,
  `tipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `event` int(100) NOT NULL,
  `tipe` enum('paper','jurnal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `judul`, `dokumen`, `event`, `tipe`) VALUES
(74, 'test', 'assets/files/1573229917.pdf', 1, 'jurnal'),
(75, 'tsw', '.pdf', 1, 'paper'),
(76, 'fafaa', '.png', 1, 'paper'),
(77, 'sadsfsdfdsf', '1573226702.pdf', 1, 'paper'),
(78, 'titi', './assets/files/1573226786.pdf', 1, 'paper'),
(79, '', 'assets/files/default.jpg', 1, 'paper'),
(80, 'asd', 'assets/files/default.jpg', 1, 'paper'),
(81, 'zzz', 'assets/files/default.jpg', 1, 'paper'),
(83, 'ssss', 'assets/files/default.jpg', 1, 'paper'),
(84, 'xvf', 'assets/files/default.jpg', 1, 'paper'),
(85, 'dcc', 'assets/files/default.jpg', 2, 'paper'),
(86, 'dddd', 'assets/files/1573227703.pdf', 1, 'paper'),
(87, 'dcc', 'assets/files/default.jpg', 1, 'paper'),
(88, 'sdsdxxx', 'assets/files/default.jpg', 1, 'paper'),
(89, 'sssss', 'assets/files/1573229438.pdf', 1, 'paper'),
(90, 'gege', 'assets/files/1573229612.pdf', 1, 'paper');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(1, 'test', '2019-11-11', '2019-11-05'),
(2, 'yolo', '2019-11-18', '2019-11-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
