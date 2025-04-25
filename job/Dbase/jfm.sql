-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220629.0f8fafb1b5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 04:55 PM
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
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `password`, `type`) VALUES
(2, 'admin', 'admin', 'admin'),
(10, 'Vnc', 'Vnc', 'company'),
(11, 'solo', '123123', 'jobseeker');

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
(11, 'Vnc', 'dsasd', 'cascascas', 'cassca', 7894563211, 8965231138, 'Solomong1331@gmail.c', 'google.com', 'banner2.jpg');

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
  `offer_ltr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `jb_category_id` int(11) NOT NULL,
  `jb_category` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'solo', 'raju', 'g', '2022-08-18', 'male', 'sssss', 'hospet', 'Karnataka', 12321, 9573623377, 9481043030, 'solomong1331@gmail.c', 123123, 'My Nickname...?', 'solo', 'banner1.jpg');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experience_details`
--
ALTER TABLE `experience_details`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jb_opening_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `jb_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `js_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `qualification_details`
--
ALTER TABLE `qualification_details`
  MODIFY `quali_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
