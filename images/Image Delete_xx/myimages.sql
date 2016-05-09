-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2011 at 12:44 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practise`
--

-- --------------------------------------------------------

--
-- Table structure for table `myimages`
--

CREATE TABLE IF NOT EXISTS `myimages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `picture` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `myimages`
--

INSERT INTO `myimages` (`id`, `name`, `email`, `picture`) VALUES
(13, 'Usha ka', 'ushaka@gmail.com', '3..jpg'),
(15, 'ananthi', 'Abny@rocketmailin', '9..jpg'),
(14, 'Asif', 'asif@gmnail.om', '2..jpg');
