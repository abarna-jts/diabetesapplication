-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 11:29 AM
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
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `cid` int(11) NOT NULL,
  `cdate` date NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `adate` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dadvised` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `wardno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `dietician` varchar(30) NOT NULL,
  `t1` varchar(25) NOT NULL,
  `t2` varchar(25) NOT NULL,
  `t3` varchar(25) NOT NULL,
  `t4` varchar(25) NOT NULL,
  `t5` varchar(25) NOT NULL,
  `t6` varchar(25) NOT NULL,
  `t7` varchar(25) NOT NULL,
  `t8` varchar(25) NOT NULL,
  `d1` varchar(50) NOT NULL,
  `d2` varchar(50) NOT NULL,
  `d3` varchar(50) NOT NULL,
  `d4` varchar(50) NOT NULL,
  `d5` varchar(50) NOT NULL,
  `d6` varchar(50) NOT NULL,
  `d7` varchar(50) NOT NULL,
  `d8` varchar(50) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `r1` varchar(50) NOT NULL,
  `r2` varchar(50) NOT NULL,
  `r3` varchar(50) NOT NULL,
  `r4` varchar(50) NOT NULL,
  `r5` varchar(50) NOT NULL,
  `r6` varchar(50) NOT NULL,
  `r7` varchar(50) NOT NULL,
  `r8` varchar(50) NOT NULL,
  `remark1` varchar(50) NOT NULL,
  `remark2` varchar(50) NOT NULL,
  `remark3` varchar(50) NOT NULL,
  `remark4` varchar(50) NOT NULL,
  `remark5` varchar(50) NOT NULL,
  `remark6` varchar(50) NOT NULL,
  `remark7` varchar(50) NOT NULL,
  `remark8` varchar(50) NOT NULL,
  `note` varchar(55) NOT NULL,
  `calories` int(15) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`cid`, `cdate`, `height`, `weight`, `adate`, `title`, `pname`, `age`, `gender`, `dadvised`, `dname`, `wardno`, `bedno`, `dietician`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `remark1`, `remark2`, `remark3`, `remark4`, `remark5`, `remark6`, `remark7`, `remark8`, `note`, `calories`, `SID`) VALUES
