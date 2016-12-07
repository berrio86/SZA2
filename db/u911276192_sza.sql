
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2016 a las 22:38:10
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u911276192_sza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Erabiltzailea`
--

CREATE TABLE IF NOT EXISTS `Erabiltzailea` (
  `Email` varchar(30) NOT NULL,
  `Izena` varchar(30) NOT NULL,
  `Pasahitza` varchar(30) NOT NULL,
  `Mota` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Erabiltzailea`
--

INSERT INTO `Erabiltzailea` (`Email`, `Izena`, `Pasahitza`, `Mota`) VALUES
('iberriochoa001@ikasle.ehu.es', 'Inaki Berriotxoa Gabiria', '123456', 'Erabiltzailea'),
('julen_mg@hotmail.com', 'Julen Merino', '123456', 'Erabiltzailea'),
('webmaster@kamera.com', 'Web Master', '123456', 'Administratzailea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Kamera`
--

CREATE TABLE IF NOT EXISTS `Kamera` (
  `IP` varchar(15) NOT NULL,
  `Emaila` varchar(50) NOT NULL,
  PRIMARY KEY (`IP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
