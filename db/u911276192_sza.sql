
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 06:13 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u911276192_sza`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administratzailea`
--

CREATE TABLE IF NOT EXISTS `Administratzailea` (
  `Emaila` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Izena` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Pasahitza` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`Emaila`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Erabiltzailea`
--

CREATE TABLE IF NOT EXISTS `Erabiltzailea` (
  `Emaila` varchar(50) NOT NULL,
  `Izena` varchar(50) NOT NULL,
  `Pasahitza` varchar(50) NOT NULL,
  PRIMARY KEY (`Emaila`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Erabiltzailea`
--

INSERT INTO `Erabiltzailea` (`Emaila`, `Izena`, `Pasahitza`) VALUES
('iberriochoa001@ikasle.ehu.eus', 'Inaki Berriotxoa', '123456'),
('julenmg_12@hotmail.com', 'Julen Merino', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `Kamera`
--

CREATE TABLE IF NOT EXISTS `Kamera` (
  `IP` varchar(15) NOT NULL,
  `Emaila` varchar(50) NOT NULL,
  PRIMARY KEY (`IP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
