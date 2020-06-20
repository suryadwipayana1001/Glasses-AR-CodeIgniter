-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 03:53 PM
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
(25, 'kacamata3', 10, 2000000.00, '351eb46d4ff7f8776f09115f770b69cb.jpg', 'Rayband', 'Photocromic Blue'),
(27, 'Moscot Miltzen Doff', 3, 2000000.00, '729e9edc024f974e085fd0c0653d13de.jpg', 'Oakley', 'Photocromic Grey');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menyuplai`
--

CREATE TABLE `tb_menyuplai` (
  `id_menyuplai` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `id_supplier` int(15) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_menyuplai` double(15,2) NOT NULL,
  `jumlah_menyuplai` int(15) NOT NULL,
  `totalharga_menyuplai` double(15,2) NOT NULL,
  `tanggal_menyuplai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menyuplai`
--

INSERT INTO `tb_menyuplai` (`id_menyuplai`, `id_barang`, `id_supplier`, `nama_barang`, `harga_menyuplai`, `jumlah_menyuplai`, `totalharga_menyuplai`, `tanggal_menyuplai`) VALUES
(1, 24, 6, '', 1.00, 1, 1.00, '2020-06-23'),
(2, 24, 6, 'kacamata2', 1000.00, 1, 1000.00, '2020-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `id_customer` int(15) NOT NULL,
  `harga_pemesanan` double(15,2) NOT NULL,
  `jumlah_pemesanan` int(15) NOT NULL,
  `totalharga_pemesanan` double(15,2) NOT NULL,
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

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_barang`, `id_customer`, `harga_pemesanan`, `jumlah_pemesanan`, `totalharga_pemesanan`, `tanggal_pemesanan`, `alamat_pemesanan`, `kodepos_pemesanan`, `provinsi_pemesanan`, `kabupaten_pemesanan`, `kecamatan_pemesanan`, `nama_pemesanan`, `nohp_pemesanan`, `kurir_pemesanan`, `status_pemesanan`, `struk_pemesanan`) VALUES
(17, 0, 0, 200000.00, 2, 400000.00, '2020-06-03', 'Jalan Ngurah Rai No.03 Banjar Anyar', 82123, 'Bali', 'Tabanan', 'Kediri', 'Surya Dwipayana', 85739694186, 'JNE', 'Sedang Dalam Perjalanan', ''),
(24, 0, 0, 0.00, 0, 0.00, '0000-00-00', 'Jalan Patimura', 8888, '11', '255', 'Malang', 'Putu Surya', 9999, '21500', 'Menunggu Konfirmasi', '');

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
(6, 'surya dwipayana', 'kediri rock city', '0851233213', 'suryadwipayana@gmail.com');

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
(4, 'surya dwipayana', 'suryadwipayana10@gmail.com', '08123322', '2020-06-17', 'Admin'),
(5, 'admin2', 'tes@tes.com', '123', '0000-00-00', 'Admin'),
(6, 'tes', 'customer@cust.com', '123', '0000-00-00', 'Customer'),
(7, 'surya dwipayana', 'coba', '123', '2020-06-27', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

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
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_customer` (`id_customer`);

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
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  MODIFY `id_menyuplai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
