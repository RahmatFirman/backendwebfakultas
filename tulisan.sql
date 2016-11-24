-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 11:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tulisan`
--

CREATE TABLE `tulisan` (
  `id_tulisan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tulisan`
--

INSERT INTO `tulisan` (`id_tulisan`, `waktu`, `judul`, `isi`, `penulis`, `aktif`) VALUES
(4, '2016-11-21 03:51:03', 'Test 2', 'Test', '', 0),
(5, '2016-11-21 03:51:51', 'Test 2', 'Test', '', 0),
(14, '2016-11-23 09:50:23', 'Adfafa', 'adfadfad', '', 1),
(15, '2016-11-23 09:51:29', 'Afdfafa', 'afdfafa', '', 1),
(16, '2016-11-23 09:51:44', 'Afdfafa', 'afdfafa', '', 1),
(17, '2016-11-23 09:52:01', 'hghghghg', 'ssdfsfs', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`id_tulisan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `id_tulisan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
