-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 02:55 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abid`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SL_No` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` text NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SL_No`, `Email`, `Subject`, `Message`) VALUES
(1, 'aaa@gmail.com', 'bbb', 'ajkdjkdsjcajkakjcnjkzcnjakcnjksdadcn'),
(2, 'bbb@gmail.com', 'assdff', 'jksdnfsfsdlnfklsdnflksdfklsdfklsfcslk'),
(3, 'jskdndsk@gmail.com', 'aaaaa', 'dskjafnlksafnmlkamfclakmfcklanfckla'),
(4, 'thaherkhan70@gmail.com', 'PHYSICS', 'NEED A GOOD TEACHER');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SL_No` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `Title` varchar(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Date_Birth` date NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Dept_Class` varchar(50) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Tuition_Area` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SL_No`, `Email`, `Password`, `Confirm_Password`, `Title`, `First_Name`, `Last_Name`, `Gender`, `Address`, `City`, `Date_Birth`, `Mobile`, `Level`, `Dept_Class`, `Institute`, `Tuition_Area`, `Time`, `Subject`, `Salary`) VALUES
(12, 'Kanon@gmail.com', '987', '987', 'Mrs.', 'PPP', 'QQQ', 'Female', '', 'Sylhet', '2002-09-09', '+8801728465978', 'Heigher Secondary', '12', 'Can. public', 'Tilaghor', '7 pm - 9 pm', 'Chem, Math', '3500'),
(9, 'qrst@gmail.com', '12345', '12345', 'Mr.', 'EEE', 'FFF', 'Male', '', 'Sylhet', '2004-06-22', '+880147853786', 'Secondary', '9', 'Govt. Pilot School', 'Kalighat, Sylhet', '7 pm to 8;30 pm', 'Phy, Chem, Math', '3500'),
(10, 'uvwx@gmail.com', '123', '123', 'Mrs.', 'GGG', 'HHH', 'Female', '', 'Sylhet', '2004-03-06', '+88014589663', 'Secondary', '9', 'Blue Bird', 'Mirzajangal', '7 pm - 8 pm', 'Phy, Chem, Math', '3000-3500'),
(11, 'wxyz@gmail.com', '54321', '54321', 'Mr.', 'KKK', 'LLL', 'Male', '', 'Sylhet', '2002-11-12', '+8801758974231', 'Heigher Secondary', '11', 'MC', 'Shibgonj', '7 pm - 9 pm', 'Phy, Math', '3000-4000');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `SL_No` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `Title` varchar(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Date_Birth` date NOT NULL,
  `Mobile` varchar(14) NOT NULL,
  `Level_Education` varchar(20) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Dept_Class` varchar(50) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Exe_Area` varchar(100) NOT NULL,
  `Ava_Time` varchar(50) NOT NULL,
  `Exe_Class` varchar(100) NOT NULL,
  `Pref_Subject` text NOT NULL,
  `Exe_Salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`SL_No`, `Email`, `Password`, `Confirm_Password`, `Title`, `First_Name`, `Last_Name`, `Gender`, `Address`, `City`, `Date_Birth`, `Mobile`, `Level_Education`, `Degree`, `Dept_Class`, `Institute`, `Exe_Area`, `Ava_Time`, `Exe_Class`, `Pref_Subject`, `Exe_Salary`) VALUES
(12, 'abcd@gmail.com', '12345', '12345', 'Mr.', 'AAA', 'ZZZ', 'Male', 'ABCDEF', 'Sylhet', '1995-05-12', '+880123456789', 'Bachelor/Honors', 'BSc', 'CSE', 'NEUB', 'Sylhet', '5:00 pm-9:00 pm', '8,9,10', 'Phy, Math, ICT', '2500-3500'),
(13, 'efgh@gmail.com', '12345', '12345', 'Mrs.', 'BBB', 'YYY', 'Female', 'WXYZ', 'Dhaka', '1996-02-22', '+880123456789', 'Bachelor/Honors', 'BSc', 'EEE', 'SUST', 'Sylhet', '4:00 pm - 8:00 pm', '9,10,11,12', 'Phy, Chem, Math', '3000-4000'),
(14, 'ijkl@gmail.com', '12345', '12345', 'Mr.', 'CCC', 'XXX', 'Male', 'Sylhet', 'Sylhet', '1996-05-05', '+88017895342', 'Bachelor/Honors', 'BSc', 'IPE', 'SUST', 'Sylhet', '4:00 pm - 10:00 pm', '8,9,10,11,12', 'Phy, Chem, Math, Eng', '3000-5000'),
(15, 'mnop@gmail.com', '12345', '12345', 'Mrs.', 'DDD', 'WWW', 'Female', 'KLMNOP', 'Sylhet', '1997-12-11', '+880185674923', 'Bachelor/Honors', 'BSc', 'CPE', 'SUST', 'Sylhet', '4:00 pm - 8:00 pm', '8,9,10,11,12', 'Chem, Phy, Math, Eng', '3000 - 5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `SL NO Fed` (`SL_No`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `SL NO st` (`SL_No`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `SL_No` (`SL_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SL_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `SL_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `SL_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
