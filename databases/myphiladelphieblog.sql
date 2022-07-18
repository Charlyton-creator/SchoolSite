-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 18:41
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
-- Base de données : `myphiladelphieblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Id` int(11) NOT NULL,
  `Description` varchar(64) NOT NULL,
  `Title` varchar(64) NOT NULL,
  `Contenu` text NOT NULL,
  `Author` varchar(64) NOT NULL,
  `Date_poste` date NOT NULL,
  `Categorie` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Id`, `Description`, `Title`, `Contenu`, `Author`, `Date_poste`, `Categorie`) VALUES
(1, '/myphiladelphie/img/footer-news2.jpg', 'Résultats BACI TOGO', 'Le complexe Philadelphie encore cette année a observer un résultat de 100% de réussite eu Baccalauréat première partie toute série confondu (A4 & D).', 'Charles', '2022-06-06', 'Education'),
(2, '/myphiladelphie/img/students.jpg', 'Essor Informatique', 'Aujourd\'hui, notre Monde est révolutionner par une nouvelle ère: Celle des données.\r\nL\'informatique nous facilite tant les choses aujourd\'hui qu\'il faut s\'en méfier ne serais ce qu\'un peu!!!', 'Herman', '2022-06-05', 'Technologie');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `Id_article` int(11) NOT NULL,
  `Auteur_commentaire` varchar(64) NOT NULL,
  `commentaire` text NOT NULL,
  `Date_Post` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`Id_article`, `Auteur_commentaire`, `commentaire`, `Date_Post`) VALUES
(1, 'Youroukou Charles', 'Cool Waouh Philadelphie toujours en avant', '07-06-22'),
(2, 'Youroukou Charles', 'salut', '07-06-22'),
(2, 'Baya B.', 'cool', '18-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `featured`
--

CREATE TABLE `featured` (
  `Id_feature_article` int(11) NOT NULL,
  `feature_title` varchar(64) NOT NULL,
  `feature_text` text NOT NULL,
  `Icon` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `featured`
--

INSERT INTO `featured` (`Id_feature_article`, `feature_title`, `feature_text`, `Icon`) VALUES
(1, 'Fin d\'Etudes', 'La fin d\'une Longue Lutte scolaire.\r\nCela marque un autre début. La vie professionnelle.', '/myphiladelphie/img/graduation-cap-solid.svg'),
(2, 'La foi', 'Nous savons tous la Présence d\'un créateur céleste qui dans sa bonté infini a eu pitié de nous et nous accorde le souffle de vie.\r\nChaque fois que nous somme confronté a une situation désespérante souvenons nous: Il est là!', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`Id_feature_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `featured`
--
ALTER TABLE `featured`
  MODIFY `Id_feature_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`Id_article`) REFERENCES `articles` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
