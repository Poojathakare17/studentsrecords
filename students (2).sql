-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 01:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `year_joined` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `dob`, `email`, `class`, `guardian_name`, `phone_number`, `date_added`, `date_updated`, `year_joined`) VALUES
(44, 'Pooja ', 'Patil', '1985-07-12', 'poojatusharpatil43@gmail.com', 1, 'Xyz', '589802098', '2020-02-29 00:14:34', '2020-03-03 12:00:18', 2020),
(48, 'Dragon', ' Warrior', '1996-05-22', 'dragon.warrior@gmail.com', 9, '', '276903450', '2020-03-03 15:41:24', '2020-03-03 11:59:46', 2003),
(49, 'Anakin', 'Skywalker', '1995-06-19', 'anakin.skywalker@gmail.com', 7, ' Jedi', '0587412365', '2020-03-03 15:54:00', '2020-03-03 12:09:16', 2001),
(50, 'John', 'louis', '1989-02-01', 'john.louis@gmail.com', 10, ' ', '2147483647', '2020-03-03 15:59:29', '2020-03-03 11:59:29', 1993),
(51, 'Bruce', 'Wayne', '1994-05-06', 'bruce.wayne@gmail.com', 5, '', '042361589', '2020-03-03 16:02:38', '2020-03-03 12:09:05', 1998),
(52, 'Carlos', 'Doe', '2000-06-04', 'carlos.doe@gmail.com', 6, ' Robert', '0587412369', '2020-03-03 16:05:43', '2020-03-03 12:08:55', 2006),
(53, 'Joseph', 'Nolan', '2001-12-12', 'joseph.nolan@gmail.com', 7, '', '0501174856', '2020-03-03 16:08:27', '2020-03-03 12:08:43', 2005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
