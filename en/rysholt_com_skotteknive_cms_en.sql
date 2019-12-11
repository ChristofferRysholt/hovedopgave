-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: rysholt.com.mysql.service.one.com:3306
-- Genereringstid: 11. 12 2019 kl. 08:36:19
-- Serverversion: 10.3.17-MariaDB-1:10.3.17+maria~bionic
-- PHP-version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rysholt_com_skotteknive_cms_en`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `articles`
--

CREATE TABLE `articles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  `imageExtension` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `articles`
--

INSERT INTO `articles` (`id`, `publicationDate`, `title`, `summary`, `content`, `imageExtension`) VALUES
(1, '2019-11-06', 'Folding knife', 'Of electric knot from Scotland', 'By this folding knife I have made everything except the small sheds. The knife came about when I was on a course in producing the blade itself.\r\n\r\nThe shaft is from a piece of electric knot that I have brought with me from a visit to the Scottish Highlands.\r\n\r\nAn incredible precision work that took place over a weekend and gave a great result.', '.jpg'),
(5, '2033-02-01', 'Oak Floor Knife', 'Blade by Claus Bernhardt', '“The knife shown is made from one knife blade by the Danish blacksmith Claus Bernhardt.\r\n\r\nHe has taken an old file and forged it into the finest knife blade. The shaft is out of an old floorboard from Løvenholm Estate and is a ca. 4-600 year old piece of wood.\r\n\r\nThe lines from the blade\'s pattern are caught and pass through the tree, which makes this knife so special to look at ”.\r\n- Stuart Harvey', '.jpg'),
(6, '2022-11-10', 'Knife making with Dennis', 'Blade with spiders', '\"For several years I have wanted to make a knife for myself with Swede Matias Styrefors, who makes the most amazing pattern forged blades.\r\n\r\nI bought a blade and immediately my best friend Dennis was envious.\r\n\r\nWe hold knife weekend together, which we enjoy a lot. I ended up having to go out and invest in two blades that were almost identical and it should be spiders, we agreed.\r\n\r\nThe two expensive but nice blades were bought, and then we started on Friday evening at. 23:30. When we got up on Sunday morning, we were only missing the leather sheaths and we were done by 14:00.\r\n\r\nThe shaft is made in black ebony and with the finest fossil whale bone. \"\r\n- Stuart Harvey', '.jpg'),
(13, '2002-02-19', 'Poppel Knife', 'Of poplar knot and buffalo horn', 'The materials in this knife are from a stabilized poplar knot and combined with water buffalo horns.\r\n\r\nMogens Loft Svenden\'s exquisite Damascened steel blade gives the knife its very own personality.\r\n\r\nThe leather sheath is colored with water-based colors, which is unconventional, but gives this nice deep and warm glow.\r\n\r\nThe Scottish thistle (logo in the knife) is the national flower of Scotland and has a special meaning to me.', '.jpg'),
(16, '2032-12-12', 'Knife of mammoth and oak knot', 'Oak knot from Scotland', '\"Last winter I had a visit from my really good friends, Lars & Tove. Lars and I make knives and take a course together to become wiser.\r\n\r\nWhen they were here, Lars said I should start using the good and neat materials I have. Hiding it can\'t help, he said.\r\n\r\nLars was just 70 years old and I was invited to his party. Of course, it was a knife I wanted to make for him and of the finest materials I have.\r\n\r\nFor years I have been hiding on a piece of oak knot that I had brought home from Scotland. For the tree I found a piece of mammoth tusk that is about 10 thousand years old and it fit perfectly with the knife I wanted to make for Lars. ”\r\n- Stuart Harvey', '.jpg'),
(26, '2002-02-15', 'Whiskey Knife', 'From Auchantoshan Destilery', 'The whiskey knife is a very special knife made from a whiskey barrel from Auchantoshan Destilery\r\nThe knife blade is forged by Steen Nielsen.\r\n\r\nTotal length = 21.5 cm\r\nShank = 12.5 cm\r\nThe blade = 9 cm\r\n\r\nThe knife sheath is made of 2.2-2.4mm hard pressed leather and is colored in brown with waterstain water based colors which gives a nice depth in the chestnut colors.\r\nPrice: 1900 DKK', '.jpg');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
