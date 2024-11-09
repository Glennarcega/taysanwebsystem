-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 11:34 AM
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
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`attraction_id`, `attraction_name`, `descr`, `photo`) VALUES
(1, 'san lorenzo taysan', 'taysan', 'san lorenzo.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`, `email`) VALUES
(212, 'glenn', 'p', 'arcega', 'gwfjcejsbfc', '09039278', 'glennarcega177@gmail.com'),
(213, 'glenn', 'p', 'arcega', 'gwfjcejsbfc', '09039278', 'glennemersona@gmail.com'),
(214, 'glenn', 'p', 'arcega', 'gwfjcejsbfc', '0903927832', 'glennemersona@gmail.com'),
(215, 'glw', 'w', ' ch', 'wbcw', '0909103', 'glennarcega177@gmail.com'),
(216, 'dw', 'dwqwddc', 'ecs', 'csej', '09089292', 'glennarcega177@gmail.com'),
(217, 'glenn', '3wdffe', 'fecff', 'evewe', '0902398219', 'glennarcega177@gmail.com'),
(218, 'glaixa', 'plata', 'arcega', 'ubewhbfjwe', '090213882', 'glennemersona@gmail.com'),
(219, 'galixa', 'plata', 'arcega', 'fefcwfc', '090839823', 'glennemersona@gmail.com'),
(220, 'galixa', 'plata', 'arcega', 'fefcwfc', '090839823', 'glennemersona@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resort`
--

CREATE TABLE `resort` (
  `resort_id` int(100) NOT NULL,
  `resort_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resort`
--

INSERT INTO `resort` (`resort_id`, `resort_name`, `price`, `descr`, `photo`) VALUES
(2, 'villa gabo 1', '10', 'free', 'resort.jfif');

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
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hotel_name`, `room_type`, `room_number`, `price`, `descr`, `photo`) VALUES
(33, 'macrolodge', 'Moon Room', '2', '100', 'effce', 'download.jfif'),
(35, 'yello', 'Galaxy Room', '4', '10011', 'ako', 'download.jfif'),
(36, 'macrolodge', 'Galaxy Room', '0', '1000', 'free wifi', '4.jpg'),
(38, 'yello', 'Pluto Room', '10', '1000', 'free meal', 'download.jfif'),
(39, 'macrolodge', 'Moon Room', '1', '1000', 'qdeq', 'download.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
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

INSERT INTO `transaction` (`transaction_id`, `id`, `guest_id`, `room_id`, `room_no`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(160, '29', 213, 33, 1, 'Check Out', 2, '2024-11-08', '21:46:56', '1970-01-01', '22:09:24', '200'),
(161, '0', 214, 33, 3, 'Check Out', 2, '2024-11-08', '22:06:12', '1970-01-01', '22:44:17', '200'),
(162, '0', 215, 37, 2, 'Check In', 2, '2024-11-09', '22:02:50', '1970-01-01', '00:00:00', '2000'),
(163, '0', 216, 33, 0, 'Pending', 3, '2024-11-09', '00:00:00', '0000-00-00', '00:00:00', ''),
(164, '0', 217, 33, 0, 'Pending', 2, '2024-11-09', '00:00:00', '0000-00-00', '00:00:00', ''),
(165, '29', 218, 38, 0, 'Pending', 2, '2024-11-16', '00:00:00', '0000-00-00', '00:00:00', ''),
(166, '29', 219, 38, 0, 'Pending', 3, '2024-11-14', '00:00:00', '0000-00-00', '00:00:00', ''),
(167, '29', 219, 38, 0, 'Pending', 2, '2024-11-14', '00:00:00', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(28, 'glenn', 'glennarcega177@gmail.com', '3c784bff199ef62ecc2f3a988f395c62'),
(29, 'wato', 'glennemersona@gmail.com', '$2y$10$2H8.FB0LchTNuxiXIreTF.gRpcA/DVRiyvpfeHeoOdrbyn7n8wYGa');

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
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `resort`
--
ALTER TABLE `resort`
  MODIFY `resort_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
