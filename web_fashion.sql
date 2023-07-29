-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2022 lúc 03:44 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: 'web_fashion'
USE web_fashion;
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'brands'
--

CREATE TABLE brands (
  brand_id int(5) NOT NULL,
  brand_name varchar(100) NOT NULL
);

--
-- Đang đổ dữ liệu cho bảng 'brands'
--

INSERT INTO brands (brand_id, brand_name) VALUES
(1, 'aoNam'),
(2, 'quanNam'),
(3, 'aokhoacNam'),
(4, 'vestNam'),
(5, 'aoNu'),
(6, 'quanNu'),
(7, 'aokhoacNu'),
(8, 'vestNu'),
(9, 'VayNu'),
(10, 'ouffits'),
(11, 'Oufftsnam'),
(12, 'Oufftsnu'),
(13, 'tuinam'),
(14, 'tuinu'),
(15, 'balotreem');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'cart_details'
--

CREATE TABLE cart_details (
  id_cart_details int(11) NOT NULL,
  code_cart varchar(10) NOT NULL,
  product_id int(11) NOT NULL,
  soluong int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'cart_details'
--

INSERT INTO cart_details (id_cart_details, code_cart, product_id, soluong) VALUES
(60, '5363', 29, 2),
(61, '5363', 26, 1),
(62, '1169', 29, 3),
(63, '8314', 20, 3),
(64, '8314', 22, 2),
(65, '4904', 46, 3),
(66, '4904', 44, 2),
(67, '4904', 43, 3),
(68, '5344', 45, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'products'
--

CREATE TABLE products (
  product_id int(5) NOT NULL,
  name varchar(255) NOT NULL,
  image char(50) NOT NULL,
  price int(10) NOT NULL,
  quatity int(10) NOT NULL,
  decription text NOT NULL,
  brand_id int(5) NOT NULL,
  synopsis text NOT NULL,
  size varchar(10) NOT NULL,
  image1 char(100) NOT NULL,
  image2 char(100) NOT NULL,
  image3 char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'products'
--

INSERT INTO products (product_id, name, image, price, quatity, decription, brand_id, synopsis, size, image1, image2, image3) VALUES
(34, 'Oversize Basic T-Shirt', 'Screenshot_20221130_103401.png', 505000, 50, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>size/cm : Lenght&nbsp; &nbsp;Chest&nbsp; &nbsp;Shoulder&nbsp; Sleeve</p>\r\n\r\n<p>M :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;72&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 124&nbsp; &nbsp; &nbsp; 68&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 20</p>\r\n\r\n<p>L :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 74&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 130&nbsp; &nbsp; &nbsp; 69&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 21</p>\r\n\r\n<p>XL :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;76&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 136&nbsp; &nbsp; &nbsp; 70&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 22</p>\r\n', '', 'Screenshot_20221130_103416.png', 'Screenshot_20221130_103434.png', 'Screenshot_20221130_103456.png'),
(35, 'Half-Sleeved Shirt', 'Screenshot_20221130_105855.png', 556, 150, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>size/cm : Lenght &nbsp; Chest &nbsp; Shoulder &nbsp;Sleeve</p>\r\n\r\n<p>M :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 72.5&nbsp; &nbsp; &nbsp; &nbsp;116&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;60&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 23</p>\r\n\r\n<p>L :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;73.5&nbsp; &nbsp; &nbsp; &nbsp; 120&nbsp; &nbsp; &nbsp; &nbsp; 61&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 24</p>\r\n\r\n<p>XL :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;74.5&nbsp; &nbsp; &nbsp; &nbsp; 124&nbsp; &nbsp; &nbsp; &nbsp; 62&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25</p>\r\n', '', 'Screenshot_20221130_105908.png', 'Screenshot_20221130_105916.png', 'Screenshot_20221130_105928.png'),
(36, 'V-Neck T-Shirt', 'Screenshot_20221130_110414.png', 606, 80, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Low stock - 9 items left</li>\r\n</ul>\r\n', 1, '<p>size/cm : Lenght &nbsp; Chest &nbsp; Shoulder &nbsp;Sleeve</p>\r\n\r\n<p>M :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 72.5&nbsp; &nbsp; &nbsp; &nbsp;120&nbsp; &nbsp; &nbsp; 65&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 20</p>\r\n\r\n<p>L :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;74&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 130&nbsp; &nbsp; &nbsp; 68&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 21</p>\r\n\r\n<p>XL :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;76&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 135&nbsp; &nbsp; &nbsp; 72&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 22</p>\r\n', '', 'Screenshot_20221130_110426.png', 'Screenshot_20221130_110440.png', 'Screenshot_20221130_110447.png'),
(37, 'Pleated Sleeveless Suit', 'Screenshot_20221130_110819.png', 556, 150, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>size/cm : Lenght &nbsp; Chest &nbsp; Shoulder&nbsp;&nbsp;</p>\r\n\r\n<p>M :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 66&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 98&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;42</p>\r\n\r\n<p>L :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;68&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 102&nbsp; &nbsp; &nbsp; &nbsp; 44</p>\r\n\r\n<p>XL :&nbsp; &nbsp; &nbsp; &nbsp; 70&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;106&nbsp; &nbsp; &nbsp; &nbsp; 46</p>\r\n\r\n<p>XXL:&nbsp; &nbsp; &nbsp; &nbsp;72&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;110&nbsp; &nbsp; &nbsp; &nbsp; 48</p>\r\n', '', 'Screenshot_20221130_110846.png', 'Screenshot_20221130_110851.png', 'Screenshot_20221130_110900.png'),
(38, 'Pleated Basic T-Shirt', 'Screenshot_20221130_111313.png', 581, 100, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>Size/cm&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 75&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;116<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;77&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;118<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;79&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;120</p>\r\n', '', 'Screenshot_20221130_111320.png', 'Screenshot_20221130_111329.png', 'Screenshot_20221130_111345.png'),
(39, 'Flower T-Shirt', 'Screenshot_20221130_111717.png', 733000, 200, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Low stock - 3 items left</li>\r\n</ul>\r\n', 1, '<p>Size/cm&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest&nbsp;&nbsp; &nbsp;Shoulder&nbsp;&nbsp; &nbsp;Sleeve<br />\r\nS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 69&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;118&nbsp; &nbsp; &nbsp; &nbsp; 60&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;21<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;71&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;122&nbsp; &nbsp; &nbsp; &nbsp; 62&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 73&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;126&nbsp; &nbsp; &nbsp; &nbsp; 64&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;23<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 75&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;130&nbsp; &nbsp; &nbsp; &nbsp;66&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 24</p>\r\n', '', 'Screenshot_20221130_111724.png', 'Screenshot_20221130_111736.png', 'Screenshot_20221130_111744.png'),
(40, 'Half-High Collar Bottoming Shirt', 'Screenshot_20221130_112143.png', 707000, 200, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>SIZE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M&nbsp; &nbsp; &nbsp; &nbsp; L&nbsp; &nbsp; &nbsp; &nbsp;XL&nbsp;&nbsp; &nbsp;2XL<br />\r\nChest&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;110&nbsp; &nbsp; 112&nbsp;&nbsp; &nbsp;114&nbsp;&nbsp; &nbsp;116<br />\r\nlength&nbsp; &nbsp; &nbsp; &nbsp; 71&nbsp; &nbsp; &nbsp;72&nbsp; &nbsp; &nbsp; 73&nbsp;&nbsp; &nbsp;74<br />\r\nShoulder&nbsp; &nbsp; 57&nbsp;&nbsp; &nbsp;59&nbsp; &nbsp; &nbsp; 61&nbsp;&nbsp; &nbsp;63<br />\r\nSleeve&nbsp; &nbsp; &nbsp; &nbsp;55&nbsp;&nbsp; &nbsp;56&nbsp; &nbsp; &nbsp; 57&nbsp;&nbsp; &nbsp;58</p>\r\n', '', 'Screenshot_20221130_112155.png', 'Screenshot_20221130_112205.png', 'Screenshot_20221130_112213.png'),
(41, 'V-Neck T-Shirt', 'Screenshot_20221130_112716.png', 556000, 200, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>Size/cm&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest&nbsp;&nbsp; &nbsp;Shoulder&nbsp;&nbsp; &nbsp;Sleeve<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 70&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;114&nbsp; &nbsp; &nbsp; &nbsp;55&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;24<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;72&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;118&nbsp; &nbsp; &nbsp; &nbsp;57&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;74&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 122&nbsp; &nbsp; &nbsp; &nbsp;59&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;26</p>\r\n', '', 'Screenshot_20221130_112728.png', 'Screenshot_20221130_112735.png', 'Screenshot_20221130_112743.png'),
(42, 'Summer Pleated Shirts', 'Screenshot_20221130_113937.png', 884000, 50, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>Size/cm&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest&nbsp;&nbsp; &nbsp;Shoulder&nbsp;&nbsp; &nbsp;Sleeve<br />\r\nS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;70-74&nbsp; &nbsp; &nbsp; 116&nbsp; &nbsp; &nbsp; &nbsp;57.5&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;21.5<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 72-76&nbsp; &nbsp; &nbsp; 120&nbsp; &nbsp; &nbsp; &nbsp;59&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 22<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;74-78&nbsp; &nbsp; &nbsp; 124&nbsp; &nbsp; &nbsp; &nbsp;60.5&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22.5<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 76-80&nbsp; &nbsp; &nbsp; &nbsp;128&nbsp; &nbsp; &nbsp; &nbsp;62&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 23</p>\r\n', '', 'Screenshot_20221130_113946.png', 'Screenshot_20221130_114000.png', 'Screenshot_20221130_114008.png'),
(43, 'High Neck T-Shirt', 'Screenshot_20221130_114545.png', 430000, 150, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>size&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Shoulder width&nbsp;&nbsp; &nbsp;bust&nbsp;&nbsp; &nbsp;Sleeve Length<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp;72.5cm&nbsp;&nbsp; &nbsp;53 cm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;107 cm&nbsp;&nbsp; &nbsp;26 cm<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; 73.5 cm&nbsp; &nbsp;54 cm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;110 cm&nbsp;&nbsp; &nbsp;27 cm<br />\r\nXL&nbsp; &nbsp; &nbsp; 74.5cm&nbsp; &nbsp;55 cm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 113 cm&nbsp;&nbsp; &nbsp;28 cm</p>\r\n', 'L', 'Screenshot_20221130_114554.png', 'Screenshot_20221130_114606.png', 'Screenshot_20221130_114613.png'),
(44, 'Loose Patchwork T-Shirt', 'Screenshot_20221130_115310.png', 834000, 50, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Low stock - 8 items left</li>\r\n</ul>\r\n', 1, '<p>Size/cm&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest&nbsp;&nbsp; &nbsp;Shoulder&nbsp;&nbsp; &nbsp;Sleeve<br />\r\nS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 69&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;116&nbsp; &nbsp; &nbsp; &nbsp; 54&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;71&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;120&nbsp; &nbsp; &nbsp; &nbsp; 56&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;21<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 73&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;124&nbsp; &nbsp; &nbsp; &nbsp; 58&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;75&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 128&nbsp; &nbsp; &nbsp; &nbsp; 60&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;23</p>\r\n', 'M', 'Screenshot_20221130_115304.png', 'Screenshot_20221130_115252.png', 'Screenshot_20221130_115225.png'),
(45, 'Letter Printing T-Shirt', 'Screenshot_20221130_115647.png', 531000, 250, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>Size&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest&nbsp;&nbsp; &nbsp;Shoulder&nbsp;&nbsp; &nbsp;Sleeve<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;72&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;102&nbsp; &nbsp; &nbsp; &nbsp; 52&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;21.5<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 74&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;106&nbsp; &nbsp; &nbsp; &nbsp; 54&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22.5<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp;76&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;110&nbsp; &nbsp; &nbsp; &nbsp; 56&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;23.5<br />\r\n2XL&nbsp; &nbsp; &nbsp;78&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;114&nbsp; &nbsp; &nbsp; &nbsp; 58&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;24.5</p>\r\n', 'M', 'Screenshot_20221130_115655.png', 'Screenshot_20221130_115702.png', 'Screenshot_20221130_115710.png'),
(46, 'Side Slit Crew Neck T-Shirt', 'Screenshot_20221130_120058.png', 834000, 300, '<ul>\r\n	<li>Ships in 3-10 business days</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Returns &amp; Exchange in the U.S.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Free Exchange</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Secure payments</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>In stock, ready to ship</li>\r\n</ul>\r\n', 1, '<p>Size/cm&nbsp;&nbsp; &nbsp;Length&nbsp;&nbsp; &nbsp;Chest&nbsp;&nbsp; &nbsp;Shoulder&nbsp;&nbsp; &nbsp;Sleeve<br />\r\nS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 69&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;116&nbsp; &nbsp; &nbsp; &nbsp; 54&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20<br />\r\nM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;71&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 120&nbsp; &nbsp; &nbsp; &nbsp;56&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;21<br />\r\nL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 73&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 124&nbsp; &nbsp; &nbsp; &nbsp;58&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22<br />\r\nXL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 75&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 128&nbsp; &nbsp; &nbsp; &nbsp;60&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 23</p>\r\n', 'S', 'Screenshot_20221130_120106.png', 'Screenshot_20221130_120120.png', 'Screenshot_20221130_120127.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'shipping'
--

CREATE TABLE shipping (
  id_shipping int(11) NOT NULL,
  name varchar(100) NOT NULL,
  address varchar(100) NOT NULL,
  note varchar(100) NOT NULL,
  phone varchar(11) NOT NULL,
  tenkhachhang varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'shipping'
--

INSERT INTO shipping (id_shipping, name, address, note, phone, tenkhachhang) VALUES
(4, 'hehe', 'Quảng Nam', 'Giao hàng tận nhà ', '1234567899', 'quanghuy123'),
(5, 'Haisehi', 'Đà Nẵng', '', '11223344556', 'haisehi'),
(7, 'Quang Huy', 'Trường đại học công nghệ thông tin và truyền thông Việt-Hàn', 'giao hàng lúc 9h30 sáng , tại cổng A', '0776766874', 'quanghuy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'tbl_admin'
--

CREATE TABLE tbl_admin (
  idadmin int(11) NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  admin_status int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'tbl_admin'
--

INSERT INTO tbl_admin (idadmin, username, password, admin_status) VALUES
(0, 'admin', 'admin123', 1),
(1, 'pqhuy', '12345678', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'tbl_cart'
--

CREATE TABLE tbl_cart (
  id_cart int(11) NOT NULL,
  name_khachhang varchar(100) NOT NULL,
  code_cart varchar(10) NOT NULL,
  cart_status int(11) NOT NULL,
  date varchar(50) NOT NULL,
  payment varchar(50) NOT NULL,
  cart_shipping int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'tbl_cart'
--

INSERT INTO tbl_cart (id_cart, name_khachhang, code_cart, cart_status, date, payment, cart_shipping) VALUES
(71, 'quanghuy', '5363', 0, '2022-11-28 02:32:21', 'tien mat', 7),
(72, 'quanghuy', '556', 0, '2022-11-28 02:32:28', 'tien mat', 7),
(73, 'quanghuy', '1169', 0, '2022-11-30 00:47:59', 'chuyen khoan', 7),
(110, 'quanghuy', '8314', 0, '2022-11-30 01:23:15', 'tien mat', 7),
(135, 'quanghuy', '4904', 0, '2022-11-30 12:10:22', 'tien mat', 7),
(136, 'quanghuy123', '5344', 1, '2022-12-03 02:07:56', 'chuyen khoan', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'tbl_dangky'
--

CREATE TABLE tbl_dangky (
  tenkhachhang varchar(200) NOT NULL,
  email varchar(100) NOT NULL,
  diachi varchar(100) NOT NULL,
  matkhau varchar(100) NOT NULL,
  dienthoai varchar(20) NOT NULL,
  hovaten varchar(200) NOT NULL,
  image_info varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'tbl_dangky'
--

INSERT INTO tbl_dangky (tenkhachhang, email, diachi, matkhau, dienthoai, hovaten, image_info) VALUES
('haisehi', 'huypq2.21it@vku.udn.vn', 'vku', '1234', '01234567890', 'Phan Quang Huy', ''),
('quanghuy', 'huypq2.21it@vku.udn.vn', 'CNTT & TT VH', '1234', '01234567890', 'Quang Huy   ', '630x355.jpg'),
('quanghuy123', 'huypq2.21it@vku.udn.vn', 'CNTT & TT VH', '123456789', '01234567890', 'quang huy', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'tbl_thongke'
--

CREATE TABLE tbl_thongke (
  id int(11) NOT NULL,
  ngaydat varchar(30) NOT NULL,
  donhang int(11) NOT NULL,
  doanhthu varchar(100) NOT NULL,
  soluongban int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'tbl_thongke'
--

INSERT INTO tbl_thongke (id, ngaydat, donhang, doanhthu, soluongban) VALUES
(1, '2022-10-21', 30, '50000000', 25),
(2, '2022-05-22', 32, '25000000', 28),
(3, '2022-06-12', 33, '34000000', 27),
(4, '2022-11-01', 27, '40000000', 25),
(5, '2022-11-22', 35, '57000000', 32),
(6, '2022-11-20', 35, '52500000', 25),
(7, '2022-11-23', 35, '42500000', 19),
(11, '2022-11-25', 1, '8550000', 4),
(12, '2022-11-26', 1, '4150000', 18),
(13, '2022-11-30', 5, '6798000', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'trangchu'
--

CREATE TABLE trangchu (
  img1 varchar(200) NOT NULL,
  img2 varchar(200) NOT NULL,
  img3 varchar(200) NOT NULL,
  img4 varchar(200) NOT NULL,
  img5 varchar(200) NOT NULL,
  img6 varchar(200) NOT NULL,
  img7 varchar(200) NOT NULL,
  id_img int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng 'trangchu'
--

INSERT INTO trangchu (img1, img2, img3, img4, img5, img6, img7, id_img) VALUES
('Screenshot_20221129_011947.png', 'Screenshot_20221129_010629.png', 'poster3.png', 'Screenshot_20221129_015823.png', 'images.jpg', '5a330277095a6bf36992db03b5098e66--chanel-handbags-chanel-bags.jpg', 'Screenshot_20221129_020228.png', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng 'brands'
--
ALTER TABLE brands
  ADD PRIMARY KEY (brand_id);

--
-- Chỉ mục cho bảng cart_details
--
ALTER TABLE cart_details
  ADD PRIMARY KEY (id_cart_details);

--
-- Chỉ mục cho bảng products
--
ALTER TABLE products
  ADD PRIMARY KEY (product_id),
  ADD KEY brand_id (brand_id);

--
-- Chỉ mục cho bảng shipping
--
ALTER TABLE shipping
  ADD PRIMARY KEY (id_shipping);

--
-- Chỉ mục cho bảng tbl_admin
--
ALTER TABLE tbl_admin
  ADD PRIMARY KEY (idadmin);

--
-- Chỉ mục cho bảng tbl_cart
--
ALTER TABLE tbl_cart
  ADD PRIMARY KEY (id_cart),
  ADD KEY id_khachhang (name_khachhang),
  ADD KEY id_khachhang_2 (name_khachhang);

--
-- Chỉ mục cho bảng tbl_dangky
--
ALTER TABLE tbl_dangky
  ADD PRIMARY KEY (tenkhachhang);

--
-- Chỉ mục cho bảng tbl_thongke
--
ALTER TABLE tbl_thongke
  ADD PRIMARY KEY (id);

--
-- Chỉ mục cho bảng trangchu
--
ALTER TABLE trangchu
  ADD PRIMARY KEY (id_img);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng brands
--
ALTER TABLE brands
  MODIFY brand_id int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng cart_details
--
ALTER TABLE cart_details
  MODIFY id_cart_details int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng products
--
ALTER TABLE products
  MODIFY product_id int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng shipping
--
ALTER TABLE shipping
  MODIFY id_shipping int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng tbl_cart
--
ALTER TABLE tbl_cart
  MODIFY id_cart int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng tbl_thongke
--
ALTER TABLE tbl_thongke
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
