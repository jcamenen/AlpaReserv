-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 14 Mars 2014 à 09:26
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `alpareserv`
--
CREATE DATABASE IF NOT EXISTS `alpareserv` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alpareserv`;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `privacy` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `title`, `start`, `end`, `privacy`, `description`) VALUES
(1, 'Mariage Balloon', '2014-03-08 09:00:00', '2014-03-08 21:00:00', 1, 'M Balloon se marie dans la bonne humeur autour d''une boite de cassoulet'),
(2, 'Loto vache', '2014-03-12 19:00:00', '2014-03-12 22:00:00', 0, 'RDV à la salle des fêtes pour un super loto des familles'),
(3, 'Anniversaire Ada', '2014-03-06 11:00:00', '2014-03-06 13:00:00', 1, 'fnruiejkbgrkjdgbslkjgneimjkgnejrgnmkq'),
(4, 'Exposition pogs', '2014-03-15 08:00:00', '2014-03-15 18:00:00', 0, 'Les plus beaux pogs du monde seront exposés à la salle polyvalente. Une compétition y aura lieu en parallèle');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
