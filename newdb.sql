-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 04:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `f_name`, `l_name`, `email`, `mobile`, `password`, `rpassword`) VALUES
(1, 'Nadun', 'Dehigama', 'nadun@gmail.com', 112255690, '0d99d3d7088b0ee61ad9ec3007642c8ea46ab7ab', '0d99d3d7088b0ee61ad9ec3007642c8ea46ab7ab'),
(3, '', '', '', 0, '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'nimantha', 'himantha', '', 0, '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'nimantha', 'himantha', '0710932336', 0, '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964'),
(6, 'nimantha', 'Aravinda', '0771234567', 0, 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be', 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be'),
(7, 'nimantha', 'him', 'dileep@bestjobslk.com', 710932336, '8cb2237d0679ca88db6464eac60da96345513964', 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `b_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `b_day` date NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `Tele` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `line1` varchar(100) NOT NULL,
  `line2` varchar(100) NOT NULL,
  `line3` varchar(100) NOT NULL,
  `p_code` varchar(10) NOT NULL,
  `province` varchar(20) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`b_id`, `f_name`, `l_name`, `b_day`, `gender`, `Tele`, `email`, `line1`, `line2`, `line3`, `p_code`, `province`, `u_name`, `password`, `rpassword`) VALUES
(36, 'Nimantha', 'Aravinda', '2020-12-16', 'm', '0771234567', 'nimanthaaravinda@gmail.com', 'kalu', 'aggala', 'waga', '10680', 'western', 'username', '947232f8a40235027b0959592949289d7f3a3cf9', '947232f8a40235027b0959592949289d7f3a3cf9'),
(37, 'pasindu', 'nimantha', '2020-12-10', 'm', '0112345687', 'praveen.himantha@gmail.com', 'kalu', 'aggala', 'waga', '10680', 'western', 'nimantha', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916'),
(41, 'Malmi', 'Pamodya', '2021-03-20', 'f', '0776545213', 'malminavindi98@gmail.com', 'Dehiwala', 'Colombo', 'Sri lanka', '0269', 'Western', 'kimnana', '3560f768367ad51e271eb4d2a5a88f5131d9f92e', '3560f768367ad51e271eb4d2a5a88f5131d9f92e'),
(43, 'praveen', 'Aravinda', '2021-03-16', 'm', '0712273738', 'swelikotuwa@gmail.com', 'weligama', 'matara', 'waga', '67543', 'south', 'praveen', '4168207380a6b6818f18147336ba87fc16449a59', '4168207380a6b6818f18147336ba87fc16449a59'),
(45, 'praveena', 'perera', '2021-03-07', 'f', '0710932336', 'nimanthaaravinda19970815@gmail.com', 'gampaha', 'matara', 'waga', '67543', 'south', 'praveena', '3560f768367ad51e271eb4d2a5a88f5131d9f92e', '3560f768367ad51e271eb4d2a5a88f5131d9f92e'),
(46, 'nimantha', 'Aravinda', '2021-03-18', 'f', '0712273738', 'malminavindi98@gmail.com', 'gampaha', 'matara', 'sri lanka', '67543', 'south', 'Nnnn', '5dc559033148cdf8a3420bcd5a4a65421c44fc48', '5dc559033148cdf8a3420bcd5a4a65421c44fc48'),
(47, 'pasindu', 'chanusha', '2001-06-06', 'm', '0771234567', 'malminavindi98@gmail.com', 'panadura', 'kaluthara', 'sri lanka', '10690', 'south', 'pasindu123', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916'),
(48, 'nimantha', 'Aravinda', '2021-03-12', 'm', '0710932336', 'nimanthaaravinda@gmail.com', 'weligama', 'matara', 'waga', '10690', 'south', 'praveen123', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `c_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`c_id`, `p_id`, `quantity`, `u_id`) VALUES
(72, 49, 1, 5),
(76, 39, 3, 41),
(80, 39, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_b_id` int(11) NOT NULL,
  `from_b_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_b_id`, `from_b_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 4, 5, 'DSCBDSJF bDID', '2021-01-05 11:49:10', 0),
