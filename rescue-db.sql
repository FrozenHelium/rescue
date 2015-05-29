-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 12:40 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rescue-db`
--
CREATE DATABASE IF NOT EXISTS `rescue-db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rescue-db`;

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

DROP TABLE IF EXISTS `officials`;
CREATE TABLE IF NOT EXISTS `officials` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) NOT NULL,
  `organization` varchar(63) NOT NULL,
  `designation` varchar(63) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact` varchar(63) NOT NULL,
  `userid` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `name`, `organization`, `designation`, `location`, `contact`, `userid`) VALUES
(1, 'Ankit', 'test', 'test', 'test', 'test', 1039),
(2, 'abc', 'abc', 'abc', 'abc', 'abc', 1040);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `location` varchar(255) NOT NULL,
  `category` varchar(63) NOT NULL,
  `description` varchar(2047) NOT NULL,
  `name` varchar(63) DEFAULT NULL,
  `contact` varchar(63) DEFAULT NULL,
  `anonymous` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(4) NOT NULL DEFAULT '0',
  `urgent` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`location`, `category`, `description`, `name`, `contact`, `anonymous`, `id`, `status`, `urgent`, `time`) VALUES
('abc', 'Human Trafficking', 'abc', '', '', 0, 1, 0, 1, '2015-05-29 10:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1041 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `usertype`) VALUES
(1036, 'fhx', 'a926675594694265471fd7772f27d1dd9595e74198257e148d385446be8fd2636b9ac5a003186925049dc05dd8c8476eee07ff1883252d901d47c613ca75412a', 'd628880a8dd6de068fb6e63d82af1521e208727b3db1b065fc3c050cebbbded5c91da6e10c2637e84859d10ae5bb26ba2d8f0e78e80737e13d27edc1e5652134', 2),
(1039, 'ankit', '601f49f3ec8aa2ca2abbe9c97006d80c49517d54f55fbdee0f01b046da226a2dfaffa94a2efa88b6abdb44fa08b9a6a78138e76a680a652b885f44b8a8dd0bbd', 'a6c6a7a8f025fe6c2126e87e508ddae5f605a20d3cdcac250f9465d231a0a244ba6bee603bfbabf9699896f5e550ab3d070baf096131e5599dadd0c6bd67576f', 1),
(1040, 'abc', '685c0bfc081bf033f7f33e73b16d99c542221db0eb8c2db69770dfc56641d1e1bfb13d86bd8dffb006230688c004befae81e883eec7209a55cbae6db60077967', 'c8a2b3706a5e57c6e1ef4a5286cf79d94ef709c8c01113d99589d84fc873ada9607f150c74632aacf60f40a8d3475b126e82b5e98c0e90e2d0de535a0f38b07f', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
