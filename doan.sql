-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2022 lúc 06:17 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`) VALUES
(2),
(1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cake`
--

CREATE TABLE `cake` (
  `ID` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(20) NOT NULL,
  `ID_Category` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cake`
--

INSERT INTO `cake` (`ID`, `Name`, `Link`, `Price`, `ID_Category`) VALUES
('Tiramisu_gau', 'Bánh Tiramisu Gấu', 'Tiramisu_gau.png', 210012, 2),
('Tiramisu_vi_chanh_day', 'Bánh tiramisu vị chanh dây', '	\r\nTiramisu_vi_chanh_day.png', 220000, 2),
('Tiramisu_traitim', 'Bánh tiramisu hình trái tim', '	\r\nTiramisu_traitim.png', 200000, 2),
('Tiramisu_mix5vi', 'Bánh tiramisu mix 5 vi', '	\r\nTiramisu_mix5vi.png', 250000, 2),
('Tiramisu_hoaqua', 'Bánh tiramisu hoa qua', '	\r\nTiramisu_hoaqua.png', 190000, 2),
('Tiramsu_matcha', 'Bánh tiramisu vị matcha', '	\r\nTiramsu_matcha.png', 220000, 2),
('Tiramisu_vuongniem', 'Bánh tiramisu hình vương niệm', '	\r\nTiramisu_vuongniem.png', 210000, 2),
('Tiramsu_banh', 'Bánh tiramisu bánh quy', '	\r\nTiramsu_banh.png', 200000, 2),
('Banhkem_socola', 'Bánh kem phủ socola', '	\r\nBanhkem_socola.png', 230000, 1),
('Banhkem_hanhnhan', 'Bánh kem phủ hạnh nhân', '	\r\nBanhkem_hanhnhan.png', 230000, 1),
('Banhkem_chanhday', 'Bánh kem phủ chanh dây', '	\r\nBanhkem_chanhday.png', 230000, 1),
('Banhkem_dautay', 'Bánh kem phủ dâu tây', '	\r\nBanhkem_dautay.png', 230000, 1),
('Banhkem_matcha', 'Bánh kem phủ matcha', '	\r\nBanhkem_matcha.png', 230000, 1),
('Banhkem_xoai', 'Bánh kem phủ mứt xoài', '	\r\nBanhkem_xoai.png', 230000, 1),
('Banhkem_vietquat', 'Bánh kem phủ mứt việt quất', '	\r\nBanhkem_vietquat.png', 240000, 1),
('Banhkem_redvelvet', 'Bánh kem phủ bột red velvet', '	\r\nBanhkem_redvelvet.png', 240000, 1),
('Banhkem_truyenthong', 'Bánh kem truyền thống', '	\r\nBanhkem_truyenthong.png', 200000, 1),
('BLTM_truyenthong', 'Bánh bông lan trứng muối truyền thống', '	\r\nBLTM_truyenthong.png', 220000, 3),
('BLTM_hcn', 'Bánh bông lan trứng muối hình chữ nhật', '	\r\nBLTM_hcn.png', 280000, 3),
('BLTM_bokho', 'Bánh bông lan trứng muối mix bò khô', '	\r\nBLTM_bokho.png', 250000, 3),
('BTTM_phomai', 'Bánh bông lan trứng muối mx phô mai', '	\r\nBTTM_phomai.png', 230000, 3),
('BLTM_phomai_traitim', 'Bánh bông lan trứng muối mix phô mai hình trái tim', '	\r\nBLTM_phomai_traitim.png', 250000, 3),
('BLTM_tien', 'Bánh bông lan trứng muối cuộn tiền', '	\r\nBLTM_tien.png', 300000, 3),
('Mini_BLTM', 'Bông lan trứng muối mini', '	\r\nMini_BLTM.png', 130000, 4),
('Mini_Tiramisu', 'Tiramisu mini', '	\r\nMini_Tiramisu.png', 50000, 4),
('Mini_Tiramisu_dautay', 'Tiramisu dâu tây mini', '	\n../View/image/Mini_Tiramisu_dautay.png', 50000, 4),
('Mini_Banhkem', 'Bánh kem mini', '	\n../View/image/Mini_Banhkem.png', 150000, 4),
('Mini_cupcake_ngot', 'Bánh cupcake ngọt', '	\n../View/image/Mini_cupcake_ngot.png', 25000, 6),
('Mini_cupcake_dautay', 'Bánh cupcake dâu tây', '	\n../View/image/Mini_cupcake_dautay.png', 25000, 6),
('Mini_bonglan_phomai', 'Hộp 6 cái bông lan phô mai mini ', '	\n../View/image/Mini_bonglan_phomai.png', 25000, 4),
('Mini_cupcake_matcha', 'Bánh cupcake matcha', '	\n../View/image/Mini_cupcake_matcha.png', 25000, 6),
('Mini_cupcake_socola', 'Bánh cupcake socola', '	\n../View/image/Mini_cupcake_socola.png', 25000, 6),
('Mini_cupcake_oreo', 'Bánh  cupcake oreo', '	\n../View/image/Mini_cupcake_oreo.png', 25000, 6),
('Mini_cupcake1', 'Bánh cupcake 1', '	\n../View/image/Mini_cupcake1.png', 25000, 6),
('Mini_cupcake2', 'Bánh cupcake 2', '	\n../View/image/Mini_cupcake2.png', 25000, 6),
('Donut_traitim', 'Donut hình trái tim', '	\n../View/image/Donut_traitim.png', 20000, 5),
('Donut_truyenthong', 'Donut truyền thống', '	\n../View/image/Donut_truyenthong.png', 20000, 5),
('Donut_traxanh', 'Donut tra xanh', '	\n../View/image/Donut_traxanh.png', 20000, 5),
('Donut_xoai', 'Donut vị xoài', '	\n../View/image/Donut_xoai.png', 20000, 5),
('Donut_dautay', 'Donut dâu tây', '	\n../View/image/Donut_dautay.png', 20000, 5),
('BanhNgot_TartTrung', 'Bánh tart trứng', '	\n../View/image/BanhNgot_TartTrung.png', 15000, 5),
('BanhNgot_DuaDua', 'Bánh dừa dứa', '	\n../View/image/BanhNgot_DuaDua.png', 15000, 5),
('Banhngot_SauRieng', 'Bánh sầu riêng', '	\n../View/image/Banhngot_SauRieng.png', 15000, 5),
('Bạnhngot_CustardPhoMai', 'Bánh Custard phô mai', '	\n../View/image/Banhngot_CustardPhoMai.png', 15000, 5),
('Banhngot_Cookies', 'Bánh cookies', '	\n../View/image/Banhngot_Cookies.png', 15000, 5),
('Banhngot_Xopdua', 'Bánh xốp dừa', '	\n../View/image/Banhngot_Xopdua.png', 15000, 5),
('Banhngot_DauXanhTrung', 'Bánh đậu xanh trứng', '	\n../View/image/Banhngot_DauXanhTrung.png', 15000, 5),
('', 'cake mowis', 'Food-Name-_464.jpg', 12987654, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `ID_Cart` int(10) NOT NULL,
  `ID_User` int(10) NOT NULL,
  `Price` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(30) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'Bánh Kem'),
(2, 'Tiramisu'),
(3, 'Bông lan trứng muối'),
(5, 'Bánh ngọt'),
(4, 'Bánh mini'),
(6, 'Cupcake');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ID_DonHang` int(10) NOT NULL,
  `ID_User` int(10) NOT NULL,
  `Price` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ID_DonHang`, `ID_User`, `Price`, `TrangThai`) VALUES
(1, 1, '900000', 'delivered'),
(2, 3, '500000', 'delivered');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_cart`
--

CREATE TABLE `item_cart` (
  `ID_Cart` int(10) NOT NULL,
  `ID_Cake` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cream` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Size` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_donhang`
--

CREATE TABLE `item_donhang` (
  `ID_DonHang` int(10) NOT NULL,
  `ID_Cake` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cream` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Size` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `item_donhang`
--

INSERT INTO `item_donhang` (`ID_DonHang`, `ID_Cake`, `Cream`, `Size`, `SoLuong`) VALUES
(1, 'Banhkem_socola', 'dâu', 2, 3),
(2, 'BLTM_bokho', 'bò', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Password`, `Phone`, `Address`) VALUES
(1, 'Ha Nhi', 'hanhi@gmail.com', '5678', '0834343234', 'Quãng Trị'),
(2, 'Phương', 'phuong@gmail.com', 'phuong123', '0975321345', 'Quảng Bình'),
(3, 'Anh', 'anh@gmail.com', 'anh123', '123456', 'Hà Tĩnh'),
(4, 'Chiến', 'chien@gmail.com', 'chien123', '19283746', 'Hà Tĩnh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Category` (`ID_Category`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID_Cart`,`ID_User`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID_DonHang`,`ID_User`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Chỉ mục cho bảng `item_cart`
--
ALTER TABLE `item_cart`
  ADD PRIMARY KEY (`ID_Cart`,`ID_Cake`);

--
-- Chỉ mục cho bảng `item_donhang`
--
ALTER TABLE `item_donhang`
  ADD PRIMARY KEY (`ID_DonHang`,`ID_Cake`),
  ADD KEY `ID_Cake` (`ID_Cake`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `ID_Cart` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID_DonHang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
