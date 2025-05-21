-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indpcorg_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Blog test', '<p>We are the Indian Documentary Photo Collective, a passionate group dedicated to fostering and celebrating the vibrant visual culture of India. Our collective was born out of a simple yet profound vision: to bring documentary practices to every corner of this diverse nation, inspiring a deeper connection to storytelling through images and film.</p>', NULL, '2025-05-17 06:18:11', '2025-05-17 06:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `social_media_link` varchar(255) DEFAULT NULL,
  `image_section` varchar(255) DEFAULT NULL,
  `alignment` varchar(50) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `social_media_link`, `image_section`, `alignment`, `file_path`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Home page image banner', NULL, 'banner', NULL, '1747487018.jpg', '<p>fhgfhg gjhgj jhg gjgh</p>', '2025-05-15 00:00:00', '2025-05-17 13:03:38'),
(4, 'about', NULL, 'about_us', 'left', '1747661285.png', '<p>We take our mission to heart by organizing documentary film screenings across rural and semi-rural regions, as well as tier two and tier three cities. For us, it’s not just about showing films; it’s about creating spaces for dialogue, learning, and empowerment. These screenings bring together communities to experience stories that resonate with their lives and offer new perspectives on the world around them.</p><p>But we don’t stop there. We carry photography—powerful, thought-provoking imagery—directly to those who may never have the opportunity to leave their small villages or cities. By bringing visual narratives to their doorsteps, we hope to ignite a sense of wonder, curiosity, and cultural pride. We believe that these images have the potential to spark conversations and broaden horizons, no matter how distant the place.</p><p>&nbsp; Through our endeavors, we are also building a platform to promote the work of documentary photographers. We aim to nurture emerging talent and shine a spotlight on the unique voices capturing India’s vibrant stories.</p>', '2025-05-19 00:00:00', '2025-05-19 13:56:50'),
(5, 'InDPC Photo Award', NULL, 'our_products', NULL, '1747655120.jpg', NULL, '2025-05-19 00:00:00', '2025-05-19 11:45:20'),
(6, 'indpc Logo', NULL, 'logo', NULL, '1747636041.png', NULL, '2025-05-19 00:00:00', '2025-05-19 06:27:21'),
(7, 'gvgvjn', NULL, 'our_products', NULL, '1747647730.png', NULL, '2025-05-19 00:00:00', '2025-05-19 09:42:10'),
(8, 'about 2', NULL, 'about_us', 'right', '1747663219.png', '<h2>What We Do</h2><p>We take our mission to heart by organizing documentary film screenings across rural and semi-rural regions, as well as tier two and tier three cities. For us, it’s not just about showing films; it’s about creating spaces for dialogue, learning, and empowerment. These screenings bring together communities to experience stories that resonate with their lives and offer new perspectives on the world around them.</p><p>But we don’t stop there. We carry photography—powerful, thought-provoking imagery—directly to those who may never have the opportunity to leave their small villages or cities. By bringing visual narratives to their doorsteps, we hope to ignite a sense of wonder, curiosity, and cultural pride. We believe that these images have the potential to spark conversations and broaden horizons, no matter how distant the place.</p><p>Through our endeavors, we are also building a platform to promote the work of documentary photographers. We aim to nurture emerging talent and shine a spotlight on the unique voices capturing India’s vibrant stories.</p>', '2025-05-19 14:00:19', '2025-05-19 14:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_15_033124_create_images_table', 2),
(6, '2025_05_17_103052_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('riyaojha2013@gmail.com', '$2y$10$jkw1dohsGMaKMIcN8tpLzugKaoCPQVbkE18ppYowABOKPVApLFiyK', '2023-02-26 10:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'susmita', 'riyaojha2013@gmail.com', NULL, '$2y$10$.UoCZhxz7k1woOjIPAuV0eRZ18JaUSgvHToSPEZF7zEmv1xOQ7N0q', NULL, '2023-02-19 03:53:17', '2023-02-19 03:53:17'),
(2, 'indpc35', 'indpc35@gmail.com', NULL, '$2y$10$rMxkfPNmWNoAwKk2.to6cOechAATNgWqslnJzLK/XyCMPzC3uJ6Li', NULL, '2025-05-13 22:44:38', '2025-05-13 22:44:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
