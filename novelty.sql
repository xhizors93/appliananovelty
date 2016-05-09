-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 04:11 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espbt`
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

-- --------------------------------------------------------

--
-- Table structure for table `borrow_details`
--

CREATE TABLE IF NOT EXISTS `borrow_details` (
  `BOOK_BORROW_ID` int(11) NOT NULL,
  `STUD_NRIC` varchar(50) NOT NULL,
  `STUD_NAME` varchar(100) NOT NULL,
  `STUD_CLASS` varchar(20) NOT NULL,
  `BORROW_BDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BORROW_RDATE` date NOT NULL,
  `REMARK` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_details`
--

INSERT INTO `borrow_details` (`BOOK_BORROW_ID`, `STUD_NRIC`, `STUD_NAME`, `STUD_CLASS`, `BORROW_BDATE`, `BORROW_RDATE`, `REMARK`) VALUES
(1117, '090201136578', 'Syazwani bt Azman', '1 Melur', '2016-01-20 07:28:08', '2016-01-20', 'Not Yet Returned'),
(1120, '071218102237', 'Azri bin Hakimi', '3 Melur', '2016-01-20 17:25:37', '0000-00-00', 'Not Yet Returned'),
(1121, '070831087712', 'Aliaa bt Kamal', '3 Melur', '2016-01-20 17:27:44', '0000-00-00', 'Not Yet Returned'),
(1128, '070102034473', 'Hazim bin Zul', '3 Ros', '2016-01-21 05:13:13', '2016-01-21', 'Done Returned');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `USER_NAME` varchar(50) NOT NULL,
  `STAFF_NAME` varchar(50) NOT NULL,
  `STAFF_NRIC` bigint(20) DEFAULT NULL,
  `STAFF_PHONENUM` varchar(15) NOT NULL,
  `STAFF_POSITION` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`USER_NAME`, `STAFF_NAME`, `STAFF_NRIC`, `STAFF_PHONENUM`, `STAFF_POSITION`, `USER_PASSWORD`) VALUES
('ad10', 'Nur Nadirah', 780909034124, '019-8899988', 'System Admin', 'ad10'),
('ad11', 'Muhammad Firdaus', 980987108766, '019-6570439', 'System Admin', 'ad11'),
('st15', 'Siti Aminah bt Ghazali', 680713032344, '019-8766544', 'SPBT Staff', 'st15'),
('st343', 'Zarifah bt Ismail', 681201115072, '019-6677766', 'SPBT Staff', 'st343'),
('st3433', 'Syafiqa Ain Alfida bt Abdul Rahim', 930703137878, '017-9890999', 'SPBT Staff', 'st3433'),
('stud12', 'Nur Amalina', 930415031222, '011-98765432', 'SPBT Prefect', 'stud12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `STUD_NRIC` varchar(20) NOT NULL,
  `STUD_NAME` varchar(100) NOT NULL,
  `STUD_CLASS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STUD_NRIC`, `STUD_NAME`, `STUD_CLASS`) VALUES
('040116078812', 'Shah bin Aziz', '6 Kenanga'),
('040331025568', 'Nadirah binti Hamdi', '6 Ros'),
('040506067781', 'Syahmi bin Alif', '6 Melur'),
('040718123390', 'Aizat bin Azrul', '6 Teratai'),
('040719011176', 'Laili binti Hadif', '6 Kenanga'),
('050312100043', 'Ida binti Ariff', '5 Ros'),
('050315067898', 'Famiza Elmida bt Kipli', '5 Kenanga'),
('050421114456', 'Aiman binti Kameel', '5 Melur'),
('050630051170', 'Athirah binti Karim', '5 Kenanga'),
('050722081127', 'Maizatul binti Mahmood', '5 Ros'),
('050813056670', 'Nur binti Azri', '5 Teratai'),
('060303100970', 'Izzati binti Jamal', '4 Teratai'),
('060531028871', 'Ezzatun Nisa binti Ahmad', '4 Ros'),
('061201112230', 'Adi bin Kamil', '4 Melur'),
('061201114544', 'Nurul Atikah bt Kamaruddin', '4 Kenanga'),
('061211134467', 'Muhammad Jamal bin Embong', '4 Ros'),
('070101109861', 'Aqilah binti Alias', '3 Teratai'),
('070102034473', 'Hazim bin Zul', '3 Ros'),
('070430091127', 'Nurul binti Ahmed', '3 Kenanga'),
('070831087712', 'Aliaa binti Kamal', '3 Melur'),
('071218102237', 'Azri bin Hakimi', '3 Melur'),
('080304123567', 'Fariesya bt Jamil', '2 Melur'),
('080623012370', 'Muhammad bin Ali', '2 Kenanga'),
('080704136578', 'Fatin binti Aiman', '2 Ros'),
('080720078891', 'Hazim bin Yunus', '2 Teratai'),
('081231102231', 'Hazim bin Hamidi', '2 Teratai'),
('090201136578', 'Syazwani bt Azman', '1 Melur'),
('090301136578', 'Syazwani bt Azmeen', '1 Melur'),
('090323100097', 'Nurul Iman bt Ariff', '1 Teratai'),
('090903067891', 'Muhammad Zaim Syahmi bin Abdullah', '1 Kenanga'),
('090909119878', 'Nurul Afiqah bt Ahmad', '1 Ros'),
('091213789076', 'Idris bin Ahmad', '1 Ros');

