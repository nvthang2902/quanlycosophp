-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 10:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlycosovatchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

CREATE TABLE `baidang` (
  `maBD` varchar(255) NOT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `gia` double DEFAULT NULL,
  `ngaydang` date DEFAULT NULL,
  `maPhong` varchar(50) DEFAULT NULL,
  `mota` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `chutro` int(11) DEFAULT NULL,
  `tinhtrang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baidang`
--

INSERT INTO `baidang` (`maBD`, `tieude`, `gia`, `ngaydang`, `maPhong`, `mota`, `chutro`, `tinhtrang`) VALUES
('1595852848', 'adada', 1000000000, '2020-07-27', '1595852848', 'Có Gác', 1, '1'),
('1595853002', 'adada', 1000000000, '2020-08-16', '1595853002', 'bc', 1, '2'),
('1596458331', 'adada', 8000000000, '2020-08-03', '1596458331', 'Đầy đủ tiện nghi', 1, '2'),
('1600973904', NULL, 1500000, '2020-09-24', '1600973904', 'có gác', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethopdong`
--

CREATE TABLE `chitiethopdong` (
  `maHD` varchar(20) DEFAULT NULL,
  `Giatien` double DEFAULT NULL,
  `maPhong` varchar(50) DEFAULT NULL,
  `maDichvu` varchar(20) DEFAULT NULL,
  `maCTiet` bigint(20) NOT NULL,
  `trangthaict` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethopdong`
--

INSERT INTO `chitiethopdong` (`maHD`, `Giatien`, `maPhong`, `maDichvu`, `maCTiet`, `trangthaict`) VALUES
('1601023389', 8000000000, '1596458331', '1', 29, 1),
('1601023389', 1500000, '1600973904', '1', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chutro`
--

CREATE TABLE `chutro` (
  `maCT` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `taikhoan` varchar(56) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` varchar(56) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chutro`
--

INSERT INTO `chutro` (`maCT`, `ten`, `hinhanh`, `Email`, `taikhoan`, `matkhau`, `sdt`) VALUES
(1, 'phuong', 'user.jpg', 'phuongtr512@gmail.com', 'phuong', '321', '0363761707');

-- --------------------------------------------------------

--
-- Table structure for table `dangki`
--

CREATE TABLE `dangki` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pasword` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dangki`
--

INSERT INTO `dangki` (`id`, `username`, `pasword`, `email`, `sdt`) VALUES
(0, NULL, '123', 'hung123@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `maDichvu` varchar(20) NOT NULL,
  `tenDichvu` varchar(255) DEFAULT NULL,
  `giaDichvu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`maDichvu`, `tenDichvu`, `giaDichvu`) VALUES
('1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maHA` int(11) NOT NULL,
  `HinhAnh` varchar(100) DEFAULT NULL,
  `Phong` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `maHD` varchar(20) NOT NULL,
  `Tinhtranghopdong` int(11) DEFAULT NULL,
  `Tongtien` double DEFAULT NULL,
  `khachhang` int(11) DEFAULT NULL,
  `ngaydat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`maHD`, `Tinhtranghopdong`, `Tongtien`, `khachhang`, `ngaydat`) VALUES
('1596459560', 0, 0, 2, '2020-08-03'),
('1596468672', 2, 0, 2, '2020-08-03'),
('1597547038', 2, 0, 1, '2020-08-16'),
('1600795629', 0, 0, 2, '2020-09-23'),
('1600837710', 2, 0, 2, '2020-09-23'),
('1600838052', 2, 0, 2, '2020-09-23'),
('1600838599', 2, 0, 2, '2020-09-23'),
('1600840813', 2, 0, 2, '2020-09-23'),
('1600972613', 2, 4000000000, 3, '2020-09-25'),
('1600973094', 1, 8000000000, 4, '2020-09-25'),
('1601013214', 1, 1000000000, 2, '2020-09-25'),
('1601013468', 0, 1000000000, 4, '2020-09-25'),
('1601014309', 2, 1000000000, 4, '2020-09-25'),
('1601014397', 2, 1000000000, 4, '2020-09-25'),
('1601015125', 2, 1000000000, 4, '2020-09-25'),
('1601017555', 2, 3001500000, 4, '2020-09-25'),
('1601023389', 2, 8001500000, 6, '2020-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKh` int(11) NOT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `sdt` varchar(12) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKh`, `ten`, `sdt`, `Email`, `matkhau`) VALUES
(1, 'hoa', '1235667890', '123@abc.com', '123'),
(2, 'ninh', '0363761709', 'ninh123@gmail.com', '123'),
(3, 'hoa', '0363761234', 'hoa123@gmail.com', '123'),
(4, 'ly', '0363761234', 'ly123@gmail.com', '123'),
(5, '?Ô', '0312121245', 'do123@gmail.com', '123'),
(6, 'Hanh', '0363761707', 'hanh123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `maloaiPhong` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Tenloaiphong` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`maloaiPhong`, `Tenloaiphong`) VALUES
('1', 'nhà trọ'),
('2', 'chung cư'),
('3', 'căn hộ');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `maPhong` varchar(50) NOT NULL,
  `Diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Dientich` double DEFAULT NULL,
  `giathue` double DEFAULT NULL,
  `mota` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `maCT` int(11) DEFAULT NULL,
  `maloaiPhong` varchar(255) DEFAULT NULL,
  `tinhtrang` varchar(255) DEFAULT NULL,
  `quanhuyen` int(11) DEFAULT NULL,
  `hinh` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`maPhong`, `Diachi`, `Dientich`, `giathue`, `mota`, `maCT`, `maloaiPhong`, `tinhtrang`, `quanhuyen`, `hinh`) VALUES
('1595852848', '8 ong ich khiem', 200, 1000000000, 'Có Gác', NULL, '1', NULL, 1, '876.jpg'),
('1595853002', '8 Cao Thắng', 300, 3000000000, 'Đầy đủ tiện nghi', NULL, '2', NULL, 2, '135.jpg'),
('1596458331', '6 Lê Hiến Mai', 808, 8000000000, 'Đầy đủ tiện nghi', NULL, '3', NULL, 3, '176.jpg'),
('1597546987', 'jwhr', 300, 2000, 'k biết', NULL, '1', NULL, 1, 'Hydrangeas.jpg'),
('1600841523', 'hjhj', 777, 54654, 'kk', NULL, '1', NULL, 1, 'wp5334893.png'),
('1600973904', '79 dũng sĩ thanh khê', 100, 1500000, 'có gác', NULL, '1', NULL, 1, '123.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `maQH` int(11) NOT NULL,
  `TenQh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `tinh` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`maQH`, `TenQh`, `tinh`) VALUES
(1, 'Thanh khê', '1'),
(2, 'Hải Châu', '2'),
(3, 'Sơn Trà', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `maTTP` char(5) NOT NULL,
  `tenTTP` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`maTTP`, `tenTTP`) VALUES
('1', 'tp Đà Nẵng'),
('2', 'tp Đà Nẵng'),
('3', 'tp Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `maTR` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`maTR`, `tinhtrang`) VALUES
('0', 'Đã hủy'),
('1', 'Đang Chờ Duyệt'),
('2', 'Đã Duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangdonhang`
--

CREATE TABLE `tinhtrangdonhang` (
  `id` int(11) NOT NULL,
  `tentinhtrang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinhtrangdonhang`
--

INSERT INTO `tinhtrangdonhang` (`id`, `tentinhtrang`) VALUES
(1, '?ang x? lý'),
(2, '?ã x? lý'),
(3, '?ã h?y');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangduyet`
--

CREATE TABLE `tinhtrangduyet` (
  `id` int(11) NOT NULL,
  `tinhtrang` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinhtrangduyet`
--

INSERT INTO `tinhtrangduyet` (`id`, `tinhtrang`) VALUES
(1, 'Đang chờ duyệt'),
(2, 'Đã duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pasword` varchar(45) DEFAULT NULL,
  `hinhanh` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pasword`, `hinhanh`) VALUES
(0, 'phuong', 'phuongtr512@gmail.com', '321', 'anh-hot-girl-21.jpg'),
(1, 'hung', 'hung123@gmail.com', '321', 'anh-hot-girl-21.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`maBD`),
  ADD KEY `chutro` (`chutro`),
  ADD KEY `baidang_ibfk_1` (`maPhong`);

--
-- Indexes for table `chitiethopdong`
--
ALTER TABLE `chitiethopdong`
  ADD PRIMARY KEY (`maCTiet`),
  ADD KEY `maHD` (`maHD`),
  ADD KEY `maDichvu` (`maDichvu`),
  ADD KEY `chitiethopdong_ibfk_2` (`maPhong`),
  ADD KEY `chitiethopdong_ibfk_4_idx` (`trangthaict`);

--
-- Indexes for table `chutro`
--
ALTER TABLE `chutro`
  ADD PRIMARY KEY (`maCT`);

--
-- Indexes for table `dangki`
--
ALTER TABLE `dangki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`maDichvu`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maHA`),
  ADD KEY `Phong` (`Phong`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `Tinhtranghopdong` (`Tinhtranghopdong`),
  ADD KEY `khachhang` (`khachhang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKh`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`maloaiPhong`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maPhong`),
  ADD KEY `maCT` (`maCT`),
  ADD KEY `maloaiPhong` (`maloaiPhong`),
  ADD KEY `tinhtrang` (`tinhtrang`),
  ADD KEY `quanhuyen` (`quanhuyen`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`maQH`),
  ADD KEY `tinh` (`tinh`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`maTTP`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`maTR`);

--
-- Indexes for table `tinhtrangdonhang`
--
ALTER TABLE `tinhtrangdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinhtrangduyet`
--
ALTER TABLE `tinhtrangduyet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethopdong`
--
ALTER TABLE `chitiethopdong`
  MODIFY `maCTiet` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chutro`
--
ALTER TABLE `chutro`
  MODIFY `maCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `maHA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `maQH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tinhtrangdonhang`
--
ALTER TABLE `tinhtrangdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`maPhong`) REFERENCES `phong` (`maPhong`),
  ADD CONSTRAINT `baidang_ibfk_2` FOREIGN KEY (`chutro`) REFERENCES `chutro` (`maCT`);

--
-- Constraints for table `chitiethopdong`
--
ALTER TABLE `chitiethopdong`
  ADD CONSTRAINT `chitiethopdong_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hopdong` (`maHD`),
  ADD CONSTRAINT `chitiethopdong_ibfk_2` FOREIGN KEY (`maPhong`) REFERENCES `phong` (`maPhong`),
  ADD CONSTRAINT `chitiethopdong_ibfk_3` FOREIGN KEY (`maDichvu`) REFERENCES `dichvu` (`maDichvu`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`Phong`) REFERENCES `phong` (`maPhong`);

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`khachhang`) REFERENCES `khachhang` (`maKh`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`maCT`) REFERENCES `chutro` (`maCT`),
  ADD CONSTRAINT `phong_ibfk_2` FOREIGN KEY (`maloaiPhong`) REFERENCES `loaiphong` (`maloaiPhong`),
  ADD CONSTRAINT `phong_ibfk_3` FOREIGN KEY (`tinhtrang`) REFERENCES `tinhtrang` (`maTR`),
  ADD CONSTRAINT `phong_ibfk_4` FOREIGN KEY (`quanhuyen`) REFERENCES `quanhuyen` (`maQH`);

--
-- Constraints for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD CONSTRAINT `quanhuyen_ibfk_1` FOREIGN KEY (`tinh`) REFERENCES `tinh` (`maTTP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
