-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 17 Juin 2019 à 12:41
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `img_rad`
--

-- --------------------------------------------------------

--
-- Structure de la table `radio`
--

CREATE TABLE IF NOT EXISTS `radio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `med` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `dat` date NOT NULL,
  `traiter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Contenu de la table `radio`
--

INSERT INTO `radio` (`id`, `nom`, `prenom`, `med`, `src`, `dat`, `traiter`) VALUES
(1, 'zerarka', 'ahmed', 'medecin 01', 'images/1.jpg', '2019-06-11', 2),
(2, 'kadour ', 'keae', 'medecin 02', 'images/2.jpg', '2019-06-11', 2),
(3, 'malade004', 'maladi', 'medecin04', 'images/3.jpg', '2019-06-18', 2),
(4, 'said', 'benfliss', 'lllll', 'images/4.jpg', '2019-06-17', 2),
(5, 'jjdjsdj', 'sdjsdj', 'jdsdj', 'images/5.jpg', '2019-06-10', 2),
(6, 'salah', 'ougrourte', 'kabache', 'images/6.jpg', '2019-06-10', 2),
(7, 'llll', 'kkkkk', 'kkzkek', 'images/7.jpg', '2019-06-10', 2),
(8, 'ff', 'jdszd', 'jdd', 'images/8.jpg', '2019-06-11', 2),
(9, 'fsfk', 'jfdf', 'jfdkfs', 'images/9.jpg', '2019-06-11', 2),
(10, 'dflsfdsdfsdf', 'fdfsfs', 'fdsfsf', 'images/10.jpg', '2019-06-11', 2),
(11, 'sdfsdf', 'fdf', 'fdf', 'images/11.jpg', '2019-06-11', 2),
(12, 'sdqsd', 'qsd', 'dqsd', 'images/12.jpg', '2019-06-11', 2),
(13, 'sdqsd', 'qsd', 'dqsd', 'images/13.jpg', '2019-06-11', 2),
(14, 'fsfd', 'sdf', 'fsdf', 'images/14.jpg', '2019-06-11', 1),
(15, 'DAHOU', 'OMAR', 'BACHIR', 'images/15.jpg', '2019-06-11', 2),
(16, 'fdsdf', 'sdfsdf', 'sdf', 'images/16.jpg', '2019-06-11', 2),
(17, 'dqsdqsd', 'qsdqsd', 'qsdqsd', 'images/17.jpg', '2019-06-11', 2),
(18, 'jjjj', 'fgfgf', 'rf', 'images/18.jpg', '2019-06-12', 2),
(19, 'gfdgdf', 'gdgdfg', 'gdfgfd', 'images/19.JPEG', '2019-06-12', 2),
(20, 'malade', 'malade', 'medecine', 'images/20.JPEG', '2019-06-12', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
