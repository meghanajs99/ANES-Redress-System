-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2019 at 06:40 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `complaintdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `Id` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Name`, `Password`) VALUES
('anil00', 'XYZ', 'anil00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `userid`, `description`) VALUES
(11, '316126510167', 'Lost my fossil watch.');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` varchar(15) NOT NULL,
  `department` text NOT NULL,
  `roomno` text NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `userid`, `department`, `roomno`, `type`, `description`, `status`) VALUES
(1, '316126510145', 'CSE', '175', 'PLumbing', 'Tap broken', 'Still Progress'),
(103, '316126510167', 'ece', ' myroom', 'carpentery', 'fff\r\n  ', 'complaint registered'),
(3, '316126510167', 'EEE', '165', 'Electrical', 'Tubelights not woring', 'Solved'),
(4, '316126510145', 'IT', '175', 'Systems', 'System no.13 monitoer not working', 'Still Progress'),
(5, '316126510167', 'chem', ' 175', 'electrical', 'fan not working.\r\n', 'Solved'),
(6, '316126510167', 'cse', ' 175', 'plumbing', 'tap leakage\r\n  ', 'Still Progress'),
(106, '316126510145', 'ece', ' 175', 'systems', 'Describe your complaint here\r\n  ', 'complaint registered'),
(105, '316126510167', 'eee', ' 155', 'electrical', 'h', 'complaint registered'),
(107, '316126510167', 'ece', ' 175', 'electrical', 'bulb broken\r\n  ', 'Still Progress'),
(10, '316126510145', 'ece', '45 ', 'plumbing', 'water taps not working\r\n  ', 'Solved'),
(11, '316126510167', 'cse', '201', 'miscellaneous', 'Lost my fossil watch.', 'complaint registered'),
(12, '316126510167', 'eee', 'my room', 'electrical', 'bulb broken', 'complaint registered'),
(101, '', 'ece', ' myroom', 'plumbing', 'Describe your complaint here\r\n  ', 'complaint registered'),
(98, '316126510145', 'cse', 'm', 'plumbing', 'mlko', 'complaint registered'),
(13, 'anilc02', 'cse', 'c201', 'electrical', 'tublelight is not working', 'complaint registered'),
(89, '316126510168', 'eee', ' 180', 'plumbing', 'tapnot working', 'complaint registered'),
(91, '316126510145', 'cse', ' 180', 'plumbing', 'tap not working', 'complaint registered'),
(92, '316126510145', 'cse', ' 175', 'plumbing', 'Dfg', 'complaint registered');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Id` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Name`, `Password`) VALUES
('anilc01', 'Joshua', 'anilc01'),
('anilc02', 'Preethi', 'anilc02');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `description`) VALUES
('316126510167', 'My feedback'),
('316126510145', 'okk with that.'),
('316126510145', 'given');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Id` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Password`) VALUES
('316126510145', 'K.Sharmila', 'ksharmila'),
('316126510167', 'P.Hari ', 'phari'),
('316126510157', 'J Meghana', 'jmeghana'),
('316126510155', 'M Sai Krishna', 'saikrishna'),
('316126510162', 'N Tarun raj', 'tarunraj'),
('316126510168', 'D Prakhya', 'dprakhya'),
('316126510172', 'R Venkatesh', 'rvenkatesh');
