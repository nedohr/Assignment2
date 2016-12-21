-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 01:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Years_Of_Experience` int(11) NOT NULL,
  `Industry` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `About_Me` varchar(50) NOT NULL,
  `Professional_Title` varchar(50) NOT NULL,
  `Career_Level` varchar(50) NOT NULL,
  `Communication_Level` varchar(50) NOT NULL,
  `Organizational_Level` varchar(50) NOT NULL,
  `Job_Level` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Profile_Picture` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`ID`, `First_Name`, `Last_Name`, `Gender`, `Date_Of_Birth`, `Years_Of_Experience`, `Industry`, `Location`, `About_Me`, `Professional_Title`, `Career_Level`, `Communication_Level`, `Organizational_Level`, `Job_Level`, `Email`, `Address`, `Phone`, `Website`, `Profile_Picture`) VALUES
(1, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'i love mi wife', 'Director', 'Intermediate', '26-50%', '26-50%', 'Medium', 'steve@smail.xom', 'kingston@k.com', 2147483647, 'http://www.google.com', ''),
(2, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'jgdyrsteragwdfsv', 'Director', 'Expert', '0-25%', '0-25%', 'Junior', 'steve@smail.xom', 'Guava Ridge District', 2147483647, 'www.google.com', 'image'),
(3, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'yjthrdytgerffds', 'Director', 'Entry', '76-100%', '76-100%', 'Medium', 'steve@smail', 'Guava Ridge District', 2147483647, 'http://www.google.com', 'image'),
(4, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'Business', 'Kingston', 'hkyfutdysrtearvADCZ', 'President', 'Intermediate', '51-75%', '51-75%', 'Medium', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', 'image'),
(5, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(6, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(7, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(8, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(9, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(10, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(11, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(12, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'kjkhgf', 'Director', 'Entry', '51-75%', '51-75%', 'Senior', 'steve@smail.com', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(13, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'IT', 'Kingston', 'sdtygulhklutyt', 'Director', 'Entry', '0-25%', '0-25%', 'Junior', 'steve@smail.xom', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(14, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'Business', 'Kingston', 'hdjfckv,n.b/. ', 'President', 'Intermediate', '0-25%', '0-25%', 'Medium', 'steve@smail.xom', 'Guava Ridge District', 2147483647, 'http://www.google.com', ''),
(15, 'Steve', 'Rhoden', 'Male', '2016-12-08', 10, 'Medicine', 'Kingston', 'l;piyukhfvlb, ', 'President', 'Intermediate', '0-25%', '26-50%', 'Medium', 'steve@smail.xom', 'Guava Ridge District', 2147483647, 'http://www.google.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
