-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2019 lúc 12:54 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhongDau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `TenKhongDau`, `description`, `img_url`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Thời trang nam', 'thoi-trang-nam', '<p>Thời trang nam phụ kiện giá rẻ</p>', '6yfGB_ZYkbw_dhkAb_9_2.jpg', 1, '2019-05-20 00:38:50', '2019-05-20 00:38:50'),
(2, 'Thời trang nữ', 'thoi-trang-nu', '<p>Show the application dashboard.</p>', 'udUfV_i4D0c_20190423_160011.jpg', 1, '2019-05-21 02:29:56', '2019-05-21 02:29:56'),
(3, 'Mỹ phẩm', 'my-pham', '<p>tất cả các loại mỹ phẩm đắt nhất thế giới</p>', 'fPICC_my-pham-thao-duoc-my-pham-thien-nhien---xu-huong-lam-dep-tu-nhien11482467298.jpg', 1, '2019-05-23 12:43:43', '2019-05-23 12:43:43'),
(4, 'Giầy dép', 'giay-dep', '<p>Giầy dép mang thương hiệu số 1</p>', 'oIUcT_giầy-thể-thao-nam.png', 1, '2019-05-24 02:04:09', '2019-05-24 02:04:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idCategory` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2018_05_17_035622_vinh', 1),
(11, '2019_02_21_013336_role', 1),
(12, '2019_03_21_041648_create_comment', 1),
(13, '2019_03_21_042602_slide', 1),
(14, '2019_05_03_093556_category', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhongDau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product`, `TenKhongDau`, `id_category`, `description`, `img_url`, `quality`, `price`, `sale_price`, `active`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'Áo sơ mi đen', 'ao-so-mi-den', '1', '<p>sản phẩm áo sơ mi đen đang được ưa chuộng</p>', 'Yd5YO_ZYkbw_dhkAb_9_2.jpg', 3, 120000, 0.25, 1, 0, '2019-05-20 00:39:34', '2019-05-20 00:39:34'),
(2, 'Đầm xanh lá cây', 'dam-xanh-la-cay', '2', '<p>Đầm xanh lá cây mẫu mã đẹp</p>', '70qqb_1.jpg', 5, 200000, 1.00, 1, 0, '2019-05-23 11:22:30', '2019-05-23 22:27:11'),
(3, 'Đầm bó sọc hồng', 'dam-bo-soc-hong', '2', '<p>Đầm maxi trắng đẹp, phù hợp khi đi biển</p>', 'VmkOK_1838-250-85-1.jpg', 6, 250000, 0.00, 1, 0, '2019-05-23 11:58:23', '2019-05-23 12:04:13'),
(4, 'Mỹ phẩm thiên nhiên Hoa Lan', 'my-pham-thien-nhien-hoa-lan', '3', '<p>Mỹ phẩm thiên nhiên Hoa Lan</p>', 'TPV8v_my-pham-thao-duoc-my-pham-thien-nhien---xu-huong-lam-dep-tu-nhien11482467298.jpg', 10, 270000, 0.30, 1, 0, '2019-05-23 12:44:48', '2019-05-23 12:44:48'),
(5, 'Giầy da nam thể thao GG08', 'giay-da-nam-the-thao-gg08', '1', '<p>Giầy da nam thể thao GG08</p>', '5FXAD_giầy-thể-thao-nam.png', 13, 370000, 0.10, 1, 0, '2019-05-24 02:07:58', '2019-05-24 02:08:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '2019-05-21 00:49:11', '2019-05-21 00:49:11'),
(2, 'admin', '2019-05-21 00:49:20', '2019-05-21 00:49:20'),
(3, 'Member', '2019-05-21 00:49:23', '2019-05-22 13:11:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`, `NoiDung`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Thời trang nam', 'k2Yr3_03_Homepage_02_03.png', '<p>đây là thời trang nam giá rẻ</p>', 'https://www.w3schools.com/php/php_form_url_email.asp', '2019-05-20 00:37:37', '2019-05-20 00:37:37'),
(2, 'Thời trang nữ', 'hRCAo_i4D0c_20190423_160011.jpg', '<p>đây là thời trang nữ ....</p>', 'https://google.com', '2019-05-20 03:14:40', '2019-05-20 03:14:40'),
(3, 'Ưng Hoàng Chinh', 'tl8Y0_giầy-thể-thao-nam.png', '<p>Ưng Hoàng Chinh</p>', 'https://bitnami.com/', '2019-05-24 02:11:18', '2019-05-24 02:12:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'admin', 'admin@gmail.com', '$2y$10$jSMKfFq11X/CjpE9lxBemOP1FYyAHQLHw8kGeWe63g6LISkQKIzmK', 'fFTLjSXJx3AUBKR3ucNe86PuyKFtiyavmZM4FMUQXxNIErgvmlJTz6P5ZXJu', '2019-05-21 00:49:44', '2019-05-21 00:49:44'),
(2, '3', 'Vinh', 'vinh1234@mymail.com', '$2y$10$t97BmOJjKoI5B.hkEzqi5e3jKhtJg0c5gQw6DVIdd960c8WTmeLjy', 'loBVixe261b5z6VrYOOflCKGw7ZQaBZaNVSEsIe6Gue7BNwZsuZnvyIt7Uwh', '2019-05-21 01:10:54', '2019-05-22 12:28:31'),
(3, '2', 'nhân viên', 'admin@abc.com', '$2y$10$wRgiAAnC5M384r4vA6vYau.XorABzshh9zPGKlZxRdn2VQRDkwBjm', 's0KWwuUdI4bCj1sHgzUTnwXmyYSoMCC1yFA8b3E1vFKMnMpAa676upokjzaN', '2019-05-22 12:24:09', '2019-05-22 13:12:05'),
(4, '3', 'Vinh', 'admin@ab.com', '$2y$10$2GybIdp/pu18/hxxLEFcUOdcaRz/A5K4MLy.yzT1XjvsxD9SFpCJW', 'NmapUfmqUmjcTPeL1N3CcCHJXHwjzwQeMMhHRimYL5JVQfj2wNP1WNhLrhaq', '2019-05-23 10:10:25', '2019-05-23 10:10:25'),
(5, '3', 'Vinh Nguyen', 'admin@abcd.com', '$2y$10$RfzfQt0Zgu1oOqxr8zY/p.kXc.gSTUAJBkgDOfqRDj0cmaWiihCN.', 'ShGjPGBk7RL5rX8SO0htBEXGTSTyvVoLh5BQBQhX7PMu7old3GXQbs2Mc2Vj', '2019-05-23 10:11:46', '2019-05-23 10:11:46'),
(6, '1', 'Shinji', 'vo_doi_96tn@yahoo.com', '$2y$10$OcwDhfjbjrWBWiO36NXtFOVnuKTopv9aoP1/D6rfNsXapSoIjbZom', NULL, '2019-05-24 02:15:02', '2019-05-24 02:15:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`),
  ADD KEY `comment_idcategory_foreign` (`idCategory`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_idcategory_foreign` FOREIGN KEY (`idCategory`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
