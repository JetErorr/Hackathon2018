-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 03:55 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skillindia`
--
CREATE DATABASE IF NOT EXISTS `skillindia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `skillindia`;

-- --------------------------------------------------------

--
-- Table structure for table `scomplaint`
--

CREATE TABLE IF NOT EXISTS `scomplaint` (
  `uid` int(20) NOT NULL,
  `complaint_detail` varchar(500) NOT NULL,
  `complaint_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suser`
--

CREATE TABLE IF NOT EXISTS `suser` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` bigint(15) NOT NULL,
  `bdate` date NOT NULL,
  `password` varchar(26) NOT NULL,
  `user_profile` varchar(200) NOT NULL,
  `state` text NOT NULL,
  `district` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`,`contactno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_document`
--

CREATE TABLE IF NOT EXISTS `user_document` (
  `uid` int(20) NOT NULL,
  `docdetail` varchar(100) NOT NULL,
  `docpath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
