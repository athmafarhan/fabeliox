-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 11:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabelio`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(24) DEFAULT NULL,
  `price` int(7) DEFAULT NULL,
  `dimension` varchar(13) DEFAULT NULL,
  `colours` varchar(44) DEFAULT NULL,
  `material` varchar(12) DEFAULT NULL,
  `image` varchar(89) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `dimension`, `colours`, `material`, `image`) VALUES
(1, 'Sofa 2 dudukan Vienna', 3899000, '162 x 95 x 86', 'custard vienna, graphite vienna, ruby vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/w/i/wina_2_seater_sofa__custard__1_1.jpg'),
(2, 'Sofa Tempat Tidur Mochi', 3500000, '160 x 95 x 90', 'custard vienna, graphite vienna, ruby vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/r/2/r2710.jpg'),
(3, 'Sofa 2 dudukan Zelado', 4299000, '162 x 95 x 86', 'graphite vienna, teal vienna', 'hollow steel', 'https://fabelio.com/media/catalog/product/z/e/zelado-2-seater-sofa---custard-01.jpg'),
(4, 'Sofa 2 dudukan Toril', 2899000, '160 x 95 x 90', 'blue jay, ruby vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/t/o/Toril_2_Seater_Sofa_(Paradise)_1.jpg'),
(5, 'Sofa Tempat Tidur Deacon', 3299000, '150 x 90 x 80', 'custard vienna, graphite vienna', 'hollow steel', 'https://fabelio.com/media/catalog/product/d/e/deacon_white_1_1_1.jpg'),
(6, 'Sofa Java', 3869100, '142 x 90 x 80', 'custard vienna, graphite vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/t/a/Taby_Java_2_Seater_Living_Set_(Sugar)_1.jpg'),
(7, 'Sofa 1 dudukan Hughes', 2500000, '90 x 82 x 58', 'custard vienna, graphite vienna, ruby vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/h/u/Hughes_Armchair_(Wood)_0.jpg'),
(8, 'Sofa 1 dudukan Taby', 2399000, '90 x 82 x 58', 'brown vienna, ruby vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/t/a/Taby_Armchair_(Jezebel)_1.jpg'),
(9, 'Sofa 1 dudukan Zoey', 2399000, '90 x 82 x 58', 'brown vienna, ruby vienna', 'hollow steel', 'https://fabelio.com/media/catalog/product/k/u/Kursi_Zoey_Armchair_(Brown)_0.jpg'),
(10, 'Sofa 1 dudukan Vienna', 2199000, '90 x 82 x 58', 'custard vienna, graphite vienna, ruby vienna', 'solid wood', 'https://fabelio.com/media/catalog/product/w/i/wina_armchair__graphite__1_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
