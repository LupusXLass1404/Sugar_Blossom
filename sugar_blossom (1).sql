-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-04 09:35:49
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sugar_blossom`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about_image`
--

CREATE TABLE `about_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `left_sh` int(1) UNSIGNED NOT NULL DEFAULT 0,
  `right_sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about_image`
--

INSERT INTO `about_image` (`id`, `img`, `left_sh`, `right_sh`) VALUES
(4, '3f830c8a753a33a8f04212099e88ac28.jpg', 1, 0),
(5, '14d266f14b250e198b0b1a288af89371.jpg', 0, 1),
(6, '39634dfcc2d76fadef8d9b9e4a057e75.jpg', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `about_text`
--

CREATE TABLE `about_text` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about_text`
--

INSERT INTO `about_text` (`id`, `title`, `text`, `sh`) VALUES
(1, 'At Sugar Blossom, we create handcrafted cakes and desserts that bring sweetness and joy to every occasion.', 'Welcome to Sugar Blossom, where every sweet treat is a work of art! Our bakery specializes in creating delicious, handcrafted cakes and desserts, made with love and the finest ingredients. With a passion for perfection, we aim to bring joy to every occasion, from birthdays to weddings and everything in between.', 0),
(3, 'Sugar Blossom: Handcrafted cakes and desserts, made to sweeten every moment.', 'At Sugar Blossom, we believe in the power of a perfect dessert to turn moments into lasting memories. Each of our cakes is carefully crafted by our skilled bakers, ensuring that every bite is as delightful as the last. Our creations are not only delicious but are designed to be visually stunning, with delicate details that make every cake a centerpiece.', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `carousel`
--

INSERT INTO `carousel` (`id`, `img`, `sh`) VALUES
(1, 'macarons-8628974_1920.jpg', 1),
(2, 'red-velvet-cake-4917734_1920.jpg', 1),
(3, 'strawberry-8752918_1920.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `logo`
--

CREATE TABLE `logo` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `logo`
--

INSERT INTO `logo` (`id`, `text`, `sh`) VALUES
(1, 'Sugar Blossom', 1),
(6, 'Candy Petal', 0),
(23, 'Whisk & Bloom', 0),
(24, '* Vanilla Dream *', 0),
(39, 'Frosted Fleur', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `marquee`
--

CREATE TABLE `marquee` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `marquee`
--

INSERT INTO `marquee` (`id`, `text`, `sh`) VALUES
(1, 'Sweet', 1),
(2, 'Delight', 1),
(8, 'Frosting', 1),
(9, 'Sugar', 1),
(10, 'Cake', 1),
(11, 'Fluffy', 1),
(12, 'Creamy', 1),
(13, 'Whisk', 1),
(14, 'Joyful', 1),
(15, 'Heavenly', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL DEFAULT 'default.jpg',
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`, `sh`) VALUES
(1, 'New Cake Shop Opens in Downtown', 'Sugar Blossom Bakery, the beloved local cake shop, has opened its doors to a fresh new location in the heart of downtown. Known for its mouth-watering cakes, cookies, and pastries, the bakery now offers an expanded menu that includes custom-made cakes for all occasions. With a modern yet cozy interior, customers can enjoy a warm and inviting atmosphere while indulging in some of the finest baked goods in the city.', 'macarons-8628974_1920.jpg', 1),
(2, 'Custom Cakes Now Available for Special Occasions', 'A popular local bakery is taking cake customization to the next level by offering personalized designs for every special occasion. Customers can now work directly with bakers to create one-of-a-kind cakes for weddings, birthdays, and other events. With intricate designs, detailed decorations, and a focus on flavor, the new service has become an instant hit. The bakery’s talented team is eager to turn any cake vision into reality, making it a top choice for custom cakes in the area.', 'red-velvet-cake-4917734_1920.jpg', 1),
(3, 'New Vegan Options Delight Health-Conscious Shoppers', 'Sugar Blossom Bakery, the beloved local cake shop, has opened its doors to a fresh new location in the heart of downtown. Known for its mouth-watering cakes, cookies, and pastries, the bakery now offers an expanded menu that includes custom-made cakes for all occasions.', 'strawberry-8752918_1920.jpg', 1),
(4, 'Cake Decorating Contest Brings Community Together', 'A highly anticipated cake decorating contest is drawing creative bakers from all over the region. The annual event, which supports local charities, encourages both amateurs and professionals to showcase their cake-decorating skills.', 'default.jpg', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about_image`
--
ALTER TABLE `about_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `about_text`
--
ALTER TABLE `about_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about_image`
--
ALTER TABLE `about_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about_text`
--
ALTER TABLE `about_text`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
