-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 05:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candy_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'devangi', '123'),
(2, 'khushi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pro_id` int(5) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pro_id`, `pro_name`, `quantity`, `price`, `total`) VALUES
(1, 'Strawberry Candy', 2, '35', 70),
(2, 'Colourful Design Candy', 4, '40', 160),
(3, 'Sprinkle Special Candy', 1, '50', 50),
(4, 'Ice Cream Cone', 1, '40', 40),
(5, 'Raspberry Candy', 1, '30', 30),
(6, 'Raspberry Candy', 1, '30', 30),
(7, 'Raspberry Candy', 1, '30', 30),
(8, 'Raspberry Candy', 1, '30', 30),
(9, 'Raspberry Candy', 1, '30', 30),
(10, 'Raspberry Candy', 1, '30', 30),
(11, 'Almond Candy', 1, '65', 65),
(12, 'Chocolate Macarons', 1, '60', 60),
(13, 'Chocolate Macarons', 1, '60', 60),
(14, 'Chocolate Macarons', 1, '60', 60),
(15, 'Chocolate Macarons', 1, '60', 60),
(16, 'Chocolate Macarons', 1, '60', 60);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Waffle'),
(2, 'Cupcakes'),
(3, 'Macarons'),
(4, 'Candies'),
(5, 'Cakes'),
(6, 'Cones'),
(7, 'Ice-Cream'),
(8, 'Sakes');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(30) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_date`) VALUES
(1, 'Kite festival', '2024-01-14'),
(2, 'Kite festival', '2024-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(30) NOT NULL,
  `user_question` varchar(300) NOT NULL,
  `admin_reply` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `user_question`, `admin_reply`) VALUES
(1, 'Can you give me customize Dessert? ', 'Yahh!! of course.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `message` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `name`, `email`, `phone_no`, `message`) VALUES
(1, 'devangi', 'devangi1010@gamil.com', 6543678904, 'This is best website for all candy lovers...');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(30) NOT NULL,
  `offer_name` varchar(150) NOT NULL,
  `offer_dicount` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_name`, `offer_dicount`, `start_date`, `end_date`) VALUES
