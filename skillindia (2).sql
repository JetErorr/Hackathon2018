-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 03:56 AM
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

--
-- Dumping data for table `scomplaint`
--

INSERT INTO `scomplaint` (`uid`, `complaint_detail`, `complaint_date`) VALUES
(0, 'Bash Halo Have', '2018-03-25'),
(8, 'sadasd sasda ', '2018-03-25'),
(8, 'sdasdad as asdas dasdasd', '2018-03-25'),
(8, 'sadasda as ashasdasdka as kjhkjashkjdakhas fsf dssjhskjhkjshf dhasfjdhashfkjsdf dhfkjdhasfj h daskjhfkjshfk skjhfkjdshkjdas kjdsfdjashfkj ksjdh fdkjsxcf jdshfkjdsh  kjsdhfkjhs kjsh kjs hjd s dskjhfdkjsh dshfdkjsh d dkjshfdkjs  d fsdkj k dskjhsjh dhfdkjs hdfdskjh s dkdjshfkj hkjsdhfkj s kjshhjds jsd fsd kjsh kj kjdkjssdskj kjsd dihsf kjdskfdsj sadasda as ashasdasdka as kjhkjashkjdakhas fsf dssjhskjhkjshf dhasfjdhashfkjsdf dhfkjdhasfj h daskjhfkjshfk skjhfkjdshkjdas kjdsfdjashfkj ksjdh fdkjsxcf jd', '2018-03-25'),
(0, 'Bash Halo Have', '2018-03-25'),
(8, 'sadasd sasda ', '2018-03-25'),
(8, 'sdasdad as asdas dasdasd', '2018-03-25'),
(8, 'sadasda as ashasdasdka as kjhkjashkjdakhas fsf dssjhskjhkjshf dhasfjdhashfkjsdf dhfkjdhasfj h daskjhfkjshfk skjhfkjdshkjdas kjdsfdjashfkj ksjdh fdkjsxcf jdshfkjdsh  kjsdhfkjhs kjsh kjs hjd s dskjhfdkjsh dshfdkjsh d dkjshfdkjs  d fsdkj k dskjhsjh dhfdkjs hdfdskjh s dkdjshfkj hkjsdhfkj s kjshhjds jsd fsd kjsh kj kjdkjssdskj kjsd dihsf kjdskfdsj sadasda as ashasdasdka as kjhkjashkjdakhas fsf dssjhskjhkjshf dhasfjdhashfkjsdf dhfkjdhasfj h daskjhfkjshfk skjhfkjdshkjdas kjdsfdjashfkj ksjdh fdkjsxcf jd', '2018-03-25');

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

--
-- Dumping data for table `suser`
--

INSERT INTO `suser` (`uid`, `fname`, `mname`, `lname`, `email`, `contactno`, `bdate`, `password`, `user_profile`, `state`, `district`, `address`) VALUES
(1, '', '', '', 'ds@ga.com', 123456789, '2018-03-23', 'ds', 'user_images/slider-34.jpg', '', '', ''),
(7, '', '', '', 'ds@ga.cos', 78945, '2018-03-08', 'sa', 'user_images/slider-1.jpg', '', '', ''),
(8, '', '', '', 'chetanmajithiya@gmial.com', 1234567890, '1998-03-28', 'chetan123', 'user_images/8-passphoto_03242018143450.jpg', '', '', ''),
(9, '', '', '', 'chetan@gmail.com', 456, '2018-03-23', 'chetan', '', '', '', ''),
(18, 'asda', 'asdasd', 'asdas', 'sda@gmail.com', 97264456, '2018-03-06', 'sdasasd', '', 'gujrat', 'rajkot', 'raiya circle'),
(20, 'Chetan', 'R', 'Majithiya', 'chetanmajithiya28@gmail.com', 769855555555, '1998-04-28', 'chetan123', 'user_documents/20-samsung_smart_tv_03252018182206.png', 'Gujrat', 'Rajkot', 'NULL');

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
