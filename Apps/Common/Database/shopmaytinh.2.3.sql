-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 11:13 AM
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
  `Updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`BrandId`, `BrandName`, `Description`, `Image`, `Status`, `Updated`, `Created`) VALUES
(1, 'Dell', 'Không có', 'http://tomorrowsoffice.com/wp-content/uploads/2016/06/dell-logo.png', 1, '2018-01-25 13:57:38', '2018-01-25 13:57:38'),
(2, 'Asus', 'Không', 'Public/Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-03-04 09:59:16', '2018-01-25 03:13:10'),
(4, 'Acer', 'Không', 'Public/Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-03-04 09:59:24', '2018-01-25 15:34:33'),
(5, 'Apple(Macbook)', 'Không', 'Public/Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-03-04 09:59:31', '2018-01-25 15:34:33'),
(6, 'HP', 'Không', 'Public/Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-03-04 09:59:39', '2018-01-25 15:34:34'),
(7, 'Lenovo', 'Không', 'Public/Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-03-04 09:59:46', '2018-01-25 15:34:34'),
(8, 'MSI', 'Không', 'Public/Content/Images/Icon/asus-logo-brand-mobile-314fc0c447dab08c-256x256.png', 1, '2018-03-04 09:59:54', '2018-01-25 15:34:34'),
(10, 'Tự chế', 'Không có mô tả', 'Public/Content/Images/Icon/28468116_1386524054785068_4681098894092872271_n.jpg', 1, '2018-03-04 10:29:51', '2018-03-04 10:28:16');

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
  `Updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`ComId`, `ComName`, `Description`, `Image`, `Price`, `Status`, `Posistion`, `BrandId`, `Updated`, `Created`) VALUES
