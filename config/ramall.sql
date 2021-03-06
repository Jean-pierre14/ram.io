-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 09:48 PM
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
-- Table structure for table `attendance_tb`
--

CREATE TABLE `attendance_tb` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `DateTo` text NOT NULL,
  `statistique` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_tb`
--

INSERT INTO `attendance_tb` (`id`, `employee_id`, `DateTo`, `statistique`, `created_at`) VALUES
(1, 1, '2021-07-14', 0, '2021-07-14 15:46:03'),
(2, 5, '2021-07-14', 0, '2021-07-14 15:51:12'),
(3, 7, '2021-07-14', 1, '2021-07-14 15:51:30'),
(4, 4, '2021-07-14', 1, '2021-07-14 15:52:37'),
(5, 1, '2021-07-14', 1, '2021-07-14 15:54:07'),
(6, 2, '2021-07-14', 0, '2021-07-14 15:54:09'),
(7, 4, '2021-07-14', 1, '2021-07-14 15:54:11'),
(8, 5, '2021-07-14', 0, '2021-07-14 15:54:15'),
(9, 7, '2021-07-14', 0, '2021-07-14 15:54:17'),
(10, 8, '2021-07-14', 0, '2021-07-14 15:54:18'),
(11, 9, '2021-07-14', 1, '2021-07-14 15:54:21'),
(12, 10, '2021-07-14', 1, '2021-07-14 15:54:23'),
(13, 12, '2021-07-14', 1, '2021-07-14 15:54:26'),
(14, 11, '2021-07-14', 1, '2021-07-14 15:54:28'),
(15, 13, '2021-07-14', 1, '2021-07-14 15:54:30'),
(16, 14, '2021-07-14', 1, '2021-07-14 15:54:31'),
(17, 15, '2021-07-14', 1, '2021-07-14 15:54:32'),
(18, 16, '2021-07-14', 1, '2021-07-14 15:54:34'),
(19, 17, '2021-07-14', 1, '2021-07-14 15:54:36'),
(20, 18, '2021-07-14', 1, '2021-07-14 15:54:37'),
(21, 19, '2021-07-14', 1, '2021-07-14 15:54:38'),
(22, 20, '2021-07-14', 1, '2021-07-14 15:54:42'),
(23, 21, '2021-07-14', 1, '2021-07-14 15:54:43'),
(24, 1, '2021-07-14', 0, '2021-07-14 17:16:19'),
(25, 2, '2021-07-14', 1, '2021-07-14 17:16:21'),
(26, 4, '2021-07-14', 1, '2021-07-14 17:16:22'),
(27, 5, '2021-07-14', 0, '2021-07-14 17:16:23'),
(28, 7, '2021-07-14', 0, '2021-07-14 17:16:24'),
(29, 8, '2021-07-14', 0, '2021-07-14 17:16:26'),
(30, 9, '2021-07-14', 1, '2021-07-14 17:16:27'),
(31, 10, '2021-07-14', 0, '2021-07-14 17:16:28'),
(32, 11, '2021-07-14', 0, '2021-07-14 17:16:31'),
(33, 12, '2021-07-14', 0, '2021-07-14 17:16:32'),
(34, 13, '2021-07-14', 1, '2021-07-14 17:16:34'),
(35, 14, '2021-07-14', 1, '2021-07-14 17:16:35'),
(36, 15, '2021-07-14', 1, '2021-07-14 17:16:36'),
(37, 16, '2021-07-14', 1, '2021-07-14 17:16:37'),
(38, 17, '2021-07-14', 1, '2021-07-14 17:16:39'),
(39, 20, '2021-07-14', 1, '2021-07-14 17:18:49'),
(40, 19, '2021-07-14', 1, '2021-07-14 17:18:50'),
(41, 18, '2021-07-14', 1, '2021-07-14 17:18:50'),
(42, 21, '2021-07-14', 1, '2021-07-14 17:18:52'),
(43, 1, '2021-07-14', 0, '2021-07-14 17:57:23'),
(44, 4, '2021-07-14', 0, '2021-07-14 17:57:27'),
(45, 5, '2021-07-14', 0, '2021-07-14 17:57:29'),
(46, 2, '2021-07-14', 1, '2021-07-14 17:57:30'),
(47, 7, '2021-07-14', 1, '2021-07-14 17:57:32'),
(48, 8, '2021-07-14', 1, '2021-07-14 17:57:34'),
(49, 9, '2021-07-14', 1, '2021-07-14 17:57:37'),
(50, 10, '2021-07-14', 1, '2021-07-14 17:57:38'),
(51, 11, '2021-07-14', 1, '2021-07-14 17:57:40'),
(52, 12, '2021-07-14', 1, '2021-07-14 17:57:41'),
(53, 13, '2021-07-14', 1, '2021-07-14 17:57:42'),
(54, 14, '2021-07-14', 1, '2021-07-14 17:57:43'),
(55, 15, '2021-07-14', 1, '2021-07-14 17:57:44'),
(56, 16, '2021-07-14', 1, '2021-07-14 17:57:46'),
(57, 17, '2021-07-14', 1, '2021-07-14 17:57:49'),
(58, 18, '2021-07-14', 1, '2021-07-14 17:57:50'),
(59, 19, '2021-07-14', 1, '2021-07-14 17:57:51'),
(60, 20, '2021-07-14', 1, '2021-07-14 17:57:52'),
(61, 21, '2021-07-14', 1, '2021-07-14 17:57:54'),
(62, 2, '2021-07-15', 1, '2021-07-15 11:01:40'),
(63, 7, '2021-07-15', 1, '2021-07-15 11:01:43'),
(64, 8, '2021-07-15', 1, '2021-07-15 11:01:45'),
(65, 9, '2021-07-15', 1, '2021-07-15 11:01:46'),
(66, 10, '2021-07-15', 1, '2021-07-15 11:01:48'),
(67, 11, '2021-07-15', 1, '2021-07-15 11:01:49'),
(68, 12, '2021-07-15', 1, '2021-07-15 11:01:53'),
(69, 13, '2021-07-15', 1, '2021-07-15 11:01:54'),
(70, 14, '2021-07-15', 1, '2021-07-15 11:01:55'),
(71, 15, '2021-07-15', 1, '2021-07-15 11:01:56'),
(72, 16, '2021-07-15', 1, '2021-07-15 11:01:57'),
(73, 17, '2021-07-15', 1, '2021-07-15 11:01:58'),
(74, 18, '2021-07-15', 1, '2021-07-15 11:02:02'),
(75, 19, '2021-07-15', 1, '2021-07-15 11:02:02'),
(76, 20, '2021-07-15', 1, '2021-07-15 11:02:03'),
(77, 21, '2021-07-15', 1, '2021-07-15 11:02:05'),
(78, 3, '2021-07-17', 1, '2021-07-17 18:46:47'),
(79, 1, '2021-07-17', 1, '2021-07-17 19:04:26'),
(80, 2, '2021-07-17', 0, '2021-07-17 19:23:33'),
(81, 4, '2021-07-17', 0, '2021-07-17 19:23:34'),
(82, 5, '2021-07-17', 0, '2021-07-17 19:23:35'),
(83, 7, '2021-07-17', 0, '2021-07-17 19:23:36'),
(84, 8, '2021-07-17', 0, '2021-07-17 19:23:37'),
(85, 9, '2021-07-17', 0, '2021-07-17 19:23:38'),
(86, 10, '2021-07-17', 1, '2021-07-17 19:23:40'),
(87, 11, '2021-07-17', 1, '2021-07-17 19:23:43'),
(88, 12, '2021-07-17', 1, '2021-07-17 19:23:44'),
(89, 13, '2021-07-17', 1, '2021-07-17 19:23:47'),
(90, 14, '2021-07-17', 1, '2021-07-17 19:23:48'),
(91, 15, '2021-07-17', 1, '2021-07-17 19:23:49'),
(92, 16, '2021-07-17', 1, '2021-07-17 19:23:50'),
(93, 17, '2021-07-17', 1, '2021-07-17 19:23:51'),
(94, 18, '2021-07-17', 1, '2021-07-17 19:23:53'),
(95, 19, '2021-07-17', 1, '2021-07-17 19:23:55'),
(96, 20, '2021-07-17', 1, '2021-07-17 19:23:56'),
(97, 21, '2021-07-17', 1, '2021-07-17 19:23:57'),
(98, 1, '2021-07-18', 1, '2021-07-18 06:40:58'),
(99, 2, '2021-07-18', 1, '2021-07-18 06:41:00'),
(100, 4, '2021-07-18', 1, '2021-07-18 06:41:01'),
(101, 5, '2021-07-18', 1, '2021-07-18 06:41:02'),
(102, 7, '2021-07-18', 1, '2021-07-18 06:41:04'),
(103, 8, '2021-07-18', 1, '2021-07-18 06:41:05'),
(104, 9, '2021-07-18', 1, '2021-07-18 06:41:06'),
(105, 21, '2021-07-18', 1, '2021-07-18 06:44:11'),
(106, 20, '2021-07-18', 1, '2021-07-18 06:44:13'),
(107, 19, '2021-07-18', 0, '2021-07-18 06:44:17'),
(108, 18, '2021-07-18', 0, '2021-07-18 06:44:20'),
(109, 15, '2021-07-18', 1, '2021-07-18 06:44:29'),
(110, 17, '2021-07-18', 1, '2021-07-18 06:45:13'),
(111, 16, '2021-07-18', 1, '2021-07-18 06:45:14'),
(112, 14, '2021-07-18', 0, '2021-07-18 06:45:16'),
(113, 13, '2021-07-18', 0, '2021-07-18 06:45:17'),
(114, 12, '2021-07-18', 0, '2021-07-18 06:45:21'),
(115, 11, '2021-07-18', 0, '2021-07-18 06:45:22'),
(116, 10, '2021-07-18', 1, '2021-07-18 06:45:23'),
(117, 22, '2021-07-18', 1, '2021-07-18 12:21:41'),
(118, 23, '2021-07-18', 0, '2021-07-18 12:21:43'),
(119, 24, '2021-07-18', 1, '2021-07-18 12:21:44'),
(120, 3, '2021-07-18', 1, '2021-07-18 12:21:53'),
(121, 1, '2021-07-20', 1, '2021-07-20 11:51:07'),
(122, 2, '2021-07-20', 0, '2021-07-20 11:51:18'),
(123, 4, '2021-07-20', 1, '2021-07-20 11:51:21'),
(124, 5, '2021-07-20', 1, '2021-07-20 11:51:26'),
(125, 7, '2021-07-20', 1, '2021-07-20 11:51:28'),
(126, 8, '2021-07-20', 1, '2021-07-20 11:51:31'),
(127, 9, '2021-07-20', 1, '2021-07-20 11:51:32'),
(128, 10, '2021-07-20', 0, '2021-07-20 11:51:34'),
(129, 11, '2021-07-20', 0, '2021-07-20 11:51:35'),
(130, 12, '2021-07-20', 0, '2021-07-20 11:51:35'),
(131, 13, '2021-07-20', 1, '2021-07-20 11:51:36'),
(132, 14, '2021-07-20', 1, '2021-07-20 11:51:37'),
(133, 15, '2021-07-20', 0, '2021-07-20 11:51:38'),
(134, 16, '2021-07-20', 0, '2021-07-20 11:51:42'),
(135, 17, '2021-07-20', 0, '2021-07-20 11:51:43'),
(136, 18, '2021-07-20', 1, '2021-07-20 11:51:45'),
(137, 19, '2021-07-20', 0, '2021-07-20 11:51:46'),
(138, 20, '2021-07-20', 1, '2021-07-20 11:51:47'),
(139, 21, '2021-07-20', 1, '2021-07-20 11:51:49'),
(140, 22, '2021-07-20', 1, '2021-07-20 11:51:50'),
(141, 24, '2021-07-20', 1, '2021-07-20 11:51:52'),
(142, 23, '2021-07-20', 1, '2021-07-20 11:51:54'),
(143, 1, '2021-07-23', 1, '2021-07-23 09:36:18'),
(144, 2, '2021-07-23', 1, '2021-07-23 09:36:19'),
(145, 4, '2021-07-23', 0, '2021-07-23 09:36:22'),
(146, 5, '2021-07-23', 0, '2021-07-23 09:36:23'),
(147, 7, '2021-07-23', 0, '2021-07-23 09:36:26'),
(148, 8, '2021-07-23', 0, '2021-07-23 09:36:28'),
(149, 9, '2021-07-23', 0, '2021-07-23 09:36:29'),
(150, 10, '2021-07-23', 0, '2021-07-23 09:36:33'),
(151, 11, '2021-07-23', 0, '2021-07-23 09:36:34'),
(152, 12, '2021-07-23', 0, '2021-07-23 09:36:36'),
(153, 13, '2021-07-23', 0, '2021-07-23 09:36:39'),
(154, 14, '2021-07-23', 0, '2021-07-23 09:36:41'),
(155, 15, '2021-07-23', 0, '2021-07-23 09:36:43'),
(156, 16, '2021-07-23', 1, '2021-07-23 09:36:44'),
(157, 17, '2021-07-23', 1, '2021-07-23 09:36:45'),
(158, 18, '2021-07-23', 1, '2021-07-23 09:36:50'),
(159, 19, '2021-07-23', 0, '2021-07-23 09:36:52'),
(160, 20, '2021-07-23', 1, '2021-07-23 09:36:54'),
(161, 21, '2021-07-23', 1, '2021-07-23 09:36:58'),
(162, 22, '2021-07-23', 1, '2021-07-23 09:37:00'),
(163, 23, '2021-07-23', 1, '2021-07-23 09:37:01'),
(164, 24, '2021-07-23', 0, '2021-07-23 09:37:02'),
(165, 1, '2021-07-25', 1, '2021-07-25 16:47:52'),
(166, 2, '2021-07-25', 1, '2021-07-25 16:47:53'),
(167, 4, '2021-07-25', 1, '2021-07-25 16:47:53'),
(168, 5, '2021-07-25', 1, '2021-07-25 16:47:54'),
(169, 7, '2021-07-25', 1, '2021-07-25 16:47:56'),
(170, 8, '2021-07-25', 1, '2021-07-25 16:47:57'),
(171, 9, '2021-07-25', 1, '2021-07-25 16:47:57'),
(172, 10, '2021-07-25', 1, '2021-07-25 16:47:58'),
(173, 11, '2021-07-25', 1, '2021-07-25 16:48:00'),
(174, 12, '2021-07-25', 1, '2021-07-25 16:48:00'),
(175, 13, '2021-07-25', 1, '2021-07-25 16:48:01'),
(176, 14, '2021-07-25', 1, '2021-07-25 16:48:02'),
(177, 15, '2021-07-25', 1, '2021-07-25 16:48:03'),
(178, 16, '2021-07-25', 1, '2021-07-25 16:48:04'),
(179, 17, '2021-07-25', 1, '2021-07-25 16:48:04'),
(180, 18, '2021-07-25', 1, '2021-07-25 16:48:05'),
(181, 19, '2021-07-25', 1, '2021-07-25 16:48:06'),
(182, 20, '2021-07-25', 1, '2021-07-25 16:48:06'),
(183, 21, '2021-07-25', 1, '2021-07-25 16:48:08'),
(184, 22, '2021-07-25', 1, '2021-07-25 16:48:08'),
(185, 23, '2021-07-25', 0, '2021-07-25 16:48:10'),
(186, 24, '2021-07-25', 0, '2021-07-25 16:48:12'),
(187, 25, '2021-07-25', 1, '2021-07-25 16:48:13'),
(188, 26, '2021-07-25', 1, '2021-07-25 16:48:15'),
(189, 3, '2021-07-25', 1, '2021-07-25 16:48:56'),
(190, 1, '2021-07-27', 1, '2021-07-27 19:38:48'),
(191, 2, '2021-07-27', 1, '2021-07-27 19:38:50'),
(192, 4, '2021-07-27', 1, '2021-07-27 19:38:51'),
(193, 5, '2021-07-27', 0, '2021-07-27 19:38:54'),
(194, 7, '2021-07-27', 1, '2021-07-27 19:38:56'),
(195, 8, '2021-07-27', 1, '2021-07-27 19:38:57'),
(196, 9, '2021-07-27', 1, '2021-07-27 19:38:59'),
(197, 10, '2021-07-27', 1, '2021-07-27 19:39:01'),
(198, 11, '2021-07-27', 1, '2021-07-27 19:39:03'),
(199, 12, '2021-07-27', 1, '2021-07-27 19:39:18'),
(200, 13, '2021-07-27', 1, '2021-07-27 19:39:20'),
(201, 14, '2021-07-27', 1, '2021-07-27 19:39:22'),
(202, 15, '2021-07-27', 1, '2021-07-27 19:39:23'),
(203, 16, '2021-07-27', 1, '2021-07-27 19:39:25'),
(204, 17, '2021-07-27', 1, '2021-07-27 19:39:27'),
(205, 18, '2021-07-27', 1, '2021-07-27 19:39:28'),
(206, 19, '2021-07-27', 1, '2021-07-27 19:39:30'),
(207, 20, '2021-07-27', 0, '2021-07-27 19:39:37'),
(208, 21, '2021-07-27', 0, '2021-07-27 19:39:39'),
(209, 22, '2021-07-27', 0, '2021-07-27 19:39:40'),
(210, 23, '2021-07-27', 0, '2021-07-27 19:39:43'),
(211, 24, '2021-07-27', 0, '2021-07-27 19:39:45'),
(212, 25, '2021-07-27', 0, '2021-07-27 19:39:47'),
(213, 26, '2021-07-27', 0, '2021-07-27 19:39:49'),
(214, 27, '2021-07-27', 1, '2021-07-27 19:39:56'),
(215, 1, '2021-07-28', 1, '2021-07-28 20:28:58'),
(216, 2, '2021-07-28', 1, '2021-07-28 20:28:59'),
(217, 4, '2021-07-28', 1, '2021-07-28 20:29:00'),
(218, 5, '2021-07-28', 1, '2021-07-28 20:29:02'),
(219, 7, '2021-07-28', 1, '2021-07-28 20:29:03'),
(220, 8, '2021-07-28', 1, '2021-07-28 20:29:04'),
(221, 9, '2021-07-28', 1, '2021-07-28 20:29:05'),
(222, 10, '2021-07-28', 1, '2021-07-28 20:29:06'),
(223, 11, '2021-07-28', 1, '2021-07-28 20:29:10'),
(224, 12, '2021-07-28', 1, '2021-07-28 20:29:12'),
(225, 13, '2021-07-28', 1, '2021-07-28 20:29:13'),
(226, 14, '2021-07-28', 1, '2021-07-28 20:29:14'),
(227, 15, '2021-07-28', 1, '2021-07-28 20:29:15'),
(228, 16, '2021-07-28', 1, '2021-07-28 20:29:16'),
(229, 17, '2021-07-28', 1, '2021-07-28 20:29:56'),
(230, 18, '2021-07-28', 1, '2021-07-28 20:29:57'),
(231, 19, '2021-07-28', 1, '2021-07-28 20:29:58'),
(232, 20, '2021-07-28', 1, '2021-07-28 20:29:58'),
(233, 21, '2021-07-28', 1, '2021-07-28 20:29:59'),
(234, 22, '2021-07-28', 1, '2021-07-28 20:30:00'),
(235, 23, '2021-07-28', 1, '2021-07-28 20:30:01'),
(236, 24, '2021-07-28', 1, '2021-07-28 20:30:05'),
(237, 25, '2021-07-28', 1, '2021-07-28 20:30:06'),
(238, 26, '2021-07-28', 1, '2021-07-28 20:30:06'),
(239, 27, '2021-07-28', 1, '2021-07-28 20:30:07'),
(240, 1, '2021-08-03', 1, '2021-08-03 06:17:06'),
(241, 2, '2021-08-03', 1, '2021-08-03 06:17:07'),
(242, 4, '2021-08-03', 1, '2021-08-03 06:17:08'),
(243, 5, '2021-08-03', 0, '2021-08-03 06:17:09'),
(244, 7, '2021-08-03', 1, '2021-08-03 06:17:10'),
(245, 8, '2021-08-03', 1, '2021-08-03 06:17:13'),
(246, 9, '2021-08-03', 1, '2021-08-03 06:17:14'),
(247, 10, '2021-08-03', 1, '2021-08-03 06:17:15'),
(248, 11, '2021-08-03', 1, '2021-08-03 06:17:16'),
(249, 12, '2021-08-03', 1, '2021-08-03 06:17:16'),
(250, 13, '2021-08-03', 1, '2021-08-03 06:17:17'),
(251, 14, '2021-08-03', 1, '2021-08-03 06:17:19'),
(252, 15, '2021-08-03', 1, '2021-08-03 06:17:20'),
(253, 16, '2021-08-03', 1, '2021-08-03 06:17:21'),
(254, 17, '2021-08-03', 1, '2021-08-03 06:17:22'),
(255, 18, '2021-08-03', 1, '2021-08-03 06:17:24'),
(256, 19, '2021-08-03', 1, '2021-08-03 06:17:25'),
(257, 20, '2021-08-03', 1, '2021-08-03 06:17:27'),
(258, 21, '2021-08-03', 1, '2021-08-03 06:17:28'),
(259, 22, '2021-08-03', 1, '2021-08-03 06:17:30'),
(260, 23, '2021-08-03', 1, '2021-08-03 06:17:33'),
(261, 24, '2021-08-03', 1, '2021-08-03 06:17:35'),
(262, 25, '2021-08-03', 1, '2021-08-03 06:17:36'),
(263, 26, '2021-08-03', 1, '2021-08-03 06:17:37'),
(264, 27, '2021-08-03', 1, '2021-08-03 06:17:38'),
(265, 1, '2021-08-12', 1, '2021-08-12 13:14:57'),
(266, 2, '2021-08-12', 1, '2021-08-12 13:14:58'),
(267, 4, '2021-08-12', 1, '2021-08-12 13:14:59'),
(268, 5, '2021-08-12', 1, '2021-08-12 13:15:00'),
(269, 7, '2021-08-12', 1, '2021-08-12 13:15:01'),
(270, 8, '2021-08-12', 1, '2021-08-12 13:15:01'),
(271, 9, '2021-08-12', 1, '2021-08-12 13:15:02'),
(272, 10, '2021-08-12', 1, '2021-08-12 13:15:03'),
(273, 13, '2021-08-12', 1, '2021-08-12 13:15:06'),
(274, 14, '2021-08-12', 1, '2021-08-12 13:15:07'),
(275, 12, '2021-08-12', 1, '2021-08-12 13:15:09'),
(276, 15, '2021-08-12', 1, '2021-08-12 13:15:10'),
(277, 16, '2021-08-12', 1, '2021-08-12 13:15:12'),
(278, 17, '2021-08-12', 1, '2021-08-12 13:15:13'),
(279, 18, '2021-08-12', 1, '2021-08-12 13:15:14'),
(280, 19, '2021-08-12', 1, '2021-08-12 13:15:16'),
(281, 20, '2021-08-12', 1, '2021-08-12 13:15:17'),
(282, 21, '2021-08-12', 1, '2021-08-12 13:15:18'),
(283, 22, '2021-08-12', 1, '2021-08-12 13:15:19'),
(284, 23, '2021-08-12', 1, '2021-08-12 13:15:20'),
(285, 24, '2021-08-12', 1, '2021-08-12 13:15:22'),
(286, 25, '2021-08-12', 1, '2021-08-12 13:15:23'),
(287, 26, '2021-08-12', 1, '2021-08-12 13:15:23'),
(288, 27, '2021-08-12', 1, '2021-08-12 13:15:25'),
(289, 3, '2021-08-12', 1, '2021-08-12 13:16:04'),
(290, 1, '2021-08-13', 1, '2021-08-13 13:25:02'),
(291, 2, '2021-08-13', 1, '2021-08-13 13:25:03'),
(292, 4, '2021-08-13', 1, '2021-08-13 13:25:05'),
(293, 5, '2021-08-13', 1, '2021-08-13 13:25:07'),
(294, 7, '2021-08-13', 1, '2021-08-13 13:25:08'),
(295, 8, '2021-08-13', 1, '2021-08-13 13:25:09'),
(296, 9, '2021-08-13', 1, '2021-08-13 13:25:11'),
(297, 10, '2021-08-13', 1, '2021-08-13 13:25:12'),
(298, 11, '2021-08-13', 1, '2021-08-13 13:25:21'),
(299, 12, '2021-08-13', 1, '2021-08-13 13:25:22'),
(300, 13, '2021-08-13', 1, '2021-08-13 13:25:23'),
(301, 14, '2021-08-13', 1, '2021-08-13 13:25:25'),
(302, 15, '2021-08-13', 1, '2021-08-13 13:25:26'),
(303, 16, '2021-08-13', 1, '2021-08-13 13:25:27'),
(304, 17, '2021-08-13', 1, '2021-08-13 13:25:28'),
(305, 18, '2021-08-13', 1, '2021-08-13 13:25:29'),
(306, 19, '2021-08-13', 1, '2021-08-13 13:25:31'),
(307, 20, '2021-08-13', 1, '2021-08-13 13:25:34'),
(308, 21, '2021-08-13', 1, '2021-08-13 13:25:35'),
(309, 22, '2021-08-13', 1, '2021-08-13 13:25:36'),
(310, 23, '2021-08-13', 1, '2021-08-13 13:25:37'),
(311, 24, '2021-08-13', 1, '2021-08-13 13:25:44'),
(312, 25, '2021-08-13', 1, '2021-08-13 13:25:46'),
(313, 26, '2021-08-13', 1, '2021-08-13 13:25:47'),
(314, 27, '2021-08-13', 1, '2021-08-13 13:25:50'),
(315, 1, '2021-08-14', 1, '2021-08-14 14:58:19'),
(316, 4, '2021-08-14', 1, '2021-08-14 14:58:21'),
(317, 2, '2021-08-14', 1, '2021-08-14 14:58:21'),
(318, 5, '2021-08-14', 1, '2021-08-14 14:58:22'),
(319, 7, '2021-08-14', 1, '2021-08-14 14:58:23'),
(320, 8, '2021-08-14', 1, '2021-08-14 14:58:24'),
(321, 9, '2021-08-14', 1, '2021-08-14 14:58:25'),
(322, 10, '2021-08-14', 1, '2021-08-14 14:58:27'),
(323, 11, '2021-08-14', 1, '2021-08-14 14:58:30'),
(324, 12, '2021-08-14', 1, '2021-08-14 14:58:31'),
(325, 13, '2021-08-14', 1, '2021-08-14 14:58:32'),
(326, 14, '2021-08-14', 1, '2021-08-14 14:58:34'),
(327, 15, '2021-08-14', 1, '2021-08-14 14:58:36'),
(328, 16, '2021-08-14', 1, '2021-08-14 14:58:38'),
(329, 17, '2021-08-14', 1, '2021-08-14 14:58:39'),
(330, 18, '2021-08-14', 1, '2021-08-14 14:58:40'),
(331, 19, '2021-08-14', 1, '2021-08-14 14:58:42'),
(332, 20, '2021-08-14', 1, '2021-08-14 14:58:43'),
(333, 21, '2021-08-14', 0, '2021-08-14 14:58:46'),
(334, 22, '2021-08-14', 0, '2021-08-14 14:58:48'),
(335, 23, '2021-08-14', 0, '2021-08-14 14:58:49'),
(336, 24, '2021-08-14', 0, '2021-08-14 14:58:50'),
(337, 25, '2021-08-14', 0, '2021-08-14 14:58:51'),
(338, 26, '2021-08-14', 1, '2021-08-14 14:58:53'),
(339, 27, '2021-08-14', 0, '2021-08-14 14:58:58'),
(340, 28, '2021-08-14', 0, '2021-08-14 14:58:59'),
(341, 29, '2021-08-14', 0, '2021-08-14 14:59:01'),
(342, 1, '2021-08-16', 1, '2021-08-16 13:41:04'),
(343, 4, '2021-08-16', 1, '2021-08-16 13:41:05'),
(344, 5, '2021-08-16', 1, '2021-08-16 13:41:06'),
(345, 7, '2021-08-16', 1, '2021-08-16 13:41:07'),
(346, 9, '2021-08-16', 1, '2021-08-16 13:41:08'),
(347, 11, '2021-08-16', 1, '2021-08-16 13:41:09'),
(348, 15, '2021-08-16', 1, '2021-08-16 13:41:10'),
(349, 16, '2021-08-16', 1, '2021-08-16 13:41:11'),
(350, 25, '2021-08-16', 1, '2021-08-16 13:41:16'),
(351, 24, '2021-08-16', 0, '2021-08-16 13:41:17'),
(352, 23, '2021-08-16', 1, '2021-08-16 13:41:20'),
(353, 22, '2021-08-16', 1, '2021-08-16 13:41:21'),
(354, 21, '2021-08-16', 0, '2021-08-16 13:41:22'),
(355, 19, '2021-08-16', 0, '2021-08-16 13:41:25'),
(356, 18, '2021-08-16', 0, '2021-08-16 13:41:26'),
(357, 17, '2021-08-16', 0, '2021-08-16 13:41:26'),
(358, 26, '2021-08-16', 0, '2021-08-16 13:41:30'),
(359, 27, '2021-08-16', 0, '2021-08-16 13:41:31'),
(360, 28, '2021-08-16', 0, '2021-08-16 13:41:33'),
(361, 29, '2021-08-16', 1, '2021-08-16 13:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `children_tb`
--

CREATE TABLE `children_tb` (
  `id` int(11) NOT NULL,
  `employee_id` int(64) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `children_tb`
--

INSERT INTO `children_tb` (`id`, `employee_id`, `name`, `created_at`) VALUES
(1, 11, 'Array', '2021-07-05 21:05:32'),
(2, 11, 'Grace', '2021-07-05 21:08:16'),
(3, 11, 'Grace', '2021-07-05 21:08:21'),
(4, 11, 'Leah', '2021-07-05 21:09:34'),
(5, 11, 'Diane', '2021-07-05 21:09:35'),
(6, 10, 'Adil Wande', '2021-07-05 21:22:32'),
(7, 10, 'Alice Wande', '2021-07-05 21:22:32'),
(8, 15, 'Sonia', '2021-07-05 21:26:37'),
(9, 15, 'Maria', '2021-07-05 21:26:37'),
(10, 14, 'Eric', '2021-07-05 21:30:21'),
(11, 14, 'Desir', '2021-07-05 21:30:21'),
(12, 18, 'daniel', '2021-07-05 21:53:24'),
(13, 18, 'Lydia mirindi', '2021-07-05 21:53:24'),
(14, 13, 'Sonia', '2021-07-05 21:55:56'),
(15, 13, 'Eric', '2021-07-05 21:55:57'),
(16, 19, 'Alice mungo', '2021-07-17 21:27:07'),
(17, 19, 'Benjaim mungo', '2021-07-17 21:27:07'),
(18, 19, 'Benjaim mungo', '2021-07-17 21:27:07'),
(19, 21, 'Jeannette BISIMWA', '2021-07-17 21:29:02'),
(20, 21, 'Anny BISIMWA', '2021-07-17 21:29:02'),
(21, 21, 'Donny Bisimwa', '2021-07-17 21:29:02'),
(22, 24, 'Gentil', '2021-07-18 09:00:31'),
(23, 24, 'Exauce', '2021-07-18 09:00:31'),
(24, 24, 'Lareine', '2021-07-18 09:00:31');

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
  `autho` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `oper` varchar(100) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `woman_name` varchar(255) NOT NULL,
  `children` int(11) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `payMonth` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_tb`
