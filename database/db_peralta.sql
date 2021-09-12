-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 04:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peralta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `apt_id` int(11) NOT NULL,
  `apt_fname` varchar(255) NOT NULL,
  `apt_lname` varchar(255) NOT NULL,
  `apt_minit` varchar(255) NOT NULL,
  `apt_contactno` varchar(255) NOT NULL,
  `apt_address` varchar(255) NOT NULL,
  `apt_patient_type` varchar(255) NOT NULL,
  `apt_time` varchar(255) NOT NULL,
  `apt_visit_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`apt_id`, `apt_fname`, `apt_lname`, `apt_minit`, `apt_contactno`, `apt_address`, `apt_patient_type`, `apt_time`, `apt_visit_reason`) VALUES
(26, 'Jeffrey', 'Lozada', '0', '09123123123', 'Fatima Extension, Dasmarinas', 'Existing', '2021-09-22 11:15', 'checkup'),
(27, 'Didz', 'Arcilla', 'O', '0931231', 'Area C', 'Existing', '2021-09-16 9:15', 'Inquiry of Products'),
(28, 'Juan', 'John', 'J', '09312312', 'Laguna', 'Existing', '2021-09-16 8:00', 'Cat Checkup'),
(29, 'Pedro', 'Peter', 'P', '09312312', 'Batangas', 'New', '2021-09-16 7:15', 'Check up Bird'),
(30, 'Anna', 'Anne', 'A', '09321312', 'Batangas City', 'New', '2021-09-22 9:20 PM', 'Check up Dogs and Cats'),
(31, 'Luffy', 'Monkey', 'D', '092312312', 'One Piece', 'Existing', '2021-09-22 9:15', 'One Piece'),
(32, 'Marco', 'Phoenix', 'D', '09312312', 'Whitebeard Pirates', 'New', '2021-09-14 11:11', 'Whitebeard visit'),
(33, 'STUDENTD', '2D', 'AD', '092312311', 'AAAAAAD', 'Existing', '2021-09-17 12:18', 'REASON SAMPLEDD'),
(34, 'Employee', 'Peralta', 'O', '092312312', 'Dasmarinas Pet Clinic', 'Existing', '2021-09-19 11:00', 'HOLIDAY'),
(35, 'Employee 11', 'Peralta 1', 'O', '0912312312', 'PERALTA CLINIC 1', 'Existing', '2021-09-28 11:00', 'BIRTHDAY 11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`apt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `apt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
