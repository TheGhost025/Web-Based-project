-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2023 at 12:31 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationformdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationaccounts`
--

DROP TABLE IF EXISTS `registrationaccounts`;
CREATE TABLE IF NOT EXISTS `registrationaccounts` (
  `full_name` varchar(500) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `confirm_password` varchar(500) NOT NULL,
  `user_image` varchar(5000) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrationaccounts`
--

INSERT INTO `registrationaccounts` (`full_name`, `user_name`, `birthdate`, `phone`, `address`, `password`, `confirm_password`, `user_image`, `email`) VALUES
('Rana Osama Hassan', 'rana', '2000-07-07', 1078945611, 'cairo', 'rana123#', 'rana123#', 'pexels-cottonbro-4835429.jpg', 'rana@gmail.com'),
('Mazen Ahmed', 'mazen', '2002-05-05', 1239877532, 'giza', 'mazen987#', 'mazen987#', 'pexels-josh-sorenson-1586144.jpg', 'mazen@gmail.com'),
('Ahmed Abdelhameed', 'ahmed', '2002-07-07', 1598745675, 'giza', 'ahmed753#', 'ahmed753#', 'pexels-josh-sorenson-1586144.jpg', 'ahmed@gmail.com'),
('Rawan Helmy', 'rawan', '2001-08-08', 1114523697, 'giza', 'rawan963#', 'rawan963#', 'hkbhjnlm.,.png', 'rawan@gmail.com'),
('Nour Ayman', 'nour', '2000-09-09', 1048762394, 'cairo', 'nour258#', 'nour258#', 'pexels-cottonbro-4835429.jpg', 'nour@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
