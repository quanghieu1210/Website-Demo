-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 11:00 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hieuu2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idsanpham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `username`, `noidung`, `idsanpham`) VALUES
(1, 'hieu', 'Hảo sách', 0),
(5, 'noname', 'Sách rất tròn và đầy đặn', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `phone`, `email`) VALUES
(1, 'test', '123', '000', 'mibildroi@gmail.com'),
(2, 'hieu', '333', '2206565', 'kenhero113@gmail.com'),
(5, 'ok', '11111', '000', '111@gmail.com'),
(6, 'iii', 'iii', '123', 'ok@gmail.com'),
(7, 'aaa', 'aaa', '123', 'aaa@gmail.com'),
(8, 'coco', '456', '777', 'coco@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `img` char(50) NOT NULL,
  `price` int(30) NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `author`, `img`, `price`, `note`) VALUES
(1, 'ĐẮC NHÂN TÂM', 'Dale Carnegie', 'dnt.jpg', 50, 'Mô tả 1'),
(2, 'THINK AND GROW RICH', 'Napoleon Hill', 'tagr.jpg', 86, 'Mô tả 2'),
(3, 'HAI SỐ PHẬN', 'Jeffrey Archer', 'hsp.jpg', 175, 'Mô tả 3'),
(4, 'GIẾT CON CHIM NHẠI', 'Harper Lee', 'gccn.jpg', 103, 'Mô tả 4'),
(5, 'NHÀ GIẢ KIM', 'Paulo Coehlo', 'ngk.jpg', 67, 'Mô tả 5'),
(6, 'THUẬT ĐỌC TÂM', 'Don Richard Riso - Russ Hudson', 'tdt.jpg', 167, 'Mô tả 6'),
(7, 'MA THUẬT BỊ CẤM', 'Higashino Keigo', 'mtbc.jpg', 97, 'Mô tả 7'),
(8, 'ÁN MẠNG TRÊN SÔNG NILE', 'Agatha Christie', 'amsnle.jpg', 107, 'Mô tả 8');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
