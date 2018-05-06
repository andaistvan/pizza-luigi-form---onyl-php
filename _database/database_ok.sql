-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 06, 2018 at 08:01 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `plphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) NOT NULL,
  `couponcode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `couponcode`) VALUES
(1, 'a1'),
(2, 'b2'),
(3, 'c3'),
(5, 'd4');

-- --------------------------------------------------------

--
-- Table structure for table `formdatas`
--

CREATE TABLE `formdatas` (
  `id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `ccode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formdatas`
--

INSERT INTO `formdatas` (`id`, `name`, `email`, `ccode`) VALUES
(1, 'kutya', 'kutya', 'kutya'),
(2, 'macska', 'macska@ehe.hu', ''),
(3, 'kutyajó dolgok', 'arteriawebcms@gmail.com', ''),
(4, 'jajj', 'ehe', 'fsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formdatas`
--
ALTER TABLE `formdatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `formdatas`
--
ALTER TABLE `formdatas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;