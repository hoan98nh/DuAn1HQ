-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2024 at 11:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1-hq`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_cate` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_cate`, `status`) VALUES
(1, 'nhẫn', 'acitve'),
(2, 'dây chuyền', 'acitve'),
(3, 'hoa tai', 'acitve');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_color` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name_color`, `status`) VALUES
(1, 'vàng', 'active'),
(2, 'trắng', 'active'),
(4, 'black', 'active'),
(12, 'Green', 'active'),
(13, 'nic', 'active'),
(14, 'bron', 'active'),
(15, 'vfffffff', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_material` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `name_material`, `status`) VALUES
(1, 'vàng 24k', 'active'),
(2, 'vàng trắng', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `order_client`
--

DROP TABLE IF EXISTS `order_client`;
CREATE TABLE IF NOT EXISTS `order_client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `payment` text COLLATE utf8mb4_general_ci NOT NULL,
  `ship` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lk__order_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_client`
--

INSERT INTO `order_client` (`id`, `id_user`, `name`, `address`, `email`, `payment`, `ship`, `status`) VALUES
(1, 2, 'user demo 1', 'nam tu liem, ha noi', 'user1@mail.com', 'cod', 'grab', '1'),
(2, 2, 'người khác nhận', 'hải phòng', 'other@mail.com', 'banking', 'be', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_client_detail`
--

DROP TABLE IF EXISTS `order_client_detail`;
CREATE TABLE IF NOT EXISTS `order_client_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_order` int NOT NULL,
  `id_product` int NOT NULL,
  `quantity` int NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lk_order-detail_order` (`id_order`),
  KEY `lk_order-detail_pdt` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_client_detail`
--

INSERT INTO `order_client_detail` (`id`, `id_order`, `id_product`, `quantity`, `status`) VALUES
(1, 1, 2, 5, '1'),
(2, 1, 2, 3, '1'),
(3, 2, 1, 6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cate` int NOT NULL,
  `name_product` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_pdt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detail_product` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lk_pdt_category` (`id_cate`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_cate`, `name_product`, `img_pdt`, `detail_product`, `status`) VALUES
(1, 1, 'NHẪN VÀNG VÀNG 14K GẮN ĐÁ CZ DOJI AFRJ000127F1CZ1', 'pic10.png', 'Tất cả các sản phẩm của DOJI được kiểm định chặt chẽ với máy quang phổ, cam kết chuẩn xác hàm lượng vàng. Các sản phẩm trang sức kim cương, đá quý/đá bán quý, ngọc/ngọc trai đều có đầy đủ kiểm định uy tín đi kèm.\r\n', 'active'),
(2, 2, 'HOA TAI VÀNG TRẮNG 14K GẮN ĐÁ CZ DOJI AFEK000503F2CZ1\r\n', 'sp3.png', 'Mẫu mã, kiểu dáng sản phẩm đa dạng, phù hợp với nhiều đối tượng và sự kiện khác nhau.\r\n', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE IF NOT EXISTS `product_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pdt` int NOT NULL,
  `id_size` int NOT NULL,
  `id_color` int NOT NULL,
  `id_material` int NOT NULL,
  `image_pd` text COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lk_pdt-detail_color` (`id_color`),
  KEY `lk_pdt-detail_material` (`id_material`),
  KEY `lk_pdt-detail_pdt` (`id_pdt`),
  KEY `lk_pdt-detail_size` (`id_size`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `id_pdt`, `id_size`, `id_color`, `id_material`, `image_pd`, `quantity`, `price`, `status`) VALUES
(1, 1, 1, 1, 1, 'hinh_detail_1', 10, '1000000', 'active'),
(2, 2, 1, 2, 2, 'hinh_detail_2', 90, '550000', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_role` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name_role`, `status`) VALUES
(1, 'quan tri vien', 'active'),
(2, 'nguoi dung', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_size` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name_size`, `status`) VALUES
(1, '35', 'active'),
(2, '42', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `id_role` int NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lk__user_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `address`, `phone_number`, `id_role`, `status`) VALUES
(1, 'admin', '123456', 'admin@mail.com', '', '', 1, 'active'),
(2, 'userdemo1', '1234', 'userdemo@mail.com', '', '', 2, 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_client`
--
ALTER TABLE `order_client`
  ADD CONSTRAINT `lk__order_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_client_detail`
--
ALTER TABLE `order_client_detail`
  ADD CONSTRAINT `lk_order-detail_order` FOREIGN KEY (`id_order`) REFERENCES `order_client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_order-detail_pdt` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_pdt_category` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `lk_pdt-detail_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_pdt-detail_material` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_pdt-detail_pdt` FOREIGN KEY (`id_pdt`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_pdt-detail_size` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `lk__user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
