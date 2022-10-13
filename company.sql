-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 03:32 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `year` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`id`, `title`, `director`, `year`) VALUES
(1, 'The Expendables', 'Sylvester Stallone', 2010),
(2, 'Taken 3', 'Luc Besson', 2014),
(3, 'Turning Red', 'Domee Shi', 2022),
(4, 'Encanto', 'Jared Bush', 2021),
(5, 'Dilwale Dulhania Le Jayenge', 'Aditya Chopra', 1995),
(6, 'The Godfather', 'Francis Ford, Coppola', 1972),
(7, 'Your Name.', 'Makoto Shinkai', 2016),
(8, 'Sunes Summer 2', 'Stephan ', 1996),
(9, 'När mörkret faller', 'Anders Nilsson', 2006),
(10, 'Lille Fridolf blir morfar', 'Per Gunvall', 1957),
(12, 'THE ZERO', 'JB', 2019),
(13, 'Hungama9', 'Aditya Chopra', 2016),
(14, 'Hungama2', 'Aditya Chopra', 2016),
(15, 'Hello', 'Jiban', 1987);

-- --------------------------------------------------------

--
-- Table structure for table `typ`
--

CREATE TABLE `typ` (
  `id` int UNSIGNED NOT NULL,
  `category` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typ`
--

INSERT INTO `typ` (`id`, `category`) VALUES
(1, 'Thriller'),
(2, 'Comedy'),
(3, 'Animated'),
(4, 'Animated'),
(5, 'Romantic'),
(6, 'Thriller'),
(7, 'Animated'),
(9, 'Swedish'),
(10, 'Swedish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typ`
--
ALTER TABLE `typ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `typ`
--
ALTER TABLE `typ`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
