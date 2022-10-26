-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 14 oct. 2018 à 22:37
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ism`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `matricule` varchar(155) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `pere` varchar(255) DEFAULT NULL,
  `numero_pere` bigint(20) DEFAULT NULL,
  `mere` varchar(155) DEFAULT NULL,
  `numero_mere` bigint(20) DEFAULT NULL,
  `tuteur` varchar(155) DEFAULT NULL,
  `numero_tuteur` bigint(20) DEFAULT NULL,
  `photo_et` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `numero`, `matricule`, `filiere`, `niveau`, `date_naissance`, `lieu_naissance`, `adresse`, `pere`, `numero_pere`, `mere`, `numero_mere`, `tuteur`, `numero_tuteur`, `photo_et`) VALUES
(1, 'nicolas', 'nini', 325600082, '0004', 'premier', 'troisieme', '2018-10-27', 'Antananarivo', 'lot III K 1 E Ankaditoho', '', 0, '', 0, 'Test', 0, 'IMG_20140101_030429.jpg'),
(2, 'Ravelonjanahary', 'nicolas', 325600082, '0004', 'premier', 'troisieme', '2018-10-08', 'Antananarivo', 'lot III K 1 E Ankaditoho', '', 0, '', 0, 'Test', 0, 'IMG_20140101_030429.jpg'),
(3, 'Tinah', 'hello', 325600082, '0002', 'premier', 'deuxieme', '2018-10-11', 'Antananarivo', 'lot III K 1 E Ankaditoho', '', 0, '', 0, 'Test', 0, 'IMG_20140101_030429.jpg'),
(4, 'rakoto', 'rabe', 325600082, '005', 'droit', 'premier', '2018-10-17', 'Antananarivo', 'lot III K 1 E Ankaditoho', 'Rakoto hery', 344567888, 'Rasoa minah', 344567888, '', 344567888, 'clé.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `prof_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `numero` varchar(155) NOT NULL,
  `CIN` bigint(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `matiere` varchar(155) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`prof_id`, `nom`, `prenom`, `numero`, `CIN`, `photo`, `matiere`, `adresse`, `email`) VALUES
(1, 'Prof', 'dassin', '0325600082', 101241186901, 'IMG_20140101_030429.jpg', 'c++', 'lot III K 1 E Ankaditoho', 'nicolas.ravelonjanahary@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `fonction`, `nom`, `prenom`, `email`) VALUES
(1, 'secretaire', '764c4d90065da8acb9f404352884ef2f', 'secretaire', 'test', 'test', 'test@gmail.com'),
(2, 'nicolas', '990f1231beef96e676782e73d7ce8833', 'etudiant', 'nicolas', 'nicolas', 'nicolas.ravelonjanahary@gmail.com'),
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', 'directeur', 'test', 'test', 'test@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`prof_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
