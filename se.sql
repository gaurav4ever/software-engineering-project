-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 08:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` varchar(20) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `sold` varchar(30) NOT NULL,
  `bought_buy` varchar(30) NOT NULL,
  `sold_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `edition`, `publisher`, `price`, `image`, `sold`, `bought_buy`, `sold_by`) VALUES
(7, 'zz', 'zz', 'qq', 'publisher', 'dd', 'images/5eb899deeef8bc0ad47c6cc4fdb70258.jpg', '1', '4', '4'),
(8, 'qqq', 'qqq', 'qq', 'publisher', '1122', 'images/Screenshot_20170429-165919.jpg', '1', '8', '4'),
(9, 'zz', 'xx', 'cc', 'publisher', '100', 'images/463446.jpg', '1', '6', '4'),
(10, 'ss', 'ss', 'ss', 'publisher', '222', 'images/5.jpg', '1', '6', '4'),
(12, 'rome_jungle', 'julio caesar', '1st', 'publisher', '12345', 'images/1122.jpg', '0', 'null', '6'),
(13, 'ada', 'clrs', '2', 'phi', '250', 'images/chicken_drumsticks.jpg', '0', 'null', '8'),
(14, 'gaurav sharma', 'wwqqq', 'qq', 'asdsa', '300', 'images/5.jpg', '0', 'null', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `create_at` varchar(30) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`, `create_at`, `avatar`) VALUES
(1, 'gaurav sharma', 'gauravsharma.mvp@gmail.com', '9087753739', 'c822c1b63853ed273b89687ac505f9fa', '26/03/17 09:16:32pm', 'default.png'),
(4, 'asda', 'aasd@gmail.com', '9087753739', '099b3b060154898840f0ebdfb46ec78f', '01/05/17 07:01:28pm', 'default.png'),
(5, 'Aakash Shaw', 'aakash.shaw2014@vit.ac.in', '974884304', '81dc9bdb52d04dc20036dbd8313ed055', '01/05/17 07:18:40pm', 'default.png'),
(6, 'prem prakash', 'pop@gmail.com', '9823457623', '9cdfb439c7876e703e307864c9167a15', '01/05/17 08:23:55pm', 'default.png'),
(7, 'Mayank Bansal', 'mayankbansal10@gmail.com', '9994020255', '81dc9bdb52d04dc20036dbd8313ed055', '02/05/17 07:30:32pm', 'default.png'),
(8, 'manjanna', 'manjuvce@gmail.com', '9964571937', '827ccb0eea8a706c4c34a16891f84e7b', '02/05/17 07:32:36pm', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
