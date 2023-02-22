-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 22, 2023 lúc 04:38 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nuke45`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nv4_vi_paid_row`
--

CREATE TABLE `nv4_vi_paid_row` (
  `id` tinyint(11) NOT NULL,
  `customer` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT 'Tên khách hàng',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Trạng thái',
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Ghi chú',
  `ext_app_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Số hợp đồng',
  `c_scheme` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Tên sản phẩm',
  `dpd` int(11) NOT NULL DEFAULT 0 COMMENT 'Số ngày chậm nợ',
  `allocationdate` int(11) NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày đổ list',
  `installment_amt` double NOT NULL DEFAULT 0 COMMENT 'Số tiền trả góp mỗi kỳ',
  `sale_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Sale',
  `sale_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Email sale'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nv4_vi_paid_row`
--
ALTER TABLE `nv4_vi_paid_row`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nv4_vi_paid_row`
--
ALTER TABLE `nv4_vi_paid_row`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
