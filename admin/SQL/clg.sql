-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 10:25 AM
-- Server version: 10.1.26-MariaDB
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
-- Database: `clg`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tech` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `shift` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `broll` int(6) NOT NULL,
  `reg` int(6) NOT NULL,
  `semis` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `croll` int(10) NOT NULL,
  `birth` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `padd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ppadd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mob` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `blood` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `sname`, `fname`, `mname`, `photo`, `tech`, `shift`, `broll`, `reg`, `semis`, `croll`, `birth`, `session`, `padd`, `ppadd`, `mob`, `blood`, `email`, `religion`) VALUES
(2, 'md.Ashanur Rahman', 'Aslam uddin', 'Aklima', 'IMG_20181110_205658.jpg', 'Computer', '2nd', 346537, 254182, '5th', 37, '05-03-2000', '16-17', 'kcsdkv dfhvhghhhh', 'gmhmg', '01866936562', 'o(+)', 'ashanour009@gmail.comdfd', 'islam'),
(16, 'Bahaudddin Nasim', 'M.A Sobahan', 'Hasina Begum', 'twitter.png', 'Computer', '1st', 346387, 254332, '5th', 19, '1999-12-16', '16-17', 'Post: Kuakata,Thana: Kolapara,District:Potuakhali,Division:Barisal', 'Baitulaman,Faridpur', '01316007537', 'A+ve', 'bahauddinnasim67@gmail.com', 'islam'),
(17, '', '', '', '', '', '', 346388, 254333, '', 0, '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', 346392, 254335, '', 0, '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', 346393, 254326, '', 0, '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', 346395, 254767, '', 0, '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', 346398, 253428, '', 0, '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', 346400, 254329, '', 0, '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', 346401, 254330, '', 0, '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', 346566, 252525, '', 0, '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', 346555, 444444, '', 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `broll` (`broll`),
  ADD UNIQUE KEY `reg` (`reg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
