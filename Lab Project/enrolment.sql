-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2013 at 01:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enrolment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnum` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `idnum`, `password`, `fname`, `lname`, `mname`, `birth`, `status`, `gender`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advisory`
--

CREATE TABLE IF NOT EXISTS `advisory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `avesection`
--

CREATE TABLE IF NOT EXISTS `avesection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(30) NOT NULL,
  `section` int(11) NOT NULL,
  `maxnumber` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `avesection`
--

INSERT INTO `avesection` (`id`, `level`, `section`, `maxnumber`) VALUES
(1, 'Grade 1', 1, 3),
(2, 'Grade 1', 2, 3),
(3, 'Grade 1', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `casher`
--

CREATE TABLE IF NOT EXISTS `casher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `work` varchar(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `casher`
--

INSERT INTO `casher` (`id`, `fname`, `lname`, `mname`, `idnumber`, `password`, `work`, `gender`, `status`, `bday`) VALUES
(1, 'pppppppp', 'casher', 'casher', 'sdsdsd', 'casher', 'casher', 'casher', 'casher', 'casher'),
(2, 'ljjkjk', 'jkjkj', 'kjkjkjkj', 'TID-VODM-PAJ', '', 'Full Time', 'Male', 'Single', 'jkjkjk');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `section` varchar(10) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `schoolyear` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offences`
--

CREATE TABLE IF NOT EXISTS `offences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `explanation` varchar(300) NOT NULL,
  `schoolyear` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prereg`
--

CREATE TABLE IF NOT EXISTS `prereg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `guardian` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `paymentmode` varchar(30) NOT NULL,
  `payable` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `m_occupation` varchar(100) NOT NULL,
  `father` varchar(30) NOT NULL,
  `f_occopation` varchar(100) NOT NULL,
  `family_income` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `age` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `ppic` varchar(100) NOT NULL,
  `schoolyear` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sectioning`
--

CREATE TABLE IF NOT EXISTS `sectioning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(30) NOT NULL,
  `numsec` int(11) NOT NULL,
  `maxnumpersec` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sectioning`
--

INSERT INTO `sectioning` (`id`, `level`, `numsec`, `maxnumpersec`) VALUES
(1, 'Grade 1', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `work` varchar(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `mname`, `idnumber`, `password`, `work`, `gender`, `status`, `bday`) VALUES
(2, 'fdfd', 'dfdf', 'dfdf', 'dfdf', '', 'Full Time', 'Male', 'Single', 'dfdfdf'),
(3, 'lklklk', 'lklklk', 'lklklklk', 'TID-IOZ-WEB', '', 'Full Time', 'Male', 'Single', 'lklklklkl');

-- --------------------------------------------------------

--
-- Table structure for table `tuetion`
--

CREATE TABLE IF NOT EXISTS `tuetion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(30) NOT NULL,
  `payable` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tuetion`
--

INSERT INTO `tuetion` (`id`, `level`, `payable`) VALUES
(1, 'Grade 1', '11000'),
(2, 'Grade 2', '2000'),
(3, 'Grade 3', '3000'),
(4, 'Grade 4', '4000'),
(5, 'Grade 5', '5000'),
(6, 'Grade 6', '6000'),
(7, '1st year', '7000'),
(8, '2nd year', '8000'),
(9, '3rd year', '9000'),
(10, '4th year', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `idnumber`, `password`, `position`) VALUES
(1, 'TID-VODM-PAJ', '', 'Casher'),
(2, 'TID-IOZ-WEB', 'lklklklk', 'teacher');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