-- --------------------------------------------------------

--
-- Table structure for table `textbook`
--

CREATE TABLE IF NOT EXISTS `textbook` (
  `data` varchar(20) NOT NULL,
  `BOOK_TITLE` varchar(100) NOT NULL,
  `BOOK_PRICE` double NOT NULL,
  `BOOK_STANDARD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textbook`
--

INSERT INTO `textbook` (`data`, `BOOK_TITLE`, `BOOK_PRICE`, `BOOK_STANDARD`) VALUES
('BI127869-BI1', 'Bahasa Inggeris Darjah 1', 19.96, 1),
('BI374257-BI4', 'Bahasa Inggeris Darjah 4', 24.8, 4),
('BI758465-BI2', 'Bahasa Inggeris Darjah 2', 35.8, 2),
('BI867752-BI6', 'Bahasa Inggeris Darjah 6', 27.7, 6),
('BI950788-BI5', 'Bahasa Inggeris Darjah 5', 26.8, 5),
('BI953786-BI3', 'Bahasa Inggeris Darjah 3', 21.8, 3),
('BM076492-BM2', 'Bahasa Melayu Darjah 2', 33.21, 2),
('BM098765-BM1', 'Bahasa Melayu Darjah 1', 25.6, 1),
('BM099898-BM4', 'Bahasa Melayu Darjah 4', 34, 4),
('BM236690-BM3', 'Bahasa Melayu Darjah 3', 32.78, 3),
('BM777623-BM5', 'Bahasa Melayu Darjah 5', 35.8, 5),
('BM876635-BM6', 'Bahasa Melayu Darjah 6', 23.45, 6),
('MT072679-MT1', 'Matematik Darjah 1', 35.98, 1),
('MT371209-MT2', 'Matematik Darjah 2', 26.86, 2),
('MT567834-MT3', 'Matematik Darjah 3', 21.9, 3),
('MT677654-MT4', 'Matematik Darjah 4', 28.6, 4),
('MT766789-MT5', 'Matematik Darjah 5', 27.9, 5),
('MT783443-MT6', 'Matematik Darjah 6', 35.8, 6),
('PI098765-PI3', 'Pendidikan Islam Darjah 3', 35.8, 3),
('PI564978-PI1', 'Pendidikan Islam Darjah 1', 21.8, 1),
('PI654454-PI6', 'Pendidikan Islam Darjah 6', 35.8, 6),
('PI923114-PI4', 'Pendidikan Islam Darjah 4', 36.8, 4),
('PI988234-PI2', 'Pendidikan Islam Darjah 2', 24.8, 2),
('SN433425-SN2', 'Pendidikan Sains Darjah 2', 25.8, 2),
('SN445567-SN6', 'Pendidikan Sains Darjah 6', 25.8, 6),
('SN654987-SN3', 'Pendidikan Sains Darjah 3', 35.7, 3),
('SN839225-SN4', 'Pendidikan Sains Darjah 4', 39.8, 4),
('SN982234-SN5', 'Pendidikan Sains Darjah 5', 25.8, 5),
('SN987443-SN1', 'Pendidikan Sains Darjah 1', 18.95, 1);

-- --------------------------------------------------------

--
-- Table structure for table `textbook_borrowed`
--

CREATE TABLE IF NOT EXISTS `textbook_borrowed` (
  `TBORROW_ID` int(10) NOT NULL,
  `STUD_NRIC` varchar(20) NOT NULL,
  `data1` varchar(30) NOT NULL,
  `data2` varchar(30) NOT NULL,
  `data3` varchar(30) NOT NULL,
  `data4` varchar(30) NOT NULL,
  `data5` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1935 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textbook_borrowed`
--

INSERT INTO `textbook_borrowed` (`TBORROW_ID`, `STUD_NRIC`, `data1`, `data2`, `data3`, `data4`, `data5`) VALUES
(1924, '090201136578', 'BI127869-BI1', 'BM098765-BM1', 'MT072679-MT1', 'PI564978-PI1', 'SN987443-SN1'),
(1934, '070102034473', 'SN654987-SN3', 'PI098765-PI3', 'MT567834-MT3', 'BI953786-BI3', 'BM236690-BM3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`USER_NAME`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`);

--
-- Indexes for table `borrow_details`
--
ALTER TABLE `borrow_details`
  ADD PRIMARY KEY (`BOOK_BORROW_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`USER_NAME`),
  ADD UNIQUE KEY `staff_no` (`USER_NAME`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUD_NRIC`);

--
-- Indexes for table `textbook`
--
ALTER TABLE `textbook`
  ADD PRIMARY KEY (`data`);

--
-- Indexes for table `textbook_borrowed`
--
ALTER TABLE `textbook_borrowed`
  ADD PRIMARY KEY (`TBORROW_ID`),
  ADD UNIQUE KEY `data1` (`data1`),
  ADD UNIQUE KEY `data2` (`data2`),
  ADD UNIQUE KEY `data3` (`data3`),
  ADD UNIQUE KEY `data4` (`data4`),
  ADD UNIQUE KEY `data5` (`data5`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_details`
--
ALTER TABLE `borrow_details`
  MODIFY `BOOK_BORROW_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1129;
--
-- AUTO_INCREMENT for table `textbook_borrowed`
--
ALTER TABLE `textbook_borrowed`
  MODIFY `TBORROW_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1935;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
