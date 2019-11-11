-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 06.39
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
  `tipe_artikel` enum('national','international') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `judul`, `tempat`, `tanggal`, `deskripsi`, `gambar`, `tipe_artikel`) VALUES
(13, 'sabas', 'ss', '1899-11-30', 'adadzz', 'assets/files/default.jpg', 'international'),
(17, 'saasa', 'sas', '2019-11-23', 'ssasasaass', 'assets/storage/national/default.jpg', 'national'),
(21, 'arak', 'aaaddd', '2019-11-26', 'ewedd', 'assets/files/default.jpg', 'national'),
(22, '', '', '0000-00-00', '', 'assets/storage/national/1573371222.pdf', 'national'),
(23, '', '', '0000-00-00', '', 'assets/storage/national/1573381613.pdf', 'national'),
(24, 'sisis', 'www', '2019-11-23', 'czcz', 'assets/storage/national/default.jpg', 'international'),
(25, 'fafa', 'ssds', '2019-11-23', 'adada', 'assets/storage/national/default.jpg', 'international'),
(26, 'qq', 'ssds', '2019-11-10', 'qqq', 'assets/storage/national/default.jpg', 'international'),
(27, 'xxx', '', '2040-12-20', '', 'assets/files/default.jpg', 'national'),
(28, 'sdsdaaaa', 'sas', '2019-11-10', 'wewe', 'assets/storage/national/default.jpg', 'national');

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
(2, 'Coba DOlo', 'assets/files/default.jpg', 3, 'jurnal'),
(7, 'adadaa', 'assets/files/default.jpg', 2, ''),
(8, 'adsada', 'assets/files/1573368764.pdf', 1, 'paper'),
(9, 'qq', 'assets/files/default.jpg', 1, 'jurnal'),
(10, 'sssssss', 'assets/files/default.jpg', 2, ''),
(11, 'sdzc', 'assets/files/default.jpg', 4, 'paper');

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
(4, 'tes', 'sss', '2019-11-14', '2019-11-20', 'national'),
(5, 'tes', 'sss', '2019-11-14', '2019-11-20', ''),
(6, 'Antonio', 'asdsdsd', '2019-11-23', '2019-10-29', 'national'),
(7, '', '', '0000-00-00', '0000-00-00', 'national'),
(8, 'fadaf', 'afa', '2019-11-21', '2019-11-07', 'national');

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
  MODIFY `artikel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
