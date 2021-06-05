-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 06:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oblast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zanr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glumci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reziser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sadrzaj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `naziv`, `oblast`, `slika`, `url`, `zanr`, `glumci`, `reziser`, `sadrzaj`) VALUES
(1, 'John Wick', 'akcija', 'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg', 'https://www.youtube.com/embed/C0BMx-qxsP4', 'akcija', 'Keanu Reeves', 'Chad Stahelski', 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...'),
(2, 'Godfather', 'triler', 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY1200_CR107,0,630,1200_AL_.jpg', 'https://www.youtube.com/embed/sY1S34973zA', 'triler', 'Al Pacino, Marlon Brando, James Caan', 'Francis Ford Copola', 'U filmu se radi o americko-italijanskoj porodici Corleone, koja preuzima primat, i udeo ostalih porodica u mafijaskim poslovima u Nju Jorku, i na Siciliji.'),
(3, 'Ice Age', 'avantura', 'https://m.media-amazon.com/images/M/MV5BMmYxZWY2NzgtYzJjZC00MDFmLTgxZTctMjRiYjdjY2FhODg3XkEyXkFqcGdeQXVyNjk1Njg5NTA@._V1_UY1200_CR85,0,630,1200_AL_.jpg', 'https://www.youtube.com/embed/i4noiCRJRoE', 'avantura', 'animirani film', 'Carlos Saldanha', 'Ice Age predstavlja animirani film, u kojem su predstavljene zivotinje, sa ljudskim osobinama govora, kao i specificnog karaktera.'),
(4, 'Pompeii', 'akcija', 'https://upload.wikimedia.org/wikipedia/en/thumb/5/5d/Pompeii-poster.jpg/220px-Pompeii-poster.jpg', 'https://www.youtube.com/embed/t6TRwfxDICM', 'akcija', 'Kit Haringtton, Jessica Lucas', 'Paul Anderson', 'Pompeii is a 2014 romantic historical disaster film produced and directed by Paul W. S. Anderson. An international co-production between the United States, Germany and Canada, it is inspired by and based on the eruption of Mount Vesuvius in 79 A.D. '),
(5, 'The Amazing Spiderman', 'akcija', 'https://i.pinimg.com/originals/15/e7/cd/15e7cdf52d5e587c2f3bf46c7f2a2d17.jpg', 'https://www.youtube.com/embed/-tnxzJ0SSOw', 'akcija', 'Andrew Garfield, Emma Stone', 'Marc Weeb', 'The Amazing Spiderman je film o srednjoskolcu Peteru Parkeru, koji je izvrstan ucenik. Jednog dana, prilikom posete Oscorp Labs, ujeda ga pauk razvijan u laboratorijskim uslovima.'),
(6, 'Inception', 'akcija', 'https://miro.medium.com/max/800/1*Aop38tMyxWjGowYDVX4Nqw@2x.jpeg', 'https://www.youtube.com/embed/YoHD9XEInc0', 'akcija', 'Leonardo Di Caprio, Cillian Murphy, Tom Hardy', 'Christopher Nolan', 'Directed by Christopher Nolan. With Leonardo DiCaprio, Joseph Gordon-Levitt, Elliot Page, Ken Watanabe. A thief who steals corporate secrets through the use ...');

-- --------------------------------------------------------

--
-- Table structure for table `kartas`
--

CREATE TABLE `kartas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_osoba` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projekcija_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kartas`
--

INSERT INTO `kartas` (`id`, `ime`, `prezime`, `broj_osoba`, `email`, `projekcija_id`) VALUES
(1, 'marko', 'markic', 3, 'markic@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_03_175754_create_films', 1),
(5, '2021_02_03_180251_create_projekcijas', 1),
(6, '2021_02_03_180343_alter_projekcijas', 1),
(7, '2021_02_03_182207_create_kartas', 1),
(8, '2021_02_03_182301_alter_kartas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projekcijas`
--

CREATE TABLE `projekcijas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vreme` date NOT NULL,
  `sala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` decimal(8,2) NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projekcijas`
--

INSERT INTO `projekcijas` (`id`, `vreme`, `sala`, `cena`, `film_id`) VALUES
(1, '2021-02-17', 'sala b103', '120.00', 1),
(2, '2021-02-10', '015', '320.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartas`
--
ALTER TABLE `kartas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kartas_projekcija_id_foreign` (`projekcija_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projekcijas`
--
ALTER TABLE `projekcijas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekcijas_film_id_foreign` (`film_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kartas`
--
ALTER TABLE `kartas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projekcijas`
--
ALTER TABLE `projekcijas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kartas`
--
ALTER TABLE `kartas`
  ADD CONSTRAINT `kartas_projekcija_id_foreign` FOREIGN KEY (`projekcija_id`) REFERENCES `projekcijas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projekcijas`
--
ALTER TABLE `projekcijas`
  ADD CONSTRAINT `projekcijas_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
