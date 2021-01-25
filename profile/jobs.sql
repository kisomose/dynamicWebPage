-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 09:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DID` varchar(5) NOT NULL,
  `NAMES` varchar(11) NOT NULL,
  `EID` varchar(5) NOT NULL,
  `COMPANY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DID`, `NAMES`, `EID`, `COMPANY`) VALUES
('D01', 'market', 'E01', 'stanbic'),
('D02', 'sales', 'E04', 'Total petrol station'),
('D03', 'manager', 'E02', 'UNBS'),
('D04', 'software De', 'E04', 'UGANDA CHRISTIAN UNI');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` varchar(5) DEFAULT NULL,
  `NAME` varchar(20) NOT NULL,
  `DUTY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `NAME`, `DUTY`) VALUES
('E01', 'JORDAN peter', 'developer'),
('E02', 'DAN  samson', 'teacher'),
('E03', 'brenda Grace', 'nurse'),
('E04', 'HEMAN pterson', 'speaker');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `NAME` varchar(15) NOT NULL,
  `COMPANY` varchar(15) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `LOCATION` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `NAME`, `COMPANY`, `SALARY`, `LOCATION`) VALUES
(1, 'marketer', 'choice media UG', 100000, 'jinja'),
(2, 'salesman', 'EA insurence', 200000, 'kampala'),
(3, 'publisher', 'googleshop', 200000, 'UK'),
(4, 'nurse', 'Jinja Main Hosp', 200000, 'jinja'),
(5, 'data Entrant', 'hive', 200000, 'gulu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DID`),
  ADD UNIQUE KEY `nam` (`NAMES`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
