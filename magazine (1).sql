-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 11 2017 г., 10:32
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magazine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `title`, `description`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(62, 4, 'Мужская одежда', 'Мужская одежда Мужская одеждаМужская одежда Мужская одеждаМужская одежда Мужская одеждаМужская одежда Мужская одеждаМужская одежда Мужская одежда', 'photo/hN9M8tO7SGlEgMhoSQB8frxZ9kSSqmvqfdXwYCvj.jpeg', '2017-08-17 07:34:22', '2017-08-18 06:45:12', NULL),
(63, 4, 'Женская одежда', 'Женская одежда Женская одежда', 'photo/mVNJAcw5t7UKuWprZVbwGFSLOlujNoF6RxNIjti3.jpeg', '2017-08-17 08:10:50', '2017-08-17 08:10:50', NULL),
(64, 4, 'Женская обувь', 'Женская обувь Женская обувь', 'photo/Up73Sp5pc8dfOzLmZRtzVakZgelsNfgbNuv38cZa.jpeg', '2017-08-17 08:12:17', '2017-08-17 08:12:17', NULL),
(65, 4, 'Мужская обувь', 'Мужская обувь Мужская обувь', 'photo/8359J2Bwf3lx78S5a4GOBDC0LcGn30mATH45SJxQ.jpeg', '2017-08-17 08:12:36', '2017-08-17 08:12:36', NULL),
(70, 1, 'aaaaaaaaaa', 'sdsdsddddddddddddd', 'photo/jShZLrcn75htWozPJ3qHQ2OBOnKFPQxY2pQIzsQz.jpeg', '2017-08-17 12:40:35', '2017-08-19 10:35:45', '2017-08-19 13:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `cat_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_09_134435_create_clothers_table', 2),
(4, '2017_08_09_141910_create_categories_table', 2),
(5, '2017_08_09_142210_create_items_table', 2),
(6, '2017_08_12_103324_add_column_deleted_at_categories', 3),
(7, '2017_08_12_105410_add_column_delated_at_items', 4),
(8, '2017_08_14_105726_add_column_user_id', 5),
(9, '2017_08_16_092837_add_column_photo_categories', 6),
(10, '2017_08_20_113849_add_column_is_admin_users', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'bandarsiri', 'bandarsiri8@gmail.com', '$2y$10$MapZxjd5eXCXZnmywY6K0eDk6kmR1tEPZuC0x9kW1rACnidvS5BBK', 'aHQjbKLLzsAdUWEuEkHaGvwRypw8OPcdrdrFJjgqWeL4sEEFz9i9kUbmLqxZ', '2017-08-07 13:03:17', '2017-08-07 13:03:17', 0),
(2, 'ali', 'ali@ali.fr', '$2y$10$FXax8AiNaVtYPNn8FJifY.Qu.2u2zuAENDFFF.mfVrfPEHON6ebxW', 'M9940iJeSClwtJAthxjcvLX1v2RMZuJi0ugyTKvm8My9FXoxFOIgLsvc3d29', '2017-08-08 13:22:52', '2017-08-08 13:22:52', 0),
(3, 'ali', 'ali@ali.com', '$2y$10$RTJttcYVyUjir.bgJWIYfeCHp7mHxpEISQgHnstPd1cVcPcOCL0sy', 'FE1i1HrMAhiNSJWdxy7LuFsPVuv2dwvsWuPZ2H4JNdqHcLssU3KAiskJUIIc', '2017-08-14 10:12:57', '2017-08-14 10:12:57', 0),
(4, 'admin', 'bil.man2018@gmail.com', '$2y$10$YUI5Amd.p5tSBCUy8UfLc.OhHMzovZtzRpGE6ZEYZkVujFujTmxvG', 'g8tkYwL8mRxdGFYs6laoXgEAEQmbNr2NrReLwmU9nnBcfsnGuJs0f9r124y1', '2017-08-17 07:32:21', '2017-08-17 07:32:21', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
