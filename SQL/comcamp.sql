-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 03:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `userID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`userID`, `username`, `password`, `name`, `status`) VALUES
(1, '5904101372', '5904101372', 'ศุภกิจ จี้สละ', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `FilesID` int(4) NOT NULL,
  `Name` text NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`FilesID`, `Name`, `FilesName`) VALUES
(2, '123', 'cs002.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  `age` varchar(2) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `parent` varchar(30) NOT NULL,
  `phoneparent` varchar(10) NOT NULL,
  `school` varchar(30) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `phoneteacher` varchar(10) NOT NULL,
  `allergic` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `slip` varchar(100) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `username`, `password`, `firstname`, `lastname`, `nickname`, `age`, `birthdate`, `gender`, `email`, `phone`, `address`, `parent`, `phoneparent`, `school`, `degree`, `teacher`, `phoneteacher`, `allergic`, `religion`, `status`, `slip`, `payment`) VALUES
(41, 'dom', '1234', 'ศุภกิจ', 'จี้สละ', 'ดอม', '0', '1997-01-03', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 ตำบลแม่ไร่ อำเภอแม่จัน จังหวัดเชียงราย 57240', 'นายแก้ว', '06109742', 'โรงเรียนเทศบาล 6 นครเชียงราย', 'มัธยมศึกษาปีที่ 5', 'ดัสกร ทองเหลา', '06109742', 'แมลง, กุ้งฝอย', 'พุทธ', 'admin', 'nature2.jpg', '1'),
(42, 'earth', '1234', 'ศักสิทธิ์', 'แสงแก้ว', 'เอิ้ต', '0', '2019-02-14', 'ชาย', 'dom.supakit@gmail.com', '031487593', 'sadsadsd', 'SUPAKIT JEESALA', '+666109742', 'เชียงใหม่วิทยาคม', 'ม.6', 'ดัสกร ทองเหลา', '+666109742', 'ventable', 'คริสต์', 'user', '09.jpg', '1'),
(43, 'dommerer', '12345678', 'Supakit', 'Jeesala', 'dommerer', '0', '2019-02-16', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '+666109742', 'โรงเรียนสันทรายวิทยาคม', 'fdsf', 'ดัสกร ทองเหลา', '+666109742', 'หมู', 'อิสลาม', 'user', '03.jpg', '1'),
(50, 'aaa', '1234', 'aaaaaab', 'aaaaaa', 'aaa', '0', '2019-02-10', 'aaaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'user', '06.jpg', '1'),
(51, 'bbb', '1234', 'bbbb1111', 'bbbb', 'bbbb', '0', '2019-02-10', 'bbb', 'bb@gmail.com', 'bbb', 'bbb', 'bb', 'bbb', 'bbb', 'bbb', 'bbb', 'bb', 'bbb', 'bbb', 'user', 'nature3.jpg', '1'),
(54, 'bas', '1234', 'เอกภพ', 'เป็งธรรม', 'บาส', '3', '2016-02-03', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'ปัญญา เป็งธรรม', '0547896325', 'โรงเรียนเทศบาลวัดหนองแขม', 'ม. 6', 'บัญชา แม่ทา', '0214569852', 'ฉันแพ้ทางคนอย่างเธอ', 'พุทธ', 'user', '', '2'),
(53, 'aof', '1234', 'นฤเบศก์', 'แก้วสาตรร', 'อ๊อฟ', '22', '1997-01-04', 'ชาย', 'aoffy@gmail.com', '0123547896', '789/2 เชียงใหม่', 'สมพงษ์ แก้วสาตร', '0887452145', 'โรงเรียนบ้านหนองป่าหี้', 'ม.5', 'เอเดน อาซาร์', '047896521', 'ยาคูล', 'พุทธ', '', '', '2'),
(55, 'mee', '1234', 'mmm', 'mmmm', 'mmmm', '0', '2019-02-09', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '0610974213', 'เชียงใหม่วิทยาคม', 'ม.6', 'เผ็ญศรี สมควร', '0610974213', 'หมู', 'คริสต์', 'user', '', '2'),
(56, 'hhh', '1234', 'hhh', 'hhh', 'hhh', '22', '1997-01-03', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', '', '', ''),
(57, 'ggg', '1234', 'ggg', 'ggg', 'ggg', 'gg', '1997-01-03', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', '', '', '2'),
(58, 'uuu', '1234', 'uuuu', 'uuuu', 'uuuu', '6', '2013-03-08', 'หญิง', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '0610974213', 'โรงเรียนสันทรายวิทยาคม', 'ม.6', 'เผ็ญศรี สมควร', '0610974213', 'หมู', 'อิสลาม', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `FilesID` int(4) NOT NULL,
  `Name` text NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`FilesID`, `Name`, `FilesName`) VALUES
(1, 'ค่ายยุวชนค', 'nature4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`FilesID`, `Name`, `FilesName`) VALUES
(28, 'ffffffffffffffffffffffffffffffff\r\nffffffffffffffffffffffffffffffff', '02.jpg'),
(27, '01', 'card-byecom2019.png'),
(26, '01', 'cs002.png'),
(25, 'ทุ่งนา', 'nature3.jpg'),
(30, '1234', 'Untitled-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payID` int(11) NOT NULL,
  `paystatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payID`, `paystatus`) VALUES
(1, 'ชำระแล้ว'),
(2, 'ยังไม่ได้ชำระ');

-- --------------------------------------------------------

--
-- Table structure for table `photosets`
--

CREATE TABLE `photosets` (
  `FilesID` int(4) NOT NULL,
  `Name` text NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photosets`
--

INSERT INTO `photosets` (`FilesID`, `Name`, `FilesName`) VALUES
(2, 'ค่ายยุวชนคอมพิวเตอร์ จัดโดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ ', 'nature2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `FilesID` int(4) NOT NULL,
  `Name` text NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`FilesID`, `Name`, `FilesName`) VALUES
(2, 'fgjfhhhdfhdfhkl;klililiuuiluk', 'nature3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payID`);

--
-- Indexes for table `photosets`
--
ALTER TABLE `photosets`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`FilesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authority`
--
ALTER TABLE `authority`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photosets`
--
ALTER TABLE `photosets`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
