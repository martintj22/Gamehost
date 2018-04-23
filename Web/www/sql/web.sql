-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 23. 04 2018 kl. 15:01:33
-- Serverversion: 10.1.30-MariaDB
-- PHP-version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `frontpage`
--

CREATE TABLE `frontpage` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '0',
  `leftInfo` varchar(255) NOT NULL DEFAULT '0',
  `middleInfo` varchar(255) NOT NULL DEFAULT '0',
  `rightInfo` varchar(255) NOT NULL DEFAULT '0',
  `leftImagePath` varchar(255) NOT NULL DEFAULT '0',
  `centerImagePath` varchar(255) NOT NULL DEFAULT '0',
  `rightImagePath` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `frontpage`
--

INSERT INTO `frontpage` (`id`, `title`, `leftInfo`, `middleInfo`, `rightInfo`, `leftImagePath`, `centerImagePath`, `rightImagePath`) VALUES
(1, 'NoobNice Serverhosting ftw', 'this is left', 'this is middle', 'this is right', 'left.jpg', 'middle.jpg', 'right.jpg');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userLevel` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lastLogin`, `products`, `firstName`, `lastName`, `email`, `userLevel`) VALUES
(8, 'fumlefinger', '5352cdceff967c6b0147dc23cc374bad03646ac55102b3952a6660b5761f8c752742567cd4f469d86f98d2108f4f4162861312de312ee50ed919c098074815be', '2018-04-23 10:37:05', 'none', 'Jannik', 'Hansen', 'jann2273@gmail.com', 2),
(9, 'martintj22', '37527265610115321c355dd88e111819818c2ffe0e94b4bcead032644385efefae57e699404cc6a44832a591960f633b2592101020a18e981ccd776efcde479e', '2018-04-23 12:21:37', 'none', 'Martin', 'JÃ¸rgensen', 'satoz.game@gmail.com', 2);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `frontpage`
--
ALTER TABLE `frontpage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `frontpage`
--
ALTER TABLE `frontpage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
