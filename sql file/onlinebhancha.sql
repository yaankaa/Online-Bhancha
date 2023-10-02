-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 06:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebhancha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminchef', '1a0f282f19a8136948cfc603ee36a166');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`) VALUES
(1, 'Breakfast'),
(2, 'Dinner'),
(5, 'Newari Cuisine'),
(6, 'Lunch'),
(7, 'Brunch'),
(8, 'special occasion');

-- --------------------------------------------------------

--
-- Table structure for table `hacks`
--

CREATE TABLE `hacks` (
  `hack_id` int(11) NOT NULL,
  `hack_name` varchar(200) NOT NULL,
  `hack_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `sugesstions` varchar(500) NOT NULL,
  `number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sid`, `name`, `email`, `sugesstions`, `number`) VALUES
(5, 'Pranita Tamang', 'pranita@gmail.com', 'I would like to have some beverages recipes', NULL),
(6, 'Priyanka Tamang', 'tamang35@gmail.com', 'i need drinks receipe', 9848567610),
(7, 'Priyanka Tamang', 'priyanka35@gmail.com', 'dtrd dtgv fytvhj', 9848567610);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `devices` varchar(500) NOT NULL,
  `alternate` varchar(150) DEFAULT NULL,
  `direction` varchar(500) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `video` varchar(500) DEFAULT NULL,
  `recipe_keyword` varchar(50) DEFAULT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `ingredients`, `devices`, `alternate`, `direction`, `cat_id`, `image`, `video`, `recipe_keyword`, `added_date`) VALUES
(14, 'momo ', '1. keema<br />\r\n2. onions<br />\r\n3. spices', '1. wok(karai)', '1. a pot  ', '1. knead flour until smooth<br />\r\n2. knead flour until smooth', 8, 'momo.png', 'chicken momo.mp4', 'momo, dumplings, buff, chicken', '2022-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `devices` varchar(500) NOT NULL,
  `direction` varchar(500) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `title`, `ingredients`, `devices`, `direction`, `image`, `price`, `description`) VALUES
(1, 'sel', 'vdsdvascadvvavsdvsvsv', 'vdsdvascadvvavsdvsvsv      ', 'vdsdvascadvvavsdvsvsv<br />\r\nvdsdvascadvvavsdvsvsv<br />\r\nvdsdvascadvvavsdvsvsv      ', 'sel.png', 500, ' vdsdvascadvvavsdvsvsv<br />\r\nvdsdvascadvvavsdvsvsv<br />\r\nvdsdvascadvvavsdvsvsv      '),
(2, 'momo ', 'acscsacdws awdawsd af ', 'acscsacdws <br />\r\nawdawsd af ', 'acscsacdws <br />\r\nawdawsd af <br />\r\nacscsacdws <br />\r\nacscsacdws awdawsd af <br />\r\nawdawsd af ', 'Gavin.png', 5000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Priyanka Tamang', 'priyanka', 'priyanka35@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Priyanka Tamang', 'priyanka', 'priyanka35@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(3, 'Priyanka Tamang', 'priyanka', 'priyanka35@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'nisha rai', 'raini', 'raini@gmail.com', 'a7b9fdf0b84f7a70b29c8ebc904e92fa'),
(5, 'nisha rai', 'raini', 'raini@gmail.com', 'a7b9fdf0b84f7a70b29c8ebc904e92fa'),
(6, 'sani tmg', 'sani', 'sani@gmail.com', 'b82ef4c44602c1146244738d9d768dcd'),
(7, 'sani tmg', 'sani', 'sani@gmail.com', 'b82ef4c44602c1146244738d9d768dcd'),
(8, 'chris brown', 'chris', 'chris@gmail.com', 'f7050fa5b63ca3f9c663f606edd93f15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `hacks`
--
ALTER TABLE `hacks`
  ADD PRIMARY KEY (`hack_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hacks`
--
ALTER TABLE `hacks`
  MODIFY `hack_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
