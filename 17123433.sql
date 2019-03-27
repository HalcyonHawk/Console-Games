-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 11:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `17123433`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `username` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`username`, `password`, `name`) VALUES
(11223344, '5f4dcc3b5aa765d61d8327deb882cf99', 'Noah'),
(12123434, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'John'),
(12341234, '21232f297a57a5a743894a0e4a801fc3', 'Oliver');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameID` varchar(20) NOT NULL,
  `consoleName` varchar(50) NOT NULL,
  `gameName` varchar(50) NOT NULL,
  `imageName` varchar(100) NOT NULL,
  `price` float(20,0) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `ageRating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `consoleName`, `gameName`, `imageName`, `price`, `genre`, `ageRating`) VALUES
('262867_xb1_a', 'XboxOne', 'Kingdom Hearts 3', 'gameImages/262867_xb1_a.webp', 50, 'Adventure', 12),
('262977_ps4_a', 'PS4', 'The Witcher 3: Wild Hunt', 'gameImages/262977_ps4_a.png', 25, 'Adventure', 18),
('263280_xb1_a', 'XboxOne', 'The Evil Within', 'gameImages/263280_xb1_a.png', 8, 'Horror', 18),
('269080_xb1_a', 'XboxOne', 'Zoo Tycoon', 'gameImages/269080_xb1_a.png', 15, 'Simulation', 3),
('400761_ps4_a', 'PS4', 'Need for Speed', 'gameImages/400761_ps4_a.png', 15, 'Racing', 12),
('562944_ps4_a', 'PS4', 'Marvel\'s Spider-Man', 'gameImages/562944_ps4_a.webp', 46, 'Adventure', 16),
('564129_ps4_a', 'PS4', 'Resident Evil 7 Biohazard', 'gameImages/564129_ps4_a.png', 15, 'Horror', 18),
('568647_ps4_a', 'PS4', 'Nier:Automata', 'gameImages/568647_ps4_a.webp', 20, 'Adventure', 18),
('576553_ps4_a', 'PS4', 'Star Wars: Battlefront 2', 'gameImages/576553_ps4_a.webp', 15, 'Adventure', 16),
('592947_xb1_a', 'XboxOne', 'Farming Simulator 19', 'gameImages/592947_xb1_a.webp', 20, 'Simulation', 3),
('638003_ps4_a', 'PS4', 'Overcooked', 'gameImages/638003_ps4_a.png', 15, 'Family', 3),
('655846_swtch_a', 'Switch', 'Mario Kart 8 Deluxe', 'gameImages/655846_swtch_a.webp', 42, 'Racing', 3),
('655849_swtch_a', 'Switch', 'Splatoon 2', 'gameImages/655849_swtch_a.webp', 43, 'Shooter', 7),
('655884_swtch_a', 'Switch', '1-2-Switch', 'gameImages/655884_swtch_a.png', 35, 'Family', 3),
('655889_swtch_a', 'Switch', 'Super Mario Odyssey', 'gameImages/655889_swtch_a.webp', 40, 'Adventure', 7),
('655908_ps4_a', 'PS4', 'Red Dead Redemption 2', 'gameImages/655908_ps4_a.webp', 50, 'Adventure', 18),
('658956_xb1_a', 'XboxOne', 'Resident Evil 7 Biohazard', 'gameImages/658956_xb1_a.png', 15, 'Horror', 18),
('673397_swtch_a', 'Switch', 'Fire Emblem Warriors', 'gameImages/673397_swtch_a.webp', 35, 'Adventure', 12),
('673517_swtch_a', 'Switch', 'Lego City Undercover', 'gameImages/673517_swtch_a.webp', 20, 'Adventure', 7),
('692094_swtch_a', 'Switch', 'Monopoly', 'gameImages/692094_swtch_a.webp', 40, 'Family', 3),
('692129_xb1_a', 'XboxOne', 'Town of Light', 'gameImages/692129_xb1_a.png', 10, 'Horror', 18),
('695687_ps4_a', 'PS4', 'Just Dance 2018', 'gameImages/695687_ps4_a.webp', 20, 'Party', 3),
('695708_ps4_a', 'PS4', 'The Crew 2', 'gameImages/695708_ps4_a.webp', 20, 'Racing', 12),
('696106_swtch_a', 'Switch', 'Donkey Kong Country Tropical Freeze', 'gameImages/696106_swtch_a.webp', 45, 'Adventure', 3),
('696154_swtch_a', 'Switch', 'Kirby Star Allies', 'gameImages/696154_swtch_a.webp', 45, 'Adventure', 3),
('696169_swtch_a', 'Switch', 'Hyrule Warriors: Definitive Edition', 'gameImages/696169_swtch_a.png', 45, 'Adventure', 12),
('696172_swtch_a', 'Switch', 'Mario Tennis Aces', 'gameImages/696172_swtch_a.webp', 42, 'Sports', 7),
('702415_ps4_a', 'PS4', 'The Sims 4', 'gameImages/702415_ps4_a.webp', 20, 'Simulation', 12),
('711006_xb1_a', 'XboxOne', 'Rocket League Collectors Edition', 'gameImages/711006_xb1_a.webp', 18, 'Sports', 3),
('723668_xb1_a', 'XboxOne', 'Spyro Reignited Trilogy', 'gameImages/723668_xb1_a.webp', 25, 'Adventure', 7),
('723671_ps4_a', 'PS4', 'Spyro Reignited Trilogy', 'gameImages/723671_ps4_a.webp', 30, 'Adventure', 7),
('723731_ps4_a', 'PS4', 'Call of Duty Black Ops 4', 'gameImages/723731_ps4_a.webp', 30, 'Shooter', 18),
('723734_xb1_a', 'XboxOne', 'Call of Duty: Black Ops 4', 'gameImages/723734_xb1_a.webp', 48, 'Shooter', 18),
('724562_swtch_a', 'Switch', 'Sonic Mania Plus', 'gameImages/724562_swtch_a.webp', 38, 'Adventure', 3),
('727878_ps4_a', 'PS4', 'Fifa 19', 'gameImages/727878_ps4_a.webp', 40, 'Sports', 3),
('727906_xb1_a', 'XboxOne', 'Fifa 19', 'gameImages/727906_xb1_a.webp', 40, 'Sports', 3),
('727918_swtch_a', 'Switch', 'Fifa 19', 'gameImages/727918_swtch_a.webp', 35, 'Sports', 3),
('727926_xb1_a', 'XboxOne', 'Battlefield V', 'gameImages/727926_xb1_a.webp', 40, 'Shooter', 16),
('728268_ps4_a', 'PS4', 'Team Sonic Racing', 'gameImages/728268_ps4_a.png', 35, 'Racing', 7),
('728304_ps4_a', 'PS4', 'Fallout 76', 'gameImages/728304_ps4_a.webp', 35, 'Adventure', 18),
('729058_ps4_a', 'PS4', 'NBA 2K19', 'gameImages/729058_ps4_a.webp', 30, 'Sports', 3),
('729078_ps4_a', 'PS4', 'WWE 2K19', 'gameImages/729078_ps4_a.webp', 25, 'Sports', 16),
('729123_xb1_a', 'XboxOne', 'Red Dead Redemption 2', 'gameImages/729123_xb1_a.webp', 50, 'Adventure', 18),
('729356_xb1_a', 'XboxOne', 'Assassin\'s Creed: Odyssey', 'gameImages/729356_xb1_a.webp', 30, 'Adventure', 18),
('729388_xb1_a', 'XboxOne', 'Forza Horizon 4', 'gameImages/729388_xb1_a.webp', 30, 'Racing', 3),
('729472_xb1_a', 'XboxOne', 'Just Cause 4', 'gameImages/729472_xb1_a.webp', 40, 'Adventure', 18),
('729502_xb1_a', 'XboxOne', 'Overcooked 2', 'gameImages/729502_xb1_a.webp', 18, 'Party', 3),
('731180_swtch_a', 'Switch', 'Big Buck Hunter', 'gameImages/731180_swtch_a.webp', 30, 'Simulation', 16),
('731206_xb1_a', 'XboxOne', 'Nickelodeon Kart Racers', 'gameImages/731206_xb1_a.webp', 20, 'Racing', 3),
('731210_swtch_a', 'Switch', 'Nickelodeon Kart Racers', 'gameImages/731210_swtch_a.webp', 35, 'Racing', 3),
('733638_ps4_a', 'PS4', 'Farming Simulator 19', 'gameImages/733638_ps4_a.webp', 35, 'Simulation', 3),
('735934_swtch_a', 'Switch', 'The Escapists 2', 'gameImages/735934_swtch_a.webp', 25, 'Simulation', 7),
('735973_xb1_a', 'XboxOne', 'Crayola Scoot', 'gameImages/735973_xb1_a.webp', 25, 'Family', 3),
('737222_xb1_a', 'XboxOne', 'Carnival Games', 'gameImages/737222_xb1_a.webp', 30, 'Party', 3),
('737747_ps4_a', 'PS4', 'Until Dawn', 'gameImages/737747_ps4_a.webp', 16, 'Horror', 18),
('739385_ps4_a', 'PS4', 'F1 2018', 'gameImages/739385_ps4_a.webp', 25, 'Racing', 3),
('739387_xb1_a', 'XboxOne', 'F1 2018', 'gameImages/739387_xb1_a.webp', 30, 'Racing', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
