-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2022 at 07:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_validation`
--

CREATE TABLE `user_validation` (
  `UId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pass` varchar(122) NOT NULL,
  `p_p` varchar(255) NOT NULL DEFAULT 'user_default.jpg',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_validation`
--

INSERT INTO `user_validation` (`UId`, `name`, `pass`, `p_p`, `last_seen`) VALUES
(1, 'eras', '1bbd886460827015e5d605ed44252251', '', '0000-00-00 00:00:00'),
(2, 'Erastus', 'bae5e3208a3c700e3db642b6631e95b9', '', '0000-00-00 00:00:00'),
(3, 'Erastus', 'bae5e3208a3c700e3db642b6631e95b9', '', '0000-00-00 00:00:00'),
(4, 'mosese', '25d55ad283aa400af464c76d713c07ad', '', '0000-00-00 00:00:00'),
(5, 'ttt', '1bbd886460827015e5d605ed44252251', 'user_default.jpg', '2022-04-23 07:44:51'),
(6, 'james', '1bbd886460827015e5d605ed44252251', 'user_default.jpg', '2022-04-23 08:12:58'),
(7, 'Guama', '1bbd886460827015e5d605ed44252251', 'user_default.jpg', '2022-04-23 08:17:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_validation`
--
ALTER TABLE `user_validation`
  ADD PRIMARY KEY (`UId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_validation`
--
ALTER TABLE `user_validation`
  MODIFY `UId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
