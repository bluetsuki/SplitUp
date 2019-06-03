-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 03 juin 2019 à 21:12
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `splitupdb`
--
CREATE DATABASE IF NOT EXISTS `splitupdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `splitupdb`;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `idClasse` int(10) UNSIGNED NOT NULL,
  `idProfesseur` int(11) NOT NULL,
  `idEleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `idEleve` int(10) UNSIGNED NOT NULL,
  `nomEleve` tinytext NOT NULL,
  `prenomEleve` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE `professeurs` (
  `idProfesseur` int(10) UNSIGNED NOT NULL,
  `nomProfesseur` tinytext NOT NULL,
  `prenomProfesseur` tinytext NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `username` tinytext NOT NULL,
  `mdp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`idProfesseur`, `nomProfesseur`, `prenomProfesseur`, `admin`, `username`, `mdp`) VALUES
(1, 'Nguyen', 'Kelly', 1, 'kelly.ngn', '$2y$10$1AkALYnnsrq/H1lEp9VvKeiYBvw5viSXNiN.xivvt3YpxFliWnvWy'),
(4, 'Eisman', 'Abel', 0, 'abel.esmnc', '$2y$10$1AkALYnnsrq/H1lEp9VvKeiYBvw5viSXNiN.xivvt3YpxFliWnvWy'),
(5, 'Benzonana', 'Alexandre', 0, 'alex.benzo', '$2y$10$1AkALYnnsrq/H1lEp9VvKeiYBvw5viSXNiN.xivvt3YpxFliWnvWy'),
(8, 'Nguyen', 'Thi-Kim', 0, 'tk.ngn', '$2y$10$OpzDET0iD4S1dcSE46DZ.O40HOmg43bS6YudmfNrsR2akC7mwuKO2');

-- --------------------------------------------------------

--
-- Structure de la table `splits`
--

CREATE TABLE `splits` (
  `idSplit` int(10) UNSIGNED NOT NULL,
  `idGroup` int(10) UNSIGNED NOT NULL,
  `idProffesseur` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`idClasse`),
  ADD KEY `idProfesseur` (`idProfesseur`),
  ADD KEY `idEleve` (`idEleve`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`idEleve`);

--
-- Index pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`idProfesseur`);

--
-- Index pour la table `splits`
--
ALTER TABLE `splits`
  ADD PRIMARY KEY (`idSplit`,`idGroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `idClasse` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `professeurs`
--
ALTER TABLE `professeurs`
  MODIFY `idProfesseur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
