-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 10:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iname` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iname`, `price`, `qty`) VALUES
('itemname', 0, 0),
('itemname', 0, 0),
('Chicken Cuttlet', 258, 2),
('Noodles', 80, 1),
('Thali', 100, 2),
('Strawberry Milkshake', 120, 2);

-- --------------------------------------------------------

--
-- Table structure for table `john`
--

CREATE TABLE `john` (
  `iname` varchar(20) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kat`
--

CREATE TABLE `kat` (
  `iname` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kat`
--

INSERT INTO `kat` (`iname`, `price`, `qty`) VALUES
('Corn Soup', 170, 2),
('Mutton Soup', 318, 2),
('Corn Soup', 510, 6),
('Chicken Soup', 119, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `iname` varchar(20) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`iname`, `price`, `qty`) VALUES
('Biriyani', 240, 2),
('Cup Cake', 100, 2),
('Jumbo Burger', 110, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ram123`
--

CREATE TABLE `ram123` (
  `iname` varchar(20) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram123`
--

INSERT INTO `ram123` (`iname`, `price`, `qty`) VALUES
('Black Current Deligh', 160, 2),
('Chicken Cuttlet', 258, 2),
('Tomato Soup', 79, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ranj`
--

CREATE TABLE `ranj` (
  `iname` varchar(20) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranj`
--

INSERT INTO `ranj` (`iname`, `price`, `qty`) VALUES
('Corn Soup', 170, 2),
('Tomato Soup', 158, 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `namex` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`namex`, `content`) VALUES
('kat', 'The service was amazing!'),
('kp', 'Amazing food!'),
('ram123', 'gfjtgkkkhkh'),
('san123', 'Hello it was worth the time!');

-- --------------------------------------------------------

--
-- Table structure for table `rush123`
--

CREATE TABLE `rush123` (
  `iname` varchar(20) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rush123`
--

INSERT INTO `rush123` (`iname`, `price`, `qty`) VALUES
('Chicken Cuttlet', 129, 1),
('Corn Soup', 170, 2);

-- --------------------------------------------------------

--
-- Table structure for table `san123`
--

CREATE TABLE `san123` (
  `iname` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san123`
--

INSERT INTO `san123` (`iname`, `price`, `qty`) VALUES
('Tea', 40, 2),
('Strawberry Milkshake', 180, 3),
('Orange Juice', 80, 2),
('Chicken Soup', 238, 2),
('Corn Soup', 170, 2),
('Fried Rice', 270, 3);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `names` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`names`, `userid`, `password`) VALUES
('admin', 'admin', 'admin'),
('john', 'john', '123'),
('kat', 'kat', 'kat'),
('kpshukla', 'kp', '123'),
('ramesh', 'ram123', '123'),
('Ranjith', 'ranj', '123'),
('rush', 'rush123', '123'),
('saania', 'san123', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `john`
--
ALTER TABLE `john`
  ADD PRIMARY KEY (`iname`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`iname`);

--
-- Indexes for table `ram123`
--
ALTER TABLE `ram123`
  ADD PRIMARY KEY (`iname`);

--
-- Indexes for table `ranj`
--
ALTER TABLE `ranj`
  ADD PRIMARY KEY (`iname`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`namex`);

--
-- Indexes for table `rush123`
--
ALTER TABLE `rush123`
  ADD PRIMARY KEY (`iname`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
