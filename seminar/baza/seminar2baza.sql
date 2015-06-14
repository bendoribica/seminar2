-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 12:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seminar2baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `sobe`
--

CREATE TABLE IF NOT EXISTS `sobe` (
`id` int(11) NOT NULL,
  `kvart_sobe` varchar(70) NOT NULL,
  `opis_sobe` varchar(255) DEFAULT NULL,
  `adresa_sobe` varchar(70) NOT NULL,
  `cijena_sobe` varchar(70) NOT NULL,
  `naziv_slike` varchar(70) DEFAULT NULL,
  `telefon_sobe` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sobe`
--

INSERT INTO `sobe` (`id`, `kvart_sobe`, `opis_sobe`, `adresa_sobe`, `cijena_sobe`, `naziv_slike`, `telefon_sobe`) VALUES
(1, 'Sava', 'Vrlo mnogo dobra', 'Savski odvojak 14', '350kuna', 'soba1.jpg', '012825698'),
(2, 'Borongaj', 'Elitna soba', 'Borogajska cesta 147', '500kuna', 'soba2.jpg', '013658974'),
(5, 'Martinovka', 'Vrlo hladna soba', 'Dobraska 17', '200', 'soba3.jpg', '14528746');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `JMBAG` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `rola` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`JMBAG`, `user`, `rola`) VALUES
('0246035121', 'djug1', 'student'),
('admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sobe`
--
ALTER TABLE `sobe`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`JMBAG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sobe`
--
ALTER TABLE `sobe`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
