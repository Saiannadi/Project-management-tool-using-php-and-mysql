-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 08:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inter`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `number` bigint(10) NOT NULL,
  `companyadd` varchar(250) NOT NULL,
  `gstnumber` varchar(50) NOT NULL,
  `pname` varchar(75) NOT NULL,
  `pstatus` varchar(30) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cnumber` varchar(100) NOT NULL,
  `crelation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`sno`, `name`, `companyname`, `emailid`, `number`, `companyadd`, `gstnumber`, `pname`, `pstatus`, `cname`, `cnumber`, `crelation`) VALUES
(1, 'sai', 'coding rim', 'prawin@gmail.com', 8753645551, 'guindy', '4887512234', 'pmt', 'completed', 'mani,sai', '87344501222,875441254', 'retailer,manager'),
(3, 'siddharath', 'sid solutions limited', 'sid@gmail.com', 77082793566, 'avadi,chennai.', '875543122223', 'Online portal system', 'progress', 'sai,mani,', '87445122365,8744125536,', 'retailer,manager,');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `sno` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `preq` varchar(40) NOT NULL,
  `ppric` varchar(45) NOT NULL,
  `price` varchar(40) NOT NULL,
  `rclient` varchar(30) NOT NULL,
  `pgst` varchar(40) NOT NULL,
  `pduration` varchar(50) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `pdate` varchar(50) NOT NULL,
  `dpay` varchar(60) NOT NULL,
  `ddate` varchar(75) NOT NULL,
  `pclient` varchar(11) NOT NULL,
  `pstatus` varchar(11) NOT NULL,
  `ptask` varchar(100) NOT NULL,
  `taskdh` varchar(100) NOT NULL,
  `tprice` varchar(50) NOT NULL,
  `tpp` varchar(100) NOT NULL,
  `tdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`sno`, `pname`, `preq`, `ppric`, `price`, `rclient`, `pgst`, `pduration`, `pay`, `pdate`, `dpay`, `ddate`, `pclient`, `pstatus`, `ptask`, `taskdh`, `tprice`, `tpp`, `tdesc`) VALUES
(5, 'Online portal system', 'html,php,bootstrap', 'INR', '1,00,000/-', 'prawin', '874552365664', '3 months', '50,000/-,10,000/-,10,000/-', '2021-04-12,2021-04-14,2021-04-15', '30,000/-', '2021-04-28,', 'mani', 'progress', 'development,', '3weeks,', 'INR,', '10,000/-,', 'develop the backend mysql.,'),
(7, 'Online portal system', 'html,php,bootstrap', 'INR', '1,50,000/-', 'saravanan', '8455123645555', '3 months', '50,000/-,', '2021-04-15,', '1,00,000/-,', '2021-04-30,', 'prawin', 'progress', 'development,', '2 weeks,', 'INR,Please choose', '10,000/-,', 'develop the backend mysql.,');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `number`, `email`, `password`) VALUES
(1, 'sai', 'srinivas', 8185080753, 'annadisai709@gmail.com', 'sai123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
