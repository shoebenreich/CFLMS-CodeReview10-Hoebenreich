-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jul 2020 um 16:22
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_sanja_hoebenreich_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_sanja_hoebenreich_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr10_sanja_hoebenreich_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `authors`
--

INSERT INTO `authors` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'Cruz', 'Howe'),
(2, 'Kelsey', 'Baxter'),
(3, 'Alan', 'Rosario'),
(4, 'Regan', 'Barker'),
(5, 'Joshua', 'Thomas'),
(6, 'Colorado', 'Wiggins'),
(7, 'Sonya', 'Ware'),
(8, 'Medge', 'Mcfarland'),
(9, 'Daryl', 'Justice'),
(10, 'Reece', 'Reynolds');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `userName` varchar(25) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN` char(13) DEFAULT NULL,
  `mediatype` enum('Book','CD','DVD') DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `image`, `ISBN`, `mediatype`, `title`, `author_id`, `description`, `publisher_id`, `date`, `status`) VALUES
(1, 'https://assets.thalia.media/img/artikel/348e13872f749933d1f2d812ba734408dc02ee8d-00-00.jpeg', '978-3-9817016', 'Book', 'Nur Gisela sang schöner', 9, 'Familie Jupp Backes ermittelt', 2, '2018-04-28', 'available'),
(2, 'https://assets.thalia.media/img/artikel/406fa3cb8232abf23db49a9ad7f77635b0942cc9-00-00.jpeg', '978-3-499-000', 'Book', '42 Grad', 3, 'Lorem ipsum', 2, '2020-06-30', 'reserved'),
(3, 'https://assets.thalia.media/img/artikel/227c91d49f99ac8d0c0f90a7baa09b5e8d9e19f5-00-00.jpeg', '978-3-423-218', 'Book', 'Der Ballhausmörder', 4, 'Who cares?', 2, '2020-02-21', 'available'),
(4, 'https://assets.thalia.media/img/artikel/a3a91cb641dab38996726d4d4305cecd5b0164ea-00-00.jpeg', '978-3-426-521', 'Book', 'Totenliste', 6, 'I stopped trying a long time ago...', 5, '2018-09-03', 'reserved'),
(5, 'https://assets.thalia.media/img/cms/b5b380fdbd63dca0d523485136c933d267052b48.png', '123456', 'DVD', 'Sonic the Hedgehog', 6, 'Sonic (gesprochen von Julien Bam) ist mit seinen 15 Jahren ein pubertierendes Powerpaket, ohne sich dessen selbst schon wirklich bewusst zu sein. Zu seiner eigenen Sicherheit soll er sich auf dem Planeten Erde verstecken.', 4, '2020-03-16', 'available'),
(6, 'https://assets.thalia.media/img/artikel/cce3959c7560baecc57183af0798d291ce047d62-00-00.jpeg', '5053083204372', 'DVD', 'Die fantastische Reise des Dr. Dolittle', 9, '\r\nDie fantastische Reise des Dr. Dolittle\r\nAntonio Banderas, Robert Downey jr., Marion Cotillard, Ralph Fiennes, Rami Malek\r\n\r\n(4)\r\n Trailer\r\nDVD\r\n€ 12,09\r\nBlu-ray\r\n€ 14,39\r\nBlu-ray 4K\r\n€ 28,99\r\nEin episches Abenteuer', 8, '2019-12-17', 'available'),
(7, 'https://assets.thalia.media/img/artikel/ea838b2215966ec10ae85b4a30d9500c0c4174ac-00-00.jpeg', '8717418564377', 'DVD', 'Star Wars: Der Aufstieg Skywalkers', 4, 'Lucasfilm Präsidentin Kathleen Kennedy und Regisseur, Autor', 1, '2019-10-16', 'reserved'),
(8, 'https://assets.thalia.media/img/artikel/bd2ac7b8ae6917d51a7f48650388059aba520e16-00-00.jpeg', '0600753917015', 'CD', 'Toggo Music 55', 8, 'Hier kommen die neuesten Hits für die Kleinen!', 1, '2020-07-03', 'available'),
(9, 'https://assets.thalia.media/img/artikel/381d7a3260dd666d1da110e42c80d7d705170d14-00-00.jpeg', '0600753909942', 'CD', 'Bravo Hits Vol. 109', 6, 'CVCyxvvxvdvcjmf njmrdvb mdnfvdf', 4, '2020-07-26', 'reserved'),
(10, 'https://assets.thalia.media/img/artikel/45c0a39d0da029f026fdb33e5284184ffb61660d-00-00.jpeg', '0602508800474', 'CD', 'Nico Santos\r\n', 1, 'Nico Santos ist ein vielfältiger, versatiler Singer- Songwriter, der Musik nicht nur macht, sondern lebt. ', 8, '2019-11-05', 'available');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `size` enum('big','medium','small') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `name`, `address`, `size`) VALUES
(1, 'Sociis Natoque Institute', 'P.O. Box 541, 1043 Id Ave', 'big'),
(2, 'Maecenas Associates', 'Ap #170-2192 Arcu. Ave', 'medium'),
(3, 'Gravida Aliquam Tincidunt Ltd', 'Ap #623-2912 Dolor. St.', 'small'),
(4, 'Nibh Enim Gravida LLP', 'Ap #716-7975 Gravida Rd.', 'big'),
(5, 'Orci Tincidunt LLP', '855-1313 Neque. Rd.', 'small'),
(6, 'Massa Rutrum Industries', 'P.O. Box 665, 5068 Velit. Rd.', 'small'),
(7, 'Et Tristique LLC', 'P.O. Box 875, 5422 Quisque St.', 'medium'),
(8, 'Scelerisque Sed Ltd', '1842 Fusce Ave', 'small'),
(9, 'Sagittis Semper Corp.', 'P.O. Box 957, 7194 Justo. Avenue', 'big'),
(10, 'Risus At Institute', 'Ap #619-8293 Eu St.', 'medium');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indizes für die Tabelle `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indizes für die Tabelle `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
