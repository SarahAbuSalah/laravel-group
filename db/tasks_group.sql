-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2026 at 09:33 AM
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
-- Database: `tasks_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`) VALUES
(15, 'Priscilla Lawrence', 'Ullamco sit alias m'),
(16, 'Jordan Sears', 'Aut anim doloribus f'),
(17, 'Orla Walls', 'Quasi doloribus volu'),
(18, 'Patrick Rojas', 'Dolore qui quidem vo'),
(19, 'Remedios Nunez', 'Ipsam eiusmod eos ve'),
(20, 'Remedios Nunez', 'Ipsam eiusmod eos ve'),
(21, 'Remedios Nunez', 'Ipsam eiusmod eos ve');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `passwords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passwords`) VALUES
(1, 'Demetrius Doyle', 'rerelazef@mailinator.com', 'Pa$$w0rd!'),
(2, 'Micah Nielsen', 'tabimymu@mailinator.com', 'Pa$$w0rd!'),
(3, 'Anastasia Hoover', 'sara@gmail.com', 'Pa$$w0rd!'),
(10, 'Thaddeus Rowe', 'wuho@mailinator.com', 'Pa$$w0rd!'),
(11, 'Emerson Serrano', 'gesivonufy@mailinator.com', 'Pa$$w0rd!'),
(12, 'Ayanna Terry', 'may@gmail.com', '123123'),
(13, 'Adria Henson', 'laila@gmail.com', '123123'),
(16, 'Brenda Acevedo', 'ano@mailinator.com', '123123'),
(17, 'Connor Petty', 'hubelel@mailinator.com', 'Pa$$w0rd!'),
(18, 'Samantha Curry', 'aya@mailinator.com', '123123'),
(19, 'Raphael Moore', 'moh@mailinator.com', 'Pa$$w0rd!'),
(20, 'Brenda Whitney', 'qetekeboq@mailinator.com', 'Pa$$w0rd!'),
(21, 'Haviva Hinton', 'kobijub@mailinator.com', 'Pa$$w0rd!'),
(22, 'Tatum Robles', 'gygirenit@mailinator.com', 'Pa$$w0rd!'),
(23, 'Elizabeth Moses', 'vyguxoman@mailinator.com', 'Pa$$w0rd!'),
(24, 'Randall Graves', 'jaxozas@mailinator.com', 'Pa$$w0rd!'),
(25, 'Amethyst Daugherty', 'anouar@gmail.com', '123456'),
(26, 'Zia Gutierrez', 'tuco@mailinator.com', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
