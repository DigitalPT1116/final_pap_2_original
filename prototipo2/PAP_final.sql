-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jun-2022 às 18:32
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_accounts`
--

DROP TABLE IF EXISTS `admin_accounts`;
CREATE TABLE IF NOT EXISTS `admin_accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(10, 'rodrigo', '$2y$10$EW3lJQhda2Ondy754JJnbe2GRoc9SSKuSV32vL.b7MzUvu7g2X5Fm', 'IRbW8Z0iCcwMkS5a', '$2y$10$aTy8YARWwDkm36400q1CNOfqvsmbNFCotvE1CJyxNBb0Dpr6yzZee', '2022-06-25 14:47:57', 'super'),
(11, 'rocha', '$2y$10$cVdwUPq4Za3bIIqUVEc5zOyPi/MfIbXwA6hL6oLQGYk5iDrBdVZBW', NULL, NULL, NULL, 'admin'),
(12, 'joao', '$2y$10$n5nThZN9lW9es4FeaYsuFeN1JLv5kBcFhqcv9fPhB9G7DFqn43Iwe', NULL, NULL, NULL, 'super'),
(13, 'Ana', '$2y$10$kYxfCFNkWYO5aFS0EbgRuu3FJFnO/s/4lDKTZvdCPy9xkbMfinmxi', NULL, NULL, NULL, 'admin');


--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_21_083316_create_videos_table', 1),
(2, '2022_03_21_084037_create_playlists_table', 1),
(3, '2022_03_21_084311_create_users_table', 1),
(4, '2022_03_21_084750_create_tags_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id` bigint UNSIGNED NOT NULL,
  `playlist-name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_video` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `playlists_fk_video_foreign` (`fk_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `playlists`
--

INSERT INTO `playlists` (`id`, `playlist-name`, `fk_video`, `created_at`, `updated_at`) VALUES
(1, 'teste', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fk_playlist` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `dateofbirth`, `email`, `password`, `level`, `fk_playlist`, `created_at`, `updated_at`) VALUES
(1, 'rochinha2003', 'Rodrigo Rocha Soares', '1998-02-05', 'rochagamer771@gmail.com', '123456', '1', 0, NULL, NULL),
(2, 'jotap', 'Jo', '2004-05-01', 'jotape@gmail.com', 'jotape', '0', 0, NULL, NULL),
(3, 'digita32', 'Digital Personal Trainer', '2003-05-25', 'digita32@gmail.com', 'digita32', '0', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `link`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Ganhar braços', 'Este é apenas o teste numero 1', 'VP56-dVhe54', 'braços, musculação', '2022-06-02 16:02:40', '2022-06-03 09:41:39'),
(2, 'Treinar ante braço', 'Este é apenas o teste numero 2', 'izIG8eZIQZc', 'antebraço, casa', '2022-06-03 09:42:33', NULL),
(3, 'Teste3', 'Este é apenas o teste numero 3', 'BEPp1ylJeno', 'Teste 3', '2022-06-03 09:45:19', NULL),
(4, 'Teste 4', 'isto é apenas o teste 4', 'MWs4E45Zg2w', '44444', '2022-06-03 10:48:54', NULL),
(6, 'wdwd', 'wdwwd', 'wdwddw', '121', '2022-06-17 07:20:23', NULL),
(7, 'teste333', 'dwtqnjlwwjhghwdqdwqdwjhjqdjqdknkefnkrn', 'https://www.youtube.com/watch?v=BYSsJ55ZUV8', '2222', '2022-06-27 13:09:55', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
