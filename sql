-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2021 lúc 02:23 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnpm1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(255) NOT NULL,
  `idsanpham` int(255) NOT NULL,
  `idkhach` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giodo`
--

CREATE TABLE `giodo` (
  `idgiodo` int(255) NOT NULL,
  `idkhach` int(255) NOT NULL,
  `idsanpham` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giodo`
--

INSERT INTO `giodo` (`idgiodo`, `idkhach`, `idsanpham`) VALUES
(1, 4, 1),
(4, 4, 2),
(6, 4, 6),
(7, 0, 0),
(8, 0, 0),
(9, 4, 6),
(10, 4, 1),
(11, 4, 1),
(12, 0, 0),
(13, 7, 1),
(14, 7, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(255) NOT NULL,
  `idkhach` int(255) NOT NULL,
  `thanhtien` decimal(10,0) NOT NULL,
  `ngaythanhtoan` date NOT NULL,
  `sanpham` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhoadon`, `idkhach`, `thanhtien`, `ngaythanhtoan`, `sanpham`) VALUES
(1, 4, '1041', '2021-06-13', ''),
(2, 4, '1041', '2021-06-13', ''),
(3, 4, '1061', '2021-06-13', ''),
(4, 7, '21', '2021-06-14', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach`
--

CREATE TABLE `khach` (
  `idkhach` int(255) NOT NULL,
  `tenkhach` varchar(100) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `matkhaukhach` varchar(100) DEFAULT NULL,
  `sdt` int(20) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach`
--

INSERT INTO `khach` (`idkhach`, `tenkhach`, `diachi`, `matkhaukhach`, `sdt`, `activation_code`, `email`, `status`) VALUES
(4, 'Trần Nhật Duật', 'Sa hạ', '1', 866546300, '8LNY0p', '18lynnxx@gmail.com', 0),
(5, 'Trần Nhật Duật', 'Sa hạ', '1', 866546300, 'iKI6OZ', 'klinh.vn@gmail.com', 0),
(6, 'Trần Nhật Duật', 'Sa hạ', '1', 866546300, 'dBmp1h', 'duat2193@gmail.com', 1),
(7, 'Trần Nhật Duật', 'Sa hạ', '1', 866546300, 'N3Tphz', '1851061357@e.tlu.edu.vn', 1),
(9, 'Mạnh', 'Sa hạ', '1', 866546300, 'xwGs2a', 'trannhatduatstrange@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(255) NOT NULL,
  `motasanpham` longtext DEFAULT NULL,
  `giasanpham` decimal(10,0) DEFAULT NULL,
  `anhsanpham` varchar(1000) DEFAULT NULL,
  `loaisanpham` varchar(1000) DEFAULT NULL,
  `tensanpham` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `motasanpham`, `giasanpham`, `anhsanpham`, `loaisanpham`, `tensanpham`) VALUES
(1, '1. Tất cả các thông số kỹ thuật và mô tả được cung cấp ở đây có thể khác với thông số kỹ thuật và mô tả thực tế của sản phẩm. 5G khả dụng trên các gói được chọn của các mạng 5G đủ điều kiện. Khả năng cung cấp hiện tại được giới hạn ở các khu trung tâm của thành phố thủ đô chính và các khu vực có lưu lượng dữ liệu cao được chọn lọc khác. Tốc độ thực tế có thể đạt được sẽ khác nhau tùy thuộc vào tính khả dụng của dịch vụ và các yếu tố khác. 2. Màu sắc thực tế của thiết bị có thể thay đổi. 3. Màu sắc thực tế của thiết bị có thể thay đổi. Galaxy S21+ | S21 Ultra phiên bản tuỳ chỉnh cần sản xuất đặc biệt. Khi đơn hàng đã được đặt, bạn không thể thay đổi đơn hàng, bao gồm hủy hoặc thay đổi màu sắc đã chọn. Đơn hàng của bạn sẽ được giao trong vòng 4 - 5 tuần, tuy nhiên có thể xảy ra sự chậm trễ từ các lý do khách quan từ nhà sản xuất. 4. Đo theo đường chéo hình chữ nhật, kích thước màn hình của Galaxy S21 5G là 6,2 inch và 6,1 inch sau khi đã trừ các góc bo tròn. Kích thước màn hình của Galax', '21', 'samsung-galaxy-s21-tim-600x600.jpg', 'điện thoại', 'Samsung galaxy S21'),
(2, 'Điện thoại iPhone 12 Mini 64GB Xanh dương không còn được thiết kế viền máy bo cong ở các cạnh như ở các dòng máy trước mà được thay thế bằng phần cạnh máy được vát phẳng tạo nên sự mạnh mẽ và cá tính cho người dùng. Bên cạnh đó, máy còn được làm bằng khung nhôm cao cấp trong ngành hàng không vũ trụ mang đến thiết kế cứng cáp và vô cùng bền bỉ. Đặc biệt, máy nổi bật với hệ thống camera hình vuông vô cùng độc đáo kết hợp với mặt lưng bằng kính mang đến cảm giác cầm nắm vô cùng thích.', '1000', 'iphone-12-xanh-duong-200x200.jpg', 'điện thoại', 'Iphone 12 Xanh dương  64GB Fake'),
(5, 'Samsung Galaxy A11 có khả năng hỗ trợ chơi game, xem phim xuất sắc nhờ màn hình vô cực Infinity-O rộng 6.4 inch được thiết kế tràn viền mãn nhãn. Ngoài ra, chiếc điện thoại này còn đem lại trải nghiệm nhiếp ảnh chuyên nghiệp với cụm 3 camera ấn tượng cho góc chụp lên tới 115 độ.', '11', 'samsung-galaxy-a11-xanh-new-600x600-600x600.jpg', 'điện thoại', 'Samsung galaxy A11 xanh '),
(6, 'Xiaomi là hãng sản xuất điện thoại nổi tiếng được nhiều người dùng ưu tiên và lựa chọn sử dụng. Redmi Note 10 Pro là chiếc điện thoại hiện đại được mới được hãng ra mắt với nhiều tính năng và công nghệ hiện đại mang đến sự tiện lợi khi người dùng sử dụng chiếc smartphone này.   Thiết kế tinh tế và sang trọng, màn hình Full HD 6.67 inch Xiaomi Redmi Note 10 phiên bản Pro được hãng thiết kế với kích thước vừa vặn với tay người dùng. Hơn thế với thiết kế của thế hệ tinh tế và đầy sang trọng này giúp thu hút mọi ánh nhìn bời cái nhìn đầu tiên.  Mặt lưng của máy được thiết kế vuốt cong ở hai cạnh tạo được cảm giác mỏng và chắc chắn khi cầm nắm. Góc phải mặt lưng được in tên của nhà sản xuất Xiaomi vừa tạo được điểm nhấn cho sản phẩm vừa đặt ở vị trí người dùng có thể thoải mái trang trí chiếc điện thoại một cách dễ dàng và tiện lợi.', '20', 'xiaomi-mi-note-10-pro-black-600x600.jpg', 'điện thoại', 'xiaomi mi note 10 pro black'),
(7, 'Điện thoại iPhone xs mã gold không còn được thiết kế viền máy bo cong ở các cạnh như ở các dòng máy trước mà được thay thế bằng phần cạnh máy được vát phẳng tạo nên sự mạnh mẽ và cá tính cho người dùng. Bên cạnh đó, máy còn được làm bằng khung nhôm cao cấp trong ngành hàng không vũ trụ mang đến thiết kế cứng cáp và vô cùng bền bỉ. Đặc biệt, máy nổi bật với hệ thống camera hình vuông vô cùng độc đáo kết hợp với mặt lưng bằng kính mang đến cảm giác cầm nắm vô cùng thích.', '12', 'iphone-xs-max-gold-600x600-1.jpg', 'điện thoại', 'iphone xs max gold'),
(9, 'Vì nó nhỏ nên nó có võ -- Nghe gọi tốt.', '996', 'samsung.jpg', 'loai', 'hello mấy cưng'),
(10, 'Vì nó nhỏ nên nó có võ -- Nghe gọi tốt.', '998', 'samsung-galaxy-s21-tim-600x600.jpg', 'điện thoại', 'Samsung galaxy A11 xanh '),
(11, 'sap het gio roi', '21', 'vmart.jpg', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Chỉ mục cho bảng `giodo`
--
ALTER TABLE `giodo`
  ADD PRIMARY KEY (`idgiodo`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`);

--
-- Chỉ mục cho bảng `khach`
--
ALTER TABLE `khach`
  ADD PRIMARY KEY (`idkhach`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giodo`
--
ALTER TABLE `giodo`
  MODIFY `idgiodo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khach`
--
ALTER TABLE `khach`
  MODIFY `idkhach` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
