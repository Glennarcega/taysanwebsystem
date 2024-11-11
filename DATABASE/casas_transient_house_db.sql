-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 07:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casas_transient_house_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `attraction_id` int(100) NOT NULL,
  `attraction_name` varchar(200) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `transportation` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`attraction_id`, `attraction_name`, `descr`, `location`, `transportation`, `photo`) VALUES
(1, 'san lorenzo taysan', 'famous churc', 'taysan batangas', 'lobo jeep', 'san lorenzo.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE `cuisine` (
  `cuisine_id` int(200) NOT NULL,
  `cuisine_name` varchar(200) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine_name`, `descr`, `location`, `photo`) VALUES
(5, 'lome', 'msandmnadmjd', '', 'download (2).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `name`, `address`, `contactno`, `email`) VALUES
(258, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(259, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(260, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(261, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(262, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(263, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(264, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(265, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(266, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(267, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(268, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(269, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(270, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(271, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(272, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(273, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(274, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(275, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(276, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(277, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(278, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(279, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(280, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(281, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(282, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(283, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(284, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(285, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(286, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(287, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(288, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(289, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(290, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(291, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(292, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(293, '<br />\r\n<b>Warning</b>:  Trying to access array of', '<br />\r\n<b>Warning</b>:  Trying to access array of', '<br />\r\n<b>Wa', '<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsTays'),
(294, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(295, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(296, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(297, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(298, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(299, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(300, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(301, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(302, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(303, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(304, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(305, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(306, 'glenda', 'eqsdqe', '09952846057', 'glennarcega177@gmail.com'),
(307, 'glaiza mae arcega', 'Tabangao Ambulong batangas City', '091234738764', 'glaizamaeplataarcega@gmail.com'),
(308, 'glaiza', 'ambulong batangas city', '09951659446', 'glaizamaeplataarcega@gmail.com'),
(309, 'glaiza', 'ambulong batangas city', '09951659446', 'glaizamaeplataarcega@gmail.com'),
(310, 'glaiza', 'ambulong batangas city', '09951659446', 'glaizamaeplataarcega@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resort`
--

CREATE TABLE `resort` (
  `resort_id` int(100) NOT NULL,
  `resort_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `transportation` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resort`
--

INSERT INTO `resort` (`resort_id`, `resort_name`, `price`, `descr`, `location`, `transportation`, `photo`) VALUES
(3, 'villa isable', '5000', 'full package', 'Bayan ng Taysan\r\nBatangas', 'bahala kana', 'resort.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_number` varchar(100) NOT NULL,
  `price` varchar(11) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `transportation` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hotel_name`, `room_type`, `room_number`, `price`, `descr`, `location`, `transportation`, `photo`) VALUES
(33, 'macrolodge', 'Moon Room', '2', '100', 'effce', 'batangas city', 'roooute jeep', 'download.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `room_number` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `id`, `guest_id`, `room_id`, `hotel_name`, `room_number`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(228, '32', 258, 40, 'glenn hotell', 200, 'Cancel', 4, '2024-11-13', '00:00:00', '0000-00-00', '00:00:00', 'Php. 4000.'),
(229, '34', 307, 38, 'yello', 10, 'Reserved', 2, '2024-11-13', '00:00:00', '0000-00-00', '00:00:00', 'Php. 2000.'),
(230, '35', 308, 33, 'macrolodge', 2, 'Check Out', 5, '2024-11-12', '00:00:00', '0000-00-00', '01:12:38', 'Php. 500.0');

-- --------------------------------------------------------

--
-- Table structure for table `transactionresort`
--

CREATE TABLE `transactionresort` (
  `transaction_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `resort_id` int(11) NOT NULL,
  `resort_name` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(3) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactionresort`
--

INSERT INTO `transactionresort` (`transaction_id`, `id`, `guest_id`, `resort_id`, `resort_name`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(22, 32, 258, 3, 'villa isable', 'Check In', 2, '2024-11-12', '00:00:00', '0000-00-00', '00:00:00', 'Php. 10000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `contactno`, `username`, `email`, `password`) VALUES
(32, 'glenda', 'eqsdqe', '09952846057', 'glenn', 'glennarcega177@gmail.com', '$2y$10$vBuMk99um3IMdI0XluqyhuL4sIGcshTE3G/X1JFDMkCgWWe17gLSm'),
(33, 'galiza', 'Tabangao Ambulong batangas City', '0901327323', 'galiza', 'glennemersona@gmail.com', '$2y$10$5T3RziUoVbXkzUJ0FmhHlOQzAZwCo1OYfsk3GDF45S72cH.5cn91i'),
(35, 'glaiza', 'ambulong batangas city', '09951659446', 'glza', 'glaizamaeplataarcega@gmail.com', '$2y$10$p2YfstrYiX9zrBs7.YGmVOYBZGQUIVqW6fKT129sblLS6zgvCmGNi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`attraction_id`);

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `resort`
--
ALTER TABLE `resort`
  ADD PRIMARY KEY (`resort_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transactionresort`
--
ALTER TABLE `transactionresort`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `attraction_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `cuisine_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `resort`
--
ALTER TABLE `resort`
  MODIFY `resort_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `transactionresort`
--
ALTER TABLE `transactionresort`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
