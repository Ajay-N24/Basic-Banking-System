-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 07:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `sr_no` int(255) NOT NULL,
  `account_no` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`sr_no`, `account_no`, `name`, `email`, `current_balance`) VALUES
(1, 123421, 'Ajay Nadar', 'aj12q@gmail.com', 48000),
(2, 123422, 'Jack', 'jac23@gmail.com', 100000),
(3, 123423, 'Gab', 'gae12o@gmail.com', 32000),
(4, 123424, 'Diago', 'Daig14@gmail.com', 10000),
(5, 123425, 'Ramesh', 'ramesh67@gmail.com', 56400),
(6, 123426, 'Tarzan', '37tarzen@gmail.com', 74230),
(7, 123427, 'Pratham', 'Prathmb21ue@gmail.com', 32700),
(8, 123427, 'Yam', 'yamer95ef@gmail.com', 68600),
(9, 123428, 'Suresh', 'UnSre@gmail.com', 200000),
(10, 123429, 'Amar', 'amrrjiPz@gmail.com', 244000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`, `Dat`) VALUES
(123421, 123423, 2000, 'succeed', '2023-04-17 21:34:44'),
(23, 1881, 292992, 'failed', '2023-04-17 21:36:13'),
(18272663, 282882828, 1929838, 'failed', '2023-04-17 21:36:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
