-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 02:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `korisnicko_ime` varchar(250) NOT NULL,
  `lozinka` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `korisnicko_ime`, `lozinka`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cjenik`
--

CREATE TABLE `cjenik` (
  `id` int(11) NOT NULL,
  `naziv` text NOT NULL,
  `tip` varchar(100) NOT NULL,
  `cijena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cjenik`
--

INSERT INTO `cjenik` (`id`, `naziv`, `tip`, `cijena`) VALUES
(1, 'Kompletan tretman lica', 'lice', '230 kn'),
(2, 'Klasičan tretman lica s mehaničkim čišćenjem i masažom ', 'lice', '190 kn '),
(5, 'Klasičan tretman lica s mehaničkim čišćenjem ', 'lice', '170 kn '),
(6, 'Njega lica po tipu kože ', 'lice', '150 kn '),
(7, 'Specijalni tretmani za probleme kože (akne, bore, mrlje)', 'lice', '250 kn'),
(8, 'Piling lica, vrata i dekoltea', 'lice', '50 kn'),
(9, 'Masaža lica, vrata i dekoltea ', 'lice', '60 kn'),
(10, 'Maska', 'lice', '50 kn'),
(11, 'Ampula ', 'lice', '20 kn'),
(12, 'Korekcija obrva ', 'lice', '20 kn'),
(13, 'Bojanje obrva', 'lice', '40 kn '),
(14, 'Bojanje obrva s korekcijom', 'lice', '50 kn'),
(15, 'Bojanje trepavica ', 'lice', '40 kn '),
(16, 'Bojanje obrva i trepavica ', 'lice', '70 kn'),
(17, 'Čokoladni relax tretman by Kraš ', 'tijelo', '250 kn'),
(18, 'Mediteran detox tretman', 'tijelo', '250 kn'),
(19, 'Mehaničko čišćenje leđa sa njegom', 'tijelo', '150 kn'),
(20, 'Mehaničko čišćenje leđa sa njegom i masažom ', 'tijelo', '230 kn'),
(21, 'Piling tijela ', 'tijelo', '60 kn'),
(22, 'Maska za tijelo ', 'tijelo', '100 kn'),
(23, 'RELAX masaža tijela - 30 min', 'masaža', '80 kn'),
(24, 'RELAX masaža tijela - 60 min', 'masaža ', '120 kn'),
(25, 'AROMA masaža tijela - 30 min', 'masaža', '100 kn'),
(26, 'AROMA masaža tijela - 60 min', 'masaža', '180 kn '),
(27, 'SPORTSKA/MED. Mt - 30 min', 'masaža', '160 kn '),
(28, 'SPORTSKA/MED. Mt - 60 min', 'masaža', '160 kn'),
(29, 'Ručna limfna drenaža - 30 min ', 'masaža ', '130 kn'),
(30, 'Ručna limfna drenaža - 60 min ', 'masaža', '250 kn');

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `adresa` varchar(250) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `karta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `adresa`, `telefon`, `email`, `facebook`, `instagram`, `karta`) VALUES
(1, 'Ćira Carića 4', '020 555 555', 'stella@gmail.com', '', '', 'https://maps.google.com/maps?q=cira%20cari%C4%87a%204%20dubrovnik&t=&z=13&ie=UTF8&iwloc=&output=embed');

-- --------------------------------------------------------

--
-- Table structure for table `o_nama`
--

CREATE TABLE `o_nama` (
  `id` int(11) NOT NULL,
  `tekst` text NOT NULL,
  `radno_vrijeme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_nama`
--

INSERT INTO `o_nama` (`id`, `tekst`, `radno_vrijeme`) VALUES
(1, 'Nakon par godina rada u kozmetičkim i wellness centrima te brojnih edukacija otvoren je Stella beauty studio, mala opuštajuća oaza s brojnim kozmetičkim uslugama.Svojim radom, praćenjem najnovijih trendova i stalnim usavršavanjem, te ulaganjem u najmoderniju opremu stvorili smo veliki broj zadovoljnih klijenata i stekli njihovo povjerenje. Ljubazan, educiran i izuzetno profesionalan tim pružit će Vam kvalitetu usluge na visokom nivou i privatnost tijekom tretmana. Važno je naglasiti da svakom klijentu posvećujemo jednaku pažnju i individualan pristup. Stoga Vas pozivamo da nas posjetite i uvjerite se sami.', 'Ponedjeljak - srijeda - petak: 8:00 - 15:00 utorak-četvrtak: 14:00 - 21:00 subota: 09:00 - 13:00');

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `id` int(11) NOT NULL,
  `naslov` varchar(250) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`id`, `naslov`, `opis`) VALUES
(1, 'Imate li omiljeni kutak za uljepšavanje? Upravo ste ga pronašli!', 'Naši tretmani uključuju potpunu njegu, od čišćenja, hidratacije, njege masne i nečiste kože.\r\n\r\nPomlađivanje i zatezanja lica, opuštajuće i medicinske masaže, medicinske pedikure za njegu i zdravlje stopala kao i estetskog dijela koji obuhvaća lakiranje, šminkanje te uklanjanje neželjenih dlačica.'),
(2, 'Neka vaša koža zablista', 'Svi tretmani odrađuju se vrhunskim profesionalnim proizvodima od kojih izdvajamo francusku kozmetiku Maria Galland za njegu lica, potom Oxy Therapy trenutno najpoznatiji uređaj dermo infuzije čistim kisikom u svijetu te Mikrodermoabraziju uređaj za uklanjanje površinskog sloja kože.\r\n\r\nZa njegu ruku i stopala odabrali smo Cuccio naturale te lakiranje LCN lakovima njemačkog branda te dobro poznati Shellac. Od depilacije izdvajamo Epiladerm šećernu pastu te svjetski poznati Lycon vosak dok šminkanje odrađujemo profesionalnom šminkom MAC i NYX.'),
(3, 'Masaže ', 'Medicinska masaža pomaže kod napetih i bolnih mišića u kojima se, zbog umora, nakupila mliječna kiselina.\r\nSportska masaža održava mišiće zdravima, gipkima i manje podložnim sportskim ozljedama, povećava opseg kretanja i snagu ozlijeđenih mišića.\r\nRelax aroma masaža njeguje kožu, čini ju mekšom, sjajnijom i ublažava stres, stimulira otpuštanje serotonina ili hormona sreće te poboljšava raspoloženje i opće stanje organizma.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cjenik`
--
ALTER TABLE `cjenik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_nama`
--
ALTER TABLE `o_nama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cjenik`
--
ALTER TABLE `cjenik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `o_nama`
--
ALTER TABLE `o_nama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
