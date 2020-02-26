-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 26 fév. 2020 à 10:33
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mfc`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE IF NOT EXISTS `apprenant` (
  `usr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `usr_nom` varchar(50) NOT NULL,
  `usr_prenom` varchar(50) NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `usr_telephone` varchar(15) DEFAULT NULL,
  `usr_passe` varchar(15) NOT NULL,
  `usr_type` int(1) DEFAULT NULL,
  PRIMARY KEY (`usr_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`usr_ID`, `usr_nom`, `usr_prenom`, `usr_email`, `usr_telephone`, `usr_passe`, `usr_type`) VALUES
(2, 'Garmon', 'Martha', 'MarthaAGarmon@rhyta.com', '0466447873', 'coh1Ee', 0),
(3, 'Masson', 'Clementine', 'ClementineMasson@rhyta.com', ' 0473442316', 'neejeG4zae', 0),
(4, 'Phaneuf', 'Hugues', 'HuguesPhaneuf@rhyta.com', ' 0195299275', 'ahFurohtu9', 0),
(5, ' Loiseau', 'Bartlett ', ' BartlettLoiseau@teleworm.us', '0153854412', 'ohyahYei', 0),
(6, 'Sorel', 'Honoré', 'HonoreSorel@dayrep.com', ' 0535870680', 'aem9Ie', 0),
(7, 'Demers', 'Gilles', ' GillesDemers@rhyta.com', ' 0591189581', 'Eaked19', 0),
(11, 'Mess', 'Hugo ', 'hugo.themess@gmail.com', '08989898989', 'Hugomess1', 0),
(14, 'Gall', 'Clara', 'clara.france@gmail.com', '09898998', 'Hello1world', 0),
(15, 'mergere', 'Hugo ', 'hugo.berger@gmail.com', '03031121', 'Bgdufutur16', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_ID` int(10) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cat_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`cat_ID`, `cat_nom`) VALUES
(4, 'Réseau'),
(5, 'Développement'),
(6, 'Bureautique');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `dem_id` int(11) NOT NULL AUTO_INCREMENT,
  `dem_usr_id` int(11) NOT NULL,
  `dem_form_id` int(11) NOT NULL,
  `dem_gest_id` int(11) NOT NULL,
  `dem_statut` int(11) NOT NULL,
  PRIMARY KEY (`dem_id`),
  KEY `FK_dem_usr_id` (`dem_usr_id`),
  KEY `FK_dem_form_id` (`dem_form_id`),
  KEY `FK_dem_gerer` (`dem_gest_id`,`dem_form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `form_ID` int(11) NOT NULL AUTO_INCREMENT,
  `form_nom` varchar(50) NOT NULL,
  `form_cat` int(50) NOT NULL,
  `form_desc` longtext NOT NULL,
  `form_prix` int(11) NOT NULL,
  `form_niveau` varchar(20) NOT NULL,
  `form_statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`form_ID`),
  KEY `form_cat` (`form_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`form_ID`, `form_nom`, `form_cat`, `form_desc`, `form_prix`, `form_niveau`, `form_statut`) VALUES
(1, 'TCP/IP', 4, 'Vous n’y connaissez rien aux réseaux ? Pas de soucis, ce cours est fait pour tous !', 1600, 'Débutant', 1),
(2, 'Voix et Téléphonie sur IP', 4, '', 3500, 'Débutant', 0),
(3, 'La technologie Sans-fil WIFI', 4, 'Désormais, le WiFi s’installe dans toutes les entreprises modernes. Son usage en tout lieu, à tout moment et avec tout type de terminaux et périphériques, nécessite cependant des précautions particulières en termes de sécurité et de performance qui sont indispensables au bon fonctionnement des applications.', 980, 'Débutant', 1),
(4, 'Maîtriser l\'essentiel de la bureautique', 6, 'Parmi les compétences indispensables pour réussir son insertion ou évolution professionnelle, la maîtrise de la bureautique est une priorité.', 4000, 'Débutant', 1),
(5, 'Programmez en PHP 5', 5, 'Blogs, réseaux sociaux, sites e-commerce, API… Vous l\'aurez compris avec PHP les développeurs sont en mesure de développer toutes sortes de sites web.', 1800, 'Intermédiaire', 1);

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

DROP TABLE IF EXISTS `gerer`;
CREATE TABLE IF NOT EXISTS `gerer` (
  `form_ID` int(11) NOT NULL,
  `gest_ID` int(11) NOT NULL,
  PRIMARY KEY (`form_ID`,`gest_ID`),
  KEY `Gerer_Gestionnaire0_FK` (`gest_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

DROP TABLE IF EXISTS `gestionnaire`;
CREATE TABLE IF NOT EXISTS `gestionnaire` (
  `gest_ID` int(11) NOT NULL AUTO_INCREMENT,
  `gest_email` varchar(50) NOT NULL,
  `gest_login` varchar(50) NOT NULL,
  `gest_passe` varchar(50) NOT NULL,
  `gest_type` int(1) NOT NULL,
  PRIMARY KEY (`gest_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`gest_ID`, `gest_email`, `gest_login`, `gest_passe`, `gest_type`) VALUES
(1, 'mdeed@gmail.com', 'medi', '16', 0);

-- --------------------------------------------------------

--
-- Structure de la table `locaux`
--

DROP TABLE IF EXISTS `locaux`;
CREATE TABLE IF NOT EXISTS `locaux` (
  `locaux_ID` int(11) NOT NULL AUTO_INCREMENT,
  `locaux_nom` varchar(50) NOT NULL,
  `locaux_ville` varchar(50) NOT NULL,
  PRIMARY KEY (`locaux_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `session_ID` int(11) NOT NULL,
  `usr_ID` int(11) NOT NULL,
  PRIMARY KEY (`session_ID`,`usr_ID`),
  KEY `Participer_Apprenant0_FK` (`usr_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `session_ID` int(11) NOT NULL AUTO_INCREMENT,
  `session_date` date NOT NULL,
  `session_nb_inscrit` int(11) NOT NULL,
  `session_statut` tinyint(1) NOT NULL,
  `locaux_ID` int(11) NOT NULL,
  `form_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`session_ID`),
  KEY `Session_Locaux_FK` (`locaux_ID`),
  KEY `Session_Form_FK` (`form_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_dem_gerer` FOREIGN KEY (`dem_gest_id`,`dem_form_id`) REFERENCES `gerer` (`gest_ID`, `form_ID`),
  ADD CONSTRAINT `FK_dem_usr_id` FOREIGN KEY (`dem_usr_id`) REFERENCES `apprenant` (`usr_ID`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_cat` FOREIGN KEY (`form_cat`) REFERENCES `categorie` (`cat_ID`);

--
-- Contraintes pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD CONSTRAINT `Gerer_Formation_FK` FOREIGN KEY (`form_ID`) REFERENCES `formation` (`form_ID`),
  ADD CONSTRAINT `Gerer_Gestionnaire0_FK` FOREIGN KEY (`gest_ID`) REFERENCES `gestionnaire` (`gest_ID`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `Participer_Apprenant0_FK` FOREIGN KEY (`usr_ID`) REFERENCES `apprenant` (`usr_ID`),
  ADD CONSTRAINT `Participer_Session_FK` FOREIGN KEY (`session_ID`) REFERENCES `session` (`session_ID`);

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `Session_Form_FK` FOREIGN KEY (`form_ID`) REFERENCES `formation` (`form_ID`),
  ADD CONSTRAINT `Session_Locaux_FK` FOREIGN KEY (`locaux_ID`) REFERENCES `locaux` (`locaux_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
