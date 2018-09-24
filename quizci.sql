-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 08:38 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'rashmi', 'er.rashmisharma1998@gmail.com', '444');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL,
  `correct_opt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `correct_opt`) VALUES
(3, '<p><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"background-color:#3498db\">sdfsfsfdsfd</span></span></strong></p>\r\n', '<p>dsfdsffdd</p>\r\n', '<p>srfs</p>\r\n', '<p>dfsf</p>\r\n', '<p>dwsdf</p>\r\n', '<p>RFSDFR</p>\r\n'),
(5, '<p>what is full form of html???</p>\r\n', '<p>hypertext markup language</p>\r\n', '<p>sdmp pcs</p>\r\n', '<p>dfc dsoer</p>\r\n', '<p>gfdg</p>\r\n', '<p>hypertextmarkup language</p>\r\n'),
(7, '<p><span style=\"background-color:#e67e22\">not okay</span></p>\r\n', '<p>dog</p>\r\n', '<p>dog</p>\r\n', '<p>dog</p>\r\n', '<p>dog</p>\r\n', '<p>dog</p>\r\n'),
(11, '<p>aaj kaaa kaam</p>\r\n', '<p>dsdj</p>\r\n', '<p>fdlfkj</p>\r\n', '<p>gldkj</p>\r\n', '<p>godjg`</p>\r\n', '<p>tgodgk</p>\r\n'),
(13, '<p><span style=\"color:#2ecc71\"><span style=\"background-color:#f1c40f\">what is css??</span></span></p>\r\n', '<p>cascade style sheet&nbsp;</p>\r\n', '<p>case sheet script</p>\r\n', '<p>c shadow sheet</p>\r\n', '<p>code style script</p>\r\n', '<p>cascade style sheet</p>\r\n'),
(21, '<p>pii</p>\r\n', '<p>fsfsd</p>\r\n', '<p>fsfd</p>\r\n', '<p>fesf</p>\r\n', '<p>fswf</p>\r\n', '<p>fwf</p>\r\n'),
(22, '<p><img alt=\"wink\" src=\"http://localhost/quizadmin/ckeditor/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /></p>\r\n', '<p>dufeer hu m btau k&nbsp;</p>\r\n', '<p>han ho&nbsp;</p>\r\n', '<p>na nh ho fsdf</p>\r\n', '<p>kmni</p>\r\n', '<p>dfdfdfdfdfdfdfdfdfrsdf</p>\r\n'),
(23, '<p>gudmrng</p>\r\n', '<p>today</p>\r\n', '<p>item</p>\r\n', '<p>2</p>\r\n', '<p>3</p>\r\n', '<p>4</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
