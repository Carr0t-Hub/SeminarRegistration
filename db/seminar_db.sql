-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 08:08 AM
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
-- Database: `seminar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `oss_agencies`
--

CREATE TABLE `oss_agencies` (
  `id` int(255) NOT NULL,
  `agencies` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oss_register`
--

CREATE TABLE `oss_register` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mnale` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oss_register_other`
--

CREATE TABLE `oss_register_other` (
  `id` int(255) NOT NULL,
  `cooperative` varchar(255) DEFAULT NULL,
  `association` varchar(255) DEFAULT NULL,
  `RIC` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seminarlist`
--

CREATE TABLE `seminarlist` (
  `seminarID` int(11) NOT NULL,
  `seminarTitle` text NOT NULL,
  `seminarDTF` datetime NOT NULL,
  `seminarDTT` datetime NOT NULL,
  `encodedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminarlist`
--

INSERT INTO `seminarlist` (`seminarID`, `seminarTitle`, `seminarDTF`, `seminarDTT`, `encodedBy`) VALUES
(11, 'qqqqqqq', '2023-07-05 09:00:00', '2023-10-07 00:00:00', 156),
(12, 'wre tetetetete', '2023-09-13 14:25:00', '2023-09-16 19:25:00', 156),
(13, 'efw', '2023-09-12 14:29:00', '2023-09-28 14:29:00', 156);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `account` varchar(3) NOT NULL DEFAULT 'No',
  `fname` varchar(50) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `age` varchar(50) NOT NULL,
  `emailAdd` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `agency` varchar(100) NOT NULL,
  `memberIP` varchar(5) NOT NULL,
  `pwd` varchar(5) NOT NULL,
  `platform` varchar(15) NOT NULL,
  `coop` varchar(5) NOT NULL,
  `coopName` varchar(255) NOT NULL,
  `association` varchar(5) NOT NULL,
  `assocName` varchar(255) NOT NULL,
  `ric` varchar(5) NOT NULL,
  `ricName` varchar(255) NOT NULL,
  `dateTimeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `seminarID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `account`, `fname`, `mname`, `lname`, `gender`, `age`, `emailAdd`, `location`, `occupation`, `agency`, `memberIP`, `pwd`, `platform`, `coop`, `coopName`, `association`, `assocName`, `ric`, `ricName`, `dateTimeAdded`, `seminarID`) VALUES
(1, '0', 'dfg', 'fgd', 'dfg', 'Male', '30-39 years old', 'jocel.ann@gmail.com', 'National Capital Region', 'Aquaculturist', 'DA (RFO, AA and Staff Bureaus)', 'No', 'No', 'Webex', 'No', '', 'No', '', 'No', '', '2023-09-13 06:21:25', 0),
(2, '0', 'sdf', 'sdf', 'sdfd', 'Female', '30-39 years old', 'jocel.ann@gmail.com', 'SOCCSKSARGEN', 'Agriculturist', 'NGA other than the DA', 'No', 'No', 'Webex', 'No', '', 'No', '', 'No', '', '2023-09-13 06:27:55', 0),
(3, '0', 'sdfg', 'sdf', 'sdf', 'Female', '30-39 years old', 'sd@dsdf.com', 'National Capital Region', 'Researcher', 'NGA other than the DA', 'Yes', 'No', 'Webex', 'No', '', 'No', '', 'No', '', '2023-09-13 06:49:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oss_agencies`
--
ALTER TABLE `oss_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oss_register`
--
ALTER TABLE `oss_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oss_register_other`
--
ALTER TABLE `oss_register_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminarlist`
--
ALTER TABLE `seminarlist`
  ADD PRIMARY KEY (`seminarID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oss_register`
--
ALTER TABLE `oss_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminarlist`
--
ALTER TABLE `seminarlist`
  MODIFY `seminarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
