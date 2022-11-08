-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oacharya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_id`, `admin_pass`) VALUES
(1, 'O_Admin', 'admin@123', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(254) NOT NULL,
  `fullname` varchar(254) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `fullname`, `phone`, `email`, `password`, `CreationDate`) VALUES
(1, 'Bhushan Ghevde', 8433576916, 'bhushanghevde15@gmail.com', '0e2c48e6b7a8ff473fee6169fb40f54f', '2021-05-13 07:34:50'),
(2, 'Mrunmayee wani', 7303144585, 'mrunmayee2207@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-13 07:35:50'),
(3, 'Krupa Parate', 9372973738, 'krupaparate@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-13 07:36:42'),
(4, 'Shivam Walunj', 9594849301, 'shivamwalunj41@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-13 07:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `festival_id` int(100) NOT NULL,
  `festival_name` varchar(100) NOT NULL,
  `fees` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`festival_id`, `festival_name`, `fees`) VALUES
(1, 'Ganapati Pooja', 1501),
(2, 'Laxmi Poojan', 2101),
(3, 'Wedding Ceremony', 10101),
(4, 'Namkaran', 1101),
(5, 'Satya Narayan', 2101),
(6, 'Mundan Ceremony', 2501),
(7, 'Antya Vidhi', 15101),
(8, 'Vastu Shanti', 5101);

-- --------------------------------------------------------

--
-- Table structure for table `panditbooking`
--

CREATE TABLE `panditbooking` (
  `booking_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `pandit_id` int(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `pandit_name` varchar(100) NOT NULL,
  `pandit_email` varchar(100) NOT NULL,
  `pooja` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `callback` varchar(100) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panditbooking`
--

INSERT INTO `panditbooking` (`booking_id`, `customer_id`, `pandit_id`, `customer_name`, `customer_email`, `customer_phone`, `pandit_name`, `pandit_email`, `pooja`, `amount`, `Address`, `Date`, `time`, `callback`, `CreationDate`) VALUES
(1, 1, 1, 'Bhushan Ghevde', 'bhushanghevde15@gmail.com', '8433576916', ' Pandit1', 'pandit1@gmail.com', 'Ganapati Pooja', '1501', 'room no 5, gajanan apartment ,Murbad road ,kalyan,421301', '2021-05-30', '8:30 AM', '9:00 am to 12:00 pm', '2021-05-13 08:11:40'),
(2, 2, 3, 'Mrunmayee wani', 'mrunmayee2207@gmail.com', '7303144585', ' Pandit3', 'pandit3@gmail.com', 'Laxmi Poojan', '2101', 'room no 12 , wani apartment,chiken ghar,dombivali,421502', '2021-05-29', '9:35 AM', '9:00 am to 12:00 pm', '2021-05-13 08:13:21'),
(3, 3, 2, 'Krupa Parate', 'krupaparate@gmail.com', '9372973738', ' Pandit2', 'pandit2@gmail.com', 'Wedding Ceremony', '10101', 'room no 1, parate sweets ,prem auto,thane,421210', '2021-05-22', '10:20 AM', '9:00 am to 12:00 pm', '2021-05-13 08:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `pandits`
--

CREATE TABLE `pandits` (
  `pandit_id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` bigint(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `experience` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `certificates` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pandits`
--

INSERT INTO `pandits` (`pandit_id`, `fullname`, `email`, `password`, `mobile_no`, `profile_pic`, `experience`, `city`, `certificates`, `status`, `CreationDate`, `remarks`) VALUES
(1, 'Pandit1', 'pandit1@gmail.com', 'fe939239a4ab967ade415e5d4d18603f', 9696454502, '609cd8fb6da5e0.57767734.png', 1, 'kalyan', '609cd8fb6da4b3.15846189.pdf', 'Approved', '2021-05-13 07:53:38', ''),
(2, 'Pandit2', 'pandit2@gmail.com', '1e3e63a679ff3d5d92c318562db70dc9', 9196454502, '609cd956453524.18487609.png', 2, 'thane', '609cd956453462.73699840.pdf', 'Approved', '2021-05-13 07:53:46', ''),
(3, 'Pandit3', 'pandit3@gmail.com', 'd2d26cf6137778439fa9253f4439c980', 8133576916, '609cd993d68914.97361278.png', 3, 'dombivali', '609cd993d68811.17056730.pdf', 'Approved', '2021-05-13 07:53:52', ''),
(4, 'Pandit4', 'pandit4@gmail.com', '3bf282eaad846fa7b6bcf2520a246be2', 8413576916, '', 0, '', '', 'Not started', '2021-05-13 07:40:25', ''),
(5, 'Pandit5', 'pandit5@gmail.com', '075258d7e3b47d9b7f30297a8b956e4d', 7684335769, '609cda44bfd017.53088880.png', 2, 'dombivali', '609cda44bfce80.68475335.pdf', 'In Progress', '2021-05-13 07:50:28', ''),
(6, 'Pandit6', 'pandit6@gmail.com', '6e52d20df10c040e0f5b46679da1862c', 9684335769, '609cda8cac49b0.75771014.png', 3, 'thane', '609cda8cac4900.40796781.pdf', 'Rejected', '2021-05-13 07:54:23', 'Please submit proper file .');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`festival_id`);

--
-- Indexes for table `panditbooking`
--
ALTER TABLE `panditbooking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `pandits`
--
ALTER TABLE `pandits`
  ADD PRIMARY KEY (`pandit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `festival_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `panditbooking`
--
ALTER TABLE `panditbooking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pandits`
--
ALTER TABLE `pandits`
  MODIFY `pandit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
