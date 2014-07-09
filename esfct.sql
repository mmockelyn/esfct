-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Juillet 2014 à 18:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `esfct`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `idequipe` int(13) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `abreviation` varchar(20) NOT NULL,
  `password_equipe` varchar(255) NOT NULL,
  `public` int(1) NOT NULL,
  `site_web` varchar(255) NOT NULL,
  `irc_channel` varchar(255) NOT NULL,
  `irc_serveur` varchar(255) NOT NULL,
  `ipserveur` longtext NOT NULL,
  `pays` int(2) NOT NULL,
  `region` varchar(255) NOT NULL,
  `siege` varchar(255) NOT NULL,
  `desc_short` varchar(255) NOT NULL,
  `desc_long` longtext NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`idequipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `equipe_jeux`
--

CREATE TABLE IF NOT EXISTS `equipe_jeux` (
  `id_equipe_jeux` int(13) NOT NULL AUTO_INCREMENT,
  `idequipe` int(13) NOT NULL,
  `lol` int(1) NOT NULL,
  `csgo` int(1) NOT NULL,
  `shootmania` int(1) NOT NULL,
  `starcraft` int(1) NOT NULL,
  `titanfall` int(1) NOT NULL,
  PRIMARY KEY (`id_equipe_jeux`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `equipe_membre`
--

CREATE TABLE IF NOT EXISTS `equipe_membre` (
  `idequipe` int(13) NOT NULL,
  `idmembre` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `idmembre` int(13) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date_inscription` varchar(255) NOT NULL,
  `age` varchar(2) NOT NULL,
  `sexe` int(1) NOT NULL,
  `nationnalite` varchar(255) NOT NULL,
  `pays` int(2) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `employeur` varchar(255) NOT NULL,
  `commentaire` longtext NOT NULL,
  `level` varchar(255) NOT NULL,
  `trust` int(1) NOT NULL,
  `premium` int(1) NOT NULL,
  `irc_canal` varchar(255) NOT NULL,
  `irc_serveur` int(3) NOT NULL,
  `icq` varchar(255) NOT NULL,
  `msn` varchar(255) NOT NULL,
  `yahoo` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `desc_court` varchar(255) NOT NULL,
  `desc_long` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `password_membre` varchar(255) NOT NULL,
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `joueur_cpt_jeux`
--

CREATE TABLE IF NOT EXISTS `joueur_cpt_jeux` (
  `idmembre` int(13) NOT NULL,
  `idcptjeux` int(13) NOT NULL AUTO_INCREMENT,
  `lol` varchar(255) NOT NULL,
  `cs_go` varchar(255) NOT NULL,
  `hearthstone` varchar(255) NOT NULL,
  `fifa_ea` varchar(255) NOT NULL,
  `shootmania` varchar(255) NOT NULL,
  `starcraft` varchar(255) NOT NULL,
  `titanfall` varchar(255) NOT NULL,
  PRIMARY KEY (`idcptjeux`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `joueur_jeux`
--

CREATE TABLE IF NOT EXISTS `joueur_jeux` (
  `idjoueurjeux` int(13) NOT NULL AUTO_INCREMENT,
  `idmembre` int(13) NOT NULL,
  `lol` int(1) NOT NULL,
  `csgo` int(1) NOT NULL,
  `hearthstone` int(1) NOT NULL,
  `fifa_ea` int(1) NOT NULL,
  `shootmania` int(1) NOT NULL,
  `starcraft` int(1) NOT NULL,
  `titanfall` int(1) NOT NULL,
  PRIMARY KEY (`idjoueurjeux`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `news_admin`
--

CREATE TABLE IF NOT EXISTS `news_admin` (
  `idnewsadmin` int(13) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `desc_cours` varchar(255) NOT NULL,
  `desc_long` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`idnewsadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `news_admin`
--

INSERT INTO `news_admin` (`idnewsadmin`, `title`, `desc_cours`, `desc_long`, `date`) VALUES
(1, 'Nouvelle Instruction de Donn&eacute;e', 'Une Nouvelle Instruction sur les donn&eacute;es ont &eacute;t&eacute; implent&eacute; dans le dossier des administrateur de l''esfct.', 'test\r\ntest\r\ntest\r\ntest\r\ntest\r\ntest\r\ntest\r\ntest\r\ntest\r\ntest\r\n', '07/07/2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
