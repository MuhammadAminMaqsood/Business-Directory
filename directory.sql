-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 11:33 AM
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
  `b_logo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bdd`
--

INSERT INTO `bdd` (`b_id`, `b_name`, `b_address`, `b_phoneno`, `b_officialno`, `b_faxno`, `b_email`, `b_website`, `b_status`, `b_logo`) VALUES
(40, 'Muhammad Amin Maqsood', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', '24x24.png'),
(41, 'Muhammad Amin Maqsood', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', '24x24.png'),
(42, 'Muhammad Amin Maqsood', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', '24x24.png'),
(43, 'Muhammad Amin Maqsood', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', '24x24.png'),
(49, 'Muhammad Amin Maqsood', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', ''),
(50, 'Muhammad Amin Maqsood', 'amin@gmail.com', 2147483647, 2147483647, 2564, 'amin@gmail.com', 'www.hghbbn.com', 'on', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `ucontact` int(50) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `uimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `uemail`, `ucontact`, `upassword`, `uimage`) VALUES
(4, '0', 'amin22@gmail.com', 2147483647, '0', ' '),
(5, 'amin', 'amin22@gmail.com', 500052562, '0', ' '),
(6, 'Muhammad Amin', 'amin222@gmail.com', 2147483647, '0', ' 24x24.png'),
(7, 'Muhammad Amin', 'amin3@gmail.com', 2147483647, 'karachi', ' 1.jpg'),
(8, 'amin', 'amin@gmail.com', 2147483647, 'pakistan', ' profile-img.jpg'),
(9, 'maaz', 'maaz@gmail.com', 2147483647, '1234', ' profile-img.jpg');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bdd`
--
ALTER TABLE `bdd`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
