-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 04:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kacamata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(15) NOT NULL,
  `harga_barang` double(15,2) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `brand_barang` varchar(30) NOT NULL,
  `lensa_barang` varchar(80) NOT NULL,
  `frame_barang` varchar(50) NOT NULL,
  `deskripsi_barang` varchar(200) NOT NULL,
  `model_3d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `gambar`, `brand_barang`, `lensa_barang`, `frame_barang`, `deskripsi_barang`, `model_3d`) VALUES
(4, 'Andy Havane Orange Flash', 13, 150000.00, 'e765ffde3f677bb3633214ca5bbd6c52.jpg', 'Rayband', 'Photocromic', 'D Frame', 'UV Protection melindungi mata dari sinar matahari', 'rayban_andy_havane_orange_flash'),
(6, 'Caravan Or Vert Flash', 0, 200000.00, 'd96991f7995b9d3743d6290356a4bc22.jpg', 'Club Master', 'Photocromic Grey', 'Carbon', 'Produk Baik', 'rayban_caravan_or_vert_flash'),
(7, 'Wayfarer Havane Vert', 30, 150000.00, '6320d12b1634d1719a751da25763bb23.jpg', 'Oakley', 'Photocromic', 'D Frame', 'Produk Baik', 'rayban_wayfarer_havane_vert');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cart` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id_cart`, `id_user`, `cart`) VALUES
(4, 1, 'a:0:{}'),
(5, 2, 'a:2:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:7:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:21:\"Caravan Or Vert Flash\";s:5:\"price\";d:4000000;s:3:\"qty\";d:1;s:6:\"gambar\";s:80:\"http://localhost/KacamataAR/assets/img/foto/d96991f7995b9d3743d6290356a4bc22.jpg\";s:5:\"rowid\"'),
(6, 11, 'a:0:{}'),
(7, 15, 'a:0:{}'),
(8, 17, 'a:0:{}'),
(9, 12, 'a:1:{s:32:\"8f14e45fceea167a5a36dedd4bea2543\";a:7:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:20:\"Wayfarer Havane Vert\";s:5:\"price\";d:150000;s:3:\"qty\";d:2;s:6:\"gambar\";s:80:\"http://localhost/KacamataAR/assets/img/foto/6320d12b1634d1719a751da25763bb23.jpg\";s:5:\"rowid\";s:32:\"8f14e45fceea167a5a36dedd4bea2543\";s:8:\"subtotal\";d:300000;}}');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dipesan`
--

