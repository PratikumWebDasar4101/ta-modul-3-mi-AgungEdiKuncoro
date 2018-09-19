-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 07:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telyutizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_telyutizen`
--

CREATE TABLE `data_telyutizen` (
  `NIM` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Fakultas` varchar(3) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_telyutizen`
--

INSERT INTO `data_telyutizen` (`NIM`, `Nama`, `Fakultas`, `Jenis_Kelamin`, `Foto`) VALUES
(2147483647, 'Edi', 'FIT', 'Laki-laki', 'foto/451603.jpg'),
(2147483647, 'Edi', 'FIT', 'Laki-laki', 'foto/93448.jpg'),
(2147483647, 'asd', 'FTE', 'Perempuan', 'foto/dog-cat-funny-couple.jpg'),
(2147483647, 'Agung', 'FIT', 'Laki-laki', 'foto/atas.jpg'),
(2147483647, 'sad', 'FTE', 'Perempuan', 'foto/Archanda Tahar.jpg'),
(2147483647, 'Agung', 'FRI', 'Laki-laki', 'foto/atm.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
