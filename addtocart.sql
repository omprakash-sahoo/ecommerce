-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 08:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '0',
  `token` varchar(200) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `employee_id`, `status`, `token`, `roll_id`) VALUES
(11, 'admin', 'admin@gmail.com', '$2y$10$iSzpwXdxrOWudw1G3K.k8OpI2Wk1rlVrSfJPyo5YNvTnmJESgoRky', 'E4444', 'active', '9f5a1be27879ee2b8a785d05289eddd3', 1),
(53, 'omprakash', 'omm@gmail.com', '$2y$10$ONLNou3IjQyc0pMBcf45YeFdCt2msUbACAp4svZ/k9GpvUo1poPIG', 'O7458', 'active', '7572ffac23df096a7f0176aaf5b82e3d', 1),
(54, 'omm2', 'omm2@gmail.com', '$2y$10$aL2Slv8pU8LmHNeyKwPKpOB7zal/ptH65dECoZ7A.hV70Ku/9jP4u', 'e47896', 'active', '396eff7788da73ee39beca8fc9ce9823', 1),
(55, 'admin', 'admin12@gmail.com', '$2y$10$2my/iCWAki5VteVqbHmVquWGwybiIWjk6jReyBNIkW9gkUdKIW4N2', 'E4444', 'active', '1af01c028f39e92c7a74f96c0caea309', 1),
(56, 'admin', 'omm45@gmail.com', '$2y$10$3G5L1p6Ch3MY2prfCMnaKueA9gfEYlAawFP/uUGuxDKMIXEBo3IvW', 'E4444', 'active', 'c1dca4b0bd67dd54962dfcbbd9443d94', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_desc`, `cat_status`) VALUES
(11, 'cat1', 'kjgaksbkjnas', 'deactive'),
(12, 'tshirt', 'clothing', 'deactive'),
(13, 'w3school', 'clothing', 'active'),
(14, 'shoes', 'Tshirt', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
