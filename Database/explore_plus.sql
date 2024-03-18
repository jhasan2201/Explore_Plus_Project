-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 05:45 AM
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
-- Database: `explore_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `senior` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `child`, `adult`, `senior`, `name`, `email`, `date_of_birth`, `phone`) VALUES
(1, 1, 2, 0, 'John Doe', 'john@example.com', '1985-03-15', '123456789'),
(2, 0, 3, 1, 'Jane Smith', 'jane@example.com', '1978-10-20', '987654321'),
(3, 2, 1, 0, 'Alice Johnson', 'alice@example.com', '1992-07-05', '654321987'),
(4, 1, 1, 2, 'Bob Brown', 'bob@example.com', '1960-05-12', '321654987');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_item`
--

CREATE TABLE `breakfast_item` (
  `breakfast` varchar(30) NOT NULL,
  `bcost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast_item`
--

INSERT INTO `breakfast_item` (`breakfast`, `bcost`) VALUES
('edd', 12),
('French Toast', 11),
('Omelette', 9),
('Pancakes', 10),
('polao', 80),
('Scrambled Eggs', 8);

-- --------------------------------------------------------

--
-- Table structure for table `dinner_item`
--

CREATE TABLE `dinner_item` (
  `dinner` varchar(30) NOT NULL,
  `dcost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinner_item`
--

INSERT INTO `dinner_item` (`dinner`, `dcost`) VALUES
('kacci', 200),
('polao', 200),
('Roast Beef', 27),
('Seafood Pasta', 22),
('Steak', 25),
('Vegetable Stir-Fry', 20);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrolment_id` int(11) NOT NULL,
  `enrollment_datetime` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrolment_id`, `enrollment_datetime`, `username`, `booking_id`, `payment_id`) VALUES
(1, '2024-03-15 10:00:00', 'user1', 1, 1),
(2, '2024-03-15 11:00:00', 'user2', 2, 2),
(3, '2024-03-15 12:00:00', 'user3', 3, 3),
(4, '2024-03-15 13:00:00', 'user4', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `NID` varchar(20) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `visa_expiry_date` date DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`username`, `name`, `password`, `email`, `phone`, `date_of_birth`, `city`, `country`, `NID`, `nationality`, `age`, `gender`, `visa_expiry_date`, `photo`) VALUES
('guide1', 'Guide 1', 'guidepass1', 'guide1\r\n\r\n@example.com', '123456789', '1980-01-01', 'GuideCity1', 'GuideCountry1', '1234567890', 'Nationality1', 40, 'Male', '2025-01-01', 0x6775696465312e6a7067),
('guide2', 'Guide 2', 'guidepass2', 'guide2@example.com', '987654321', '1975-05-05', 'GuideCity2', 'GuideCountry2', '0987654321', 'Nationality2', 45, 'Female', '2026-05-05', 0x6775696465322e6a7067),
('guide3', 'Guide 3', 'guidepass3', 'guide3@example.com', '654321987', '1988-12-10', 'GuideCity3', 'GuideCountry3', '9876543210', 'Nationality3', 32, 'Other', '2027-12-10', 0x6775696465332e6a7067),
('guide4', 'Guide 4', 'guidepass4', 'guide4@example.com', '321654987', '1985-08-20', 'GuideCity4', 'GuideCountry4', '4567890123', 'Nationality4', 37, 'Male', '2028-08-20', 0x6775696465342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `guide_speak`
--

CREATE TABLE `guide_speak` (
  `username` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guide_speak`
--

INSERT INTO `guide_speak` (`username`, `language`) VALUES
('guide1', 'English'),
('guide1', 'Spanish'),
('guide2', 'French'),
('guide3', 'German'),
('guide3', 'Japanese'),
('guide4', 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `available_room` int(11) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `map` varchar(100) DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `type`, `name`, `price`, `available_room`, `place`, `map`, `photo`) VALUES
(1, 'Resort', 'Resort1', 150.00, 50, 'City1', 'map_resort1.jpg', 0x7265736f7274312e6a7067),
(2, 'Hotel', 'Hotel2', 100.00, 75, 'City2', 'map_hotel2.jpg', 0x686f74656c322e6a7067),
(3, 'Motel', 'Motel3', 80.00, 30, 'City3', 'map_motel3.jpg', 0x6d6f74656c332e6a7067),
(4, 'Inn', 'Inn4', 120.00, 40, 'City4', 'map_inn4.jpg', 0x696e6e342e6a7067),
(8, 'five-star', 'California', 1200.00, 4, 'USA', 'https://maps.app.goo.gl/XTTfT26QMnLCFKRj7', '');

-- --------------------------------------------------------

--
-- Table structure for table `lunch_item`
--

CREATE TABLE `lunch_item` (
  `lunch` varchar(30) NOT NULL,
  `lcost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch_item`
--

INSERT INTO `lunch_item` (`lunch`, `lcost`) VALUES
('biriany', 120),
('Burger and Fries', 11),
('Caesar Salad', 12),
('Club Sandwich', 14),
('Grilled Chicken Salad', 13),
('rice', 40);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`) VALUES
(1),
(2),
(3),
(4),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(15);

-- --------------------------------------------------------

--
-- Table structure for table `menu_breakfast`
--

CREATE TABLE `menu_breakfast` (
  `menu_id` int(11) DEFAULT NULL,
  `breakfast` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_breakfast`
--

INSERT INTO `menu_breakfast` (`menu_id`, `breakfast`) VALUES
(1, 'Scrambled Eggs'),
(2, 'Pancakes'),
(3, 'Omelette'),
(4, 'French Toast'),
(1, 'Scrambled Eggs'),
(2, 'Pancakes'),
(3, 'Omelette'),
(4, 'French Toast'),
(7, 'Pancakes'),
(8, 'Pancakes'),
(9, 'Pancakes'),
(15, 'Pancakes');

-- --------------------------------------------------------

--
-- Table structure for table `menu_dinner`
--

CREATE TABLE `menu_dinner` (
  `menu_id` int(11) DEFAULT NULL,
  `dinner` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_dinner`
--

INSERT INTO `menu_dinner` (`menu_id`, `dinner`) VALUES
(1, 'Steak'),
(2, 'Seafood Pasta'),
(3, 'Vegetable Stir-Fry'),
(4, 'Roast Beef'),
(9, 'kacci');

-- --------------------------------------------------------

--
-- Table structure for table `menu_lunch`
--

CREATE TABLE `menu_lunch` (
  `menu_id` int(11) DEFAULT NULL,
  `lunch` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_lunch`
--

INSERT INTO `menu_lunch` (`menu_id`, `lunch`) VALUES
(1, 'Caesar Salad'),
(2, 'Club Sandwich'),
(3, 'Burger and Fries'),
(4, 'Grilled Chicken Salad'),
(8, 'biriany'),
(9, 'biriany'),
(15, 'biriany');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`) VALUES
(1, 100.00),
(2, 150.50),
(3, 200.75),
(4, 75.25);

-- --------------------------------------------------------

--
-- Table structure for table `pay_method`
--

CREATE TABLE `pay_method` (
  `payment_id` int(11) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay_method`
--

INSERT INTO `pay_method` (`payment_id`, `method`) VALUES
(1, 'Credit Card'),
(2, 'PayPal'),
(3, 'Bank Transfer'),
(4, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `about` text DEFAULT NULL,
  `place_name` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `available_seat` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `map` varchar(100) DEFAULT NULL,
  `FAQ` text DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `guide_username` varchar(50) DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `about`, `place_name`, `country`, `city`, `budget`, `available_seat`, `start_date`, `finish_date`, `map`, `FAQ`, `menu_id`, `hotel_id`, `guide_username`, `photo`) VALUES
(1, 'Tour description 1', 'Place 1', 'Country1', 'City1', 500.00, 20, '2024-04-01', '2024-04-10', 'map1.jpg', 'FAQ 1', 1, 1, 'guide1', 0x746f7572312e706e67),
(2, 'Tour description 2', 'Place 2', 'Country2', 'City2', 700.00, 15, '2024-05-01', '2024-05-10', 'map2.jpg', 'FAQ 2', 2, 2, 'guide2', 0x746f7572322e706e67),
(3, 'Tour description 3', 'Place 3', 'Country3', 'City3', 600.00, 25, '2024-06-01', '2024-06-10', 'map3.jpg', 'FAQ 3', 3, 3, 'guide3', 0x746f7572332e706e67),
(4, 'Tour description 4', 'Place 4', 'Country4', 'City4', 800.00, 10, '2024-07-01', '2024-07-10', 'map4.jpg', 'FAQ 4', 4, 4, 'guide4', 0x746f7572342e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `enrolment_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `enrolment_id`, `tour_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `transport_id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `from_place` varchar(100) DEFAULT NULL,
  `to_place` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `finish_time` time DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `start_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transport_id`, `type`, `from_place`, `to_place`, `price`, `start_date`, `finish_date`, `finish_time`, `class`, `capacity`, `tour_id`, `start_time`) VALUES
(1, 'Flight', 'City1 Airport', 'City2 Airport', 300.00, '2024-04-01', '2024-04-10', '18:00:00', 'Economy', 200, 1, '00:00:00'),
(2, 'Train', 'City2 Train Station', 'City3 Train Station', 150.50, '2024-05-01', '2024-05-10', '14:00:00', 'First Class', 100, 2, '00:00:00'),
(3, 'Bus', 'City3 Bus Terminal', 'City4 Bus Terminal', 200.75, '2024-06-01', '2024-06-10', '08:00:00', 'Standard', 150, 3, '00:00:00'),
(4, 'Car Rental', 'City4', 'City1', 100.25, '2024-07-01', '2024-07-10', '09:00:00', 'Economy', 50, 4, '00:00:00'),
(5, 'Bus', 'Dhaka', 'Sylhet', 1200.00, '2024-02-28', '2024-03-13', '11:50:00', 'first', 42, 1, '08:53:00'),
(8, 'Place', 'Dhaka', 'Sydney', 140000.00, '2024-03-19', '2024-03-19', '02:09:00', 'eco', 12, 1, '02:09:00'),
(9, 'dytfuyf', 'uihpih', 'y9pyh', 85415.00, '2024-03-06', '2024-03-20', '10:59:00', 'uiphuh', 51, 2, '10:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `userpro`
--

CREATE TABLE `userpro` (
  `username` varchar(50) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `past_trip` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `pic` blob DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpro`
--

INSERT INTO `userpro` (`username`, `password`, `email`, `date_of_birth`, `phone`, `city`, `country`, `past_trip`, `gender`, `pic`, `language`, `name`) VALUES
('adib', '$2y$10$Slegi1bQ0Qwf9F4lOs4uP.YohVk9cJZbPU5rYCCF9HkM8stwDUpHy', 'ahasan@gmail.com', '2016-06-15', '01752776096', 'Chitagong', 'India', 'No', 'female', '', 'Hindi', 'Adib Hasan'),
('jhasan', '$2y$10$mBYuxx2.8DFeWmA.cYczcOz3L9chBhXiydBf/EzDFqU23mVTy1t/.', 'jhasan2201@gmail.com', '2023-12-26', '01646456244', 'Dhaka', 'Bangladesh', 'No', 'male', '', 'Bangla', 'Jehan Hasan'),
('user1', 'password1', 'user1@example.com', '1990-01-01', '123456789', 'City1', 'Country1', 'Trip1', 'Male', 0x706963312e6a7067, 'Bangla', ''),
('user2', 'password2', 'user2@example.com', '1995-05-05', '987654321', 'City2', 'Country2', 'Trip2', 'Female', 0x706963322e6a7067, 'Hindi', ''),
('user3', 'password3', 'user3@example.com', '1988-12-10', '654321987', 'City3', 'Country3', 'Trip3', 'Other', 0x706963332e6a7067, 'Urdu', ''),
('user4', 'password4', 'user4@example.com', '1980-08-20', '321654987', 'City4', 'Country4', 'Trip4', 'Male', 0x706963342e6a7067, 'English', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `breakfast_item`
--
ALTER TABLE `breakfast_item`
  ADD PRIMARY KEY (`breakfast`);

--
-- Indexes for table `dinner_item`
--
ALTER TABLE `dinner_item`
  ADD PRIMARY KEY (`dinner`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrolment_id`),
  ADD KEY `username` (`username`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guide_speak`
--
ALTER TABLE `guide_speak`
  ADD KEY `username` (`username`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `lunch_item`
--
ALTER TABLE `lunch_item`
  ADD PRIMARY KEY (`lunch`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_breakfast`
--
ALTER TABLE `menu_breakfast`
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `breakfast` (`breakfast`);

--
-- Indexes for table `menu_dinner`
--
ALTER TABLE `menu_dinner`
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `dinner` (`dinner`);

--
-- Indexes for table `menu_lunch`
--
ALTER TABLE `menu_lunch`
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `lunch` (`lunch`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pay_method`
--
ALTER TABLE `pay_method`
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `guide_username` (`guide_username`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `enrolment_id` (`enrolment_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `userpro`
--
ALTER TABLE `userpro`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrolment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userpro` (`username`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `enrollment_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `guide_speak`
--
ALTER TABLE `guide_speak`
  ADD CONSTRAINT `guide_speak_ibfk_1` FOREIGN KEY (`username`) REFERENCES `guide` (`username`);

--
-- Constraints for table `menu_breakfast`
--
ALTER TABLE `menu_breakfast`
  ADD CONSTRAINT `menu_breakfast_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `menu_breakfast_ibfk_2` FOREIGN KEY (`breakfast`) REFERENCES `breakfast_item` (`breakfast`);

--
-- Constraints for table `menu_dinner`
--
ALTER TABLE `menu_dinner`
  ADD CONSTRAINT `menu_dinner_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `menu_dinner_ibfk_2` FOREIGN KEY (`dinner`) REFERENCES `dinner_item` (`dinner`);

--
-- Constraints for table `menu_lunch`
--
ALTER TABLE `menu_lunch`
  ADD CONSTRAINT `menu_lunch_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `menu_lunch_ibfk_2` FOREIGN KEY (`lunch`) REFERENCES `lunch_item` (`lunch`);

--
-- Constraints for table `pay_method`
--
ALTER TABLE `pay_method`
  ADD CONSTRAINT `pay_method_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `tour_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `tour_ibfk_3` FOREIGN KEY (`guide_username`) REFERENCES `guide` (`username`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`enrolment_id`) REFERENCES `enrollment` (`enrolment_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
