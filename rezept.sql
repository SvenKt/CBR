-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 25. Sep 2014 um 12:45
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
(1, 1, 0, 0, 1, 0, 1, 0, 'Nudeln', '4630161702'),
(2, 0, 0, 0, 1, 0, 1, 0, 'Belegtes Brot', '3231398503'),
(3, 1, 1, 1, 0, 1, 0, 1, 'Hackbraten mit Gratin', '6223423877'),
(4, 1, 1, 1, 0, 1, 0, 0, 'Schnitzel mit Pommes', '1277851411'),
(5, 1, 1, 1, 1, 0, 1, 1, 'selbstgemachte Pizza', '345593444'),
(6, 1, 1, 1, 1, 1, 1, 1, 'vegetarische Lasagne', '32878005'),
(7, 1, 0, 1, 0, 1, 0, 0, 'Pizza', '8175276708'),
(8, 1, 0, 0, 0, 1, 0, 1, 'Döner', '1057919169'),
(9, 0, 0, 0, 1, 0, 1, 0, 'Käsebaguette', '10065748434'),
(10, 1, 0, 0, 1, 0, 1, 0, 'Ofenkartoffel', '294567423'),
(11, 1, 1, 1, 1, 1, 1, 0, 'Bratkartoffeln', '4915563719'),
(12, 1, 1, 1, 1, 1, 0, 0, 'Bratkartoffeln mit Speck', '10009068436'),
(13, 1, 0, 1, 0, 0, 1, 0, 'Nudelsuppe', '3225647903'),
(14, 0, 1, 0, 1, 0, 1, 0, 'gemischter Salat', '8008364024'),
(15, 1, 0, 1, 0, 1, 0, 0, 'Currywurst', '9070115198'),
(16, 1, 0, 1, 0, 1, 0, 0, 'gekochte Mettwurst auf Brot', '7944526634'),
(17, 1, 1, 1, 0, 1, 0, 1, 'Grünkohl mit Bregenwurst', '3338000079'),
(18, 1, 0, 1, 0, 1, 0, 1, 'Spaghetti Bolognese', '4584807544'),
(19, 0, 1, 0, 0, 0, 1, 1, 'Kandierter Apfel', '9375717941'),
(20, 1, 1, 0, 1, 0, 1, 1, 'pikante Krabbensuppe', '2588103836'),
(21, 1, 1, 1, 1, 1, 1, 1, 'frische gegrillte Forelle', '5474175409'),
(22, 1, 0, 1, 0, 0, 1, 1, 'Fischstäbchen', '11243029303'),
(23, 0, 1, 0, 1, 0, 1, 1, 'Garnelen mit Knoblauchdip', '14092884935'),
(24, 1, 1, 1, 1, 0, 1, 1, 'Risotto', '8015147727'),
(25, 1, 0, 0, 0, 0, 0, 0, 'Bockwurst mit Brötchen', '2690247730'),
(26, 1, 1, 1, 1, 1, 1, 0, 'Kartoffelsuppe', '4040361533'),
(27, 1, 1, 1, 0, 1, 1, 1, 'Kartoffelknödel', '8373809494'),
(28, 1, 1, 1, 0, 1, 1, 1, 'Germknödel', '15143159606'),
(29, 1, 0, 0, 1, 0, 1, 1, 'gegrillter Halloumikäse', '3986128995'),
(30, 1, 1, 0, 0, 1, 0, 0, 'saftiges Schweinenackensteak', '4957864756'),
(31, 1, 1, 0, 0, 0, 1, 1, 'gefüllte Teigtaschen mit Feta', '387152905'),
(32, 1, 0, 0, 0, 0, 1, 0, 'Milchreis mit Zimt und Zucker', '6231417676'),
(33, 1, 1, 1, 0, 1, 1, 1, 'Spätzle', '3321527700'),
(34, 1, 1, 1, 0, 1, 0, 1, 'Spare Ribs mit Honigmarinade', '5850255554'),
(35, 0, 1, 1, 0, 0, 1, 0, 'Schokokekse', '5471782652'),
(36, 1, 1, 1, 0, 1, 1, 0, 'American Pancakes', '5969393821'),
(37, 1, 1, 1, 0, 1, 0, 1, 'Erbseneintopf', '7353701816'),
(38, 1, 1, 0, 0, 1, 0, 1, 'Kross gebackene Ente', '14164407403'),
(39, 1, 1, 1, 0, 1, 0, 1, 'deftig belegte Langos', '4256771513'),
(40, 1, 1, 1, 1, 0, 1, 1, 'Kürbiscremesuppe', '2305936243'),
(41, 1, 1, 1, 0, 1, 1, 1, 'indisches Reiscurry', '4701521386'),
(42, 0, 1, 1, 1, 1, 1, 0, 'Meeresfrüchteplatte', '7976347081'),
(43, 1, 1, 1, 1, 1, 1, 1, 'spanische Paella', '12533718105'),
(44, 0, 1, 0, 0, 0, 0, 1, 'Datteln im Speckmantel', '12255513543'),
(45, 0, 0, 1, 1, 0, 1, 1, 'Gazpacho', '2824332804'),
(46, 1, 0, 0, 1, 0, 1, 1, 'Minestrone', '4309005328'),
(47, 1, 0, 0, 1, 0, 0, 0, 'leichte Hühnerbrühe', '8347114335'),
(48, 0, 0, 1, 1, 0, 1, 1, 'Couscous', '4429274459'),
(49, 1, 1, 0, 1, 1, 0, 0, 'gegrilltes Hähnchenfilet', '7520970416'),
(50, 1, 0, 0, 0, 1, 0, 0, 'Türkische Pizza mit Salat', '4029896104');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
