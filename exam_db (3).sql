-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 12:46 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`) VALUES
(1, 'CPW'),
(2, 'D-WEB'),
(3, 'ANDROID'),
(4, 'NETWORK ENGINEERING'),
(5, 'SOFTWARE ENGINEERING'),
(6, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `question_log`
--

CREATE TABLE `question_log` (
  `ques_id` int(11) NOT NULL,
  `question_l` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_log`
--

INSERT INTO `question_log` (`ques_id`, `question_l`) VALUES
(1, 'We use our ...... to see'),
(2, '\r\nwe use our ...... to see'),
(3, 'Kofi is a .....'),
(4, '\r\nwe use our ...... to see'),
(5, '\r\nwe use our ...... to see'),
(6, '\r\nwe use our ...... to see'),
(7, 'we use phone to ...'),
(8, '\r\nwe use our ...... to see'),
(9, '\r\nwe use our ...... to see'),
(10, '\r\nwe use our ...... to see'),
(11, '\r\nwe use our ...... to see'),
(12, '\r\nwe use our ...... to see'),
(13, '\r\nwe use our ...... to see'),
(14, '\r\nwe use our ...... to see'),
(15, '\r\nwe use our ...... to see'),
(16, '\r\nwe use our ...... to see'),
(17, '\r\nwe use our ...... to see'),
(18, '\r\nwe use our ...... to see'),
(19, 'we go to school to...'),
(20, '\r\nwe use our ...... to see'),
(21, 'Kofi is ...... to school'),
(22, 'Which one of the following character sets supports the chinese language?'),
(23, 'Aboakyire festival is a festival celebrated by the people of .............'),
(24, 'How many countries'),
(25, 'how many eyes has an eagle?'),
(26, '..................... is how rough or smooth a surface is'),
(27, 'what do you use to kiss a girl...'),
(28, 'Who is the current cartoonist of our class?'),
(29, '........... is seen when light reflect on an object'),
(30, 'kofi is a ........'),
(31, 'What is another name for two point perspective?'),
(32, 'Accra is the capital town of which country?  '),
(33, 'The following  is an example of support except '),
(34, 'How many point does Angular perspective have?'),
(35, 'how many eyes has an eagle?');

-- --------------------------------------------------------

--
-- Table structure for table `question_tb`
--

