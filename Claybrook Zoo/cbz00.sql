-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2020 at 06:21 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbz00`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES
(4, 'roshan', '$2y$10$kPtnwKVmTBVBk1mDqf.g8.NvkyMcRuA2Ul.Ui1PtjUsbcsOQJuYdK');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animalId` int(11) NOT NULL,
  `speciesName` varchar(255) NOT NULL,
  `animalName` varchar(255) NOT NULL,
  `habitat` varchar(255) NOT NULL,
  `diet` text NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `als` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` decimal(11,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `archived` enum('0','1') NOT NULL DEFAULT '1',
  `categoryId` int(11) NOT NULL,
  `sponsorId` varchar(255) NOT NULL,
  `band` enum('A','B','C','D','E') NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `agreementFrom` date NOT NULL,
  `agreementTo` date NOT NULL,
  `signage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animalId`, `speciesName`, `animalName`, `habitat`, `diet`, `dob`, `doj`, `gender`, `als`, `height`, `weight`, `image`, `archived`, `categoryId`, `sponsorId`, `band`, `price`, `agreementFrom`, `agreementTo`, `signage`) VALUES
(1, 'Tiger', 'Brock', 'Jungle', 'Meat', '2011-02-13', '2020-06-25', 'M', 15, 8, '300.30', '../../assets/images/animals/tiger.jpg', '1', 1, '3', 'A', '3324.99', '2020-07-11', '2020-12-31', 'quarter'),
(2, 'Parrot', 'Paro', 'Mountains', 'Corn, beans', '2010-05-11', '2020-07-11', 'F', 5, 7, '10.00', '../../assets/images/animals/parrot.jpg', '1', 2, '3', 'C', '6541.99', '2020-07-11', '2020-12-31', 'quarter'),
(3, 'Gold Fish', 'Gold', 'Ocean', 'crustaceans', '2014-09-12', '2020-06-30', 'F', 1, 1, '0.40', '../../assets/images/animals/Gold fish.jpg', '1', 3, '1', 'A', '1432.99', '2020-06-25', '2020-12-31', 'half'),
(4, 'Crocodile', 'Cu-Co-do', 'Forest', 'Zebra', '2015-08-27', '2020-08-05', 'M', 10, 1, '452.20', '../../assets/images/animals/crocodile.jpg', '1', 4, '3', 'B', '3214.99', '2020-07-11', '2020-12-31', 'quarter'),
(46, 'Tuatara', 'Reptile', 'Jungle', 'Spiders, insects, beetles', '2020-06-25', '2020-06-25', 'M', 100, 4, '1.00', '../../assets/images/animals/Tuatara.jpg', '1', 4, 'none', 'A', '0.00', '2020-06-25', '2020-06-25', 'quarter'),
(47, 'Lion', 'Kevin', 'Jungle', 'Meat', '2020-06-25', '2020-06-25', 'M', 15, 120, '225.00', '../../assets/images/animals/lion.jpg', '1', 1, '1', 'B', '10000.00', '2020-06-25', '2022-06-25', 'full'),
(48, 'Discus', 'Colored Fish', 'Ocean', 'Tetra Veggie', '2020-06-25', '2020-06-25', 'F', 5, 3, '7.00', '../../assets/images/animals/DIscus.jpg', '1', 3, '3', 'B', '0.00', '2020-06-25', '2021-06-25', 'full'),
(49, 'Black Buck', 'Buck', 'Jungle', 'Grass', '2020-06-25', '2020-06-25', 'F', 50, 88, '45.00', '../../assets/images/animals/Black Buck.jpg', '1', 1, '1', 'A', '0.00', '2020-06-25', '2025-06-25', 'quarter'),
(50, 'Peacock', 'Pea', 'Jungle', 'Earthworms, beans', '2018-11-25', '2020-06-25', 'F', 15, 120, '6.00', '../../assets/images/animals/peacock.jpeg', '1', 2, '1', 'A', '1000.00', '2020-06-25', '2021-06-25', 'full'),
(51, 'Dummy ', 'dummy', 'dummy data', 'dummy data', '2020-07-19', '2020-07-19', 'M', 10, 10, '10.00', '../../assets/images/animals/', '0', 1, 'none', 'A', '0.00', '2020-07-19', '2020-07-19', 'quarter');

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `birdId` int(11) NOT NULL,
  `nest` text NOT NULL,
  `clutch` int(11) NOT NULL,
  `wingspan` int(11) NOT NULL,
  `fly` enum('yes','no') NOT NULL,
  `plumage` varchar(255) NOT NULL,
  `animalId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`birdId`, `nest`, `clutch`, `wingspan`, `fly`, `plumage`, `animalId`) VALUES
(1, 'Oval or round', 23, 12, 'yes', 'red', 2),
(2, 'Scrapes', 0, 160, 'yes', 'green', 50);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `name`) VALUES
(1, 'Mammal'),
(2, 'Bird'),
(3, 'Fish'),
(4, 'Reptile or Amphibian');

