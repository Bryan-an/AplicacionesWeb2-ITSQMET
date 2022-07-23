-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2022 at 01:46 AM
-- Server version: 8.0.29
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_web_2_p2_permisos`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `type` enum('personal','laboral') NOT NULL,
  `observation` text,
  `state` enum('pendiente','aprobado','rechazado') NOT NULL DEFAULT 'pendiente',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `start_date`, `end_date`, `type`, `observation`, `state`, `created_at`, `updated_at`) VALUES
(6, '2022-07-20', '2022-07-15', 'laboral', 'Este es el primer permiso', 'aprobado', '2022-07-22 09:12:18', '2022-07-22 18:45:16'),
(9, '2022-07-14', '2022-07-29', 'laboral', 'No es importante', 'rechazado', '2022-07-22 17:03:54', '2022-07-22 18:43:05'),
(11, '2022-07-13', '2022-07-09', 'personal', 'fadsfd', 'aprobado', '2022-07-22 17:19:07', '2022-07-22 18:45:21'),
(12, '2022-07-13', '2022-07-14', 'personal', 'hola como estas', 'aprobado', '2022-07-22 17:20:03', '2022-07-22 18:45:19'),
(13, '2022-07-14', '2022-07-09', 'laboral', 'esto es otra prueba', 'aprobado', '2022-07-22 17:20:27', '2022-07-22 18:43:20'),
(19, '2022-07-23', '2022-07-24', 'laboral', 'Este es el último', 'rechazado', '2022-07-22 18:44:37', '2022-07-22 18:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('empleado','talento humano') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'empleado 1', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'empleado'),
(2, 'talento 1', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'talento humano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
