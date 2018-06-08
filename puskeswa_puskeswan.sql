-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2018 at 11:59 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskeswa_puskeswan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `lintang` double NOT NULL,
  `bujur` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `alamat`, `id_kecamatan`, `id_jam`, `no_telp`, `lintang`, `bujur`, `ket`) VALUES
(1, 'Agus Priyohandoko', 'Jl. Bantul, Panggungharjo, Sewon, Bantul, Daerah Istimewa Yogyakarta 55188', 5, 2, '08562853371', -7.8410923, 110.3576466, 'Agus Priyohandoko Veterinarian'),
(2, 'Drh. Sri Imawati', 'Demangan, Jambitan, Banguntapan', 1, 2, '085728880184', -7.845275, 110.4164213, ''),
(3, 'Drh. Sri Rahayu', 'Pinggir, Sidomulyo, Bambanglipuro ', 4, 2, '085741137576', -7.9652126, 110.2981899, ''),
(4, 'Drh. Joko Purwoko', 'Ngentak Mangir, Wijirejo, Pandak ', 13, 2, '085741137576', -7.902723, 110.283178, ''),
(5, 'Drh. Wahyunani TR', 'Pos Keswan Pleret', 3, 2, '085741137576', -7.8830743, 110.4133116, ''),
(6, 'Drh. Sri Budoyo', 'Bantul Warung, Bantul', 8, 2, '085741137576', -7.882854, 110.333101, ''),
(7, 'Drh. Untung S.', 'Jagalan C19, Banguntapan', 1, 2, '085741137576', -7.8109171, 110.4050495, ''),
(8, 'Drh. Subeno K.', 'Perum Sedayu Permai Blok D 8 Sedayu ', 17, 2, '085741137576', -7.8267022, 110.2594023, ''),
(9, 'Drh. Wisnu Sukmono', 'Bantul Warung, Bantul', 8, 2, '0822-1000-5978', -7.885205, 110.334167, ''),
(10, 'Drh. Agus Rachmad S', 'Cepit, Pendowoharjo, Sewon', 2, 2, '085741137576', -7.866054, 110.336422, ''),
(11, 'Drh. Saptiyantono', 'Kralas, Canden, Jetis', 2, 2, '085741137576', -7.918053, 110.367001, ''),
(12, 'Drh. Aida Zumaroh', 'Puskeswan Piyungan', 14, 2, '085741137576', -7.8250004, 110.4775152, ''),
(13, 'Drh.Agus Priyo Handoko', 'Pelemsewu Rt06/40 Panggungharjo Sewon ', 5, 2, '085741137576', -7.8410838, 110.3576446, '');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(1, '07.30- 14.00'),
(2, '15.00 - 21.00'),
(3, '24 jam'),
(4, '12.00 - 21.00'),
(5, '09.00 - 17.00'),
(7, '09.00 - 18.00'),
(8, '09.00 - 21.00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'puskeswan'),
(2, 'dokter'),
(3, 'toko');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Banguntapan'),
(2, 'Jetis'),
(3, 'Pleret'),
(4, 'Bambang Lipuro'),
(5, 'Sewon'),
(6, 'Imogiri'),
(8, 'Bantul'),
(9, 'Dlingo'),
(10, 'Kasihan'),
(11, 'Kretek'),
(12, 'Pajangan'),
(13, 'Pandak'),
(14, 'Piyungan'),
(15, 'Pundong'),
(16, 'Sanden'),
(17, 'Sedayu'),
(18, 'Srandakan');

-- --------------------------------------------------------

--
-- Table structure for table `puskeswan`
--

CREATE TABLE `puskeswan` (
  `id_puskeswan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `lintang` double NOT NULL,
  `bujur` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puskeswan`
--

INSERT INTO `puskeswan` (`id_puskeswan`, `nama`, `alamat`, `id_kecamatan`, `id_jam`, `no_telp`, `lintang`, `bujur`, `ket`) VALUES
(2, 'Puskeswan Imogiri', 'Kebonagung, Imogiri, Bantul, Daerah Istimewa Yogyakarta 55782', 6, 1, '085728880184', -7.9258721, 110.3700407, 'Jam kerja:\r\nSenin â€“ Sabtu 07.30- 14.00\r\nMinggu dan tanggal merah libur\r\n'),
(3, 'Puskeswan Piyungan', 'Tegal, Srimulyo, Piyungan, Bantul, Daerah Istimewa Yogyakarta 55792', 14, 1, '085728880184', -7.8366384, 110.4721517, 'Jam kerja:\r\nSenin â€“ Kamis 07.30 â€“ 14.30\r\nJumat 07.30 â€“ 11.30\r\nSabtu 07.30 â€“ 13.00\r\nMinggu dan tanggal merah libur'),
(4, 'Puskeswan Dlingo', 'Sendangwesi, Terong, Dlingo, Bantul, Daerah Istimewa Yogyakarta 55783', 9, 1, '085728880184', -7.8366326, 110.4043003, 'Jam Kerja:\r\nSenin â€“ Kamis 08.00 â€“ 14.00\r\nJumat 08.00 â€“ 11.30\r\nSabtu, Minggu dan tanggal merah libur'),
(5, 'Puskeswan Pleret ', 'Jembangan, Segoroyoso, Pleret, Bantul, Daerah Istimewa Yogyakarta 55791', 3, 1, '0274 (356565)', -7.8830743, 110.4122218, 'Jam Kerja:\r\nSenin â€“ Sabtu 08.30 â€“ 16.00\r\nMinggu dan tanggal merah libur'),
(6, 'Puskeswan Jetis', 'Ngenthak, Sumberagung, Jetis, Bantul, Daerah Istimewa Yogyakarta 55781', 2, 1, '0274555555', -7.9099597, 110.3646034, 'Jam kerja:\r\nSenin â€“ Sabtu 07.30- 14.00\r\nMinggu dan tanggal merah libur\r\n'),
(7, 'Puskeswan Pundong', 'Jl. Joyowinoto, Panjangrejo, Pundong, Bantul, Daerah Istimewa Yogyakarta 55771', 15, 1, '0274444444', -7.9539701, 110.3291593, 'Jam kerja\r\nSenin â€“ Sabtu 07.30- 14.00\r\nMinggu dan tanggal merah libur\r\n'),
(8, 'Puskeswan Pandak', 'Ngepreh, Gilangharjo, Pandak, Bantul Daerah Istimewa Yogyakarta 55761', 13, 1, '08174124438', -7.9198486, 110.3133563, 'Jam kerja:\r\nSenin â€“ Kamis 08.00 â€“ 14.00\r\nJumat 08.00 â€“ 11.00\r\nSabtu, Minggu dan tanggal merah libur\r\n'),
(9, 'Puskeswan Pajangan', 'Jalan Pajangan, Triwidadi, Bantul, Daerah Istimewa Yogyakarta 55751', 12, 1, '08157935895', -7.8639397, 110.2569491, 'Jam kerja:\r\nSenin â€“ Sabtu 07.30- 14.00\r\nMinggu dan tanggal merah libur\r\n'),
(10, 'Puskeswan Kasihan', 'Jalan Mrisi Dalam 2, Tirtonirmolo, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 10, 1, '0274888888', -7.8372628, 110.3404201, 'Jam kerja:\r\nSenin â€“ Sabtu 07.30 â€“ 14.30\r\nMinggu dan tanggal merah libur\r\n'),
(11, 'Puskeswan Kasihan', 'Jalan Mrisi Dalam 2, Tirtonirmolo, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 10, 1, '0274333333', -7.8372628, 110.3404201, 'Jam kerja:\r\nSenin â€“ Sabtu 07.30 â€“ 14.30\r\nMinggu dan tanggal merah libur\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `lintang` double NOT NULL,
  `bujur` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama`, `alamat`, `id_kecamatan`, `id_jam`, `no_telp`, `lintang`, `bujur`, `ket`) VALUES
(1, 'Nugroho PS', 'Kedaton, Pleret, Pleret', 3, 5, '0333333333333', -7.856448, 110.349141, 'Menjual Toko Satu'),
(2, 'Lastari PS', 'Tanjung, Patalan, Jetis', 2, 5, '085728880184', -7.894778, 110.31421, 'Toko Hewan dua'),
(3, 'Bunga Padi 2 PS', 'Karangtalun, Imogiri, Bantul, Daerah Istimewa Yogyakarta 55782', 6, 8, '081878787878', -7.8639446, 110.3112138, 'Jual Pakan Unggas & Pakan Kucing'),
(4, 'Sandra PS', 'Jl. Wates No.56, Ngestiharjo, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55182', 10, 5, '(0274) 373429', -7.8639446, 110.3112138, 'Jual obat ternak dan perlengkapan lainnya'),
(5, 'Jaya PS', 'Tangkilan, Sumbermulyo, Bambanglipuro', 4, 5, '085741137576', -7.932644, 110.307166, 'Menjual obat hewan dan makanan hewan'),
(6, 'Gosis PS Pakan Ternak Dan Obat-Obatan', 'Jl. Sitimulyo Segoroyoso, Asem Ngecis, Sitimulyo, Piyungan, Bantul, Daerah Istimewa Yogyakarta 55792', 14, 5, '0813-2881-3304', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'admin', 'admin', 'admin faskeswan', 'admin'),
(2, 'septian', 'septian', 'Septian', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `puskeswan`
--
ALTER TABLE `puskeswan`
  ADD PRIMARY KEY (`id_puskeswan`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `puskeswan`
--
ALTER TABLE `puskeswan`
  MODIFY `id_puskeswan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
