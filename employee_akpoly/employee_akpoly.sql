-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 05:00 PM
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
-- Database: `employee_akpoly`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(150) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `password` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `employee_type` varchar(60) NOT NULL,
  `date_appointment` varchar(20) NOT NULL,
  `basic_salary` varchar(60) NOT NULL,
  `gross_pay` varchar(60) NOT NULL,
  `status` varchar(1) NOT NULL,
  `leave_status` varchar(20) NOT NULL,
  `photo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`id`, `employeeID`, `fullname`, `password`, `sex`, `email`, `dob`, `phone`, `address`, `qualification`, `dept`, `employee_type`, `date_appointment`, `basic_salary`, `gross_pay`, `status`, `leave_status`, `photo`) VALUES
(8, 'STAFF/FKP/2024/3914', 'VO  THIEN VU ', 'V123456', 'Male', 'vuvu@gmail.com', '', '0913678555', '', '', 'Security', 'Academic', '', '10000', '10000', '1', 'Not Available', 'uploadImage/Profile/2.png'),
(9, 'STAFF/FKP/2024/4175', 'NGUYEN THANH DUY', 'D111111', 'Male', 'duy@gmail.com', '', '0846777888', '', '', 'Security', 'Academic', '', '20000', '20000', '1', 'Not Available', 'uploadImage/Profile/User.png'),
(10, 'STAFF/FKP/2024/3798', 'NGUYEN PHAN HOAI NAM ', 'N222222', 'Male', 'nam@gmail.com', '', '0123456789', '', '', 'Security', 'Academic', '', '30000', '30000', '1', 'Not Available', 'uploadImage/Profile/boy 2.jpg'),
(11, 'STAFF/FKP/2024/3583', 'NGUYEN MINH TRI', 'T333333', 'Male', 'tri@gmail.com', '', '0856222333', '', '', 'Security', 'Academic', '', '40000', '40000', '1', 'Not Available', 'uploadImage/Profile/2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblleave`
--

CREATE TABLE `tblleave` (
  `ID` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `leaveID` varchar(6700) NOT NULL,
  `start_date` varchar(25) NOT NULL,
  `end_date` varchar(25) NOT NULL,
  `reason` varchar(5000) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblleave`
--

INSERT INTO `tblleave` (`ID`, `email`, `leaveID`, `start_date`, `end_date`, `reason`, `status`) VALUES
(15, 'vuvu@gmail.com', '2024473', '2024-06-05', '2024-06-06', 'Study Leave', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblroutines`
--

CREATE TABLE `tblroutines` (
  `id` int(15) NOT NULL,
  `employeeid` varchar(255) NOT NULL,
  `placeid` varchar(255) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblroutines`
--

INSERT INTO `tblroutines` (`id`, `employeeid`, `placeid`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(34, 'STAFF/FKP/2024/3914', 'BINHDUONG', '6h-12h', 'OFF', '12h-18h', '6h-12h', 'OFF', '12h-18h', '12h-18h'),
(35, 'STAFF/FKP/2024/4175', 'HANOI', '12h-18h', 'OFF', '12h-18h', 'OFF', '12h-18h', '6h-12h', '12h-18h'),
(36, 'STAFF/FKP/2024/3798', 'THANHHOA', '6h-12h', 'OFF', '6h-12h', '12h-18h', '6h-12h', '12h-18h', '6h-12h'),
(37, 'STAFF/FKP/2024/3583', 'BINHTHUAN', '12h-18h', '6h-12h', '12h-18h', '6h-12h', '12h-18h', '6h-12h', '12h-18h');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(12) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `fullname` varchar(34) NOT NULL,
  `photo` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `phone`, `fullname`, `photo`) VALUES
('admin', 'admin123', '0905656', 'Nguyen Duc Tri', 'uploadImage/Profile/User.png');

-- --------------------------------------------------------

--
-- Table structure for table `work_schedule`
--

CREATE TABLE `work_schedule` (
  `id` int(11) NOT NULL,
  `date_worked` date DEFAULT NULL,
  `hours_worked` int(11) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_schedule`
--

INSERT INTO `work_schedule` (`id`, `date_worked`, `hours_worked`, `employee_id`) VALUES
(1, '2024-06-03', 6, 'STAFF/FKP/2024/4175'),
(2, '2024-06-04', 6, 'STAFF/FKP/2024/4175'),
(3, '2024-06-05', 6, 'STAFF/FKP/2024/3798'),
(4, '2024-06-06', 6, 'STAFF/FKP/2024/4175'),
(5, '2024-06-07', 6, 'STAFF/FKP/2024/3798'),
(6, '2024-06-08', 6, 'STAFF/FKP/2024/3914');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tblleave`
--
ALTER TABLE `tblleave`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblroutines`
--
ALTER TABLE `tblroutines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `work_schedule`
--
ALTER TABLE `work_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblleave`
--
ALTER TABLE `tblleave`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblroutines`
--
ALTER TABLE `tblroutines`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `work_schedule`
--
ALTER TABLE `work_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
