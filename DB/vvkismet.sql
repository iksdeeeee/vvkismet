-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mrt 2022 om 00:35
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvkismet`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `question` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuws`
--

DROP TABLE IF EXISTS `nieuws`;
CREATE TABLE IF NOT EXISTS `nieuws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bericht` varchar(300) NOT NULL,
  `datum` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `nieuws`
--

INSERT INTO `nieuws` (`id`, `bericht`, `datum`) VALUES
(20, 'Test 2322', '2022-03-31 01:33:21');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `spelers`
--

DROP TABLE IF EXISTS `spelers`;
CREATE TABLE IF NOT EXISTS `spelers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spelernaam` varchar(250) NOT NULL,
  `rugnummer` varchar(100) NOT NULL,
  `teamid` enum('Team A','Team B','Team C','Team D','Team E') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teammsg`
--

DROP TABLE IF EXISTS `teammsg`;
CREATE TABLE IF NOT EXISTS `teammsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamID` enum('e','b') NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `teammsg`
--

INSERT INTO `teammsg` (`id`, `teamID`, `message`, `date`) VALUES
(1, 'e', 'Kan iemand de kleding van de vorige week wassen en meenemen?', '2022-03-18 01:01:20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(25) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `funtie` set('Trainer','Coach','Voorzitter','Secretaris','ICT-Beheerder') NOT NULL,
  `schepperid` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`userid`, `naam`, `achternaam`, `email`, `funtie`, `schepperid`, `password`) VALUES
(1, 'Nuha', 'Camara', 'nuha.x.c@live.nl', 'ICT-Beheerder', 1, '$2y$10$9o.MUObxx798cnuGqYdLSO3Tgv2VXYVeNkxwOhJYBObmY43xN77Tm'),
(8, 'Administrator', 'admin', 'admin@gmail.com', 'ICT-Beheerder', 1, '$2y$10$m3hW1fsvMoDLHYUGAysbIOnIPsRR6S9Bw7h4UVk8dMpSzixqPKNju'),
(9, 'voorzitter', 'voor', 'voorzitter@gmail.com', 'Voorzitter', 8, '$2y$10$6a4Wgv/0m5h/rSWiJE1Ine0RMQCbO5cZVrAbpYnYPdAaODgG2Psy2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `voorzitter`
--

DROP TABLE IF EXISTS `voorzitter`;
CREATE TABLE IF NOT EXISTS `voorzitter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `voorzitter`
--

INSERT INTO `voorzitter` (`id`, `message`) VALUES
(1, 'Hallo iedereen en Welkom op de website van V.V. Kismet.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
