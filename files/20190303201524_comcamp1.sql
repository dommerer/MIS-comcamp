-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 08:49 PM
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
(2, 'ค่ายยุวชนคอมพิวเตอร์ จัดโดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้ ค่ายที่จะให้น้อง ๆ ได้สัมผัสกับศาสตร์ของวิทยาการคอมพิวเตอร์ ค่ายนี้จะช่วยตอบปัญหากับน้อง ๆ ว่า อยากจะศึกษาต่อทางด้านนี้? วิทยาการคอมพิวเตอร์เรียนอะไร ? แล้วนำไปใช้ในชีวิตประจำวันได้อย่างไร ? นอกจากนี้ยังได้รับความสนุกสนานจากกิจกรรมมากมาย', 'nature4.jpg');

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
(41, 'dom', '1234', 'ศุภกิจ', 'จี้สละ', 'ffffffffffffff', '0', '2019-02-04', 'ศุภกิ', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '+666109742', 'โรงเรียนสันทรายวิทยาคม', 'fdsf', 'ดัสกร ทองเหลา', '+666109742', '121212121333333333', 'อิสลาม', 'admin', '', 'false'),
(42, 'earth', '1234', 'dddddddddddd', 'aaaaaaaaaa', 'sadsa', '0', '2019-02-14', 'ชาย', 'dom.supakit@gmail.com', 'asd', 'sadsadsd', 'SUPAKIT JEESALA', '+666109742', 'เชียงใหม่วิทยาคม', 'fdsf', 'ดัสกร ทองเหลา', '+666109742', 'safsf', 'คริสต์', 'user', '', 'false'),
(43, 'dommerer', '12345678', 'Supakit', 'Jeesala', 'dommerer', '0', '2019-02-16', 'ชาย', 'dom.supakit@gmail.com', '610974213', '89/2 Village No. 7', 'Supakit Jeesala', '+666109742', 'โรงเรียนสันทรายวิทยาคม', 'fdsf', 'ดัสกร ทองเหลา', '+666109742', 'หมู', 'อิสลาม', 'user', '', 'true'),
(49, 'beat', '123', 'adfds', 'dafdsfds', 'asdsad', '5', '2014-03-06', 'ชาย', 'beat@gmail.com', '0699999999', 'fsgfdh12121', 'dsfdf', '0000000000', 'dsfsdf', 'm.6', 'dsfghjkl', '0666666666', 'dfsfsdf', 'พุทธ', 'user', '', '');

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
(1, 'ค่ายยุวชนคอมพิวเตอร์ จัดโดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้ ค่ายที่จะให้น้อง ๆ ได้สัมผัสกับศาสตร์ของวิทยาการคอมพิวเตอร์ ค่ายนี้จะช่วยตอบปัญหากับน้อง ๆ ว่า อยากจะศึกษาต่อทางด้านนี้? วิทยาการคอมพิวเตอร์เรียนอะไร ? แล้วนำไปใช้ในชีวิตประจำวันได้อย่างไร ? นอกจากนี้ยังได้รับความสนุกสนานจากกิจกรรมมากมาย', 'Untitled-1.png');

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
(28, '0112132123123123111111111111111111111111111111', 'a0ae0831c84c8e6d5d50cc693d18c492.jpg'),
(27, '01', '07.jpg'),
(26, '01', '03.jpg'),
(25, '01', '01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `desc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.png', '2014-01-22 23:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.png', '2014-01-22 23:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.png', '2014-01-22 23:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.png', '2014-01-22 23:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.png', '2014-01-22 23:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.png', '2014-01-22 23:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(001, 'win', 'win123', 'Weerachai Nukitram', 'USER'),
(002, 'chai', 'chai123', 'Surachai Sirisart', 'ADMIN'),
(003, 'dom', '1234', 'à¸¨à¸±à¸à¸ªà¸´à¸—à¸˜à¹Œ', 'ADMIN'),
(004, 'dommer', '1234', 'ศักสิทธ์', 'ADMIN');

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
(2, 'ค่ายยุวชนคอมพิวเตอร์ จัดโดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้ ค่ายที่จะให้น้อง ๆ ได้สัมผัสกับศาสตร์ของวิทยาการคอมพิวเตอร์ ค่ายนี้จะช่วยตอบปัญหากับน้อง ๆ ว่า อยากจะศึกษาต่อทางด้านนี้? วิทยาการคอมพิวเตอร์เรียนอะไร ? แล้วนำไปใช้ในชีวิตประจำวันได้อย่างไร ? นอกจากนี้ยังได้รับความสนุกสนานจากกิจกรรมมากมาย', 'Untitled-1.png');

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
(2, 'ค่ายยุวชนคอมพิวเตอร์ จัดโดยสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้ ค่ายที่จะให้น้อง ๆ ได้สัมผัสกับศาสตร์ของวิทยาการคอมพิวเตอร์ ค่ายนี้จะช่วยตอบปัญหากับน้อง ๆ ว่า อยากจะศึกษาต่อทางด้านนี้? วิทยาการคอมพิวเตอร์เรียนอะไร ? แล้วนำไปใช้ในชีวิตประจำวันได้อย่างไร ? นอกจากนี้ยังได้รับความสนุกสนานจากกิจกรรมมากมาย', 'nature2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `description`, `created`, `modified`) VALUES
(1, '1.png', 'Nature1 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(2, '2.png', 'nature 2 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(3, 'nature3.jpg', 'nature3 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(4, 'nature4.jpg', 'nature4 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(5, '6.png', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '5.png', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '04.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '01.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '01.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `FilesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
