-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220629.0f8fafb1b5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 07:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `password`, `type`) VALUES
(2, 'admin', '456456', 'admin'),
(18, 'Priyanka', '74068209@Pr', 'jobseeker'),
(19, 'KLE BCA DHARWAD', '123123', 'company'),
(20, 'Kittel College', '123123', 'company'),
(21, 'Mahesh P U', '123123', 'company'),
(22, 'BVB', '123123', 'company'),
(23, 'Y B Annigeri', 'Y B Annigeri', 'company'),
(25, 'Pratap', '123456', 'jobseeker'),
(26, 'Siddhalingayya', '953852', 'jobseeker'),
(27, 'Maktumhusen', '123123', 'jobseeker'),
(28, 'Manoj', 'M1234', 'jobseeker'),
(29, 'MALLIKARJUNA', '12345', 'jobseeker');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(80) NOT NULL,
  `cmp_descrip` varchar(100) NOT NULL,
  `cmp_addr` varchar(100) NOT NULL,
  `contact_person_name` varchar(20) NOT NULL,
  `cmp_phone_no` double NOT NULL,
  `cmp_mobile` double NOT NULL,
  `cmp_e_mail_id` varchar(20) NOT NULL,
  `cmp_website` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`cmp_id`, `cmp_name`, `cmp_descrip`, `cmp_addr`, `contact_person_name`, `cmp_phone_no`, `cmp_mobile`, `cmp_e_mail_id`, `cmp_website`, `img`) VALUES