(101, '2023-04-28', 155, 50, '2023-04-28', 'Mrs.', 'Reina Jose ', 35, 'Female', 1300, 'Dr. Denish', 252, 14, 'Jermin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 307, 129, 180, 370, 59, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1300, 1),
(102, '2023-04-21', 168, 62, '2023-04-21', 'Mr.', ' Albert J', 22, 'Male', 1500, 'Dr. Honest', 115, 7, 'Jermin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 21, 328, 129, 190, 450, 99, 283, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 3 months', 1500, 2),
(103, '2023-04-25', 158, 57, '2023-04-25', 'Miss.', 'Pepslin A', 25, 'Female', 1200, 'Dr. Esther', 402, 14, 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 328, 129, 170, 250, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1200, 3),
(104, '2023-04-26', 165, 60, '2023-04-26', 'Mr.', 'Sasi A', 30, 'Male', 1400, 'Dr. Esther', 420, 16, 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats with fruits', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad and coffee', 'Phulka with dal', 'Green Tea', 2, 400, 130, 215, 250, 150, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1400, 4),
(105, '2023-04-28', 156, 60, '2023-04-28', 'Mr.', 'Bala', 25, 'Male', 1200, 'Dr. Honest', 407, 16, 'Sherin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 328, 129, 170, 250, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1200, 5),
(106, '2023-04-29', 162, 64, '2023-04-29', 'Mr.', 'Ajay', 30, 'Male', 1100, 'Dr. Sri', 252, 31, 'Jermin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 4, 294, 125, 160, 290, 57, 170, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1100, 7),
(108, '2023-04-27', 159, 45, '2023-04-27', 'Miss.', 'Shainy', 21, 'Female', 1300, 'Dr.Honest', 442, 13, 'Sherin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats with fruits', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad and coffee', 'Phulka with dal', 'Green Tea', 2, 307, 129, 180, 370, 59, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1300, 10),
(111, '2023-04-26', 160, 36, '2023-04-26', 'Miss.', 'Sowmi', 22, 'Female', 1500, 'Dr.Esther', 142, 2, 'Jermin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 21, 328, 129, 190, 450, 99, 283, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1500, 18),
(77, '2023-04-29', 156, 59, '2023-04-29', 'Miss.', 'Beni', 23, 'Female', 1400, 'Dr. Denish', 113, 12, 'Sowmiya', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 380, 137, 180, 380, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1400, 33),
(115, '2023-04-28', 156, 60, '2023-04-28', 'Mr.', 'Naveen', 25, 'Male', 1300, 'Dr. Honest', 407, 16, 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 328, 129, 260, 260, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1300, 42);

-- --------------------------------------------------------

--
-- Table structure for table `discharge`
--

CREATE TABLE `discharge` (
  `SID` int(15) NOT NULL,
  `cid` int(11) NOT NULL,
  `cdate` date NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `adate` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dadvised` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `nextvis` date NOT NULL,
  `expires` varchar(20) NOT NULL,
  `ddate` date NOT NULL,
  `dietician` varchar(30) NOT NULL,
  `t1` varchar(25) NOT NULL,
  `t2` varchar(25) NOT NULL,
  `t3` varchar(25) NOT NULL,
  `t4` varchar(25) NOT NULL,
  `t5` varchar(25) NOT NULL,
  `t6` varchar(25) NOT NULL,
  `t7` varchar(25) NOT NULL,
  `t8` varchar(25) NOT NULL,
  `d1` varchar(50) NOT NULL,
  `d2` varchar(50) NOT NULL,
  `d3` varchar(50) NOT NULL,
  `d4` varchar(50) NOT NULL,
  `d5` varchar(50) NOT NULL,
  `d6` varchar(50) NOT NULL,
  `d7` varchar(50) NOT NULL,
  `d8` varchar(50) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `r1` varchar(50) NOT NULL,
  `r2` varchar(50) NOT NULL,
  `r3` varchar(50) NOT NULL,
  `r4` varchar(50) NOT NULL,
  `r5` varchar(50) NOT NULL,
  `r6` varchar(50) NOT NULL,
  `r7` varchar(50) NOT NULL,
  `r8` varchar(50) NOT NULL,
  `remark1` varchar(50) NOT NULL,
  `remark2` varchar(50) NOT NULL,
  `remark3` varchar(50) NOT NULL,
  `remark4` varchar(50) NOT NULL,
  `remark5` varchar(50) NOT NULL,
  `remark6` varchar(50) NOT NULL,
  `remark7` varchar(50) NOT NULL,
  `remark8` varchar(50) NOT NULL,
  `note` varchar(55) NOT NULL,
  `calories` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discharge`
--

INSERT INTO `discharge` (`SID`, `cid`, `cdate`, `height`, `weight`, `adate`, `title`, `pname`, `age`, `gender`, `dadvised`, `dname`, `nextvis`, `expires`, `ddate`, `dietician`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `remark1`, `remark2`, `remark3`, `remark4`, `remark5`, `remark6`, `remark7`, `remark8`, `note`, `calories`) VALUES
(1, 101, '2023-04-28', 155, 50, '2023-04-28', 'Mrs.', 'Reina jose ', 28, 'Female', 1300, 'Dr. Denish', '2023-06-28', '3 Months', '2023-05-05', 'Sowmiya', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 307, 129, 180, 370, 59, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1300),
(2, 102, '2023-04-27', 168, 62, '2023-04-27', 'Mr.', ' Albert J', 22, 'Male', 1500, 'Dr. Honest', '2023-07-10', '4 Months', '2023-04-30', 'Jermin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 21, 328, 129, 190, 450, 99, 283, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 3 months', 1500),
(3, 103, '2023-04-22', 158, 57, '2023-04-22', 'Miss.', 'Pepslin A', 25, 'Female', 1200, 'Dr. Esther', '2023-06-15', '3 months', '2023-05-05', 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 328, 129, 170, 250, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1200),
(4, 104, '2023-04-25', 165, 60, '2023-04-25', 'Mr.', 'Sasi A', 30, 'Male', 1400, 'Dr. Esther', '2023-08-24', '5 Months', '2023-05-03', 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats with fruits', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad and coffee', 'Phulka with dal', 'Green Tea', 2, 400, 130, 215, 250, 150, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1400),
(5, 105, '2023-04-26', 156, 60, '2023-04-26', 'Mr.', 'Bala', 25, 'Male', 1200, 'Dr. Honest', '2023-09-14', '6 Months', '2023-05-09', 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 328, 129, 170, 250, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 6 months', 1200),
(6, 106, '2023-04-28', 162, 64, '2023-04-28', 'Mr.', 'Ajay', 30, 'Male', 1100, 'Dr. Sri', '2023-07-17', '4 Months', '2023-05-11', 'Jermin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 4, 294, 125, 160, 290, 57, 170, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1100),
(7, 108, '2023-04-28', 159, 45, '2023-04-28', 'Miss.', 'Shainy', 21, 'Female', 1300, 'Dr.Honest', '2023-06-26', '3 months', '2023-05-03', 'Antony', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats with fruits', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad and coffee', 'Phulka with dal', 'Green Tea', 2, 307, 129, 180, 370, 59, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1300),
(9, 77, '2023-04-29', 156, 59, '2023-04-29', 'Miss.', 'Beni', 23, 'Female', 1400, 'Dr. Denish', '2023-08-16', '4 Months', '2023-05-12', 'Sherin', '6.00 AM', '7.00 AM', '10.00 AM', '12.00 PM', '4.00 PM', '6.00 PM', '8.00 PM', '10.00 PM', 'Black coffee', 'Oats', 'Friuts(like Papaya,Apple)', 'Rice with Vegetables', 'Chickpea', 'Fruit Salad', 'Phulka with dal', 'Green Tea', 2, 380, 137, 180, 380, 68, 253, 0, 'without sugar', 'Without milk', 'Nil', 'Lots of vegs', 'Nil', 'Nil', 'without oil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Follow the diet for 4 months', 1400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `discharge`
--
ALTER TABLE `discharge`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `discharge`
--
ALTER TABLE `discharge`
  MODIFY `SID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
