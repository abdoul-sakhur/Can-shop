-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 03:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercelaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sarba', 'sarba@gmail.com', '00000', '2024-01-25 16:33:46', '2024-01-25 16:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'vêtements', '2024-01-01 14:12:21', '2024-01-01 14:12:21'),
(2, 'Chaussures', '2024-01-01 14:18:15', '2024-01-01 14:18:15'),
(3, 'Accessoires', '2024-01-01 14:19:02', '2024-01-01 14:19:02'),
(4, 'electroniques', '2024-01-01 14:19:15', '2024-01-01 14:19:15'),
(5, 'Maquillages', '2024-01-01 14:19:28', '2024-01-01 14:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(7, 1, 13, NULL, NULL),
(8, 1, 14, NULL, NULL),
(9, 1, 15, NULL, NULL),
(10, 1, 16, NULL, NULL),
(11, 1, 17, NULL, NULL),
(12, 1, 18, NULL, NULL),
(13, 1, 19, NULL, NULL),
(14, 1, 20, NULL, NULL),
(15, 1, 21, NULL, NULL),
(16, 1, 22, NULL, NULL),
(17, 1, 23, NULL, NULL),
(18, 3, 24, NULL, NULL),
(19, 3, 25, NULL, NULL),
(20, 3, 26, NULL, NULL),
(21, 3, 27, NULL, NULL),
(22, 2, 28, NULL, NULL),
(23, 2, 29, NULL, NULL),
(24, 3, 30, NULL, NULL),
(25, 2, 31, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comments` longtext NOT NULL,
  `notes` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `notes`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '3', 10, '2024-01-21 23:05:59', '2024-01-21 23:05:59'),
(3, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '1', 9, '2024-01-21 23:17:19', '2024-01-21 23:17:19'),
(4, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '1', 9, '2024-01-21 23:21:24', '2024-01-21 23:21:24'),
(5, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '1', 9, '2024-01-21 23:24:57', '2024-01-21 23:24:57'),
(6, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '1', 9, '2024-01-21 23:25:50', '2024-01-21 23:25:50'),
(7, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '1', 9, '2024-01-21 23:27:15', '2024-01-21 23:27:15'),
(8, 'Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.', '1', 9, '2024-01-21 23:29:25', '2024-01-21 23:29:25');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_31_042214_create_categories_table', 2),
(6, '2023_12_31_202223_create_categories_table', 3),
(7, '2024_01_01_144651_create_categories_table', 4),
(8, '2024_01_01_172923_create_products_table', 5),
(9, '2024_01_02_012228_create_product_category_table', 6),
(10, '2024_01_02_163049_create_category_product_table', 7),
(11, '2024_01_02_195804_add_status_to_products', 8),
(12, '2024_01_02_233401_create_sliders_table', 9),
(13, '2024_01_17_001512_create_utilisateurs_table', 10),
(14, '2024_01_19_120745_create_comments_table', 11),
(15, '2024_01_21_142109_create_comments_table', 12),
(16, '2024_01_21_151317_create_comments_table', 13),
(17, '2024_01_21_230154_create_comments_table', 14),
(18, '2024_01_25_163949_create_admin_users_table', 15),
(19, '2024_01_30_153309_add_role_column_to_users_table', 16),
(20, '2024_02_09_113544_create_payments_table', 17),
(21, '2024_02_10_130349_add_column_to_payment', 18);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `heure_livraison` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` longtext NOT NULL,
  `somme_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `created_at`, `updated_at`, `status`) VALUES
(13, 'Burkina', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/TWuyZSKRFV9bP0aXauD1LNN1uojuSfuBACD8RGLR.png', '2024-01-06 13:09:00', '2024-01-06 13:09:00', 1),
(14, 'Burkina faso', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/Q8j9CMdkeNoub5LmcoB92pXxJJZubyG04A4DcWXM.png', '2024-01-06 13:09:23', '2024-01-06 13:09:24', 1),
(15, 'Burkina faso', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/Q0o2dNDXjVKmQPhWWwZJMtukMojblY8T3lMVim58.png', '2024-01-06 13:09:49', '2024-01-06 13:09:49', 1),
(16, 'Cote d\'Ivoire', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/j2Ux910DNeDbbRID138GRqSoVe3lahx3iN77PLXK.png', '2024-01-06 13:10:17', '2024-01-06 13:10:17', 1),
(17, 'Cote d\'ivoire', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/mHq9KAnNbJBT1clyBrfkAMbPYpFcAcDCm798slrW.png', '2024-01-06 13:10:48', '2024-01-06 13:10:48', 1),
(18, 'Cite d\'ivoire', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/3GerjNPLj77XaabVyiEQDBgzNrrfCFAdmHWDVxBt.png', '2024-01-06 13:11:17', '2024-01-06 13:11:17', 1),
(19, 'Mali', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/GmPRRM2TibfeNv8plQVrpMABnxrQhMhj8hGPl5BW.png', '2024-01-06 13:11:46', '2024-01-06 13:11:47', 1),
(20, 'Mali', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/Jxf5SRUywYn1EmMUhugxJrF99vNnLX1J6F6ss2g7.png', '2024-01-06 13:12:10', '2024-01-06 13:12:10', 1),
(21, 'Maroc', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/sm5BcPViV9aPuHz6xCqV4ptaIT0ZH0pXJJB4MfI0.png', '2024-01-06 13:16:35', '2024-01-06 13:16:35', 1),
(22, 'Maroc', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/6jkETy2TGSiqYErSy34oC2wsHGbDbu88MwLfoMoV.png', '2024-01-06 13:17:13', '2024-01-06 13:17:13', 1),
(23, 'Senegal', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '60000', 'UploadedImage/wn6T6xxyiD14OwfJjLGvYlVKaF3JXKwDmkrz7L1o.png', '2024-01-06 13:53:46', '2024-01-06 13:53:46', 1),
(24, 'Chapeau', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '10000', 'UploadedImage/n59vbeePvZ5JXFPFoQHr9y1gxErPlVTazHhSVQuk.png', '2024-01-06 13:54:32', '2024-01-06 13:54:32', 1),
(25, 'Chapeau', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '10000', 'UploadedImage/nfYRnztfGSz1oYDHSfohYJqpOytzKb99AazKNgtl.png', '2024-01-06 13:54:57', '2024-01-06 13:54:58', 1),
(26, 'Chapeau', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '10000', 'UploadedImage/GXfb45YT5Yw6GuNglRdO9EGkJ59miUT7Xrz4bjqS.png', '2024-01-06 13:55:25', '2024-01-06 13:55:25', 1),
(27, 'claquette', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '12000', 'UploadedImage/HR7k9E18G5kzfDOSFNL2VJe0hlYUOMcqSd7NGjBg.png', '2024-01-06 13:55:51', '2024-01-06 13:55:51', 1),
(28, 'claquette', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '12000', 'UploadedImage/4UC2xXn5Q5VuJiMLzZF5sfF6jhnUBNtQ4dCnA7lu.png', '2024-01-06 13:56:20', '2024-01-06 13:56:20', 1),
(29, 'chaussures', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '12000', 'UploadedImage/CblCIVyEDVHG9mXF3yTlBTa73Rb7V6jbrX7JnHTg.png', '2024-01-06 13:56:53', '2024-01-06 13:56:53', 1),
(30, 'bacelet', 'Le vêtement incontournable pour un amoureux du football? C\'est bien évidement le maillot de foot! vous trouverez l\'une des plus grandes sélections de maillots de football au monde, avec des équipes venant de toute la planète.', '3000', 'UploadedImage/clZq9VqeboTa5VHbG7NymT2RiRBfTXStFz1QQC1d.png', '2024-01-06 13:57:15', '2024-01-06 13:57:15', 1),
(31, 'aboke', 'llsdakklakkkfkjf', '200000', 'UploadedImage/iPCClSCjsMhaLMRGiSMsU8MXKipAPNOMSuFpUCYg.png', '2024-01-25 13:21:09', '2024-01-25 13:21:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description1` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `description1`, `description2`, `image`, `created_at`, `updated_at`) VALUES
(1, 'horizontales orange, blanc et vert, qui sont les couleurs emblématiques du drapeau ivoirien', 'd\'Ivoire ainsi que les logos des sponsors peuvent également être présents sur le maillot, ajoutant une touche distinctive.', 'UploadedImage/rlAIdWjEs2TwMPPuYugbGgWdijqziZ2eO5TdpHQG.jpg', '2024-01-02 23:51:09', '2024-01-03 00:32:41'),
(2, 'horizontales orange, blanc et vert, qui sont les couleurs emblématiques du drapeau ivoirien', 'd\'Ivoire ainsi que les logos des sponsors peuvent également être présents sur le maillot, ajoutant une touche distinctive.', 'UploadedImage/K304XjGgGJu2lscGqxvDgo379Mbcee5VnG3a2O9S.png', '2024-01-02 23:52:27', '2024-01-06 22:30:08'),
(3, 'horizontales orange, blanc et vert, qui sont les couleurs emblématiques du drapeau ivoirien', 'd\'Ivoire ainsi que les logos des sponsors peuvent également être présents sur le maillot, ajoutant une touche distinctive.', 'UploadedImage/HhXoF0L9C3AcZXxTyO5USoSNm8zP7pa5VHgBWpEI.png', '2024-01-02 23:54:03', '2024-01-06 22:29:43'),
(4, 'Le maillot est conçu pour représenter la fierté nationale et l\'esprit d\'équipe, avec des éléments graphiques dynamiques et des détails', 'Le maillot est conçu pour représenter la fierté nationale et l\'esprit d\'équipe, avec des éléments graphiques dynamiques et des détails', 'UploadedImage/hLjRvWWFZZRQvfNGLQCeOCRT58uUjWzCg6n4mdyG.png', '2024-01-02 23:54:38', '2024-01-06 22:29:28'),
(7, 'Le maillot de football de la Côte d\'Ivoire arbore généralement des couleurs vives et distinctives qui reflètent l\'identité nationale du pays', 'Le maillot de football de la Côte d\'Ivoire arbore généralement des couleurs vives et distinctives qui reflètent l\'identité nationale du pays', 'UploadedImage/YtDBcwOviI7DAWBDvJmrr5hsQRyUbTTDlXV8bNuC.png', '2024-01-02 23:57:06', '2024-01-06 22:28:48'),
(8, 'Le maillot de football de la Côte d\'Ivoire arbore généralement des couleurs vives et distinctives qui reflètent l\'identité nationale du pays', 'Le maillot de football de la Côte d\'Ivoire arbore généralement des couleurs vives et distinctives qui reflètent l\'identité nationale du pays', 'UploadedImage/yNhEGYTqqDMxc1a7VTBmaB6x0NEQAR0Nk7iQE2wQ.png', '2024-01-03 00:30:53', '2024-01-06 22:27:13'),
(9, 'sac de sport est essentiel pour les joueurs afin de transporter leur équipement, y compris les chaussures, les vêtements d\'entraînement, les bouteilles d\'eau, etc', 'sac de sport est essentiel pour les joueurs afin de transporter leur équipement, y compris les chaussures, les vêtements d\'entraînement, les bouteilles d\'eau, etc', 'UploadedImage/3xerRqEiNNv2PbzHZ3nCcG7plPO4IOeqcLPH5K7A.png', '2024-01-07 10:38:03', '2024-01-07 10:38:04'),
(10, 'sac de sport est essentiel pour les joueurs afin de transporter leur équipement, y compris les chaussures, les vêtements d\'entraînement, les bouteilles d\'eau, etc', 'sac de sport est essentiel pour les joueurs afin de transporter leur équipement, y compris les chaussures, les vêtements d\'entraînement, les bouteilles d\'eau, etc', 'UploadedImage/n3tFsXE7nEgV8eKufM4k6ptODqPPjxWR0kSim9sG.png', '2024-01-07 10:38:43', '2024-01-07 10:38:43'),
(11, 'sac de sport est essentiel pour les joueurs afin de transporter leur équipement, y compris les chaussures, les vêtements d\'entraînement, les bouteilles d\'eau, etc', 'sac de sport est essentiel pour les joueurs afin de transporter leur équipement, y compris les chaussures, les vêtements d\'entraînement, les bouteilles d\'eau, etc', 'UploadedImage/TBqc45uXDToCA1Cd2OxRuJHLsnnCdwFo1Qj2J9ed.jpg', '2024-01-07 10:39:00', '2024-01-07 10:39:00');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(5, 'sarba', 'sarba@gmail.com', NULL, '$2y$12$i/RjiTK12g6VyGvFOFHASOfWQMIBO.a0ixKFfQYzdZiHfH1sjJZkC', NULL, '2024-01-18 11:03:31', '2024-01-18 11:03:31', 'admin'),
(8, 'sarba', 'sar@g.com', NULL, '$2y$12$har6xXEoRZRb9pKbIzFmWebCdZbmDMY2jUF7rb4ER2t2xhCaNGzje', NULL, '2024-01-21 20:36:10', '2024-01-21 20:36:10', NULL),
(9, 'konfe', 'kon@g.com', NULL, '$2y$12$Ew9.MyylounDJq8VJSWQ5e5oFvYhOUXcS4NBm7EeeIZ0e5PwlQfAy', NULL, '2024-01-21 20:38:25', '2024-01-21 20:38:25', 'admin'),
(10, 'bakouan', 'ba@gmail.com', NULL, '$2y$12$KA5byiQAcqx32lfGr8.r9OlG6NKQ8CB0pPYXcwGoQPJtISvtFOgRi', NULL, '2024-01-21 20:40:02', '2024-01-21 20:40:02', 'admin'),
(11, 'ousmane', 'ousmane@gmail.com', NULL, '$2y$12$vIDZQJahAsW0FwldHqV7Tu7KpyC26AKXZolHZ4En6MT/datXIOl1y', NULL, '2024-05-12 23:40:15', '2024-05-12 23:40:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
