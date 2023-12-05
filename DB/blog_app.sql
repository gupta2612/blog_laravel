-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 11:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_blog`
--

CREATE TABLE `app_blog` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(50) DEFAULT NULL,
  `blog_details` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_blog`
--

INSERT INTO `app_blog` (`id`, `blog_name`, `blog_details`) VALUES
(1, 'Delhi', 'Winters'),
(2, 'Jaipur', 'Election'),
(3, 'MP', 'Election Season');

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `token_key` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `name`, `username`, `password`, `token_key`, `created_at`, `updated_at`) VALUES
(2, 'Gupta', 'Gupta', NULL, 'werwerwer', '2023-12-05 08:20:15', '2023-12-05 08:20:16'),
(3, 'Golu', 'Golu', NULL, 'retfdgdfgdf', '2023-12-05 08:20:30', '2023-12-05 08:20:30'),
(4, 'Jai', 'Jai', NULL, 'szdfsfsdf', '2023-12-05 08:20:46', '2023-12-05 08:20:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_blog`
--
ALTER TABLE `app_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_blog`
--
ALTER TABLE `app_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
