-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1033.awardspace.net
-- Generation Time: Jan 20, 2024 at 10:14 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3997385_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fname` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `profile` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `msg` varchar(60) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `lname`, `profile`, `designation`, `msg`) VALUES
('Shreya', 'Ghosle', 'the-swastika-russia-slavs-kolovrat-wallpaper-preview.jpg', 'Professor', 'Good'),
('shaijal', 'shrivastav', '', 'student', 'Thankyou'),
('Radha', 'Soni', 'the-swastika-russia-slavs-kolovrat-wallpaper-preview.jpg', 'Software Engineer', 'It is a nice platform!');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `subject` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `notes` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`subject`, `unit`, `notes`) VALUES
('C Language', 'Unit 1', 'CL-U-1.pdf'),
('Operating System', 'Unit 1', 'Unit 1 - Operating System - www.rgpvnotes.in.pdf'),
('Mathematics', 'Unit 2', 'OperaSetup.exe'),
('Operating System', 'Unit 2', 'final-ppt (1).pptx');

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `subject` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `notes` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester2`
--

INSERT INTO `semester2` (`subject`, `unit`, `notes`) VALUES
('DBMS', 'Unit 1', 'DBMS-U-1.pdf'),
('DBMS', 'Unit 4', 'DBMS-U-1.pdf'),
('Computer Network', 'Unit 1', 'DM-U-1.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `subject` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `notes` varchar(70) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`subject`, `unit`, `notes`) VALUES
('Data Mining', 'Unit 1', 'DM-U-1.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `subject` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `notes` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `conpass` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `pass`, `conpass`) VALUES
('admin@gmail.com', '12345', '12345'),
('ankur@gmail.com', 'Ankur12345#', 'Ankur12345#'),
('bhavesh@gmail.com', 'Bhavesh#12345', 'Bhavesh#12345'),
('priyank@gmail.com', 'Priyank!12345', 'Priyank!12345'),
('shaijal@gmail.com', 'Shaijal@123', 'Shaijal@123'),
('shruti@gmail.com', 'Shruti@123456', 'Shruti@123456'),
('vinu@gmail.com', 'Vinu@123456', 'Vinu@123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
