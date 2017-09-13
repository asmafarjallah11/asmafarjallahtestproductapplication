-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2017 at 01:22 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomproduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nomproduit`, `prix`, `description`) VALUES
(1, 'produit1', '100.23', 'kkkhyyghjkigg'),
(3, 'produit478', '156.25', 'description1'),
(4, 'hhhhhhhhhhhh', '45.68', 'gggggggggggggg'),
(5, 'prod456', '45.89', 'gtryuil'),
(8, 'prod456', '45.89', 'gt'),
(9, 'prof4', '45.60', 'get response'),
(10, 'prod455', '45.60', 'hyt'),
(11, 'produit4', '56.78', 'fgghkkll'),
(12, 'prod44', '78.25', 'jjjjjjjjjjjjjj'),
(13, 'prod4', '45.12', 'description'),
(14, 'prof45', '45.89', 'gtui;'),
(15, 'prof45', '45.89', 'gtui;'),
(16, 'uuii78', '98.65', 'hjjuioo'),
(17, 'hhkkl', '48.45', 'gggggggggggggg'),
(18, 'hhkkl', '48.45', 'gggggggggggggg'),
(19, 'hhkkl', '48.45', 'gggggggggggggg'),
(20, 'hhkkl', '48.45', 'gggggggggggggg'),
(21, 'hhkkl', '48.45', 'gggggggggggggg'),
(22, 'hhkkl', '48.45', 'gggggggggggggg'),
(23, 'hhkkl', '48.45', 'gggggggggggggg'),
(24, 'hhkkl', '48.45', 'gggggggggggggg'),
(25, '4589', '45.60', 'jjjjjjjjjjjjjjjjjjjj'),
(26, '4589', '45.60', 'jjjjjjjjjjjjjjjjjjjj'),
(27, '4589', '45.60', 'jjjjjjjjjjjjjjjjjjjj'),
(28, '4589', '45.60', 'jjjjjjjjjjjjjjjjjjjj'),
(29, 'kkkkllll', '85.26', 'lkio'),
(30, 'kkkkllll', '85.26', 'lkio'),
(31, '789hhjk', '456.00', 'jjjjjjjjjjjjjjjjj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
