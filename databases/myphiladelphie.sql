-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 18:40
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
-- Base de données : `myphiladelphie`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(64) NOT NULL,
  `Organisateur` varchar(64) NOT NULL,
  `Date_debut` date NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bulletin`
--

CREATE TABLE `bulletin` (
  `Id_student` int(11) NOT NULL,
  `FR_note1` double NOT NULL,
  `FR_note2` double NOT NULL,
  `FR_composition` double NOT NULL,
  `ANG_note1` double NOT NULL,
  `ANG_note2` double NOT NULL,
  `ANG_composition` double NOT NULL,
  `HG_note1` double NOT NULL,
  `HG_note2` double NOT NULL,
  `HG_composition` double NOT NULL,
  `PHILO_note1` double NOT NULL,
  `PHILO_note2` double NOT NULL,
  `PHILO_composition` double NOT NULL,
  `MATHS_note1` double NOT NULL,
  `MATHS_note2` double NOT NULL,
  `MATHS_composition` double NOT NULL,
  `SPC_note1` double NOT NULL,
  `SPC_note2` double NOT NULL,
  `SPC_composition` double NOT NULL,
  `SVT_note1` double NOT NULL,
  `SVT_note2` double NOT NULL,
  `SVT_composition` double NOT NULL,
  `ALL_note1` double NOT NULL,
  `ALL_note2` double NOT NULL,
  `ALL_composition` double NOT NULL,
  `ECM_note1` double NOT NULL,
  `ECM_note2` double NOT NULL,
  `ECM_composition` double NOT NULL,
  `Id_bulletin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bulletin`
--

INSERT INTO `bulletin` (`Id_student`, `FR_note1`, `FR_note2`, `FR_composition`, `ANG_note1`, `ANG_note2`, `ANG_composition`, `HG_note1`, `HG_note2`, `HG_composition`, `PHILO_note1`, `PHILO_note2`, `PHILO_composition`, `MATHS_note1`, `MATHS_note2`, `MATHS_composition`, `SPC_note1`, `SPC_note2`, `SPC_composition`, `SVT_note1`, `SVT_note2`, `SVT_composition`, `ALL_note1`, `ALL_note2`, `ALL_composition`, `ECM_note1`, `ECM_note2`, `ECM_composition`, `Id_bulletin`) VALUES
(1, 12, 14, 11, 18, 17, 19, 18, 18, 18, 15, 13, 12, 19.5, 15, 16, 17, 16.5, 15, 19, 12, 14, 0, 0, 0, 15, 17, 18, 1);

-- --------------------------------------------------------

--
-- Structure de la table `demande_inscriptions`
--

CREATE TABLE `demande_inscriptions` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(64) NOT NULL,
  `Prenom` varchar(64) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` enum('Masculin','Feminin','Autre non precisé') NOT NULL,
  `Niveau_antérieure` enum('6ème','5ème','4ème','3ème','seconde S','Première A4','Première D','Terminale A4','Terminale D') NOT NULL,
  `Moyenne_annuelle` double NOT NULL,
  `Account_password` varchar(8) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Statut_demande` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_inscriptions`
--

INSERT INTO `demande_inscriptions` (`Id`, `Nom`, `Prenom`, `Age`, `Sexe`, `Niveau_antérieure`, `Moyenne_annuelle`, `Account_password`, `Email`, `Statut_demande`) VALUES
(1, 'KADANGA', 'GRACIAS', 20, 'Feminin', 'seconde S', 15, '43f6ba1d', 'gracias@gmail.com', 'Approuveé');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(64) NOT NULL,
  `Description` text NOT NULL,
  `Icon` varchar(64) NOT NULL,
  `Photo_description` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`Id`, `Titre`, `Description`, `Icon`, `Photo_description`) VALUES
