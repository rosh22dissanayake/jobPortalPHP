-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2021 at 10:34 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'ucakasun99@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'Kasun', 'Dissanayake', 'Male', '1988-05-29', '9423979339', 'Nashik', 'UoVT.jpg', '2018-04-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

DROP TABLE IF EXISTS `manage_website`;
CREATE TABLE IF NOT EXISTS `manage_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'Institute Management System', 'Student Register', 'images.jpg', 'Nikhil Global Academy', 'INR', 'â‚¹', 'loginimage.png', '', 'background-form-login-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendence`
--

DROP TABLE IF EXISTS `tbl_attendence`;
CREATE TABLE IF NOT EXISTS `tbl_attendence` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `stud_id` int(12) NOT NULL,
  `studentname` varchar(180) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `teachername` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

DROP TABLE IF EXISTS `tbl_class`;
CREATE TABLE IF NOT EXISTS `tbl_class` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `class_code` varchar(60) NOT NULL,
  `classname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_code` (`class_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_config`
--

DROP TABLE IF EXISTS `tbl_email_config`;
CREATE TABLE IF NOT EXISTS `tbl_email_config` (
  `e_id` int(21) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_config`
--

INSERT INTO `tbl_email_config` (`e_id`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, '<student register> ', 'mail.gmail.com', 587, 'ucakasun99@gmail.com', 'abc@123', 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

DROP TABLE IF EXISTS `tbl_group`;
CREATE TABLE IF NOT EXISTS `tbl_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(4, 'user1', 'user1'),
(5, 'user2', 'user2'),
(6, 'user3', 'class nd sub adding'),
(7, 'user4', 'user permissin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

DROP TABLE IF EXISTS `tbl_permission`;
CREATE TABLE IF NOT EXISTS `tbl_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `operation` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`id`, `name`, `display_name`, `operation`) VALUES
(1, 'manage_student', 'Manage Student', 'manage_student'),
(2, 'add_student', 'Add Student', 'add_student'),
(3, 'edit_student', 'Edit Student', 'edit_student'),
(4, 'delete_student', 'Delete Student', 'delete_student'),
(5, 'manage_teacher', 'Manage Teacher', 'manage_teacher'),
(6, 'add_teacher', 'Add Teacher', 'add_teacher'),
(7, 'edit_teacher', 'Edit Teacher', 'edit_teacher'),
(8, 'delete_teacher', 'Delete Teacher', 'delete_teacher'),
(9, 'manage_subject', 'Manage Subject', 'manage_subject'),
(10, 'add_subject', 'Add Subject', 'add_subject'),
(11, 'edit_subject', 'Edit Subject', 'edit_subject'),
(12, 'delete_subject', 'Delete Subject', 'delete_subject'),
(13, 'manage_class', 'Manage Class', 'manage_class'),
(14, 'add_class', 'Add Class', 'add_class'),
(15, 'edit_class', 'Edit Class', 'edit_class'),
(16, 'delete_class', 'Delete Class', 'delete_class'),
(17, 'manage_attendence', 'Manage Attendence', 'manage_attendence'),
(18, 'add_attendence', 'Add Attendence', 'add_attendence'),
(20, 'delete_attendence', 'Delete Attendence', 'delete_attendence'),
(21, 'manage_user', 'Manage User', 'manage_user'),
(22, 'add_user', 'Add User', 'add_user'),
(23, 'edit_user', 'Edit User', 'edit_user'),
(24, 'delete_user', 'Delete User', 'delete_user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_role`
--

DROP TABLE IF EXISTS `tbl_permission_role`;
CREATE TABLE IF NOT EXISTS `tbl_permission_role` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `permission_id` int(30) NOT NULL,
  `role_id` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_role`
--

INSERT INTO `tbl_permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(27, 14, 6),
(28, 21, 7),
(29, 22, 7),
(30, 23, 7),
(31, 24, 7),
(32, 1, 5),
(33, 2, 5),
(34, 10, 5),
(35, 14, 5),
(36, 1, 4),
(37, 5, 4),
(38, 6, 4),
(39, 9, 4),
(40, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_config`
--

DROP TABLE IF EXISTS `tbl_sms_config`;
CREATE TABLE IF NOT EXISTS `tbl_sms_config` (
  `smsid` int(20) NOT NULL AUTO_INCREMENT,
  `senderid` int(20) NOT NULL,
  `sms_username` varchar(30) NOT NULL,
  `sms_password` varchar(20) NOT NULL,
  `auth_key` varchar(80) NOT NULL,
  PRIMARY KEY (`smsid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms_config`
--

INSERT INTO `tbl_sms_config` (`smsid`, `senderid`, `sms_username`, `sms_password`, `auth_key`) VALUES
(1, 101, 'username', 'password', 'Srilanka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(50) NOT NULL,
  `sfname` varchar(30) NOT NULL,
  `slname` varchar(30) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `sgender` varchar(30) NOT NULL,
  `sdob` date NOT NULL,
  `scontact` int(50) NOT NULL,
  `fcontact` int(15) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud_id` (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

DROP TABLE IF EXISTS `tbl_subject`;
CREATE TABLE IF NOT EXISTS `tbl_subject` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `subjectid` varchar(60) NOT NULL,
  `subjectname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subjectid` (`subjectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

DROP TABLE IF EXISTS `tbl_teacher`;
CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `tfname` varchar(50) NOT NULL,
  `tlname` varchar(50) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tgender` varchar(50) NOT NULL,
  `tdob` date NOT NULL,
  `tcontact` int(50) NOT NULL,
  `taddress` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
