-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 07:44 PM
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
-- Database: `mlsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` int(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `contact_number`, `message`) VALUES
(1, 'Prajakta', 'Tipugade', 'prajaktatipugade82@gmail.com', 2147483647, 'hii'),
(2, 'first', 'kmfk', 'prajaktatipugade82@gmail.com', 8596997, 'hii'),
(3, 'first', 'kmfk', 'prajaktatipugade82@gmail.com', 8596997, 'hello'),
(4, 'first', 'kmfk', 'prajaktatipugade82@gmail.com', 8596997, 'hii'),
(5, 'Prajakta', 'Tipugade', 'prajaktatipugade82@gmail.com', 2147483647, 'kjlllo');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `info` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `info`, `image`) VALUES
(1, 'Tech Talk on Git & Github', '2024-01-24', 'MLSA DYPCET Chapter held a Tech Talk on Git & GitHub, featuring guest speaker Mr. Sambhaji Gade, aimed at second and third-year students, with 40 a􀆩endees.', 'Tech Talk .jpg'),
(2, 'Introducing Linkdin to final year Architecture students', '2024-03-20', 'Guide students through creating their LinkedIn profiles.Stress the importance of using keywords related to architecture to optimize their profiles for search.', 'Introducing Linkdin.jpg'),
(3, 'Liberal Learning Course', '2024-02-03', 'Design lectures, readings, and assignments that prompt students to explore technologies', 'IMG-20240302-WA0148.jpg'),
(5, 'General Commi􀆩ee interview', '2024-01-24', 'MLSA DYPCET Chapter conducted General Commi􀆩ee interviews to select members and raise awareness about its objec􀆟ves, targe􀆟ng second and third-year students, led by Prof. A.S.Yadav.', 'Picture1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `image`, `post`, `linkedin`, `insta`, `twitter`, `name`) VALUES
(7, 'ILINKED IN.jpg', 'Mlsa coordinator', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'Prajakta'),
(8, 'ILINKED IN.jpg', 'Lead MLSA DYPCET', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'Aditya Martahe'),
(9, 'ILINKED IN.jpg', 'Co Lead MLSA DYPCET', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'Arihant Chivate'),
(10, 'ILINKED IN.jpg', 'Co Lead MLSA DYPCET', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'Arihant Chivate'),
(12, 'WhatsApp Image 2024-03-30 at 18.26.43_29d9e334.jpg', 'Lead MLSA DYPCET', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'https://www.linkedin.com/in/prajakta-tipugade-a33966235/', 'Aditya Martahe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
