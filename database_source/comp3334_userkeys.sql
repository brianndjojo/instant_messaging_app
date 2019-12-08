-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 12:46 PM
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
('brianndjojo3', 'def0000067dda2ef1d7298a903c1c9659c63c32324eaf831665217797457d748445d7f0bdce0009e9b024072f9bb2c8d300a4787d379349758f5901bf907d511911abe29', ''),
('brianndjojo4', 'def000001a980756be8841537afd40b4100e4f1d9673784c98e37864fccc98ffa2a0c4b588966b810612d6bd81eae253cbcc545db34aacded17c771d4cbc1e0df1973334', ''),
('therealbrianndjojo', 'def000008b1c5ca692356834990d8627df414e9278f32a811a923e538100753cfa0e2c512a5432f59aae8122b1ea0d8792f400dfd721cc3a5aff778f04ed171b474a1442', ''),
('therealbrianndjojo2', 'def000002b4a7545c55268b26eb46c30f38619e35307f641f6cab6cfa229b1151eb87393cd8d625ec2ee4efc103f41370f1dc9b8ff565212f343aee8ab90c7c816444fc5', ''),
('kyle', 'def0000025ffb1e42279c5a11af739ca1d39bd6dd60fefffcd648b3a744d22776241657c9cb30cfa6cb9ceb1fe60f569a23a533601c9df14be12e43d48f463f48eb2a976', ''),
('brianndjojo6', 'def00000548005454a5c65f76e68c2969ef7a9583d78bc7b3afd3b9176853b2d3f2e2905daf038a107aeb05551762fdbad8ece9be50422bbd217e46a3f17750ae05d778e', ''),
('therealbrianndjojo23', 'def0000099247896d1c59447afa12c23ac458c443515fd5cbc93c84c663783878b4a51996c861226088625d247a245d98bb4a984d2ba30f229a687806e30d5c5356ae970', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
