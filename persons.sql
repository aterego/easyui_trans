-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 07:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trans`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
`id` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `doctor` text NOT NULL,
  `recipient` text NOT NULL,
  `rec_pid` varchar(25) NOT NULL,
  `rec_age` varchar(50) NOT NULL,
  `rec_address` text NOT NULL,
  `rec_phone` varchar(255) NOT NULL,
  `diagnosis` text NOT NULL,
  `rhesus` varchar(50) NOT NULL,
  `fibrosis` text NOT NULL,
  `bilirubin` text NOT NULL,
  `ast` text NOT NULL,
  `alt` text NOT NULL,
  `ggt` varchar(150) NOT NULL,
  `cr` varchar(150) NOT NULL,
  `inr` varchar(150) NOT NULL,
  `albumin` text NOT NULL,
  `ascites` text NOT NULL,
  `encephalopathy` text NOT NULL,
  `bleeding` text NOT NULL,
  `child` varchar(150) NOT NULL,
  `meld` varchar(150) NOT NULL,
  `r_height` varchar(150) NOT NULL,
  `r_weight` varchar(150) NOT NULL,
  `r_bmi` varchar(150) NOT NULL,
  `rec_details` text NOT NULL,
  `donor` text NOT NULL,
  `don_pid` varchar(50) NOT NULL,
  `don_age` varchar(50) NOT NULL,
  `relationship` text NOT NULL,
  `don_address` text NOT NULL,
  `don_phone` varchar(255) NOT NULL,
  `don_rhesus` varchar(150) NOT NULL,
  `don_details` text NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `ddate`, `doctor`, `recipient`, `rec_pid`, `rec_age`, `rec_address`, `rec_phone`, `diagnosis`, `rhesus`, `fibrosis`, `bilirubin`, `ast`, `alt`, `ggt`, `cr`, `inr`, `albumin`, `ascites`, `encephalopathy`, `bleeding`, `child`, `meld`, `r_height`, `r_weight`, `r_bmi`, `rec_details`, `donor`, `don_pid`, `don_age`, `relationship`, `don_address`, `don_phone`, `don_rhesus`, `don_details`, `modified`) VALUES
(14, '2015-10-29', 'áƒ’áƒ˜áƒ áƒ—áƒáƒ›áƒáƒ«áƒ”', 'áƒ›áƒ£áƒ™áƒ‘áƒáƒœáƒ˜áƒáƒœáƒ˜ áƒ¯áƒ˜áƒ›áƒ¨áƒ”áƒ ', '', '47', 'áƒ¬áƒ§áƒáƒšáƒ¢áƒ£áƒ‘áƒáƒ¡ áƒ -áƒœáƒ˜ áƒ¡áƒáƒ¤ áƒ¨áƒáƒ§áƒáƒšáƒ˜áƒ', '595 53 36 69', 'áƒ°áƒ”áƒžáƒáƒ¢áƒ˜áƒ¢áƒ˜ áƒªáƒ” (áƒ’áƒáƒ˜áƒáƒ áƒ áƒªáƒ” áƒ°áƒ”áƒžáƒáƒ¢áƒ˜áƒ¢áƒ˜áƒ¡ áƒ”áƒšáƒ˜áƒ›áƒ˜áƒœáƒáƒªáƒ˜áƒ˜áƒ¡ áƒžáƒ áƒáƒ’áƒ áƒáƒ›áƒ,  áƒ áƒáƒáƒ“áƒ”áƒœáƒáƒ‘áƒ áƒ˜áƒ•áƒ˜ 20.07.2015 áƒáƒ  áƒ’áƒáƒœáƒ˜áƒ¡áƒáƒ–áƒ¦áƒ•áƒ áƒ),áƒ¦áƒ•áƒ˜áƒ«áƒšáƒ˜áƒ¡ áƒªáƒ˜áƒ áƒáƒ–áƒ˜, áƒáƒ¡áƒªáƒ˜áƒ¢áƒ˜', '', '', '44', '57', '21', '', '', '', '26.9', '+', '3 áƒ¯áƒ”áƒ  áƒ‘áƒáƒšáƒ 2014 áƒ¬áƒ”áƒšáƒ¡', 'áƒáƒ áƒ', '', '', '', '', '', '', 'áƒ›áƒ£áƒ™áƒ‘áƒáƒœáƒ˜áƒáƒœáƒ˜ áƒ›áƒ–áƒ˜áƒ', '', '48', 'áƒ›áƒ”áƒ£áƒ¦áƒšáƒ”', 'áƒ¬áƒ§áƒáƒšáƒ¢áƒ£áƒ‘áƒáƒ¡ áƒ -áƒœáƒ˜ áƒ¡áƒáƒ¤ áƒ¨áƒáƒ§áƒáƒšáƒ˜áƒ', '598 61 15 65', '', '', '2015-10-29 14:46:35'),
(16, '2018-04-28', 'áƒšáƒ”áƒ•áƒáƒœ áƒ’áƒáƒ’áƒ˜áƒ©áƒáƒ˜áƒ¨áƒ•áƒ˜áƒšáƒ˜', 'áƒ«áƒáƒœáƒáƒ¨áƒ•áƒ˜áƒšáƒ˜ áƒ‘áƒáƒ áƒ˜áƒ¡', '', '57', 'áƒ—áƒ‘áƒ˜áƒšáƒ˜áƒ¡áƒ˜. áƒ¡áƒáƒ•áƒáƒœáƒ”áƒšáƒ˜áƒ¡ 3', '599197676', 'áƒ°áƒ”áƒžáƒáƒ¢áƒ˜áƒ¢áƒ˜ C (áƒ›áƒáƒœáƒáƒ¬áƒ˜áƒšáƒ”áƒáƒ‘áƒ¡ áƒ•áƒ˜áƒ áƒ£áƒ¡áƒ˜áƒ¡ áƒ”áƒšáƒ˜áƒ›áƒ˜áƒœáƒáƒªáƒ˜áƒ˜áƒ¡ áƒžáƒ áƒáƒ’áƒ áƒáƒ›áƒáƒ¨áƒ˜), áƒ¦áƒ•áƒ˜áƒ«áƒšáƒ˜áƒ¡ áƒªáƒ˜áƒ áƒáƒ–áƒ˜, áƒžáƒáƒ áƒ¢áƒ£áƒšáƒ˜ áƒ°áƒ˜áƒžáƒ”áƒ áƒ¢áƒ”áƒœáƒ–áƒ˜áƒ, áƒ°áƒ”áƒžáƒáƒ¢áƒáƒªáƒ”áƒšáƒ£áƒšáƒ£áƒ áƒ˜ áƒ™áƒáƒ áƒªáƒ˜áƒœáƒáƒ›áƒ.', '', 'f4', '35.6', '44.8', '25.4', '', '', '', '-', 'áƒ™áƒáƒ áƒ”áƒ’áƒ˜áƒ áƒ”áƒ‘áƒ£áƒšáƒ˜. áƒáƒ›áƒŸáƒáƒ›áƒáƒ“ áƒáƒ  áƒáƒ¦áƒ˜áƒœáƒ˜áƒ¨áƒœáƒ”áƒ‘áƒ', 'áƒ›áƒ£áƒ“áƒ›áƒ˜áƒ•áƒ˜ áƒ¤áƒáƒ áƒ›áƒ, áƒ¡áƒ£áƒ¡áƒ¢áƒáƒ“ áƒ’áƒáƒ›áƒáƒ®áƒáƒ¢áƒ£áƒšáƒ˜', 'áƒáƒ áƒ', '', '', '', '', '', 'áƒšáƒ”áƒ•áƒáƒœ áƒ’áƒáƒ’áƒ˜áƒ©áƒáƒ˜áƒ¨áƒ•áƒ˜áƒšáƒ˜', 'áƒ«áƒáƒœáƒáƒ¨áƒ•áƒ˜áƒšáƒ˜ ', '', '24', 'áƒ¨áƒ•áƒ˜áƒšáƒ˜', 'áƒ—áƒ‘áƒ˜áƒšáƒ˜áƒ¡áƒ˜, áƒ’áƒáƒ’áƒ”áƒ‘áƒáƒ¨áƒ•áƒ˜áƒšáƒ˜áƒ¡ 3.', '-', '', 'áƒ’áƒáƒ¡áƒáƒ¡áƒáƒ–áƒ¦áƒ•áƒ áƒ˜áƒ áƒ¡áƒ˜áƒ¡áƒ®áƒšáƒ˜áƒ¡ áƒ¯áƒ’áƒ£áƒ¤áƒ˜.', '2018-04-28 16:13:56'),
(18, '2018-04-28', 'Ñ„Ñ‹Ð²Ð°', '', 'dfd', '', '', '', '', '', 'dfd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-28 17:37:27'),
(19, '2018-04-28', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\n\n\n\n\n\n\n', '', '', '', '', '', '', '', '', '2018-04-28 16:56:16'),
(20, '2018-04-28', 'xxxasdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-28 16:24:34'),
(22, '2018-04-28', 'xxxxxxxxxxxxxxxxx', 'xcxc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-28 16:13:56'),
(23, '2018-04-29', 'sds', 'sds', 'sds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-29 20:57:57'),
(24, '2018-04-30', 'werwer', 'werwer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-29 20:58:45'),
(25, '2018-04-29', 'sds', 'sdsd', 'sd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '167', '30', '0.001', '', '', '', '', '', '', '', '', '', '2018-04-29 21:04:49'),
(26, '2018-04-29', 'werwer', 'werwer', 'werwe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '180', '30', '0.001', '', '', '', '', '', '', '', '', '', '2018-04-29 21:06:43'),
(27, '2018-04-09', 'ewr', 'wer', 'wer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '187', '59', '0.002', '', '', '', '', '', '', '', '', '', '2018-04-29 21:05:20'),
(28, '2018-04-16', 'ggg', 'ggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '156', '48', '0.002', '', '', '', '', '', '', '', '', '', '2018-04-29 21:07:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
