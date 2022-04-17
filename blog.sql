-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 17 avr. 2022 à 20:37
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `texte` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datepost` date NOT NULL,
  `titre` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `miniature` varchar(525) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(525) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(525) COLLATE utf8_unicode_ci NOT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `texte`, `datepost`, `titre`, `miniature`, `img1`, `img2`, `categorie_id`) VALUES
(1, 'test', '2022-03-21', 'test', '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie_nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie_nom`) VALUES
(1, 'drama'),
(2, 'livre');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateTime` date NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `contenu`, `dateTime`, `utilisateur_id`, `article_id`) VALUES
(1, 'test', '2022-03-22', 1, 1),
(2, 'bonjour', '2022-03-22', 1, 1),
(3, 'test', '2022-04-10', NULL, NULL),
(4, 'test', '2022-04-10', NULL, NULL),
(5, 'test', '2022-04-10', NULL, NULL),
(6, 'test', '2022-04-10', NULL, NULL),
(7, 'test', '2022-04-10', NULL, NULL),
(9, 'test', '2022-04-10', 2, 1),
(10, 'test', '2022-04-17', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `souscategorie`
--

CREATE TABLE `souscategorie` (
  `sous_categorie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sous_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cite` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `cite_author` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `passwd`, `pseudo`, `cite`, `cite_author`) VALUES
(1, 'toto', 'toto01', 'toto', NULL, ''),
(2, 'toto1', 'toto02', 'toto1', NULL, ''),
(3, 'bonjour', '!Zuu8$&amp;ZhNLvqQxuauYPD%gvDY89ME*2hrmH*^Wa', 'pseudo', NULL, ''),
(6, 'domesday', '$2y$10$RkV7c.6Eg.on4xxXvUnpOuwSmNFuXBsvzRf43vqZyr3ac6.qdRq76', 'domesday', NULL, ''),
(7, 'test', '$2y$10$PSFUMI3k46rbFx3nd6cXo.BfW1r3.52zb0G9TcgYYh3QyIkzNBIZG', 'tets', NULL, ''),
(8, 'bonjour', '$2y$10$Vqvzzn9jzxFSyJhTkKEFSeTNrXOeynOoaVsT/kcrUnBAHyYdYOcAq', 'test', NULL, ''),
(9, 'test', '$2y$10$ExElYLUHl1heoL4VMLPH8.49imgq.3QjTDLn9yhXqVwYn3jnIE6Qy', 'test', NULL, ''),
(10, 'test', '$2y$10$SmAepk8ZHrjdkCuOl.ctK.4gae6oNI18Y21BOZQt7JRXknXdxFxWy', 'test', NULL, ''),
(11, 'test', '$2y$10$SNcTc5vVNG28wJr3f/lKhOAVPpVBVNfYH7qZbQyKsnlMFslb/L.4W', 'test', NULL, ''),
(12, 'test', '$2y$10$MLk1s1/.VhFxMm1f2dJqTus2rOF97B0Xg2rOUbFCADwIBNm2YoDXK', 'test', NULL, ''),
(13, 'test', '$2y$10$xSm3cbN3bdFHtSurPcgq0.Os1qupBQ11OhCP.AiH4BIhXSO75tVqK', 'test', NULL, ''),
(14, 'test', '$2y$10$z2746yfAf6BVRFkJKmHj4O2c3Wx.tWdw1bFWboXku4jotx6B8/6GO', 'test', NULL, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CD8737FABCF5E72D` (`categorie_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `IDX_E16CE76B7294869C` (`article_id`),
  ADD KEY `IDX_E16CE76BFB88E14F` (`utilisateur_id`);

--
-- Index pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD PRIMARY KEY (`id_sous_categorie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  MODIFY `id_sous_categorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_CD8737FABCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_E16CE76B7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_E16CE76BFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
