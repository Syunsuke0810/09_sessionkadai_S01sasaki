-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 1 月 04 日 12:36
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `Laravel_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'コメント初入力テスト', '2024-01-02 07:34:13', '2024-01-02 07:34:13'),
(2, 9, 1, 'コメント削除テスト', '2024-01-02 07:45:06', '2024-01-02 07:45:06'),
(3, 9, 1, 'あたたたったった', '2024-01-02 07:45:13', '2024-01-02 07:45:13'),
(6, 8, 1, 'ちょれい', '2024-01-02 08:08:50', '2024-01-02 08:08:50'),
(7, 9, 1, 'コメント表示機能追加', '2024-01-02 08:09:08', '2024-01-02 08:09:08'),
(8, 11, 2, 'これは画像が出る', '2024-01-03 06:38:58', '2024-01-03 06:38:58'),
(9, 8, 1, 'tyorei', '2024-01-03 08:33:31', '2024-01-03 08:33:31'),
(10, 8, 1, '重複表示の修正', '2024-01-03 08:34:04', '2024-01-03 08:34:04'),
(11, 1, 1, 'コメント表示テスト', '2024-01-03 08:36:07', '2024-01-03 08:36:07');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
