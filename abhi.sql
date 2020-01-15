-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 02:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
(4, 'Ram', 1234567890, 'Moon', 'MahaRASHTRA', 'Nagpur', '123ABC', 211324654, 'm8bf5+Y='),
(5, 'Lokesh', 9029788504, 'SEC -13 , PALM BEACH ROAD', 'MAHARASHTRA', 'Nagpur', '1325355', 45745425, 'yw=='),
(6, 'Ramlal', 8169193101, 'Address 1', 'WEST BENGAL', 'Darjiling', '1234567899', 2147483647, 'yw=='),
(7, 'Chirag', 8169193102, 'Address 2', 'WEST BENGAL', 'Darjiling', '5341874510', 2147483647, 'yw=='),
(8, 'Gladina', 8169193103, 'Address 3', 'WEST BENGAL', 'Jalpaiguri', '6846516843', 2147483647, 'yw=='),
(9, 'neeta', 9969271000, 'add1', 'HIMACHAL PRADESH', 'Chamba', '3263062', 56878613, 'yw=='),
(10, 'meeta', 9969271001, 'add2', 'HIMACHAL PRADESH', 'Kullu', '2983473057', 2147483647, 'yw=='),
(11, 'melissa', 9969271002, 'add3', 'HIMACHAL PRADESH', 'Kullu', '65416541', 454586125, 'yw=='),
(12, 'jon', 9969271004, 'add5', 'HIMACHAL PRADESH', 'Chamba', '24685435', 248654352, 'yw=='),
(13, 'daenarys', 9969271007, 'add5', 'HIMACHAL PRADESH', 'Solan', '45674852', 3216415, 'yw=='),
(14, 'drogon', 9969271006, 'add7', 'HIMACHAL PRADESH', 'Solan', '246856873', 2147483647, 'yw=='),
(16, 'Bran', 9969271009, 'add10\r\n', 'LAKSHADWEEP', 'Lakshadweep', '3549685416', 65464851, 'yw=='),
(17, 'lyanna', 9969271010, 'add10', 'LAKSHADWEEP', 'Lakshadweep', '2456435', 21544232, 'yw=='),
(18, 'catelyn', 9969271011, 'add115', 'MADHYA PRADESH', 'Rewa', '574542', 3846835, 'yw=='),
(19, 'Sansa', 9969271012, 'add 17', 'GOA', 'North Goa', '2456843', 3468651, 'yw=='),
(20, 'Rachel', 9969271015, 'add20', 'GOA', 'North Goa', '274635213', 27486513, 'yw=='),
(21, 'Joanna', 9969271021, 'add16', 'GOA', 'South Goa', '24756215', 24568536, 'yw=='),
(22, 'Arya', 9969271019, 'add17', 'GOA', 'South Goa', '2458742884', 249685547, 'yw=='),
(23, 'Andy', 9969271020, 'add19', 'HARYANA', 'Rohtak', '255451025', 54564684, 'yw=='),
(25, 'stark', 9969271030, 'add29', 'DAMAN AND DIU', 'Diu', '54584646.', 541564564, 'yw=='),
(26, 'hound', 9969272021, 'add23', 'DAMAN AND DIU', 'Daman', '2545498', 524845638, 'yw=='),
(27, 'Ryte Richard', 9852147852, 'add45', 'TAMIL NADU', 'Nagapattinam *', '54584636', 254685746, 'yw=='),
(29, 'John', 8169193106, 'Address 7', 'JHARKAND', 'Garhwa *', '656', 168, 'yw=='),
(30, 'Rogan', 8169193109, 'Address56', 'JHARKAND', 'Garhwa *', '54664851', 6455415, 'yw=='),
(31, 'Swaarop', 816919320, 'Address 23', 'JHARKAND', 'Garhwa *', '6416545', 4646544, 'yw=='),
(32, 'Jesudas', 8169193121, 'Address 56', 'JHARKAND', 'Palamu', '4515214', 544613515, 'yw=='),
(33, 'same', 1231231212, 'addeees', 'JAMMU AND KASHMIR', 'Kupwara', '1232122121', 121321, 'yw=='),
(34, 'Mitesh Chhadva', 8191931145, '19/502,Fam chs ltd\r\nSector 11  koparkhairne', 'MAHARASHTRA', 'Nandurbar *', '656861651', 5465415, 'yw=='),
(35, 'Manali', 81919311489, '19/502,Fam chs ltd\r\n', 'JAMMU AND KASHMIR', 'Kupwara', '656861651', 5465415, 'yw=='),
(36, 'Manya', 8191931123, '19/502,Fam chs \r\nameri', 'JAMMU AND KASHMIR', 'Baramula', '6568616510', 54654101, 'yw=='),
(37, 'surli', 811212121212, '19/502,Fam chs \r\nameri', 'JAMMU AND KASHMIR', 'Baramula', '6568616510', 54654101, 'yw=='),
(38, 'asha', 9090991020, 'superman', 'JAMMU AND KASHMIR', 'Srinagar', '123123123', 3213213, 'yw=='),
(39, 'asjij', 123123, 'ameica', 'JAMMU AND KASHMIR', 'Srinagar', '121212121', 1212, 'yw=='),
(40, 'arama', 123122, 'australia', 'JAMMU AND KASHMIR', 'Badgam', '121212', 121211, 'yw=='),
(41, 'andami', 12321, 'askkkey', 'JAMMU AND KASHMIR', 'Badgam', '121218', 12127, 'yw=='),
(42, 'human', 1233, 'ansh', 'JAMMU AND KASHMIR', 'Badgam', '121218', 12127, 'yw=='),
(43, 'varma', 1111178718, 'jupiter', 'JAMMU AND KASHMIR', 'Badgam', '12131311', 22, 'yw=='),
(44, 'ashhhish', 121267676, 'asmaan', 'HIMACHAL PRADESH', 'Chamba', '1212222222', 2147483647, 'yw=='),
(45, 'ashhhish', 1212676790, 'asmaan', 'HIMACHAL PRADESH', 'Chamba', '1212222222', 2147483647, 'yw=='),
(46, 'ruchi', 121, 'juhinagar', 'HIMACHAL PRADESH', 'Kangra', '22', 1, 'yw=='),
(47, 'name', 22222, 'toonpur', 'HIMACHAL PRADESH', 'Kangra', '11', 11, 'yw=='),
(48, 'kargil', 22221, 'toonpur super', 'HIMACHAL PRADESH', 'Lahul & Spiti', '1212dw11', 223, 'yw=='),
(49, 'admi', 221, 'asam\r\n', 'HIMACHAL PRADESH', 'Kangra', '121211', 222, 'yw=='),
(50, 'robot', 111111221, 'asa1', 'HIMACHAL PRADESH', 'Lahul & Spiti', '12121', 2221, 'yw=='),
(51, 'robot shah', 112121, 'arya', 'HIMACHAL PRADESH', 'Lahul & Spiti', '12121', 2221, 'yw=='),
(52, 'robot farmer', 1121209, 'doremon', 'HIMACHAL PRADESH', 'Kullu', '12121', 2221189, 'yw=='),
(53, 'robot schema', 1121208, 'doremon nobita', 'HIMACHAL PRADESH', 'Kullu', '12129+', 222118, 'yw=='),
(54, 'ashhhish chanchali', 1212676799, 'asmeta', 'HIMACHAL PRADESH', 'Mandi', '1212222222', 2147483647, 'yw=='),
(55, 'ashhhish chanchali', 1212679799, 'asmeta', 'HIMACHAL PRADESH', 'Mandi', '1212222222', 2147483647, 'yw=='),
(56, 'arpita', 1212332, 'asmeta upra', 'HIMACHAL PRADESH', 'Hamirpur', '1212222222', 2147483647, 'yw=='),
(57, 'robot aunty', 1121202, 'iten', 'HIMACHAL PRADESH', 'Una', '121129', 22219, 'yw==');

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
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
