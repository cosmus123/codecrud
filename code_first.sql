-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 11:38 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_first`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `email` text COLLATE utf8_bin,
  `phone` int(255) DEFAULT NULL,
  `education` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `age`, `email`, `phone`, `education`) VALUES
(237, 'Madaline', 'Phillips', 'Female', 20, 'm.phillips@randatmail.com', 625, 'Primary'),
(238, 'Madaline', 'Holmes', 'Female', 28, 'm.holmes@randatmail.com', 308, 'Bachelor'),
(240, 'Ada', 'Lloyd', 'Female', 27, 'a.lloyd@randatmail.com', 96, 'Primary'),
(241, 'Maximilian', 'Johnston', 'Male', 29, 'm.johnston@randatmail.com', 836, 'Doctoral'),
(243, 'Alexia', 'Howard', 'Female', 28, 'a.howard@randatmail.com', 517, 'Doctoral'),
(246, 'Alford', 'Kelley', 'Male', 23, 'a.kelley@randatmail.com', 595, 'Upper secondary'),
(247, 'Owen', 'Walker', 'Male', 20, 'o.walker@randatmail.com', 51, 'Master'),
(248, 'Arianna', 'Brown', 'Female', 19, 'a.brown@randatmail.com', 622, 'Upper secondary'),
(249, 'George', 'Casey', 'Male', 23, 'g.casey@randatmail.com', 174, 'Primary'),
(250, 'Kelvin', 'Phillips', 'Male', 28, 'k.phillips@randatmail.com', 946, 'Upper secondary'),
(251, 'Alina', 'Morrison', 'Female', 24, 'a.morrison@randatmail.com', 839, 'Lower secondary'),
(252, 'Maya', 'Bennett', 'Female', 29, 'm.bennett@randatmail.com', 438, 'Primary'),
(254, 'Roman', 'Richardson', 'Male', 30, 'r.richardson@randatmail.com', 325, 'Master'),
(256, 'Natalie', 'Farrell', 'Female', 27, 'n.farrell@randatmail.com', 431, 'Bachelor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
