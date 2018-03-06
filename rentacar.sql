-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2018 at 07:04 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_groups`
--

CREATE TABLE `admin_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`, `description`) VALUES
(1, 'webmaster', 'Admin'),
(2, 'admin', 'Business owner'),
(3, 'manager', 'Business manager'),
(4, 'staff', 'Angajat');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_attempts`
--

CREATE TABLE `admin_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `functie` varchar(255) NOT NULL,
  `sediu` int(11) NOT NULL,
  `primeste_notificari` enum('DA','NU') DEFAULT 'NU'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `functie`, `sediu`, `primeste_notificari`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$6qIC18YUC/Z7dSnpjObmiO7x1vhetCv9ApWAzPTUGjf04athj2K/a', NULL, 'admin@renta.car', NULL, NULL, NULL, NULL, 1451900190, 1520359336, 1, 'Website admin', NULL, '', 0, 'NU'),
(2, '127.0.0.1', 'owner', '$2y$08$9w8CIwsZY9bJmysVRkqW1OrLRRvmuDHtluX3OvZjx.L8FHlp5iNPe', NULL, 'owner@renta.car', NULL, NULL, NULL, NULL, 1451900228, 1475498586, 1, 'Business owner', NULL, '', 0, 'NU'),
(3, '127.0.0.1', 'manager', '$2y$08$snzIJdFXvg/rSHe0SndIAuvZyjktkjUxBXkrrGdkPy1K6r5r/dMLa', NULL, 'manager@renta.car', NULL, NULL, NULL, NULL, 1451900430, 1475498610, 1, 'Business manager', NULL, '', 0, 'DA'),
(4, '127.0.0.1', 'angajat', '$2y$08$i2bLR/Zhkju5PrAXe059UOBIncGpPDepAUbJgle.QrhBqSahBRB7a', NULL, 'angajat@renta.car', NULL, NULL, NULL, NULL, 1451900439, 1475498632, 1, 'Angajat', NULL, '', 1, 'DA');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users_groups`
--

CREATE TABLE `admin_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users_groups`
--

INSERT INTO `admin_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` varchar(5) NOT NULL DEFAULT 'NO',
  `data` blob NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `status`, `data`, `user_agent`, `name`) VALUES