(6, 'summer', 30, '2024-05-16', '2024-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_description` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_description`, `product_price`, `product_image`) VALUES
(2, 5, 'Chocolate Cake', 'Made with organic chocolate.', 650, 'images/cake2.jpg'),
(3, 5, 'Strawberry Cake', 'Made with strawberry and crem.', 700, 'images/cake3.jpg'),
(4, 5, 'Black - Forest cake', 'this is made with cremy chocolate.', 750, 'images/cake5.jpg'),
(5, 5, 'Banana Cake', 'This is made with banana.', 570, 'images/cake7.jpg'),
(6, 5, 'Flourless Orange cake', 'This is made with orange.', 700, 'images/cake4.jpg'),
(7, 5, 'Strawberry Cake', 'This is made with strawberry.', 650, 'images/cake6.jpg'),
(8, 2, 'Chocolate Cupcake', 'This is made with origanal chocolate.', 60, 'images/ck1.jpg'),
(9, 2, 'Vanilla Cupcake', 'This is made with vanilla flavore.', 60, 'images/ck2.jpg'),
(10, 2, 'Frosty Cupcake', 'This is made with chocolate.', 70, 'images/ck5.webp'),
(11, 2, 'Strawberry CupCake', 'This made with strawberry.', 80, 'images/ck15.jpg'),
(12, 2, 'Strawberry CupCake', 'This is made with Strawberry.', 80, 'images/ck4.jpg'),
(13, 2, 'Gourment Frosting', 'This is best for cupcake lovers.', 80, 'images/cupck.jpg'),
(14, 2, 'Peanut Butter Cupcake', 'This is made with peanut butter.', 60, 'images/ck13.jpg'),
(15, 2, 'Strawberry CupCake', 'This is made with strawberry.', 90, 'images/ck16.jpg'),
(16, 3, 'Chocolate Macarons', 'This is madw with chocolate.', 60, 'images/mac10.jpg'),
(17, 3, 'Milky Macrons', 'This is made with milk cream.', 80, 'images/mac9.jpg'),
(18, 3, 'Raspberry macaroon', 'This is made with Raspberry.', 140, 'images/mac11.jpg'),
(19, 3, 'Orange Macron', 'This is made with orange.', 160, 'images/mac1.jpg'),
(20, 3, 'Pistachio macaron', 'This is different flavor.', 180, 'images/mac2.jpeg'),
(21, 3, 'Chocolate macaron', 'This is made with Chocolate.', 120, 'images/mac3.jpg'),
(23, 3, 'Lemon macaron', 'This is made with Lemon Flavours.', 135, 'images/mac6.jpg'),
(24, 3, 'Pista macrons', 'This is made with pista flavours.', 170, 'images/mac13.jpg'),
(25, 3, 'Raspberry macaroon', 'This is made with Raspberry.', 170, 'images/mac12.jpg'),
(26, 3, 'Cremy Macrons', 'This is made with Cream.', 120, 'images/mac8.jpg'),
(27, 3, 'Dark Chocolate macrons', 'This is made with dark Chocolate.', 165, 'images/mac5.jpg'),
(28, 3, 'Mix Fruit macrons', 'This is made with mix fruits.', 180, 'images/macaron.jpg'),
(29, 8, 'Vanilla Sake', 'This is made with Vanilla.', 120, 'images/sk7.jpg'),
(30, 8, 'Blueberry Milkshake', 'This is Made with Blueberry.', 150, 'images/sk2.webp'),
(31, 8, 'Salted Caramel Sake', 'This is best flavours.', 140, 'images/sk8.webp'),
(32, 8, 'Chocolate Milkshake', 'This is made with Chocolate.', 140, 'images/sk3.webp'),
(33, 8, 'Oreo Milkshake', 'This is made with Oreo.', 160, 'images/sk1.jpg'),
(34, 8, 'Orange Milksake', 'This is made with orange.', 125, 'images/sk5.jpg'),
(35, 8, 'Strawberry Milkshake', 'This is made with Strawberry.', 160, 'images/sk4.jpg'),
(36, 8, 'Blueberry Milksake.', 'This is made with Blueberry.', 150, 'images/sk6.jpg'),
(37, 7, 'Vanilla ice-cream', 'This is made with vanilla .', 60, 'images/ice3.jpg'),
(38, 7, 'Chocolate ice-cream', 'This is made with Chocolate.', 80, 'images/ice6.jpg'),
(39, 7, 'Rocky Road ice-cream', 'This is made with different flavrous.', 120, 'images/ice4.jpg'),
(40, 7, 'Chocolate Chip ', 'This is made with different chocolate.', 130, 'images/ice8.webp'),
(41, 7, 'Pineapple ice-cream', 'This is made with pineapple.', 120, 'images/ice5.jpg'),
(42, 7, 'Mix-Fruits Ice-Cream', 'This is made with mix fruits.', 130, 'images/ice2.webp'),
(43, 7, 'Mint Chocolate Chip.', 'This is best ice cream flavours.', 140, 'images/ice13.webp'),
(44, 7, 'Strawberry ice-cream', 'This is made with strawberry.', 110, 'images/candy7.jpg'),
(45, 4, 'Chocolate Fruit candy', 'This is made with fruits', 60, 'images/candy15.jpg'),
(46, 4, 'Pineapple candy', 'This is made  with pineapple.', 50, 'images/candy25.jpg'),
(47, 4, 'Strawberry candy', 'This is made with Strawberry.', 70, 'images/candy3.jpg'),
(48, 4, 'Milk Cream candy', 'This is made with crem and milk.', 40, 'images/candy17.jpg'),
(49, 4, 'Black Raspberry Chip', 'This is made with black raspberry.', 80, 'images/candy16.jpg'),
(50, 4, 'Cherry Vanilla', 'This is made with Cherry.', 70, 'images/candy18.jpg'),
(51, 4, 'Mint Chocolate Chip', 'This is best for candy lovers.', 90, 'images/candy39.jpg'),
(52, 4, 'Nuts candy', 'This is made with original nuts and fruits. ', 120, 'images/candy50.jpg'),
(53, 6, 'Chocolate cones', 'This is made with chocolates.', 60, 'images/candy6.jpg'),
(54, 6, 'Mix Fruits cone', 'This is made with mx Fruits.', 60, 'images/candy10.jpg'),
(55, 6, 'Mix Cream Cone', 'This is our special item.', 140, 'images/candy30.jpg'),
(56, 6, 'Dream Cone', 'This is best for cone lovers.', 130, 'images/candy12.jpg'),
(57, 1, 'Strawberry waffle', 'This is made with strawberry.', 120, 'images/waffle.jpg'),
(58, 1, 'Vanilla Waffle', 'This is made with Vanilla.', 130, 'images/wf3.jpg'),
(59, 1, 'Mix fruit Waffle', 'This is made with mix fruits.', 140, 'images/wf4.jpg'),
(60, 1, 'Strawberry waffle', 'Thisis made with Strawberry.', 150, 'images/wf5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `cpsw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `psw`, `cpsw`) VALUES
(1, 'khushi', 'khushi@gmail.com', '12345', '12345'),
(2, 'sniffy', 'sniffy@gmail.com', '1010', '1010'),
(3, 'devangi', 'devangi@gmail.com', '454', '454'),
(4, 'devangi', 'devangi1010@gamil.com', '1010', '1010');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `password`) VALUES
(1, 'khushi', '12345'),
(2, 'khushi', '12345'),
(3, 'sniffy', '1010'),
(4, 'devangi', '454'),
(5, 'devangi', '1010'),
(6, 'De', ''),
(7, 'devangi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `pro_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
