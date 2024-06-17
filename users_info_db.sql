-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 11:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theantiques_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_info_db`
--

CREATE TABLE `users_info_db` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info_db`
--

INSERT INTO `users_info_db` (`userID`, `username`, `password`, `fname`, `lname`, `sex`, `age`, `dob`, `email`, `address`, `cnumber`) VALUES
(1, '', '', 'test', 'test', 'male', 21, '2024-01-16', 'test@gmail.com', 'test', 44444444),
(2, '', '', 'test1', 'test1', 'female', 22, '2024-01-16', 'test1@gmail.com', 'test1', 22222222),
(3, '', '', 'test3', 'test3', 'male', 11, '2024-01-16', 'test3@gmail.com', 'test3', 11111111),
(4, '', '', 'test2', 'test2', 'male', 21, '2024-01-16', 'test2@gmail.com', 'test2', 111111111),
(5, 'root', '', 'test4', 'test4', 'male', 22, '2024-01-16', 'test4@gmail.com', 'test4', 555555555),
(6, '', '', 'test5', 'test5', 'male', 12, '2024-01-16', 'test5@gmail.com', 'test5', 5555555),
(7, 'test6', 'test6', 'test6', 'test6', 'female', 11, '2024-01-16', 'test6@gmail.com', 'test6', 6666666),
(8, 'test7', 'test7', 'test7', 'test7', 'nBin', 23, '2024-01-16', 'test7@gmail.com', 'test7', 777777),
(9, 'test8', 'test8', 'test8', 'test8', 'male', 33, '2024-01-16', 'test8@gmail.com', 'test8', 888888888),
(10, 'test9', 'test9', 'test9', 'test9', 'male', 22, '2024-01-16', 'test9@gmail.com', 'test9', 99999999),
(11, 'test10', 'test10', 'test10', 'test10', 'female', 16, '2024-01-16', 'test10@gmail.com', 'test10', 100000000),
(12, 'test10', 'test10', 'test10', 'test10', 'female', 16, '2024-01-16', 'test10@gmail.com', 'test10', 100000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_info_db`
--
ALTER TABLE `users_info_db`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_info_db`
--
ALTER TABLE `users_info_db`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
