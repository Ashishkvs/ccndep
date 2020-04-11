-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 10.1.2.127:3306
-- Generation Time: Apr 11, 2020 at 05:40 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u492913123_ccnde`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(3) NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `password`, `username`) VALUES
(2, '009inspired', 'ashishkvs@gmail.com'),
(1, 'sanchay@1', 'Sanchay@ccndep.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `sno` int(4) NOT NULL,
  `location` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`sno`, `location`, `heading`, `content`) VALUES
(28, 'post/', '', ' Hi Look what we have for you! a goodoffer \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2Puu0BV'),
(29, 'post/', '', ' Hey an amazingoffering \r\n To qualify click on the link below  \r\n \r\nhttp://bit.ly/2QS35p5'),
(30, 'post/', '', ' Hy there,  Good news ! an interestingoffers \r\n Just click on the link below to qualify  \r\n \r\nhttps://drive.google.com/file/d/1JIumM24ptn38pS773IUn3DfnynZz4Be_/preview'),
(31, 'post/', '', 'How to Make $3000 FAST | Fast Money | The Busy Budgeter: http://wntdco.mx/bestinvestsystem84119'),
(32, 'post/', '', 'Ciao! Here is  nice present - A pleasant surprise of $/€ 1600 welcome bonus.  Just click on the link below to qualify. http://bit.ly/2yzIf2T'),
(33, 'post/', '', '$15,000 a month (30mins “work” lol): http://www.short4free.us/bestinvest$300028795'),
(34, 'post/', '', '  Look what we arrange for you! a virtuousdonation \r\n Decent click on the component underneath to qualify  \r\nhttp://bit.ly/2SU2sse'),
(35, 'post/', '', 'Wie man € 10.000 pro Tag SCHNELL macht: http://webhop.se/5500064275'),
(36, 'post/', '', 'Top cryptocurrencies to invest in 2019: http://www.vkvi.net/17431'),
(37, 'post/', '', ' Hy there,  Good tidings ! a fineoffers \r\n To be fit click on the together below  \r\n \r\nhttp://servicerubin.ru'),
(38, 'post/', '', 'Confirm that you are not a robot, and  Look at an interestingprize for your team. https://drive.google.com/file/d/10Ogmvx9Z4muIV0fhE2S1WqnmDJFDdOZU/preview'),
(39, 'post/', '', 'We offer you the opportunity to advertise your products and services. \r\nHello! Here is  an amazing offer for you. I can send your commercial offers or messages through feedback forms. The advantage of this method is that the messages sent through the feedback forms are included in the white list. Th');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sno` int(4) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sno`, `email`) VALUES
(1, 'Ashishkvs@gmail.com'),
(2, 'sds@asa.com'),
(3, 'ashishkvs@gmail.com'),
(4, 'info23@cantatic.com'),
(5, 'ccndep.com@domstates.su'),
(6, 'ccndep.com@domstates.su');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `company` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `email`, `phone`, `company`, `subject`, `message`) VALUES
(15, 'kahona', 'sda', 0, '', 'j', 'k'),
(16, 'sdsa', 'ksdsd@ssd.ssd', 0, 'j', 'kj', 'kjj'),
(17, 'Whas', 'ashishkvs@gmail.com', 2147483647, 'Imagegrafia', 'Hi', 'Last 1'),
(18, 'Alice Thomas', 'alic.alicethomas@gmail.com', 844, 'Information Technology', 'Want more clients and customers?', 'Hi, We are interested to increase traffic to your website, please get back to us in order to discuss the possibility in further detail.  Thank You'),
(19, 'Ashish', 'asaskh@amas.asas', 0, 'kjsd', 'jkdssk', 'kjsds'),
(20, 'Ashish Yadhuvanshi', 'ashishkvs@gmail.com', 2147483647, 'Imagegrafia', 'xcx', 'cvc'),
(21, 'Ashish Kumar', 'ashishkvs@gmail.com', 2147483647, 'Imagegrafia', 'hello ji', '010212101010'),
(22, 'Ashish Yadhuvanshi', 'ashishkvs@gmail.com', 2147483647, 'Imagegrafia', 'Ky be sanchayiyaa kuch kr v raha hi ki bus aise hi', 'Hello'),
(23, 'Winston Redford', 'w7@thefirstpageplan.com', 319, 'Winston Redford', 'Quick question about your site...', 'I just wondered if youve planned any marketing yet for the new year for http://ccndep.com.  I am self employed doing this for various businesses for a number of years now, I feed my family doing it so I wont complain.  I have a way of getting immediate interested traffic and buyers to your site through social media channels and email without you having to pay anyone for the traffic unlike constant'),
(24, 'Ashish Yadhuvanshi', 'ashishkvs@gmail.com', 2147483647, 'Imagegrafia', 'hi therer', 'Helo mr surla'),
(25, 'Chandan yadav', 'Indal8662@gmail.com', 2147483647, '', 'Regarding job.', 'Hi , \r\n       Sir I am a graduate .my communication skill is good is there any vacancy is available??'),
(26, 'Abhishek Pandey', 'abhishekpandey99k@gmail.com', 2147483647, '', 'Job', 'I m 12 th passed out from CBSE Board I am interested in this job.please tell me If I am eligible for this job.'),
(27, 'Ashish Kumar', 'ashishkvs@gmail.com', 2147483647, 'Imagegrafia', 'ky be ', 'so raha hi  gaandu new yr is coming'),
(28, 'Brian Sherman', 'newsitevisitors@email.com', 0, 'TS', 'How to get 5,000 interested visitors to ccndep.com in one week', 'Hi,\r\n\r\nWould you like 5,000 visitors coming to ccndep.com in one week?\r\n\r\nThese are people who are interested in seeing what you have to offer.\r\n\r\nNational visitors (not by city or state) come from online publications in your niche via\r\nfull page popups of your website. \r\n\r\nOur service is like no other.\r\n\r\nGet 5,000 interested visitors in 7 days for just $54.99.\r\nLarger packages available.\r\n\r\nIf t');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
