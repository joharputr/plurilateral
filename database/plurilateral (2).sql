-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 10.11
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
  `artikel_id` int(255) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `tempat` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` text NOT NULL,
  `tipe_artikel` enum('national','workshop') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `judul`, `tempat`, `tanggal`, `deskripsi`, `gambar`, `tipe_artikel`) VALUES
(1, 'adad', 'ssds', '2019-10-29', 'asasasas', 'assets/storage/national/default.jpg', 'national'),
(2, 'wewe', 'ssds', '2019-11-23', 'ssss', 'assets/files/default.jpg', 'national');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `dokumen_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `event` int(100) NOT NULL,
  `tipe_dokumen` enum('paper','jurnal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`dokumen_id`, `judul`, `dokumen`, `event`, `tipe_dokumen`) VALUES
(1, 'Memahami Pentingnya Resolusi', 'assets/memahami_pentingnya_resolusi_16.pdf', 1, 'paper'),
(2, 'Coba DOlo', 'assets/memahami_pentingnya_resolusi_16.pdf', 2, 'paper'),
(4, 'Kokaokakao', 'assets/files/1573462458.jpg', 2, 'jurnal'),
(5, 'addasafasfasfasaf', 'assets/files/default.jpg', 1, 'paper'),
(6, 'test', 'assets/files/1573451509.pdf', 1, 'paper'),
(7, '', 'assets/files/1573451886.png', 1, 'paper'),
(8, 'ppt', 'assets/files/default.jpg', 1, 'paper'),
(9, '', 'assets/files/default.jpg', 1, 'paper'),
(10, 'xxx', 'assets/files/default.jpg', 1, 'paper'),
(12, 'xz', 'assets/files/1573455834.pdf', 1, 'paper'),
(13, '', 'assets/files/default.jpg', 1, 'paper'),
(14, '', 'assets/files/default.jpg', 1, 'paper'),
(15, '', 'assets/files/default.jpg', 1, 'paper'),
(16, '', 'assets/files/default.jpg', 1, 'paper'),
(17, 'wewe', 'assets/files/default.jpg', 1, 'paper'),
(18, '', 'assets/files/default.jpg', 1, 'paper'),
(20, 'pptx baik', 'assets/files/1573453965.pptx', 1, 'paper'),
(21, 'mamak', 'assets/files/1573456621.jpg', 1, 'paper'),
(22, 'polisi', 'assets/files/1573456692.jpg', 1, 'paper'),
(23, 'xxx', 'assets/files/default.jpg', 1, 'paper'),
(24, 'xxxx', 'assets/files/default.jpg', 1, 'paper'),
(25, 'adad', 'assets/files/default.jpg', 1, 'paper'),
(26, 'zzz', 'assets/files/default.jpg', 1, 'paper');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(100) NOT NULL,
  `path` text NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi_kegiatan` text DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `tipe` enum('national','international') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `nama`, `deskripsi_kegiatan`, `tanggal_mulai`, `tanggal_selesai`, `tipe`) VALUES
(1, 'Lokakarya', '', '2018-07-25', '2018-07-27', 'national'),
(2, 'Jayakarta', '', '2019-11-11', '2019-11-29', 'international');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`dokumen_id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
