-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:49 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xxshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_bl` int NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ma_hh` int NOT NULL,
  `ma_kh` int NOT NULL,
  `ngay_bl` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(54, 'thay tyu'),
(56, 'thay manh'),
(57, 'Đồng hồ'),
(58, 'Nón'),
(59, 'Đồng hồ'),
(60, 'Nón'),
(61, 'Máy '),
(62, 'Giày'),
(63, 'Máy '),
(64, 'Giày'),
(65, 'Nước Hoa'),
(66, 'Nước Hoa');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` int NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'tên hàng hóa',
  `don_gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) DEFAULT '0.00',
  `hinh` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `dac_biet` tinyint NOT NULL,
  `so_luot_xem` int NOT NULL DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `iddm`) VALUES
(17, 'ihone5', 22.00, 2.00, ',1224.png_860.png', '1111-11-11', '1', 1, 1, 56),
(19, 'Máy Ảnh', 222.00, 0.00, '', '2023-05-09', '23', 1, 23, 54),
(20, 'Nước Hoa', 33.00, 0.00, 'anh1', '2023-05-01', 'sad', 1, 14, 63),
(21, 'Máy Ảnh', 222.00, 0.00, '', '2023-05-09', '23', 1, 23, 54),
(22, 'Nước Hoa', 33.00, 0.00, 'anh1', '2023-05-01', 'sad', 1, 14, 63);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `kich_hoa` bit(1) NOT NULL,
  `hinh` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `vai_tro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `lk_ma_hh` (`ma_hh`),
  ADD KEY `lk_ma_kh` (`ma_kh`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc` (`iddm`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_bl` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_ma_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
