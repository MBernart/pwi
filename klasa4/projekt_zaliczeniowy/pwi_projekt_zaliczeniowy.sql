-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 07:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwi_projekt_zaliczeniowy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` double(5,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `name`, `description`, `price`) VALUES
(1, 'Makowiec Japoński', 'Makowiec japoński - to ciasto z maku, bez mąki pszennej, z bakaliami oraz jabłkami. Polany polewą czekoladową i udekorowany płatkami migdałów i skórką pomarańczową.', 8.00),
(2, 'Makowa Panienka', 'Ciasto makowe z kremem budyniowym i dżemem', 10.00),
(3, 'Sernik Ananasek', 'Sernik Ananasek to pyszny i łatwy sernik z kremową masą kokosową z ananasami, z lekką bezą na wierzchu, wiórkami kokosowymi oraz ciastem kruchym.', 9.00),
(4, 'Sernik z rosą', 'Sernik na kruchym spodzie wykończony miękką bezową pianką, na której po upieczeniu tworzą się kropelki \"rosy\".', 7.00),
(5, 'Ciasto Rafaello', 'Cztery warstwy herbatników przełożone kremem budyniowym (z ugotowanego budyniu utartego z masłem), posypane wiórkami kokosowymi.', 11.00),
(6, 'Szarlotka z bitą śmietaną', 'Na biszkopcie, posypana płatkami migdałów lub wiórkami czekolady', 9.00);

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `small_price` double(5,2) UNSIGNED DEFAULT NULL,
  `large_price` double(5,2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `description`, `small_price`, `large_price`) VALUES
(1, 'Espresso <b> (40ml) </b>', 'Espresso to kawowy napar powstały w wyniku zaparzenia zmielonych ziaren kawy - esencja smaku zawarta w niewielkiej porcji aromatycznego naparu.', 7.00, 0.00),
(2, 'Americano', 'Americano to czarna kawa przygotowana na bazie pojedynczego lub podwójnego espresso i wrzątku.', 9.00, 12.00),
(3, 'Flat White', 'Kawa flat white jest bardziej intensywna w smaku od cappuccino i caffè latte, ponieważ składa się z podwójnej porcji espresso. Mleko spienione jest tak, by na powierzchni kawy utworzyła się cieniutka warstwa pianki, a cały napój był przyjemnie kremowy i mleczny.', 10.00, 15.00),
(4, 'Caffè Latte', 'Caffe latte to bardzo łagodna kawa z dużą ilością spienionego mleka.', 11.00, 16.00),
(5, 'Doppio Macchiato', 'Nie ma w tym wielkiej filozofii, doppio macchiato to po prostu espresso doppio plus odrobina pianki z mleka.', 10.00, NULL),
(6, 'Café Crema', 'Caffe Crema to przedłużone espresso. Caffe Crema ma bardziej wyraźny i mocny smak oraz przykryte jest pianką (crema).', 11.00, 16.00);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(256) NOT NULL,
  `alt` varchar(256) NOT NULL,
  `section_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `alt`, `section_name`) VALUES
(1, 'assets/slide1.jpg', 'slide1', 'slider'),
(2, 'assets/slide2.jpg', 'slide2', 'slider'),
(3, 'assets/slide3.jpg', 'slide3', 'slider'),
(4, 'assets/slide4.jpg', 'slide4', 'slider'),
(5, 'assets/slide5.jpg', 'slide5', 'slider'),
(6, 'assets/slide6.jpg', 'slide6', 'slider'),
(7, 'assets/slide7.jpg', 'slide7', 'slider'),
(8, 'assets/kawa-i-ciasta.jpg', 'Kawa i ciasta', 'o-nas');

-- --------------------------------------------------------

--
-- Table structure for table `text_fields`
--

CREATE TABLE `text_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `section` varchar(64) NOT NULL,
  `paragraphs_order` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_fields`
--

INSERT INTO `text_fields` (`id`, `content`, `section`, `paragraphs_order`) VALUES
(1, 'Loka Coffee to klimatyczna kawiarnia w której dobrze zjesz, wypijesz kawę parzoną przez baristów, skosztujesz piw rzemieślniczych oraz rozsmakujesz się w świeżo pieczonych, domowych ciastach - znajdująca się w Stęszewie przy ulicy Dworcowej.\r\n', 'o-nas', 1),
(2, 'Przy wypieku ciast stawiamy na tradycyjne receptury które pamiętają czasy naszych prababci. Dania ciepłe, które oferujemy to połączenie różnych kuchni – nie boimy się eksperymentować; a kawę parzymy wyłącznie z wyselekcjonowanych ziaren sprawdzonych odmian.\r\n', 'o-nas', 2),
(3, '+48 123 456 789', 'numer-telefonu', NULL),
(4, 'info@lcaffee.com', 'mail', NULL),
(5, 'Dworcowa 2c, <br> 62-060 Stęszew<br> ', 'adres', NULL),
(6, 'pon-pt;10-18', 'godziny-otwarcia', 1),
(7, 'sobota;9-23', 'godziny-otwarcia', 2),
(8, 'niedziela;11-17', 'godziny-otwarcia', 3),
(9, 'Do każdej dużej kawy - kostka ciasta za pół ceny', 'pod-menu', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_fields`
--
ALTER TABLE `text_fields`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `text_fields`
--
ALTER TABLE `text_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
