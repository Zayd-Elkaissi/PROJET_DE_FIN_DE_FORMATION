-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 01:30
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hunting`
--

-- --------------------------------------------------------

--
-- Structure de la table `animalchasse`
--

CREATE TABLE `animalchasse` (
  `idAnimal` int(11) NOT NULL,
  `nomAnim` char(25) DEFAULT NULL,
  `imgAnim` char(100) DEFAULT NULL,
  `descriptionAnim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animalchasse`
--

INSERT INTO `animalchasse` (`idAnimal`, `nomAnim`, `imgAnim`, `descriptionAnim`) VALUES
(1, 'Le Lièvre', './img/rabbit.jpg', 'Et le lièvre est l\'une des principales proies du tireur d\'élite marocain, il préfère les espaces ouverts, est actif la nuit, surtout au coucher et à l\'aube, et accompagne son sanctuaire toute la journée, où il vit dans la solitude. La saison de chasse commence d\'octobre à décembre. Les lapins peuvent être chassés le dimanche et les jours fériés, et un lapin est autorisé par tireur d\'élite'),
(2, 'Le renard', './img/Saro.jpg', 'Le renard est un animal prédateur carnivore et il est interdit de le manger religieusement. Il a classé parmi les animaux nuisibles au Maroc. Il est permis de le chasser les dimanches et jours fériés en dehors des parcelles fermées selon l\'arrêté annuel et quatre jours une semaine à l\'intérieur des associations en sollicitant une autorisation des eaux et forêts dans le cas où celle-ci est abondante sur le territoire de l\'association,'),
(3, 'Le Lapin', './img/istoc1.jpg', 'Le lièvre est omniprésent entre la Méditerranée et le désert, s\'installe dans les oasis et à côté des cultures, se rencontre dans les forêts et les terres cultivées. Le cannabis préfère les endroits non humides près des plantations. La chasse est autorisée de début octobre à fin décembre, les dimanches et jours fériés, et cinq joueurs sont autorisés pour chaque tireur d\'élite.'),
(4, 'La Perdrix', './img/Hjla.jpg', 'La perdrix est considérée comme la meilleure proie du tireur d\'élite marocain, car elle peut parcourir de longues distances à la chasse, car on la trouve presque sur tout le territoire national et à différents endroits, et sa période de chasse commence d\'octobre à décembre, et la chasse n\'est autorisée que les dimanches et jours fériés et il est permis de compter sur des chiens dressés Pour faciliter la capture.'),
(5, 'Le Sanglier', './img/Halof.jpg', 'Le cochon vit surtout dans les endroits qui ont une couverture végétale dense. L\'aire de vie de cet animal au Maroc s\'étend de la campagne à l\'Anti-Atlas. Le cochon est généralement actif pendant la nuit et au crépuscule, et il vit en troupeaux ou en groupes familiaux. Le sanglier peut être abattu si des dommages sont signalés, ce qui représente un danger pour les personnes et l\'agriculture.\r\n                  Ensuite, les tireurs d\'élite interviennent pour organiser la \" Al Ihacha\", qui est le seul moyen de tirer sur le sanglier, et elle est menée sous la supervision d\'un fonctionnaire représentant le secteur des eaux et forêts.'),
(6, 'La Tourterelle Des Bois', './img/Limama.jpg', 'La Tourterelle Des Bois fait partie des oiseaux migrateurs qui quittent ses lieux de reproduction en Afrique du Nord et en Europe durant les mois de septembre et octobre et ne reviennent qu\'après la saison hivernale, qui débute en mars. La chasse à la tourterelle est ouverte de juin à juillet dans la région Souss-Massa-Draa, en juillet et août dans les régions du nord, et de juin à août dans le reste du pays. Il est chassé lors de son passage tôt le matin à la recherche de nourriture ou lorsqu\'il se rendort en se cachant.'),
(7, 'Pigeon', './img/Hmama.jpg', 'Le Pigeon de montagne est considéré comme l\'une des proies les plus difficiles pour le tireur d\'élite marocain, en raison de sa prudence envers les humains et de la difficulté à savoir où il se trouve.\r\n                  Là où la chasse l\'oblige à se cacher dans les endroits qu\'il traverse en quête de nourriture ou près de chez lui.\r\n                  Il est permis de le chasser avec l\'ouverture du tireur d\'élite jusqu\'à fin décembre selon la décision annuelle en dehors des parcelles louées, et il est également permis de le chasser avec l\'ouverture de la chasse à la colombe jusqu\'à sa fin. Il est permis de chasser les dimanches et jours fériés pour les marocains et les étrangers résidant au Maroc.'),
(8, 'Le Canard Colvert', './img/Bata.jpg', 'Le canard colvert est l\'un des oiseaux les plus communs au monde. C\'est un oiseau partiellement migrateur. Il y a une population stable au Maroc.On trouve des canards verts dans tous les endroits humides comme les petits étangs et les barrages, la recherche de cet oiseau s\'ouvre début octobre et se ferme fin décembre uniquement les dimanches et jours fériés.');

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `idAssoc` int(11) NOT NULL,
  `idCom` int(11) NOT NULL,
  `idZone` int(11) NOT NULL,
  `nom` char(25) DEFAULT NULL,
  `adress` char(100) DEFAULT NULL,
  `responsable` char(25) DEFAULT NULL,
  `description` char(250) DEFAULT NULL,
  `dateDDe` date DEFAULT NULL,
  `imgAssoc` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`idAssoc`, `idCom`, `idZone`, `nom`, `adress`, `responsable`, `description`, `dateDDe`, `imgAssoc`) VALUES
(1, 1, 1, 'Tahjlit', 'LOT HAMRIA II N°21 AIN DIAB CASABLANCA CASABLANCA', 'Anas', 'kara', '2009-09-10', '../img/Avatar_1.png'),
(2, 1, 2, 'Mejlaou', 'AV HASSAN II N°156 ASSILAH', 'Hamza', 'kara', '2001-12-05', '../img/Avatar_2.png'),
(3, 2, 3, 'La Gambra', 'RESIDENCE EL JADIDA ROUTE EL JADIDA KM 6,5 CASABLANCA', 'Karim', 'kara', '1979-02-27', '../img/Avatar_3.png'),
(4, 2, 4, 'Oued Jdid De Peche Et Cha', 'LOT CHAABANE II N°779 KHMIS SAHEL LARACHE', 'Kamal', NULL, '2018-10-05', '../img/Avatar_4.png');

-- --------------------------------------------------------

--
-- Structure de la table `chaszone`
--

CREATE TABLE `chaszone` (
  `idZone` int(11) NOT NULL,
  `idAnimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chaszone`
--

INSERT INTO `chaszone` (`idZone`, `idAnimal`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `idCom` int(11) NOT NULL,
  `idProv` int(11) NOT NULL,
  `nomCom` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`idCom`, `idProv`, `nomCom`) VALUES
(1, 2, 'Sahel Chamali'),
(2, 3, 'Khmis Sahel');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `idCont` int(11) NOT NULL,
  `namCont` char(25) DEFAULT NULL,
  `messaCont` char(250) DEFAULT NULL,
  `emailCont` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idCont`, `namCont`, `messaCont`, `emailCont`) VALUES
