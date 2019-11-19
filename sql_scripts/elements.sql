-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 03:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `name` varchar(30) NOT NULL,
  `contents` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`name`, `contents`) VALUES
('title_text', '<span style=\"color: #3D3D3D; font-size: 1.3em;\">[</span>Untitled<span style=\"color: #3D3D3D; font-size: 1.3em;\">]</span> Pizza Online'),
('footer_text', '[Untitled] Pizza Co.<br>357 Alton St. | Brooklyn, NY <br>(718) 634-5789 <br><a href=\"#\">Instagram</a> | <a href=\"#\">Facebook</a> <br>MO & TU: 11:30 TO 10 PM <br>WE & TH: 11:30 AM TO 10 PM <br>FR & SA: 11:30 AM TO 11 PM <br>SU: 12 PM TO 10 PM<br>'),
('icon_file_path', 'img/untitled_logo.png'),
('company_name', '[Untitled] Pizza Online');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
