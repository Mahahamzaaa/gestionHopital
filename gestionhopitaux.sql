-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 juin 2020 à 11:22
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionhopitaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `idA` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom_hop` varchar(100) NOT NULL,
  `nom_serv` varchar(100) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `telephone` int(8) NOT NULL,
  PRIMARY KEY (`idA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `docteurs`
--

DROP TABLE IF EXISTS `docteurs`;
CREATE TABLE IF NOT EXISTS `docteurs` (
  `idD` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `np_docteur` varchar(30) NOT NULL,
  `sexe` int(5) NOT NULL,
  `telephone` int(11) NOT NULL,
  `nom_hop` varchar(100) NOT NULL,
  `nom_serv` varchar(100) NOT NULL,
  `jour_dispo` varchar(100) NOT NULL,
  PRIMARY KEY (`idD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hopital`
--

DROP TABLE IF EXISTS `hopital`;
CREATE TABLE IF NOT EXISTS `hopital` (
  `idH` int(11) NOT NULL AUTO_INCREMENT,
  `nom_hop` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(30) NOT NULL,
  PRIMARY KEY (`idH`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_nais` date NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `telephone` int(8) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `nom_hop` varchar(100) NOT NULL,
  `nom_serv` varchar(100) NOT NULL,
  `num_dos` int(11) NOT NULL,
  `np_docteur` varchar(30) NOT NULL,
  `contrat` varchar(30) NOT NULL,
  `num_carnet_med` int(14) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `nom_serv` varchar(100) NOT NULL,
  `nom_hop` varchar(100) NOT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
