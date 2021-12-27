-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iste_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users3`
--

CREATE TABLE `users3` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `password` varchar(33) NOT NULL,
  `Bio` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users3`
--

INSERT INTO `users3` (`id`, `username`, `firstname`, `surname`, `password`, `Bio`, `image`) VALUES
(1, 'uday123', 'uday', 'veeragani', '81dc9bdb52d04dc20036dbd8313ed055', 'working at Amazon\r\ncelebrate on 9 july\r\ninsta :- uday_veera\r\nfb :- udaysandeep\r\nLinkedin :- udaysandeep\r\nyoutube :- udaysandeep\r\ntwitter :- TechUday\r\ngithub :- TechUday\r\ncontact no :- 6303241578\r\nsnapchat :- udaysandeep\r\n', ''),
(2, 'sandeep123', 'sandeep', 'veeragani', '81dc9bdb52d04dc20036dbd8313ed055', 'working at flipkart as DataScientist\r\ncelebrate on 9 july\r\nISTE 2016 Batch\r\ninsta :- sandeep_sandy\r\nLinkedin :- sandeep veera\r\nfacebook :- sandeep sandy\r\nsnapchat :- snadeep_123\r\n', ''),
(3, 'uday345', 'uday', 'veera', '81dc9bdb52d04dc20036dbd8313ed055', 'working at Amazon\r\ncelebrate on 9 july\r\ninsta :- uday_veera\r\nfb :- udaysandeep\r\nLinkedin :- udaysandeep\r\nyoutube :- udaysandeep\r\ntwitter :- TechUday\r\ngithub :- TechUday\r\ncontact no :- 6303241578\r\nsnapchat :- udaysandeep', ''),
(4, 'akash123', 'akash', 'bapatla', '81dc9bdb52d04dc20036dbd8313ed055', 'working at Amazon\r\ncelebrate on 9 july\r\ninsta :- uday_veera\r\nfb :- udaysandeep\r\nLinkedin :- udaysandeep\r\nyoutube :- udaysandeep\r\ntwitter :- TechUday\r\ngithub :- TechUday\r\ncontact no :- 6303241578\r\nsnapchat :- udaysandeep', ''),
(5, 'iste', 'srkr', 'admin', '32660d3b0d572e2c07d425d89666291b', 'This is official account of SRKR ISTE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users3`
--
ALTER TABLE `users3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users3`
--
ALTER TABLE `users3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
