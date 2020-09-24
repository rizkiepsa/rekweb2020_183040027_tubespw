-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 06:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw_183040027`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `timeline_film` year(4) NOT NULL,
  `produser` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `gambar`, `judul`, `tanggal_rilis`, `timeline_film`, `produser`) VALUES
(3, '2.jpg', 'Captain Marvel', '2019-03-08', 1995, 'Kevin Feige'),
(5, '4.jpg\r\n', 'Iron Man 2', '2010-04-26', 2011, 'Kevin Feige, Susan Downey'),
(6, '5.jpg', 'The Incredible Hulk', '2008-06-08', 2011, 'Kevin Feige, Avi Arad, Gale Anne hurd'),
(7, '6.jpg\r\n', 'Thor', '2011-04-17', 2011, 'Kevin Feige'),
(8, '7.jpg', 'The Avengers', '2012-04-11', 2012, 'Kevin Feige'),
(9, '8.jpg\r\n', 'Iron Man 3', '2013-04-14', 2012, 'Kevin Feige'),
(10, '9.jpg', 'Thor: The Dark World', '2013-10-22', 2013, 'Kevin Feige'),
(11, '10.jpg', 'Captain America: The Winter Soldier', '2014-04-02', 2014, 'Kevin Feige'),
(12, '11.png', 'Guardians of the Galaxy', '2014-08-01', 2014, 'Kevin Feige'),
(13, '12.jpg', 'Guardians of the Galaxy Vol. 2', '2017-04-26', 2015, 'Kevin Feige'),
(14, '13.jpg', 'Avengers: Age of Ultron', '2015-04-01', 2015, 'Kevin Feige'),
(15, '14.jpg', 'Ant-Man', '2015-07-17', 2015, 'Kevin Feige'),
(16, '15.jpg', 'Captain America: Civil War', '2016-04-12', 2016, 'Kevin Feige'),
(17, '16.jpg', 'Spider-Man: Homecoming', '2017-06-05', 2016, 'Kevin Feige, Amy Pascal'),
(18, '17.jpg', 'Doctor Strange', '2016-10-27', 2016, 'Kevin Feige'),
(19, '18.jpg', 'Black Panther', '2018-02-14', 2017, 'Kevin Feige'),
(20, '19.jpg', 'Ant-Man and the Wasp', '2018-06-25', 2017, 'Kevin Feige, Stephen Broussard'),
(21, '20.jpg', 'Avengers: Infinity War', '2018-04-25', 2017, 'Kevin Feige');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`) VALUES
(15, 'admin', '$2y$10$wOROWGzTcrM1j4K4RRPIv.MeW16pN55rU8EfU1yvm8Bs3g5mijd2a', '1556939945'),
(16, 'epsa', '$2y$10$vAEPxtNRZfMfvskPswYgXe6nBEcGY64DRIv8V5huuIVOUyBRRPBnW', '1556943413'),
(17, 'epsaepsa', '$2y$10$7pbPeOZnWERS.11R2iQ0EeRjXkfFh4rrweXN.HWSpXSwd0s1kY0pG', '1557475334'),
(18, 'nathan', '$2y$10$rVqy1Vt3PMeaIIQelXnR9.YdQRKE7akA9Drr9iSFHn.zunC3Zz3oW', '1557538855'),
(19, '11', '$2y$10$ORWdDxt.sttc3YQiDM1nROd7BITy9c90Q2n0P4uvdUULc9t9Byi2m', '1557543849');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
