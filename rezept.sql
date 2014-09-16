-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Sep 2014 um 10:20
-- Server Version: 5.6.16
-- PHP-Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `speisen`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezept`
--

CREATE TABLE IF NOT EXISTS `rezept` (
  `id` int(11) NOT NULL,
  `warm` int(11) DEFAULT NULL,
  `zeit` int(11) DEFAULT NULL,
  `personen` int(11) DEFAULT NULL,
  `gesund` int(11) DEFAULT NULL,
  `hunger` int(11) DEFAULT NULL,
  `vegetarisch` int(11) DEFAULT NULL,
  `kochen` int(11) DEFAULT NULL,
  `ergebnis` varchar(40) DEFAULT NULL,
  `flickr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rezept`
--

INSERT INTO `rezept` (`id`, `warm`, `zeit`, `personen`, `gesund`, `hunger`, `vegetarisch`, `kochen`, `ergebnis`, `flickr`) VALUES
(1, 1, 0, 0, 1, 0, 1, 0, 'Nudeln', NULL),
(2, 0, 0, 0, 1, 0, 1, 0, 'Belegtes Brot', NULL),
(3, 1, 1, 1, 0, 1, 0, 1, 'Hackbraten mit Gratin', NULL),
(4, 1, 1, 1, 0, 1, 0, 0, 'Schnitzel mit Pommes', NULL),
(5, 1, 1, 1, 1, 0, 1, 1, 'Pizza', NULL),
(6, 1, 1, 1, 1, 1, 1, 1, 'vegetarische Lasagne', NULL),
(7, 1, 0, 1, 0, 1, 0, 0, 'Pizza', NULL),
(8, 1, 0, 0, 0, 1, 0, 1, 'Döner', NULL),
(9, 0, 0, 0, 1, 0, 1, 0, 'Käsebaguette', NULL),
(10, 1, 0, 0, 1, 0, 1, 0, 'Ofenkartoffel', NULL),
(11, 1, 1, 1, 1, 1, 1, 0, 'Bratkartoffeln', NULL),
(12, 1, 1, 1, 1, 1, 0, 0, 'Bratkartoffeln mit Speck', NULL),
(13, 1, 0, 1, 0, 0, 1, 0, 'Nudelsuppe', NULL),
(14, 0, 1, 0, 1, 0, 1, 0, 'gemischter Salat', NULL),
(15, 1, 0, 1, 0, 1, 0, 0, 'Currywurst mit Pommes', NULL),
(16, 1, 0, 1, 0, 1, 0, 0, 'gekochte Mettwurst auf Brot', NULL),
(17, 1, 1, 1, 0, 1, 0, 1, 'Grünkohl mit Bregenwurst', NULL),
(18, 1, 0, 1, 0, 1, 0, 1, 'Spaghetti Bolognese', NULL),
(19, 0, 1, 0, 0, 0, 1, 1, 'Kandierter Apfel', NULL),
(20, 1, 1, 0, 1, 0, 1, 1, 'pikante Krabbensuppe', NULL),
(21, 1, 1, 1, 1, 1, 1, 1, 'frische gegrillte Forelle', NULL),
(22, 1, 0, 1, 0, 0, 1, 1, 'Fischstäbchen', NULL),
(23, 0, 1, 0, 1, 0, 1, 1, 'Garnelen mit Knoblauchdip', NULL),
(24, 1, 1, 1, 1, 0, 1, 1, 'Risotto', NULL),
(25, 1, 0, 0, 0, 0, 0, 0, 'Bockwurst mit Brötchen', '2690247730'),
(26, 1, 1, 1, 1, 1, 1, 0, 'Kartoffelsuppe', NULL),
(27, 1, 1, 1, 0, 1, 1, 1, 'Kartoffelknödel', NULL),
(28, 1, 1, 1, 0, 1, 1, 1, 'Germknödel', NULL),
(29, 1, 0, 0, 1, 0, 1, 1, 'gegrillter Halloumikäse', NULL),
(30, 1, 1, 0, 0, 1, 0, 0, 'saftiges Schweinenackensteak', NULL),
(31, 1, 1, 0, 0, 0, 1, 1, 'gefüllte Teigtaschen mit Feta', NULL),
(32, 1, 0, 0, 0, 0, 1, 0, 'Milchreis mit Zimt und Zucker', NULL),
(33, 1, 1, 1, 0, 1, 1, 1, 'Spätzle', NULL),
(34, 1, 1, 1, 0, 1, 0, 1, 'Spare Ribs mit Honigmarinade', NULL),
(35, 0, 1, 1, 0, 0, 1, 0, 'Schokokekse', NULL),
(36, 1, 1, 1, 0, 1, 1, 0, 'American Pancakes', NULL),
(37, 1, 1, 1, 0, 1, 0, 1, 'Erbseneintopf', NULL),
(38, 1, 1, 0, 0, 1, 0, 1, 'Kross gebackene Ente', NULL),
(39, 1, 1, 1, 0, 1, 0, 1, 'deftig belegte Langos', NULL),
(40, 1, 1, 1, 1, 0, 1, 1, 'Kürbiscremesuppe', NULL),
(41, 1, 1, 1, 0, 1, 1, 1, 'indisches Reiscurry', NULL),
(42, 0, 1, 1, 1, 1, 1, 0, 'Meeresfrüchteplatte', NULL),
(43, 1, 1, 1, 1, 1, 1, 1, 'spanische Paella', NULL),
(44, 0, 1, 0, 0, 0, 0, 1, 'Datteln im Speckmantel', NULL),
(45, 0, 0, 1, 1, 0, 1, 1, 'Gazpacho', NULL),
(46, 1, 0, 0, 1, 0, 1, 1, 'Minestrone', NULL),
(47, 1, 0, 0, 1, 0, 0, 0, 'leichte Hühnerbrühe', NULL),
(48, 0, 0, 1, 1, 0, 1, 1, 'Couscous', NULL),
(49, 1, 1, 0, 1, 1, 0, 0, 'gegrilltes Hähnchenfilet', NULL),
(50, 1, 0, 0, 0, 1, 0, 0, 'Türkische Pizza mit Salat', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
