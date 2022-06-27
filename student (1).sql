-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2022 at 06:03 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `emerg_cont` bigint(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `course_yr` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `first_name` (`first_name`),
  KEY `last_name` (`last_name`),
  KEY `mobile_number` (`mobile_number`),
  KEY `email` (`gender`),
  KEY `address` (`email`),
  KEY `father_name` (`address`),
  KEY `mother_name` (`father_name`),
  KEY `emerg_cont` (`mother_name`),
  KEY `course_yr` (`emerg_cont`),
  KEY `birth_date` (`course`),
  KEY `course` (`course_yr`),
  KEY `time` (`birthdate`),
  KEY `student_id` (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `first_name`, `last_name`, `mobile_number`, `gender`, `email`, `address`, `father_name`, `mother_name`, `emerg_cont`, `course`, `course_yr`, `birthdate`) VALUES
(10, 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, '1', '1', '1'),
(9, 200440225, 'Mohamed', 'Aish', 9554908503, 'Male', 'poloiaish@gmail.com', 'CDO', 'Ahmed', 'Mimi', 9174419386, 'BSCS', '3', '1999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
