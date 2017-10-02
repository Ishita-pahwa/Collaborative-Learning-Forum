-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2013 at 06:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `reply_by` varchar(1000) NOT NULL,
  `reply_content` varchar(1000) NOT NULL,
  `reply_date` datetime NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `likes` int(255) NOT NULL,
  `quesno` int(100) NOT NULL,
  `unlikes` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_by`, `reply_content`, `reply_date`, `id`, `likes`, `quesno`, `unlikes`) VALUES
('ishita ', 'It is used to display output', '2013-07-28 19:11:58', 37, 0, 26, 1),
('ishita ', 'NO', '2013-07-28 19:28:45', 38, 1, 26, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
