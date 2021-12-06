# RamaLL

```html
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.html">

    <meta name="author" content="Jean-pierre14">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>RamaLL</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div>
        <h3>Welcome to this project
        </h3>
    <div>
</html>
```

---

#Databasse

```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEmpl` ()  BEGIN
         SELECT * FROM employees_tb WHERE oper = 'OPERATIONNEL' ORDER BY id DESC ;
        END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEmpl2` ()  BEGIN
         SELECT * FROM employees_tb ORDER BY id DESC LIMIT 6;
        END$$

DELIMITER ;

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

CREATE TABLE `payement_tb` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `payement_tb`
--
```

---

# Guys I'm happy to finish this work.
