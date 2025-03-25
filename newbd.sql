-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 25 mars 2025 à 16:04
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `cathegories`
--

DROP TABLE IF EXISTS `cathegories`;
CREATE TABLE IF NOT EXISTS `cathegories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle_cathegorie` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COMMENT='Cette table permet d''enregistrer les Cathegories';

--
-- Déchargement des données de la table `cathegories`
--

INSERT INTO `cathegories` (`id`, `libelle_cathegorie`, `created_at`) VALUES
(1, 'Electronique', '2025-03-21 15:36:16'),
(2, 'Vetements', '2025-03-21 15:58:54');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_Client` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Tel_Client` int NOT NULL,
  `E-Mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COMMENT='Cette table permet d''enregistrer les Clients ';

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom_Client`, `Adresse`, `Tel_Client`, `E-Mail`) VALUES
(1, 'Tagne Chritan', 'Valence', 699774483, 'ChrisTagne@gmail.com'),
(2, 'Takui', 'Celestin', 653883393, 'CelTakui@gmail.com'),
(3, 'Talom', 'Gildas', 677483927, 'Giltalom@gmail.com'),
(4, 'Simom', 'DOUL_BERI', 655447382, 'Sim@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Ref_Commande` varchar(255) NOT NULL,
  `Date_Jour` date NOT NULL,
  `Libelle_Operation` varchar(255) NOT NULL,
  `Nom_Produit` varchar(255) NOT NULL,
  `Cathegorie` varchar(255) NOT NULL,
  `Caracteristiques` varchar(255) NOT NULL,
  `Quantitee_Entree` int NOT NULL,
  `Nom_Fournisseur` varchar(50) NOT NULL,
  `Adresse_Fournisseur` varchar(60) NOT NULL,
  `Email_Fournisseur` varchar(80) NOT NULL,
  `Tel_Fournisseur` int NOT NULL,
  `Prix_Achat` int NOT NULL,
  `Date_Livraison` date NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COMMENT='Cette table permet d''enregistrer les commandes';

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `Ref_Commande`, `Date_Jour`, `Libelle_Operation`, `Nom_Produit`, `Cathegorie`, `Caracteristiques`, `Quantitee_Entree`, `Nom_Fournisseur`, `Adresse_Fournisseur`, `Email_Fournisseur`, `Tel_Fournisseur`, `Prix_Achat`, `Date_Livraison`, `Create_at`) VALUES
(1, 'sdfghj', '2025-03-11', 'fghjkk', 'pommes', 'fruit', 'jhhhfhfhfh', 24, 'jkuytfdfgh', 'hhfh-mmg', 'dfgh@gmail.com', 789987654, 5000, '2025-03-11', '2025-03-12 23:00:00'),
(2, 'hhhhhh', '2025-03-18', 'eeggege', 'ehehhe', 'ghj', 'hhhh', 666, '', '', '', 0, 0, '0000-00-00', '2025-03-18 20:20:59'),
(3, 'dfghgf', '2025-03-05', 'Ventes', 'Bonbons', 'friandse', 'gggggg', 6, '6778889fg97', '2003Bonaberi', 'okfoof@gmail.com', 2147483647, 7777, '0000-00-00', '2025-03-18 21:02:15'),
(4, 'dfghgf', '2025-03-05', 'Ventes', 'Bonbons', 'friandse', 'gggggg', 6, '6778889fg97', '2003Bonaberi', 'okfoof@gmail.com', 2147483647, 7777, '0000-00-00', '2025-03-18 21:02:24'),
(5, 'dfghgf', '2025-03-05', 'Ventes', 'Bonbons', 'friandse', 'gggggg', 6, '6778889fg97', '2003Bonaberi', 'okfoof@gmail.com', 2147483647, 7777, '0000-00-00', '2025-03-18 21:33:42'),
(6, 'dfghgf', '2025-03-18', 'Ventes', 'Bonbons', 'friandse', 'hhdhy', 6, '6778889fg97', '2003Bonaberi', 'okfoof@gmail.com', 2147483647, 7777, '0000-00-00', '2025-03-18 21:39:46'),
(7, '000001', '2025-03-20', 'Ventes', '6778889fg97', 'materieaux', 'ee3,55n', 33, 'foposs ee paul', '333bb', 'paulfopossi5@gmail.com', 4444, 444445, '0000-00-00', '2025-03-20 12:16:29'),
(8, 'Les Nerfs', '2025-03-20', 'Test Commande', 'Sacs', 'Utilesables', 'Gros', 3, 'Fopossi', 'Maison Blanche', 'Fpo@gmail.com', 766554433, 600, '2025-03-22', '2025-03-20 14:31:46'),
(9, 'Reussite', '2025-03-04', 'LA reussite', 'Avocat', 'Fruit', 'Bien Bien', 3, 'Fopossi', 'Maison Blanche', 'yss@gmail.com', 67777777, 600, '2025-03-28', '2025-03-20 14:38:54');

-- --------------------------------------------------------

--
-- Structure de la table `entrees`
--

