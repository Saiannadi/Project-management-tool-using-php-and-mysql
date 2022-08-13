-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 08:41 AM
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
  `name` varchar(20) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `companyadd` varchar(100) NOT NULL,
  `gstnumber` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pstatus` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cnumber` bigint(10) NOT NULL,
  `crelation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pname` varchar(20) NOT NULL,
  `preq` varchar(25) NOT NULL,
  `ppric` varchar(15) NOT NULL,
  `price` bigint(20) NOT NULL,
  `rclient` varchar(25) NOT NULL,
  `pgst` varchar(50) NOT NULL,
  `pduration` varchar(25) NOT NULL,
  `pay` bigint(25) NOT NULL,
  `pdate` date NOT NULL,
  `dpay` bigint(25) NOT NULL,
  `ddate` date NOT NULL,
  `pclient` varchar(25) NOT NULL,
  `pstatus` varchar(25) NOT NULL,
  `ptask` varchar(50) NOT NULL,
  `taskdh` varchar(20) NOT NULL,
  `tprice` varchar(15) NOT NULL,
  `tpp` bigint(25) NOT NULL,
  `tdesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
