-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2024 at 07:35 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fullname` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `number` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `timestamp`, `fullname`, `uin`, `number`, `email`, `passport`, `designation`, `password`) VALUES
(1, '2024-02-22 18:04:01', 'Joseph Oluwafemi', 'cry22022493479347', '09070018275', 'josephabiodun79@gmail.com', '4.jpeg', ' Admin', '12345'),
(2, '2024-02-22 18:16:42', 'Joseph Oluwafemi', 'cry22022411931193', '', 'dayomne@gmail.com', '5.jpg', ' Admin', '12345'),
(3, '2024-02-22 18:17:54', 'Joseph Oluwafemi ghrw3r6iol', 'cry22022439813981', '08113297874', 'fearnott@gmail.com', '4.jpeg', ' Admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) DEFAULT NULL,
  `ip` varchar(500) DEFAULT NULL,
  `food` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `qty` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `order_uin` varchar(500) DEFAULT NULL,
  `transaction_uin` varchar(500) DEFAULT NULL,
  `chipping_address` varchar(10000) DEFAULT NULL,
  `firstname` varchar(500) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `street` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `zipcode` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `order_note` varchar(500) DEFAULT NULL,
  `trx_id` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `user_id`, `ip`, `food`, `price`, `qty`, `passport`, `status`, `date`, `order_uin`, `transaction_uin`, `chipping_address`, `firstname`, `lastname`, `street`, `city`, `state`, `zipcode`, `phone`, `order_note`, `trx_id`, `email`, `msg`) VALUES
(46, '-1', '127.0.0.1', 'fufu', '500', '1', 'fufu.jfif', 'Pending', '2024-04-23', 'HON|JS945150724112023', '2662230424', 'No:57 Messiah  Quaters AKURE Ondo state || 340106', 'Joseph', 'Oluwafemi', 'No:57 Messiah  Quaters ', 'AKURE ', 'Ondo state ', '340106 ', '09070018275', 'kjhgfdfghjk', NULL, 'josephabiodun79@gmail.com', NULL),
(48, '-1', '127.0.0.1', 'fried rice', '300', '5', 'fried rice.jfif', 'Pending', '2024-05-07', 'HON|JS945150724112023', '9328070524', 'No:57 Messiah  Quaters AKURE Ondo state || 340106', 'Joseph', 'Oluwafemi', 'No:57 Messiah  Quaters ', 'AKURE ', 'Ondo state ', '340106 ', '09070018275', 'kjhgfdfghjk', NULL, 'josephabiodun79@gmail.com', NULL),
(49, '-1', '127.0.0.1', 'fried rice', '300', '2', 'fried rice.jfif', 'Pending', '2024-05-29', 'HON|JS945150724112023', '4197290524', 'No:57 Messiah  Quaters AKURE Ondo state || 340106', 'Joseph', 'Oluwafemi', 'No:57 Messiah  Quaters ', 'AKURE ', 'Ondo state ', '340106 ', '09070018275', 'kjhgfdfghjk', NULL, 'josephabiodun79@gmail.com', NULL),
(50, '-1', '127.0.0.1', 'fried rice', '300', '3', 'fried rice.jfif', 'Pending', '2024-06-13', 'HON|JS945150724112023', '9915130624', 'No:57 Messiah  Quaters AKURE Ondo state || 340106', 'Joseph', 'Oluwafemi', 'No:57 Messiah  Quaters ', 'AKURE ', 'Ondo state ', '340106 ', '09070018275', 'kjhgfdfghjk', NULL, 'josephabiodun79@gmail.com', NULL),
(51, '-1', '127.0.0.1', 'jollof rice', '400', '2', 'jollof rice.jfif', 'Pending', '2024-06-19', 'HON|JS945150724112023', '9730190624', 'No:57 Messiah  Quaters AKURE Ondo state || 340106', 'Joseph', 'Oluwafemi', 'No:57 Messiah  Quaters ', 'AKURE ', 'Ondo state ', '340106 ', '09070018275', 'kjhgfdfghjk', NULL, 'josephabiodun79@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `order_uin` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `order_uin`, `name`, `email`, `msg`, `status`) VALUES
(1, NULL, 'Joseph Oluwafemi', 'josephabiodun79@gmail.com', 'xetyhjn', NULL),
(2, NULL, 'Joseph Oluwafemi', 'josephabiodun79@gmail.com', 'etryumiop,l', NULL),
(3, '234567890', 'Joseph Oluwafemi', 'josephabiodun79@gmail.com', 'xcfgvbjhnk', NULL),
(4, 'efye6363', 'Joseph Oluwafemi', 'josephabiodun79@gmail.com ', 'xctfghjnkkl', 'pending'),
(5, 'efye6363', 'Joseph Oluwafemi', 'josephabiodun79@gmail.com ', 'my cloth havent deliver', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `food` varchar(500) DEFAULT NULL,
  `cat` varchar(500) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `food`, `cat`, `dob`, `passport`, `price`, `timestamp`, `qty`) VALUES
(1, 'jollof rice', 'rice', '2024-03-06', 'jollof rice.jfif', '400', '2024-03-07 09:16:54', '3'),
(2, 'fried rice', 'rice', '2024-03-07', 'fried rice.jfif', '300', '2024-03-07 09:17:30', '20'),
(3, 'fried rice', 'rice', '2024-03-07', 'fried rice.jfif', '300', '2024-03-07 09:30:00', '20'),
(4, 'okro soup', 'soup', '2024-03-07', 'okro.jfif', '0', '2024-03-07 09:30:53', '0'),
(5, 'beef', 'meat', '2024-03-07', 'beff.jfif', '400', '2024-03-07 09:32:22', '5'),
(6, 'fufu', 'swallow', '2024-03-07', 'fufu.jfif', '500', '2024-03-07 09:40:10', '55'),
(7, 'fufu', 'swallow', '2024-03-07', 'fufu.jfif', '40', '2024-03-07 09:40:51', '5'),
(8, 'coka cola', 'drinks', '2024-03-07', 'coke.jfif', '350', '2024-03-07 09:47:05', '66'),
(9, 'fufu', 'swallow', '2024-04-13', 'download (3).jpg', '300', '2024-04-13 22:17:48', '30'),
(10, 'fufu', '', '2024-04-05', '20190806_144438.jpg', '600', '2024-04-15 10:37:49', '6'),
(11, 'fufu', 'swallow', '2024-04-03', '1.jpg', '50', '2024-04-15 10:54:18', '1'),
(12, 'okro soup', '', '2024-04-05', '20190806_144438.jpg', '30', '2024-04-15 10:55:52', '2'),
(13, 'fufu', 'swallow', '2024-04-03', '20190806_144438.jpg', '2400.00', '2024-04-15 10:56:53', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
