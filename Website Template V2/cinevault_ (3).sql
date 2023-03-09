-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinevault+`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_history`
--

CREATE TABLE `buy_history` (
  `Date` date NOT NULL,
  `Showtime` text NOT NULL,
  `MovieName` text NOT NULL,
  `Seat_Number` text NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancel_ticket`
--

CREATE TABLE `cancel_ticket` (
  `Date` datetime NOT NULL,
  `MovieName` text NOT NULL,
  `userName` text NOT NULL,
  `Seat_Number` text NOT NULL,
  `showtime` text NOT NULL,
  `cancel_cause` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(8) NOT NULL,
  `MovieName` text NOT NULL,
  `Movietype` text NOT NULL,
  `MovieDetails` text NOT NULL,
  `MovieTrailer` text NOT NULL,
  `TimeIn` datetime NOT NULL,
  `TimeOut` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Date` date NOT NULL,
  `Standard` int(11) NOT NULL,
  `sofa Sweet` int(11) NOT NULL,
  `summary` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `t_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date NOT NULL,
  `Showtime` text NOT NULL,
  `Seat_number` text NOT NULL,
  `MovieName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`t_stamp`, `Date`, `Showtime`, `Seat_number`, `MovieName`) VALUES
('2023-03-06 16:14:46', '2023-03-06', '15:44:35', 'A1', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `Theater_number` varchar(4) NOT NULL,
  `Theater_name` text NOT NULL,
  `TimeIn` datetime NOT NULL,
  `TimeOut` datetime NOT NULL,
  `MovienName` text NOT NULL,
  `Showtime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Date` datetime NOT NULL,
  `MovieName` text NOT NULL,
  `Seat_number` text NOT NULL,
  `Showtime` text NOT NULL,
  `QRcode` longblob NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `t_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `userName` text NOT NULL,
  `idcard` int(13) NOT NULL,
  `datebirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`t_stamp`, `Email`, `password`, `userName`, `idcard`, `datebirth`) VALUES
('2023-03-06 07:04:53', 'korakod150745@gmail.com', 23, 'GT.BasicChord', 2147483647, '0000-00-00'),
('2023-03-06 12:44:11', 'korakodt63@nu.ac.th', 123, 'toto', 2147483647, '2023-02-01'),
('2023-03-06 12:44:11', 'logarithm.ptc@gmail.com', 1234, 'MV.Guitar', 2147483647, '2023-02-23'),
('2023-03-06 07:05:18', 'n4rs.jen.ha@gmail.com', 123, 'GT.BasicChord', 2147483647, '2023-03-06'),
('2023-03-06 12:44:11', 'test@email.com', 12345678, 'GT.BasicChord', 2147483647, '2020-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`Theater_number`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
