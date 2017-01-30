-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 07:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markscalculation`
--

-- --------------------------------------------------------

--
-- Table structure for table `savemarks`
--

CREATE TABLE `savemarks` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `marks` varchar(50) DEFAULT NULL,
  `percentage` varchar(50) DEFAULT NULL,
  `totalmarks` varchar(50) DEFAULT NULL,
  `totalpercentage` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savemarks`
--

INSERT INTO `savemarks` (`id`, `name`, `roll`, `subject`, `marks`, `percentage`, `totalmarks`, `totalpercentage`) VALUES
(2, 'Samar Chatterjee', '7', 'Hindi,Hindi,Hindi,Hindi,Hindi,Hindi', '34,67,88,33,44,44', '34,67,88,33,44,44', '567', '56'),
(3, 'Samar Chatterjee', '15', 'Hindi,English,Math,Physics,Geography,History', '80,67,55,66,88,99', '80%,67%,55%,66%,88%,99%', '565', '94.16666666666667%'),
(4, 'Goutam Basak', '15', 'Hindi,English,Math,Physics,Geography,History', '60,70,80,59,66,78', '60%,70%,80%,59%,66%,78%', '413', '68.83333333333333%');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `dob`) VALUES
(1, 'Samar Chatterjee', '11', '15-09-1991'),
(2, 'Goutam Basak', '15', '01-06-1985'),
(3, 'Sudip Dutta', '10', '07-01-1990'),
(4, 'Abir Hazra', '7', '05-08-1992');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) NOT NULL,
  `subject` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(1, 'Hindi'),
(2, 'English'),
(3, 'Math'),
(4, 'Physics'),
(5, 'Geography'),
(6, 'History');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `savemarks`
--
ALTER TABLE `savemarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `savemarks`
--
ALTER TABLE `savemarks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
