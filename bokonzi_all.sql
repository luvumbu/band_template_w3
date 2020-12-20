-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Novembre 2020 à 06:01
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bokonzi_all`
--

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
`club_id` int(11) NOT NULL,
  `club_nom` varchar(400) NOT NULL,
  `club_region` varchar(400) NOT NULL,
  `club_departement` varchar(20) NOT NULL,
  `club_add_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `club`
--

INSERT INTO `club` (`club_id`, `club_nom`, `club_region`, `club_departement`, `club_add_date`) VALUES
(1, 'LMA4', 'NORD', '59000', '2020-11-26 07:00:41');

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

CREATE TABLE IF NOT EXISTS `epreuve` (
`id_epreuve` int(11) NOT NULL,
  `nom_complet_epreuve` varchar(150) NOT NULL,
  `nom_filtre_epreuve` varchar(50) NOT NULL,
  `sex_epreuve` varchar(1) NOT NULL,
  `zone_epreuve` varchar(50) NOT NULL,
  `add_epreuve` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`result_id` int(11) NOT NULL,
  `result_id_user` int(10) NOT NULL,
  `result_id_club` int(10) NOT NULL,
  `result_id_epreuve` int(10) NOT NULL,
  `id_villes` int(10) NOT NULL,
  `result_users_nom_complet` varchar(100) NOT NULL,
  `result_users_nom` varchar(50) NOT NULL,
  `result_users_prenom` varchar(50) NOT NULL,
  `result_naissance_nom` varchar(50) NOT NULL,
  `result_naissance_filtre` varchar(50) NOT NULL,
  `result_epreuve_nom` varchar(100) NOT NULL,
  `result_filtre_epreuve_nom` varchar(50) NOT NULL,
  `result_perf` varchar(50) DEFAULT NULL,
  `result_perf_2` time NOT NULL,
  `result_perf_3` varchar(50) NOT NULL,
  `result_perf_4` varchar(50) NOT NULL,
  `result_sex` varchar(50) NOT NULL,
  `result_perf_commentaire` varchar(50) NOT NULL,
  `result_club_nom` varchar(100) NOT NULL,
  `result_club_region` varchar(50) NOT NULL,
  `result_club_departement` varchar(50) NOT NULL,
  `result_cat` varchar(50) NOT NULL,
  `result_personal_reccord` varchar(50) NOT NULL,
  `result_date_perf` varchar(50) NOT NULL,
  `users_nationality` varchar(50) NOT NULL,
  `result_ville_nom` varchar(50) NOT NULL,
  `result_date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`users_id` int(11) NOT NULL,
  `users_nom_complet` varchar(100) NOT NULL,
  `users_nom` varchar(50) NOT NULL,
  `users_prenom` varchar(50) NOT NULL,
  `users_sex` varchar(50) NOT NULL,
  `users_naissance` int(100) NOT NULL,
  `users_nationality` varchar(50) NOT NULL,
  `users_datte_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE IF NOT EXISTS `villes` (
`id_villes` int(11) NOT NULL,
  `nom_villes` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_villes` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `club`
--
ALTER TABLE `club`
 ADD PRIMARY KEY (`club_id`);

--
-- Index pour la table `epreuve`
--
ALTER TABLE `epreuve`
 ADD PRIMARY KEY (`id_epreuve`);

--
-- Index pour la table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`result_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`users_id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
 ADD PRIMARY KEY (`id_villes`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `epreuve`
--
ALTER TABLE `epreuve`
MODIFY `id_epreuve` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `result`
--
ALTER TABLE `result`
MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
MODIFY `id_villes` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
