-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 21, 2026 at 11:04 AM
-- Server version: 9.7.0
-- PHP Version: 8.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nreizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `boekings`
--

CREATE TABLE `boekings` (
  `boekingid` int NOT NULL,
  `boekinguserid` int NOT NULL,
  `boekingreisid` int NOT NULL,
  `boekingdatum` date NOT NULL,
  `boekingaantal_personen` int NOT NULL,
  `boekingtotaalprijs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reizen`
--

CREATE TABLE `reizen` (
  `reisid` int NOT NULL,
  `reisnaam` varchar(255) NOT NULL,
  `reisfoto` varchar(255) NOT NULL,
  `reissterren` int NOT NULL,
  `reisland` varchar(255) NOT NULL,
  `reisbeoordeeling` decimal(3,1) NOT NULL,
  `reisprijs` int NOT NULL,
  `reisvertrekdatum` date NOT NULL,
  `reisduur` time NOT NULL,
  `reisluchthaven` varchar(255) NOT NULL,
  `reistype_vlucht` varchar(255) NOT NULL,
  `reistype_verblijf` varchar(255) NOT NULL,
  `reisallinclusive` tinyint(1) NOT NULL,
  `features` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boekings`
--
ALTER TABLE `boekings`
  ADD PRIMARY KEY (`boekingid`),
  ADD KEY `boekinguserid` (`boekinguserid`),
  ADD KEY `boekingreisid` (`boekingreisid`);

--
-- Indexes for table `reizen`
--
ALTER TABLE `reizen`
  ADD PRIMARY KEY (`reisid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boekings`
--
ALTER TABLE `boekings`
  MODIFY `boekingid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reizen`
--
ALTER TABLE `reizen`
  MODIFY `reisid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boekings`
--
ALTER TABLE `boekings`
  ADD CONSTRAINT `boekings_ibfk_1` FOREIGN KEY (`boekinguserid`) REFERENCES `users` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `boekings_ibfk_2` FOREIGN KEY (`boekingreisid`) REFERENCES `reizen` (`reisid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
