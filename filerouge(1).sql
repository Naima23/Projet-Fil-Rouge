-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 25 sep. 2020 à 12:15
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filerouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `para1`, `para2`, `para3`) VALUES
(11, 'Je suis actuellement etudiante en tant qu’intégratrice web, développeur web avec native et wordpress à travers des projets interne et externe qui me permet d\'améliorée mes compétances et ma workflow.', 'Passionnée depuis toujours par les nouvelles technologies multimédia, je me suis également lancée en webdesign durant de mes études.\r\n', 'Que vous soyez une entreprise, une agence web ou un particulier, je serai contente de répondre à vos besoins.'),
(18, 'Je suis actuellement etudiante en tant qu’intégratrice web, développeur web avec native et wordpress à travers des projets interne et externe qui me permet d\'améliorée mes compétances et ma workflow.', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `nom`, `email`, `pass`) VALUES
(0, 'naima', 'naima@gmail.com', '680907fe81ee50cca424604ce8f8b111');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `url`, `title`) VALUES
(7, 'https://naima23.github.io/project-Mois/', 'Projet covid-19'),
(8, 'https://naima23.github.io/cod-web/', 'Mon premier projet'),
(9, 'https://naima23.github.io/horloge/', 'projet horloge'),
(10, ' 	https://naima23.github.io/project-Mois/', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
