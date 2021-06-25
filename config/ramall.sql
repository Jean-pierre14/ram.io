-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 10:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramall`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEmpl` ()  BEGIN
         SELECT * FROM employees_tb WHERE oper = 'OPERATIONNEL' ORDER BY id DESC ;
        END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEmpl2` ()  BEGIN
         SELECT * FROM employees_tb ORDER BY id DESC LIMIT 6;
        END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `children_tb`
--

CREATE TABLE `children_tb` (
  `employee_id` int(64) NOT NULL,
  `name` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_tb`
--

CREATE TABLE `deleted_tb` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `oper` varchar(100) NOT NULL,
  `woman_name` varchar(255) NOT NULL,
  `children` int(11) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees_tb`
--

CREATE TABLE `employees_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `oper` varchar(100) NOT NULL,
  `woman_name` varchar(255) NOT NULL,
  `children` int(11) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_tb`
--

INSERT INTO `employees_tb` (`id`, `username`, `fullname`, `email`, `gender`, `status`, `oper`, `woman_name`, `children`, `salary`, `created_at`, `password`) VALUES
(1, 'Grace', 'Grace bisimwa', 'chiruzabisimwa@gmail.com', 'Female', 'Fiance', 'OPERATIONNEL', 'Diane', 2, 1200, '2021-06-25 09:18:31', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Kaylia', 'Kaylia ndeze', 'kaylia@gmail.com', 'Female', 'Single', 'OPERATIONNEL', '', 0, 1200, '2021-06-25 09:44:10', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'adolf', 'adolf bisimwa', 'adolf@gmail.com', 'Male', 'Single', 'RETIRED', '', 0, 1200, '2021-06-25 09:44:39', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Peter', 'Peter KAHUMUZA', 'peter@gmail.com', 'Male', 'Single', 'OPERATIONNEL', '', 0, 1200, '2021-06-25 09:45:08', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Marcelin', 'Marcelin HOD', 'marcelin@ulk.rw', 'Male', 'Married', 'OPERATIONNEL', 'wife of the HOD', 2, 1200, '2021-06-25 09:53:54', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'Eric', 'Eric It', 'Eric@ulk.rw', 'Male', 'Single', 'RETIRED', '', 0, 1200, '2021-06-25 09:54:25', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'Dorcas', 'Dorcas Walimba', 'dodo@gmail.com', 'Female', 'Fiance', 'OPERATIONNEL', '', 0, 1200, '2021-06-25 10:04:45', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Dorcas', 'Dorcas Walimba', 'dodo@gmail.com', 'Female', 'Fiance', 'OPERATIONNEL', '', 0, 1200, '2021-06-25 10:05:55', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'Elie', 'Elie safari', 'elie@congo.cd', 'Male', 'Single', 'OPERATIONNEL', '', 0, 1200, '2021-06-25 10:06:29', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'blessing', 'Blessing Rwanda', 'blessing@gmail.com', 'Female', 'Married', 'OPERATIONNEL', 'Gloria', 2, 1200, '2021-06-25 10:07:21', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'blessing', 'Blessing Rwanda', 'blessing@gmail.com', 'Female', 'Married', 'OPERATIONNEL', 'Gloria', 2, 1200, '2021-06-25 10:10:22', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'blessing', 'Blessing Rwanda', 'blessing@gmail.com', 'Female', 'Married', 'OPERATIONNEL', 'Gloria', 2, 1200, '2021-06-25 10:10:54', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children_tb`
--
ALTER TABLE `children_tb`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employees_tb`
--
ALTER TABLE `employees_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees_tb`
--
ALTER TABLE `employees_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `children_tb`
--
ALTER TABLE `children_tb`
  ADD CONSTRAINT `children_tb_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
