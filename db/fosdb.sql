-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 06:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 134470760, 'syahmi021001@gmail.com', '499c208ceafb4fbba162f077060955bd', '2021-04-04 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(5) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `CategoryName`, `CreationDate`) VALUES
(12, 'Single Dish', '2023-04-02 10:19:48'),
(14, 'Set', '2023-04-02 10:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `ItemName` varchar(120) DEFAULT NULL,
  `ItemPrice` varchar(120) DEFAULT NULL,
  `ItemDes` varchar(500) DEFAULT NULL,
  `Image` varchar(120) DEFAULT NULL,
  `ItemQty` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`ID`, `CategoryName`, `ItemName`, `ItemPrice`, `ItemDes`, `Image`, `ItemQty`) VALUES
(1, 'Single Dish', 'Steak', '90', 'High Quality Steak, Freshly Baked Fries, Salad, Baked Bread, Corn, BBQ Sauce', '16898bd06176b34b4dc9fe45a3740bae.png', 'Medium'),
(17, 'Set', 'Platter', '180', 'Steak Set, Tomahawk Set', '77fb1e3e8cb4bc82342047fae5171b43.png', 'Large'),
(18, 'Single Dish', 'Tomahawk', '95', 'Tomahawk, Freshly Baked Fries, Salad, Baked Corn, Baked Bread', '21c58aecc555480fa3e7281a25984a39.png', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `tblfoodtracking`
--

CREATE TABLE `tblfoodtracking` (
  `ID` int(10) NOT NULL,
  `OrderId` char(50) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  `StatusDate` timestamp NULL DEFAULT current_timestamp(),
  `OrderCanclledByUser` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfoodtracking`
--

INSERT INTO `tblfoodtracking` (`ID`, `OrderId`, `remark`, `status`, `StatusDate`, `OrderCanclledByUser`) VALUES
(6, '449024809', 'Order Confirmed', 'Order Confirmed', '2023-04-02 15:55:17', NULL),
(7, '449024809', 'Food Prepared', 'Food being Prepared', '2023-04-02 15:55:41', NULL),
(8, '449024809', 'Food Delivered', 'Food Delivered', '2023-04-02 15:56:07', NULL),
(9, '393191723', '-', 'Order Confirmed', '2023-04-02 16:10:44', NULL),
(10, '393191723', 'Sakit perut', 'Order Cancelled', '2023-04-02 16:11:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorderaddresses`
--

CREATE TABLE `tblorderaddresses` (
  `ID` int(11) NOT NULL,
  `UserId` char(100) DEFAULT NULL,
  `Ordernumber` char(100) DEFAULT NULL,
  `Flatnobuldngno` varchar(255) DEFAULT NULL,
  `StreetName` varchar(255) DEFAULT NULL,
  `Area` varchar(255) DEFAULT NULL,
  `Landmark` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `OrderFinalStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorderaddresses`
--

INSERT INTO `tblorderaddresses` (`ID`, `UserId`, `Ordernumber`, `Flatnobuldngno`, `StreetName`, `Area`, `Landmark`, `City`, `OrderTime`, `OrderFinalStatus`) VALUES
(4, '4', '449024809', '103 jalan jentayu timur', 'negeri sembilan', 'enstek', 'landed', 'Nilai', '2023-04-02 15:54:26', 'Food Delivered'),
(5, '4', '393191723', 'AU4', 'Kuala Lumpur', 'nilai', 'Landed', 'Selangor', '2023-04-02 16:09:52', 'Order Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE `tblorders` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) DEFAULT NULL,
  `FoodId` char(10) DEFAULT NULL,
  `FoodQty` int(11) DEFAULT NULL,
  `IsOrderPlaced` int(11) DEFAULT NULL,
  `OrderNumber` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`ID`, `UserId`, `FoodId`, `FoodQty`, `IsOrderPlaced`, `OrderNumber`) VALUES
(1, '1', '8', 1, 1, '409347008'),
(2, '1', '7', 1, 1, '409347008'),
(3, '3', '1', 1, 1, '111500378'),
(4, '3', '5', 2, 1, '111500378'),
(6, '4', '1', 1, 1, '364197876'),
(7, '4', '17', 2, 1, '364197876'),
(8, '4', '18', 1, 1, '364197876'),
(9, '4', '1', 3, 1, '449024809'),
(10, '4', '17', 3, 1, '449024809'),
(11, '4', '18', 4, 1, '449024809'),
(12, '4', '1', 1, 1, '393191723');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `ID` int(11) NOT NULL,
  `StaffName` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `UserName` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Password` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `StaffRegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`ID`, `StaffName`, `UserName`, `MobileNumber`, `Email`, `Password`, `StaffRegDate`) VALUES
(1, 'adam', 'adam', 149348131, 'adamiskdr@gmail.com', '4d7d719ac0cf3d78ea8a94701913fe47', '2023-04-02 12:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(1, 'Anuj', 'Kumar', 'test@gmail.com', 1234567890, '5a105e8b9d40e1329780d62ea2265d8a', '2021-06-04 04:31:04'),
(3, 'Test', 'User', 'testuser@gmail.com', 1236547890, 'f925916e2754e5e03f75dd58a5733251', '2021-06-05 12:28:41'),
(4, 'Muhammad', 'Azril', 'muhdazriil0201@gmail.com', 199543382, '5eefcc50c97919f6610100b36414c993', '2023-04-02 10:12:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfoodtracking`
--
ALTER TABLE `tblfoodtracking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblorderaddresses`
--
ALTER TABLE `tblorderaddresses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`,`Ordernumber`);

--
-- Indexes for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`,`FoodId`,`OrderNumber`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblfoodtracking`
--
ALTER TABLE `tblfoodtracking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblorderaddresses`
--
ALTER TABLE `tblorderaddresses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblorders`
--
ALTER TABLE `tblorders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
