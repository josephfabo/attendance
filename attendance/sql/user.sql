-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: March 15, 2023 at 06:30 PM
-- By Joseph Fabo

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `firstName` varchar(125) NOT NULL,
  `lastName` varchar(125) NOT NULL,
  `totalPay` int(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


INSERT INTO `user` (`id`, `firstName`, `lastName`, `totalPay`) VALUES
(1, 'John', 'Doe', 10000),
(2, 'Jane', 'Doe', 10000),
(3, 'Mike', 'Doe', 10000),
(4, 'Doe', 'Rehman', 10000),
(5, 'Doe', 'Alam', 10000);

-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);
 --
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;