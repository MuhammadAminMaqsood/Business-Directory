-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 11:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdd`
--

CREATE TABLE `bdd` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_address` varchar(200) NOT NULL,
  `b_phoneno` int(50) NOT NULL,
  `b_officialno` int(50) NOT NULL,
  `b_faxno` int(50) NOT NULL,
  `b_email` varchar(100) NOT NULL,
  `b_website` varchar(200) NOT NULL,
  `b_status` varchar(100) NOT NULL,
  `b_logo` varchar(300) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bdd`
--

INSERT INTO `bdd` (`b_id`, `b_name`, `b_address`, `b_phoneno`, `b_officialno`, `b_faxno`, `b_email`, `b_website`, `b_status`, `b_logo`, `users_id`) VALUES
(76, 'Gosari shop', 'Gosari@gmail', 2147483647, 2147483647, 46, 'Gosari@gmail', 'www.Gosari.com', 'on', 'images/download.jfif', 39),
(77, 'Gosari shop', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', 'images/193737920_4057185037704729_810899366465142288_n.png', 41);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `ucontact` int(50) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `uimage` varchar(500) NOT NULL,
  `access_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `uemail`, `ucontact`, `upassword`, `uimage`, `access_level`) VALUES
(42, 'Muhammad Amin', 'admin@gmail.com', 236, 'admin', 'images/2cd216103829407.5f560402aa8e0.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdd`
--
ALTER TABLE `bdd`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bdd`
--
ALTER TABLE `bdd`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
