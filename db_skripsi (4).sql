-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 07:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id_data` int(11) NOT NULL,
  `nama_b` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `manfaat` varchar(255) DEFAULT NULL,
  `ikan` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `kapal` varchar(128) NOT NULL,
  `pemilik` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id_data`, `nama_b`, `kabupaten`, `kecamatan`, `desa`, `latitude`, `longitude`, `manfaat`, `ikan`, `harga`, `kapal`, `pemilik`) VALUES
(17, 'TPI Unit 1', 'Pati', 'Juwana', 'Bajomulyo', '-6.704561863903582', '111.1536165523627', 'Tempat Pelelangan Ikan', 'iwak', '980', '', ''),
(43, 'TPI Unit II', 'Pati', 'Juwana', 'Bajomulyo', '-6.699836142102772', '111.1538094067745', 'Tempat Pelelangan Ikan', '', '', '', ''),
(44, 'TPI Banyutowo Baru', 'Pati', 'Dukuhseti', 'Banyutowo', '-6.459707792085139', '111.05019388071436', 'Tempat Pelelangan Ikan', '', '', '', ''),
(45, 'TPI Margomulyo', 'Pati', 'Tayu', 'Belahan', '-6.569757040237991', '111.0641804015894', 'Tempat Pelelangan Ikan', '', '', '', ''),
(46, 'TPI Pecangaan', 'Pati', 'Batangan', 'Pecangaan', '-6.69883451762054', '111.2368667628023', 'Tempat Pelelangan Ikan', '', '', '', ''),
(47, 'Alun-Alun Pati', 'Pati', 'Pati', 'Jl. Tombronegoro', '-6.753515935046887', '111.03998242359607', 'Titik Pusat', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ikan`
--

CREATE TABLE `tbl_ikan` (
  `id` int(24) NOT NULL,
  `ikan` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `tpi_id` int(30) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ikan`
--

INSERT INTO `tbl_ikan` (`id`, `ikan`, `harga`, `tpi_id`, `tgl`) VALUES
(1, 'Mujaer', 'Rp. 13.000', 17, '2023-09-01'),
(2, 'Cumi', 'Rp.230000', 17, '2023-09-01'),
(3, 'Bandeng', 'Rp. 25.000', 44, '2023-09-02'),
(4, 'Pari', 'Rp. 20.000', 17, '2023-09-03'),
(5, 'Ikan Buntalll', 'Rp. 4000', 17, '2023-10-10'),
(6, 'Ikan Bandeng', 'Rp. 40000', 43, '2023-10-11'),
(9, 'Ikan Siem', 'Rp. 6000', 17, '2023-10-12'),
(10, 'Deleg', 'Rp. 9000', 46, '2023-11-01'),
(11, 'Bawal', 'Rp. 8000', 44, '2023-11-02'),
(12, 'sad', 'asdas', 17, '2023-12-04'),
(14, 'Lohan', 'Rp. 90000', 17, '2023-10-12'),
(15, 'jjjj', '999000001', 17, '2023-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kapal`
--

CREATE TABLE `tbl_kapal` (
  `id` int(128) NOT NULL,
  `no_kapal` varchar(128) NOT NULL,
  `pemilik` varchar(128) NOT NULL,
  `tpi_id` int(30) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kapal`
--

INSERT INTO `tbl_kapal` (`id`, `no_kapal`, `pemilik`, `tpi_id`, `tgl`) VALUES
(5, 'JW00011', 'Agmal Fasichul F.', 17, '2023-10-01'),
(6, 'JW0002', 'Fulan', 43, '2023-10-06'),
(7, 'JW0003', 'Sichul', 44, '2023-11-01'),
(8, 'JW0004', 'Fa', 45, '2023-11-02'),
(9, 'JW0005', 'Hahaha', 46, '2023-11-05'),
(13, 'JW0006', 'Ahmad', 43, '2023-12-05'),
(14, 'JW0010', 'Contoh', 44, '0000-00-00'),
(15, 'JW0011', 'Contoh Lagi', 43, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tpi`
--

CREATE TABLE `tbl_tpi` (
  `id` int(24) NOT NULL,
  `tpi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tpi`
--

INSERT INTO `tbl_tpi` (`id`, `tpi`) VALUES
(1, 'TPI Unit 1'),
(2, 'TPI Unit II'),
(3, 'TPI Banyutowo Baru'),
(4, 'TPI Margomulyo'),
(5, 'TPI Pecangaan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `email`, `hp`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin', NULL, NULL),
(4, 'Irza', 'irza', 'irza', 'tamu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tbl_ikan`
--
ALTER TABLE `tbl_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kapal`
--
ALTER TABLE `tbl_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tpi`
--
ALTER TABLE `tbl_tpi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_ikan`
--
ALTER TABLE `tbl_ikan`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_kapal`
--
ALTER TABLE `tbl_kapal`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_tpi`
--
ALTER TABLE `tbl_tpi`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
