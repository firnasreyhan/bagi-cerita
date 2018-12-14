-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 10:20 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wattpad`
--

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `ID_CERITA` int(11) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `JUDUL` varchar(100) DEFAULT NULL,
  `VIEW` int(11) DEFAULT '0',
  `TGL_POST` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cerita_genre`
--

CREATE TABLE `cerita_genre` (
  `ID_CERITA_GENRE` int(11) NOT NULL,
  `ID_CERITA` int(11) NOT NULL,
  `ID_GENRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID_GENRE` int(11) NOT NULL,
  `GENRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcerita`
--

CREATE TABLE `subcerita` (
  `ID_SUBCERITA` int(11) NOT NULL,
  `ID_CERITA` int(11) DEFAULT NULL,
  `ISI_CERITA` varchar(10000) DEFAULT NULL,
  `TGL_POST` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `EMAIL` varchar(100) NOT NULL,
  `ID_LEVEL` int(11) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `SIGNUP_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EMAIL`, `ID_LEVEL`, `NAMA`, `TGL_LAHIR`, `JENIS_KELAMIN`, `PASSWORD`, `SIGNUP_DATE`) VALUES
('rezaariestyaputra@gmail.com', 1, 'Reza Ariestya Putra', '1998-04-19', 'L', '12345678', '2018-12-14 08:28:15'),
('rezaariestyaputra@yahoo.co.id', 2, 'Aries', '1998-04-19', 'L', '12345678', '2018-12-14 08:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `ID_LEVEL` int(11) NOT NULL,
  `KETERANGAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`ID_LEVEL`, `KETERANGAN`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`ID_CERITA`),
  ADD KEY `FK_RELATIONSHIP_3` (`EMAIL`);

--
-- Indexes for table `cerita_genre`
--
ALTER TABLE `cerita_genre`
  ADD PRIMARY KEY (`ID_CERITA_GENRE`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_CERITA`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_GENRE`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_GENRE`);

--
-- Indexes for table `subcerita`
--
ALTER TABLE `subcerita`
  ADD PRIMARY KEY (`ID_SUBCERITA`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_CERITA`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMAIL`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_LEVEL`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`ID_LEVEL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `ID_CERITA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cerita_genre`
--
ALTER TABLE `cerita_genre`
  MODIFY `ID_CERITA_GENRE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_GENRE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcerita`
--
ALTER TABLE `subcerita`
  MODIFY `ID_SUBCERITA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `ID_LEVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cerita`
--
ALTER TABLE `cerita`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`EMAIL`) REFERENCES `user` (`EMAIL`);

--
-- Constraints for table `cerita_genre`
--
ALTER TABLE `cerita_genre`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_CERITA`) REFERENCES `cerita` (`ID_CERITA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_GENRE`) REFERENCES `genre` (`ID_GENRE`);

--
-- Constraints for table `subcerita`
--
ALTER TABLE `subcerita`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_CERITA`) REFERENCES `cerita` (`ID_CERITA`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_LEVEL`) REFERENCES `user_level` (`ID_LEVEL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
