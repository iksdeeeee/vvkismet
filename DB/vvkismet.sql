-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2022 at 12:21 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

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
-- Table structure for table `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `question` varchar(500) NOT NULL,
  `status` enum('Onbeantwoord','Beantwoord') CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT 'Onbeantwoord',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `question`, `status`) VALUES
(4, '', '', '', 'Onbeantwoord'),
(5, 'Alex van der Wel', 'alexvanderwelles@gmail.com', 'Hallo is de club open?', 'Onbeantwoord');

-- --------------------------------------------------------

--
-- Table structure for table `meldingen`
--

DROP TABLE IF EXISTS `meldingen`;
CREATE TABLE IF NOT EXISTS `meldingen` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `userid` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `images` varchar(1234) DEFAULT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meldingen`
--

INSERT INTO `meldingen` (`msgid`, `title`, `text`, `userid`, `datum`, `tijd`, `images`) VALUES
(36, 'Gesloten Clubhuis', 'Het clubhuis is tijdelijk gesloten voor bezoek', 8, '2022-01-27', '02:49:48', '');

-- --------------------------------------------------------

--
-- Table structure for table `nieuws`
--

DROP TABLE IF EXISTS `nieuws`;
CREATE TABLE IF NOT EXISTS `nieuws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bericht` varchar(300) NOT NULL,
  `datum` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nieuws`
--

INSERT INTO `nieuws` (`id`, `bericht`, `datum`) VALUES
(18, 'Testerino 74', '2022-03-03 10:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `teammsg`
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
-- Dumping data for table `teammsg`
--

INSERT INTO `teammsg` (`id`, `teamID`, `message`, `date`) VALUES
(1, 'e', 'Kan iemand de kleding van de vorige week wassen en meenemen?', '2022-03-18 01:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `naam`, `achternaam`, `email`, `funtie`, `schepperid`, `password`) VALUES
(1, 'Nuha', 'Camara', 'nuha.x.c@live.nl', 'ICT-Beheerder', 1, '$2y$10$9o.MUObxx798cnuGqYdLSO3Tgv2VXYVeNkxwOhJYBObmY43xN77Tm'),
(8, 'Administrator', 'admin', 'admin@gmail.com', 'ICT-Beheerder', 1, '$2y$10$m3hW1fsvMoDLHYUGAysbIOnIPsRR6S9Bw7h4UVk8dMpSzixqPKNju'),
(9, 'voorzitter', 'voor', 'voorzitter@gmail.com', 'Voorzitter', 8, '$2y$10$6a4Wgv/0m5h/rSWiJE1Ine0RMQCbO5cZVrAbpYnYPdAaODgG2Psy2');

-- --------------------------------------------------------

--
-- Table structure for table `voorzitter`
--

DROP TABLE IF EXISTS `voorzitter`;
CREATE TABLE IF NOT EXISTS `voorzitter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voorzitter`
--

INSERT INTO `voorzitter` (`id`, `message`) VALUES
(1, 'Hallo iedereen en Welkom op de website van V.V. Kismet. Kijk gerust rond en wees niet bang om een vraag te stellen.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
