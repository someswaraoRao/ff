-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 01:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freefire`
--

-- --------------------------------------------------------

--
-- Table structure for table `br1`
--

CREATE TABLE `br1` (
  `id` int(11) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `br2`
--

CREATE TABLE `br2` (
  `id` int(11) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `br3`
--

CREATE TABLE `br3` (
  `id` int(11) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `br4`
--

CREATE TABLE `br4` (
  `id` int(11) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `team_name` varchar(50) NOT NULL,
  `lead_name` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `img` varchar(150) NOT NULL,
  `t_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`team_name`, `lead_name`, `num`, `pass`, `time`, `img`, `t_id`) VALUES
('HeadShot', 'siddu', '123', '123', '10', '', ''),
('', '', '', '', '12', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `br1`
--
ALTER TABLE `br1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `br2`
--
ALTER TABLE `br2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `br3`
--
ALTER TABLE `br3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `br4`
--
ALTER TABLE `br4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `br1`
--
ALTER TABLE `br1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `br2`
--
ALTER TABLE `br2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `br3`
--
ALTER TABLE `br3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `br4`
--
ALTER TABLE `br4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
