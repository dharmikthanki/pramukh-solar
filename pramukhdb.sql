-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 05:25 AM
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
-- Database: `pramukhdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kw`
--

CREATE TABLE `kw` (
  `id` int(11) NOT NULL,
  `kw` text NOT NULL,
  `tr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kw`
--

INSERT INTO `kw` (`id`, `kw`, `tr_date`) VALUES
(6, 'kw2', '2024-05-21 14:01:05'),
(7, 'kw2', '2024-05-21 14:02:42'),
(8, 'kw2', '2024-05-21 14:04:09'),
(9, 'kw3', '2024-05-21 14:04:24'),
(10, 'kw20', '2024-05-23 17:22:00'),
(12, '100', '2024-05-23 17:47:16'),
(13, '100', '2024-05-23 18:21:11'),
(14, '200', '2024-05-23 18:21:14'),
(15, '10', '2024-05-23 18:21:18'),
(16, '100', '2024-05-23 18:21:23'),
(17, 'KW125', '2024-05-24 13:48:13'),
(18, 'kw11000', '2024-05-24 20:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `pramukhtbl`
--

CREATE TABLE `pramukhtbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` varchar(11) NOT NULL,
  `kw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pramukhtbl`
--

INSERT INTO `pramukhtbl` (`id`, `name`, `mobile`, `email`, `address`, `city`, `pincode`, `kw`) VALUES
(33, 'Darshan bhogayata', '9898752121', 'db@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(34, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'kw2'),
(35, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(36, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(37, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(38, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(39, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(40, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(41, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(42, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(43, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'select KW'),
(44, 'Meet', '9825387631', 'meet@gmail.com', 'LDRP', 'rajkot', '123456', 'kw2'),
(45, 'John', 'DOe', 'john@gmail.com', 'sample address', 'porbandar', '12456', ''),
(46, '', '', '', '', '', '', '0'),
(47, '', '', '', '', '', '', '0'),
(48, '', '', '', '', '', '', '0'),
(49, '', '', '', '', '', '', '17'),
(50, '', '', '', '', '', '', '16'),
(51, '', '', '', '', '', '', 'KW125'),
(52, '', '', '', '', '', '', 'kw11000'),
(53, '', '', '', '', '', '', 'kw2'),
(54, '', '', '', '', 'select City', '', 'kw2'),
(56, 'Test', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'porbandar', '360575', 'kw11000'),
(57, 'Dharmik Yogeshbhai Thanki', '09825387631', 'dharmik.y.thanki@gmail.com', 'Panchwati Society ,Porbandar', 'SURENDRANAGAR', '360575', 'KW125');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'admin', 'admin@example.com', '12345', '2024-05-21 12:40:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kw`
--
ALTER TABLE `kw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pramukhtbl`
--
ALTER TABLE `pramukhtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kw`
--
ALTER TABLE `kw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pramukhtbl`
--
ALTER TABLE `pramukhtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
