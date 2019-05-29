-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 12:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travalog_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addresort`
--

CREATE TABLE `tbl_addresort` (
  `h_id` int(10) NOT NULL,
  `r_id` int(2) NOT NULL,
  `h_name` varchar(200) NOT NULL,
  `h_address` varchar(200) NOT NULL,
  `h_star` int(10) NOT NULL,
  `d_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `h_pin` int(10) NOT NULL,
  `h_location` varchar(200) NOT NULL,
  `h_des` varchar(200) NOT NULL,
  `h_open` time(3) NOT NULL,
  `h_close` time(3) NOT NULL,
  `h_phone` varchar(200) NOT NULL,
  `h_url` varchar(200) NOT NULL,
  `h_email` varchar(200) NOT NULL,
  `h_image` varchar(200) NOT NULL,
  `h_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addresort`
--

INSERT INTO `tbl_addresort` (`h_id`, `r_id`, `h_name`, `h_address`, `h_star`, `d_id`, `s_id`, `h_pin`, `h_location`, `h_des`, `h_open`, `h_close`, `h_phone`, `h_url`, `h_email`, `h_image`, `h_status`) VALUES
(1, 0, 'Heavenly plaza', 'Kakkanad', 3, 8, 1, 685521, 'Kochi', 'Eco friendly resort', '10:00:00.000', '17:00:00.000', '9876543210', 'http://www.heavenlyplaza.com', 'heavenlyplaza@gmail.com', 'blog_2.jpg', 1),
(2, 2, 'Park Avenue', 'Kochin', 1, 8, 1, 685521, 'Kochi', 'hgbfhdbfvhn', '10:00:00.000', '22:00:00.000', '9876543210', 'http://www.heavenlyplaza.com', 'park@gmail.com', 'school-office-supplies-school-background-colored-pencils-pen-pains-paper-school-student-education-wooden-96980734.jpg', 2),
(3, 2, 'Park Avenue', 'Hgaevgsvd', 3, 12, 1, 685551, 'Kottayam', 'fyfdbd', '08:00:00.000', '17:00:00.000', '8594075060', 'https://zety.com/mycv/LiyaMathew', 'abc1@gmail.com', 'vintage-gallery-of-vintage-style-wallpaper-with-vintage-file.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `b_id` int(2) NOT NULL,
  `r_id` int(2) NOT NULL,
  `rm_id` int(2) NOT NULL,
  `b_cn` date NOT NULL,
  `b_co` date NOT NULL,
  `b_no` int(10) NOT NULL,
  `b_total` int(100) NOT NULL,
  `b_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`b_id`, `r_id`, `rm_id`, `b_cn`, `b_co`, `b_no`, `b_total`, `b_status`) VALUES
(1, 1, 1, '2019-04-26', '2019-04-30', 2, 1000, 1),
(2, 1, 1, '2019-04-26', '2019-04-30', 5, 5000, 1),
(3, 1, 3, '2019-04-25', '2019-04-30', 1, 5000, 1),
(4, 1, 1, '2019-04-26', '2019-04-30', 1, 500, 1),
(5, 1, 1, '2019-04-27', '2019-04-30', 1, 1000, 1),
(6, 1, 2, '2019-04-27', '2019-04-29', 2, 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card`
--

CREATE TABLE `tbl_card` (
  `cd_id` int(2) NOT NULL,
  `r_id` int(2) NOT NULL,
  `cd_name` varchar(200) NOT NULL,
  `cd_num` varchar(200) NOT NULL,
  `cd_cvv` int(10) NOT NULL,
  `cd_amt` int(20) NOT NULL,
  `cd_validfrom` varchar(20) NOT NULL,
  `cd_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`cd_id`, `r_id`, `cd_name`, `cd_num`, `cd_cvv`, `cd_amt`, `cd_validfrom`, `cd_status`) VALUES
(1, 1, 'Reshma Mathew', '4048 1111 2568 2566', 987, 7000, '05/21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `d_id` int(2) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`d_id`, `d_name`, `d_status`) VALUES
(1, 'Kasarkode', 1),
(2, 'Kannur', 1),
(3, 'Wayanad', 1),
(4, 'Kozhikode', 1),
(5, 'Malappuram', 1),
(6, 'Palakkad', 1),
(7, 'Thrissur', 1),
(8, 'Eranakulam', 1),
(9, 'Idukki', 1),
(10, 'Kottayam', 1),
(11, 'Alappuzha', 1),
(12, 'Pathanamthitta', 1),
(13, 'Kollam', 1),
(14, 'Thiruvanathapuram', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `f_date` date NOT NULL,
  `f_msg` varchar(200) NOT NULL,
  `f_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `i_id` int(2) NOT NULL,
  `h_id` int(2) NOT NULL,
  `i_filename` varchar(500) NOT NULL,
  `i_type` varchar(10) NOT NULL,
  `i_size` int(10) NOT NULL,
  `i_date` date NOT NULL,
  `i_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`i_id`, `h_id`, `i_filename`, `i_type`, `i_size`, `i_date`, `i_status`) VALUES
(1, 1, 'gallery_2.jpg', 'image/jpeg', 84356, '2019-04-19', 1),
(2, 1, 'gallery_5.jpg', 'image/jpeg', 225362, '2019-04-19', 1),
(3, 1, 'img_1.jpg', 'image/jpeg', 551831, '2019-04-19', 1),
(4, 1, '21043-success-infographic-1920x1080-typography-wallpaper.jpg', 'image/jpeg', 264590, '2019-04-25', 1),
(5, 2, '3d-Desktop-Backgrounds.jpg', 'image/jpeg', 337052, '2019-04-25', 2),
(6, 3, '3d-Desktop-Backgrounds.jpg', 'image/jpeg', 337052, '2019-04-25', 2),
(7, 3, '1920x1080mine_desktop_wallpaper_martin_luther_king_jr.jpg', 'image/jpeg', 106895, '2019-04-25', 2),
(8, 3, '2017_December19.jpg', 'image/jpeg', 56094, '2019-04-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `loc_id` int(2) NOT NULL,
  `h_id` int(2) NOT NULL,
  `loc_nme` varchar(10) NOT NULL,
  `loc_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`loc_id`, `h_id`, `loc_nme`, `loc_status`) VALUES
(1, 1, 'Kochi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `role_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `l_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `uname`, `pwd`, `role_id`, `r_id`, `l_status`) VALUES
(1, 'admin', 'admin', 0, 0, 0),
(2, 'reshmamathew@gmail.com', 'fbe02c658daa4a4e055c82801bdad1b5', 1, 1, 1),
(3, 'ann@gmail.com', '09bcef04f96380fed14dab94ac9876c2', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `r_id` int(100) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_lname` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_dob` date NOT NULL,
  `r_gender` varchar(200) NOT NULL,
  `r_phone` varchar(200) NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`r_id`, `r_name`, `r_lname`, `r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `r_image`, `r_status`) VALUES
(1, 'Reshma', 'Mathew', 'Vattapally', '1993-11-04', 'female', '9526996825', 'reshmamathew@gmail.com', '20160817_120231.jpg', 1),
(2, 'Anndona', 'James', 'Ajce', '2010-12-23', 'female', '9876543210', 'ann@gmail.com', 'loDp98N.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resort`
--

CREATE TABLE `tbl_resort` (
  `re_id` int(10) NOT NULL,
  `re_name` varchar(100) NOT NULL,
  `re_designation` varchar(100) NOT NULL,
  `r_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `re_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resort`
--

INSERT INTO `tbl_resort` (`re_id`, `re_name`, `re_designation`, `r_id`, `l_id`, `re_status`) VALUES
(1, 'Park Avenue', '1', 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `rm_id` int(2) NOT NULL,
  `h_id` int(2) NOT NULL,
  `rm_cat` varchar(50) NOT NULL,
  `rm_bed` varchar(50) NOT NULL,
  `rm_number` int(10) NOT NULL,
  `rm_package` int(10) NOT NULL,
  `rm_image` varchar(200) NOT NULL,
  `rm_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`rm_id`, `h_id`, `rm_cat`, `rm_bed`, `rm_number`, `rm_package`, `rm_image`, `rm_status`) VALUES
(1, 1, 'Family Rooms', 'Single Bed', 5, 500, '2017_September15.jpg', 0),
(2, 1, 'Deluxe Rooms', 'Single Bed', 10, 1000, 'loDp98N.jpg', 0),
(3, 1, 'Standard Rooms', 'Double Bed', 10, 5000, '1920x1080mine_desktop_wallpaper_martin_luther_king_jr.jpg', 0),
(4, 1, 'Family Rooms', 'Double Bed', 5, 1000, '3d-Desktop-Backgrounds.jpg', 1),
(5, 3, 'FamilyRooms', 'Single Bed', 100, 50, 'school-office-supplies-school-background-colored-pencils-pen-pains-paper-school-student-education-wooden-96980734.jpg', 1),
(6, 3, 'DeluxeRooms', 'Single Bed', 10, 55, '2017_September15.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userfeedback`
--

CREATE TABLE `tbl_userfeedback` (
  `uf_id` int(2) NOT NULL,
  `r_id` int(2) NOT NULL,
  `h_id` int(2) NOT NULL,
  `uf_msg` varchar(1000) NOT NULL,
  `uf_date` date NOT NULL,
  `uf_rate` float NOT NULL,
  `uf_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userfeedback`
--

INSERT INTO `tbl_userfeedback` (`uf_id`, `r_id`, `h_id`, `uf_msg`, `uf_date`, `uf_rate`, `uf_status`) VALUES
(1, 1, 1, 'good', '2019-04-24', 5, 1),
(2, 1, 1, 'very good', '2019-04-24', 5, 1),
(3, 1, 1, 'bad', '2019-04-24', 0.5, 1),
(4, 0, 1, 'rooms good', '2019-04-24', 3.5, 1),
(5, 1, 1, 'very bad', '2019-04-25', 1, 1),
(6, 1, 1, 'ftfffff', '2019-04-25', 2.5, 1),
(7, 1, 1, 'ftfffff', '2019-04-25', 2.5, 1),
(8, 1, 1, 'ftfffff', '2019-04-25', 2.5, 1),
(9, 1, 1, 'ftfffff', '2019-04-25', 2.5, 1),
(10, 1, 1, 'good', '2019-04-25', 4.5, 1),
(11, 1, 2, 'good', '2019-04-26', 4.5, 1),
(12, 1, 2, 'good', '2019-04-26', 4.5, 1),
(13, 1, 2, 'good', '2019-04-26', 4.5, 1),
(14, 1, 2, 'good', '2019-04-26', 4.5, 1),
(15, 1, 3, 'bad service', '2019-04-26', 1.5, 1),
(16, 1, 3, 'good', '2019-04-26', 4.5, 1),
(17, 1, 3, 'very good service', '2019-04-26', 4.5, 1),
(18, 1, 3, 'very good service', '2019-04-26', 4.5, 1),
(19, 1, 1, 'the hotel is clean', '2019-04-28', 2.5, 1),
(20, 1, 1, 'clean', '2019-04-28', 2.5, 1),
(21, 1, 1, 'the hotel is good', '2019-04-28', 3, 1),
(22, 1, 1, 'the hotel is good', '2019-04-28', 3, 1),
(23, 1, 1, 'the hotel is bad', '2019-04-28', 2, 1),
(24, 1, 1, 'the hotel is very ba', '2019-04-28', 1.9, 1),
(25, 1, 1, 'the hotel is very bad', '2019-04-28', 1.9, 1),
(26, 1, 1, ':)', '2019-04-28', 3.5, 1),
(27, 1, 1, ':(', '2019-04-28', 1.5, 1),
(28, 1, 1, 'good', '2019-04-29', 4.5, 1),
(29, 1, 1, 'good', '2019-04-29', 4.5, 1),
(30, 1, 3, 'service good', '2019-04-29', 3.5, 1),
(31, 1, 3, 'ec', '2019-04-29', 2.5, 1),
(32, 1, 3, 'excellent', '2019-04-29', 4.5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `tbl_addresort`
--
ALTER TABLE `tbl_addresort`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_resort`
--
ALTER TABLE `tbl_resort`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`rm_id`);

--
-- Indexes for table `tbl_userfeedback`
--
ALTER TABLE `tbl_userfeedback`
  ADD PRIMARY KEY (`uf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_addresort`
--
ALTER TABLE `tbl_addresort`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `b_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `cd_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `d_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `i_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `loc_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_resort`
--
ALTER TABLE `tbl_resort`
  MODIFY `re_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `rm_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_userfeedback`
--
ALTER TABLE `tbl_userfeedback`
  MODIFY `uf_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
