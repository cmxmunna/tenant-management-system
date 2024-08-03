-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 09:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mridharecidence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `user_id`, `name`, `email`, `username`, `password`, `phone`, `address`, `usertype`, `gender`, `dob`, `image`) VALUES
(2, '3da8018eda33845263c799cde673b71b', 'Shihab Munna', 'cmxmunna@gmail.com', 'cmxmunna', '$2y$12$VWPy9/NQO2FX.2PnNs2VgeHHrNDv4eZVPoC37O59SY3LJ8qLZj3sC', '01627124780', 'Purbachol New Town,\r\nKaliganj, Gazipur,\r\nDhaka, Bangladesh', 'Admin', 'Male', '01/03/2000', '172090154570165_n.jpg'),
(26, 'd3ff451e38187f4252817d1da1c54668', 'Farhan Naeem Zitu', 'farhannaeemxitu@gmail.com', 'farhan', '$2y$12$12Xw1tbh8iftcdmoGZrctebVvri1Xk3W9XXS.89d.Lrc7gsmL7cEO', '01798703826', '134-A, Amir Sarkar Road, Dholadia,\r\nMymensing Sadar', 'Admin', 'Male', '1998-12-02', '1629183975Farhan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `internetpack`
--

CREATE TABLE `internetpack` (
  `id` int(11) NOT NULL,
  `pack_id` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `conntype` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `support` varchar(30) NOT NULL,
  `included` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internetpack`
--

INSERT INTO `internetpack` (`id`, `pack_id`, `name`, `speed`, `usertype`, `conntype`, `time`, `support`, `included`, `image`, `price`, `display`) VALUES
(23, '2fc2cf2862f9a90f3f11a9ddd3ccd9f0', 'Mobile Wifi', '20 Mbps', 'Wireless', 'Wireless', '24 Hour Unlimited', 'N/A', 'N/A', '162918358520.png', '500', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `tenant_name` varchar(40) NOT NULL,
  `tenant_id` varchar(40) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `room_no` varchar(40) NOT NULL,
  `bill_month` varchar(40) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `payment_method` varchar(40) NOT NULL,
  `transaction_id` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `transaction_time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `tenant_name`, `tenant_id`, `phone_number`, `room_no`, `bill_month`, `amount`, `payment_method`, `transaction_id`, `status`, `transaction_time`) VALUES
(1, 'Shihab Munna', '1d2b3d28751044d7bc7348cf6665524a', '01627124780', 'MR2-201', 'July 2024', '5000', 'Cash', 'MR2-201-17151835', 'Success', '12/07/2024 11:00am');

-- --------------------------------------------------------

--
-- Table structure for table `roominfo`
--

CREATE TABLE `roominfo` (
  `id` int(11) NOT NULL,
  `room_id` varchar(100) NOT NULL,
  `house_address` varchar(100) NOT NULL,
  `room_no` varchar(40) NOT NULL,
  `rent` varchar(40) NOT NULL,
  `room_details` varchar(100) NOT NULL,
  `booked` varchar(40) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roominfo`
--

INSERT INTO `roominfo` (`id`, `room_id`, `house_address`, `room_no`, `rent`, `room_details`, `booked`, `image`) VALUES
(6, '1424591295', 'Golan, Ulukhola, Kaliganj, Gazipur', 'MR2-201', '3500', '1 Single Room, Attach Washroom, Combine Kitchen', 'Yes', '1721182021Mridha Residence.png'),
(7, '787964160', 'Golan, Ulukhola, Kaliganj, Gazipur', 'MR2-202', '3500', '1 Single Room, Attach Washroom, Combine Kitchen', 'No', '1721168122SweetHouse.jpg'),
(8, '1553605987', 'Golan, Ulukhola, Kaliganj, Gazipur', 'MR2-203', '3500', '1 Single Room, Attach Washroom, Combine Kitchen', 'No', '1721168157SweetHouse.jpg'),
(9, '973326499', 'Golan, Ulukhola, Kaliganj, Gazipur', 'MR2-204', '4000', '1 Single Room, Attach Washroom(High Comod), Fan, Light included, Combine Kitchen', 'No', '1721168208SweetHouse.jpg'),
(10, '1711865387', 'Golan, Naotana Mor, Ulukhola, Kaliganj, Gazipur', 'MR1-01', '6000', '1 Single Room, Attach Washroom, Attach Kitchen', 'No', '1721168367SweetHouse.jpg'),
(11, '98621711', 'Golan, Naotana Mor, Ulukhola, Kaliganj, Gazipur', 'MR1-02', '6000', '1 Single Room, Attach Washroom, Attach Kitchen', 'No', '1721168422SweetHouse.jpg'),
(12, '918655742', 'Golan, Naotana Mor, Ulukhola, Kaliganj, Gazipur', 'MR1-03', '6000', '1 Single Room, Attach Washroom, Attach Kitchen', 'No', '1721168449SweetHouse.jpg'),
(13, '222431595', 'Golan, Naotana Mor, Ulukhola, Kaliganj, Gazipur', 'MR1-04', '6000', '1 Single Room, Attach Washroom, Attach Kitchen', 'No', '1721168494SweetHouse.jpg'),
(14, '736608132', 'Golan, Naotana Mor, Ulukhola, Kaliganj, Gazipur', 'MR1-05', '6000', '1 Single Room, Attach Washroom, Attach Kitchen', 'No', '1721168514SweetHouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tenantinfo`
--

CREATE TABLE `tenantinfo` (
  `id` int(11) NOT NULL,
  `tenant_id` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `religion` varchar(40) NOT NULL,
  `maritial_status` varchar(40) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `nid` varchar(40) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `room_no` varchar(40) NOT NULL,
  `advance` varchar(40) NOT NULL,
  `monthly_bill` varchar(40) NOT NULL,
  `balance` varchar(40) NOT NULL,
  `rent_date` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `tenant_reg_img` text NOT NULL,
  `contract_img` text NOT NULL,
  `nid_copy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenantinfo`
--

INSERT INTO `tenantinfo` (`id`, `tenant_id`, `name`, `father`, `dob`, `gender`, `religion`, `maritial_status`, `occupation`, `nid`, `phone_number`, `password`, `permanent_address`, `room_no`, `advance`, `monthly_bill`, `balance`, `rent_date`, `status`, `usertype`, `image`, `tenant_reg_img`, `contract_img`, `nid_copy`) VALUES
(17, '1d2b3d28751044d7bc7348cf6665524a', 'SHIHAB MUNNA', 'Md. Siraz Mridha', '2010-12-01', 'Male', 'Islam', 'Unmarried', 'Business', '1959692532', '01627124780', '$2y$12$9c9xwq.Y2vz3q3c6y/sym.CH5IJxlSwm2yHtsxehNqHkEcSiCmJ2W', 'Golan, Ulokhola, Kaliganj, Gazipur', 'MR2-201', '5000', '3500', '3500', '2024-07-17', 'Current Tenant', 'Tenant', '172125198170165_n.jpg', '1721249687WhatsApp Image 2024-07-15 at 10.07.57 AM.jpeg', '1721250094WhatsApp Image 2024-07-15 at 10.07.20 AM.jpeg', '1721250241WhatsApp Image 2024-07-15 at 10.07.36 AM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internetpack`
--
ALTER TABLE `internetpack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roominfo`
--
ALTER TABLE `roominfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenantinfo`
--
ALTER TABLE `tenantinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `internetpack`
--
ALTER TABLE `internetpack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roominfo`
--
ALTER TABLE `roominfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tenantinfo`
--
ALTER TABLE `tenantinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
