-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2015 at 03:37 
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rental_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE IF NOT EXISTS `tb_inventaris` (
`id_inventaris` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `no_polisi` varchar(255) NOT NULL,
  `no_mesin` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inventaris`, `id_motor`, `no_polisi`, `no_mesin`) VALUES
(1, 1, 'g 111', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembali`
--

CREATE TABLE IF NOT EXISTS `tb_kembali` (
`id_kembali` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_motor`
--

CREATE TABLE IF NOT EXISTS `tb_motor` (
`id_motor` int(11) NOT NULL,
  `nama_motor` varchar(255) NOT NULL,
  `th_keluar` year(4) NOT NULL,
  `by_sewa` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `nama_motor`, `th_keluar`, `by_sewa`, `gambar`) VALUES
(1, 'supra x', 2005, 50000, '250px-Honda_Supra_X_125.jpg'),
(2, 'Jupiter MX', 2006, 75000, 'New-MX-MotoGP_01.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_operator`
--

CREATE TABLE IF NOT EXISTS `tb_operator` (
`id_operator` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(255) NOT NULL,
  `identitas` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`, `identitas`) VALUES
(1, 'Jarjit Singh', 'Timoho', '085789456123', '123456'),
(2, 'Ismail Bin Mail', 'Glagahsari', '085753159', '654321'),
(3, 'Upin', 'Demangan', '085759153', '321654'),
(4, 'Atuk', 'Prambanan', '085183749', '461352');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa`
--

CREATE TABLE IF NOT EXISTS `tb_sewa` (
`id_sewa` int(11) NOT NULL,
  `tgl_sewa` datetime NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `jaminan` text NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL,
  `id_inventaris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
 ADD PRIMARY KEY (`id_inventaris`), ADD KEY `id_motor` (`id_motor`);

--
-- Indexes for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
 ADD PRIMARY KEY (`id_kembali`), ADD KEY `id_sewa` (`id_sewa`);

--
-- Indexes for table `tb_motor`
--
ALTER TABLE `tb_motor`
 ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
 ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
 ADD PRIMARY KEY (`id_sewa`), ADD KEY `id_pelanggan` (`id_pelanggan`,`id_inventaris`), ADD KEY `id_inventaris` (`id_inventaris`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_motor`
--
ALTER TABLE `tb_motor`
MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
ADD CONSTRAINT `tb_inventaris_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `tb_motor` (`id_motor`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
ADD CONSTRAINT `tb_kembali_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `tb_sewa` (`id_sewa`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
ADD CONSTRAINT `tb_sewa_ibfk_1` FOREIGN KEY (`id_inventaris`) REFERENCES `tb_inventaris` (`id_inventaris`) ON UPDATE CASCADE,
ADD CONSTRAINT `tb_sewa_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
