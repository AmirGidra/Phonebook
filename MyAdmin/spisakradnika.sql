-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 11:43 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spisakradnika`
--

-- --------------------------------------------------------

--
-- Table structure for table `radnici`
--

CREATE TABLE `radnici` (
  `ID` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rodjen` int(50) NOT NULL,
  `mjesto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pozicija` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `radnici`
--

INSERT INTO `radnici` (`ID`, `ime`, `prezime`, `rodjen`, `mjesto`, `pozicija`) VALUES
(1, 'Amir', 'Dajanović', 1983, 'Metkovć', 'Portir'),
(2, 'Vlado', 'Vladavić', 1977, 'Novi Sad', 'Zaštitar'),
(3, 'Tanja', 'Krstić', 1980, 'Beograd', 'Sekretarica'),
(4, 'Amar', 'Tabak', 1984, 'Sarajevo', 'Vozač'),
(5, 'Stevo', 'Ibrica', 1970, 'Sarajevo', 'Ekonomista'),
(6, 'Miho', 'Hrvat', 1966, 'Split', 'Komercijala'),
(7, 'Aida', 'Ibrica', 0, 'Sarajevo', 'Šefica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radnici`
--
ALTER TABLE `radnici`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radnici`
--
ALTER TABLE `radnici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
