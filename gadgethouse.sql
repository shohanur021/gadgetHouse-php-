-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 04:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgethouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `offer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`offer_id`, `name`, `details`, `price`, `image_url`) VALUES
(1, 'JBL E55BT Wireless Headphone', 'The JBL E55BT Wireless Bluetooth Headphone is excellent headphone when comparing to the price it is being sold at.The headphone is light weight and is very durable.', 9500, 'https://i.ibb.co/1QxjB0d/JBLE55BT.png'),
(2, 'Apple Watch Series 6 A2292', 'The Apple Watch Series 6 features the same basic specifications as the Series 5 watch but with an updated dual-core Apple S6 processor, a new Always-On Altimeter, and a new Blood Oxygen sensor (SpO2).', 46000, 'https://i.ibb.co/TTpDNcb/Apple-Watch.png'),
(3, 'Xiaomi 11 Lite 5G NE', 'The Xiaomi 11 Lite NE 5G features a 6.55-inch full-HD+ (1,080x2,400 pixels) 10-bit flat AMOLED true-colour display with a 90Hz refresh rate. It is powered by a Qualcomm Snapdragon 778G SoC. It runs on Android 11 with MIUI 12.5.', 25000, 'https://i.ibb.co/PthhmPZ/xiaomi.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` int(11) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Category`, `ProductId`, `ProductName`, `Price`, `Email`) VALUES
(26, 'smartwatch', 10, ' Zeblaze Neo 3', 2750, 'manik74@gmail.com'),
(30, 'mobile', 2, 'Xiaomi Poco M3', 12750, 'manik74@gmail.com'),
(31, 'mobile', 1101, 'Apple iPhone 12 Pro', 145800, 'manik74@gmail.com'),
(32, 'mobile', 1102, 'Xiaomi Poco M3', 12750, 'manik74@gmail.com'),
(37, 'carousel', 3, 'Xiaomi 11 Lite 5G NE', 25000, 'samina12@gmail.com'),
(38, 'carousel', 1, 'JBL E55BT Wireless Headphone', 9500, 'samina12@gmail.com'),
(39, 'carousel', 2, 'Apple Watch Series 6 A2292', 46000, 'samina12@gmail.com'),
(40, 'mobile', 1, ' Redmi Note 10', 24000, 'samina12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'fahim', 'fahim21@gmail.com', '01716614458', 'good service');

-- --------------------------------------------------------

--
-- Table structure for table `headphone`
--

CREATE TABLE `headphone` (
  `HeadphoneID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sensitivity` varchar(50) NOT NULL,
  `CableLength` varchar(50) NOT NULL,
  `Connectivity` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Frequency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headphone`
--

