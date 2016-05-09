-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2016 at 06:40 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espbt_fyp_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE IF NOT EXISTS `app_user` (
  `USER_NAME` varchar(50) NOT NULL,
  `STAFF_NAME` varchar(100) DEFAULT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL,
  `ROLE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_user`
--

INSERT INTO `app_user` (`USER_NAME`, `STAFF_NAME`, `USER_PASSWORD`, `ROLE`) VALUES
('ad10', 'Nur Nadirah', 'ad10', 'admin'),
('ad11', 'Muhammad Firdaus', 'ad11', 'admin'),
('st15', 'Siti Aminah bt Ghazali', 'st15', 'staff'),
('st343', 'Zarifah bt Ismail', 'st343', 'staff'),
('st3433', 'Syafiqa Ain Alfida bt Abdul Rahim', 'st3433', 'staff'),
('stud12', 'Nur Amalina', 'stud12', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`USER_NAME`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
