-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2024 at 02:19 PM
-- Server version: 5.7.24
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
-- Database: `tempahan_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` int(80) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Tarikh_tempah` varchar(20) NOT NULL,
  `Hari` varchar(25) NOT NULL,
  `masa_masuk` varchar(50) NOT NULL,
  `Masa_keluar` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(100) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Tarikh_tempah` varchar(20) NOT NULL,
  `Hari` varchar(15) NOT NULL,
  `Masa_masuk` varchar(20) NOT NULL,
  `Masa_keluar` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`no`, `Nama`, `Subjek`, `Tarikh_tempah`, `Hari`, `Masa_masuk`, `Masa_keluar`) VALUES
(52, 'Jazimin', 'sejarah', '2019-09-12', 'Khamis', '08:00', '09:00'),
(53, 'alipon', 'sejarah', '2019-09-12', 'Isnin', '08:00', '11:00'),
(3, 'kamal', 'sejarah', '2019-09-12', 'Khamis', '09:00', '11:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namapenuh` varchar(100) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`, `namapenuh`, `nokp`, `jabatan`) VALUES
(1, 'Jazimin', '81dc9bdb52d04dc20036dbd8313ed055', 'afif jazimin', '000608100895', 'Jabatan kerja raya'),
(2, 'kamal', '81dc9bdb52d04dc20036dbd8313ed055', 'Muhd Kamal', '000786100287', 'Jabatan kerja raya'),
(3, 'alipon', '81dc9bdb52d04dc20036dbd8313ed055', 'muhd alip', '000786100287', 'Jabatan kerja raya'),
(4, 'encik ibrahim', '81dc9bdb52d04dc20036dbd8313ed055', 'encik ibrahim', '000000', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
