-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 08:05 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmaytinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `BrandId` int(11) NOT NULL,
  `BrandName` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL,
  `Updated` datetime NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`BrandId`, `BrandName`, `Description`, `Image`, `Status`, `Updated`, `Created`) VALUES
(1, 'Dell', 'Không có', 'http://tomorrowsoffice.com/wp-content/uploads/2016/06/dell-logo.png', 1, '2018-01-25 13:57:38', '2018-01-25 13:57:38'),
(2, 'Asus', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 05:09:13', '2018-01-25 03:13:10'),
(3, 'Asus', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 15:32:05', '2018-01-25 15:32:05'),
(4, 'Acer', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 15:34:33', '2018-01-25 15:34:33'),
(5, 'Apple(Macbook)', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 15:34:33', '2018-01-25 15:34:33'),
(6, 'HP', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 15:34:34', '2018-01-25 15:34:34'),
(7, 'Lenovo', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 15:34:34', '2018-01-25 15:34:34'),
(8, 'MSI', 'Không', 'Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-01-25 15:34:34', '2018-01-25 15:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `ComId` int(11) NOT NULL,
  `ComName` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Status` int(11) NOT NULL,
  `Posistion` int(11) NOT NULL,
  `BrandId` int(11) NOT NULL,
  `Updated` datetime NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`ComId`, `ComName`, `Description`, `Image`, `Price`, `Status`, `Posistion`, `BrandId`, `Updated`, `Created`) VALUES
(2, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 14:12:29', '2018-01-25 14:12:29'),
(3, '1Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 14:13:40', '2018-01-25 14:13:40'),
(4, '2Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 14:13:43', '2018-01-25 14:13:43'),
(5, '3Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 14:13:46', '2018-01-25 14:13:46'),
(6, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 14:46:44', '2018-01-25 14:46:44'),
(7, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:28:51', '2018-01-25 15:28:51'),
(8, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(9, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(10, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(11, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(12, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(13, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(14, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(15, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(16, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:23', '2018-01-25 15:29:23'),
(17, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(18, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(19, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(20, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(21, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(22, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(23, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(24, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(25, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(26, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(27, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(28, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(29, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(30, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:24', '2018-01-25 15:29:24'),
(31, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:25', '2018-01-25 15:29:25'),
(32, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:25', '2018-01-25 15:29:25'),
(33, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:25', '2018-01-25 15:29:25'),
(34, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:25', '2018-01-25 15:29:25'),
(35, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:25', '2018-01-25 15:29:25'),
(36, 'Dell latinute 1155', 'Không có mô tả', 'Content/Images/Icon/Latitude_polaris_sub_cat_franchise_module_carousel_1_win8_alt.jpg', '12000000', 1, 1, 1, '2018-01-25 15:29:25', '2018-01-25 15:29:25'),
(37, 'Phân quyền User', 'áddsa', 'TamThoi', '1', 1, 1, 1, '2018-02-05 16:41:33', '2018-02-05 16:41:33'),
(38, 'Phân quyền User', 'áddsa', 'TamThoi', '1', 1, 1, 1, '2018-02-05 16:42:17', '2018-02-05 16:42:17'),
(39, 'Phân quyền User', 'áddsa', 'TamThoi', '1', 1, 1, 1, '2018-02-05 16:42:48', '2018-02-05 16:42:48'),
(40, 'Phân quyền User', 'áddsa', 'TamThoi', '1', 1, 1, 1, '2018-02-05 16:51:58', '2018-02-05 16:51:58'),
(41, 'Phân quyền User', 'áddsa', 'TamThoi', '1', 1, 1, 1, '2018-02-05 16:52:16', '2018-02-05 16:52:16'),
(42, 'Phân quyền User', 'áddsa', 'TamThoi', '1', 1, 1, 1, '2018-02-05 16:52:37', '2018-02-05 16:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `computers_map_gallerys`
--

CREATE TABLE `computers_map_gallerys` (
  `ComId` int(11) NOT NULL,
  `GalleryId` int(11) NOT NULL,
  `Posittion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `ComId` int(11) NOT NULL,
  `CPU` text COLLATE utf8_unicode_ci NOT NULL,
  `RAM` text COLLATE utf8_unicode_ci NOT NULL,
  `DISK` text COLLATE utf8_unicode_ci NOT NULL,
  `SCREEN` text COLLATE utf8_unicode_ci NOT NULL,
  `VGA` text COLLATE utf8_unicode_ci NOT NULL,
  `PORT` text COLLATE utf8_unicode_ci NOT NULL,
  `HDH` text COLLATE utf8_unicode_ci NOT NULL,
  `WG` text COLLATE utf8_unicode_ci NOT NULL,
  `MAIN` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `GalleryId` int(11) NOT NULL,
  `GalleryName` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`ComId`),
  ADD KEY `BrandId` (`BrandId`);

--
-- Indexes for table `computers_map_gallerys`
--
ALTER TABLE `computers_map_gallerys`
  ADD KEY `GalleryId` (`GalleryId`),
  ADD KEY `ComId` (`ComId`) USING BTREE;

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`ComId`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`GalleryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `ComId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `GalleryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `computers`
--
ALTER TABLE `computers`
  ADD CONSTRAINT `computers_ibfk_1` FOREIGN KEY (`BrandId`) REFERENCES `brands` (`BrandId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `computers_map_gallerys`
--
ALTER TABLE `computers_map_gallerys`
  ADD CONSTRAINT `computers_map_gallerys_ibfk_2` FOREIGN KEY (`GalleryId`) REFERENCES `gallerys` (`GalleryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `computers_map_gallerys_ibfk_3` FOREIGN KEY (`ComId`) REFERENCES `computers` (`ComId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`ComId`) REFERENCES `computers` (`ComId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
