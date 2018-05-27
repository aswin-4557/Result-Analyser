-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2017 at 02:47 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_Code` varchar(7) NOT NULL,
  `Course` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_Code`, `Course`) VALUES
('BE100', 'ENGINEERING MECHANICS'),
('BE10105', 'INTRODUCTION TO COMPUTING AND PROBLEM SOLVING'),
('BE103', 'INTRODUCTION TO SUSTAINABLE ENGINEERING'),
('CS110', 'COMPUTER SCIENCE WORKSHOP'),
('CY100', 'ENGINEERING CHEMISTRY'),
('CY110', 'ENGINEERING CHEMISTRY LAB'),
('EC100', 'BASICS OF ELECTRONICS ENGINEERING'),
('EC110', 'ELECTRONICS ENGINEERING WORKSHOP'),
('MA101', 'CALCULUS');

-- --------------------------------------------------------

--
-- Table structure for table `Internal_marks`
--

CREATE TABLE `Internal_marks` (
  `id` varchar(10) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Internal_marks`
--

INSERT INTO `Internal_marks` (`id`, `Marks`) VALUES
('TCR15CS014', 14),
('TCR15CS014', 14),
('TCR15CS004', 42),
('TCR15CS030', 41),
('TCR15CS027', 35),
('TCR15CS014', 35),
('TCR15CS060', 49),
('TCR15CS011', 23);

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `RegisterNumber` varchar(10) NOT NULL,
  `MA101` varchar(4) DEFAULT NULL,
  `CY100` varchar(2) DEFAULT NULL,
  `BE100` varchar(4) DEFAULT NULL,
  `BE10105` varchar(2) DEFAULT NULL,
  `BE103` varchar(2) DEFAULT NULL,
  `EC100` varchar(1) DEFAULT NULL,
  `CY110` varchar(4) DEFAULT NULL,
  `CS110` varchar(4) DEFAULT NULL,
  `EC110` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`RegisterNumber`, `MA101`, `CY100`, `BE100`, `BE10105`, `BE103`, `EC100`, `CY110`, `CS110`, `EC110`) VALUES
('TCR15CS001', 'O[S]', 'B+', 'B+', 'A', 'B+', 'C', 'A', 'B+', 'A'),
('TCR15CS002', 'A', 'B+', 'A', 'A+', 'B+', 'B', 'O[S]', 'A+', 'A'),
('TCR15CS003', 'A+', 'B+', 'A+', 'B', 'B+', 'C', 'A+', 'O[S]', 'A'),
('TCR15CS004', 'A+', 'A', 'O[S]', 'B+', 'B+', 'B', 'O[S]', 'A+', 'A'),
('TCR15CS005', 'A+', 'B+', 'A+', 'B', 'B+', 'B', 'B+', 'A', 'A+'),
('TCR15CS006', 'B+', 'B', 'A', 'B', 'B', 'F', 'B+', 'A+', 'B+'),
('TCR15CS007', 'O[S]', 'B', 'A+', 'A+', 'B', 'C', 'B+', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `course` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `course`, `password`) VALUES
(2, 'catherine', 'maths', '12345'),
(9, 'Alex', 'Theory Of  ', 'cryhavoc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Code`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`RegisterNumber`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
