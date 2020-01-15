-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 01:57 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrocraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmerregistration`
--

CREATE TABLE `farmerregistration` (
  `farmer_id` int(255) NOT NULL,
  `farmer_name` varchar(255) NOT NULL,
  `farmer_phone` bigint(10) NOT NULL,
  `farmer_address` text NOT NULL,
  `farmer_state` varchar(50) NOT NULL,
  `farmer_district` varchar(50) NOT NULL,
  `farmer_pan` varchar(10) NOT NULL,
  `farmer_bank` int(16) NOT NULL,
  `farmer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`farmer_id`, `farmer_name`, `farmer_phone`, `farmer_address`, `farmer_state`, `farmer_district`, `farmer_pan`, `farmer_bank`, `farmer_password`) VALUES
(1, 'Abhishek', 8169193145, 'Mars', 'MAHARASHTRA', 'Thane', '1234567890', 2147483647, 'm8bf5+Y='),
(3, 'omkar', 7666610976, 'SEC -13 , PALM BEACH ROAD', 'KERALA', 'Alappuzha', '123ABC', 45745425, 'nMPb4g=='),
(5, 'Lokesh', 9029788504, 'SEC -13 , PALM BEACH ROAD', 'MAHARASHTRA', 'Nagpur', '1325355', 45745425, 'yw=='),
(6, 'same', 1231231212, 'addeees', 'JAMMU AND KASHMIR', 'Kupwara', '1232122121', 121321, 'yw=='),
(10, 'Mitesh Chhadva', 8191931145, '19/502,Fam chs ltd\r\nSector 11  koparkhairne', 'MAHARASHTRA', 'Nandurbar *', '656861651', 5465415, 'yw=='),
(11, 'Manali', 81919311489, '19/502,Fam chs ltd\r\n', 'JAMMU AND KASHMIR', 'Kupwara', '656861651', 5465415, 'yw=='),
(14, 'Manya', 8191931123, '19/502,Fam chs \r\nameri', 'JAMMU AND KASHMIR', 'Baramula', '6568616510', 54654101, 'yw=='),
(16, 'surli', 811212121212, '19/502,Fam chs \r\nameri', 'JAMMU AND KASHMIR', 'Baramula', '6568616510', 54654101, 'yw=='),
(17, 'asha', 9090991020, 'superman', 'JAMMU AND KASHMIR', 'Srinagar', '123123123', 3213213, 'yw=='),
(18, 'asjij', 123123, 'ameica', 'JAMMU AND KASHMIR', 'Srinagar', '121212121', 1212, 'yw=='),
(19, 'arama', 123122, 'australia', 'JAMMU AND KASHMIR', 'Badgam', '121212', 121211, 'yw=='),
(20, 'andami', 12321, 'askkkey', 'JAMMU AND KASHMIR', 'Badgam', '121218', 12127, 'yw=='),
(21, 'human', 1233, 'ansh', 'JAMMU AND KASHMIR', 'Badgam', '121218', 12127, 'yw=='),
(22, 'varma', 1111178718, 'jupiter', 'JAMMU AND KASHMIR', 'Badgam', '12131311', 22, 'yw=='),
(23, 'ashhhish', 121267676, 'asmaan', 'HIMACHAL PRADESH', 'Chamba', '1212222222', 2147483647, 'yw=='),
(24, 'ashhhish', 1212676790, 'asmaan', 'HIMACHAL PRADESH', 'Chamba', '1212222222', 2147483647, 'yw=='),
(25, 'ruchi', 121, 'juhinagar', 'HIMACHAL PRADESH', 'Kangra', '22', 1, 'yw=='),
(26, 'name', 22222, 'toonpur', 'HIMACHAL PRADESH', 'Kangra', '11', 11, 'yw=='),
(27, 'kargil', 22221, 'toonpur super', 'HIMACHAL PRADESH', 'Lahul & Spiti', '1212dw11', 223, 'yw=='),
(28, 'admi', 221, 'asam\r\n', 'HIMACHAL PRADESH', 'Kangra', '121211', 222, 'yw=='),
(29, 'robot', 111111221, 'asa1', 'HIMACHAL PRADESH', 'Lahul & Spiti', '12121', 2221, 'yw=='),
(30, 'robot shah', 112121, 'arya', 'HIMACHAL PRADESH', 'Lahul & Spiti', '12121', 2221, 'yw=='),
(32, 'robot farmer', 1121209, 'doremon', 'HIMACHAL PRADESH', 'Kullu', '12121', 2221189, 'yw=='),
(33, 'robot schema', 1121208, 'doremon nobita', 'HIMACHAL PRADESH', 'Kullu', '12129+', 222118, 'yw=='),
(34, 'ashhhish chanchali', 1212676799, 'asmeta', 'HIMACHAL PRADESH', 'Mandi', '1212222222', 2147483647, 'yw=='),
(35, 'ashhhish chanchali', 1212679799, 'asmeta', 'HIMACHAL PRADESH', 'Mandi', '1212222222', 2147483647, 'yw=='),
(36, 'arpita', 1212332, 'asmeta upra', 'HIMACHAL PRADESH', 'Hamirpur', '1212222222', 2147483647, 'yw=='),
(38, 'robot aunty', 1121202, 'iten', 'HIMACHAL PRADESH', 'Una', '121129', 22219, 'yw==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  ADD PRIMARY KEY (`farmer_id`),
  ADD UNIQUE KEY `farmer_id` (`farmer_id`),
  ADD UNIQUE KEY `farmer_phone` (`farmer_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
