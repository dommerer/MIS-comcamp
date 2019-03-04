-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 02:22 AM
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
(0001, 'comcamp18', '20190304021557_12622226_1029922240363751_5798417847085260274_o - Copy.jpg'),
(0002, 'comcamp19', '20190304021607_12628644_1029922883697020_7525607491235287184_o.jpg'),
(0003, 'comcamp20', '20190304021617_16265522_1320669574622348_5797956809593635085_n.jpg'),
(0004, 'comcamp17', '20190304021630_16422890_1326220634067242_5228584346572184670_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_file1`
--

CREATE TABLE `comcamp_file1` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_file1`
--

INSERT INTO `comcamp_file1` (`FilesID`, `Name`, `FilesName`) VALUES
(1, 'กำหนดการค่าย', '20190303201422_Document Confirm for Register Election.pdf'),
(2, 'ขออนุญาตผู้ปกครอง', '20190303201524_comcamp1.sql'),
(3, 'อื่น ๆ ', '20190304014226_Topic10.txt');

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
(0001, 0001, '', '20190303204406_12513559_1029922263697082_4274812364734771944_o - Copy.jpg'),
(0002, 0001, '', '20190303204412_12593657_1029922980363677_7553547377555546346_o - Copy.jpg'),
(0003, 0001, '', '20190303204419_12594016_1029922417030400_3490586247053231210_o - Copy.jpg'),
(0004, 0001, '', '20190303204426_12615276_1029923500363625_2959423868045152588_o.jpg'),
(0005, 0002, '', '20190303204529_12615572_1029922430363732_7619102607948561697_o.jpg'),
(0006, 0002, '', '20190303204535_12615589_1029922623697046_5720873305351018534_o - Copy.jpg'),
(0007, 0002, '', '20190303204543_12622226_1029922240363751_5798417847085260274_o - Copy.jpg'),
(0008, 0002, '', '20190303204549_12622281_1029923450363630_6341414113638790133_o - Copy.jpg');

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
(1, 'การกลับมาอีกครั้งสำหรับค่ายยุวชนคอมพิวเตอร์ครั้งที่ 17 หรือ Comcamp 17th โดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้\r\nค่ายที่จะให้น้อง ๆ ได้สัมผัสกับวิทยาการคอมพิวเตอร์ ค่ายนี้จะช่วยตอบปัญหากับน้อง ๆ ว่าอยากจะศึกษาต่อทางด้านนี้ ? วิทยาการคอมพิวเตอร์เรียนอะไร ? แล้วนำไปใช้ในชีวิตประจำวันได้อย่างไร ? นอกจากนี้ยังได้รับความสนุกสนานจากกิจกรรมมากมาย', '12615137_1029923557030286_56434222049174893_o.jpg');

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
(1, 'สิ่งที่น้องๆจะได้รับจากค่ายของเราในครั้งนี้คือความรู้ในด้าน IOT (Internet of Thing)ซึ่งปัจจุบันมีความสำคัญต่อการดำเนินชีวิตอีกทั้งน้องๆยังสามารถนำความรู้\r\nที่ได้จากค่ายนำไปพัฒนาเป็นผลงานของน้อง ๆ ต่อไปครับ อีกทั้งน้อง ๆ จะได้รับ\r\nประสบการณ์ การพัฒนาความรู้ การอยู่ร่วมกันในค่าย มิตรภาพ กิจกรรม เป็นต้น', '12593657_1029922980363677_7553547377555546346_o - Copy.jpg');

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
(1, 'น้อง ๆ สามารถลงทะเบียนได้ตั้งแต่วันนี้ จนถึง 15 มกราคม 2562', '12615589_1029922623697046_5720873305351018534_o - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_infoform4`
--

CREATE TABLE `comcamp_infoform4` (
  `FilesID` int(4) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `NoAccount` varchar(100) NOT NULL,
  `BankName` varchar(100) NOT NULL,
  `Detail` varchar(100) NOT NULL,
  `FilesName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_infoform4`
--

INSERT INTO `comcamp_infoform4` (`FilesID`, `Name`, `NoAccount`, `BankName`, `Detail`, `FilesName`) VALUES
(1, 'นายภานุวัฒน์ เมฆะ และ นายอรรถวิท ชังคมานนท์ และ นางปราณี กันธิมา', '678-0-07822-3', 'ธนาคารกรุงเทพ สาขามหาวิทยาลัยแม่โจ้', 'ค่าลงทะเบียน 1,000 บาท และสามราถแจ้งหลักฐานการชำระเงินด้านบนได้เลยครับ', '27368694_1675281129161189_8131249248791815698_o.jpg');

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
(1, '1หกหกkl;lk;kl;l;', '20190304013740_1.jpg'),
(2, 'run for science 2018', '20190304013845_rfs.jpg'),
(3, 'ฟห', '20190304013912_cc15.png'),
(4, '', '20190304013942_cs002.png'),
(5, 'cc14', '20190304014120_cc14.png');

-- --------------------------------------------------------

--
-- Table structure for table `comcamp_students`
--

CREATE TABLE `comcamp_students` (
  `Student_Id` varchar(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_students`
--

INSERT INTO `comcamp_students` (`Student_Id`, `Name`, `Username`, `Password`, `Status`) VALUES
('5904101372', 'ศุภกิจ จี้สละ', 'mju5904101372', '5904101372', 'admin'),
('5904101373', 'ศุภชัย คานจันทึก', 'mju5904101373', '5904101373', '');

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
  `slip` varchar(50) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comcamp_users`
--

INSERT INTO `comcamp_users` (`userID`, `username`, `password`, `firstname`, `lastname`, `nickname`, `age`, `birthdate`, `gender`, `email`, `phone`, `address`, `parent`, `phoneparent`, `school`, `degree`, `teacher`, `phoneteacher`, `allergic`, `religion`, `status`, `slip`, `payment`) VALUES
(1, 'dom', '1234', 'ศุภกิจ', 'จี้สละ', 'dom', '22', '1997-01-03', 'ชาย', 'dom.supakit@gmail.com', '0610974213', '89/2 ตำบลแม่ไร่ อำเภอแม่จัน จังหวัดเชียงราย 57240', 'เผ็ญแก้ว มาลูน', '0856170676', 'โรงเรียนเทศบาล 6 นครเชียงราย', 'มัธยมศึกษาปีที่ 6', 'ครูเอกนรินทร์ คำนาม', '0324587965', 'แพ้ใจ', 'พุทธ', 'user', '20190304020942_c1.png', '1'),
(2, 'earth', '1234', 'ศักสิทธิ์', 'ศรีแก้ว', 'เอิ๊ต', '21', '1997-07-10', 'ชาย', 'earth@gmail.com', '0321236547', '89/2 Village No. 7', 'เผ็ญแก้ว มาลูน', '0874563215', 'โรงเรียนสันทรายวิทยาคม', 'ม.6', 'ดัสกร ทองเหลา', '0369852147', 'อาหารหมา', 'คริสต์', 'user', '20190303203651_nature4.jpg', '1'),
(3, 'aaa', '1234', 'Supakit', 'Jeesala', 'หดห000', '8', '2011-02-05', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '+666109742', 'โรงเรียนสันทรายวิทยาคม', 'ม.6', 'เผ็ญศรี สมควร', '+666109742', 'อาหารหมา', 'พุทธ', 'user', '20190303202345_cs002.png', '1'),
(4, 'bbb', '1234', 'ศุภกิจ', 'จี้สละ', 'เอิ๊ต', '-1', '2019-03-06', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'ศุภกิจ จี้สละ', '+666109742', 'โรงเรียนสันทรายวิทยาคม', 'sgsdgdsg', 'เผ็ญศรี สมควร', '+666109742', 'อาหารหมา', '', 'user', '', '2'),
(5, 'ccc', '1234', 'ศุภกิจ', 'จี้สละ', 'บาส', '-1', '2019-03-22', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'ศุภกิจ จี้สละ', '+666109742', 'เชียงใหม่วิทยาคม', 'sdfsdf', 'เผ็ญศรี สมควร', '+666109742', 'หมู', '', 'user', '', '2'),
(6, 'ddd', '1234', 'ศุภกิจ', 'จี้สละ', 'บาสdsds', '-1', '2019-03-24', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'ศุภกิจ จี้สละ', '+666109742', 'dsdsds', 'sds', 'dsds', 'dsds', 'sdsdsd', 'อิสลาม', 'user', '', '2'),
(7, 'xxx', '1234', 'asdas', 'sadasd', 'asdas', '5', '2014-02-07', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '+666109742', 'โรงเรียนสันทรายวิทยาคม', 'ีร', 'เผ็ญศรี สมควร', '+666109742', 'sdd', 'พุทธ', 'user', '', '2'),
(8, 'aof', '1234', 'ศุภกิจ', 'จี้สละ', 'บาส', '-1', '2019-03-15', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'ศุภกิจ จี้สละ', '+666109742', 'เชียงใหม่วิทยาคม', 'sgsdgdsg', 'เผ็ญศรี สมควร', '+666109742', 'หมู', 'พุทธ', 'user', '20190303203524_nature2.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comcamp_album`
--
ALTER TABLE `comcamp_album`
  ADD PRIMARY KEY (`AlbumID`);

--
-- Indexes for table `comcamp_file1`
--
ALTER TABLE `comcamp_file1`
  ADD PRIMARY KEY (`FilesID`);

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
-- Indexes for table `comcamp_students`
--
ALTER TABLE `comcamp_students`
  ADD PRIMARY KEY (`Student_Id`);

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
-- AUTO_INCREMENT for table `comcamp_file1`
--
ALTER TABLE `comcamp_file1`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comcamp_gallery`
--
ALTER TABLE `comcamp_gallery`
  MODIFY `GalleryID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comcamp_users`
--
ALTER TABLE `comcamp_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
