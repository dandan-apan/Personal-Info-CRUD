-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 05:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `per_info`
--

CREATE TABLE `per_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(2) NOT NULL,
  `year` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `per_info`
--

INSERT INTO `per_info` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `birthday`, `age`, `year`, `course`) VALUES
(9, 'Ivan', 'Reyes', 'Bulacan', 'Male', '2002-03-05', 22, '3rd year', 'BSIT'),
(10, 'Grace ann', 'Esporna', 'Abesamis', 'Female', '2001-12-02', 22, '3rd year', 'BSIT'),
(11, 'Neil Ivan', 'Purgatorio', 'Dela Cruz', 'Male', '2002-04-24', 22, '3rd year', 'BSIT'),
(12, 'Mary jane', 'Pajarillaga', 'Dela Cruz', 'Female', '2002-08-25', 21, '3rd year', 'BSIT'),
(13, 'Ronna Mae', 'Manalang', 'Mag-isa', 'Female', '2001-07-06', 21, '3rd year', 'BSIT'),
(14, 'Erica', 'Maralit', 'Bote', 'Female', '2002-11-11', 21, '3rd year', 'BSIT'),
(16, 'Cyron', 'Dela Cruz', 'Manuel', 'Male', '1999-10-17', 23, '4th year', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `cpword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `uname`, `email`, `pword`, `cpword`) VALUES
(8, 'jane doe', 'jane_d', 'jane@gmail.com', 'jane1', 'jane1'),
(10, 'jenalyn de leon', 'jena', 'jena@gmail.com', 'jena1', 'jena1'),
(11, 'cyron manuel', 'cyron', 'cyron@gmail.com', 'cyron1', 'cyron1'),
(12, 'ralph villanueva', 'ralph kate', 'kate@gmail.com', 'ralph1', 'ralph1'),
(15, 'daniel apan', 'dan', 'apandaniel06@gmail.com', 'dandan1', 'dandan1'),
(16, 'grace ann abesamis', 'grace ann', 'graceann@gmail.com', 'graceann123', 'graceann123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `per_info`
--
ALTER TABLE `per_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `per_info`
--
ALTER TABLE `per_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
