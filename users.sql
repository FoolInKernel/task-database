-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2026 at 07:42 AM
-- Server version: 12.2.2-MariaDB
-- PHP Version: 8.5.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `created-at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pw`, `created-at`) VALUES
(7, 'fandi', '$2y$12$9ozWYUeAIo97nEWoqhQ1HO7as32qxPYj/wURURCkvWcw/v.vh57a.', '2026-04-23 09:38:48'),
(8, 'ali', '$2y$12$l6sjNZpoeU5LMHlQJoM5x.Jt0g.GBY7mY1N0auHG9VDD/6Ql7xOja', '2026-04-23 09:44:13'),
(9, 'ngab', '$2y$12$jnzldguogFpI/f4vSCMXIeAvG0ZBVzXVQ8XTGjCJC4OMqkxaAGJbC', '2026-04-24 07:12:10'),
(10, 'fuwan', '$2y$12$wVJqRyDQONjkcn5aQDB5YOWgUr8cnrfZKmymsv7t1MoGcSa0VWX0G', '2026-04-24 07:37:05'),
(11, 'Pangestu', '$2y$12$oPacWyohNKxGHLh2cGWyi.y3K78pnokMu2AbBjlDFitOMHA/g90Lq', '2026-04-24 07:46:41'),
(12, 'pang', '$2y$12$nyG3c9J/SZw9inyskCsL/ODnYkiogVM7cjwV7bPMMw.s54OG43Qde', '2026-04-24 07:55:35'),
(13, 'hah', '$2y$12$3RBJr.HvrAKc7qOpXyIGQOg4W8gXqRbCq1Ju/pE7KQrOJSdLuxONK', '2026-04-24 08:42:06'),
(14, 'panggg', '$2y$12$pQg/hFqmd8l2LXp3STj5F.jdmwj.F3xkOx5g/x5dySJ7PIvqCaFwK', '2026-04-27 07:40:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
