-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 01:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet management`
--

-- --------------------------------------------------------

--
-- Table structure for table `patdata`
--

CREATE TABLE `patdata` (
  `sno` int(10) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `dname` varchar(25) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `ddate` date NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `adate` date NOT NULL,
  `dietad` int(10) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patdata`
--

INSERT INTO `patdata` (`sno`, `pname`, `dname`, `age`, `gender`, `ddate`, `weight`, `height`, `adate`, `dietad`, `SID`) VALUES
(101, 'Reina Jose.J', 'Dr. Denish', 24, 'female', '2023-03-28', 50, 155, '2023-03-28', 1300, 1),
(102, 'Albert.J', 'Dr.Honest', 22, 'male', '2023-03-09', 62, 168, '2023-03-09', 1500, 2),
(103, 'Pepslin.A', 'Dr.Esther', 25, 'female', '2023-03-11', 57, 158, '2023-03-11', 1200, 3),
(104, 'Sasi', 'Dr.Esther', 30, 'male', '2023-03-14', 60, 165, '2023-03-14', 1400, 4),
(105, 'Bala', 'Dr.Honest', 25, 'male', '2023-03-13', 60, 156, '2023-03-13', 1200, 5),
(106, 'mr.Ajay', 'Dr.Sri', 30, 'male', '2023-03-17', 64, 162, '2023-03-17', 1100, 6),
(107, 'Nimi', 'Dr.Reina', 45, 'female', '2023-03-20', 57, 157, '2023-03-20', 1700, 7),
(108, 'shainy', 'Dr.Honest', 21, 'female', '2023-03-22', 45, 159, '2023-03-22', 1300, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patdata`
--
ALTER TABLE `patdata`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patdata`
--
ALTER TABLE `patdata`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
