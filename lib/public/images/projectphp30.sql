-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 06:04 PM
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
(1, 'Nike', 'nike', NULL, NULL, 0),
(2, 'Adidas', 'adidas', NULL, NULL, 0),
(3, 'Converse', 'converse', NULL, NULL, 0),
(4, 'Áo Nike', 'ao-nike', NULL, NULL, 1),
(5, 'Giày Nike', 'giay-nike', NULL, NULL, 1),
(6, 'Áo Adidas', 'ao-adidas', NULL, NULL, 2),
(7, 'Giày Adidas', 'giay-adidas', NULL, NULL, 2),
(8, 'Áo Converse', 'ao-converse', NULL, NULL, 3),
(9, 'Giày Converse', 'giay-converse', NULL, NULL, 3);

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
(1, 'm1.jpg', 1, NULL, NULL),
(2, 'm1.jpg', 1, NULL, NULL),
(3, 'm1.png', 34, NULL, NULL),
(4, 'm1.png', 7, NULL, NULL),
(5, 'm1.png', 71, NULL, NULL),
(6, 'm1.png', 39, NULL, NULL),
(7, 'm1.png', 100, NULL, NULL),
(8, 'm1.png', 92, NULL, NULL),
(9, 'm1.png', 94, NULL, NULL),
(10, 'm1.png', 19, NULL, NULL),
(11, 'm1.png', 18, NULL, NULL),
(12, 'm1.png', 5, NULL, NULL),
(13, 'm1.png', 80, NULL, NULL),
(14, 'm1.png', 56, NULL, NULL),
(15, 'm1.png', 42, NULL, NULL),
(16, 'm1.png', 93, NULL, NULL),
(17, 'm1.png', 24, NULL, NULL),
(18, 'm1.png', 24, NULL, NULL),
(19, 'm1.png', 8, NULL, NULL),
(20, 'm1.png', 35, NULL, NULL),
(21, 'm1.png', 12, NULL, NULL),
(22, 'm1.png', 53, NULL, NULL),
(23, 'm1.png', 34, NULL, NULL),
(24, 'm1.png', 14, NULL, NULL),
(25, 'm1.png', 91, NULL, NULL),
(26, 'm1.png', 14, NULL, NULL),
(27, 'm1.png', 6, NULL, NULL),
(28, 'm1.png', 34, NULL, NULL),
(29, 'm1.png', 32, NULL, NULL),
(30, 'm1.png', 21, NULL, NULL),
(31, 'm1.png', 72, NULL, NULL),
(32, 'm1.png', 42, NULL, NULL),
(33, 'm1.png', 69, NULL, NULL),
(34, 'm1.png', 40, NULL, NULL),
(35, 'm1.png', 67, NULL, NULL),
(36, 'm1.png', 82, NULL, NULL),
(37, 'm1.png', 68, NULL, NULL),
(38, 'm1.png', 75, NULL, NULL),
(39, 'm1.png', 80, NULL, NULL),
(40, 'm1.png', 31, NULL, NULL),
(41, 'm1.png', 81, NULL, NULL),
(42, 'm1.png', 50, NULL, NULL),
(43, 'm1.png', 14, NULL, NULL),
(44, 'm1.png', 54, NULL, NULL),
(45, 'm1.png', 89, NULL, NULL),
(46, 'm1.png', 96, NULL, NULL),
(47, 'm1.png', 79, NULL, NULL),
(48, 'm1.png', 13, NULL, NULL),
(49, 'm1.png', 89, NULL, NULL),
(50, 'm1.png', 38, NULL, NULL),
(51, 'm1.png', 26, NULL, NULL),
(52, 'm1.png', 7, NULL, NULL),
(53, 'm1.png', 98, NULL, NULL),
(54, 'm1.png', 56, NULL, NULL),
(55, 'm1.png', 7, NULL, NULL),
(56, 'm1.png', 35, NULL, NULL),
(57, 'm1.png', 2, NULL, NULL),
(58, 'm1.png', 4, NULL, NULL),
(59, 'm1.png', 83, NULL, NULL),
(60, 'm1.png', 78, NULL, NULL),
(61, 'm1.png', 34, NULL, NULL),
(62, 'm1.png', 84, NULL, NULL),
(63, 'm1.png', 95, NULL, NULL),
(64, 'm1.png', 25, NULL, NULL),
(65, 'm1.png', 93, NULL, NULL),
(66, 'm1.png', 16, NULL, NULL),
(67, 'm1.png', 53, NULL, NULL),
(68, 'm1.png', 91, NULL, NULL),
(69, 'm1.png', 100, NULL, NULL),
(70, 'm1.png', 47, NULL, NULL),
(71, 'm1.png', 4, NULL, NULL),
(72, 'm1.png', 55, NULL, NULL),
(73, 'm1.png', 80, NULL, NULL),
(74, 'm1.png', 55, NULL, NULL),
(75, 'm1.png', 28, NULL, NULL),
(76, 'm1.png', 49, NULL, NULL),
(77, 'm1.png', 93, NULL, NULL),
(78, 'm1.png', 82, NULL, NULL),
(79, 'm1.png', 50, NULL, NULL),
(80, 'm1.png', 23, NULL, NULL),
(81, 'm1.jpg', 1, NULL, NULL),
(82, 'm1.png', 12, NULL, NULL),
(83, 'm1.png', 29, NULL, NULL),
(84, 'm1.png', 51, NULL, NULL),
(85, 'm1.png', 51, NULL, NULL),
(86, 'm1.png', 64, NULL, NULL),
(87, 'm1.png', 9, NULL, NULL),
(88, 'm1.png', 90, NULL, NULL),
(89, 'm1.png', 76, NULL, NULL),
(90, 'm1.png', 60, NULL, NULL),
(91, 'm1.png', 23, NULL, NULL),
(92, 'm1.png', 19, NULL, NULL),
(93, 'm1.png', 94, NULL, NULL),
(94, 'm1.png', 47, NULL, NULL),
(95, 'm1.png', 55, NULL, NULL),
(96, 'm1.png', 15, NULL, NULL),
(97, 'm1.png', 39, NULL, NULL),
(98, 'm1.png', 45, NULL, NULL),
(99, 'm1.png', 67, NULL, NULL),
(100, 'm1.png', 92, NULL, NULL);

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
(9, '2019_03_11_122450_create_orderdetails_table', 7);

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
  `code` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `image` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `description`, `view`, `category_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Giày96', '1997.00', 0, 'Giày chất lượng cao27', 999, 9, NULL, NULL, 'm1.jpg'),
(2, 'Giày68', '462.00', 0, 'Giày chất lượng cao25', 888, 4, NULL, NULL, 'm1.jpg'),
(3, 'Giày38', '1999.00', 1, 'Giày chất lượng cao38', 777, 2, NULL, NULL, 'm1.jpg'),
(4, 'Giày99', '1035.00', 1, 'Giày chất lượng cao69', 666, 3, NULL, NULL, 'm1.jpg'),
(5, 'Giày15', '768.00', 0, 'Giày chất lượng cao56', 555, 9, NULL, NULL, 'm1.jpg'),
(6, 'Giày45', '1557.00', 0, 'Giày chất lượng cao24', 0, 1, NULL, NULL, 'm1.jpg'),
(7, 'Giày100', '1991.00', 1, 'Giày chất lượng cao80', 0, 3, NULL, NULL, 'm1.jpg'),
(8, 'Giày37', '805.00', 1, 'Giày chất lượng cao9', 0, 2, NULL, NULL, 'm1.jpg'),
(9, 'Giày79', '811.00', 0, 'Giày chất lượng cao75', 0, 4, NULL, NULL, 'm1.jpg'),
(10, 'Giày48', '1719.00', 1, 'Giày chất lượng cao42', 0, 7, NULL, NULL, 'm1.jpg'),
(11, 'Giày45', '813.00', 1, 'Giày chất lượng cao84', 0, 2, NULL, NULL, 'm1.jpg'),
(12, 'Giày37', '1694.00', 0, 'Giày chất lượng cao74', 0, 4, NULL, NULL, 'm1.jpg'),
(13, 'Giày11', '1010.00', 1, 'Giày chất lượng cao93', 0, 1, NULL, NULL, 'm1.jpg'),
(14, 'Giày66', '1728.00', 0, 'Giày chất lượng cao43', 0, 1, NULL, NULL, 'm1.jpg'),
(15, 'Giày38', '643.00', 1, 'Giày chất lượng cao78', 0, 2, NULL, NULL, 'm1.jpg'),
(16, 'Giày30', '1565.00', 0, 'Giày chất lượng cao3', 0, 2, NULL, NULL, 'm1.jpg'),
(17, 'Giày34', '515.00', 0, 'Giày chất lượng cao81', 0, 1, NULL, NULL, 'm1.jpg'),
(18, 'Giày74', '788.00', 0, 'Giày chất lượng cao28', 0, 4, NULL, NULL, 'm1.jpg'),
(19, 'Giày45', '1735.00', 1, 'Giày chất lượng cao7', 0, 2, NULL, NULL, 'm1.jpg'),
(20, 'Giày53', '211.00', 1, 'Giày chất lượng cao56', 0, 3, NULL, NULL, 'm1.jpg'),
(21, 'Giày11', '1939.00', 1, 'Giày chất lượng cao95', 0, 9, NULL, NULL, 'm1.png'),
(22, 'Giày77', '488.00', 1, 'Giày chất lượng cao46', 0, 3, NULL, NULL, 'm1.png'),
(23, 'Giày7', '1058.00', 0, 'Giày chất lượng cao7', 0, 9, NULL, NULL, 'm1.png'),
(24, 'Giày3', '908.00', 1, 'Giày chất lượng cao56', 0, 8, NULL, NULL, 'm1.png'),
(25, 'Giày87', '723.00', 0, 'Giày chất lượng cao9', 0, 8, NULL, NULL, 'm1.png'),
(26, 'Giày78', '326.00', 1, 'Giày chất lượng cao52', 0, 5, NULL, NULL, 'm1.png'),
(27, 'Giày65', '1784.00', 0, 'Giày chất lượng cao7', 0, 9, NULL, NULL, 'm1.png'),
(28, 'Giày35', '1160.00', 0, 'Giày chất lượng cao69', 0, 9, NULL, NULL, 'm1.png'),
(29, 'Giày55', '1526.00', 0, 'Giày chất lượng cao37', 0, 5, NULL, NULL, 'm1.png'),
(30, 'Giày88', '1311.00', 1, 'Giày chất lượng cao77', 0, 4, NULL, NULL, 'm1.png'),
(31, 'Giày29', '1733.00', 0, 'Giày chất lượng cao51', 0, 7, NULL, NULL, 'm1.png'),
(32, 'Giày23', '1680.00', 1, 'Giày chất lượng cao1', 0, 6, NULL, NULL, 'm1.png'),
(33, 'Giày37', '216.00', 0, 'Giày chất lượng cao68', 0, 7, NULL, NULL, 'm1.png'),
(34, 'Giày98', '1100.00', 0, 'Giày chất lượng cao73', 0, 4, NULL, NULL, 'm1.png'),
(35, 'Giày31', '686.00', 0, 'Giày chất lượng cao86', 0, 4, NULL, NULL, 'm1.png'),
(36, 'Giày85', '1269.00', 0, 'Giày chất lượng cao83', 0, 8, NULL, NULL, 'm1.png'),
(37, 'Giày65', '1236.00', 0, 'Giày chất lượng cao68', 0, 9, NULL, NULL, 'm1.png'),
(38, 'Giày95', '1443.00', 1, 'Giày chất lượng cao94', 0, 6, NULL, NULL, 'm1.png'),
(39, 'Giày50', '1408.00', 0, 'Giày chất lượng cao56', 0, 7, NULL, NULL, 'm1.png'),
(40, 'Giày16', '1526.00', 0, 'Giày chất lượng cao65', 0, 3, NULL, NULL, 'm1.png'),
(41, 'Giày34', '681.00', 1, 'Giày chất lượng cao42', 0, 8, NULL, NULL, 'm1.png'),
(42, 'Giày54', '1072.00', 0, 'Giày chất lượng cao10', 0, 3, NULL, NULL, 'm1.png'),
(43, 'Giày81', '979.00', 0, 'Giày chất lượng cao91', 0, 3, NULL, NULL, 'm1.png'),
(44, 'Giày14', '1719.00', 0, 'Giày chất lượng cao20', 0, 9, NULL, NULL, 'm1.png'),
(45, 'Giày89', '246.00', 0, 'Giày chất lượng cao41', 0, 9, NULL, NULL, 'm1.png'),
(46, 'Giày49', '1334.00', 0, 'Giày chất lượng cao62', 0, 1, NULL, NULL, 'm1.png'),
(47, 'Giày68', '866.00', 0, 'Giày chất lượng cao56', 0, 3, NULL, NULL, 'm1.png'),
(48, 'Giày35', '426.00', 0, 'Giày chất lượng cao88', 0, 5, NULL, NULL, 'm1.png'),
(49, 'Giày35', '1787.00', 1, 'Giày chất lượng cao57', 0, 9, NULL, NULL, 'm1.png'),
(50, 'Giày90', '1296.00', 0, 'Giày chất lượng cao75', 0, 1, NULL, NULL, 'm1.png'),
(51, 'Giày84', '879.00', 1, 'Giày chất lượng cao97', 0, 6, NULL, NULL, 'm1.png'),
(52, 'Giày96', '1399.00', 0, 'Giày chất lượng cao9', 0, 9, NULL, NULL, 'm1.jpg'),
(53, 'Giày64', '1507.00', 0, 'Giày chất lượng cao98', 0, 8, NULL, NULL, 'm1.png'),
(54, 'Giày47', '948.00', 1, 'Giày chất lượng cao8', 0, 5, NULL, NULL, 'm1.png'),
(55, 'Giày49', '738.00', 1, 'Giày chất lượng cao84', 0, 5, NULL, NULL, 'm1.png'),
(56, 'Giày78', '1306.00', 1, 'Giày chất lượng cao44', 0, 3, NULL, NULL, 'm1.png'),
(57, 'Giày82', '581.00', 0, 'Giày chất lượng cao51', 0, 6, NULL, NULL, 'm1.png'),
(58, 'Giày49', '1734.00', 1, 'Giày chất lượng cao98', 0, 7, NULL, NULL, 'm1.png'),
(59, 'Giày83', '937.00', 0, 'Giày chất lượng cao50', 0, 3, NULL, NULL, 'm1.png'),
(60, 'Giày86', '613.00', 0, 'Giày chất lượng cao12', 0, 9, NULL, NULL, 'm1.png'),
(61, 'Giày20', '850.00', 0, 'Giày chất lượng cao92', 0, 2, NULL, NULL, 'm1.png'),
(62, 'Giày57', '1931.00', 1, 'Giày chất lượng cao74', 0, 4, NULL, NULL, 'm1.png'),
(63, 'Giày26', '1107.00', 0, 'Giày chất lượng cao49', 0, 7, NULL, NULL, 'm1.png'),
(64, 'Giày9', '1579.00', 1, 'Giày chất lượng cao82', 0, 3, NULL, NULL, 'm1.png'),
(65, 'Giày64', '787.00', 1, 'Giày chất lượng cao56', 0, 7, NULL, NULL, 'm1.png'),
(66, 'Giày4', '1323.00', 0, 'Giày chất lượng cao90', 0, 8, NULL, NULL, 'm1.png'),
(67, 'Giày65', '1016.00', 1, 'Giày chất lượng cao57', 0, 9, NULL, NULL, 'm1.png'),
(68, 'Giày49', '300.00', 1, 'Giày chất lượng cao15', 0, 2, NULL, NULL, 'm1.png'),
(69, 'Giày92', '1273.00', 0, 'Giày chất lượng cao91', 0, 3, NULL, NULL, 'm1.png'),
(70, 'Giày30', '1502.00', 0, 'Giày chất lượng cao51', 0, 5, NULL, NULL, 'm1.png'),
(71, 'Giày67', '1767.00', 0, 'Giày chất lượng cao21', 0, 6, NULL, NULL, 'm1.png'),
(72, 'Giày74', '975.00', 0, 'Giày chất lượng cao25', 0, 2, NULL, NULL, 'm1.png'),
(73, 'Giày4', '423.00', 1, 'Giày chất lượng cao29', 0, 4, NULL, NULL, 'm1.png'),
(74, 'Giày9', '593.00', 0, 'Giày chất lượng cao54', 0, 5, NULL, NULL, 'm1.png'),
(75, 'Giày49', '1623.00', 1, 'Giày chất lượng cao73', 0, 5, NULL, NULL, 'm1.png'),
(76, 'Giày12', '1578.00', 0, 'Giày chất lượng cao60', 0, 8, NULL, NULL, 'm1.png'),
(77, 'Giày91', '578.00', 0, 'Giày chất lượng cao35', 0, 6, NULL, NULL, 'm1.png'),
(78, 'Giày1', '683.00', 0, 'Giày chất lượng cao94', 0, 8, NULL, NULL, 'm1.png'),
(79, 'Giày4', '1027.00', 1, 'Giày chất lượng cao9', 0, 4, NULL, NULL, 'm1.png'),
(80, 'Giày51', '695.00', 1, 'Giày chất lượng cao9', 0, 6, NULL, NULL, 'm1.png'),
(81, 'Giày29', '1129.00', 1, 'Giày chất lượng cao63', 0, 4, NULL, NULL, 'm1.png'),
(82, 'Giày20', '957.00', 0, 'Giày chất lượng cao11', 0, 9, NULL, NULL, 'm1.png'),
(83, 'Giày19', '1582.00', 1, 'Giày chất lượng cao98', 0, 8, NULL, NULL, 'm1.png'),
(84, 'Giày11', '1489.00', 0, 'Giày chất lượng cao81', 0, 9, NULL, NULL, 'm1.png'),
(85, 'Giày35', '638.00', 0, 'Giày chất lượng cao85', 0, 7, NULL, NULL, 'm1.png'),
(86, 'Giày5', '1271.00', 0, 'Giày chất lượng cao82', 0, 1, NULL, NULL, 'm1.png'),
(87, 'Giày89', '1554.00', 0, 'Giày chất lượng cao91', 0, 9, NULL, NULL, 'm1.png'),
(88, 'Giày28', '1634.00', 0, 'Giày chất lượng cao24', 0, 7, NULL, NULL, 'm1.png'),
(89, 'Giày24', '945.00', 1, 'Giày chất lượng cao60', 0, 7, NULL, NULL, 'm1.png'),
(90, 'Giày28', '868.00', 0, 'Giày chất lượng cao53', 0, 2, NULL, NULL, 'm1.png'),
(91, 'Giày19', '1036.00', 1, 'Giày chất lượng cao12', 0, 3, NULL, NULL, 'm1.png'),
(92, 'Giày74', '1408.00', 0, 'Giày chất lượng cao83', 0, 4, NULL, NULL, 'm1.png'),
(93, 'Giày95', '723.00', 0, 'Giày chất lượng cao25', 0, 1, NULL, NULL, 'm1.png'),
(94, 'Giày69', '1552.00', 1, 'Giày chất lượng cao29', 0, 3, NULL, NULL, 'm1.png'),
(95, 'Giày89', '1514.00', 1, 'Giày chất lượng cao39', 0, 9, NULL, NULL, 'm1.png'),
(96, 'Giày27', '1156.00', 0, 'Giày chất lượng cao77', 0, 6, NULL, NULL, 'm1.png'),
(97, 'Giày10', '320.00', 0, 'Giày chất lượng cao85', 0, 6, NULL, NULL, 'm1.png'),
(98, 'Giày77', '741.00', 0, 'Giày chất lượng cao78', 0, 9, NULL, NULL, 'm1.png'),
(99, 'Giày88', '1035.00', 0, 'Giày chất lượng cao5', 0, 3, NULL, NULL, 'm1.png'),
(100, 'Giày96', '1850.00', 1, 'Giày chất lượng cao56', 0, 5, NULL, NULL, 'm1.png');

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
(9, '0905827922', 'thuongne1@gmail.com', NULL, '$10$y9dYqkxUYT5.gybpkypGzu1L6XZVGOsuzpqhUBWjkZiWLI9rH0aaa', '', 2, NULL, '2019-03-12 01:26:24', '2019-03-12 01:26:24'),
(10, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$y9dYqkxUYT5.gybpkypGzu1L6XZVGOsuzpqhUBWjkZiWLI9rH0aaa', '', 1, NULL, '2019-03-12 01:32:23', '2019-03-12 01:32:23'),
(11, 'supperadmin', 'supperadmin@gmail.com', NULL, '$2y$10$EvQ/G9d62bwzui7DZ0SBgenUiLjXztPE1v/aaVuH8v2MrbsiDfUuO', '', 2, NULL, '2019-03-12 01:35:14', '2019-03-12 01:35:14'),
(12, 'thuongne11', 'thuongne11@gmail.com', NULL, '$2y$10$YY04VTJRym8NOv9wAS2fIeTv/H5DsE6zx3N/uer83D5WwnMigK9Le', '', 2, NULL, '2019-03-12 01:36:23', '2019-03-12 01:36:23'),
(13, 'thuongne111', 'thuongne111@gmail.com', NULL, '$2y$10$wAih2mmM0SKbrP4EsPKVL.1W4PUkVqavq3ioQ3yr3KQsBH8UBShg.', '', 2, NULL, '2019-03-12 01:37:03', '2019-03-12 01:37:03'),
(14, '01264445254', 'as1212d@gmail.com', NULL, '$2y$10$1pC2Dt58OebUe6F6cwnfY.DfriO/aK/m72lg6arTZugFXfBSkNX/y', '', 2, NULL, '2019-03-12 01:38:21', '2019-03-12 01:38:21'),
(15, 'thuongne1111', 'thuongne1111@gmail.com', NULL, '$2y$10$/fqNLKrAHx5m/EyXa5aw2eJbShsHe/oFp.IuOBla/sO0.hY3N8tkm', '', 2, NULL, '2019-03-12 01:39:59', '2019-03-12 01:39:59'),
(16, 'nguyenn3', 'nguyenn3@gmail.com', NULL, '$2y$10$cGrJrdKp49Ht6BAM4DtTN.6YkGRi1Nt8f47BYVmm5DWOiwA4dDsCa', '', 2, NULL, '2019-03-12 01:40:57', '2019-03-12 01:40:57'),
(17, 'nguyenn31', 'nguyenn31@gmail.com', NULL, '$2y$10$P378b/igLa8fp2DKDy/cKOB8bJwghQxwmpz8TQ6Z5KGzJ3Wu/PpRi', '', 2, NULL, '2019-03-12 01:41:18', '2019-03-12 01:41:18'),
(18, 'nguyenn311', 'nguyenn311@gmail.com', NULL, '$2y$10$TEYOgMjZUPf5S4MRs34fV.9F34nKCPUItkZRfl.iWO9XfGPsDC8JK', '', 2, NULL, '2019-03-12 01:41:26', '2019-03-12 01:41:26'),
(19, 'hihiha', 'hihiha@gmail.com', NULL, '$2y$10$VEvo3fA/jwUIMeVd5NK5n.tp1doqbnuxxuNUzwQpPYx44T9mdKNKS', '', 2, NULL, '2019-03-12 01:43:58', '2019-03-12 01:43:58'),
(20, 'mamana', 'mamana@gmail.com', NULL, '$2y$10$55rO.6qKrsQs680OA8GwqOgETAMtu0ZPRqSqTi6wE0LZV6vEj1DHO', '', 2, NULL, '2019-03-12 01:45:23', '2019-03-12 01:45:23');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
