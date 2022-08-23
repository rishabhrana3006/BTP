-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 12:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `page` varchar(10) NOT NULL,
  `S_No` int(11) NOT NULL,
  `User` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`page`, `S_No`, `User`) VALUES
('weekdays', 1, '19ucs066'),
('weekdays', 0, '19ucs082'),
('weekends', 4, '19ucs082'),
('weekdays', 4, '19ucs082'),
('weekends', 6, '19ucs082'),
('weekdays', 3, '19ucs082'),
('Tuesday', 6, '19ucs082'),
('Tuesday', 3, '19ucs082'),
('Tuesday', 3, '19ucs082'),
('Tuesday', 1, '19ucs082'),
('Tuesday', 3, '19ucs082'),
('Tuesday', 1, '19ucs082'),
('Tuesday', 3, '19ucs082'),
('Tuesday', 3, '19ucs082'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 2, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 2, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 1, '19ucc060'),
('Tuesday', 12, '19ucc060'),
('Tuesday', 12, '19ucc060'),
('Tuesday', 12, '19ucc060'),
('Tuesday', 2, '19ucs082');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Bus_Id` int(11) NOT NULL,
  `Availability` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `Capacity` int(11) NOT NULL,
  `Driver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Bus_Id`, `Availability`, `Capacity`, `Driver`) VALUES
(1, 'Yes', 40, 'Ramesh'),
(2, 'Yes', 18, 'Rishabh'),
(3, 'Yes', 25, 'Mukesh'),
(4, 'Yes', 30, 'Naman'),
(5, 'Yes', 30, 'Ayush'),
(6, 'No', 30, 'Ramesh'),
(7, 'Yes', 30, 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Name` varchar(50) NOT NULL,
  `Bus_No` int(1) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `License_Number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Name`, `Bus_No`, `Phone_No`, `License_Number`) VALUES
