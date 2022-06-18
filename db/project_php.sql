-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 12:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'dien thoai'),
(3, 'May tinh');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(500) NOT NULL,
  `thoi_quen` varchar(500) NOT NULL,
  `so_thich` varchar(500) NOT NULL,
  `sinh_nhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `password`, `thoi_quen`, `so_thich`, `sinh_nhat`) VALUES
(2, 'hiep', 971086969, '4297f44b13955235245b2497399d7a93', 'dep trai', 'dit bu', '2000-03-01'),
(3, 'hao', 2147483647, '4297f44b13955235245b2497399d7a93', 'an', 'ngu', '2000-03-03'),
(4, 'le hao', 123123123, '4297f44b13955235245b2497399d7a93', 'hoc', 'hoc', '2000-11-11'),
(6, 'hiep', 0, '202cb962ac59075b964b07152d234b70', '123', '123', '2021-08-09'),
(7, 'cong', 123, '202cb962ac59075b964b07152d234b70', '123', '123', '2021-08-17'),
(8, 'hiep123', 123, '202cb962ac59075b964b07152d234b70', '123', '123', '2021-08-16'),
(9, 'ngohuynhduc@gmail.com', 2147483647, 'e10adc3949ba59abbe56e057f20f883e', 'Không', 'Chơi ', '2022-06-10'),
(10, 'huynhduc', 2147483647, '202cb962ac59075b964b07152d234b70', 'Ăn', 'Ngủ', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `ngan_sach`
--

CREATE TABLE `ngan_sach` (
  `price` bigint(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngan_sach`
--

INSERT INTO `ngan_sach` (`price`, `id`) VALUES
(1117000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`) VALUES
(27, 8, '2021-08-23', 14000000),
(28, 9, '2022-06-14', 7000000),
(29, 10, '2022-06-18', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(40, 29, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ma_hang` varchar(500) NOT NULL,
  `bao_hanh` int(11) NOT NULL,
  `so_imei` varchar(500) NOT NULL,
  `so_serial` varchar(500) NOT NULL,
  `ton_kho` int(11) NOT NULL,
  `xuat_su` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `ma_hang`, `bao_hanh`, `so_imei`, `so_serial`, `ton_kho`, `xuat_su`, `price`, `image`) VALUES
(5, 'Iphone 6', 1, '123123', 6, '312', '123', 19, 'Trung quoc', 1000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/03/09/image-removebg-preview-3.png'),
(6, 'Iphone 7', 1, '123321', 6, '123', '123', 0, 'My', 2000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/09/15/image-removebg-preview-13.png'),
(7, 'Acer Nitro 5', 3, '123123123', 6, '312', '123', 19, 'Trung quoc', 5000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/11/13/laptop-dell-inspiron-5415-1.png'),
(8, 'Macbook M1', 3, '12332144', 6, '123', '123', 9, 'My', 7000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2020/11/17/macmoi256.png'),
(9, 'Iphone 8', 1, '123123', 6, '312', '123', 19, 'Trung quoc', 1000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/03/16/image-removebg-preview-3.png'),
(10, 'Iphone 11', 1, '123321', 6, '123', '123', 8, 'My', 2000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/04/18/image-removebg-preview-5.png'),
(11, 'Acer Nitro 6', 3, '123123123', 6, '312', '123', 6, 'Trung quoc', 5000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/11/11/hp-victus-16-e0175ax-4.png'),
(12, 'Macbook M2', 3, '12332144', 6, '123', '123', 4, 'My', 7000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/10/19/gray-macbook-2021-3.png'),
(13, 'Iphone 13 ProMax', 1, 'IPN13pm', 36, 'IPSKDMYS89134', '8392837323', 10, 'Mỹ', 31999999, 'https://cdn.hoanghamobile.com/i/preview/Uploads/2021/09/15/image-removebg-preview-17.png'),
(14, 'PocoPhone', 1, 'PCP12', 12, 'IPSKDM333YS89134', '321343423234', 23, 'Trung Quốc', 11999999, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/02/27/image-removebg-preview-3.png'),
(15, 'Dell Vostro 3', 3, 'DeVT34', 12, 'DELASPDOAWE43', '234235636354', 12, 'Anh', 21500000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/11/13/laptop-asus-vivobook-m513ua-ej033t-3.png'),
(16, 'Iphone 11 Pro', 1, 'IP11p', 24, 'DFLMY2312S89134', '32984720934', 56, 'Trung Quốc', 12000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/04/18/image-removebg-preview-5.png'),
(17, 'Oppo Reno 7', 1, 'opprn123', 12, '23123123', 'OPI123123', 0, 'Trung Quốc', 12000000, 'https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/02/28/7z.png');

-- --------------------------------------------------------

--
-- Table structure for table `tra_hang`
--

CREATE TABLE `tra_hang` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `tt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tra_hang`
--

INSERT INTO `tra_hang` (`id`, `product_name`, `product_price`, `quantity`, `order_date`, `customer_email`, `tt`) VALUES
(17, 'iphone 9', 2000000, 1, '2021-08-23', '', 2000000),
(18, 'macbook m2', 7000000, 1, '2021-08-23', '', 7000000),
(19, 'acer nitro 6', 5000000, 1, '2021-08-23', '', 5000000),
(20, 'macbook m2', 7000000, 1, '2022-06-14', '', 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'nva@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngan_sach`
--
ALTER TABLE `ngan_sach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tra_hang`
--
ALTER TABLE `tra_hang`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ngan_sach`
--
ALTER TABLE `ngan_sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tra_hang`
--
ALTER TABLE `tra_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