(2, 'Dell latinute 1155', '<p>&nbsp;</p>\r\n<h2 style=\"margin: 0px; padding: 0px; word-wrap: break-word; font-size: 38px; line-height: 38px; font-weight: normal; font-family: PFSquareSansProMedium, Arial, sans-serif;\">C&ocirc;ng nghệ touch &ldquo;si&ecirc;u mượt&rdquo;, kết nối hữu hiệu với Ultrabook touch từ Samsung</h2>\r\n<h3 style=\"margin: 0px 0px 8px; padding: 0px; word-wrap: break-word; font-size: 12px; line-height: 1.2; color: rgb(1, 1, 1); font-family: Arial, sans-serif;\">rải nghiệm &ldquo;đa chạm&rdquo; trọn vẹn</h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; word-wrap: break-word; line-height: 1.5; font-family: Arial, sans-serif;\">Chỉ cần &ldquo;chạm nhẹ v&agrave; trải nghiệm ngay&rdquo; với Samsung Series 5 Ultra. Trải nghiệm th&uacute; vị n&agrave;y được thực hiện dễ d&agrave;ng tr&ecirc;n m&agrave;n h&igrave;nh 13.3in HD Super Bright nhờ c&ocirc;ng nghệ tương t&aacute;c điểm của Win 8, cảm gi&aacute;c chạm &ldquo;mượt&rdquo; m&agrave; v&agrave; ho&agrave;n ho&agrave;n được sử dụng hiệu quả tr&ecirc;n tất cả 10 ng&oacute;n tay. Bạn sẽ tận hưởng cảm gi&aacute;c lướt nhẹ s&agrave;nh điệu, d&ugrave; l&agrave;m việc, hay giải tr&iacute; cả ng&agrave;y d&agrave;i với c&aacute;c ứng dụng (apps) v&agrave; những tr&ograve; chơi hấp dẫn nhất.</p>\r\n<h3 style=\"margin: 0px 0px 8px; padding: 0px; word-wrap: break-word; font-size: 12px; line-height: 1.2; color: rgb(1, 1, 1); font-family: Arial, sans-serif;\">Lưu trữ lớn cho mọi thứ bạn cần</h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; word-wrap: break-word; line-height: 1.5; font-family: Arial, sans-serif;\">Việc sở hữu một chiếc notebook di động si&ecirc;u mỏng trước giờ lu&ocirc;n đồng nghĩa với việc bạn phải &ldquo; hy sinh&rdquo; một lượng lưu trữ đ&aacute;ng kể. Tuy nhi&ecirc;n, notebook si&ecirc;u mỏng Samsung Series 5 ULTRA lại được thiết kế với dung lượng lưu trữ khổng lồ. Ổ đĩa cứng với khả năng lưu trữ dữ liệu l&ecirc;n đến 500GB gi&uacute;p người d&ugrave;ng tận hưởng &acirc;m nhạc, phim ảnh thỏa th&iacute;ch.</p>\r\n<h3 style=\"margin: 0px 0px 8px; padding: 0px; word-wrap: break-word; font-size: 12px; line-height: 1.2; color: rgb(1, 1, 1); font-family: Arial, sans-serif;\">Thiết kế si&ecirc;u di động</h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; word-wrap: break-word; line-height: 1.5; font-family: Arial, sans-serif;\">Với những người thường xuy&ecirc;n di chuyển, việc phải mang theo b&ecirc;n người một chiếc notebook cồng kềnh bao giờ cũng l&agrave; một g&aacute;nh nặng lớn.Thấu hiểu điều đ&oacute;, Samsung mang đến bạn Series 5 ULTRA c&oacute; thiết kế rất mỏng (19.9mm), nhẹ (1.69 kg) - th&iacute;ch hợp cho cuộc sống năng động h&agrave;ng ng&agrave;y của bạn. Với Samsung Series 5 ULTRA, bạn sẽ lu&ocirc;n c&oacute; văn ph&ograve;ng của m&igrave;nh, ở mọi l&uacute;c, mọi nơi.</p>', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-03-04 10:33:15', '2018-01-25 14:12:29'),
(4, '2Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 14:13:43'),
(5, '3Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 14:13:46'),
(6, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 14:46:44'),
(7, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:28:51'),
(8, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(9, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(10, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(11, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(12, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(13, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(14, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(15, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(16, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:23'),
(17, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(18, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(19, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(20, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(21, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(22, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(23, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(24, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(25, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(26, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(27, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(28, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(29, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(30, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:24'),
(31, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:25'),
(32, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:25'),
(33, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:25'),
(34, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:25'),
(35, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:25'),
(36, 'Dell latinute 1155', 'Không có mô tả', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '12000000', 1, 1, 1, '2018-02-28 16:12:57', '2018-01-25 15:29:25'),
(37, 'Phân quyền User', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-05 16:41:33'),
(38, 'Phân quyền User', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-05 16:42:17'),
(39, 'Phân quyền User', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-05 16:42:48'),
(40, 'Phân quyền User', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-05 16:51:58'),
(41, 'Phân quyền User', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-05 16:52:16'),
(42, 'Phân quyền User', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-05 16:52:37'),
(43, 'sad', 'dsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '2', 3, 4, 4, '2018-02-28 16:12:57', '2018-02-09 14:07:25'),
(46, 'LUONG', 'sad', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '4', 4, 4, 4, '2018-02-28 16:12:57', '2018-02-09 16:43:19'),
(48, 'LUONG', 'saSA34', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 2, 1, 2, '2018-02-28 16:12:57', '2018-02-09 17:11:25'),
(52, 'LUONG10', 'saSA', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-09 17:17:57'),
(54, 'LUONG123456', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 2, 1, '2018-02-28 16:12:57', '2018-02-12 14:25:43'),
(55, 'LUONG123456', 'saSA', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 3, 1, '2018-02-28 16:12:57', '2018-02-12 14:50:30'),
(56, 'LUONG', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 3, 1, '2018-02-28 16:12:57', '2018-02-12 14:55:53'),
(57, 'LUONG', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 4, 1, '2018-02-28 16:12:57', '2018-02-12 15:05:08'),
(58, 'ádsda', 'ádsda', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-25 03:20:40'),
(59, 'LUONG', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '2', 2, 2, 2, '2018-02-28 16:12:57', '2018-02-25 03:23:02'),
(62, 'dsasad', 'áddsa', '', '1', 1, 1, 1, '2018-02-28 21:50:40', '2018-02-28 21:50:40'),
(63, 'LUONG', 'saSA', 'Public/Content/Images/Icon/27999023_1603743416397039_551924873_o.jpg', '2', 2, 2, 2, '2018-02-28 21:56:13', '2018-02-28 21:56:13'),
(65, 'LUONG', 'saSA', 'Public/Content/Images/Icon/cv_template7.png', '2', 4, 8, 6, '2018-03-01 00:16:31', '2018-03-01 00:16:31'),
(66, 'dda', 'adad', 'Public/Content/Images/Icon/27999023_1603743416397039_551924873_o.jpg', '1000', 1, 3, 2, '2018-03-04 00:08:45', '2018-03-01 14:11:11'),
(67, 'Test1ádasd', 'saddddddddddđâsdsad', 'Public/Content/Images/Icon/27393760_1590727467698634_800352517_o.jpg', '1000', 0, 2, 5, '2018-03-04 00:08:15', '2018-03-03 16:18:46'),
(76, 'xczzcx', 'cczxczxcxzc', 'Public/Content/Images/Icon/27999023_1603743416397039_551924873_o.jpg', '2000', 1, 2, 4, '2018-03-04 00:00:55', '2018-03-03 23:57:49'),
(84, 'Test1111111111112', '<p>CPU<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Intel, Core i5 Haswell, 4250U, 1.30 GHz</p>\r\n<p>RAM<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>DDR3L(On board), 4 GB</p>\r\n<p>Đĩa cứng<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>SSD, 128 GB</p>\r\n<p>M&agrave;n h&igrave;nh rộng<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>13.3 inch, HD (1440 x 900 pixels)</p>\r\n<p>Cảm ứng<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Kh&ocirc;ng</p>\r\n<p>Đồ họa<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Intel HD Graphics 5000, Share 1664MB</p>\r\n<p>Đĩa quang<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Kh&ocirc;ng</p>\r\n<p>HĐH theo m&aacute;y<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Mac OS X</p>\r\n<p>PIN/Battery<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>4cell Li - Polymer</p>\r\n<p>Trọng lượng (Kg)<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>1.35</p>', 'Public/Content/Images/Icon/27393760_1590727467698634_800352517_o.jpg', '2000', 1, 0, 1, '2018-03-05 11:08:10', '2018-03-04 00:26:15'),
(99, 'tes122', '<p>M&agrave;n h&igrave;nh: 13,3&quot; cảm ứng 10 điểm chạm, tấm nền IPS<br />\nĐộ ph&acirc;n giải tối đa: 3200 x 1800 pixels<br />\nCPU: Intel Haswell Core i7, 1.8Ghz<br />\nGPU: Intel HD Graphics 4400<br />\nRAM: 4GB, c&ocirc;ng nghệ DDR3L 1600MHz<br />\nSSD: 256GB<br />\nPin: tối đa c&oacute; thể đạt 9 giờ<br />\nHệ điều h&agrave;nh: Windows 8.1 64 bit<br />\nLật gập xoay t&ugrave;y chỉnh tối đa đến 360 độ<br />\nMỏng 15,5mm, nặng 1.39kg</p>', 'Public/Content/Images/default.png', '15000000', 1, 0, 6, '2018-03-04 00:39:31', '2018-03-04 00:39:31'),
(100, 'Test2222222222222222', '<p><strong>M&agrave;n h&igrave;nh: </strong>13,3&quot; cảm ứng 10 điểm chạm, tấm nền IPS<br />\nĐộ ph&acirc;n giải tối đa: 3200 x 1800 pixels<br />\n<strong>CPU:</strong> Intel Haswell Core i7, 1.8Ghz<br />\nGPU: Intel HD Graphics 4400<br />\nRAM: 4GB, c&ocirc;ng nghệ DDR3L 1600MHz<br />\nSSD: 256GB<br />\nPin: tối đa c&oacute; thể đạt 9 giờ<br />\nHệ điều h&agrave;nh: Windows 8.1 64 bit<br />\nLật gập xoay t&ugrave;y chỉnh tối đa đến 360 độ<br />\nMỏng 15,5mm, nặng 1.39kg</p>\n', 'Public/Content/Images/Icon/28468116_1386524054785068_4681098894092872271_n.jpg', '2000', 1, 3, 1, '2018-03-05 11:15:27', '2018-03-05 11:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `computers_map_gallerys`
--

CREATE TABLE `computers_map_gallerys` (
  `ComId` int(11) NOT NULL,
  `GalleryId` int(11) NOT NULL,
  `Posittion` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `computers_map_order_detail`
--

CREATE TABLE `computers_map_order_detail` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ComId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `computers_map_order_detail`
--

INSERT INTO `computers_map_order_detail` (`Id`, `OrderId`, `ComId`, `Quantity`) VALUES
(4, 14, 43, 3),
(5, 14, 63, 3);

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

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`GalleryId`, `GalleryName`, `Description`) VALUES
(1, 'Hot', 'Không');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `OrderId` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` decimal(10,0) NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `Updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`OrderId`, `Name`, `Email`, `PhoneNum`, `Address`, `Updated`, `Created`) VALUES
(14, 'Ngô Thị Thắm', 'asdasdsad@gmail.com', '972205996', 'Số nhà 29, ngõ 250 Kim Giang', '2018-03-05 15:46:58', '2018-03-05 15:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Permission` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Password`, `FullName`, `Image`, `Permission`) VALUES
(1, 'admin1', 'd8c371f86838fe4bd7c8c3d0008e83b2', 'Hạ Văn Lương', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', 2),
(22, 'admin2', 'a84a7fa1ede41d441b1a64e6f7b74763', 'Ngô Thị Thắm', 'Public/Content/Images/Icon/28468116_1386524054785068_4681098894092872271_n.jpg', 2);

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
-- Indexes for table `computers_map_order_detail`
--
ALTER TABLE `computers_map_order_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ComId` (`ComId`),
  ADD KEY `OrderId` (`OrderId`);

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
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`OrderId`);

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
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `ComId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `computers_map_order_detail`
--
ALTER TABLE `computers_map_order_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `GalleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- Constraints for table `computers_map_order_detail`
--
ALTER TABLE `computers_map_order_detail`
  ADD CONSTRAINT `computers_map_order_detail_ibfk_1` FOREIGN KEY (`ComId`) REFERENCES `computers` (`ComId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `computers_map_order_detail_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `order_detail` (`OrderId`);

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`ComId`) REFERENCES `computers` (`ComId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
