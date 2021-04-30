-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 09:18 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_master`
--

CREATE TABLE `doctor_master` (
  `doctor_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `registration_number` varchar(500) NOT NULL,
  `qualilfication` varchar(500) NOT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_master`
--

INSERT INTO `doctor_master` (`doctor_id`, `login_id`, `registration_number`, `qualilfication`, `experience`) VALUES
(24, 115, 'G-12345', 'M.B.B.S.', '10 Years'),
(25, 118, '1235', 'M.B.B.S.', '10 Years');

-- --------------------------------------------------------

--
-- Table structure for table `laboratary_master`
--

CREATE TABLE `laboratary_master` (
  `laboratary_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `license_number` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratary_master`
--

INSERT INTO `laboratary_master` (`laboratary_id`, `login_id`, `license_number`, `qualification`, `time`) VALUES
(5, 117, '1266454', 'M.B.B.S.', '2020-02-26 06:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `medical_master`
--

CREATE TABLE `medical_master` (
  `medical_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `license_number` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_master`
--

INSERT INTO `medical_master` (`medical_id`, `login_id`, `license_number`, `qualification`, `time`) VALUES
(10, 116, '23565656', 'M.B.B.S.', '2020-02-26 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `patient_master`
--

CREATE TABLE `patient_master` (
  `patient_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `card_id` varchar(50) NOT NULL,
  `disease_description` varchar(1000) NOT NULL,
  `reason_visit` varchar(1000) NOT NULL,
  `height` int(50) NOT NULL,
  `weight` int(50) NOT NULL,
  `prescription` varchar(10000) NOT NULL,
  `symptoms` varchar(500) NOT NULL,
  `Report` varchar(1500) NOT NULL,
  `hospital` varchar(500) NOT NULL,
  `checkup_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_master`
--

