-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 07:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `idCTDH` int(11) NOT NULL,
  `idDH` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0',
  `dongia` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`idCTDH`, `idDH`, `masp`, `soluong`, `dongia`) VALUES
(24, 6, 15, 1, 570),
(25, 2, 10, 2, 225),
(26, 5, 12, 9, 310),
(27, 2, 11, 15, 259),
(28, 3, 6, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `hinh`
--

CREATE TABLE `hinh` (
  `mahinh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `anh` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hinh`
--

INSERT INTO `hinh` (`mahinh`, `masp`, `anh`) VALUES
(1, 1, 'ao-thuy-thu-nu-peter-pan-dep.jpg'),
(2, 1, 'ao-thuy-thu-nu-peter-pan-dep-2.jpg'),
(3, 1, 'ao-thuy-thu-nu-peter-pan-dep-3.jpg'),
(4, 1, 'ao-thuy-thu-nu-peter-pan-dep-3.jpg'),
(5, 1, 'ao-thuy-thu-nu-peter-pan-dep-6.jpg'),
(6, 1, 'ao-thuy-thu-nu-peter-pan-dep-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idDH` int(11) NOT NULL,
  `idUser` int(11) NOT NULL DEFAULT '0',
  `tennguoinhan` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdtnguoinhan` varchar(11) CHARACTER SET latin1 NOT NULL,
  `TimeDatHang` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeNhanHang` date NOT NULL DEFAULT '0000-00-00',
  `DiaChiGiaoHang` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `TinhTrang` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idDH`, `idUser`, `tennguoinhan`, `sdtnguoinhan`, `TimeDatHang`, `TimeNhanHang`, `DiaChiGiaoHang`, `TinhTrang`) VALUES
(2, 0, 'cho nhi', '8798', '2017-11-01 00:00:00', '2017-11-02', 'cccccc', 0),
(3, 0, 'jggg', '7989', '0000-00-00 00:00:00', '0000-00-00', '76576', 0),
(4, 0, 'trang', '359539485', '0000-00-00 00:00:00', '0000-00-00', 'sfsvd', 1),
(5, 0, 'tiên', '0989', '2017-11-03 00:00:00', '2017-11-04', 'nnnn', 0),
(6, 0, 'nghèo', '090000', '0000-00-00 00:00:00', '0000-00-00', 'q1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_muc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`, `id_muc`) VALUES
('ml01', 'Áo Kiểu', 10),
('ml02', 'Váy Đầm', 10),
('ml03', 'Công Sở', 10),
('ml11', 'Áo Thun Nam', 1),
('ml12', 'Sơ Mi Nam', 1),
('ml13', 'Áo Khoác Nam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mucsanpham`
--

CREATE TABLE `mucsanpham` (
  `id_muc` int(11) NOT NULL,
  `tenmuc` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mucsanpham`
--

INSERT INTO `mucsanpham` (`id_muc`, `tenmuc`) VALUES
(10, 'Thời trang nữ'),
(1, 'Thời trang nam');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `soluongton` int(50) NOT NULL,
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nhasx` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `dongia` varchar(50) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `soluongton`, `maloai`, `nhasx`, `hinh`, `dongia`, `mota`) VALUES
(1, 'Áo Thủy Thủ Nữ Cổ Peter Pan Vạt Bầu 651', 0, 'ml01', 'TOPSHOP', 'hinh1.jpg', '190,000', 'Áo Thủy Thủ Nữ Cổ Peter Pan Vạt Bầu 651<br/>\r\n- Mã sp: GAU-651.<br/>\r\n- Màu sắc: Như hình.<br/>\r\n- Chất liệu: Vải Kate xô.<br/>\r\n- Size: Freesize - thích hợp cho bạn gái dưới 55kg.<br/>\r\n- Kích thước: Dài áo 59 - 66cm ; Ngực 94cm ; Tay 21cm.<br/>\r\n- Hình thật sản phẩm 100%.<br/>\r\n'),
(2, 'Áo Kiểu Nữ Cổ Tim Phối Voan 662', 15, 'ml01', 'ee', 'hinh10.jpg', '190,000', 'Áo Kiểu Nữ Cổ Tim Phối Voan 662\r\nMã sp: GSM525<br/>\r\n- Chất liệu: voan<br/>\r\n- Màu sắc: Đen.<br/>\r\n- Size: Freesize - Cho bạn gái dưới 55kg.<br/>\r\n- Kích Thước: Dài áo:78cm, Ngực: 94cm, Dài tay: 50cm.<br/>\r\n- Hình thật sản phẩm 100%.<br/>\r\n'),
(3, 'Áo Sơ Mi Nữ Thêu Hình Mèo Xinh 478', 10, 'ml01', 'aa', 'hinh2.jpg', '240,000', 'Áo Sơ Mi Nữ Thêu Hình Mèo Xinh 478<br/>\r\nMã sp: GAK401<br/>\r\n- Màu sắc: Trắng - Hồng<br/>\r\n- Chất liệu: Vải Len dày đẹp<br/>\r\n- Size: phù hợp cho bạn gái dưới 60kg<br/>- Dài áo: 61cm <br/>- Ngực: 100-124cm <br/>- Tay dài: 58cm<br/>\r\n- Hình thật sản phẩm 100%.\r\n\r\n'),
(4, 'Áo Thun Nữ Phối Mũ Chân Cún Cute 652', 13, 'ml01', 'bb', 'hinh3.jpg', '190,000', 'Áo Thun Nữ Phối Mũ Chân Cún Cute 652<br/>\r\n- Mã sp: GAK405<br/>\r\n- Màu sắc: Trắng Kem<br/>\r\n- Chất liệu: Vải Dù<br/>\r\n- Size: cho bạn gái dưới 58kg<br/>\r\n- Dài áo: 60cm - Ngực: 102cm - Tay dài: 60cm<br/>\r\n- Hình thật sản phẩm 100%.<br/>\r\n'),
(5, 'Áo Sơ Mi Nữ Form Rộng Thêu Hoa Mai 484', 13, 'ml01', 'bb', 'hinh4.jpg', '240,000', 'Áo Sơ Mi Nữ Form Rộng Thêu Hoa Mai 484\r\nMã sp: GSM520.\r\n- Chất liệu: Kate phối ren.\r\n- Màu sắc: Trắng.\r\n- Size: Freesize - Cho bạn gái dưới 50kg.\r\n- Kích Thước: Dái áo: 57cm, Ngực: 82cm, Dài tay: 59cm.\r\n- Hình thật sản phẩm 100%.\r\n'),
(6, 'Áo Khoác Hoodie Nữ Phối Caro 391', 13, 'ml01', 'cc', 'hinh5.jpg', '300,000', 'Áo Khoác Hoodie Nữ Phối Caro 391\r\n- Mã sp: GAK391.\r\n- Màu sắc: Trắng\r\n- Chất liệu: Vải nỉ dày dặn phối coton.\r\n- Size: Freesize - thích hợp cho bạn gái dưới 55kg.\r\n- Kích thước: Dài áo 68cm ; Ngực 106 - 120cm ; Tay 52cm.\r\n- Hình thật sản phẩm 100%.\r\n'),
(7, 'Áo Sơ Mi Nữ Form Dài Giấu Quần 525', 15, 'ml01', 'cc', 'hinh6.jpg', '225,000', 'Áo Sơ Mi Nữ Form Dài Giấu Quần 525\r\n- Mã sp: GSM525\r\n- Chất liệu: Cát Hàn.\r\n- Màu sắc: Đen.\r\n- Size: Freesize - Cho bạn gái dưới 55kg.\r\n- Kích Thước: Dài áo:78cm, Ngực: 94cm, Dài tay: 50cm.\r\n- Hình thật sản phẩm 100%.\r\n'),
(8, 'Áo Sơ Mi Nữ Phối Ren 520', 14, 'ml01', 'dd', 'hinh7.jpg', '245,000', 'Áo Sơ Mi Nữ Phối Ren 520\r\n- Mã sp: GSM520.\r\n- Chất liệu: Kate phối ren.\r\n- Màu sắc: Trắng.\r\n- Size: Freesize - Cho bạn gái dưới 50kg.\r\n- Kích Thước: Dái áo: 57cm, Ngực: 82cm, Dài tay: 59cm.\r\n- Hình thật sản phẩm 100%.\r\n'),
(9, 'Áo Sơ Mi Nữ Kiểu Hở Vai 465', 12, 'ml01', 'dd', 'hinh8.jpg', '150,000', 'Áo Sơ Mi Nữ Kiểu Hở Vai 465\r\n- Mã sp: GSM465.\r\n- Chất liệu: Cotton.\r\n- Màu sắc: Trắng.\r\n- Size: Freesize - Cho bạn gái dưới 55kg.\r\n- Kích Thước: Dài áo: 49cm, Ngực: 100cm, Dài tay: 18cm.\r\n- Hình thật sản phẩm 100%.\r\n'),
(10, 'Áo Kiểu Nữ Trễ Vai Sọc Đen 670', 13, 'ml01', 'ee', 'hinh9.jpg', '225,000', ''),
(11, 'Chân váy xòe cao cấp - D', 15, 'ml02', 'aa', 'ml021.jpg', '259,000', 'Chân váy xòe cao cấp - D\r\n-Chất liệu: Rũ Mềm dễ ủi\r\n-Kích thước S M L XL : \r\neo trên bụng 64-68-72-76\r\n-Nhập cao cấp\r\n'),
(12, 'Đầm ôm ren - DR02', 10, 'ml02', 'ee', 'ml0210.jpg', '310,000', '-Chất liệu:Vải ren hai lớp co giãn mặc thoải mái khi duy chuyển vận động\r\n-Kiểu dáng trẻ trung phù hợp với các bạn khi mặc dạo phố cùng bạn bè,dự tiệc,đến công sở...\r\n-Sản phẫm chỉ phù hợp với những bạn từ 40kg đến 53kg.\r\n-Size:S,M'),
(13, 'Chân váy maxi lót ôm xẻ trước', 20, 'ml02', 'aa', 'ml022.jpg', '247,000', '\r\n\r\n*Chân váy maxi lót ôm xẻ trước BA587 - BA587\r\n +Size S:eo 60 - 65cm ( vòng eo còn co giãn )\r\n+ Size M  :  eo 65 - 70cm ( vòng eo còn co giãn )\r\n +Size L  : eo 70 - 75cm ( vòng eo còn co giãn )\r\n + Size XL : eo 75 - 80cm ( vòng eo còn co giãn )\r\n +Size 2XL : eo 80 - 85cm ( vòng eo còn co giãn )\r\n + Size 3XL : eo 85 - 90cm ( vòng eo còn co giãn )\r\n\r\n-Chất liệu : chiffon\r\n'),
(14, 'Quần váy jean - AK1022', 15, 'ml02', 'bb', 'ml023.jpg', '135,000', '-Các tín đồ thời trang jeans sẽ không thể nào bỏ qua những chiếc quần váy denim cực yêu này. Sự lên ngôi của những chiếc chân váy jeans đã khiến bao tín đồ thời trang phải mê mẩn.\r\n-Size S: Nữ dưới 45kg\r\n-Size M: Nữ dưới 50kg\r\n-Size L: Nữ dứoi 55kg\r\n\r\n'),
(15, 'SET ÁO LƯỚI ĐẦM YẾM CARO XẺ VẠT - SB1760', 15, 'ml02', 'bb', 'ml024.jpg', '570,000', 'TÊN SP : HÀNG NHẬP SET ÁO LƯỚI PHỐI ĐẦM YẾM CARO XẺ VẠT\r\n \r\n- MÃ SP : SB1760\r\n \r\n- MÀU SẮC : Áo đen, Yếm ghi\r\n \r\n- SIZE : F\r\n \r\n- CHẤT LIỆU : Vải nhập\r\n \r\n- KIỂU DÁNG : Cổ tròn, Tay dài, Đầm yếm\r\n \r\n- MỤC ĐÍCH SỬ DỤNG : Công sở, Du lịch, Dự tiệc, Đi chơi, Đi học\r\n \r\n- MÙA PHÙ HỢP : Thu Đông, Xuân Hè\r\n \r\n- XUẤT XỨ : Hàng nhập QC '),
(16, 'Chân váy xếp ly sườn dáng A - VLXL102', 15, 'ml02', 'cc', 'ml025.jpg', '188,000', 'Kiểu dáng: chữ A, xếp ly lệch sườn\r\nCạp: 4cm\r\nHàng thiết kế form dáng chuẩn\r\nChất vải co giãn 2 chiều đẹp( Vải công ty Vinatex), mặc rất thoải mái, không nhàu\r\nMàu sắc: đen, trắng, đỏ đô, xanh cô ban, xanh dương, hồng phấn\r\nChất vải cho dáng váy đẹp thanh lịch và cũng rất sang trọng\r\nChiều dài chân váy: 42-46\r\nSize chân váy: eo - mông - dài váy\r\nSize XS: 60 - 80 - 42\r\nSize S : 64 - 84 - 43\r\nSize M : 68 - 88 - 44\r\nSize L  : 72 - 92 - 45\r\nSize XL: 76 - 96 - 46\r\nSize 2XL: 80 - 100 -46'),
(17, 'chân váy jean thêu hoa - VBH88', 15, 'ml02', 'cc', 'ml026.jpg', '288,000', '\r\n -Váy jeans thời trang, với thiết kế sành điệu, form vừa vặn mang đến vẻ đẹp trẻ trung cho bạn gái.\r\n- Điểm nhấn cho váy jeans là hoa văn đẹp mắt.\r\n- Chất liệu: jeans dày dặn, đường may tinh tế tỉ mỉ\r\n-Thiết kế quần đùi trong, thích hợp cho bạn mặc đi chơi, đi làm, dạo phố, picnic cùng bạn bè.\r\n-Size:S,M,L,XL,2XL,3XL'),
(18, 'Chân váy bò - 211', 15, 'ml02', 'dd', 'ml027.jpg', '190,000', ' Cam kết bán hàng đẹp, chất lượng.\r\n? Đảm bảo hàng chuẩn, y hình 100%. \r\n? Free size 40kg-55kg tuỳ chiều cao vừa.\r\n? Mẫu mã đa dạng, phong phú, cập nhật mẫu mới liên tục trong ngày.\r\n-Size: X,M, L'),
(19, 'Đầm ren cao cấp- MD102', 10, 'ml02', 'dd', 'ml028.jpg', '350,000', '-Tên sản phẩm: Đầm ren cao cấp - MD102\r\n-Hàng nhập: Đầm ren cao cấp - MD1012\r\n-Chất liệu: Ren hàn cao cấp, mềm mại thoáng mát. không bai thoải mái dạo phố và làm việc nơi công sở.\r\n-Kiểu dáng trẻ trung thanh lịch.\r\n-Size :S,M,L'),
(20, ' ĐẦM XÒE HOA CỰC XINH - 10022', 15, 'ml02', 'ee', 'ml029.jpg', '250,000', ' ĐẦM XÒE HOA CỰC XINH\r\n-Đầm xoè hoa. SIÊU PHẨM HOT VỀ LẠI.\r\n-Chất liệu vải : thun cát len\r\n-Size L : 40-52kg. Size XL 53-60kg\r\n-Chiều dài chuẩn : 82cm '),
(21, 'Đầm công sở cao cấp - dcs2', 15, 'ml03', 'aa', 'ml031.jpg', '380,000', 'Đầm công sở cao cấp - dcs2\r\n\r\n-Kiểu dáng: đầm xòe mullet, cổ v đắp chéo, sát nách, eo phối dây xỏ cột nơ sau lưng, 2 túi\r\n\r\n-Chất liệu: linen\r\n\r\n-Màu sắc: xanh rêu, đỏ\r\n\r\n-Kích thước: freesize (46~58kg ngực 96 eo max 84 dài trước 90 sau 100)'),
(22, 'Đầm yếm công sở - AK3120', 5, 'ml03', 'ee', 'ml0310.jpg', '260,000', 'Đầm yếm công sở - AK3120\r\n ĐẦM YẾM NỮ được may bằng chất liệu vải THUN CÁT HÀN co giãn. Sản phẩm này có một size: FREESIZE( NỮ 40-58kg)\r\nSản phẩm là hình chụp thật, y hình , có thể đậm nhạt hơn hình một xíu. Đồng thời với chất liệu VẢI THUN CÁT HÀN với độ co giãn tốt, thun dầy nhưng mát mẻ đem đến cho ngừoi mặc sự thoải mái, dễ chịu và thoáng mát.'),
(23, 'Đầm công sở - Hàng nhập loại 1 - HT1049', 10, 'ml03', 'aa', 'ml032.jpg', '620,000', '***Đầm công sở cực sang trọng - Hàng nhập loại 1 - HT1049\r\n-Sét 3 sản phẩm đầm công sở cao cấp gồm: áo voan kiểu, chân váy xếp và áo khoác kaki cao cấp. các bạn có thể diện được các mùa khác khi không dùng đến áo khoác.\r\n-Chất liệu : Áo voan, chân váy vải xô dày, áo khoác kaki mịn đẹp, hàng nhập -loại 1 vải bao đẹp\r\n-Màu sắc :  100% như hình\r\n-Size :  M, L, XL, XXL  \r\n-Xuất xứ: Hồng Kông\r\n\r\nChi tiết kích thước sản phẩm\r\n\r\nSize M dưới 50kg\r\nSize L dưới 55kg\r\nSize XL dưới 60kg \r\nSize XXL duoi 68kg'),
(24, 'Đầm công sở & áo khoác - GT1179', 10, 'ml03', 'bb', 'ml033.jpg', '510,000', 'Hàng nhập - Đầm công sở kèm áo khoác - GT1179\r\nThông tin sản phẩm:\r\n- Xuất xứ : Quảng châu\r\n- Chất liệu : Thun cotton lụa\r\n- Màu Sắc : Hồng\r\n- Kích Thước Áo, Quần : M,L,XL,XXL\r\n + Size M: dưới 50kg\r\n + Size L: Dưới 55kg\r\n + Size XL: Dưới 58kg\r\n + Size XXL: Dưới 65kg\r\n--------------------------------'),
(25, 'Đầm Công Sở Kèm Áo Khoác - Đ1732', 10, 'ml03', 'bb', 'ml034.jpg', '235,000', 'Đầm Công Sở Kèm Áo Khoác Cực Đẹp-Đ1732 - Đ1732\r\n- Chất liệu: cát hàn, co giãn thoải mái\r\n-Size:S,M,L'),
(26, 'ĐẦM SUÔNG CÔNG SỞ - D12', 10, 'ml03', 'cc', 'ml035.jpg', '240,000', 'ĐẦM SUÔNG CÔNG SỞ - D12\r\nChất liệu: cát hàn, co giãn, thoải mái \r\n-Size: S,M, L,XL'),
(27, 'Đầm ôm công sở cao cấp 12 - dcs12', 10, 'ml03', 'cc', 'ml036.jpg', '270,000', 'Đầm ôm công sở cao cấp 12 - dcs12\r\n-Đầm suông cổ tròn, cài trâm hoa,sát nách ,vạt đắp chéo\r\n-Chất liệu: tuyết mưa, co giãn nhẹ\r\n-Màu sắc: trắng\r\n-Kích thước : một size ( 46~ 54kg ngực 88 eo 76 mông 94 dài 85)'),
(28, 'Đầm công sở vạt chéo - dsc', 10, 'ml03', 'dd', 'ml037.jpg', '290,000', 'Đầm công sở vạt chéo - dsc\r\n-Kiểu dáng : đầm suông cổ tròn, cài trâm hoa,sát nách ,vạt đắp chéo\r\n-Chất liệu: tuyết mưa, co giãn nhẹ\r\n-Màu sắc: trắng\r\n-Kích thước : một size ( 46~ 54kg ngực 88 eo 76 mông 94 dài 85)\r\n '),
(29, 'Đầm công sở viền ren - XT4Y5737-H2A10', 10, 'ml03', 'dd', 'ml038.jpg', '300,000', 'Đầm công sở, đầm công sở viền ren - XT4Y5737-H2A10\r\n+ Tên sản phẩm: Đầm Công Sở Viền Ren Eo Và Tay.\r\n+ Kiểu dáng thời trang, hiện đại.\r\n+ Thích hợp cho các cô gái đi dự tiệc, event, sinh nhật, dạo phố,...hoặc trong môi trường làm việc công sở.\r\n+ Màu sắc: Xám.\r\n+ Chất liệu: Xô Hàn.\r\n+ Fressize: Dài 85cm, Ngực: 84-90cm, eo: 62-70cm, mông: 86-90cm, thích hợp cho bạn nữ từ 46kg - 54kg tùy chiều cao'),
(30, 'ĐẦM CÔNG SỞ CAO CẤP - DK27', 6, 'ml03', 'ee', 'ml039.jpg', '550,000', 'ĐẦM CÔNG SỞ CAO CẤP - DK27\r\n-Chất Liệu: cotton lạnh \r\n-Màu Sắc: màu da như hình\r\n-Kích thước: M,L,XL\r\n-Size M: Vòng ngực: 85-88cm,vòng eo: 70cm,vòng mông: 92cm,chiều dài 90 cm\r\nSize L: Vòng ngực: 87-92cm,vòng eo: 70-74cm,vòng mông : 90-96cm.chiều dài 93cm\r\nSize XL: Vòng ngực: 93-96cm,vòng eo: 78cm,vòng mông: 100cm.chiều dài 95cm.'),
(31, 'Áo Thun Ngắn Tay Cổ Tròn PUPPET Body', 10, 'ml11', 'aa', 'ml041.jpg', '110,000', 'Áo Thun Ngắn Tay Trơn Cổ Tròn PUPPET Body\r\n-Màu sắc: Đỏ - Đen - Trắng.\r\n\r\n- Chất liệu: Vải cotton chất lượng cao, mát mẻ, mềm mịn tạo sự thoải mái cho người mặc.\r\n\r\n- Form áo: M, L, XL.'),
(32, 'Áo thun body nam in hình hoa 3D - ATN011', 12, 'ml11', 'ee', 'ml0410.jpg', '100,000', 'Áo thun body nam in hình hoa 3D - ATN011\r\n-Chất liệu thun cotton  mang lại sự thoải mái, thoáng mát, thấm hút mồ hôi tốt, phù hợp với các bạn trẻ yêu thích hoạt động.\r\n-Màu sắc: Đa dạng\r\n-Hướng dẫn chọn size:\r\nSize S: phù hợp với bạn từ 45 - 55kg.\r\nSize M: phù hợp với bạn từ 55 - 65kg.\r\nSize L: phù hợp với bạn từ 65 -75kg.\r\nSize XL: phù hợp với bạn  75-80kg\r\nSize XXL: phù hợp với bạn >80kg'),
(33, 'ÁO THUN NAM THỜI TRANG - AT25', 10, 'ml11', 'aa', 'ml042.jpg', '90,000', 'ÁO THUN NAM THỜI TRANG - AT25\r\n-Xuất xứ: VIỆT NAM\r\n-Chất liệu: thun cotton cao cấp\r\n-Kiểu dáng: Thiết kế theo form chuẩn\r\n-Màu sắc: Đen, Xám, ĐỎ\r\n-Trọng lượng: 200g\r\n-Size: M'),
(34, 'Áo thun thái lan ghost team - ghost', 10, 'ml11', 'bb', 'ml043.jpg', '80,000', 'Áo thun thái lan ghost team - ghost\r\n-Áo thun THÁI LAN.\r\n-Có 4 size S.M.L.XL\r\n-Thun cotton 65% tixi 35% \r\n-Hàng form chuẩn .'),
(35, 'Áo thun ngắn tay xuất khẩu AT84 - AT84', 15, 'ml11', 'bb', 'ml044.jpg', '145,000', 'Áo thun ngắn tay xuất khẩu AT84 - AT84\r\n-Size NAM : S M L XL\r\n-Hàng Việt Nam - Form rộng\r\n-Chất liệu: thun 4 chiều 100% cotton\r\nhàng bên shop đa số đều là thun 4 chiều 100% cotton nên thấm hút mồ hôi tốt, lại không bị xù lông hay chảy vải ;)\r\n.'),
(36, 'Áo Thun Ngắn Tay BEACH - ZR0954.5', 13, 'ml11', 'cc', 'ml045.jpg', '135,000', 'Áo Thun Ngắn Tay Phong Cách Bãi Biển BEACH - ZR0954.5\r\n- Màu sắc: Bạc - Xám - Xanh dương - Xanh rêu.\r\n\r\n- Chất liệu: Vải cotton chất lượng cao, mát mẻ, mềm mịn tạo sự thoải mái cho người mặc.\r\n\r\n- Form áo: M, L, XL, XXL form xuông (50-80kg).\r\n'),
(37, 'Áo thun xuất khẩu SOC669 - SOC669', 10, 'ml11', 'cc', 'ml046.jpg', '130,000', 'Áo thun xuất khẩu SOC669 - SOC669\r\nSỌC 1989\r\n-Áo thun xuất khẩu SOC672\r\n-Size NAM : XS S M L\r\n-Hàng Việt Nam - Form xuông\r\n-Chất liệu: vải 100% cotton\r\n1 áo - 195.000'),
(38, 'Áo thun xuất khẩu SOC851 - SOC851', 12, 'ml11', 'dd', 'ml047.jpg', '210,000', 'Áo thun xuất khẩu SOC851 - SOC851\r\n-Áo thun xuất khẩu SOC851\r\n-Size NAM : S M L XL\r\n-Hàng Việt Nam - Form xuông\r\n-Chất liệu: thun 4 chiều 100% cotton\r\n-1 áo - 210.000\r\n-3 sản phẩm bất kỳ - giảm 10.000 mỗi áo'),
(39, 'ÁO THUN NAM BODY VS LD0422 - LD522', 13, 'ml11', 'dd', 'ml048.jpg', '105,000', 'ÁO THUN NAM BODY VS LD0422 - LD522\r\n-Xuất xứ: VIỆT NAM\r\n-Chất liệu: thun 100% cotton cao cấp\r\n-Kiểu dáng: Thiết kế theo form chuẩn\r\n-Màu sắc: Đen, TRẮNG\r\n-Trọng lượng: 200g\r\n-Size: M'),
(40, 'Áo thun SALE M 55kg - SALEMM', 12, 'ml11', 'ee', 'ml049.jpg', '135,000', 'Áo thun SALE M 55kg - SALEMM\r\n-Áo thun body SALE M 55kg\r\n-Size NAM : M\r\n-Hàng Việt Nam - Form body\r\n-Chất liệu: thun 4 chiều 65% cotton\r\n-1 áo - 135.000\r\n-3 sản phẩm bất kỳ - giảm 10.000 mỗi áo'),
(41, 'Áo Sơ Mi Nam Dài Tay - ASMD04', 12, 'ml12', 'aa', 'ml051.jpg', '200,000', 'Áo Sơ Mi Công Sở Nam Dài Tay Trẻ Trung LA Fashion ASMD04\r\nSơ Mi Nam dài tay body  phong cách thời trang với thiết kế trẻ trung và cá tính , cho các bạn nam tự tin khoe cá tính sôi nổi.\r\nChất liệu bền đẹp  mang lại sự thoải mái, thoáng mát, thấm hút mồ hôi tốt, phù hợp với các bạn trẻ yêu thích hoạt động.\r\nMàu sắc: Đa dạng\r\nHướng dẫn chọn size:\r\nSize	Vòng Ngực	Dài Áo	Rộng Vai	Dài Ta'),
(42, 'Áo sơ mi nam MR. Simple form ôm (đỏ đô)', 12, 'ml12', 'ee', 'ml0510.jpg', '100,000', 'Áo sơ mi nam MR. Simple form ôm (đỏ đô)\r\n✔️ Chất liệu: Cotton lụa\r\n✔️ Size: M, L, XL, XXL\r\n✔️ Màu sắc: 5 màu (trắng, đen, tím than, xanh dương nhạt, đỏ đô)\r\n✔️ Dáng ôm, form chuẩn\r\n----------\r\nHƯỚNG DẪN CHỌN SIZE:\r\n- Size M: Từ 45 - 54kg, cao dưới 1m7\r\n- Size L: Từ 55 - 60kg, cao dưới 1m7\r\n- Size XL: Từ 61 - 65kg cao dưới 1m75\r\n- Size XXL: Từ 66 - 71kg, cao dưới 1m8'),
(43, 'SƠ MI CỔ TÀU CAO CẤP S409', 12, 'ml12', 'aa', 'ml052.jpg', '130,000', 'SƠ MI CỔ TÀU CAO CẤP S409\r\nChất vải nhập khẩu từ THÁI LAN không bai, không nhăn, không xù\r\n--Fom Body cực chuẩn, ôm chọn bờ vai mặc cực trẻ trung và phong cách.\r\n?SIZE M: Cân nặng 48-55kg, Cao 1m50 - 1m62, " Áo Dài giữa cổ sau đến lai bầu 68cm, Vai 38cm, Vòng ngực 88cm, Chiết eo 76cm, Dài tay 54cm"\r\n?SIZE L: Can nặng 55- 60kg, Cao 1m60 - 1m68, " Áo Dài giữa cổ sau đến lai bầu 70cm, Vai 40cm, Vòng Ngực 92cm, Chiết eo 80cm, Dài tay 56cm"\r\n?SIZE XL: cân nặng 60 - 68kg, Cao 1m65 - 1m72, " Áo Dài giữa cổ sau xuống lai bầu 72cm, Vai 42cm, Vòng ngực 96cm, Chiết eo 84cm, Dài tay 58cm"\r\n?SIZE XXL: Cân nặng 65 -74kg, Cao 1m7. - 1m80, Áo Dài giữa cổ sau xuống lai bầu 74cm, Vai 46cm, Vòng Ngực 100cm, Chiết eo 90cm, Dài tay 60cm"\r\n--Hàng có sẵn, đủ size: Từ M, L, XL, XXL\r\n'),
(44, 'Áo Sơ Mi Nam Dài Tay HASA 11215', 10, 'ml12', 'bb', 'ml053.jpg', '120,000', 'Áo Sơ Mi Nam Dài Tay HASA 11215\r\n-Áo Sơ Mi Nam thương hiệu HASA mang đến vẻ ngoài nam tính và lịch lãm. Thiết kế phối màu độc đáo tạo nên phong cách thời trang thời thượng cho các chàng trai\r\n- Cổ lật, phối nút cài\r\n- Tay dài\r\n- Kiểu dáng Slim fit\r\n- Chất liệu cotton mềm mại thoáng mát'),
(45, 'Sơ mi ca ro siêu đẹp, chất không nhăn', 15, 'ml12', 'bb', 'ml054.jpg', '189,000', 'Sơ mi ca ro siêu đẹp, chất không nhăn\r\nThương hiệu:\r\nHstore\r\nChất liệu:Chiffon\r\nTay áo:Dài Tay\r\nDáng áo:Dáng Vừa\r\nCổ áo:Cổ Thuyền\r\nTúi ở ngực:Không\r\nCách giặt:Giặt Tay'),
(46, 'ÁO SƠ MI CARO CÓ NÓN', 5, 'ml12', 'cc', 'ml055.jpg', '120,000', 'ÁO SƠ MI CARO CÓ NÓN\r\nThương hiệu:A\r\nChất liệu:A\r\nTay áo:Dài Tay\r\nDáng áo:Dáng Vừa\r\nCổ áo:Cổ Bẻ\r\nTúi ở ngực:Có\r\nCách giặt:Giặt Máy'),
(47, 'Áo sơ mi nam MR.Simple (xanh rêu)', 8, 'ml12', 'cc', 'ml056.jpg', '100,000', 'Áo sơ mi nam MR. Simple form Hàn Quốc (xanh rêu)\r\n✔️ Chất liệu: Cotton lụa\r\n✔️ Size: M, L, XL, XXL\r\n✔️ Màu sắc: 5 màu (trắng, đen, tím than, xanh dương nhạt, đỏ đô)\r\n✔️ Dáng ôm, form chuẩn\r\n----------\r\nHƯỚNG DẪN CHỌN SIZE:\r\n- Size M: Từ 45 - 55kg, cao dưới 1m7\r\n- Size L: Từ 55 - 62kg, cao dưới 1m7\r\n- Size XL: Từ 62 - 68kg cao dưới 1m75\r\n- Size XXL: Từ 68 - 73kg, cao dưới 1m8'),
(48, 'Áo đũi nam, Áo nam, thời trang nam', 5, 'ml12', 'dd', 'ml057.jpg', '130000', 'Áo đũi nam, Áo nam, thời trang nam\r\nThương hiệu:Khác\r\nChất liệu:Đũi\r\nTay áo:Ngắn Tay\r\nDáng áo:Dáng Vừa\r\nCổ áo:Cổ Tàu\r\nTúi ở ngực:Không\r\nCách giặt:Các Kiểu'),
(49, 'ÁO SƠ MI HỌA TIẾT LONG VŨ LỚN', 7, 'ml12', 'dd', 'ml058.jpg', '80,000', 'M916 ÁO SƠ MI HỌA TIẾT LONG VŨ LỚN (VAI TRÁI)\r\nChất liệu: kate lụa (trơn phẳng không có gân, sớ, hạt)\r\nKhối lương : 110g /áo\r\nKeo ủi định hình: loại keo hột, ủi ở cổ áo, cổ tay, nẹp áo gúp áo đứng và chắc chắn.\r\nForm: kiểu thời trang body.\r\nNút áo: màu đen trơn.\r\nHình in: sắc nét, độ phân giải hình 300DPI, được in bằng mực inktec, không phai màu kể cả giặt máy, hoặc dung thuốc tẩy trắng.\r\nChế độ ủi (là) áo: Silk hoặc Polyester (vải sợi tổng hợp)\r\nCó 3 size : M,L,XL'),
(50, 'Áo sơ mi đen ngắn tay', 4, 'ml12', 'ee', 'ml059.jpg', '75,000', 'Áo sơ mi đen ngắn tay\r\n Áo sơ mi ngắn tay body\r\nChất vải lụa cao cấp không bai, không nhăn, không xù, thông thoáng thấm hút mồ hôi tốt, tạo cảm giác thoải mái cho người mặc.\r\n \r\n##Fom Body cực chẩn, ôm chọn bờ vai mặc cực trẻ trung và phong cách nhưng không kém phần lịch lãm, phù hợp với mọi hoàn cảnh cả đi chơi và đi làm và cực dễ phối đồ với các trang phục\r\n \r\n##Hàng có sẵn, đủ size: Từ M, L, XL, XXL'),
(51, 'ÁO KHOÁC NAM BOMBER JACKET KAKI ', 5, 'ml13', 'aa', 'ml061.jpg', '110,000', 'ÁO KHOÁC NAM BOMBER JACKET KAKI (XÁM) \r\nhất liệu vải vẫn là kaki nhật ngoại nhập cao cấp, 2 lớp lót dù mềm mại, chắc chắn, thấm hút mồ hôi tốt tạo sự thoải mái khi mặc. Áo bomber có túi, dây kéo tiện dụng giúp đựng được những vật nhỏ cần thiết và sử dụng gam màu trung tính sẽ là lựa chọn hoàn hảo cho phong cách smart-casual – không ồn ào những vẫn rất nổi bật, đơn giản mà thời trang, trẻ trung mà lịch lãm'),
(52, 'Áo khoác jean nam AKJN04 (Xanh bò)  ', 10, 'ml13', 'ee', 'ml0610.jpg', '290,000', 'Áo khoác jean nam nhập khẩu AKJN04 (Xanh bò)  \r\nChất liệu vải: Jean denim dày dặn\r\nKiểu dáng tay dài, cổ bẻ\r\nThiết kế màu sắc cá tính\r\nHàng nhập khẩu cao cấp'),
(53, 'Áo Khoác Da Nam Trơn Đen - D6', 9, 'ml13', 'aa', 'ml062.jpg', '329,000', 'Áo Khoác Da Nam Trơn Đen - D6\r\nÁo Da Cao Cấp với thiết kế mạnh mẽ và nam tính, cho bạn sự thoải mái, khỏe khoắn khi kết hợp với nhiều loại trang phục khác nhau.\r\n\r\n+ Áo Da Cao Cấp làm bằng da tổng hợp  cao cấp 2 lớp . Tuyệt đối không bong tróc, độ bền cao  và thời trang.\r\n\r\n+  Dây khóa làm inox mạ đồng lịch lãm nam tính.\r\n\r\n+ Chất liệu : ngoại nhập lót lông'),
(54, 'Áo Khoác Nỉ Có Nón Xám Trắng - KN6', 10, 'ml13', 'bb', 'ml063.jpg', '199,000', 'Áo Khoác Nỉ Có Nón Xám Trắng - KN6\r\n+ Áo Khoác Nỉ Có Nón Xám Trắng - KN6 đẹp, tinh tế & đẳng cấp, phong cách . Shop N6 nhận giao hàng và thanh toán thu hộ tận nơi trên toàn quốc.\r\n\r\n+ Đảm Bảo Ko Xù Lông , Ko Ra Màu Suốt Quá Trình Sữ Dụng \r\n\r\n+ Áo Khoác Nỉ Có Nón Xám Trắng - KN6 với thiết kế mạnh mẽ và nam tính, cho bạn sự thoải mái, khỏe khoắn khi kết hợp với nhiều loại trang phục khác nhau.\r\n\r\n+ Áo Khoác Nỉ Có Nón Xám Trắng - KN6 làm bằng Nỉ tổng hợp  cao cấp 2 lớp . Tuyệt đối không xù lông, độ bền cao  và thời trang.\r\n\r\nSiz    S,M,L,XL'),
(55, 'ÁO KHOÁC DÙ CÓ MŨ NAM(XAM TRANG) ', 13, 'ml13', 'bb', 'ml064.jpg', '159,000', 'ÁO KHOÁC DÙ CÓ MŨ NAM(XAM TRANG)\r\n+ Thiết kế áo 2 mặt độc đáo cho bạn thêm phong cách, thêm cá tính khi sử dụng.\r\n\r\n+ dù chống thấm đi mưa tốt, bạn sẽ hoàn toàn hài lòng khi sử dụng nó trong mùa mưa này đấy ( đặc biệt sản phẩm này bên mình là Vải dù cả hai mặt đều không thấm nước, chứ không phải chỉ 1 mặt không thấm nước như các sản phẩm khác trên thị trường )\r\n\r\n+ Áo cổ đứng, dây kéo, tay dài phối màu cá tính thể hiện đậm chất nam tính, thời trang\r\n\r\n+ Bạn có thể diện áo khi đi chơi, đi du lịch ...\r\n\r\n+ Màu sắc : Đen xanh\r\n\r\n+ size M: phù hợp cho nam < 58kg và nữ <55kg (tùy chiều cao)\r\n+ size L : phù hợp cho nam < 68kg và nữ <65kg (tùy chiều cao) '),
(56, 'Áo Khoác Kaki Nam Phối Đen Đỏ - AP11', 3, 'ml13', 'cc', 'ml065.jpg', '209,000', 'Áo Khoác Kaki Nam Phối Đen Đỏ Cao Cấp - AP11\r\nÁo Khoác Kaki Nam Phối Đen Đỏ Cao Cấp - AP11  cực đẹp, tinh tế & đẳng cấp, phong cách, năng động. Áo Khoác kaki  cao cấp chất liệu Kaki mịn lót dù ngoại nhập, kaki đẹp, kiểu dáng thể thao, thoải mái và thời trang.\r\n Áo Khoác Kaki Nam Phối Đen Đỏ Cao Cấp - AP11 làm bằng kaki tổng hợp  cao cấp 2 lớp . Tuyệt đối không ra màu, độ bền cao  và thời trang.\r\n\r\n♦ Dây khóa inox cao cấp lịch lãm nam tính.'),
(57, 'Áo Khoác Nam Hàn Quốc Cuess ( xanh den )  ', 11, 'ml13', 'cc', 'ml066.jpg', '110,000', 'Áo Khoác Nam Hàn Quốc Cuess Cao Cấp ( xanh den ) \r\nKiểu dáng:  dài tay, in chữ, ôm body\r\nChất liệu:  Nỉ cao cấp\r\nMàu sắc: Đỏ ,Đen, Xanh, Xanh Đen\r\nKích thước: M, L\r\n+ Size M : Từ 50kg - 60kg ( tuỳ chiều cao )\r\n+ Size L : Từ 61kg - 75kg ( tuỳ chiều cao )\r\nXuất xứ: Việt Nam '),
(58, 'Áo khoác dù nam chống thấm nước (Đỏ)', 7, 'ml13', 'dd', 'ml067.jpg', '183,000', 'Áo khoác dù nam 2 mặt chống thấm nước cao cấp (Đỏ)\r\n-Áo có thiết kế khóa kéo phía trước tiện dụng bạn có thể dễ dàng khi mặc. Tay áo và thân phối bo, cố định khi mặc, ngoài tác dụng bảo vệ bạn khỏi tác hại từ môi trường bên ngoài áo còn tăng thêm phần thanh lịch và giữ ấm cơ thể.\r\n-Chất liệu dù 2 lớp tiện lợi cho chàng trong những ngày đông mưa phùn hay gió lạnh.Màu sắc trang nhã dễ dàng mix cùng các trang phục khác.Bạn có thể kết hợp cùng áo sơ mi, áo kiểu, quần kaki, jean các phụ kiện đi kèm để luôn được tự tin và nổi bật nhất.'),
(59, 'Áo Khoác ALAN WALKER hàn quốc (Đen)  ', 4, 'ml13', 'dd', 'ml068.jpg', '89,000', 'Áo Khoác ALAN WALKER thời trang hàn quốc (Đen)\r\nKiểu dáng:  Tay dài, form ôm body,có nón.\r\nChất liệu: Nỉ cao cấp\r\nMàu sắc: Xám trắng, Đen\r\nKích thước: M ,L\r\n- Size M: Cân Nặng: 50kg - 60kg / Cao :1m55 - 1m70\r\n- Size L: Cân Nặng: 61kg - 70kg / Cao: 1m60 - 1m75\r\nXuất xứ: Việt Nam\r\n+Chiều dài: 64cm\r\n+Rộng vai: 43cm\r\n+Dài tay: 63cm\r\n+Vòng ngực: 49x2cm\r\n\r\n   '),
(60, 'Áo Khoác Kaki Nam Hàn Quốc QK15', 7, 'ml13', 'ee', 'ml069.jpg', '201,000', 'Áo Khoác Kaki Nam Phối Kéo Hàn Quốc QK15 - Kem \r\n Áo Khoác Kaki Nam Phối Kéo Hàn Quốc QK15 - Kem Cao Cấp với thiết kế mạnh mẽ và nam tính, cho bạn sự thoải mái, khỏe khoắn khi kết hợp với nhiều loại trang phục khác nhau.\r\n\r\n♦ Áo Khoác Kaki Nam Phối Kéo Hàn Quốc QK15 - Kem làm bằng kaki tổng hợp  cao cấp 2 lớp . Tuyệt đối không ra màu, độ bền cao  và thời trang.\r\n\r\n♦ Dây khóa làm inox mạ đồng lịch lãm nam tính.'),
(61, 'ao dài', 10, 'ml02', 'qqq', 'ao-thuy-thu-nu-peter-pan-dep-6.jpg', 'qq', 'qqqqqqqqqq'),
(62, '1111', 111, 'qque', '111', 'ml026.jpg', '111', 'dccccc'),
(64, 'rge', 435, 'ml01', 'reg', 'ao-thuy-thu-nu-peter-pan-dep.jpg', '35', ''),
(65, '1111', 111, '11', '111', 'ml024.jpg', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `pass`, `username`, `email`, `diachi`, `dienthoai`, `id_group`) VALUES
(1, '67ee8e8fa7bf7b09d93168a3550fde0c', 'hue', 'a@gmail.com', 'fjtyf', '899878', 1),
(3, 'b706835de79a2b4e80506f582af3676a', 'ooo', 'dd@gmail.com', 'ftrdtr', '894484', 2),
(4, '14e1b600b1fd579f47433b88e8d85291', 'chonhi', 'chonhi@gmail.com', 'fgdgh', '1234', 1),
(5, 'd9b1d7db4cd6e70935368a1efb10e377', 'hrth', 'rth@gmail.com', '123', '123', 2),
(6, 'd9b1d7db4cd6e70935368a1efb10e377', 'dr', 'rg@gmail.com', '123', '123', 2),
(8, '3049a1f0f1c808cdaa4fbed0e01649b1', 'th', 'e@gmail.com', '111', '111', 2),
(11, 'af2fac6b79ae2e70b932bc4769517f4b', 'kjhuiguyg', 'fde@gmai.com', 'gỵoioii89', '34567', 2),
(13, 'd9b1d7db4cd6e70935368a1efb10e377', 'aba', 'abc@gmail.com', 'zzzzz', '123456', 2),
(14, '9289140d0b0fb8051e10c2704aa61e9c', 'aaccc', 'sdsd@gmail.com', 'sfgd', '1412554', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`idCTDH`),
  ADD KEY `chitiethoadon1` (`masp`),
  ADD KEY `chitiethoadon2` (`idDH`);

--
-- Indexes for table `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`mahinh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idDH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `mucsanpham`
--
ALTER TABLE `mucsanpham`
  ADD PRIMARY KEY (`id_muc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `idCTDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `hinh`
--
ALTER TABLE `hinh`
  MODIFY `mahinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon2` FOREIGN KEY (`idDH`) REFERENCES `hoadon` (`idDH`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
