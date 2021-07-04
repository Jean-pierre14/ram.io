CREATE TABLE `children_tb` (
  `employee_id` int(64) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
ALTER TABLE `employees_tb`
  ADD PRIMARY KEY (`id`);
 ALTER TABLE `employees_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
(11, 'Blaise', 'Blaise Rwanda', 'blessing@gmail.com', 'Female', 'Married', 'OPERATIONNEL', 'Gloria', 2, 1200, '2021-06-25 10:10:22', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'blessing', 'Blessing Rwanda', 'blessing@gmail.com', 'Female', 'Married', 'OPERATIONNEL', 'Gloria', 2, 1200, '2021-06-25 10:10:54', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'Omar', 'omar bora', 'omar@gmail.com', 'Male', 'Married', 'OPERATIONNEL', 'Olivia', 2, 1200, '2021-06-30 09:23:49', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'Emile', 'Emile Ruzizi', 'emile@gmail.com', 'Male', 'Married', 'OPERATIONNEL', 'emilly', 2, 1200, '2021-06-30 09:44:18', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'Emile', 'Emile Ruzizi', 'emile@gmail.com', 'Male', 'Married', 'OPERATIONNEL', 'emilly', 2, 1200, '2021-06-30 09:45:24', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, 'Joel', 'Joel mungo', 'joelmungo@gmail.com', 'Male', 'Single', 'OPERATIONNEL', '', 0, 1200, '2021-07-01 19:36:37', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'Popaul', 'Popaul mukongo', 'popaul@gmail.fr', 'Male', 'Fiance', 'OPERATIONNEL', '', 0, 1200, '2021-07-01 19:39:40', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, 'Irene', 'Irene mirindi', 'irene@gmail.cd', 'Female', 'Married', 'OPERATIONNEL', 'Patrick', 2, 1200, '2021-07-01 19:42:30', 'd41d8cd98f00b204e9800998ecf8427e');
