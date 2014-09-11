-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Aug 2014 um 14:06
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `se_projekt_cbr`
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
  `ergebnis` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rezept`
--

INSERT INTO `rezept` (`id`, `warm`, `zeit`, `personen`, `gesund`, `hunger`, `vegetarisch`, `kochen`, `ergebnis`) VALUES
(1, 1, 0, 0, 1, 0, 1, 0, 'Nudeln'),
(2, 0, 0, 0, 1, 0, 1, 0, 'Belegtes Brot'),
(3, 1, 1, 1, 0, 1, 0, 1, 'Hackbraten mit Gratin'),
(4, 1, 1, 1, 0, 1, 0, 0, 'Schnitzel mit Pommes'),
(5, 1, 1, 1, 1, 0, 1, 1, 'Pizza'),
(6, 1, 1, 1, 1, 1, 1, 1, 'vegetarische Lasagne'),
(7, 1, 0, 1, 0, 1, 0, 0, 'Pizza'),
(8, 1, 0, 0, 0, 1, 0, 1, 'Döner'),
(9, 0, 0, 0, 1, 0, 1, 0, 'Käsebaguette'),
(10, 1, 0, 0, 1, 0, 1, 0, 'Ofenkartoffel'),
(11, 1, 1, 1, 1, 1, 1, 0, 'Bratkartoffeln'),
(12, 1, 1, 1, 1, 1, 0, 0, 'Bratkartoffeln mit Speck'),
(13, 1, 0, 1, 0, 0, 1, 0, 'Nudelsuppe'),
(14, 0, 1, 0, 1, 0, 1, 0, 'gemischter Salat'),
(15, 1, 0, 1, 0, 1, 0, 0, 'Currywurst mit Pommes'),
(16, 1, 0, 1, 0, 1, 0, 0, 'gekochte Mettwurst auf Brot'),
(17, 1, 1, 1, 0, 1, 0, 1, 'Grünkohl mit Bregenwurst'),
(18, 1, 0, 1, 0, 1, 0, 1, 'Spaghetti Bolognese'),
(19, 0, 1, 0, 0, 0, 1, 1, 'Kandierter Apfel'),
(20, 1, 1, 0, 1, 0, 1, 1, 'pikante Krabbensuppe'),
(21, 1, 1, 1, 1, 1, 1, 1, 'frische gegrillte Forelle'),
(22, 1, 0, 1, 0, 0, 1, 1, 'Fischstäbchen'),
(23, 0, 1, 0, 1, 0, 1, 1, 'Garnelen mit Knoblauchdip'),
(24, 1, 1, 1, 1, 0, 1, 1, 'Risotto'),
(25, 1, 0, 0, 0, 0, 0, 0, 'Bockwurst mit Brötchen'),
(26, 1, 1, 1, 1, 1, 1, 0, 'Kartoffelsuppe'),
(27, 1, 1, 1, 0, 1, 1, 1, 'Kartoffelknödel'),
(28, 1, 1, 1, 0, 1, 1, 1, 'Germknödel'),
(29, 1, 0, 0, 1, 0, 1, 1, 'gegrillter Halloumikäse'),
(30, 1, 1, 0, 0, 1, 0, 0, 'saftiges Schweinenackensteak'),
(31, 1, 1, 0, 0, 0, 1, 1, 'gefüllte Teigtaschen mit Feta'),
(32, 1, 0, 0, 0, 0, 1, 0, 'Milchreis mit Zimt und Zucker'),
(33, 1, 1, 1, 0, 1, 1, 1, 'Spätzle'),
(34, 1, 1, 1, 0, 1, 0, 1, 'Spare Ribs mit Honigmarinade'),
(35, 0, 1, 1, 0, 0, 1, 0, 'Schokokekse'),
(36, 1, 1, 1, 0, 1, 1, 0, 'American Pancakes'),
(37, 1, 1, 1, 0, 1, 0, 1, 'Erbseneintopf'),
(38, 1, 1, 0, 0, 1, 0, 1, 'Kross gebackene Ente'),
(39, 1, 1, 1, 0, 1, 0, 1, 'deftig belegte Langos'),
(40, 1, 1, 1, 1, 0, 1, 1, 'Kürbiscremesuppe'),
(41, 1, 1, 1, 0, 1, 1, 1, 'indisches Reiscurry'),
(42, 0, 1, 1, 1, 1, 1, 0, 'Meeresfrüchteplatte'),
(43, 1, 1, 1, 1, 1, 1, 1, 'spanische Paella'),
(44, 0, 1, 0, 0, 0, 0, 1, 'Datteln im Speckmantel'),
(45, 0, 0, 1, 1, 0, 1, 1, 'Gazpacho'),
(46, 1, 0, 0, 1, 0, 1, 1, 'Minestrone'),
(47, 1, 0, 0, 1, 0, 0, 0, 'leichte Hühnerbrühe'),
(48, 0, 0, 1, 1, 0, 1, 1, 'Couscous'),
(49, 1, 1, 0, 1, 1, 0, 0, 'gegrilltes Hähnchenfilet'),
(50, 1, 0, 0, 0, 1, 0, 0, 'Türkische Pizza mit Salat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezept`
--
ALTER TABLE `rezept`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