(2, 5, 4, 'biuhsd bdsHCHSUDF', '2021-01-05 11:49:29', 0),
(3, 5, 4, 'sfonsnf osnofnSOEI', '2021-01-05 12:13:53', 0),
(4, 4, 5, 'tefduefeWGEAYEE', '2021-01-05 13:08:06', 0),
(5, 4, 5, 'hei 9.42', '2021-01-05 22:42:20', 2),
(6, 4, 5, 'hei 9.42', '2021-01-05 22:42:23', 2),
(7, 4, 5, 'hei 9.42', '2021-01-05 22:42:25', 0),
(8, 4, 5, 'hei', '2021-01-05 22:44:09', 0),
(9, 5, 4, 'kollo', '2021-01-05 23:15:33', 0),
(10, 1, 5, 'hjbdsif bihbsdufs', '2021-01-11 21:33:24', 2),
(11, 1, 5, 'hjbdsif bihbsdufs', '2021-01-11 21:33:27', 2),
(12, 1, 5, 'ekwabrjebrjker', '2021-01-13 07:11:34', 2),
(13, 1, 5, 'ekwabrjebrjker', '2021-01-13 07:11:36', 2),
(14, 1, 5, 'jhbbk', '2021-01-13 09:33:32', 2),
(15, 3, 5, 'bbjbkhijoj', '2021-01-13 10:36:57', 1),
(16, 5, 6, 'dsbhbjsd hjsdbs', '2021-01-13 10:43:24', 0),
(17, 1, 5, 'hiii frends', '2021-03-24 05:03:41', 1),
(18, 1, 5, 'hiiiii', '2021-03-25 00:35:27', 1),
(19, 1, 5, 'hiiiii', '2021-03-25 00:35:36', 1),
(20, 5, 4, 'bokka', '2021-03-25 00:36:51', 0),
(21, 5, 4, 'bokka', '2021-03-25 00:36:55', 0),
(22, 1, 5, 'sdcsdfcds', '2021-03-25 11:11:52', 2),
(23, 6, 5, 'hiii', '2021-03-25 11:31:12', 1),
(24, 6, 5, 'hiiii', '2021-03-25 11:31:26', 1),
(25, 5, 4, 'hi bokka', '2021-03-25 12:41:56', 0),
(26, 4, 5, 'kollo komada', '2021-03-25 12:50:36', 0),
(27, 4, 5, 'adooo', '2021-03-25 12:55:17', 2),
(28, 4, 5, 'adooo', '2021-03-25 12:55:23', 0),
(29, 4, 5, 'adooo', '2021-03-25 12:55:41', 2),
(30, 4, 5, 'adoooo', '2021-03-25 12:55:45', 2),
(31, 5, 4, 'adppp', '2021-03-25 12:59:18', 0),
(32, 6, 5, 'hi', '2021-03-26 10:38:27', 1),
(33, 4, 5, 'jnafdosdnfs', '2021-03-26 11:21:05', 2),
(34, 4, 5, 'heeii bokka', '2021-03-26 11:51:37', 2),
(35, 4, 5, 'hiii', '2021-03-28 12:48:55', 2),
(36, 4, 5, 'sddgs', '2021-03-28 12:51:15', 2),
(37, 4, 5, 'koollo', '2021-03-28 12:52:12', 2),
(38, 4, 5, 'dffg', '2021-03-28 12:53:47', 2),
(39, 4, 5, 'hi', '2021-03-28 21:28:02', 2),
(0, 45, 42, 'hi', '2021-03-29 08:56:07', 2),
(0, 38, 45, 'hii', '2021-03-29 09:03:24', 2),
(0, 42, 45, 'hiii', '2021-03-29 09:03:53', 2),
(0, 45, 42, 'hiiiii', '2021-03-29 09:04:32', 2),
(0, 45, 42, 'hiiii', '2021-03-29 17:09:44', 2),
(0, 41, 45, 'huyagsduw', '2021-03-29 17:14:12', 2),
(0, 41, 42, 'hiiiii', '2021-03-29 18:09:51', 2),
(0, 41, 45, 'bokka kimnana', '2021-03-29 18:12:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_num`
--

CREATE TABLE `contact_num` (
  `b_id` int(4) NOT NULL,
  `c_num_1` varchar(10) NOT NULL,
  `c_num_2` varchar(10) NOT NULL,
  `c_num_3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `d_id` int(4) NOT NULL,
  `C_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `a_line_1` varchar(100) NOT NULL,
  `a_line_2` varchar(100) NOT NULL,
  `a_line_3` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`d_id`, `C_name`, `email`, `contact`, `a_line_1`, `a_line_2`, `a_line_3`, `U_name`, `password`, `rpassword`) VALUES
(3, 'Nimantha', 'nimanthaaravinda@gmail.com', 771234567, 'kalu', 'aggala', 'waga', 'Praveen16', '12345', '12345'),
(4, 'qgcfstw', 'nimanthaaravinda@gmail.com', 712273738, 'weligama', 'aggala', 'waga', 'helavikum', '3560f768367ad51e271e', '3560f768367ad51e271eb4d2a5a88f5131d9f92e'),
(5, 'qgcfstw', 'nimanthaaravinda@gmail.com', 712273738, 'weligama', 'aggala', 'waga', 'helavikum', 'e64e3ee2ec2ff6e4ed7c', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916'),
(6, 'qgcfstw', 'nimanthaaravinda@gmail.com', 712273738, 'weligama', 'aggala', 'waga', 'helavikum', 'e64e3ee2ec2ff6e4ed7c', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916'),
(7, 'qgcfstw', 'nimanthaaravinda19970815@gmail.com', 712273738, 'weligama', 'aggala', 'waga', 'helavikum', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916', 'e64e3ee2ec2ff6e4ed7c11edd0edb4325892e916');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `b_id`, `last_activity`, `is_type`) VALUES
(0, 41, '2021-03-31 01:37:49', 'no'),
(0, 42, '2021-03-31 01:37:49', 'no'),
(0, 45, '2021-03-31 01:37:49', 'no'),
(0, 41, '2021-03-31 01:37:49', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `o_id` int(11) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `c_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`o_id`, `F_name`, `L_name`, `Address`, `Contact_no`, `country`, `city`, `c_id`, `email`, `u_id`) VALUES
(101, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 0),
(102, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(103, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(104, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(106, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(107, 'NIMA', 'Aravin', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 41),
(108, 'NIMA', 'Aravinda', 'No.1, Galle Road', 896534242, 'srilanka', 'Colombo', 123445, 'amal@bestjobslk.com', 41),
(109, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 41),
(110, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 0),
(111, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 0),
(112, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 0),
(113, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 0),
(114, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanth@gmail.com', 0),
(115, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 896534242, 'srilanka', 'Colombo', 123445, 'amal@bestjobslk.com', 0),
(116, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 896534242, 'srilanka', 'Colombo', 123445, 'amal@bestjobslk.com', 41),
(117, 'NIMANTHA', 'Aravin', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(118, 'Nimantha', 'Aravinda', 'wester', 896534242, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(121, 'malmi', 'dehigama', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'samanp@gmail.com', 41),
(122, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 41),
(123, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(124, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(125, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(126, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(127, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 771234567, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(128, 'NIMANTHA', 'Aravin', 'No.1, Galle Road', 896534242, 'srilanka', 'Colombo', 123445, 'nimanth@gmail.com', 41),
(129, 'NIMA', 'Aravin', 'wester', 771234567, 'srilanka', 'Colombo', 123445, 'samanp@gmail.com', 41),
(130, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(131, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(132, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'samanp@gmail.com', 41),
(133, 'Nimantha', 'bbbbbbbbb', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(134, 'malmi', 'Aravin', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 41),
(135, 'malmi', 'Aravinda', 'wester', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(136, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 123456789, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 41),
(137, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 112345687, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(138, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 710932336, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(139, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 710932336, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(140, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 112345687, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(141, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 112345687, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(142, 'Nimantha', 'Aravinda', 'wdw', 112345687, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(143, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 710932336, 'Sri lanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(144, 'Malaka', 'Hewawasam', 'godakawela rathnapura', 712345678, 'Sri Lanka', 'Rathnapura', 123445, 'malaka@gmail.com', 41),
(145, 'Malaka', 'Aravinda', '234 arkwata waga', 112345687, 'Sri lanka', 'Colombo', 123445, 'buddika@bestjobslk.com', 41),
(146, 'Malaka', 'Aravinda', '234 arkwata waga', 112345687, 'Sri lanka', 'Colombo', 123445, 'buddika@bestjobslk.com', 41),
(147, 'Nimantha', 'Aravinda', 'wdw', 710932336, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(148, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 710932336, 'Sri lanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(149, 'Malmi', 'dehigama', '234 arkwata waga', 710932336, 'Sri Lanka', 'Colombo', 123445, 'malminavindi98@gmail.com', 5),
(150, 'Nimantha ', 'aravinda ', 'Kaluaggala.waga', 710932336, 'Srilanka ', 'Hanwella', 123445, 'nimanthaaravinda19970815@gmail.com', 7),
(151, 'Praveen', 'Himantha', 'No.1, Galle Road', 782345612, 'Dakunu Rata', 'Matara', 123445, 'praveen.himantha@gmail.com', 41),
(152, 'Nimantha', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda19970815@gmail.com', 41),
(153, 'NIMANTHA', 'Aravin', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(154, 'NIMANTHA', 'Aravin', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(155, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 712273738, 'srilanka', 'Colombo', 123445, 'nimanthaaravinda@gmail.com', 41),
(156, 'Praveen', 'Aravinda', 'No.1, Galle Road', 710932336, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41),
(157, 'NIMANTHA', 'Aravinda', 'No.1, Galle Road', 896534242, 'srilanka', 'Colombo', 123445, 'dileep@bestjobslk.com', 41);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(10) NOT NULL,
  `o_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `unit_price` float NOT NULL,
  `quantity` int(10) NOT NULL,
  `time1` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `u_id` int(10) NOT NULL,
  `order_status` text NOT NULL DEFAULT 'Not Delivered',
  `buyer_status` text NOT NULL DEFAULT 'Not Received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `o_id`, `p_id`, `unit_price`, `quantity`, `time1`, `u_id`, `order_status`, `buyer_status`) VALUES
(30, 146, 39, 2000, 1, '2021-03-29 16:29:00.063559', 5, 'Delivered', 'Received'),
(31, 146, 44, 600, 1, '2021-03-29 10:51:23.494848', 41, 'Delivered', 'Not Received'),
(32, 146, 43, 500, 1, '2021-03-29 11:08:33.635572', 41, 'Delivered', 'Received'),
(33, 146, 39, 2000, 1, '2021-03-29 16:29:00.063559', 41, 'Delivered', 'Received'),
(34, 147, 40, 350, 1, '2021-03-30 02:30:23.121054', 41, 'Delivered', 'Received'),
(35, 148, 50, 200, 1, '2021-03-30 15:45:22.188988', 41, 'Delivered', 'Received'),
(36, 148, 47, 200, 1, '2021-03-30 08:36:30.328401', 41, 'Delivered', 'Received'),
(37, 148, 46, 567, 1, '2021-03-29 11:22:45.621715', 41, 'Delivered', 'Not Received'),
(38, 149, 50, 200, 1, '2021-03-30 20:37:33.924712', 41, 'Delivered', 'Not Received'),
(39, 149, 47, 200, 1, '2021-03-29 10:07:25.835605', 41, 'Not Delivered', 'Not Received'),
(40, 149, 46, 567, 1, '2021-03-29 10:07:25.768961', 41, 'Not Delivered', 'Not Received'),
(41, 149, 42, 400, 1, '2021-03-29 10:07:25.737426', 5, 'Not Delivered', 'Not Received'),
(42, 149, 40, 350, 1, '2021-03-29 10:07:25.690979', 5, 'Not Delivered', 'Not Received'),
(43, 149, 49, 567, 1, '2021-03-29 10:07:25.660333', 5, 'Not Delivered', 'Not Received'),
(44, 150, 50, 200, 1, '2021-03-29 10:07:26.144491', 41, 'Not Delivered', 'Not Received'),
(45, 150, 47, 200, 1, '2021-03-29 10:07:26.114580', 41, 'Not Delivered', 'Not Received'),
(46, 150, 46, 567, 1, '2021-03-29 10:07:26.066172', 41, 'Not Delivered', 'Not Received'),
(47, 150, 42, 400, 1, '2021-03-29 10:07:26.035177', 5, 'Not Delivered', 'Not Received'),
(48, 150, 40, 350, 1, '2021-03-29 10:07:25.990215', 5, 'Not Delivered', 'Not Received'),
(49, 150, 49, 567, 1, '2021-03-29 10:07:25.958713', 5, 'Not Delivered', 'Not Received'),
(50, 150, 46, 567, 1, '2021-03-29 10:07:26.191892', 7, 'Not Delivered', 'Not Received'),
(51, 151, 50, 200, 1, '2021-03-29 20:08:26.257413', 41, 'Not Delivered', 'Not Received'),
(52, 151, 47, 200, 1, '2021-03-29 20:08:26.428492', 41, 'Not Delivered', 'Not Received'),
(53, 151, 46, 567, 2, '2021-03-29 20:08:26.479907', 41, 'Not Delivered', 'Not Received'),
(54, 151, 42, 400, 1, '2021-03-29 20:08:26.633292', 5, 'Not Delivered', 'Not Received'),
(55, 151, 40, 350, 2, '2021-03-29 20:08:26.722297', 5, 'Not Delivered', 'Not Received'),
(56, 151, 49, 567, 1, '2021-03-29 20:08:26.761144', 5, 'Not Delivered', 'Not Received'),
(57, 151, 46, 567, 2, '2021-03-29 20:08:26.811671', 7, 'Not Delivered', 'Not Received'),
(58, 151, 45, 312, 1, '2021-03-29 20:08:26.849394', 41, 'Not Delivered', 'Not Received'),
(59, 151, 41, 500, 2, '2021-03-29 20:08:26.937955', 41, 'Not Delivered', 'Not Received'),
(60, 151, 39, 2000, 1, '2021-03-29 20:08:26.999482', 41, 'Not Delivered', 'Not Received'),
(61, 151, 40, 350, 2, '2021-03-29 20:08:27.037578', 41, 'Not Delivered', 'Not Received'),
(62, 151, 42, 400, 1, '2021-03-29 20:08:27.088208', 41, 'Not Delivered', 'Not Received'),
(63, 152, 50, 200, 1, '2021-03-30 02:19:47.926529', 41, 'Not Delivered', 'Not Received'),
(64, 152, 47, 200, 1, '2021-03-30 02:19:47.995986', 41, 'Not Delivered', 'Not Received'),
(65, 152, 46, 567, 2, '2021-03-30 02:19:48.073514', 41, 'Not Delivered', 'Not Received'),
(66, 152, 42, 400, 1, '2021-03-30 02:19:48.117892', 5, 'Not Delivered', 'Not Received'),
(67, 152, 40, 350, 3, '2021-03-30 02:19:48.239977', 5, 'Not Delivered', 'Not Received'),
(68, 152, 49, 567, 1, '2021-03-30 02:19:48.306418', 5, 'Not Delivered', 'Not Received'),
(69, 152, 46, 567, 2, '2021-03-30 02:19:48.405163', 7, 'Not Delivered', 'Not Received'),
(70, 152, 45, 312, 1, '2021-03-30 02:19:48.501696', 41, 'Not Delivered', 'Not Received'),
(71, 152, 41, 500, 2, '2021-03-30 02:19:48.538423', 41, 'Not Delivered', 'Not Received'),
(72, 152, 39, 2000, 1, '2021-03-30 02:19:48.579348', 41, 'Not Delivered', 'Not Received'),
(73, 152, 40, 350, 3, '2021-03-30 02:19:48.615731', 41, 'Not Delivered', 'Not Received'),
(74, 152, 42, 400, 1, '2021-03-30 02:19:48.656502', 41, 'Not Delivered', 'Not Received'),
(75, 153, 50, 200, 1, '2021-03-30 05:57:34.003508', 41, 'Not Delivered', 'Not Received'),
(76, 153, 47, 200, 1, '2021-03-30 05:57:34.084610', 41, 'Not Delivered', 'Not Received'),
(77, 153, 46, 567, 2, '2021-03-30 05:57:34.138414', 41, 'Not Delivered', 'Not Received'),
(78, 153, 42, 400, 1, '2021-03-30 05:57:34.238021', 5, 'Not Delivered', 'Not Received'),
(79, 153, 40, 350, 3, '2021-03-30 05:57:34.291191', 5, 'Not Delivered', 'Not Received'),
(80, 153, 49, 567, 1, '2021-03-30 05:57:34.326629', 5, 'Not Delivered', 'Not Received'),
(81, 153, 46, 567, 2, '2021-03-30 05:57:34.380932', 7, 'Not Delivered', 'Not Received'),
(82, 153, 45, 312, 1, '2021-03-30 05:57:34.457995', 41, 'Not Delivered', 'Not Received'),
(83, 153, 41, 500, 2, '2021-03-30 05:57:34.543669', 41, 'Not Delivered', 'Not Received'),
(84, 153, 39, 2000, 1, '2021-03-30 05:57:34.632254', 41, 'Not Delivered', 'Not Received'),
(85, 153, 40, 350, 3, '2021-03-30 05:57:34.668992', 41, 'Not Delivered', 'Not Received'),
(86, 153, 42, 400, 1, '2021-03-30 05:57:34.709665', 41, 'Not Delivered', 'Not Received'),
(87, 153, 43, 500, 1, '2021-03-30 05:57:34.757536', 41, 'Not Delivered', 'Not Received'),
(88, 154, 50, 200, 1, '2021-03-30 06:07:01.815400', 41, 'Not Delivered', 'Not Received'),
(89, 154, 47, 200, 1, '2021-03-30 06:07:01.902830', 41, 'Not Delivered', 'Not Received'),
(90, 154, 46, 567, 2, '2021-03-30 06:07:01.939502', 41, 'Not Delivered', 'Not Received'),
(91, 154, 42, 400, 1, '2021-03-30 06:07:01.991088', 5, 'Not Delivered', 'Not Received'),
(92, 154, 40, 350, 3, '2021-03-30 06:07:02.035437', 5, 'Not Delivered', 'Not Received'),
(93, 154, 49, 567, 1, '2021-03-30 06:07:02.077392', 5, 'Not Delivered', 'Not Received'),
(94, 154, 46, 567, 2, '2021-03-30 06:07:02.112940', 7, 'Not Delivered', 'Not Received'),
(95, 154, 45, 312, 1, '2021-03-30 06:07:02.144051', 41, 'Not Delivered', 'Not Received'),
(96, 154, 41, 500, 2, '2021-03-30 06:07:02.179259', 41, 'Not Delivered', 'Not Received'),
(97, 154, 39, 2000, 1, '2021-03-30 06:07:02.245426', 41, 'Not Delivered', 'Not Received'),
(98, 154, 40, 350, 3, '2021-03-30 06:07:02.312203', 41, 'Not Delivered', 'Not Received'),
(99, 154, 42, 400, 1, '2021-03-30 06:07:02.467319', 41, 'Not Delivered', 'Not Received'),
(100, 154, 43, 500, 1, '2021-03-30 06:07:02.555805', 41, 'Not Delivered', 'Not Received'),
(101, 155, 50, 200, 1, '2021-03-30 07:28:45.719570', 41, 'Not Delivered', 'Not Received'),
(102, 155, 47, 200, 1, '2021-03-30 07:28:45.775535', 41, 'Not Delivered', 'Not Received'),
(103, 155, 46, 567, 2, '2021-03-30 07:28:45.865835', 41, 'Not Delivered', 'Not Received'),
(104, 155, 42, 400, 1, '2021-03-30 07:28:45.949856', 5, 'Not Delivered', 'Not Received'),
(105, 155, 40, 350, 3, '2021-03-30 07:28:45.995843', 5, 'Not Delivered', 'Not Received'),
(106, 155, 49, 567, 1, '2021-03-30 07:28:46.080514', 5, 'Not Delivered', 'Not Received'),
(107, 155, 46, 567, 2, '2021-03-30 07:28:46.146664', 7, 'Not Delivered', 'Not Received'),
(108, 155, 45, 312, 1, '2021-03-30 07:28:46.184265', 41, 'Not Delivered', 'Not Received'),
(109, 155, 41, 500, 3, '2021-03-30 07:28:46.213692', 41, 'Not Delivered', 'Not Received'),
(110, 155, 39, 2000, 1, '2021-03-30 07:28:46.250630', 41, 'Not Delivered', 'Not Received'),
(111, 155, 40, 350, 3, '2021-03-30 07:28:46.280031', 41, 'Not Delivered', 'Not Received'),
(112, 155, 42, 400, 1, '2021-03-30 07:28:46.325949', 41, 'Not Delivered', 'Not Received'),
(113, 155, 43, 500, 1, '2021-03-30 07:28:46.383141', 41, 'Not Delivered', 'Not Received'),
(114, 156, 50, 200, 1, '2021-03-30 15:41:15.662482', 41, 'Not Delivered', 'Not Received'),
(115, 156, 47, 200, 1, '2021-03-30 15:41:15.717738', 41, 'Not Delivered', 'Not Received'),
(116, 156, 46, 567, 2, '2021-03-30 15:41:15.791436', 41, 'Not Delivered', 'Not Received'),
(117, 156, 42, 400, 2, '2021-03-30 15:41:15.872759', 5, 'Not Delivered', 'Not Received'),
(118, 156, 40, 350, 3, '2021-03-30 15:41:15.914393', 5, 'Not Delivered', 'Not Received'),
(119, 156, 49, 567, 1, '2021-03-30 15:41:15.950029', 5, 'Not Delivered', 'Not Received'),
(120, 156, 46, 567, 2, '2021-03-30 15:41:15.991871', 7, 'Not Delivered', 'Not Received'),
(121, 156, 45, 312, 1, '2021-03-30 15:41:16.027384', 41, 'Not Delivered', 'Not Received'),
(122, 156, 41, 500, 3, '2021-03-30 15:41:16.093452', 41, 'Not Delivered', 'Not Received'),
(123, 156, 40, 350, 3, '2021-03-30 15:41:16.125508', 41, 'Not Delivered', 'Not Received'),
(124, 156, 42, 400, 2, '2021-03-30 15:41:16.171132', 41, 'Not Delivered', 'Not Received'),
(125, 156, 43, 500, 1, '2021-03-30 15:41:16.201838', 41, 'Not Delivered', 'Not Received'),
(126, 156, 41, 500, 1, '2021-03-30 15:41:16.249296', 5, 'Not Delivered', 'Not Received'),
(127, 157, 50, 200, 1, '2021-03-31 01:40:00.548498', 41, 'Not Delivered', 'Not Received'),
(128, 157, 47, 200, 1, '2021-03-31 01:40:00.615331', 41, 'Not Delivered', 'Not Received'),
(129, 157, 46, 567, 2, '2021-03-31 01:40:00.669267', 41, 'Not Delivered', 'Not Received'),
(130, 157, 42, 400, 2, '2021-03-31 01:40:00.737056', 5, 'Not Delivered', 'Not Received'),
(131, 157, 40, 350, 3, '2021-03-31 01:40:00.805930', 5, 'Not Delivered', 'Not Received'),
(132, 157, 49, 567, 1, '2021-03-31 01:40:00.858370', 5, 'Not Delivered', 'Not Received'),
(133, 157, 46, 567, 2, '2021-03-31 01:40:00.905547', 7, 'Not Delivered', 'Not Received'),
(134, 157, 45, 312, 1, '2021-03-31 01:40:00.935764', 41, 'Not Delivered', 'Not Received'),
(135, 157, 41, 500, 4, '2021-03-31 01:40:00.982586', 41, 'Not Delivered', 'Not Received'),
(136, 157, 40, 350, 3, '2021-03-31 01:40:01.082672', 41, 'Not Delivered', 'Not Received'),
(137, 157, 42, 400, 2, '2021-03-31 01:40:01.158628', 41, 'Not Delivered', 'Not Received'),
(138, 157, 43, 500, 1, '2021-03-31 01:40:01.291170', 41, 'Not Delivered', 'Not Received'),
(139, 157, 41, 500, 2, '2021-03-31 01:40:01.390824', 5, 'Not Delivered', 'Not Received');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `imageName` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `description`, `imageName`) VALUES
(318, 'I want this type product', 'Add Post/picture/261785138-657885568.jpg'),
(319, 'I want this type product', 'Add Post/picture/baby-boy-pencil-art-portrait-500x500.png'),
(320, 'I want this type product', 'Add Post/picture/download.jpg'),
(321, 'I want this type product', 'Add Post/picture/fruit_picker_metal.jpg'),
(322, 'I want this type product', 'Add Post/picture/laundray_basket_b51b67e2-25d3-4bb7-9727-e76851aa0611.jpg'),
(323, 'I want this type product', 'Add Post/picture/tissue_box_cover_rattan_2751f4de-376f-4527-819c-ad112f08d594.jpg'),
(345, 'I want this type product', 'Add Post/picture/product-image-1100002209_702cb4a6-6ada-415a-b6c7-7ccf947e6c15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posta`
--

CREATE TABLE `posta` (
  `post_id` int(10) NOT NULL,
  `description1` text NOT NULL,
  `path1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posta`
--

INSERT INTO `posta` (`post_id`, `description1`, `path1`) VALUES
(345, 'I want this type product', 'Add Post/picture/product-image-1100002209_702cb4a6-6ada-415a-b6c7-7ccf947e6c15.jpg'),
(323, 'I want this type product', 'Add Post/picture/tissue_box_cover_rattan_2751f4de-376f-4527-819c-ad112f08d594.jpg'),
(320, 'I want this type product', 'Add Post/picture/download.jpg'),
(322, 'I want this type product', 'Add Post/picture/laundray_basket_b51b67e2-25d3-4bb7-9727-e76851aa0611.jpg'),
(323, 'I want this type product', 'Add Post/picture/tissue_box_cover_rattan_2751f4de-376f-4527-819c-ad112f08d594.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_cat` varchar(20) NOT NULL,
  `p_color` varchar(30) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_price` float NOT NULL,
  `p_weight` varchar(30) NOT NULL,
  `p_des` text NOT NULL,
  `p_path1` varchar(200) NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_cat`, `p_color`, `p_quantity`, `p_price`, `p_weight`, `p_des`, `p_path1`, `s_id`) VALUES
(40, 'Rectangular Rattan Tissue Box Cover', 'Home & Living', 'Brown', 9, 350, '0.1Kg', '10.5 Inch long x 5.5 Inch wide x 3.5 Inch high (Inside dimension 8.875 Inch x 4.75 Inch x 3.75 Inch) NOTE: Measure your tissue box to verify dimensions Hand...', 'add/picture/tissue_box_cover_rattan_2751f4de-376f-4527-819c-ad112f08d594.jpg', 5),
(41, 'PE Fabric Laundry Large Basket Folding Sundries Toys Storage Basket Home Storage', 'Home & Living', 'White', -2, 500, '0.1Kg', 'This storage basket could be used in bedroom, wash station, toilet, kitchen and office. Useful to store underwear, stocks, toys, washing cloths etc Size: Diameter 10 in, Height 18 in...', 'add/picture/laundray_basket_b51b67e2-25d3-4bb7-9727-e76851aa0611.jpg', 5),
(42, 'Brown Color Cotton Satin Striped Bed Sheet With 2 Pillow Covers', 'Home & Living', 'White', 0, 400, '0.25Kg', 'Bed sheet set include 1 Flat sheet and 2 Pillow covers Soft and comfortable 100% Cotton material gives you the best of sleeping experience No colour fade The wrinkle resistant...', 'add/picture/brown_plain_bed_sheet.jpg', 5),
(43, 'Pillow Cover Design Cushion Cover For Living Room Sofa', 'Home & Living', 'Black', -1, 500, '0.1Kg', 'Size: 16 in x 16 in (41 cm x 41 cm) Material: Polyester Printed Single side Invisible Zipper has been designed to be refilled easily Both machine washable and the...', 'add/picture/cushion_cover-_black-round.jpg', 0),
(44, 'Decorative Batik Maroon Cushion Pillow Cover', 'Home & Living', 'Red', 17, 600, '0.1Kg', 'Cotton Batik design Size & Material: Batik Decorative Throw Pillow Covers 16 x 16 Inches around (40cm x 40cm),fit for most pillow;it is made of high quality cotton Covers only:...', 'add/picture/cushion-pillow-cover-maroon.jpg', 0),
(45, 'Handmade Craft Paper Tag For Candy/Gift/Cookies', 'Arts & Crafts', 'Brown', 28, 312, '0.01Kg', 'Size: 1.9 x 5.1 cm  25PCS/LOT Please note that this item without string. String can be find in our store', 'add/picture/817284527-817746293.jpg', 0),
(46, '100Pcs Letter Set Word Scrapbooking Scrabble Number Alphabet Tile Wooden', 'Arts & Crafts', 'Brown', 45, 567, '0.01Kg', 'Material: Wood Alphabet Tile Wooden 100Pcs Letter Set', 'add/picture/product-image-966789757.jpg', 0),
(47, '25 Pcs Long Style \"HAND MADE\" Black Handmade Cake Packaging Sealing Sticket Label', 'Arts & Crafts', 'Brown', 48, 200, '0.01Kg', 'Size: 10 x 3 cm sticker label  25PCS/LOT Please note that this item made on Order. Deliver period 15 days', 'add/picture/349147262-1029446694.jpg', 0),
(48, 'Baby Cotton Design Cashmere Yarn For Hand Knitting Crochet Wool', 'Arts & Crafts', 'Purple', 100, 157, '0.01Kg', 'Mix-colored yarn is a self-striping yarn with different shades, which is enthusiastically adored by knits. It is perfect for any project! Great for clothing, accessories, and home decor projects. Ball...', 'add/picture/HTB1f9pOXx2rK1RkSnhJq6ykdpXaV_5f64f8ad-32f4-4ddf-88c3-9babdbca92e3.jpg', 0),
(49, 'Strip Cotton Design Cashmere Yarn For Hand Knitting Crochet Wool', 'Arts & Crafts', 'Brown', 46, 567, '0.01Kg', 'Mix-colored yarn is a self-striping yarn with different shades, which is enthusiastically adored by knits. It is perfect for any project! Great for clothing, accessories, and home decor projects. Ball...', 'add/picture/1073846436-1565218203.jpg', 0),
(50, '10Pcs 5 Sizes Yarn Stitch Holder Set Crochet Knitting Needle', 'Arts & Crafts', 'Red', 99, 200, '0.01Kg', '5 sizes of stitch holders come in handy for lots of different size projects. Every size is useful, especially in \"top-down\" knitting projects or any type of yarn craft. Suitable...', 'add/picture/14357694402100243738_fed8c0c8-e1cf-416d-b772-99ff55681020.jpg', 0),
(51, 'Stickers Labels Waterproof Bottle & Jar Rewritable 8 PCs', 'Arts & Crafts', 'Black', 100, 123, '0.01Kg', 'Pack contains 8 stickers Rewrite able and waterproof Chalk pen available separately', 'add/picture/261785138-657885568.jpg', 0),
(52, '2M Natural Jute Ribbon Rolls Decor', 'Arts & Crafts', 'Brown', 48, 765, '0.10Kg', 'Suitable for Wedding Decoration Christmas Gift Wrapping Festival Party  Available size from 3 cm to 30 cm Length 2 m Special discount for crafting and deco works', 'add/picture/product-image-1138155538_92460491-93e9-4bef-92e5-834e6512de81.jpg', 0),
(53, 'Baby Memory Book Photo Album Gift 7 X 7 Inch', 'Arts & Crafts', 'White', 49, 473, '0.10Kg', 'Perfect gift for newborn baby memory book Photo Album cover size 17.5 x 17.5 cm 20 sheets/40 pages , paper size 16.8 x 16.8 cm / 7 x 7 inch...', 'add/picture/1025415405-422686655_e9e99f3c-d363-4d64-a750-d2039ef105b4.jpg', 0),
(54, '4 Pcs Colorful Erasable Fabric Tailors Chalk', 'Arts & Crafts', 'Yellow', 500, 3000, '0.01Kg', 'Tailors’ chalks in 4 colors, different colors meet your different needs, suitable for professional tailor and home tailoring. A solid block of chalk with a triangular shape makes it easy...', 'add/picture/1621458165893810969.jpg', 0),
(55, 'Garden Grow Bag For Carrot Onion Vegetables', 'Home Gardening', 'Green', 99, 458, '0.01Kg', 'Suitable for indoor or outdoor planting, including roof top, balconies, gardens and other space, can be used to plant potato, taro, radish, carrots, onions, and many other vegetables Our planting...', 'add/picture/product-image-1157331786.jpg', 0),
(56, 'Metal Fruit Picker Red Device Farm Outside Pruning Tools Fruit Catcher', 'Home Gardening', 'White', 97, 678, '0.01Kg', 'Fruit picker is an useful tool which make it possible for picking fruits without climbing a ladder, no fruit or tree damage This picking basket tool just like a Fishing...', 'add/picture/fruit_picker_metal.jpg', 0),
(57, 'Planter Box Rectangle Wooden Rectangular Planter Decorative', 'Home Gardening', 'Brown', 10, 345, '3Kg', 'Buy 1 Get Free 10 Masks / Lifebuoy refill  Dimensions: The Wood Planter Box measures appr. 15\" in length, 6\" in width and 3\" in height. Material: Rectangular Succulent Planter...', 'add/picture/997728078189881369_b92841e2-b1cb-4b5e-9dce-99a11f97d39b.jpg', 0),
(58, '3PC Wood Color Mini Small Shovel Spade Gardening Tools For Home Gardening', 'Home Gardening', 'Green', 25, 568, '1Kg', 'Made of wood and iron, wooden handle is convenient for gardening, iron heads provide the shovel rake spade good using sense after using for many times Easy carry and lightweight....', 'add/picture/product-image-1176483431_39a2a4ed-0392-4882-803c-afb6964cf37b.jpg', 0),
(59, 'Handheld Portable Garden Spray Fertilizing', 'Home Gardening', 'Yellow', 10, 1245, '0.1Kg', '2 Lt compression sprayer for indoor and outdoor use. This sturdy sprayer is suitable for lawn and garden Use for plant, flower, garden and lawn care, auto wheels, windows and...', 'add/picture/product-image-1166726581_7305c7b9-55bb-4d4e-8c48-9dac03e8a1a7.jpg', 0),
(60, 'Garbage Picker Stick Home Gardening', 'Home Gardening', 'Blue', 20, 523, '0.5Kg', 'Perfect for Daily Clean - Our garbage Picker is helpful for daily yard clean, river floating trash. Space Saving - There is a button for you to bend the Trash...', 'add/picture/product-image-1104302519.jpg', 0),
(61, 'Vertical Planting Bag 4-Pocket Green Hanging Wall Garden Plant Grow Bags', 'Home Gardening', 'Green', 50, 452, '0.10Kg', 'GOOD PRODUCT', 'add/picture/product-image-1239407671_11ff3391-07ea-4f34-a9b7-c59fe0f124b3.jpg', 0),
(62, 'Garden Fork Wooden Handle Gardening Tools For Home Gardening', 'Home Gardening', 'Black', 100, 456, '0.10Kg', 'Made of wood and iron, wooden handle is convenient for gardening, iron heads provide the fork rake spade good using sense after using for many times Easy carry and lightweight.... 1', 'add/picture/garden_fork_4845ad3a-f3cb-4ea3-a161-93f9299e252a.jpg', 0),
(63, 'Garden Shovel Wooden Handle Gardening Tools For Home Gardening', 'Home Gardening', 'Black', 100, 345, '0.10Kg', 'Made of wood and iron, wooden handle is convenient for gardening, iron heads provide the shovel rake spade good using sense after using for many times Easy carry and lightweight....', 'add/picture/garden_shovel_56387e53-37ba-4147-ba1f-51155b9028aa.jpg', 0),
(64, 'Grow Bag Home Decorations For Indoor Planting', 'Home Gardening', 'Grey', 100, 1234, '0.10Kg', 'Felt material, soft and thick, good toughness, feel comfortable. A multi-purpose, can accommodate remote control, pen and other sundries, can also planter succulents. Can be purify the air, add green...', 'add/picture/product-image-977963747.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `producta`
--

CREATE TABLE `producta` (
  `p_id` int(10) NOT NULL,
  `p_name` text NOT NULL,
  `p_cat` varchar(20) NOT NULL,
  `p_weight` float NOT NULL,
  `p_color` varchar(10) NOT NULL,
  `p_price` float NOT NULL,
  `p_quantity` int(5) NOT NULL,
  `p_des` text NOT NULL,
  `p_path1` text NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producta`
--

INSERT INTO `producta` (`p_id`, `p_name`, `p_cat`, `p_weight`, `p_color`, `p_price`, `p_quantity`, `p_des`, `p_path1`, `s_id`) VALUES
(39, 'Indoor Wood Flower Pot Holder Home Decor For Living Room', 'Home & Living', 0.35, 'Brown', 2000, 9, 'Buy 1 Get Free Butter knife Inspired by the simplistic style of the 1950s, this stylish wood plant stand gives a nice height and modern touch to your live indoor...', 'add/picture/pot_stand_wooden_12cm-3_b2b05168-ba84-4947-8434-8a213e95ce02.jpg', 0),
(40, 'Rectangular Rattan Tissue Box Cover', 'Home & Living', 0.1, 'Brown', 350, 10, '10.5 Inch long x 5.5 Inch wide x 3.5 Inch high (Inside dimension 8.875 Inch x 4.75 Inch x 3.75 Inch) NOTE: Measure your tissue box to verify dimensions Hand...', 'add/picture/tissue_box_cover_rattan_2751f4de-376f-4527-819c-ad112f08d594.jpg', 0),
(41, 'PE Fabric Laundry Large Basket Folding Sundries Toys Storage Basket Home Storage', 'Home & Living', 0.1, 'White', 500, 1, 'This storage basket could be used in bedroom, wash station, toilet, kitchen and office. Useful to store underwear, stocks, toys, washing cloths etc Size: Diameter 10 in, Height 18 in...', 'add/picture/laundray_basket_b51b67e2-25d3-4bb7-9727-e76851aa0611.jpg', 0),
(42, 'Brown Color Cotton Satin Striped Bed Sheet With 2 Pillow Covers', 'Home & Living', 0.25, 'White', 400, 1, 'Bed sheet set include 1 Flat sheet and 2 Pillow covers Soft and comfortable 100% Cotton material gives you the best of sleeping experience No colour fade The wrinkle resistant...', 'add/picture/brown_plain_bed_sheet.jpg', 0),
(43, 'Pillow Cover Design Cushion Cover For Living Room Sofa', 'Home & Living', 0.1, 'Black', 500, 0, 'Size: 16 in x 16 in (41 cm x 41 cm) Material: Polyester Printed Single side Invisible Zipper has been designed to be refilled easily Both machine washable and the...', 'add/picture/cushion_cover-_black-round.jpg', 0),
(44, 'Decorative Batik Maroon Cushion Pillow Cover', 'Home & Living', 0.1, 'Red', 600, 18, 'Cotton Batik design Size & Material: Batik Decorative Throw Pillow Covers 16 x 16 Inches around (40cm x 40cm),fit for most pillow;it is made of high quality cotton Covers only:...', 'add/picture/cushion-pillow-cover-maroon.jpg', 0),
(46, '100Pcs Letter Set Word Scrapbooking Scrabble Number Alphabet Tile Wooden', 'Arts & Crafts', 0.01, 'Brown', 567, 45, 'Material: Wood Alphabet Tile Wooden 100Pcs Letter Set', 'add/picture/product-image-966789757.jpg', 0),
(47, '25 Pcs Long Style \"HAND MADE\" Black Handmade Cake Packaging Sealing Sticket Label', 'Arts & Crafts', 0.01, 'Brown', 200, 48, 'Size: 10 x 3 cm sticker label  25PCS/LOT Please note that this item made on Order. Deliver period 15 days', 'add/picture/349147262-1029446694.jpg', 0),
(48, 'Baby Cotton Design Cashmere Yarn For Hand Knitting Crochet Wool', 'Arts & Crafts', 0.01, 'Purple', 157, 100, 'Mix-colored yarn is a self-striping yarn with different shades, which is enthusiastically adored by knits. It is perfect for any project! Great for clothing, accessories, and home decor projects. Ball...', 'add/picture/HTB1f9pOXx2rK1RkSnhJq6ykdpXaV_5f64f8ad-32f4-4ddf-88c3-9babdbca92e3.jpg', 0),
(47, '25 Pcs Long Style \"HAND MADE\" Black Handmade Cake Packaging Sealing Sticket Label', 'Arts & Crafts', 0.01, 'Brown', 200, 48, 'Size: 10 x 3 cm sticker label  25PCS/LOT Please note that this item made on Order. Deliver period 15 days', 'add/picture/349147262-1029446694.jpg', 0),
(49, 'Strip Cotton Design Cashmere Yarn For Hand Knitting Crochet Wool', 'Arts & Crafts', 0.01, 'Brown', 567, 46, 'Mix-colored yarn is a self-striping yarn with different shades, which is enthusiastically adored by knits. It is perfect for any project! Great for clothing, accessories, and home decor projects. Ball...', 'add/picture/1073846436-1565218203.jpg', 0),
(50, '10Pcs 5 Sizes Yarn Stitch Holder Set Crochet Knitting Needle', 'Arts & Crafts', 0.01, 'Red', 200, 99, '5 sizes of stitch holders come in handy for lots of different size projects. Every size is useful, especially in \"top-down\" knitting projects or any type of yarn craft. Suitable...', 'add/picture/14357694402100243738_fed8c0c8-e1cf-416d-b772-99ff55681020.jpg', 0),
(51, 'Stickers Labels Waterproof Bottle & Jar Rewritable 8 PCs', 'Arts & Crafts', 0.01, 'Black', 123, 100, 'Pack contains 8 stickers Rewrite able and waterproof Chalk pen available separately', 'add/picture/261785138-657885568.jpg', 0),
(52, '2M Natural Jute Ribbon Rolls Decor', 'Arts & Crafts', 0.1, 'Brown', 765, 48, 'Suitable for Wedding Decoration Christmas Gift Wrapping Festival Party  Available size from 3 cm to 30 cm Length 2 m Special discount for crafting and deco works', 'add/picture/product-image-1138155538_92460491-93e9-4bef-92e5-834e6512de81.jpg', 0),
(53, 'Baby Memory Book Photo Album Gift 7 X 7 Inch', 'Arts & Crafts', 0.1, 'White', 473, 49, 'Perfect gift for newborn baby memory book Photo Album cover size 17.5 x 17.5 cm 20 sheets/40 pages , paper size 16.8 x 16.8 cm / 7 x 7 inch...', 'add/picture/1025415405-422686655_e9e99f3c-d363-4d64-a750-d2039ef105b4.jpg', 0),
(54, '4 Pcs Colorful Erasable Fabric Tailors Chalk', 'Arts & Crafts', 0.01, 'Yellow', 3000, 500, 'Tailors’ chalks in 4 colors, different colors meet your different needs, suitable for professional tailor and home tailoring. A solid block of chalk with a triangular shape makes it easy...', 'add/picture/1621458165893810969.jpg', 0),
(55, 'Garden Grow Bag For Carrot Onion Vegetables', 'Home Gardening', 0.01, 'Green', 458, 99, 'Suitable for indoor or outdoor planting, including roof top, balconies, gardens and other space, can be used to plant potato, taro, radish, carrots, onions, and many other vegetables Our planting...', 'add/picture/product-image-1157331786.jpg', 0),
(56, 'Metal Fruit Picker Red Device Farm Outside Pruning Tools Fruit Catcher', 'Home Gardening', 0.01, 'White', 678, 97, 'Fruit picker is an useful tool which make it possible for picking fruits without climbing a ladder, no fruit or tree damage This picking basket tool just like a Fishing...', 'add/picture/fruit_picker_metal.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `s_id` int(4) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `province` varchar(100) NOT NULL,
  `a_line_1` varchar(200) NOT NULL,
  `a_line_2` varchar(200) NOT NULL,
  `a_line_3` varchar(200) NOT NULL,
  `p_code` int(10) NOT NULL,
  `tel_no` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`s_id`, `shop_name`, `password`, `rpassword`, `f_name`, `l_name`, `email`, `gender`, `province`, `a_line_1`, `a_line_2`, `a_line_3`, `p_code`, `tel_no`) VALUES
(2, 'SHOP', '12345', '12345', 'nimantha', 'aravinda', 'nimanthaaravinda@gmail.com', 'm', 'western', 'hanwella', 'colombo', 'srilanka', 10650, 710972336),
(4, 'shop', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', 'nimantha', 'aravinda', 'nimanth@gmail.com', 'm', 'western', 'hanwella', 'Hanwella', 'srilanka', 1065, 771234567),
(5, 'helakam', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', 'nimantha', 'aravinda', 'nimanthaaravinda19970815@gmail.com', 'm', 'southern', 'kalu', 'aggala', 'Kosgama', 10680, 112345687);

-- --------------------------------------------------------

--
-- Table structure for table `seller_cat`
--

CREATE TABLE `seller_cat` (
  `s_id` int(4) NOT NULL,
  `cat_1` varchar(100) NOT NULL,
  `cat_2` varchar(100) NOT NULL,
  `cat_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `o_id` int(10) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `c_num_1` int(10) NOT NULL,
  `c_num_2` int(10) NOT NULL,
  `c_num_3` int(10) NOT NULL,
  `province` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `a_line_1` varchar(30) NOT NULL,
  `a_line_2` varchar(30) NOT NULL,
  `a_line_3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `c_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `noi` int(10) NOT NULL,
  `date` date NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `rateIndex` tinyint(4) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `rateIndex`, `p_id`) VALUES
(4, 3, 39),
(5, 4, 40),
(6, 1, 41),
(7, 3, 42),
(8, 4, 43),
(9, 4, 44),
(10, 1, 45),
(11, 2, 46),
(12, 3, 47),
(13, 2, 48),
(14, 2, 49),
(15, 3, 50),
(16, 5, 51),
(17, 5, 52),
(18, 1, 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_num`
--
ALTER TABLE `contact_num`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `seller_cat`
--
ALTER TABLE `seller_cat`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
