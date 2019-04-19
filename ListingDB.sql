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
  `emailid` varchar(100) NOT NULL,
  `role` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `emailid`, `role`, `password`) VALUES
(3, 'Anjali', 'anjali@gmail.com', 1, 'abc'),
(4, 'Admin', 'admin@admin.com', 1, 'admin');

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
  `ID` int(11) NOT NULL,
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
(1, 'honest', 'restaurant', 'brampton', '9724330544', 'div@gmail.com', 0, 0),
(2, 'Rajdhani', 'restaurant', 'Etobicoke', '99982224312', 'ji@th.com', 0, 0),
(3, 'Kismat', 'restaurant', 'Toronto', '9998761232', 'kis@ks.com', 0, 0),
(4, 'Madras Hut', 'restaurant', 'Toronto', 'xxxxxxxx', 'madras@gmail.com', 0, 0),
(9, 'honest', 'Italian', 'Toronto', '2313423423', 'divyashah9724330544@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `listingid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_time`, `listingid`) VALUES
(1, 'great', '22', '2019-04-10 10:46:21', 1),
(5, 'acw', 'acw', '2019-04-10 12:41:14', 0),
(6, 'daw', 'vas', '2019-04-10 12:42:01', 5),
(21, 'gwe', 'wrw', '2019-04-10 18:35:52', 0),
(23, 'jikk', 'tyh', '2019-04-10 18:46:14', 0),
(24, 'ascvfawga', 'awfaw', '2019-04-10 18:58:31', 0),
(25, 'rd', 'wsgsr', '2019-04-10 18:59:58', 0),
(26, 'wq', 'ce', '2019-04-10 19:07:55', 0),
(27, 'divy', 'awdfaw', '2019-04-11 09:04:24', 0),
(28, 'efw', 'asdf', '2019-04-11 09:07:33', 0),
(29, 'vds', 'awcw', '2019-04-11 09:11:13', 2),
(30, 'dwad', 'cedc', '2019-04-11 09:12:01', 3),
(31, 'new', 'list3', '2019-04-11 10:17:12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `category`, `image`) VALUES
(1, 'nie', 'event', '388204.jpg'),
(3, 'Toronto', 'Restaurant', '545313.jpg'),
(6, 'test', 'Restaurant', '285157.jpg'),
(7, 'dive', 'place', '120897.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

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
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL
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

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(3, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

CREATE TABLE `newsletter` (
  `newsletterid` int(11) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletterid`, `topic`, `title`, `message`) VALUES
(1, 'health', 'vaccination camp in toronto', ''),
(2, 'event', 'new events in toronto', 'dfkgkrbkjanvjzn,jnaeg.'),
(3, 'health', 'jdnfoierg', 'd,mvkrvkdnkfdfsnrijbnkkkmxksjinb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletterid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

CREATE TABLE `blogs` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
