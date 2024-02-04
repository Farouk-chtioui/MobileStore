SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET GLOBAL FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privilege` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `account` (`id`, `username`, `password`, `email`, `privilege`) VALUES
(0, 'guest', 'guest', 'guest@gmail.com', 0),
(1, 'admin', 'admin', 'admin@gmail.com', 1),
(2, 'david', 'test', 'david@gmail.com', 0),
(3, 'lenin', '12345', 'lenin@gmail.com', 0),
(4, 'kevin', 'password', 'kevin@gmail.com', 0);

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `shipper_id` int(11) UNSIGNED NOT NULL,
  `total_sum` double(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `bill` (`id`, `cart_id`, `user_id`, `shipper_id`, `total_sum`) VALUES
(1, 0, 1, 1, 152.00),
(2, 0, 1, 2, 304.00);

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cart` (`id`, `item_id`, `user_id`, `quantity`) VALUES
(0, 12, 1, 1),
(1, 5, 1, 1),
(25, 1, 0, 1),
(26, 8, 0, 1),
(27, 13, 0, 1);

CREATE TABLE `manufacturer` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `headquarter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `manufacturer` (`id`, `brand`, `company`, `headquarter`) VALUES
(1, 'SamSung', 'Samsung Electronics', 'Korean'),
(2, 'Redmi', 'Xiaomi', 'China'),
(3, 'Apple', 'Apple Inc.', 'USA'),
(4, 'Oppo', 'OPPO Electronics', 'China'),
(5, 'Nokia', 'Nokia', 'Findland');

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` int(10) UNSIGNED NOT NULL,
  `price` double(10,2) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `product` (`id`, `name`, `brand`, `price`, `image`) VALUES
(1, 'Samsung Galaxy 10', 1, 152.00, './assets/products/1.png'),
(2, 'Redmi Note 7', 2, 122.00, './assets/products/2.png'),
(3, 'Redmi Note 6', 2, 112.00, './assets/products/3.png'),
(4, 'Redmi Note 5', 2, 102.00, './assets/products/4.png'),
(5, 'Redmi Note 4', 2, 82.00, './assets/products/5.png'),
(6, 'Redmi Note 8', 2, 132.00, './assets/products/6.png'),
(7, 'Redmi Note 9', 2, 142.00, './assets/products/8.png'),
(8, 'Samsung Galaxy A23', 1, 122.00, './assets/products/10.png'),
(9, 'Samsung Galaxy S6', 1, 122.00, './assets/products/11.png'),
(10, 'Samsung Galaxy S7', 1, 132.00, './assets/products/12.png'),
(11, 'Apple iPhone X', 3, 82.00, './assets/products/13.png'),
(12, 'iPhone 13 ProMax', 3, 142.00, './assets/products/14.png'),
(13, 'iPhone 12 Pro', 3, 122.00, './assets/products/15.png');

CREATE TABLE `shipper` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `area` varchar(30) NOT NULL,
  `cost` double(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `shipper` (`id`, `name`, `age`, `area`, `cost`) VALUES
(1, 'Hoang Duc', 18, 'Ha Noi', 1.00),
(2, 'Mr Dinh', 20, 'Da Nang', 2.00),
(3, 'Ky Anh', 20, 'Ho Chi Minh', 1.50),
(4, 'Ngoc Anh', 19, 'Binh Duong', 0.50),
(5, 'Khanh Huyen', 21, 'Lao Cai', 3.00),
(6, 'Nam Hai', 20, 'Vung Tau', 2.50);

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `gender` tinyint(3) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `money` double(10,2) UNSIGNED NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `fullname`, `phone`, `avatar`, `city`, `gender`, `address`, `money`) VALUES
(0, 'Guest', NULL, NULL, 'VN', 0, NULL, 0.00),
(1, 'Admin', '0943284322', 'https://www.shareicon.net/data/128x128/2016/05/26/771187_man_512x512.png', 'VN', 0, NULL, 99999.99),
(2, 'David', '0828382237', 'https://www.shareicon.net/data/128x128/2016/05/26/771188_man_512x512.png', 'US', 0, NULL, 50.00),
(3, 'Lenin', '0723923232', 'https://www.shareicon.net/data/128x128/2016/05/26/771186_people_512x512.png', 'UK', 1, NULL, 100.00),
(4, 'Kevin', '0932733612', 'https://www.shareicon.net/data/128x128/2016/05/26/771187_man_512x512.png', 'FR', 0, NULL, 10.00);

ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `shipper_id` (`shipper_id`),
  ADD KEY `bill_id` (`cart_id`);

ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand` (`brand`),
  ADD KEY `id` (`id`);

ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`shipper_id`) REFERENCES `shipper` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand`) REFERENCES `manufacturer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
