-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 05:35 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpleforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `fcontent`
--

CREATE TABLE IF NOT EXISTS `fcontent` (
`id` int(11) NOT NULL,
  `idforum` int(11) DEFAULT NULL,
  `idthread` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `fcontent`
--

INSERT INTO `fcontent` (`id`, `idforum`, `idthread`, `user`, `isi`, `tanggal`) VALUES
(21, NULL, 23, 5, 'komen wew', '2018-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `fdisplay`
--

CREATE TABLE IF NOT EXISTS `fdisplay` (
`id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fdisplay`
--

INSERT INTO `fdisplay` (`id`, `nama`, `urutan`) VALUES
(1, 'Teknik dan Ilmu Komputer', 1),
(2, 'Ekonomi dan Bisnis', 2),
(3, 'Sastra', 3),
(4, 'Ilmu Sosial dan Pemerintahan', 4),
(5, 'Desain', 5),
(6, 'Hukum', 6);

-- --------------------------------------------------------

--
-- Table structure for table `fthread`
--

CREATE TABLE IF NOT EXISTS `fthread` (
`id` int(11) NOT NULL,
  `idforum` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `datementor` date NOT NULL,
  `deadline` date NOT NULL,
  `feemin` varchar(50) NOT NULL,
  `feemax` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `fthread`
--

INSERT INTO `fthread` (`id`, `idforum`, `judul`, `isi`, `tanggal`, `userid`, `type`, `matkul`, `datementor`, `deadline`, `feemin`, `feemax`) VALUES
(23, 0, 'wew', 'desk wew', NULL, 5, 'Jasa Mengajar', 'wew', '2018-09-18', '2018-10-09', '10000', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `fuser`
--

CREATE TABLE IF NOT EXISTS `fuser` (
`id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nim` int(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fuser`
--

INSERT INTO `fuser` (`id`, `nama`, `username`, `password`, `nim`, `jurusan`, `email`, `tlp`) VALUES
(2, 'meissa', 'meissa', 'meissa', 10516652, 'Sistem Informasi', 'Meissaeka66@gmail.com', '085797953068'),
(1, 'admin', 'admin', 'admin1', 10516001, 'Sistem Informasi', 'admin@gmail.com', '08123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fcontent`
--
ALTER TABLE `fcontent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fdisplay`
--
ALTER TABLE `fdisplay`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fthread`
--
ALTER TABLE `fthread`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuser`
--
ALTER TABLE `fuser`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fcontent`
--
ALTER TABLE `fcontent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `fdisplay`
--
ALTER TABLE `fdisplay`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fthread`
--
ALTER TABLE `fthread`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `fuser`
--
ALTER TABLE `fuser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