CREATE TABLE `tb_dipesan` (
  `id_dipesan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_dipesan` varchar(50) NOT NULL,
  `harga_dipesan` float NOT NULL,
  `jumlah_dipesan` int(11) NOT NULL,
  `totalharga_dipesan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dipesan`
--

INSERT INTO `tb_dipesan` (`id_dipesan`, `id_pemesanan`, `id_barang`, `nama_dipesan`, `harga_dipesan`, `jumlah_dipesan`, `totalharga_dipesan`) VALUES
(5, 4, 4, 'Andy Havane Orange Flash', 150000, 1, 150000),
(6, 4, 7, 'Wayfarer Havane Vert', 150000, 1, 150000),
(8, 6, 7, 'Wayfarer Havane Vert', 150000, 1, 150000),
(9, 7, 7, 'Wayfarer Havane Vert', 150000, 1, 150000),
(10, 8, 7, 'Wayfarer Havane Vert', 150000, 1, 150000),
(11, 9, 4, 'Andy Havane Orange Flash', 150000, 1, 150000),
(12, 10, 7, 'Wayfarer Havane Vert', 150000, 2, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menyuplai`
--

CREATE TABLE `tb_menyuplai` (
  `id_menyuplai` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `harga_menyuplai` float NOT NULL,
  `jumlah_menyuplai` int(11) NOT NULL,
  `totalharga_menyuplai` float NOT NULL,
  `tanggal_menyuplai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menyuplai`
--

INSERT INTO `tb_menyuplai` (`id_menyuplai`, `id_barang`, `id_supplier`, `harga_menyuplai`, `jumlah_menyuplai`, `totalharga_menyuplai`, `tanggal_menyuplai`) VALUES
(11, 4, 1, 100000, 5, 500000, '2020-08-01'),
(12, 6, 4, 150000, 10, 1500000, '2020-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `alamat_pemesanan` varchar(100) NOT NULL,
  `kodepos_pemesanan` int(11) NOT NULL,
  `provinsi_pemesanan` varchar(50) NOT NULL,
  `kabupaten_pemesanan` varchar(50) NOT NULL,
  `kecamatan_pemesanan` varchar(50) NOT NULL,
  `nama_pemesanan` varchar(50) NOT NULL,
  `nohp_pemesanan` varchar(20) NOT NULL,
  `kurir_pemesanan` char(5) NOT NULL,
  `ongkir_pemesanan` float NOT NULL,
  `status_pemesanan` char(30) NOT NULL,
  `struk_pemesanan` varchar(50) NOT NULL,
  `subtotal_pemesanan` float NOT NULL,
  `total_pemesanan` float NOT NULL,
  `resi_pemesanan` varchar(50) NOT NULL,
  `baca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_user`, `tanggal_pemesanan`, `alamat_pemesanan`, `kodepos_pemesanan`, `provinsi_pemesanan`, `kabupaten_pemesanan`, `kecamatan_pemesanan`, `nama_pemesanan`, `nohp_pemesanan`, `kurir_pemesanan`, `ongkir_pemesanan`, `status_pemesanan`, `struk_pemesanan`, `subtotal_pemesanan`, `total_pemesanan`, `resi_pemesanan`, `baca`) VALUES
(4, 15, '2020-08-06', 'Jalan Ngurah Rai No.34 Banjar Anyar', 82123, 'Bali\r\n\r\n                        ', 'Badung\r\n                    ', 'Kediri', 'Aryatayasa', '08912344223', 'tiki', 9000, 'Sedang Dalam Perjalanan', '17808a2f56d155eab383d9082ed2fafa.jpg', 300000, 309000, '', 0),
(6, 15, '2020-08-07', 'asdasd', 12333, 'Banten\r\n\r\n                        ', 'Cilegon\r\n                    ', 'kediri', 'surya', '421', 'pos', 26000, 'Selesai', '', 150000, 176000, '', 1),
(7, 15, '2020-08-07', 'jalan', 12333, 'Banten\r\n\r\n                        ', 'Cilegon\r\n                    ', 'kediri', 'surya dwipayana', '321', 'pos', 26000, 'Sedang di Proses', '', 150000, 176000, '', 1),
(8, 12, '2020-08-07', 'JNE', 123, 'Bengkulu\r\n\r\n                        ', 'Bengkulu\r\n                    ', 'Marga', 'surya', '5555', 'tiki', 42000, 'Sedang di Proses', '', 150000, 192000, '', 1),
(9, 15, '2020-08-07', 'jalan', 999, 'Bengkulu\r\n\r\n                        ', 'Bengkulu\r\n                    ', 'tabanan', 'Naruto Uzumaki', '421', 'jne', 46000, 'Sedang dalam Perjalanan', '', 150000, 196000, '', 1),
(10, 12, '2020-08-07', 'kediri', 8888, 'Bali\r\n\r\n                        ', '', 'tabanan', 'customer', '421', 'jne', 11000, 'Selesai', '', 300000, 311000, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `nohp_supplier` varchar(20) NOT NULL,
  `email_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `nohp_supplier`, `email_supplier`) VALUES
(1, 'surya dwipayana', 'Jalan Merdeka', '0817268888', 'suryadwipayana@gmail.com'),
(4, 'Bunga', 'Kuta Rock City', '0851233213', 'Bungaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `tanggallahir_user` date NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `nohp_user` varchar(20) NOT NULL,
  `jeniskelamin_user` char(10) NOT NULL,
  `level_user` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `password_user`, `tanggallahir_user`, `alamat_user`, `nohp_user`, `jeniskelamin_user`, `level_user`) VALUES
(12, 'customer', 'customer@cust.com', '321', '2020-07-02', 'Jalan Kenangan', '085739694186', 'Laki-Laki', 'Customer'),
(15, 'admin', 'admin@adm.com', '123', '2020-08-02', 'Tabanan', '089519734827', 'Laki-Laki', 'Admin'),
(20, 'Pramana', 'Pramana@gmail.com', '123', '2020-08-07', 'konoha1', '88888', 'Laki-Laki', 'Customer'),
(21, 'Adi Pramana', 'Adi@gmail.com', '', '2020-08-03', 'Jalan Jalan Skuy', '0823123123', 'Laki-Laki', 'Customer'),
(22, 'aaaaaaaaa', 'aaa@gmail.com', '', '2020-08-19', 'konoha123', 'ddd', 'Laki-Laki', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tb_dipesan`
--
ALTER TABLE `tb_dipesan`
  ADD PRIMARY KEY (`id_dipesan`);

--
-- Indexes for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  ADD PRIMARY KEY (`id_menyuplai`),
  ADD KEY `id_barang` (`id_barang`,`id_supplier`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_dipesan`
--
ALTER TABLE `tb_dipesan`
  MODIFY `id_dipesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  MODIFY `id_menyuplai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
