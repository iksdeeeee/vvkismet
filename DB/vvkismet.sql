-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 18 mei 2022 om 00:20
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `nieuws`
--

INSERT INTO `nieuws` (`id`, `bericht`, `datum`) VALUES
(24, 'test 555dsds', '2022-05-16 14:15:37'),
(23, 'test', '2022-05-12 00:47:30');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `spelers`
--

INSERT INTO `spelers` (`id`, `spelernaam`, `rugnummer`, `teamid`) VALUES
(1, 'Kees van der spek', '32', 'Team E'),
(2, 'Hendrik overmaat', '3', 'Team E'),
(3, 'sdsd', '34', 'Team D'),
(5, 'dsds', '23', 'Team A'),
(6, 'Kees henk', '27', 'Team D'),
(7, 'dsdsds', '22', 'Team E');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teammsg`
--

DROP TABLE IF EXISTS `teammsg`;
CREATE TABLE IF NOT EXISTS `teammsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamID` enum('A','B','C','D','E') NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `teammsg`
--

INSERT INTO `teammsg` (`id`, `teamID`, `message`, `date`) VALUES
(3, 'E', 'eweqweqweqweq', '2022-05-16 12:00:08'),
(4, 'E', 'sdsd', '2022-05-16 13:27:40'),
(5, 'E', 'dfdsfsd', '2022-05-16 13:45:18');

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
(1, 'Welkom op V.V. Kismet, kijk verder op onze website en hopelijk vindt u alle informatie die u nodig heeft!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
