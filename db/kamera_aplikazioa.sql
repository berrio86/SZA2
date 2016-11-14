-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2016 at 10:32 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamera_aplikazioa`
--

-- --------------------------------------------------------

--
-- Table structure for table `Erabiltzailea`
--

CREATE TABLE `Erabiltzailea` (
  `Emaila` varchar(50) NOT NULL,
  `Izena` varchar(50) NOT NULL,
  `Pasahitza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Kamera`
--

CREATE TABLE `Kamera` (
  `IP` varchar(15) NOT NULL,
  `Emaila` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Erabiltzailea`
--
ALTER TABLE `Erabiltzailea`
  ADD PRIMARY KEY (`Emaila`);

--
-- Indexes for table `Kamera`
--
ALTER TABLE `Kamera`
  ADD PRIMARY KEY (`IP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
