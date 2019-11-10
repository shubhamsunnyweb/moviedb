-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 08:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_favorite`
--

CREATE TABLE `movie_favorite` (
  `id` int(11) NOT NULL,
  `poster_path` varchar(255) DEFAULT NULL,
  `popularity` varchar(255) DEFAULT NULL,
  `vote_count` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `media_type` varchar(255) DEFAULT NULL,
  `movie_id` varchar(255) DEFAULT NULL,
  `adult` varchar(255) DEFAULT NULL,
  `backdrop_path` varchar(255) DEFAULT NULL,
  `original_language` varchar(255) DEFAULT NULL,
  `original_title` varchar(255) DEFAULT NULL,
  `genre_ids` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `vote_average` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `status` enum('TRUE','FALSE') NOT NULL DEFAULT 'TRUE',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_favorite`
--

INSERT INTO `movie_favorite` (`id`, `poster_path`, `popularity`, `vote_count`, `video`, `media_type`, `movie_id`, `adult`, `backdrop_path`, `original_language`, `original_title`, `genre_ids`, `title`, `vote_average`, `overview`, `release_date`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'https://image.tmdb.org/t/p/w500//rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg', '48.597', '12475', '', 'movie', '284053', '', 'https://image.tmdb.org/t/p/w500//kaIfm5ryEOwYg8mLbq8HkPuM1Fo.jpg', 'en', 'Thor: Ragnarok', '28,12,35,14', 'Thor: Ragnarok	', '7.5', 'Thor is imprisoned on the other side of the universe and finds himself in a race against time to get back to Asgard to stop Ragnarok, the destruction of his home-world and the end of Asgardian civilization, at the hands of an all-powerful new threat, the ruthless Hela.', '2017-11-03', 'TRUE', 1, '2019-11-10 05:10:53', NULL),
(2, 'https://image.tmdb.org/t/p/w500//c24sv2weTHPsmDa7jEMN0m2P3RT.jpg', '44.705', '12857', '', 'movie', '315635', '', 'https://image.tmdb.org/t/p/w500//vc8bCGjdVp0UbMNLzHnHSLRbBWQ.jpg', 'en', 'Spider-Man: Homecoming', '28,12,18,878', 'Spider-Man: Homecoming', '7.4', 'Following the events of Captain America: Civil War, Peter Parker, with the help of his mentor Tony Stark, tries to balance his life as an ordinary high school student in Queens, New York City, with fighting crime as his superhero alter ego Spider-Man as a new threat, the Vulture, emerges.', '2017-07-07', 'TRUE', 1, '2019-11-10 05:51:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shubhamsunnyweb@gmail.com', '$2y$10$k0FgEf8nxqgFv79wVnIyVu9W8fDfbm2J5vs6TJ3hgP0SWk4a3Jrsa', '2019-11-08 10:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shubham', 'shubhamsunnyweb@gmail.com', NULL, '$2y$10$JZC5b97i4fWys9pDuOvHFO91Vr3SgFW0JWaUZI/5P8NEiTr7fSXjS', 'ZDpOfNZ5Knwv2AT83g3dU2q9GY3zzOWSEVWz10nWsXGWzeuwHpX1w82VG6dm', '2019-11-06 12:52:21', '2019-11-06 12:52:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_favorite`
--
ALTER TABLE `movie_favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie_favorite`
--
ALTER TABLE `movie_favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
