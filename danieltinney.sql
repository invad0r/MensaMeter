-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 05. Mai 2013 um 04:24
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `danieltinney`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Daten für Tabelle `data`
--

INSERT INTO `data` (`id`, `text`) VALUES
(82, ''),
(83, ''),
(84, ''),
(85, 'yes');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `essen`
--

CREATE TABLE IF NOT EXISTS `essen` (
  `id` int(11) NOT NULL,
  `datum` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `kat_id` int NOT NULL,
  `mensa_id` int NOT NULL,
  `preis` float NOT NULL,
  `bewertung` int (10)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `essen`
--

INSERT INTO `essen` (`id`, `datum`, `name`,`kat_id`) VALUES
(1, 'Donnerstag, 28.02.2013', 'Kohlrabigemüse in Rahm  (14 ,20 ) , Kartoffelgratin  (1 ,2 ,3 ,5 ,16 ,20 ) , Mandelbroccoli  (21 ) , Paprika-Zwiebelgemüse',1),
(2, 'Donnerstag, 28.02.2013', 'Pasta "Pizzaiola" mit Mozzarellakäse  (4 ,20 ,22 )  hausgemachter Tomatensoße  (4 ,19 ) , Parmesan  (20 )  und grünen Tagliatelle  (14 ,19 )',2),
(3, 'Donnerstag, 28.02.2013', 'Indischer Spinat mit roten Linsen  (3 ,20 )  und mit Korianderreis',3),
(4, 'Donnerstag, 28.02.2013', 'Pasta "Martigiana" mit Speck und Tomaten  (2 ,3 ,22 ) , Parmesan  (20 )  und grünen Tagliatelle  (14 ,19 )',4),
(5, 'Donnerstag, 28.02.2013', 'Scharfe Mexikanische Paprikacremesuppe  (3 ,4 ,5 ,14 ,20 ,22 )',5),
(6, 'Donnerstag, 28.02.2013', 'Hähnchenbrustfilet mit Backpflaumen, Honig und Zimt  (16 ,18 ,19 ,20 ,22 ,23 ,24 )  und Reis',6),
(7, 'Dienstag, 26.02.2013', 'Karottengemüse natur, Weißkohl "Indisch"  (20 ) , Prinzessbohnen, Auberginen mit Balsamico  (3 )',7),
(8, 'Dienstag, 26.02.2013', 'Pasta  Legumi mit bunten Gemüse  (3 ,4 ,6 ,19 ,22 )  Farfalle  (14 ,19 )  und Parmesan  (20 )',8),
(9, 'Dienstag, 26.02.2013', 'Pasta "Nerone" mit Schweinefleisch und Gemüse  (19 ,20 ,22 )  Farfalle  (14 )  und Parmesan  (20 )',1),
(10, 'Dienstag, 26.02.2013', 'Kartoffeltasche mit Spinat Fetafüllung  (20 )  dazu ein Tomatensalat mit Basilikum  (22 )',2),
(11, 'Dienstag, 26.02.2013', 'Nürnberger Bratwürstchen  (19 )  mit Bayrisch Kraut  (3 ,5 )  und Kartoffelpüree  (3 ,20 )',3),
(12, 'Dienstag, 26.02.2013', 'Kartoffelsuppe  (2 ,3 ,5 ,22 )',4),
(13, 'Dienstag, 26.02.2013', 'Milchreis  (1 ,16 ,20 )  mit Beerenkompott  (1 ,9 )',5),
(14, 'Freitag, 01.03.2013', 'Vegetarische Linsensuppe mit Spinat  (3 ,5 ,20 ,22 )',6),
(15, 'Freitag, 01.03.2013', 'Paprikarahmgulasch  (4 ,14 ,20 ,22 ,23 )  mit Vollkorn Nudeln  (14 ,19 )',7),
(16, 'Freitag, 01.03.2013', 'Hamburger Pannfisch  (2 ,9 ,17 ,23 )  Lachsfilet und Seelachsfilet gebraten mit Senfsoße,  (9 ,14 ,19 ,20 ,23 ,24 )  Bratkartoffeln und Gewürzgurke',8),
(17, 'Freitag, 01.03.2013', 'Pasta in pikanter Gorgonzola-Sahne-Soße  (20 )  mit Kartoffel-Gnocchi  (14 ,19 ,20 )  und Parmesan  (20 )',1),
(18, 'Freitag, 01.03.2013', 'Bohnen-Tomatengemüse, Chinagemüse natur  (2 ,4 ,19 ) , Karottengemüse in Kräuterrahm  (14 ,20 ) , Blumenkohl gratiniert  (1 ,2 ,20 )',2),
(19, 'Montag, 11.03.2013', 'Milchreis  (20 )  mit Beerenkompott  (1 ,9 )',3),
(20, 'Montag, 11.03.2013', 'Blumenkohl-Broccolieintopf  (14 ,19 ,20 )',4),
(21, 'Montag, 11.03.2013', 'Putenschnitzel gebacken  (14 )  auf Ratatouillegemüse und Rosmarinkartoffeln',5),
(22, 'Montag, 11.03.2013', '2 Grünkern- Käsemedallions  (1 ,2 ,14 ,16 ,19 ,20 ,22 ,24 )  an gemischte Blattsalate mit Curry Joghurtdressing  (1 ,20 ,23 ) und einem Kräuterbrötchen  (14 ,21 )',6),
(23, 'Montag, 11.03.2013', 'Schweinenackensteak  (19 ,22 )  mit geschmorten Zwiebeln, Speckbohnen  (2 ,3 ,22 )  und Röstiecken  (19 ,22 ,24 )',7),
(24, 'Montag, 11.03.2013', 'Pasta "Tomaten-Gorgonzola-Soße"  (19 ,20 )  mit Farfalle  (14 ,19 )  und Parmesan  (20 )',8),
(25, 'Montag, 11.03.2013', 'Pasta "Carbonara" mit Speck, Parmesankäse  (2 ,3 ,16 ,20 ,22 )  und Farfalle-Nudeln  (14 ,19 )',1),
(26, 'Montag, 11.03.2013', 'Blumenkohl natur Karottengemüse in Kräuterrahm  (14 ,20 )  Prinzessbohnen Auberginen mit Balsamico Bianco  (3 )',2),
(27, 'Mittwoch, 13.03.2013', 'Karottencremesuppe mit Kerbel  (3 ,5 ,22 )',3),
(28, 'Mittwoch, 13.03.2013', 'Gnocchi meditteranno  (14 ,16 )  mit hausgemachter Tomatensoße  (4 )  und buntem Salat mit Italian Dressing  (22 )',4),
(29, 'Mittwoch, 13.03.2013', 'Pasta "Spinat" mit Spinat und Käse  (14 ,20 ,22 )  Tagliatelle  (14 ,16 ,19 )',5),
(30, 'Mittwoch, 13.03.2013', 'Kohlrabigemüse natur Porreegemüse in Rahm  (14 ,20 )  Ratatouillegemüse Kartoffeln Provencial',6),
(31, 'Mittwoch, 13.03.2013', 'Pizza Schinken-Champignon  (1 ,14 ,20 )',7),
(32, 'Freitag, 15.03.2013', 'Steckrübeneintopf  (3 ,5 ,20 ,22 )',8),
(33, 'Freitag, 15.03.2013', 'Rindfleischfrikadelle  (14 ,16 )  dazu Bayrischer Kartoffelsalat mit Gurken  (3 ,5 )  undSenf  (9 ,23 ,24 )',1),
(34, 'Freitag, 15.03.2013', 'Soja-Bolognese mit Gemüse  (1 ,4 ,19 ,22 )  Spaghetti  (14 ,19 )  und Karotten-Sellerie-Salat  (22 )',2),
(35, 'Freitag, 15.03.2013', 'Erbsen-Maisgemüse natur Karottengemüse natur Romanescoröschen natur Blattspinat natur mit Käse überbacken  (1 ,2 ,20 )',3),
(36, 'Freitag, 15.03.2013', 'Pizza Tomate-Mozzarella  (14 ,20 )',4),
(37, 'Freitag, 22.03.2013', 'Vegetarische Kartoffelsuppe  (3 ,5 ,20 ,22 )',5),
(38, 'Freitag, 22.03.2013', 'Szegediner Gulasch  (14 ,20 )  mit Fusilli  (14 )',6),
(39, 'Freitag, 22.03.2013', 'Omelette gratiniert mit Tomate und Käse  (1 ,2 ,8 ,14 ,16 ,19 ,20 )  Rahmspinat  (14 ,19 ,20 ,22 )  und Kartoffelpüree  (3 ,20 )',7),
(40, 'Freitag, 22.03.2013', 'Lachsfilet gebraten  (17 )  mit Senfsoße (9 ,14 ,23 ,24 ) , Broccoli  (14 ,19 ,20 ,23 ,24 )  und Dillkartoffeln',8),
(41, 'Freitag, 22.03.2013', 'Pasta "Pollo" mit Geflügelbrust in Tomatensoße  (4 ,22 )  mit Eliche  (14 ,19 )  und Parmesan  (20 )',1),
(42, 'Freitag, 22.03.2013', 'Blattspinat natur Champignon-Zwiebelgemüse natur  (3 ,14 ,20 )  Ratatouillegemüse Princeßbohnen natur',2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mensa`
--

CREATE TABLE IF NOT EXISTS `mensa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bewertung` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Daten für Tabelle `mensa`
--

INSERT INTO `mensa` (`id`, `name`, `bewertung`) VALUES
(1, 'Armgartstraße', 0),
(2, 'Bergedorf', 0),
(3, 'Berliner-Tor', 0),
(4, 'Botanischer-Garten', 0),
(5, 'Bucerius-Law-School', 0),
(6, 'Café Averhoffstraße', 0),
(7, 'Café CFEL', 0),
(8, 'Cafe-Jungiusstraße', 0),
(9, 'Cafe-Alexanderstraße', 0),
(10, 'Campus', 0),
(11, 'City-Nord', 0),
(12, 'Finkenau', 0),
(13, 'Geomatikum', 0),
(14, 'Harburg', 0),
(15, 'Philosophenturm', 0),
(16, 'Stellingen', 0),
(17, 'Studierendenhaus', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `role`) VALUES
(1, 'jesse', '7a9aeea24307965d769a471b3b7bc533', 'owner'),
(2, 'joe', '7a9aeea24307965d769a471b3b7bc533', 'default'),
(8, 'abc', 'ecb9050a065b07d3ecf28001d72e8177', 'default'),
(9, 'abcd', 'c6bf4242a6f4114f4ff2697cdfea32ca', 'default');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- -----------------------------------------------------------

-- Tabellenstruktur für Tabelle `kategorie`
--
CREATE TABLE IF NOT EXISTS `kategorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Daten für Tabelle `kategorie`
--
INSERT INTO `kategorie` (`id`, `name`) VALUES
(1, 'Aus dem Suppentopf und Süßes'),
(2, 'Gut und Günstig'),
(3, 'Beliebt und gerne gegessen'),
(4, 'Vegetarisch'),
(5, 'Campus Spezial'),
(6, 'Pasta-Bar'),
(7, 'Gemüse-Bar'),
(8, 'Aus dem Wok');


