-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2025 at 10:24 AM
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
-- Database: `licencedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `BR_Number` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(250) NOT NULL,
  `otp` int NOT NULL,
  `otp_verified` int NOT NULL,
  `role` varchar(10) NOT NULL,
  `failed_attempts` int NOT NULL,
  `lockout_time` int NOT NULL,
  PRIMARY KEY (`BR_Number`)
) ENGINE=MyISAM AUTO_INCREMENT=679 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`BR_Number`, `email`, `password`, `otp`, `otp_verified`, `role`, `failed_attempts`, `lockout_time`) VALUES
(456, 'sdpanditha123@gmail.com', '$2y$10$Hc/Os3cw8OF9pr96tRSb0e7scsnSypm1xPAVADuUR4CxmkvKuwhqi', 899197, 1, 'user', 0, 0),
(678, 'hansaniwickramasinghe2@gmail.com', '$2y$10$oB9gbHIFvVP5jEwPZxSjeu2dz0BrGUSVXGseKoHgAEHd5i0gIGCwq', 941892, 1, 'user', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
