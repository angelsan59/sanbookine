-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 20 Novembre 2016 à 10:29
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `technosan`
--

-- --------------------------------------------------------

--
-- Structure de la table `sbk_book`
--

CREATE TABLE `sbk_book` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `note` int(11) NOT NULL,
  `lu` varchar(11) NOT NULL,
  `date_ajout` date NOT NULL,
  `date_lu` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sbk_book`
--

INSERT INTO `sbk_book` (`id`, `titre`, `auteur`, `resume`, `note`, `lu`, `date_ajout`, `date_lu`, `id_user`, `id_cat`) VALUES
(1, 'L''Assomoir', 'Emile Zola', 'La descente aux enfer de Gervaise entre son ancien amant et son mari. Des ouvriers qui plongent dans la boisson, la nourriture et la paresse.', 3, 'oui', '2016-11-17', '2016-11-18', 1, 8),
(2, 'Germinal', 'Emile Zola', 'La vie des mineurs du Nord au XIXe siècle', 3, 'oui', '2016-11-17', '2016-11-09', 1, 8),
(3, 'Au Bonheur des dames', 'Emile Zola', 'La montée des grands magasins parisiens vue par le quartier qu''il met à terre', 3, 'oui', '2016-11-17', '0000-00-00', 1, 8),
(5, 'Nana', 'Emile Zola', 'la vie de la courtisane Nana', 2, 'oui', '2016-11-17', '0000-00-00', 1, 8),
(7, 'Doctor Sleep', 'Stephen King', 'La suite de Shinning, la vie de Danny devenu adulte	', 5, 'oui', '2016-11-17', '0000-00-00', 1, 3),
(8, 'Mr Mercedes', 'Stephen King', 'Une Mercedes fauche la file d''attente d''une job convention. Qui a pu faire une telle horreur ?', 5, 'oui', '2016-11-17', '0000-00-00', 1, 5),
(16, 'dfgqdr', 'qdfg', 'qdfgqerf', 1, 'oui', '2016-11-20', '0000-00-00', 2, 2),
(17, 'dfgqdr', 'dfgg', 'dfgsdfhsgf', 3, 'oui', '2016-11-20', '0000-00-00', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sbk_categorie`
--

CREATE TABLE `sbk_categorie` (
  `id` int(11) NOT NULL,
  `nom_cat` varchar(255) NOT NULL,
  `desc_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sbk_categorie`
--

INSERT INTO `sbk_categorie` (`id`, `nom_cat`, `desc_cat`) VALUES
(1, 'Général', 'Livres qui n''entrent dans aucune autre catégorie'),
(2, 'Historique', 'Evadez-vous vers le passé tout en découvrant l''Histoire.La vie des gens d''autrefois, les personnages historiques, etc...'),
(3, 'Fantastique', 'Votre vie est monotone? Mais qu''en serait-il si des phénomènes paranormaux venaient la déranger?'),
(4, 'Science Fiction', 'Voyages spaciaux, uchronies, robots, comment sera le futur?'),
(5, 'Thriller', 'Suspense angoissant et frissons. Qui est le tueur? Retrouvera-t-on le disparu sain et sauf? Qui d''autre va mourir?'),
(6, 'Policier', 'Les enquêtes de la police'),
(7, 'Romance', 'Les histoires d''amour plus ou moins agitées'),
(8, 'Classique', 'Ecrits il y a bien longtemps, au point d''être disponibles sur Projet Gutemberg, il est toujours bon de lire ou relire ces chefs d''oeuvre de la littérature'),
(9, 'Jeunes', 'Livres pour enfants et jeunes adultes, mais pas que.');

-- --------------------------------------------------------

--
-- Structure de la table `sbk_user`
--

CREATE TABLE `sbk_user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sbk_user`
--

INSERT INTO `sbk_user` (`id`, `pseudo`, `email`, `pass`) VALUES
(1, 'admin', 'sandrine.ociepka@gmail.com', 'admin'),
(2, 'demo', 'n@n.com', 'demo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sbk_book`
--
ALTER TABLE `sbk_book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sbk_categorie`
--
ALTER TABLE `sbk_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sbk_user`
--
ALTER TABLE `sbk_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sbk_book`
--
ALTER TABLE `sbk_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `sbk_categorie`
--
ALTER TABLE `sbk_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `sbk_user`
--
ALTER TABLE `sbk_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
