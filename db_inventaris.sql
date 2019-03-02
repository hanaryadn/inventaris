-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 06:39 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventaris`
--

CREATE TABLE IF NOT EXISTS `tbl_inventaris` (
  `id` int(11) NOT NULL,
  `nomer` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `peminjam` varchar(75) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `alamat` varchar(75) DEFAULT NULL,
  `tgl_pinjam` varchar(25) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventaris`
--

INSERT INTO `tbl_inventaris` (`id`, `nomer`, `nama`, `merk`, `jenis`, `jumlah`, `sumber`, `tanggal`, `status`, `ket`, `peminjam`, `nik`, `alamat`, `tgl_pinjam`, `tujuan`) VALUES
(6, '132735671387', 'Laptop', 'Toshiba L40-A', 'Elektronik', 1, 'APBD', '2018-10-11', 'ADA', '', 'Ida Hidayati', '5203052005970001', 'Rensing', '', 'Bikin Laporan'),
(7, '8981239819', 'Laptop', 'Acer ES111', 'Elektronik', 1, 'APBD', '2018-10-11', 'DIPINJAM', '', 'Hanari', '52031100970009', 'Rensing', '2018-10-29', 'Bikin Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kembali`
--

CREATE TABLE IF NOT EXISTS `tbl_kembali` (
  `id` int(11) NOT NULL,
  `nomer` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `peminjam` varchar(75) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `tujuan` varchar(70) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kembali`
--

INSERT INTO `tbl_kembali` (`id`, `nomer`, `nama`, `jenis`, `jumlah`, `peminjam`, `tgl_pinjam`, `nik`, `alamat`, `tujuan`, `tgl_kembali`) VALUES
(11, '8981239819', 'Laptop', 'Elektronik', 1, 'Hanari', '2018-10-17', '520305200597000', 'Rensing', 'Bikin Laporan', '2018-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(350) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `jabatan`, `alamat`, `username`, `password`) VALUES
(1, 'Hanary A.', 'Mahasiswa', 'Rensing', 'hanary', '844b1920eae05703e94d45df58e97dd6'),
(3, 'Admin', 'Admin', 'Pengadangan', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kembali`
--
ALTER TABLE `tbl_kembali`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_kembali`
--
ALTER TABLE `tbl_kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
