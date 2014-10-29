-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Okt 2014 um 10:45
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

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
  `beliebt` int(11) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Daten für Tabelle `rezept`
--

INSERT INTO `rezept` (`id`, `warm`, `zeit`, `personen`, `gesund`, `hunger`, `vegetarisch`, `kochen`, `ergebnis`, `flickr`, `beliebt`) VALUES
(1, 1, 0, 0, 1, 0, 1, 0, 'Nudeln', '4630161702', 0),
(2, 0, 0, 0, 1, 0, 1, 0, 'Belegtes Brot', '3231398503', 0),
(3, 1, 1, 1, 0, 1, 0, 1, 'Hackbraten mit Gratin', '6223423877', 0),
(4, 1, 1, 1, 0, 1, 0, 0, 'Schnitzel mit Pommes', '1277851411', 0),
(5, 1, 1, 1, 1, 0, 1, 1, 'selbstgemachte Pizza', '345593444', 0),
(6, 1, 1, 1, 1, 1, 1, 1, 'vegetarische Lasagne', '32878005', 0),
(7, 1, 0, 1, 0, 1, 0, 0, 'Pizza', '8175276708', 0),
(8, 1, 0, 0, 0, 1, 0, 1, 'Döner', '1057919169', 0),
(9, 0, 0, 0, 1, 0, 1, 0, 'Käsebaguette', '10065748434', 0),
(10, 1, 0, 0, 1, 0, 1, 0, 'Ofenkartoffel', '294567423', 0),
(11, 1, 1, 1, 1, 1, 1, 0, 'Bratkartoffeln', '4915563719', 0),
(12, 1, 1, 1, 1, 1, 0, 0, 'Bratkartoffeln mit Speck', '10009068436', 0),
(13, 1, 0, 1, 0, 0, 1, 0, 'Nudelsuppe', '3225647903', 0),
(14, 0, 1, 0, 1, 0, 1, 0, 'gemischter Salat', '8008364024', 0),
(15, 1, 0, 1, 0, 1, 0, 0, 'Currywurst', '9070115198', 0),
(16, 1, 0, 1, 0, 1, 0, 0, 'gekochte Mettwurst auf Brot', '7944526634', 0),
(17, 1, 1, 1, 0, 1, 0, 1, 'Grünkohl mit Bregenwurst', '3338000079', 0),
(18, 1, 0, 1, 0, 1, 0, 1, 'Spaghetti Bolognese', '4584807544', 0),
(19, 0, 1, 0, 0, 0, 1, 1, 'Kandierter Apfel', '9375717941', 0),
(20, 1, 1, 0, 1, 0, 1, 1, 'pikante Krabbensuppe', '2588103836', 0),
(21, 1, 1, 1, 1, 1, 1, 1, 'frische gegrillte Forelle', '5474175409', 0),
(22, 1, 0, 1, 0, 0, 1, 1, 'Fischstäbchen', '11243029303', 0),
(23, 0, 1, 0, 1, 0, 1, 1, 'Garnelen mit Knoblauchdip', '14092884935', 0),
(24, 1, 1, 1, 1, 0, 1, 1, 'Risotto', '8015147727', 0),
(25, 1, 0, 0, 0, 0, 0, 0, 'Bockwurst mit Brötchen', '2690247730', 0),
(26, 1, 1, 1, 1, 1, 1, 0, 'Kartoffelsuppe', '4040361533', 0),
(27, 1, 1, 1, 0, 1, 1, 1, 'Kartoffelknödel', '8373809494', 0),
(28, 1, 1, 1, 0, 1, 1, 1, 'Germknödel', '15143159606', 0),
(29, 1, 0, 0, 1, 0, 1, 1, 'gegrillter Halloumikäse', '3986128995', 0),
(30, 1, 1, 0, 0, 1, 0, 0, 'saftiges Schweinenackensteak', '4957864756', 0),
(31, 1, 1, 0, 0, 0, 1, 1, 'gefüllte Teigtaschen mit Feta', '387152905', 0),
(32, 1, 0, 0, 0, 0, 1, 0, 'Milchreis mit Zimt und Zucker', '6231417676', 0),
(33, 1, 1, 1, 0, 1, 1, 1, 'Spätzle', '3321527700', 0),
(34, 1, 1, 1, 0, 1, 0, 1, 'Spare Ribs mit Honigmarinade', '5850255554', 0),
(35, 0, 1, 1, 0, 0, 1, 0, 'Schokokekse', '5471782652', 0),
(36, 1, 1, 1, 0, 1, 1, 0, 'American Pancakes', '5969393821', 0),
(37, 1, 1, 1, 0, 1, 0, 1, 'Erbseneintopf', '7353701816', 0),
(38, 1, 1, 0, 0, 1, 0, 1, 'Kross gebackene Ente', '14164407403', 0),
(39, 1, 1, 1, 0, 1, 0, 1, 'deftig belegte Langos', '4256771513', 0),
(40, 1, 1, 1, 1, 0, 1, 1, 'Kürbiscremesuppe', '2305936243', 0),
(41, 1, 1, 1, 0, 1, 1, 1, 'indisches Reiscurry', '4701521386', 0),
(42, 0, 1, 1, 1, 1, 1, 0, 'Meeresfrüchteplatte', '7976347081', 0),
(43, 1, 1, 1, 1, 1, 1, 1, 'spanische Paella', '12533718105', 0),
(44, 0, 1, 0, 0, 0, 0, 1, 'Datteln im Speckmantel', '12255513543', 0),
(45, 0, 0, 1, 1, 0, 1, 1, 'Gazpacho', '2824332804', 0),
(46, 1, 0, 0, 1, 0, 1, 1, 'Minestrone', '4309005328', 0),
(47, 1, 0, 0, 1, 0, 0, 0, 'leichte Hühnerbrühe', '8347114335', 0),
(48, 0, 0, 1, 1, 0, 1, 1, 'Couscous', '4429274459', 0),
(49, 1, 1, 0, 1, 1, 0, 0, 'gegrilltes Hähnchenfilet', '7520970416', 0),
(50, 1, 0, 0, 0, 1, 0, 0, 'Türkische Pizza mit Salat', '4029896104', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezept`
--
ALTER TABLE `rezept`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezept`
--
ALTER TABLE `rezept`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