(1, 'Zayd Elkaissi', ' ssss', ' sidiammi@gmail.com'),
(2, 'Zayd Elkaissi', ' SCCXCXC', ' zayd.elkaissi.solicode@gmail.com'),
(3, 'Anas', ' I love Morocco hunting', ' anas.elmorag@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `mediazone`
--

CREATE TABLE `mediazone` (
  `idMd` int(11) NOT NULL,
  `idZone` int(11) NOT NULL,
  `mediaType` char(25) DEFAULT NULL,
  `url` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mediazone`
--

INSERT INTO `mediazone` (`idMd`, `idZone`, `mediaType`, `url`) VALUES
(1, 1, 'image', '../img/Slide1.jpg'),
(2, 2, 'Image', '../img/Slide7.jpg'),
(3, 3, 'Image', '../img/Slide8.jpg'),
(11, 4, 'Image', '../img/Slide9.png'),
(12, 1, 'Image', '../img/Avatar_6.png');

-- --------------------------------------------------------

--
-- Structure de la table `province`
--

CREATE TABLE `province` (
  `idProv` int(11) NOT NULL,
  `nomProv` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `province`
--

INSERT INTO `province` (`idProv`, `nomProv`) VALUES
(2, 'Tanger Assilah'),
(3, 'Larache');

-- --------------------------------------------------------

--
-- Structure de la table `zonechasse`
--

CREATE TABLE `zonechasse` (
  `idZone` int(11) NOT NULL,
  `adressZone` char(100) DEFAULT NULL,
  `superficie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `zonechasse`
--

INSERT INTO `zonechasse` (`idZone`, `adressZone`, `superficie`) VALUES
(1, 'Assilah', 3000),
(2, 'Assilah', 3000),
(3, 'Mjlaou', 3000),
(4, 'Larache', 1780);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animalchasse`
--
ALTER TABLE `animalchasse`
  ADD PRIMARY KEY (`idAnimal`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`idAssoc`),
  ADD KEY `FK_association1` (`idZone`),
  ADD KEY `FK_association5` (`idCom`);

--
-- Index pour la table `chaszone`
--
ALTER TABLE `chaszone`
  ADD PRIMARY KEY (`idZone`,`idAnimal`),
  ADD KEY `FK_association6` (`idAnimal`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `FK_province` (`idProv`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idCont`);

--
-- Index pour la table `mediazone`
--
ALTER TABLE `mediazone`
  ADD PRIMARY KEY (`idMd`),
  ADD KEY `AK_Identifiant_1` (`idMd`),
  ADD KEY `FK_zone` (`idZone`);

--
-- Index pour la table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`idProv`);

