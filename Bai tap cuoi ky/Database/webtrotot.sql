-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2018 lúc 07:13 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtrotot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery_post_rooms`
--

CREATE TABLE `gallery_post_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_room_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gallery_post_rooms`
--

INSERT INTO `gallery_post_rooms` (`id`, `post_room_id`, `path`, `created_at`, `updated_at`) VALUES
(2, 23, 'library/image/2018-05-16-05-43-43-1008252933-1526573730.jpeg', '2018-05-17 16:16:20', '2018-05-17 16:16:20'),
(3, 24, 'library/image/images-1526580709.jpeg', '2018-05-17 18:12:18', '2018-05-17 18:12:18'),
(4, 25, 'library/image/images-1-1526589468.jpeg', '2018-05-17 20:38:33', '2018-05-17 20:38:33'),
(5, 26, 'library/image/images-1526590344.jpeg', '2018-05-17 20:53:02', '2018-05-17 20:53:02'),
(6, 27, 'library/image/images-1526604546.jpeg', '2018-05-18 00:50:17', '2018-05-18 00:50:17'),
(7, 28, 'library/image/images-1-1526605529.jpeg', '2018-05-18 01:06:31', '2018-05-18 01:06:31'),
(8, 29, 'library/image/images-1-1526606203.jpeg', '2018-05-18 01:17:21', '2018-05-18 01:17:21'),
(9, 30, 'library/image/images-1-1526609207.jpeg', '2018-05-18 02:07:46', '2018-05-18 02:07:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_rooms`
--

CREATE TABLE `post_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acreage` int(10) UNSIGNED NOT NULL,
  `electric_bill` int(10) UNSIGNED NOT NULL,
  `water_bill` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rate` int(11) NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_rooms`
--

INSERT INTO `post_rooms` (`id`, `user_id`, `address`, `phone`, `acreage`, `electric_bill`, `water_bill`, `description`, `created_at`, `updated_at`, `rate`, `longitude`, `latitude`, `type`, `roomname`) VALUES
(23, 1, '121 xã hoa Nam dinh', '092433124', 12, 2000, 10000, 'Viet cau dai vo', '2018-05-17 16:16:20', '2018-05-17 16:16:20', 1000000, '108.16081166666666', '16.06948', 'Căn hộ gia đình', 'Novetel'),
(24, 1, '121 nam an', '09312431', 12, 1000, 10000, 'mv', '2018-05-17 18:12:18', '2018-05-17 18:12:18', 70000, '108.16081166666666', '16.06948', 'Ký túc xá', '64 Ngô Sĩ Liên'),
(25, 5, '214 Nguyen Van Linh', '0913273241', 20, 2000, 10000, 'Viet cau dai hon nua Viet cau dai hon nua Viet cau dai hon nua Viet cau dai hon nua', '2018-05-17 20:38:32', '2018-05-17 20:38:32', 700000, '108.16081166666666', '16.06948', 'Căn hộ gia đình', '27 Tôn Đức Thắng'),
(26, 2, '54 nguyen luong bang', '0913174196', 20, 2000, 10000, 'an toan', '2018-05-17 20:53:02', '2018-05-17 20:53:02', 1000000, '108.16081166666666', '16.06948', 'Căn hộ gia đình', 'Chú Nghĩa'),
(27, 2, 'Quan Hai Chau', '091273412', 15, 2000, 10000, 'Trung tam thanh pho', '2018-05-18 00:50:17', '2018-05-18 00:50:17', 2000, '-18.5333', '65.96669666666666', 'Ký túc xá DMC', 'Anh Thính'),
(28, 2, '127 nguyen luong bang', '091231433', 12, 2000, 8000, 'mv', '2018-05-18 01:06:31', '2018-05-18 01:06:31', 1000000, '-18.5333', '65.96669666666666', 'Dãy trọ cho thuê', 'Bách Khoa'),
(29, 3, '25 ngo si lien', '0913172142', 20, 2000, 7000, 'hai nam', '2018-05-18 01:17:21', '2018-05-18 01:17:21', 900000, '-18.5333', '65.96669666666666', 'Dãy trọ cho thuê', 'Hòa Hải'),
(30, 3, '64 Nguyen Luong Bang', '0913174196', 15, 2000, 10000, 'Phong tro gia re,', '2018-05-18 02:07:45', '2018-05-18 02:07:45', 700000, '-18.5333', '65.96669666666666', 'Dãy trọ cho thuê', 'Phía Tây'),
(31, 5, '64 nguyen luong bang', '0913174192', 12, 2000, 10000, 'kg co gi', '2018-05-08 17:00:00', NULL, 700000, '12', '12', 'Căn hộ cho thuê', 'Bách khoa'),
(37, 1, 'Số 856/37/8 đường Tôn Đức Thắng', '962736241', 0, 0, 0, 'dea', '2018-05-22 23:50:55', NULL, 1234567, '105.852941', '21.017291', 'cho thuê', 'Trần Văn Minh Vương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `address`, `phone`, `image`, `email`, `password`, `created_at`) VALUES
(1, 'Trần Văn Minh Vương', 'admin', 'danang', '093550898', 'library/image/vuong.jpg', 'admin@gmail.com', '123', '2018-04-15 01:17:20'),
(2, 'Lê Thị Dung', 'admin2', 'danang', '093550898', 'library/image/dung.jpg', 'admin2@gmail.com', '123', '2018-04-15 01:35:53'),
(3, 'Minh Vương MF4', 'minhvuong.mf4', 'da nang', '0935987654', 'library/image/vuong.jpg', 'mv@gmail.com', '123', '2018-04-26 17:48:15'),
(4, 'Nguyễn Hữu Nghĩa', 'nghianguyen.mf4', 'da nang', '0935666777', 'library/image/nghia.jpg', 'ngng@gmail.com', '123', '2018-04-26 17:48:59'),
(5, 'Nguyễn Tấn Nam', 'guen.tnamu.dnc', 'da nang', '0935666888', 'library/image/nam.jpg', 'namnguyen@gmail.com', 'abc', '2018-04-26 17:49:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gallery_post_rooms`
--
ALTER TABLE `gallery_post_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_post_rooms_post_room_id_foreign` (`post_room_id`);

--
-- Chỉ mục cho bảng `post_rooms`
--
ALTER TABLE `post_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_rooms_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gallery_post_rooms`
--
ALTER TABLE `gallery_post_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `post_rooms`
--
ALTER TABLE `post_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gallery_post_rooms`
--
ALTER TABLE `gallery_post_rooms`
  ADD CONSTRAINT `gallery_post_rooms_post_room_id_foreign` FOREIGN KEY (`post_room_id`) REFERENCES `post_rooms` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `post_rooms`
--
ALTER TABLE `post_rooms`
  ADD CONSTRAINT `post_rooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
