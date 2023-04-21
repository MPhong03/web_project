SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `WebTimViec` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `WebTimViec`;
drop table if exists CongViecDuocMoi;
drop table if exists LuuCT;
drop table if exists LuuNTV;
drop table if exists UngTuyen;
drop table if exists DangViec;
drop table if exists TaiKhoanNguoiTimViec;
drop table if exists TaiKhoanCongTy;
drop table if exists NguoiTimViec;
drop table if exists CongTy;

create table NguoiTimViec(
	MaNguoiTimViec INT auto_increment NOT NULL,
	hoten VARCHAR(100) not null default "",
	linkava varchar(500) not null default "",
	congviec varchar(100) NOT NULL default "",
	ngaysinh date not null default "2000-01-01",
	gioitinh int(10) not null,
	loaicongviec int(10) not null,
	linhvuc varchar(100) not null default "",
	thanhpho varchar(20) not null default "",
	diachi varchar(50) not null default "",
	muctieunghenghiep varchar(1000) not null default "",
	hocvan varchar(500) not null default "",
	kinang varchar(400) not null default "",
	kinhnghiemlamviec varchar(1000) not null default "",
	chitiet varchar(200) not null default "",
	tagkinang varchar(200) not null default "",
	PRIMARY KEY (MaNguoiTimViec)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table CongTy(
	MaCongTy int primary key auto_increment not null,
	TenCongTy VARCHAR(50) not null default "",
	diachi VARCHAR(40) not null default "",
	website varchar(50) not null default "",
	motacongty varchar(2000) not null default "",
	linkava varchar(500) not null default "",
	linhvuc varchar(100) not null default "",
	thanhpho varchar(50) not null default "",
	phucloi varchar(2000) not null default ""
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table TaiKhoanNguoiTimViec(
	MaNguoiTimViec int not null,
	TenDangNhap varchar(50) not null,
	matkhau varchar(30) not null,
	sdt varchar(11) not null,
	email varchar(100) not null,
	primary key(TenDangNhap, email),
	foreign key (MaNguoiTimViec) references NguoiTimViec(MaNguoiTimViec)
);
create table TaiKhoanCongTy(
	MaCongTy int not null,
	TenDangNhap varchar(50) not null,
	matkhau varchar(30) not null,
	sdt varchar(11) not null,
	email varchar(100) not null,
	primary key(TenDangNhap, email),
	foreign key (MaCongTy) references CongTy(MaCongTy)
);
create table DangViec(
	MaDangTin int primary key auto_increment not null,
	MaCongTy int not null,
	tencongviec varchar(100) not null,
	linhvuc varchar(100) not null,
	chucvu varchar(100) not null,
	luong decimal(20) not null,
	loaicongviec int(10) not null,
	diachi varchar(150) not null,
	sdt varchar(11) not null,
	email varchar(150) not null,
	motacongviec varchar(2000) not null,
	tagkinang varchar(200) not null,
	thoihan date not null default "2023-06-06",
	yeucaucongviec varchar(5000) not null default "",
	yeucaubangcap varchar(100) not null default "",
	quyenloi varchar(5000) not null default "",
	soluongtuyendung int not null default "1",
	foreign key (MaCongTy) references CongTy(MaCongTy)
)ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table UngTuyen(
	maungtuyen int auto_increment not null,
	daduyet int not null,
	MaDangTin int not null,
	MaNguoiTimViec INT not null,
	primary key(maungtuyen),
	foreign key (MaNguoiTimViec) references NguoiTimViec(MaNguoiTimViec),
	foreign key (MaDangTin) references DangViec(MaDangTin)
)ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table CongViecDuocMoi(
	MaNguoiTimViec int not null,
	MaCongTy int not null,
	daduyet int not null,
	foreign key (MaNguoiTimViec) references NguoiTimViec(MaNguoiTimViec),
	foreign key (MaCongTy) references CongTy(MaCongTy)
);
create table LuuNTV(
	MaNguoiTimViec int not null,
	MaCongTy int not null,
	primary key(MaNguoiTimViec,MaCongTy),
	foreign key (MaNguoiTimViec) references NguoiTimViec(MaNguoiTimViec),
	foreign key (MaCongTy) references CongTy(MaCongTy)
);
create table LuuCT(
	MaNguoiTimViec int not null,
	MaCongTy int not null,
	MaDangTin int not null,
	primary key(MaNguoiTimViec,MaCongTy,MaDangTin),
	foreign key (MaNguoiTimViec) references NguoiTimViec(MaNguoiTimViec),
	foreign key (MaCongTy) references CongTy(MaCongTy),
	foreign key (MaDangTin) references DangViec(MaDangTin)
);
-- alter 
alter table NguoiTimViec auto_increment = 01;
alter table CongTy auto_increment = 01;
alter table UngTuyen auto_increment = 01;
alter table DangViec auto_increment = 01;
-- end alter tự động tăng mã
-- insert dữ liệu mẫu
INSERT INTO `congty` (`MaCongTy`, `TenCongTy`, `diachi`, `website`, `motacongty`, `linkava`, `linhvuc`, `thanhpho`, `phucloi`) VALUES
(1, 'FPT', '52B QL50, Phong Phú, Bình Chánh', 'fpt.com.vn', 'FPT tiếp tục theo đuổi mục tiêu lớn dài hạn trở thành doanh nghiệp số và đứng trong Top 50 Công ty hàng đầu thế giới về cung cấp dịch vụ, giải pháp chuyển đổi số toàn diện vào năm 2030.', '../../../src/assets/Images/avaAdmin/fpt.jpg', 'Công nghệ - thông tin', 'Hồ Chí Minh', 'Mức lương và thu nhập hấp dẫn\r\nMôi trường làm việc thân thiện, chuyên nghiệp'),
(2, 'VNG', 'Z06 Số 13, Tân Thuận Đông, Quận 7', 'vng.com.vn', 'Được thành lập từ năm 2004, Công ty Cổ phần VNG hiện tại là công ty công nghệ hàng đầu Việt Nam.', '../../../src/assets/Images/avaAdmin/vng.png', 'Công nghệ - thông tin', 'Thành phố Hồ Chí Minh', 'Chăm sóc sức khỏe bảo hiểm\r\nKhông gian làm việc sáng tạo'),
(3, 'Google', 'số 09 Phố Duy Tân, P. Dịch Vọng Hậu, Q. ', 'google.com', 'Google được thành lập vào năm 1998 bởi Larry Page và Sergey Brin trong khi họ là nghiên cứu sinh đã có bằng tiến sĩ tại Đại học Stanford ở California.', '../../../src/assets/Images/avaAdmin/google2.png', 'Công nghệ - thông tin', 'Hà Nội', 'Mức lương và thu nhập hấp dẫn\r\nMôi trường làm việc sáng tạo'),
(4, 'facebook', 'Z06 Số 13, Tân Thuận Đông, Quận 7', 'facebook.com', 'Facebook là một mạng xã hội trực tuyến lớn nhất thế giới, được thành lập vào năm 2004 bởi Mark Zuckerberg. ', '../../../src/assets/Images/avaAdmin/Facebook.jpg', 'Công nghệ - thông tin', 'Thành phố Hồ Chí Minh', 'Mức lương và thu nhập hấp dẫn\r\nMôi trường làm việc sáng tạo');

INSERT INTO `dangviec` (`MaDangTin`, `MaCongTy`, `tencongviec`, `linhvuc`, `chucvu`, `luong`, `loaicongviec`, `diachi`, `sdt`, `email`, `motacongviec`, `tagkinang`, `thoihan`, `yeucaucongviec`, `yeucaubangcap`, `quyenloi`, `soluongtuyendung`) VALUES
(1, 1, 'Lập trình BackEnd', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(2, 2, 'Lập trình FrontEnd', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(3, 3, 'Lập trình Fullstack', 'Công Nghệ Thông Tin', 'Lập trình viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(4, 1, 'Lập trình nhúng', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(5, 3, 'quản lí dự án', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(6, 4, 'Tester Java', 'Công Nghệ Thông Tin', 'nhân viên', '10000000', 1, 'Tôn Đức Thắng', '0562854976', 'congty@gmail.com', 'công việc lập trình', 'php,html,js,java', '2023-06-06', '', '', '', 1),
(7, 2, 'Lập trình Java, Serverlet', 'Công nghệ thông tin', 'Lập trình viên', '10000000', 1, 'Tôn Đức Tháng', '123456789', 'dangminhphong912@gmail.com', '- Tích cực\r\n- Sáng tạo\r\n- Phụng sự', 'java,oop,mysql', '2023-04-30', '- Hiểu Java, OOP\r\n- Cấu trúc dữ liệu và giải thuật', 'đại học', '- Lương tháng 13\r\n- Ăn cơm 2 bữa', 3);

INSERT INTO `nguoitimviec` (`MaNguoiTimViec`, `hoten`, `linkava`, `congviec`, `ngaysinh`, `gioitinh`, `loaicongviec`, `linhvuc`, `thanhpho`, `diachi`, `muctieunghenghiep`, `hocvan`, `kinang`, `kinhnghiemlamviec`, `chitiet`, `tagkinang`) VALUES
(1, 'Đặng Minh Phong', '../../../src/assets/Images/avaClient/dummy_team_member.png', 'Lập trình viên', '2003-10-26', 1, 0, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Lập trình', '12/12', 'Lập trình', '2 năm với Java', 'Something...', 'java,.net,c#,php'),
(2, 'Dương Đình Chí Long', '../../../src/assets/Images/avaClient/dummy_team_member.png', 'Lập trình viên', '2003-01-01', 1, 1, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', ',java,php'),
(3, 'Phạm Nhật Quỳnh', '../../../src/assets/Images/avaClient/18-F3.png', 'Lập trình viên', '2000-01-01', 1, 0, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', 'php'),
(4, 'Lê Gia Huy', '../../../src/assets/Images/avaClient/avatar.jpg', 'Lập trình viên', '2003-01-01', 1, 1, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', ',php,java'),
(5, 'Nguyễn Thành Đô', '../../../src/assets/Images/avaClient/dummy_team_member.png', 'Lập trình viên', '2003-01-01', 1, 1, 'Công nghệ - thông tin', 'Thành phố Hồ Chí Min', 'Tôn Đức Tháng', 'Something...', 'Something...', 'Something...', 'Something...', 'Something...', ',java,php');

INSERT INTO `taikhoancongty` (`MaCongTy`, `TenDangNhap`, `matkhau`, `sdt`, `email`) VALUES
(4, 'facebook', '123456', '0123456789', 'facebook@gmail.com'),
(1, 'fpt', '123456', '0123456789', 'fpt@gmail.com'),
(3, 'google', '123456', '0123456789', 'google@gmail.com'),
(2, 'vng', '123456', '0123456789', 'vng@gmail.com');

INSERT INTO `taikhoannguoitimviec` (`MaNguoiTimViec`, `TenDangNhap`, `matkhau`, `sdt`, `email`) VALUES
(2, 'chilong', '123456', '0123456789', 'duongdinhchilong@gmail.com'),
(4, 'giahuy', '123456', '0123456789', 'legiahuy@gmail.com'),
(1, 'minhphong', '123456', '0123456789', 'dangminhphong@gmail.com'),
(3, 'nhatquynh', '123456', '0123456789', 'phamnhatquynh@gmail.com'),
(5, 'thanhdo', '123456', '0123456789', 'nguyenthanhdo@gmail.com');
