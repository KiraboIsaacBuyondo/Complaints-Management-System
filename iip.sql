-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2022 at 08:18 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iip`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar`
--

DROP TABLE IF EXISTS `ar`;
CREATE TABLE IF NOT EXISTS `ar` (
  `AR_Id` int(11) NOT NULL AUTO_INCREMENT,
  `AR_Name` varchar(20) DEFAULT NULL,
  `caseTracker` int(10) NOT NULL,
  PRIMARY KEY (`AR_Id`),
  KEY `caseTracker` (`caseTracker`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ar`
--

INSERT INTO `ar` (`AR_Id`, `AR_Name`, `caseTracker`) VALUES
(5, NULL, 5),
(6, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `caseTracker` int(10) NOT NULL AUTO_INCREMENT,
  `stdName` varchar(50) DEFAULT NULL,
  `regNo` varchar(50) DEFAULT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `webmail` varchar(50) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `complaintStatus` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`caseTracker`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`caseTracker`, `stdName`, `regNo`, `courseName`, `webmail`, `complaint`, `complaintStatus`) VALUES
(1, 'Student 1', '20/U/2083/EVE', 'IIP', 'student1@email.com', '\r\n  Confirmatory test on complaint form\r\n          ', 'Accepted'),
(2, 'Student 1', '20/U/2083/EVE', 'IIP', 'student1@email.com', '\r\n  Confirmatory test on complaint form\r\n          ', 'Rejected by HoD'),
(3, 'Student 1', 'STD/1/001', 'SAD', 'student1@email.com', 'Testing SAD course now', 'Accepted'),
(4, 'Student 1', 'STD/1/001', 'SDP', 'student1@email.com', 'Testing SDP course now', 'Accepted'),
(5, 'Student 2', 'STD/1/002', 'SAD', 'student2@email.com', 'Testing student 2 complaint on SAD        ', 'submitted'),
(6, 'Student 2', 'STD/1/002', 'SDP', 'student2@email.com', 'Testing student 2 complaint on SDP   ', 'submitted');

-- --------------------------------------------------------

--
-- Table structure for table `complaint track`
--

DROP TABLE IF EXISTS `complaint track`;
CREATE TABLE IF NOT EXISTS `complaint track` (
  `dept id` int(11) DEFAULT NULL,
  `RegNo` int(11) NOT NULL,
  UNIQUE KEY `foreign key` (`dept id`,`RegNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course unit`
--

DROP TABLE IF EXISTS `course unit`;
CREATE TABLE IF NOT EXISTS `course unit` (
  `course code` int(11) NOT NULL,
  `course name` varchar(20) NOT NULL,
  PRIMARY KEY (`course code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `dept id` int(11) NOT NULL AUTO_INCREMENT,
  `dept name` varchar(20) DEFAULT NULL,
  `HodID` int(20) DEFAULT NULL,
  PRIMARY KEY (`dept id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept id`, `dept name`, `HodID`) VALUES
(1, 'Department 1', 1),
(2, 'Department 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `final mark`
--

DROP TABLE IF EXISTS `final mark`;
CREATE TABLE IF NOT EXISTS `final mark` (
  `coursework` int(11) NOT NULL,
  `final work` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

DROP TABLE IF EXISTS `hod`;
CREATE TABLE IF NOT EXISTS `hod` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `HODName` varchar(30) DEFAULT NULL,
  `webmail` varchar(30) DEFAULT NULL,
  `caseTracker` int(20) DEFAULT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `caseTracker` (`caseTracker`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`no`, `HODName`, `webmail`, `caseTracker`) VALUES
(1, 'HoD1', 'HoD1@email.com', 1),
(2, 'HoD2', 'HoD2@email.com', 2),
(3, 'HoD3', 'HoD3@email.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `lecturerID` varchar(10) DEFAULT NULL,
  `lecturerName` varchar(50) DEFAULT NULL,
  `webmail` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(20) DEFAULT NULL,
  `CW` int(10) DEFAULT NULL,
  `examMark` int(10) DEFAULT NULL,
  `finalMark` int(10) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Id`, `course`, `CW`, `examMark`, `finalMark`) VALUES
(1, NULL, 90, 80, NULL),
(2, NULL, 90, 80, NULL),
(3, NULL, 70, 100, NULL),
(4, NULL, 90, 90, NULL),
(5, NULL, 90, 80, 84),
(6, NULL, 45, 96, 76),
(7, NULL, 90, 89, 89),
(8, NULL, 90, 89, 89),
(9, NULL, 90, 89, 89),
(10, NULL, 90, 89, 89),
(11, NULL, 100, 100, 100),
(12, NULL, 100, 100, 100),
(13, NULL, 100, 100, 100),
(14, NULL, 100, 100, 100),
(15, NULL, 100, 100, 100),
(16, NULL, 90, 100, 96);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `RegNo` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(30) DEFAULT NULL,
  `webmail` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`RegNo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RegNo`, `studentName`, `webmail`) VALUES
(1, 'Student 1', 'student1@email.com'),
(2, 'Student 2', 'student2@email.com'),
(3, 'Student 3', 'student3@email.com'),
(4, 'Student 4', 'student4@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `webmail` varchar(50) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userId`, `Username`, `webmail`, `userType`, `Pass`) VALUES
(1, 'Student 1', 'student1@email.com', 'student', 'student1'),
(2, 'Student 2', 'student2@email.com', 'student', 'student2'),
(3, 'Lecturer 1', 'lecturer1@email.com', 'lecturer', 'lecturer1'),
(4, 'Lecturer 2', 'lecturer2@email.com', 'lecturer', 'lecturer2'),
(5, 'HoD 1', 'HoD1@email.com', 'HoD', 'HoD1'),
(6, 'HoD 2', 'HoD2@email.com', 'HoD', 'HoD2'),
(7, 'AR', 'AR@email.com', 'AR', 'AR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
