-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 06:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES
(1, 'Go to buy Fruits.', 'Go to the market and buy 10kg of apples and 1kg orange and 2kg grapes', '2023-10-18 17:10:43'),
(2, 'Buy books', 'Hy Pratik,\r\nGo to the book store and buy the PS book.\r\nAnd delete this and its previous note after done.', '2023-10-18 20:44:17'),
(5, 'I have to sleep tonight', 'I have exam tomorrow.', '2023-10-18 21:33:19'),
(6, 'I have to sleep tonight', 'I have exam tomorrow. Repeated note', '2023-10-18 21:33:26'),
(7, 'Buy a book', 'Go to store to buy PS book', '2023-10-18 22:00:14'),
(8, 'Make Tea', 'Hot the water then add milk', '2023-10-18 22:02:07'),
(11, 'sgsdgsdg', '', '2023-10-18 22:17:05'),
(13, 'wefds', '', '2023-10-18 22:17:08'),
(14, 'wefsdfsd', '', '2023-10-18 22:17:10'),
(16, 'qwref', '', '2023-10-18 22:17:13'),
(19, 'added a note', 'Added note at last to test.', '2023-10-19 08:01:58'),
(21, 'Added', 'Adds end', '2023-10-19 08:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
