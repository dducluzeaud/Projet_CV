n SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 02 Mars 2017 à 03:39
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
(89, 8, 'vzd');

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
(39, 8, 'anglaise', '', '');

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
(86, 8, 'efzfzef');

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
  `age` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone_fixe` int(11) DEFAULT NULL,
  `telephone_portable` int(11) DEFAULT NULL,
  `today` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_etu`, `nom`, `prenom`, `mail`, `mdp`, `age`, `adresse`, `telephone_fixe`, `telephone_portable`, `today`) VALUES
(8, 'ducluzeaud', 'david', 'ducluzeaud.david@orange.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, '', NULL, NULL, '2017-03-02 02:33:21');

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
(8, 8, 2016, 'INSERM', 2000, '', 2000, '');

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
(17, 8, 2016, 'Master biologie', 'tours', 'Excellent', 'fzfzfzefz', 2000, '', '', '', '', 2000, '', '', '', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `divers`
--
ALTER TABLE `divers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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

