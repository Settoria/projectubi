-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ubiquitec`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `email`, `comment`) VALUES
('', '', '', 'Hello world!'),
('John', 'Snow', '', 'Hello World!x2'),
('John', 'Snow', 'j.snow@email.com', 'Uwu'),
('Gwen', 'Smith', 'gwen05@email.com', 'Hi ');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(12) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `fname`, `sname`, `email`, `password`) VALUES
('admin', 'adnim', 'admin', 'admin', 'admin'),
('admin', 'admin', 'admin', 'admin', 'admin'),
('', 'admin1', 'admin1', 'admin1', 'admin1'),
('', 'admin1', 'admin1', 'admin1', 'admin1'),
('', 'admin1', 'admin1', 'admin1', 'admin1'),
('', 'admin', 'admin2', 'admin2', 'admin2'),
('', 'admin', 'admin2', 'admin2', 'admin2'),
('admin3', 'admin', 'admin3', 'admin3', 'admin3'),
('admin3', 'admin', 'admin3', 'admin3', 'admin3'),
('admin4', 'asd', 'asd', 'admin4', 'admin4'),
('Thalsa', 'Ela', 'Cie', '30129328@blackpool.ac.uk', '$2y$10$PrS0SQR7g7wNO13wS8zsJOHsreMOl/jSiCDoXqBsukb7Mn.7JqRkm'),
('twhite', 'Tom', 'White', 'twhite@email.com', '$2y$10$OxXJ7'),
('White', 'twhite', 'Tom', 'twhite@email.com', '$2y$10$hiWt8'),
('White', 'twhite', 'Tom', 'twhite@email.com', '$2y$10$hiWt8'),
('Smith', 'ksmith', 'Ken', 'ksmith@email.com', '$2y$10$batLl'),
('Smith', 'ksmith', 'Ken', 'ksmith@email.com', '$2y$10$batLl'),
('ksmith', 'Ken', 'Smith', 'ksmith@email.com', '$2y$10$rhfwW'),
('ksmith', 'Ken', 'Smith', 'ksmith@email.com', '$2y$10$rhfwW'),
('hpotter', 'Harry', 'Potter', 'youreawizardharry@email.com', '$2y$10$4VTTe'),
('hpotter', 'Harry', 'Potter', 'youreawizardharry@email.com', '$2y$10$4VTTe'),
('Otwits', 'Oliver', 'Twist', 'oliver@email.com', '$2y$10$z6aer'),
('Otwits', 'Oliver', 'Twist', 'oliver@email.com', '$2y$10$Ro4Nr'),
('Otwits', 'Oliver', 'Twist', 'oliver@email.com', '$2y$10$z4R.e'),
('adminnew', 'Oliver', 'White', 'oliver@email.com', '$2y$10$/kttGeSdu8n4naL7r9D.2uGGjqwZtaKp.phjI6Bz.rCPPmxuY384m'),
('ads', 'das', 'sada', 'asfs@dasd.pdas', '$2y$10$UtGDWdTPeiKCO3o6kDTZyOgRfqjGh0.uMwDiuDq00THksWvv6ovwG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
