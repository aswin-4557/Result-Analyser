-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 10:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `RegisterNumber` varchar(15) DEFAULT NULL,
  `MA101` varchar(5) DEFAULT NULL,
  `CY100` varchar(5) DEFAULT NULL,
  `BE110` varchar(5) DEFAULT NULL,
  `BE10103` varchar(5) DEFAULT NULL,
  `BE103` varchar(5) DEFAULT NULL,
  `EC100` varchar(5) DEFAULT NULL,
  `CY110` varchar(5) DEFAULT NULL,
  `EE110` varchar(5) DEFAULT NULL,
  `EC110` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`RegisterNumber`, `MA101`, `CY100`, `BE110`, `BE10103`, `BE103`, `EC100`, `CY110`, `EE110`, `EC110`) VALUES
('TCR15EE001', 'B+', 'C', 'F', 'B', 'B', 'C', 'A+', 'B+', 'A'),
('TCR15EE002', 'O[S]', 'B+', 'A+', 'B', 'A', 'B', 'O[S]', 'A', 'O[S]'),
('TCR15EE003', 'O[S]', 'B+', 'B+', 'A+', 'B+', 'B+', 'O[S]', 'A+', 'A'),
('TCR15EE004', 'A', 'B+', 'F', 'C', 'B', 'C', 'O[S]', 'A+', 'A'),
('TCR15EE005', 'A+', 'B+', 'F', 'B', 'B+', 'C', 'O[S]', 'A', 'A+'),
('TCR15EE006', 'B', 'C', 'B+', 'C', 'B+', 'F', 'A', 'A+', 'A+'),
('TCR15EE007', 'B+', 'C', 'F', 'C', 'B', 'F', 'A', 'B+', 'A'),
('TCR15EE008', 'A+', 'B+', 'B+', 'B', 'B+', 'B', 'O[S]', 'A+', 'O[S]'),
('TCR15EE009', 'A+', 'B', 'B+', 'B', 'B', 'F', 'A+', 'A+', 'O[S]'),
('TCR15EE010', 'A', 'C', 'F', 'C', 'B', 'P', 'O[S]', 'A+', 'A+'),
('', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
