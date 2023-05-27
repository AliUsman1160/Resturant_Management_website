-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('1', '1'),
('ahmad', '1'),
('ali', '123'),
('aliusman62867@gmail.com', 'll'),
('aliusmanoffical3@gmail.com', 'aa'),
('l', 'll'),
('shabazz', 'kk'),
('umair@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL,
  `person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fname`, `lname`, `cnic`, `date`, `time`, `person`) VALUES
(1, 'ali', 'usman', '33100', '2023-01-11', '19:00', 2),
(2, 'usman', 'ali', '33100-9635903', '2023-01-13', '23:25', 2),
(20, 'hh', 'ali', '33100-9635903', '2023-02-10', '21:04', 9),
(22, 'umair', 'zaherr', '33100-9635903', '2023-01-11', '14:21', 2),
(23, 'umair', 'zaherr', '33100-9635903', '2023-01-11', '14:21', 2),
(24, 'usman', 'ali', '33100-9635903', '2023-01-24', '15:38', 9);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`fname`, `lname`, `cnic`, `email`, `status`, `id`, `phone`) VALUES
('Muhammad', 'yy', '33100-9635903', 'aliusmanoffical3@gmail.com', 'Admin', 7, '030000'),
('umair', 'zaherr', '33100-9635903', 'umair@gmail.com', 'Admin', 8, '030000'),
('abdullah', 'xx', '33100-9635903', 'abdullah', 'Admin', 11, '90000'),
('ahmad', 'jameel', '33100-9635903', 'ahmad', 'Admin', 13, '030000'),
('xyx', 'xyz', '33100-9635903', 'shabazz', 'Admin', 14, '030000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
