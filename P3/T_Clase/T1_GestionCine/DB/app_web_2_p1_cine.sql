-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2022 at 12:09 AM
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
-- Database: `app_web_2_p1_cine`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `id_card` char(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date_of_birth` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `last_name`, `id_card`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'David', 'Galarsa', '1721009692', 'dg@c.c', '1990-11-23', '2022-06-03 17:25:27', '2022-06-24 12:44:46'),
(7, 'Karla', 'Sanchez', '1', 'karla@email.com', '1999-06-15', '2022-06-24 12:53:08', '2022-06-24 12:53:08'),
(8, 'Juan', 'Caiza', '1', 'juan@email.com', '2000-06-13', '2022-06-24 12:54:58', '2022-07-13 15:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `rating` float(2,1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `category`, `type`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Avengers', 'Acción', '+16', 4.7, '2022-06-24 15:41:08', '2022-06-24 15:41:08'),
(6, 'Cars', 'Infantil', '+6', 4.0, '2022-06-24 14:34:28', '2022-06-24 14:34:43'),
(7, 'Interestelar', 'Ciencia ficción', '+18', 4.9, '2022-06-24 14:36:26', '2022-06-24 14:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `capacity` int UNSIGNED NOT NULL,
  `feature` varchar(45) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `capacity`, `feature`, `created_at`, `updated_at`) VALUES
(1, 'A1', 100, '4D', '2022-06-24 10:42:10', '2022-06-24 10:42:10'),
(3, 'B2', 200, '3D', '2022-06-24 00:00:00', '2022-06-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_movies`
--

CREATE TABLE `rooms_movies` (
  `room_id` int UNSIGNED NOT NULL,
  `movie_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `rooms_movies`
--

INSERT INTO `rooms_movies` (`room_id`, `movie_id`) VALUES
(3, 1),
(1, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int UNSIGNED NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, '08:00:00', '10:00:00', '2022-06-24 16:51:07', '2022-06-24 16:51:07'),
(5, '13:00:00', '15:00:00', '2022-06-24 15:13:29', '2022-06-24 15:13:29'),
(6, '12:00:00', '13:30:00', '2022-06-24 00:00:00', '2022-06-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedules_movies`
--

CREATE TABLE `schedules_movies` (
  `schedule_id` int UNSIGNED NOT NULL,
  `movie_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `schedules_movies`
--

INSERT INTO `schedules_movies` (`schedule_id`, `movie_id`) VALUES
(1, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date_of_birth` date NOT NULL,
  `id_card` char(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `last_name`, `phone`, `address`, `email`, `date_of_birth`, `id_card`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Caza', '134343', 'Calle 2', 'john@email.com', '2000-03-17', '1723232323', '2022-07-08 17:37:41', '2022-07-08 19:25:09'),
(3, 'Jesica', 'Gonzales', '3434389', 'Calle 38', 'jess@email.com', '1999-02-10', '1734343434', '2022-07-08 19:33:00', '2022-07-08 19:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int NOT NULL,
  `quantity` int NOT NULL,
  `amount` double(6,2) NOT NULL,
  `customer_id` int UNSIGNED NOT NULL,
  `movie_id` int UNSIGNED NOT NULL,
  `seller_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrator'),
(3, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'Ventas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms_movies`
--
ALTER TABLE `rooms_movies`
  ADD PRIMARY KEY (`room_id`,`movie_id`),
  ADD KEY `fk_rooms_has_movies_movies1_idx` (`movie_id`),
  ADD KEY `fk_rooms_has_movies_schedules1_idx` (`room_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules_movies`
--
ALTER TABLE `schedules_movies`
  ADD PRIMARY KEY (`schedule_id`,`movie_id`),
  ADD KEY `fk_schedules_has_movies_movies1_idx` (`movie_id`),
  ADD KEY `fk_schedules_has_movies_schedules1_idx` (`schedule_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sales_customers1_idx` (`customer_id`),
  ADD KEY `fk_sales_movies1_idx` (`movie_id`),
  ADD KEY `fk_sales_sellers1_idx` (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rooms_movies`
--
ALTER TABLE `rooms_movies`
  ADD CONSTRAINT `fk_rooms_has_movies_movies1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `fk_rooms_has_movies_rooms1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `schedules_movies`
--
ALTER TABLE `schedules_movies`
  ADD CONSTRAINT `fk_schedules_has_movies_movies1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `fk_schedules_has_movies_schedules1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_sales_customers1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `fk_sales_movies1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `fk_sales_sellers1` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