DROP TABLE IF EXISTS `entrees`;
CREATE TABLE IF NOT EXISTS `entrees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Code_Facture` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Libelle_Op` varchar(255) NOT NULL,
  `Nom_produit` varchar(255) NOT NULL,
  `Cathegorie` varchar(255) NOT NULL,
  `Caracteristiques` varchar(255) NOT NULL,
  `Quantitee_Entree` int NOT NULL,
  `Nom_Fournisseur` varchar(255) NOT NULL,
  `Prix_Achat` int NOT NULL,
  `Stock_min` int NOT NULL,
  `Stock_max` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb3 COMMENT='Cette table permet d''enregistrer les entrees de produits';

--
-- Déchargement des données de la table `entrees`
--

INSERT INTO `entrees` (`id`, `Code_Facture`, `Date`, `Libelle_Op`, `Nom_produit`, `Cathegorie`, `Caracteristiques`, `Quantitee_Entree`, `Nom_Fournisseur`, `Prix_Achat`, `Stock_min`, `Stock_max`, `created_at`) VALUES
(54, 'NO_7932', '2025-03-22', 'Ventes', 'Pain', '2', 'Farine', 500, '3', 250000, 5, 1500, '2025-03-21 17:28:05'),
(55, 'NO_9980', '2025-03-23', 'Fabricationlocale', 'Moteur', '1', '5v tenion 5A', 4, '1', 66650, 7, 8, '2025-03-23 16:53:23');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom_Fournisseur` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Adresse` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `E_Mail` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tel_Fournisseurs` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Cette table permet d''enregistrer les fournisseurs ';

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `Nom_Fournisseur`, `Adresse`, `E_Mail`, `tel_Fournisseurs`) VALUES
(1, 'Fopossi', 'Bonaberi-douala5', 'Paulfopossi5@gmail.com', 692678655),
(2, 'Kamga joseph', 'Paris-France', 'JeanKamga@gmail.com', 67744522),
(3, 'BanaAfrca', 'Bessenge-feu rouge', 'BanaAfricamm@gmail.com', 693669372);

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

DROP TABLE IF EXISTS `sorties`;
CREATE TABLE IF NOT EXISTS `sorties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Code_Facture` varchar(255) NOT NULL,
  `Date_Sortie` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LiblleOp` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Nom_Produit` varchar(255) NOT NULL,
  `Cathegorie` varchar(255) NOT NULL,
  `Caracteristiques` varchar(255) NOT NULL,
  `Qtee_Sortie` int NOT NULL,
  `Nom_Client` varchar(255) NOT NULL,
  `Adresse_Client` varchar(255) NOT NULL,
  `Email_Client` varchar(255) NOT NULL,
  `Tel_Client` int NOT NULL,
  `Prix_Sortie` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COMMENT='Cette table permet d''enregistrer les Sorties des produits';

--
-- Déchargement des données de la table `sorties`
--

INSERT INTO `sorties` (`id`, `Code_Facture`, `Date_Sortie`, `LiblleOp`, `Nom_Produit`, `Cathegorie`, `Caracteristiques`, `Qtee_Sortie`, `Nom_Client`, `Adresse_Client`, `Email_Client`, `Tel_Client`, `Prix_Sortie`) VALUES
(1, 'chvug', '2025-03-12 14:39:37', 'Achat', 'Salade', 'Fruit-legumme', 'Saveur', 4, 'Salomon', 'Sud_237', 'Sal@gmailcom', 693774462, 33330),
(2, 'fkut', '2025-03-12 14:39:37', 'Usage', 'Arachide', 'fruit', 'type couleur', 0, 'Samuel', 'Rue4472/336', 'Sam@gmail.com', 690448853, 77500);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Mot_de_passe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Liste des personnes pouvant se connecter a l''app';

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `Mot_de_passe`, `created_at`) VALUES
(1, 'Kamsuc775', 'sukam66@gmail.com', '3388Kam35', '2025-03-21 04:28:40'),
(2, 'Kom_Romeo', 'rome4567@gmail.com', '23hddd03', '2025-03-21 04:28:40'),
(10, 'Joe', 'joe@gmail.com', '$2y$10$cHlchpKhumR2fRKGmGpgjOdb6gUy.inaifE8Ex2c3NjiEH2vIzrhu', '2025-03-21 04:28:40'),
(11, 'admin', 'admin@gmail.com', '$2y$10$O96LCqTLjhFkq21Nzo.2E.TRcwLj7rxUAcIr.x8PDLFCtuN1YeyDu', '2025-03-21 04:28:40'),
(54, 'zedcus', 'Zedi@gmail.com', '$2y$10$WqLC1Y3mFTRacpx5//eCCOcOQzo3dCI3jRXKlzH8S7o.B7pc8UhJS', '2025-03-21 04:28:40'),
(65, 'ZYZY', 'Ztzo@gmail.com', '$2y$10$ez4GntqUj7h6KHSdJS0MnuuuxnfdvFPqtwK3Ki.wCZfDWVaDJb5Ci', '2025-03-21 04:28:40'),
(38, 'gbhub', 'hhhh@k', '$2y$10$OZbZU96YZ5kmXx4ODfpNYuMChpchvx9eY/PGtP.fiDEcm0eHbvnve', '2025-03-21 04:28:40'),
(50, 'foposs ee paul', 'paulfopossi5@gmail.com', '$2y$10$ccFVuMH6v2j2vw6fU5mf0uY0TwCsrRgZ85xA1bm5rIf01ddBhMZjC', '2025-03-21 04:28:40'),
(53, 'Zedim', 'Zed@gmail.com', '$2y$10$h1cVeQ4AjTP1MC5v/CA8BetR7QoQpgLmOwwAOsUwYm/pR357xl9yC', '2025-03-21 04:28:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
