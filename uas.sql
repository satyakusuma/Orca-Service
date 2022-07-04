-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 10:24 AM
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
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `abot`
--

CREATE TABLE `abot` (
  `about` varchar(300) NOT NULL,
  `about2` varchar(300) NOT NULL,
  `about3` varchar(500) NOT NULL,
  `about4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abot`
--

INSERT INTO `abot` (`about`, `about2`, `about3`, `about4`) VALUES
('s', 's', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `user_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `user_pass`) VALUES
(1, 'abdul@orca.com', '1234'),
(2, 'owen@orca.com', '4321'),
(3, 'dipta', '4567'),
(4, 'aryus@orca.com', '7654'),
(5, 'satya@orca.com', '7890');

-- --------------------------------------------------------

--
-- Table structure for table `anggotaklmpk`
--

CREATE TABLE `anggotaklmpk` (
  `1` varchar(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hme`
--

CREATE TABLE `hme` (
  `home` varchar(500) NOT NULL,
  `home2` varchar(500) NOT NULL,
  `home3` varchar(500) NOT NULL,
  `home4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hme`
--

INSERT INTO `hme` (`home`, `home2`, `home3`, `home4`) VALUES
('Orca is a Yogya Based, multinational cyber security company that was established in 2020. Dedicated to protect Your data.', ' Orca became widely known in Asia when it revolutionized the cyber           security industry in 2021 with its strong security', 'Vision : Orca want to expand their teritorry to Europe', 'Mission : By send Orca people to introduce Orca company to other business in europe');

-- --------------------------------------------------------

--
-- Table structure for table `kontakk`
--

CREATE TABLE `kontakk` (
  `kontak` varchar(50) NOT NULL,
  `kontak2` varchar(50) NOT NULL,
  `kontak3` varchar(50) NOT NULL,
  `kontak4` varchar(50) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakk`
--

INSERT INTO `kontakk` (`kontak`, `kontak2`, `kontak3`, `kontak4`, `map`) VALUES
('gsgsg', 'gsgsgs', 'gsgsgs', 'gsgsgs', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2804294966827!2d110.40674951477793!3d-7.760054944407147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1656920507402!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `nim`
--

CREATE TABLE `nim` (
  `nim` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `kelas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nim`
--

INSERT INTO `nim` (`nim`, `nama`, `kelas`) VALUES
('20.11.3703', 'Pradipta Alif Parantopo', '20 S1 IF 07'),
('20.11.3681', 'Aryus Danuarta', '20 S1 IF 07'),
('20.11.3708', 'Satya', '20 S1 IF 07'),
('20.11.3788', 'Micheal Owen', '20 S1 IF 07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
