-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 avr. 2019 à 14:44
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `loremipsum`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteurs`
--

DROP TABLE IF EXISTS `acheteurs`;
CREATE TABLE IF NOT EXISTS `acheteurs` (
  `IdA` int(11) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  PRIMARY KEY (`IdA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `IdAdmin` int(11) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  PRIMARY KEY (`IdAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `IdArt` int(11) NOT NULL,
  `Desc` mediumtext NOT NULL,
  `Prix` double NOT NULL,
  `Type` int(11) NOT NULL,
  `Pending` int(11) NOT NULL,
  `IdV` int(11) NOT NULL,
  `CmptVendu` int(11) NOT NULL,
  PRIMARY KEY (`IdArt`),
  KEY `fkIdx_66` (`IdV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chaussures`
--

DROP TABLE IF EXISTS `chaussures`;
CREATE TABLE IF NOT EXISTS `chaussures` (
  `IdArt` int(11) NOT NULL,
  `Taille` int(11) NOT NULL,
  `IdGr` int(11) DEFAULT NULL,
  `Quantité` int(11) NOT NULL,
  `Couleur` varchar(45) NOT NULL,
  `Sexe` char(1) DEFAULT NULL,
  KEY `fkIdx_70` (`IdArt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `IdC` int(11) NOT NULL,
  `Quantité` int(11) NOT NULL,
  `IdA` int(11) NOT NULL,
  `IdArt` int(11) NOT NULL,
  PRIMARY KEY (`IdC`),
  KEY `fkIdx_80` (`IdA`),
  KEY `fkIdx_83` (`IdArt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `infosl`
--

DROP TABLE IF EXISTS `infosl`;
CREATE TABLE IF NOT EXISTS `infosl` (
  `IdL` int(11) NOT NULL,
  `Adresse1` varchar(45) NOT NULL,
  `Adresse2` varchar(45) DEFAULT NULL,
  `Ville` varchar(45) NOT NULL,
  `CodePost` varchar(45) NOT NULL,
  `Pays` varchar(45) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `IdA` int(11) NOT NULL,
  PRIMARY KEY (`IdL`),
  KEY `fkIdx_42` (`IdA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `infosp`
--

DROP TABLE IF EXISTS `infosp`;
CREATE TABLE IF NOT EXISTS `infosp` (
  `IdP` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Numero` bigint(20) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `dateexp` date NOT NULL,
  `code` int(11) NOT NULL,
  `IdA` int(11) NOT NULL,
  PRIMARY KEY (`IdP`),
  KEY `fkIdx_45` (`IdA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livres-chansons`
--

DROP TABLE IF EXISTS `livres-chansons`;
CREATE TABLE IF NOT EXISTS `livres-chansons` (
  `IdArt` int(11) NOT NULL,
  `Quantité` int(11) NOT NULL,
  `Auteur` varchar(45) NOT NULL,
  `Annee` int(11) NOT NULL,
  KEY `fkIdx_100` (`IdArt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `multimedia`
--

DROP TABLE IF EXISTS `multimedia`;
CREATE TABLE IF NOT EXISTS `multimedia` (
  `Video` varchar(45) DEFAULT NULL,
  `Im1` varchar(45) NOT NULL,
  `Im2` varchar(45) DEFAULT NULL,
  `Im3` varchar(45) DEFAULT NULL,
  `Im4` varchar(45) DEFAULT NULL,
  `IdArt` int(11) NOT NULL,
  KEY `fkIdx_122` (`IdArt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `Quantité` int(11) NOT NULL,
  `Final` int(11) NOT NULL,
  `IdArt` int(11) NOT NULL,
  `IdA` int(11) NOT NULL,
  KEY `fkIdx_54` (`IdArt`),
  KEY `fkIdx_57` (`IdA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `Quantité` int(11) NOT NULL,
  `IdArt` int(11) NOT NULL,
  KEY `fkIdx_110` (`IdArt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `IdV` int(11) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  PRIMARY KEY (`IdV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vetements`
--

DROP TABLE IF EXISTS `vetements`;
CREATE TABLE IF NOT EXISTS `vetements` (
  `IdArt` int(11) NOT NULL,
  `Taille` varchar(45) NOT NULL,
  `Quantité` int(11) NOT NULL,
  `IdGr` int(11) DEFAULT NULL,
  `Couleur` varchar(45) NOT NULL,
  `Sexe` char(1) DEFAULT NULL,
  KEY `fkIdx_87` (`IdArt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
