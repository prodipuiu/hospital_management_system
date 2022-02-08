-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 06:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Phone`, `address`) VALUES
(9, 'kala', '6875757658', 'chitta');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_no` int(11) NOT NULL,
  `Treatment_charge` int(11) NOT NULL,
  `Bed_charge` int(11) NOT NULL,
  `Other_charge` int(11) NOT NULL,
  `Total_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_no`, `Treatment_charge`, `Bed_charge`, `Other_charge`, `Total_bill`) VALUES
(1, 1200, 2300, 800, 4300),
(2, 5709, 56, 300, 800),
(4, 1800, 300, 700, 2800),
(5, 3534, 3434, 3434, 343484878);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctors_name` varchar(40) NOT NULL,
  `Doctors_id` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Departmen` varchar(50) NOT NULL,
  `Phone_number` varchar(30) NOT NULL,
  `Room_incharge` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctors_name`, `Doctors_id`, `Gender`, `Departmen`, `Phone_number`, `Room_incharge`, `salary`) VALUES
('dr.prodip', 1, 'male', 'oot', '0976634', 406, 33533),
('maliya', 2, 'femae', 'plajuka', '444544', 309, 389484),
('dr.amam', 3, 'female', 'OTT', '98776657', 50889, 789057);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_credit_money`
--

CREATE TABLE `hospital_credit_money` (
  `doctors_totall` int(11) NOT NULL,
  `nurse_toall` int(11) NOT NULL,
  `others_toall` int(11) NOT NULL,
  `totall_credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_credit_money`
--

INSERT INTO `hospital_credit_money` (`doctors_totall`, `nurse_toall`, `others_toall`, `totall_credit`) VALUES
(109376, 373527, 376635, 48494759);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Nurse_name` varchar(40) NOT NULL,
  `Nurse_id` int(11) NOT NULL,
  `Room_incharge` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Nurse_name`, `Nurse_id`, `Room_incharge`) VALUES
('shefali', 1, '406'),
('aysha', 2, '309');

-- --------------------------------------------------------

--
-- Table structure for table `paitient`
--

CREATE TABLE `paitient` (
  `Paitient_id` int(11) NOT NULL,
  `Paitient_name` varchar(30) NOT NULL,
  `Paitient_gender` varchar(30) NOT NULL,
  `Paitient_age` int(11) NOT NULL,
  `Blood_group` varchar(30) NOT NULL,
  `Paitient_Address` varchar(40) NOT NULL,
  `Paitient_phone` varchar(30) NOT NULL,
  `Room` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paitient`
--

INSERT INTO `paitient` (`Paitient_id`, `Paitient_name`, `Paitient_gender`, `Paitient_age`, `Blood_group`, `Paitient_Address`, `Paitient_phone`, `Room`) VALUES
(1, 'rafee', 'male', 24, '0-', 'dhaka', '837647637', '406'),
(2, 'archar', 'male', 34, 'AB+', 'dhaka', '097667845', '309'),
(4, 'mama', 'mks', 34, 'ww', 'kfk', '343334', '343');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_type` varchar(40) NOT NULL,
  `Room_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_type`, `Room_number`) VALUES
('non ac', 203),
('Ac', 650);

-- --------------------------------------------------------

--
-- Table structure for table `test_report`
--

CREATE TABLE `test_report` (
  `Report_id` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Paitent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_report`
--

INSERT INTO `test_report` (`Report_id`, `Description`, `Paitent_id`) VALUES
(4, 'pop', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_no`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctors_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`Nurse_id`);

--
-- Indexes for table `paitient`
--
ALTER TABLE `paitient`
  ADD PRIMARY KEY (`Paitient_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_number`);

--
-- Indexes for table `test_report`
--
ALTER TABLE `test_report`
  ADD PRIMARY KEY (`Report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `Nurse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paitient`
--
ALTER TABLE `paitient`
  MODIFY `Paitient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `test_report`
--
ALTER TABLE `test_report`
  MODIFY `Report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
