-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 06:05 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `education_itplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `ID` int(11) NOT NULL,
  `Username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_GroupAcc` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`ID`, `Username`, `Password`, `Type`, `Status`, `ID_GroupAcc`) VALUES
(1, 'khai', '123', '0', '1', 1),
(3, 'lehoang', '12345678', '0', '1', 2),
(6, 'demo8', '12345678', '9', '10', 3),
(7, 'demo1', 'demo1', '9', '10', 3),
(9, 'demo3', 'demo3', '9', '10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `ID` int(11) NOT NULL,
  `Session` int(11) DEFAULT NULL,
  `Present` int(11) DEFAULT NULL COMMENT 'Có mặt',
  `Absent` int(11) DEFAULT NULL COMMENT 'Vắng mặt',
  `Legal` int(11) DEFAULT NULL,
  `ID_Teacher` int(11) DEFAULT NULL,
  `ID_Class_Subject` int(11) NOT NULL,
  `Date_create` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`ID`, `Session`, `Present`, `Absent`, `Legal`, `ID_Teacher`, `ID_Class_Subject`, `Date_create`) VALUES
(6, 1, 0, 0, 0, 1, 2, '2016-01-10 00:00:00'),
(7, 2, 0, 0, 0, 1, 2, '2016-01-10 00:00:00'),
(8, 3, 4, 1, 1, 1, 2, '2016-01-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance_detail` (
  `ID` int(11) NOT NULL,
  `ID_Attendance` int(11) DEFAULT NULL,
  `ID_Student` int(11) DEFAULT NULL,
  `Note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_attendance_detail`
--

INSERT INTO `tbl_attendance_detail` (`ID`, `ID_Attendance`, `ID_Student`, `Note`, `Status`) VALUES
(7, 6, 1, '', 1),
(8, 6, 2, '', 1),
(9, 6, 3, 'di choi', 2),
(10, 7, 1, '', 1),
(11, 7, 2, '', 1),
(12, 7, 3, '', 1),
(13, 8, 1, '', 1),
(14, 8, 2, '', 1),
(15, 8, 3, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classmanager`
--

CREATE TABLE IF NOT EXISTS `tbl_classmanager` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Code_ITI` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `Finish_date` date DEFAULT NULL,
  `Numberofstudent` int(11) DEFAULT NULL,
  `ID_course` int(11) DEFAULT NULL,
  `Facuty_id` int(11) DEFAULT NULL COMMENT 'Giáo viên chủ nhiệm',
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_classmanager`
--

INSERT INTO `tbl_classmanager` (`ID`, `Name`, `Description`, `Code`, `Code_ITI`, `Start_date`, `Finish_date`, `Numberofstudent`, `ID_course`, `Facuty_id`, `Status`) VALUES
(1, 'Lập trình java1401c', '', 'java1401d', 'java1401d', '2016-01-03', '2016-01-22', 23, 12, 1, 1),
(2, 'Lập trình java1401d', '', 'java1401d', '', '2016-01-01', '2015-12-31', 25, 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_class_subject` (
  `ID` int(11) NOT NULL,
  `ID_Class` int(11) DEFAULT NULL,
  `ID_Room` int(11) DEFAULT NULL,
  `ID_Hour` int(11) DEFAULT NULL,
  `ID_Subject` int(11) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `Finish_date` date DEFAULT NULL,
  `ID_Facuty` int(11) DEFAULT NULL,
  `Date_Exam` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_class_subject`
--

INSERT INTO `tbl_class_subject` (`ID`, `ID_Class`, `ID_Room`, `ID_Hour`, `ID_Subject`, `Start_date`, `Finish_date`, `ID_Facuty`, `Date_Exam`) VALUES
(2, 1, 1, 1, 1, '2016-01-01', '2016-01-30', 1, '2016-01-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `ID` int(11) NOT NULL,
  `ID_post` int(11) NOT NULL,
  `Date_comment` datetime DEFAULT CURRENT_TIMESTAMP,
  `Student` varchar(30) COLLATE utf8_unicode_ci DEFAULT '"Vô danh"',
  `Content` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Parent_id` int(11) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `Major_id` int(11) DEFAULT NULL,
  `Version` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Vừa mở, đang học, kết thúc..',
  `Code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`ID`, `Name`, `Description`, `Parent_id`, `Type`, `Major_id`, `Version`, `Status`, `Code`) VALUES
(10, 'Khóa học', '', 0, 1, NULL, '', '', ''),
(12, 'Lập trình Java', '', 15, NULL, NULL, '', '', ''),
(13, 'Dài hạn', '', 10, NULL, NULL, '', '', ''),
(14, 'Ngắn hạn', '', 10, NULL, NULL, '', '', ''),
(15, 'Lập trình ứng dụng', '', 13, NULL, NULL, '', '', ''),
(16, 'Thiết kế đồ họa', '', 14, NULL, NULL, '', '', ''),
(17, 'Lập trình web', '', 13, NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domain`
--

CREATE TABLE IF NOT EXISTS `tbl_domain` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_domain`
--

INSERT INTO `tbl_domain` (`ID`, `Name`, `Type`) VALUES
(1, 'Đi học', 'attendance'),
(2, 'Nghỉ học', 'attendance'),
(3, 'Nghỉ có phép', 'attendance'),
(4, 'Hoạt động', 'subject'),
(5, 'Không hoạt động', 'subject'),
(6, 'Vừa mở', 'course'),
(7, 'Đang học', 'course'),
(8, 'Kết thúc', 'course'),
(9, 'Kích hoạt', 'type_account'),
(10, 'Không kích hoạt', 'status_account'),
(11, 'Bảo lưu', 'student'),
(12, 'Đang học', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groupaccount`
--

CREATE TABLE IF NOT EXISTS `tbl_groupaccount` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_groupaccount`
--

INSERT INTO `tbl_groupaccount` (`ID`, `Name`) VALUES
(1, 'Giáo vụ'),
(2, 'Giảng viên'),
(3, 'Học viên');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grouprules`
--

CREATE TABLE IF NOT EXISTS `tbl_grouprules` (
  `ID` int(11) NOT NULL,
  `ID_GroupAcc` int(11) DEFAULT NULL,
  `ID_menu` int(11) DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hour`
--

CREATE TABLE IF NOT EXISTS `tbl_hour` (
  `ID` int(11) NOT NULL,
  `Value` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'A,B,C,D'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hour`
--

INSERT INTO `tbl_hour` (`ID`, `Value`, `Type`) VALUES
(1, '8h00 - 10h00', 'A'),
(2, '10h15 - 12h15', 'B'),
(3, '1h30 - 3h30', 'C'),
(4, '3h45 - 5h45', 'D'),
(5, '6h00 - 9h00', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_major`
--

CREATE TABLE IF NOT EXISTS `tbl_major` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Parent_ID` int(11) DEFAULT NULL,
  `Type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mô tả menu cấp mấy\n'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ID`, `Name`, `URL`, `Status`, `Parent_ID`, `Type`) VALUES
(11, 'Menu', '/menu', '', 25, '2'),
(12, 'Domain', '/domain', '', 25, '2'),
(14, 'Lớp học', '/classmanager', '', 24, '2'),
(15, 'Lớp môn học', '/classsubject', '', 24, '2'),
(16, 'Khóa hoc', '/course', '', 24, '1'),
(17, 'Học viên', '/student', '', 24, '1'),
(18, 'Giảng viên/Giáo vụ', '/users', '', 27, '2'),
(19, 'Điểm danh', '/attendance', '', 24, '1'),
(20, 'Kỳ học', '/semester', '', 24, '1'),
(21, 'Môn học', '/subject', '', 24, '1'),
(22, 'Giờ học', '/hour', '', 24, '1'),
(23, 'Kỳ môn học', '/semestersubject', '', 24, '1'),
(24, 'Quản lý sinh viên', 'javascript:;', '', 0, '1'),
(25, ' Quản trị viên', 'javascript:;', '', 0, '1'),
(26, 'Quản lý file', 'javascript:;', '', 0, '1'),
(27, 'Quản lý nhân sự', 'javascript:;', '', 0, '1'),
(28, 'Tạo file báo cáo', '/report', '', 26, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `ID` int(11) NOT NULL,
  `ID_Account` int(11) NOT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Date_post` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Content` text COLLATE utf8_unicode_ci,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE IF NOT EXISTS `tbl_room` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Desccription` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`ID`, `Name`, `Desccription`) VALUES
(1, 'Lab1', 'Phong học 1'),
(2, 'Lab2', 'Phòng học 2'),
(3, 'Lab3', 'Phòng học 3'),
(4, 'Lab4', 'Phòng học 4'),
(5, 'Lab5', 'Phòng học 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_Course` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`ID`, `Name`, `ID_Course`) VALUES
(1, '1', 15),
(2, '1', 16),
(3, '2', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_semester_subject` (
  `ID` int(11) NOT NULL,
  `ID_Semester` int(11) DEFAULT NULL,
  `ID_Subject` int(11) DEFAULT NULL,
  `Hour` int(11) DEFAULT NULL COMMENT 'Số giờ\n',
  `Description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_semester_subject`
--

INSERT INTO `tbl_semester_subject` (`ID`, `ID_Semester`, `ID_Subject`, `Hour`, `Description`) VALUES
(1, 1, 1, 72, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Lastname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phonenumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Account` int(11) DEFAULT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Birthday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` int(11) DEFAULT NULL COMMENT 'Đang học, bảo lưu...',
  `Description` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_Class` int(11) DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone_Parent` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Parent_Name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Date_learning` date NOT NULL,
  `Code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`ID`, `Firstname`, `Lastname`, `Phonenumber`, `Email`, `ID_Account`, `Gender`, `Birthday`, `Status`, `Description`, `ID_Class`, `Address`, `Phone_Parent`, `Parent_Name`, `Date_learning`, `Code`) VALUES
(1, 'Long', 'Đào Văn', '0123456789', 'demo@demo.demo', 6, 0, '1995-07-13', 12, '', 1, 'Hà Nội', '01234567890', 'demo', '2016-01-04', 'lt08914'),
(2, 'Hậu', 'Lương văn', '03456789', 'abc@abc.abc', 7, 0, '2016-01-06', 12, '', 1, 'ha noi', '0456789023', 'demo2', '2016-01-21', '134asdfa'),
(3, 'Bình', 'Nguyễn Thị', '0123456789', 'binh@gmail.com', 9, 1, '2016-07-05', 12, '', 1, 'Thái Binh', '01234567890', 'Nguyễn Công Hạ', '2016-01-12', 'lt08915');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_subject` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`ID`, `Name`, `Description`, `Status`) VALUES
(1, 'WHCJ', 'WHCJ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID` int(11) NOT NULL,
  `ID_Account` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phonenumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã Loại xe\n',
  `Avatar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `ID_Account`, `Name`, `Phonenumber`, `Email`, `Address`, `Description`, `Avatar`, `Status`) VALUES
(1, 3, 'lehoang', '01234567890', 'abc@abc.abc', 'abcabc', '', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_GroupAcc_idx` (`ID_GroupAcc`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Teacher_idx` (`ID_Teacher`);

--
-- Indexes for table `tbl_attendance_detail`
--
ALTER TABLE `tbl_attendance_detail`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Attendance_idx` (`ID_Attendance`), ADD KEY `FK_Student_idx` (`ID_Student`);

--
-- Indexes for table `tbl_classmanager`
--
ALTER TABLE `tbl_classmanager`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Facuty_idx` (`Facuty_id`), ADD KEY `FK_Course_idx` (`ID_course`);

--
-- Indexes for table `tbl_class_subject`
--
ALTER TABLE `tbl_class_subject`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Class_idx` (`ID_Class`), ADD KEY `FK_Room_idx` (`ID_Room`), ADD KEY `FK_Hour_idx` (`ID_Hour`), ADD KEY `FK_Subject_idx` (`ID_Subject`), ADD KEY `FK_Facuty_idx` (`ID_Facuty`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Comment_Post_idx` (`ID_post`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Majo_idx` (`Major_id`);

--
-- Indexes for table `tbl_domain`
--
ALTER TABLE `tbl_domain`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_groupaccount`
--
ALTER TABLE `tbl_groupaccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_grouprules`
--
ALTER TABLE `tbl_grouprules`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Rules_Menu_idx` (`ID_menu`), ADD KEY `FK_Rules_Acc_idx` (`ID_GroupAcc`);

--
-- Indexes for table `tbl_hour`
--
ALTER TABLE `tbl_hour`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_major`
--
ALTER TABLE `tbl_major`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Post_Acc_idx` (`ID_Account`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_semester_subject`
--
ALTER TABLE `tbl_semester_subject`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Semester_idx` (`ID_Semester`), ADD KEY `FK_Subject_idx` (`ID_Subject`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Candi_Acc_idx` (`ID_Account`), ADD KEY `FK_Class_idx` (`ID_Class`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`), ADD KEY `FK_Enter_Account_idx` (`ID_Account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_attendance_detail`
--
ALTER TABLE `tbl_attendance_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_classmanager`
--
ALTER TABLE `tbl_classmanager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_class_subject`
--
ALTER TABLE `tbl_class_subject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_domain`
--
ALTER TABLE `tbl_domain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_groupaccount`
--
ALTER TABLE `tbl_groupaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_grouprules`
--
ALTER TABLE `tbl_grouprules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_hour`
--
ALTER TABLE `tbl_hour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_major`
--
ALTER TABLE `tbl_major`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_semester_subject`
--
ALTER TABLE `tbl_semester_subject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_account`
--
ALTER TABLE `tbl_account`
ADD CONSTRAINT `FK_Account_GroupAcc` FOREIGN KEY (`ID_GroupAcc`) REFERENCES `tbl_groupaccount` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
ADD CONSTRAINT `FK_Teacher` FOREIGN KEY (`ID_Teacher`) REFERENCES `tbl_users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_attendance_detail`
--
ALTER TABLE `tbl_attendance_detail`
ADD CONSTRAINT `FK_Attendance_Detail_Attendance` FOREIGN KEY (`ID_Attendance`) REFERENCES `tbl_attendance` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Attendance_Detail_Student` FOREIGN KEY (`ID_Student`) REFERENCES `tbl_student` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_classmanager`
--
ALTER TABLE `tbl_classmanager`
ADD CONSTRAINT `FK_ClassManager_Course` FOREIGN KEY (`ID_course`) REFERENCES `tbl_course` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_ClassManager_Facuty` FOREIGN KEY (`Facuty_id`) REFERENCES `tbl_users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_class_subject`
--
ALTER TABLE `tbl_class_subject`
ADD CONSTRAINT `FK_Class_Subject_Class` FOREIGN KEY (`ID_Class`) REFERENCES `tbl_classmanager` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Class_Subject_Facuty` FOREIGN KEY (`ID_Facuty`) REFERENCES `tbl_users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Class_Subject_Hour` FOREIGN KEY (`ID_Hour`) REFERENCES `tbl_hour` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Class_Subject_Room` FOREIGN KEY (`ID_Room`) REFERENCES `tbl_room` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Class_Subject_Subject` FOREIGN KEY (`ID_Subject`) REFERENCES `tbl_subject` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
ADD CONSTRAINT `FK_Comment_Post` FOREIGN KEY (`ID_post`) REFERENCES `tbl_post` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Post` FOREIGN KEY (`ID_post`) REFERENCES `tbl_post` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
ADD CONSTRAINT `FK_Course_Majo` FOREIGN KEY (`Major_id`) REFERENCES `tbl_major` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_grouprules`
--
ALTER TABLE `tbl_grouprules`
ADD CONSTRAINT `FK_Rules_Acc` FOREIGN KEY (`ID_GroupAcc`) REFERENCES `tbl_groupaccount` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Rules_Menu` FOREIGN KEY (`ID_menu`) REFERENCES `tbl_menu` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
ADD CONSTRAINT `FK_Post_Acc` FOREIGN KEY (`ID_Account`) REFERENCES `tbl_account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_semester_subject`
--
ALTER TABLE `tbl_semester_subject`
ADD CONSTRAINT `FK_Semester_Subject_Semester` FOREIGN KEY (`ID_Semester`) REFERENCES `tbl_semester` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Semester_Subject_Subject` FOREIGN KEY (`ID_Subject`) REFERENCES `tbl_subject` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
ADD CONSTRAINT `FK_Student_Acc` FOREIGN KEY (`ID_Account`) REFERENCES `tbl_account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Student_Class` FOREIGN KEY (`ID_Class`) REFERENCES `tbl_classmanager` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
ADD CONSTRAINT `FK_Enter_Account` FOREIGN KEY (`ID_Account`) REFERENCES `tbl_account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_Users_Acc` FOREIGN KEY (`ID_Account`) REFERENCES `tbl_account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
