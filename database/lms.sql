-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 05:54 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_post`
--

CREATE TABLE `com_post` (
  `postid` int(11) NOT NULL,
  `tittle` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `subjectid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_post`
--

INSERT INTO `com_post` (`postid`, `tittle`, `description`, `link`, `path`, `subjectid`) VALUES
(4, 'C Language', 'Follow up the Youtube Channel for more', '', 'uploads/2.jpg', 2),
(8, 'Intro', 'Follow the guides from Learn Online', '', 'uploads/sample.txt', 1),
(9, 'Lec. 01', 'Create web page', 'Gead', 'uploads/02_ScreenShot.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `com_subject`
--

CREATE TABLE `com_subject` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_subject`
--

INSERT INTO `com_subject` (`subjectid`, `subjectname`) VALUES
(1, 'INTRO'),
(2, 'Programing with C'),
(3, 'Maths'),
(4, 'DBMS');

-- --------------------------------------------------------

--
-- Table structure for table `lectuer`
--

CREATE TABLE `lectuer` (
  `tid` int(11) NOT NULL,
  `tname` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `taddress` varchar(50) DEFAULT NULL,
  `temail` varchar(50) DEFAULT NULL,
  `tpassword` varchar(10) DEFAULT NULL,
  `ttel` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectuer`
--

INSERT INTO `lectuer` (`tid`, `tname`, `role`, `taddress`, `temail`, `tpassword`, `ttel`) VALUES
(1, 'Kapila Siriwardane', 'teacher', 'colombo to', 'kapila@gmail.com', 'kapila', '701234567'),
(2, 'Asela Ranasinghe', 'teacher', 'kaluthara', 'asela@gmail.com', 'asela', '771234567');

-- --------------------------------------------------------

--
-- Table structure for table `m_post`
--

CREATE TABLE `m_post` (
  `postid` int(11) NOT NULL,
  `tittle` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `subjectid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_post`
--

INSERT INTO `m_post` (`postid`, `tittle`, `description`, `link`, `path`, `subjectid`) VALUES
(1, 'sub title', 'Limit Introduction ', '', 'uploads/Details.txt', '1');

-- --------------------------------------------------------

--
-- Table structure for table `m_subject`
--

CREATE TABLE `m_subject` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_subject`
--

INSERT INTO `m_subject` (`subjectid`, `subjectname`) VALUES
(1, 'Biss'),
(2, 'Management'),
(3, 'Economics'),
(4, 'Information System');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stdno` int(11) NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` varchar(4) NOT NULL,
  `dob` date NOT NULL,
  `address1` varchar(15) DEFAULT NULL,
  `address2` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(6) DEFAULT NULL,
  `facid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdno`, `fname`, `lname`, `sex`, `dob`, `address1`, `address2`, `city`, `role`, `email`, `password`, `facid`) VALUES
(1, 'Sachintha', 'Kumara', 'male', '1995-03-18', 'sasadsx', 'sxsaxsa', 'galle', 'student', 'abcd@gmail.com', 'abcd', 0),
(2, 'Rajitha', 'Disannayaka', 'male', '0000-00-00', 'New Town', 'sf', 'Kegalle', 'student', '1234@gmail.com', '1234', 0),
(3, 'Ishanka', 'tharindu', 'male', '0000-00-00', 'dsg', 'dff', 'fs', 'student', 'isankats@gmail.com', '1234', 0),
(4, 'Samadhi', 'Wicramasighe', 'F', '0000-00-00', 'ad', 'ad', 'ad', 'student', 'abcd@gmail.com', '1230', 0),
(5, 'Sineth', 'k', 'm', '2017-08-15', 'fgys', 'gujs', 'bjbsf', 'jbsf', 'xyz@gmail.com', 'xyz', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_post`
--
ALTER TABLE `com_post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `com_subject`
--
ALTER TABLE `com_subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `lectuer`
--
ALTER TABLE `lectuer`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `m_post`
--
ALTER TABLE `m_post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `m_subject`
--
ALTER TABLE `m_subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_post`
--
ALTER TABLE `com_post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `com_subject`
--
ALTER TABLE `com_subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lectuer`
--
ALTER TABLE `lectuer`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_post`
--
ALTER TABLE `m_post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_subject`
--
ALTER TABLE `m_subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stdno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
