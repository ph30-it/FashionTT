-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 05:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectphp30`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `alias`, `created_at`, `updated_at`, `parent_id`) VALUES
(2, 'Adidas', 'adidas', NULL, NULL, 0),
(3, 'Converse', 'converse', NULL, NULL, 0),
(6, 'Áo Adidas', 'ao-adidas', NULL, NULL, 2),
(7, 'Giày Adidas', 'giay-adidas', NULL, NULL, 2),
(8, 'Áo Converse', 'ao-converse', NULL, NULL, 3),
(9, 'Giày Converse', 'giay-converse', NULL, NULL, 3),
(14, 'Nike', 'nike', NULL, NULL, 0),
(15, 'Jordan', 'jordan', NULL, NULL, 0),
(16, 'Giày NIKE', 'giay-nike', NULL, NULL, 14),
(17, 'Giày Jordan', 'giay-jordan', NULL, NULL, 15),
(18, 'Áo Nike', 'ao-nike', NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Đẹp', 10, 128, '2019-03-29 02:34:15', '2019-03-29 02:34:15'),
(2, 'alo', 10, 98, '2019-03-29 12:17:21', '2019-03-29 12:17:21'),
(3, 'zxc', 10, 98, '2019-04-01 12:54:30', '2019-04-01 12:54:30'),
(4, 'đẹp', 20, 116, '2019-04-01 15:20:01', '2019-04-01 15:20:01'),
(5, 'đẹp', 20, 116, '2019-04-01 15:20:08', '2019-04-01 15:20:08'),
(6, 'đẹp', 20, 116, '2019-04-01 15:20:34', '2019-04-01 15:20:34'),
(7, 'đẹp', 20, 116, '2019-04-01 15:20:35', '2019-04-01 15:20:35'),
(8, 'đẹp', 20, 116, '2019-04-01 15:20:36', '2019-04-01 15:20:36'),
(9, 'đẹp', 20, 116, '2019-04-01 15:20:38', '2019-04-01 15:20:38'),
(10, 'đẹp', 20, 116, '2019-04-01 15:20:39', '2019-04-01 15:20:39'),
(11, 'đẹp', 20, 116, '2019-04-01 15:20:41', '2019-04-01 15:20:41'),
(12, 'đẹp', 20, 116, '2019-04-01 15:20:42', '2019-04-01 15:20:42'),
(13, 'đẹp', 20, 116, '2019-04-01 15:20:43', '2019-04-01 15:20:43'),
(14, 'đẹp', 20, 116, '2019-04-01 15:20:48', '2019-04-01 15:20:48'),
(15, 'đẹp', 20, 116, '2019-04-01 15:20:49', '2019-04-01 15:20:49'),
(16, 'đẹp', 20, 117, '2019-04-01 15:35:29', '2019-04-01 15:35:29'),
(17, 'đẹp', 20, 117, '2019-04-01 15:35:30', '2019-04-01 15:35:30'),
(18, 'đẹp', 20, 117, '2019-04-01 15:35:31', '2019-04-01 15:35:31'),
(19, 'đẹp', 20, 117, '2019-04-01 15:35:32', '2019-04-01 15:35:32'),
(20, 'đẹp', 20, 117, '2019-04-01 15:35:32', '2019-04-01 15:35:32'),
(21, 'đẹp', 20, 117, '2019-04-01 15:35:33', '2019-04-01 15:35:33'),
(22, 'đẹp', 20, 117, '2019-04-01 15:35:35', '2019-04-01 15:35:35'),
(23, 'đẹp', 20, 117, '2019-04-01 15:35:36', '2019-04-01 15:35:36'),
(24, 'đẹp', 20, 117, '2019-04-01 15:35:36', '2019-04-01 15:35:36'),
(25, 'đẹp', 20, 117, '2019-04-01 15:35:37', '2019-04-01 15:35:37'),
(26, 'đẹp', 20, 117, '2019-04-01 15:35:38', '2019-04-01 15:35:38'),
(27, 'đẹp', 20, 117, '2019-04-01 15:35:38', '2019-04-01 15:35:38'),
(28, 'haha', 20, 117, '2019-04-01 15:38:22', '2019-04-01 15:38:22'),
(29, 'haha', 20, 117, '2019-04-01 15:38:28', '2019-04-01 15:38:28'),
(30, 'Đẹp', 10, 112, '2019-04-04 09:57:09', '2019-04-04 09:57:09'),
(31, 'đẹp', 10, 112, '2019-04-04 09:57:32', '2019-04-04 09:57:32'),
(32, 'đẹp', 10, 123, '2019-04-04 09:57:48', '2019-04-04 09:57:48'),
(33, 'xấu', 10, 123, '2019-04-04 09:59:43', '2019-04-04 09:59:43'),
(34, 'xấu', 10, 123, '2019-04-04 09:59:53', '2019-04-04 09:59:53'),
(35, 'xấu', 10, 123, '2019-04-04 10:00:39', '2019-04-04 10:00:39'),
(36, 'đẹp', 10, 125, '2019-04-04 10:00:49', '2019-04-04 10:00:49'),
(37, 'đẹp', 10, 125, '2019-04-04 10:00:53', '2019-04-04 10:00:53'),
(38, 'đẹp', 10, 126, '2019-04-04 10:01:17', '2019-04-04 10:01:17'),
(39, 'đẹp', 10, 126, '2019-04-04 10:01:20', '2019-04-04 10:01:20'),
(40, 'xấu', 10, 126, '2019-04-04 10:01:27', '2019-04-04 10:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thương', 905827922, 'thuongnnpd02383@fpt.edu.vn', 'Alo', 'ád', '2019-04-04 03:17:39', '2019-04-04 03:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(118, 'nike2.png', 107, NULL, NULL),
(119, 'nike4.png', 107, NULL, NULL),
(120, 'nike3.png', 107, NULL, NULL),
(121, 'c9aef2daccd89c7e837102a38279c97b.png', 108, NULL, NULL),
(122, '0d25725b0a363c0ad8d8b97ef85a4db5.png', 108, NULL, NULL),
(123, '3f1b468ee2cd22d29b28d6d0e57b46b6.png', 108, NULL, NULL),
(124, '80c1f3f41c5ba45bf93609b95fb507b0.png', 109, NULL, NULL),
(125, '12c96db9b12bcc40761fcf83b6c49f8f.png', 109, NULL, NULL),
(126, 'd40ef8360d66eb754eb37297ae716d6b.png', 109, NULL, NULL),
(127, '22181209a0562a4129b2dd2dce49e5e3.png', 110, NULL, NULL),
(128, 'c2c87510e14c17629134ae4ea811df05.png', 110, NULL, NULL),
(129, '11a9c6a3355cda7e5ad61323551a6189.png', 110, NULL, NULL),
(130, 'fc53cb7e19deafd8dd0d927add8b2249.png', 106, NULL, NULL),
(131, '114c01d1c7a5854039cb17fddfdd4ab4.png', 106, NULL, NULL),
(137, '577e5c4b737c76040cfa706821bfeb13.png', 98, NULL, NULL),
(138, 'f9ac61829655c13b15fd2cab78837e00.png', 98, NULL, NULL),
(139, 'b1a3bbf92ee667d093799dc67fbe04fb.png', 98, NULL, NULL),
(144, 'c0a08f4a2786183e7b4785352c1e3a33.png', 99, NULL, NULL),
(145, '99ad508582ba2b75984afa0bae95ba9f.png', 99, NULL, NULL),
(146, '2f5d9156a5b34b056509f55cf436ffc0.png', 99, NULL, NULL),
(147, '9bb715141969ee61f35a691164d59b4d.jpg', 111, NULL, NULL),
(148, 'b14db11aaf21ece8d8e2d760c5f1a50e.jpg', 111, NULL, NULL),
(149, '34ff884abb592da2797207f0253154c9.jpg', 111, NULL, NULL),
(150, 'f8b54dc8babecd2dd60bb0b21aa2c63e.jpg', 112, NULL, NULL),
(151, 'ee74b245aba606ffd4b00859af8d57b3.jpg', 112, NULL, NULL),
(152, '5d6813138dd111f268a7dc448b036a06.jpg', 112, NULL, NULL),
(153, 'f1f6f5d77ff4a826d541f5d9374af67f.jpg', 113, NULL, NULL),
(154, '90b4fb5d08ff5c5e2ae54d18d908acc5.jpg', 113, NULL, NULL),
(155, '3272f7de0e26a39d5c536927e4ab0286.jpg', 113, NULL, NULL),
(156, '2937aabc341e3aa19c52aa2ef9724599.jpg', 114, NULL, NULL),
(157, '0b3c1d1472652ac10ea294953edf18e9.jpg', 114, NULL, NULL),
(158, 'ff20183a3f85146ffe135a3694232d8e.jpg', 114, NULL, NULL),
(159, 'b43b9b177aed761b3fae726d6900f37b.jpg', 115, NULL, NULL),
(160, '758c74a2949d34e6bff0b6ccf38f566f.jpg', 115, NULL, NULL),
(161, '6897e9d3b3ee8eeb9ce80a7d4ba5166d.jpg', 115, NULL, NULL),
(162, '2a37779ed0906e6e16777dfc5dce3cc0.jpg', 116, NULL, NULL),
(163, '9418b65c46e708705f8ad02049c29bbb.jpg', 116, NULL, NULL),
(164, 'fb52afd3408dc760499df984ebceb409.jpg', 116, NULL, NULL),
(165, 'c0fff48fcba75854a05b0fd5dd22e6a2.jpg', 117, NULL, NULL),
(166, '46cbf14f859183f61f55389947c835fd.jpg', 117, NULL, NULL),
(167, '1b5e40e2b6fb66790f47ef4d13daa7a2.jpg', 117, NULL, NULL),
(168, 'e4df7df0b4acadb305d4886c95db3690.jpg', 118, NULL, NULL),
(169, '374c04f80c5020da7962e64ca2803449.jpg', 118, NULL, NULL),
(170, '905ffa0af172c17653933487b0d69a1d.jpg', 118, NULL, NULL),
(171, '444441ce030926ba0aaa86fdb6a41056.jpg', 119, NULL, NULL),
(172, 'ac1abb744204470219519a5b436e50dc.jpg', 119, NULL, NULL),
(173, 'a9302c57002ff93c3e764d17cfdf8814.jpg', 119, NULL, NULL),
(174, '8089c03deb18e2b49bdf61cfa5f258cc.jpg', 120, NULL, NULL),
(175, 'dfabd3516ac86b8f21aaaa7baebae28e.jpg', 120, NULL, NULL),
(176, 'e814c17e728e5e3c8bd3ab74195cc1f5.jpg', 120, NULL, NULL),
(177, '02b36c724467e2a81051d0d74e715b64.jpg', 121, NULL, NULL),
(178, '0a8f28bcbcf19a5cb86909184ad62f95.jpg', 121, NULL, NULL),
(179, '87583817bab381ca7f51da14aa500aca.jpg', 121, NULL, NULL),
(180, 'ec2f42c569c09e424f0e85085ed017eb.jpg', 122, NULL, NULL),
(181, 'edf3fd9527d15bdf8e0c24171dc4e2fc.jpg', 122, NULL, NULL),
(182, '4f9396c22c527920ba6d59efeffbaffd.jpg', 122, NULL, NULL),
(183, 'cb28e1db40c98f9442f9f75f56ee82e3.png', 123, NULL, NULL),
(184, 'e78a602ffc6347c1f011da788551c654.png', 123, NULL, NULL),
(185, 'b48112b604bd0d0cfee2d08889220b6a.png', 123, NULL, NULL),
(186, 'ca97be84b664f9af69580c9ef6745b7e.png', 124, NULL, NULL),
(187, 'd6afaaa136d2d5e054e1ff9c82a4957f.png', 124, NULL, NULL),
(188, '289035f3e8f08b1a086c7d7ecd7e9cbb.png', 124, NULL, NULL),
(189, 'bd3f3e3713254d5cc527dbe40789da9b.jpg', 125, NULL, NULL),
(190, '97aa27aa5f6b40c611f16fe227e62761.jpg', 125, NULL, NULL),
(191, '34b3cabd1f7e9ab58918a1a694c7e633.jpg', 125, NULL, NULL),
(192, '3457dba046c6d5c0d72cb364a98db076.jpg', 126, NULL, NULL),
(193, '8918f4ef4738f94d007452a056533220.jpg', 126, NULL, NULL),
(194, '93cd9ab145e039cfde79bed48a5ebd88.jpg', 126, NULL, NULL),
(195, 'a18da0a9e2a93f38f365ce5a9c3d9e8e.jpg', 127, NULL, NULL),
(196, 'bf44a1c494ac230f5df3dd69792b496d.jpg', 127, NULL, NULL),
(197, '23f1d6634cc369c5dac2036d3f832820.jpg', 127, NULL, NULL),
(198, 'e4e9023be6dc2dbeccc1f94926d1bfb0.jpg', 128, NULL, NULL),
(199, '9f5f95d0b9a938680e8c7cfb27b3d29e.jpg', 128, NULL, NULL),
(200, 'c10c1c42dcace05359a1fb54e314b0e3.jpg', 128, NULL, NULL),
(201, 'bc19fdb5ab1e0945056393b387a666fe.jpg', 129, NULL, NULL),
(202, '24e4d09a346ea935880dd762c24b97d6.jpg', 129, NULL, NULL),
(203, 'e92c0c3b30046ba86733a6e702e8e89b.jpg', 129, NULL, NULL),
(204, '356e946c9a956e75ba42ff1049419218.png', 130, NULL, NULL),
(205, '6986d16a9bc8b26f7184aca0b00bd9d6.png', 130, NULL, NULL),
(206, '7de46b66be4d9d7c62fd0e26b3440ed9.png', 130, NULL, NULL),
(207, 'ab9b0016f54d05e16dd44460f1538efa.png', 131, NULL, NULL),
(208, '7bf26ff1d1d00ba856cc0e8a44220192.png', 131, NULL, NULL),
(209, 'd4d7e7bc8435c6d69184cd9fbc00972f.png', 131, NULL, NULL),
(210, '1154db4f168734ce1baa5663683f52ea.png', 132, NULL, NULL),
(211, 'ae7ef4f1117e10757e2aab2dcd7c37eb.png', 132, NULL, NULL),
(212, 'bb864c4c456042503045724a0ee29335.png', 132, NULL, NULL),
(213, 'e8289672e33369a89f94968fca061b16.png', 133, NULL, NULL),
(214, 'b6a5267215e3edddc377e7602a0986c9.png', 133, NULL, NULL),
(215, 'd0e25a8a85ed8450ade6d6bef3a93617.png', 133, NULL, NULL),
(217, 'dd0f422ebc007d0abcbdc0a90c7fef7d.jpg', 135, NULL, NULL),
(218, '961f9842f0ba89397711ca8b105911c5.jpg', 135, NULL, NULL),
(219, '045d122a56189878d3607ec3a64f72e3.jpg', 135, NULL, NULL),
(220, '049ae4f639f67165e87f3843d0a83b9e.jpg', 136, NULL, NULL),
(221, 'b0d255be015d93711c63a494d5141790.jpg', 136, NULL, NULL),
(222, '4c16ed90c0b00703207d5ddad773ca08.jpg', 137, NULL, NULL),
(223, 'e220edd3754bdc0407cd47dfe88a7580.jpg', 137, NULL, NULL),
(224, 'dd5cac3740c18f72a557abeda5ad4c6e.jpg', 137, NULL, NULL),
(225, '5de8f21bf4aadaf3d031e1922320cd39.jpg', 138, NULL, NULL),
(226, 'c668024c1b1defcec788fc0c8d2837d4.jpg', 138, NULL, NULL),
(227, 'a3a896205167c94a4fdb49dcdc067a5e.jpg', 138, NULL, NULL),
(231, '24c5654cefdd44a8bd34ccdc4a5dd779.jpg', 143, NULL, NULL),
(232, 'cd748f610c2a76a76d65d75b23f9d741.jpg', 143, NULL, NULL),
(233, '2c7b2e8c8ab29b47143f3d5362d53d77.jpg', 143, NULL, NULL);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_03_11_145521_create_roles_table', 1),
(3, '2019_03_11_153309_create_categories_table', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(5, '2019_03_11_153603_create_products_table', 3),
(6, '2019_03_11_121245_create_comments_table', 4),
(7, '2019_03_11_121808_create_images_table', 5),
(8, '2019_03_11_121920_create_orders_table', 6),
(9, '2019_03_11_122450_create_orderdetails_table', 7),
(10, '2019_03_30_074518_create_ratings_table', 8),
(11, '2019_04_04_094033_create_contacts_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `qty`, `price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '741.00', 31, 98, NULL, NULL),
(2, 1, '180.00', 31, 108, NULL, NULL),
(3, 1, '210.00', 31, 110, NULL, NULL),
(4, 1, '240.00', 31, 111, NULL, NULL),
(5, 1, '190.00', 31, 114, NULL, NULL),
(6, 1, '300.00', 31, 113, NULL, NULL),
(7, 1, '220.00', 31, 115, NULL, NULL),
(8, 1, '220.00', 32, 106, NULL, NULL),
(9, 1, '220.00', 33, 106, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `adress`, `cty`, `zip_code`, `country`, `phone`, `status`, `total`, `code`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'a', 'c', 1, 'b', 905827922, 2, '1557.00', 'YAeOiFM0Ifip9WzCWwSS8mcLexHBdyEUq9V93W3G', 10, '2019-03-18 16:15:47', '2019-03-25 01:35:52'),
(3, 'asd', '123', 123, 'asd', 905827922, 1, '7725.00', '$2y$10$WtirIXYjzGGkb8mX.0RYhueu4okbkX8R4RbaREmJFD8OmFiuI.rDu', 10, '2019-03-18 16:49:15', '2019-03-25 01:36:35'),
(4, 'test lần 1', '1', 1, 'test lần 1', 905827922, 1, '7725.00', '$2y$10$IcaaIEVVhKYKGp3VE6x.5O18sBr5mrSkByl3kRLmKt20p0sp1mw92', 10, '2019-03-18 16:51:55', '2019-03-25 01:39:25'),
(5, 'test lần 2', 'Đà nẵng', 84, 'Việt Nam', 905827922, 1, '7725.00', '$2y$10$eWIhCJkdXsCWExmuvczcsOby5.4g7JQrs98R0TwSRkO0OkZK.ZIvy', 10, '2019-03-18 16:52:42', '2019-03-25 14:29:16'),
(6, 'test lần 3', 'DaNang', 84, 'Việt Nam', 905827922, 2, '7725.00', '$2y$10$axGEyBwGfgRgGtF3xcLzJuDEEKqmV3KJsE00VQpgQ5GQdZuOjkWb2', 10, '2019-03-18 16:53:37', '2019-03-25 01:59:44'),
(7, 'test lần 3', 'test lần 3', 123, 'test lần 3', 905827922, 1, '7725.00', '$2y$10$9Tj5k.X396HRX8ZzPngtuO6Q8RYn9l1XkuFx5kYrezmiUwVPNi3Re', 10, '2019-03-18 16:57:14', '2019-03-27 11:25:39'),
(8, 'test lần 3', 'test lần 3', 123123, 'test lần 3', 905827922, 0, '7725.00', '$2y$10$0bts1n3BudFvqNOWpWsIfOW56YIp6HpuWbywejCIn4RSnf6F/QbfS', 10, '2019-03-18 16:58:51', '2019-03-18 16:58:51'),
(9, 'test lần 3', 'test lần 3', 123123, 'test lần 3', 905827922, 0, '7725.00', '$2y$10$ZBKthhwBydQIbJchqYI7IeZ7rs5RfmETvAwTinfxQvdbchELvJQMC', 10, '2019-03-18 16:59:16', '2019-03-18 16:59:16'),
(10, 'test lần 3', 'test lần 3', 123123, 'test lần 3', 905827922, 0, '7725.00', '$2y$10$bQtMjjUA9QmVAhovLHMaHenyVMNY6h01bzszvFEcZusjApw5yehRu', 10, '2019-03-18 17:00:30', '2019-03-18 17:00:30'),
(11, 'test lần 3', 'test lần 3', 123123, 'test lần 3', 905827922, 0, '7725.00', '$2y$10$9nMsS5ABd2K/zMro1yIni.cvVeJQ6PE1v/9FagQT5BkrudmKJwg3O', 10, '2019-03-18 17:01:01', '2019-03-18 17:01:01'),
(12, 'test lần 3', 'test lần 3', 123123, 'test lần 3', 905827922, 0, '7725.00', '$2y$10$2MmQwmLkXLsu72nDuk9sa.X4AfFtno8rXhd5SfmfmCDVYCLTk4HiS', 10, '2019-03-18 17:01:56', '2019-03-18 17:01:56'),
(13, 'test lần 4', 'test lần 4', 123, 'test lần 4', 905827922, 0, '7725.00', '$2y$10$6YVlGhvh.WFDoTJkFTgfbu7egCJpPjmKNNHJaTmHR6rpo2IsmGQc2', 10, '2019-03-18 17:03:08', '2019-03-18 17:03:08'),
(14, 'test lần 4', 'test lần 4', 123, 'test lần 4', 905827922, 0, '7725.00', '$2y$10$xkMQ9fosE6W0nWfnBLQVpe7125WwHfLVKjDZpZlpwiZAOHrVi1LT6', 10, '2019-03-18 17:04:08', '2019-03-18 17:04:08'),
(15, '123', '12312', 123123, '123', 905827922, 0, '7725.00', '$2y$10$eqziH/PZP6qEReQuQ4TysOTRitGGUYlq/VNt7ftxijnjG2h2NOnse', 10, '2019-03-18 17:04:33', '2019-03-18 17:04:33'),
(16, '123', '12312', 123123, '123', 905827922, 0, '7725.00', '$2y$10$GSvpz4GiZSDo4Wf5W2LKsugDnTcgEBojwHtMB0tCta8GD/rUC8nRG', 10, '2019-03-18 17:04:48', '2019-03-18 17:04:48'),
(17, 'test lần 5', 'test lần 5', 123, 'test lần 5', 905827922, 0, '7725.00', '$2y$10$jjV0d6m1n36LNwrbqJzHzOIhmqIIA9ycgYMOlh1yRU2Z/2fpEey5m', 10, '2019-03-18 17:05:26', '2019-03-18 17:05:26'),
(18, 'test lần 5', 'test lần 5', 123, 'test lần 5', 905827922, 0, '7725.00', '$2y$10$5x2ONyhfDQQ7rEXAFpLNCuVDPciMT111CPxeNJK.qfQk/TTTSmKsm', 10, '2019-03-18 17:06:07', '2019-03-18 17:06:07'),
(19, 'asd', '123', 12, 'asd', 905827922, 0, '1997.00', '$2y$10$H5FQ1vaWYqRPmHQw0Kk7wOe3FBeNqiQOIlMZLkWJ0JgGYOFbn5tf.', 10, '2019-03-19 04:08:56', '2019-03-19 04:08:56'),
(20, 'test lần n', 'test lần n', 12, 'test lần n', 905827922, 0, '1997.00', '$2y$10$5vQA8/xAtcZMoIOnOxJZ5OCWGBsx2cXPTpxaUv4UwDCG5wCnaz9AK', 10, '2019-03-19 04:31:50', '2019-03-19 04:31:50'),
(21, 'test lần 31', 'test lần 31', 12, 'test lần 31', 905827922, 1, '5224.00', '$2y$10$HXbntHlAj6I2mV4u85Vn5.uy.MQYHxIkcyXXnEKzqbFuaCBGFN166', 10, '2019-03-19 04:52:37', '2019-03-25 01:39:02'),
(22, 'test lan 10', 'test lần 3', 12, 'test lan 10', 905827922, 0, '1230.00', '$2y$10$2ROkeHS73tPDmvTZsfNq8.BuawdyDpiD70pDGk9FdAt8stS0jQghS', 19, '2019-03-19 05:20:23', '2019-03-19 05:20:23'),
(23, 'test lần 3', '12312', 12, 'test lần 3', 905827922, 2, '8452.00', '$2y$10$LdMgBPp0OlNCTVBC/1wvE.DXOps5rLdZKDXqmNzbqBBBhIzFU83xy', 19, '2019-03-19 05:22:17', '2019-03-25 01:38:50'),
(24, 'test lần 3', 'test lần 3', 12, 'test lần 3', 905827922, 1, '7839.00', '$2y$10$594/M02n/qfj7IemVf23ie3CZQ82y61DoVRbEBjTlpniV/vmNqFoa', 19, '2019-03-19 05:59:34', '2019-03-19 05:59:34'),
(26, 'Tổ 16 Mân Thái', 'DaNang', 84, 'Việt Nam', 905827922, 1, '27838.00', '$2y$10$yT3POQR6pXvNE8hlxuLfQu9bqN4SqU9qFYXaGWWQ5BX0pHvOEf.NS', 19, '2019-03-20 16:53:11', '2019-03-25 01:38:01'),
(27, 'Tổ 16 Mân Thái', 'DaNang', 84, 'Việt Nam', 905827922, 0, '8100.00', '$2y$10$4N0MxdZYPsId09SG9isAXOvqjH5yFNlHYr4LXQeNugT6K0R.YnyuK', 21, '2019-03-25 03:16:07', '2019-03-25 03:16:07'),
(31, 'Tổ 16 Mân Thái', 'Đà nẵng', 84, 'Việt Nam', 905827922, 0, '2081.00', '$2y$10$gfSwO3sGw8PaE4gfqC1mZedOW/1ajAILQ44.luaN2M.i5OSBVJhAG', 20, '2019-03-31 05:13:26', '2019-03-31 05:13:26'),
(32, 'Tổ 16 Mân THái', 'Đà Nẵng', 55000, 'Việt Nam', 905827922, 0, '220.00', '$2y$10$4I/9KPo39SE357payWU8wO7xyUiBW.4P473Az1l8W4bUvDahlkqNS', 20, '2019-04-04 02:35:04', '2019-04-04 02:35:04'),
(33, 'Tổ 16 Mân THái', 'Đà Nẵng', 55000, 'Việt Nam', 905827922, 0, '220.00', '$2y$10$K3KGvxXRCj9Pvz9.Uef2Ou2X94s/93XvdtKfa5OvH3cLtHrdLTeFa', 10, '2019-04-04 13:02:03', '2019-04-04 13:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `sale` tinyint(4) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `description`, `view`, `category_id`, `created_at`, `updated_at`, `image`) VALUES
(98, 'Nike Air Olem', '741.00', 0, '<p><strong>LIGHTWEIGHT CUSHIONING AND SUPPORT.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Nike Air Max Deluxe features lightweight Max Air cushioning for all-day comfort, while a combination upper provides comfortable support.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Benefits</strong></p>\r\n\r\n<ul>\r\n	<li>Synthetic and textile upper offers durability and support.</li>\r\n	<li>Foam midsole with Max Air cushioning provides all-day comfort.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Product Details</strong></p>\r\n\r\n<ul>\r\n	<li>Rubber outsole</li>\r\n	<li>Colour Shown: Black/Dark Grey</li>\r\n	<li>Style: AV2589-001</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n</ul>', 110, 16, NULL, NULL, '305f4d86b324d201c0b81055598add41.png'),
(99, 'Nike Zoom 2K', '100.00', 0, '<p><strong>Benefits</strong></p>\r\n\r\n<ul>\r\n	<li>Leather, textile and synthetic upper gives comfortable support.</li>\r\n	<li>Zoom Air unit offers underfoot cushioning.</li>\r\n	<li>Rubber wings wrap from the outsole to the upper for enhanced stability.</li>\r\n	<li>Exaggerated heel and branding reference an early-2000s aesthetic.</li>\r\n	<li>Breathable mesh forefoot has leather overlays around the toe for durability.</li>\r\n	<li>Inner-sleeve construction and a webbed lacing system secure the fit.</li>\r\n	<li>Rubber outsole provides durable traction.</li>\r\n	<li>Colour Shown: White/Wolf Grey/Black/Infrared 23</li>\r\n	<li>Style: AO0269-105</li>\r\n	<li>Country/Region of Origin: Indonesia</li>\r\n</ul>', 41, 16, NULL, NULL, '95853f4245f0f2e3b84c55d0f9464cfa.png'),
(106, 'Air Jordan 6 Retro', '220.00', 0, '<p><strong>&#39;91 CHAMPIONSHIP PEDIGREE.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Originally released the year MJ won his first professional championship, the Air Jordan 6 Retro Men&#39;s Shoe features a sculpted midsole for cushioned stability, with abstract overlays designed to celebrate Jordan heritage.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Benefits</strong></p>\r\n\r\n<ul>\r\n	<li>Durable leather and fabric upper offers a secure fit and premium look.</li>\r\n	<li>Forefoot and heel Air units deliver lightweight, responsive cushioning.</li>\r\n	<li>Solid and translucent rubber outsole provides traction on a variety of surfaces.</li>\r\n	<li>Colour Shown: White/Black/Infrared 23/Dark Concord</li>\r\n	<li>Style: CI3125-100</li>\r\n	<li>Country/Region of Origin: China</li>\r\n</ul>', 0, 17, NULL, NULL, 'bf71174107638ad7e4c2b27f4918d16c.png'),
(107, 'Nike Air Force 1 High', '200.00', 0, '<p><strong>AF-1 WITH ATTITUDE.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Maintaining the iconic look of the AF-1 with Emotionally Unavailable attitude, the Nike Air Force 1 High x Emotionally Unavailable has a zip lace cover and a canvas upper for extra mood.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Benefits</strong></p>\r\n\r\n<ul>\r\n	<li>Canvas upper is durable.</li>\r\n	<li>Plush fabric lining helps keep feet warm.</li>\r\n	<li>High-cut collar is padded for comfort around the ankle.</li>\r\n	<li>Encapsulated Air-sole unit provides lightweight cushioning.</li>\r\n	<li>Chenille Swoosh design adds texture.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Product Details</strong></p>\r\n\r\n<ul>\r\n	<li>Rubber outsole</li>\r\n	<li>Colour Shown: Team Red/Pink Blast/Sail</li>\r\n	<li>Style: AV5840-600</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n</ul>', 5, 16, NULL, NULL, 'c50585f24f0b3357401e197e68832b2e.png'),
(108, 'Air Jordan 5 Retro', '180.00', 0, '<p><strong>PREMIUM LOOK AND FEEL</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The reincarnated Air Jordan 5 Retro Men&#39;s Shoe brings back aeroplane-inspired style from legendary Nike shoe designer Tinker Hatfield.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Product Details</strong></p>\r\n\r\n<ul>\r\n	<li>Leather or textile and synthetic upper depending on colour</li>\r\n	<li>Foam midsole with visible Air cushioning in the heel</li>\r\n	<li>Encapsulated Air unit in the forefoot</li>\r\n	<li>Rubber outsole provides excellent traction</li>\r\n	<li>Colour Shown: Black/University Red</li>\r\n	<li>Style: 136027-006</li>\r\n	<li>Country/Region of Origin: China</li>\r\n</ul>', 7, 17, NULL, NULL, '50513cff04b2ca34d8afe00d0142bdc8.png'),
(109, 'Air Jordan Retro 8', '180.00', 0, '<p><strong>LEGENDARY COMFORT. ICONIC STYLE.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Air Jordan 8 made its debut during Michael Jordan&#39;s &quot;three-peat&quot; 1992&ndash;93 championship season. The Air Jordan 8 Retro features the same moulded details, midfoot straps and cushioned comfort that quickly established the original as a fan favourite.</p>\r\n\r\n<p><strong>Premium Comfort</strong></p>\r\n\r\n<p>A leather, synthetic and fabric upper delivers durable support.</p>\r\n\r\n<p><strong>Product Details</strong></p>\r\n\r\n<ul>\r\n	<li>Leather, synthetic and fabric upper</li>\r\n	<li>Foam midsole with Air cushioning</li>\r\n	<li>Rubber outsole</li>\r\n	<li>Colour Shown: White/Turbo Green/Neutral Grey/White</li>\r\n	<li>Style: 305381-113</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n</ul>', 113, 17, NULL, NULL, '$2y$10$tPJHhfpjQIlMvIvLJTkQSeLo1Wq0SS3IRTiImP99RIaiXUhK0PaBy.png'),
(110, 'Nike Air VaporMax Plus', '210.00', 0, '<p><strong>RETRO STYLE. REVOLUTIONARY COMFORT.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Nike Air VaporMax Plus looks to the past to propel you into the future. This revamp nods to the super-techy Air Max Plus of 1998 with its floating cage, cushioned upper and heel logo. Revolutionary VaporMax Air technology brings it into today.</p>\r\n\r\n<p><strong>VaporMax: Behind the Design</strong></p>\r\n\r\n<ul>\r\n	<li>Designed in Europe</li>\r\n	<li>The Air VaporMax represents a new era in Nike innovation. Designers started by restructuring the Air unit so they could attach it directly to the upper. &quot;That was the biggest challenge&quot;, says Tom Minami, Senior Footwear Designer&mdash;but it was worth it. &quot;Without any midsole or sockliner, you get to feel the Air in a whole new way&quot;. In previous Air Max models, the goal was to fill the sole with as much Air as possible, but with the VaporMax, the focus is on using the Air efficiently. &quot;As you step down, each lug gets pushed into the Air unit, ramping up the pressure&quot;, Elder explains. &quot;As you step off, the pressure releases, creating that springy bounce&quot;. After the seven-year journey from ideation to release, Elder and Minami are excited for what&#39;s to come. &quot;I&#39;m super proud of the product&quot;, Elder says. &quot;This new approach is going to be a huge turning point for Air&mdash;and for Nike&quot;.</li>\r\n	<li>Colour Shown: White/Aluminium/Barely Volt/Black</li>\r\n	<li>Style: 924453-105</li>\r\n	<li>Country/Region of Origin: China</li>\r\n</ul>', 1, 16, NULL, NULL, '93dd1e06e1769cae48862d2069f3e19b.png'),
(111, 'STAN SMITH SHOES', '240.00', 0, '<h2>STAN SMITH SHOES</h2>\r\n\r\n<p>SIMPLE, STYLISH SNEAKERS WITH SUBTLE ADIDAS DETAILS.</p>\r\n\r\n<p>The minimalist Stan Smith sneaker is the defining look of court style. These shoes put a subtle twist on the classic silhouette. Instead of the standard perforated 3-Stripes, this version has a cutout Trefoil on the side. The smooth leather upper underscores the pared-down vibe.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Leather upper</li>\r\n	<li>Rubber cupsole</li>\r\n	<li>Enjoy the comfort and performance of OrthoLite&reg; sockliner</li>\r\n	<li>Soft feel</li>\r\n</ul>', 1, 7, NULL, NULL, '86afeb430c56499a0f3b83674ec0b2fd.jpg'),
(112, 'STAN SMITH SHOES 2', '240.00', 0, '<p>SIMPLE, STYLISH SNEAKERS WITH SUBTLE ADIDAS DETAILS.</p>\r\n\r\n<p>The minimalist Stan Smith sneaker is the defining look of court style. These shoes put a subtle twist on the classic silhouette. Instead of the standard perforated 3-Stripes, this version has a cutout Trefoil on the side. The smooth leather upper underscores the pared-down vibe.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Leather upper</li>\r\n	<li>Rubber cupsole</li>\r\n	<li>Enjoy the comfort and performance of OrthoLite&reg; sockliner</li>\r\n	<li>Smooth feel</li>\r\n</ul>', 3, 7, NULL, NULL, '010f990e53459ea09ac18be2c62172d2.jpg'),
(113, 'FIVE TEN DISTRICT FLATS', '300.00', 0, '<p>FLAT PEDAL BIKING SHOES BUILT FOR A SMOOTH COMMUTE.</p>\r\n\r\n<p>Bike to work. Ride to class. These flat pedal commuter biking shoes feature a clean look for smooth transitions between bike and work or school. The non-marking rubber outsole offers surefooted grip on and off the bike. A weather-resistant upper keeps your feet dry.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Polyurethane-coated leather and synthetic upper</li>\r\n	<li>Textile lining; Non-marking Marathon&reg; rubber outsole</li>\r\n	<li>Reflective blinker on back</li>\r\n</ul>', 7, 7, NULL, NULL, '4e4ca314009097bead9e7c51c0cea1d4.jpg'),
(114, 'CAMPUS BT SHOES', '190.00', 0, '<p>A DELUXE VERSION OF THE CAMPUS, MADE IN ITALIAN NUBUCK.</p>\r\n\r\n<p>The Campus dates back to 1980, when hoops stars laced it up to hustle on the hardwood. In the decades since, skaters, dancers and hip-hop artists have championed the shoe for its luxe yet low-profile B-ball style. This premium edition is made in a combination of crisp white and deep blue. Finest-quality Italian nubuck gives the upper a supple, flexible feel.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Nubuck upper</li>\r\n	<li>Rubber cupsole</li>\r\n	<li>Enjoy the comfort and performance of OrthoLite&reg; sockliner</li>\r\n	<li>Soft feel</li>\r\n</ul>', 0, 7, NULL, NULL, 'a63bc6add72542c3b3315cf60c72e77e.jpg'),
(115, 'PRO BOUNCE MADNESS', '220.00', 0, '<p>COMFORTABLE B-BALL SHOES DESIGNED FOR AGILITY AND QUICKNESS.</p>\r\n\r\n<p>Keep defenders on their heels all game long in these basketball shoes. They feature a mesh upper with a cushioned collar for enhanced ankle support. A TPU banking barrier provides lateral stability for quick side-to-side movement. Responsive cushioning in the midsole lets you get up and down the court in comfort. A herringbone outsole offers extended grip as you cut and pivot to the basket.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Mesh upper with supportive collar</li>\r\n	<li>Textile lining; Herringbone-pattern rubber outsole</li>\r\n	<li>Flexible Bounce midsole cushioning</li>\r\n	<li>Responsive, adaptive feel</li>\r\n	<li>TPU lateral banking barrier for midfoot stability</li>\r\n</ul>', 1, 7, NULL, NULL, '0b26a155723f5ab38b23dec95cf3cafa.jpg'),
(116, 'FIVE TEN KESTREL LACE', '270.00', 0, '<p>EFFICIENT ALL-MOUNTAIN POWER FOR YOUR NEXT RIDE.</p>\r\n\r\n<p>Transfer maximum power to the pedals. The Kestral Pro Lace matches our stiffest sole with clipless compatibility for an efficient all-mountain ride. The traditional lace closure features a hook-and-loop strap for added security, while the wide Stealth&reg; C4 rubber sole provides confident footing in all terrain. Mesh inserts enhance breathability, and the quick-drying synthetic upper maintains all-weather comfort.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure with hook-and-loop top strap</li>\r\n	<li>Synthetic weather-resistant micro-perforated upper; Perforated EVA tongue with mesh overlay</li>\r\n	<li>Textile lining; Stealth&reg; C4 rubber outsole for unbeatable grip</li>\r\n	<li>Durable lightweight EVA midsole</li>\r\n	<li>Clipless style; Stiff carbon-infused nylon shank</li>\r\n</ul>', 11, 7, NULL, NULL, '631b12fcbeaeba653b81f32212b2f93a.jpg'),
(117, 'FIVE TEN BIKE IMPACT', '330.00', 0, '<p>DURABLE MOUNTAIN BIKING SHOES WITH EXCELLENT GRIP.</p>\r\n\r\n<p>Hit the trails in comfort. These mountain biking shoes are built with weather-resistant, quick-drying materials. An impact-resistant toe box adds protection. The Stealth&reg; S1 outsole grips the pedals and the pavement, and the stiff midsole delivers power to the pedals.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Synthetic weather-resistant micro-perforated upper</li>\r\n	<li>Textile lining; Stealth&reg; rubber outsole for unbeatable grip</li>\r\n	<li>Stiff polyurethane midsole; Enjoy the comfort and performance of OrthoLite&reg; sockliner</li>\r\n	<li>Impact-resistant Poron&reg; toe box</li>\r\n</ul>', 5, 7, NULL, NULL, 'c9221e0be9cb43fc9abcbf200e8290d0.jpg'),
(118, 'NMD_R1 SHOES', '280.00', 0, '<p>With a nod to technical outerwear, these shoes blend heritage style with modern innovation. The soft knit textile upper is detailed with subtle 3-Stripes and patch overlays. This special edition pays homage to the NMD&#39;s spirit of urban exploration with a graphic inspired by Japanese railway maps printed on the inner midsole and heel. The Boost midsole provides responsive comfort and is accented with distinctive NMD plugs.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Knit textile upper</li>\r\n	<li>Rubber outsole</li>\r\n	<li>Enjoy the comfort and performance of OrthoLite&reg; sockliner; Responsive Boost midsole with EVA plugs</li>\r\n	<li>Soft feel</li>\r\n</ul>', 0, 7, NULL, NULL, '14ebfd313cc29189f9dc1c7338cddd5c.jpg'),
(119, 'PRO VISION SHOES', '250.00', 0, '<p>STREETBALL-INSPIRED B-BALL SHOES DESIGNED FOR A LOCKED-DOWN FEEL.</p>\r\n\r\n<p>These basketball shoes combine a streetball-inspired look with modern details. Designed with a midfoot cage for a locked-down feel, they&#39;re built with flexible midsole cushioning for soft comfort as you attack the paint. The rubber outsole provides extra grip for quick cuts and pivots on the blacktop.</p>\r\n\r\n<ul>\r\n	<li>Regular fit</li>\r\n	<li>Lace closure</li>\r\n	<li>Textile upper with tailored collar and ripstop midfoot cage</li>\r\n	<li>Rubber outsole; Textile lining</li>\r\n	<li>Flexible Bounce midsole cushioning</li>\r\n	<li>Locked-down feel with soft cushioning</li>\r\n	<li>High-abrasion toe cap</li>\r\n</ul>', 1, 7, NULL, NULL, '338a2894c122074d2934a8443f90db24.jpg'),
(120, 'Converse X A$AP NAST', '100.00', 0, '<h2>WORKWEAR STYLE. SKATE-READY DURABILITY.</h2>\r\n\r\n<p>For his latest Converse collaboration, NAST takes on the Jack Purcell Chukka. This ankle-grazing silhouette, originally created for badminton courts, finds a street style refresh with utilitarian style. The addition of a durable canvas upper, rubberized outsole, and One Star heel stamp bring workwear vibes to this archived JP silhouette.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Durable canvas upper</li>\r\n	<li>Heavy duty rubber outsole</li>\r\n	<li>One Star heel stamp</li>\r\n</ul>', 0, 9, NULL, NULL, '0946f4a2418702a84326abf6c9e8d8ee.jpg'),
(121, 'Converse x GOLF FLEUR', '100.00', 0, '<h2>The New Two-Tone Collection</h2>\r\n\r\n<p>Tyler, the Creator returns for a new collaboration with Converse as part of the highly coveted GOLF le FLEUR* collection. The &ldquo;two-tone&rdquo; spring capsule will feature color blocking in a blue, black, and egret color palette on the iconic One Star.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Two-tone contrast paneling with vintage egret midsole finish.</li>\r\n	<li>GOLF le FLEUR* branding and flower logo.</li>\r\n	<li>Soft suede upper.</li>\r\n</ul>', 0, 9, NULL, NULL, '1718dcfbf4c2688d2e9602ee027c3338.jpg'),
(122, 'Lucky Star High Top', '85.00', 0, '<h2>FROM THE ARCHIVES.</h2>\r\n\r\n<p>The Converse Lucky Star sneaker is a perfect picture of one of our heritage designs. It features every original detail&mdash;unique stitching patterns and Chuck Taylor&rsquo;s signature on back&mdash; while extra cushioning brings the comfort. Looks vintage, feels modern. Win, win.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Canvas upper is lightweight and durable.</li>\r\n	<li>High profile for a classic look.</li>\r\n	<li>Medial eyelets help keep your feet cool.</li>\r\n	<li>Vintage lucky star patch.</li>\r\n</ul>', 0, 9, NULL, NULL, 'dc6175fc42c6160b7507bf6aefb89d44.jpg'),
(123, 'Custom Chuck Taylor', '90.00', 0, '<p>A pair for every day you wake up wanting to match your color to your vibes, in the iconic Chuck Taylor All Star sneaker. The colors you wanted most&mdash;fresh and ready for bright days, cloudy mornings, and all the stories you&rsquo;ll tell about them after.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Canvas upper is lightweight and durable.</li>\r\n	<li>The timeless silhouette you know and love.</li>\r\n	<li>Limited-edition hues bring a pop of color to any outfit.</li>\r\n	<li>Smart Foam sockliner adds extra cushioning.</li>\r\n	<li>Reimagined All Star license plate.</li>\r\n</ul>', 3, 9, NULL, NULL, '6a7b11051b9308005fad6b5d4be6010d.png'),
(124, 'Custom Chuck 70', '110.00', 0, '<p>A pair for every day you wake up wanting to match your color to your vibes, in the iconic Chuck Taylor All Star sneaker. The colors you wanted most&mdash;fresh and ready for bright days, cloudy mornings, and all the stories you&rsquo;ll tell about them after.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Canvas upper is lightweight and durable.</li>\r\n	<li>The timeless silhouette you know and love.</li>\r\n	<li>Limited-edition hues bring a pop of color to any outfit.</li>\r\n	<li>Smart Foam sockliner adds extra cushioning.</li>\r\n	<li>Reimagined All Star license plate.</li>\r\n</ul>', 0, 9, NULL, NULL, '6a497bb94c49710778b7991d042522a5.png'),
(125, 'Chuck Taylor All-star', '100.00', 0, '<p>A pair for every day you wake up wanting to match your color to your vibes, in the iconic Chuck Taylor All Star sneaker. The colors you wanted most&mdash;fresh and ready for bright days, cloudy mornings, and all the stories you&rsquo;ll tell about them after.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Canvas upper is lightweight and durable.</li>\r\n	<li>The timeless silhouette you know and love.</li>\r\n	<li>Limited-edition hues bring a pop of color to any outfit.</li>\r\n	<li>Smart Foam sockliner adds extra cushioning.</li>\r\n	<li>Reimagined All Star license plate.</li>\r\n</ul>', 3, 9, NULL, NULL, '3e10375df748d10405c6ee538009e727.jpg'),
(126, 'SPACE-DYED JERSEY', '90.00', 0, '<p>A T-SHIRT WITH A SPACE-DYED PRINT.</p>\r\n\r\n<p>Late &#39;90s football training gear inspired the look of this t-shirt. It showcases a space-dyed print that gives it a retro look. It&#39;s made of smooth interlock fabric and finished with horizontal 3-Stripes that circle the sleeves.</p>\r\n\r\n<ul>\r\n	<li>Regular fit is not tight and not loose, the perfect in-between fit</li>\r\n	<li>Ribbed crewneck</li>\r\n	<li>Short sleeves</li>\r\n	<li>100% polyester interlock</li>\r\n	<li>Smooth feel</li>\r\n	<li>Allover space-dyed graphic; Trefoil badge</li>\r\n</ul>', 3, 6, NULL, NULL, '141272fc9fe7ffe6ed2cf7d344a71855.jpg'),
(127, 'ID SPRAY DYE TEE', '90.00', 0, '<p>A SOFT T-SHIRT WITH A BATIK-INSPIRED DESIGN.</p>\r\n\r\n<p>This crewneck t-shirt has a look that channels the laid-back vibes of a summer days. The tee is spray dyed, so each piece is one of a kind. It&#39;s made of lightweight fabric for a comfortable worn-in feel right from the start.</p>\r\n\r\n<ul>\r\n	<li>Regular fit strikes a comfortable balance between loose and snug</li>\r\n	<li>Ribbed crewneck</li>\r\n	<li>Short sleeves</li>\r\n	<li>100% recycled polyester single jersey</li>\r\n	<li>Soft, lightweight feel</li>\r\n	<li>This tee is made with recycled polyester to save resources and decrease emissions</li>\r\n</ul>', 0, 6, NULL, NULL, '9b80c1988b926aa12dbf40c5378f2486.jpg'),
(128, 'FLAMESTRIKE JACKET', '90.00', 0, '<p>A TRACK JACKET WITH A FLAMESTRIKE PRINT AND A WATER-REPELLENT FINISH.</p>\r\n\r\n<p>Archival football heritage, remastered for today. This track jacket showcases a Flamestrike print taken from &#39;90s and 2000s designs. It&#39;s made of lightweight plain weave fabric and coated with a water-repellent finish so your football style remains unstoppable on rainy days.</p>\r\n\r\n<ul>\r\n	<li>Regular fit is not tight and not loose, the perfect in-between fit</li>\r\n	<li>Stand-up collar</li>\r\n	<li>Long sleeves</li>\r\n	<li>100% recycled polyester plain weave</li>\r\n	<li>Smooth feel</li>\r\n	<li>Front zip pockets; Full zip</li>\r\n	<li>Durable water-repellent (DWR) coating</li>\r\n</ul>', 0, 6, NULL, NULL, '0abd0e770c04f034edf6479f57135ae1.jpg'),
(129, 'SPACE-DYED HOODIE', '90.00', 0, '<p>A HOODED SWEATSHIRT WITH A SPACE-DYED PRINT.</p>\r\n\r\n<p>Driven by the culture and emotion of the game. Shifting the sportswear status quo. This hoodie showcases a space-dyed print that gives it a retro look. It&#39;s made of French terry and has a plush feel.</p>\r\n\r\n<ul>\r\n	<li>Regular fit is not tight and not loose, the perfect in-between fit</li>\r\n	<li>Long sleeves with ribbed cuffs</li>\r\n	<li>100% polyester French terry</li>\r\n	<li>Soft feel</li>\r\n	<li>Kangaroo pocket; Drawcord on hood</li>\r\n	<li>Allover space-dyed graphic; Trefoil badge</li>\r\n</ul>', 0, 6, NULL, NULL, 'a02efab233879bfad0700123f1c36b58.jpg'),
(130, 'NikeLab ACG Down-Fill', '499.00', 0, '<p><strong>BUILT TO MOVE. DESIGNED TO ADAPT.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>When cold weather hits, it&#39;s time to pull out the puffer. The NikeLab ACG Down-Fill Men&#39;s Parka is made from ripstop fabric and down fill to keep you warm and dry. Snaps at the hem let you adjust the coverage on the go.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Benefits</strong></p>\r\n\r\n<ul>\r\n	<li>Lightweight down fill helps keep you warm and comfortable.</li>\r\n	<li>Internal straps let you carry the jacket.</li>\r\n	<li>2-way front zips reveal pockets to store your stuff.</li>\r\n	<li>An interior zipped pocket adds extra storage.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Product Details</strong></p>\r\n\r\n<ul>\r\n	<li>Underarm zips for ventilation</li>\r\n	<li>Fabric: Body/lining: 100% polyester. Body fill: white goose down (minimum 90% down).</li>\r\n	<li>Machine wash</li>\r\n	<li>Imported</li>\r\n	<li>Colour Shown: White</li>\r\n	<li>Style: AQ3517-100</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n</ul>', 0, 18, NULL, NULL, 'd3fe02c733f34f2d7fb0291e063cf8b8.png'),
(131, 'NikeLab ACG GORE-TEX®', '369.00', 0, '<p><strong>Magnetic Storage and Style</strong></p>\r\n\r\n<p>A zipped, dimensional deploy pocket has a magnetic closure to store your daily must-haves. It can be moved from the outside of the jacket to the inside for hidden storage.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Wear It Your Way</strong></p>\r\n\r\n<p>Multiple zips on the front and underarms let you adjust the airflow when you need it. Interior carrying straps add a handy, modern detail when the temperature rises.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>More Details</strong></p>\r\n\r\n<ul>\r\n	<li>WARNING: This product contains magnets</li>\r\n	<li>Fabric: 100% polyester</li>\r\n	<li>Machine wash</li>\r\n	<li>Imported</li>\r\n	<li>Colour Shown: Elemental Pink/White</li>\r\n	<li>Style: 923952-678</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	&nbsp;\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>About the NikeLab ACG Collection</strong></p>\r\n\r\n<p>NikeLab ACG is built for all conditions. This intersecting apparel system equips women and men to conquer the urban landscape despite intense heat or torrential downpour. Designed with ACRONYM&reg; founder Errolson Hugh, NikeLab ACG embodies his form-follows-function ethos and Nike&#39;s dedication to performance and mobility. Extreme fit-testing, breathable, protective fabric and modern design empower you to move, adapt and protect yourself from the elements. ACG means all-conditions gear. And all conditions means all conditions.</p>', 0, 18, NULL, NULL, '1be4bd4ced9b349c1ed9ab0ed5bf0a97.png'),
(132, 'Nike ACG GORE-TEX®', '349.00', 0, '<p><strong>Breathable and Waterproof</strong></p>\r\n\r\n<p>Wind-resistant, 3-layer GORE-TEX&reg; fabric is breathable and waterproof. A storm guard on the 2-way front zip and an adjustable hood help keep you covered from the elements.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Practical Elements</strong></p>\r\n\r\n<p>4 exterior zip pockets securely store your stuff. Underarm zips let you adjust ventilation, and a hem drawcord allows adjustability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Product Details</strong></p>\r\n\r\n<ul>\r\n	<li>Slightly loose fit</li>\r\n	<li>Hook-and-loop wrist closures</li>\r\n	<li>Interior drawcord</li>\r\n	<li>Embroidered graphic</li>\r\n	<li>Fabric: 100% polyester</li>\r\n	<li>Machine wash</li>\r\n	<li>Imported</li>\r\n	<li>Colour Shown: Black</li>\r\n	<li>Style: BQ7195-010</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n</ul>', 0, 18, NULL, NULL, 'a4edabfdf1c1cffdf4b07f2ea853c3e2.png'),
(133, 'NikeLab Collection', '299.00', 0, '<p><strong>Simple Customisation</strong></p>\r\n\r\n<p>The lining features a zipped opening so you can sew your own patches onto the exterior without destroying the seams.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Premium Construction</strong></p>\r\n\r\n<p>A wool body and full-grain leather sleeves combine to bring you a modern, slightly oversized silhouette.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thoroughly Insulated</strong></p>\r\n\r\n<p>Primaloft insulation delivers premium warmth on the body and sleeves.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>More Details</strong></p>\r\n\r\n<ul>\r\n	<li>Bonded, zip chest pocket for storage</li>\r\n	<li>Fabric: Body: 65% wool/35% polyester. Sleeves: 100% leather. Lining/fill: 100% polyester.</li>\r\n	<li>Spot clean</li>\r\n	<li>Imported</li>\r\n	<li>Colour Shown: Black/Black</li>\r\n	<li>Style: 908644-010</li>\r\n	<li>Country/Region of Origin: Vietnam</li>\r\n</ul>', 0, 18, NULL, NULL, 'c48830a27001fe41d212fffe20ac3046.png'),
(135, 'Packable Hooded', '85.00', 0, '<h2>PACKABLE PROTECTION.</h2>\r\n\r\n<p>The Packable Hooded Anorak Jacket features water-resistant ripstop fabric, a zipper for easy on and off, and front welt pockets. Even better, it packs into a small pouch for convenient travel. Bring on the rain.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Lightweight ripstop fabric provides durability.</li>\r\n	<li>A hood for added protection.</li>\r\n	<li>Packs into a small pouch for travel.</li>\r\n	<li>Snap adjustments at the side seam for easy on, easy off.</li>\r\n	<li>100% Polyester</li>\r\n</ul>', 0, 8, NULL, NULL, 'f1fcaa0d466e85e9f052e367636f776b.jpg'),
(136, 'Chill Chino', '55.00', 0, '<h2>STYLISH AND STRIPED.</h2>\r\n\r\n<p>The Converse Chill Chino Pant brings comfort to a new level. This lightweight cotton canvas pant features convenient hand pockets, woven tape details, cropped hems and a secure fit. Pair them with everything.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>100% cotton fabric is soft and comfortable.</li>\r\n	<li>Cropped just above the ankle.</li>\r\n	<li>Internal drawcord and elasticated waistband for snug and stretchy fit.</li>\r\n	<li>Contrast taping down the sides adds visual interest.</li>\r\n	<li>Converse wordmark down side taping.</li>\r\n</ul>', 0, 8, NULL, NULL, 'a886fca23a330dcd19bedf24e8809498.jpg'),
(137, 'Metal Pullover', '65.00', 0, '<h2>ELECTRIC</h2>\r\n\r\n<p>Inspired by late &#39;80s basketball style, the Converse JUST DON Metal Pullover Hoodie brings electric graphics and courtside comfort.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>Classic fit for everyday comfort.</li>\r\n	<li>An oversized kangaroo pocket provides warmth and convenience.</li>\r\n	<li>Adjustable hood for personalized coverage.</li>\r\n	<li>CONS wordmark across front.</li>\r\n	<li>80% Cotton, 20% Polyester</li>\r\n</ul>', 0, 8, NULL, NULL, '0ceb4ec9539686e71387ce67a6e2aa75.jpg'),
(138, 'Collegiate Text Pullover', '55.00', 0, '<h2>COLLEGE THROWBACK.</h2>\r\n\r\n<p>Bringing it back to the days of higher education, the Converse Collegiate Pullover Hoodie sports collegiate-inspired graphics with seasonal Star Chevron in contrast colors. The 100% cotton jersey fits comfortably for a day back at the alma mater.</p>\r\n\r\n<p>WHY YOU SHOULD BE DOWN</p>\r\n\r\n<ul>\r\n	<li>A midweight cotton/poly blend is durable and comfortable.</li>\r\n	<li>Contrast stripe details give off varsity style.</li>\r\n	<li>An oversized kangaroo pocket provides warmth and convenience.</li>\r\n	<li>Ribbed cuffs and hem are snug and stylish.</li>\r\n	<li>80% Cotton, 20% Polyester</li>\r\n</ul>', 0, 8, NULL, NULL, 'f1a74b6a99f35487568740ee182cb85a.jpg'),
(143, 'Áo bà ba', '90.00', 0, '<p>&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba&Aacute;o b&agrave; ba</p>', 1, 18, NULL, NULL, 'e5295ac389ed8ab1da1a7897b37cd9fb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ratingNum` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `ratingNum`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 5, 20, 98, '2019-03-30 01:59:02', '2019-03-30 01:59:02'),
(2, 5, 20, 98, '2019-03-30 02:00:26', '2019-03-30 02:00:26'),
(3, 5, 20, 98, '2019-03-30 02:00:32', '2019-03-30 02:00:32'),
(4, 5, 20, 98, '2019-03-30 02:06:25', '2019-03-30 02:06:25'),
(5, 3, 20, 109, '2019-03-30 02:11:36', '2019-03-30 02:11:36'),
(6, 4, 20, 109, '2019-03-30 02:12:04', '2019-03-30 02:12:04'),
(7, 3, 20, 109, '2019-03-30 02:14:30', '2019-03-30 02:14:30'),
(8, 2, 10, 109, '2019-03-30 02:36:48', '2019-03-30 02:36:48'),
(9, 5, 10, 109, '2019-03-30 02:46:31', '2019-03-30 02:46:31'),
(10, 4, 10, 109, '2019-03-30 02:46:56', '2019-03-30 02:46:56'),
(11, 5, 10, 109, '2019-03-30 02:47:22', '2019-03-30 02:47:22'),
(17, 1, 10, 109, NULL, NULL),
(18, 2, 10, 109, NULL, NULL),
(19, 3, 11, 109, NULL, NULL),
(20, 4, 11, 109, NULL, NULL),
(21, 2, 13, 109, NULL, NULL),
(22, 5, 10, 98, '2019-04-01 13:06:43', '2019-04-01 13:06:43'),
(23, 5, 10, 98, NULL, NULL),
(24, 5, 10, 113, '2019-04-01 15:16:14', '2019-04-01 15:16:14'),
(25, 5, 10, 115, '2019-04-01 15:17:08', '2019-04-01 15:17:08'),
(26, 5, 10, 116, '2019-04-01 15:17:48', '2019-04-01 15:17:48'),
(27, 5, 20, 116, '2019-04-01 15:19:45', '2019-04-01 15:19:45'),
(28, 3, 20, 117, '2019-04-01 15:38:39', '2019-04-01 15:38:39'),
(29, 5, 10, 112, '2019-04-04 09:57:24', '2019-04-04 09:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `avatar`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$XknKtqSTQ3jEaKB4iz.yHuXCenAOlqQmLvBJV54WC.jOk.k2QspLe', '1553829463.jpg', 1, 'wLuDxZm6G0pN4Nm0WGsWObtBPH1jdz9NvSb69s8rU9bYj5bUpuiwffN1hg9X', '2019-03-12 01:32:23', '2019-03-29 03:17:43'),
(11, 'supperadmin', 'supperadmin@gmail.com', NULL, '$2y$10$EvQ/G9d62bwzui7DZ0SBgenUiLjXztPE1v/aaVuH8v2MrbsiDfUuO', '', 2, NULL, '2019-03-12 01:35:14', '2019-03-12 01:35:14'),
(13, 'thuongne111', 'thuongne111@gmail.com', NULL, '$2y$10$wAih2mmM0SKbrP4EsPKVL.1W4PUkVqavq3ioQ3yr3KQsBH8UBShg.', '', 2, NULL, '2019-03-12 01:37:03', '2019-03-12 01:37:03'),
(14, '01264445254', 'as1212d@gmail.com', NULL, '$2y$10$1pC2Dt58OebUe6F6cwnfY.DfriO/aK/m72lg6arTZugFXfBSkNX/y', '', 2, NULL, '2019-03-12 01:38:21', '2019-03-12 01:38:21'),
(18, 'nguyenn311', 'nguyenn311@gmail.com', NULL, '$2y$10$TEYOgMjZUPf5S4MRs34fV.9F34nKCPUItkZRfl.iWO9XfGPsDC8JK', '', 2, NULL, '2019-03-12 01:41:26', '2019-03-12 01:41:26'),
(19, 'hihiha', 'hihiha@gmail.com', NULL, '$2y$10$YrnxX6umtwJUvWFTvi6Y5.54hOSw0/VQC40tQ9OrXAz82Ars/AJXS', '1553094856.jpg', 2, 'OSGDFqHoRA04lRsdyBmJCEbZ5sgcmydwoZTxwtMje9ptyvsA8OE8QYACej7I', '2019-03-12 01:43:58', '2019-03-20 15:14:16'),
(20, 'mamana', 'mamana@gmail.com', NULL, '$2y$10$.oPIwtPCyvlOWXmjF7gu/e3P/ggL1WaFHrLPuX8KLK3ojnQsvC6Gm', '1553829463.jpg', 2, 'hKWQ0EjRe1p7AtnQtk1Pwjz5zZvrNjzM5lray4ki3mEMiheeRLhB02xFoWre', '2019-03-12 01:45:23', '2019-03-27 11:32:06'),
(21, 'anhdayne', 'anhdayne123@gmail.com', NULL, '$2y$10$cbHqzUsPVjMq1kc5XX9uru1DyblPxhDWgVOXJckv5Pvqh0l0wJ7ki', '1553226240.png', 2, NULL, '2019-03-22 00:54:15', '2019-03-22 03:44:00'),
(23, 'thuongnemm', 'thuongnemm@gmail.com', NULL, '$2y$10$AKTv7WYHw7p3SRD2dqpH.eF0wau/qfEojGdrQrDVyaHyxCvbkrktO', '', 2, 'f49xZyTjUFR4ws4tNa3Z2iBCt2MEYuJWu7jvHPKBSXhrSFXWxALxQPaDh4NG', '2019-03-22 00:56:38', '2019-03-22 00:56:38'),
(24, 'admin123', 'thuongnnpd02383@fpt.edu.vn', NULL, '$2y$10$wQcqqMW5gmHOZvaNrWZI7uNnn93BW5yzQr8TpvY.noQcK8Rfhcy9e', '', 2, NULL, '2019-03-26 15:32:33', '2019-03-26 15:32:33'),
(26, 'admin1211', 'thuongnnpd023831@fpt.edu.vn', NULL, '$2y$10$e0/JuwUYgqhcBy.KeglT0uK0FuaCYHIRDxv/1VrXT45GRZTouWFGq', '', 2, NULL, '2019-03-28 03:43:06', '2019-03-28 03:43:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails_order_id_foreign` (`order_id`),
  ADD KEY `orderdetails_product_id_foreign` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetails_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
