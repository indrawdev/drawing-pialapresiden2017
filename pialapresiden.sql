-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 12:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pialapresiden`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `pot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `group`, `item_id`, `sort`, `pot`) VALUES
(1, 2, 1, 2, 2),
(2, 4, 2, 1, 1),
(3, 2, 3, 1, 1),
(4, 1, 4, 1, 1),
(5, 3, 5, 1, 1),
(6, 1, 6, 2, 2),
(7, 3, 7, 2, 2),
(8, 4, 8, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`) VALUES
(0, 'NO'),
(1, 'QF 1'),
(2, 'QF 2'),
(3, 'QF 3'),
(4, 'QF 4');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `logo`, `name`) VALUES
(1, 'mitra-kukar.png', 'MITRA KUKAR'),
(2, 'arema-fc.png', 'AREMA FC'),
(3, 'persib.png', 'PERSIB BANDUNG'),
(4, 'pusamania-borneo.png', 'BORNEO FC'),
(5, 'semen-padang.png', 'SEMEN PADANG'),
(6, 'madura-united.png', 'MADURA UNITED'),
(7, 'bhayangkara.png', 'BHAYANGKARA FC'),
(8, 'sriwijaya-fc.png', 'SRIWIJAYA FC');

-- --------------------------------------------------------

--
-- Table structure for table `pot`
--

CREATE TABLE `pot` (
  `pot_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pot`
--

INSERT INTO `pot` (`pot_id`, `name`) VALUES
(1, 'POT 1'),
(2, 'POT 2');

-- --------------------------------------------------------

--
-- Table structure for table `sort`
--

CREATE TABLE `sort` (
  `sort_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sort`
--

INSERT INTO `sort` (`sort_id`, `value`) VALUES
(1, 1),
(2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pot`
--
ALTER TABLE `pot`
  ADD PRIMARY KEY (`pot_id`);

--
-- Indexes for table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`sort_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sort`
--
ALTER TABLE `sort`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
