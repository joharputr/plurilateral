-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 09:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(255) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `tempat` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `tipe_artikel` enum('national','workshop') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `judul`, `tempat`, `tanggal`, `deskripsi`, `gambar`, `tipe_artikel`) VALUES
(1, 'Lokakarya Nasional : Pengarusutamaan Moderasi Beragama Sebagai Implementasi Resolusi Dewan HAM PBB 16/18', 'Hotel Royal Kuningan Jakarta', '2018-07-25', 'Lokakarya Nasional dengan tema “Pengarusutamaan Toleransi Aktif dan Moderasi Agama sebagai Implementasi Resolusi Dewan HAM PBB 16/18” diselenggarakan di Jakarta, pada tanggal 25-27 Juli 2018. Lokakarya Nasional ini akan menyosialisasikan nilai-nilai Resolusi 16/18 kepada seluruh pemangku kepentingan, sekaligus juga menjaring masukan dari seluruh Forum Kerukunan Umat Beragama (FKUB) Propinsi tentang upaya penanganan intoleransi dan ujaran serta hasutan kebencian. Lokakarya Nasional merupakan kerjasama Kementerian Agama RI, Kementerian Luar Negeri RI, Kalijaga Institute for Justice dan didukung oleh Ford Foundation.', '', 'national');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `gambar_id` int(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `artikel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`gambar_id`, `path`, `artikel`) VALUES
(1, 'storage/national/img/1.jpg', 1),
(2, 'storage/national/img/2.jpg', 1),
(3, 'storage/national/img/3.jpg', 1),
(4, 'storage/national/img/4.jpg', 1),
(5, 'storage/national/img/5.jpg', 1),
(6, 'storage/national/img/6.jpg', 1),
(7, 'storage/national/img/7.jpg', 1),
(8, 'storage/national/img/8.jpg', 1),
(9, 'storage/national/img/9.jpg', 1),
(10, 'storage/national/img/10.jpg', 1),
(11, 'storage/national/img/11.jpg', 1),
(12, 'storage/national/img/12.jpg', 1),
(13, 'storage/national/img/13.jpg', 1),
(14, 'storage/national/img/14.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi_kegiatan` text,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `tipe` enum('national','international') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `nama`, `deskripsi_kegiatan`, `tanggal_mulai`, `tanggal_selesai`, `tipe`) VALUES
(1, 'Lokakarya', '', '2018-07-25', '2018-07-27', 'national'),
(2, 'Jayakarta', '', '2019-11-11', '2019-11-29', 'international');

-- --------------------------------------------------------

--
-- Table structure for table `pl_resource`
--

CREATE TABLE `pl_resource` (
  `resource_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `event` int(100) DEFAULT NULL,
  `is_event` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl_resource`
--

INSERT INTO `pl_resource` (`resource_id`, `judul`, `tempat`, `tanggal`, `deskripsi`, `dokumen`, `event`, `is_event`) VALUES
(1, 'Memahami Pentingnya Resolusi', 'Sleman', '2019-11-06', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'assets/memahami_pentingnya_resolusi_16.pdf', 1, 1),
(2, 'asdasdddadsa', 'adadas', '2019-11-13', 'asdasasddaasd', 'assets/memahami_pentingnya_resolusi_16.pdf', 0, 0),
(3, 'Ngetest Aja Pertama', 'Sleman', '2019-11-06', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'assets/memahami_pentingnya_resolusi_16.pdf', 1, 1),
(4, 'Ngetest Aja Kedua', 'Sleman', '2019-11-06', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'assets/memahami_pentingnya_resolusi_16.pdf', 1, 1),
(5, 'Ngetest Aja Ketiga', 'Sleman', '2019-11-06', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'assets/memahami_pentingnya_resolusi_16.pdf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`) VALUES
(1, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`gambar_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`);

--
-- Indexes for table `pl_resource`
--
ALTER TABLE `pl_resource`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `gambar_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pl_resource`
--
ALTER TABLE `pl_resource`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
