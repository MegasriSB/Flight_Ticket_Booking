-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2023 at 06:02 AM
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
-- Database: `airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `flight_number` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `airline` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `seatnum` int NOT NULL,
  `source` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `destination` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `flight_date` date NOT NULL,
  `flight_time` time NOT NULL,
  `fare` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `email`, `age`, `gender`, `flight_number`, `airline`, `seatnum`, `source`, `destination`, `flight_date`, `flight_time`, `fare`) VALUES
('Megasri', 'megasri1702@gmail.com', 21, 'Female', 'F004', 'Airline D', 60, 'Mumbai', 'Chennai', '2023-07-07', '10:45:00', 5000),
('Mega', 'megasri1702@gmail.com', 20, 'Female', 'F002', 'Airline B', 60, 'Chennai', 'Madurai', '2023-07-06', '12:35:00', 3000),
('Sri', 'megasri1702@gmail.com', 22, 'Female', 'F004', 'Airline D', 59, 'Mumbai', 'Chennai', '2023-07-07', '10:45:00', 5000),
('Sri', 'megasri1702@gmail.com', 22, 'Female', 'F004', 'Airline D', 58, 'Mumbai', 'Chennai', '2023-07-07', '10:45:00', 5000),
('Sri', 'megasri1702@gmail.com', 22, 'Female', 'F004', 'Airline D', 57, 'Mumbai', 'Chennai', '2023-07-07', '10:45:00', 5000),
('Divya', 'divya@gmail.com', 22, 'Female', 'F006', 'Airline C', 60, 'Mumbai', 'Delhi', '2023-07-14', '18:00:00', 5000),
('Divya', 'divya@gmail.com', 22, 'Female', 'F003', 'Airline C', 60, 'Delhi', 'Madurai', '2023-07-09', '20:30:00', 7000),
('Varoon', 'megasri1702@gmail.com', 23, 'Male', 'F004', 'Airline D', 56, 'Mumbai', 'Chennai', '2023-07-07', '10:45:00', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `flight_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `airline` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `flight_date` date NOT NULL,
  `flight_time` time NOT NULL,
  `source` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `destination` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `duration` int NOT NULL,
  `capacity` int NOT NULL,
  `available_seats` int NOT NULL,
  `fare` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_number`, `airline`, `flight_date`, `flight_time`, `source`, `destination`, `duration`, `capacity`, `available_seats`, `fare`) VALUES
('F002', 'Airline B', '2023-07-06', '12:35:00', 'Chennai', 'Madurai', 80, 60, 59, 3000),
('F003', 'Airline C', '2023-07-07', '10:45:00', 'Bengaluru', 'Delhi', 170, 60, 60, 6000),
('F004', 'Airline D', '2023-07-07', '10:45:00', 'Mumbai', 'Chennai', 120, 60, 55, 5000),
('F003', 'Airline C', '2023-07-09', '20:30:00', 'Delhi', 'Madurai', 200, 60, 59, 7000),
('F006', 'Airline C', '2023-07-14', '18:00:00', 'Mumbai', 'Delhi', 130, 60, 59, 5000),
('F007', 'Airline E', '2023-07-15', '14:20:00', 'Bengaluru', 'Mumbai', 120, 60, 60, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

DROP TABLE IF EXISTS `reg_user`;
CREATE TABLE IF NOT EXISTS `reg_user` (
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`name`, `email`, `phone`, `password`) VALUES
('Megasri S B', 'megasri1702@gmail.com', '7418888306', '1234567'),
('Mega', 'mega@gmail.com', '9865892544', '7894561'),
('Divya', 'divya@gmail.com', '6379423693', '4561230');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
