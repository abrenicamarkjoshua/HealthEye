-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2016 at 09:20 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdoms_db`
--
CREATE DATABASE IF NOT EXISTS `cdoms_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cdoms_db`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_fname` text NOT NULL,
  `acc_mname` text NOT NULL,
  `acc_lname` text NOT NULL,
  `acc_type` text NOT NULL,
  `acc_username` varchar(255) NOT NULL,
  `acc_password` varchar(255) NOT NULL,
  `acc_health_unit` varchar(255) NOT NULL,
  `acc_email` varchar(255) NOT NULL,
  `acc_mobile` varchar(255) NOT NULL,
  `acc_status` varchar(255) NOT NULL,
  `acc_setup` varchar(255) NOT NULL,
  `acc_created` text NOT NULL,
  `acc_modified` text NOT NULL,
  `acc_login` text NOT NULL,
  `acc_logout` text NOT NULL,
  PRIMARY KEY (`acc_health_unit`),
  UNIQUE KEY `acc_id` (`acc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`acc_id`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_type`, `acc_username`, `acc_password`, `acc_health_unit`, `acc_email`, `acc_mobile`, `acc_status`, `acc_setup`, `acc_created`, `acc_modified`, `acc_login`, `acc_logout`) VALUES
(3, 'Jay Joseph', 'Bebe', 'Chua', 'Admin', 'chuaxd', '123', '', 'jayjosephchua@gmail.com', '09354056352', 'Online', '', '', '', '03-04-2016 20:04:14', '03-03-2016 12:05:17'),
(9, '', '', '', '', '', '', '3', '3', '3', 'Registered', '0', '02-15-2016 17:54:53', '', '', ''),
(10, '', '', '', '', '', '', 'hahahaXD', 'XD', 'asdas', 'Offline', '0', '02-17-2016 15:58:12', '', '02-28-2016 19:44:22', '02-28-2016 19:45:12'),
(8, '', '', '', '', '', '', 'Health Center 2', '2', '2', 'Offline', '0', '02-15-2016 17:50:10', '', '03-03-2016 12:05:24', '03-03-2016 12:17:19'),
(4, '', '', '', '', '', '', 'Health unit kuno', 'emailniate@gmail.com', '123456', 'Offline', '0', '02-15-2016 17:39:43', '', '02-28-2016 19:42:36', '02-28-2016 19:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE IF NOT EXISTS `tbl_announcements` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_by` varchar(255) NOT NULL,
  `a_date` varchar(255) NOT NULL,
  `a_body` text NOT NULL,
  `a_type` varchar(255) NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_by` (`a_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_announcements`
--

INSERT INTO `tbl_announcements` (`a_id`, `a_by`, `a_date`, `a_body`, `a_type`) VALUES
(4, 'Chua, Jay Joseph Bebe', '01-12-2016 15:00:23', 'asd', 'Danger'),
(5, 'Chua, Jay Joseph Bebe', '01-12-2016 15:26:32', 'dasd', 'Alert'),
(6, 'Chua, Jay Joseph Bebe', '01-12-2016 15:30:53', 'd', 'Information'),
(7, 'Chua, Jay Joseph Bebe', '01-12-2016 15:33:47', 'f', 'Alert'),
(8, 'Chua, Jay Joseph Bebe', '01-12-2016 15:35:07', 'g', 'Information'),
(9, 'Chua, Jay Joseph Bebe', '01-21-2016 11:02:13', 'aa', 'Alert'),
(10, 'Chua, Jay Joseph Bebe', '02-17-2016 14:58:52', 'HI XD', 'Information');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diseases`
--

CREATE TABLE IF NOT EXISTS `tbl_diseases` (
  `disease_id` int(50) NOT NULL,
  `disease_category` text NOT NULL,
  `disease_name` text NOT NULL,
  `disease_description` text NOT NULL,
  PRIMARY KEY (`disease_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diseases`
--

INSERT INTO `tbl_diseases` (`disease_id`, `disease_category`, `disease_name`, `disease_description`) VALUES
(123, 'categ 1', 'sample name', 'sample descript'),
(456, 'Infections with a predominantly sexual mode of transmission', 'adasd', 'qoweoiqiewoioq');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_health_units`
--

CREATE TABLE IF NOT EXISTS `tbl_health_units` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(255) NOT NULL,
  `h_address` text NOT NULL,
  `h_representative` text NOT NULL,
  `h_website` varchar(255) NOT NULL,
  `h_mobile` text NOT NULL,
  `h_email` text NOT NULL,
  PRIMARY KEY (`h_name`),
  UNIQUE KEY `h_id` (`h_id`),
  UNIQUE KEY `h_name` (`h_name`),
  KEY `h_id_2` (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_health_units`
--

INSERT INTO `tbl_health_units` (`h_id`, `h_name`, `h_address`, `h_representative`, `h_website`, `h_mobile`, `h_email`) VALUES
(1, 'hahahaXD', 'ZASD', '', '3333', '33', '333');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapview`
--

CREATE TABLE IF NOT EXISTS `tbl_mapview` (
  `map_id` int(11) NOT NULL AUTO_INCREMENT,
  `map_health_unit` text NOT NULL,
  `map_health_rep` text NOT NULL,
  `map_disease` text NOT NULL,
  `map_disease_cases` text NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE IF NOT EXISTS `tbl_reports` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_by` varchar(255) NOT NULL,
  `r_health_unit` longtext NOT NULL,
  `r_disease` longtext NOT NULL,
  `r_age_range` varchar(255) NOT NULL,
  `r_date` varchar(255) NOT NULL,
  `r_time` text NOT NULL,
  `r_female` varchar(255) NOT NULL,
  `r_male` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_reports`
--

INSERT INTO `tbl_reports` (`r_id`, `r_by`, `r_health_unit`, `r_disease`, `r_age_range`, `r_date`, `r_time`, `r_female`, `r_male`) VALUES
(17, '3', '', '', '', '03-04-2016', '23:37:08', '', ''),
(18, '3', '', '', '', '03-04-2016', '23:39:38', '', ''),
(19, '3', '', '123', 'Under 1', '03-04-2016', '23:54:59', '1', '2'),
(20, '3', '', '456', '65-69', '03-04-2016', '23:55:59', 's', 'asd'),
(21, '3', '', '123', 'Under 1', '03-04-2016', '23:59:53', '1', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
