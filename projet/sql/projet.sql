-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 06:56 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `projet`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `commande`
-- 

CREATE TABLE `commande` (
  `id_com` int(11) NOT NULL auto_increment,
  `id_art` int(11) NOT NULL,
  `id_client` varchar(255) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `cdp` int(11) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `liv` int(11) NOT NULL,
  PRIMARY KEY  (`id_com`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `commande`
-- 

INSERT INTO `commande` (`id_com`, `id_art`, `id_client`, `adr`, `cdp`, `num_tel`, `liv`) VALUES 
(1, 12, 'yesser', 'gfds', 3083, 56121213, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `compte`
-- 

CREATE TABLE `compte` (
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `adr` varchar(255) NOT NULL,
  PRIMARY KEY  (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `compte`
-- 

INSERT INTO `compte` (`login`, `password`, `fonction`, `adr`) VALUES 
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('yesser', '827ccb0eea8a706c4c34a16891f84e7b', 'client', 'kadhiyesser@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `produits`
-- 

CREATE TABLE `produits` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `produits`
-- 

INSERT INTO `produits` (`id`, `nom`, `description`, `img`, `prix`) VALUES 
(12, 'fdsqf', 'dfqsfsq', 'souris.jpg', 90000),
(10, 'AUKEY Souris Gamer RGB', 'AUKEY Souris Gamer RGB, 600 à 5000 DPI avec 16,8 Millions de Couleur RGB, 6 Boutons programmables, Conception Ergonomique, Souris de Jeu de Haute précision pour PC et Ordinateurs Portables, Noir', 'sss.jpg', 60),
(11, 'gfsdqg', 'gfds', 'darty.jpg', 500);
