-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 02:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` smallint(4) UNSIGNED NOT NULL,
  `test_id` varchar(5) NOT NULL,
  `exam_name` text NOT NULL,
  `exam_ans1` text NOT NULL,
  `exam_ans2` text NOT NULL,
  `exam_ans3` text NOT NULL,
  `exam_ans4` text NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `test_id`, `exam_name`, `exam_ans1`, `exam_ans2`, `exam_ans3`, `exam_ans4`, `answer`) VALUES
(4, 'A-001', '<p>ซอฟต์แวร์ คือ</p>', '<p>โปรแกรมชุดของคำสั่งที่ควบคุมการทำงานของคอมพิวเตอร์</p>', '<p>อุปกรณ์เทคโนโลยีระดับสูง</p>', '<p>โปรแกรมแก้ปัญหาทุกอย่างของมนุษย์</p>', '<p>อุปกรณ์ที่ทำหน้าเสมือนสมองกล</p>', 'A'),
(5, 'A-001', '<p>ข้อใด<span style=\"color: #ff0000;\"><strong>ไม่ใช่</strong></span>ระบบปฏิบัติการ</p>', '<p>ระบบปฏิบัติการดอส</p>', '<p>ระบบปฏิบัติการไมโครซอฟท์เวิร์ด</p>', '<p>&nbsp;ระบบปฏิบัติการไมโครซอฟต์วินโดวส์</p>', '<p>ระบบปฏิบัติการ แอนดรอยด์</p>', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `major_id` varchar(2) NOT NULL,
  `major_name` varchar(35) NOT NULL,
  `header_major_id` varchar(13) NOT NULL,
  `header_major` varchar(50) NOT NULL,
  `header_major_tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`major_id`, `major_name`, `header_major_id`, `header_major`, `header_major_tel`) VALUES
('00', 'ช่างยนต์', '', '', ''),
('01', 'ช่างกลโรงงาน', '', '', ''),
('02', 'ช่างเชื่อมโลหะ', '1050364789258', 'นายวรโชติ ลำมะนา', '0874195642'),
('03', 'ช่างไฟฟ้ากำลัง', '', '', ''),
('04', 'ช่างอิเล็กทรอนิกส์', '', '', ''),
('05', 'เทคโนโลยีคอมพิวเตอร์', '', '', ''),
('06', 'เทคโนโลยีโทรคมนาคม', '', '', ''),
('07', 'ช่างก่อสร้าง/สถาปัตยกรรม', '', '', ''),
('09', 'เทคโนโลยีสารสนเทศ', '1154023689754', 'นายนิสิต ตันติวัฒนไพศาล', '0874956123'),
('10', 'การบัญชี', '', ' ', ''),
('99', 'ช่างโยธานะจ๊ะ', '2043567981578', 'นายญาณณากร อินทร์งาม', '0998765423');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `media_id` smallint(4) NOT NULL,
  `test_id` varchar(5) NOT NULL,
  `media_name` varchar(30) NOT NULL,
  `media_path` varchar(50) NOT NULL,
  `media_type` varchar(50) NOT NULL,
  `media_create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`media_id`, `test_id`, `media_name`, `media_path`, `media_type`, `media_create_at`) VALUES
(2, 'A-001', 'ลุง', '../../assets/medias/351.jpg', 'image/jpeg', '2019-01-03'),
(4, 'A-001', 'บ้าน', '../../assets/medias/147.jpg', 'image/jpeg', '2019-01-03'),
(5, 'A-001', 'วิดีโอ', '../../assets/medias/962.MKV', 'video/x-matroska', '2019-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(13) NOT NULL,
  `test_id` varchar(5) NOT NULL,
  `point` tinyint(1) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(13) NOT NULL,
  `major_id` varchar(5) NOT NULL,
  `level_id` varchar(1) NOT NULL,
  `student_prefix` varchar(6) NOT NULL,
  `student_fname` varchar(30) NOT NULL,
  `student_lname` varchar(30) NOT NULL,
  `student_tel` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `major_id`, `level_id`, `student_prefix`, `student_fname`, `student_lname`, `student_tel`, `password`) VALUES
('1010536497825', '02', '6', 'นางสาว', 'มนัสนันท์', 'ยะรังวงค์', '0884569723', '1234'),
('3404512678090', '99', '5', 'นาย', 'ศักดา', 'อินทปัญญา', '0987451246', 'LoveYou'),
('3404516789256', '99', '8', 'นางสาว', 'พรหมเลขา', 'เจริญมิตร', '0981542367', '1234'),
('3405167892531', '99', '3', 'นาย', 'ประกาษิศ', 'นิติโรชภาณิชย์', '0897456123', '1234'),
('50', '99', '1', 'นาย', '50', '50', '50', '50');

-- --------------------------------------------------------

--
-- Table structure for table `student_levels`
--

CREATE TABLE `student_levels` (
  `level_id` varchar(1) NOT NULL,
  `level_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_levels`
--

INSERT INTO `student_levels` (`level_id`, `level_name`) VALUES
('1', 'ประกาศนียบัตรวิชาชีพปีที่ 1'),
('2', 'ประกาศนียบัตรวิชาชีพปีที่ 2'),
('3', 'ประกาศนียบัตรวิชาชีพปีที่ 3'),
('4', 'ประกาศนียบัตรวิชาชีพขั้นสูงปีที่ 1'),
('5', 'ประกาศนียบัตรวิชาชีพขั้นสูงปีที่ 2'),
('6', 'ปริญญาตรี'),
('7', 'ปริญญาโท'),
('8', 'ปริญญาเอก');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` varchar(13) NOT NULL,
  `major_id` varchar(5) DEFAULT NULL,
  `teacher_prefix` varchar(6) NOT NULL,
  `teacher_fname` varchar(30) NOT NULL,
  `teacher_lname` varchar(30) NOT NULL,
  `teacher_tel` varchar(10) NOT NULL,
  `teacher_password` varchar(15) NOT NULL,
  `admin_status` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `major_id`, `teacher_prefix`, `teacher_fname`, `teacher_lname`, `teacher_tel`, `teacher_password`, `admin_status`) VALUES
