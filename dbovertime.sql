-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 11:27 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbovertime`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int(10) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'ICT'),
(2, 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_code` int(10) NOT NULL,
  `emp_fname` varchar(50) NOT NULL,
  `emp_lname` varchar(50) NOT NULL,
  `us` varchar(45) NOT NULL,
  `passwd` varchar(45) NOT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `nickname` varchar(45) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `position_id` int(10) NOT NULL,
  `leader_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `fk_employee_department_idx` (`dep_id`),
  KEY `fk_employee_position1_idx` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_code`, `emp_fname`, `emp_lname`, `us`, `passwd`, `tel`, `nickname`, `dep_id`, `position_id`, `leader_id`) VALUES
(1, 57001122, 'ณัฐวุฒิ', 'มาลีรัตน์', 'admin', 'admin', '091-4204-496', 'บอล', 1, 1, NULL),
(2, 57030498, 'สมหมาย', 'ทดสอบ', 'test', 'test', '', 'สม', 2, 2, NULL),
(3, 57110033, 'ทดสอบ', 'สมุติ', '1234', '1234', '', 'ทดสอบ', 2, 3, 2),
(4, 2345, 'qwe', 'qwe', 'qwe', 'qwe', '', 'qwe', 1, 3, 2),
(5, 55555, 'เมีย', 'เมีย', 'qqq', 'qqq', '', 'เมีย', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issue_overtime`
--

CREATE TABLE IF NOT EXISTS `issue_overtime` (
  `issue_id` int(10) NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `work` varchar(100) NOT NULL,
  `location_work` varchar(100) NOT NULL,
  `overtime_id` int(10) NOT NULL,
  PRIMARY KEY (`issue_id`),
  KEY `fk_issue_overtime_overtime1_idx` (`overtime_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `issue_overtime`
--

INSERT INTO `issue_overtime` (`issue_id`, `start_date`, `end_date`, `work`, `location_work`, `overtime_id`) VALUES
(1, '2016-04-25 02:00:00', '2016-04-25 03:00:00', 'qwe', 'qwe', 5),
(2, '2016-04-27 00:00:00', '2016-04-27 01:00:00', 'zxcasd', 'zxcasd', 5),
(3, '2016-04-25 00:00:00', '2016-04-25 01:00:00', 'aaaa', 'aaaa', 7),
(4, '2016-04-26 02:00:00', '2016-04-25 03:00:00', 'bbb', 'bbb', 7),
(5, '2016-05-18 02:00:00', '2016-05-18 03:00:00', 'xffg', 'hgh', 8);

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE IF NOT EXISTS `overtime` (
  `overtime_id` int(10) NOT NULL AUTO_INCREMENT,
  `monthly` date NOT NULL,
  `emp_id` int(10) NOT NULL,
  `approve_hr` int(10) DEFAULT '0' COMMENT 'ใส่ ID ของ HR',
  `appove_leader` int(10) DEFAULT '0' COMMENT 'ใส่ ID ของหัวหน้า',
  `status` int(10) DEFAULT '0' COMMENT '0 = ยังไม่ได้อนุมัติ \n1 = อนุมัติแล้ว \n2 = ยกเลิก(HR)\n3 = ยกเลิก(โดยหัวหน้า)',
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`overtime_id`),
  KEY `fk_overtime_employee1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`overtime_id`, `monthly`, `emp_id`, `approve_hr`, `appove_leader`, `status`, `comment`) VALUES
(5, '2016-04-01', 1, 0, 0, 0, NULL),
(7, '2016-04-01', 2, 0, 0, 0, NULL),
(8, '2016-05-01', 1, 0, 1, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(10) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(50) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'HR'),
(2, 'หัวหน้า'),
(3, 'พนักงาน');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_department` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_position1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `issue_overtime`
--
ALTER TABLE `issue_overtime`
  ADD CONSTRAINT `fk_issue_overtime_overtime1` FOREIGN KEY (`overtime_id`) REFERENCES `overtime` (`overtime_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `overtime`
--
ALTER TABLE `overtime`
  ADD CONSTRAINT `fk_overtime_employee1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