CREATE TABLE `question_tb` (
  `question_id` int(11) NOT NULL,
  `question` text,
  `question_image` varchar(200) DEFAULT NULL,
  `option_a` varchar(200) DEFAULT NULL,
  `option_b` varchar(200) DEFAULT NULL,
  `option_c` varchar(200) DEFAULT NULL,
  `option_d` varchar(200) DEFAULT NULL,
  `ans` varchar(200) DEFAULT NULL,
  `score` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_tb`
--

INSERT INTO `question_tb` (`question_id`, `question`, `question_image`, `option_a`, `option_b`, `option_c`, `option_d`, `ans`, `score`) VALUES
(29, 'In the year 2012, the people of Ghana received a bad news. What bad news was that ? ', 'uploads/Shatta-Wale.png', 'Nana Addo Danquah Akuffo Adoo lost the General elections. ', 'Teachers went on strick.', 'The president of the republic Ghana passed on', 'Doctors went on strike', 'The president of the republic Ghana passed on', 10),
(34, 'who is nana addo danquah', 'uploads/w_hong_kong_heat_wave_pool_party_2.jpg', 'taxi driver', 'president', 'doctor', 'teacher', 'president', 10),
(35, 'who is nana addo danquah', 'uploads/UCC-Alumni.png', 'taxi driver', 'president', 'doctor', 'teacher', 'president', 5),
(36, 'It is mandatory for all Ghanaians to cast their votes during general elections in exception of ', NULL, 'Radio presenters', 'Mentally disorderd people', 'Doctors', 'Security personnels ', 'Mentally disorderd people', 10),
(37, 'what do you use to kiss a girl...', NULL, 'Ass', 'lips', 'toe', 'Finger', 'lips', 2),
(39, 'what do you use to kiss a girl...', NULL, 'Ass', 'lips', 'toe', 'Finger', 'lips', 2),
(40, 'Boiled beans are supposed to be eaten during which time of the day ?', NULL, 'At dawn.', 'In the afternoon', 'Early in the morning', 'At night', 'In the afternoon', 5),
(41, 'how many car are there in the picture', 'uploads/MID-NIGHT RACE.jpg', '100', '1', '200', '22', '1', 5),
(42, 'Shatta Wale is a ................. artist', 'uploads/Shatta-Wale.png', 'Togo', 'Senigal', 'Mali', 'Ghanaian', 'Ghanaian', 3),
(43, 'WHAT IS PRAYER?', 'uploads/flyer.jpg', 'Communication with God', 'eating', 'drinking', 'sleeping', 'Communication with God', 5),
(44, 'if you eat beans at night, what effect will it have on you and the people around. ', 'uploads/IMG-20170929-WA0000[1].jpg', 'dangerous and deadly air is been realised ', 'you feel free ', 'you are highly honored', 'you gain scholarship to NIIT', 'dangerous and deadly air is been realised ', 5),
(45, 'how many monitors are in ocr3(niit) class', 'uploads/gamu.jpg', '20', '12', '11', '15', '20', 3),
(47, 'Accra is the capital town of which country? ', 'uploads/father_daughter.jpg', 'Togo', '	Benin', '	Ghana', 'Senegal', '	Ghana', 2),
(48, 'what do we use monitor for?', 'uploads/father_daughter.jpg', 'for eating', 'for fetching water', 'for displaying objects', 'for smoking', 'for displaying objects', 4),
(49, 'what do we use monitor for?', 'uploads/father_daughter.jpg', 'for eating', 'for fetching water', 'for displaying objects', 'for smoking', 'for displaying objects', 4),
(51, 'what is the work of database?', 'upload/father_daughter.jpg', 'to store records', 'to write code', 'to design', 'to browse', 'to store records', 2),
(52, 'what is the work of database?', 'uploads/father_daughter.jpg', 'to store records', 'to write code', 'to design', 'to browse', 'to store records', 2),
(53, 'what is the work of database?', 'uploads/father_daughter.jpg', 'to store records', 'to write code', 'to design', 'to browse', 'to store records', 2),
(54, 'what is the work of database?', 'uploads/father_daughter.jpg', 'to store records', 'to write code', 'to design', 'to browse', 'to store records', 2);

--
-- Triggers `question_tb`
--
DELIMITER $$
CREATE TRIGGER `quest_log` AFTER DELETE ON `question_tb` FOR EACH ROW insert into question_log (question_l)
 values  (old.question)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `score_tb`
--

CREATE TABLE `score_tb` (
  `score_id` int(11) NOT NULL,
  `student_score` varchar(5) DEFAULT NULL,
  `score_st_id` int(11) NOT NULL,
  `score_sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `st_id` int(11) NOT NULL,
  `st_lastname` varchar(20) DEFAULT NULL,
  `st_firstname` varchar(20) DEFAULT NULL,
  `student_code` varchar(10) DEFAULT NULL,
  `student_pass` varchar(8) DEFAULT NULL,
  `st_image` varchar(200) DEFAULT NULL,
  `st_course` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`st_id`, `st_lastname`, `st_firstname`, `student_code`, `student_pass`, `st_image`, `st_course`) VALUES
(1, 'coffie', 'micky', '5889303893', 'bomb11', NULL, 'D-WEB'),
(2, 'Ahianyo', 'Michael', 'R163006200', 'legends', NULL, 'D-WEB');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tb`
--

CREATE TABLE `subject_tb` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `user_firstname` varchar(200) DEFAULT NULL,
  `user_lastname` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `question_log`
--
ALTER TABLE `question_log`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `question_tb`
--
ALTER TABLE `question_tb`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `score_tb`
--
ALTER TABLE `score_tb`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `unique_id` (`student_code`);

--
-- Indexes for table `subject_tb`
--
ALTER TABLE `subject_tb`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `question_log`
--
ALTER TABLE `question_log`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `question_tb`
--
ALTER TABLE `question_tb`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject_tb`
--
ALTER TABLE `subject_tb`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
