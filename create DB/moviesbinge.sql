-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 04:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesbinge`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlistcontent`
--

CREATE TABLE `playlistcontent` (
  `imdbid` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `playlistname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `playlistname` varchar(100) NOT NULL,
  `public` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `user_name`, `password`) VALUES
(4, 'charchithowitzer@gmail.com', 'charchit', '$2y$10$Ky.iw3fW80muZBRYZeLSpOrrcVkg1pIAw6xhF5Gz97uN3nLsmPj7u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlistcontent`
--
ALTER TABLE `playlistcontent`
  ADD PRIMARY KEY (`imdbid`,`id`,`playlistname`),
  ADD KEY `id` (`id`,`playlistname`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`,`playlistname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlistcontent`
--
ALTER TABLE `playlistcontent`
  ADD CONSTRAINT `playlistcontent_ibfk_1` FOREIGN KEY (`id`,`playlistname`) REFERENCES `playlists` (`id`, `playlistname`);

--
-- Constraints for table `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `playlists_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
