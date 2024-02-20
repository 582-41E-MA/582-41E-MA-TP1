-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2024 at 10:09 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librairie`
--

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `prix` double NOT NULL,
  `quantite` int NOT NULL,
  `panier` TINYINT NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idLivre_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


------------- test data -------------
-------------
-- INSERT INTO `livres` (`id`, `titre`, `prix`, `quantite`, `panier`, `description`) VALUES 
-- (NULL, 'book 1', '13.33', '5', '0', 'book1 xhboi wex noyrbcpan98 expnsl kmieur hgfkjbvoi uwer glvzcxk jgku wgfilusc'),
-- (NULL, 'book 2', '21.17', '15', '0', 'book2 xhboi wex noyrbcpan98 expnsl kmieur hgfkjbvoi uwer glvzcxk jgku wgfilusc'),
-- (NULL, 'book 3', '13.33', '8', '0', 'book3 xhboi wex noyrbcpan98 expnsl kmieur hgfkjbvoi uwer glvzcxk jgku wgfilusc'),
-- (NULL, 'book 4', '9.99', '57', '0', 'book4 xhboi wex noyrbcpan98 expnsl kmieur hgfkjbvoi uwer glvzcxk jgku wgfilusc'),
-- (NULL, 'book 5', '53.68', '31', '0', 'book5 xhboi wex noyrbcpan98 expnsl kmieur hgfkjbvoi uwer glvzcxk jgku wgfilusc'),
-- (NULL, 'book 6', '0.99', '0', '0', 'book6 xhboi wex noyrbcpan98 expnsl kmieur hgfkjbvoi uwer glvzcxk jgku wgfilusc');