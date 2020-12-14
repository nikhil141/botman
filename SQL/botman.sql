-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2020 at 05:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botman`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(7388, 'user1'),
(9999, 'user2'),
(10139, 'user3'),
(10149, 'user4'),
(10281, 'user5'),
(10561, 'user6'),
(10608, 'user7'),
(10627, 'user8'),
(10648, 'user9'),
(10679, 'user10'),
(10681, 'user11'),
(10682, 'user12'),
(10710, 'user13'),
(10714, 'user14'),
(10727, 'user15'),
(10750, 'user16'),
(10753, 'user17'),
(10764, 'user18'),
(10777, 'user19'),
(10780, 'user20'),
(10786, 'user21'),
(10791, 'user22'),
(10795, 'user23'),
(10800, 'user24'),
(10801, 'user25'),
(10802, 'user26'),
(10803, 'user27'),
(10816, 'user28'),
(10817, 'user29'),
(10819, 'user30'),
(10820, 'user31'),
(10827, 'user32'),
(10829, 'user33'),
(10832, 'user34'),
(10833, 'user35'),
(10834, 'user36'),
(10835, 'user37'),
(10836, 'Nikhil Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `visits` int(11) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `visits`, `status`) VALUES
(7388, 2004237, b'0'),
(10681, 88950, b'0'),
(10800, 18589, b'0'),
(10833, 111368, b'0'),
(10682, 1532776, b'0'),
(10710, 2681088, b'0'),
(10714, 31547, b'0'),
(10727, 13479, b'0'),
(10764, 706979, b'0'),
(10777, 286549, b'0'),
(10802, 29597, b'0'),
(10803, 8571, b'0'),
(10817, 2655, b'0'),
(10829, 10816, b'0'),
(10835, 132265, b'0'),
(10819, 9691, b'0'),
(10820, 141482, b'0'),
(10139, 34385, b'0'),
(10281, 3482, b'0'),
(10608, 3010542, b'0'),
(10149, 4784, b'0'),
(10648, 1382, b'0'),
(10679, 2796581, b'0'),
(10750, 3731, b'0'),
(10791, 139934, b'0'),
(10753, 46809, b'0'),
(10801, 60, b'0'),
(10795, 16, b'0'),
(10627, 6, b'0'),
(10791, 454, b'0'),
(10827, 3, b'0'),
(10816, 6351, b'0'),
(10832, 2, b'0'),
(10834, 2, b'0'),
(10786, 3, b'0'),
(10780, 6, b'0'),
(9999, 1, b'0'),
(10561, 65, b'0'),
(10836, 654321, b'1');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10837;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
