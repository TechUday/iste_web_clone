-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:42 AM
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
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1027037589, 1160573384, 'hai uday'),
(2, 1160573384, 1027037589, 'hai akash'),
(3, 1027037589, 1160573384, 'hai andi'),
(4, 1160573384, 1027037589, 'hai ra'),
(5, 1027037589, 1160573384, 'thank you'),
(6, 735183027, 1027037589, 'hai'),
(7, 1027037589, 735183027, 'hai'),
(8, 735183027, 1027037589, 'thanku'),
(9, 1027037589, 735183027, 'thanku'),
(10, 1027037589, 735183027, 'hai'),
(11, 735183027, 1027037589, 'how r you'),
(12, 1027037589, 735183027, 'hai'),
(13, 848079730, 1027037589, 'hai'),
(14, 1027037589, 848079730, 'thanku'),
(15, 1027037589, 852839945, 'hai'),
(16, 852839945, 1027037589, 'hai kalyan'),
(17, 852839945, 1027037589, 'hai kalyan how are u'),
(18, 1027037589, 852839945, 'i am fine'),
(19, 852839945, 1027037589, 'hai mass mowa'),
(20, 1027037589, 852839945, 'double mass mowa'),
(21, 1027037589, 852839945, 'hai'),
(22, 852839945, 1027037589, 'thanku kalyan'),
(23, 1027037589, 852839945, 'bye'),
(24, 852839945, 1027037589, 'ok bye'),
(25, 1027037589, 852839945, 'hai'),
(26, 1027037589, 852839945, 'frnds okay'),
(27, 852839945, 1027037589, 'okay'),
(28, 852839945, 1027037589, 'bye'),
(29, 1027037589, 852839945, 'sare bye'),
(30, 852839945, 1027037589, 'sare bye'),
(31, 852839945, 1027037589, 'hai'),
(32, 1027037589, 852839945, 'mowa'),
(33, 852839945, 1027037589, 'okay mowa'),
(34, 1027037589, 852839945, 'sajfj'),
(35, 852839945, 1027037589, 'sbjV');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1027037589, 'Uday Sandeep', 'Veeragani', 'udaysandeep.v9@gmail.com', 'ad07cdd4c58eea2ca0bb5cdc7ecbd421', '1619159483elon1.jpg', 'Offline now'),
(2, 1160573384, 'Akash', 'cheerala', 'akashcheerala.v9@gmail.com', '4533dcab532406ee2a900b80ea8da8b4', '1619159641elon.jpg', 'Offline now'),
(3, 735183027, 'uday', 'veera', 'udaysandeep.v99@gmail.com', 'ad07cdd4c58eea2ca0bb5cdc7ecbd421', '1619172315dsds.png', 'Offline now'),
(4, 848079730, 'karthik', 'veera', 'karthik.veera9@gmail.com', '0228669bc778ab885a898364efef9f7e', '1620019120123.png', 'Offline now'),
(5, 852839945, 'kalyan', 'koti', 'kalyan.veera9@gmail.com', '85bef88d75ea0a002064dc9a1a451f21', '1620711330LIVE-3.png', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
