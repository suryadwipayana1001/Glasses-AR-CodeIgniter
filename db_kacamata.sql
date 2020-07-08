-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 09:48 AM
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
  `deskripsi_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `gambar`, `brand_barang`, `lensa_barang`, `deskripsi_barang`) VALUES
(2, 'Moscot Miltzen Doff', 74, 1000.00, 'cfc30d17b360ceea862bb60773bd7f09.jpg', 'Moscot', 'Photocromic', 'Produk Baik jelek'),
(4, 'kacamata', 24, 2000.00, '410ea22d23cbb0d3fb40d482f3500b03.jpg', 'Rayband', 'Photocromic Grey', 'Produk Baik'),
(6, 'kacamata2', 38, 3000.00, '6a5bf48192525fd3b26ed1e0ea14a257.jpg', 'Moscot', 'Photocromic Grey', 'Produk Baik');

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
(49, 69, 2, 'Moscot Miltzen Doff', 1000.00, 2, 2000.00),
(50, 69, 4, 'kacamata', 2000.00, 2, 4000.00),
(51, 69, 6, 'kacamata2', 3000.00, 3, 9000.00);

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
(3, 2, 1, 200000.00, 2, 400000.00, '2020-07-04');

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
(69, 1, '2020-07-08', 'Jalan Ngurah Rai No.03 Banjar Anyar', 82123, 'Bali\r\n\r\n       ', 'Tabanan\r\n      ', 'kediri', 'surya dwipayana', 9999, 'jne', 8000.00, 'Sedang di Proses', '92985ca1d859530bc8b987e5b1ccee4a.jpg', 15000.00, 23000.00, '1233322');

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
(3, '11111', 'kediri rock city', '0851233213', 'suryadwipayana@gmail.com');

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
(1, 'admi', 'tes@tes.com', '123', '2020-07-04', 'Admin'),
(2, 'customer', 'customer@cust.com', '123', '2020-07-04', 'Customer');

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
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dipesan`
--
ALTER TABLE `tb_dipesan`
  MODIFY `id_dipesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  MODIFY `id_menyuplai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  ADD CONSTRAINT `tb_menyuplai_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_menyuplai_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