('1b76e4ddea24e1e7ca4bcd283ac2c844a6b2afe4', '::1', 1476873706, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837333639343b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736373836363938223b, '', ''),
('01ff6093a9025d8a1a7475cc868fba00d5a1cafd', '::1', 1476875215, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837343933363b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('d5163f27fc200dce1ce3f9312c977c241ed9123f', '::1', 1476875471, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837353237353b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('6a41bf5890b0b07ab58b1fa1c4ab9f22271f80ad', 'fe80::1', 1476875855, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837353638343b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('71b81c7a407eb874df618a0d8820e3de1dcb633e', '::1', 1476876453, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837363136323b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('f03a31fe115f3ac382593dfad1ad1aaa025a6346', '::1', 1476876778, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837363438333b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('b62adb8797088b47a0cfea26225a517a134ca5b4', '::1', 1476877182, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837363931313b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('1ab9602e81eb908bcd648fc1738822a7152d5af2', '::1', 1476877508, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837373231393b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('3bee189e979ab612ad7a0659d1cd79b0eb892da2', '::1', 1476877834, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837373630313b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('a7c38d4fb16d9cb5f7cecb6fd34beed97b082874', '::1', 1476878418, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837383131303b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('e7caea8924e65fbbaa641c0fb8cc0b2e1808cb78', '::1', 1476878705, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837383431383b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('a7673fb96d2e2b84f661e284eec3978995496c95', '::1', 1476879056, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837383736343b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383733363937223b, '', ''),
('becc117ecd6c99238857e62105e00983e141627d', '::1', 1476879190, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837393131353b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383734393336223b, '', ''),
('27f8e8f60019bf926037eace5641da2f544f941c', '::1', 1476879511, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837393531313b, '', ''),
('df97d48186ae039886578dedce992abdd3b2aedc', '::1', 1476879759, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837393531353b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383734393336223b, '', ''),
('a8e31eb1147955464c70ac067a1d6b76b53eedb5', 'fe80::1', 1476880081, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363837393839343b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383734393336223b, '', ''),
('m4i3tvruedldlkspq7pi5urut8', '::1', 1520359331, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333313b73797374656d5f6d657373616765737c613a323a7b733a373a2273756363657373223b613a303a7b7d733a353a226572726f72223b613a313a7b693a303b733a32323a223c703e496e636f7272656374204c6f67696e3c2f703e223b7d7d5f5f63695f766172737c613a313a7b733a31353a2273797374656d5f6d65737361676573223b733a333a226e6577223b7d, '', ''),
('a959njn8ophcts3i3hnbkedqau', '::1', 1520359331, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333313b, '', ''),
('tt5pqfeq72v00eie1up3fl6kut', '::1', 1520359333, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333333b73797374656d5f6d657373616765737c613a323a7b733a373a2273756363657373223b613a303a7b7d733a353a226572726f72223b613a313a7b693a303b733a32323a223c703e496e636f7272656374204c6f67696e3c2f703e223b7d7d5f5f63695f766172737c613a313a7b733a31353a2273797374656d5f6d65737361676573223b733a333a226e6577223b7d, '', ''),
('1o8hmnfgolffdkecnifp68eni2', '::1', 1520359333, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333333b, '', ''),
('9k9h2brtjde98a8e1jlrb2d2d9', '::1', 1520359336, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333363b6964656e746974797c733a353a2261646d696e223b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343736383739313836223b73797374656d5f6d657373616765737c613a323a7b733a373a2273756363657373223b613a313a7b693a303b733a32393a223c703e4c6f6767656420496e205375636365737366756c6c793c2f703e223b7d733a353a226572726f72223b613a303a7b7d7d5f5f63695f766172737c613a313a7b733a31353a2273797374656d5f6d65737361676573223b733a333a226e6577223b7d, '', ''),
('127u6u6i2v5kfk0ebq003ktc1k', '::1', 1520359336, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333363b, '', ''),
('i6t2tag409tgsriumcnc3av897', '::1', 1520359336, 'NO', 0x5f5f63695f6c6173745f726567656e65726174657c693a313532303335393333363b, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contracte`
--

CREATE TABLE `contracte` (
  `id` int(11) NOT NULL,
  `numar_contract` varchar(255) NOT NULL,
  `data_contract` date NOT NULL,
  `client` int(11) NOT NULL,
  `masina` int(11) NOT NULL,
  `inchiriat_de` int(11) NOT NULL,
  `sediu` int(11) NOT NULL,
  `de_la` date NOT NULL,
  `pana_la` date NOT NULL,
  `unde_circula` varchar(255) NOT NULL,
  `pret` varchar(255) NOT NULL,
  `garantie` varchar(255) NOT NULL,
  `din_ora` varchar(255) NOT NULL,
  `pana_ora` varchar(255) NOT NULL,
  `termen` varchar(255) NOT NULL,
  `penalitati` varchar(255) NOT NULL,
  `taxa_aeroport` varchar(255) NOT NULL,
  `ora_contract` varchar(255) NOT NULL,
  `comb_predare` varchar(255) NOT NULL,
  `comb_primire` varchar(255) NOT NULL,
  `km_predare` varchar(255) NOT NULL,
  `km_primire` varchar(255) NOT NULL,
  `mentiuni_predare` varchar(255) NOT NULL,
  `mentiuni_primire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracte`
--

INSERT INTO `contracte` (`id`, `numar_contract`, `data_contract`, `client`, `masina`, `inchiriat_de`, `sediu`, `de_la`, `pana_la`, `unde_circula`, `pret`, `garantie`, `din_ora`, `pana_ora`, `termen`, `penalitati`, `taxa_aeroport`, `ora_contract`, `comb_predare`, `comb_primire`, `km_predare`, `km_primire`, `mentiuni_predare`, `mentiuni_primire`) VALUES
(1, '234532/2016', '2016-10-19', 3, 1, 4, 1, '2016-10-10', '2016-10-18', 'europa', '200', '1000', '15.30', '17.00', '3', '2', '50', '13.50', '40l', '20l', '85.000', '87.000', 'mentiuni la predarea automobilului catre client', 'mentiuni la preluarea automobilului de la client'),
(5, '634454/2014', '0000-00-00', 2, 2, 3, 1, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '453643/2016', '0000-00-00', 6, 3, 4, 2, '2016-10-05', '2016-10-27', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '54153/2016', '0000-00-00', 2, 2, 4, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '4564343/2015', '0000-00-00', 3, 1, 4, 2, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `masini`
--

CREATE TABLE `masini` (
  `id` bigint(20) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `an` varchar(255) NOT NULL,
  `numar` varchar(255) NOT NULL,
  `carburant` enum('Benzina','Motorina','GPL+Benzina','Electrica','Hybrid') NOT NULL,
  `status` enum('Inchiriata','Disponibila','In service','') NOT NULL,
  `anvelope` enum('Iarna','All Season','Vara','') NOT NULL,
  `revizie` date NOT NULL,
  `rovinieta` date NOT NULL,
  `rca` date NOT NULL,
  `itp` date NOT NULL,
  `casco` date NOT NULL,
  `dotari` varchar(255) NOT NULL,
  `poza` varchar(255) NOT NULL,
  `iesire_service` date NOT NULL DEFAULT '2099-12-12',
  `categorie` enum('Econom','Medie','Confort','Lux','SUV','Van') NOT NULL,
  `culoare` varchar(255) NOT NULL,
  `caroseria_nr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masini`
--

INSERT INTO `masini` (`id`, `marca`, `model`, `an`, `numar`, `carburant`, `status`, `anvelope`, `revizie`, `rovinieta`, `rca`, `itp`, `casco`, `dotari`, `poza`, `iesire_service`, `categorie`, `culoare`, `caroseria_nr`) VALUES
(1, 'Dacia', 'Logan', '2013', 'IS91BGH', 'Benzina', 'Disponibila', 'Iarna', '2016-11-17', '2016-10-28', '2016-10-31', '2016-10-03', '2016-10-02', 'airbag, ABS, scaun copii', 'c81f2-dacia-logan-2013-images-02.jpg', '2092-12-12', 'Econom', '', ''),
(2, 'Dacia', 'Logan', '2011', 'B332GBU', 'Motorina', 'Disponibila', 'Iarna', '2016-11-17', '2016-10-28', '2016-10-31', '2016-10-14', '2016-10-12', 'airbag, ABS, scaun copii', '6adcc-2011_dacia_logan_21324.jpg', '2016-10-04', 'Econom', '', ''),
(3, 'Chevrolet', 'Cruze', '2008', 'PH99mvc', 'Benzina', 'Disponibila', 'All Season', '2016-10-26', '2016-10-27', '2016-10-31', '2016-10-31', '2016-10-14', 'etc', '96454-2011_chevrolet_cruze_ls_-_nhtsa_2.jpg', '2092-12-12', 'Medie', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sedii`
--

CREATE TABLE `sedii` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ore_de_lucru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sedii`
--

INSERT INTO `sedii` (`id`, `nume`, `adresa`, `telefon`, `email`, `ore_de_lucru`) VALUES
(1, 'Xxxxx - sediu', 'XXXX', 'xxxxxx', 'xxx@renta.car', 'l-v: 8-20; s: 9-15; d: inchis'),
(2, 'Galati', 'Galati', 'xxxxxx', 'xxxx@renta.car', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `masina` int(11) NOT NULL,
  `intrat_in_service` date NOT NULL,
  `iesire` date NOT NULL,
  `motiv` varchar(255) NOT NULL,
  `documente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `masina`, `intrat_in_service`, `iesire`, `motiv`, `documente`) VALUES
(1, 2, '2016-10-01', '2016-10-04', 'diverse', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `blacklist` varchar(255) NOT NULL,
  `blacklist_cine` int(11) NOT NULL,
  `blacklist_sediu` int(11) NOT NULL,
  `ultima_rezervare` int(11) NOT NULL,
  `poza_buletin` varchar(255) NOT NULL,
  `poza_permis` varchar(255) NOT NULL,
  `contract` varchar(255) NOT NULL,
  `data_nasterii` varchar(255) NOT NULL,
  `cnp` varchar(255) NOT NULL,
  `domiciliu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nume`, `prenume`, `telefon`, `blacklist`, `blacklist_cine`, `blacklist_sediu`, `ultima_rezervare`, `poza_buletin`, `poza_permis`, `contract`, `data_nasterii`, `cnp`, `domiciliu`) VALUES
(2, 'dan.popescu@renta.car', 'dan', 'popescu', '09869087', '', 0, 0, 3, 'decc0-img_1802631_thumbs_600x440_2586441.jpg', '', '', '', '', ''),
(3, 'ion.popescu@renta.car', 'popescu', 'ion', '07513221222', 'Intarziere returnare masina data 2015-02-23', 0, 0, 0, '', '', '', '12.12.2000', '192566115', 'Iasi'),
(6, 'testemail@renta.car', 'test', 'testprenume', '543728910', 'NU', 0, 0, 3, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login_attempts`
--
ALTER TABLE `admin_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users_groups`
--
ALTER TABLE `admin_users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `contracte`
--
ALTER TABLE `contracte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masini`
--
ALTER TABLE `masini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedii`
--
ALTER TABLE `sedii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_login_attempts`
--
ALTER TABLE `admin_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_users_groups`
--
ALTER TABLE `admin_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contracte`
--
ALTER TABLE `contracte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masini`
--
ALTER TABLE `masini`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sedii`
--
ALTER TABLE `sedii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
