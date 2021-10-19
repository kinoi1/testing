-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 06:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_sewa`
--

CREATE TABLE `barang_sewa` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `disewa_sejak` date NOT NULL,
  `dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jasa_pengiriman`
--

CREATE TABLE `jasa_pengiriman` (
  `id_ekspedisi` int(11) NOT NULL,
  `nama_ekspedisi` varchar(50) NOT NULL,
  `durasi_pengiriman` enum('1','3','5') NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_rek` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `payment_gateway` enum('BANK','DANA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no_rek`, `nama`, `payment_gateway`) VALUES
('0987654321', 'AGIL', 'DANA'),
('123456789', 'NUR', 'BANK');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `resi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_transaksi`, `resi`) VALUES
(1, 44, '4123HJ120KL'),
(3, 43, 'FHKJ23119JFU4'),
(4, 46, ''),
(5, 47, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `status` enum('ready','habis','sewa') NOT NULL,
  `category` enum('tenda','alat-masak','carrier','sleeping bag','headlamp','lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `gambar`, `deskripsi`, `harga`, `stok`, `status`, `category`) VALUES
(1, 'tenda kapasitas 3 orang', 'tenda-3-orng.jpg', 'ini adalah tenda ', 230000, 0, 'habis', 'tenda'),
(5, 'Kompor portable mini', 'kompor-3.JPG', 'dah dibilang ini kompor', 20000, 1, 'sewa', 'alat-masak'),
(7, 'tenda keren', 'tenda-3.jpg', 'pokoknya tenda', 25000, 8, 'sewa', 'tenda'),
(8, 'Tenda hiking', 'tenda-4.jpg', 'Tenda yang dibuat khusu untuk kamu yang suka naik gunung', 650000, 0, 'habis', 'tenda'),
(9, 'Tenda lagi', 'IMG_4178.JPG', 'Yang pasti bukan tenda biru ', 100000, 6, 'habis', 'tenda'),
(12, 'headlamp', 'IMG_4222.JPG', 'ini adalah headlamp', 50000, 7, 'ready', 'headlamp'),
(13, 'headlamp 2', 'IMG_4224.JPG', 'headlamp yang dbuat khusus untuk hiking', 100000, 3, 'ready', 'headlamp'),
(14, 'kompor', 'kompor-21.JPG', 'ini kompor', 45000, 2, 'ready', 'alat-masak'),
(16, 'tenda segienam', 'IMG_41761.JPG', ' ini tenda segienam', 400000, 8, 'ready', 'tenda');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user` varchar(128) NOT NULL,
  `ekspedisi` enum('JNE','TIKI','J&T','POS') DEFAULT NULL,
  `durasi` enum('1','2','3') DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `metode_pembayaran` enum('BANK','DANA','COD') DEFAULT NULL,
  `status` enum('menunggu pembayaran','process','pengiriman','selesai') NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `nama_barang`, `qty`, `total`, `user`, `ekspedisi`, `durasi`, `ongkir`, `metode_pembayaran`, `status`, `bukti_pembayaran`, `tanggal`) VALUES
(43, 7, 'tenda keren', 1, 40000, 'agilsupriyanto14@gmail.com', 'JNE', '3', 15000, 'BANK', 'selesai', 'simple2.PNG', '2021-06-29'),
(44, 7, 'tenda keren', 1, 150000, 'agilsupriyanto14@gmail.com', 'JNE', '2', 15000, 'BANK', 'pengiriman', 'kucing_lucu.png', '2021-07-01'),
(46, 5, 'Kompor portable mini', 1, 35000, 'agilsupriyanto14@gmail.com', 'JNE', '3', 15000, 'BANK', 'process', 'simple.PNG', '2021-06-28'),
(47, 9, 'Tenda lagi', 1, 115000, 'agilsupriyanto14@gmail.com', 'JNE', '3', 15000, 'DANA', 'process', 'WhatsApp_Image_2021-06-28_at_13_49_26_(1).jpeg', '2021-06-28'),
(48, 5, 'Kompor portable mini', 1, 35000, 'agilsupriyanto14@gmail.com', 'JNE', '', 15000, 'COD', 'process', '34e6552fada3e5f4089694db4db5f232.jpg', '2021-07-01'),
(49, 5, 'Kompor portable mini', 1, 20000, 'agilsupriyanto14@gmail.com', NULL, NULL, NULL, NULL, 'menunggu pembayaran', NULL, '0000-00-00');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `aksi1` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
 DELETE FROM keranjang WHERE id_barang = NEW.id_barang;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `day_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `tgl_lahir`, `alamat`, `no_hp`, `password`, `image`, `role_id`, `is_active`, `day_created`) VALUES
(5, 'Agil', 'agilsupriyanto12@gmail.com', '2021-06-10', 'jln abc', '085637218992', '$2y$10$SaRKLrc08bbQi1b121ZtEOenDmth8wXesSXiEymlTY/jxVMbkvg6y', 'kucing_lucu.jpg', 1, 1, 1616126640),
(7, 'Mawar', 'agilsupriyanto@gmail.com', '28 november 2018', 'dimna', '087833291111', '$2y$10$TSj4e.ZNS1qM2.BSqw4JKu78zwGMOdCM0.BX1xcQvg6bScyNTBT6K', 'default.jpg', 2, 1, 1616891286),
(21, 'Agil', 'agilsupriyanto14@gmail.com', '11 november 2017', '-jln pasir kareumbi', '0897665434', '$2y$10$Wu3o2VIPlONMukmvUb30YOtl6CXqmw6h0V93fcVn9cBoyvinfaEIi', 'default.jpg', 2, 1, 1622468340);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(4, 'nurhidayatiningrum3@gmail.com', '33MHYRz44dBd7Oa7X8ErHh3X6qZMSjZE2ZdhSyeYUG4=', 1622162411),
(5, 'tommyapriyanto@gmail.com', 'phdhfZ59egVSPO6CcPoM+7P1bj8AgFQcI4t5YMHk0Rs=', 1622162605),
(6, 'tommyapriyanto@gmail.com', '9fxcl+D4CNKPh7m7ngPk6YfDR2w/hPqy+qMqzVWYWRY=', 1622183734),
(7, 'tommyapriyanto@gmail.com', 'oe0yYaQ/xsuIDBF9WnducHjHqCBB2M5ChLurPexfRu4=', 1622183974),
(10, 'tommyapriyanto@gmail.com', 'wDg7XfonFABmlDv3EX4QFNN3jerwKP4fFzlTjsASWZg=', 1622766899),
(11, 'tommyapriyanto@gmail.com', 'LK6+c75Ebk9OU3JTeySRT0fdAKv/XOKHecRMMptZ+XU=', 1622767132);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_sewa`
--
ALTER TABLE `barang_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_pengiriman`
--
ALTER TABLE `jasa_pengiriman`
  ADD PRIMARY KEY (`id_ekspedisi`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_rek`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasa_pengiriman`
--
ALTER TABLE `jasa_pengiriman`
  MODIFY `id_ekspedisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
