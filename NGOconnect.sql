-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2018 at 07:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `fk_ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comid`, `email`, `password`, `comname`, `phone`, `fk_ngo_id`) VALUES
(1, 'raghav@amazon.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'Amazon', 2147483647, 2),
(2, 'shyam@microsoft.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'Microsoft', 2147483647, 1);

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
  `fk_intern_id` int(11) NOT NULL,
  `fk_ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_details`
--

INSERT INTO `internship_details` (`internship_id`, `Name`, `NGO`, `Company`, `internship_descr`, `fk_intern_id`, `fk_ngo_id`) VALUES
(1, 'Operations', 'NASSCOM', NULL, 'NASSCOM is an apex industry association body for the 154 billion dollars Indian IT-BPM industry. NASSCOM\'s member companies are in the business of software development, software services, software products, IT-enabled/BPO services, and e-commerce. NASSCOM has been the strongest proponent of global free trade in India.\r\n\r\nNASSCOM Centre of Excellence for IoT is a flagship program being run in partnership between NASSCOM and Central Government.', 1, 1),
(2, 'Content Writing', 'Teach For India', NULL, 'Teach For India, modeled on the lines of the famous Teach For America movement, is a nationwide campaign in pursuit of educational equity in India. Teach For India recruits exceptional college graduates and professionals to work as full-time teachers in under-resourced schools for two years. Teach For India solicits leaders who will pilot the movement against educational inequity and begets the leaders of tomorrow. The Teach For India staff works relentlessly along with the fellows to pioneer the movement. By enlisting our country\'s most promising future leaders in our work, we directly support our mission of building a movement of leaders who will end educational inequity. Ultimately, we are driven by two goals: our short-term goal of putting students on a different life path and our long-term goal of building a strong alumni base to advocate for our students and work to eliminate the educational achievement gap.', 2, 2),
(3, 'Marketing', 'CRY', NULL, 'CRY is an Indian NGO established in 1979, with a focus on the most marginalized children, 0-18 years. We work as an enabling organization, choosing to support small, grass root organizations- currently in 18 states; 78 districts in India.\r\n\r\nOver the last 40 years, CRY has incubated 700+ organizations and impacted 22 lakh children across India. We have also helped raise 20L+ donors thereby creating small philanthropists in India. CRY addresses themes on education, health, nutrition, child marriage, child labour, foeticide, etc.', 1, 1);

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
  `regno` varchar(40) NOT NULL,
  `fk_comid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngoid`, `email`, `password`, `ngoname`, `address`, `regno`, `fk_comid`) VALUES
(1, 'lorem.ipsum@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'CRY', 'test', '7777777777', 1),
(2, 'ipsum.lorem@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'TFI', 'test', '9999999999', 2);

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
  `fk_ngo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `password`, `firstname`, `surname`, `email`, `college`, `phone`, `fk_ngo_id`) VALUES
(1, 'ae2b1fca515949e5d54fb22b8ed95575', 'Raghav', 'Singh', 'raghav97singh.rs@gmail.com', 'Cluster Innovation Centre', 2147483647, 1),
(2, 'ae2b1fca515949e5d54fb22b8ed95575', 'Madhav', 'Sharma', 'raghav.cicdu@gmail.com', 'IIT', 2147483647, 2),
(9, 'ae2b1fca515949e5d54fb22b8ed95575', 'ABC', 'DEF', 'abcde@gmail.com', 'CIC', 2147483647, 2),
(10, 'ae2b1fca515949e5d54fb22b8ed95575', 'EFG', 'HRF', 'efghr@gmail.com', 'CIC', 2147483647, 1);

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
  ADD KEY `fk_intern_id` (`fk_intern_id`),
  ADD KEY `fk_ngo_id` (`fk_ngo_id`);

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
  ADD KEY `fk_ngo_id` (`fk_ngo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internship_details`
--
ALTER TABLE `internship_details`
  MODIFY `internship_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `internship_details_ibfk_1` FOREIGN KEY (`fk_intern_id`) REFERENCES `student` (`id`),
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
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`fk_ngo_id`) REFERENCES `ngo` (`ngoid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
