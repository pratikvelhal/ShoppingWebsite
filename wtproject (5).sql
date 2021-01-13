-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2015 at 06:05 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `pic path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `cost`, `pic path`) VALUES
('ac1', 'Zapskin Silicon Protector Laptop Keyboard Skin', 149, 'images/Accessories/ac1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE IF NOT EXISTS `cabinet` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(15) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`id`, `name`, `cost`, `picpath`) VALUES
('cb1', 'Circle CC830 Full Tower Cabinet', 4800, 'images/cabinet/cb1.jpg'),
('cb10', 'Zebronics Rambo Mini Tower Cabinet', 1900, 'images/cabinet/cb10.jpg'),
('cb11', 'Zebronics Stacks ZEB-523B Without SMPS Full Tower Cabinet', 4800, 'images/cabinet/cb11.jpg'),
('cb12', 'Zebronics Dashing Plus Full Tower Cabinet', 999, 'images/cabinet/cb12.jpg'),
('cb2', 'Zebronics Jadugar Mid Tower Cabinet', 1000, 'images/cabinet/cb2.jpg'),
('cb3', 'Zebronics Canyon Full Tower Cabinet', 1450, 'images/cabinet/cb3.jpg'),
('cb4', 'Antec ASK-4000B-U3 Mid Tower Cabinet', 2820, 'images/cabinet/cb4.jpg'),
('cb5', 'Circle CC830 Full Tower Cabinet', 4649, 'images/cabinet/cb5.jpg'),
('cb6', 'Cooler Master K281 Mid Tower Cabinet', 5689, 'images/cabinet/cb6.jpg'),
('cb7', 'iBall 108 Mid Tower Cabinet', 1800, 'images/cabinet/cb7.jpg'),
('cb8', 'Xigmatek Recon Usb3.0 Mid Tower Cabinet', 2245, 'images/cabinet/cb8.jpg'),
('cb9', 'Xpro Emperor Matx Cabinet', 720, 'images/cabinet/cb9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE IF NOT EXISTS `calculator` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `name`, `cost`, `picpath`) VALUES
('c1', 'Casio Basic', 850, 'images/clc/clc1.jpg'),
('c10', 'Casio DW-200TW-GD Basic', 1090, 'images/clc/clc10.jpg'),
('c11', 'Citizen DW-200TW-GN Basic', 810, 'images/clc/clc11.jpg'),
('c12', 'Comix JV-220 Basic', 499, 'images/clc/clc12.jpg'),
('c2', 'Casio GX-16S Basic', 450, 'images/clc/clc2.jpg'),
('c3', 'Casio Basic FX', 525, 'images/clc/clc3.jpg'),
('c4', 'Casio Leaf Basic', 630, 'images/clc/clc4.jpg'),
('c5', 'Casio CT-600 J Basic', 840, 'images/clc/clc5.jpg'),
('c6', 'Casio Basic', 320, 'images/clc/clc6.jpg'),
('c7', 'Citizen Basic', 750, 'images/clc/clc7.jpg'),
('c8', 'Caltrix ST-1786 Basic', 895, 'images/clc/clc8.jpg'),
('c9', 'Casio MJ-120D Bulk Basic (Pack of 5) (12 Digit)', 799, 'images/clc/clc9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `cost`) VALUES
('pc1', 'AMD 3.5 GHz AM3+ FX 6-Core Edition FX-6300 Processor', 8625),
('pc11', 'Intel 3.5 GHz LGA 1155 Core i7 3770K Processor', 29000);

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE IF NOT EXISTS `console` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`id`, `name`, `cost`, `picpath`) VALUES
('gc1', 'Rcube Soroo Psp Black 1 GB Move with Mario Controller', 1899, 'images/gc/gc1.jpg'),
('gc10', 'Sony PlayStation 3 12 GB', 16390, 'images/gc/gc10.jpg'),
('gc11', 'Sony PSP-E1004 CB', 6500, 'images/gc/gc11.jpg'),
('gc12', 'Sony PS2 (with in-built DVD Player)', 10999, 'images/gc/gc12.jpg'),
('gc2', 'General Aux KOIJXP9000 White 8 GB Move with FIFA 15 Controller', 2500, 'images/gc/gc2.jpg'),
('gc3', 'Nintendo 3DS XL', 22490, 'images/gc/gc3.jpg'),
('gc4', 'Mitashi Game In Xtreme +', 2969, 'images/gc/gc4.jpg'),
('gc5', 'Mitashi Game In Thunder Bolt 4 GB', 5490, 'images/gc/gc5.jpg'),
('gc6', 'Parv Collections KS- VIDEO GAME 98000 IN 1', 469, 'images/gc/gc6.jpg'),
('gc7', 'Rcube PSP White 4 GB Move with Mario Controller', 1899, 'images/gc/gc7.jpg'),
('gc8', 'Game In Junior NX', 933, 'images/gc/gc8.jpg'),
('gc9', 'Sony PlayStation 4 (PS4) 500 GB', 37500, 'images/gc/gc9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cpucooler`
--

CREATE TABLE IF NOT EXISTS `cpucooler` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpucooler`
--

INSERT INTO `cpucooler` (`id`, `name`, `cost`, `picpath`) VALUES
('cpu1', 'Cooler Master Hyper TX3 EVO Cooler', 1999, 'images/cpucooler/cpu1.jpeg'),
('cpu10', 'Corsair AF120 120mm Cooler', 1200, 'images/cpucooler/cpu10.jpeg'),
('cpu11', 'Cooler Master SickleFlow X Red 120 mm Cooler', 599, 'images/cpucooler/cpu11.jpeg'),
('cpu12', 'Cooler Master SickleFlow X Blue 120 mm Cooler', 670, 'images/cpucooler/cpu12.jpeg'),
('cpu2', 'Cooler Master Hyper 212X Cooler', 3300, 'images/cpucooler/cpu2.jpeg'),
('cpu3', 'Intel F09a-12b9s2 Cooler', 298, 'images/cpucooler/cpu3.jpeg'),
('cpu4', 'Deepcool Wind Blade 80 Cooler', 399, 'images/cpucooler/cpu4.jpeg'),
('cpu5', 'Deepcool Gammaxx 300 Cooler', 1850, 'images/cpucooler/cpu5.jpeg'),
('cpu6', 'Deepcool GAMMAXX400 Cooler', 1925, 'images/cpucooler/cpu6.jpeg'),
('cpu7', 'Cooler Master XtraFlo Cooler', 1795, 'images/cpucooler/cpu7.jpeg'),
('cpu8', 'Cooler Master CM Essentials 140 Cooler', 789, 'images/cpucooler/cpu8.jpeg'),
('cpu9', 'Corsair AF140 140mm Cooler', 1299, 'images/cpucooler/cpu9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `currentuser`
--

CREATE TABLE IF NOT EXISTS `currentuser` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentuser`
--

