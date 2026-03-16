-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2026-01-22 09:26:57
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
-- 資料庫： `db03`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movies`
--

CREATE TABLE `movies` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `level` int(1) UNSIGNED NOT NULL,
  `length` int(3) UNSIGNED NOT NULL,
  `ondate` date NOT NULL,
  `publisher` text NOT NULL,
  `director` text NOT NULL,
  `trailer` text NOT NULL,
  `poster` text NOT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movies`
--

INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publisher`, `director`, `trailer`, `poster`, `rank`, `sh`, `intro`) VALUES
(2, '院線片02', 3, 135, '2026-01-21', '院線片02的發行商', '02導演', '03B02v.mp4', '03B02.png', 3, 1, '院線片01的劇情簡介院線片01的劇情簡介院線片01的劇情簡介院線片01的劇情簡介院線片01的劇情簡介院線片01的劇情簡介'),
(3, '阿凡達3', 4, 110, '2026-01-22', '院線片03發行商', '院線片03導演', '03B03v.mp4', '03B03.png', 4, 1, '院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹'),
(4, '院線片4', 2, 127, '2026-01-22', '院線片4發行商', '院線片4導演', '03B04v.mp4', '03B04.png', 2, 1, '院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介院線片4的劇情簡介'),
(5, '院線片5', 3, 126, '2026-01-21', '院線片5發行商', '院線片5導演', '03B05v.mp4', '03B05.png', 5, 1, '院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介院線片5的劇情簡介'),
(6, '院線片6', 4, 128, '2026-01-20', '院線片6發行商', '院線片6導演', '03B06v.mp4', '03B06.png', 6, 1, '院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介院線片6的劇情簡介'),
(7, '院線片7', 2, 119, '2026-01-19', '院線片7發行商', '院線片7導演', '03B07v.mp4', '03B07.png', 7, 0, '院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介院線片7的劇情簡介'),
(8, '院線片8', 1, 128, '2026-03-10', '院線片8發行商', '院線片8導演', '03B08v.mp4', '03B08.png', 8, 1, '院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介院線片8的劇情簡介'),
(9, '院線片9', 4, 123, '2026-03-11', '院線片9發行商', '院線片9導演', '03B09v.mp4', '03B09.png', 9, 1, '院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介院線片9的劇情簡介'),
(10, '院線片10', 4, 99, '2026-03-14', '院線片10發行商', '院線片10導演', '03B10v.mp4', '03B10.png', 10, 1, '院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介院線片10的劇情簡介');

-- --------------------------------------------------------

--
-- 資料表結構 `posters`
--

CREATE TABLE `posters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `ani` int(10) UNSIGNED NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `posters`
--

INSERT INTO `posters` (`id`, `name`, `img`, `rank`, `ani`, `sh`) VALUES
(1, '動物方城式2', '03A01.jpg', 3, 2, 1),
(2, '阿凡達3', '03A02.jpg', 1, 3, 0),
(3, '穿著Prada 的惡魔', '03A03.jpg', 2, 1, 1),
(4, '預告片4', '03A04.jpg', 4, 1, 0),
(5, '預告片5', '03A05.jpg', 5, 1, 1),
(6, '預告片6', '03A06.jpg', 6, 1, 1),
(7, '預告片7', '03A07.jpg', 7, 1, 1),
(9, '預告片9', '03A09.jpg', 9, 1, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
