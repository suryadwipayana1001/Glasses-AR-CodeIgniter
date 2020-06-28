-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 03:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
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
  `lensa_barang` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `gambar`, `brand_barang`, `lensa_barang`) VALUES
(24, 'kacamata2', 2, 200000.00, '488d7387d2f21c9207239900a12d09b6.jpg', 'Rayband', 'Black'),
(25, 'kacamata3', 10, 2000000.00, '06fbaf9a9d5aa53cb1bcf8684a0fb3b5.jpg', 'Moscot', 'Photocromic Blue'),
(27, 'Moscot Miltzen Doff1', 3, 2000000.00, '018c76167fb8b4878c7666f0c6b20edc.jpg', 'Oakley', 'Photocromic Grey'),
(28, 'aaa', 44, 2000.00, 'fd050dba246b16ea7e36fa7214dc5e34.jpg', 'Rayband', 'Photocromic Grey');

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
(1, 1, 24, 'kacamata2', 200000.00, 2, 400000.00),
(2, 1, 27, 'Moscot Miltzen Doff1', 2000000.00, 1, 2000000.00);

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
(1, 24, 6, 1.00, 1, 1.00, '2020-06-23'),
(3, 27, 6, 1.00, 3, 3.00, '2020-06-21'),
(4, 25, 6, 1.00, 4, 4.00, '2020-06-26'),
(5, 24, 6, 1000.00, 2, 2000.00, '2020-06-22'),
(6, 24, 6, 5.00, 2, 10.00, '2020-06-22'),
(7, 27, 6, 1.00, 2, 2.00, '2020-06-26'),
(8, 24, 6, 3.00, 5, 15.00, '2020-07-10');

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
  `status_pemesanan` varchar(30) NOT NULL,
  `struk_pemesanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_user`, `tanggal_pemesanan`, `alamat_pemesanan`, `kodepos_pemesanan`, `provinsi_pemesanan`, `kabupaten_pemesanan`, `kecamatan_pemesanan`, `nama_pemesanan`, `nohp_pemesanan`, `kurir_pemesanan`, `status_pemesanan`, `struk_pemesanan`) VALUES
(74, 0, '0000-00-00', 'Jalan Ngurah Rai No.03 Banjar Anyar', 82123, 'Jawa Tengah\r\n\r\n', 'Cilacap\r\n      ', 'Kediri', 'surya dwipayana', 85739694186, '26000', 'Menunggu Konfirmasi', '');

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
(6, 'surya ganteng', '', '', ''),
(7, 'surya dwipayana', 'Jalan Ngurah Rai', '0857396921', 'suryadwipayana@gmail.com');

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
(4, 'surya dwipayana', 'suryadwipayana10@gmail.com', '1', '2020-06-17', 'Admin'),
(5, 'admin2', 'tes@tes.com', '123', '2020-06-03', 'Admin'),
(6, 'tes', 'customer@cust.com', '123', '2020-06-22', 'Customer'),
(7, 'surya dwipayana', 'coba', '123', '2020-06-27', 'Customer'),
(8, 'surya', 'customer', '123', '2020-06-21', 'Customer'),
(9, 'a', 's@gmail.com', '123', '2020-07-03', 'Customer'),
(10, 'a', 'a@.com', '123', '2020-06-23', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

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
  ADD KEY `id_barang` (`id_barang`),
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
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_dipesan`
--
ALTER TABLE `tb_dipesan`
  MODIFY `id_dipesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  MODIFY `id_menyuplai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
