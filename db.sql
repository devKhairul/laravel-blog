-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2021 at 08:45 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lara_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ipsa', 'laborum-pariatur-laborum-quas', '2021-08-17 00:16:35', '2021-08-17 00:16:35');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_08_13_161724_create_posts_table', 1),
(5, '2021_08_13_175638_create_categories_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES
(1, 1, 1, 'Libero eum aut inventore.', 'delectus-tempore-totam-ut-est-nesciunt-sint', 'Molestias quidem nihil expedita reiciendis reprehenderit vel alias.', 'Dolorem fugiat est placeat. Repudiandae architecto sapiente repellendus esse beatae id. Voluptatum fuga et sit officia aliquid.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(2, 1, 1, 'Voluptas necessitatibus sed aut architecto aut tempora.', 'dolorem-ad-voluptates-et-facilis-non-rerum', 'In et dolorem in maxime.', 'Molestias est accusamus cum voluptatem rem minus ut aliquid. Ad alias quibusdam aperiam fugit ea iure ea. Nisi tenetur pariatur minus officiis omnis labore.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(3, 1, 1, 'Voluptates temporibus velit dolorum.', 'omnis-sed-vel-pariatur-ipsum-et', 'Expedita sed ipsum ut placeat quasi et.', 'Ex suscipit recusandae incidunt aut. Officiis est molestias enim dolor quia repudiandae rerum veniam.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(4, 1, 1, 'Excepturi voluptas et vel et doloribus cumque.', 'in-maxime-facere-exercitationem-nesciunt', 'Maxime quaerat esse quo corrupti et dolorum.', 'Atque aliquam et sunt aut natus doloremque unde. Veritatis omnis est suscipit ullam architecto fuga aut. Nihil amet qui laboriosam tenetur ut et nihil. Eum quaerat qui iure est perferendis omnis nulla omnis.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(5, 1, 1, 'A excepturi qui labore quia est placeat.', 'non-quia-odio-explicabo-nesciunt-soluta', 'Sed repudiandae quis sapiente officia odit.', 'Est consequatur ipsum perspiciatis iusto iusto laudantium. Nobis impedit molestiae amet distinctio dolore deleniti voluptate. Reprehenderit necessitatibus aut porro velit sed dolore non.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(6, 1, 1, 'Ipsa repellat ut quo ipsam voluptates velit.', 'iusto-ipsa-eveniet-voluptatem-accusantium-animi-aliquam-sunt', 'Cupiditate placeat incidunt blanditiis.', 'Natus fugiat et ut et. Consectetur totam quaerat maxime ducimus.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(7, 1, 1, 'Nihil blanditiis beatae molestiae sapiente quis quo atque.', 'animi-vitae-non-et-quis-eum-incidunt', 'Quia reprehenderit temporibus et iure a vel.', 'Consectetur sint est mollitia asperiores similique soluta. Ducimus omnis velit fugit et. Incidunt aut et rerum quae recusandae at nihil. Recusandae sint officia molestiae ut est deleniti.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(8, 1, 1, 'Odit dolorum expedita minima qui inventore eum.', 'blanditiis-vitae-temporibus-voluptatem-maxime-a', 'Hic non quia ipsum ipsam.', 'Ut repudiandae et dolore. Consequatur est et illum. Sed ipsum maxime voluptas nesciunt dolorem.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(9, 1, 1, 'Officiis sunt asperiores magnam voluptas deleniti.', 'enim-sunt-molestiae-perspiciatis-eos-ut-omnis', 'Qui sequi accusantium ea eos amet quo et.', 'Aliquam aut quo magni doloremque ex dolorem id. Maxime ea facere voluptatum sit. Explicabo accusantium mollitia consequatur exercitationem. Vitae quia voluptatibus natus id sequi eum qui.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(10, 1, 1, 'Provident aut quam sed natus.', 'soluta-aut-fugiat-est-vel-magni', 'Consequatur et et cupiditate molestias.', 'Et rerum deleniti ab et repellendus rerum aut. Ipsam omnis minima est nobis repudiandae nobis est eos. Quibusdam expedita aut fugiat cum rerum iure.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(11, 1, 1, 'Possimus ex odio maiores beatae vitae perspiciatis voluptatum.', 'inventore-fugiat-consequuntur-ratione', 'Mollitia rerum iste et nobis magni corrupti atque.', 'Iste id similique architecto quae molestiae. Sequi dolorem vitae veniam aspernatur in ut velit et. Ipsa animi fuga voluptates ipsa neque molestiae vel.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(12, 1, 1, 'Ipsam consequatur totam et quia sed.', 'velit-praesentium-consectetur-aut-non-deserunt', 'Dolore distinctio quis sapiente est quibusdam.', 'Illum impedit qui fugit doloremque. Pariatur sunt vero atque dignissimos qui minus nostrum eaque. Libero voluptatem nesciunt ut facilis quos.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(13, 1, 1, 'Animi asperiores dolores ut neque aut.', 'facilis-nam-corporis-inventore-quis-facere-qui-totam-id', 'Ut accusantium ipsam et necessitatibus exercitationem possimus nam in.', 'Eum repellendus harum voluptatem voluptas suscipit itaque culpa voluptas. Eius eius vel est eos omnis placeat. Nisi inventore consequatur qui ut nulla. Placeat fugit necessitatibus quisquam at.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(14, 1, 1, 'Quos voluptatum autem est omnis nostrum provident.', 'dolores-modi-qui-odit-illo-asperiores-autem', 'Ab alias officiis et iste hic alias.', 'Quas voluptatem enim iusto eos repellendus maxime corporis. Excepturi sint est ab quos nobis ut nam.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL),
(15, 1, 1, 'Blanditiis nihil voluptatibus sed quia rerum.', 'et-inventore-omnis-sequi-fuga', 'Ut nulla incidunt omnis et.', 'Quisquam vel voluptas omnis ab. Natus magnam sapiente aut ipsa voluptatum tenetur aliquid. Voluptates quae debitis laudantium magni beatae.', '2021-08-17 00:16:35', '2021-08-17 00:16:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khairul Alam', 'khairul', 'pbrakus@example.net', '2021-08-17 00:16:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1tVdXuhWib', '2021-08-17 00:16:35', '2021-08-17 00:16:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
