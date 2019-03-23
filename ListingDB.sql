-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 04:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `role`, `password`) VALUES
(1, 'Anjali', 'Manager', 'Anji'),
(2, 'Urvi', 'Employee', 'Urvi');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Content` varchar(5000) NOT NULL,
  `authName` varchar(50) NOT NULL,
  `publishDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(11) NOT NULL,
  `listing_name` varchar(20) NOT NULL,
  `listing_category` varchar(20) NOT NULL,
  `listing_city` varchar(20) NOT NULL,
  `listing_contact` varchar(50) DEFAULT NULL,
  `listing_email` varchar(50) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `listing_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`ID`, `listing_name`, `listing_category`, `listing_city`, `listing_contact`, `listing_email`, `published`, `listing_featured`) VALUES
(1, 'honest', 'brampton', 'restaurant', '9724330544', 'div@gmail.com', 0, 0),
(2, 'Rajdhani', 'Etobicoke', 'restaurant ', '99982224312', 'ji@th.com', 0, 0),
(3, 'Kismat', 'Toronot', 'restaurant', '9998761232', 'kis@ks.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityId` int(11) NOT NULL,
  `cityName` varchar(100) NOT NULL,
  `isVisible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityId`, `cityName`, `isVisible`) VALUES
(1, 'Toronto', 1),
(2, 'Brampton', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `eventName` varchar(500) NOT NULL,
  `eventDescription` varchar(1000) NOT NULL,
  `eventLocation` varchar(100) NOT NULL,
  `eventdate` date NOT NULL,
  `eventTime` time NOT NULL,
  `eventFee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `eventName`, `eventDescription`, `eventLocation`, `eventdate`, `eventTime`, `eventFee`) VALUES
(1, 'Financial Literacy Workshop', 'During this annual event, volunteers take turns reading over a 24-hour period.  This year’s event, “The Political Imagination” focuses on literature surrounding various political themes, by authors from around the world. Anyone may volunteer for two to five minutes of reading. Groups — classes, teams, social organizations — are encouraged to participate by volunteering for larger blocks of time. Remember, it gets really fun in the wee hours of the morning.  There will be pizza, t-shirts, and other surprises.  You can also choose to read in Spanish, French, Japanese, German, Chinese, Portuguese or Russian… in fact it’s encouraged.  Reading list includes the Declaration of Independence, Universal Declaration of Human Rights, Letter from Birmingham Jail, Selections from Whitman & The Hunger Games.', 'Toronto', '2019-03-13', '12:30:00', 50),
(3, 'Tradeshow Noir', 'A unique wedding and event planning expo complete with live entertainment, interactive event companies and all types of decor. Over $25000 in prize giveaways, get tickets to be entered in to win.', 'Delta Hotels', '2019-03-28', '09:00:00', 60);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqId` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answers` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offerId` int(11) NOT NULL,
  `offerName` varchar(100) NOT NULL,
  `offerDesc` varchar(500) NOT NULL,
  `offerValidity` datetime NOT NULL,
  `offerPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `regi_date` varchar(100) NOT NULL,
  `is_visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `email_id`, `password`, `mobile_no`, `address`, `postal_code`, `regi_date`, `is_visible`) VALUES
(4, 'Anjali Panchal', 'a@b.com', 'abc', 1234567890, '231, 1585 Albion Road, Etobicoke, ON, Canada', 'M9V 1B6', '15:45:54', 1),
(5, 'Urvi Patel', 'urvi@gmail.com', 'urvi', 2147483647, 'HumberWood', 'm9v1b6', '18:14:21', 0),
(6, 'urvi', 'urvi@gmail.com', 'urvi', 2147483647, 'HumberWood', 'M9V 1B6', '18:40:21', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offerId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
