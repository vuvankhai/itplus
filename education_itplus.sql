-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 03:40 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_itplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `ID` int(11) NOT NULL,
  `Username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_GroupAcc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `ID` int(11) NOT NULL,
  `Session` int(11) DEFAULT NULL,
  `Present` int(11) DEFAULT NULL COMMENT 'Có mặt',
  `Absent` int(11) DEFAULT NULL COMMENT 'Vắng mặt',
  `ID_Teacher` int(11) DEFAULT NULL,
  `Date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance_detail`
--

CREATE TABLE `tbl_attendance_detail` (
  `ID` int(11) NOT NULL,
  `ID_Attendance` int(11) DEFAULT NULL,
  `ID_Student` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classmanager`
--

CREATE TABLE `tbl_classmanager` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_subject`
--

CREATE TABLE `tbl_class_subject` (
  `ID` int(11) NOT NULL,
  `ID_Class` int(11) DEFAULT NULL,
  `ID_Room` int(11) DEFAULT NULL,
  `ID_Hour` int(11) DEFAULT NULL,
  `ID_Subject` int(11) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `Finish_date` date DEFAULT NULL,
  `ID_Facuty` int(11) DEFAULT NULL,
  `Date_Exam` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
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

CREATE TABLE `tbl_course` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Parent_id` int(11) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `Major_id` int(11) DEFAULT NULL,
  `Version` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Vừa mở, đang học, kết thúc..'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domain`
--

CREATE TABLE `tbl_domain` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groupaccount`
--

CREATE TABLE `tbl_groupaccount` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grouprules`
--

CREATE TABLE `tbl_grouprules` (
  `ID` int(11) NOT NULL,
  `ID_GroupAcc` int(11) DEFAULT NULL,
  `ID_menu` int(11) DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hour`
--

CREATE TABLE `tbl_hour` (
  `ID` int(11) NOT NULL,
  `Value` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'A,B,C,D'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_major`
--

CREATE TABLE `tbl_major` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Parent_ID` int(11) DEFAULT NULL,
  `Type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mô tả menu cấp mấy\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
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

CREATE TABLE `tbl_room` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Desccription` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_Course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester_subject`
--

CREATE TABLE `tbl_semester_subject` (
  `ID` int(11) NOT NULL,
  `ID_Semester` int(11) DEFAULT NULL,
  `ID_Subject` int(11) DEFAULT NULL,
  `Hour` int(11) DEFAULT NULL COMMENT 'Số giờ\n',
  `Description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
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
  `Phone_Parent` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `ID` int(11) NOT NULL,
  `ID_Account` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phonenumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã Loại xe\n',
  `Avatar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_GroupAcc_idx` (`ID_GroupAcc`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Teacher_idx` (`ID_Teacher`);

--
-- Indexes for table `tbl_attendance_detail`
--
ALTER TABLE `tbl_attendance_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Attendance_idx` (`ID_Attendance`),
  ADD KEY `FK_Student_idx` (`ID_Student`);

--
-- Indexes for table `tbl_classmanager`
--
ALTER TABLE `tbl_classmanager`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Facuty_idx` (`Facuty_id`),
  ADD KEY `FK_Course_idx` (`ID_course`);

--
-- Indexes for table `tbl_class_subject`
--
ALTER TABLE `tbl_class_subject`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Class_idx` (`ID_Class`),
  ADD KEY `FK_Room_idx` (`ID_Room`),
  ADD KEY `FK_Hour_idx` (`ID_Hour`),
  ADD KEY `FK_Subject_idx` (`ID_Subject`),
  ADD KEY `FK_Facuty_idx` (`ID_Facuty`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Comment_Post_idx` (`ID_post`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Majo_idx` (`Major_id`);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Rules_Menu_idx` (`ID_menu`),
  ADD KEY `FK_Rules_Acc_idx` (`ID_GroupAcc`);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Post_Acc_idx` (`ID_Account`);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Semester_idx` (`ID_Semester`),
  ADD KEY `FK_Subject_idx` (`ID_Subject`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Candi_Acc_idx` (`ID_Account`),
  ADD KEY `FK_Class_idx` (`ID_Class`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Enter_Account_idx` (`ID_Account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_attendance_detail`
--
ALTER TABLE `tbl_attendance_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_classmanager`
--
ALTER TABLE `tbl_classmanager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_class_subject`
--
ALTER TABLE `tbl_class_subject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_domain`
--
ALTER TABLE `tbl_domain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_groupaccount`
--
ALTER TABLE `tbl_groupaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_grouprules`
--
ALTER TABLE `tbl_grouprules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_hour`
--
ALTER TABLE `tbl_hour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_major`
--
ALTER TABLE `tbl_major`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_semester_subject`
--
ALTER TABLE `tbl_semester_subject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
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
