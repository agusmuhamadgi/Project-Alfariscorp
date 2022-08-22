-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2015 at 09:19 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alfariscorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mst_keluar`
--

CREATE TABLE IF NOT EXISTS `mst_keluar` (
`no_id` int(11) NOT NULL,
  `perihal` varchar(500) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_keluar`
--

INSERT INTO `mst_keluar` (`no_id`, `perihal`, `pengirim`, `nominal`, `tanggal`) VALUES
(1, 'Gaji Karyawan', 'Big Bos Alfaris', 250000, '2015-03-01'),
(2, 'ATK', 'Kas Alfaris', 10000, '2015-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `mst_masuk`
--

CREATE TABLE IF NOT EXISTS `mst_masuk` (
`no_id` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `mst_masuk`
--

INSERT INTO `mst_masuk` (`no_id`, `perihal`, `pengirim`, `nominal`, `tanggal`) VALUES
(43, 'Maintenance', 'PT NAGAMAS', 3000000, '2015-02-25'),
(44, 'Onsite', 'PT DOSAN JAYA SUKABUMI', 120000, '2015-02-28'),
(45, 'Error handling', 'PT DOSAN JAYA SUKABUMI', 1700000, '2015-02-18'),
(46, 'Kontrak kerja maintenance dengan aplikasi akb98', 'PT DSS', 2500000, '2015-02-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_keluar`
--
ALTER TABLE `mst_keluar`
 ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `mst_masuk`
--
ALTER TABLE `mst_masuk`
 ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mst_keluar`
--
ALTER TABLE `mst_keluar`
MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mst_masuk`
--
ALTER TABLE `mst_masuk`
MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
