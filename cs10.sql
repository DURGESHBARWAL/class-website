-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 02:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs10`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloginsertion`
--

CREATE TABLE `bloginsertion` (
  `id` int(50) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `contribution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `example1`
--

CREATE TABLE `example1` (
  `rollno` varchar(7) NOT NULL,
  `skill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `example2`
--

CREATE TABLE `example2` (
  `rollno` varchar(7) NOT NULL,
  `skill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `example3`
--

CREATE TABLE `example3` (
  `rollno` varchar(7) NOT NULL,
  `interest` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(50) NOT NULL,
  `rollno` varchar(7) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `rollno`, `subject`, `name`, `type`, `size`, `content`) VALUES
(1, '1515013', 'DBMS', 'assignment', 'application/pdf', 1106097, 's/3. DBMS Lab Manual - Lab 3.pdf'),
(2, '1515013', 'MATHS', 'maths 5 chapter notes', 'application/octet-stream', 1389, 's/Relay.pdsprj.DESKTOP-HNQJ5R7.Durga.workspace'),
(3, '1515013', 'MATHS', 'Last chapter', 'application/pdf', 209578, 's/debarred.pdf'),
(4, '1515013', 'PDC', 'Last chapter notes', 'text/plain', 14789, 's/cs10.sql'),
(5, '1515013', 'DAA LAB', ' dfcfcxsxssx', 'text/plain', 14789, 's/cs10.sql');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` varchar(7) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `password`, `username`) VALUES
('1515001', 'Cuwa&$6447', 'Archit'),
('1515002', 'Frux*@7564', 'Abhishek Bjapai'),
('1515005', 'Gruk*#5637', 'Akash Vishen'),
('1515013', 'Cuws&$6447', 'Durgesh Barwal');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(50) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `name`, `type`, `size`, `content`) VALUES
(5, '2017-03-17', 'notice2', 'application/octet-stream', 1332, 's/2.c'),
(6, '2017-03-17', 'Summer IOT training', 'application/pdf', 279098, 's/noticeiotcs.pdf'),
(7, '2017-03-17', 'Summer Big Data training', 'application/pdf', 279904, 's/noticebig.pdf'),
(8, '2017-03-20', 'notice3', 'application/pdf', 209578, 's/debarred.pdf'),
(9, '2017-03-20', 'notiec 5', 'image/png', 71410, 's/iot pro1.png'),
(10, '2017-04-01', 'Kiit tnp placement', 'application/pdf', 333394, 's/LDR_Testing.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(7) NOT NULL,
  `kiitid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `rollno` varchar(7) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `midname` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `contact1` int(10) NOT NULL,
  `contact2` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `lag` varchar(30) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `fcontact` int(10) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `diploma` varchar(100) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `cgpa` float NOT NULL,
  `hobbies` text NOT NULL,
  `society` text NOT NULL,
  `softskills` text NOT NULL,
  `project` text NOT NULL,
  `seminar` text NOT NULL,
  `award` text NOT NULL,
  `others` text NOT NULL,
  `mcontact` int(10) NOT NULL,
  `plag` varchar(300) NOT NULL,
  `flag` varchar(300) NOT NULL,
  `interest` varchar(300) NOT NULL,
  `bdate` varchar(3) NOT NULL,
  `bmonth` varchar(15) NOT NULL,
  `byear` varchar(5) NOT NULL,
  `a` varchar(10) NOT NULL,
  `b` varchar(10) NOT NULL,
  `c` varchar(10) NOT NULL,
  `d` varchar(10) NOT NULL,
  `per10` varchar(5) NOT NULL,
  `per12` varchar(5) NOT NULL,
  `e` varchar(10) NOT NULL,
  `f` varchar(10) NOT NULL,
  `g` varchar(10) NOT NULL,
  `h` varchar(10) NOT NULL,
  `sem11` varchar(5) NOT NULL,
  `sem12` varchar(5) NOT NULL,
  `sem21` varchar(5) NOT NULL,
  `sem22` varchar(5) NOT NULL,
  `sem31` varchar(5) NOT NULL,
  `sem32` varchar(5) NOT NULL,
  `sem41` varchar(5) NOT NULL,
  `sem42` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`rollno`, `firstname`, `midname`, `lastname`, `address`, `city`, `email`, `state`, `pincode`, `contact1`, `contact2`, `gender`, `lag`, `hostel`, `fname`, `fcontact`, `mname`, `diploma`, `degree`, `cgpa`, `hobbies`, `society`, `softskills`, `project`, `seminar`, `award`, `others`, `mcontact`, `plag`, `flag`, `interest`, `bdate`, `bmonth`, `byear`, `a`, `b`, `c`, `d`, `per10`, `per12`, `e`, `f`, `g`, `h`, `sem11`, `sem12`, `sem21`, `sem22`, `sem31`, `sem32`, `sem41`, `sem42`) VALUES
('1515013', 'durgesh', 'bar', 'wal', 'sultaniya', 'bhubaneswar', 'durgeshbarwal@gmail.com', 'mp', 465683, 2147483647, 38475, 'Male', 'hindi', 'kp6', 'dalchad', 90565878, 'sumitar', 'no other diploma', 'Dual(B.tech &amp; M.tech)', 10, 'cricket,football', 'no societies', 'swimming', 'class website', 'no seminars', 'no awarsd', 'khkdakf', 8478, 'hacking', '', 'cri', '11', 'July', '1993', '3', '2', '3', '3', '47', '46', '2', '2', '1', '2', '8', '7', '6', '8', '67', '-', '-', '-'),
('1515015', 'hari', 'om', 'sinha', 'sultaniya', 'lok', 'durgeshbarwal@gmail.com', 'mp', 465683, 2147483647, 0, 'on', 'hindi english,gujrati', 'kp6', 'durgesh', 75856, 'kbjdsdbk', 'no degree', 'Dual(B.tech &amp; M.tech)', 10, 'cricket', 'football', 'lover', 'nfddfkfb', 'jsfch', 'khbffb', 'vvdf', 0, '', '', 'no other field', '16', 'May', '1993', 'CBSE', '2015-16', 'CBSE', '2014-15', '89', '90', '2015-16', '2016-17', '2017-18', '2015-16', '8', '9', '7', '9', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `rollno` varchar(7) NOT NULL,
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`rollno`, `id`, `name`) VALUES
('1515013', 'Cuws&$6447', 'Durgesh Barwal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloginsertion`
--
ALTER TABLE `bloginsertion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`),
  ADD UNIQUE KEY `loginid` (`loginid`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloginsertion`
--
ALTER TABLE `bloginsertion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
