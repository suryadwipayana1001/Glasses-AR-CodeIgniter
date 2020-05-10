-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 11:14 AM
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `password_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(15) NOT NULL,
  `harga_barang` double(15,2) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `gambar`) VALUES
(14, 'Moscot Miltzen Doff', 200, 280000.00, 'daa50d5e3a9e1fd7ff028e7e1c35f7e2.jpg'),
(15, 'RB Space', 10, 170000.00, '22e12a372fc245941453e1eab5ce34e0.jpg'),
(16, 'Clubmaster', 10, 280000.00, 'aa2116ae9307c7efc0b0e56f2cf6d777.jpg'),
(17, 'Diorblueray', 10, 80000.00, '448e9bd8764b7ec95f9bb46961a30ad4.jpg'),
(18, 'Clbround Grade Original', 10, 100000.00, '0ee4a66140739847c9471ec3f3866889.jpg'),
(19, 'Roundmetal Grade Original', 10, 70000.00, '7eba6d46fe96af1d994a3f80f915ba05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(15) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `password_customer` varchar(50) NOT NULL,
  `tanggallahir_customer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 14, 6, 280000.00, 2, 560000.00, '2020-04-03');

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
  `kodepos_pemesanan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  MODIFY `id_menyuplai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_menyuplai`
--
ALTER TABLE `tb_menyuplai`
  ADD CONSTRAINT `tb_menyuplai_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_menyuplai_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`);

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
