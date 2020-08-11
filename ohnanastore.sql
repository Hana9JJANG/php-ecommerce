-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2020 at 07:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohnanastore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'Jay', 'jay@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_prod`
--

CREATE TABLE `delivery_prod` (
  `id` int(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_prod`
--

INSERT INTO `delivery_prod` (`id`, `description`, `name`, `image`, `price`) VALUES
(3, 'In Alchemists, two to four budding alchemists compete to discover the secrets of their mystical art. Points can be earned in various ways, but most points are earned by publishing theories – correct theories, that is — and therein lies the problem.', 'Alchemist', 'alchemist.jpg', '250.00'),
(4, 'Collecting all six Infinity Stones to power the Infinity Gauntlet and wreak havoc on the very fabric of reality.', 'Avengers', 'avengers.jpg', '300.00'),
(5, 'In this thrilling Fortnite edition of the Monopoly game, players claim locations, battle opponents, and avoid the Storm to survive. ', 'Monopoly : Fortnite', 'fortnite.jpg', '290.00'),
(6, 'Players in Hogwarts must navigate the castle\'s shifting staircases and secret passages – something in the book and movie that\'s represented in the game by small square path pieces that can change their locations in a central grid. ', 'Harry Potter Hogwarts', 'harrypotterlego.jpg', '180.00'),
(7, 'Mario and his pals as you advance them up the Mushroom Kingdom while challenging other players to gather the most coins and reach the castle at the top.', 'Super Mario', 'supermario.jpg', '150.00'),
(8, 'Star Wars: Rebellion is a board game of epic conflict between the Galactic Empire and Rebel Alliance for two to four players.', 'Starwars Bellion', 'starwarsbellion.jpg', '280.00'),
(9, 'Blokus (officially pronounced \"Block us\") is an abstract strategy game with transparent, Tetris-shaped, colored pieces that players are trying to play onto the board. The only caveat to placing a piece is that it may not lie adjacent to your other pi', 'Blokus', 'blokus.jpg', '100.00'),
(10, 'Made with premium quality materials, all inside a stunning gold-foil gift box.Play all your favorites Chess, Checkers, Dice games, Chinese Checkers, Backgammon Collection of 101 Classic Games', '101 Games', '101games.jpg', '80.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `prod_name` varchar(150) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cust_id` int(150) NOT NULL,
  `cust_phone` varchar(11) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(9, 'Jayxxxxsssdddd', 'ja@gmail.com', '01117975407', 'no50 jadafmkgrefw', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `delivery_prod`
--
ALTER TABLE `delivery_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_prod`
--
ALTER TABLE `delivery_prod`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
