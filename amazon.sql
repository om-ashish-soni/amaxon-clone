-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 07:36 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctgrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('Zebronics Zeb-Thunder Wireless BT Headphone Comes with 40mm Drivers, AUX Connectivity, Built in FM, Call Function, 9Hrs* Playback time and Supports Micro SD Card (Blue)', 1500, '100', 'amazone clone PVT ltd', 'Soft & comfortable earcups: Listen to music, podcasts and more for long hours with soft ear cups making it super comfortable for daily wear Adjustable headband: Adust your headband to your comfortable best while you work or listen to music 9hrs* Playback ', '11a55', NULL),
('redmi 10 4gb ram 128gb external storage', 100000, '98', 'clone amazon pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctgrs_list`
--

CREATE TABLE `ctgrs_list` (
  `ctgrs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctgrs_list`
--

INSERT INTO `ctgrs_list` (`ctgrs`) VALUES
('pantry'),
('mobiles'),
('fashion'),
('essentials'),
('electronics'),
('home'),
('appliances');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('Mi Notebook Horizon Edition 14 Intel Core i5-10210U 10th Gen 14-inch (35.56 cms) Thin and Light Laptop(8GB/512GB SSD/Windows 10/Nvidia MX350 2GB Graphics/Grey/1.35Kg), XMA1904-AR+Webcam', 55000, '9', 'amazone clone PVT ltd', 'Mi Notebook Horizon Edition 14 Intel Core i5-10210U 10th Gen 14-inch (35.56 cms) Thin and Light Laptop(8GB/512GB SSD/Windows 10/Nvidia MX350 2GB Graphics/Grey/1.35Kg), XMA1904-AR+Webcam', '11a55', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '2', 'clone amxone pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a63', NULL),
('desktop pc', 50000, '95', 'amazone clone PVT ltd', '8gb ram , 64gb internanl storage , 24mp camera , selfie camera, fingerprint sensor lock', 'amaxon', 'img/2021_07_05_22_30_05amaxona1.png');

-- --------------------------------------------------------

--
-- Table structure for table `essentials`
--

CREATE TABLE `essentials` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `essentials`
--

INSERT INTO `essentials` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('Hyper Adam Born to Win 33 Liter / 20 inch Laptop Backpack Anti - Theft Bag (Navy Blue)', 667, '99', 'amazone clone PVT ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11a55', NULL),
('Gizga Reversible 15.6-inch Laptop Sleeve', 149, '15', 'amazone clone PVT ltd', 'Gizga reversible laptop sleeve protects your laptop from those unwanted scratches and dust when you leave your laptop after work Attractive red and black color Safe and attractive packing Type: Sleeves and slip cases Light soft, Study and comfortable, bes', '11a55', NULL),
('redmi 10 4gb ram 128gb external storage', 100, '100', 'new clone amazon pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a58', NULL),
('redmi 10 4gb ram 128gb external storage', 100, '1', 'clone amxone pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a63', NULL),
('mala', 100, '100', 'clone amxone pvt ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11a63', NULL),
('topi', 200, '1', 'clone amxone pvt ltd', 'highly skilled personality development helping book', '11a63', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('tshirt', 699, '200', 'amazone clone PVT ltd', 'Care Instructions: Machine Wash Fit Type: Regular Fit Material - 100% Cotton except Grey Melange (which is 60% Cotton and 40% Polyester) Fit Type - regular fit Half Sle', '11a55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('Samsung 324 L 2 Star Inverter Frost Free Double Door Refrigerator(RT34M5538S8/HL, Elegant Inox, Convertible)', 100000, '100', 'amazone clone PVT ltd', 'As per BEE guidelines, energy rating will see a 1 point drop in all 2020 models. Hence, a 2020 2Star is equivalent to 2019 3 Star model. Frost Free, Double Door: Auto defrost to stop ice-build up. Hot Stamping :Yes Capacity 324 L: Suitable for families wi', '11a55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('redmi 10 4gb ram 128gb external storage', 9999, '7', 'new clone amazon pvt ltd', '8gb ram , 64gb internanl storage , 24mp camera , selfie camera, fingerprint sensor lock', '11a54', NULL),
('oneplus 10 4gb ram 128gb external storage', 8000, '28', 'clone amazon pvt ltd', '8gb ram , 64gb internanl storage , 24mp camera , selfie camera, fingerprint sensor lock', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '1', 'clone amazon pvt ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 100, '1', 'clone amazon pvt ltd', 'redmi 10 4gb ram 128gb external storageredmi 10 4gb ram 128gb external storage', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '100', 'clone amazon pvt ltd', 'lithium ion battery, 35WPH, 4 batteries, antiglare, RAM TYPE:DDR4', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 100000, '100', 'clone amazon pvt ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '1', 'clone amazon pvt ltd', '', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '100', 'clone amazon pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a56', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '1', 'amazone clone PVT ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11ea57', NULL),
('mala', 100, '100', 'amazone clone PVT ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11ea57', NULL),
('redmi 10 4gb ram 128gb external storage', 100, '1373', 'amazone clone PVT ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11a60', NULL),
('mala', 10000, '1', 'clone amazon pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a61', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '1', 'clone amxone pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a63', NULL),
('redmi 10 4gb ram 128gb external storage', 100, '1', 'clone amxone pvt ltd', 'Laptopn Backpack Easy To Carry Light Weight Stylish Multi-purpose Backpack A versatile daypack or something to carry to the gym, this is a sporty lightweight backpack that works in the urban environment as well as outdoors with dedicated space for your wa', '11a63', NULL),
('redmi 10 4gb ram 128gb external storage', 10000, '1', 'clone amxone pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a63', NULL),
('redmi 10 4gb ram 128gb external storage', 100000, '100', 'clone amxone pvt ltd', 'xtra large screee n 5.6 inch height quad camera ultra hd screen resolution', '11a63', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pantry`
--

CREATE TABLE `pantry` (
  `item` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `seller_admin` varchar(255) DEFAULT NULL,
  `times_now` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pantry`
--

INSERT INTO `pantry` (`item`, `price`, `quantity`, `seller`, `dt`, `seller_admin`, `times_now`) VALUES
('wheat and flour', 100, '68', 'amazone clone PVT ltd', 'highly skilled personality development helping book', '11a64', 'img/2006_01_01_00_45_1611a64img.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
