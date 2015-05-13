-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 09:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `protech`
--

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
('2015_03_11_013614_create_users_table', 1),
('2015_04_30_002120_create_productcategories_table', 1),
('2015_04_30_002517_create_projectcategories_table', 1),
('2015_04_30_103821_create_project_table', 1),
('2015_04_30_104046_create_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `name`, `created_at`, `updated_at`, `title`) VALUES
(1, 'Mobilife', '2015-05-01 16:15:22', '2015-05-01 16:15:22', 'Mobilife'),
(3, 'Medical-Gas-Pipeline-System', '2015-05-02 00:09:43', '2015-05-02 00:09:43', 'Medical Gas Pipeline System'),
(6, 'Protechgas-gases', '2015-05-07 09:23:12', '2015-05-07 09:23:12', 'PRODUCTION OF OXYGEN AND NITROGEN GAS');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prodcat_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_prodcat_id_foreign` (`prodcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prodcat_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 1, 'Gas cylinders', 'Gas cylinders in the market', NULL, 'images/products/medical-gas-cylinder.jpg', '2015-05-01 23:20:03', '2015-05-01 23:20:03', 1),
(3, 3, 'Medical Vacuum Plant  (Duplex plant)', 'Precision UK''s CPX Vacuum Plant is manufactured under BS EN 13485 Medical Devices: Quality Management Systems. It provides a centralized source of vacuum extraction, available in simplex to multi-pump configurations dependent in individual requirement, to include a complete package plant or modular format.', NULL, 'images/products/2015-05-02duplex-vacuum-pump.jpg', '2015-05-02 00:38:15', '2015-05-02 00:38:15', 1),
(4, 3, 'Medical Gas Manifold', 'Precision UK''s Automatic Manifold Plant is manufactured under BS EN 13485 Medical Devices: Quality Management Systems. It provides a centralized source of bottled gas which acts as a secondary source of supply. The unit is designed to provide a duty and standby gas supply at a constant pressure via two banks of bottled gas cylinders with status monitoring. A standard system features a central control panel with a header assembly. The unit is designed for wall mounting as standard however options available include floor mounted assemblies and formats to suit customer requirements. Also available is a high flow capable of providing a distribution flow rate in excess of 2000 L/m.', NULL, 'images/products/2015-05-02medical-gas-manifold.jpg', '2015-05-02 00:40:17', '2015-05-02 00:40:17', 1),
(5, 3, 'Area Valve Service Unit (AVSU) –HTM 02-01, BS EN 7396, C11, CE 0086', 'The Area Valve Service Units (AVSU''s) are manufactured under BS EN 13485 Medical Devices: Quality Management Systems and Medical Device Directive installation and maintenance or in the event of an emergency. They are built in accordance with the HTM 02-01, C11 and BS EN 15908 standards and are suitable for Oxygen, Nitrous Oxide, Oxy-Nitrous Oxide, MA4, MA7 and Vacuum.93/42/EEC (CE 0086). ', NULL, 'images/products/2015-05-02AVSU-unit.jpg', '2015-05-02 00:42:07', '2015-05-02 00:42:07', 1),
(6, 3, 'Degreased Medical Copper Tube ', 'Precision UK''s degreased copper tube is manufactured under BS EN 13485 Medical Devices: Quality Management Systems. It is suitable for jointing degreased medical gas copper fittings and other medical gas equipment compliant to BS EN 13345 and HTM02-01. Copper tube is designed for use in Medical Gas Pipeline System (MGPS) Installations and incorporates the specialist requirement of the MGPS industry to include cleanliness, packaging and usability required to attain the levels of quality', NULL, 'images/products/2015-05-02degressed-medical-copper.jpg', '2015-05-02 00:44:31', '2015-05-02 00:44:31', 1),
(8, 1, 'Medical Gas Manifold', 'The 2 way manifold is manufactured under BS EN 13485 Medical Devices: Quality Management Systems. It provides a centralized source of bottled gas which acts as a secondary source of supply. The unit is used for flow control and differential pressure transmitter and has ½” NPT connection with a rated pressure of 300psi to 6000psi.', NULL, 'images/products/manifold-control-system.jpg', '2015-05-02 10:50:34', '2015-05-02 10:50:34', 1),
(9, 1, 'Medical Oxygen Cylinders', 'The compressed cylinders are manufactured under BS EN 13485 Medical Devices: Quality Management Systems and Medical Device Directive installation and maintenance. They are made of steel and aluminum body and can withstand pressure of 150- 200bar and come in 2m3 volumes.', NULL, 'images/products/medical-oxygen-cylinder.jpg', '2015-05-02 10:52:08', '2015-05-02 10:52:08', 1),
(10, 1, 'Regulator', 'The oxygen regulator helps to regulate the cylinder pressure of 150bar to 4bar for medical and human consumption purpose. It is made of brass body, manufactured in accordance with HTM 02 specification.', NULL, 'images/products/regulator.jpg', '2015-05-02 10:56:44', '2015-05-02 10:56:44', 1),
(11, 1, 'mobilife front view', '', NULL, 'images/products/mobile-front.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(12, 1, 'Mobilife back view', '', NULL, 'images/products/mobile-back.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(17, 6, 'Store of Oxygen and Nitrogen gases for medical use', 'Store of Oxygen and Nitrogen gases for medical use.', NULL, 'images/products/2015-05-07gas-cylinders.jpg', '2015-05-07 09:29:35', '2015-05-07 09:29:35', 1),
(18, 6, 'Medical oxygen cylinders', 'Medical oxygen cylinders of all sizes also available', NULL, 'images/products/2015-05-07medical-oxygen-cylinder.jpg', '2015-05-07 09:30:51', '2015-05-07 09:30:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projectphotos`
--

CREATE TABLE IF NOT EXISTS `projectphotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_projcat_id_foreign` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `projectphotos`
--

INSERT INTO `projectphotos` (`id`, `project_id`, `name`, `description`, `image`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 1, 'Installation of bed', 'High quality beds installed', 'images/projects/2015-05-06bed.jpg', '2015-05-06 09:37:15', '2015-05-06 09:37:15', 1),
(3, 1, 'Ceiling light', '', 'images/projects/2015-05-06pic1.jpg', '2015-05-06 09:46:55', '2015-05-06 09:46:55', 1),
(5, 1, 'Protechgas engineers at work(3)', '', 'images/projects/2015-05-06pic4.jpg', '2015-05-06 09:51:25', '2015-05-06 09:51:25', 1),
(6, 1, 'Gadgets at Site', '', 'images/projects/2015-05-06pic6.jpg', '2015-05-06 09:52:15', '2015-05-06 09:52:15', 1),
(7, 2, 'gas plant', '', 'images/projects/2015-05-06pic1.jpg', '2015-05-06 11:40:17', '2015-05-06 11:40:17', 1),
(8, 2, 'Main installation plant', '', 'images/projects/2015-05-06pic2.jpg', '2015-05-06 11:41:14', '2015-05-06 11:41:14', 1),
(9, 2, 'Gas plant(2)', '', 'images/projects/2015-05-06pic3.jpg', '2015-05-06 11:42:27', '2015-05-06 11:42:27', 1),
(10, 2, 'Main frame installation', '', 'images/projects/2015-05-06pic5.jpg', '2015-05-06 11:43:15', '2015-05-06 11:43:15', 1),
(11, 3, 'Main gas plant', '', 'images/projects/2015-05-06pic1.jpg', '2015-05-06 11:46:53', '2015-05-06 11:46:53', 1),
(12, 3, 'Neat wall circuit', '', 'images/projects/2015-05-06pic2.jpg', '2015-05-06 11:47:40', '2015-05-06 11:47:40', 1),
(13, 3, 'Main gas plant', '', 'images/projects/2015-05-06pic3.jpg', '2015-05-06 11:48:16', '2015-05-06 11:48:16', 1),
(14, 3, 'Another reserve gas plant', '', 'images/projects/2015-05-06pic4.jpg', '2015-05-06 11:49:35', '2015-05-06 11:49:35', 1),
(15, 4, 'Installation of gas channels', '', 'images/projects/2015-05-06luth-1.jpg', '2015-05-06 11:56:00', '2015-05-06 11:56:00', 1),
(16, 4, 'Installation of gas channels-2', '', 'images/projects/2015-05-06luth-2.jpg', '2015-05-06 11:56:48', '2015-05-06 11:56:48', 1),
(17, 1, 'Installation of gas channels-3', '', 'images/projects/2015-05-06luth-3.jpg', '2015-05-06 11:57:40', '2015-05-06 11:57:40', 1),
(18, 4, 'Installation of gas channels-4', '', 'images/projects/2015-05-06luth-5.jpg', '2015-05-06 11:58:41', '2015-05-06 11:58:41', 1),
(19, 4, 'more installation', '', 'images/projects/2015-05-06luth-10.jpg', '2015-05-06 11:59:19', '2015-05-06 11:59:19', 1),
(20, 5, 'Officer inspecting men at work', '', 'images/projects/2015-05-06pic5.jpg', '2015-05-06 12:01:36', '2015-05-06 12:01:36', 1),
(21, 5, 'Inspection of Gas cylinders', '', 'images/projects/2015-05-06pic4.jpg', '2015-05-06 12:02:26', '2015-05-06 12:02:26', 1),
(22, 5, 'Wall DSU unit', '', 'images/projects/2015-05-06pic1.jpg', '2015-05-06 12:03:03', '2015-05-06 12:03:03', 1),
(23, 1, 'Men at work', '', 'images/projects/2015-05-06pic6.jpg', '2015-05-06 12:03:33', '2015-05-06 12:03:33', 1),
(24, 6, 'Men intalling Protech oxygen unit', '', 'images/projects/2015-05-06pic5.jpg', '2015-05-06 12:05:08', '2015-05-06 12:05:08', 1),
(25, 1, 'Oxygen gas installation', '', 'images/projects/2015-05-06pic2.jpg', '2015-05-06 12:10:20', '2015-05-06 12:10:20', 1),
(26, 6, 'Protechgas engineers on site ', '', 'images/projects/2015-05-06pic7.jpg', '2015-05-06 12:11:26', '2015-05-06 12:11:26', 1),
(27, 6, 'Protechgas engineers on site (2)', '', 'images/projects/2015-05-06pic4.jpg', '2015-05-06 12:12:12', '2015-05-06 12:12:12', 1),
(28, 8, 'Protechgas engineers at work', '', 'images/projects/2015-05-06pic1.jpg', '2015-05-06 12:13:32', '2015-05-06 12:13:32', 1),
(29, 8, 'Protechgas engineers on site (2)', '', 'images/projects/2015-05-06warri-2.jpg', '2015-05-06 12:15:54', '2015-05-06 12:15:54', 1),
(30, 1, 'Protechgas engineers at work(3)', '', 'images/projects/2015-05-06warri-3.jpg', '2015-05-06 12:17:01', '2015-05-06 12:17:01', 1),
(31, 7, 'Protechgas engineers at UBTH site', '', 'images/projects/2015-05-06ubth-1.jpg', '2015-05-06 12:19:57', '2015-05-06 12:19:57', 1),
(32, 1, 'Protechgas engineers at UBTH site(2)', '', 'images/projects/2015-05-06ubth-2.jpg', '2015-05-06 12:20:38', '2015-05-06 12:20:38', 1),
(33, 7, 'Protechgas engineers at UBTH site(3)', '', 'images/projects/2015-05-06ubth-3.jpg', '2015-05-06 12:21:29', '2015-05-06 12:21:29', 1),
(34, 7, 'Protechgas engineers at UBTH site(4)', '', 'images/projects/2015-05-06ubth-4.jpg', '2015-05-06 12:22:18', '2015-05-06 12:22:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `created_at`, `updated_at`, `title`) VALUES
(1, '44-Army-Reference', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '44 Army Reference Hospital kaduna'),
(2, 'FMC-Keffi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Federal medical centre, Keffi'),
(3, 'Koko-General-Hospital', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Koko General Hospital, Delta state'),
(4, 'LUTH-Lagos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lagos State University Teaching Hospital(LUTH)'),
(5, 'Nigeria-Navy-Hospital', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Nigeria Navy Hospital, Calabar'),
(6, 'Obi-Jackson-Hospital', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Obi-Jackson Children''s Hospital, Okija'),
(7, 'UBTH-Benin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'University Of Benin Teaching Hospital(UBTH)'),
(8, 'Warri-General-Hospital', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Warri General Hospital, Delta State');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `admin` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'samizares', 'samizares@hotmail.com', '$2y$10$ppkGXSN1DVErJu4g3HG7j.pKBvWzmcVytzuKgvx9w5SrSid5/c8nS', 'Samuel', 'Oghogho', 'u8v6QNffi6VvBuJctMLTGbPtdcnSpgRsRRsH60nXAWczqi6zvMs9NtRrjeU6', '2015-05-01 23:09:48', '2015-05-06 15:01:23', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_prodcat_id_foreign` FOREIGN KEY (`prodcat_id`) REFERENCES `productcategories` (`id`);

--
-- Constraints for table `projectphotos`
--
ALTER TABLE `projectphotos`
  ADD CONSTRAINT `projects_projcat_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
