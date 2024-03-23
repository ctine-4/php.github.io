-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 12:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmPassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `confirmPassword`) VALUES
(1, '', '', 'fdfdf@gmail.com', 'asa', '123', ''),
(2, '', '', 'fdfdf@gmail.com', 'asa', '123', ''),
(3, 'dd', 'ss', 'fdfdf@gmail.com', 'asa', '123', ''),
(4, 'dd', 'ss', 'fdfdf@gmail.com', 'asa', '123', '123'),
(5, 'kfhk', 'Pepito', 'shantalfeathpepito@gmail.com', 'admin', '123', '123'),
(6, 'kfhk', 'Pepito', 'shantalfeathpepitoq@gmail.com', 'admin1', '@Shantal123', '@Shantal123'),
(7, 'kfhk', 'Pepito', 'shantalfeathpepitoq2@gmail.com', 'admin12', '@123Shantal', '@123Shantal'),
(8, 'kfhk', 'Pepito', 'shantalfeathpepitoq21@gmail.com', 'admin122', '@123Shantal', '@123Shantal'),
(9, 'Shan', 'Pepito', 'shantalpepito28@gmail.com', 'admin0', '@123Shan', '@123Shan'),
(10, 'asdas', 'sdas', 'asda@gmail.com', 'wewes', '@123Shantal', '@123Shantal'),
(11, 'asADSA', 'DASD', 'asda1@gmail.com', 'Cristine', '@123Shantal', '@123Shantal'),
(12, 'Cristine', 'Lafable', 'cristine@gmail.com', 'Cristine2', '@123Cristine', '@123Cristine'),
(13, 'Cristine', 'Lafable', 'cristinesd@gmail.com', 'Cristine Mae', '@Cristine123', '@Cristine123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
