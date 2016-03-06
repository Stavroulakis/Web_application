-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 29 Σεπ 2014 στις 12:06:58
-- Έκδοση διακομιστή: 5.6.17
-- Έκδοση PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `web_project_am5076`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `anafores`
--

CREATE TABLE IF NOT EXISTS `anafores` (
  `aID` int(11) NOT NULL AUTO_INCREMENT,
  `perigrafh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lin` float(10,6) DEFAULT NULL,
  `lon` float(10,6) DEFAULT NULL,
  `thesi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sxolia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `katastash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luths` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_eisodou` datetime DEFAULT NULL,
  `date_lyshs` datetime DEFAULT NULL,
  PRIMARY KEY (`aID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=74 ;

--
-- Άδειασμα δεδομένων του πίνακα `anafores`
--

INSERT INTO `anafores` (`aID`, `perigrafh`, `lin`, `lon`, `thesi`, `sxolia`, `username`, `katastash`, `luths`, `date_eisodou`, `date_lyshs`) VALUES
(2, 'Σκουπίδια Στην Θάλασσα', 23.912817, 35.519157, 'limanaki', NULL, 'admin', 'μη-ενεργό', NULL, '2014-02-12 12:31:59', '2014-05-08 06:17:24'),
(3, 'Σκουπίδια Στην Θάλασσα', 23.913534, 35.519016, 'luis_beach', 'dewfrv', 'admin', 'μη-ενεργό', 'admin', '2011-08-27 02:51:41', '2014-09-27 01:53:58'),
(4, 'Σκουπίδια Στην Θάλασσα', 23.914576, 35.518982, 'menia_beach', NULL, 'admin', 'μη-ενεργό', NULL, '2012-01-21 03:21:52', '2012-06-09 01:18:36'),
(5, 'Σκουπίδια Στην Θάλασσα', 23.915949, 35.518997, 'ermis_beach', 'Tο προβλημα λυθηκε', 'admin', 'μη-ενεργό', 'admin', '2013-02-12 05:41:15', '2014-09-27 01:57:32'),
(6, 'Σκουπίδια Στην Ακτή', 23.918074, 35.519032, 'alexia_beach', NULL, 'admin', 'ενεργό', NULL, '2011-05-27 09:21:36', NULL),
(7, 'Σκουπίδια Στην Ακτή', 23.909807, 35.519100, 'artemis_beach', 'Ολα είναι έτοιμα', 'man', 'μη-ενεργό', 'admin', '2011-06-21 08:49:26', '2014-09-29 11:48:23'),
(8, 'Σπασμένες Ξαπλώστρες', 23.919811, 35.519260, 'haris_beach', NULL, 'man', 'ενεργό', NULL, '2012-07-02 08:24:47', NULL),
(10, 'Σπασμένες Ξαπλώστρες', 23.919924, 35.519737, 'xania_beach', NULL, 'user1', 'μη-ενεργό', NULL, '2010-04-08 05:27:36', '2011-09-15 05:27:59'),
(11, 'Μόλυνση Θάλασσας', 23.912533, 35.519707, 'platania_beach', NULL, 'user1', 'μη-ενεργό', NULL, '2011-03-27 01:28:59', '2012-03-27 01:28:59'),
(12, 'Μόλυνση Θάλασσας', 23.910967, 35.519604, 'maleme_beach', NULL, 'user1', 'ενεργό', NULL, '2012-03-04 03:53:54', NULL),
(52, 'Σκουπίδια Στην θάλασσα', 23.943672, 35.513855, 'lanis_beach', '', 'admin', 'μη-ενεργό', NULL, '2013-01-27 15:15:58', '2013-06-27 06:19:47'),
(51, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', 23.926334, 35.518814, 'samos_beach', '', 'admin', 'μη-ενεργό', 'admin', '2011-02-26 13:37:52', '2014-09-28 02:25:21'),
(47, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', 23.921957, 35.518253, 'lala', '', 'admin', 'μη-ενεργό', 'admin', '2012-05-20 12:37:54', '2014-09-28 02:28:43'),
(45, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', 23.903332, 35.518677, 'punta_beach', '', 'admin', 'ενεργό', NULL, '2011-08-23 04:48:13', NULL),
(46, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', 23.921957, 35.518253, 'lala', '', 'admin', 'μη-ενεργό', 'admin', '2012-05-22 01:53:36', '2014-09-28 02:28:43'),
(40, 'Σκουπίδια Στην Ακτή', 23.930626, 35.521538, 'olga_beach', 'Μπουκαλια στην ακτη', 'admin', 'μη-ενεργό', NULL, '2011-04-28 18:29:36', '2011-09-16 01:53:15'),
(48, 'Μόλυνση Θάλασσας', 23.925734, 35.519302, 'alivery', '', 'admin', 'ενεργό', NULL, '2012-02-27 19:25:47', NULL),
(49, 'Σκουπίδια Στην θάλασσα', 23.888826, 35.520210, 'anita_beach', '', 'admin', 'μη-ενεργό', NULL, '2013-01-26 17:23:58', '2013-06-18 01:39:36'),
(50, 'Σκουπίδια Στην θάλασσα', 23.905993, 35.518047, 'love_beach', '', 'admin', 'ενεργό', NULL, '2011-04-20 21:15:51', NULL),
(53, 'Σκουπίδια Στην θάλασσα', 23.906422, 35.518463, 'sex_beach', '', 'man', 'ενεργό', NULL, '2011-02-01 16:13:24', NULL),
(54, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', 23.924103, 35.518955, 'hta_beach', '', 'man', 'ενεργό', NULL, '2010-09-27 20:51:25', NULL),
(57, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', 23.921442, 35.516579, 'sun_beach', '', 'admin', 'ενεργό', NULL, '2014-09-26 10:44:00', NULL),
(67, 'Βραχια', 23.927193, 35.519722, 'σαμαρια_beach', '', 'gmikas', 'ενεργό', NULL, '2014-09-29 12:10:03', NULL),
(68, 'Σκουπίδια Στην θάλασσα', 23.903160, 35.518326, 'xalkina_beach', '', 'gmikas', 'ενεργό', NULL, '2014-09-29 12:13:41', NULL),
(69, 'Σκουπίδια Στην θάλασσα', 23.919897, 35.515881, 'trikaka_beach', '', 'admin', 'ενεργό', NULL, '2014-09-29 12:19:41', NULL),
(70, 'Σκουπίδια Στην θάλασσα', 23.917150, 35.514202, 'soipa_beach', '', 'gmikas', 'ενεργό', NULL, '2014-09-29 12:37:09', NULL),
(71, 'Σκουπίδια Στην θάλασσα', 23.904877, 35.518463, 'xaxaxxa_beach', '', 'gmikas', 'ενεργό', NULL, '2014-09-29 12:40:26', NULL),
(72, 'Σκουπίδια Στην θάλασσα', 23.928995, 35.520771, 'hllios_beach', '', 'gmikas', 'ενεργό', NULL, '2014-09-29 01:19:15', NULL),
(73, 'Βραχια', 23.908739, 35.513855, 'σταρ_beach', 'προβλημα με πολλα βραχια', 'man', 'ενεργό', NULL, '2014-09-29 11:21:02', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `kathgoria`
--

CREATE TABLE IF NOT EXISTS `kathgoria` (
  `katID` int(11) NOT NULL AUTO_INCREMENT,
  `katname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_anaf` int(11) DEFAULT NULL,
  PRIMARY KEY (`katID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Άδειασμα δεδομένων του πίνακα `kathgoria`
--

INSERT INTO `kathgoria` (`katID`, `katname`, `ID_anaf`) VALUES
(1, 'Σκουπίδια Στην θάλασσα', NULL),
(2, 'Μόλυνση Θάλασσας', NULL),
(3, 'Σκουπίδια Στην Ακτή', NULL),
(4, 'Σπασμένες Ξαπλώστρες/Ομπρέλες', NULL),
(6, 'Βραχια', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_path` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aID` int(11) DEFAULT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Άδειασμα δεδομένων του πίνακα `photos`
--

INSERT INTO `photos` (`pID`, `filename`, `user`, `images_path`, `aID`) VALUES
(1, '0', 'admin', NULL, NULL),
(2, '0', 'admin', NULL, NULL),
(3, '0', 'admin', NULL, NULL),
(4, '0', 'admin', NULL, NULL),
(5, '0', 'admin', NULL, NULL),
(6, '0', 'admin', NULL, NULL),
(7, '0', 'admin', NULL, NULL),
(8, '0', 'admin', NULL, NULL),
(9, '0', 'admin', NULL, NULL),
(10, '0', 'admin', NULL, NULL),
(11, '0', 'admin', NULL, NULL),
(12, '', 'admin', NULL, NULL),
(13, 'love_beach', 'admin', 'eikones/admin/50/img771.jpg', 50),
(14, 'love_beach', 'admin', 'eikones/admin/50/WP_20140910_006.jpg', 50),
(15, 'samos_beach', 'admin', 'eikones/admin/51/New-World-One-Piece-Wallpaper.jpg', 51),
(16, 'samos_beach', 'admin', 'eikones/admin/51/WP_20140910_005.jpg', 51),
(17, 'lanis_beach', 'admin', 'eikones/admin/52/WP_20140910_007.jpg', 52),
(18, 'sex_beach', 'man', 'eikones/man/53/mpouf.jpg', 53),
(19, 'hta_beach', 'man', 'eikones/man/54/lalala.jpg', 54),
(20, 'hta_beach', 'man', 'eikones/man/54/mpouf.jpg', 54),
(21, 'hta_beach', 'man', 'eikones/man/54/New-World-One-Piece-Wallpaper.jpg', 54),
(22, 'kourouta_beach', 'man', 'eikones/man/55/eikona1.jpg', 55),
(23, 'kourouta_beach', 'man', 'eikones/man/55/eikona2.jpg', 55),
(24, 'sun_beach', 'admin', 'eikones/admin/57/eikona1.jpg', 57),
(25, 'sun_beach', 'admin', 'eikones/admin/57/eikona2.jpg', 57),
(26, 'σαμαρια_beach', 'gmikas', 'eikones/gmikas/67/eikona1.jpg', 67),
(27, 'xaxaxxa_beach', 'gmikas', 'eikones/gmikas/71/eikona2.jpg', 71),
(28, 'hllios_beach', 'gmikas', 'eikones/gmikas/72/eikona2.jpg', 72),
(29, 'σταρ_beach', 'man', 'eikones/man/73/eikona2.jpg', 73),
(30, 'σταρ_beach', 'man', 'eikones/man/73/eikona1.jpg', 73);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `xrhstes`
--

CREATE TABLE IF NOT EXISTS `xrhstes` (
  `onomatepwnumo` varchar(35) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `username` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `kwdikos` int(11) NOT NULL,
  `thlefwno` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=115 ;

--
-- Άδειασμα δεδομένων του πίνακα `xrhstes`
--

INSERT INTO `xrhstes` (`onomatepwnumo`, `username`, `userID`, `kwdikos`, `thlefwno`, `email`) VALUES
('alexandros_stavroulakis', 'admin', 1, 1925, 6667427, 'alexantr0s@hotmaiiiiil.com'),
('aa', 'user1', 2, 0, 1234567891, 'a@a.a'),
('kapwsetsi', 'man', 11, 1212, 23432316, 'asddddf@.gr'),
('george_mikas', 'gmikas', 78, 9874, 89678766, 'georg@hot.gr'),
('nikos_zikos', 'zik', 74, 6996, 9789765, 'nikzik@hot.com'),
('mixalhs_giltos', 'μιχαλιο', 108, 88889, 0, 'mixalis@lala.fr'),
('tzim', 'lolo', 83, 1234, 0, 'frfeers@gtr.com'),
('kwstas', 'kwst', 85, 8888, 85454, 'kwstas@a.com'),
('john_las', 'john', 86, 6445, 95474, 'john@las.gr'),
('nikoleta_stan', 'niki', 112, 5587, 281257, 'nikol@hotma.com'),
('maria lou', 'maria', 113, 9784, 0, 'mar@laal.gr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
