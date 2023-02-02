-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 06 jan. 2023 à 14:06
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_thermic`
--

-- --------------------------------------------------------

--
-- Structure de la table `releve_temp`
--

DROP TABLE IF EXISTS `releve_temp`;
CREATE TABLE IF NOT EXISTS `releve_temp` (
  `Amb_Int1` decimal(5,1) NOT NULL,
  `Paroi_Int` decimal(5,1) NOT NULL,
  `HR_Int` decimal(4,1) NOT NULL,
  `Amb_Int2` decimal(5,1) NOT NULL,
  `Amb_Ext1` decimal(5,1) NOT NULL,
  `Paroi_Ext` decimal(5,1) NOT NULL,
  `HR_Ext` decimal(4,1) NOT NULL,
  `Amb_Ext2` decimal(5,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `releve_temp`
--

INSERT INTO `releve_temp` (`Amb_Int1`, `Paroi_Int`, `HR_Int`, `Amb_Int2`, `Amb_Ext1`, `Paroi_Ext`, `HR_Ext`, `Amb_Ext2`) VALUES
('37.2', '38.4', '65.5', '37.8', '19.5', '23.2', '87.2', '20.1'),
('38.2', '39.3', '67.9', '39.3', '20.5', '24.2', '90.2', '21.1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






