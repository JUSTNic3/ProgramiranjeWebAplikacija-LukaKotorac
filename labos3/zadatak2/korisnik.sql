-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2026 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labos3`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `Prezime` varchar(32) NOT NULL,
  `spol` varchar(2) NOT NULL,
  `telefon` int(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `godine` int(11) NOT NULL,
  `hobi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `Prezime`, `spol`, `telefon`, `email`, `godine`, `hobi`) VALUES
(1, 'Juraj', 'Habdelić', 'M', 555, 'jhabdelic@tvz.hr', 34, 'planinarenje'),
(2, 'Marin', 'Držić', 'M', 555, 'mdrzic@tvz.hr', 22, 'planinarenje'),
(3, 'August', 'Harambašić', 'M', 555, 'aharambasic@tvz.hr', 40, 'planinarenje'),
(4, 'Miro', 'Gavran', 'M', 555, 'mgavran@tvz.hr', 15, 'planinarenje'),
(5, 'Monika', 'Herceg', 'Ž', 555, 'mherceg@tvz.hr', 10, 'planinarenje'),
(6, 'Bartol', 'Kašić', 'M', 555, 'bkasic@tvz.hr', 76, 'planinarenje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