--

INSERT INTO `employees_tb` (`id`, `username`, `fullname`, `email`, `autho`, `gender`, `status`, `oper`, `attendance`, `woman_name`, `children`, `salary`, `payMonth`, `created_at`, `password`) VALUES
(1, 'Grace', 'Grace bisimwa', 'chiruzabisimwa@gmail.com', 1, 'Female', 'Fiance', 'OPERATIONNEL', '2021-08-16', 'Diane', 2, 1200, '08-2021', '2021-06-25 09:18:31', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Kaylia', 'Kaylia ndeze', 'kaylia@gmail.com', 1, 'Female', 'Single', 'RETIRED', '', '', 0, 1200, '', '2021-06-25 09:44:10', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'adolf', 'adolf bisimwa', 'adolf@gmail.com', 0, 'Male', 'Single', 'RETIRED', '', '', 0, 1200, '', '2021-06-25 09:44:39', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Peter', 'Peter KAHUMUZA', 'peter@gmail.com', 0, 'Male', 'Single', 'OPERATIONNEL', '2021-08-16', '', 0, 2500, '08-2021', '2021-06-25 09:45:08', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Marcelin', 'Marcelin HOD', 'marcelin@ulk.rw', 0, 'Male', 'Married', 'OPERATIONNEL', '2021-08-16', 'wife of the HOD', 2, 1200, '08-2021', '2021-06-25 09:53:54', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'Eric', 'Eric It', 'Eric@ulk.rw', 0, 'Male', 'Single', 'RETIRED', '', '', 0, 1200, '', '2021-06-25 09:54:25', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'Dorcas', 'Dorcas Walimba', 'dodo@gmail.com', 0, 'Female', 'Fiance', 'OPERATIONNEL', '2021-08-16', '', 0, 1200, '08-2021', '2021-06-25 10:04:45', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Dorcas', 'Dorcas Walimba', 'dodo@gmail.com', 0, 'Female', 'Fiance', 'RETIRED', '', '', 0, 1200, '', '2021-06-25 10:05:55', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'Elie', 'Elie safari', 'elie@congo.cd', 0, 'Male', 'Single', 'OPERATIONNEL', '2021-08-16', '', 0, 1200, '08-2021', '2021-06-25 10:06:29', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'blessing', 'Blessing Rwanda', 'blessing@gmail.com', 0, 'Female', 'Married', 'RETIRED', '', 'Gloria', 2, 1200, '', '2021-06-25 10:07:21', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'Blaise', 'Blaise Rwanda', 'blessing@gmail.com', 0, 'Female', 'Married', 'OPERATIONNEL', '2021-08-16', 'Gloria', 2, 1200, '08-2021', '2021-06-25 10:10:22', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'blessing', 'Blessing Rwanda', 'blessing@gmail.com', 0, 'Female', 'Married', 'RETIRED', '', 'Gloria', 2, 1200, '', '2021-06-25 10:10:54', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'Omar', 'omar bora', 'omar@gmail.com', 0, 'Male', 'Married', 'RETIRED', '', 'Olivia', 2, 1200, '', '2021-06-30 09:23:49', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'Emile', 'Emile Ruzizi', 'emile@gmail.com', 0, 'Male', 'Married', 'RETIRED', '', 'emilly', 2, 1200, '', '2021-06-30 09:44:18', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'Emile', 'Emile Ruzizi', 'emile@gmail.com', 0, 'Male', 'Married', 'OPERATIONNEL', '2021-08-16', 'emilly', 2, 1200, '08-2021', '2021-06-30 09:45:24', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, 'Joel', 'Joel mungo', 'joelmungo@gmail.com', 0, 'Male', 'Single', 'OPERATIONNEL', '2021-08-16', '', 0, 1200, '08-2021', '2021-07-01 19:36:37', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'Popaul', 'Popaul mukongo', 'popaul@gmail.fr', 0, 'Male', 'Fiance', 'OPERATIONNEL', 'no', '', 0, 1200, '08-2021', '2021-07-01 19:39:40', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, 'Irene', 'Irene mirindi', 'irene@gmail.cd', 0, 'Female', 'Married', 'OPERATIONNEL', 'no', 'Patrick', 2, 1200, '08-2021', '2021-07-01 19:42:30', 'd41d8cd98f00b204e9800998ecf8427e'),
(19, 'Athanase', 'Athanase Famba', 'atha@gmail.com', 0, 'Male', 'Married', 'OPERATIONNEL', 'no', 'Alice wangu', 3, 1200, '08-2021', '2021-07-06 19:01:47', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'solange', 'solange umutesi', 'sol@gmail.com', 0, 'Female', 'Married', 'RETIRED', '', 'Patrick', 2, 1200, '', '2021-07-06 19:10:51', 'd41d8cd98f00b204e9800998ecf8427e'),
(21, 'jean', 'jean pierre', 'jean@gmail.fr', 0, 'Male', 'Married', 'OPERATIONNEL', 'no', 'Patrick', 3, 1200, '08-2021', '2021-07-06 19:12:10', 'd41d8cd98f00b204e9800998ecf8427e'),
(22, 'Germain', 'Germain Bisimwa', 'germainbisimwa@gmail.com', 0, 'Male', 'Married', 'OPERATIONNEL', '2021-08-16', 'Tazama Maman Sofia', 1, 1200, '08-2021', '2021-07-18 08:47:52', 'd41d8cd98f00b204e9800998ecf8427e'),
(23, 'Esther', 'Esther Bisimwa', 'esther@gmail.fr', 0, 'Female', 'Married', 'OPERATIONNEL', '2021-08-16', 'Moi', 2, 1200, '08-2021', '2021-07-18 08:58:26', 'd41d8cd98f00b204e9800998ecf8427e'),
(24, 'Jackson', 'jackson Wasson', 'ja@yahoo.fr', 0, 'Male', 'Married', 'OPERATIONNEL', 'no', 'Chantal Byenge', 3, 1200, '08-2021', '2021-07-18 08:59:45', 'd41d8cd98f00b204e9800998ecf8427e'),
(25, 'Jeanette', 'jeanette el BISIMWA', 'jeantte@gmail.cd', 0, 'Female', 'Single', 'OPERATIONNEL', '2021-08-16', '', 0, 1200, '08-2021', '2021-07-25 18:20:42', 'd41d8cd98f00b204e9800998ecf8427e'),
(26, 'Uwera23', 'Uwera Tona', 'uweratonarw@rw.ac.ulk', 0, 'Female', 'Single', 'OPERATIONNEL', 'no', '', 0, 1250, '08-2021', '2021-07-25 18:33:30', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 'Bienfait', 'Bienfait BISIMWA', 'bienfait@gmail.com', 0, 'Male', 'Single', 'OPERATIONNEL', 'no', '', 0, 1200, '08-2021', '2021-07-25 21:21:33', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'Eddy', 'EDDY MATABISHI', 'eddy@gmail.com', 0, 'Male', 'Single', 'OPERATIONNEL', 'no', '', 0, 1200, '08-2021', '2021-08-13 15:27:33', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'Lwaboshi', 'Christian Lwaboshi', 'Lwaboshi.christian.cd.drc@gmail.com', 0, 'Male', 'Fiance', 'OPERATIONNEL', '2021-08-16', 'Shannel', 0, 1200, '08-2021', '2021-08-13 15:28:47', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `messages_tb`
--

CREATE TABLE `messages_tb` (
  `id` int(64) NOT NULL,
  `context` text NOT NULL,
  `senderId` int(11) NOT NULL,
  `receiverId` int(11) NOT NULL,
  `msgStatus` varchar(20) NOT NULL,
  `viewStatus` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages_tb`
--

INSERT INTO `messages_tb` (`id`, `context`, `senderId`, `receiverId`, `msgStatus`, `viewStatus`, `created_at`) VALUES
(1, 'Hello', 1, 4, 'oper', 'unready', '2021-07-25 20:43:00'),
(2, 'Good evening', 1, 26, 'oper', 'unready', '2021-07-25 20:45:36'),
(3, '.Hello.', 1, 3, 'oper', 'unready', '2021-07-25 21:04:25'),
(4, '.test.', 26, 3, 'oper', 'unready', '2021-07-25 21:09:31'),
(5, 'Patry red day', 26, 3, 'oper', 'unready', '2021-07-25 21:14:06'),
(6, 'This the test to see the container of the message if it can be resized by itself', 26, 3, 'oper', 'unready', '2021-07-25 21:18:16'),
(7, 'Hello', 27, 26, 'oper', 'unready', '2021-07-25 21:22:20'),
(8, 'Hey', 27, 26, 'oper', 'unready', '2021-07-25 21:22:49'),
(9, 'How are you %20TRUNCATE users', 26, 27, 'oper', 'unready', '2021-07-25 21:28:26'),
(10, 'This now', 27, 26, 'oper', 'unready', '2021-07-25 21:29:11'),
(11, 'Laat', 27, 26, 'oper', 'unready', '2021-07-25 21:52:15'),
(12, 'test', 26, 11, 'oper', 'unready', '2021-07-27 21:38:14'),
(13, 'Good morning', 26, 27, 'oper', 'unready', '2021-08-03 08:16:06'),
(14, 'Hello adolf', 1, 3, 'oper', 'unready', '2021-08-13 17:25:44'),
(15, 'Hi', 1, 19, 'oper', 'unready', '2021-08-13 17:26:14'),
(16, 'we are the best', 1, 3, 'oper', 'unready', '2021-08-13 17:42:02'),
(17, 'Hello', 2, 1, 'oper', 'unready', '2021-08-13 17:48:33'),
(18, 'Hello Kaylia', 1, 2, 'oper', 'unready', '2021-08-13 18:02:37'),
(19, 'hey', 1, 2, 'oper', 'unready', '2021-08-13 18:08:33'),
(20, 'Cool today you try your best to do this code', 1, 3, 'oper', 'unready', '2021-08-13 18:19:45'),
(21, 'hello', 1, 3, 'oper', 'unready', '2021-08-13 18:21:29'),
(22, 'hey', 1, 3, 'oper', 'unready', '2021-08-13 18:21:38'),
(23, 'heiht', 1, 3, 'oper', 'unready', '2021-08-13 18:21:46'),
(24, 'Test today', 1, 3, 'oper', 'unready', '2021-08-14 19:04:04'),
(25, 'Hello', 1, 3, 'oper', 'unready', '2021-08-14 19:56:44'),
(26, 'Hello', 26, 1, 'oper', 'unready', '2021-08-16 16:20:26'),
(27, 'How are you', 1, 26, 'oper', 'unready', '2021-08-16 16:21:22'),
(28, 'Today is my day', 26, 1, 'oper', 'unready', '2021-08-16 19:59:49'),
(29, 'Hello this the test that we are looking for and trust... code', 26, 1, 'oper', 'unready', '2021-08-16 20:00:20'),
(30, 'lorem today is day that people are going to see the result of your code... make sure you write them correctly', 26, 1, 'oper', 'unready', '2021-08-16 20:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `payement_tb`
--

CREATE TABLE `payement_tb` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payement_tb`
--

INSERT INTO `payement_tb` (`id`, `employee_id`, `amount`, `created_at`) VALUES
(1, 1, 1200, '2021-08-16 16:09:34'),
(2, 4, 2500, '2021-08-16 16:10:36'),
(3, 5, 1200, '2021-08-16 16:11:59'),
(4, 7, 1200, '2021-08-16 16:12:02'),
(5, 9, 1200, '2021-08-16 16:12:04'),
(6, 11, 1200, '2021-08-16 16:12:07'),
(7, 15, 1200, '2021-08-16 16:12:10'),
(8, 16, 1200, '2021-08-16 16:12:15'),
(9, 17, 1200, '2021-08-16 16:12:23'),
(10, 18, 1200, '2021-08-16 16:12:36'),
(11, 19, 1200, '2021-08-16 16:12:38'),
(12, 21, 1200, '2021-08-16 16:12:41'),
(13, 22, 1200, '2021-08-16 16:12:44'),
(14, 23, 1200, '2021-08-16 16:12:50'),
(15, 24, 1200, '2021-08-16 16:12:55'),
(16, 25, 1200, '2021-08-16 16:12:57'),
(17, 26, 1250, '2021-08-16 16:12:59'),
(18, 27, 1200, '2021-08-16 16:13:02'),
(19, 28, 1200, '2021-08-16 16:13:08'),
(20, 29, 1200, '2021-08-16 16:13:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_tb`
--
ALTER TABLE `attendance_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `children_tb`
--
ALTER TABLE `children_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_tb`
--
ALTER TABLE `employees_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_tb`
--
ALTER TABLE `messages_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payement_tb`
--
ALTER TABLE `payement_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_tb`
--
ALTER TABLE `attendance_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `children_tb`
--
ALTER TABLE `children_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `employees_tb`
--
ALTER TABLE `employees_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages_tb`
--
ALTER TABLE `messages_tb`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payement_tb`
--
ALTER TABLE `payement_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
