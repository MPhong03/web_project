-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 05:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `WebTimViec` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `WebTimViec`;
drop table if exists CongViecDuocMoi;
drop table if exists LuuCT;
drop table if exists LuuNTV;
drop table if exists UngTuyen;
drop table if exists DangViec;
drop table if exists Client;
drop table if exists Admin;
drop table if exists NguoiTimViec;
drop table if exists CongTy;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtimviec`
--

-- --------------------------------------------------------

--
-- Table structure for table `congty`
--

CREATE TABLE `congty` (
  `MaCongTy` int(11) NOT NULL,
  `TenCongTy` varchar(50) NOT NULL DEFAULT '',
  `diachi` varchar(40) NOT NULL DEFAULT '',
  `website` varchar(50) NOT NULL DEFAULT '',
  `motacongty` varchar(2000) NOT NULL DEFAULT '',
  `linkava` varchar(500) NOT NULL DEFAULT '',
  `linhvuc` varchar(100) NOT NULL DEFAULT '',
  `thanhpho` varchar(50) NOT NULL DEFAULT '',
  `phucloi` varchar(2000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `congty`
--

INSERT INTO `congty` (`MaCongTy`, `TenCongTy`, `diachi`, `website`, `motacongty`, `linkava`, `linhvuc`, `thanhpho`, `phucloi`) VALUES
(1, 'FPT', '52B QL50, Phong Phú, Bình Chánh', 'fpt.com.vn', 'FPT tiếp tục theo đuổi mục tiêu lớn dài hạn trở thành doanh nghiệp số và đứng trong Top 50 Công ty hàng đầu thế giới về cung cấp dịch vụ, giải pháp chuyển đổi số toàn diện vào năm 2030.', '../../../src/assets/Images/avaAdmin/fpt.jpg', 'Công nghệ - thông tin', 'Hồ Chí Minh', 'Mức lương và thu nhập hấp dẫn\r\nMôi trường làm việc thân thiện, chuyên nghiệp'),
(2, 'VNG', 'Z06 Số 13, Tân Thuận Đông, Quận 7', 'vng.com.vn', 'Được thành lập từ năm 2004, Công ty Cổ phần VNG hiện tại là công ty công nghệ hàng đầu Việt Nam.', '../../../src/assets/Images/avaAdmin/vng.png', 'Công nghệ - thông tin', 'Thành phố Hồ Chí Minh', 'Chăm sóc sức khỏe bảo hiểm\r\nKhông gian làm việc sáng tạo'),
(3, 'Google', 'số 09 Phố Duy Tân, P. Dịch Vọng Hậu, Q. ', 'google.com', 'Google được thành lập vào năm 1998 bởi Larry Page và Sergey Brin trong khi họ là nghiên cứu sinh đã có bằng tiến sĩ tại Đại học Stanford ở California.', '../../../src/assets/Images/avaAdmin/google2.png', 'Công nghệ - thông tin', 'Hà Nội', 'Mức lương và thu nhập hấp dẫn\r\nMôi trường làm việc sáng tạo'),
(4, 'facebook', 'Z06 Số 13, Tân Thuận Đông, Quận 7', 'facebook.com', 'Facebook là một mạng xã hội trực tuyến lớn nhất thế giới, được thành lập vào năm 2004 bởi Mark Zuckerberg. ', '../../../src/assets/Images/avaAdmin/Facebook.jpg', 'Công nghệ - thông tin', 'Thành phố Hồ Chí Minh', 'Mức lương và thu nhập hấp dẫn\r\nMôi trường làm việc sáng tạo');

-- --------------------------------------------------------

--
-- Table structure for table `congviecduocmoi`
--

CREATE TABLE `congviecduocmoi` (
  `MaNguoiTimViec` int(11) NOT NULL,
  `MaCongTy` int(11) NOT NULL,
  `daduyet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangviec`
--

CREATE TABLE `dangviec` (
  `MaDangTin` int(11) NOT NULL,
  `MaCongTy` int(11) NOT NULL,
  `tencongviec` varchar(100) NOT NULL,
  `linhvuc` varchar(100) NOT NULL,
  `chucvu` varchar(100) NOT NULL,
  `luong` decimal(20,0) NOT NULL,
  `loaicongviec` int(10) NOT NULL,
  `diachi` varchar(150) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `motacongviec` varchar(2000) NOT NULL,
  `tagkinang` varchar(200) NOT NULL,
  `thoihan` date NOT NULL DEFAULT '2023-06-06',
  `yeucaucongviec` varchar(5000) NOT NULL DEFAULT '',
  `yeucaubangcap` varchar(100) NOT NULL DEFAULT '',
  `quyenloi` varchar(5000) NOT NULL DEFAULT '',
  `soluongtuyendung` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangviec`
