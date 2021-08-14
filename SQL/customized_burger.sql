-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 04:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customized_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `AddOns_ID` char(12) NOT NULL,
  `AddOns_Name` text NOT NULL,
  `AddOns_Price` int(11) NOT NULL,
  `AddOns_Type` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`AddOns_ID`, `AddOns_Name`, `AddOns_Price`, `AddOns_Type`) VALUES
('2', 'Black 2', 987, 'BUN');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` char(12) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`, `Email`) VALUES
('19101506', 'Shaktiman Choudhury', '123456789', 'heloo@email.com'),
('admin', 'admin', 'admin', 'admin@email');

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `Burger_ID` char(12) NOT NULL,
  `Addons` text NOT NULL,
  `Price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `User_ID` char(12) NOT NULL,
  `Burgers_ID` char(12) NOT NULL,
  `Quantity` int(12) NOT NULL,
  `Price` int(12) NOT NULL,
  `Black 2` tinyint(1) NOT NULL DEFAULT 0,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `managed_by`
--

CREATE TABLE `managed_by` (
  `AdminID` char(12) NOT NULL,
  `Add_ID` char(12) NOT NULL,
  `Burg_ID` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Burger_ID` char(12) NOT NULL,
  `Burger_Name` varchar(60) NOT NULL,
  `Burger_Price` int(12) NOT NULL,
  `Burger_Type` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Burger_ID`, `Burger_Name`, `Burger_Price`, `Burger_Type`) VALUES
('2', 'Cheese Burger', 120, 'CHICKEN'),
('3', 'Chicken Special Burger', 150, 'CHICKEN'),
('4', 'qwerty', 987, 'Beef'),
('5', 'Beef Cheese Burger', 160, 'Beef'),
('6', 'beti', 10, 'CHICKEN');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_No` int(12) NOT NULL,
  `Order_Status` text NOT NULL,
  `Ordered_by` char(12) NOT NULL,
  `Total` int(12) NOT NULL,
  `Ordered_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` char(12) NOT NULL,
  `User_Name` varchar(60) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `Password`, `Email`, `Address`, `Phone`) VALUES
('Tanni', 'aluu', '12', 'aluu@mishti', 'Gulshan', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`AddOns_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`Burger_ID`),
  ADD KEY `Burger_ID` (`Burger_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Burgers_ID` (`Burgers_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `managed_by`
--
ALTER TABLE `managed_by`
  ADD PRIMARY KEY (`AdminID`,`Add_ID`,`Burg_ID`),
  ADD KEY `managed_by_ibfk_1` (`Burg_ID`),
  ADD KEY `Add_ID` (`Add_ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Burger_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `orderedby` (`Ordered_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `burger`
--
ALTER TABLE `burger`
  ADD CONSTRAINT `Burger_ID` FOREIGN KEY (`Burger_ID`) REFERENCES `menu` (`Burger_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Burgers_ID`) REFERENCES `menu` (`Burger_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `managed_by`
--
ALTER TABLE `managed_by`
  ADD CONSTRAINT `AdminID` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `managed_by_ibfk_1` FOREIGN KEY (`Burg_ID`) REFERENCES `menu` (`Burger_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `managed_by_ibfk_2` FOREIGN KEY (`Add_ID`) REFERENCES `addons` (`AddOns_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orderedby` FOREIGN KEY (`Ordered_by`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
