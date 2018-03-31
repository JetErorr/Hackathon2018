-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 03:54 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `user_document`
--

CREATE TABLE IF NOT EXISTS `user_document` (
  `uid` int(20) NOT NULL,
  `docdetail` varchar(100) NOT NULL,
  `docpath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_document`
--

INSERT INTO `user_document` (`uid`, `docdetail`, `docpath`) VALUES
(0, '', 'docpath'),
(0, 'asdasdasd', 'docpath'),
(0, 'adasdasd', 'user_documents/20-4Pm03N_03252018183018.png'),
(0, 'sdasdasd ', 'user_documents/20-CodePen-CSS-Table-Layout_03252018183900.png'),
(0, '10th Result', 'user_documents/20-4Pm03N_03252018184457.png'),
(0, 'summar Traing', 'user_documents/20-images_03252018184603.jpg'),
(0, 'my PHOTO', 'user_documents/20-passphoto_03252018184643.jpg'),
(0, 'sadasd', 'user_documents/20-5-Pixel_DR_Offer2_728x90_03252018184801.jpg'),
(0, 'sdasd', 'user_documents/20-CodePen-CSS-Table-Layout_03252018184830.png'),
(0, 'asdasdasd', 'user_documents/20-makwana_jiyaspeed_test_03252018184945.png'),
(0, 'sadasd', 'user_documents/20-slide-background-blue_03252018185125.jpg'),
(20, '10th Result', 'user_documents/20-main-qimg-1a0c582aa61b0a2b7fb42bc55e86885c-c_03252018190928.jpg'),
(20, 'College', 'user_documents/20-certificate_03252018191022.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
