-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 09:52 PM
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
-- Database: `db_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `suv_cars`
--

CREATE TABLE `suv_cars` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `year_of_release` int(11) DEFAULT NULL,
  `announced` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suv_cars`
--

INSERT INTO `suv_cars` (`id`, `name`, `category`, `year_of_release`, `announced`) VALUES
(1, 'Toyota', 'SUV', 2021, 1),
(2, 'Honda', 'SUV', 2020, 1),
(3, 'Ford', 'SUV', 2022, 1),
(4, 'Chevrolet', 'SUV', 2021, 1),
(5, 'Nissan', 'SUV', 2023, 0),
(6, 'Hyundai', 'SUV', 2020, 0),
(7, 'Kia', 'SUV', 2021, 0),
(8, 'Mazda', 'SUV', 2019, 0),
(9, 'Jeep', 'SUV', 2022, 0),
(10, 'Volkswagen', 'SUV', 2023, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suv_cars`
--
ALTER TABLE `suv_cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suv_cars`
--
ALTER TABLE `suv_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
