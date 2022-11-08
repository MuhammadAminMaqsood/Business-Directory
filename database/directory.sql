-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 10:51 AM
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
  `id` int(11) NOT NULL,
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

INSERT INTO `bdd` (`id`, `b_name`, `b_address`, `b_phoneno`, `b_officialno`, `b_faxno`, `b_email`, `b_website`, `b_status`, `b_logo`, `users_id`) VALUES
(59, 'maaz', 'Maaz@gmail.com', 2147483647, 2147483647, 46, 'Maaz@gmail.com', 'www.hghbbn.com', 'on', 'images/1667895351', 14),
(60, 'Muhammad Amin Maqsood', 'amin@gmail.com', 266548529, 2147483647, 2654, 'amin@gmail.com', 'wwww.amin.com', 'on', '$ ', 13),
(61, 'Muhammad Amin Maqsood', 'amin@gmail.com', 266548529, 2147483647, 2654, 'amin@gmail.com', 'wwww.amin maqsood.com', 'on', '$ ', 13),
(62, 'Muhammad Amin Maqsood', 'amin@gmail.com', 266548529, 2147483647, 2654, 'amin@gmail.com', 'wwww.amin.com', 'on', '$ ', 13);

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
(13, 'Muhammad Amin', 'amin@gmail.com', 2147483647, '1234', ' 24x24.png', 2),
(14, 'maaz', 'maaz@gmail.com', 2147483647, 'karachi', ' 24x24.png', 2),
(15, 'saad', 'saad@gmail.com', 2147483647, '$2y$10$26zPXtma0eRpfJc.8oCssOF8RDt1NhDKLBy9lUglRM.Egp0BNzWR2', ' 24x24.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdd`
--
ALTER TABLE `bdd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`users_id`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bdd`
--
ALTER TABLE `bdd`
  ADD CONSTRAINT `bdd_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
