-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2013 at 04:45 PM
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
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `likes` int(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`likes`, `id`) VALUES
(16, 1),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_name` varchar(100) NOT NULL,
  `cat_id` int(255) NOT NULL AUTO_INCREMENT,
  `cat_description` mediumtext NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_name`, `cat_id`, `cat_description`) VALUES
('C', 1, 'Enter your doubts in C'),
('C++', 2, 'Enter your doubts in C++'),
('JAVA', 3, 'Enter your doubts in JAVA'),
('tyr', 4, 'yru'),
('hrth', 5, 'hyrtuy'),
('dff', 6, 'fff'),
('dcr', 7, 'dcc\r\nfff'),
('', 8, ''),
('sdgs', 9, 'FDBF'),
('', 10, ''),
('xd', 11, 'dc'),
('abc', 12, 'asdd'),
('html', 13, 'ejkqd'),
('javaa', 14, 'afedf');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `reply_by` varchar(1000) NOT NULL,
  `reply_content` varchar(1000) NOT NULL,
  `reply_date` date NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `likes` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_by`, `reply_content`, `reply_date`, `id`, `likes`) VALUES
('lashu', 'sfd', '2013-07-15', 1, 13),
('taddal ', 'ablshd', '2013-07-16', 2, 8),
('fallad ', 'jadsfhbkl', '2013-07-16', 3, 2),
('bhangru ', 'bvsd', '2013-07-16', 4, 5),
('Teju ', 'tejas is a good boy.', '2013-07-16', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `topic_ques`
--

CREATE TABLE IF NOT EXISTS `topic_ques` (
  `quesno` int(11) NOT NULL AUTO_INCREMENT,
  `quesname` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`quesno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `topic_ques`
--

INSERT INTO `topic_ques` (`quesno`, `quesname`, `cat_id`) VALUES
(1, '', 0),
(2, 'rge', 3),
(3, 'dsfsd', 0),
(4, 'fbvfdb', 0),
(5, 'dfgbvfg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