('Ramesh', 1, 987654321, 'ABCD12345H'),
('Naman', 2, 987654321, 'abvdd1234H'),
('Ram', 5, 123243423, 'dfsdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE `friday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '7:00 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(2, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(3, '9:00 AM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(4, '11:00 AM', 'LNMIIT', 'Raja Park', 1, 30),
(5, '11:45 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(6, '1:00 PM', 'Raja Park', 'LNMIIT', 1, 30),
(7, '1:30 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(8, '3:45 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(9, '4:00 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(10, '6:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(12, '8:00 PM', 'LNMIIT', 'Raja Park', 1, 30),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(14, '9:15 PM', 'Raja Park', 'LNMIIT', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE `monday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '7:00 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(2, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(3, '9:00 AM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(4, '11:00 AM', 'LNMIIT', 'Raja Park', 1, 30),
(5, '11:45 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(6, '1:00 PM', 'Raja Park', 'LNMIIT', 1, 30),
(7, '1:30 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(8, '3:45 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(9, '4:00 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(10, '6:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(12, '8:00 PM', 'LNMIIT', 'Raja Park', 1, 30),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(14, '9:15 PM', 'Raja Park', 'LNMIIT', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Date`, `Time`, `From_`, `To_`) VALUES
('27-05-2022', '8:00AM', 'LNMIIT', 'MANSAROVAR'),
('27-05-2022', '8:00AM', 'LNMIIT', 'MANSAROVAR'),
('5th June, 2022', '8:00 am', 'LNMIIT', 'Raja Park'),
('5th June, 2022', '8:00 am', 'LNMIIT', 'Raja Park'),
('6th June, 2022', '13:39:03', 'LNMIIT', 'Ajmeri Gate'),
('sdfdf', 'dfdfdf', 'dfdfdf', 'fdf');

-- --------------------------------------------------------

--
-- Table structure for table `saturday`
--

CREATE TABLE `saturday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saturday`
--

INSERT INTO `saturday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(2, '8:30 AM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(3, '10:30 AM', 'LNMIIT', 'Raja Park', 1, 30),
(4, '10:30 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(5, '1:00 PM', 'LNMIIT', 'Raja Park', 2, 30),
(6, '1:30 PM', 'Raja Park', 'LNMIIT', 1, 30),
(7, '3:00 PM', 'Raja Park', 'LNMIIT', 2, 30),
(8, '4:00 PM', 'LNMIIT', 'Raja Park', 1, 30),
(9, '5:00 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(10, '5:15 PM', 'Raja Park', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(12, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `student_points`
--

CREATE TABLE `student_points` (
  `roll_no` varchar(50) NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_points`
--

INSERT INTO `student_points` (`roll_no`, `points`) VALUES
('19ucc060', 0),
('19ucs082', 1100);

-- --------------------------------------------------------

--
-- Table structure for table `sunday`
--

CREATE TABLE `sunday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sunday`
--

INSERT INTO `sunday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(2, '8:30 AM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(3, '10:30 AM', 'LNMIIT', 'Raja Park', 1, 30),
(4, '10:30 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(5, '1:00 PM', 'LNMIIT', 'Raja Park', 2, 30),
(6, '1:30 PM', 'Raja Park', 'LNMIIT', 1, 30),
(7, '3:00 PM', 'Raja Park', 'LNMIIT', 2, 30),
(8, '4:00 PM', 'LNMIIT', 'Raja Park', 1, 30),
(9, '5:00 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(10, '5:15 PM', 'Raja Park', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(12, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE `thursday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '7:00 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(2, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(3, '9:00 AM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(4, '11:00 AM', 'LNMIIT', 'Raja Park', 1, 30),
(5, '11:45 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(6, '1:00 PM', 'Raja Park', 'LNMIIT', 1, 30),
(7, '1:30 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(8, '3:45 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(9, '4:00 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(10, '6:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(12, '8:00 PM', 'LNMIIT', 'Raja Park', 1, 30),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(14, '9:15 PM', 'Raja Park', 'LNMIIT', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`) VALUES
(1, '8:00AM', 'LNMIIT', 'RAJA PARK', '1'),
(2, '10:00AM', 'LNMIIT', 'RAJA PARK', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE `tuesday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '7:00 AM', 'Ajmeri Gate', 'LNMIIT', 2, 0),
(2, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 27),
(3, '9:00 AM', 'LNMIIT', 'Ajmeri Gate', 2, 25),
(4, '11:00 AM', 'LNMIIT', 'Raja Park', 1, 30),
(5, '11:45 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(6, '1:00 PM', 'Raja Park', 'LNMIIT', 1, 29),
(7, '1:30 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(8, '3:45 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(9, '4:00 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(10, '6:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(12, '8:00 PM', 'LNMIIT', 'Raja Park', 1, 27),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(14, '9:15 PM', 'Raja Park', 'LNMIIT', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE `wednesday` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL,
  `Seats` int(11) DEFAULT 30
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES
(1, '7:00 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(2, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(3, '9:00 AM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(4, '11:00 AM', 'LNMIIT', 'Raja Park', 1, 30),
(5, '11:45 AM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(6, '1:00 PM', 'Raja Park', 'LNMIIT', 1, 30),
(7, '1:30 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(8, '3:45 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(9, '4:00 PM', 'LNMIIT', 'Ajmeri Gate', 1, 30),
(10, '6:00 PM', 'Ajmeri Gate', 'LNMIIT', 1, 30),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 2, 30),
(12, '8:00 PM', 'LNMIIT', 'Raja Park', 1, 30),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2, 30),
(14, '9:15 PM', 'Raja Park', 'LNMIIT', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `weekdays`
--

CREATE TABLE `weekdays` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weekdays`
--

INSERT INTO `weekdays` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`) VALUES
(1, '7:00 AM', 'Ajmeri Gate', 'LNMIIT', 2),
(2, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1),
(3, '9:00 AM', 'LNMIIT', 'Ajmeri Gate', 2),
(4, '11:00 AM', 'LNMIIT', 'Raja Park', 1),
(5, '11:45 AM', 'Ajmeri Gate', 'LNMIIT', 2),
(6, '1:00 PM', 'Raja Park', 'LNMIIT', 1),
(7, '1:30 PM', 'LNMIIT', 'Ajmeri Gate', 2),
(8, '3:45 PM', 'Ajmeri Gate', 'LNMIIT', 2),
(9, '4:00 PM', 'LNMIIT', 'Ajmeri Gate', 1),
(10, '6:00 PM', 'Ajmeri Gate', 'LNMIIT', 1),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 2),
(12, '8:00 PM', 'LNMIIT', 'Raja Park', 1),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2),
(14, '9:15 PM', 'Raja Park', 'LNMIIT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weekends`
--

CREATE TABLE `weekends` (
  `S.No` int(11) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `From_` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `Bus.No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weekends`
--

INSERT INTO `weekends` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`) VALUES
(1, '8:00 AM', 'Ajmeri Gate', 'LNMIIT', 1),
(2, '8:30 AM', 'LNMIIT', 'Ajmeri Gate', 2),
(3, '10:30 AM', 'LNMIIT', 'Raja Park', 1),
(4, '10:30 AM', 'Ajmeri Gate', 'LNMIIT', 2),
(5, '1:00 PM', 'LNMIIT', 'Raja Park', 2),
(6, '1:30 PM', 'Raja Park', 'LNMIIT', 1),
(7, '3:00 PM', 'Raja Park', 'LNMIIT', 2),
(8, '4:00 PM', 'LNMIIT', 'Raja Park', 1),
(9, '5:00 PM', 'LNMIIT', 'Ajmeri Gate', 2),
(10, '5:15 PM', 'Raja Park', 'LNMIIT', 1),
(11, '6:15 PM', 'LNMIIT', 'Ajmeri Gate', 1),
(12, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 1),
(13, '9:00 PM', 'Ajmeri Gate', 'LNMIIT', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD UNIQUE KEY `Bus_Id` (`Bus_Id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD UNIQUE KEY `License_Number` (`License_Number`);

--
-- Indexes for table `student_points`
--
ALTER TABLE `student_points`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
