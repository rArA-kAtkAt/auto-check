-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 11:01 AM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-51+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_check`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `teacher_id`, `subject`, `grade_level`, `section`, `subject_code`, `status`, `created_at`) VALUES
(15, 12, 'Filipino', 'Grade 7', 'Gwapo', 'FIL854', 'Active', '2023-02-22 14:57:31'),
(16, 14, 'Filipino', 'Grade 7', 'matibay', 'FIL642', 'Active', '2023-02-28 05:30:25'),
(18, 15, 'M.A.P.E.H.', 'Grade 7', 'Angas', 'M.A422', 'Active', '2023-03-04 06:39:19'),
(19, 16, 'Science', 'Grade 7', 'Love', 'SCI909', 'Active', '2023-03-04 07:37:33'),
(20, 18, 'English', 'Grade 8', 'Masaya', 'ENG941', 'Active', '2023-03-05 05:03:03'),
(21, 12, 'Filipino', 'Grade 7', 'Ganda', 'FIL271', 'Active', '2023-03-05 06:34:24'),
(22, 12, 'Filipino', 'Grade 8', 'Mabait', 'FIL125', 'Active', '2023-03-05 06:34:36'),
(23, 12, 'Filipino', 'Grade 8', 'Masaya', 'FIL917', 'Active', '2023-03-05 06:34:54'),
(24, 12, 'Filipino', 'Grade 9', 'Masipag', 'FIL887', 'Active', '2023-03-05 06:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` int(199) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `email_address`, `grade_level`, `section`, `status`, `created_at`, `code`) VALUES
(17, 'Gio', 'Rapal', 'Cabuyao', '2023-0003', '@Akosigio123', 'Hsjansbdx@gmail.com', 'Grade 7', 'MABUHAY', 'Active', '2023-02-22 15:08:54', NULL),
(18, 'Renz', 'A', 'Emata', '2023-0004', 'Osep1234', 'Renz@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:45:31', NULL),
(19, 'Gio', 'A', 'Cabuyao', '2023-0005', 'Osep1234', 'Gio@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:47:51', NULL),
(20, 'Kent', 'A', 'Abulencia', '2023-0006', 'Osep1234', 'Kent@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:48:56', NULL),
(21, 'Liandrey', 'A', 'Reyes', '2023-0007', 'Osep1234', 'Liandrey@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:49:59', NULL),
(22, 'Joseph', 'A', 'Francia', '2023-0008', 'Osep1234', 'Osep@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:51:01', NULL),
(23, 'Mariel', 'A', 'Manalo', '2023-0009', 'Osep1234', 'Mariel@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:51:52', NULL),
(24, 'Reichelle', 'A', 'Remo', '2023-00010', 'Osep1234', 'Reichelle@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:52:45', NULL),
(25, 'Angie', 'A', 'Lagrazon', '2023-0011', 'Osep1234', 'Angie@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:54:24', NULL),
(26, 'Marie', 'A', 'Cabuyao', '2023-0012', 'Osep1234', 'Marie@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:55:36', NULL),
(27, 'Laiza', 'A', 'Abulencia', '2023-0013', 'Osep1234', 'Laiza@gmail.com', 'Grade 7', 'Love', 'Active', '2023-02-23 00:57:31', NULL),
(28, 'Gio', 'A', 'Emata', '2023-0015', 'Osep1234', 'Gio@gmail.com', 'Grade 7', 'Paldo', 'Active', '2023-02-28 05:31:49', NULL),
(29, 'Gio', 'Rapal', 'Cabuyao', '2023-0016', '@Akosigio123', 'adwasdwd@gmail.com', 'Grade 7', 'Tahimik', 'Active', '2023-03-04 06:37:08', NULL),
(30, 'Osep', 'R', 'Francia', '2023-0020', 'Osep1234', 'josephfrancia79@gmail.com', 'Grade 7', 'Love', 'Active', '2023-03-05 05:01:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_class`
--

CREATE TABLE `tbl_student_class` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_class`
--

INSERT INTO `tbl_student_class` (`id`, `student_id`, `class_id`, `subject_code`, `status`, `created_at`) VALUES
(25, 18, 15, 'FIL854', 'Active', '2023-02-23 00:46:56'),
(26, 19, 15, 'FIL854', 'Active', '2023-02-23 00:48:07'),
(27, 20, 15, 'FIL854', 'Active', '2023-02-23 00:49:15'),
(28, 21, 15, 'FIL854', 'Active', '2023-02-23 00:50:17'),
(29, 22, 15, 'FIL854', 'Active', '2023-02-23 00:51:15'),
(30, 23, 15, 'FIL854', 'Active', '2023-02-23 00:52:05'),
(31, 24, 15, 'FIL854', 'Active', '2023-02-23 00:53:27'),
(32, 25, 15, 'FIL854', 'Active', '2023-02-23 00:54:40'),
(33, 26, 15, 'FIL854', 'Active', '2023-02-23 00:55:50'),
(34, 27, 15, 'FIL854', 'Active', '2023-02-23 00:57:50'),
(35, 28, 16, 'FIL642', 'Active', '2023-02-28 05:33:18'),
(36, 19, 19, 'SCI909', 'Active', '2023-03-04 08:00:18'),
(37, 21, 19, 'SCI909', 'Active', '2023-03-04 08:00:57'),
(38, 30, 20, 'ENG941', 'Active', '2023-03-05 05:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_test`
--

CREATE TABLE `tbl_student_test` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `score` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_test`
--

INSERT INTO `tbl_student_test` (`id`, `student_id`, `test_id`, `score`, `created_at`) VALUES
(37, 17, 19, '3', '2023-02-22 15:12:08'),
(38, 18, 19, '2', '2023-02-27 04:46:29'),
(39, 28, 20, '2', '2023-02-28 05:34:40'),
(40, 20, 21, '3', '2023-03-01 11:02:08'),
(41, 18, 21, '10', '2023-03-01 11:02:40'),
(42, 21, 21, '2', '2023-03-01 11:03:07'),
(43, 18, 22, '5', '2023-03-01 11:07:53'),
(44, 19, 22, '5', '2023-03-01 11:09:04'),
(45, 20, 22, '5', '2023-03-01 11:09:17'),
(46, 21, 22, '4', '2023-03-01 11:10:10'),
(47, 22, 22, '4', '2023-03-01 11:10:43'),
(48, 18, 23, '2', '2023-03-03 20:06:31'),
(49, 19, 23, '3', '2023-03-03 20:06:51'),
(50, 20, 23, '2', '2023-03-03 20:07:10'),
(51, 21, 23, '2', '2023-03-03 20:07:32'),
(52, 22, 23, '2', '2023-03-03 20:07:59'),
(53, 24, 21, '2', '2023-03-03 20:14:32'),
(54, 22, 21, '2', '2023-03-03 20:24:15'),
(55, 19, 19, '3', '2023-03-03 20:31:56'),
(56, 20, 19, '2', '2023-03-03 20:32:09'),
(57, 21, 19, '3', '2023-03-03 20:32:20'),
(58, 18, 24, '10', '2023-03-04 04:42:00'),
(59, 18, 26, '18', '2023-03-04 05:07:54'),
(60, 18, 27, '10', '2023-03-04 05:24:06'),
(61, 26, 24, '2', '2023-03-04 06:02:14'),
(62, 27, 24, '10', '2023-03-04 06:03:45'),
(63, 25, 24, '3', '2023-03-04 06:05:12'),
(64, 22, 24, '4', '2023-03-04 06:06:52'),
(65, 19, 26, '18', '2023-03-04 06:09:01'),
(66, 20, 26, '10', '2023-03-04 06:09:40'),
(67, 21, 26, '10', '2023-03-04 06:32:34'),
(68, 19, 27, '10', '2023-03-04 06:33:44'),
(69, 26, 25, '4', '2023-03-04 06:42:49'),
(70, 19, 28, '2', '2023-03-04 08:01:33'),
(71, 21, 28, '2', '2023-03-04 08:02:07'),
(72, 25, 21, '4', '2023-03-04 08:33:51'),
(73, 24, 23, '4', '2023-03-04 08:35:18'),
(74, 26, 21, '2', '2023-03-05 03:56:55'),
(75, 30, 30, '2', '2023-03-05 05:05:02'),
(76, 20, 24, '10', '2023-03-05 06:57:34'),
(77, 19, 24, '10', '2023-03-05 06:58:04'),
(78, 22, 25, '6', '2023-03-09 14:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `teacher_level` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` int(199) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `username`, `password`, `teacher_level`, `subject`, `firstname`, `middlename`, `lastname`, `email_address`, `created_at`, `code`) VALUES
(12, '2023-0001', 'John3:16', '', 'Filipino', 'Renz', 'j', 'Emata', 'renzroldan.emata@gmail.com', '2023-02-22 14:56:03', 94811154),
(13, '2023-0002', '@Akosigio123', '', 'English', 'Gio', 'Rapal', 'Cabuyao', 'Hsjansbdx@gmail.com', '2023-02-22 15:00:38', NULL),
(14, '2023-0014', 'Osep1234', '', 'Filipino', 'Liandrey', 'A', 'Remo', 'liandreyr@gmail.com', '2023-02-28 05:29:48', NULL),
(15, '2023-0016', 'John3:16', '', 'M.A.P.E.H.', 'Catherine', 'J', 'Castillo', 'catherine@castillo.com', '2023-03-04 06:37:35', NULL),
(16, '2023-0018', 'Osep1234', '', 'Science', 'Gio', 'A', 'Abulencia', 'Gio@gmail.com', '2023-03-04 07:37:09', NULL),
(17, '2023-0019', 'John3:16', '', 'Filipino', 'Joseph', 'R', 'Francia', 'franciajoseph112@gmail.com', '2023-03-04 07:50:46', 56204680),
(18, '2023-0021', 'Juan1234', '', 'English', 'Juan', 'D', 'Cruz', 'juan@gmail.com', '2023-03-05 05:02:19', NULL),
(19, '2023-0022', 'John3:16', '', 'Filipino', 'Roldan', 'J', 'Emata', 'roldan@gmail.com', '2023-03-05 06:53:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `grading` varchar(255) NOT NULL,
  `item_no` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `test_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `class_id`, `grading`, `item_no`, `type`, `status`, `created_at`, `test_id`) VALUES
(20, 16, '1st Grading', '10', 'Summative Test', 'Active', '2023-02-28 05:31:16', NULL),
(24, 15, '1st Grading', '10', 'Summative Test', 'Active', '2023-03-03 20:26:13', NULL),
(25, 15, '2nd Grading', '20', 'Summative Test', 'Active', '2023-03-04 04:48:09', NULL),
(26, 15, '3rd Grading', '40', 'Summative Test', 'Active', '2023-03-04 04:55:10', NULL),
(27, 15, '4th Grading', '50', 'Summative Test', 'Active', '2023-03-04 05:08:25', NULL),
(28, 19, '1st Grading', '10', 'Summative Test', 'Active', '2023-03-04 07:37:49', NULL),
(30, 20, '1st Grading', '10', 'Summative Test', 'Active', '2023-03-05 05:03:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_qna`
--

CREATE TABLE `tbl_test_qna` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_test_qna`
--

INSERT INTO `tbl_test_qna` (`id`, `test_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `created_at`) VALUES
(371, 19, 'hjkhkjhkjsafas', 'hjkhkj', 'hkjhjk', 'hkjhjk', 'hjkhkjgkh', 'A', '2023-02-22 14:59:58'),
(372, 19, 'vjhvjh', 'vhvhj', 'vjhvhj', 'hjvvh', 'vvjhvjh', 'A', '2023-02-22 14:59:58'),
(373, 19, 'vhjvjhv', 'vhviuuf', 'chc', 'yfvick', 'vfikhnvf', 'A', '2023-02-22 14:59:58'),
(374, 19, 'yucmjc', 'vuib', 'vfyibui', ' y rbknk6r ', ' tf yugui gu', 'A', '2023-02-22 14:59:58'),
(375, 19, ' ifk y guil', ' gig k gk gu', 'bbugio7tvt', 'y gk gkg kg u', 'otv77tbboy', 'A', '2023-02-22 14:59:58'),
(376, 19, 't7bovtbobotib7toitb7o', 't77tbtv7vt7i', 'tvtivvtit', 'tvvtvttvi', 'tvtvitvi', 'A', '2023-02-22 14:59:58'),
(377, 19, 'tvtv', 'vvtvivitu', 'ruyfyuj', 'ttyutr7y', 'fiifihyfi', 'A', '2023-02-22 14:59:58'),
(378, 19, 'iyhfifrififr', 'yfiifiuggiu', 'fyjfjgfi7fr78', 'yjfjygiut78r', 'fuyfyjfjf', 'A', '2023-02-22 14:59:58'),
(379, 19, 'fyyfuyf', 'yfjyfjhfjh', 'jyfjfuyffi', 'fjfjfjfurf8u', 'jyfjyfjy', 'A', '2023-02-22 14:59:58'),
(380, 19, 'fjyfjfyuf', 'fyufuy', 'fyyfyuf', 'fyfyfy', 'yfyfuyfufy', 'A', '2023-02-22 14:59:58'),
(381, 20, 'sadasdGG', 'HYGUY', 'GYYUGYU', 'YGUUYG', 'gygyu', 'A', '2023-02-28 05:32:14'),
(382, 20, 'ugyguyg', 'uyguy', 'guygyu', 'guguy', 'gyuggy', 'A', '2023-02-28 05:32:14'),
(383, 20, 'uygyg', 'yuuyuy', 'guygyuygyu', 'gyuuyg', 'yugy', 'A', '2023-02-28 05:32:14'),
(384, 20, 'yguguyggyu', 'gyuguy', 'yuguyggyu', 'gyuygug', 'yugyu', 'A', '2023-02-28 05:32:14'),
(385, 20, 'yuguyg', 'yguyguygu', 'uyggyugu', 'ugygyugu', 'gyuguy', 'A', '2023-02-28 05:32:14'),
(386, 20, 'yugguyguy', 'guygyug', 'gyuguyg', 'gyugyug', 'ugygyugyu', 'A', '2023-02-28 05:32:14'),
(387, 20, 'uyggyugyu', 'gyuuygygu', 'yuggyug', 'gyuyuggyu', 'guygyug', 'A', '2023-02-28 05:32:14'),
(388, 20, 'gyuguygyuyug', 'gyugyugyu', 'yugguyguy', 'gyuyugygu', 'gygygyu', 'A', '2023-02-28 05:32:14'),
(389, 20, 'gyugyugyu', 'gyugugyu', 'yguguguy', 'gyuggyu', 'gygyu', 'A', '2023-02-28 05:32:14'),
(390, 20, 'guyguyguy', 'gyuguyguy', 'gyuuyg', 'gyugyugyu', 'gyuguy', 'A', '2023-02-28 05:32:14'),
(391, 21, '1.	The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-01 09:52:57'),
(392, 21, 'vhkvhj', 'vhjvjh', 'vhjhjvhvj', 'vhjvhj', 'vhhjvhvj', 'A', '2023-03-01 09:52:57'),
(393, 21, 'vhjhvhvjvhj', 'vhhvhvj', 'hvhvhvjhjv', 'vhjhvjhjv', 'vhjhjvhvj', 'A', '2023-03-01 09:52:57'),
(394, 21, 'vhjhvjvhj', 'k ibilhvkc', 'vjkjvkvk', 'vkvjkv', 'jvkvkvkj', 'A', '2023-03-01 09:52:57'),
(395, 21, 'vvkkvuj', 'vhkvhvhk', 'vhkhvkkv', 'vkkvjvjk', 'kvvkjkv', 'A', '2023-03-01 09:52:57'),
(396, 21, 'vkkvjjkv', 'vkjkjvkjv', 'jkvkvjkvj', 'vjkkvjjkv', 'vkjkvjjvk', 'A', '2023-03-01 09:52:57'),
(397, 21, 'vjkkjvjvk', 'vkvkhvkfiy', 'fufu', 'uvuyc', 'kvjvjuv', 'A', '2023-03-01 09:52:57'),
(398, 21, 'hycjfhvvk', 'ugjjglijgi', 'gkgigigogio', 'kkgjllblg', 'gogugugu', 'A', '2023-03-01 09:52:57'),
(399, 21, 'guugguguk', 'ggggkjg', 'guuigjduj', 'guivjvhkhu', 'uufkuui', 'A', '2023-03-01 09:52:57'),
(400, 21, 'udgugsdu', 'udgsakjgfiu', 'vfkguif', 'gdfukag', 'gfkuagfua', 'A', '2023-03-01 09:52:57'),
(401, 22, 'csjdbkjasbf', 'uibfuabfjkasbf', 'bfjkasbfdbfjk', 'bdfasjkfbklfbajk', 'bfjkbasjfkbaskjf', 'A', '2023-03-01 11:06:30'),
(402, 22, 'fajksbfajksfb a', 'bjkdbfkajsb', 'dfabfjbasjk', 'bfkjsabfkja', 'bfjksbdfkjab', 'A', '2023-03-01 11:06:30'),
(403, 22, 'djbfjksdbfjk', 'fjkabsfjkab', 'fbajksfbaskjfbakj', 'kjfbaskjfbajk', 'djkfbajksfbaks', 'A', '2023-03-01 11:06:30'),
(404, 22, 'sdkjfbjsdkfbk', 'jkdfbskjdfbkjas', 'sjkdfbjksdfb', 'bkjdsbfkjsadbfkj', 'jkbfdsjkfbskj', 'A', '2023-03-01 11:06:30'),
(405, 22, 'skjdfbjksdbfjkas', 'cjkvbsjkfbdskjfb', 'hskdjfhsdfhs', 'oushdiasufhiaufh', 'djkfbdsjkfbjk', 'A', '2023-03-01 11:06:30'),
(406, 22, 'skhfkjsdhfjkh', 'dskjfbdskjfbsjk', 'fbdsjkbfsjkdfbsk', 'bfjksdbfsjkdfbksb', 'bfsjkdbfksbfkjas', 'A', '2023-03-01 11:06:30'),
(407, 22, 'bfjskdfbjksdb', 'bdskjfbskj', 'bfskfbksjd', 'bfdsjkbfsjkdb', 'jkfbdjfksbdkf', 'A', '2023-03-01 11:06:30'),
(408, 22, 'fbkabfkjasbdf', 'jkfsbdkfjsbdkfj', 'bfjksbfkjsdb', 'bfdsjkfbsdkj', 'bfdsjkfbsjkdfb', 'A', '2023-03-01 11:06:30'),
(409, 22, 'vbskfbsdkjbf', 'fbskdfbsdjkfbs', 'bfsjkdfbjskdfb', 'fbdsjkfbjksdfb', 'jkfbdfkjsdbzf', 'A', '2023-03-01 11:06:30'),
(410, 22, 'bajkf,bsdkjfb', 'bfusdbfjksd', 'bfusdbfuskb', 'bjsdkfsk', 'bdkfjbfb', 'A', '2023-03-01 11:06:30'),
(411, 22, 'fbsjkbfsjk', 'bfsjkdfbskjdfb', 'bjksdfbksdbf', 'bfksdjbfksb', 'fbdskfbskj', 'A', '2023-03-01 11:06:30'),
(412, 22, 'asnfbasfbaui', 'bksdbdb', 'bjkasfksd 9', 'ukjsbdfjksbfk', 'bsdfbjksfbjk', 'A', '2023-03-01 11:06:30'),
(413, 22, 'jksbdjkgsbdkgjsb', 'jbfdskjfbskdjf', 'bjkdsbfjsbdfksj', 'sgbjksdbgkj', 'jkfsdbgjkb', 'A', '2023-03-01 11:06:30'),
(414, 22, 'sdkjgbsdkjfb', 'jksdbdgjksdbg', 'bgsdkjbgkjsdbj', 'bfgdsjkbgksjbgkj', 'fkdjsbgksjdgb', 'A', '2023-03-01 11:06:30'),
(415, 22, 'gbsjkgbdskjgbskj', 'bjkgsbgksdbgk', 'bgskjdgbksjgbkjs', 'bdskjbgksdbg', 'jkgbsdjkgbskjg', 'A', '2023-03-01 11:06:30'),
(416, 22, 'gbksbgkjsg', 'bskjfgbskdbiug', 'bfdgbvgbf', 'bfdgjksf', 'bgksdgkbjs', 'A', '2023-03-01 11:06:30'),
(417, 22, 'gkjsdabsgjgsj', 'bgjsbgkjbs', 'ubdsuaebgsl', 'bJBUGJKSBGKJSB', 'BSKGBKJSBGJ', 'A', '2023-03-01 11:06:30'),
(418, 22, 'gbnsdkjgbs', 'bgksgdbkjs', 'bivjyucyu', 'gjcvjyc', 'cgctujv', 'A', '2023-03-01 11:06:30'),
(419, 22, 'cjiycjhvbyuc', 'cuyfgiuv', 'uviycuyik', 'yucvycyu', 'yucuycvuyv', 'A', '2023-03-01 11:06:30'),
(420, 22, 'vfiyvfy', 'uguhu', 'yuygfg', 'fygfyfyufu', 'uyfyucfuy', 'A', '2023-03-01 11:06:30'),
(421, 23, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(422, 23, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(423, 23, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(424, 23, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(425, 23, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(426, 23, 'The web system can perform a Student Score, Mean, Mean Percentage Score, Standard Deviation, and Item Analysis with minimum requirements.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(427, 23, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(428, 23, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Fair', 'Good', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(429, 23, 'The web system creating accounts, classes, and activities is easy to operate.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(430, 23, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Fair', 'Good', 'Need Improvement', 'A', '2023-03-03 20:05:38'),
(431, 24, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:51'),
(432, 24, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(433, 24, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(434, 24, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(435, 24, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(436, 24, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(437, 24, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(438, 24, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(439, 24, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(440, 24, 'The web systemâ€™s end user, student, and teacher interface are pleasing with its layout and color used.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-03 20:30:52'),
(441, 25, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(442, 25, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(443, 25, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(444, 25, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(445, 25, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(446, 25, 'The web system can perform a Student Score, Mean, Mean Percentage Score, Standard Deviation, and Item Analysis with minimum requirements.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(447, 25, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(448, 25, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(449, 25, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(450, 25, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(451, 25, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(452, 25, 'The web systemâ€™s end user, student, and teacher interface are pleasing with its layout and color used.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(453, 25, 'The web system creating accounts, classes, and activities is easy to operate.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(454, 25, 'The web system screen size is appropriate for different screen sizes such as personal computers, laptops, tablets, and mobile phones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(455, 25, 'The web system is available on a different device as long as there is an internet and a browser such as Chrome, Microsoft Edge, Mozilla Firefox, etc.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(456, 25, 'The web system can be upgraded without a major adjustment for the user part.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(457, 25, 'The web system allows users to log in most of the time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(458, 25, 'The web system record the score of the student and provide an accurate Mean, Mean Percentage Score, Standard Deviation, and Item Analysis.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(459, 25, 'The web system can recover test scores result when there is an internet failure or disconnection for the past data score recorded.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(460, 25, 'The web system maintain the main function such as giving answer sheets and giving score even updating features.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 04:54:38'),
(461, 26, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(462, 26, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(463, 26, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(464, 26, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(465, 26, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(466, 26, 'The web system can perform a Student Score, Mean, Mean Percentage Score, Standard Deviation, and Item Analysis with minimum requirements.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(467, 26, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(468, 26, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(469, 26, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(470, 26, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(471, 26, 'The web systemâ€™s end user, student, and teacher interface are pleasing with its layout and color used.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(472, 26, 'The web system creating accounts, classes, and activities is easy to operate.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(473, 26, 'The web system screen size is appropriate for different screen sizes such as personal computers, laptops, tablets, and mobile phones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(474, 26, 'The web system is available on a different device as long as there is an internet and a browser such as Chrome, Microsoft Edge, Mozilla Firefox, etc.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(475, 26, 'The web system can be upgraded without a major adjustment for the user part.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(476, 26, 'The web system allows users to log in most of the time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(477, 26, 'The web system record the score of the student and provide an accurate Mean, Mean Percentage Score, Standard Deviation, and Item Analysis.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(478, 26, 'The web system can recover test scores result when there is an internet failure or disconnection for the past data score recorded.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(479, 26, 'The web system maintain the main function such as giving answer sheets and giving score even updating features.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(480, 26, 'The web system can be modified such as updating the data and still perform efficiently.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(481, 26, 'The web system can be used at the same time without error on different devices such as laptops and smartphones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(482, 26, 'The web system only accepts the correct combination of username and password of the registered user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(483, 26, 'The web system required the user to agree to the terms and conditions before creating an account', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(484, 26, 'The web system recovers a forgotten password by the sending code to the registered email.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(485, 26, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(486, 26, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(487, 26, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(488, 26, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(489, 26, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(490, 26, 'The web system can perform a Student Score, Mean, Mean Percentage Score, Standard Deviation, and Item Analysis with minimum requirements.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(491, 26, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(492, 26, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(493, 26, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(494, 26, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(495, 26, 'The web systemâ€™s end user, student, and teacher interface are pleasing with its layout and color used.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(496, 26, 'The web system creating accounts, classes, and activities is easy to operate.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(497, 26, 'The web system screen size is appropriate for different screen sizes such as personal computers, laptops, tablets, and mobile phones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(498, 26, 'The web system is available on a different device as long as there is an internet and a browser such as Chrome, Microsoft Edge, Mozilla Firefox, etc.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(499, 26, 'The web system can be upgraded without a major adjustment for the user part.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(500, 26, 'The web system allows users to log in most of the time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:06:33'),
(501, 27, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(502, 27, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(503, 27, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(504, 27, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(505, 27, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(506, 27, 'The web system can perform a Student Score, Mean, Mean Percentage Score, Standard Deviation, and Item Analysis with minimum requirements.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(507, 27, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(508, 27, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(509, 27, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(510, 27, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(511, 27, 'The web systemâ€™s end user, student, and teacher interface are pleasing with its layout and color used.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(512, 27, 'The web system creating accounts, classes, and activities is easy to operate.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(513, 27, 'The web system screen size is appropriate for different screen sizes such as personal computers, laptops, tablets, and mobile phones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(514, 27, 'The web system is available on a different device as long as there is an internet and a browser such as Chrome, Microsoft Edge, Mozilla Firefox, etc.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(515, 27, 'The web system can be upgraded without a major adjustment for the user part.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(516, 27, 'The web system allows users to log in most of the time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(517, 27, 'The web system record the score of the student and provide an accurate Mean, Mean Percentage Score, Standard Deviation, and Item Analysis.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(518, 27, 'The web system can recover test scores result when there is an internet failure or disconnection for the past data score recorded.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(519, 27, 'The web system maintain the main function such as giving answer sheets and giving score even updating features.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(520, 27, 'The web system can be modified such as updating the data and still perform efficiently.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(521, 27, 'The web system can be used at the same time without error on different devices such as laptops and smartphones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(522, 27, 'The web system only accepts the correct combination of username and password of the registered user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(523, 27, 'The web system required the user to agree to the terms and conditions before creating an account', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(524, 27, 'The web system recovers a forgotten password by the sending code to the registered email.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(525, 27, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(526, 27, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(527, 27, 'The web system uses appropriate subject codes for every student enrolled in teacherâ€™s class and access activities.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(528, 27, 'The web system can generate a test score result in an appropriate amount of time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(529, 27, 'The web system appropriately uses the smartphone camera to capture the answer sheet and give a test score.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(530, 27, 'The web system can perform a Student Score, Mean, Mean Percentage Score, Standard Deviation, and Item Analysis with minimum requirements.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(531, 27, 'The web-based system can create subject classes, activities, and answer sheets on Personal Computer, Laptop, or Mobile phone without slowing down.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(532, 27, 'The web system can create, update and delete the subject class and class activities while using multiple users simultaneously.  ', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(533, 27, 'The web system can perform on any smartphone device such as android and IOS.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(534, 27, 'The web system creating and checking answer sheets is easy to learn.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(535, 27, 'The web systemâ€™s end user, student, and teacher interface are pleasing with its layout and color used.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(536, 27, 'The web system creating accounts, classes, and activities is easy to operate.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(537, 27, 'The web system screen size is appropriate for different screen sizes such as personal computers, laptops, tablets, and mobile phones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(538, 27, 'The web system is available on a different device as long as there is an internet and a browser such as Chrome, Microsoft Edge, Mozilla Firefox, etc.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(539, 27, 'The web system can be upgraded without a major adjustment for the user part.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(540, 27, 'The web system allows users to log in most of the time.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(541, 27, 'The web system record the score of the student and provide an accurate Mean, Mean Percentage Score, Standard Deviation, and Item Analysis.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(542, 27, 'The web system can recover test scores result when there is an internet failure or disconnection for the past data score recorded.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(543, 27, ' The web system maintain the main function such as giving answer sheets and giving score even updating features.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(544, 27, 'The web system can be modified such as updating the data and still perform efficiently.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(545, 27, 'The web system can be used at the same time without error on different devices such as laptops and smartphones.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(546, 27, 'The web system only accepts the correct combination of username and password of the registered user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(547, 27, 'The web system required the user to agree to the terms and conditions before creating an account', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(548, 27, 'The web system recovers a forgotten password by the sending code to the registered email.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(549, 27, 'The web system provides a ready-to-print questionnaire and answer sheet, checks using a smartphone camera, and gives a score result.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(550, 27, 'The web system gives accurate score results of the answered bubble mark sheets according to the key answer set by the user.', 'Very Good', 'Good', 'Fair', 'Need Improvement', 'A', '2023-03-04 05:22:14'),
(551, 28, 'Hahahahah\r\n', 'Hahajaj', 'Jahhaha', 'Hahhaha', 'Hahahha', 'A', '2023-03-04 07:38:48'),
(552, 28, 'Hahahha', 'Hahahha', 'Hahhaha', 'Hahahha', 'Hahahha', 'A', '2023-03-04 07:38:48'),
(553, 28, 'Hahahha', 'Hahauah', 'Hahahha', 'Hahahha', 'Hahahha', 'A', '2023-03-04 07:38:48'),
(554, 28, 'Hahahau', 'Hahahha', 'Hahahah', 'Hahaha', 'Hahahha', 'A', '2023-03-04 07:38:48'),
(555, 28, 'Hahahha', 'Hahahah', 'Hahahah', 'Hahahah', 'Hahahah', 'A', '2023-03-04 07:38:48'),
(556, 28, 'Hahahah', 'Hahajah', 'Hahha', 'Hahahha', 'Hahaha', 'A', '2023-03-04 07:38:48'),
(557, 28, 'Hahaha', 'Jajaja', 'Hajaha', 'Hahahah', 'Hahaha', 'A', '2023-03-04 07:38:48'),
(558, 28, 'Hahauau', 'Hahahah', 'Hahaha', 'Hahaha', 'Gagag', 'A', '2023-03-04 07:38:48'),
(559, 28, 'Hahaha', 'Hahahha', 'Hahahha', 'Jajajah', 'Hahaha', 'A', '2023-03-04 07:38:48'),
(560, 28, 'Hahaha', 'Hahahah', 'Hahaha', 'Hahaha', 'Hahahah', 'A', '2023-03-04 07:38:48'),
(561, 29, 'wdhwjkdasjkh', 'hajkshfakjshf', 'hfajksdfhakdhf', 'jasfhasjfhajk', 'hadjkfhakdjfh', 'A', '2023-03-04 14:30:39'),
(562, 29, 'dhfajkfhkjad', 'adhfkjadfkj', 'sdhfkjsdfkj', 'fhajkdfhajkdh', 'dhfjkdsfhjk', 'A', '2023-03-04 14:30:39'),
(563, 29, 'hdsfjkdhfjk', 'sdhfkjsdfh', 'ahdjkshdgkj', 'dsjkfhjaskd', 'sdhjkhdkjh', 'A', '2023-03-04 14:30:39'),
(564, 29, 'ahfjksdkjs', 'hsdjkhsdkjf', 'dshjkgadjks', 'sdhgkjsdhkgjahs', 'hdskjfhsdkjf', 'A', '2023-03-04 14:30:39'),
(565, 29, 'fhjksdhfkjsd', 'hfakjfhjk', 'shfkjdhfjks', 'hfjkasdhfkjsdhf', 'shdjksdh', 'A', '2023-03-04 14:30:39'),
(566, 29, 'djkfhsjkdghkjsdgh', 'sdhfkjsdgkjsdgh', 'hsdjkhsg', 'hsjdhvjkdh', 'hsjkdhgjdsv', 'A', '2023-03-04 14:30:39'),
(567, 29, 'dhjkfhdsjghsdjgk', 'hsdkjsjdhghj', 'hjskdhdgsh', 'hsdkjgdsg', 'hdsjkfghskjd', 'A', '2023-03-04 14:30:39'),
(568, 29, 'dshjkgsdgkj', 'sjksdhjksdg', 'hskjdjksdhg', 'sdjghjdskg', 'hsdkjfskjdgh', 'A', '2023-03-04 14:30:39'),
(569, 29, 'sdjkgfsdh', 'hdsjkfhjdskg', 'hskdjgkjsdv', 'hjdskhgkjsdh', 'hsjdkghskjdh', 'A', '2023-03-04 14:30:39'),
(570, 29, 'sjkdghsdhgk', 'hdkjhsdkgj', 'hkdsjjksdgh', 'hsdgkjhsdgkj', 'jskdghsjk', 'A', '2023-03-04 14:30:39'),
(571, 30, 'sdfgsadgHGFS', 'DSFGHSDGF', 'gjh', 'dshfsdh', 'ghj', 'A', '2023-03-05 05:04:39'),
(572, 30, 'jhgjh', 'ghjghj', 'hjgjhg', 'gjhghjg', 'jhgjhg', 'A', '2023-03-05 05:04:39'),
(573, 30, 'hjghjg', 'hjgjh', 'gjhgjh', 'hjgjhg', 'hjgjhg', 'A', '2023-03-05 05:04:39'),
(574, 30, 'jhgjh', 'hjgjh', 'ghjgh', 'hjghjg', 'gjhghj', 'A', '2023-03-05 05:04:39'),
(575, 30, 'hjghjgh', 'ghjghj', 'gjhghj', 'gjhghj', 'gjhghj', 'A', '2023-03-05 05:04:39'),
(576, 30, 'hjghjg', 'ghjg', 'hjvc', 'ghjgh', 'vjhvhj', 'A', '2023-03-05 05:04:39'),
(577, 30, 'gjhgjgyu', 'jhjhgjh', 'jhgvgjhvj', 'hjgjg7', 'vjhvjhg', 'A', '2023-03-05 05:04:39'),
(578, 30, 'yvyufvyub', 'vjhvjy', 'hvjjhvhj', 'vjhvjhvy', 'vjhvjh', 'A', '2023-03-05 05:04:39'),
(579, 30, 'vhjvhj', 'vyuchyuc', 'cujycuyhc', 'jvhvjycvuy', 'cyucyuyc', 'A', '2023-03-05 05:04:39'),
(580, 30, 'cyuhujycyu', 'cjcgcg', 'cgcgh', 'cyucgjc', 'ghcghc', 'A', '2023-03-05 05:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_score`
--

CREATE TABLE `tbl_test_score` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `item_no` int(11) DEFAULT NULL,
  `correct_answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_test_score`
--

INSERT INTO `tbl_test_score` (`id`, `student_id`, `test_id`, `item_no`, `correct_answer`) VALUES
(1445, 17, 19, 1, 1),
(1446, 17, 19, 2, 0),
(1447, 17, 19, 3, 0),
(1448, 17, 19, 4, 0),
(1449, 17, 19, 5, 0),
(1450, 17, 19, 6, 0),
(1451, 17, 19, 7, 0),
(1452, 17, 19, 8, 1),
(1453, 17, 19, 9, 1),
(1463, 21, 21, 1, 0),
(1464, 21, 21, 2, 0),
(1465, 21, 21, 3, 0),
(1466, 21, 21, 4, 0),
(1467, 21, 21, 5, 1),
(1468, 21, 21, 6, 1),
(1469, 21, 21, 7, 0),
(1470, 21, 21, 8, 0),
(1471, 21, 21, 9, 0),
(1472, 20, 21, 1, 0),
(1473, 20, 21, 2, 1),
(1474, 20, 21, 3, 0),
(1475, 20, 21, 4, 1),
(1476, 20, 21, 5, 0),
(1477, 20, 21, 6, 0),
(1478, 20, 21, 7, 1),
(1479, 20, 21, 8, 0),
(1480, 20, 21, 9, 0),
(1481, 18, 19, 1, 0),
(1482, 18, 19, 2, 0),
(1483, 18, 19, 3, 0),
(1484, 18, 19, 4, 1),
(1485, 18, 19, 5, 1),
(1486, 18, 19, 6, 0),
(1487, 18, 19, 7, 0),
(1488, 18, 19, 8, 0),
(1489, 18, 19, 9, 0),
(1490, 19, 19, 1, 1),
(1491, 19, 19, 2, 0),
(1492, 19, 19, 3, 0),
(1493, 19, 19, 4, 0),
(1494, 19, 19, 5, 0),
(1495, 19, 19, 6, 0),
(1496, 19, 19, 7, 0),
(1497, 19, 19, 8, 1),
(1498, 19, 19, 9, 1),
(1499, 18, 21, 1, 1),
(1500, 18, 21, 2, 1),
(1501, 18, 21, 3, 1),
(1502, 18, 21, 4, 1),
(1503, 18, 21, 5, 1),
(1504, 18, 21, 6, 1),
(1505, 18, 21, 7, 1),
(1506, 18, 21, 8, 1),
(1507, 18, 21, 9, 1),
(1508, 26, 24, 1, 0),
(1509, 26, 24, 2, 0),
(1510, 26, 24, 3, 0),
(1511, 26, 24, 4, 1),
(1512, 26, 24, 5, 1),
(1513, 26, 24, 6, 0),
(1514, 26, 24, 7, 0),
(1515, 26, 24, 8, 0),
(1516, 26, 24, 9, 0),
(1517, 21, 26, 1, 0),
(1518, 21, 26, 2, 0),
(1519, 21, 26, 3, 0),
(1520, 21, 26, 4, 0),
(1521, 21, 26, 5, 0),
(1522, 21, 26, 6, 1),
(1523, 21, 26, 7, 1),
(1524, 21, 26, 8, 0),
(1525, 21, 26, 9, 0),
(1526, 21, 26, 10, 0),
(1527, 21, 26, 11, 1),
(1528, 21, 26, 12, 1),
(1529, 21, 26, 13, 0),
(1530, 21, 26, 14, 0),
(1531, 21, 26, 15, 0),
(1532, 21, 26, 16, 0),
(1533, 21, 26, 17, 0),
(1534, 21, 26, 18, 0),
(1535, 21, 26, 19, 1),
(1536, 21, 26, 20, 1),
(1537, 21, 26, 21, 1),
(1538, 21, 26, 22, 1),
(1539, 21, 26, 23, 0),
(1540, 21, 26, 24, 0),
(1541, 21, 26, 25, 0),
(1542, 21, 26, 26, 0),
(1543, 21, 26, 27, 0),
(1544, 21, 26, 28, 0),
(1545, 21, 26, 29, 0),
(1546, 21, 26, 30, 0),
(1547, 21, 26, 31, 1),
(1548, 21, 26, 32, 0),
(1549, 21, 26, 33, 0),
(1550, 21, 26, 34, 0),
(1551, 21, 26, 35, 0),
(1552, 21, 26, 36, 0),
(1553, 21, 26, 37, 1),
(1554, 21, 26, 38, 0),
(1555, 21, 26, 39, 0),
(1556, 21, 26, 40, 0),
(1557, 19, 27, 1, 1),
(1558, 19, 27, 2, 1),
(1559, 19, 27, 3, 1),
(1560, 19, 27, 4, 1),
(1561, 19, 27, 5, 1),
(1562, 19, 27, 6, 1),
(1563, 19, 27, 7, 1),
(1564, 19, 27, 8, 1),
(1565, 19, 27, 9, 1),
(1566, 19, 27, 10, 1),
(1567, 19, 27, 11, 0),
(1568, 19, 27, 12, 0),
(1569, 19, 27, 13, 0),
(1570, 19, 27, 14, 0),
(1571, 19, 27, 15, 0),
(1572, 19, 27, 16, 0),
(1573, 19, 27, 17, 0),
(1574, 19, 27, 18, 0),
(1575, 19, 27, 19, 0),
(1576, 19, 27, 20, 0),
(1577, 19, 27, 21, 0),
(1578, 19, 27, 22, 0),
(1579, 19, 27, 23, 0),
(1580, 19, 27, 24, 0),
(1581, 19, 27, 25, 0),
(1582, 19, 27, 26, 0),
(1583, 19, 27, 27, 0),
(1584, 19, 27, 28, 0),
(1585, 19, 27, 29, 0),
(1586, 19, 27, 30, 0),
(1587, 19, 27, 31, 0),
(1588, 19, 27, 32, 0),
(1589, 19, 27, 33, 0),
(1590, 19, 27, 34, 0),
(1591, 19, 27, 35, 0),
(1592, 19, 27, 36, 0),
(1593, 19, 27, 37, 0),
(1594, 19, 27, 38, 0),
(1595, 19, 27, 39, 0),
(1596, 19, 27, 40, 0),
(1597, 19, 27, 41, 0),
(1598, 19, 27, 42, 0),
(1599, 19, 27, 43, 0),
(1600, 19, 27, 44, 0),
(1601, 19, 27, 45, 0),
(1602, 19, 27, 46, 0),
(1603, 19, 27, 47, 0),
(1604, 19, 27, 48, 0),
(1605, 19, 27, 49, 0),
(1606, 19, 27, 50, 0),
(1607, 26, 25, 1, 0),
(1608, 26, 25, 2, 1),
(1609, 26, 25, 3, 0),
(1610, 26, 25, 4, 0),
(1611, 26, 25, 5, 0),
(1612, 26, 25, 6, 0),
(1613, 26, 25, 7, 0),
(1614, 26, 25, 8, 0),
(1615, 26, 25, 9, 0),
(1616, 26, 25, 10, 1),
(1617, 26, 25, 11, 0),
(1618, 26, 25, 12, 0),
(1619, 26, 25, 13, 0),
(1620, 26, 25, 14, 0),
(1621, 26, 25, 15, 1),
(1622, 26, 25, 16, 1),
(1623, 26, 25, 17, 0),
(1624, 26, 25, 18, 0),
(1625, 26, 25, 19, 0),
(1626, 20, 22, 1, 0),
(1627, 20, 22, 2, 0),
(1628, 20, 22, 3, 0),
(1629, 20, 22, 4, 0),
(1630, 20, 22, 5, 1),
(1631, 20, 22, 6, 0),
(1632, 20, 22, 7, 0),
(1633, 20, 22, 8, 0),
(1634, 20, 22, 9, 1),
(1635, 20, 22, 10, 0),
(1636, 20, 22, 11, 0),
(1637, 20, 22, 12, 1),
(1638, 20, 22, 13, 0),
(1639, 20, 22, 14, 1),
(1640, 20, 22, 15, 0),
(1641, 20, 22, 16, 0),
(1642, 20, 22, 17, 1),
(1643, 20, 22, 18, 0),
(1644, 20, 22, 19, 0),
(1645, 20, 22, 20, 0),
(1656, 19, 28, 1, 0),
(1657, 19, 28, 2, 0),
(1658, 19, 28, 3, 1),
(1659, 19, 28, 4, 0),
(1660, 19, 28, 5, 0),
(1661, 19, 28, 6, 0),
(1662, 19, 28, 7, 0),
(1663, 19, 28, 8, 0),
(1664, 19, 28, 9, 1),
(1665, 19, 28, 10, 0),
(1666, 21, 28, 1, 0),
(1667, 21, 28, 2, 0),
(1668, 21, 28, 3, 1),
(1669, 21, 28, 4, 0),
(1670, 21, 28, 5, 0),
(1671, 21, 28, 6, 0),
(1672, 21, 28, 7, 0),
(1673, 21, 28, 8, 0),
(1674, 21, 28, 9, 1),
(1675, 21, 28, 10, 0),
(1676, 25, 21, 1, 1),
(1677, 25, 21, 2, 0),
(1678, 25, 21, 3, 0),
(1679, 25, 21, 4, 0),
(1680, 25, 21, 5, 0),
(1681, 25, 21, 6, 0),
(1682, 25, 21, 7, 1),
(1683, 25, 21, 8, 0),
(1684, 25, 21, 9, 1),
(1685, 25, 21, 10, 1),
(1686, 24, 23, 1, 1),
(1687, 24, 23, 2, 0),
(1688, 24, 23, 3, 0),
(1689, 24, 23, 4, 0),
(1690, 24, 23, 5, 0),
(1691, 24, 23, 6, 0),
(1692, 24, 23, 7, 1),
(1693, 24, 23, 8, 0),
(1694, 24, 23, 9, 1),
(1695, 24, 23, 10, 1),
(1696, 22, 24, 1, 1),
(1697, 22, 24, 2, 0),
(1698, 22, 24, 3, 0),
(1699, 22, 24, 4, 0),
(1700, 22, 24, 5, 0),
(1701, 22, 24, 6, 0),
(1702, 22, 24, 7, 1),
(1703, 22, 24, 8, 0),
(1704, 22, 24, 9, 1),
(1705, 22, 24, 10, 1),
(1706, 26, 21, 1, 1),
(1707, 26, 21, 2, 0),
(1708, 26, 21, 3, 0),
(1709, 26, 21, 4, 0),
(1710, 26, 21, 5, 0),
(1711, 26, 21, 6, 1),
(1712, 26, 21, 7, 0),
(1713, 26, 21, 8, 0),
(1714, 26, 21, 9, 0),
(1715, 26, 21, 10, 0),
(1716, 30, 30, 1, 0),
(1717, 30, 30, 2, 0),
(1718, 30, 30, 3, 0),
(1719, 30, 30, 4, 1),
(1720, 30, 30, 5, 1),
(1721, 30, 30, 6, 0),
(1722, 30, 30, 7, 0),
(1723, 30, 30, 8, 0),
(1724, 30, 30, 9, 0),
(1725, 30, 30, 10, 0),
(1736, 20, 24, 1, 1),
(1737, 20, 24, 2, 1),
(1738, 20, 24, 3, 1),
(1739, 20, 24, 4, 1),
(1740, 20, 24, 5, 1),
(1741, 20, 24, 6, 1),
(1742, 20, 24, 7, 1),
(1743, 20, 24, 8, 1),
(1744, 20, 24, 9, 1),
(1745, 20, 24, 10, 1),
(1746, 18, 24, 1, 1),
(1747, 18, 24, 2, 1),
(1748, 18, 24, 3, 1),
(1749, 18, 24, 4, 1),
(1750, 18, 24, 5, 1),
(1751, 18, 24, 6, 1),
(1752, 18, 24, 7, 1),
(1753, 18, 24, 8, 1),
(1754, 18, 24, 9, 1),
(1755, 18, 24, 10, 1),
(1756, 19, 24, 1, 1),
(1757, 19, 24, 2, 1),
(1758, 19, 24, 3, 1),
(1759, 19, 24, 4, 1),
(1760, 19, 24, 5, 1),
(1761, 19, 24, 6, 1),
(1762, 19, 24, 7, 1),
(1763, 19, 24, 8, 1),
(1764, 19, 24, 9, 1),
(1765, 19, 24, 10, 1),
(1766, 22, 25, 1, 1),
(1767, 22, 25, 2, 1),
(1768, 22, 25, 3, 0),
(1769, 22, 25, 4, 0),
(1770, 22, 25, 5, 0),
(1771, 22, 25, 6, 1),
(1772, 22, 25, 7, 0),
(1773, 22, 25, 8, 0),
(1774, 22, 25, 9, 1),
(1775, 22, 25, 10, 0),
(1776, 22, 25, 11, 0),
(1777, 22, 25, 12, 0),
(1778, 22, 25, 13, 0),
(1779, 22, 25, 14, 0),
(1780, 22, 25, 15, 1),
(1781, 22, 25, 16, 0),
(1782, 22, 25, 17, 0),
(1783, 22, 25, 18, 1),
(1784, 22, 25, 19, 0),
(1785, 22, 25, 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_class`
--
ALTER TABLE `tbl_student_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_test`
--
ALTER TABLE `tbl_student_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test_qna`
--
ALTER TABLE `tbl_test_qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test_score`
--
ALTER TABLE `tbl_test_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_student_class`
--
ALTER TABLE `tbl_student_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_student_test`
--
ALTER TABLE `tbl_student_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_test_qna`
--
ALTER TABLE `tbl_test_qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=581;

--
-- AUTO_INCREMENT for table `tbl_test_score`
--
ALTER TABLE `tbl_test_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1786;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
