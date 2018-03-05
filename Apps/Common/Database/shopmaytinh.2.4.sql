-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 12:50 PM
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
(2, 'Acer Aspire 4540G-502G32Mn.009', '<p>AMD Turion&trade; II Dual-Core M500(2 x 2.20 GHz, 1M L2 Cache, 3600MHz FSB 45nm 2Cores)AMD M880G Chipset</p>\n\n<p>2GB DDR2,</p>\n\n<p>320GB HDD SATA</p>\n\n<p>DVDRW ATI Mobility Radeon&trade; HD 4570, / 14.1WXGA LED Backlight 16:9 CineCrystal&trade;</p>\n\n<p>HDMI/ Bluetooth/ Camera/ Card Reader/Finger Print Pin 6 Cells/ Weight 2.35 Kg/ Wifi a/b/g/n</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-4540G-502G32Mn,009-Linux-small10670_1.jpg', '11690000', 1, 1, 4, '2018-03-05 15:12:32', '2018-01-25 14:12:29'),
(4, 'Acer Aspire AS4741G-332G32Mn.023', '<p>Intel Core i3 - 330M (2*2.13GHz, 1066MHz FSB)</p>\n\n<p>3MB cache/ 2GB DDR3/ 320GB HDD/Nvidia GeForce G310M 512MB DVDRW/ 14&quot; WXGA LED TFT-LCD</p>\n\n<p>Sound 5.1-channel/ Cardreader/ 3*USB 2.0/ VGA port/ Bluetooth</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.3 Kg/ Wifi a/b/g/n&nbsp;</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-4736G-664G50Mn,020-Window-7-Home-Premium-small11078_1.jpg', '13599000', 1, 2, 4, '2018-03-05 15:18:34', '2018-01-25 14:13:43'),
(5, 'Acer Aspire AS4741-332G32Mn.037', '<p>Intel Core i3 - 330M (2*2.13GHz, 1066MHz FSB)/ 3MB cache/ 2GB DDR3/ 320GB HDD</p>\n\n<p>Intel&reg; GMA 4500M 512MB shared DVDRW/ 14&quot; WXGA LED TFT-LCD</p>\n\n<p>Sound 5.1-channel/ Cardreader/ 3*USB 2.0/ VGA port/ Bluetooth</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.3 Kg/ Wifi a/b/g/n&nbsp;</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-AS4741-332G32Mn,037-Linux-small12905_1.jpg', '12499000', 1, 3, 4, '2018-03-05 15:20:57', '2018-01-25 14:13:46'),
(6, 'Acer Aspire AS4745-332G32Mn.016', '<p>Intel Core i3 - 330M (2*2.13GHz, 1066MHz FSB)</p>\n\n<p>3MB cache/ 2GB DDR3/ 320GB HDD/ Intel&reg; GMA 4500M 512MB shared DVDRW/ 14&quot; WXGA LED TFT-LCD</p>\n\n<p>Sound 5.1-channel/ Cardreader/ 3*USB 2.0/ VGA port/ Bluetooth</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.3 Kg/ Wifi a/b/g/n&nbsp;</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-AS4741-352G32Mn,072-small13572_1.jpg', '12499000', 1, 4, 4, '2018-03-05 15:22:15', '2018-01-25 14:46:44'),
(7, 'Acer Aspire AS5745G-332G32Mn.001', '<p>Intel Core i3 - 330M (2*2.13GHz, 1066MHz FSB)</p>\n\n<p>&nbsp;3MB cache/ 2GB DDR3/ 320GB HDD/ 512MB ATI Mobility Radeon&trade; HD 5470 DVDRW/ 15.6&quot; WXGA LED TFT-LCD/</p>\n\n<p>Sound 5.1-channel/ Cardreader/ 3*USB 2.0/ VGA port/ Bluetooth/</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.3 Kg/ Wifi a/b/g/n</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-AS4741-432G32Mn,063-small13326_1.jpg', '12990000', 1, 5, 4, '2018-03-05 15:23:25', '2018-01-25 15:28:51'),
(8, 'Acer Aspire AS5745-332G32Mn.002', '<p>Intel Core i3 - 330M (2*2.13GHz, 1066MHz FSB)/ 3MB cache/ 2GB DDR3/ 320GB HDD/</p>\n\n<p>Intel&reg; GMA 4500M 512MB shared DVDRW/ 15.6&quot; WXGA LED TFT-LCD/</p>\n\n<p>Sound 5.1-channel/ Cardreader/ 3*USB 2.0/ VGA port/ Bluetooth</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.3 Kg/ Wifi a/b/g/n</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-AS4741G-332G32Mn,023-Linux-small12902_1.jpg', '12499000', 1, 6, 4, '2018-03-05 15:26:24', '2018-01-25 15:29:23'),
(9, 'Acer Aspire AS4741-432G32Mn.063', '<p>Intel&reg; Core&trade; i5-430M (2*2.26GHz - 3M/ 2GB DDR3/ 320GB HDD</p>\n\n<p>Intel&reg; HD Graphics/ DVDRW/14.0&quot; HD LED LCD (Tỉ lệ 16: 9)/5-in-1 card Reader / 3*USB 2.0/ VGA port/ Bluetooth&reg; 2.1+EDR</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.2 Kg/ Wifi a/b/g/n</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-AS4741G-352G32Mn,043-small13573_1.jpg', '13999000', 1, 7, 4, '2018-03-05 15:28:01', '2018-01-25 15:29:23'),
(10, 'Acer Aspire AS4741-352G32Mn.072', '<p>Intel&reg; Core&trade; i3-350M (2.26GHz - 3M/ 2GB DDR3/ 320GB HDD</p>\n\n<p>Intel&reg; HD Graphics/ DVDRW/14.0&quot; HD LED LCD (Tỉ lệ 16: 9)/5-in-1 card Reader / 3*USB 2.0/ VGA port/ Bluetooth&reg; 2.1+EDR</p>\n\n<p>Camera Pin 6 Cells/ Weight 2.2 Kg/ Wifi a/b/g/n</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Acer-Aspire-AS4741G-452G32Mn,044-small13574_1.jpg', '12790000', 1, 8, 4, '2018-03-05 15:29:42', '2018-01-25 15:29:23'),
(11, 'DELL Inspiron 14R N4010n-3350 Black', '<p>Intel core i3 -350M ( 2*2.26GHZ/3MB L3 cache)/ 2GB DDR3 -1066/HDD 500GB</p>\n\n<p>&nbsp;ATI Mobility Radeon(TM) HD 5470 - 1GB/ 14 WXGA TrueLife LED Black-Light(1366 x 768)</p>\n\n<p>Card reader 5 in1 / Webcam 1.3M/ NIC /Pin 6 Cells / Wireless 802.11 b,g /DVD RW/Buetooth/e-sata/Weight 2.0Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Inspiron-14R-N4010n-3350-Black-small13501_1.jpg', '15799000', 1, 1, 1, '2018-03-05 15:32:33', '2018-01-25 15:29:23'),
(12, 'DELL Inspiron 14R N4010n-3350 - Blue', '<p>Intel core i3 -350M ( 2*2.26GHZ/3MB L3 cache)/ 2GB DDR3 -1066/HDD 500GB</p>\n\n<p>ATI Mobility Radeon(TM) HD 5470 - 1GB/ 14 WXGA TrueLife LED Black-Light(1366 x 768)</p>\n\n<p>Card reader 5 in1 / Webcam 1.3M/ NIC /Pin 6 Cells / Wireless 802.11 b,g /DVD RW/Buetooth/e-sata/Weight 2.0Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Inspiron-14R-N4010n-3350-Blue-small13502_1.jpg', '15799000', 1, 2, 1, '2018-03-05 15:34:39', '2018-01-25 15:29:23'),
(13, 'DELL Inspiron 14R - T560333 - Red', '<p>Intel core i5 -430M ( 2*2.26GHZ/3MB L3 cache)/ 2GB DDR3 -1066/HDD 500GB</p>\n\n<p>Intel(R) HD Graphics / 14 WXGA TrueLife LED Black-Light(1366 x 768) / Card reader 5 in1</p>\n\n<p>Webcam 1.3M/ NIC / HDMI /e-sata /Pin 6 Cells / Wireless 802.11 b,g /DVD RW/ Weight 2.6 Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Inspiron-14R-T560333-Red-small13016_1.jpg', '15799000', 1, 3, 1, '2018-03-05 15:36:30', '2018-01-25 15:29:23'),
(14, 'DELL Inspiron N3010 7N8NT1', '<p>Intel core i3 -350M ( 2*2.26GHZ/3MB L3 cache)/ 2GB DDR3 -1066/HDD 320GB</p>\n\n<p>Intel(R) HD Graphics 13.3 WXGA TrueLife LED Black-Light(1366 x 768)</p>\n\n<p>Card reader 5 in1 / Webcam 1.3M/ NIC /HDMI/Bluetooth/Pin 6 Cells</p>\n\n<p>Wireless 802.11 b,g / /DVD RW/e-sata/Weight 1.96 Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Inspiron-N3010-7N8NT1-small13524_1.jpg', '16279000', 1, 4, 1, '2018-03-05 15:38:29', '2018-01-25 15:29:23'),
(15, 'DELL Studio 1457 (S560918 - Black )', '<p>Phong c&aacute;ch sang trọng - LCD đ&egrave;n nền LED si&ecirc;u s&aacute;ng, tiết kiệm pin</p>\n\n<p>HDD dung lượng lớn Intel core i7 -720QM ( 4*1.6GHZ/3MB L3 cache)/ 4GB DDR3 -1066/HDD 500GB</p>\n\n<p>512MB DDR3 ATI&reg; Mobility&trade; Radeon&reg; HD 4530 /DVD RW/HDMI 14 HD WLED TrueLife LCD</p>\n\n<p>Pin 6 Cell / Wireless / Card Reader / Webcam/ Bluetooth/ Weight 2.3Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Studio-1457-S560918-Black-small12374_1.jpg', '26199000', 1, 5, 1, '2018-03-05 15:39:52', '2018-01-25 15:29:23'),
(16, 'DELL Studio 1458 (T560209 - Black )', '<p>Phong c&aacute;ch sang trọng - LCD đ&egrave;n nền LED si&ecirc;u s&aacute;ng, tiết kiệm pin</p>\n\n<p>HDD dung lượng lớn Intel core i5 -430QM ( 4*2.26GHZ/3MB L3 cache)/ 4GB DDR3</p>\n\n<p>1066/HDD 320GB / 512MB DDR3 ATI&reg; Mobility&trade; Radeon&reg; HD 4530</p>\n\n<p>DVD RW/HDMI 14 HD WLED TrueLife LCD / Pin 6 Cell / Wireless</p>\n\n<p>Card Reader / Webcam/ Bluetooth Weight 2.5Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Studio-1458-T560209-Black-small12076_1.jpg', '19999000', 1, 6, 1, '2018-03-05 15:41:17', '2018-01-25 15:29:23'),
(17, 'DELL Studio 1558 (T560204 - Black ) - Window 7 Hom', '<p>Phong c&aacute;ch sang trọng - LCD đ&egrave;n nền LED si&ecirc;u s&aacute;ng, tiết kiệm pin</p>\n\n<p>HDD dung lượng lớn Intel core i5 -520M ( 2*2.4GHZ/3MB L3 cache)/ 4GB DDR3</p>\n\n<p>1066/HDD 500GB / 512MB DDR3 ATI&reg; Mobility&trade; Radeon&reg; HD 4530</p>\n\n<p>DVD RW/HDMI/ESATA 15.6 LED WLED TrueLife LCD / Pin 6 Cell / Wireless</p>\n\n<p>&nbsp;Card Reader / Webcam/ Bluetooth Weight 2.5Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Studio-1458-T560209-Black-small12076_1.jpg', '21999000', 1, 7, 1, '2018-03-05 15:43:50', '2018-01-25 15:29:24'),
(18, 'DELL Inspiron 1464-S561207VN - Black', '<p>Intel core i3 -330M ( 2*2.13GHZ/3MB L3 cache)/ 2GB DDR3</p>\n\n<p>1066/HDD 250GB 14 WXGA TrueLife LED Black-Light(1366 x 768)</p>\n\n<p>Card reader 5 in1 / Webcam 1.3M/ NIC / Bluetooth/Pin 6 Cells</p>\n\n<p>Wireless 802.11 b,g / ATI Mobility Radeon(TM) HD 5450 - 1GB</p>\n\n<p>DVD RW/HDMI/ Weight 2.13 Kg</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/DELL-Inspiron-1464-S561207VN-Black-small13206_1.jpg', '14590000', 1, 8, 1, '2018-03-05 15:45:30', '2018-01-25 15:29:24'),
(19, 'ASUS X8AID-T4500(VX067)', '<p>Core Duo T4500 (2*2.3GHz, FSB800MHz/ 2MB Cache / 2GB Ram DDR3</p>\n\n<p>&nbsp;Nvidia GeForce G320M 1GB DDR3 / 250GB HDD DVDRW DL</p>\n\n<p>&nbsp;14&quot; wide 16:9 LED Backlit - Splendid, HDMI /Camera 0.3MPs/ Card Reader 4 in1</p>\n\n<p>&nbsp;Loa Altec Lansing / Pin 6 cells / Weight 2.3Kg / Bundle Optical Mouse /</p>\n\n<p>Wireless 802.11b/g/n</p>\n\n<p>China</p>\n', 'Public/Content/Images/Icon/ASUS-X8AID-T4500-VX067-small13113_1.jpg', '11999000', 1, 1, 2, '2018-03-05 15:50:16', '2018-01-25 15:29:24'),
(20, 'ASUS X8AIJ-T6570 (VX164)', '<p>Core 2 Duo T6570 (2*2.1GHz, FSB800MHz/ 2MB Cache / 2GB Ram/</p>\n\n<p>VGA Intel GMA X4500 upto 512MB Shared / 250GB HDD DVDRW DL / 14&quot; wide 16:9 LED Backlit -</p>\n\n<p>Splendid, HD Ready /Camera 1.3MPs/ Card Reader 4 in1 / Loa Altec Lansing</p>\n\n<p>Pin 6 cells / Weight 2.3Kg / Optical Mouse / Wireless 802.11b/g/n</p>\n\n<p>China</p>\n', 'Public/Content/Images/Icon/ASUS-X8AIJ-T6570-VX164-small10672_1.jpg', '10690000', 1, 2, 2, '2018-03-05 15:51:42', '2018-01-25 15:29:24'),
(21, 'ASUS U30JC-QX050D', '<p>Intel Core i3-350M(2.26)/2GB-DDR3/HDD 320GB/NVIDIA GeForce GT310M 512MB</p>\n\n<p>DVD Super Multi/ 13.3.0&quot; HD (1366x768) LED backlight Splendid/ Loa AltecLancing</p>\n\n<p>1.3MP Camera/ Card reader/HDMI/Bluetooth/USB 2.0/ Pin 6 cells / Weight 2.0Kg</p>\n\n<p>Optical Mouse / Wireless 802.11b/g/n</p>\n\n<p>China</p>\n', 'Public/Content/Images/Icon/ASUS-U30JC-QX050D-small13379_1.jpg', '17099000', 1, 3, 2, '2018-03-05 15:55:56', '2018-01-25 15:29:24'),
(22, 'ASUS A42F-VX125', '<p>Intel Core i5-430M(2.26)/2GB-DDR3/HDD 320GB/Integrated Intel&reg; GMA HD</p>\n\n<p>DVD Super Multi/ 14.0&quot; HD (1366x768) LED backlight Splendid/ Loa AltecLancing</p>\n\n<p>1.3MP Camera/ Card reader Pin 6 cells / Weight 2.2Kg</p>\n\n<p>Optical Mouse / Wireless 802.11b/g/n</p>\n\n<p>China</p>\n', 'Public/Content/Images/Icon/ASUS-A42F-VX125-small13382_1.jpg', '15099000', 1, 4, 2, '2018-03-05 15:55:35', '2018-01-25 15:29:24'),
(23, 'ASUS N82JV-VX033', '<p>Intel Core i5-430M(2.26)/1GB-DDR3/HDD 320GB/NVIDIA&reg; GT335M with 1GB VRAM Intel GMA HD(Support NVIDIA technology )</p>\n\n<p>DVD Super Multi/ 14.0&quot; HD (1366x768) LED backlight Splendid</p>\n\n<p>Loa AltecLancing/ 1.3MP Camera/ Card reader/HDMI/e-sata/USB 3.0 Pin 6 cells</p>\n\n<p>&nbsp;Weight 2.3Kg / Optical Mouse / Wireless 802.11b/g/n</p>\n\n<p>&nbsp;China</p>\n', 'Public/Content/Images/Icon/ASUS-N82JV-VX033-small13384_1.jpg', '21049000', 1, 5, 2, '2018-03-05 15:57:38', '2018-01-25 15:29:24'),
(24, 'ASUS A42F-VX068 - PC DOS - ATI Mobility™ Radeon® H', '<p>Intel Core i3-350M(2.26)/1GB-DDR3/HDD 320GB/ATI Mobility&trade; Radeon&reg; HD 5470 1G DDR3 VRAM &nbsp;</p>\n\n<p>DVD Super Multi/ 14.0&quot; HD (1366x768) LED backlight Splendid</p>\n\n<p>Loa AltecLancing/ 1.3MP Camera/ Card reader/ Pin 6 cells</p>\n\n<p>&nbsp;Weight 2.2Kg &nbsp;/ &nbsp;Optical Mouse / Wireless &nbsp;802.11b/g/n &nbsp;</p>\n\n<p>&nbsp;China</p>\n', 'Public/Content/Images/Icon/ASUS-A42F-VX068-PC-DOS-ATI-Mobility-Radeon-HD-5470-small12166_1.jpg', '15799000', 1, 6, 2, '2018-03-05 15:58:59', '2018-01-25 15:29:24'),
(25, 'ASUS A42F-VX029 - PC DOS', '<p>Intel Core i3-350M(2.26)/2GB-DDR3/HDD 320GB</p>\n\n<p>Integrated Intel&reg; GMA HD/DVD Super Multi/ 14.0&quot; HD (1366x768) LED backlight Splendid</p>\n\n<p>&nbsp;Loa AltecLancing/ 1.3MP Camera/ Card reader Pin 6 cells / Weight 2.2Kg</p>\n\n<p>&nbsp;Optical Mouse / Wireless 802.11b/g/n</p>\n\n<p>China</p>\n', 'Public/Content/Images/Icon/ASUS-A42F-VX068-PC-DOS-ATI-Mobility-Radeon-HD-5470-small12166_1.jpg', '14390000', 1, 7, 2, '2018-03-05 16:00:20', '2018-01-25 15:29:24'),
(26, 'ASUS A42JR-VX024 - PC DOS', '<p>Intel Core i5-520M(2.4)/2GB-DDR3/HDD 320GB</p>\n\n<p>ATI Mobility&trade; Radeon&reg; HD 5470 1G DDR3 VRAM</p>\n\n<p>DVD Super Multi/ 14.0&quot; HD (1366x768) LED backlight Splendid/ Loa AltecLancing</p>\n\n<p>&nbsp;1.3MP Camera/ Card reader Pin 6 cells / Weight 2.2Kg</p>\n\n<p>&nbsp;Optical Mouse / Wireless 802.11b/g/n</p>\n\n<p>&nbsp;China</p>\n', 'Public/Content/Images/Icon/ASUS-A42JR-VX024-PC-DOS-small11507_1.jpg', '17899000', 1, 8, 2, '2018-03-05 16:02:45', '2018-01-25 15:29:24'),
(27, 'Apple Macbook MC207ZP/A', '<p>Apple Macbook MC207ZP/A Intel Core 2 Duo (2*2.26GHz)</p>\n\n<p>2GB (2.x1GB) DDR3 RAM /250GB HDD / VGA NVDIA G9400M 256MB shared</p>\n\n<p>&nbsp;DVDRW Nic Gigabit / Airport Extreme/ 13.3&quot; TFT Display / Weight 2,04 Kg</p>\n\n<p>&nbsp;OS Mac ( Tương th&iacute;ch với Windows )</p>\n\n<p>&nbsp;Kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-MC207ZP-A-small11225_1.jpg', '22990000', 1, 1, 5, '2018-03-05 16:07:40', '2018-01-25 15:29:24'),
(28, 'Apple Macbook Air MC233ZP/A', '<p>Core 2 Duo SL9400(1.86Ghz Cache 6M) / 2GB (2.x1GB) DDR3 RAM /120GB HDD</p>\n\n<p>&nbsp;VGA NVDIA G9400M 256MB shared Nic Gigabit / Airport Extreme</p>\n\n<p>S-Video, DVI, VGA/13.3&quot; LCD Backlit / Weight 1.8 Kg / OS Mac ( Tương th&iacute;ch với Windows )</p>\n\n<p>&nbsp;Kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-MB467ZP-A-small11835_1.jpg', '37990000', 1, 2, 5, '2018-03-05 16:16:21', '2018-01-25 15:29:24'),
(29, 'Apple Macbook MB466ZP/A', '<p>Core 2 Duo 2.0GHz / 2GB (2.x1GB) DDR3 RAM</p>\n\n<p>160GB HDD / VGA NVDIA G9400M 256MB shared</p>\n\n<p>&nbsp;DVDRW/Nic Gigabit / Airport Extreme/ 13.3&quot; TFT Display</p>\n\n<p>&nbsp;Weight 2,04 Kg / OS Mac ( tương th&iacute;ch với Windows )</p>\n\n<p>( kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo )</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-MB466ZP-A-small532_1.jpg', '24799000', 1, 3, 5, '2018-03-05 16:10:32', '2018-01-25 15:29:24'),
(30, 'Apple Macbook MB467ZP/A', '<p>Core 2 Duo (2*2.4GHz)/ 2GB (2.x1GB) DDR3 RAM /250GB HDD</p>\n\n<p>&nbsp;VGA NVDIA G9400M 256MB shared / DVDRW Nic Gigabit / Airport Extreme</p>\n\n<p>13.3&quot; TFT Display / Weight 2,04 Kg / OS Mac ( tương th&iacute;ch với Windows )</p>\n\n<p>&nbsp;Kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-MB467ZP-A-small11835_1.jpg', '26699000', 1, 4, 5, '2018-03-05 16:12:16', '2018-01-25 15:29:24'),
(31, 'Apple Macbook Pro MB470ZP/A', '<p>Core 2 Duo (2*2.4GHz)/ 2GB (2.x1GB) DDR3 RAM /250GB HDD</p>\n\n<p>1066 NVIDIA Geforce 9400M+9600M GT with 256MB / DVDRW &quot;Nic Gigabit</p>\n\n<p>&nbsp;Airport Extreme/ 15.4inches LED /Mc OS Leopard 10.5 ( tương th&iacute;ch với Windows )</p>\n\n<p>Kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-Pro-MB470ZP-A-small13058_1.jpg', '32290000', 1, 5, 5, '2018-03-05 16:13:30', '2018-01-25 15:29:25'),
(32, 'Apple Macbook Pro MB470ZP/B', '<p>Core 2 Duo (2*2.4GHz)/ 2GB (2.x1GB) DDR3 RAM /250GB HDD</p>\n\n<p>1066 NVIDIA Geforce 9400M+9600M GT with 256MB</p>\n\n<p>&nbsp;DVDRW &quot;Nic Gigabit / Airport Extreme/ 15.4inches LED</p>\n\n<p>Mc OS Leopard 10.5 ( tương th&iacute;ch với Windows )</p>\n\n<p>Kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-Pro-MB470ZP-A-small13058_1.jpg', '32290000', 1, 6, 5, '2018-03-05 16:15:25', '2018-01-25 15:29:25'),
(33, 'Apple Macbook Pro MB470ZP/C', '<p>Core 2 Duo (2*2.4GHz)/ 2GB (2.x1GB) DDR3 RAM /250GB HDD</p>\n\n<p>1066 NVIDIA Geforce 9400M+9600M GT with 256MB / DVDRW &quot;Nic Gigabit</p>\n\n<p>Airport Extreme/ 15.4inches LED /Mc OS Leopard 10.5 ( tương th&iacute;ch với Windows )</p>\n\n<p>&nbsp;Kh&ocirc;ng c&oacute; t&uacute;i k&egrave;m theo</p>\n', 'Public/Content/Images/Icon/Apple-Macbook-MB466ZP-A-small532_1.jpg', '31290000', 1, 7, 5, '2018-03-05 16:20:34', '2018-01-25 15:29:25'),
(34, 'HP ProBook 4420s - WQ944PA (PC Dos)', '<p>Core i3-330M (2*2.13GHz, 32nm) / 3MB L2 Cache</p>\n\n<p>&nbsp;2GB DDR3-1333 / 250GB HDD - 7200RPM / VGA Intel HD Graphics upto 512MB Shared</p>\n\n<p>&nbsp;DVDRW LightScribe / Express Card / 14&quot; wide 16:9 LED backlight LCD / Webcam Giga LAN</p>\n\n<p>&nbsp;Card Reader / Wireless 802.11b.g.n/ Weight 2.14Kg / Pin 6 cell</p>\n\n<p>&nbsp;Made in China</p>\n', 'Public/Content/Images/Icon/HP-ProBook-4320s-WQ943PA-PC-Dos-Vo-nhom-small12755_1.jpg', '14999000', 1, 1, 6, '2018-03-05 16:23:06', '2018-01-25 15:29:25'),
(35, 'HP ProBook 4410s-WC585PA (PC Dos)', '<p>Core 2 Duo T6570 (2x2.1GHz, FSB 800MHz)</p>\n\n<p>2MB L2 Cache/ 2GB DDR3-1333/ 250GB HDD-7200RPM</p>\n\n<p>&nbsp;VGA Intel GMA X4500 upto 512MB Shared/ DVDRW LightScribe</p>\n\n<p>&nbsp;Express Card / 14&quot; wide 16:9 LED backlight LCD / Bluetooth</p>\n\n<p>&nbsp;Webcam Giga LAN/ Card Reader / Wireless 802.11b.g.n</p>\n\n<p>Weight 2.2Kg / Pin 6 cell</p>\n\n<p>&nbsp;Made in China</p>\n', 'Public/Content/Images/Icon/HP-ProBook-4410s-WC585PA-PC-Dos-small4192_1.jpg', '12399000', 1, 2, 6, '2018-03-05 16:24:23', '2018-01-25 15:29:25'),
(36, 'HP ProBook 4410s-WJ592PA', '<p>Core 2 Duo P7570 (2*2.26GHz,FSB1066MHz, 45nm)</p>\n\n<p>3MB L2 Cache / 2GB DDRAM3-1333/ 320GB HDD-7200rpm</p>\n\n<p>VGA Intel upto 512MB Shared/ DVDRW LightScribe / Express Card</p>\n\n<p>&nbsp;14&quot; wide 16:9 LED backlight LCD / Bluetooth / Webcam GMA X4500/ Giga LAN</p>\n\n<p>Card Reader / Wireless 802.11b.g.n/ Weight 2.2Kg / Pin 6 cell</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/HP-Pavilion-DV4-2104TU-WJ433PA-Windows-7-Basic-small11877_1.jpg', '15399000', 1, 3, 6, '2018-03-05 16:25:43', '2018-01-25 15:29:25'),
(37, 'HP ProBook 4411s-VT197PA (PC Dos)', '<p>Core 2 Duo T6570 (2x2.1GHz, FSB 800MHz)</p>\n\n<p>2MB L2 Cache/ 2GB DDR2-800/ 320GB HDD / VGA ATI Mobility Radeon HD 4330 512MB</p>\n\n<p>DVDRW LightScribe / Express Card / 14&quot; wide 16:9 LED backlight LCD / BlueTooth</p>\n\n<p>Webcam Giga LAN/ Card Reader / Wireless 802.11b.g.n</p>\n\n<p>&nbsp;Weight 2.2Kg / Pin 6 cell</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/HP-ProBook-4411s-VT197PA-PC-Dos-small10111_1.jpg', '14399000', 1, 4, 6, '2018-03-05 16:28:22', '2018-02-05 16:41:33'),
(38, 'HP ProBook 4320s - WQ943PA (PC Dos)', '<p>Core i3-350M (2*2.26GHz, 32nm) / 3MB L2 Cache</p>\n\n<p>2GB DDR3-1333 / 250GB HDD - 7200RPM / VGA Intel HD Graphics upto 512MB Shared</p>\n\n<p>DVDRW LightScribe / Express Card / 13.3&quot; wide 16:9 LED backlight LCD</p>\n\n<p>BlueTooth / Webcam Giga LAN/ Card Reader / Wireless 802.11b.g.n</p>\n\n<p>Weight 1.99Kg / Pin 6 cell</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/HP-ProBook-4320s-WQ943PA-PC-Dos-Vo-nhom-small12755_1.jpg', '16299000', 1, 5, 6, '2018-03-05 16:30:09', '2018-02-05 16:42:17'),
(39, 'HP TouchSmart TM2-1012TX_WJ453PA (Windows 7 Premiu', '<p>Intel Pentium Dual Core SU4100 ( 1.3GHz/2MB/800MHz)</p>\n\n<p>2GB RAM DDR3, 250GB HDD, DVD RW LS Ext Wlan b/g</p>\n\n<p>&nbsp;BT, VGA ATI Mobility Radeon HD 512MB, Webcam</p>\n\n<p>12.1&rdquo;, 6Cell, Win7 Basic, Silver</p>\n\n<p>Made in china</p>\n', 'Public/Content/Images/Icon/HP-Pavilion-DV4-2104TU-WJ433PA-Windows-7-Basic-small11877_1.jpg', '23999000', 1, 6, 6, '2018-03-05 16:31:56', '2018-02-05 16:42:48'),
(40, 'HP Pavilion DV4-1506TU- VV022PA (Windows 7 Basic)', '<p>Core 2 Duo P7450 (2*2.13Ghz,FSB 1066Mhz, 45nm)/3MB Cache</p>\n\n<p>&nbsp;2GB DDRAM3/HDD 320GB/VGA Intel GMA X4500 HD upto 512MB Shared DVD-RW</p>\n\n<p>LightScrible / 14.1&quot;WXGA HD HP LED Brightview Widescreen Display/Bluetooth</p>\n\n<p>Secure Digital (SD) slot Touchpad Mouse / Webcam /eSATA</p>\n\n<p>&nbsp;1 HDMI/ Weight 2.17Kg / Wireless / Pin 6 cells</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/HP-Pavilion-DV4-1506TU-VV022PA-Windows-7-Basic-small9811_1.jpg', '16999000', 1, 7, 6, '2018-03-05 16:33:31', '2018-02-05 16:51:58'),
(41, 'HP Pavilion DV4-2104TU_ WJ433PA (Windows 7 Basic)', '<p>Core i3 330M(2*2.13Ghz,FSB 1066Mhz, 45nm)/2MB Cache</p>\n\n<p>&nbsp;2GB DDRAM3/HDD 320GB/VGA Intel GMA X4500 HD upto 512MB Shared</p>\n\n<p>DVD-RW + LightScrible / 14.1&quot;WXGA HD HP LED Brightview Widescreen Display</p>\n\n<p>Bluetooth/Secure Digital (SD) slot Touchpad Mouse / Webcam /eSATA</p>\n\n<p>1 HDMI/ Weight 2.17Kg / Wireless / Pin 6 cells</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/HP-Pavilion-DV4-2104TU-WJ433PA-Windows-7-Basic-small11877_1.jpg', '17599000', 1, 8, 6, '2018-03-05 16:35:15', '2018-02-05 16:52:16'),
(42, 'Lenovo G450 (5902-2940) - PC Dos', '<p>Lenovo G450 (5902-2940) - PC Dos Core 2 Duo T6600 (2x2.2GHz )</p>\n\n<p>2MB Cache / 2GB DDR3 / 320GB HDD / 14.1&quot; WXGA LED Backlid</p>\n\n<p>HDMI VGA Intel GMA X4500MHD up to 512MB shared/ DVD-RW DL</p>\n\n<p>NIC / Touchpad Mouse / Camera/ eSATA Bluetooth</p>\n\n<p>&nbsp;6 in 1 Card Reader/ Weight 2.2Kg / Wireless 802.11b/g/n</p>\n\n<p>&nbsp;Made in China</p>\n', 'Public/Content/Images/Icon/Lenovo-G450-5902-2940-PC-Dos-small11058_1.jpg', '11190000', 1, 1, 7, '2018-03-05 16:39:09', '2018-02-05 16:52:37'),
(43, 'Lenovo IdeaPad G460 (5903-1840)', '<p>Intel&reg; Core&trade; i3 Processor 330M (2.13GHz / 1066 MHz / 3MB L3 Cache)</p>\n\n<p>&nbsp;2GB DDR3, 320GB, DVD SuperMulti, Intel GMA HD, LAN, Lenovo b/g/n</p>\n\n<p>&nbsp;BT, 0.3MP Camera, Standard Spkr, Veriface (Face Recognition Technology)</p>\n\n<p>&nbsp;One Key Rescue System, 5-in-1 card reader</p>\n\n<p>6 cell, IMR, FREE Stylish Carry Case</p>\n', 'Public/Content/Images/Icon/Lenovo-IdeaPad-G460-5903-1840-small12915_1.jpg', '12290000', 1, 2, 7, '2018-03-05 16:40:36', '2018-02-09 14:07:25'),
(46, 'Lenovo Thinkpad X200 (7455-RZ5) - PC DOS', '<p>Core 2 Duo P8700 (2x2.53GHz, FSB1066MHz, 45nm)</p>\n\n<p>3MB L2 Cache/ 2GB RAM/ 320GB HDD/Fingerprint VGA Intel X4500 up to 512MB</p>\n\n<p>LAN / 12.1&quot; WXGA Display / BlueTooth / Camera 1.3Mps / Modem 56Kbps</p>\n\n<p>&nbsp;Trackpoint &amp; Touchpad/ Pin 6 Cells/ IEEE1394/ Weight 1.8Kg</p>\n\n<p>&nbsp;Wireless 802.1b.g.n/ T&uacute;i Thinkpad ch&iacute;nh h&atilde;ng</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Lenovo-Thinkpad-X200-7455-RZ5-PC-DOS-small9532_1.jpg', '27999000', 1, 3, 7, '2018-03-05 16:41:55', '2018-02-09 16:43:19'),
(48, 'Lenovo Thinkpad SL410 (2842-DRA) - DOS', '<p>Core 2 Duo T6670 (2x2.2GHz, FSB 800MHz)</p>\n\n<p>2MB L2 Cache/ 2GB Ram/ 320GB / Intel Integrated Graphics, Intel 5100 AGN (1x2) DVD-ReWrite</p>\n\n<p>NIC / 14&quot; HD Glossy / Bluetooth / Camera 1.3Mps / Modem 56Kbps/ Trackpoint &amp; Touchpad Pin 6 Cells</p>\n\n<p>&nbsp;Weight 2.4Kg / Wireless 802.1b.g.n/ T&uacute;i Thinkpad ch&iacute;nh h&atilde;ng</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Lenovo-Thinkpad-SL410-2842-DRA-DOS-small12845_1.jpg', '13390000', 1, 4, 7, '2018-03-05 16:43:15', '2018-02-09 17:11:25'),
(52, 'Lenovo Thinkpad SL410 (2842-7RA) - DOS', '<p>Core 2 Duo T5870 (2x2.0GHz, FSB 800MHz)</p>\n\n<p>2MB L2 Cache/ 2GB Ram/ 250GB / VGA Intel GMA X4500 upto 512MB DVD-ReWrite</p>\n\n<p>NIC / 14&quot; HD Glossy/ Bluetooth / Camera 1.3Mps / Modem 56Kbps</p>\n\n<p>Trackpoint &amp; Touchpad/ IMR Cover Pin 6 Cells / Weight 2.4Kg</p>\n\n<p>&nbsp;Wireless 802.1b.g.n/ T&uacute;i Thinkpad ch&iacute;nh h&atilde;ng</p>\n\n<p>Made in China</p>\n', 'Public/Content/Images/Icon/Lenovo-Thinkpad-SL410-2842-7RA-DOS-small10793_1.jpg', '12299000', 1, 5, 7, '2018-03-05 16:44:31', '2018-02-09 17:17:57'),
(54, 'Lenovo Thinkpad T400 (2765-RW8) - DOS', '<p>Core 2 Duo P8600 (2x2.4GHz, FSB1066MHz, 45nm)</p>\n\n<p>&nbsp;3MB L2 Cache/ 2GB DDR3-1066/ 320GB HDD/Fingerprint/ Intel 5300 AGN (3x3) VGA ATI Radeon HD3470 256MB/ LAN</p>\n\n<p>&nbsp;14.1&quot; WXGA Display / BlueTooth / Camera 1.3Mps</p>\n\n<p>&nbsp;Modem 56Kbps/ DVD-RW Trackpoint &amp; Touchpad/ Pin 6 Cells/ IEEE1394</p>\n\n<p>&nbsp;Weight 2.4Kg / Wireless 802.1b.g.n/ T&uacute;i Thinkpad ch&iacute;nh h&atilde;ng</p>\n\n<p>&nbsp;Made in China</p>\n', 'Public/Content/Images/Icon/Lenovo-Thinkpad-T400-2765-RW8-DOS-small10795_1.jpg', '20799000', 1, 6, 7, '2018-03-05 16:45:38', '2018-02-12 14:25:43'),
(55, 'LUONG123456', 'saSA', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 3, 1, '2018-02-28 16:12:57', '2018-02-12 14:50:30'),
(56, 'LUONG', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 3, 1, '2018-02-28 16:12:57', '2018-02-12 14:55:53'),
(57, 'LUONG', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 4, 1, '2018-02-28 16:12:57', '2018-02-12 15:05:08'),
(58, 'ádsda', 'ádsda', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '1', 1, 1, 1, '2018-02-28 16:12:57', '2018-02-25 03:20:40'),
(59, 'LUONG', 'áddsa', 'Public/Content/Images/Icon/25286931_202544096987361_1037190268_n.jpg', '2', 2, 2, 2, '2018-02-28 16:12:57', '2018-02-25 03:23:02'),
(63, 'LUONG', 'saSA', 'Public/Content/Images/Icon/27999023_1603743416397039_551924873_o.jpg', '2', 2, 2, 2, '2018-02-28 21:56:13', '2018-02-28 21:56:13'),
(65, 'LUONG', 'saSA', 'Public/Content/Images/Icon/cv_template7.png', '2', 4, 8, 6, '2018-03-01 00:16:31', '2018-03-01 00:16:31'),
(66, 'dda', 'adad', 'Public/Content/Images/Icon/27999023_1603743416397039_551924873_o.jpg', '1000', 1, 3, 2, '2018-03-04 00:08:45', '2018-03-01 14:11:11'),
(67, 'Test1ádasd', 'saddddddddddđâsdsad', 'Public/Content/Images/Icon/27393760_1590727467698634_800352517_o.jpg', '1000', 0, 2, 5, '2018-03-04 00:08:15', '2018-03-03 16:18:46'),
(76, 'xczzcx', 'cczxczxcxzc', 'Public/Content/Images/Icon/27999023_1603743416397039_551924873_o.jpg', '2000', 1, 2, 4, '2018-03-04 00:00:55', '2018-03-03 23:57:49'),
(84, 'Test1111111111112', '<p>CPU<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Intel, Core i5 Haswell, 4250U, 1.30 GHz</p>\r\n<p>RAM<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>DDR3L(On board), 4 GB</p>\r\n<p>Đĩa cứng<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>SSD, 128 GB</p>\r\n<p>M&agrave;n h&igrave;nh rộng<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>13.3 inch, HD (1440 x 900 pixels)</p>\r\n<p>Cảm ứng<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Kh&ocirc;ng</p>\r\n<p>Đồ họa<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Intel HD Graphics 5000, Share 1664MB</p>\r\n<p>Đĩa quang<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Kh&ocirc;ng</p>\r\n<p>HĐH theo m&aacute;y<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>Mac OS X</p>\r\n<p>PIN/Battery<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>4cell Li - Polymer</p>\r\n<p>Trọng lượng (Kg)<span style=\"white-space:pre\" class=\"Apple-tab-span\">	</span>1.35</p>', 'Public/Content/Images/Icon/27393760_1590727467698634_800352517_o.jpg', '2000', 1, 0, 1, '2018-03-05 11:08:10', '2018-03-04 00:26:15'),
(99, 'tes122', '<p>M&agrave;n h&igrave;nh: 13,3&quot; cảm ứng 10 điểm chạm, tấm nền IPS<br />\nĐộ ph&acirc;n giải tối đa: 3200 x 1800 pixels<br />\nCPU: Intel Haswell Core i7, 1.8Ghz<br />\nGPU: Intel HD Graphics 4400<br />\nRAM: 4GB, c&ocirc;ng nghệ DDR3L 1600MHz<br />\nSSD: 256GB<br />\nPin: tối đa c&oacute; thể đạt 9 giờ<br />\nHệ điều h&agrave;nh: Windows 8.1 64 bit<br />\nLật gập xoay t&ugrave;y chỉnh tối đa đến 360 độ<br />\nMỏng 15,5mm, nặng 1.39kg</p>', 'Public/Content/Images/default.png', '15000000', 1, 0, 6, '2018-03-04 00:39:31', '2018-03-04 00:39:31');

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
  ADD CONSTRAINT `computers_map_gallerys_ibfk_2` FOREIGN KEY (`GalleryId`) REFERENCES `gallerys` (`GalleryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `computers_map_order_detail`
--
ALTER TABLE `computers_map_order_detail`
  ADD CONSTRAINT `computers_map_order_detail_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `order_detail` (`OrderId`),
  ADD CONSTRAINT `computers_map_order_detail_ibfk_3` FOREIGN KEY (`ComId`) REFERENCES `computers` (`ComId`);

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`ComId`) REFERENCES `computers` (`ComId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
