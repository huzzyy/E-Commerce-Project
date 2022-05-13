-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql305.byetcluster.com
-- Generation Time: Jan 14, 2022 at 02:31 PM
-- Server version: 5.7.36-39
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30732113_sempiredb`
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
(21, 'Komal ', 'Vhji', 34855, 'Faisalabad', 'Pakistan'),
(22, 'gwawt', 'wqtqwt', 5221, 'wqqw', 'weq'),
(23, 'gwawt', 'wqtqwt', 5221, 'wqqw', 'weq'),
(24, 'taqI', 'KARACHSAEAS', 321, 'PAKISTAN', 'KARACHI'),
(25, 'wARAS', 'Usamad', 231, 'karachi', 'pakistan'),
(26, 'saif', 'adhasjkdhsaicd saad', 32165514354, 'nddashdiosad', 'dnlikasnhdoasd'),
(27, '2', '2', 2, '2', '2'),
(28, 'Lincoln Ebert', '971B Windler Park', 3215485899, 'Karachi', 'Pakistan');

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
(14, 'Glass Water Bottles 6 Pack Deluxe Set 18oz - Includes 6 Sleeves. Stainless Steel Lids - Kombucha, Ju', 120, 1),
(15, 'Oster Mane and Tail brush for horse', 100, 1),
(16, 'Scratching Tree Cubby House and Snuggle Bed', 120, 1),
(17, 'Oakley Universal Soft Goggle Case', 25, 1),
(18, 'LENOX TOOLS HOLE SAW WITH ARBOR, SPEED SLOT, 1-Inch', 40, 1),
(19, 'Mixing Bowls with Airtight Lids, 20 piece Stainless Steel Metal Nesting Bowls', 133, 1),
(20, 'MidWest Homes for Pets Ombre Dog Beds', 25, 1),
(21, '22 Piece Cocktail Shaker Set', 100, 1),
(22, 'Oster Mane and Tail brush for horse', 100, 1),
(24, 'Lenox Tools - 1773006 Bi-Metal Speed Slot Arbored hole Saw with T3 Technology, 4-1/2', 80, 1),
(24, 'DrawerStore Compact Cutlery Organizer Kitchen Drawer Tray, Small, Gray', 10, 1),
(24, 'Safer Brand SF5026 Houseplant Sticky Stakes Insect Traps, 1 Pack, One Colory', 5, 1),
(25, 'Safer Brand SF5026 Houseplant Sticky Stakes Insect Traps, 1 Pack, One Colory', 5, 1),
(26, 'Oster Mane and Tail brush for horse', 100, 1),
(27, 'Scratching Tree Cubby House and Snuggle Bed', 120, 1),
(28, 'Lenox Tools - 1773006 Bi-Metal Speed Slot Arbored hole Saw with T3 Technology, 4-1/2', 80, 1);

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
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