--

INSERT INTO `dangviec` (`MaDangTin`, `MaCongTy`, `tencongviec`, `linhvuc`, `chucvu`, `luong`, `loaicongviec`, `diachi`, `sdt`, `email`, `motacongviec`, `tagkinang`, `thoihan`, `yeucaucongviec`, `yeucaubangcap`, `quyenloi`, `soluongtuyendung`) VALUES
(1, 1, 'Lập trình BackEnd', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(2, 2, 'Lập trình FrontEnd', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(3, 3, 'Lập trình Fullstack', 'Công Nghệ Thông Tin', 'Lập trình viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(4, 1, 'Lập trình nhúng', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(5, 3, 'quản lí dự án', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(6, 4, 'Tester Java', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(7, 2, 'Lập trình Java, Serverlet', 'Công nghệ thông tin', 'Lập trình viên', '10000000', 1, 'Tôn Đức Tháng', '123456789', 'dangminhphong912@gmail.com', '- Tích cực\r\n- Sáng tạo\r\n- Phụng sự', 'java,oop,mysql', '2023-04-30', '- Hiểu Java, OOP\r\n- Cấu trúc dữ liệu và giải thuật', 'đại học', '- Lương tháng 13\r\n- Ăn cơm 2 bữa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `luuct`
--

CREATE TABLE `luuct` (
  `MaNguoiTimViec` int(11) NOT NULL,
  `MaCongTy` int(11) NOT NULL,
  `MaDangTin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `luuct`
--

INSERT INTO `luuct` (`MaNguoiTimViec`, `MaCongTy`, `MaDangTin`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 5),
(2, 1, 4),
(2, 2, 2),
(3, 2, 2),
(3, 4, 6),
(4, 2, 7),
(5, 2, 2),
(5, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `luuntv`
--

CREATE TABLE `luuntv` (
  `MaNguoiTimViec` int(11) NOT NULL,
  `MaCongTy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoitimviec`
--

CREATE TABLE `nguoitimviec` (
  `MaNguoiTimViec` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL DEFAULT '',
  `linkava` varchar(500) NOT NULL DEFAULT '',
  `congviec` varchar(100) NOT NULL DEFAULT '',
  `ngaysinh` date NOT NULL DEFAULT '2000-01-01',
  `gioitinh` int(10) NOT NULL,
  `loaicongviec` int(10) NOT NULL,
  `linhvuc` varchar(100) NOT NULL DEFAULT '',
  `thanhpho` varchar(20) NOT NULL DEFAULT '',
  `diachi` varchar(50) NOT NULL DEFAULT '',
  `muctieunghenghiep` varchar(1000) NOT NULL DEFAULT '',
  `hocvan` varchar(500) NOT NULL DEFAULT '',
  `kinang` varchar(400) NOT NULL DEFAULT '',
  `kinhnghiemlamviec` varchar(1000) NOT NULL DEFAULT '',
  `chitiet` varchar(200) NOT NULL DEFAULT '',
  `tagkinang` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoitimviec`
--

INSERT INTO `nguoitimviec` (`MaNguoiTimViec`, `hoten`, `linkava`, `congviec`, `ngaysinh`, `gioitinh`, `loaicongviec`, `linhvuc`, `thanhpho`, `diachi`, `muctieunghenghiep`, `hocvan`, `kinang`, `kinhnghiemlamviec`, `chitiet`, `tagkinang`) VALUES
(1, 'Đặng Minh Phong', '../../../src/assets/Images/avaClient/dummy_team_member.png', 'Lập trình viên', '2003-10-26', 1, 0, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Lập trình', '12/12', 'Lập trình', '2 năm với Java', 'Something...', 'java,.net,c#,php'),
(2, 'Dương Đình Chí Long', '../../../src/assets/Images/avaClient/dummy_team_member.png', 'Lập trình viên', '2003-01-01', 1, 1, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', ',java,php'),
(3, 'Phạm Nhật Quỳnh', '../../../src/assets/Images/avaClient/18-F3.png', 'Lập trình viên', '2000-01-01', 1, 0, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', 'php'),
(4, 'Lê Gia Huy', '../../../src/assets/Images/avaClient/avatar.jpg', 'Lập trình viên', '2003-01-01', 1, 1, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', ',php,java'),
(5, 'Nguyễn Thành Đô', '../../../src/assets/Images/avaClient/dummy_team_member.png', 'Lập trình viên', '2003-01-01', 1, 1, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', ',java,php');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoancongty`
--

CREATE TABLE `taikhoancongty` (
  `MaCongTy` int(11) NOT NULL,
  `TenDangNhap` varchar(50) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoancongty`
--

INSERT INTO `taikhoancongty` (`MaCongTy`, `TenDangNhap`, `matkhau`, `sdt`, `email`) VALUES
(4, 'facebook', '123456', '0123456789', 'facebook@gmail.com'),
(1, 'fpt', '123456', '0123456789', 'fpt@gmail.com'),
(3, 'google', '123456', '0123456789', 'google@gmail.com'),
(2, 'vng', '123456', '0123456789', 'vng@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoannguoitimviec`
--

CREATE TABLE `taikhoannguoitimviec` (
  `MaNguoiTimViec` int(11) NOT NULL,
  `TenDangNhap` varchar(50) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoannguoitimviec`
--

INSERT INTO `taikhoannguoitimviec` (`MaNguoiTimViec`, `TenDangNhap`, `matkhau`, `sdt`, `email`) VALUES
(2, 'chilong', '123456', '0123456789', 'duongdinhchilong@gmail.com'),
(4, 'giahuy', '123456', '0123456789', 'legiahuy@gmail.com'),
(1, 'minhphong', '123456', '0123456789', 'dangminhphong@gmail.com'),
(3, 'nhatquynh', '123456', '0123456789', 'phamnhatquynh@gmail.com'),
(5, 'thanhdo', '123456', '0123456789', 'nguyenthanhdo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ungtuyen`
--

CREATE TABLE `ungtuyen` (
  `maungtuyen` int(11) NOT NULL,
  `daduyet` int(11) NOT NULL,
  `MaDangTin` int(11) NOT NULL,
  `MaNguoiTimViec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ungtuyen`
--

INSERT INTO `ungtuyen` (`maungtuyen`, `daduyet`, `MaDangTin`, `MaNguoiTimViec`) VALUES
(1, -1, 6, 1),
(25, -1, 1, 2),
(26, -1, 3, 2),
(27, -1, 3, 3),
(28, -1, 2, 4),
(29, -1, 1, 4),
(30, -1, 1, 5),
(31, -1, 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`MaCongTy`);

--
-- Indexes for table `congviecduocmoi`
--
ALTER TABLE `congviecduocmoi`
  ADD KEY `MaNguoiTimViec` (`MaNguoiTimViec`) USING BTREE,
  ADD KEY `MaCongTy` (`MaCongTy`) USING BTREE;

--
-- Indexes for table `dangviec`
--
ALTER TABLE `dangviec`
  ADD PRIMARY KEY (`MaDangTin`),
  ADD KEY `MaCongTy` (`MaCongTy`) USING BTREE;

--
-- Indexes for table `luuct`
--
ALTER TABLE `luuct`
  ADD PRIMARY KEY (`MaNguoiTimViec`,`MaCongTy`,`MaDangTin`),
  ADD KEY `MaCongTy` (`MaCongTy`) USING BTREE,
  ADD KEY `MaDangTin` (`MaDangTin`) USING BTREE;

--
-- Indexes for table `luuntv`
--
ALTER TABLE `luuntv`
  ADD PRIMARY KEY (`MaNguoiTimViec`,`MaCongTy`),
  ADD KEY `MaCongTy` (`MaCongTy`) USING BTREE;

--
-- Indexes for table `nguoitimviec`
--
ALTER TABLE `nguoitimviec`
  ADD PRIMARY KEY (`MaNguoiTimViec`);

--
-- Indexes for table `taikhoancongty`
--
ALTER TABLE `taikhoancongty`
  ADD PRIMARY KEY (`TenDangNhap`,`email`),
  ADD KEY `MaCongTy` (`MaCongTy`) USING BTREE;

--
-- Indexes for table `taikhoannguoitimviec`
--
ALTER TABLE `taikhoannguoitimviec`
  ADD PRIMARY KEY (`TenDangNhap`,`email`),
  ADD KEY `MaNguoiTimViec` (`MaNguoiTimViec`) USING BTREE;

--
-- Indexes for table `ungtuyen`
--
ALTER TABLE `ungtuyen`
  ADD PRIMARY KEY (`maungtuyen`),
  ADD KEY `MaNguoiTimViec` (`MaNguoiTimViec`) USING BTREE,
  ADD KEY `MaDangTin` (`MaDangTin`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `congty`
--
ALTER TABLE `congty`
  MODIFY `MaCongTy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dangviec`
--
ALTER TABLE `dangviec`
  MODIFY `MaDangTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nguoitimviec`
--
ALTER TABLE `nguoitimviec`
  MODIFY `MaNguoiTimViec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ungtuyen`
--
ALTER TABLE `ungtuyen`
  MODIFY `maungtuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `congviecduocmoi`
--
ALTER TABLE `congviecduocmoi`
  ADD CONSTRAINT `congviecduocmoi_ibfk_1` FOREIGN KEY (`MaNguoiTimViec`) REFERENCES `nguoitimviec` (`MaNguoiTimViec`),
  ADD CONSTRAINT `congviecduocmoi_ibfk_2` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`);

--
-- Constraints for table `dangviec`
--
ALTER TABLE `dangviec`
  ADD CONSTRAINT `dangviec_ibfk_1` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`);

--
-- Constraints for table `luuct`
--
ALTER TABLE `luuct`
  ADD CONSTRAINT `luuct_ibfk_1` FOREIGN KEY (`MaNguoiTimViec`) REFERENCES `nguoitimviec` (`MaNguoiTimViec`),
  ADD CONSTRAINT `luuct_ibfk_2` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`),
  ADD CONSTRAINT `luuct_ibfk_3` FOREIGN KEY (`MaDangTin`) REFERENCES `dangviec` (`MaDangTin`);

--
-- Constraints for table `luuntv`
--
ALTER TABLE `luuntv`
  ADD CONSTRAINT `luuntv_ibfk_1` FOREIGN KEY (`MaNguoiTimViec`) REFERENCES `nguoitimviec` (`MaNguoiTimViec`),
  ADD CONSTRAINT `luuntv_ibfk_2` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`);

--
-- Constraints for table `taikhoancongty`
--
ALTER TABLE `taikhoancongty`
  ADD CONSTRAINT `taikhoancongty_ibfk_1` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`);

--
-- Constraints for table `taikhoannguoitimviec`
--
ALTER TABLE `taikhoannguoitimviec`
  ADD CONSTRAINT `taikhoannguoitimviec_ibfk_1` FOREIGN KEY (`MaNguoiTimViec`) REFERENCES `nguoitimviec` (`MaNguoiTimViec`);

--
-- Constraints for table `ungtuyen`
--
ALTER TABLE `ungtuyen`
  ADD CONSTRAINT `ungtuyen_ibfk_1` FOREIGN KEY (`MaNguoiTimViec`) REFERENCES `nguoitimviec` (`MaNguoiTimViec`),
  ADD CONSTRAINT `ungtuyen_ibfk_2` FOREIGN KEY (`MaDangTin`) REFERENCES `dangviec` (`MaDangTin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
