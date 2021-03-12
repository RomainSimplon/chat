-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 12, 2021 at 03:29 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minichat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ip` varchar(30) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pseudo`, `mail`, `password`, `ip`, `color`) VALUES
(33, 'patrickkK', 'patrickKKPPK.oui@outlook.fr', '123', '172.16.238.1', '#a2d34e'),
(34, 'jean', 'jean@outlook.fr', '12', '172.16.238.1', '#a774d3'),
(35, 'louis', 'loui.fr@orange.com', 'abcd', '172.16.238.1', '#dd56ae'),
(36, 'Romain', 'romain@gmail.fr', '1234', '172.16.238.1', '#76e09f'),
(37, 'oui', 'oui@oui.oui', 'oui', '172.16.238.1', '#7fbbe0'),
(38, 'non', 'non.non@sfr', 'non', '172.16.238.1', '#95f0f4');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `pseudo` int(11) NOT NULL,
  `message` varchar(30) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`idmessage`, `pseudo`, `message`, `created_at`) VALUES
(133, 33, 'oui', '2021-03-12 09:12:05'),
(134, 34, 'yo', '2021-03-12 09:14:06'),
(136, 35, 'yo', '2021-03-12 10:10:48'),
(142, 35, 'oui', '2021-03-12 11:11:03'),
(143, 36, 'salut', '2021-03-12 12:37:07'),
(144, 37, 'oui', '2021-03-12 12:38:17'),
(145, 38, 'non', '2021-03-12 12:39:09'),
(146, 36, 'ok', '2021-03-12 12:40:09'),
(147, 36, 'oui', '2021-03-12 14:25:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`pseudo`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
