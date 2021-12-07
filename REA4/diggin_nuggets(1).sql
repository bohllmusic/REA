-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 déc. 2021 à 16:25
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `diggin_nuggets`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `nom_article` varchar(200) NOT NULL,
  `texte_article` text NOT NULL,
  `date_article` date DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `texte_commentaire` text NOT NULL,
  `date_commentaire` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_publication` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `correspondre`
--

CREATE TABLE `correspondre` (
  `id_genre_musique` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `genres_musique`
--

CREATE TABLE `genres_musique` (
  `id_genre_musique` int(11) NOT NULL,
  `nom_genre_musique` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `nom_image` varchar(100) DEFAULT NULL,
  `adresse_image` text NOT NULL,
  `id_article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_publication` int(11) DEFAULT NULL,
  `id_commentaire` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id_publication` int(11) NOT NULL,
  `texte_publication` varchar(255) NOT NULL,
  `lien_musique_publication` text NOT NULL,
  `date_publication` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nom_role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo_utilisateur` varchar(50) NOT NULL,
  `mail_utilisateur` varchar(70) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `prenom_utilisateur` varchar(50) NOT NULL,
  `age_utilisateur` tinyint(4) NOT NULL,
  `photo_profil_utilisateur` text DEFAULT NULL,
  `bio_utilisateur` text DEFAULT NULL,
  `id_roles` int(11) DEFAULT NULL,
  `mdp_utilisateur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo_utilisateur`, `mail_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `age_utilisateur`, `photo_profil_utilisateur`, `bio_utilisateur`, `id_roles`, `mdp_utilisateur`) VALUES
(1, 'rtertherh', 'errthrthe@rger.zreze', 'erhrthret', 'ertherther', 24, '', '', NULL, 'ergergzer'),
(2, 'CHALOUI', 'sdkjlds@lskdfjlsdj.dfzs', 'Jan-louis', 'Eugène', 26, '', '', NULL, 'c\'estLermotDepasse'),
(3, 'jean-louis', 'rregr@gdfg', 'fdfgd', 'dfgdfg', 21, '', '', NULL, 'dgfdfg'),
(71, 'louloulou', 'hdghdfh@dfgds.gt', 'sdfgdfg', 'sgdsfg', 24, '', '', NULL, 'fgsdfdsf'),
(72, 'louloulou', 'hdghdfh@dfgds.gt', 'sdfgdfg', 'sgdsfg', 24, '', '', NULL, 'fgsdfdsf'),
(73, 'louloulou', 'hdghdfh@dfgds.gt', 'sdfgdfg', 'sgdsfg', 24, '', '', NULL, 'fgsdfdsf'),
(74, 'louloulou', 'hdghdfh@dfgds.gt', 'sdfgdfg', 'sgdsfg', 24, '', '', NULL, 'fgsdfdsf'),
(75, 'plouiool', 'ercv@dfvfvdf.fvf', 'dfvv', 'dfvdvd', 18, '', '', NULL, 'dfvdfvd'),
(76, 'plouiool', 'ercv@dfvfvdf.fvf', 'dfvv', 'dfvdvd', 18, '', '', NULL, 'dfvdfvd'),
(77, 'fhfghfg', 'fghfghf@fgfghf.fr', 'bnvvbn', 'vbvbnvbn', 19, '', '', NULL, 'vbvbnvbnvbn'),
(80, 'blabla', 'ejh@dkjhfskdj.fr', 'michel', 'polnaref', 21, '', '', NULL, 'mdptest'),
(81, 'fgfhddhdf', 'kjqshflkjshfsfkhiu@ujgfjhgfjhg', 'qdsmhldkfjhddfg', 'stg( hg-t', 20, '', '', NULL, 'lalala'),
(82, 'ghjghjghg', 'ercv@dfvfvdf.fvf', 'tghfghfgh', 'fghfghfg', 22, '', '', NULL, 'lalala'),
(83, 'klfdjhlh', 'testest@test.test', 'kjfdshfsqlkj', 'kjfhlqkds', 20, '', '', NULL, '789654'),
(84, 'hnncvb', 'test@test.test', 'hfgdhfgd', 'dhfdfg', 21, '', '', NULL, '789654'),
(85, 'sdfg', 'testjespere@xn--queava-yua.marcher', 'dsfsdfgdsf', 'sdfgdf', 19, '', '', NULL, '789654'),
(86, 'utilisateur', 'mailmail@mail.mail', 'qdsfs', 'nomqsdfsd', 18, '', '', NULL, '789654'),
(87, 'dffghdhf', 'fghfdhfd@sdfgsfd.sdgdfgdsfjkui', 'dflkjhdf', 'sfdkljdhng', 18, '', '', NULL, '789654'),
(88, 'jean cleaudes225', 'lksjlsfdj@hkdsq.sfqd', 'ldkfsd', 'sdlkjldsk', 72, '', '', NULL, '456321'),
(89, 'pwdtest', 'pwd@test.test', 'kkjhkdjfh', 'ldfkdflkj', 19, '', '', NULL, '$2y$10$iTzIeUIlnGSchaG1B7Nb4uRAgilWANMyxtaSb9gAVB5axQb6WmWx.'),
(90, 'usertest', 'mailtest@password.test', 'fg', 'dfqsdfqs', 20, '', '', NULL, '$2y$10$rolVKFk0d/3iGygj724nJuJiNsq1PL0.RyQMHiQ5.bx1UgIF7s5TS'),
(91, 'fgfgdfhdhfg', 'dghh@dfhdf.dfhd', 'dfhdgh', 'dfgdfh', 19, '', '', NULL, '$2y$10$dLnly5gE4YF6gplzhwEA3O8VUNLsw1SbuEsLcAopOgHHz4eFlGVDq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_publication` (`id_publication`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `correspondre`
--
ALTER TABLE `correspondre`
  ADD PRIMARY KEY (`id_genre_musique`,`id_publication`),
  ADD KEY `id_publication` (`id_publication`);

--
-- Index pour la table `genres_musique`
--
ALTER TABLE `genres_musique`
  ADD PRIMARY KEY (`id_genre_musique`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_publication` (`id_publication`),
  ADD KEY `id_commentaire` (`id_commentaire`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publication`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `id_roles` (`id_roles`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `genres_musique`
--
ALTER TABLE `genres_musique`
  MODIFY `id_genre_musique` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`),
  ADD CONSTRAINT `commentaires_ibfk_3` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

--
-- Contraintes pour la table `correspondre`
--
ALTER TABLE `correspondre`
  ADD CONSTRAINT `correspondre_ibfk_1` FOREIGN KEY (`id_genre_musique`) REFERENCES `genres_musique` (`id_genre_musique`),
  ADD CONSTRAINT `correspondre_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`),
  ADD CONSTRAINT `likes_ibfk_3` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaires` (`id_commentaire`),
  ADD CONSTRAINT `likes_ibfk_4` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `likes_ibfk_5` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `likes_ibfk_6` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`),
  ADD CONSTRAINT `likes_ibfk_7` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaires` (`id_commentaire`),
  ADD CONSTRAINT `likes_ibfk_8` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `publications_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `publications_ibfk_3` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
