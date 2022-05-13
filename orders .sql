-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 11:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('[Huzaif]', 0),
('Huzaif', 12345),
('Ozi', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `full_name` text NOT NULL,
  `address` text NOT NULL,
  `phone_no` bigint(100) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `full_name`, `address`, `phone_no`, `city`, `country`) VALUES
(14, 'Huzaif', 'nazimabad#1', 3232459171, 'Karachi', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(6, 'Oster Mane and Tail brush for horse', 100, 1),
(7, 'Oster Mane and Tail brush for horse', 100, 1),
(7, 'LENOX TOOLS HOLE SAW WITH ARBOR, SPEED SLOT, 1-Inch', 40, 1),
(8, 'Oster Mane and Tail brush for horse', 100, 1),
(10, 'Oster Mane and Tail brush for horse', 100, 1),
(11, 'Lenox Tools - 1773006 Bi-Metal Speed Slot Arbored hole Saw with T3 Technology, 4-1/2', 80, 1),
(11, 'LENOX TOOLS HOLE SAW WITH ARBOR, SPEED SLOT, 1-Inch', 40, 1),
(12, 'Oster Mane and Tail brush for horse', 100, 1),
(13, 'MidWest Homes for Pets Ombre Dog Beds', 25, 1),
(13, 'JUNSPOW Cat Bed Dog Bed Pet Hammock Bed Free', 100, 1),
(13, 'Pet Safe CozyUp Folding Pet Steps', 35, 1),
(13, 'Zesty Paws Salmon Fish Oil Omega 3 for Dogs', 36, 1),
(13, 'Glad for Pets Black Charcoal Puppy Pads-New', 40, 1),
(13, 'Comfort Zone Diffuser Kit for Multi-Cat Calming', 50, 1),
(13, '2 Pack Automatic Cat Feeder and Water Dispenser in Set', 100, 1),
(13, 'Oster Mane and Tail Brush For Horse', 45, 1),
(14, 'Stainless Steel Cocktail Shaker Set Bar Tool Set', 100, 1),
(14, ' Cricut 2006695 Tools Basic CORE Color', 50, 1),
(14, 'Zesty Paws Salmon Fish Oil Omega 3 for Dogs', 36, 1),
(14, 'Oster Mane and Tail brush for horse', 100, 1),
(14, 'LENOX TOOLS HOLE SAW WITH ARBOR, SPEED SLOT, 1-Inch', 40, 1),
(14, 'Lenox Tools - 1773006 Bi-Metal Speed Slot Arbored hole Saw with T3 Technology, 4-1/2', 80, 1),
(14, 'Glass Water Bottles 6 Pack Deluxe Set 18oz - Includes 6 Sleeves. Stainless Steel Lids - Kombucha, Ju', 120, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
