CREATE DATABASE diggin_nuggets;
use diggin_nuggets;

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `nom_article` varchar(200) NOT NULL,
  `texte_article` text NOT NULL,
  `date_article` date DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
)

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `texte_commentaire` text NOT NULL,
  `date_commentaire` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_publication` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL
)


CREATE TABLE `correspondre` (
  `id_genre_musique` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL
)


CREATE TABLE `genres_musique` (
  `id_genre_musique` int(11) NOT NULL,
  `nom_genre_musique` varchar(50) DEFAULT NULL
)



CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `nom_image` varchar(100) DEFAULT NULL,
  `adresse_image` text NOT NULL,
  `id_article` int(11) DEFAULT NULL
)

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_publication` int(11) DEFAULT NULL,
  `id_commentaire` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL
)


CREATE TABLE `publications` (
  `id_publication` int(11) NOT NULL,
  `texte_publication` varchar(255) NOT NULL,
  `lien_musique_publication` text NOT NULL,
  `date_publication` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
)

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nom_role` varchar(50) DEFAULT NULL
)


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
)


ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_publication` (`id_publication`),
  ADD KEY `id_article` (`id_article`);

ALTER TABLE `correspondre`
  ADD PRIMARY KEY (`id_genre_musique`,`id_publication`),
  ADD KEY `id_publication` (`id_publication`);

ALTER TABLE `genres_musique`
  ADD PRIMARY KEY (`id_genre_musique`);

ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_article` (`id_article`);

ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_publication` (`id_publication`),
  ADD KEY `id_commentaire` (`id_commentaire`),
  ADD KEY `id_article` (`id_article`);

ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publication`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `id_roles` (`id_roles`);

ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `genres_musique`
  MODIFY `id_genre_musique` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `publications`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`),
  ADD CONSTRAINT `commentaires_ibfk_3` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

ALTER TABLE `correspondre`
  ADD CONSTRAINT `correspondre_ibfk_1` FOREIGN KEY (`id_genre_musique`) REFERENCES `genres_musique` (`id_genre_musique`),
  ADD CONSTRAINT `correspondre_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`);

ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`),
  ADD CONSTRAINT `likes_ibfk_3` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaires` (`id_commentaire`),
  ADD CONSTRAINT `likes_ibfk_4` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `likes_ibfk_5` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `likes_ibfk_6` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publication`),
  ADD CONSTRAINT `likes_ibfk_7` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaires` (`id_commentaire`),
  ADD CONSTRAINT `likes_ibfk_8` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `publications_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `publications_ibfk_3` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);


