-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2018 at 01:18 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BELAL`
--
CREATE DATABASE IF NOT EXISTS `BELAL` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `BELAL`;

-- --------------------------------------------------------

--
-- Table structure for table `abuse`
--

DROP TABLE IF EXISTS `abuse`;
CREATE TABLE IF NOT EXISTS `abuse` (
  `postid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `report` varchar(5000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `allpost`
--

DROP TABLE IF EXISTS `allpost`;
CREATE TABLE IF NOT EXISTS `allpost` (
  `postid` int(10) NOT NULL AUTO_INCREMENT,
  `post` varchar(5000) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpost`
--

INSERT INTO `allpost` (`postid`, `post`, `uname`, `time`) VALUES
(1, 'Hello , How are you', 'admin', '2018-05-11 19:45:41');
--
-- Database: `simple_login`
--
CREATE DATABASE IF NOT EXISTS `simple_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simple_login`;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `roll_no` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `secques` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=1200112060 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`roll_no`, `username`, `password`, `fname`, `lname`, `contact`, `gender`, `secques`, `answer`) VALUES
(1200112059, 'admin', 'admin123', 'Belal', 'Quamar', '9876543210', 'male', 'Where were you born ?', 'lucknow');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
