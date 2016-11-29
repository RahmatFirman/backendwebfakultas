-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 03:52 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakultas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `prestasi` text NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `prestasi`, `tahun`, `nama`, `foto`) VALUES
(1436, 'Juara Makan', '2011', 'Al Riefqy Dasmito', '1480453052_prestasi.jpg');

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
(14, '2016-11-29 13:46:44', 'Edit', 'adfadfad', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
(1, 'fachrial', 'fachrialfadilah12@gmail.com', '$2y$10$i3GRSJKYJEAXuRLLe5sQ4OmuT7GA9zSOtsZYytFmzMC2ekIoQ3dCW', 'default.jpg', '2016-11-27 17:58:43', NULL, 0, 0, 0),
(124342, 'ito123', 'aksasa@gmail.com', 'bcc5a4a17e88b5a31d0450dd994cf677', 'default.jpg', '2016-11-08 00:00:00', '2016-11-14 00:00:00', 1, 1, 0),
(124343, 'alriefqy', 'ekydesmito@gmail.com', '$2y$10$rb16R/pnz86I7Op7D2RLW./5cp40gkkj5PCg3YaR8fCFKWRT1Zfci', 'default.jpg', '2016-11-29 14:09:26', NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`id_tulisan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1437;
--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `id_tulisan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124344;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
