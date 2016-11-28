-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2016 a las 19:47:14
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kamera_aplikazioa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administratzailea`
--

CREATE TABLE IF NOT EXISTS `Administratzailea` (
  `Emaila` varchar(50) NOT NULL,
  `Izena` varchar(50) NOT NULL,
  `Pasahitza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Administratzailea`
--

INSERT INTO `Administratzailea` (`Emaila`, `Izena`, `Pasahitza`) VALUES
('julen12@hotmail.com', 'Julen', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Erabiltzailea`
--

CREATE TABLE IF NOT EXISTS `Erabiltzailea` (
  `Emaila` varchar(50) NOT NULL,
  `Izena` varchar(50) NOT NULL,
  `Pasahitza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Erabiltzailea`
--

INSERT INTO `Erabiltzailea` (`Emaila`, `Izena`, `Pasahitza`) VALUES
('iberriochoa001@ikasle.ehu.eus', 'Iñaki Berriotxoa', '123456'),
('julenmg_12@hotmail.com', 'Julen Merino', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Kamera`
--

CREATE TABLE IF NOT EXISTS `Kamera` (
  `IP` varchar(15) NOT NULL,
  `Emaila` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administratzailea`
--
ALTER TABLE `Administratzailea`
  ADD PRIMARY KEY (`Emaila`);

--
-- Indices de la tabla `Erabiltzailea`
--
ALTER TABLE `Erabiltzailea`
  ADD PRIMARY KEY (`Emaila`);

--
-- Indices de la tabla `Kamera`
--
ALTER TABLE `Kamera`
  ADD PRIMARY KEY (`IP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
