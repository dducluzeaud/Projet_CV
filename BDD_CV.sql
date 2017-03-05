-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Dim 05 Mars 2017 à 18:58
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `CV`
--

-- --------------------------------------------------------

--
-- Structure de la table `associatif`
--

CREATE TABLE `associatif` (
  `ID` int(11) NOT NULL,
  `ID_etu` int(11) NOT NULL,
  `association` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `associatif`
--

INSERT INTO `associatif` (`ID`, `ID_etu`, `association`) VALUES
(126, 22, '');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `ID` int(11) NOT NULL,
  `ID_etu` int(11) NOT NULL,
  `langues1` text,
  `langues2` text,
  `langues3` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`ID`, `ID_etu`, `langues1`, `langues2`, `langues3`) VALUES
(76, 22, 'anglais', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `age` int(10) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `fixe` varchar(10) DEFAULT NULL,
  `portable` varchar(10) DEFAULT NULL,
  `ID_etu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `age`, `adresse`, `fixe`, `portable`, `ID_etu`) VALUES
(0, 25, '15, rue hannah arendt 37200 Tours', '', '0675919856', 22);

-- --------------------------------------------------------

--
-- Structure de la table `divers`
--

CREATE TABLE `divers` (
  `ID` int(11) NOT NULL,
  `ID_etu` int(11) NOT NULL,
  `divers` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `divers`
--

INSERT INTO `divers` (`ID`, `ID_etu`, `divers`) VALUES
(123, 22, '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID_etu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `today` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_etu`, `nom`, `prenom`, `mail`, `mdp`, `today`) VALUES
(22, 'ducluzeaud', 'david', 'ducluzeaud.david@etu.univ-tours.fr', '172e402b77059b0127f88a6752c85f63e9aa4d36', '2017-03-04 18:52:48');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `ID` int(11) NOT NULL,
  `ID_etu` int(11) NOT NULL,
  `annee_xp1` year(4) DEFAULT NULL,
  `description1` varchar(255) DEFAULT NULL,
  `annee_xp2` year(4) DEFAULT NULL,
  `description2` varchar(255) DEFAULT NULL,
  `annee_xp3` year(4) DEFAULT NULL,
  `description3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experiences`
--

INSERT INTO `experiences` (`ID`, `ID_etu`, `annee_xp1`, `description1`, `annee_xp2`, `description2`, `annee_xp3`, `description3`) VALUES
(38, 22, 2016, 'Stage d\'une durée de 2 mois au sein d\'une équipe INSERM au CEPR à tours', 0000, '', 0000, '');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `ID` int(11) NOT NULL,
  `ID_etu` int(11) NOT NULL,
  `annee_diplome1` year(4) DEFAULT NULL,
  `intitule_formation1` varchar(255) DEFAULT NULL,
  `universite1` varchar(255) DEFAULT NULL,
  `mention1` text,
  `description_form1` varchar(255) DEFAULT NULL,
  `annee_diplome2` year(4) DEFAULT NULL,
  `intitule_formation2` varchar(255) DEFAULT NULL,
  `universite2` varchar(255) DEFAULT NULL,
  `mention2` text,
  `description_form2` varchar(255) DEFAULT NULL,
  `annee_diplome3` year(4) DEFAULT NULL,
  `intitule_formation3` varchar(255) DEFAULT NULL,
  `universite3` varchar(255) DEFAULT NULL,
  `mention3` text,
  `description_form3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`ID`, `ID_etu`, `annee_diplome1`, `intitule_formation1`, `universite1`, `mention1`, `description_form1`, `annee_diplome2`, `intitule_formation2`, `universite2`, `mention2`, `description_form2`, `annee_diplome3`, `intitule_formation3`, `universite3`, `mention3`, `description_form3`) VALUES
(37, 22, 2016, 'Master biologie', 'Tours', '', 'Master 1 biologie santé', 0000, '', '', '', '', 0000, '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `associatif`
--
ALTER TABLE `associatif`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SECONDARY` (`ID_etu`),
  ADD UNIQUE KEY `ID_etu` (`ID_etu`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SECONDARY` (`ID_etu`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID_etu` (`ID_etu`);

--
-- Index pour la table `divers`
--
ALTER TABLE `divers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SECONDARY` (`ID_etu`),
  ADD KEY `ID_etu` (`ID_etu`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID_etu`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SECONDARY` (`ID_etu`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_etu` (`ID_etu`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `associatif`
--
ALTER TABLE `associatif`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `divers`
--
ALTER TABLE `divers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `associatif`
--
ALTER TABLE `associatif`
  ADD CONSTRAINT `associatif_ibfk_1` FOREIGN KEY (`ID_etu`) REFERENCES `etudiant` (`ID_etu`);

--
-- Contraintes pour la table `competences`
--
ALTER TABLE `competences`
  ADD CONSTRAINT `competences_ibfk_1` FOREIGN KEY (`ID_etu`) REFERENCES `etudiant` (`ID_etu`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`ID_etu`) REFERENCES `etudiant` (`ID_etu`);

--
-- Contraintes pour la table `divers`
--
ALTER TABLE `divers`
  ADD CONSTRAINT `divers_ibfk_1` FOREIGN KEY (`ID_etu`) REFERENCES `etudiant` (`ID_etu`);

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_1` FOREIGN KEY (`ID_etu`) REFERENCES `etudiant` (`ID_etu`);

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_1` FOREIGN KEY (`ID_etu`) REFERENCES `etudiant` (`ID_etu`);
