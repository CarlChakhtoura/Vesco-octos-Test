-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 19 Janvier 2020 à 12:43
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idAdmin` int(11) NOT NULL,
  `firstNameAdmin` varchar(256) DEFAULT NULL,
  `lastNameAdmin` varchar(256) DEFAULT NULL,
  `telAdmin` int(11) DEFAULT NULL,
  `emailAdmin` varchar(256) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`idAdmin`, `firstNameAdmin`, `lastNameAdmin`, `telAdmin`, `emailAdmin`, `password`) VALUES
(1, 'mat', 'mat', 1515, 'mat@laposte.net', 'matmat');

-- --------------------------------------------------------

--
-- Structure de la table `particulier`
--

CREATE TABLE `particulier` (
  `Userid` int(11) NOT NULL,
  `Lastname` varchar(256) DEFAULT NULL,
  `Firstname` varchar(256) DEFAULT NULL,
  `Email` varchar(256) DEFAULT NULL,
  `Sexe` int(11) DEFAULT '1',
  `password` varchar(256) DEFAULT NULL,
  `nationalite` varchar(256) DEFAULT NULL,
  `pays_residence` varchar(256) DEFAULT NULL,
  `adresse` varchar(500) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `particulier`
--

INSERT INTO `particulier` (`Userid`, `Lastname`, `Firstname`, `Email`, `Sexe`, `password`, `nationalite`, `pays_residence`, `adresse`, `code_postal`, `telephone`) VALUES
(33, 'PDJRQ', 'Horl', 'magon@laposte.net', 1, '0f30f6e7dd63b148dd744709ffefbfb8293cc87d', 'France', 'Kwfshj', 'Antony', 92000, 605859635),
(28, 'MENNER', 'Quentin', 'menner@laposte.net', 1, '71d1f4a6b14c1a2fe5990456bb74a490541770f8', 'France', 'France', 'Cachan', 94400, 675757575),
(27, 'BARON', 'Albane', 'baron@laposte.net', 1, '6ac56e9866b7b5ea88b04f9643e94504fba68fe8', 'France', 'France', 'rue de la gare, Palaiseau', 91120, 651511598),
(26, 'EL OUAZZANI', 'Saifedine', 'safsaf@laposte.net', 1, '99800b85d3383e3a2fb45eb7d0066a4879a9dad0', 'Maroc', 'Maroc', 'Courneuve', 93120, 1894),
(25, 'CHAKTOURA', 'Carl', 'chacha@laposte.net', 1, 'fd4cef7a4e607f1fcc920ad6329a6df2df99a4e8', 'France', 'France', 'Convention Paris 15', 75015, 1918),
(29, 'PAVAUT', 'Mathieu', 'mat@laposte.net', 1, 'a14847ef81de19f27d2715193132cb70267bbf04', 'France', 'France', 'rue Carnot Palaiseau', 9120, 15154),
(24, 'FAURE', 'Gustave', 'faure@laposte.net', 1, 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'France', 'France', 'Convention, Paris 15', 75015, 1717),
(22, 'BRISSE', 'Clement', 'brisse@laposte.net', 1, '1f71e0f4ac9b47cd93bf269e4017abaab9d3bd63', 'France', 'France', 'Vaucresson', 78000, 1213112),
(34, 'uuuu', 'uuuu', 'free.fr', 1, '46ac1aea9f4e5aa8a4fd23e88615eb568eb4e0a4', 'France', 'Kwfshj', 'PAris', 75000, 675758575);

-- --------------------------------------------------------

--
-- Structure de la table `policier`
--

CREATE TABLE `policier` (
  `idCop` int(11) NOT NULL,
  `lastNameCop` varchar(256) DEFAULT NULL,
  `firstNameCop` varchar(256) DEFAULT NULL,
  `policeStation` varchar(256) DEFAULT NULL,
  `emailCop` varchar(256) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `telephoneCop` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `policier`
--

INSERT INTO `policier` (`idCop`, `lastNameCop`, `firstNameCop`, `policeStation`, `emailCop`, `password`, `telephoneCop`) VALUES
(2, 'SDYDXW', 'Pdwklhx', 'Ufqfnxjfz', 'mat@laposte.net', 'a14847ef81de19f27d2715193132cb70267bbf04', 1717);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `numeroDuTest` int(11) NOT NULL,
  `resultatTest1` int(11) NOT NULL,
  `resultatTest2` int(11) NOT NULL,
  `resultatTest3` int(11) NOT NULL,
  `resultatTest4` int(11) NOT NULL,
  `dateDuTest` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `testparticulier`
--

CREATE TABLE `testparticulier` (
  `testId` int(11) NOT NULL,
  `lastname` varchar(256) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `dateDuTest` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `testpolicier`
--

CREATE TABLE `testpolicier` (
  `idTestPolicier` int(11) NOT NULL,
  `lastnameCop` varchar(256) DEFAULT NULL,
  `firstNameCop` varchar(256) DEFAULT NULL,
  `lastNameChecked` varchar(256) DEFAULT NULL,
  `firstNameChecked` varchar(256) DEFAULT NULL,
  `dateDuTest` date DEFAULT NULL,
  `lieuDuTest` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `emailAdmin` (`emailAdmin`);

--
-- Index pour la table `particulier`
--
ALTER TABLE `particulier`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Index pour la table `policier`
--
ALTER TABLE `policier`
  ADD PRIMARY KEY (`idCop`),
  ADD UNIQUE KEY `emailCop` (`emailCop`),
  ADD UNIQUE KEY `telephoneCop` (`telephoneCop`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`numeroDuTest`);

--
-- Index pour la table `testparticulier`
--
ALTER TABLE `testparticulier`
  ADD PRIMARY KEY (`testId`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `firstname` (`firstname`);

--
-- Index pour la table `testpolicier`
--
ALTER TABLE `testpolicier`
  ADD PRIMARY KEY (`idTestPolicier`),
  ADD KEY `lastnameCop` (`lastnameCop`),
  ADD KEY `firstNameCop` (`firstNameCop`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `particulier`
--
ALTER TABLE `particulier`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `policier`
--
ALTER TABLE `policier`
  MODIFY `idCop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `numeroDuTest` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `testparticulier`
--
ALTER TABLE `testparticulier`
  MODIFY `testId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `testpolicier`
--
ALTER TABLE `testpolicier`
  MODIFY `idTestPolicier` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
