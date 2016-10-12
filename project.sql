-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 10:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `stack`
--

CREATE TABLE `stack` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(20) NOT NULL,
  `tot_ques` int(11) NOT NULL,
  `tot_unans` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stack`
--

INSERT INTO `stack` (`id`, `tag_name`, `tot_ques`, `tot_unans`) VALUES
(1, 'javascript', 1232317, 153377),
(2, 'java', 1147633, 142772),
(3, 'c%23', 1011400, 110766),
(4, 'php', 985219, 113655),
(5, 'android', 902051, 158735),
(6, 'jquery', 780483, 84481),
(7, 'python', 640525, 73570),
(8, 'html', 584105, 55784),
(9, 'c++', 474220, 14948),
(10, 'ios', 466253, 74425),
(11, 'mysql', 423249, 42385),
(12, 'css', 422325, 37425),
(13, 'sql', 352880, 22926),
(14, 'asp.net', 300429, 35666),
(15, 'objective-c', 267186, 27799),
(16, 'ruby-on-rails', 257225, 27055),
(17, '.net', 240839, 21979),
(18, 'c', 229665, 14948),
(19, 'iphone', 214956, 16828),
(20, 'angularjs', 201659, 37416),
(21, 'arrays', 197153, 11972),
(22, 'sql-server', 179174, 15776),
(23, 'json', 172734, 22076),
(24, 'ruby', 169469, 14172),
(25, 'r', 155347, 24702),
(26, 'ajax', 155173, 22294),
(27, 'regex', 154066, 4873),
(28, 'xml', 145876, 17163),
(29, 'asp.net-mvc', 143044, 17117),
(30, 'node.js', 142852, 27283),
(31, 'linux', 133006, 17245),
(32, 'django', 128720, 15970),
(33, 'wpf', 123586, 14574),
(34, 'database', 118603, 12979),
(35, 'swift', 117439, 21511),
(36, 'xcode', 106098, 15459),
(37, 'excel', 104102, 14984),
(38, 'vb.net', 103748, 14036),
(39, 'string', 102868, 4097),
(40, 'eclipse', 101381, 15931),
(41, 'windows', 100912, 15941),
(42, 'wordpress', 100205, 20923),
(43, 'spring', 96792, 18034),
(44, 'html5', 95456, 12828),
(45, 'multithreading', 89979, 9892),
(46, 'git', 76848, 7921),
(47, 'forms', 75399, 8618),
(48, 'oracle', 75367, 7440),
(49, 'facebook', 75317, 14753),
(50, 'image', 75120, 10520);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stack`
--
ALTER TABLE `stack`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stack`
--
ALTER TABLE `stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
