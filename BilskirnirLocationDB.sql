-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 29 Août 2017 à 20:49
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BILSKIRNIR_LOCATION`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `leasingId` int(11) NOT NULL,
  `bookingUserId` int(11) NOT NULL,
  `beginning` date NOT NULL,
  `ending` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `leasing`
--

CREATE TABLE `leasing` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `house` tinyint(1) NOT NULL,
  `appartment` tinyint(1) NOT NULL,
  `title` varchar(80) NOT NULL,
  `travelers` int(20) NOT NULL,
  `beds` int(20) NOT NULL,
  `bathrooms` int(20) NOT NULL,
  `rooms` int(30) NOT NULL,
  `kitchens` int(20) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `airConditioner` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `picture1` text NOT NULL,
  `picture2` text NOT NULL,
  `picture3` text NOT NULL,
  `picture4` text NOT NULL,
  `picture5` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(75) NOT NULL,
  `lastname` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `signup` datetime NOT NULL,
  `newsletter` tinyint(1) DEFAULT NULL,
  `profilPic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `email`, `firstname`, `lastname`, `password`, `birth`, `signup`, `newsletter`, `profilPic`) VALUES
(1, 'test@test.com', 'test', 'test', '43b0cef99265f9e34c10ea9d3501926d27b39f57c6d674561d8ba236e7a819fb', '2017-01-01', '2017-08-26 11:20:22', 1, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `leasing`
--
ALTER TABLE `leasing`
  ADD CONSTRAINT `leasing_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
