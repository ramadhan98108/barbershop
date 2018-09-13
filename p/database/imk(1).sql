-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 04:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_beli` varchar(100) NOT NULL,
  `id_lokasi` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategori`, `stok`, `harga_beli`, `id_lokasi`, `date_added`) VALUES
(36, 'Gunting Potong Calysta 7', 1, 4, '20000', '', '2018-08-13 08:26:01'),
(37, 'Gunting Sasak Calysta 5.5', 1, 2, '10000', '', '2018-08-13 08:27:06'),
(38, 'Sisir Ganggang Creative Art 600A', 1, 2, '6000', '', '2018-08-13 08:29:09'),
(39, 'Sisir Creative Art 0409', 1, 2, '5000', '1', '2018-08-13 08:36:53'),
(40, 'Kuas Sabun Kecil', 1, 0, '6000', '1', '2018-08-16 12:25:04'),
(41, 'Jepit Bebek', 1, 4, '3000', '1', '2018-08-13 08:39:38'),
(42, 'Bedak ', 1, 2, '10000', '1', '2018-08-13 08:40:17'),
(43, 'Botol Spray', 1, 2, '2000', '1', '2018-08-13 08:41:26'),
(44, 'Jepitan Jemuran', 1, 2, '3000', '1', '2018-08-13 08:42:08'),
(45, 'Kep Polos', 1, 4, '10000', '1', '2018-08-13 08:43:01'),
(46, 'Handuk Cotton', 2, 15, '20000', '1', '2018-08-13 08:43:44'),
(47, 'Botol Shampo ', 2, 2, '15000', '1', '2018-08-13 08:44:56'),
(48, 'Botol Minyak Rambut', 1, 4, '20000', '1', '2018-08-13 08:47:05'),
(49, 'Razor/Pisau Lipat Isi Ulang', 1, 3, '10000', '1', '2018-08-13 08:47:49'),
(50, 'Silet Treet Platinum', 1, 10, '10000', '1', '2018-08-13 08:51:08'),
(51, 'Mesin Cukur', 1, 4, '50000', '1', '2018-08-13 08:51:52'),
(52, 'Minyak Pelumas Mesin Potong', 1, 1, '15000', '1', '2018-08-13 08:52:17'),
(53, 'Sepatu  Sisir 4"', 1, 2, '5000', '1', '2018-08-13 08:52:43'),
(54, 'Sepatu Sisir 6"', 1, 2, '5000', '1', '2018-08-13 08:53:11'),
(55, 'Sisir Bulat/Keramas', 1, 2, '10000', '1', '2018-08-13 08:53:48'),
(56, 'Cermin Muka', 1, 3, '10000', '1', '2018-08-13 08:54:37'),
(57, 'Gunting Potong Calysta 7" Supercut', 1, 2, '20000', '2', '2018-08-13 08:57:36'),
(58, 'Gunting Sasak Calysta 5.5" supecut', 1, 2, '10000', '2', '2018-08-13 08:58:12'),
(59, 'Sisir Ganggang Creative Art 600A', 1, 2, '5000', '2', '2018-08-13 08:59:13'),
(60, 'Sisir Creative Art 0409', 1, 2, '5000', '2', '2018-08-13 09:00:05'),
(61, 'Kuas Sabun Kecil', 1, 2, '6000', '2', '2018-08-13 09:00:30'),
(62, 'Jepit Bebek', 1, 2, '3000', '2', '2018-08-13 09:00:52'),
(63, 'Bedak ', 1, 2, '10000', '2', '2018-08-13 09:01:19'),
(64, 'Botol Spray', 1, 2, '2000', '2', '2018-08-13 09:01:40'),
(65, 'Jepitan Jemuran', 1, 2, '3000', '2', '2018-08-13 09:02:21'),
(66, 'Kep Polos', 1, 4, '10000', '2', '2018-08-13 09:02:43'),
(67, 'Handuk Cotton', 2, 15, '20000', '2', '2018-08-13 09:03:10'),
(68, 'Botol Shampo ', 2, 2, '15000', '2', '2018-08-13 09:03:37'),
(69, 'Botol Minyak Rambut', 1, 2, '20000', '2', '2018-08-13 09:04:17'),
(70, 'Razor/Pisau Lipat Isi Ulang', 1, 2, '10000', '2', '2018-08-13 09:04:53'),
(71, 'Silet Treet Platinum', 1, 10, '10000', '2', '2018-08-13 09:05:14'),
(72, 'Mesin Cukur', 1, 2, '50000', '2', '2018-08-13 09:05:37'),
(73, 'Minyak Pelumas Mesin Potong', 1, 2, '15000', '2', '2018-08-13 09:06:04'),
(74, 'Sepatu  Sisir 4"', 1, 2, '5000', '2', '2018-08-13 09:06:37'),
(75, 'Sepatu Sisir 6"', 1, 2, '5000', '2', '2018-08-13 09:07:08'),
(76, 'Sisir Bulat/Keramas', 2, 2, '10000', '2', '2018-08-13 09:07:40'),
(77, 'Cermin Muka', 1, 2, '10000', '2', '2018-08-13 09:08:07'),
(78, 'Bantal', 1, 2, '20000', '1', '2018-08-13 14:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'AlatPotong'),
(2, 'AlatBilas'),
(17, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id_status` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_status`, `status`) VALUES
(1, 'admin'),
(2, 'pegawai'),
(3, 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `alamat`) VALUES
(1, 'solo'),
(2, 'boyolali'),
(3, 'sukoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `keterangan`, `harga_jual`, `stok`) VALUES
(6, 'Biasa', 'Cukur Biasa', '15000', 27),
(7, 'Premium', 'Cukur,Styling Pomade,Cuci Rambut,Pijat Kepala', '20000', 27),
(8, 'Anak Biasa', 'Cukur Biasa', '10000', 26),
(9, 'Anak Premium', 'Cukur,Styling Pomade,Cuci Rambut,Pijat Kepala', '12000', 20),
(10, 'Ayah dan Anak', 'Full Servis', '30000', 37),
(11, 'Styling Pomade', 'Styling Pomade', '5000', 40),
(12, 'Cuci Rambut', 'Cuci Rambut', '5000', 39),
(13, 'Colouring/Semir', 'Colouring/Semir', '30000', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sub_transaksi`
--

CREATE TABLE IF NOT EXISTS `sub_transaksi` (
  `id_subtransaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `no_invoice` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_transaksi`
--

INSERT INTO `sub_transaksi` (`id_subtransaksi`, `id_paket`, `id_transaksi`, `jumlah_beli`, `total_harga`, `no_invoice`) VALUES
(17, 8, 14, 1, '450000', '15/AF/2/18/02/18/21'),
(18, 6, 14, 2, '460000', '15/AF/2/18/02/18/21'),
(19, 6, 15, 2, '460000', '15/AF/4/18/07/57/25'),
(20, 8, 15, 1, '450000', '15/AF/4/18/07/57/25'),
(21, 7, 16, 2, '280000', '16/AF/5/18/07/43/07'),
(22, 9, 20, 1, '12000', '21/AF/6/18/04/27/40'),
(23, 6, 20, 7, '105000', '21/AF/6/18/04/27/40'),
(24, 8, 20, 1, '10000', '21/AF/6/18/04/27/40'),
(25, 8, 21, 2, '20000', '21/AF/6/18/04/32/34');

-- --------------------------------------------------------

--
-- Table structure for table `tempo`
--

CREATE TABLE IF NOT EXISTS `tempo` (
  `id_subtransaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `trx` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempo`
--

INSERT INTO `tempo` (`id_subtransaksi`, `id_paket`, `jumlah_beli`, `total_harga`, `trx`) VALUES
(11, 11, 9, '9000', '21/AF/5/18'),
(12, 10, 7, '1050000', '21/AF/5/18');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_kasir` int(11) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `no_invoice` varchar(20) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `kode_kasir`, `total_bayar`, `no_invoice`, `nama_pembeli`) VALUES
(16, '2018-08-20 08:16:45', 13, '280000', '16/AF/5/18/07/43/07', 'ee'),
(17, '2018-08-21 13:56:09', 6, '1040000', '21/AF/6/18/03/56/09', 'adi'),
(18, '2018-08-21 14:00:27', 6, '1380000', '21/AF/6/18/04/00/27', 'eka'),
(19, '2018-08-21 14:19:33', 6, '30000', '21/AF/6/18/04/19/33', 'dika'),
(20, '2018-08-21 14:27:40', 6, '127000', '21/AF/6/18/04/27/40', 'wiwik'),
(21, '2018-08-21 14:32:34', 6, '20000', '21/AF/6/18/04/32/34', 'dion');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_lokasi` int(6) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `id_status`, `id_lokasi`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.co.id', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, '2018-08-21 06:46:57'),
(6, 'kasir', 'kasir@gmail.com', 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 2, 1, '2018-08-21 06:46:50'),
(7, 'owner', 'owner@gmail.co.id', 'owner', '579233b2c479241523cba5e3af55d0f50f2d6414', 3, 1, '2018-08-21 06:46:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `sub_transaksi`
--
ALTER TABLE `sub_transaksi`
  ADD PRIMARY KEY (`id_subtransaksi`);

--
-- Indexes for table `tempo`
--
ALTER TABLE `tempo`
  ADD PRIMARY KEY (`id_subtransaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_transaksi`
--
ALTER TABLE `sub_transaksi`
  MODIFY `id_subtransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tempo`
--
ALTER TABLE `tempo`
  MODIFY `id_subtransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
