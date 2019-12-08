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
-- Database: `comp3334`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(8000) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `activate` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activate`) VALUES
(0, 'brianndjojo2', 'def502005816ad9fd9764423f8c32fb07379ce7ce2a3f505e6593a63bf7221e447999f7550117a6108b07483162e2eefa3f80aeee2684d7d89ef27f1960a8978d952b7755153698b105bffc29b39c42db6bc85dd0a1145d46fd543', 'brianndjojo2poo@gmail.com', 1),
(0, 'brianndjojo3', 'def502002c4fd5fa7b763e50bce6deedc5e680006633c4743efbe5e2ceb06a062feba64638e5a8599357f9d5916997d9fe0ed0f09c9c058f6a3f9694b797636154cbf7d0d213b0a42d04a2e2670a3cccb53d132d8b0a2ba9421b2b', 'brianndjojo3poo@gmail.com', 1),
(0, 'brianndjojo4', 'def502000b32e958aca8c435a2a8e6ca9559d89dedf7b09fb0cb6fec2c5bfc9ae996eced3ef68e11825a401ad6c4f46a925a3093ccded88cb8d4be33dff0ad1bd42c52ac4f1541d1ad0a9a77a3c539f64a16e53aebc76fd03df0f9', 'poopoo33@gmail.com', 1),
(0, 'therealbrianndjojo', 'def502009a02c047e9e58f025c42c06c863023d8a05a61618546e8116d2f5060573903aee5493365c7fd999fd7347ec9fc986e7094c660f832f4e6b57614b37674fa464fca7803148418780023d12c7fadf0ab8cfd9445f0ffc558', 'poopoooo@gmail.com', 1),
(0, 'therealbrianndjojo2', 'def50200e230ae3f79873e80cdd7178195b15f971dc579ddafbbfd3d464f88bb14411e559dabf096de5ef9d1a132b3ed24f150eb75213c1aae8a267d0388888088b74c33b6f24ea1e95a8017ecc98e85660f66b5d2a15152fac560', 'briann@gmail.com', 1),
(0, 'kyle', 'def5020016839a9be396b10fb4f6e26b48cc56c141d0a591385113775544ec1f0d70035db9bdfd4bf2eadc11673233ca4d3c495b1c47113780ef37f9dcd2f0bd97a8979986c86e2b44aa1aab40c396d45f99b7115ae72d4c9e5ef4', 'brianndjojo@gmail.com', 1),
(0, 'brianndjojo6', 'def502004cdfd874057f11e65f6f16fa5f706e710b2de4c03610535dba495417685b3dbacee3e9b3448bcbbd5a441f923b215eb7e199d34c82ca464311ea98aca5938aa5dc01aba2a2f75e8427705673b1e22c4e727bd985a13794', 'test333@gmail.com', 1),
(0, 'therealbrianndjojo23', 'def502002be09c965e84d4dd1558850dc06a393e6da19a0e77e6975fe3384fb5750b005958eacd43df229360e5f0fee881ddfbdd41864ecfed1a5be2af615a3bfdee2ae19c00e7a05d3bee3151410b80e0685c2f95b0d462a49355', 'brianndjojo2@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;