--
-- Index pour la table `zonechasse`
--
ALTER TABLE `zonechasse`
  ADD PRIMARY KEY (`idZone`),
  ADD KEY `AK_Identifiant_1` (`idZone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animalchasse`
--
ALTER TABLE `animalchasse`
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `idAssoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `idCont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `mediazone`
--
ALTER TABLE `mediazone`
  MODIFY `idMd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `province`
--
ALTER TABLE `province`
  MODIFY `idProv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `zonechasse`
--
ALTER TABLE `zonechasse`
  MODIFY `idZone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `FK_association1` FOREIGN KEY (`idZone`) REFERENCES `zonechasse` (`idZone`),
  ADD CONSTRAINT `FK_association5` FOREIGN KEY (`idCom`) REFERENCES `commune` (`idCom`);

--
-- Contraintes pour la table `chaszone`
--
ALTER TABLE `chaszone`
  ADD CONSTRAINT `FK_animalZone_zone` FOREIGN KEY (`idZone`) REFERENCES `zonechasse` (`idZone`),
  ADD CONSTRAINT `FK_association6` FOREIGN KEY (`idAnimal`) REFERENCES `animalchasse` (`idAnimal`),
  ADD CONSTRAINT `FK_chasZone_Zone` FOREIGN KEY (`idZone`) REFERENCES `zonechasse` (`idZone`);

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `FK_province` FOREIGN KEY (`idProv`) REFERENCES `province` (`idProv`);

--
-- Contraintes pour la table `mediazone`
--
ALTER TABLE `mediazone`
  ADD CONSTRAINT `FK_zone` FOREIGN KEY (`idZone`) REFERENCES `zonechasse` (`idZone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
