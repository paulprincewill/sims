-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 06:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `picture` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `matric_number` varchar(25) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`picture`, `first_name`, `last_name`, `middle_name`, `matric_number`, `department`, `gender`, `date_of_birth`) VALUES
('', '', '', NULL, '', '', '', ''),
('', 'Onyeka', '', NULL, '', '', '', ''),
('', 'Onyeka', '', NULL, '', '', '', ''),
('', 'Onyeka', '', NULL, '', '', '', ''),
('', '', '', NULL, '', '', '', ''),
('', '', '', NULL, '', '', '', ''),
('', 'hello', 'hi', NULL, '', 'me', '', '2019-08-20'),
('', 'hello', 'hi', NULL, 'you', 'me', '', '2019-08-20'),
('', 'Paul', 'P', NULL, '1234', 'eeed', 'male', '2019-08-20'),
('', 'You', 'bla bla bla', NULL, '123', 'none', 'male', '2019-08-20'),
('', 'Abigial', '', NULL, '', '', 'male', ''),
('', 'Abigial', '', NULL, '', '', 'male', ''),
('', 'Abigial', 'bla bla bla', NULL, '123', 'hello', 'male', '2019-08-20'),
('', 'Abigial', 'bla bla bla', NULL, '123', 'hello', 'male', '2019-08-20'),
('', 'Abigial', 'bla bla bla', NULL, '123', 'hello', 'male', '2019-08-20'),
('', 'Onyeka', 'Paul', NULL, '', '', 'male', ''),
('', 'You', 'me', NULL, '', '', 'male', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
