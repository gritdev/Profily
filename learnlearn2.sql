-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 01:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learnlearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `activated` enum('0','1') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `codegen` varchar(255) DEFAULT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `privacy` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `activated`, `email`, `codegen`, `lastname`, `gender`, `firstname`, `privacy`) VALUES
(46, 'vikramgrewal', 'password', '1', 'test@test.com', '147b946c459e3ff9564881317a3f10a7', 'grewal', 'M', 'vikram', 'Public'),
(47, 'amy', 'password', '1', 'amytran57@gmail.com', 'c1eb0bd75e44214590e345e861b077a6', 'grewal', 'M', 'vikram', 'Public'),
(48, 'tranamy', 'password', '1', 'testtest@test', '246b7716ea57892ffb34f88a64c4b75c', 'tran', 'M', 'amy', 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profileuser` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profileuser`) VALUES
(1, 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
