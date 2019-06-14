-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 11:53 AM
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
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_id` int(15) NOT NULL,
  `event_id` int(15) NOT NULL,
  `nama_doc` varchar(150) NOT NULL,
  `path_doc` varchar(255) NOT NULL,
  `jenis_doc` enum('Paper','Journal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(15) NOT NULL,
  `nama_event` varchar(150) NOT NULL,
  `sub_nama_event` varchar(150) NOT NULL,
  `tempat_event` varchar(150) NOT NULL,
  `tanggal_event_mulai` date NOT NULL,
  `tanggal_event_selesai` date NOT NULL,
  `kategori_event` enum('National','International') NOT NULL,
  `deskripsi_event` text,
  `doc_event` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `nama_event`, `sub_nama_event`, `tempat_event`, `tanggal_event_mulai`, `tanggal_event_selesai`, `kategori_event`, `deskripsi_event`, `doc_event`) VALUES
(1, 'Lokakarya Nasional', 'Pengarusutamaan Moderasi Beragama Sebagai Implementasi Resolusi Dewan HAM PBB 16/18', 'Hotel Royal Kuningan Jakarta', '2018-07-25', '2018-07-27', 'National', 'Lokakarya Nasional dengan tema “Pengarusutamaan Toleransi Aktif dan Moderasi Agama sebagai Implementasi Resolusi Dewan HAM PBB 16/18” diselenggarakan di Jakarta, pada tanggal 25-27 Juli 2018. Lokakarya Nasional ini akan menyosialisasikan nilai-nilai Resolusi 16/18 kepada seluruh pemangku kepentingan, sekaligus juga menjaring masukan dari seluruh Forum Kerukunan Umat Beragama (FKUB) Propinsi tentang upaya penanganan intoleransi dan ujaran serta hasutan kebencian. Lokakarya Nasional merupakan kerjasama Kementerian Agama RI, Kementerian Luar Negeri RI, Kalijaga Institute for Justice dan didukung oleh Ford Foundation.', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
