-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2016 at 05:06 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(10) unsigned NOT NULL,
  `ad_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_type` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `subsection_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `star` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_time` text COLLATE utf8_unicode_ci NOT NULL,
  `aqar_type` int(11) NOT NULL,
  `ad_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_status` int(11) NOT NULL,
  `ad_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `ad_allow` int(11) NOT NULL,
  `allow_comment` int(11) NOT NULL,
  `ad_paned` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `ad_title`, `ad_type`, `section_id`, `price`, `subsection_id`, `city_id`, `make_id`, `model_id`, `year_id`, `lat`, `lang`, `star`, `ad_time`, `aqar_type`, `ad_tags`, `ad_status`, `ad_contact`, `user_id`, `ad_allow`, `allow_comment`, `ad_paned`, `image`, `description`, `created_at`, `updated_at`) VALUES
(32, 'منتج ', 1, 1, '700', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج ', 0, '', 11, 0, 0, 0, '["1438498013.png","1438498015.png","1438498017.png"]', '<p>منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;</p>\r\n\r\n<p>منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;</p>\r\n\r\n<p>منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;منتج&nbsp;</p>\r\n', '2015-08-02 13:55:35', '2015-08-02 13:55:35'),
(33, 'منتج', 1, 2, '800', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج', 0, '', 11, 0, 0, 0, '["1438498566.png","1438498568.png","1438498569.png"]', '<p>منتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:56:10', '2015-08-02 13:56:10'),
(34, 'منتج', 1, 5, '900', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج', 0, '', 11, 0, 0, 0, '["1438498599.png","1438498601.png","1438498603.png"]', '<p>منتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:56:44', '2015-08-02 13:56:44'),
(35, 'منتج', 1, 6, '200', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج', 0, '', 11, 0, 0, 0, '["1438498626.png","1438498627.png","1438498629.png","1438498631.png"]', '<p>منتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:57:12', '2015-08-02 13:57:12'),
(36, 'منتج', 1, 7, '400', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج', 0, '', 11, 0, 0, 0, '["1438498656.png","1438498658.png","1438498660.png","1438498663.png"]', '<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:57:43', '2015-08-02 13:57:43'),
(37, 'منتج', 1, 8, '400', 0, 0, 0, 0, 0, '', '', '', '', 0, ' منتج', 0, '', 11, 0, 0, 0, '["1438498686.png","1438498689.png","1438498691.png","1438498693.png"]', '<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:58:14', '2015-08-02 13:58:14'),
(38, 'منتج', 1, 9, '900', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج', 0, '', 11, 0, 0, 0, '["1438498714.png","1438498716.png","1438498718.png","1438498719.png"]', '<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:58:40', '2015-08-02 13:58:40'),
(39, 'منتج', 1, 1, '500', 0, 0, 0, 0, 0, '', '', '', '', 0, 'منتج', 0, '', 11, 0, 0, 0, '["1438498748.png","1438498750.png","1438498752.png","1438498755.png"]', '<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n\r\n<p>منتجمنتجمنتجمنتجمنتجمنتجمنتجمنتجمنتج</p>\r\n', '2015-08-02 13:59:16', '2015-08-02 13:59:16'),
(40, 'منتج جددي ', 1, 2, '600', 0, 0, 0, 0, 0, '', '', '2', '20', 0, 'منتج جددي ', 0, '', 11, 0, 0, 0, '["1471843506.jpg","1471843509.png"]', '<p>منتج جددي&nbsp;</p>\r\n', '2016-08-22 13:25:10', '2016-08-22 13:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `adsview`
--

CREATE TABLE IF NOT EXISTS `adsview` (
  `id` int(10) unsigned NOT NULL,
  `ads_ip` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adsview`
--

