-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2021 at 11:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SAV`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(6, 'Informatique'),
(7, 'Gros électroménager'),
(8, 'Electroménager'),
(9, 'Maison'),
(10, 'Divers');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211022133558', '2021-10-22 15:36:11', 27),
('DoctrineMigrations\\Version20211024072915', '2021-10-24 09:29:41', 22);

-- --------------------------------------------------------

--
-- Table structure for table `lieu_de_depot`
--

CREATE TABLE `lieu_de_depot` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lieu_de_depot`
--

INSERT INTO `lieu_de_depot` (`id`, `name`) VALUES
(2, 'lieu de dépot0'),
(3, 'lieu de dépot1'),
(4, 'lieu de dépot2'),
(5, 'lieu de dépot3'),
(6, 'lieu de dépot4'),
(7, 'lieu de dépot5'),
(8, 'lieu de dépot6'),
(9, 'lieu de dépot7'),
(10, 'lieu de dépot8'),
(11, 'lieu de dépot9');

-- --------------------------------------------------------

--
-- Table structure for table `product_sav`
--

CREATE TABLE `product_sav` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_du_produit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_de_depot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `tranchehoraire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sav`
--

INSERT INTO `product_sav` (`id`, `name`, `prenom`, `email`, `telephone`, `nom_du_produit`, `categorie`, `lieu_de_depot`, `date`, `tranchehoraire`) VALUES
(12, 'Malardier', 'Pierre', 'pierre@gmail.com', '0785454544', 'ord', 'Informatique', 'lieu de dépot3', '2016-01-01', 'après-midi'),
(13, 'pl', 'p', 'p@g.com', '0788552233', 'pp', 'Informatique', 'lieu de dépot8', '2016-01-01', 'l\'après-midi'),
(14, 'p', 'ppp', 'p@g.com', '0788552233', 'mm', 'Informatique', 'lieu de dépot8', '2021-10-25', 'l\'après-midi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `lieu_de_depot`
--
ALTER TABLE `lieu_de_depot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sav`
--
ALTER TABLE `product_sav`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lieu_de_depot`
--
ALTER TABLE `lieu_de_depot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_sav`
--
ALTER TABLE `product_sav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
