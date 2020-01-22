-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2020 at 03:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `college_city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `college_name`, `college_city`) VALUES
('a', '$2y$10$aLaNptqlHjd9ajCxhptUZ.4JF56hLrMDKM285zfeqKYAMVnBTpV.e', 'q', 'Choose a city'),
('abc', '$2y$10$3kBoY9/gEgPAfqhwBc7ty.LJu.eJjLpV6oAK9RZ9M8.kSWGydrYG6', 'mi', 'Choose a city'),
('indira', '$2y$10$u8M9X1FEq/yCxdIxyhuLrO2gNMxbDmvriZp8VvoS8eB0yDrKJdbEq', 'mitwpu', 'Pune'),
('khushboo', '$2y$10$S8W.vOO1fYUhdv5L8q1DGuvmOcVqFXuDI9NFmj1ZHg.Gbd4sMW/ry', 'mi', 'Choose a city'),
('khushboo1', '$2y$10$DnVsyn8bmSVumzmrzdOx1uX0/0EfKSyLF5EQC5og4eIV/xG7Bs8IK', 'mit', 'Mumbai'),
('kshitija', '$2y$10$OQqIjuyf/Z8LQhDeNM1RjesYMcU/uluq3vyVHk.yPTQ/pb.5sE4lq', 'mitwpu', 'Pune'),
('KSHITIJA123', '$2y$10$f62fVNTc/K8sNO0Ccqv8buBhvImFXF4qlqHMlckb61qC9jpd9AnuG', 'MITWPU', 'Pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
