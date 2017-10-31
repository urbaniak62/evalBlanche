-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Octobre 2017 à 15:35
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evalBlanche`
--

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `marque` varchar(10) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` varchar(10) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `porte` int(11) DEFAULT NULL,
  `cylindre` int(11) DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `tonne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `type`, `marque`, `description`, `prix`, `annee`, `porte`, `cylindre`, `speed`, `tonne`) VALUES
(37, 'motos', 'WXCV', 'DFGHJKL', '78', NULL, NULL, 78, 78, NULL),
(39, 'camion', 'scania', 'gros camion', '1234567', NULL, NULL, NULL, NULL, 35),
(43, 'camion', 'hjkjlk', 'gros', '12345', NULL, NULL, NULL, NULL, 35),
(44, 'camion', 'scania', 'SQDFGHJ', '123456', NULL, NULL, NULL, NULL, 12),
(45, 'motos', 'simplon', 'AZERTYU', '12345678', NULL, NULL, 4567, 3456789, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
