-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2023 at 11:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequester`
--

CREATE TABLE `bloodrequester` (
  `Requester_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(100) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Blood_Type` varchar(5) NOT NULL,
  `Blood_Bag_Quantity` int(10) NOT NULL,
  `Usage_Of_Blood` varchar(20) NOT NULL,
  `Date_Of_Request` date NOT NULL,
  `Reason_Of_Need` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodrequester`
--

INSERT INTO `bloodrequester` (`Requester_ID`, `Name`, `Age`, `Gender`, `Blood_Type`, `Blood_Bag_Quantity`, `Usage_Of_Blood`, `Date_Of_Request`, `Reason_Of_Need`, `Address`, `City`, `Contact`) VALUES
(1, 'Osama Bin Ladin', 71, 'Male', 'B+', 2, 'Personal', '2023-02-10', 'Bombing people', 'Near Pak-Afghan Border', 'Karachi', 989889);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `Age` int(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Weight` int(100) NOT NULL,
  `Blood_Type` text NOT NULL,
  `Blood_Bag_Quantity` int(100) NOT NULL,
  `KnownDisease` varchar(100) NOT NULL,
  `RegistrationDate` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_ID`, `Name`, `FatherName`, `Age`, `Gender`, `Weight`, `Blood_Type`, `Blood_Bag_Quantity`, `KnownDisease`, `RegistrationDate`, `Address`, `City`, `Contact`) VALUES
(1, 'Muneer', 'Khalid', 20, 'Male', 55, 'A+', 4, 'None', '2023-01-14', 'Sharifabad', 'Karachi', 331324092),
(2, 'Selmon', 'Boi', 65, 'Male', 98, 'O+', 2, 'Black Deer ', '2023-01-30', 'uttarpradesh', 'Multan', 912378723),
(3, 'Osaid', 'Ansari', 21, 'Male', 60, 'A+', 3, 'Hotness', '2023-01-05', 'Orangi', 'Karachi', 11922),
(4, 'Afridi', 'khan', 32, 'Male', 32, 'A+', 4, 'none', '2023-02-02', 'ewdd', 'Karachi', 344),
(5, 'df', 'df', 54, 'Female', 45, 'B+', 2, 'gr', '2023-02-15', 'rgtg', 'Multan', 4554),
(6, 'df', 'fer', 43, 'Female', 34, 'B+', 4, 'fref', '2023-02-22', 'rfefer', 'Peshawar', 434343),
(7, 'red', 'erer', 43, 'Male', 34, 'A+', 5, 'erfer', '2023-02-01', 'ferf', 'Karachi', 443),
(8, 'cdc', 'ds', 32, 'Male', 134, 'O+', 5, 'ffff', '2023-02-09', 'hfhf', 'Multan', 3434),
(9, 'dbh', 'hdbsh', 23, 'Female', 23, 'AB+', 2, 'dssa', '2023-03-09', 'wd', 'Multan', 2323);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Blood_ID` int(11) NOT NULL,
  `Blood_Type` varchar(10) NOT NULL,
  `Blood_Bag_Quantity` int(100) NOT NULL,
  `Blood_Bag_RecievedDate` date NOT NULL DEFAULT current_timestamp(),
  `Blood_Bag_Expiry` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Blood_ID`, `Blood_Type`, `Blood_Bag_Quantity`, `Blood_Bag_RecievedDate`, `Blood_Bag_Expiry`) VALUES
(1, 'A+', 4, '2023-02-03', '2023-02-03'),
(2, 'B+', 2, '2023-02-03', '2023-02-03'),
(3, 'B+', 4, '2023-02-03', '2023-02-03'),
(4, 'A+', 5, '2023-02-03', '2023-02-03'),
(5, 'O+', 5, '2023-02-03', '2023-02-03'),
(6, 'AB+', 2, '2023-02-03', '2023-02-03'),
(7, 'AB+', 4, '2023-02-03', '2023-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ConfirmPassword` varchar(100) NOT NULL,
  `Role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Password`, `ConfirmPassword`, `Role`) VALUES
(1, 'Muneer', 'muneer', 'muneer', 'admin'),
(2, 'Arham', 'arham', 'arham', 'user'),
(3, 'Osaid', 'osaid', 'osaid', 'user'),
(4, 'Abdullah', 'abdullah', 'abdullah', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrequester`
--
ALTER TABLE `bloodrequester`
  ADD PRIMARY KEY (`Requester_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Donor_ID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Blood_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodrequester`
--
ALTER TABLE `bloodrequester`
  MODIFY `Requester_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `Donor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `Blood_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