INSERT INTO `headphone` (`HeadphoneID`, `Name`, `Sensitivity`, `CableLength`, `Connectivity`, `Image`, `Price`, `Frequency`) VALUES
(1, 'HAVIT HV-H2198d', '98dB±3dB', 'Approx 1.2m±15%', 'Connectivity', 'HAVIT_HV-H2198d', 500, '20 Hz to 20KHz'),
(2, 'HAVIT HV-H2262D', '110dB±3dB', 'Approx 1.2m±10%', 'Wired', 'HAVIT_HV-H2262D', 600, '20 Hz to 20KHz'),
(3, 'Prolink PHC1003E ', '-55db±2db', '150cm', '3.5mm Audio Jack', 'Prolink PHC1003E ', 750, '20Hz to 20KHz'),
(5, 'HAVIT HV-H2198d', '98dB±3dB', 'Approx 1.2m±15%', 'Wired', 'HAVIT HV-H2198d', 500, '20 Hz to 20KHz'),
(6, 'FANTECH HQ50', '58DB ± 2DB', '2M ± 5%', 'Wired', 'FANTECH', 700, '20 to 20KHZ'),
(7, 'Microlab T3', '≥ 60 dB', 'Approx 1.2m±10%', 'Wireless', 'Microlab T3', 2330, '20 Hz to 20 kHz'),
(8, 'Havit HV-H100d', '102dB', '1.2 M', 'Wired', 'Havit HV-H100d', 600, '20Hz to 20KHz'),
(9, 'Havit HV-139D', '102 dB', '1.8 m', 'Wired', 'Havit HV-139D', 750, '20 Hz to 20 kHz'),
(10, 'Asus Cerberus V2', '-40 dB ± 3 dB', '1.2m', '3.5 mm connector Audio', 'Asus Cerberus V2', 5100, '20Hz to 20KHz'),
(11, ' Logitech H110', '100dB +/-3dB', '5.90 ft', 'Wired', 'Logitech_H110', 850, '20 Hz to 20 KHz'),
(12, ' Havit 2218D', '110dB±3dB', 'Approx 1.2m±10%', 'Wired', 'Havit_H2218D', 650, '20 Hz to 20KHz'),
(13, ' HyperX Cloud Stinger   ', '102 ± 3dBSPL', ' Headset (1.3m) + Extension Y-cable(1.7m)', 'Wired', 'HyperX Cloud Stinger', 4300, '50Hz to 18,000Hz');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `MobileID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Network` varchar(50) NOT NULL,
  `Sim` varchar(50) NOT NULL,
  `USB-Type-C` varchar(50) NOT NULL,
  `Material` varchar(70) NOT NULL,
  `Weight` int(11) NOT NULL COMMENT 'in grams',
  `Size` int(11) NOT NULL COMMENT 'in inches',
  `DisplayResolution` varchar(100) NOT NULL,
  `Technology` varchar(70) NOT NULL,
  `Protection` varchar(50) NOT NULL,
  `Back-Camera-Resolution` varchar(70) NOT NULL,
  `Video-Recording` varchar(50) NOT NULL,
  `Front-Camera-Resolution` varchar(50) NOT NULL,
  `Features` varchar(70) NOT NULL,
  `Type-and-Capacity` varchar(70) NOT NULL,
  `Fast-Charging` varchar(70) NOT NULL,
  `Operating System` varchar(50) NOT NULL,
  `Chipset` varchar(50) NOT NULL,
  `RAM` int(11) NOT NULL,
  `Processor` varchar(50) NOT NULL,
  `GPU` varchar(30) NOT NULL,
  `ROM` int(11) NOT NULL,
  `3.5mm Jack` varchar(10) NOT NULL,
  `Sensors` varchar(70) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`MobileID`, `Name`, `Image`, `Network`, `Sim`, `USB-Type-C`, `Material`, `Weight`, `Size`, `DisplayResolution`, `Technology`, `Protection`, `Back-Camera-Resolution`, `Video-Recording`, `Front-Camera-Resolution`, `Features`, `Type-and-Capacity`, `Fast-Charging`, `Operating System`, `Chipset`, `RAM`, `Processor`, `GPU`, `ROM`, `3.5mm Jack`, `Sensors`, `Price`) VALUES
