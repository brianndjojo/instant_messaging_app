-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 02:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp3334_userkeys`
--

-- --------------------------------------------------------

--
-- Table structure for table `userkeys`
--

CREATE TABLE `userkeys` (
  `username` varchar(255) NOT NULL,
  `userkey` varchar(8000) NOT NULL,
  `passkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userkeys`
--

INSERT INTO `userkeys` (`username`, `userkey`, `passkey`) VALUES
('brianndjojo2', 'def00000a212f938ce982de75e2db418508c7012deb0df286b5a72d8137719eb36aff664efe3491691431708c7be46b9f4c92b2983a71bc48037e67590aeb1e321e7d6b5', ''),
('brianndjojo3', 'def0000067dda2ef1d7298a903c1c9659c63c32324eaf831665217797457d748445d7f0bdce0009e9b024072f9bb2c8d300a4787d379349758f5901bf907d511911abe29', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
