-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 10:36 PM
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
-- Database: `jowaveco_csmju`
--

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_album`
--

CREATE TABLE `comcamp_album` (
  `AlbumID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `AlbumName` varchar(100) NOT NULL,
  `AlbumShot` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_album`
--

INSERT INTO `comcamp_album` (`AlbumID`, `AlbumName`, `AlbumShot`) VALUES
(0001, 'comcamp18', '20190227223247_J10CtpB.jpg'),
(0002, 'comcamp19', '20190228173257_nature1.jpg'),
(0003, 'comcamp20', '20190228173317_nature3.jpg'),
(0004, 'comcamp17', '20190228220350_nature4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_gallery`
--

CREATE TABLE `comcamp_gallery` (
  `GalleryID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `AlbumID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `GalleryName` varchar(100) NOT NULL,
  `GalleryShot` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_gallery`
--

INSERT INTO `comcamp_gallery` (`GalleryID`, `AlbumID`, `GalleryName`, `GalleryShot`) VALUES
(0001, 0001, '', '20190228173345_cs002.png'),
(0002, 0001, '', '20190228173417_card-byecom2019.png'),
(0003, 0001, '', '20190228173424_nature4.jpg'),
(0004, 0001, '', '20190228173432_nature2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_infoform1`
--

CREATE TABLE `comcamp_infoform1` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_infoform1`
--

INSERT INTO `comcamp_infoform1` (`FilesID`, `Name`, `FilesName`) VALUES
(1, 'การกลับมาอีกครั้งสำหรับค่ายยุวชนคอมพิวเตอร์ครั้งที่ 17 หรือ Comcamp 17th โดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้\r\nค่ายที่จะให้น้อง ๆ ได้สัมผัสกับวิทยาการคอมพิวเตอร์ ค่ายนี้จะช่วยตอบปัญหากับน้อง ๆ ว่าอยากจะศึกษาต่อทางด้านนี้ ? วิทยาการคอมพิวเตอร์เรียนอะไร ? แล้วนำไปใช้ในชีวิตประจำวันได้อย่างไร ? นอกจากนี้ยังได้รับความสนุกสนานจากกิจกรรมมากมาย', 'nature4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_infoform2`
--

CREATE TABLE `comcamp_infoform2` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_infoform2`
--

INSERT INTO `comcamp_infoform2` (`FilesID`, `Name`, `FilesName`) VALUES
(1, 'สิ่งที่น้องๆจะได้รับจากค่ายของเราในครั้งนี้คือความรู้ในด้าน IOT (Internet of Thing)ซึ่งปัจจุบันมีความสำคัญต่อการดำเนินชีวิตอีกทั้งน้องๆยังสามารถนำความรู้\r\nที่ได้จากค่ายนำไปพัฒนาเป็นผลงานของน้อง ๆ ต่อไปครับ อีกทั้งน้อง ๆ จะได้รับ\r\nประสบการณ์ การพัฒนาความรู้ การอยู่ร่วมกันในค่าย มิตรภาพ กิจกรรม เป็นต้น', 'cs002.png');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_infoform3`
--

CREATE TABLE `comcamp_infoform3` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_infoform3`
--

INSERT INTO `comcamp_infoform3` (`FilesID`, `Name`, `FilesName`) VALUES
(1, 'น้อง ๆ สามารสมัครได้แล้วตั้งแต่วันนี้ จนถึง 16 มกราคม 2562 ', 'nature3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_infoform4`
--

CREATE TABLE `comcamp_infoform4` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_infoform4`
--

INSERT INTO `comcamp_infoform4` (`FilesID`, `Name`, `FilesName`) VALUES
(1, 'ค่าลงทะเบียน 1000 บาท สามารถโอนมาได้ที่\r\n\r\nบัญชีออมทรัพย์ เลขที่ 678-0-07822-3 ธนาคารกรุงเทพ สาขามหาวิทยาลัยแม่โจ้ ชื่อบัญชี นายภานุวัฒน์ เมฆะ และ นายอรรถวิท ชังคมานนท์ และ นางปราณี กันธิมา และสามราถแนนหลักฐานการชำระเงินด้านล่างได้เลยครับ', 'nature2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_payments`
--

CREATE TABLE `comcamp_payments` (
  `payID` int(11) NOT NULL,
  `paystatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_payments`
--

INSERT INTO `comcamp_payments` (`payID`, `paystatus`) VALUES
(1, 'ชำระแล้ว'),
(2, 'ยังไม่ได้ชำระ');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_slids`
--

CREATE TABLE `comcamp_slids` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_slids`
--

INSERT INTO `comcamp_slids` (`FilesID`, `Name`, `FilesName`) VALUES
(1, '1หกหก', 'nature3.jpg'),
(2, '', 'cs002.png'),
(3, 'ฟห', 'nature1.jpg'),
(4, 'a', 'J10CtpB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_users`
--

CREATE TABLE `comcamp_users` (
  `userID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `birthdate` varchar(15) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `parent` varchar(40) NOT NULL,
  `phoneparent` varchar(10) NOT NULL,
  `school` varchar(30) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `teacher` varchar(40) NOT NULL,
  `phoneteacher` varchar(10) NOT NULL,
  `allergic` varchar(100) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `status` varchar(6) NOT NULL,
  `slip` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_users`
--

INSERT INTO `comcamp_users` (`userID`, `username`, `password`, `firstname`, `lastname`, `nickname`, `age`, `birthdate`, `gender`, `email`, `phone`, `address`, `parent`, `phoneparent`, `school`, `degree`, `teacher`, `phoneteacher`, `allergic`, `religion`, `status`, `slip`, `payment`) VALUES
(1, 'dom', '1234', 'Supakit', 'Jeesala', 'dom', '22', '2019-02-14', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 ตำบลแม่ไร่ อำเภอแม่จัน จังหวัดเชียงราย 57240', 'SUPAKIT JEESALA', '0856170676', 'โรงเรียนเทศบาล 6 นครเชียงราย', 'มัธยมศึกษาปีที่ 5', 'ครูเอกนรินทร์ คำนาม', '0324587965', 'ดกดหดหกดกห', 'พุทธ', 'admin', '', '1'),
(2, 'earth', '1234', 'asd', 'asd', 'asd', '0', '2019-02-09', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '0610974213', 'โรงเรียนสันทรายวิทยาคม', 'ม.6', 'ดัสกร ทองเหลา', '0610974213', 'อาหารหมา', 'คริสต์', 'user', 'J10CtpB.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comcamp_album`
--
ALTER TABLE `comcamp_album`
  ADD PRIMARY KEY (`AlbumID`);

--
-- Indexes for table `comcamp_gallery`
--
ALTER TABLE `comcamp_gallery`
  ADD PRIMARY KEY (`GalleryID`);

--
-- Indexes for table `comcamp_infoform1`
--
ALTER TABLE `comcamp_infoform1`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `comcamp_infoform2`
--
ALTER TABLE `comcamp_infoform2`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `comcamp_infoform3`
--
ALTER TABLE `comcamp_infoform3`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `comcamp_infoform4`
--
ALTER TABLE `comcamp_infoform4`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `comcamp_payments`
--
ALTER TABLE `comcamp_payments`
  ADD PRIMARY KEY (`payID`);

--
-- Indexes for table `comcamp_slids`
--
ALTER TABLE `comcamp_slids`
  ADD PRIMARY KEY (`FilesID`);

--
-- Indexes for table `comcamp_users`
--
ALTER TABLE `comcamp_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comcamp_album`
--
ALTER TABLE `comcamp_album`
  MODIFY `AlbumID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comcamp_gallery`
--
ALTER TABLE `comcamp_gallery`
  MODIFY `GalleryID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comcamp_infoform1`
--
ALTER TABLE `comcamp_infoform1`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comcamp_infoform2`
--
ALTER TABLE `comcamp_infoform2`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comcamp_infoform3`
--
ALTER TABLE `comcamp_infoform3`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comcamp_infoform4`
--
ALTER TABLE `comcamp_infoform4`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comcamp_payments`
--
ALTER TABLE `comcamp_payments`
  MODIFY `payID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comcamp_slids`
--
ALTER TABLE `comcamp_slids`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comcamp_users`
--
ALTER TABLE `comcamp_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
