-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-03 09:37:17
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
-- 資料表結構 `about_img`
--

CREATE TABLE `about_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `left_sh` int(1) UNSIGNED NOT NULL DEFAULT 0,
  `right_sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Sugar Blosso', 1),
(6, 'Candy Petal', 0),
(23, 'Whisk & Bloom', 0),
(24, '* Vanilla Dream *', 0),
(39, 'Frosted Fleur', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about_img`
--
ALTER TABLE `about_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `about_text`
--
ALTER TABLE `about_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about_img`
--
ALTER TABLE `about_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about_text`
--
ALTER TABLE `about_text`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
