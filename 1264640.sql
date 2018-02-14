-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 05:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `name` varchar(50) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `agendaa` varchar(50) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE IF NOT EXISTS `applied` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `aa` int(20) NOT NULL,
  PRIMARY KEY (`aa`),
  UNIQUE KEY `aa` (`aa`),
  UNIQUE KEY `id_3` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `name`, `category`, `gender`, `aa`) VALUES
('201412082', 'Jerin Mahmud', 'Football', '', 1),
('201414070', 'Amir Hamza', 'Football', '', 3),
('201414079', 'Shusmoy Kundu', 'Table Tennis', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `applied1`
--

CREATE TABLE IF NOT EXISTS `applied1` (
  `iid` int(20) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `applied1`
--

INSERT INTO `applied1` (`iid`, `id`, `name`, `category`) VALUES
(1, '201414074', 'Asaduzzaman', 'football'),
(2, '201414074', 'Asaduzzaman', 'cricket'),
(3, '201414070', 'Amir Hamza', 'volleyball'),
(4, '201412082', 'Jerin Mahmud', 'tabletennis'),
(5, '201412082', 'Jerin Mahmud', 'football'),
(6, '201414062', 'rafiqul islam', 'volleyball'),
(7, '201414062', 'rafiqul islam', 'cricket'),
(8, '201414089', 'Brazab Nayak', 'football');

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE IF NOT EXISTS `countdown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`id`, `value`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deptadmin`
--

CREATE TABLE IF NOT EXISTS `deptadmin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptadmin`
--

INSERT INTO `deptadmin` (`username`, `password`, `dept`) VALUES
('a', 'a', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `finallist`
--

CREATE TABLE IF NOT EXISTS `finallist` (
  `iid` int(20) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `finallist`
--

INSERT INTO `finallist` (`iid`, `id`) VALUES
(5, '201412082'),
(7, '201414070'),
(9, '201414062'),
(10, '201414089');

-- --------------------------------------------------------

--
-- Table structure for table `goalarchive`
--

CREATE TABLE IF NOT EXISTS `goalarchive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yearr` varchar(30) NOT NULL,
  `team1` varchar(30) NOT NULL,
  `team2` varchar(30) NOT NULL,
  `goal1` varchar(30) NOT NULL,
  `goal2` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `liveon`
--

CREATE TABLE IF NOT EXISTS `liveon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `liveupdate` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `liveupdate`
--

CREATE TABLE IF NOT EXISTS `liveupdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `picture`, `gender`) VALUES
(19, 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(18, '201414074', 'a', 'Asaduzzaman', 'Asad', 'Osmany Hall', '00000000000', '000000000', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_link` varchar(100) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `n_link`) VALUES
(42, 'uploads/notice-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `datee` date NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`serial`, `datee`, `description`) VALUES
(11, '2016-05-05', 'à¦•à§à¦°à¦¿à¦•à§‡à¦Ÿ'),
(8, '2008-02-03', 'Vollyball'),
(6, '2009-01-01', 'Football'),
(10, '2016-05-05', 'Cricket'),
(16, '2016-05-05', 'Table Tennis');

-- --------------------------------------------------------

--
-- Table structure for table `stdinfo`
--

CREATE TABLE IF NOT EXISTS `stdinfo` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `sessionn` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `prevreport` varchar(30) NOT NULL,
  `yearr` varchar(30) NOT NULL,
  `rank` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdinfo`
--

INSERT INTO `stdinfo` (`id`, `name`, `gender`, `dept`, `sessionn`, `email`, `mobile`, `password`, `prevreport`, `yearr`, `rank`) VALUES
('201414074', 'Asaduzzaman', 'male', 'cse', '2013-2014', 'asadbd45@gmail.com', 'asadbd45@gmail.com', 'a', 'abc', '2016', 'civil'),
('201414070', 'Amir Hamza', 'on', 'CSE', '2013-2014', 'scloudy096@gmail.com', 'kujsd@ghj', 'aaa', 'No Report', '2016', 'civil'),
('201414079', 'Shusmoy Kundu', 'on', 'CSE', '2013-2014', 'scloudy096@gmail.com', 'dfgh@dfg', 'sss', 'No Report', '2016', 'civil'),
('201314034', 'Maroof Abdul Matin', 'on', 'CSE', '2012-2013', 'asdf@hgjh', 'asdf@hgjh', 'a', 'a', '2016', 'civil'),
('201412082', 'Jerin Mahmud', 'on', 'ME', '2013-2014', 'sazx@h', 'sazx@h', 'a', 'a', '2016', 'civil'),
('201414062', 'rafiqul islam', 'on', 'cse', '2013-2014', 'rashed_10714@yahoo', 'rashed_10714@yahoo.com', 'libia124', '', '2016', 'military'),
('', '', 'on', 'CE', '2016-17', '', '', '', '', '2016', 'civil'),
('201414102', 'Mehedi Hasan Muaz', 'on', 'CSE', '2013-14', 'rashed_10714@yahoo', '123', 'a', 'no record aaa', '2016', 'civil'),
('201414100', 'Asibul', 'on', 'CSE', '2013-14', 'rashed_10714@yahoo', '123', 'qq', 'no record aaa', '2016', 'civil'),
('201414089', 'Brazab Nayak', 'on', 'CSE', '2013-14', 'brazab_10714@yahoo', '123', 'p', 'no record aaa', '2016', 'civil'),
('asxda', 'asd', 'on', 'CE', '2016-17', 'asdf@hgjh', '121', 'asd', 'xdsa', '2016', 'civil');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(30) NOT NULL,
  `filelink` varchar(30) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