INSERT INTO `patient_master` (`patient_id`, `login_id`, `card_id`, `disease_description`, `reason_visit`, `height`, `weight`, `prescription`, `symptoms`, `Report`, `hospital`, `checkup_time`) VALUES
(56, 113, 'GJZX93B8V261', 'Typhoid', 'For Checkup', 5, 50, 'Paracetamol 1-1', 'Fever##Cold', 'BloodReport', 'Zydus Hospital', '2020-02-26 07:08:12'),
(57, 113, 'GJZX93B8V261', 'Jaundice', 'for Report', 5, 60, 'oxoup 1-1 ', 'Fever', 'xray', 'Indus Hospital', '2020-02-26 07:12:56'),
(58, 113, 'GJZX93B8V261', 'Malaria', 'for report', 6, 50, 'gyugs 1-2-2', 'Fever', 'sonography', 'Indus Hospital', '2020-02-26 07:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `record_master`
--

CREATE TABLE `record_master` (
  `record_id` int(50) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `card_id` varchar(50) NOT NULL,
  `Report` varchar(500) NOT NULL,
  `file_upload` varchar(500) NOT NULL,
  `file_description` varchar(1000) NOT NULL,
  `lab` varchar(500) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_master`
--

INSERT INTO `record_master` (`record_id`, `patient_id`, `card_id`, `Report`, `file_upload`, `file_description`, `lab`, `upload_time`) VALUES
(53, '58', 'GJZX93B8V261', 'sonography', '../uploads/DJB-666.jpg', 'sonography of stomach show a lil swelling in the stomach', 'Meditech', '2020-02-26 07:46:22'),
(54, '57', 'GJZX93B8V261', 'xray', '../uploads/233852.jpg', 'it shows different view of skelethon', 'Nucleus', '2020-02-26 07:53:47'),
(55, '56', 'GJZX93B8V261', 'BloodReport', '../uploads/Z390.pdf', 'This is the blood report', 'Medilink Hospital & Research Center', '2020-02-26 07:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `role_id` int(50) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`role_id`, `role_name`) VALUES
(1, 'Doctor'),
(2, 'Patient'),
(3, 'Medical'),
(4, 'Laboratory'),
(5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_otp`
--

CREATE TABLE `tb1_otp` (
  `otp_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `otp` int(10) NOT NULL,
  `otp_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_otp`
--

INSERT INTO `tb1_otp` (`otp_id`, `login_id`, `otp`, `otp_time`) VALUES
(121, 118, 228187, '2020-02-26 06:55:08'),
(122, 117, 158968, '2020-02-26 07:58:16'),
(123, 116, 416574, '2020-02-26 08:03:02'),
(124, 115, 999322, '2020-02-26 08:08:34'),
(125, 113, 133691, '2020-02-26 08:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `login_id` int(10) NOT NULL,
  `card_id` varchar(12) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` bigint(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(50) NOT NULL,
  `active` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `aadhar` varchar(10000) NOT NULL,
  `registered_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`login_id`, `card_id`, `fname`, `lname`, `email`, `phone_no`, `dob`, `password`, `role_id`, `active`, `status`, `gender`, `address`, `profile_pic`, `blood_group`, `state`, `city`, `aadhar`, `registered_time`) VALUES
(1, '', 'Bhumi', 'Sharma', 'sharmabhumi2000@gmail.com', 9725973035, '01/11/2000', '25d55ad283aa400af464c76d713c07ad', 5, 1, 1, 'female', 'Chandkheda', '../assets/images/DSC_0410.JPG', 'B+', 'Gujarat', 'Ahmedabad', '', '2020-02-26 06:35:33'),
(113, 'GJZX93B8V261', 'Donald', 'Trump', 'donaldtrump@gmail.com', 9898660970, '11/01/1975', '25d55ad283aa400af464c76d713c07ad', 2, 1, 1, 'Female', '  Chandkheda  ', '../assets/images/44B7FEAF-1A52-4BF2-B852-EC40CAF834ACL0001.jpg', 'A+', 'Gujarat', 'Ahmedabad', '../uploads/1.pdf', '2020-02-26 08:15:40'),
(114, 'GJ0VUK09P1M7', 'Siddharth', 'Shukla', 'siddharth@gmail.com', 9898660970, '01/29/2020', '25d55ad283aa400af464c76d713c07ad', 2, 1, 1, 'male', ' Chandkheda ', '../assets/images/DSC_0393.JPG', 'A+', 'Gujarat', 'Ahmedabad', '../uploads/Election Card.pdf', '2020-02-26 06:08:34'),
(115, '', 'Arpan', 'Prajapati', 'arpanprajapati15@gmail.com', 9889898955, '2020-02-05', '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, 'female', 'Dev Vrushti', '../assets/images/IMG_20170826_223747009.jpg', 'O+', 'Gujarat', 'Ahmedabad', '', '2020-02-26 08:08:06'),
(116, '', 'Muskan', 'Sharma', 'sharmabhumihackathon@gmail.com', 7895412321, '2020-02-12', '25d55ad283aa400af464c76d713c07ad', 3, 1, 1, 'female', 'Dv', '../assets/images/IMG_20200221_092232_773.jpg', 'O+', 'Gujarat', 'Ahmedabad', '', '2020-02-26 08:02:46'),
(117, '', 'Muskan', 'Sharma', 'muskan@gmail.com', 9874512154, '2020-02-10', '25d55ad283aa400af464c76d713c07ad', 4, 1, 1, 'female', 'Dev Vrushti', '../assets/images/DSC_0351 (2).JPG', 'O-', 'Gujarat', 'Ahmedabad', '', '2020-02-26 07:59:46'),
(118, '', 'Ravina', 'Sardar', 'ravina@gmail.com', 9874563210, '2020-02-11', '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, 'male', 'Dv', '../assets/images/HPV_0034.JPG', 'O+', 'Gujarat', 'Ahmedabad', '', '2020-02-26 07:14:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_master`
--
ALTER TABLE `doctor_master`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `laboratary_master`
--
ALTER TABLE `laboratary_master`
  ADD PRIMARY KEY (`laboratary_id`);

--
-- Indexes for table `medical_master`
--
ALTER TABLE `medical_master`
  ADD PRIMARY KEY (`medical_id`);

--
-- Indexes for table `patient_master`
--
ALTER TABLE `patient_master`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `record_master`
--
ALTER TABLE `record_master`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tb1_otp`
--
ALTER TABLE `tb1_otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_master`
--
ALTER TABLE `doctor_master`
  MODIFY `doctor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `laboratary_master`
--
ALTER TABLE `laboratary_master`
  MODIFY `laboratary_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_master`
--
ALTER TABLE `medical_master`
  MODIFY `medical_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_master`
--
ALTER TABLE `patient_master`
  MODIFY `patient_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `record_master`
--
ALTER TABLE `record_master`
  MODIFY `record_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `role_master`
--
ALTER TABLE `role_master`
  MODIFY `role_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb1_otp`
--
ALTER TABLE `tb1_otp`
  MODIFY `otp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