INSERT INTO `currentuser` (`username`, `password`) VALUES
('pratik', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `externalharddisk`
--

CREATE TABLE IF NOT EXISTS `externalharddisk` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `externalharddisk`
--

INSERT INTO `externalharddisk` (`id`, `name`, `cost`, `picpath`) VALUES
('ext1', 'Seagate Backup Plus Slim 1 TB External Hard Drive', 4845, 'images/externalharddisk/ext1.jpeg'),
('ext10', 'Seagate Backup Plus Slim 2 TB External Hard Drive (Blue)', 7496, 'images/externalharddisk/ext10.jpeg'),
('ext11', 'Seagate Backup Plus Slim 1 TB External Hard Drive ', 4888, 'images/externalharddisk/ext11.jpeg'),
('ext12', 'Samsung M3 1TB portable USB 3.0 Hard Drive (Black)', 4239, 'images/externalharddisk/ext12.jpeg'),
('ext2', 'Samsung M3 1TB portable USB 3.0 Hard Drive (Black)', 4239, 'images/externalharddisk/ext2.jpeg'),
('ext3', 'Seagate Backup Plus Slim 2 TB External Hard Drive ', 7625, 'images/externalharddisk/ext3.jpeg'),
('ext4', 'Seagate Backup Plus Slim 2 TB External Hard Drive (Red)', 7494, 'images/externalharddisk/ext4.jpeg'),
('ext5', 'WD Passport Ultra 2.5 inch 2 TB External Hard Drive (Titanium)', 4795, 'images/externalharddisk/ext5.jpeg'),
('ext6', 'Seagate Backup Plus Slim 1 TB External Hard Drive (Red)', 4790, 'images/externalharddisk/ext6.jpeg'),
('ext7', 'Seagate Expansion Falcun 1 TB External Hard Disk', 4485, 'images/externalharddisk/ext7.jpeg'),
('ext8', 'Seagate Backup Plus Slim 2 TB External Hard Drive ', 4809, 'images/externalharddisk/ext8.jpeg'),
('ext9', 'WD Elements 2.5 inch 2 TB External Hard Drive (Black)', 7225, 'images/externalharddisk/ext9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gfx`
--

CREATE TABLE IF NOT EXISTS `gfx` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(15) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gfx`
--

INSERT INTO `gfx` (`id`, `name`, `cost`, `picpath`) VALUES
('gfx1', 'ZOTAC NVIDIA GeForce GT 610 Synergy Edition 2 GB DDR3 Graphics Card', 3350, 'images/gfx/gfx1.jpg'),
('gfx10', 'Asus NVIDIA GT610-SL-2GD3-L 2 GB DDR3 Graphics Card', 3342, 'images/gfx/gfx10.jpg'),
('gfx11', 'Sapphire AMD/ATI Radeon R7 260 X 2 GB DDR5 Graphics Card', 9899, 'images/gfx/gfx11.jpg'),
('gfx12', 'Forsa NVIDIA GT630 2 GB DDR3 Graphics Card', 4900, 'images/gfx/gfx12.jpg'),
('gfx2', 'Asus NVIDIA GeForce 210 1 GB DDR3 Graphics Card', 2125, 'images/gfx/gfx2.jpg'),
('gfx3', 'XFX AMD/ATI Radeon HD 5450 2 GB DDR3 Graphics Card', 3450, 'images/gfx/gfx3.jpg'),
('gfx4', 'ZOTAC NVIDIA GTX 780TI 3 GB DDR5 Graphics Card', 54999, 'images/gfx/gfx4.jpg'),
('gfx5', 'Sapphire AMD/ATI Radeon R9 270X Toxic Boost 2 GB DDR5 Graphics Card', 18990, 'images/gfx/gfx5.jpg'),
('gfx6', 'MSI NVIDIA N730-4gd3 2 GB DDR3 Graphics Card', 7299, 'images/gfx/gfx6.jpg'),
('gfx7', 'Asus AMD/ATI HD 5450 2 GB DDR3 Graphics Card', 3950, 'images/gfx/gfx7.jpg'),
('gfx8', 'Gigabyte NVIDIA GV-N610D3-2GI 1.0 2 GB DDR3 Graphics Card', 3400, 'images/gfx/gfx8.jpg'),
('gfx9', 'Inno3d NVIDIA Geforce GT 740 4 GB DDR3 Graphics Card', 9060, 'images/gfx/gfx9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ghead`
--

CREATE TABLE IF NOT EXISTS `ghead` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ghead`
--

INSERT INTO `ghead` (`id`, `name`, `cost`, `picpath`) VALUES
('gh1', 'Steelseries Siberia V2 Frost USB Powered Headset', 8000, 'images/gh/gh1.jpg'),
('gh10', 'Mad Catz AX Pro Wired Gaming Headset', 7999, 'images/gh/gh10.jpg'),
('gh11', 'Tt eSPORTS Shock Spin Headset', 3348, 'images/gh/gh11.jpg'),
('gh12', '4gamers Resident Evil Headset Limited Edition Headset', 3824, 'images/gh/gh12.jpg'),
('gh2', 'Razer Kraken Pro Wired Gaming Headset', 6899, 'images/gh/gh2.jpg'),
('gh3', 'Plantronics Gamecom 788 Wired Gaming Headset', 4100, 'images/gh/gh3.jpg'),
('gh4', 'SteelSeries The Sims 4 Gaming Wired Headset', 3000, 'images/gh/gh4.jpg'),
('gh5', 'Frontech JIL-3442 Wired Gaming Headset', 290, 'images/gh/gh5.jpg'),
('gh6', 'Opal Gaming - GH400 Wired Gaming Headset', 2000, 'images/gh/gh6.jpg'),
('gh7', 'Logitech G230 Stereo Wired Headset', 5792, 'images/gh/gh7.jpg'),
('gh8', 'Tt eSPORTS Shock One (Console) Wired Headset', 6238, 'images/gh/gh8.jpg'),
('gh9', 'Microlab K360 Black & Red Wired Headset', 1490, 'images/gh/gh9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gmouse`
--

CREATE TABLE IF NOT EXISTS `gmouse` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gmouse`
--

INSERT INTO `gmouse` (`id`, `name`, `cost`, `picpath`) VALUES
('gm1', 'Dragon War ELE-G9 Thor Bluetrack with Marco Funtion Mouse Wired Gaming Mouse', 1103, 'images/gm/gm1.jpg'),
('gm10', 'Marvo Scorpion Inforest Wired Gaming Mouse Wired Gaming Mouse', 719, 'images/gm/gm10.jpg'),
('gm11', 'Steelseries Sensei Mouse Mouse', 6999, 'images/gm/gm11.jpg'),
('gm12', 'Tt eSPORTS Level 10 M (White) Wired Laser Gaming Mouse', 5999, 'images/gm/gm12.jpg'),
('gm2', 'Razer Death Adder Chroma Wired Optical Gaming Mouse', 3908, 'images/gm/gm2.jpg'),
('gm3', 'Dragon War Unicorn Blue Sensor with Mouse Mat Mouse', 1109, 'images/gm/gm3.jpg'),
('gm4', 'Logitech G600 MMO Wired Laser Mouse Gaming Mouse', 4299, 'images/gm/gm4.jpg'),
('gm5', 'Steelseries Kana v2 Wired Optical Mouse Gaming Mouse', 3299, 'images/gm/gm5.jpg'),
('gm6', 'Zebronics Jet Wired Optical Mouse Mouse', 150, 'images/gm/gm6.jpg'),
('gm7', 'Razer Naga 2014 Expert MMO Gaming Wired Mouse', 6149, 'images/gm/gm7.jpg'),
('gm8', 'Dragon War Phantom Wired Laser Mouse Gaming Mouse', 3250, 'images/gm/gm8.jpg'),
('gm9', 'Marvo Scorpion Emperor Wired Gaming Mouse Wired Gaming Mouse', 1199, 'images/gm/gm9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headset`
--

CREATE TABLE IF NOT EXISTS `headset` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headset`
--

INSERT INTO `headset` (`id`, `name`, `cost`, `picpath`) VALUES
('hea1', 'Skullcandy S2RFGY-386 In-the-ear Headset (Grey Hot Lime)', 899, 'images/headset/hea1.jpeg'),
('hea10', 'Plantronics ML2 Bluetooth Headset (Black)', 735, 'images/headset/hea10.jpeg'),
('hea11', 'Samsung GH59-11849A Wired Gaming Headset (White)', 350, 'images/headset/hea11.jpeg'),
('hea12', 'Samsung BHM1100NBEGINU In-the-ear Wireless Headset ', 735, 'images/headset/hea12.jpeg'),
('hea2', 'Skullcandy S2RFDA-074 In-the-ear Headset (White)', 899, 'images/headset/hea2.jpeg'),
('hea3', 'Skullcandy S2RFDA-003 In-the-ear Headset (Black)', 899, 'images/headset/hea3.jpeg'),
('hea4', 'Sony Mh750 Wired Headset (Black)', 500, 'images/headset/hea4.jpeg'),
('hea5', 'Samsung GH59-11720A Wired Gaming Headset (White)', 375, 'images/headset/hea5.jpeg'),
('hea6', 'OTD Sony Mh750 Wired Gaming Headset (Black)', 187, 'images/headset/hea6.jpeg'),
('hea7', 'JBL T200A Headset (Red & Grey)', 1999, 'images/headset/hea7.jpeg'),
('hea8', 'Sony SBH20 In-the-ear Headset (Pink)', 2050, 'images/headset/hea8.jpeg'),
('hea9', 'Philips SHE1405BK Wired Headset (Black)', 350, 'images/headset/hea9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `picpath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `cost`, `picpath`) VALUES
('h1', 'Steelseries Siberia V2 Frost USB Powered Headset', 8000, 'images/gh/gh1.jpg'),
('h2', 'Asus NVIDIA GeForce 210 1 GB DDR3 Graphics Card', 2125, 'images/gfx/gfx2.jpg'),
('h3', 'Logitech MK 215 Mouse Combo & Wireless Keyboard', 1399, 'images/Keyboards/key6.jpeg'),
('h4', 'HP X3500 Wireless Comfort Mouse (USB)', 740, 'images/mouse/mou9.jpeg'),
('h5', 'Canon MG 2970 Multi Function Wireless Printer', 5250, 'images/pns/pns8.jpg'),
('h6', 'Acer Aspire V5 Series ', 45000, 'images/notebook/not10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE IF NOT EXISTS `keyboard` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyboard`
--

INSERT INTO `keyboard` (`id`, `name`, `cost`, `picpath`) VALUES
('key1', 'Dell KB212 Wired USB Keyboard', 465, 'images/Keyboards/key1.jpeg'),
('key10', 'Zebronics K11 Wired USB Standard Keyboard (Black)', 313, 'images/Keyboards/key10.jpeg'),
('key11', 'Logitech MK220 Wireless Keyboard and Mouse Combo', 1300, 'images/Keyboards/key11.jpeg'),
('key12', 'Rapoo E1050 Wireless keyboard', 655, 'images/Keyboards/key12.jpeg'),
('key2', 'Zebronics KM2000 Wired Keyboard', 300, 'images/Keyboards/key2.jpeg'),
('key3', 'Logitech MK240 Wireless Keyboard and Mouse Combo', 1550, 'images/Keyboards/key3.jpeg'),
('key4', 'Dell KM113 Wireless Keyboard', 1249, 'images/Keyboards/key4.jpeg'),
('key5', 'Zebronics Companion 5 Wireless Keyboard & Mouse Combo', 695, 'images/Keyboards/key5.jpeg'),
('key6', 'Logitech MK 215 Mouse Combo & Wireless Keyboard (Black)', 1399, 'images/Keyboards/key6.jpeg'),
('key7', 'TacGears TG-16 Mini Wired USB Small Keyboard', 289, 'images/Keyboards/key7.jpeg'),
('key8', 'Zebronics K15 Wired USB Standard Keyboard', 300, 'images/Keyboards/key8.jpeg'),
('key9', 'Microsoft Wireless Desktop 800 USB Keyboard and Mouse Combo', 1530, 'images/Keyboards/key9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lbag`
--

CREATE TABLE IF NOT EXISTS `lbag` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lbag`
--

INSERT INTO `lbag` (`id`, `name`, `cost`, `picpath`) VALUES
('lb1', 'HP 15 inch Laptop Backpack', 569, 'images/lb/lb1.jpg'),
('lb10', 'Wildcraft Streak 20 L Laptop Backpack', 1050, 'images/lb/lb10.jpg'),
('lb11', 'Tommy Hilfiger Biker Club Alaska 23.6 L Medium Laptop Backpack', 1923, 'images/lb/lb11.jpg'),
('lb12', 'Aarip Tycoon 15 inch Laptop Backpack', 592, 'images/lb/lb12.jpg'),
('lb2', 'Lenovo Eternity 15.6 inch Backpack', 850, 'images/lb/lb2.jpg'),
('lb3', 'Kooltopp KT416-01 Rain Cover For Laptop Bag', 229, 'images/lb/lb3.jpg'),
('lb4', 'Samsung 15 inch Laptop Backpack', 990, 'images/lb/lb4.jpg'),
('lb5', 'Axsglow 15.6 inch Laptop Backpack', 499, 'images/lb/lb5.jpg'),
('lb6', 'Axsglow 15.6 inch Expandable Laptop Backpack', 399, 'images/lb/lb6.jpg'),
('lb7', 'Wildcraft Ace 21 L Laptop Backpack', 1150, 'images/lb/lb7.jpg'),
('lb8', 'Acer Backpack', 999, 'images/lb/lb8.jpg'),
('lb9', 'Axsglow 15.6 inch Laptop Backpack', 297, 'images/lb/lb9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lcdmonitor`
--

CREATE TABLE IF NOT EXISTS `lcdmonitor` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lcdmonitor`
--

INSERT INTO `lcdmonitor` (`id`, `name`, `cost`, `picpath`) VALUES
('lcd1', 'Dell E1914H 18.5 inch LED Backlit LCD Monitor', 5545, 'images/lcdmonitor/lcd1.jpeg'),
('lcd10', 'LG 19 inch LED Backlit LCD - 19M37A Monitor (Black)', 5990, 'images/lcdmonitor/lcd10.jpeg'),
('lcd11', 'LG 16M35A 16 inch LED Backlit LCD Monitor (Black)', 5499, 'images/lcdmonitor/lcd11.jpeg'),
('lcd12', 'TacGears 15 inch LCD - TG-15-TFT Monitor (Black)', 3199, 'images/lcdmonitor/lcd12.jpeg'),
('lcd2', 'Dell S2240L 21.5 inch LED Backlit LCD Monitor (Black)', 9249, 'images/lcdmonitor/lcd2.jpeg'),
('lcd3', 'Samsung 18.5 inch LS19D300NY/XL LED Backlit LCD Monitor', 6248, 'images/lcdmonitor/lcd3.jpeg'),
('lcd4', 'Dell 21.5 inch LED Backlit LCD - S2240T Monitor', 10550, 'images/lcdmonitor/lcd4.jpeg'),
('lcd5', 'AOC 15.6 inch LED Backlit LCD', 4399, 'images/lcdmonitor/lcd5.jpeg'),
('lcd6', 'Acer P166HQL 15.6 inch LED Backlit LCD Monitor (Black)', 4600, 'images/lcdmonitor/lcd6.jpeg'),
('lcd7', 'Acer V196HQL 18.5 inch LED Backlit LCD Monitor (Black)', 5850, 'images/lcdmonitor/lcd7.jpeg'),
('lcd8', 'Dell E2014H 19.5 inch LED Backlit LCD Monitor', 6598, 'images/lcdmonitor/lcd8.jpeg'),
('lcd9', 'Dell 19.5 inch LED Backlit LCD - E2015HV Monitor', 6290, 'images/lcdmonitor/lcd9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ltable`
--

CREATE TABLE IF NOT EXISTS `ltable` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ltable`
--

INSERT INTO `ltable` (`id`, `name`, `cost`, `picpath`) VALUES
('lt1', 'Portonics My Buddy + POR 704 Laptop Cooling Table', 1710, 'images/lt/lt1.jpg'),
('lt10', 'Pripson Engineered Wood Portable Laptop Table', 1390, 'images/lt/lt10.jpg'),
('lt11', 'DGB Jumbo Value Plus Cooling Table Cooling Pad', 1999, 'images/lt/lt11.jpg'),
('lt12', 'Gadget Bucket Ergonomic adjustable laptop table with fan, e-table Cooling Pad', 978, 'images/lt/lt12.jpg'),
('lt2', 'Everything Imported Portable Wooden Laptop Table Cooling Pad', 1250, 'images/lt/lt2.jpg'),
('lt3', 'Parrk Laptop Table Cooling Pad', 680, 'images/lt/lt3.jpg'),
('lt4', '7Trees Laptop Desk Cooling Pad', 2490, 'images/lt/lt4.jpg'),
('lt5', 'DGB Dime U2 Multi functional Table (Blue) Cooling Pad', 1379, 'images/lt/lt5.jpg'),
('lt6', 'DGB Dime U2 Multi functional Table (Blue) Cooling Pad', 913, 'images/lt/lt6.jpg'),
('lt7', 'Speed Cool table Cooling Pad', 1049, 'images/lt/lt7.jpg'),
('lt8', 'Ekta Product Solid Wood Portable Laptop Table', 1090, 'images/lt/lt8.jpg'),
('lt9', 'Fitizen ZENDESK Go-15 ', 3239, 'images/lt/lt9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE IF NOT EXISTS `motherboard` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(50) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`id`, `name`, `cost`, `picpath`) VALUES
('mb1', 'MSI X99a Godlike Gaming Motherboard', 74000, 'images/motherboard/mb1.jpg'),
('mb10', 'Gigabyte GA-F2A88XM-D3H Motherboard', 7499, 'images/motherboard/mb10.jpg'),
('mb11', 'Zebronics 945G Motherboard', 1875, 'images/motherboard/mb11.jpg'),
('mb12', 'Frontech 945 Motherboard', 3000, 'images/motherboard/mb12.jpg'),
('mb2', 'Intel DZ77RE-75K Motherboard', 40000, 'images/motherboard/mb2.jpg'),
('mb3', 'Gigabyte G1 Sniper 5 Moherboard', 32990, 'images/motherboard/mb3.jpg'),
('mb4', 'Asus X99-A Motherboard', 29450, 'images/motherboard/mb4.jpg'),
('mb5', 'Gigabyte GA-Z97X-Soc Force LGA 1150 Intel Z97 HDMI Sata 6Gb/S USB 3.0 Atx Intel Motherboard', 23574, 'images/motherboard/mb5.jpg'),
('mb6', 'Asrock Fatal1ty-X99X-Killer Motherboard', 27699, 'images/motherboard/mb6.jpg'),
('mb7', 'Supermicro X10SRI-F Motherboard', 25000, 'images/motherboard/mb7.jpg'),
('mb8', 'Biostar Hi-Fi Z87W Motherboard', 9260, 'images/motherboard/mb8.jpg'),
('mb9', 'Asus CROSSHAIR V Formula Motherboard', 19800, 'images/motherboard/mb9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE IF NOT EXISTS `mouse` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`id`, `name`, `cost`, `picpath`) VALUES
('mou1', 'Logitech B175 Wireless Mouse (USB)', 650, 'images/mouse/mou1.jpeg'),
('mou10', 'Allen A-901 Wired Optical Mouse (USB, Black)', 149, 'images/mouse/mou10.jpeg'),
('mou11', 'Dragon War ELE-G9 Thor Bluetrack with Marco Funtion', 1233, 'images/mouse/mou11.jpeg'),
('mou12', 'Smartpro 3D Wired Optical Mouse Gaming Mouse (USB, Black)', 150, 'images/mouse/mou12.jpeg'),
('mou2', 'Dell MS111 3-Button Wired Optical Mouse Mouse', 250, 'images/mouse/mou2.jpeg'),
('mou3', 'Speed - Wireless Optical Mouse (USB, Black)', 299, 'images/mouse/mou3.jpeg'),
('mou4', 'HP X1000 Wired Optical Mouse (USB)', 215, 'images/mouse/mou4.jpeg'),
('mou5', 'HP KY619 3 Button Wired Optical Mouse Mouse (USB, Black)', 288, 'images/mouse/mou5.jpeg'),
('mou6', 'Dell WM123 Wireless Notebook Mouse (USB)', 736, 'images/mouse/mou6.jpeg'),
('mou7', 'TacGears Ebang Wireless Optical Mouse', 319, 'images/mouse/mou7.jpeg'),
('mou8', 'Quantum QHM222 Wired Optical Mouse Mouse (USB, Black)', 87, 'images/mouse/mou8.jpeg'),
('mou9', 'HP X3500 Wireless Comfort Mouse (USB)', 740, 'images/mouse/mou9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mousepad`
--

CREATE TABLE IF NOT EXISTS `mousepad` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mousepad`
--

INSERT INTO `mousepad` (`id`, `name`, `cost`, `picpath`) VALUES
('mp1', 'Dragon War Gaming Mouse Mat (Speed Edition) GP-001 Mousepad', 350, 'images/mp/mp1.jpg'),
('mp10', 'Mad Catz G.L.I.D.E.5 Gaming Surface Mousepad', 680, 'images/mp/mp10.jpg'),
('mp11', 'Dragon War Front Sight Mousepad', 982, 'images/mp/mp11.jpg'),
('mp12', 'Steelseries QcK The Sims 4 Edition Mousepad', 1620, 'images/mp/mp12.jpg'),
('mp2', 'Steelseries QCK Mousepad', 550, 'images/mp/mp2.jpg'),
('mp3', 'Razer Vespula Dual-sided Gaming Mousepad', 1400, 'images/mp/mp3.jpg'),
('mp4', 'Razer Goliathus Speed Edition - Soft Gaming Mouse Mat Medium Mousepad', 945, 'images/mp/mp4.jpg'),
('mp5', 'Dragon War Friction Mousepad', 1150, 'images/mp/mp5.jpg'),
('mp6', 'Cooler Master SGS-4020-KMMM1 Mousepad', 1425, 'images/mp/mp6.jpg'),
('mp7', 'Steelseries QCK + Fnatic (Asphalt Edition) Mousepad', 1499, 'images/mp/mp7.jpg'),
('mp8', 'Steelseries QcK+ NaVi (Splash Edition) Mousepad', 825, 'images/mp/mp8.jpg'),
('mp9', 'Steelseries 67273 Mousepad', 810, 'images/mp/mp9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notebook`
--

CREATE TABLE IF NOT EXISTS `notebook` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notebook`
--

INSERT INTO `notebook` (`id`, `name`, `cost`, `picpath`) VALUES
('not1', 'Asus EeeBook X205TA Notebook (4th Gen Atom Quad Core)', 14999, 'images/notebook/not1.jpeg'),
('not10', 'Acer Aspire V5 Series ', 45000, 'images/notebook/not10.jpeg'),
('not11', 'iBall WQ 149i (Intel 2-in-1 Detachable Laptop)', 12999, 'images/notebook/not11.jpeg'),
('not12', 'HP 15-af114AU Notebook', 26990, 'images/notebook/not12.jpeg'),
('not2', 'HP 15-ac042TU (Notebook)', 28620, 'images/notebook/not2.jpeg'),
('not3', 'Lenovo G50-70 Notebook', 27307, 'images/notebook/not3.jpeg'),
('not4', 'HP 15-ac052TX (Notebook)', 50000, 'images/notebook/not4.jpeg'),
('not5', 'HP 13-C019TU Stream (Notebook)', 15599, 'images/notebook/not5.jpeg'),
('not6', 'HP 15-r250TU (Notebook) ', 22000, 'images/notebook/not6.jpeg'),
('not7', 'HP 15-ac044TU Notebook', 26799, 'images/notebook/not7.jpeg'),
('not8', 'HP 15-ac027TX (Notebook)', 44900, 'images/notebook/not8.jpeg'),
('not9', 'HP 15-af008AX Notebook', 27490, 'images/notebook/not9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pendrive`
--

CREATE TABLE IF NOT EXISTS `pendrive` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendrive`
--

INSERT INTO `pendrive` (`id`, `name`, `cost`, `picpath`) VALUES
('pen1', 'Sandisk Cruzer Blade 16 GB Utility', 350, 'images/pendrive/pen1.jpeg'),
('pen10', 'Sandisk Cruzer Force SDCZ71-016G-B35 USB 16 GB', 450, 'images/pendrive/pen10.jpeg'),
('pen11', 'HP V-210 W - 16 GB Utility Pendrive (Grey)', 510, 'images/pendrive/pen11.jpeg'),
('pen12', 'Sandisk Ultra Dual 16 GB 3.0 On-The-Go Pendrive (Black)', 490, 'images/pendrive/pen12.jpeg'),
('pen2', 'Sandisk Cruzer Blade USB Utility Pendrive 8 GB ', 227, 'images/pendrive/pen2.jpeg'),
('pen3', 'HP V 215 B 16 GB Utility Pendrive (Multicolor)', 514, 'images/pendrive/pen3.jpeg'),
('pen4', 'Sandisk Cruzer Blade 32 GB ', 699, 'images/pendrive/pen4.jpeg'),
('pen5', 'Sandisk Cruzer Switch SDCZ52-016G-B35 USB 16 GB', 450, 'images/pendrive/pen5.jpeg'),
('pen6', 'Hp V 520', 50, 'images/pendrive/pen6.jpeg'),
('pen7', 'HP V-220 W 16 GB Utility Pendrive', 450, 'images/pendrive/pen7.jpeg'),
('pen8', 'SanDisk Cruzer Switch 8 GB Pen Drive', 308, 'images/pendrive/pen8.jpeg'),
('pen9', 'HP V100 W 16 GB Pendrive', 520, 'images/pendrive/pen9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE IF NOT EXISTS `printer` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`id`, `name`, `cost`, `picpath`) VALUES
('pns1', 'Canon PIXMA MG2470 All-in-One Inkjet Printer', 2300, 'images/pns/pns1.jpg'),
('pns10', 'HP LaserJet M1005 Multi-function Printer', 2700, 'images/pns/pns10.jpg'),
('pns11', 'HP DeskJet 2131 All-in-One Printer', 2100, 'images/pns/pns11.jpg'),
('pns12', 'HP M1136 Multi-function Printer', 2350, 'images/pns/pns12.jpg'),
('pns2', 'HP Deskjet Ink Advantage 2645 All-in-One Printer', 5400, 'images/pns/pns2.jpg'),
('pns3', 'HP Deskjet 1510 Multifunction Inkjet Printer(Low Cartridge Cost)', 3200, 'images/pns/pns3.jpg'),
('pns4', 'Canon PIXMA MG3570 All-in-One Inkjet Wireless Printer', 4250, 'images/pns/pns4.jpg'),
('pns5', 'HP Deskjet Ink Advantage 4515 All-in-One Wireless Printer', 2550, 'images/pns/pns5.jpg'),
('pns6', 'HP Deskjet Ink Advantage 2545 All-in-One Wireless Printer', 4000, 'images/pns/pns6.jpg'),
('pns7', 'HP Deskjet Ink Advantage 1515 All-in-One Printer', 4500, 'images/pns/pns7.jpg'),
('pns8', 'Canon MG 2970 Multi Function Wireless Printer', 5250, 'images/pns/pns8.jpg'),
('pns9', 'HP Officejet Pro 3610 Black and White Printer', 5900, 'images/pns/pns9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE IF NOT EXISTS `processor` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`id`, `name`, `cost`, `picpath`) VALUES
('pc1', 'AMD 3.5 GHz AM3+ FX 6-Core Edition FX-6300 Processor', 8625, 'images/processor/pc1.jpg'),
('pc10', 'Intel 3 GHz LGA 2011 i7 5960X Processor', 89400, 'images/processor/pc10.jpg'),
('pc11', 'Intel 3.5 GHz LGA 1155 Core i7 3770K Processor', 29000, 'images/processor/pc11.jpg'),
('pc12', 'AMD FX 9590 Processor\r\n', 21900, 'images/processor/pc12.jpg'),
('pc2', 'Intel 3.1 GHz LGA 1150 i5 4440 Processor', 14399, 'images/processor/pc2.jpg'),
('pc3', 'AMD FX 8350 AMD FX Processor Black Edition', 14490, 'images/processor/pc3.jpg'),
('pc4', 'Intel i3 3220', 7150, 'images/processor/pc4.jpg'),
('pc5', 'Intel 3.2 GHz LGA 1156 i3-550 Processor', 6950, 'images/processor/pc5.jpg'),
('pc6', 'Intel 3.4 GHz LGA 1155 Core i7 3770 Processor', 25499, 'images/processor/pc6.jpg'),
('pc7', 'Intel 3.5 GHz LGA 2011 i7 3970X Processor', 63000, 'images/processor/pc7.jpg'),
('pc8', 'AMD 3.3 GHz AM3 Phenom II 560 Processor', 5200, 'images/processor/pc8.jpg'),
('pc9', 'AMD Athlon 5150 Processor', 3990, 'images/processor/pc9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projector`
--

CREATE TABLE IF NOT EXISTS `projector` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projector`
--

INSERT INTO `projector` (`id`, `name`, `cost`, `picpath`) VALUES
('pj1', 'Acer C120 Projector', 17999, 'images/pj/pj1.jpg'),
('pj10', 'Epson EB-X03 H555C Projector', 18250, 'images/pj/pj10.jpg'),
('pj11', 'BenQ MS504 Projector', 19760, 'images/pj/pj11.jpg'),
('pj12', 'Play PP 002 Portable Projector', 17890, 'images/pj/pj12.jpg'),
('pj2', 'Dell 1210S Projector', 26000, 'images/pj/pj2.jpg'),
('pj3', 'Dell 1220 Projector', 24350, 'images/pj/pj3.jpg'),
('pj4', 'BenQ MS504P Projector', 25000, 'images/pj/pj4.jpg'),
('pj5', 'BenQ MX525 Projector', 19999, 'images/pj/pj5.jpg'),
('pj6', 'Epson EB-S03 Projector', 18550, 'images/pj/pj6.jpg'),
('pj7', 'Acer X1173N Projector', 17990, 'images/pj/pj7.jpg'),
('pj8', 'Hitachi CP-RX250 Projector', 39450, 'images/pj/pj8.jpg'),
('pj9', 'Dell M115HD Projector', 18999, 'images/pj/pj9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE IF NOT EXISTS `psu` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(15) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`id`, `name`, `cost`, `picpath`) VALUES
('psu1', 'Corsair VS650 650 Watt PSU', 4500, 'images/psu/psu1.jpg'),
('psu10', 'iBall 450W Computer Power Supply PPS-255 450 Watts PSU', 845, 'images/psu/psu10.jpg'),
('psu11', 'Seasonic M12II-620 Bronze Evo Edition 620 Watts PSU', 6850, 'images/psu/psu11.jpg'),
('psu12', 'Circle APFC 500 Watts PSU', 2475, 'images/psu/psu12.jpg'),
('psu2', 'Corsair VS450 450 Watt PSU', 2650, 'images/psu/psu2.jpg'),
('psu3', 'Corsair VS550 550 Watt PSU', 3500, 'images/psu/psu3.jpg'),
('psu4', 'Corsair SMPS CX500 500 Watts PSU', 4449, 'images/psu/psu4.jpg'),
('psu5', 'Cooler Master Thunder 450W 450 Watts PSU', 3000, 'images/psu/psu5.jpg'),
('psu6', 'Antec VP650P 650 Watts PSU', 4819, 'images/psu/psu6.jpg'),
('psu7', 'Antec HCG-900 900 Watts PSU', 10099, 'images/psu/psu7.jpg'),
('psu8', 'Cooler Master Silent Pro M2 1000W 1000 Watts PSU', 16899, 'images/psu/psu8.jpg'),
('psu9', 'Seasonic SS1050-XM 1050 Watts PSU', 15990, 'images/psu/psu9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE IF NOT EXISTS `ram` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `name`, `cost`, `picpath`) VALUES
('r1', 'Corsair Vengeance DDR3 4 GB (1 x 4 GB) PC DRAM (CMZ4GX3M1A1600C9)', 1950, 'images/ram/r1.jpg'),
('r10', 'G.Skill RipjawsX DDR3 8 GB (1 x 8 GB) PC DRAM (F3-14900CL10S-8GBXL)', 5900, 'images/ram/r10.jpg'),
('r11', 'Transcend DDR3-1333/PC3-10600 DDR3 2 GB PC RAM (JM1333KLN-2G) Bundle of 5', 7249, 'images/ram/r11.jpg'),
('r12', 'Corsair XMS3 DDR3 8 GB (1 x 8 GB) PC DRAM (CMX8GX3M1A1600C11)', 4750, 'images/ram/r12.jpg'),
('r2', 'Transcend DDR2 2 GB PC DRAM (JM667QLU-2G)', 1199, 'images/ram/r2.jpg'),
('r3', 'G.Skill Ripjaws4 DDR4 32 GB PC (F4-2400C15Q)', 26990, 'images/ram/r3.jpg'),
('r4', 'Corsair Vengeance Pro DDR3 16 GB PC (CMY16GX3M2A1866C9R)', 12420, 'images/ram/r4.jpg'),
('r5', 'ADATA XPG V2 DRAM modules DDR3 8 GB (1 x 8 GB) PC DRAM (AX3U1866W8G10-DGV)', 8700, 'images/ram/r5.jpg'),
('r6', 'Samsung DDR4 DDR4 8 GB (4) Server (M393A1G40DB0-CPB)', 8000, 'images/ram/r6.jpg'),
('r7', 'Kingston HyperX Savage DDR3 8 GB PC (HX321C11SR/8)', 6450, 'images/ram/r7.jpg'),
('r8', 'Kingston HyperX FURY Memory DDR3 8 GB PC (HX318C10FR/8)', 4790, 'images/ram/r8.jpg'),
('r9', 'Simmtronics RAM DDR3 8 GB PC (DLUD3SIM0014)', 4500, 'images/ram/r9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rangeextender`
--

CREATE TABLE IF NOT EXISTS `rangeextender` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangeextender`
--

INSERT INTO `rangeextender` (`id`, `name`, `cost`, `path`) VALUES
('ran1', 'Netgear WN3000RP Universal Wi-Fi Range Extender', 2445, 'images/rangeextender/ran1.jpeg'),
('ran10', 'TP-LINK TL-WA830RE 300 Mbps Wireless N Range Extender', 2099, 'images/rangeextender/ran10.jpeg'),
('ran11', 'TP-LINK 300 Mbps Universal WiFi', 1897, 'images/rangeextender/ran11.jpeg'),
('ran12', 'TP-LINK TL-WA860RE 300 Mbps Wi-Fi Range Extender ', 2399, 'images/rangeextender/ran12.jpeg'),
('ran2', 'TP-LINK TL-WA750RE (White)', 1445, 'images/rangeextender/ran2.jpeg'),
('ran3', 'Netgear WN1000RP Wi-Fi Booster for Mobile', 1550, 'images/rangeextender/ran3.jpeg'),
('ran4', 'Digisol 300 Mbps Wireless Repeater', 1588, 'images/rangeextender/ran4.jpeg'),
('ran5', 'D-Link DAP-1320 Wireless Range Extender', 2199, 'images/rangeextender/ran5.jpeg'),
('ran6', 'Netgear WN2000RPT Universal WiFi Range Extender', 1832, 'images/rangeextender/ran6.jpeg'),
('ran7', 'Netgear WN2500RP Universal Dual Band Wi-Fi Range Extender', 4624, 'images/rangeextender/ran7.jpeg'),
('ran8', 'Tenda FH330 (Black)', 1625, 'images/rangeextender/ran8.jpeg'),
('ran9', 'TP-LINK RE200 AC750 Wi-Fi Range Extender', 4150, 'images/rangeextender/ran9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `routers`
--

CREATE TABLE IF NOT EXISTS `routers` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routers`
--

INSERT INTO `routers` (`id`, `name`, `cost`, `picpath`) VALUES
('rou1', 'TP-LINK TL-WR841N 300Mbps Wireless N Router', 1050, 'images/router/rou1.jpeg'),
('rou10', 'Netgear WNR614 Wireless N300 Router (White)', 1375, 'images/router/rou10.jpeg'),
('rou11', 'Digisol DG-HR3300 300 Mbps Wireless Broadband Home', 1084, 'images/router/rou11.jpeg'),
('rou12', 'Netgear D500 N150 Wi-Fi Modem Router', 1250, 'images/router/rou12.jpeg'),
('rou2', 'D-Link DIR-600M Wireless N150 Home Router', 1025, 'images/router/rou2.jpeg'),
('rou3', 'TP-LINK TL-WR740N 150Mbps Wireless N Router', 950, 'images/router/rou3.jpeg'),
('rou4', 'Netgear JNR1010 N150 Wireless Router', 979, 'images/router/rou4.jpeg'),
('rou5', 'D-Link DSL-2750U Wireless N 300 ADSL2+ 4-Port Wi-Fi', 2075, 'images/router/rou5.jpeg'),
('rou6', 'TP-LINK TD-W8968 300 Mbps Wireless N USB ADSL2 Modem ', 1781, 'images/router/rou6.jpeg'),
('rou7', 'D-Link DIR-605L Wireless N300 Cloud Router', 1760, 'images/router/rou7.jpeg'),
('rou8', 'D-Link DIR-615 Wireless N 300 Router', 1559, 'images/router/rou8.jpeg'),
('rou9', 'Tenda Wireless N150 Easy Setup Router', 750, 'images/router/rou9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE IF NOT EXISTS `speaker` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `picpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`, `name`, `cost`, `picpath`) VALUES
('spe1', 'JBL Flip II Wireless Portable Stereo Speaker', 4799, 'images/speaker/spe1.jpeg'),
('spe10', 'Mitashi HT 45BT Laptop/Desktop Speaker', 3369, 'images/speaker/spe10.jpeg'),
('spe11', 'JT Bluedio Professional Bluetooth Wireless ', 3499, 'images/speaker/spe11.jpeg'),
('spe12', 'Lychee Bros LBVT1001 Wireless Car Speaker', 1495, 'images/speaker/spe12.jpeg'),
('spe2', 'Zebronics Node MP3 Player Player (Black)', 250, 'images/speaker/spe2.jpeg'),
('spe3', 'Zebronics Prime 2 Wired Laptop/Desktop Speaker', 250, 'images/speaker/spe3.jpeg'),
('spe4', 'Zebronics Prime 2 Wired Laptop/Desktop Speaker', 299, 'images/speaker/spe4.jpeg'),
('spe5', 'Envent High 5 Lite - ET-SP51125 Home Audio Speaker', 1590, 'images/speaker/spe5.jpeg'),
('spe6', 'Intex IT-880 S OS Wired Laptop/Desktop Speaker', 650, 'images/speaker/spe6.jpeg'),
('spe7', 'Terabyte TB Wired Laptop/Desktop Speaker', 123, 'images/speaker/spe7.jpeg'),
('spe8', 'Quantum QHM611 Wired Laptop/Desktop Speaker', 150, 'images/speaker/spe8.jpeg'),
('spe9', 'Creative Sbs Computer Multimedia Speaker', 2500, 'images/speaker/spe9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` varchar(10) DEFAULT NULL,
  `path1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `path1`) VALUES
('id1', 'images/pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`, `address`, `city`, `contact`) VALUES
('pratik', '1234', 'pratik.velhal@gmail.', 'asdas', 'dfgfgh', 'Mumbai', 35345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cpucooler`
--
ALTER TABLE `cpucooler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currentuser`
--
ALTER TABLE `currentuser`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `externalharddisk`
--
ALTER TABLE `externalharddisk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gfx`
--
ALTER TABLE `gfx`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ghead`
--
ALTER TABLE `ghead`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gmouse`
--
ALTER TABLE `gmouse`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `headset`
--
ALTER TABLE `headset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lbag`
--
ALTER TABLE `lbag`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lcdmonitor`
--
ALTER TABLE `lcdmonitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltable`
--
ALTER TABLE `ltable`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mousepad`
--
ALTER TABLE `mousepad`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notebook`
--
ALTER TABLE `notebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendrive`
--
ALTER TABLE `pendrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `projector`
--
ALTER TABLE `projector`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rangeextender`
--
ALTER TABLE `rangeextender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routers`
--
ALTER TABLE `routers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