INSERT INTO `adsview` (`id`, `ads_ip`, `ads_id`, `created_at`, `updated_at`) VALUES
(1, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 55, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 0, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 0, 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 0, 33, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 0, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 0, 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 0, 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 0, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `baner`
--

CREATE TABLE IF NOT EXISTS `baner` (
  `id` int(10) unsigned NOT NULL,
  `baner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baner_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baner`
--

INSERT INTO `baner` (`id`, `baner_name`, `baner_link`, `image`, `type`, `created_at`, `updated_at`) VALUES
(6, '######', '######', 'assets/admin/img/products/1438497181.png', 1, '2015-02-25 04:34:33', '2015-08-09 13:43:02'),
(7, '#####', '######', 'assets/admin/img/products/1438497203.png', 1, '2015-02-25 04:35:37', '2015-08-09 13:43:06'),
(8, '####', '####', 'assets/admin/img/products/1438497211.png', 1, '2015-02-25 04:38:15', '2015-08-09 13:43:10'),
(13, 'سسسس', 'http://localhost/sheble/baner/add', 'assets/admin/img/products/sarosa-offer_shelf.png', 2, '2015-08-09 13:42:56', '2015-08-09 13:42:56'),
(14, 'ققق', 'قققققققققققققق', 'assets/admin/img/products/sarosa-contact_form_error.png', 2, '2015-08-09 13:43:32', '2015-08-09 13:43:32'),
(15, 'ثثثثثثث', 'ثثثثثثثثثثثث', 'assets/admin/img/products/sarosa-testimonials-placeholder.png', 2, '2015-08-09 13:43:42', '2015-08-09 13:43:42'),
(16, 'ssssssssssssssssssssssssss', 'ssssssssssssssss', 'assets/admin/img/products/sarosa-testimonials-placeholder.png', 2, '2015-08-09 13:45:50', '2015-08-09 13:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(10) unsigned NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_ipan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `bank_num`, `bank_ipan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الاهلي', '05555555555', 'RHHJU', 'assets/admin/img/products/sarosa-99 (2).jpg', '2015-06-17 01:50:37', '2015-06-17 01:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(10) unsigned NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `country_id`, `created_at`, `updated_at`) VALUES
(6, 'الرياض', 2, '2014-12-09 04:29:42', '2014-12-09 04:29:42'),
(7, 'تبوك', 4, '2014-12-09 04:31:06', '2014-12-09 04:31:06'),
(8, 'مكه', 1, '2015-03-04 02:59:05', '2015-03-04 02:59:05'),
(9, 'جده', 1, '2015-03-04 03:00:53', '2015-03-04 03:00:53'),
(10, 'جيزان', 1, '2015-03-04 03:01:07', '2015-03-04 03:01:07'),
(11, 'مكه', 1, '2015-03-04 03:01:14', '2015-03-04 03:01:14'),
(12, 'الطائف', 1, '2015-03-04 03:01:20', '2015-03-04 03:01:20'),
(13, 'جيزان', 1, '2015-03-04 03:01:35', '2015-03-04 03:01:35'),
(14, 'بريده', 1, '2015-03-04 03:01:43', '2015-03-04 03:01:43'),
(15, 'ينبع', 1, '2015-03-04 03:01:49', '2015-03-04 03:01:49'),
(16, 'القصيم', 1, '2015-03-04 03:01:55', '2015-03-04 03:01:55'),
(17, 'الحفر', 1, '2015-03-04 03:02:01', '2015-03-04 03:02:01'),
(18, 'المجمعه', 1, '2015-03-04 03:02:07', '2015-03-04 03:02:07'),
(19, 'الزلفي', 1, '2015-03-04 03:02:13', '2015-03-04 03:02:13'),
(20, 'عرعر', 1, '2015-03-04 03:02:30', '2015-03-04 03:02:30'),
(21, 'عنيزه', 1, '2015-03-04 03:04:36', '2015-03-04 03:04:36'),
(22, 'المدينه', 1, '2015-03-04 03:05:20', '2015-03-04 03:05:20'),
(23, 'الدمام', 1, '2015-03-04 03:06:48', '2015-03-04 03:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) unsigned NOT NULL,
  `comment_user_id` int(11) NOT NULL,
  `comment_is_approve` int(11) NOT NULL,
  `comment_ads_id` int(11) NOT NULL,
  `comment_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment_user_id`, `comment_is_approve`, `comment_ads_id`, `comment_text`, `created_at`, `updated_at`) VALUES
(22, 11, 1, 6, 'asassa', '2014-12-21 16:17:02', '2014-12-21 16:17:02'),
(23, 11, 1, 6, 'asasasa', '2014-12-21 16:17:05', '2014-12-21 16:17:05'),
(24, 11, 1, 12, 'سسسسسسسسسسسسس', '2015-03-01 09:32:04', '2015-03-01 09:32:04'),
(25, 11, 1, 12, 'ششششششششششششششششششش', '2015-03-01 09:32:14', '2015-03-01 09:32:14'),
(26, 11, 1, 12, 'ئئئئئئئئئئئئئئئئئئئئئئ', '2015-03-01 09:32:25', '2015-03-01 09:32:25'),
(27, 11, 1, 12, 'كوكو', '2015-03-01 09:34:24', '2015-03-01 09:34:24'),
(28, 11, 1, 31, 'كم  تسوم', '2015-03-04 07:14:56', '2015-03-04 07:14:56'),
(29, 11, 1, 31, 'كم  تسوم هذه ', '2015-03-04 07:17:38', '2015-03-04 07:17:38'),
(30, 11, 1, 32, 'كم تسوم ', '2015-03-04 07:20:38', '2015-03-04 07:20:38'),
(31, 11, 1, 32, 'كم تسوم هذه  يا طيب ', '2015-03-04 07:20:49', '2015-03-04 07:20:49'),
(32, 11, 1, 31, 'الو', '2015-03-07 04:42:40', '2015-03-07 04:42:40'),
(33, 11, 1, 36, 'sasas', '2015-03-28 06:01:02', '2015-03-28 06:01:02'),
(34, 11, 1, 36, 'qqqqqqqqqqqqq', '2015-03-28 06:36:49', '2015-03-28 06:36:49'),
(35, 11, 1, 27, 'sssssssss', '2015-05-06 06:45:14', '2015-05-06 06:45:14'),
(36, 11, 1, 27, 'aaaaaaaaaaaa', '2015-05-18 04:19:17', '2015-05-18 04:19:17'),
(37, 11, 1, 27, 'rrrrrrrrrrrrrrrrrrrr', '2015-05-18 05:35:08', '2015-05-18 05:35:08'),
(38, 11, 1, 26, 'qqqqqqqqqqqqqqqqqqqq', '2015-05-18 05:37:08', '2015-05-18 05:37:08'),
(39, 11, 1, 24, 'qqqqqqqqqqqqqqq', '2015-05-18 05:37:48', '2015-05-18 05:37:48'),
(40, 11, 1, 25, 'zzzzzzzzzzzzz', '2015-06-08 04:18:22', '2015-06-08 04:18:22'),
(41, 11, 1, 25, 'sssssssssssssssssss', '2015-06-08 04:18:31', '2015-06-08 04:18:31'),
(42, 11, 1, 27, 'sssssssssssss', '2015-06-14 04:50:31', '2015-06-14 04:50:31'),
(43, 11, 1, 27, 'ssssssssssssssssssss', '2015-06-14 04:51:24', '2015-06-14 04:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE IF NOT EXISTS `compare` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `user_id`, `ads_id`, `created_at`, `updated_at`) VALUES
(1, 11, 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) unsigned NOT NULL,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'السعودية', '2015-03-04 02:58:51', '2015-03-04 02:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE IF NOT EXISTS `favorit` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id`, `user_id`, `ads_id`, `created_at`, `updated_at`) VALUES
(1, 11, 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 11, 39, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 11, 39, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `id` int(10) unsigned NOT NULL,
  `make_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `make_id`, `model_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2', '6', '11', '2015-06-26 03:47:58', '2015-06-26 03:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `mainsettings`
--

CREATE TABLE IF NOT EXISTS `mainsettings` (
  `id` int(10) unsigned NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_twiter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_1` int(11) NOT NULL,
  `site_2` int(11) NOT NULL,
  `site_3` int(11) NOT NULL,
  `site_ads_1` text COLLATE utf8_unicode_ci NOT NULL,
  `site_ads_2` text COLLATE utf8_unicode_ci NOT NULL,
  `site_ads_3` int(11) NOT NULL,
  `vid_vid` text COLLATE utf8_unicode_ci NOT NULL,
  `s_s` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_s2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_s3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_instgram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_about` longtext COLLATE utf8_unicode_ci NOT NULL,
  `site_why` longtext COLLATE utf8_unicode_ci NOT NULL,
  `site_condition` longtext COLLATE utf8_unicode_ci NOT NULL,
  `close` tinyint(1) NOT NULL DEFAULT '1',
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mainsettings`
--

INSERT INTO `mainsettings` (`id`, `site_title`, `site_desc`, `site_comment`, `site_fb`, `vid`, `site_twiter`, `site_youtube`, `site_1`, `site_2`, `site_3`, `site_ads_1`, `site_ads_2`, `site_ads_3`, `vid_vid`, `s_s`, `s_s2`, `s_s3`, `site_instgram`, `site_email`, `site_telephone`, `site_about`, `site_why`, `site_condition`, `close`, `message`, `created_at`, `updated_at`) VALUES
(1, 'متجر الشبلي', 'متجر الشبلي', 'متجر الشبلي ,  بيع اجهزه ', 'https://www.facebook.com/', '', 'https://www.twitter.com/', 'https://www.googleplus.com/', 0, 0, 20, 'http://store1.up-00.com/2015-08/143903719631.png', 'https://www.facebook.com/', 100, 'assets/admin/img/products/vidsheble.mp4', 'localhost', 'localhost', 'localhost', 'instgram.com', 'admin@admin.com', '0555555555', '<p>&nbsp;نبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنا</p>\r\n', '', '<p>&nbsp;نبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنانبذه &nbsp;عنا</p>\r\n', 1, '<p>الموقع مغلق للصيانه</p>\r\n', '2014-06-26 16:07:28', '2015-08-09 16:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE IF NOT EXISTS `make` (
  `id` int(10) unsigned NOT NULL,
  `make_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`id`, `make_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'تويتا', 'assets/admin/img/products/1425447455.png', '2014-12-08 07:46:22', '2015-03-04 02:37:36'),
(3, 'نيسان', 'assets/admin/img/products/1425447472.jpg', '2014-12-08 08:24:34', '2015-03-04 02:37:53'),
(4, 'لكزس', 'assets/admin/img/products/1425447482.jpg', '2014-12-08 08:24:45', '2015-03-04 02:38:02'),
(5, 'GMC', 'assets/admin/img/products/1425447492.png', '2015-03-04 02:38:12', '2015-03-04 02:38:12'),
(6, 'بنتلي', 'assets/admin/img/products/1425447503.png', '2015-03-04 02:38:23', '2015-03-04 02:38:23'),
(7, 'فيراري', 'assets/admin/img/products/1425447514.png', '2015-03-04 02:38:34', '2015-03-04 02:38:34'),
(8, 'كرسلر', 'assets/admin/img/products/1425447526.png', '2015-03-04 02:38:47', '2015-03-04 02:38:47'),
(9, 'اودي', 'assets/admin/img/products/1425447538.png', '2015-03-04 02:38:58', '2015-03-04 02:38:58'),
(10, 'متسوبيشي', 'assets/admin/img/products/1425447551.png', '2015-03-04 02:39:11', '2015-03-04 02:39:11'),
(11, 'بيجو', 'assets/admin/img/products/1425447567.png', '2015-03-04 02:39:27', '2015-03-04 02:39:27'),
(12, 'لينكولن', 'assets/admin/img/products/1425447578.png', '2015-03-04 02:39:38', '2015-03-04 02:39:38'),
(13, 'ايسوزو', 'assets/admin/img/products/1425447589.png', '2015-03-04 02:39:49', '2015-03-04 02:39:49'),
(14, 'جاجور', 'assets/admin/img/products/1425447604.png', '2015-03-04 02:40:04', '2015-03-04 02:40:04'),
(15, 'فولفو', 'assets/admin/img/products/1425447620.png', '2015-03-04 02:40:20', '2015-03-04 02:40:20'),
(16, 'BMW', 'assets/admin/img/products/1425447633.jpg', '2015-03-04 02:40:33', '2015-03-04 02:40:33'),
(17, 'شفروليه', 'assets/admin/img/products/1425447652.jpg', '2015-03-04 02:40:52', '2015-03-04 02:40:52'),
(18, 'فورد', 'assets/admin/img/products/1425447663.jpg', '2015-03-04 02:41:03', '2015-03-04 02:41:03'),
(19, 'مرسيدس', 'assets/admin/img/products/1425447675.jpg', '2015-03-04 02:41:15', '2015-03-04 02:41:15'),
(20, 'دودج', 'assets/admin/img/products/1425447690.jpg', '2015-03-04 02:41:30', '2015-03-04 02:41:30'),
(21, 'لاند روفر', 'assets/admin/img/products/1425447705.jpg', '2015-03-04 02:41:45', '2015-03-04 02:41:45'),
(22, 'جيب', 'assets/admin/img/products/1425447716.jpg', '2015-03-04 02:41:56', '2015-03-04 02:41:56'),
(23, 'هوندا', 'assets/admin/img/products/1425447728.jpg', '2015-03-04 02:42:08', '2015-03-04 02:56:58'),
(24, 'نقل', 'assets/admin/img/products/1425447768.png', '2015-03-04 02:42:48', '2015-03-04 02:42:48'),
(25, 'بنتلي', 'assets/admin/img/products/1425447780.jpg', '2015-03-04 02:43:00', '2015-03-04 02:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) unsigned NOT NULL,
  `message_text` text COLLATE utf8_unicode_ci NOT NULL,
  `message_title` text COLLATE utf8_unicode_ci NOT NULL,
  `message_to` int(11) NOT NULL,
  `message_from` int(11) NOT NULL,
  `see` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message_text`, `message_title`, `message_to`, `message_from`, `see`, `created_at`, `updated_at`) VALUES
(1, 'ssssssssssssssssss', 'بخصوص الاعلانك رقم 17', 12, 11, 1, '2015-06-26 00:22:34', '2015-06-26 00:22:34'),
(2, 'شكرا  ', 'بخصوص رسالتك المرسله الي ', 11, 12, 1, '2015-06-26 00:27:19', '2015-06-26 00:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_12_08_083757_create_section_table', 1),
('2014_12_08_100730_create_make_table', 2),
('2014_12_08_102716_create_mod_table', 3),
('2014_12_09_054258_create_country_table', 4),
('2014_12_09_061427_city_table', 5),
('2014_12_10_123417_create_ads_table', 6),
('2014_12_11_065930_create_ads_table', 7),
('2014_12_13_111325_create_mes_table', 8),
('2014_12_14_064134_create_adsview_table', 9),
('2014_12_14_184353_create_favorit_table', 10),
('2014_12_14_204407_create_message_table', 11),
('2014_12_15_055408_create_report_table', 12),
('2014_12_20_202511_create_report2_table', 13),
('2015_03_01_074419_create_years_table', 14),
('2015_05_18_061613_create_note_table', 15),
('2015_05_18_093316_create_point_table', 16),
('2015_05_25_071831_create_follow_table', 17),
('2015_06_16_175009_create_bank_table', 18),
('2015_08_05_081138_create_compare_table', 19),
('2015_08_06_060614_create_order_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mod`
--

CREATE TABLE IF NOT EXISTS `mod` (
  `id` int(10) unsigned NOT NULL,
  `mod_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `make_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mod`
--

INSERT INTO `mod` (`id`, `mod_name`, `make_id`, `created_at`, `updated_at`) VALUES
(6, 'كامري', 2, '2015-03-04 02:43:46', '2015-03-04 02:43:46'),
(7, 'كورولا', 2, '2015-03-04 02:43:52', '2015-03-04 02:43:52'),
(8, 'صني', 3, '2015-03-04 02:44:00', '2015-03-04 02:44:00'),
(9, 'التيما', 3, '2015-03-04 02:44:12', '2015-03-04 02:44:12'),
(10, 'براجر', 4, '2015-03-04 02:44:22', '2015-03-04 02:44:22'),
(11, 'لكزس 2015', 4, '2015-03-04 02:44:51', '2015-03-04 02:44:51'),
(12, 'GMC  2015', 5, '2015-03-04 02:45:08', '2015-03-04 02:45:08'),
(13, 'بنتلي الفئه الخامسه', 6, '2015-03-04 02:45:22', '2015-03-04 02:45:22'),
(14, 'فيراري اوبشن', 7, '2015-03-04 02:45:43', '2015-03-04 02:45:43'),
(15, 'كرسلر 2015', 8, '2015-03-04 02:45:59', '2015-03-04 02:45:59'),
(16, 'اودي  a4', 9, '2015-03-04 02:46:17', '2015-03-04 02:46:17'),
(17, 'اودي a5', 9, '2015-03-04 02:46:32', '2015-03-04 02:46:32'),
(18, 'لانسر', 10, '2015-03-04 02:48:33', '2015-03-04 02:48:33'),
(19, 'لانسر 2015', 10, '2015-03-04 02:48:58', '2015-03-04 02:48:58'),
(20, 'بيجو 505', 11, '2015-03-04 02:49:09', '2015-03-04 02:49:09'),
(21, 'لينكلون 2015', 12, '2015-03-04 02:49:20', '2015-03-04 02:49:20'),
(22, 'ايسوزو نقل ثقيل', 13, '2015-03-04 02:49:33', '2015-03-04 02:49:33'),
(23, 'جاجور 2015', 14, '2015-03-04 02:49:45', '2015-03-04 02:49:45'),
(24, 'فولفو 2015', 15, '2015-03-04 02:50:00', '2015-03-04 02:50:00'),
(25, 'BMW الفئه الاولي', 16, '2015-03-04 02:50:17', '2015-03-04 02:50:17'),
(26, 'BMW الفئه الثانيه', 16, '2015-03-04 02:50:30', '2015-03-04 02:50:30'),
(27, 'اوبترا', 17, '2015-03-04 02:50:41', '2015-03-04 02:50:41'),
(28, 'لانوس', 17, '2015-03-04 02:50:54', '2015-03-04 02:50:54'),
(29, 'فورد  A5', 18, '2015-03-04 02:51:13', '2015-03-04 02:51:13'),
(30, 'مرسيدس الجيل الثالث', 19, '2015-03-04 02:51:25', '2015-03-04 02:51:25'),
(31, 'مرسيدس E200', 19, '2015-03-04 02:51:38', '2015-03-04 02:51:38'),
(32, 'دودج 2015', 20, '2015-03-04 02:54:26', '2015-03-04 02:54:26'),
(33, 'لاند روفر 2015', 21, '2015-03-04 02:55:18', '2015-03-04 02:55:18'),
(34, 'جيب شروكي', 22, '2015-03-04 02:55:28', '2015-03-04 02:55:28'),
(35, 'هوندا سيفل', 23, '2015-03-04 02:56:26', '2015-03-04 02:56:26'),
(36, 'نقل قلاب', 24, '2015-03-04 02:56:38', '2015-03-04 02:56:38'),
(37, 'بنتلي 2015', 25, '2015-03-04 02:56:47', '2015-03-04 02:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) unsigned NOT NULL,
  `newsletter_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_name` text COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `newsletter_email`, `newsletter_name`, `newsletter_phone`, `created_at`, `updated_at`) VALUES
(13, 'ssss@sssss.com', 'sssssss', '', '2015-04-25 04:13:04', '2015-04-25 04:13:04'),
(15, 'ssss@ssss.com', '', '', '2015-08-09 16:05:14', '2015-08-09 16:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(10) unsigned NOT NULL,
  `user_id_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `see` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `user_id_to`, `user_id_from`, `ad_id`, `see`, `type`, `created_at`, `updated_at`) VALUES
(5, '2', '11', '45', 0, 1, '2015-05-25 05:12:43', '2015-05-25 05:12:43'),
(6, '2', '11', '46', 0, 1, '2015-05-25 05:14:00', '2015-05-25 05:14:00'),
(7, '11', '11', '65', 1, 1, '2015-05-25 05:35:55', '2015-05-25 05:35:55'),
(8, '13', '11', '65', 0, 1, '2015-05-25 05:35:55', '2015-05-25 05:35:55'),
(9, '12', '11', '65', 1, 1, '2015-05-25 05:35:55', '2015-05-25 05:35:55'),
(10, '14', '11', '65', 0, 1, '2015-05-25 05:35:56', '2015-05-25 05:35:56'),
(11, '11', '11', '25', 1, 0, '2015-06-08 04:18:23', '2015-06-08 04:18:23'),
(12, '11', '11', '25', 1, 0, '2015-06-08 04:18:31', '2015-06-08 04:18:31'),
(13, '11', '11', '27', 1, 0, '2015-06-14 04:50:32', '2015-06-14 04:50:32'),
(14, '11', '11', '27', 1, 0, '2015-06-14 04:51:24', '2015-06-14 04:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `finish` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `ads_id`, `quantity`, `type`, `finish`, `price`, `created_at`, `updated_at`) VALUES
(31, 11, 32, 1, ' عند الاستلام', 0, 700, '2015-08-06 17:00:57', '2015-08-06 17:00:57'),
(32, 11, 35, 1, ' عند الاستلام', 0, 200, '2015-08-06 17:00:57', '2015-08-06 17:00:57'),
(33, 11, 37, 1, ' عند الاستلام', 0, 400, '2015-08-10 14:25:15', '2015-08-10 14:25:15'),
(34, 11, 36, 1, ' عند الاستلام', 0, 400, '2015-08-10 14:42:07', '2015-08-10 14:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE IF NOT EXISTS `point` (
  `id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `money` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(10) unsigned NOT NULL,
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `report_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `ad_id`, `user_id`, `report_comment`, `created_at`, `updated_at`) VALUES
(2, 7, 12, 'ffffffffffffffff', '2014-12-15 03:18:42', '2014-12-15 03:18:42'),
(3, 7, 12, 'gggggggggggggggggg', '2014-12-15 03:19:11', '2014-12-15 03:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `report2`
--

CREATE TABLE IF NOT EXISTS `report2` (
  `id` int(10) unsigned NOT NULL,
  `comm_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `report_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(10) unsigned NOT NULL,
  `section_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image2` text COLLATE utf8_unicode_ci NOT NULL,
  `image3` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_name`, `image`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'رجالي', 'assets/admin/img/products/image11438497375.png', 'assets/admin/img/products/image21471913522.png', 'assets/admin/img/products/image31438497375.png', '2014-12-11 04:16:03', '2016-08-23 08:52:02'),
(2, 'نسائي', 'assets/admin/img/products/image11438497389.png', 'assets/admin/img/products/image21471913534.png', 'assets/admin/img/products/image31438497389.png', '2014-12-11 04:16:21', '2016-08-23 08:52:14'),
(5, 'كمبيوترات ', 'assets/admin/img/products/image11438497409.png', 'assets/admin/img/products/image21438497409.png', 'assets/admin/img/products/image31438497409.png', '2014-12-11 04:16:34', '2015-08-02 13:36:49'),
(6, 'ساعات ', 'assets/admin/img/products/image11438497424.png', 'assets/admin/img/products/image21438497424.png', 'assets/admin/img/products/image31438497424.png', '2015-06-17 03:25:22', '2015-08-02 13:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `subsection`
--

CREATE TABLE IF NOT EXISTS `subsection` (
  `id` int(10) unsigned NOT NULL,
  `subsection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subsection_name_ku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subsection`
--

INSERT INTO `subsection` (`id`, `subsection_name`, `subsection_name_ku`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'سيارات  متطوره', 'بخش خواهر', '1', '2015-04-22 08:28:47', '2015-06-26 00:40:31'),
(2, 'عقارات متطوره', 'سخنرانی های مختلف', '2', '2015-04-23 02:57:31', '2015-06-26 00:40:44'),
(3, 'مجوهرات ثمينة', 'اطلاعات عمومی', '5', '2015-04-23 02:57:53', '2015-06-26 00:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL,
  `money` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_code` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `country`, `account_type`, `first_name`, `last_name`, `age`, `email`, `password`, `telephone`, `admin`, `active`, `money`, `reset_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, '', '', 'admin', 'admin', '25', 'admin@admin.com', '$2y$10$QN87hH2XMmwIWKlCzsb1H.cqymhD2X6qd94ELstDa.odBGwc055a.', '0555555555', 0, 1, '300', 'WWYvotHHg1LrEWAZqydP', 'UDt91yyrTOFdjVyAhhKbLCBTmh0ml0mjCssZ6URp5WNtQuSjik8MBgdcHYxb', '2014-12-09 04:47:20', '2015-08-09 16:48:52'),
(12, '', '', 'koko', '', '', 'koko@koko.com', '$2y$10$tsEAvDEKZjGTCjVCFeqQFOITcRf0Sm/B7cBxnH49gc0ESmdlFa.ca', '0551896251', 0, 1, '', 'ZszZdSz2jV', 'WXKS4AzEcNw1JU02oxRPatqEjWQBX5IDDuHuGcPmOvSlndKCnCZDsdii4vfR', '2015-03-07 04:15:32', '2015-05-18 04:52:22'),
(13, '', '', 'soso', '', '', 'soso@soso.com', '$2y$10$h5AiPPyquTxEDn4LXp4cw.Kbsqg.VKBhDGw1lJ2vaQ5ID7DsHcXGG', '0555555555', 2, 1, '', 'c3ZcUiepKf', '', '2015-03-14 02:14:28', '2015-03-14 02:14:28'),
(26, '', '', 'Fouad Mahmoud', '', '', 'fo2ad.mahmoud@gmail.com', '$2y$10$bHDmBvwOKQBHyp2s0JuUGe.l2qd9LE3GeMFO7Fc1QK1VFD9MX/rNS', '', 2, 1, '', '', 'KViwt11ZhM3wSPjRqcbvsGe9rVRjyQP6OD70ZOoUGn0YKjixp27md4cxWQRU', '2015-05-10 03:36:09', '2015-05-10 07:55:04'),
(27, '', '', 'Fouad Mahmoud', '', '', 'fo2ad.mahmoud@gmail.com', '$2y$10$Tp6A2AXD6.m6YUMdj7nrPuYzraWPIaqtEuuXNTjYewWR7yAJkwfsW', '', 2, 1, '', '', '', '2015-05-10 03:36:19', '2015-05-10 03:36:19'),
(28, 'البحرين', 'معرض سيارات', 'test', '', '', 'test@test.com', '$2y$10$0Hn4VRqCYhLizArgNBBhrebWEhn94cx16OKOmGEAALfHJ3CcV.JfK', '0551896251', 2, 1, '', '25gfBM2uun', '', '2015-06-15 01:04:49', '2015-06-15 01:04:49'),
(29, '', '', 'sasa', '', '', 'sasa@sasa.com', '$2y$10$oKsI8pVASUB3gLqjjKHkdu2tUjuX.rJZIPwtb/6lwO/BN72t.HggG', '', 2, 1, '', 'd5EyZDipVz', '', '2015-08-04 13:42:17', '2015-08-04 13:42:17'),
(30, '', '', 'aaaa', '', '', 'abwabts@hotmail.com', '$2y$10$m/LL5UBPG/0LVKiRU8FxOeyBi8Fwci0bHW4j0VKWyQI.9TZDoenbK', '+966562323166', 3, 0, '', '8BcTquWynn', '', '2016-08-26 05:32:32', '2016-08-26 05:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE IF NOT EXISTS `years` (
  `id` int(10) unsigned NOT NULL,
  `year_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year_num`, `created_at`, `updated_at`) VALUES
(2, '1990', '2015-03-01 05:03:53', '2015-03-01 05:04:12'),
(3, '1991', '2015-03-01 05:06:40', '2015-03-01 05:06:40'),
(4, '1992', '2015-03-01 05:06:46', '2015-03-01 05:06:46'),
(5, '1993', '2015-03-01 05:06:52', '2015-03-01 05:06:52'),
(6, '1994', '2015-03-01 05:06:57', '2015-03-01 05:06:57'),
(7, '1995', '2015-03-01 05:07:03', '2015-03-01 05:07:03'),
(8, '1996', '2015-03-01 05:07:08', '2015-03-01 05:07:14'),
(9, '1997', '2015-03-01 05:07:19', '2015-03-01 05:07:19'),
(10, '1998', '2015-03-01 05:07:23', '2015-03-01 05:07:23'),
(11, '1999', '2015-03-01 05:07:28', '2015-03-01 05:07:28'),
(12, '2000', '2015-03-01 05:07:36', '2015-03-01 05:07:36'),
(13, '2001', '2015-03-01 05:07:40', '2015-03-01 05:07:40'),
(14, '2002', '2015-03-01 05:07:45', '2015-03-01 05:07:45'),
(15, '2003', '2015-03-01 05:07:49', '2015-03-01 05:07:49'),
(16, '2004', '2015-03-01 05:07:54', '2015-03-01 05:07:54'),
(17, '2005', '2015-03-01 05:07:58', '2015-03-01 05:07:58'),
(18, '2006', '2015-03-01 05:08:02', '2015-03-01 05:08:02'),
(19, '2007', '2015-03-01 05:08:08', '2015-03-01 05:08:08'),
(20, '2008', '2015-03-01 05:08:12', '2015-03-01 05:08:12'),
(21, '2009', '2015-03-01 05:08:16', '2015-03-01 05:08:16'),
(22, '2010', '2015-03-01 05:08:23', '2015-03-01 05:08:23'),
(23, '2011', '2015-03-01 05:08:28', '2015-03-01 05:08:28'),
(24, '2012', '2015-03-01 05:08:33', '2015-03-01 05:08:33'),
(25, '2013', '2015-03-01 05:08:37', '2015-03-01 05:08:37'),
(26, '2014', '2015-03-01 05:08:41', '2015-03-01 05:08:41'),
(27, '2015', '2015-03-01 05:08:46', '2015-03-01 05:08:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adsview`
--
ALTER TABLE `adsview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baner`
--
ALTER TABLE `baner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainsettings`
--
ALTER TABLE `mainsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod`
--
ALTER TABLE `mod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report2`
--
ALTER TABLE `report2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsection`
--
ALTER TABLE `subsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `adsview`
--
ALTER TABLE `adsview`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `baner`
--
ALTER TABLE `baner`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mainsettings`
--
ALTER TABLE `mainsettings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mod`
--
ALTER TABLE `mod`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `report2`
--
ALTER TABLE `report2`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subsection`
--
ALTER TABLE `subsection`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
