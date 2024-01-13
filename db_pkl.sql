-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 11.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id_data` int(11) NOT NULL,
  `nama_b` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `manfaat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_data`
--

INSERT INTO `tbl_data` (`id_data`, `nama_b`, `kabupaten`, `kecamatan`, `desa`, `latitude`, `longitude`, `manfaat`) VALUES
(17, 'Penjalin', 'Brebes', 'Paguyangan', 'Winduaji', '-7.326769', '109.055175', 'Irigasi'),
(18, 'Cacaban', 'Tegal', 'Kedung Banteng', 'Penujah', '-7.006600', '109.184928', 'Irigasi'),
(19, 'Jatibarang ', 'Kota Semarang', 'Gunungpati', 'Kandri', '-7.036667', '110.350278', 'Pengendali Banjir, Air Baku, PLTMH, Wisata'),
(20, 'Klego', 'Boyolali', 'Klego', 'Bade', '-7.362039', '110.704194', 'Irigasi'),
(22, 'Kedungombo', 'Grobogan', 'Geyer', 'Rambat', '-7.253134', '110.835360', 'Irigasi, Pengendali Banjir, Air Baku, PLTA, Wisata, Perikanan'),
(23, 'Sanggeh ', 'Grobogan', 'Toroh', 'Tambirejo', '-7.148098', '110.925758', 'Irigasi'),
(24, 'Simo', 'Grobogan', 'Kradenan', 'Simo', '-7.202685', '111.097440', 'Irigasi'),
(25, 'Nglangon', 'Grobogan', 'Kradenan', 'Nglangon ', '-7.170531', '111.140436', 'Irigasi'),
(26, 'Butak', 'Grobogan', 'Kradenan', 'Butak Pakis', '-7.175502', '111.117869', 'Irigasi'),
(27, 'Logung', 'Kudus', 'Jekulo', 'Tanjungrejo', '-6.758235', '110.922504', 'Irigasi, Air Baku, PLTA'),
(28, 'Gembong', 'Pati', 'Gembong', 'Gembong', '-6.695881', '110.957569', 'Irigasi'),
(29, 'Gunungrowo', 'Pati', 'Gunung Rowo', 'Siti Luhur', '-6.655406', '110.964167', 'Irigasi'),
(30, 'Grawan ', 'Rembang', 'Sumber', 'Grawan', '-6.783263', '111.292212', 'Irigasi, Air Baku'),
(31, 'Panohan', 'Rembang', 'Gunem', 'Panohan', '-6.820311', '111.432824', 'Irigasi, Air Baku'),
(32, 'Banyukuwung', 'Rembang', 'Sulang', 'Sudo', '-6.781169', '111.320815', 'Irigasi, Air Baku'),
(33, 'Lodan', 'Rembang', 'Sarang', 'Lodan', '-6.792527', '111.607986', 'Irigasi, Air Baku'),
(34, 'Greneng', 'Blora', 'Tunjungan', 'Greneng', '-6.908238', '111.356638', 'Irigasi'),
(35, 'Tempuran', 'Blora', 'Blora ', 'Tempuran', '-6.906322', '111.465522', 'Irigasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
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
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `email`, `hp`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin', NULL, NULL),
(4, 'Irza', 'irza', 'irza', 'tamu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
