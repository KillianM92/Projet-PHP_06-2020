-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 19:00
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitecv`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id_people` int(11) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `codepostal` int(6) NOT NULL,
  `numero_tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `deletion_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_people`, `prenom`, `nom`, `adresse`, `ville`, `province`, `codepostal`, `numero_tel`, `email`, `description`, `deletion_flag`) VALUES
(1, 'Killian', 'Moutinard', '6 rue de la fontaine Henri IV', 'Chaville', 'IDF', 92370, '33668742072', 'killian.moutinard@ynov.com', 'Etudiant en première année d\'informatique à YNOV.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id_diplome` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `deletion_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id_diplome`, `description`, `deletion_flag`) VALUES
(1, 'Permis de conduire Moto A2', NULL),
(2, 'Baccaulauréat Général Scientifique Mention Européenne Option Informatique Mention Assez Bien', NULL),
(3, 'Cambridge English Certificate Niveau B2 obtenu en Mars 2019', NULL),
(4, 'Cambridge English Certificate Niveau B1 obtenu en Mars 2017', NULL),
(5, 'Brevet des Collèges Option Européenne Mention Bien', NULL),
(6, 'ASSR 1 & 2', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_exp` int(11) NOT NULL,
  `metier` varchar(50) NOT NULL,
  `entreprise` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date` varchar(30) NOT NULL,
  `deletion_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_exp`, `metier`, `entreprise`, `description`, `date`, `deletion_flag`) VALUES
(1, 'Arbitre officiel', 'Ligue Ile de France de Basketball', 'Arbitrage de matchs officiels de basket dans le département des Hauts-de-Seine (92) et dans toute la région Ile-de-France depuis janvier 2020. Officiel de Jeunes-Région et de U9 à Seniors Pré-Régional.', 'Mars 2019 - Aujourd\'hui', NULL),
(2, 'Éducateur sportif', 'Dynamic Sèvres', 'Encadrement des enfants de l’école des sports. Remplacement de l’éducateur sportif principal dans la section « Basketball » et « Badminton ». Création d’activités sportives et divertissantes pour les enfants de 6 à 11 ans.', 'Octobre 2019 - Aujourd\'hui', NULL),
(3, 'Coach de Basketball', 'Val de Seine Basket', 'Préparation des entraînements de la section Baby Basket (U7) et U9, coaching des enfants de 5 à 8 ans dans leur apprentissage du basketball en groupe de 20 à 30 enfants. Remplacements des coachs en cas d’indisponibilité pour les matchs officiels pour les sections U11 à U20.', 'Septembre 2017 - Aujourd\'hui', NULL),
(4, 'Serveur | Barman', 'Entrepôt Saint Claude', 'Accueil client, Prise de commande, Service à Table, Préparation des boissons au bar, Mise en place des plats avant service, Dressage de table, Préparation des desserts, Inventaire de boissons.', 'Juillet 2019 - Septembre 2019', NULL),
(5, 'Serveur', 'Entrepôt Saint Claude', 'Accueil client, Service à Table, Dressage de table.', 'Juin 2018 - Août 2018', NULL),
(6, 'Assistant-coach de Basketball', 'Basket Club Chaville', 'Préparation des entraînements de la section Baby Basket (U7) et U9, coaching des enfants de 5 à 8 ans dans leur apprentissage du basketball en groupe de 10 à 15 enfants.', 'Septembre 2014 - Juin 2017', NULL),
(7, 'Stage de découverte en informatique', 'TOTAL Global Services SAS', 'Découverte des environnements informatiques, des métiers de l’informatique, visite d’un datacenter et du siège à la Tour Coupole à La Défense.', 'Décembre 2015', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `description_1` varchar(200) NOT NULL,
  `description_2` varchar(200) NOT NULL,
  `description_3` varchar(200) NOT NULL,
  `description_4` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `deletion_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `lieu`, `filiere`, `description_1`, `description_2`, `description_3`, `description_4`, `date`, `deletion_flag`) VALUES
(1, 'Lycée Jean-Pierre Vernant | Sèvres (92310)', 'Baccaulauréat Scientifique Option Informatique', 'Seconde Générale Section Européeenne Option Informatique & Création Numérique (2016/2017)', 'Première Scientifique Section Européenne (2017/2018)', ' Terminale Scientifique Section Européenne Option ISN (2018/2019)', '', 'Septembre 2016 - Juin 2019', NULL),
(2, 'Paris YNOV Campus', 'Ingésup informatique', 'Bachelor 1 (2019/2020)', 'Développement Logiciels', 'Infrastructure & Système d Informations', 'Technologies web & BDD', 'Septembre 2019 - Aujourd\'hui', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `interest`
--

CREATE TABLE `interest` (
  `id_interest` int(11) NOT NULL,
  `description` varchar(400) NOT NULL,
  `deletion_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `interest`
--

INSERT INTO `interest` (`id_interest`, `description`, `deletion_flag`) VALUES
(1, 'En dehors de mes études dans le milieu de l\'informatique, je passe pratiquement tout mon temps libre à faire du sport dans le domaine du basketball et de la musculation. J\'aime beaucoup passer du temps avec mes amis, sortir pour se balader ou bien aller à des concerts et festivals.', NULL),
(2, 'Lorsque je suis chez moi, je regarde beaucoup de films et de séries fantastiques et d\'horreur mais je ne rate pas l\'occasion de regarder des matchs de différents sports. Le reste de mon temps libre est consacré aux jeux vidéos en ligne avec mes amis  mais aussi à me renseigner et tenter de découvrir les nouvelles technologies.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'killian', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id_skill` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `deletion_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id_skill`, `description`, `deletion_flag`) VALUES
(1, 'Responsive Design, UX/UI Design', NULL),
(2, 'Base de données : phpMyAdmin & MariaDB', NULL),
(3, 'Connaissances en réseaux & Développement d\'un VPN à distance', NULL),
(4, 'Algorithmique Python & C', NULL),
(6, 'Gestion de Projet Agile & Scrum', NULL),
(10, 'Méthodes de Communication professionnelle', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_people`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id_diplome`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_exp`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id_interest`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skill`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id_people` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id_diplome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `interest`
--
ALTER TABLE `interest`
  MODIFY `id_interest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
