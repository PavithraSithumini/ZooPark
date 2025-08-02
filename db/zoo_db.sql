-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 01:21 PM
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
-- Database: `zoo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `description`, `image`) VALUES
(1, 'Zebra', 'Zebras are equids, members of the horse family. They have excellent hearing and eyesight and can run at speeds of up to 35 miles per hour (56 kilometers per hour). They also have a powerful kick that can cause serious injury to a predator, like a lion, a hyena, or an African wild dog', 'uploads/4.jpg'),
(2, 'Panda', 'The giant panda (Ailuropoda melanoleuca), also known as the panda bear or simply panda, is a bear species endemic to China. It is characterised by its white coat with black patches around the eyes, ears, legs and shoulders. Its body is rotund; adult individuals weigh 100 to 115 kg and are typically 1.2 to 1.9 m long. It is sexually dimorphic, with males being typically 10 to 20% larger than females. A thumb is visible on its forepaw, which helps in holding bamboo in place for feeding.  ', 'uploads/panda baby.jpg'),
(3, 'Tiger', 'The tiger (Panthera tigris) is a member of the genus Panthera and the largest living cat species native to Asia. It has a powerful, muscular body with a large head and paws, a long tail and orange fur with black, mostly vertical stripes. It is traditionally classified into nine recent subspecies, though some recognise only two subspecies, mainland Asian tigers and the island tigers of the Sunda Islands.', 'uploads/massive-powerful-bengal-tiger-its-golden-fur-shimmering-dappled-sunlight.jpg'),
(4, 'Gorilla', 'The largest of the great apes, gorillas are stocky animals with broad chests and shoulders, large, human-like hands, and small eyes set into hairless faces. The two gorilla species live in equatorial Africa, separated by about 560 miles of Congo Basin forest. Each has a lowland and upland subspecies.', 'uploads/close-up-beautiful-gorilla-wild.jpg'),
(5, 'Asian Elephant', 'The Asian elephant (Elephas maximus), also known as the Asiatic elephant, is a species of elephant distributed throughout the Indian subcontinent and Southeast Asia, from India in the west to Borneo in the east, and Nepal in the north to Sumatra in the south. The Asian elephant is characterised by its long trunk with a single finger-like processing; large tusks in males; laterally folded large ears but smaller in contrast to African elephants; and wrinkled grey skin.', 'uploads/photorealistic-scene-wild-elephants (1).jpg'),
(6, 'Sambar Deer', 'The Rusa unicolor is the largest oriental deer (common names: the Sambar deer in English and “Gona” in Sinhala) belonging to the order Artiodactyla, family Cervidae, and subfamily Cervinae.', 'uploads/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(4) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Name`, `Description`, `Image`) VALUES
(1, 'October Appreciation Month', 'We\'re celebrating members in October with discounts and special offers. Here\'s what you can enjoy: \r\n* Discounted Attractions\r\n* Bring a friend for Free\r\n* Grandparents weekend', './images/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `full_name` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `phone_number` text DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`full_name`, `email`, `password`, `phone_number`, `address`) VALUES
('Pavithra Sithumini Bandara', 'pavithrashps@gmail.com', '$2y$10$S8H7tZrwNkVYtzCl2Y1ok.LKyx15jKFd84NQmBv0e/6sNcBjj/U/u', '0721587703', '118B, Gampola road, Weligalla.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','volunteer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'password', 'admin'),
(2, 'pavithra@gmail.com', '12345', 'volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
