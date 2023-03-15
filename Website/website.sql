-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 05:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_dralion`
--

CREATE TABLE `application_dralion` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_dralion`
--

INSERT INTO `application_dralion` (`id`, `name`, `address`, `phone`, `email`, `cv`) VALUES
(1, 'muna', '07', 2147483647, 'mail.munna50@gmail.com', '63f47339754414.76359672.pdf'),
(2, 'rahul', '07', 2147483647, 'mail.munna50@gmail.com', '63f482e3ecec04.90178756.pdf'),
(3, 'rahul', '07', 2147483647, 'mail.munna50@gmail.com', '63f4831d48eda3.05430457.pdf'),
(4, 'mohan', 'kad;jlajd', 2147483647, 'mail.munna50@gmail.com', ''),
(5, 'muna', '07', 2147483647, 'mail.munna50@gmail.com', '63f48848e0e084.17023650.pdf'),
(6, 'dralion', 'bhutan', 86773, 'dralion@gmai.com', '63f8e984cdc494.13038747.pdf'),
(7, 'dipesh', 'siraha', 898675, 'mail.munna50@gmail.com', ''),
(8, 'samsung', 'banglore', 987656, 'yahoo2@gmail.com', 'Communicative English - Notes - Unit 3.pdf'),
(9, 'Munna Yadav', 'kalaiya', 2147483647, 'yadavmunna.5210@gmail.com', ''),
(10, 'aakash gupta', 'kormangla', 2147483647, 'gupta@abshiek.com', ''),
(11, 'aakash gupta', 'kormangla', 2147483647, 'gupta@abshiek.com', ''),
(12, 'sushant', 'bhairahwa', 2147483647, 'hello@gmail.com', ''),
(13, 'dell', 'us', 84838584, 'dell@service.com', ''),
(14, 'dralion', 'bhutan', 999999, '', 'Resume-Muna-Yadav.pdf'),
(15, '', '', 0, '', 'module-2.pdf'),
(16, 'dralion', 'bhutan ', 9808332, 'ajd@gmail.com', 'CEMENT BPP.pdf'),
(17, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Phone` int(250) NOT NULL,
  `E-mail` varchar(250) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Name`, `Address`, `Phone`, `E-mail`, `Message`) VALUES
('rohan', 'chaudhry', 2147483647, 'rohan@gmail.com', 'hello world'),
('Munna Yadav', 'kathmandu', 2147483647, 'mail.munna50@gmail.com', 'want to meet and discuss a project'),
('Munna Yadav', 'kathmandu', 2147483647, 'mail.munna50@gmail.com', 'want to meet and discuss a project'),
('Munna Yadav', 'kathmandu', 2147483647, 'mail.munna50@gmail.com', 'want to meet and discuss a project'),
('', '', 0, '', ''),
('munna', 'banglore', 983762, 'mail.munna50@gmail.com', 'meeting');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `username`, `password`) VALUES
(1, 'user', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_dralion`
--
ALTER TABLE `application_dralion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_dralion`
--
ALTER TABLE `application_dralion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
