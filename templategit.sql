-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 05 Mai 2017 à 11:40
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `templategit`
--

-- --------------------------------------------------------

--
-- Structure de la table `actus`
--

CREATE TABLE `actus` (
  `idActu` tinyint(4) NOT NULL,
  `titreActu` text CHARACTER SET utf8 NOT NULL,
  `lienActu` text CHARACTER SET utf8 NOT NULL,
  `imageActu` text CHARACTER SET utf8 NOT NULL,
  `dateActu` date NOT NULL,
  `texteActu` mediumtext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `actus`
--

INSERT INTO `actus` (`idActu`, `titreActu`, `lienActu`, `imageActu`, `dateActu`, `texteActu`) VALUES
(1, 'Page test', 'page.html', 'logoNina.png', '2017-03-14', 'Lorem Elsass ipsum commodo Oberschaeffolsheim hoplageiss et placerat flammekueche kuglopf amet quam, tchao bissame hopla nüdle eleifend leverwurscht sit tellus Gal. ac sed réchime rucksack Richard Schirmeck ac mamsell Strasbourg id, Pfourtz ! mollis libero. nullam pellentesque Salu bissame semper ftomi!'),
(2, 'Actu 2', '#', 'logoNina.png', '2017-04-12', 'Huguette knack schissabibala, schiss bibbeleskaas wenn gottfertomi! la alles dû \r\n           picon bière was esch? de hopla choucroute bett Bonchour bisamme. Mitt kouglopf \r\n           bibbeleskaas dàchkàndelhüpser, gal fleishwurcht bis Strasbourg. Strasbourg gal! \r\n           machs gut dû bisous machs gut de machs gut. Du bibbeleskaas de chambon. Saucisse \r\n           Yeeuuu bier S gelt ! gross. Bür kouglopf et elsass, Boumbernikel Ponchour \r\n           knäckes rucksack yeuh. Net bett fraü hopla geiss voll  gal pfourtz! Chulia \r\n           Roberts, de choucroute la hopla geiss, schwanz Chulia Roberts gewurztraminer \r\n           bier salat.'),
(3, 'Actu 3', '#', 'logoNina.png', '2017-05-15', 'Lorem Elsass ipsum commodo Oberschaeffolsheim hoplageiss et placerat flammekueche kuglopf amet quam, tchao bissame hopla nüdle eleifend leverwurscht sit tellus Gal. ac sed réchime rucksack Richard Schirmeck ac mamsell Strasbourg id, Pfourtz ! mollis libero. nullam pellentesque Salu bissame semper ftomi!');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actus`
--
ALTER TABLE `actus`
  ADD PRIMARY KEY (`idActu`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actus`
--
ALTER TABLE `actus`
  MODIFY `idActu` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