(12, 'KLE BCA DHARWAD', 'The KLE Societys Bachelor of Computer Application BCA began in the year 2013 under the guidance of l', 'Corporation Circle Dharwad', 'Deepa Wadkar', 9738427400, 8362743364, 'kle@gmail.com', 'https://klebcadwd.co', 'kle 1.jpg'),
(13, 'Kittel College', 'The Kittel Arts College is located in Dharwad in the Indian state of Karnataka. The institution prov', 'P B Road, Dharwad 580001', 'Omkar D', 6363179986, 8362441693, 'kittle@gmail.com', 'https://collegedunia', 'kittlecollege.jpg'),
(14, 'Mahesh P U', 'Recognizes that human talent flourishes most readily in facilities where the most effective tools ex', 'Haliyal Road Dharwad', 'Pavitra B', 9113514325, 6366996063, 'maheshpu@gmail.com', 'https://maheshcolleg', 'maheshpu.jpg'),
(15, 'BVB', 'KLE Technological University (KLE Tech) has its roots in B. V. Bhoomaraddi College of Engineering an', 'KLE Technological University (KLE Tech) has its roots in B. V. Bhoomaraddi College of Engineering an', 'Kartik Iti', 8277726276, 8362378103, 'bvbcollege@gmail.com', 'https://www.kletech.', 'bvb.jpg'),
(16, 'Y B Annigeri', 'Annigeri College is founded by Mr. Nagaraj Y. Annigeri, a veteran teacher from “Annigeri Classes” a ', 'Haliyal Road Dharwad', 'Laxmikant D', 8495824382, 8362778600, 'ybannigeri@gmail.com', 'https://www.ybannige', 'annigeri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `emp_id` int(11) NOT NULL,
  `js_id` int(11) NOT NULL,
  `jb_opening_id` int(11) NOT NULL,
  `dt_of_recruitment` date NOT NULL,
  `dt_of_joining` date NOT NULL,
  `app_id` int(100) NOT NULL,
  `cmp_id` int(100) NOT NULL,
  `offer_ltr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`emp_id`, `js_id`, `jb_opening_id`, `dt_of_recruitment`, `dt_of_joining`, `app_id`, `cmp_id`, `offer_ltr`) VALUES
(1, 16, 1, '2022-08-19', '0000-00-00', 1, 12, '0'),
(2, 22, 1, '2022-08-19', '0000-00-00', 2, 12, '0'),
(3, 22, 2, '2022-08-19', '0000-00-00', 3, 12, '0'),
(4, 22, 8, '2022-08-19', '0000-00-00', 5, 12, '12311.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `exp_id` int(11) NOT NULL,
  `js_id` int(11) NOT NULL,
  `exp_name` varchar(50) NOT NULL,
  `exp_descip` varchar(80) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`exp_id`, `js_id`, `exp_name`, `exp_descip`, `from_date`, `to_date`) VALUES
(1, 16, '1year', 'Rassi technology Dharwad', '2020-01-01', '2020-12-31'),
(2, 22, 'Fresher', 'Studying ', '2022-08-16', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jb_opening_id` int(11) NOT NULL,
  `jb_name` varchar(20) NOT NULL,
  `jb_descrip` varchar(100) NOT NULL,
  `jb_type` varchar(100) NOT NULL,
  `jb_category_id` int(11) NOT NULL,
  `jb_from_date` date NOT NULL,
  `jb_interview_date` date NOT NULL,
  `eligibility` varchar(80) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `last_date_app` date NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `jb_city` varchar(100) NOT NULL,
  `jb_state` varchar(100) NOT NULL,
  `jb_pcode` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jb_opening_id`, `jb_name`, `jb_descrip`, `jb_type`, `jb_category_id`, `jb_from_date`, `jb_interview_date`, `eligibility`, `num_posts`, `last_date_app`, `cmp_id`, `jb_city`, `jb_state`, `jb_pcode`) VALUES
(1, 'Maths Teaching', 'Teaching the Mathematics to the Students With Friendly Nature', 'Permanent', 1, '2022-08-19', '2022-09-01', 'MCA MSC BTECH MTECH', 0, '2022-08-25', 12, 'Dharwad', 'Karnataka', 580008),
(2, 'Java Teaching', 'Teaching java to the Students with Examples And Realtime Solution', 'Permanent', 1, '2022-09-01', '2022-09-10', 'MCA BCA MSC MTECH', 4, '2022-09-06', 12, 'Dharwad', 'Karnataka', 580008),
(3, 'Botany Teacher', 'Teaching the botany to the Students with Practical', 'Temporary', 2, '2022-08-25', '2022-09-01', 'MSC BE MTECH', 2, '2022-08-30', 13, 'Dharwad', 'Karnataka', 580008),
(4, 'English Teacher', 'English Teacher Required to teach Subject and Grammer', 'Permanent', 2, '2022-08-27', '2022-09-08', 'BA BCOM BCA MCOM', 2, '2022-08-25', 13, 'Dharwad', 'Karnataka', 580008),
(5, 'HOD', 'Maintaining the Department ', 'Permanent', 5, '2022-08-31', '2022-09-10', 'MTECH BETCH MCA BCA', 1, '2022-09-08', 15, 'Hubli', 'Karnataka', 580018),
(6, 'Lab Instructor', 'Maintaining the Lab and solving the problems in the lab', 'Permanent', 1, '2022-08-23', '2022-09-08', 'MSC MCA BTECH MTECH', 1, '2022-08-31', 15, 'Hubli', 'Karnataka', 580018),
(7, 'Lab Instructor', 'Maintaining the Lab ', 'Permanent', 1, '2022-08-20', '2022-08-31', 'MSC MCA MTECH', 2, '2022-08-25', 12, 'Dharwad', 'Karnataka', 580008),
(8, 'HOD', 'Maintaining the Department', 'Permanent', 1, '2022-08-25', '2022-08-31', 'MTECH MCA With 5 Years of Expirience', 0, '2022-08-26', 12, 'Dharwad', 'Karnataka', 580008),
(9, 'Accountant', 'Accountant  businesses make critical financial decisions by collecting, tracking, and correcting the', 'Permanent', 1, '2022-08-22', '2022-08-31', 'MCOM BCOM MBA BBA', 1, '2022-08-25', 12, 'Dharwad', 'Karnataka', 580008);

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `app_id` int(11) NOT NULL,
  `jb_opening_id` int(11) NOT NULL,
  `js_id` int(11) NOT NULL,
  `applied_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `cmp_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`app_id`, `jb_opening_id`, `js_id`, `applied_date`, `status`, `comments`, `cmp_id`) VALUES
(1, 1, 16, '2022-08-19', 'Recruited', 'good', 12),
(2, 1, 22, '2022-08-19', 'Recruited', 'good', 12),
(3, 2, 22, '2022-08-19', 'Recruited', 'good', 12),
(4, 2, 17, '2022-08-19', 'Applied', 'good', 12),
(5, 8, 22, '2022-08-19', 'Recruited', 'good', 12);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `jb_category_id` int(11) NOT NULL,
  `jb_category` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`jb_category_id`, `jb_category`, `description`) VALUES
(1, 'Degree', 'Teaching to the Degree  Level Students'),
(2, 'PUC ', 'Teaching to the PUC Level Students'),
(3, 'High School', 'Teaching to the High School  Level Students'),
(4, 'Primary School', 'Teaching to the Primary  Level Students'),
(5, 'Post Degree', 'Teaching to the Post Degree Level Students');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `js_id` int(11) NOT NULL,
  `js_fname` varchar(50) NOT NULL,
  `js_mname` varchar(30) NOT NULL,
  `js_lname` varchar(50) NOT NULL,
  `js_dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `js_address` varchar(200) NOT NULL,
  `js_city` varchar(20) NOT NULL,
  `js_state` varchar(20) NOT NULL,
  `js_pincode` int(11) NOT NULL,
  `js_phone_no` double NOT NULL,
  `js_mobile_no` double NOT NULL,
  `js_e_mail` varchar(20) NOT NULL,
  `pass` int(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`js_id`, `js_fname`, `js_mname`, `js_lname`, `js_dob`, `gender`, `js_address`, `js_city`, `js_state`, `js_pincode`, `js_phone_no`, `js_mobile_no`, `js_e_mail`, `pass`, `question`, `answer`, `image`) VALUES
(16, 'Priyanka', 'Suresh ', 'More', '2000-10-16', 'female', 'Hosayallapur main road Dharwad ', 'Dharwad ', 'Karnataka', 580001, 847529169, 7406820948, 'priyanka@klebcadwd.c', 74068209, 'My Birth Place...?', 'Dharwad ', 'IMG20220812140114.jpg'),
(19, 'Siddhalingayya ', 'Parameshwarayya ', 'Chikkamath ', '1998-10-04', 'male', 'Bani oni navalur ', 'Dharwad', 'Karnataka', 580009, 7975390843, 7975390843, 'chikkamath0@gmail.co', 953852, 'My Nickname...?', 'Siddharth ', 'IMG_20220325_131828_615.jpg'),
(20, 'Maktumhusen ', 'A', 'Khadirnavar ', '2001-07-13', 'male', 'Maradagi ', 'Dharwad', 'Karnataka', 580112, 6360160064, 6360160064, 'maktumhusen2857@gmai', 123123, 'My Birth Place...?', 'I dont know', 'IMG_20220812_205015.jpg'),
(21, 'Manoj', 'B', 'Holeyache ', '2001-07-23', 'male', 'Gadag', 'Gadag', 'Karnataka', 1234, 9008015017, 9008015017, 'holeyachemanoj3@gmai', 0, 'My Nickname...?', 'Manu', 'IMG_20220802_151704_618.jpg'),
(22, 'MALLIKARJUNA ', 'SHIVANANDA', 'AMARASHETTI', '2000-06-25', 'male', 'Kallur', 'BELAGAVI', 'Karnataka', 591127, 8147771704, 8147771704, 'MALLIKARJUNS11319@GM', 123123, 'My First School Name...?', 'Kle', 'mallu.jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_details`
--

CREATE TABLE `qualification_details` (
  `quali_id` int(11) NOT NULL,
  `js_id` int(11) NOT NULL,
  `q_name` varchar(50) NOT NULL,
  `university_name` varchar(200) NOT NULL,
  `coll_name` varchar(200) NOT NULL,
  `year_of_passing` varchar(20) NOT NULL,
  `tot_marks` varchar(11) NOT NULL,
  `obtain_marks` varchar(11) NOT NULL,
  `perc` varchar(20) NOT NULL,
  `grade` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification_details`
--

INSERT INTO `qualification_details` (`quali_id`, `js_id`, `q_name`, `university_name`, `coll_name`, `year_of_passing`, `tot_marks`, `obtain_marks`, `perc`, `grade`) VALUES
(1, 16, 'Bca', 'Karnataka University Dharwad ', 'Kle', '2023-08-19', '600', '559', '84', 'A'),
(2, 17, 'Bca', 'Karnataka University ', 'Kle BCA college dharwad ', '2022-08-19', '75', '60', '75', 'A'),
(3, 0, 'Puc', 'Pu', 'Hipu', '2022-08-19', '600', '600', '100', 'A++'),
(4, 22, 'BCA', 'KUD', 'KLE', '2022-08-20', '600', '500', '80', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `experience_details`
--
ALTER TABLE `experience_details`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jb_opening_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`jb_category_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`js_id`);

--
-- Indexes for table `qualification_details`
--
ALTER TABLE `qualification_details`
  ADD PRIMARY KEY (`quali_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience_details`
--
ALTER TABLE `experience_details`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jb_opening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `jb_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `js_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `qualification_details`
--
ALTER TABLE `qualification_details`
  MODIFY `quali_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
