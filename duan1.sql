-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 01:44 PM
-- Server version: 5.7.39
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT '0',
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1. Thanh toán trực tiếp\r\n2. Chuyển khoản\r\n3. Thanh toán  ',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao ',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(579, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '05:07:58pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(580, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 2, '05:08:08pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(581, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 2, '05:09:37pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(582, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '05:10:08pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(583, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '05:10:41pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(584, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 2, '05:10:47pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(585, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '05:10:51pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(586, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '05:50:25pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(587, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '05:51:57pm 02/12/2023', 49890, 0, NULL, NULL, NULL),
(588, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '12:30:03am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(589, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:40:27am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(590, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:40:42am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(591, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:40:54am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(592, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:40:57am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(593, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:41:08am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(594, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:41:10am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(595, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:41:28am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(596, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:41:41am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(597, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:41:53am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(598, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '12:42:15am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(599, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '01:33:33am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(600, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '01:44:56am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(601, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '01:45:14am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(602, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '02:57:07am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(603, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '02:59:11am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(604, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '03:06:47am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(605, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '03:07:28am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(606, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '03:44:21am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(607, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 2, '03:44:27am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(608, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '03:44:34am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(609, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '03:44:44am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(610, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '03:45:45am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(611, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 3, '03:47:52am 03/12/2023', 49890, 0, NULL, NULL, NULL),
(614, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '04:28:55am 03/12/2023', 218895, 2, NULL, NULL, NULL),
(615, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '04:29:03am 03/12/2023', 218895, 1, NULL, NULL, NULL),
(617, 3, 'titi', 'ha noi', '95232142341', 'tiennqph38179@fpt.edu.vn', 1, '04:31:01am 03/12/2023', 218895, 3, NULL, NULL, NULL),
(636, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 2, '08:41:17am 07/12/2023', 43980, 0, NULL, NULL, NULL),
(637, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '09:49:39am 07/12/2023', 10995, 0, NULL, NULL, NULL),
(638, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '09:49:50am 07/12/2023', 10995, 0, NULL, NULL, NULL),
(639, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 2, '09:49:58am 07/12/2023', 10995, 0, NULL, NULL, NULL),
(640, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 2, '10:03:24am 07/12/2023', 10995, 0, NULL, NULL, NULL),
(641, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '10:36:46am 07/12/2023', 10995, 0, NULL, NULL, NULL),
(642, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '10:37:53am 07/12/2023', 6999990, 0, NULL, NULL, NULL),
(649, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '05:01:40pm 07/12/2023', 218895, 0, NULL, NULL, NULL),
(650, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '05:05:40pm 07/12/2023', 28895, 0, NULL, NULL, NULL),
(651, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '05:06:38pm 07/12/2023', 20995, 0, NULL, NULL, NULL),
(652, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '05:10:23pm 07/12/2023', 20995, 0, NULL, NULL, NULL),
(653, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 1, '05:18:37pm 07/12/2023', 6999990, 0, NULL, NULL, NULL),
(654, 3, 'titi', 'ha noi', '12345678901', 'tiennqph38179@fpt.edu.vn', 3, '08:36:24pm 07/12/2023', 79200000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bonho`
--

CREATE TABLE `bonho` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bonho`
--

INSERT INTO `bonho` (`id`, `name`) VALUES
(1, '32GB'),
(2, '64GB'),
(3, '128GB'),
(4, '256GB'),
(5, '512GB'),
(6, '1TB');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `name`, `price`, `soluong`, `thanhtien`, `idbill`, `img`) VALUES
(537, 3, 4, 'iphone 15 red', 21000, 1, 20995, 579, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(538, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 579, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(539, 3, 4, 'iphone 15 red', 21000, 1, 20995, 580, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(540, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 580, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(541, 3, 4, 'iphone 15 red', 21000, 1, 20995, 581, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(542, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 581, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(543, 3, 4, 'iphone 15 red', 21000, 1, 20995, 582, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(544, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 582, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(545, 3, 4, 'iphone 15 red', 21000, 1, 20995, 583, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(546, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 583, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(547, 3, 4, 'iphone 15 red', 21000, 1, 20995, 584, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(548, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 584, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(549, 3, 4, 'iphone 15 red', 21000, 1, 20995, 585, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(550, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 585, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(551, 3, 4, 'iphone 15 red', 21000, 1, 20995, 586, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(552, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 586, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(553, 3, 4, 'iphone 15 red', 21000, 1, 20995, 587, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(554, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 587, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(555, 3, 4, 'iphone 15 red', 21000, 1, 20995, 588, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(556, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 588, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(557, 3, 4, 'iphone 15 red', 21000, 1, 20995, 589, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(558, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 589, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(559, 3, 4, 'iphone 15 red', 21000, 1, 20995, 590, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(560, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 590, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(561, 3, 4, 'iphone 15 red', 21000, 1, 20995, 591, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(562, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 591, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(563, 3, 4, 'iphone 15 red', 21000, 1, 20995, 592, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(564, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 592, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(565, 3, 4, 'iphone 15 red', 21000, 1, 20995, 593, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(566, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 593, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(567, 3, 4, 'iphone 15 red', 21000, 1, 20995, 594, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(568, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 594, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(569, 3, 4, 'iphone 15 red', 21000, 1, 20995, 595, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(570, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 595, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(571, 3, 4, 'iphone 15 red', 21000, 1, 20995, 596, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(572, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 596, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(573, 3, 4, 'iphone 15 red', 21000, 1, 20995, 597, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(574, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 597, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(575, 3, 4, 'iphone 15 red', 21000, 1, 20995, 598, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(576, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 598, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(577, 3, 4, 'iphone 15 red', 21000, 1, 20995, 599, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(578, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 599, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(579, 3, 4, 'iphone 15 red', 21000, 1, 20995, 600, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(580, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 600, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(581, 3, 4, 'iphone 15 red', 21000, 1, 20995, 601, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(582, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 601, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(583, 3, 4, 'iphone 15 red', 21000, 1, 20995, 602, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(584, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 602, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(585, 3, 4, 'iphone 15 red', 21000, 1, 20995, 603, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(586, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 603, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(587, 3, 4, 'iphone 15 red', 21000, 1, 20995, 604, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(588, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 604, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(589, 3, 4, 'iphone 15 red', 21000, 1, 20995, 605, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(590, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 605, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(591, 3, 4, 'iphone 15 red', 21000, 1, 20995, 606, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(592, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 606, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(593, 3, 4, 'iphone 15 red', 21000, 1, 20995, 607, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(594, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 607, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(595, 3, 4, 'iphone 15 red', 21000, 1, 20995, 608, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(596, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 608, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(597, 3, 4, 'iphone 15 red', 21000, 1, 20995, 609, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(598, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 609, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(599, 3, 4, 'iphone 15 red', 21000, 1, 20995, 610, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(600, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 610, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(601, 3, 4, 'iphone 15 red', 21000, 1, 20995, 611, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(602, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 611, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(607, 3, 5, 'Samsung 15 red', 218900, 1, 218895, 614, '../upload/samsung-galaxy-j4-plus-pink-400x400.jpg'),
(608, 3, 5, 'Samsung 15 red', 218900, 1, 218895, 615, '../upload/samsung-galaxy-j4-plus-pink-400x400.jpg'),
(610, 3, 5, 'Samsung 15 red', 218900, 1, 218895, 617, '../upload/samsung-galaxy-j4-plus-pink-400x400.jpg'),
(618, 3, 7, 'HTC 15 red', 11000, 4, 10995, 636, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg'),
(619, 3, 7, 'HTC 15 red', 11000, 1, 10995, 637, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg'),
(620, 3, 7, 'HTC 15 red', 11000, 1, 10995, 638, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg'),
(621, 3, 7, 'HTC 15 red', 11000, 1, 10995, 639, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg'),
(622, 3, 7, 'HTC 15 red', 11000, 1, 10995, 640, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg'),
(623, 3, 7, 'HTC 15 red', 11000, 1, 10995, 641, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg'),
(624, 3, 9, 'Vivo Y53s', 7000000, 1, 6999990, 642, '../upload/ipad-wifi-32gb-2018-thumb-600x600.jpg'),
(629, 3, 5, 'Samsung 15 red', 218900, 1, 218895, 649, '../upload/samsung-galaxy-j4-plus-pink-400x400.jpg'),
(630, 3, 6, 'Nokia 15 red', 28900, 1, 28895, 650, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg'),
(631, 3, 4, 'iphone 15 red', 21000, 1, 20995, 651, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(632, 3, 4, 'iphone 15 red', 21000, 1, 20995, 652, '../upload/iphone-x-256gb-silver-400x400.jpg'),
(633, 3, 9, 'Vivo Y53s', 7000000, 1, 6999990, 653, '../upload/ipad-wifi-32gb-2018-thumb-600x600.jpg'),
(634, 3, 11, 'Huawei Pro Green', 20000000, 4, 19800000, 654, 'huawei-mate-20-pro-green-600x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`) VALUES
(1, 'Apple', '../upload/Apple.jpg'),
(2, 'HTC', '../upload/HTC.jpg'),
(3, 'Coolpad', '../upload/Coolpad.png'),
(4, 'Huawei', '../upload/Huawei.jpg'),
(5, 'Itel', '../upload/Itel.jpg'),
(6, 'Mobell', '../upload/Mobell.jpg'),
(7, 'Mobiistar', '../upload/Mobiistar.jpg'),
(8, 'Motorola', '../upload/Motorola.jpg'),
(9, 'Nokia', '../upload/Nokia.jpg'),
(10, 'Oppo', '../upload/Oppo.jpg'),
(11, 'Philips', '../upload/Philips.jpg'),
(12, 'Realme', '../upload/Realme.png'),
(13, 'Samsung', '../upload/Samsung.jpg'),
(14, 'Vivo', '../upload/Vivo.jpg'),
(15, 'Xiaomi', '../upload/Xiaomi.png');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `name`) VALUES
(1, 'Nổi bật nhất'),
(2, 'Sản phẩm mới'),
(3, 'Trả góp 0%'),
(5, 'Giảm giá lớn'),
(6, 'Giá rẻ cho mọi nhà\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`id`, `name`) VALUES
(11, 'Đỏ'),
(12, 'Xanh Dương'),
(13, 'Đen'),
(14, 'Vàng'),
(15, 'Trắng'),
(16, 'Hồng'),
(17, 'Bạc'),
(18, 'Xám'),
(19, 'Xanh Lá'),
(20, 'Tím');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `idkm` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idbonho` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(1) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `so_luong` int(11) NOT NULL,
  `danh_gia` varchar(255) NOT NULL DEFAULT '0',
  `man_hinh` varchar(255) NOT NULL,
  `he_dieu_hanh` varchar(255) NOT NULL,
  `camera_truoc` varchar(255) NOT NULL,
  `camera_sau` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `gia_tri_khuyen_mai` int(11) NOT NULL DEFAULT '0',
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `iddm`, `idkm`, `idmau`, `idbonho`, `name`, `price`, `img`, `luotxem`, `so_luong`, `danh_gia`, `man_hinh`, `he_dieu_hanh`, `camera_truoc`, `camera_sau`, `cpu`, `ram`, `gia_tri_khuyen_mai`, `pin`) VALUES
(4, 1, 1, 11, 1, 'iphone 15 red', 21000, '../upload/iphone-x-256gb-silver-400x400.jpg', 0, 5, '30000', 'OLED6.1\"Super Retina XDR', 'IOS 15', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '4 GB', 5, '2815 mAh'),
(5, 13, 1, 11, 2, 'Samsung 15 red', 218900, '../upload/samsung-galaxy-j4-plus-pink-400x400.jpg', 0, 5, '30000', 'OLED6.1\"Super Retina XDR', 'IOS 15', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '4 GB', 5, '2815 mAh'),
(6, 9, 1, 11, 3, 'Nokia 15 red', 28900, '../upload/nokia-51-plus-black-18thangbh-400x400.jpg', 0, 5, '30000', 'OLED6.1\"Super Retina XDR', 'IOS 15', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '4 GB', 5, '2815 mAh'),
(7, 2, 1, 11, 4, 'HTC 15 red', 11000, '../upload/mobiistar-zumbo-s2-dual-300x300.jpg', 0, 5, '30000', 'OLED6.1\"Super Retina XDR', 'IOS 15', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '4 GB', 5, '2815 mAh'),
(9, 14, 1, 12, 5, 'Vivo Y53s', 7000000, '../upload/ipad-wifi-32gb-2018-thumb-600x600.jpg', 0, 50, '44', 'OLED6.1\"Super Retina XDR', 'IOS 15', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '4 GB', 10, '2815 mAh'),
(10, 15, 3, 13, 3, 'Xiaomi', 10000000, '../upload/xiaomi-redmi-note-5-pro-600x600.jpg', 0, 4, '44', 'oled', 'android', '12mb', '64mb', 'dragon', '8gb', 500000, '5000mAh'),
(11, 4, 2, 19, 3, 'Huawei Pro Green', 20000000, 'huawei-mate-20-pro-green-600x600.jpg', 0, 4, '20', 'oled', 'android', '12mb', '64mb', 'dragon', '8gb', 200000, '5000mAh');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_mausac`
--

CREATE TABLE `sanpham_mausac` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_mau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, '3wg3g', '124r145', 'tiennqph38179@fpt.edu.vn', 'haha', '12345678901', 0),
(2, 'tien', '123456789', 'nnqqtt2004@gmail.com', NULL, NULL, 0),
(3, 'titi', '1234', 'tiennqph38179@fpt.edu.vn', 'ha noi', '12345678901', 1),
(4, 'tien', '1', 'tiennqph38179@fpt.edu.vn', '', '', 0),
(5, 'tien', '2', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(6, 'tien', '2', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(7, '111', '11', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(8, '111', '11', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(9, 'h', '6', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(10, 'h', '6', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(11, '1', '1', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(12, '1', '1', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(13, '2', '2', 'tiennqph38179@fpt.edu.vn', NULL, NULL, 0),
(14, 'tien', '2', 'nnqqtt2004@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonho`
--
ALTER TABLE `bonho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idbill` (`idbill`),
  ADD KEY `idpro` (`idpro`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_color` (`idmau`),
  ADD KEY `id_dm` (`iddm`),
  ADD KEY `id_sale` (`idkm`),
  ADD KEY `sanpham_ibfk_4` (`idbonho`);

--
-- Indexes for table `sanpham_mausac`
--
ALTER TABLE `sanpham_mausac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_mausac_ibfk_1` (`id_mau`),
  ADD KEY `sanpham_mausac_ibfk_2` (`id_sanpham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=655;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bonho`
--
ALTER TABLE `bonho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=635;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mau`
--
ALTER TABLE `mau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sanpham_mausac`
--
ALTER TABLE `sanpham_mausac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`idkm`) REFERENCES `khuyenmai` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`idmau`) REFERENCES `mau` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`idbonho`) REFERENCES `bonho` (`id`);

--
-- Constraints for table `sanpham_mausac`
--
ALTER TABLE `sanpham_mausac`
  ADD CONSTRAINT `sanpham_mausac_ibfk_1` FOREIGN KEY (`id_mau`) REFERENCES `mau` (`id`),
  ADD CONSTRAINT `sanpham_mausac_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
