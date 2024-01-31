-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 08:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `Fac_Id` int(11) NOT NULL,
  `Fac_Name` varchar(64) NOT NULL,
  `Fac_Price` int(11) NOT NULL,
  `Fac_Description` varchar(256) NOT NULL,
  `Fac_Features` varchar(256) NOT NULL,
  `Fac_Image` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`Fac_Id`, `Fac_Name`, `Fac_Price`, `Fac_Description`, `Fac_Features`, `Fac_Image`) VALUES
(2, 'Swimming Pool', 500, 'We proudly say that hotel ABC has a large indoor pool. It is one of the most luxurious hotel pools in Sri Lanka.', 'Available for both guests who are staying at the Hotel as well as outsiders, Evening entertainment, Special pool area restaurant.', 'pool.jpg'),
(3, 'Restaurant', 5000, 'Enjoy delicious dishes freshly prepared by our experienced chiefs!\r\n\r\n', 'Traditional Sri Lankan foods, European foods, Chinese foods.', 'food.jpg'),
(4, 'Spa', 2500, 'Looking for a relaxation? we offer a variety of relaxation techniques and therapies with the greatest care by our experienced therapists.', 'Available for both guests who are staying at the Hotel as well as outsiders, Full body massage, Head massage, Foot therapy.', 'spa.jpg'),
(5, 'Gym', 3000, 'Our GYM consists with many of the modern equipment with great quality and safety.', 'Available for both guests who are staying at the Hotel as well as outsiders, gym instructor, Special packages.', 'gym.jpg'),
(6, 'Games Room', 1500, 'Looking for a fun? Welcome to our game room.', 'Available for both insiders and outsiders of the hotel, Billiard board, Carrom, Dart, Game Consoles etc.', 'gameroom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Res_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Res_Price` int(11) NOT NULL,
  `Res_Date` date NOT NULL,
  `Status` varchar(64) NOT NULL,
  `Fac_Id` int(11) DEFAULT NULL,
  `Room_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_Id` int(11) NOT NULL,
  `Room_Name` varchar(64) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Review_Id`, `Room_Name`, `Rating`, `Review`) VALUES
(3, 'Junior Suite', 4, 'This is one of the best room available in this Hotel.'),
(4, 'Dark Moon', 5, 'great!!!!. hope to come again...'),
(5, 'Heaven Family', 2, 'not satisfied....given facilities are not worthy.'),
(6, 'Heaven Family', 3, 'Not that bad. but the facilities are not that much considerable'),
(7, 'Kingsburry', 5, 'Great.i love this room. it is better if there were refrigerator...');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_Id` int(11) NOT NULL,
  `Room_Price` int(11) NOT NULL,
  `Room_Type` varchar(64) NOT NULL,
  `Room_Features` varchar(256) NOT NULL,
  `Room_Image` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_Id`, `Room_Price`, `Room_Type`, `Room_Features`, `Room_Image`) VALUES
(2, 10000, 'Dark Moon', 'Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors.', '1.jpg'),
(3, 6500, 'Junior Suite', 'Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors.', '2.jpg'),
(4, 12500, 'Super Deluxe', 'Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors.', '3.jpg'),
(6, 10000, 'Heaven Family', 'Tea and coffee maker, Full A/C, Hot water, Free Wi-Fi-unlimited, Bathrobes, Special Carpeted floors.', '4.jpg'),
(7, 17000, 'Virginia Standard', 'Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors, Laundry services.', '5.jpg'),
(8, 25000, 'Kingsburry', 'Large TV, Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors, Mini bar.', '6.jpg'),
(9, 22500, 'Vip family', 'Special mattress, Laundry services, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors.', '7.jpg'),
(10, 32000, 'Family Biggest', 'Two large beds, Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Bathrobes, Special Carpeted floors.', '8.jpg'),
(11, 20000, 'Extreme Delux', '32-inch TV, Special mattress, Full A/C, Hot water, Free Wi-Fi-unlimited, Special Carpeted floors, Bathrobes.', '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `Role`) VALUES
(14, 'hotelstaff', '$2y$10$tNM/xaZTUnaILo90AxH6lOX539awxUF3AKhSzOoZpod7ICVMwA5f.', 'Hotel Staff'),
(15, 'guest', '$2y$10$10MwN/XfJP2CXaBgqH.MhuRpq8fseAbGuR3p70yUW2FKQH/Twqdx2', 'Guest'),
(16, 'admin', '$2y$10$YhH6eaiVhcfGTJ.v1xI72eHEF5kbkwF2DD5Pg/gXct/plBK0fMFm.', 'Admin'),
(23, 'hunterkiller', '$2y$10$Mg.tuUtwlF0SGzPkcWlzfeL9I7VUixQAxHterdKQb6IPfICc/sI9e', 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_Details_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Fname` varchar(64) NOT NULL,
  `Lname` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_Details_Id`, `User_Id`, `Fname`, `Lname`, `Email`, `Tel`) VALUES
(11, 23, 'dinidu', 'madushan', 'dinidu@gmail.com', 705361547);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`Fac_Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Res_Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `Fac_Id` (`Fac_Id`),
  ADD KEY `Room_Id` (`Room_Id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_Id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_Details_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `Fac_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Res_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `User_Details_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Fac_Id`) REFERENCES `facility` (`Fac_Id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`Room_Id`) REFERENCES `room` (`Room_Id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
