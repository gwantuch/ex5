-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2014 at 01:41 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fa14_31300_crdillon`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Techstuff'),
(2, 'Weather'),
(3, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `uID` int(11) NOT NULL,
  `commentText` longtext NOT NULL,
  `date` datetime NOT NULL,
  `postID` int(11) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(512) NOT NULL,
  `content` text,
  `categoryID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `uID` int(11) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pID`, `title`, `content`, `categoryID`, `date`, `uID`) VALUES
(1, 'PDO vs. ADODB', 'PDO is standard in PHP as of version 5.1. (It is also available with a PECL extension in PHP 5.0) Most hosting provides will have it enabled. AdoDB is not a standard extension.\r\n\r\nAlso, I believe the PDO drivers are "PHP-native": they are built on top of the same libraries that PHP itself was built on, and use the same underlying routines for things like memory management. So potentially, PDO is more lightweight than AdoDB.\r\n\r\nAccording to this benchmark, AdoDB is considerably slower than PDO: http://tonylandis.com/perfomance/php-adodb-pdo-mysql-database-apc-benchmark/\r\n\r\nOf course, you should consider whether this is important enough for your use case to prefer PDO or not.', 1, '2014-10-12 06:12:06', 1),
(2, 'Gonzalo to Become a Major Hurricane, Eye Bermuda', 'After lashing the northern Lesser Antilles as a powerful hurricane, Gonzalo is on the verge of becoming a major hurricane.\r\nGonzalo unleashed torrential rain and damaging winds to Antigua and other islands of the northern Lesser Antilles.\r\n\r\nImpacts to the northeast Caribbean will fade Tuesday as Gonzalo moves north toward Bermuda over the next several days.\r\n"Residents of Bermuda should make preparations for a potential direct hit from Gonzalo later this week," said AccuWeather.com Meteorologist Steve Travis.\r\nA direct hit on Bermuda could happen late Friday night into Saturday with sustained winds of 120 mph and higher gusts possible.', 2, '2014-10-13 10:16:16', 1),
(3, 'ALCS Game 3 now set for Tuesday', 'The last two times the Kansas City Royals played a postseason game at home, rain fell after the final out. This time, it started well before the first pitch.\r\n\r\nGame 3 of the AL Championship Series between the Royals and Baltimore Orioles was postponed Monday because of steady rain that saturated Kauffman Stadium. The game was rescheduled for Tuesday at 8:07 p.m. EDT.\r\n\r\nAlong with steady rain, wind gusts of 25 mph were buffeting the ballpark. The forecast for Tuesday is cold and windy but dry, with weather improving the rest of the week.\r\n\r\nMore from ESPN.com\r\nThe rainout of Monday''s Game 3 could become an issue for the Orioles and Royals if the ALCS goes the distance, writes David Schoenfield. Story\r\n\r\nAs playoff game times drag on to four hours and beyond, the pokey pace of play is harming the game by boring the audience, Jim Caple argues. Story\r\n\r\nStats & Info: Inside the Game 3 matchup\r\n"We want a game we know we can get through nine innings, hopefully play dry baseball, not risk player safety or uncomfortable fans," Major League Baseball Senior Vice President Peter Woodfork said about 4 hours before the scheduled first pitch.\r\n\r\nThe Royals, who lead the best-of-seven series 2-0, will keep former Orioles pitcher Jeremy Guthrie on the mound for Game 3. The Orioles will start Wei-Yin Chen, as planned.', 3, '2014-10-13 17:10:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` char(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '2',
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `email`, `password`, `first_name`, `last_name`, `user_type`, `active`) VALUES
(1, 'crdillon@iu.edu', 'password', 'Rob', 'Dillon', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
