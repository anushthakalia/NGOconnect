-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 02:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NGOconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comid` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `comname` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `fk_ngo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comid`, `email`, `password`, `comname`, `phone`, `fk_ngo_id`) VALUES
(1, 'abc@amazon.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Amazon', 0, 2),
(2, 'ani@flipkart.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Flipkart', 2147483647, 2),
(3, 'abc@ola.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ola', 2147483647, 1),
(4, 'abc@ibm.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'IBM', 22181920, 2);

-- --------------------------------------------------------

--
-- Table structure for table `internship_details`
--

CREATE TABLE `internship_details` (
  `internship_id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `NGO` varchar(100) NOT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `internship_descr` text NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Start_date` varchar(32) NOT NULL,
  `Duration` varchar(32) NOT NULL,
  `Apply_by` date NOT NULL,
  `Tags` varchar(18) NOT NULL,
  `fk_intern_select_id` int(11) DEFAULT NULL,
  `fk_ngo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_details`
--

INSERT INTO `internship_details` (`internship_id`, `Name`, `NGO`, `Company`, `internship_descr`, `Location`, `Start_date`, `Duration`, `Apply_by`, `Tags`, `fk_intern_select_id`, `fk_ngo_id`) VALUES
(1, 'Data Analyst', 'Goonj', 'Amazon', 'Data Analyst dolor sit amet, consectetur adipisicing elit. Officiis laborum repellat quisquam, illo soluta, deleniti, nesciunt illum eveniet tempore sed necessitatibus eligendi rerum. Cum maxime, aliquam incidunt voluptatem enim eum.\r\n\r\nHarum rerum totam eum facere sint, molestiae porro illum recusandae dolorum cumque ut illo cum quisquam esse consequatur commodi fugit culpa explicabo vero vel quos. Minus sed quod est, similique!\r\n\r\nQui id ad ipsum quis molestiae, velit, aut. Suscipit ex sunt incidunt cupiditate ad quisquam excepturi provident voluptate nemo earum, vel est facilis commodi ullam natus quis praesentium cum asperiores.', 'New Delhi', 'Immediatly', '3 months', '2018-10-24', 'Data', 2, 2),
(2, 'Data Scientist', 'Cry', 'Flipkart', 'Data Scientist dolor sit amet, consectetur adipisicing elit. Officiis laborum repellat quisquam, illo soluta, deleniti, nesciunt illum eveniet tempore sed necessitatibus eligendi rerum. Cum maxime, aliquam incidunt voluptatem enim eum.\r\n\r\nHarum rerum totam eum facere sint, molestiae porro illum recusandae dolorum cumque ut illo cum quisquam esse consequatur commodi fugit culpa explicabo vero vel quos. Minus sed quod est, similique!\r\n\r\nQui id ad ipsum quis molestiae, velit, aut. Suscipit ex sunt incidunt cupiditate ad quisquam excepturi provident voluptate nemo earum, vel est facilis commodi ullam natus quis praesentium cum asperiores.', 'New Delhi', 'Immediatly', '3 months', '2018-10-24', 'Data', 1, 3),
(3, 'Business Analyst', 'HelpAge', 'Flipkart', 'Data Scientist dolor sit amet, consectetur adipisicing elit. Officiis laborum repellat quisquam, illo soluta, deleniti, nesciunt illum eveniet tempore sed necessitatibus eligendi rerum. Cum maxime, aliquam incidunt voluptatem enim eum.\r\n\r\nHarum rerum totam eum facere sint, molestiae porro illum recusandae dolorum cumque ut illo cum quisquam esse consequatur commodi fugit culpa explicabo vero vel quos. Minus sed quod est, similique!\r\n\r\nQui id ad ipsum quis molestiae, velit, aut. Suscipit ex sunt incidunt cupiditate ad quisquam excepturi provident voluptate nemo earum, vel est facilis commodi ullam natus quis praesentium cum asperiores.', 'New Delhi', 'Immediately', '3 months', '2018-12-01', 'Business', NULL, NULL),
(4, 'PR Consultant', 'Goonj', 'Ola', 'Technological Consultant dolor sit amet, consectetur adipisicing elit. Officiis laborum repellat quisquam, illo soluta, deleniti, nesciunt illum eveniet tempore sed necessitatibus eligendi rerum. Cum maxime, aliquam incidunt voluptatem enim eum.\r\n\r\nHarum rerum totam eum facere sint, molestiae porro illum recusandae dolorum cumque ut illo cum quisquam esse consequatur commodi fugit culpa explicabo vero vel quos. Minus sed quod est, similique!\r\n\r\nQui id ad ipsum quis molestiae, velit, aut. Suscipit ex sunt incidunt cupiditate ad quisquam excepturi provident voluptate nemo earum, vel est facilis commodi ullam natus quis praesentium cum asperiores.', 'Mumbai', 'Immediately', '6 months', '2018-12-01', 'Consultant', 13, 2),
(5, 'Media Intern', 'Goonj', 'Amazon', 'Technological Consultant dolor sit amet, consectetur adipisicing elit. Officiis laborum repellat quisquam, illo soluta, deleniti, nesciunt illum eveniet tempore sed necessitatibus eligendi rerum. Cum maxime, aliquam incidunt voluptatem enim eum.\r\n\r\nHarum rerum totam eum facere sint, molestiae porro illum recusandae dolorum cumque ut illo cum quisquam esse consequatur commodi fugit culpa explicabo vero vel quos. Minus sed quod est, similique!\r\n\r\nQui id ad ipsum quis molestiae, velit, aut. Suscipit ex sunt incidunt cupiditate ad quisquam excepturi provident voluptate nemo earum, vel est facilis commodi ullam natus quis praesentium cum asperiores.', 'Mumbai', 'Immediately', '2 months', '2018-12-01', 'Media', 14, 2),
(6, 'Web Developer', 'Goonj', 'Amazon', 'Web Dev dolor sit amet, consectetur adipisicing elit. Officiis laborum repellat quisquam, illo soluta, deleniti, nesciunt illum eveniet tempore sed necessitatibus eligendi rerum. Cum maxime, aliquam incidunt voluptatem enim eum.\r\n\r\nHarum rerum totam eum facere sint, molestiae porro illum recusandae dolorum cumque ut illo cum quisquam esse consequatur commodi fugit culpa explicabo vero vel quos. Minus sed quod est, similique!\r\n\r\nQui id ad ipsum quis molestiae, velit, aut. Suscipit ex sunt incidunt cupiditate ad quisquam excepturi provident voluptate nemo earum, vel est facilis commodi ullam natus quis praesentium cum asperiores.', 'New Delhi', 'Immediately', '3 months', '2018-12-01', 'Web', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngoid` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `ngoname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ContactName` varchar(30) NOT NULL,
  `ContactEmail` varchar(30) NOT NULL,
  `regno` varchar(40) NOT NULL,
  `fk_comid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngoid`, `email`, `password`, `ngoname`, `address`, `ContactName`, `ContactEmail`, `regno`, `fk_comid`) VALUES
