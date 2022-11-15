-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 10:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123'),
(2, 'sarkermajid', 'sarkermajid@gmail.com', 'f18e1f80099800fb4d122199a569df66');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(11, 'football'),
(12, 'cricket');

-- --------------------------------------------------------

--
-- Table structure for table `newses`
--

CREATE TABLE `newses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newses`
--

INSERT INTO `newses` (`id`, `title`, `author`, `category_id`, `content`, `image`) VALUES
(14, 'From upsets to England joy, a T20 WC to remember', 'sarker', 12, 'The curtain on the Twenty20 World Cup 2022 dropped last Sunday with England finishing as the latest world champions, defeating Pakistan in dominant fashion by five wickets at the historic Melbourne Cricket Ground.', 'assets/img/32nf3xz-highres.jpg'),
(15, 'Buttler: We deserved to be world champions', 'sarker', 12, 'Twenty20 World Cup winning skipper Jos Buttler firmly believes England have won the trophy as the deserved winners as they played their best cricket throughout the tournament with both bat and ball, and outplayed their opponents. ', 'assets/img/000-32nf46a.jpeg'),
(16, 'Mbappe on target for five-star PSG', 'sarkermajid', 11, 'Kylian Mbappe scored and came through unscathed along with fellow Paris Saint-Germain stars Lionel Messi and Neymar in their final match before the World Cup, a 5-0 Ligue 1 rout of Auxerre Sunday', 'assets/img/up-56.jpeg'),
(17, 'Two-time champions Argentina begin their World Cup', 'sarkermajid', 11, 'Captain Lionel Messi will lead the squad in Qatar at his fifth and probably last World Cup.', 'assets/img/000-32nc4xg.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newses`
--
ALTER TABLE `newses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newses`
--
ALTER TABLE `newses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `newses`
--
ALTER TABLE `newses`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
