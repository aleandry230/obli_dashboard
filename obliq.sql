-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Mar 24, 2022 alle 21:42
-- Versione del server: 5.7.36
-- Versione PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obliq`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `lista_scarpe`
--

DROP TABLE IF EXISTS `lista_scarpe`;
CREATE TABLE IF NOT EXISTS `lista_scarpe` (
  `id` int(11) NOT NULL,
  `shoes` text NOT NULL,
  `colour` text NOT NULL,
  `size` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `lista_scarpe`
--

INSERT INTO `lista_scarpe` (`id`, `shoes`, `colour`, `size`, `amount`) VALUES
(1, 'Scarpa1', 'Nero', '38', '2'),
(2, 'Scarpa2', 'Nero', '42', '1'),
(3, 'Scarpa3', 'Nero', '40', '5'),
(4, 'Scarpa4', 'Nero', '35', '7'),
(5, 'Scarpa5', 'Nero', '37', '2'),
(6, 'Scarpa6', 'Nero', '40', '4'),
(7, 'Scarpa7', 'Nero', '47', '10'),
(8, 'Scarpa8', 'Nero', '38', '7'),
(9, 'Scarpa9', 'Nero', '46', '3'),
(10, 'Scarpa22', '1', '45', '5');

-- --------------------------------------------------------

--
-- Struttura della tabella `sommario`
--

DROP TABLE IF EXISTS `sommario`;
CREATE TABLE IF NOT EXISTS `sommario` (
  `id` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
