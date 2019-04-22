-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 21, 2019 lúc 08:16 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop64_lar`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `del_flg` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_product`, `product`, `description`, `img_url`, `quality`, `price`, `sale_price`, `active`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'Flower', 'BETTER is a simply beautiful and delightful PSD template speacially designed for gardening and home decoration online shop. You will immediately fall in love with those cheerful and easily...', 'the-hayden-full-1460745825-bloomthat_thehayden@2x.png', 5, 6, 0.20, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_17_035622_vinh', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci,
  `level` int(6) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `remember_token`, `level`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Phùng Quang Vinh', 'vo_doi_96tn@yahoo.com', 'Bjpzp9EVylPPjmRBN2q4dXFufgeWzKaKMRN6S18SqALQ8Fu4PDE8hhRf2ckb', 3, '$2y$10$2BA7gATt07RJbj8JXbvOQOJO3ti1jkvY3RveuwHIPWFnvQsLLcStm', '2018-06-06 19:52:27', '2018-06-06 19:52:27'),
(4, 'admin đẹp trai', 'admin@abc.com', 'IxuXrmxhYp9EZaXA8O8lm8Mtl7IO7PEUQXljlAQrqZt3hoO6CjkWHjfThmvF', 1, '$2y$10$DIs9qVHNcqw/YCqdJbz2xujTvK71MGQavqtkna4B6y30I0xiNRGNK', '2018-06-13 07:23:25', '2018-06-13 07:23:25'),
(5, 'Vinh xấu zai', 'abcxyz@vietnam.vn', 'hryU8DFDidac4l0WfQu9p3MbYI8H9BXzQ2w1PaWAzAwA9tSnXfU0Kn49zleL', 2, '$2y$10$DIs9qVHNcqw/YCqdJbz2xujTvK71MGQavqtkna4B6y30I0xiNRGNK', '2018-06-13 10:27:54', '2018-06-13 10:27:54'),
(6, 'ndkfdnk', 'abcd@anc.com', '1IujKDYqG57j4DvJuSCLnRmMpCHL3DMMRn7miUgI7CPqwI2uJt3EzvXHbyan', 3, '$2y$10$pAVMpjAJGEEwVMdV8aZBWOqjR.Xd.CcJNsJj.r8WNAUlCBLefung2', '2018-06-15 20:49:32', '2018-06-15 20:49:32'),
(7, 'Phùng Quang Vinh', 'barca@anc.com', 'x3Ha2ezdMb3njcdBFjU5CeT4hASmGDmq6fX569S5OqxYgjXOoA6s8sAqcmqM', 3, '$2y$10$o71qR7jJEhWNdG2xB9FyoeC9SIxqAe9T8VbZB9n2RIaNAZ05ReSx2', '2018-06-15 20:50:39', '2018-06-15 20:50:39'),
(8, 'Ưng Hoàng Chinh', 'abcxyghrhjgz@vietnam.vn', '4QUB51Bwj0JesSk4fzXOJJHjNRoZbTU0vAOyuSUQI94QuukUUvZRLESVmLgb', 3, '$2y$10$Yx6DW5y5Zz/qzDcBPyRQPedD1ePn3Lys3he/UL8n5oThXlKNkKJnS', '2018-08-30 20:10:59', '2018-08-30 20:10:59'),
(9, 'Attention', 'ali.50@gmail.com', '8ZW2u2Sr2SqWiSB2uU2F8sv5GmDlXBaHTS34oAp3KWODNXsp108RHj0Tgf7e', 3, '$2y$10$4xRi7Q4l3EJHfSlr1ktpquXUDVeEYF1lOSw8VK7OrLJ8Gcor0t14C', '2019-01-20 21:12:28', '2019-01-20 21:12:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
