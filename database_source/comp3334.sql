-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:40 AM
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
  `userKey` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `userKey`) VALUES
(0, 'brianndjojo10', 'def50200015eaa5e86ec30dde8b4e316932436dfbb1ab844655537594fe42a8a66aa80ce51f2e62a124a4f79693ed51fde5f48456195f7358481044b468227927bd1ee51c9fee8ef49b13ed5bc46900000b02cfe3fd41f8a', 'ststestfs@gmail.com', 'def0000042ce5f1e3016510764659d270ad3f2528375ba45d7dc1727e00607990df5edae9f3b1321c90df453b6a5b2ce519f263dc188ef9dfcc4c1b2dbe1cb2af948f5f5'),
(0, 'brianndjojo', 'def502005fbb6325e5d065f88f88f14e6b0ce489b844ab4a7086760bc9398cc51aa45517d10d280b6dd97eab58275045476c3c5ea845f30d0b32370aee8923b9c3107db8f5a59a1c03dff5eadc86c86ebb4c7ec7f7b370a5fc', 'test@gmail.com', 'def00000a3249fe129509303aad481a424df9ee5f870afb269ff0ff6e2713bb2a5c9f80c4d07dd11e3f216291660eab4c9b807540b0bdac2e4d3b9595b1ba29cd120608a'),
(0, 'brianndjojo3', 'def50200e3718bc80f15912053e0268142b7fed358b2de6a05b24fc36eb2f66abd909143f7c71fb18c83016e76f41680391ad6bcd77d37cfaf97e858a886a1333b0dfe87a236c8855ac1c60309bb676d45101b36dbfec248d7', 'test3@gmail.com', 'def00000ca78792285aa7c9efb2941b1e1e7d287ac4c89136d10fe3291865965092c88616f18a7cff8d800e4057096fedba42911549bfbadc62f31f13f869ce455ddce11'),
(0, 'brianndjojo7', 'def50200d945e251132a6b4893c28c1d50f6078484688afca2d75780d04d91d8f633f6540c3d6ef3fc8df335cb7953a32b27349be38d8a7ab430ac695174883b32b6cec219348160fcaff758afccea29d487b607eadb5f91', 'teststst@gmail.com', 'def000002a75f7b37e54fd0ff2bc0467ecfeb6f8b22d73a671ab79f71a0580b8e4310a4197988a9942f4066580c107ec64029d2b498abc18da81aa68ad05d8ce53f4834d'),
(0, 'brianndjojo5', 'def50200081b69b28ab8c94c739a723a470e20a6dce8853ed8a107ec6df5838e975d51aea7db98c79ff52f2d33ffe1e9821853fbfb9bcc52d572e7efeffa63f55c5d1acb39fdffb0168379c4b5f1bdc74776b29b72af90851f', 'teststts@gmail.com', 'def00000f5741a8e42815103f874c87d005ab556bc60a5ef27e75f0666c197b92924c23011d692981e4917aad55d52f528ab9c548b8fb7b7938a74ff3c5754d658632929'),
(0, 'brianndjojo6', 'def50200631b128c9565e4bc3473e986179e3c21615327c407976ec5da5f2f60b69692963076f4267ecead5fca2b501b6b6f397280dc1d51e24301aa55e4b9b5f44772d2086891f3afe3fc03c47e46e92f0a960cdb67920b96', 'poo@gmail.com', 'def000009aac43bd339984062f3b42b901187dca1b47913167725f390e58dc632723aaf7ec5b5d2c8e2a9bb59f52e41cfda968b6f650089b9e8fad725b9f43e5fa55ea69');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
