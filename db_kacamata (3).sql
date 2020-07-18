-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 09:09 AM
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
  `deskripsi_barang` varchar(200) NOT NULL,
  `model_3d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `gambar`, `brand_barang`, `lensa_barang`, `deskripsi_barang`, `model_3d`) VALUES
(4, 'Andy Havane Orange Flash', 0, 1500000.00, 'e765ffde3f677bb3633214ca5bbd6c52.jpg', 'Rayband', 'Photocromic Grey', 'Produk Baik', 'rayban_andy_havane_orange_flash'),
(6, 'Caravan Or Vert Flash', 29, 4000000.00, 'd96991f7995b9d3743d6290356a4bc22.jpg', 'Rayband', 'Photocromic Grey', 'Produk Baik', 'rayban_caravan_or_vert_flash'),
(7, 'Wayfarer Havane Vert', 50, 2000000.00, '6320d12b1634d1719a751da25763bb23.jpg', 'Rayband', 'Photocromic', 'Produk Baik', 'rayban_wayfarer_havane_vert'),
(8, 'Round Gun Vert', 20, 1000000.00, '7169b38bc5812775c78a96b388e783a9.jpg', 'Rayband', 'Photocromic', 'Barang Sangat Bagus', 'rayban_round_gun_vert'),
(10, 'kacamataaja', 50, 1000000.00, 'f793cced973d0cbeee5d7f7b78f7213f.jpg', 'Rayband', 'Photocromic', 'Produk Baik', '');

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
(4, 1, 'a:1:{s:32:\"a87ff679a2f3e71d9181a67b7542122c\";a:7:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:24:\"Andy Havane Orange Flash\";s:5:\"price\";d:1500000;s:3:\"qty\";d:2;s:6:\"gambar\";s:80:\"http://localhost/KacamataAR/assets/img/foto/e765ffde3f677bb3633214ca5bbd6c52.jpg\";s:5:\"rowid\";s:32:\"a87ff679a2f3e71d9181a67b7542122c\";s:8:\"subtotal\";d:3000000;}}'),
(5, 2, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dipesan`
--

CREATE TABLE `tb_dipesan` (
  `id_dipesan` int(15) NOT NULL,
  `id_pemesanan` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `nama_dipesan` varchar(50) NOT NULL,
  `harga_dipesan` float(15,2) NOT NULL,
  `jumlah_dipesan` int(15) NOT NULL,
  `totalharga_dipesan` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dipesan`
--

INSERT INTO `tb_dipesan` (`id_dipesan`, `id_pemesanan`, `id_barang`, `nama_dipesan`, `harga_dipesan`, `jumlah_dipesan`, `totalharga_dipesan`) VALUES
(5, 99, 4, 'kacamata', 2000.00, 1, 2000.00),
(6, 99, 2, 'Moscot Miltzen Doff', 1000.00, 1, 1000.00),
(7, 99, 6, 'kacamata2', 3000.00, 1, 3000.00),
(8, 100, 2, 'Moscot Miltzen Doff', 1000.00, 1, 1000.00),
(9, 101, 4, 'Andy Havane Orange Flash', 1500000.00, 3, 4500000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menyuplai`
--

CREATE TABLE `tb_menyuplai` (
  `id_menyuplai` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `id_supplier` int(15) NOT NULL,
  `harga_menyuplai` double(15,2) NOT NULL,
  `jumlah_menyuplai` int(15) NOT NULL,
  `totalharga_menyuplai` double(15,2) NOT NULL,
  `tanggal_menyuplai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menyuplai`
--

INSERT INTO `tb_menyuplai` (`id_menyuplai`, `id_barang`, `id_supplier`, `harga_menyuplai`, `jumlah_menyuplai`, `totalharga_menyuplai`, `tanggal_menyuplai`) VALUES
(5, 4, 1, 2.00, 2, 4.00, '2020-07-14'),
(6, 4, 4, 200000.00, 3, 600000.00, '2020-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `alamat_pemesanan` varchar(100) NOT NULL,
  `kodepos_pemesanan` int(15) NOT NULL,
  `provinsi_pemesanan` varchar(15) NOT NULL,
  `kabupaten_pemesanan` varchar(15) NOT NULL,
  `kecamatan_pemesanan` varchar(30) NOT NULL,
  `nama_pemesanan` varchar(30) NOT NULL,
  `nohp_pemesanan` bigint(15) NOT NULL,
  `kurir_pemesanan` varchar(30) NOT NULL,
  `ongkir_pemesanan` float(15,2) NOT NULL,
  `status_pemesanan` varchar(30) NOT NULL,
  `struk_pemesanan` varchar(50) NOT NULL,
  `subtotal_pemesanan` float(15,2) NOT NULL,
  `total_pemesanan` float(15,2) NOT NULL,
  `resi_pemesanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_user`, `tanggal_pemesanan`, `alamat_pemesanan`, `kodepos_pemesanan`, `provinsi_pemesanan`, `kabupaten_pemesanan`, `kecamatan_pemesanan`, `nama_pemesanan`, `nohp_pemesanan`, `kurir_pemesanan`, `ongkir_pemesanan`, `status_pemesanan`, `struk_pemesanan`, `subtotal_pemesanan`, `total_pemesanan`, `resi_pemesanan`) VALUES
(99, 1, '2020-07-10', 'Jalan Patimura', 123, 'Bangka Belitung', 'Bangka\r\n       ', 'kediri', 'surya dwipayana', 5555, 'jne', 47000.00, 'Menunggu Konfirmasi', 'ea6f8ba6e348a3fdaa1c2189971702b0.png', 6000.00, 53000.00, ''),
(100, 2, '2020-07-11', 'Jalan Patimura', 82123, 'DI Yogyakarta\r\n', 'Bantul\r\n       ', 'Marga', 'Naruto Uzumaki', 9999, 'jne', 21000.00, 'Menunggu Konfirmasi', 'a6d7c5b161caa18af506f0d5d87c9ed2.jpg', 1000.00, 22000.00, ''),
(101, 2, '2020-07-15', 'Jalan Patimura', 82123, 'Bangka Belitung', 'Bangka\r\n       ', 'kediri', 'surya dwipayana', 9999, 'tiki', 50000.00, 'Sedang di Proses', '4a8f2a725fee58d4f91d37ac781d4ca1.jpg', 4500000.00, 4550000.00, '1233322');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(15) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `nohp_supplier` varchar(20) NOT NULL,
  `email_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `nohp_supplier`, `email_supplier`) VALUES
(1, 'surya dwipayana', 'Jalan Ngurah Rai', '8888', 'suryadwipayana@gmail.com'),
(4, 'naruto', 'kediri rock city', '0851233213', 'suryadwipayana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(15) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `tanggallahir_user` date NOT NULL,
  `level_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `password_user`, `tanggallahir_user`, `level_user`) VALUES
(1, 'admin', 'tes@tes.com', '123', '2020-07-09', 'Admin'),
(2, 'customer', 'customer@cust.com', '123', '2020-07-04', 'Customer'),
(3, 'surya dwipayana', 'suryadwipayana10@gmail.com', '123', '2020-07-09', 'Customer'),
(4, 'admin1', 's@gmail.com', '233', '2020-07-10', 'Customer');

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
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dipesan`
--
ALTER TABLE `tb_dipesan`
  MODIFY `id_dipesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  MODIFY `id_menyuplai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
