-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 04 Mars 2017 à 14:07
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
(89, 8, 'vzd'),
(90, 9, 'lze lez c eldne ccefne clec'),
(91, 10, 'lnlkazlkal,'),
(103, 11, 'clz  mka dampm '),
(104, 13, 'zefzf'),
(105, 14, 'zefea azds za '),
(111, 15, ''),
(112, 16, 'messe'),
(119, 17, 'f&quot;kjnfk&quot;f'),
(120, 18, '');

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
(39, 8, 'anglaise', '', ''),
(40, 9, 'anglais', '', ''),
(41, 10, 'allemand', '', ''),
(53, 11, 'italien', '', ''),
(54, 13, 'français', '', ''),
(55, 14, 'anglais', '', ''),
(61, 15, 'efface fez fr re ', '', ''),
(62, 16, 'français', '', ''),
(69, 17, 'allemand', '', ''),
(70, 18, 'chinois', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_info` int(10) NOT NULL,
  `adresse` varchar(10) NOT NULL,
  `fixe` varchar(10) DEFAULT NULL,
  `portable` varchar(10) DEFAULT NULL,
  `ID_etu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(86, 8, 'efzfzef'),
(87, 9, 'alc zclzeknc ezcezknc ezlcneapaez clen'),
(88, 10, 'dandlka,dapoja,d padn al'),
(100, 11, 'ldknad mpkanzd amkna apdnp'),
(101, 13, 'fzfzefzfzfzfzfzefc e efd cze aé as '),
(102, 14, 'd,anz z,nd azdnk, dan, a,n ,n '),
(108, 15, ''),
(109, 16, ''),
(116, 17, 'kf &quot;kfn&quot;'),
(117, 18, '');

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
(8, 'ducluzeaud', 'david', 'ducluzeaud.david@orange.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2017-03-02 02:33:21'),
(9, 'toto', 'toto', 'tot@tot.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-03-02 12:28:08'),
(10, 'dupont', 'jean', 'jean.dupont@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2017-03-03 12:23:31'),
(11, 'ducluzeaud', 'colette', 'c.duc@duc.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2017-03-03 12:44:03'),
(12, 'tata', 'tata', 'tat@tat.om', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-03-03 13:23:45'),
(13, 'jean-marie', 'Ducluzeaud', 'jd@jd.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-03-03 20:31:50'),
(14, '  edez ', 'dl adln', 'a@a.a', 'd656370089fedbd4313c67bfdc24151fb7c0fe8b', '2017-03-03 20:38:05'),
(15, 'fasquelle', 'daniel', 'd.fas@fas.com', '9d5c7d1e3663a680b1f8129cb05777c43391ec4d', '2017-03-03 20:59:40'),
(16, 'estelle ', 'fasquelle', 'estelle.fasquelle@free.fr', '146dfd191464517a17306f915a8c6c11a01ecb75', '2017-03-03 21:03:51'),
(17, 'fasquelle', 'fruit', 'fruit@fruit.com', '883d2500f8756e5985b2d676a470d0f2206208fc', '2017-03-03 21:51:37'),
(18, 'dd', 'dd', 'dd@dd.com', '00c2e86d4d85eef415364b91eae9a6371fc48184', '2017-03-04 00:10:23');

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
(8, 8, 2016, 'INSERM', 2000, '', 2000, ''),
(9, 9, 0000, 'fzefzefz zfzc', 2000, '', 2000, ''),
(10, 10, 2012, 'dnczdcnlzncnz', 2000, '', 2000, ''),
(18, 11, 0000, 'caazxc', 0000, '', 0000, ''),
(19, 13, 1970, 'knznzkne ezjnf zjenf  nez zj j', 0000, '', 0000, ''),
(20, 14, 2000, 'kzenk kebzke kb k nz kf', 0000, '', 0000, ''),
(25, 15, 0000, 'gzelgnlrn ', 0000, '', 0000, ''),
(26, 16, 2016, 'assistante social', 0000, '', 0000, ''),
(32, 17, 0000, 'fj&quot;nfkj&quot;nf', 0000, '', 0000, ''),
(33, 18, 0000, 'dkakdnad', 0000, '', 0000, '');

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
(17, 8, 2016, 'Master biologie', 'tours', 'Excellent', 'fzfzfzefz', 2000, '', '', '', '', 2000, '', '', '', ''),
(18, 9, 0000, 'Biologie', 'tours', 'Assez-Bien', 'znzenclzeknflzenmlznl llfnz', 2000, '', '', '', '', 2000, '', '', '', ''),
(19, 10, 1945, 'armee', 'dadas', '', 'azazacacaa zda', 0000, '', '', '', '', 0000, '', '', '', ''),
(24, 11, 2012, 'psychologie', 'axa', '', 'czdczcaax', 0000, '', '', '', '', 0000, '', '', '', ''),
(25, 13, 1955, 'médecine', 'poitiers', 'Excellent', 'znfkznf nzadnoadn aiad aikn', 0000, '', '', '', '', 0000, '', '', '', ''),
(26, 14, 1980, 'knzfbnz', 'kzdbakd', '', 'dkadaknd', 0000, '', '', '', '', 0000, '', '', '', ''),
(29, 15, 0000, 'gel gre', 'g zg&quot;g&quot; ', '', 'gg g&quot; gez redf ', 0000, '', '', '', '', 0000, '', '', '', ''),
(30, 16, 1985, 'bac', 'chartres', '', 'nndand &amp;jln &amp;nelnj ', 0000, '', '', '', '', 0000, '', '', '', ''),
(31, 17, 0000, 'czkcn,', 'ecj,nze', '', 'jncznczjenc', 0000, '', '', '', '', 0000, '', '', '', ''),
(32, 18, 0000, 'cnkzcnzk', 'nczkcnz', '', 'jczlcnzc oj ', 0000, '', '', '', '', 0000, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `id_info` int(10) NOT NULL,
  `age` int(11) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `telephone_fixe` varchar(10) DEFAULT NULL,
  `telephone_portable` varchar(10) DEFAULT NULL,
  `ID_etu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id_info`),
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
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id_info`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `associatif`
--
ALTER TABLE `associatif`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_info` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `divers`
--
ALTER TABLE `divers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