(1, ' Redmi Note 10', 'Redmi-note10', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Gorilla Glass 3 front, plastic body', 179, 6, 'Full HD+ 1080 x 2400 pixels (409 ppi)', 'Super AMOLED Touchscreen', ' Corning Gorilla Glass 3', 'Quad 48+8+2+2 Megapixel', 'Ultra HD (2160p)', '13 Megapixel', 'F/2.5, HDR, 1/3.06″, 1.12µm & more', 'Lithium-polymer 5000 mAh (non-removable)', '33W Fast Charging (50% in 25 min, 100% in 74 min)', 'Android 11 (MIUI 12)', 'Qualcomm Snapdragon 678 (11 nm)', 6, 'Octa core, up to 2.0', 'Adreo 612', 128, 'Yes', 'Fingerprint, Accelerometer, Gyroscope, Proximity, E-Compass', 24000),
(2, 'Vivo Y21', 'Vivo_Y21', '2G, 3G, 4G', 'Dual Nano SIM', 'yes', 'Glass front, plastic body', 182, 7, 'HD+ 720 x 1600 pixels (270 ppi)', 'IPS LCD Touchscreen', 'AMOLED Touchscreen', 'Dual 13+2 Megapixel', 'Full HD (1080p)', '8 Megapixel', 'F/2.0 aperture', 'Lithium-polymer 5000 mAh (non-removable)', '18W Fast Charging', 'Android 11 (Funtouch 11.1)', 'MediaTek Helio P35 (12nm)', 4, 'Octa core, up to 2.35', 'PowerVR GE8320', 64, 'Yes', 'Fingerprint, Accelerometer, Gyroscope, Proximity, E-Compass', 14990),
(3, 'Xiaomi Poco M3', 'Xiaomi_Poco_M3', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Gorilla Glass 3 front, plastic body', 198, 7, 'Full HD+ 1080 x 2340 pixels (395 ppi)', 'IPS LCD Touchscreen', 'Corning Gorilla Glass 3', 'Triple 48+2+2 Megapixel', 'Full HD (1080p)', '8 Megapixel', 'F/2.1, 1/4.0″, 1.12µm, panorama & more', 'Lithium-polymer 6000 mAh (non-removable)', '18W Fast Charging', 'Android 10, planned upgrade to Android 11 (MIUI 12', 'Qualcomm Snapdragon 662 (11 nm)', 4, 'Octa core, up to 2.0', 'Adreno 610', 64, 'Yes', 'Fingerprint, Accelerometer, Proximity, E-Compass', 14999),
(4, 'Redmi Note 10 Pro', 'Xiaomi_Redmi_Note_10_Pro', '2G, 3G, 4G', 'Dual Nano SIM', 'yes', 'Gorilla Glass 5 front & back, plastic frame – 108MP version', 193, 7, 'Full HD+ 1080 x 2400 pixels (395 ppi)', 'AMOLED Touchscreen – 108 MP version', 'Corning Gorilla Glass 5', 'Quad 108+8+5+2 Megapixel or Quad 64+8+5+2 Megapixel', 'Ultra HD (2160p)', '16 Megapixel', 'F/2.5, HDR, 1/3.06″, 1.12µm & more', 'Lithium-polymer 5020 mAh (non-removable)', '33W Fast Charging (59% in 30 minutes)', 'Android 11 (MIUI 12)', 'Qualcomm Snapdragon 732G (8 nm)', 6, 'Octa core, up to 2.3', 'Adreno 618', 128, 'Yes', 'Fingerprint, Accelerometer, Gyroscope, Proximity, E-Compass', 27999),
(5, 'Oppo A16', 'Oppo_A16', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Glass front, plastic body', 190, 7, 'HD+ 720 x 1600 pixels (269 ppi)', 'IPS LCD Touchscreen', 'Not Specified', 'Triple 13+2+2 Megapixel', 'Full HD (1080p)', '8 Megapixel', 'F/2.0, HDR & more', 'Lithium-polymer 5000 mAh (non-removable)', '10W Fast Charging', 'Android 11 (ColorOS 11.1)', 'Mediatek Helio G35 (12nm)', 4, 'Octa core, up to 2.35', 'PowerVR GE8320', 64, 'Yes', 'Fingerprint, Accelerometer, Proximity, E-Compass', 14990),
(6, 'Realme C21', 'Realme_C21', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Glass front, Plastic body', 190, 7, 'HD+ 720 x 1600 pixels (270 ppi)', 'IPS LCD Touchscreen', 'Not Specified', 'Triple 13+2+2 Megapixel', 'Full HD (1080p)', '5 Megapixel', 'HDR, f/2.2, 1/5.0″, 1.12µm & more', 'Lithium-polymer 5000 mAh (non-removable)', '10W Fast Charging', 'Android 10 (Realme UI)', 'Mediatek Helio G35 (12 nm)', 4, 'Octa core, up to 2.3', 'PowerVR GE8320', 64, 'Yes', 'Fingerprint, Accelerometer, Proximity, E-Compass', 11990),
(7, 'Samsung Galaxy A12', 'Samsung_Galaxy_A12', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Glass front, plastic body', 205, 7, 'HD+ 720 x 1600 pixels (270 ppi)', 'PLS IPS Touchscreen', 'Not Specified', 'Quad 48+5+2+2 Megapixel', 'Full HD (1080p)', '8 Megapixel', 'F/2.2 aperture', 'Lithium-polymer 5000 mAh (non-removable)', '15W Fast Charging', 'Android 10', 'Mediatek Helio P35 (12nm)', 6, 'Octa core, up to 2.35', 'PowerVR GE8320', 128, 'Yes', 'Fingerprint, Accelerometer, Proximity', 18000),
(8, 'Realme Narzo 30', 'Realme_Narzo_30', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Glass front, plastic body', 192, 7, 'Full HD+ 1080 x 2400 pixels (405 ppi)', 'IPS LCD Touchscreen', 'Unspecified', 'Triple 48+2+2 Megapixel', '4K Ultra HD (2160p), gyro-EIS', '16 Megapixel', 'F/2.5 aperture, 1/3.0″, 1.0µm, HDR & more', 'Lithium-polymer 5000 mAh (non-removable)', '30W Fast Charging (100% in 65 min)', 'Android 11 (Realme UI 2.0)', 'Mediatek Helio G95 (12 nm)', 6, 'Octa core, up to 2.05 ', 'Mali-G76 MC4', 128, 'Yes', 'Fingerprint, Accelerometer, Gyroscope, Proximity, E-Compass', 19990),
(9, 'Samsung Galaxy F22', 'Samsung_Galaxy_F22', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Glass front, plastic body', 203, 6, 'HD+ 720 x 1600 pixels (274 ppi)', 'Super AMOLED Touchscreen', 'Unspecified', 'Quad 48+8+2+2 Megapixel', '	Full HD (1080p)', '13 Megapixel', 'F/2.2 aperture, 1/3.1″, 1.12µm & more', 'Lithium-polymer 6000 mAh (non-removable)', '15W Fast Charging', 'Android 11 (One UI Core 3.1)', 'Mediatek Helio G80 (12 nm)', 6, '	Octa core, up to 2.0 ', 'Mali-G52 MC2', 128, 'Yes', 'Fingerprint, Accelerometer, Proximity, Gyroscope, E-Compass', 19499),
(10, 'Realme 8', 'Realme_8', '2G, 3G, 4G', 'Dual Nano SIM', 'Yes', 'Glass front, plastic body', 177, 6, 'Full HD+ 1080 x 2400 pixels (411 ppi)', 'Super AMOLED Touchscreen', 'Unspecified', 'Quad 64+8+2+2 Megapixel', '4K Ultra HD (2160p), gyro-EIS', '16 Megapixel', 'F/2.5 aperture, 1/3.0″, 1.0µm, HDR & more', 'Lithium-polymer 5000 mAh (non-removable)', '30W Fast Charging (50% in 26 min, 100% in 65 min)', 'Android 11 (Realme UI 2.0)', 'Mediatek Helio G95 (12 nm)', 8, 'Octa core, up to 2.05', 'Mali-G76 MC4', 128, 'Yes', 'Fingerprint, Accelerometer, Gyroscope, Proximity, E-Compass', 22990),
(11, 'Apple iPhone 11', 'Apple_iPhone_11', '2G, 3G, 4G', 'Nano / Electronic SIM', 'No', 'Gorilla Glass front & back, 7000 series aluminum frame', 194, 6, '828 x 1792 pixels (326 ppi)', 'Liquid Retina IPS LCD Touchscreen', 'Scratch-resistant glass, oleophobic coating', 'Dual 12+12 Megapixel', 'Ultra HD (2160p), HDR, stereo sound rec.', 'Dual 12 Megapixel + SL 3D', 'F/2.2, HDR, 23mm (wide), depth / biometrics sensor', 'Lithium-ion 3110 mAh (non-removable)', '18W Fast Charging  (50% in 30 min), Qi Wireless Charging\r\nUSB Power De', 'iOS 13, upgradable to iOS 13.4', 'Apple A13 Bionic (7 nm+)', 4, 'Hexa-core, up to 2.65 ', 'Apple GPU (4-core graphics)', 128, 'Yes', 'Face ID, Accelerometer, Proximity, Gyroscope, E-Compass, Barometer', 93999),
(12, 'Apple iPhone 12 Pro', 'Apple_iPhone _2 Pro_Max', '2G, 3G, 4G, 5G', 'Nano / Electronic SIM', 'No', 'Gorilla Glass front & back, stainless steel frame', 228, 7, 'Quad HD+ 1284 x 2778 pixels (458 ppi)', 'Super Retina XDR OLED Touchscreen', 'Scratch-resistant glass, oleophobic coating', 'Quad 12+12+12 Megapixel + TOF 3D', '4K (2160p), Dolby Vision HDR, stereo sound rec.', 'Dual 12 Megapixel + SL 3D', 'F/2.2, HDR, depth / biometrics sensor', 'Lithium-ion (non-removable)', '18W Fast Charging USB Power Delivery 2.0', 'iOS 14', 'Apple A14 Bionic (5 nm)', 6, 'Hexa-core, up to 2.8 ', 'Apple GPU (4-core graphics)', 128, 'Yes', 'Face ID, Accelerometer, Proximity, Gyroscope, E-Compass, Barometer', 161999);

-- --------------------------------------------------------

--
-- Table structure for table `offeritem`
--

CREATE TABLE `offeritem` (
  `offer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `cetagory` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `offerPercentage` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offeritem`
--

INSERT INTO `offeritem` (`offer_id`, `name`, `price`, `cetagory`, `product_id`, `offerPercentage`, `image`) VALUES
(1101, 'Apple iPhone 12 Pro', 145800, 'mobile', 12, 10, 'Apple_iPhone _2 Pro_Maxo'),
(1102, 'Xiaomi Poco M3', 12750, 'mobile', 3, 15, 'Xiaomi_Poco_M3o'),
(1103, ' Xiaomi Haylou Solar LS05-1 ', 2100, 'smartwatch', 3, 10, 'xiaomiHaylou'),
(1104, 'Xiaomi Amazfit A1952 GTR 2 ', 11800, 'smartwatch', 8, 5, 'XiaomiAmazfitGTS2'),
(1105, 'Asus Cerberus V2', 4700, 'headphone', 10, 8, 'Asus Cerberus V2'),
(1106, 'Havit HV-H100d', 500, 'headphone', 8, 17, 'Havit HV-H100d');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `Status` int(11) NOT NULL COMMENT '1=new, 2=old, 3=VIP, 4=banned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UserId`, `UserName`, `Email`, `Password`, `CreatedDate`, `Status`) VALUES
(1, 'Shohanur Rahman', 'shohan021@gmail.com', 'ecce65477690940852c32dea1e6414ed', '2021-10-02 09:08:33', 1),
(4, 'Samina', 'samina021@gmail.com', '0590bea5e67cb3a39ac6aee56e7c06f2', '2021-10-02 12:52:09', 4),
(9, 'fahim', 'fahim22@gamil.com', 'fe43b8724484d0ce6e45ee6d498fd19b', '2021-10-03 02:30:54', 1),
(10, 'karim Uddin', 'karim01@gmail.com', '932ff728b8b1cb9fc988589fc90ae965', '2021-10-04 05:24:42', 1),
(11, 'moni', 'moni88@gmail.com', '5db2b572d51de495a8eedd363fd9bfb4', '2021-10-04 05:30:33', 1),
(12, 'manik', 'manik74@gmail.com', '7ed1fa2d459cb5f4747018d829869870', '2021-10-04 05:33:44', 3),
(13, 'tasmia', 'tasmia12@gmail.com', '8400dea24f7c33f8451dfd0172879eac', '2021-10-04 07:47:51', 1),
(14, 'ratul', 'ratul2@gmail.com', '2fe77b12b8793a540fe830760aab3095', '2021-10-05 05:39:44', 1),
(15, 'SAMINA ', 'samina12@gmail.com', '889123d21800349fe3c10af83eba64e1', '2021-10-05 01:24:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smartwatch`
--

CREATE TABLE `smartwatch` (
  `WatchID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Compatibility` varchar(50) NOT NULL,
  `Bluetooth` varchar(50) NOT NULL,
  `BatteryCapacity` varchar(50) NOT NULL,
  `Display` varchar(50) NOT NULL,
  `Weight` int(11) NOT NULL COMMENT 'in gram',
  `BatteryLife` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smartwatch`
--

INSERT INTO `smartwatch` (`WatchID`, `name`, `image`, `Compatibility`, `Bluetooth`, `BatteryCapacity`, `Display`, `Weight`, `BatteryLife`, `price`) VALUES
(1, 'Xiaomi IMILAB KW66', 'Xiaomi_IMILAB_KW66', 'Android 5, iOS 9.0 and above', '5.0', '340 mAh', '1.28-inches 3D TFT', 54, '30 days', 2600),
(2, 'Lenovo S2', 'Lenovo_S2', ' Android 5.0 or above,iOS 9.0 or above', ' 4.2', '180mAh', '1.4inch IPS LCD 240x240pixels AMOLED Display', 50, '25 days', 1700),
(3, ' Xiaomi Haylou Solar LS05-1 ', 'xiaomiHaylou', 'Android 5, iOS 9.0 and above', 'BT4.0', '340mAH', '1.28 inch TFT display screen', 43, ' 20-days', 2350),
(4, ' Xiaomi XPAW001 Mibro Air', 'Xiaomi_XPAW001_Mibro_Air', 'Android 5, iOS 9.0 and above', 'V5.0', '200 mAh', '1.28-inches TFT', 40, '10 days', 3355),
(5, 'Xiaomi A2017 Amazfit Bip U', 'XiaomiA2017', 'Android 5, iOS 9.0 and above', 'BT5.0/BLE', '200 mAh', '1.43\" full color IPS LCD', 31, '4 to 9 days', 4375),
(6, ' Xiaomi Amazfit GTS 2 ', 'xiaomiAmazfit', 'Android 5, iOS 9.0 and above', '5.0 BLE', '220 mAh', '1.55 inch AMOLED Display', 20, '25 days', 8250),
(7, 'Huawei Watch Fit 1.64\" Vivid ', 'huaawei', 'Android 5, iOS 9.0 and above', 'BT 5.0', '340mAH', ' 1.64 inch AMOLED 456 x 280 HD', 21, '10 days', 9999),
(8, 'Xiaomi Amazfit A1952 GTR 2 ', 'XiaomiAmazfitGTS2', 'Android 5, iOS 9.0 and above', '5.0', '471 mAh', '1.39” HD Color AMOLED', 32, '25 days', 12500),
(9, ' Xiaomi Mi XMWTCL02', 'xiaomiMiXMWTCL02', 'Android 5, iOS 9.0 and above', '5.0', '200 mAh', ' 1.39 inches (454 x 454 pixels) AMOLED', 32, '16 days', 9499),
(10, ' Zeblaze Neo 3', 'neo-3', 'Android 5, iOS 9.0 and above', '4.0', '180 mAh', '1.3 inches Full-round Screen', 44, '20 days', 2750),
(11, 'Zeblaze GTS', 'ZeblazeGTS', 'Android 5, iOS 9.0 and above', 'BT4.0', '240 mAh', '1.3 inch', 38, '20 days', 2450),
(12, 'Lenovo S2 Dual Strap', 'lenovo-s3', 'Android 5.0 or above, iOS 9.0 or above', '4.2', '180mAh', '1.4inch IPS LCD 240x240pixels AMOLED Display', 50, '25 days', 1750);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `id`, `image`) VALUES
(1, 'Shohanur Rahman', '180204127', 'sajib'),
(2, 'Samina Mahjabeen', '180204129', 'samina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headphone`
--
ALTER TABLE `headphone`
  ADD PRIMARY KEY (`HeadphoneID`) USING BTREE;

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`MobileID`);

--
-- Indexes for table `offeritem`
--
ALTER TABLE `offeritem`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `smartwatch`
--
ALTER TABLE `smartwatch`
  ADD PRIMARY KEY (`WatchID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headphone`
--
ALTER TABLE `headphone`
  MODIFY `HeadphoneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `MobileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offeritem`
--
ALTER TABLE `offeritem`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1108;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `smartwatch`
--
ALTER TABLE `smartwatch`
  MODIFY `WatchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
