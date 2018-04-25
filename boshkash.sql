-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 02:41 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boshkash`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy`
--

CREATE TABLE `academy` (
  `id` int(4) NOT NULL,
  `Academy_name` varchar(50) NOT NULL,
  `Academy_email` varchar(50) NOT NULL,
  `Academy_password` varchar(50) NOT NULL,
  `Academy_info` varchar(500) NOT NULL,
  `Academy_image` varchar(200) DEFAULT NULL,
  `Academy_code` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `academy`
--

INSERT INTO `academy` (`id`, `Academy_name`, `Academy_email`, `Academy_password`, `Academy_info`, `Academy_image`, `Academy_code`) VALUES
(4, 'elahly', 'testgmail.com', '1234', 'ffffff', 'academyimages/tyson-dudley-134446.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `normal_users`
--

CREATE TABLE `normal_users` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone` varchar(12) NOT NULL,
  `user_image` varchar(500) DEFAULT NULL,
  `user_cv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `normal_users`
--

INSERT INTO `normal_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_image`, `user_cv`) VALUES
(16, 'tokhy', 'tokhy@gmail.com', '1234', '01097259633', 'userimages/tyson-dudley-134446.jpg', 'noicv'),
(17, 'test', 'test@gmail.com', '123', '1015823545', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(4) NOT NULL,
  `player_name` varchar(50) NOT NULL,
  `player_Age` int(2) NOT NULL,
  `player_image` varchar(200) NOT NULL,
  `Position` text NOT NULL,
  `player_length` int(3) NOT NULL,
  `player_weight` int(2) NOT NULL,
  `player_attacking_power` int(2) NOT NULL,
  `player_speed` int(2) NOT NULL,
  `player_defense` int(2) NOT NULL,
  `player_finish` int(2) NOT NULL,
  `player_kickingpower` int(2) NOT NULL,
  `academy_code` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `player_name`, `player_Age`, `player_image`, `Position`, `player_length`, `player_weight`, `player_attacking_power`, `player_speed`, `player_defense`, `player_finish`, `player_kickingpower`, `academy_code`) VALUES
(1, '2313', 12, 'playerimages/IMG_2440 copy.jpg', 'nmm,', 12, 11, 12, 15, 24, 23, 5, 0),
(2, '2313', 12, 'http://192.168.56.1/simple_project/playerimages/2.jpg', 'nmm,', 12, 11, 12, 15, 24, 23, 5, 0),
(3, 'test', 15, '', 'center', 9, 9, 8, 8, 8, 8, 7, 0),
(5, 'test', 15, '', 'center', 9, 9, 8, 8, 8, 8, 7, 0),
(6, 'test', 15, '', 'center', 9, 9, 8, 8, 8, 8, 7, 0),
(7, 'test', 15, '?', 'center', 9, 9, 8, 8, 8, 8, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `players_videos`
--

CREATE TABLE `players_videos` (
  `player_id` int(3) NOT NULL,
  `academy_code` int(3) NOT NULL,
  `player_videos` varchar(250) NOT NULL,
  `number_of_likes` int(6) NOT NULL,
  `video_text` varchar(500) NOT NULL,
  `video_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players_videos`
--

INSERT INTO `players_videos` (`player_id`, `academy_code`, `player_videos`, `number_of_likes`, `video_text`, `video_number`) VALUES
(1, 0, 'playervideos/intro.mp4', 0, 'amazing video!!', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Academy_code` (`Academy_code`),
  ADD UNIQUE KEY `Academy_email` (`Academy_email`),
  ADD UNIQUE KEY `Academy_email_2` (`Academy_email`);

--
-- Indexes for table `normal_users`
--
ALTER TABLE `normal_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_email_2` (`user_email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `Academy_code` (`academy_code`);

--
-- Indexes for table `players_videos`
--
ALTER TABLE `players_videos`
  ADD PRIMARY KEY (`academy_code`,`player_videos`),
  ADD UNIQUE KEY `video_number` (`video_number`),
  ADD KEY `player_id` (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy`
--
ALTER TABLE `academy`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `normal_users`
--
ALTER TABLE `normal_users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `players_videos`
--
ALTER TABLE `players_videos`
  MODIFY `video_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`Academy_code`) REFERENCES `academy` (`Academy_code`);

--
-- Constraints for table `players_videos`
--
ALTER TABLE `players_videos`
  ADD CONSTRAINT `players_videos_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
