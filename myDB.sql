-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2017 at 04:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL,
  `zipcode` varchar(30) DEFAULT NULL,
  `joinDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `basicPay` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`id`, `name`, `gender`, `email`, `url`, `dob`, `address`, `city`, `province`, `zipcode`, `joinDate`, `basicPay`) VALUES
(47, 'Nimmy', 'female', 'nimmy@gmail.com', 'https://www.daniweb.com/programming/web-development/threads/445375/basic-fetch-id-and-data-in-php-mysql', '1990-03-02 05:00:00', '1990-03-02 00:00:00', 'Toronto', 'Alberta', 'M1B1E1', '2016-09-09 04:00:00', 4000000),
(48, 'Nidhin', 'male', 'nidhin@gmail.com', 'https://www.daniweb.com/programming/web-development/threads/445375/basic-fetch-id-and-data-in-php-mysql', '1993-02-02 05:00:00', '2342 Sheperd West', 'Toronto', 'ON', 'M1B1E3', '2012-02-12 05:00:00', 600000),
(49, 'Nithya', 'female', 'nithya@gmail.com', 'https://stackoverflow.com/questions/11869662/display-alert-message-and-redirect-after-click-on-accept', '2000-12-31 05:00:00', '675 Alberts Colos', 'Whitby', 'Ontario', 'M2S1DC', '2015-02-01 05:00:00', 500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