-- --------------------------------------------------------

--
-- Table structure for table `fishes`
--

CREATE TABLE `fishes` (
  `fishId` int(11) NOT NULL,
  `bodyTemperature` decimal(11,2) NOT NULL,
  `waterType` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `animalId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fishes`
--

INSERT INTO `fishes` (`fishId`, `bodyTemperature`, `waterType`, `color`, `animalId`) VALUES
(1, '23.13', 'fresh', 'white', 3),
(2, '27.00', 'Salty', 'purple', 48);

-- --------------------------------------------------------

--
-- Table structure for table `mammals`
--

CREATE TABLE `mammals` (
  `mammalId` int(11) NOT NULL,
  `gestationTime` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `bodyTemperature` decimal(11,2) NOT NULL,
  `animalId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mammals`
--

INSERT INTO `mammals` (`mammalId`, `gestationTime`, `category`, `bodyTemperature`, `animalId`) VALUES
(1, 2, 'Heterocus', '38.32', 1),
(9, 110, 'Heterocus', '0.00', 47),
(10, 167, 'Herbiborous', '0.00', 49),
(11, 5, 'dummy', '0.00', 51);

-- --------------------------------------------------------

--
-- Table structure for table `repamp`
--

CREATE TABLE `repamp` (
  `repampID` int(11) NOT NULL,
  `reproduction` enum('egg','birth') NOT NULL,
  `clutch` int(11) NOT NULL,
  `offspring` int(11) NOT NULL,
  `animalId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repamp`
--

INSERT INTO `repamp` (`repampID`, `reproduction`, `clutch`, `offspring`, `animalId`) VALUES
(1, 'egg', 8, 20, 4),
(7, 'birth', 10, 5, 46);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `sponsorId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `existingCustomer` enum('yes','no') DEFAULT 'no',
  `companyID` int(11) NOT NULL,
  `primaryNumber` varchar(255) NOT NULL,
  `secondaryNumber` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `signageImage` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `agreement` text NOT NULL,
  `payment` text NOT NULL,
  `paymentReceived` enum('yes','no') NOT NULL DEFAULT 'no',
  `reviewDate` date NOT NULL,
  `signedDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`sponsorId`, `name`, `existingCustomer`, `companyID`, `primaryNumber`, `secondaryNumber`, `country`, `city`, `street`, `signageImage`, `note`, `agreement`, `payment`, `paymentReceived`, `reviewDate`, `signedDate`) VALUES
(1, 'Visit Nepal 2020', 'no', 10001, '980243143323', '98813241324', 'Nepal', 'Kathmandu', 'Thankot', '../../assets/images/sponsors/visit nepal.png', 'Note of the agreement statement', 'Agreement Listings', 'cash', 'yes', '2020-06-25', 'Claybrook Org'),
(3, 'Zenth Staybrite Ltd', 'no', 10002, '01966 7855121', '0800 3289395', 'UK', 'North Yorkshire', '45 Blackwood Road', '../../assets/images/sponsors/Zenith Staybrite.png', 'Call us ', 'Yes', 'check', 'yes', '2020-06-25', 'Claybrook Org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animalId`),
  ADD KEY `category_id` (`categoryId`);

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`birdId`),
  ADD KEY `animal_id` (`animalId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `fishes`
--
ALTER TABLE `fishes`
  ADD PRIMARY KEY (`fishId`),
  ADD KEY `animal_id` (`animalId`);

--
-- Indexes for table `mammals`
--
ALTER TABLE `mammals`
  ADD PRIMARY KEY (`mammalId`),
  ADD KEY `animal_id` (`animalId`);

--
-- Indexes for table `repamp`
--
ALTER TABLE `repamp`
  ADD PRIMARY KEY (`repampID`),
  ADD KEY `animal_id` (`animalId`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `animalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `birdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fishes`
--
ALTER TABLE `fishes`
  MODIFY `fishId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mammals`
--
ALTER TABLE `mammals`
  MODIFY `mammalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `repamp`
--
ALTER TABLE `repamp`
  MODIFY `repampID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `sponsorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categoryId`);

--
-- Constraints for table `birds`
--
ALTER TABLE `birds`
  ADD CONSTRAINT `birds_ibfk_1` FOREIGN KEY (`animalId`) REFERENCES `animals` (`animalId`);

--
-- Constraints for table `fishes`
--
ALTER TABLE `fishes`
  ADD CONSTRAINT `fishes_ibfk_1` FOREIGN KEY (`animalId`) REFERENCES `animals` (`animalId`);

--
-- Constraints for table `mammals`
--
ALTER TABLE `mammals`
  ADD CONSTRAINT `mammals_ibfk_1` FOREIGN KEY (`animalId`) REFERENCES `animals` (`animalId`);

--
-- Constraints for table `repamp`
--
ALTER TABLE `repamp`
  ADD CONSTRAINT `repamp_ibfk_1` FOREIGN KEY (`animalId`) REFERENCES `animals` (`animalId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
