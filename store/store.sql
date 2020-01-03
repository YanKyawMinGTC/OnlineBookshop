-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 11:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone_no`, `address`, `created_date`, `modified_date`) VALUES
(2, 'mgmg', 'mgmg@gmail.com', '123456', 234233424, 'Myingyan Twsp, Mandalay .', '2020-01-02 09:11:31', '2020-01-02 09:11:31'),
(3, 'yan', 'yan@gmail.com', '123456', 8778777, 'dasfasdfasdf', '2020-01-02 09:25:20', '2020-01-02 09:25:20'),
(5, 'akary', 'akary@gmail.com', '123456', 8778777, 'asdfasdfasdfassdf', '2020-01-02 11:31:15', '2020-01-02 11:31:15'),
(7, 'test', 'test@gmail.com', '123456', 34523535, 'asdfasdfasf asdfasdfasdf', '2020-01-02 11:45:27', '2020-01-02 11:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `price` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `summary`, `price`, `category_id`, `cover`, `created_date`, `modified_date`) VALUES
(46, 'Road to Success', 'asdf', 'asdfasdf', 100, 4, 'download.jpg', '2019-12-20 15:31:08', '2019-12-20 15:31:08'),
(47, 'Road to Success V2', 'ykm', 'asdfasdf', 200, 5, 'java error.PNG', '2019-12-20 17:01:28', '2019-12-20 17:01:28'),
(48, 'Laravel 6', 'Yan kyaw min', 'this is laravel book', 3000, 5, 'download.jpg', '2019-12-27 14:42:45', '2019-12-27 14:42:45'),
(49, 'php learning', 'yankyawmin', 'this is php book', 5000, 33, 'sql joins guide and syntax.jpg', '2019-12-27 14:43:32', '2019-12-27 14:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(2, 'Mathematics', 'This section is mathematics', '2019-12-17 08:14:06', '2019-12-17 08:14:06'),
(4, 'Myanmar', 'This section is Myanmar book.', '2019-12-17 08:18:11', '2019-12-17 08:18:11'),
(5, 'Physics', 'This section is Physics book.', '2019-12-17 08:19:38', '2019-12-17 08:19:38'),
(6, 'Myanmar', 'This section is Myanmar book', '2019-12-17 08:28:23', '2019-12-17 08:28:23'),
(33, 'art', 'art section', '2019-12-27 14:41:50', '2019-12-27 14:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `name`, `age`, `job`) VALUES
(1, 'asdfaf', 12, 'asdfdfa'),
(2, 'yan', 12, 'job'),
(3, 'kyawmin', 232, 'job');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `city_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `first_name`, `last_name`, `city_name`) VALUES
(1, 3, 23, 3, 0),
(17, 1, 0, 0, 0),
(21, 1, 111, 111, 1),
(22, 2, 222, 2, 2),
(23, 1, 111, 111, 1),
(24, 2, 222, 2, 2),
(29, 1, 111, 111, 1),
(30, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `user_type`, `password`, `phone_no`, `address`, `created_date`, `modified_date`) VALUES
(42, 'ff', 'scm.yankyawmin@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'April', 'scm.yankyawmin@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'yankyawmin', 'yankyawmin.gtc@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '0000-00-00 00:00:00', '2020-01-03 09:14:41'),
(45, 'admin', 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 8778777, 'afdasdfasdfadfs', '2020-01-03 09:16:46', '0000-00-00 00:00:00'),
(47, 'admin02', 'scm.yankyawmin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 4674353, 'adffas asdfsdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'user01', 'yankyawmin.gtc@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', 2147483647, 'adsf asdfasdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'aaa', 'scm.yankyawmin@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