('0', NULL, '', 'Administrator', '', '0987654321', 'Administrator', 'Y'),
('1050364789258', '02', 'นาย', 'วรโชติ', 'ลำมะนา', '0874195642', '123', 'N'),
('1154023689754', '09', 'นาย', 'นิสิต', 'ตันติวัฒนไพศาล', '0874956123', '123', 'N'),
('2043567981578', '99', 'นาย', 'ญาณณากร', 'อินทร์งาม', '0998765423', 'AeOtaku', 'N'),
('5640213597815', '99', 'นาย', 'หำตุง', 'ผดุงธรรม', '0999999999', '1', 'N'),
('5974812630250', '99', 'นาย', 'สมปอง', 'เจริญทรัพย์', '0987456123', '123', 'N'),
('6541023987520', '01', 'นาย', 'ภัทรภูมิ', 'อ่อนจ้อย', '0897462533', '123', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` varchar(5) NOT NULL,
  `test_name` varchar(150) NOT NULL,
  `test_details` text NOT NULL,
  `test_create_at` date NOT NULL,
  `teacher_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `test_details`, `test_create_at`, `teacher_id`) VALUES
('0000', 'By admin', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate amet, laudantium dolores pariatur eum quidem ut, totam facilis doloremque voluptatem cumque aliquam omnis neque aspernatur rerum? Molestias velit atque doloribus.', '2019-01-07', '0'),
('A-001', 'Easy Photoshop', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis labore, maiores ipsam tempora suscipit iste sequi at cum voluptates consequatur nostrum perspiciatis, architecto, dolore natus itaque dolor accusantium minima voluptatum.', '2019-01-03', '5974812630250'),
('A-002', 'Basic Photoshop', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa optio sed, eos quisquam atque repellendus eum nam doloribus commodi doloremque ducimus voluptatum esse pariatur laborum fugit impedit qui libero nobis.', '2019-01-03', '5974812630250'),
('B-001', 'Data Comunication', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, in ab fugiat, id obcaecati quam blanditiis reiciendis, repellat fugit impedit minima! Quos, omnis nam consectetur unde at necessitatibus debitis non!', '2019-01-03', '5640213597815'),
('C-001', 'หลักการออกแบบฐานข้อมูลเบื้องต้น', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus sit dolorum in error nesciunt facilis, iure pariatur consequuntur ratione, labore nam laborum quia. Hic, pariatur laborum fugit ducimus magnam autem.', '2019-01-03', '1050364789258');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`),
  ADD UNIQUE KEY `student_id` (`student_id`,`test_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `student_levels`
--
ALTER TABLE `student_levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `media_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `medias_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `student_levels` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`major_id`) REFERENCES `majors` (`major_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `majors` (`major_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
