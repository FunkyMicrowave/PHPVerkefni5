-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 11:34 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHP_Verkefni5`
--

-- --------------------------------------------------------

--
-- Table structure for table `myndir`
--

CREATE TABLE `myndir` (
  `id` int(11) NOT NULL,
  `linkur` varchar(250) NOT NULL,
  `texti` varchar(200) DEFAULT NULL,
  `idEigandi` int(11) NOT NULL,
  `lysing` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myndir`
--

INSERT INTO `myndir` (`id`, `linkur`, `texti`, `idEigandi`, `lysing`) VALUES
(1, 'Ljon', 'Simbi', 1, 'Þetta er mynd af ljóni sem að hefur nafnið Simbi'),
(2, 'fluff', 'Fluffy', 2, 'Þessi mynd lýsir hungri kattarins: Fluffy'),
(3, 'Matti', 'Matthías', 2, 'Þetta er mynd af honum Matthíasi Birgissyni og pabba hans, honum Birgi Bragasyni'),
(4, 'SK', 'Skólahljómsveit Kópavogs', 2, 'Þessi mynd er úr myndatöku sem að C-sveit Skólahljómsveitar Kópavogs fór í fyrir 50 ára afmælistónleika sveitarinnar'),
(5, 'RedPanda', 'Rauð panda', 2, 'Þetta er mynd af rauðri pöndu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nafn` varchar(50) NOT NULL,
  `netfang` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nafn`, `netfang`) VALUES
(1, 'Siggi Sigurjóns', 'Siggi.Sigurjon@gmail.com'),
(2, 'Matthías Birgisson', 'Matthias.birgis@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myndir`
--
ALTER TABLE `myndir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEigandi` (`idEigandi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myndir`
--
ALTER TABLE `myndir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `myndir`
--
ALTER TABLE `myndir`
  ADD CONSTRAINT `myndir_ibfk_1` FOREIGN KEY (`idEigandi`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