(1, 'abc@smile.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Smile', 'Gurgaon', 'Anushtha', 'anushtha@gmail.com', '111111', 2),
(2, 'abc@goonj.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Goonj', 'New Delhi', 'Raghav', 'raghav@gmail.com', '123456', 1),
(3, 'abc@cry.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Cry', 'Gweyer Hall', 'Nikhil', 'nikhil@gmail.com', '123433', 1),
(5, 'abc@helpage.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'HelpAge India', 'New Delhi', 'Sameer', 'sameer@gmail.com', '122345', NULL),
(6, 'abc@piramal.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Piramal Foundation', 'Bangalore', 'Ajit', 'ajit@gmail.com', '122346', NULL),
(7, 'abc@mad.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Make a Difference', 'Mumbai', 'Naman', 'naman@gmail.com', '122347', NULL),
(8, 'abc@wri.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'WRI India', 'Mumbai', 'Nina', 'nina@gmail.com', '122348', NULL),
(9, 'abc@care.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Care', 'Kolkata', 'Hitesh', 'hitesh@gmail.com', '122349', 1),
(10, 'abc@indus.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Indus Action', 'Mumbai', 'Mahesh', 'mahesh@gmail.com', '122350', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `college` text NOT NULL,
  `phone` int(10) NOT NULL,
  `Resume` varchar(30) NOT NULL,
  `fk_ngo_id` int(11) DEFAULT NULL,
  `fk_internship_details_select_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `password`, `firstname`, `surname`, `email`, `college`, `phone`, `Resume`, `fk_ngo_id`, `fk_internship_details_select_id`) VALUES
(1, '5f4dcc3b5aa765d61d8327deb882cf99', 'Pankaj', 'Baranwal', 'pankaj@gmail.com', 'IIT Bombay', 22222222, '', 1, NULL),
(2, '5f4dcc3b5aa765d61d8327deb882cf99', 'Anushtha', 'Kalia', 'anushthakalia@yahoo.com', 'Cluster Innovation Centre', 2147483647, 'Anushtha_Kalia_resume.pdf', 2, NULL),
(3, '5f4dcc3b5aa765d61d8327deb882cf99', 'Arjun', 'Sharma', 'arjun@gmail.com', 'CIC', 2147483647, '', 1, NULL),
(11, '5f4dcc3b5aa765d61d8327deb882cf99', 'Raghav', 'Singh', 'raghav.singh@gmail.com', 'CIC', 2147483647, '', NULL, NULL),
(12, '5f4dcc3b5aa765d61d8327deb882cf99', 'Sanjeev', 'Dubey', 'sanjeev@gmail.com', 'IIT Delhi', 123456789, '', NULL, NULL),
(13, '5f4dcc3b5aa765d61d8327deb882cf99', 'Lakshay', 'Juneja', 'lakshay@gmail.com', 'DTU', 22122212, '', 2, NULL),
(14, '5f4dcc3b5aa765d61d8327deb882cf99', 'Nikhil', 'Maheshwari', 'nikhil@gmail.com', 'IIM Ahemdabad', 123456789, '', 2, NULL),
(15, '5f4dcc3b5aa765d61d8327deb882cf99', 'Utkarsh', 'Mittal', 'utkarsh@gmail.com', 'ISB Hyderabad', 88887676, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_internship_apply`
--

CREATE TABLE `student_internship_apply` (
  `apply_id` int(11) NOT NULL,
  `fk_intern_id` int(11) NOT NULL,
  `fk_internship_details_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_internship_apply`
--

INSERT INTO `student_internship_apply` (`apply_id`, `fk_intern_id`, `fk_internship_details_id`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 11, 1),
(4, 12, 4),
(5, 13, 4),
(6, 14, 5),
(7, 15, 5),
(8, 2, 3),
(9, 2, 2),
(10, 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comid`),
  ADD KEY `fk_ngo_id` (`fk_ngo_id`);

--
-- Indexes for table `internship_details`
--
ALTER TABLE `internship_details`
  ADD PRIMARY KEY (`internship_id`),
  ADD KEY `fk_intern_id` (`fk_intern_select_id`),
  ADD KEY `fk_ngo_id` (`fk_ngo_id`);
ALTER TABLE `internship_details` ADD FULLTEXT KEY `Name` (`Name`,`Location`);
ALTER TABLE `internship_details` ADD FULLTEXT KEY `Name_2` (`Name`,`Location`);
ALTER TABLE `internship_details` ADD FULLTEXT KEY `Name_3` (`Name`,`Location`);
ALTER TABLE `internship_details` ADD FULLTEXT KEY `Name_4` (`Name`,`Location`);
ALTER TABLE `internship_details` ADD FULLTEXT KEY `Name_5` (`Name`,`Location`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngoid`),
  ADD KEY `fk_comid` (`fk_comid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ngo_id` (`fk_ngo_id`),
  ADD KEY `fk_internship_details_select_id` (`fk_internship_details_select_id`);

--
-- Indexes for table `student_internship_apply`
--
ALTER TABLE `student_internship_apply`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `fk_internship_details_id` (`fk_internship_details_id`),
  ADD KEY `fk_intern_id` (`fk_intern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `internship_details`
--
ALTER TABLE `internship_details`
  MODIFY `internship_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_internship_apply`
--
ALTER TABLE `student_internship_apply`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`fk_ngo_id`) REFERENCES `ngo` (`ngoid`);

--
-- Constraints for table `internship_details`
--
ALTER TABLE `internship_details`
  ADD CONSTRAINT `internship_details_ibfk_1` FOREIGN KEY (`fk_intern_select_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `internship_details_ibfk_2` FOREIGN KEY (`fk_ngo_id`) REFERENCES `ngo` (`ngoid`);

--
-- Constraints for table `ngo`
--
ALTER TABLE `ngo`
  ADD CONSTRAINT `ngo_ibfk_1` FOREIGN KEY (`fk_comid`) REFERENCES `company` (`comid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`fk_ngo_id`) REFERENCES `ngo` (`ngoid`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`fk_internship_details_select_id`) REFERENCES `internship_details` (`internship_id`);

--
-- Constraints for table `student_internship_apply`
--
ALTER TABLE `student_internship_apply`
  ADD CONSTRAINT `student_internship_apply_ibfk_1` FOREIGN KEY (`fk_internship_details_id`) REFERENCES `internship_details` (`internship_id`),
  ADD CONSTRAINT `student_internship_apply_ibfk_2` FOREIGN KEY (`fk_intern_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