(1, 'La Maternelle', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, rem.', 'uil uil-bell-school', ''),
(2, 'Le Primaire', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, rem.', 'uil uil-backpack', '/myphiladelphie/img/children.jpg'),
(3, 'Le College', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, rem.', 'uil uil-abacus', ''),
(4, 'Le lycée', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, rem.', 'uil uil-notebooks', ''),
(5, 'Cours spéciaux', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, rem.', 'uil uil-notes', ''),
(6, 'Langues Etrangers', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, rem.', 'uil uil-notebooks', '');

-- --------------------------------------------------------

--
-- Structure de la table `inbox`
--

CREATE TABLE `inbox` (
  `Id_message` int(11) NOT NULL,
  `Contenu` text NOT NULL,
  `Auteur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inbox`
--

INSERT INTO `inbox` (`Id_message`, `Contenu`, `Auteur`) VALUES
(0, 'Demande inscription', 'KADANGA');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `Id` int(11) NOT NULL,
  `information_title` varchar(64) NOT NULL,
  `Contenu` text NOT NULL,
  `Source` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `manageraccount`
--

CREATE TABLE `manageraccount` (
  `Id_manager` int(11) NOT NULL,
  `manager_username` varchar(30) NOT NULL,
  `manager_password` varchar(8) NOT NULL,
  `Statut` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `manageraccount`
--

INSERT INTO `manageraccount` (`Id_manager`, `manager_username`, `manager_password`, `Statut`) VALUES
(1, 'Admin', '1234', 'Directeur');

-- --------------------------------------------------------

--
-- Structure de la table `professors`
--

CREATE TABLE `professors` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(64) NOT NULL,
  `Prenom` varchar(64) NOT NULL,
  `Matiere` varchar(30) NOT NULL,
  `Sexe` varchar(40) NOT NULL,
  `Annees` int(11) NOT NULL,
  `Merite` varchar(60) NOT NULL,
  `performance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professors`
--

INSERT INTO `professors` (`Id`, `Nom`, `Prenom`, `Matiere`, `Sexe`, `Annees`, `Merite`, `performance`) VALUES
(0, 'BAYA', 'Balakiyem', 'SVT', 'Masculin', 5, 'Titulaire', ''),
(1, 'TCHAPKALA', 'Hezouwè', 'H-G', 'Feminin', 3, 'Censeur', '');

-- --------------------------------------------------------

--
-- Structure de la table `professors_account_information`
--

CREATE TABLE `professors_account_information` (
  `Id_professeur` int(11) NOT NULL,
  `professor_username` varchar(30) NOT NULL,
  `professor_password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professors_account_information`
--

INSERT INTO `professors_account_information` (`Id_professeur`, `professor_username`, `professor_password`) VALUES
(0, 'B@user', '123@svt'),
(1, 'Mignonne', 'hg++123');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(64) NOT NULL,
  `Prenom` varchar(64) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` varchar(30) NOT NULL,
  `Niveau` varchar(30) NOT NULL,
  `Date_inscription` date NOT NULL,
  `TotalAnnees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`Id`, `Nom`, `Prenom`, `Age`, `Sexe`, `Niveau`, `Date_inscription`, `TotalAnnees`) VALUES
(1, 'YOUROUKOU', 'Essohana Charles', 19, 'Masculin', 'Terminale D', '2019-06-11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sutudents_account_information`
--

CREATE TABLE `sutudents_account_information` (
  `Id_student` int(11) NOT NULL,
  `student_username` varchar(64) NOT NULL,
  `student_password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sutudents_account_information`
--

INSERT INTO `sutudents_account_information` (`Id_student`, `student_username`, `student_password`) VALUES
(1, 'Ycharles', '@1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`Id_bulletin`),
  ADD KEY `Id_student` (`Id_student`);

--
-- Index pour la table `demande_inscriptions`
--
ALTER TABLE `demande_inscriptions`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`Id_message`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `manageraccount`
--
ALTER TABLE `manageraccount`
  ADD PRIMARY KEY (`Id_manager`);

--
-- Index pour la table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `professors_account_information`
--
ALTER TABLE `professors_account_information`
  ADD PRIMARY KEY (`Id_professeur`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `sutudents_account_information`
--
ALTER TABLE `sutudents_account_information`
  ADD PRIMARY KEY (`Id_student`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `Id_bulletin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demande_inscriptions`
--
ALTER TABLE `demande_inscriptions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `manageraccount`
--
ALTER TABLE `manageraccount`
  MODIFY `Id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sutudents_account_information`
--
ALTER TABLE `sutudents_account_information`
  MODIFY `Id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bulletin`
--
ALTER TABLE `bulletin`
  ADD CONSTRAINT `bulletin_ibfk_1` FOREIGN KEY (`Id_student`) REFERENCES `students` (`Id`);

--
-- Contraintes pour la table `professors_account_information`
--
ALTER TABLE `professors_account_information`
  ADD CONSTRAINT `professors_account_information_ibfk_1` FOREIGN KEY (`Id_professeur`) REFERENCES `professors` (`Id`);

--
-- Contraintes pour la table `sutudents_account_information`
--
ALTER TABLE `sutudents_account_information`
  ADD CONSTRAINT `sutudents_account_information_ibfk_1` FOREIGN KEY (`Id_student`) REFERENCES `students` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
