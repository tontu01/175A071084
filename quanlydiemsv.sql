-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2021 lúc 05:29 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydiemsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `id` int(11) NOT NULL,
  `MaMH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaSV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HocKy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`id`, `MaMH`, `MaSV`, `HocKy`, `Diem`) VALUES
(10, 'M01', 'sv1', '1', 9),
(11, 'M01', 'sv2', '2', 8),
(12, 'M01', 'sv3', 'Hè', 7),
(13, 'M01', 'sv4', '1', 6),
(14, 'M02', 'sv5', '2', 5),
(15, 'M02', 'sv6', '2', 4),
(16, 'M03', 'sv7', 'Hè', 4),
(17, 'M02', 'sv8', '1', 5),
(18, 'M03', 'sv9', '2', 6),
(19, 'M03', 'sv10', 'Hè', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hedt`
--

CREATE TABLE `hedt` (
  `MaHeDT` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenHeDT` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hedt`
--

INSERT INTO `hedt` (`MaHeDT`, `TenHeDT`) VALUES
('A01', 'Ðại Học'),
('A02', 'Sau Ðại Học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoa` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `DiaChi`, `DienThoai`) VALUES
('CD', 'Cơ điện', 'Tầng 4 ', '043766666'),
('CNTT', 'Công Nghệ Thông Tin', 'Tầng 2', '043768888');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MaKhoaHoc` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoaHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`MaKhoaHoc`, `TenKhoaHoc`) VALUES
('K59', 'Ðại học khóa 59'),
('K60', 'Ðại học khóa 60');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhoa` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaHeDT` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhoaHoc` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`, `MaHeDT`, `MaKhoaHoc`) VALUES
('CD1', 'Cơ điện 1', 'CD', 'A01', 'K59'),
('CD2', 'Cơ điện 2', 'CD', 'A01', 'K60'),
('TH1', 'Tin học 1', 'CNTT', 'A01', 'K59'),
('TH2', 'Tin học 2', 'CNTT', 'A01', 'K60');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenMH` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoTinChi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTinChi`) VALUES
('M01', 'Công nghệ Web', 3),
('M02', 'Cơ sở dữ liệu', 3),
('M03', 'Điện 1', 3),
('M04', 'Điện 2', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `TenSV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '1: Nam, 2: Nữ',
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `GioiTinh`, `NgaySinh`, `QueQuan`, `MaLop`, `MatKhau`, `id`) VALUES
('sv1', 'sinh vien 1', '1', '2000-01-01', 'Hà nội', 'CD1', '1', 1),
('sv2', 'sinh vien 2', '2', '2000-01-02', 'Hà nội', 'CD2', '1', 2),
('sv3', 'sinh viên 3', '1', '2000-01-03', 'Hải Dương', 'TH1', '1', 3),
('sv4', 'sinh viên 4', '2', '2000-01-04', 'Thanh Hóa', 'CD2', '1', 4),
('sv5', 'sinh viên 5', '2', '2000-01-05', 'Ha Noi', 'CD1', '1', 5),
('sv6', 'sinh viên 6', '1', '2000-01-06', 'TP HCM', 'TH2', '1', 6),
('sv7', 'sinh viên 7', '1', '2000-01-07', 'Hà Nội', 'CD1', '1', 7),
('sv8', 'sinh viên 8', '1', '2000-01-07', 'Hà nội', 'CD1', '1', 8),
('sv9', 'sinh viên 9', '1', '2000-01-09', 'Hà nội', 'CD1', '1', 9),
('sv10', 'sinh viên 10', '2', '2000-01-10', 'Hà nội', 'CD1', '1', 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hedt`
--
ALTER TABLE `hedt`
  ADD PRIMARY KEY (`MaHeDT`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MaKhoaHoc`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaHeDT` (`MaHeDT`),
  ADD KEY `MaKhoaHoc` (`MaKhoaHoc`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `MaLop` (`MaLop`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`MaHeDT`) REFERENCES `hedt` (`MaHeDT`),
  ADD CONSTRAINT `lop_ibfk_3` FOREIGN KEY (`MaKhoaHoc`) REFERENCES `khoahoc` (`MaKhoaHoc`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
