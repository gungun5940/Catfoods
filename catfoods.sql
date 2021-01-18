-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 02:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catfoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_ID`, `C_Name`) VALUES
(1, 'อาหารแบบเปียก'),
(2, 'อาหารแบบเม็ด');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `M_ID` int(11) NOT NULL,
  `M_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `M_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `M_passwd` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `M_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `M_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`M_ID`, `M_name`, `M_user`, `M_passwd`, `M_tel`, `M_status`) VALUES
(2, 'Tuchchapon Suthamma', 'tuchchy', '071039', '0804961596', 'Member'),
(3, 'Gun Surinthorn', 'gungun', '1234', '0830027795', 'Member'),
(4, 'gunnie', 'gun', '0000', '0851649233', 'Admin'),
(5, 'guneiei', 'gg', '1111', '1234567890', 'member'),
(6, 'tuch tuchchaapon', 'tuch', '5940', '0804961596', 'Member'),
(7, 'rgjh', 'ebfgce', '1234', '0824326518', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_ID` int(11) NOT NULL,
  `P_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_price` float NOT NULL,
  `P_detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `P_unit` int(11) NOT NULL,
  `P_img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_ID`, `P_type`, `P_name`, `P_price`, `P_detail`, `P_unit`, `P_img`) VALUES
(1, 'ชนิดเม็ด', 'whiskas', 59, 'รสทูน่า', 10, ''),
(14, 'à¸Šà¸™à¸´à¸”à¹€à¸¡à¹‡à¸”', 'whiskas', 159, 'à¸£à¸ªà¸—à¸¹à¸™à¹ˆà¸²', 1, ''),
(16, 'à¸Šà¸™à¸´à¸”à¹€à¸¡à¹‡à¸”', 'Me-O', 149, 'à¸£à¸ªà¸›à¸¥à¸²à¸—à¸¹à¸™à¹ˆà¸²', 1, ''),
(20, 'à¸Šà¸™à¸´à¸”à¹€à¸›à¸µà¸¢à¸', 'whiskas', 79, 'à¸ªà¸³à¸«à¸£à¸±à¸šà¹à¸¡à¸§à¹‚à¸• à¸£à¸ªà¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¸­à¸™', 1, ''),
(21, 'zzz', 'zzzz', 123, 'zzz', 12, ''),
(22, 'zxc', 'zxxc', 159, 'ZX', 1, ''),
(23, 'rntrh', 'ghrtjr', 12, 'thtrn', 1, ''),
(24, 'd', 'd', 159, 'à¸£à¸ªà¸—à¸¹à¸™à¹ˆà¸²', 1, ''),
(25, 'd', 'd', 159, 'à¸£à¸ªà¸—à¸¹à¸™à¹ˆà¸²', 1, ''),
(26, 'd', 'd', 159, 'à¸£à¸ªà¸—à¸¹à¸™à¹ˆà¸²', 1, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(27, 'd', 'd', 159, 'à¸£à¸ªà¸—à¸¹à¸™à¹ˆà¸²', 1, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(28, '11', '11', 11, '11', 11, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(29, '11', '11', 11, '11', 11, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(30, '11', '11', 11, '11', 11, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(32, '11', '11', 11, '11', 11, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(33, 'eheh', 'rjrj', 156, 'hrtjt', 1, 'à¹à¸šà¸šà¹€à¸¡à¹‡à¸” à¹à¸¡à¸§à¹‚à¸• 1+ à¸£à¸ªà¹„à¸à¹ˆà¹à¸¥à¸°à¸›à¸¥à¸².jpg'),
(34, 'rj4tj', 'gjtrk', 154, 'rtj4t', 1, ''),
(35, '', '', 0, '', 0, ''),
(36, '', '', 0, '', 0, ''),
(37, 'hrhtb5', 'frkmyn', 153, 't5by', 1, ''),
(38, 'aaaa', 'aaaa', 10, 'aaaaaaaa', 10, ''),
(39, 'aaaa', 'aaaa', 10, 'aaaaaaaa', 10, ''),
(40, 'aaaa', 'aaaa', 10, 'aaaaaaaa', 10, ''),
(41, 'aaaa', 'aaaa', 10, 'aaaaaaaa', 10, ''),
(42, 'www', 'sdfdf', 123456, 'wfwrer', 123, '366035489_20171118.jpg'),
(43, 'tmtynh', 'ntrk', 15, 'tyngfb', 10, '490394914_20171118.jpg'),
(44, 'tmtynh', 'ntrk', 15, 'tyngfb', 10, '1650501610_20171118.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
