-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 09:31 AM
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
-- Database: `bourbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `name`, `email`, `password`, `profile`) VALUES
(1, 'BourBon Service', 'bourbon@gmail.com', 'brayan1234', 'abdel/media/BourBon_BourBon Service__2022_07_02 09_27_54_3627634.jpg'),
(2, 'Developer', 'developerbm@gmail.com', 'type', 'bourbon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `mainName` text NOT NULL,
  `miniName` text NOT NULL,
  `description` text NOT NULL,
  `stock` text NOT NULL,
  `price` text NOT NULL,
  `img` text NOT NULL,
  `ship-price` text NOT NULL,
  `car-price` text NOT NULL,
  `walking-price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `mainName`, `miniName`, `description`, `stock`, `price`, `img`, `ship-price`, `car-price`, `walking-price`) VALUES
(3, 'Compoveda', 'Bourbon Classic\'s', 'The Compoveda has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '2000', 'abdel/UploadedFromPhone_IMG-20220611-WA0029.jpg', '1', '0.2', '0.5'),
(4, 'Weller', 'Special Reserve', 'The Weller has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '99+', '2200', 'abdel/UploadedFromPhone_IMG-20220611-WA0028.jpg', '1', '0.2', '0.5'),
(5, 'MC\'Henry Kenna', 'Bourbon Classic\'s', 'The MC\'Henry Kenna has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '3000', 'abdel/UploadedFromPhone_IMG-20220611-WA0027.jpg', '1', '0.3', '0.4'),
(6, 'Kentucky Straight', 'Bourbon Classic\'s', 'The Kentucky Straight has a fascinating and composed edgy feeling on the tongue.Barrel finished with 10 french oak staves.', '50+', '2500', 'abdel/UploadedFromPhone_IMG-20220611-WA0032.jpg', '1', '0.2', '0.5'),
(7, 'MC\'Henry Kenna', 'Bottled-In-Bond', 'The MC\'Henry Kenna has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '80+', '3500', 'abdel/UploadedFromPhone_IMG-20220611-WA0030.jpg', '1', '0.2', '0.5'),
(8, 'Weller', 'Antique 107', 'The Weller has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '2300', 'abdel/UploadedFromPhone_IMG-20220611-WA0031.jpg', '1', '0.2', '0.5'),
(9, 'Glenfiddich', 'Single Malt', 'Glenfiddich is a single malt scotch whiskey.Good for afternoons and to add a little more to your mood.Best suitable for ages above 18', '100+', '2700', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0011.jpg', '1', '0.3', '0.5'),
(10, 'Henessy', 'Origina X.O', 'Henessy needs no introduction as it has been one of our top selling whiskey.Good for days you feel a little low, Even better when you are happy.', '100+', '3000', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0012.jpg', '0.8', '0.2', '0.4'),
(11, 'Sazerac', 'Straight Rye', 'Sazerac has a prepaid packaging.So little for so much.This will surely get you RYE\'d up.', '90+', '2500', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0013.jpg', '1', '0.2', '0.5'),
(12, 'Buffalo Trace', 'Kentucky Straight', 'The Buffalo Trace(Whiskey) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '50+', '3300', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0014.jpg', '1', '0.2', '0.5'),
(13, 'Eagle Rare', 'Kentucky Straight', 'The Eagle Rare(Whiskey) has a fascinating and composed edgy feeling with a classic view through it\'s characteristic shape and taste.', '100+', '1900', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0015.jpg', '1', '0.2', '0.5'),
(14, 'Boklyn Oenology', '2014 Broken Land(BOE)', 'The B.O.E(White Wine) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '2250', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0016.jpg', '1', '0.2', '0.5'),
(15, 'The Glenrothes', 'Vintage Single Malt', 'The Glenrothes(Whiskey) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '2100', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0017.jpg', '1', '0.3', '0.5'),
(16, 'Blanton\'s', 'BourBon classic', 'The Blanton\'s has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '99+', '2000', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0018.jpg', '1', '0.2', '0.5'),
(17, 'Sweet Wheat', '1792', 'The Sweet Wheat(Whiskey) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '120+', '1150', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0021.jpg', '1', '0.2', '0.5'),
(18, 'Pappy Van Winkles', 'Family Reserve', 'Decade old Pappy Van Winkles(Whiskey) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '3300', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0024.jpg', '1', '0.2', '0.5'),
(19, 'Old Forester', 'Kentucky Straight', 'Created since 1910, Old Forester(whiskey) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '50+', '2900', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0023.jpg', '1', '0.2', '0.5'),
(20, 'George Dickel', 'Bottle-In-Bond', 'The George Dickel(Whiskey) has a fascinating and composed edgy feeling on the tongue.Distilled and Charcoal, Mellowed at Cascade Hollow Distillery.50% alcohol by volume.', '80+', '3200', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0025.jpg', '1', '0.3', '05.'),
(21, 'Cerasuolo Di Vittoria', 'Docg Classico', 'The Docg Classico(wine) has a fascinating and composed edgy feeling on the tongue.Good wine to set the mood.', '100+', '3750', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0019.jpg', '1', '0.3', '0.5'),
(22, 'Eagle Rare', 'Kentucky straight', 'he Eagle Rare(Whiskey) has a fascinating and composed edgy feeling with a classic view through it\'s characteristic shape and taste.', '50+', '2150', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0026.jpg', '1', '0.2', '0.5'),
(23, 'Buffalo Trace', 'Kentucky Straight', 'The Buffalo Trace(Whiskey) has a fascinating and composed edgy feeling on the tongue.Good for afternoons and to add a little more to your mood.', '100+', '2000', 'abdel/Bourbon/UploadedFromPhone_IMG-20220614-WA0022.jpg', '1', '0.2', '0.5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  `region_state` text NOT NULL,
  `city` text NOT NULL,
  `street` text NOT NULL,
  `itemid` text NOT NULL,
  `count` text NOT NULL,
  `method` text NOT NULL,
  `sender` text NOT NULL,
  `reciever` text NOT NULL DEFAULT 'team',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `reciever_status` text NOT NULL DEFAULT 'unseen',
  `sender_status` text NOT NULL DEFAULT 'unseen',
  `senderimg` text NOT NULL DEFAULT 'abdel/Going%20offline.svg',
  `recieverimg` text NOT NULL DEFAULT 'teamimg',
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `responseID` int(11) NOT NULL,
  `orderid` text NOT NULL,
  `message` text NOT NULL,
  `sender` text NOT NULL,
  `reciever` text NOT NULL,
  `sender_status` text NOT NULL DEFAULT 'unseen',
  `reciever_status` text NOT NULL DEFAULT 'unseen',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`responseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `responseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
