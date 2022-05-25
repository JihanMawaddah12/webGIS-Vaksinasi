-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2022 pada 15.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksinasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftars`
--

CREATE TABLE `daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desas`
--

CREATE TABLE `desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geojson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `desas`
--

INSERT INTO `desas` (`id`, `desa`, `warna`, `geojson`, `created_at`, `updated_at`) VALUES
(6, 'Ateuk Deah Tanoh', '#e00b0b', 'geojson/cEQrloUNe9jBOa4tZV0LjNRtcDN1qlurIernzirB.json', '2022-04-16 05:30:01', '2022-04-16 05:30:01'),
(7, 'Ateuk Jawo', '#fb28ad', 'geojson/76FzdFVt3nGZehsDHkBJSATJtZTvKwqIelJJTuHk.json', '2022-04-16 05:30:20', '2022-04-16 05:30:20'),
(8, 'Ateuk Munjeng', '#8f05ff', 'geojson/poFuQrHTCXQvACdTI59EqxUITFM50iUeIAyIFaQp.json', '2022-04-16 05:31:12', '2022-04-16 05:31:12'),
(9, 'Ateuk Pahlawan', '#112be8', 'geojson/gyfePgJrqvl3ziu3oSrY0sq9CYlucrGkzOlDYXgp.json', '2022-04-16 05:31:42', '2022-04-16 05:31:42'),
(10, 'Kampung Baru', '#4400ff', 'geojson/EUkCrJij8J5KmS2FkWpYmnEZ63v6vV3xGGlFbBVl.json', '2022-04-16 05:32:09', '2022-04-16 05:32:09'),
(11, 'Neusu Aceh', '#0156df', 'geojson/UkGxHQD6iduGzwYvv1Wy90eiyjeLkqiYUdqTZpya.json', '2022-04-16 05:32:46', '2022-04-16 05:32:46'),
(12, 'Neusu Jaya', '#00eeff', 'geojson/VSbesBya8U8p7zWQ2rc3Aiuqye7uYpIh2XgnOQZ8.json', '2022-04-16 05:33:07', '2022-04-16 05:33:07'),
(13, 'Peuniti', '#00ffd5', 'geojson/giYYpHt6qa5CUjWMST9LahQxeDMISvLryicsYbNe.json', '2022-04-16 05:33:28', '2022-04-16 05:33:28'),
(14, 'seutui', '#00ff91', 'geojson/JQqg4fMbFjFO62p2kZbWAshc1WI1i77OAU1btdVn.json', '2022-04-16 05:33:46', '2022-04-16 05:33:46'),
(15, 'Sukaramai', '#00ff4c', 'geojson/ODQTzj2xeOPsCGHWLcnDgidvejG1n4GrbDcIkVhV.json', '2022-04-16 05:34:15', '2022-04-16 05:34:15'),
(16, 'Geuceu Iniem', '#000000', 'geojson/GxMg9whDJ9NN9XIGG7FUrrpAPznwaRtIPCLdDiUx.json', '2022-04-16 05:39:33', '2022-04-16 05:39:33'),
(17, 'Bitai', '#eeff00', 'geojson/iK6LJDe0wjWj0ZFgj3cLaRVcSbrFWBBPBLNZ4rMj.json', '2022-04-16 05:39:58', '2022-04-16 05:39:58'),
(18, 'Geuceu Kayee Jato', '#ffae00', 'geojson/4FMHOAZ1366YFATaYWCYRb3gEHLBMcu8f5IjMkkk.json', '2022-04-16 05:41:01', '2022-04-16 05:41:01'),
(19, 'Geuceu Komplek', '#f08000', 'geojson/arSxi9WNBAWCJ2iN5cYziXMCN37fubwqyVzuRxMK.json', '2022-04-16 05:41:24', '2022-04-16 05:41:24'),
(20, 'Emperom', '#fa4b00', 'geojson/vFY9HEpfPElEeRc0yKP3B72AmKzbmkdKOwc16sIR.json', '2022-04-16 05:42:37', '2022-04-16 05:42:37'),
(21, 'Geuceu Meunara', '#9f3a0f', 'geojson/CYnn8vH1W3MofnbUofqGaf3To8kAxkDDo91XJqwU.json', '2022-04-16 05:43:13', '2022-04-16 05:43:13'),
(22, 'Lam Ara', '#e08181', 'geojson/u1id0855YR8r4SOipnGk2eyleUXVZpfu8UI7tsMG.json', '2022-04-16 06:34:39', '2022-04-16 06:34:39'),
(23, 'Lamlagang', '#a83478', 'geojson/Pq5P7472F6Dx9qx3Y2qJdLjmbvUaf4Sk19ii1oBq.json', '2022-04-16 06:35:16', '2022-04-16 06:35:16'),
(24, 'Lampeout', '#461e66', 'geojson/gJoe7WvQ6TqgRe0GoLqbj9KuEQogyvL7yX9niyZV.json', '2022-04-16 06:36:52', '2022-04-16 06:36:52'),
(25, 'Lhong Cut', '#16606a', 'geojson/J9cwpgiHcpTQxVNkt5CgWL6bHBXvPW7MfjlMUXru.json', '2022-04-16 06:37:29', '2022-04-16 06:37:29'),
(26, 'Lhong Raya', '#45185d', 'geojson/eObqu6wtTPaAcorrspe09QkDv2JHgKvSgGfH9uOF.json', '2022-04-16 06:37:53', '2022-04-16 06:37:53'),
(27, 'Mibo', '#163274', 'geojson/ndGAzPPh2iGx4UCwRYBrVeLhne3jOSsxTJboHsb2.json', '2022-04-16 06:38:12', '2022-04-16 06:38:12'),
(28, 'Peunyerat', '#0e5462', 'geojson/GkDp9uNNBeaIKhstz5OASTtiMJgD5qOUcDWN3Te5.json', '2022-04-16 06:38:33', '2022-04-16 06:38:33'),
(29, 'Lamjamee', '#af7979', 'geojson/zpcNI1j9RSJXmBNRN35ZUSLiakqLbnDOCobLk2od.json', '2022-04-16 06:39:03', '2022-04-16 06:39:03'),
(30, 'Lampoh Daya', '#914660', 'geojson/aRjwqFRbNJJfAnGIzM8GNj2G1CZqK2Ac3JyxHOhI.json', '2022-04-16 06:39:28', '2022-04-16 06:39:28'),
(31, 'Lamteumen Barat', '#3c1b64', 'geojson/hoOlTlobKwMiacxs44gMN0brN1oZNTQea6dgRREm.json', '2022-04-16 06:39:52', '2022-04-16 06:39:52'),
(32, 'Lamteumen Timur', '#5b3434', 'geojson/qRk5vpN9udZe10upsIXiz1KuzlKSZ0p6w3QIBmqp.json', '2022-04-16 06:42:29', '2022-04-16 06:42:29'),
(33, 'Punge Blang Cut', '#5e2153', 'geojson/Qaoo3KtJCT1zzmeLhdnrZfuuME41HFOIWkZLH0vH.json', '2022-04-16 06:44:26', '2022-04-16 06:44:26'),
(34, 'Ulee Pata', '#a15978', 'geojson/pNJlIiLq5eo8cGsWjpyiTtFc08ICxJrHy3nkm8Ph.json', '2022-04-16 06:44:58', '2022-04-16 06:44:58'),
(35, 'Gampong Jawa', '#3e2c68', 'geojson/e3F9RNB4pMMZw8VcfXZwVqpzQtAGQVfkh2PGoJ8c.json', '2022-04-16 06:45:21', '2022-04-16 06:45:21'),
(36, 'Gampong Pande', '#2b4369', 'geojson/RDbws6T2Rcje4yaSKXR8AljugzjN13Yy9bbsQZYz.json', '2022-04-16 06:45:42', '2022-04-16 06:45:42'),
(37, 'Keudah', '#58487f', 'geojson/cFuc2aElrALl6q6nicg6x3VkMjETQJ7emq7ffgVE.json', '2022-04-16 06:46:00', '2022-04-16 06:46:00'),
(38, 'Lampaseh Kota', '#4c0d63', 'geojson/JKGIroXxtZ7H18MpNQVrw9KFw5laJcNQNdbLLIR4.json', '2022-04-16 06:46:22', '2022-04-16 06:46:22'),
(39, 'Merduati', '#2d3e71', 'geojson/NEx7iDkUAatmbhzpXmev7OmIvu1DOHbvKL96OPY7.json', '2022-04-16 06:46:39', '2022-04-16 06:46:39'),
(40, 'Peulanggahan', '#1a6b52', 'geojson/pazDFhNvvLjuaTrQM7ISZDHZakSqMt9AJEclt71W.json', '2022-04-16 06:46:55', '2022-04-16 06:46:55'),
(41, 'Bandar Baru', '#095f95', 'geojson/tVPJSKtjFKF55221cMVnQ0JJOhTIzqsYpelbO4U4.json', '2022-04-16 06:47:29', '2022-04-16 06:47:29'),
(42, 'Beurawe', '#1b8867', 'geojson/CDUrE3iKzl3oIg9rHE4ygHp2aB1pl7a41S6RH4aO.json', '2022-04-16 06:47:48', '2022-05-17 04:52:22'),
(43, 'Keuramat', '#0ca175', 'geojson/ztealMEp2NsAuP6vl6VNTu8Ab0Cx2l5p6YgmAnkU.json', '2022-04-16 06:48:07', '2022-04-16 06:48:07'),
(44, 'Kota Baru', '#10b785', 'geojson/0AbnB6dzvBN22C8dFaDgNYYAJn9dbSG5SjoPB6v5.json', '2022-04-16 06:48:24', '2022-04-16 06:48:24'),
(45, 'Kuta Alam', '#098143', 'geojson/lZSm6hdblAigNVLKhZDtqk6jRFjEPzge4CiDyn5f.json', '2022-04-16 06:48:43', '2022-04-16 06:48:43'),
(46, 'Laksana', '#19a93d', 'geojson/gz81dh5Symh99yQe3DVVVpwUxUkMcPSZhtfopb91.json', '2022-04-16 06:49:00', '2022-04-16 06:49:00'),
(47, 'Lambaro Skep', '#03a006', 'geojson/abmH7IZMzNMnTl2uA54nPrnBUC7GjOnxWnE8P30q.json', '2022-04-16 06:49:19', '2022-04-16 06:49:19'),
(48, 'Lamdingin', '#6ec516', 'geojson/swUtwYXv754VZcqbA9M9GGvdOa25eBvwRAk9exyF.json', '2022-04-16 06:49:40', '2022-04-16 06:49:40'),
(49, 'Lampulo', '#8d9707', 'geojson/imCiNURPFUX7aax51vsZ1wgI1T33zMIFmEFTTUtc.json', '2022-04-16 06:49:57', '2022-04-16 06:49:57'),
(50, 'Mulia', '#c2b200', 'geojson/LAYL8Z0IRQZXeLCMyBcKKv93xxU2rVtGCe0HEriP.json', '2022-04-16 06:50:24', '2022-04-16 06:50:24'),
(51, 'Peunayong', '#a87010', 'geojson/Sa8l7Fy6r7yT1yRIIkss5VBDcUOaJybcdoxVgFuP.json', '2022-04-16 06:50:43', '2022-04-16 06:50:43'),
(52, 'Batoh', '#ff9999', 'geojson/6NOse4uJpjBPXFfcJqdTDOI7j07afvnQqln804qA.json', '2022-04-16 06:54:25', '2022-04-16 06:54:25'),
(53, 'Blang Cut', '#f0b2c8', 'geojson/oGnTItgXASau7zcioTZVNjrIzDFD7tgJabzmiXyG.json', '2022-04-16 06:55:02', '2022-04-16 06:55:02'),
(54, 'Lamdom', '#f0add4', 'geojson/yoL3NLdXJrkjLWPcalVQC0meybzO6VQVUHwvc7hS.json', '2022-04-16 06:55:24', '2022-04-16 06:55:24'),
(55, 'Lampaloh', '#ffb3f9', 'geojson/gpmWHqul5cTCPZCHAPmCMrAwLQWHvFHXdw3QFNJB.json', '2022-04-16 06:55:57', '2022-04-16 06:55:57'),
(56, 'Lamseupeung', '#f28af4', 'geojson/UOjR5B3Uz9GStlbXIsX6JHxNDtyCv5YhzyHkhAMJ.json', '2022-04-16 06:56:21', '2022-04-16 06:56:21'),
(57, 'Leung Bata', '#c382f8', 'geojson/Yghu0vXFJVJXhkuPIAFh8xIe4oepyYnnpv1xepkw.json', '2022-04-16 06:56:45', '2022-04-16 06:56:45'),
(58, 'Panteriek', '#a9a3ff', 'geojson/DIwgxHC4KSTosrOWJEahWnWqlUNshdc6SsuVZJo7.json', '2022-04-16 06:57:07', '2022-04-16 06:57:07'),
(59, 'Suka Damai', '#90cef4', 'geojson/gaevTGoynsQRW6TyWpbk8haR0v91Av9NqQa9os0Z.json', '2022-04-16 06:57:34', '2022-04-16 06:57:34'),
(60, 'Alue Deah Teungoh', '#a1d3f2', 'geojson/p3WprJWDRRSIy8KBcUCmnaOE2cKmxeegSo1mDX9n.json', '2022-04-16 06:57:59', '2022-04-16 06:57:59'),
(61, 'Asoe Nanggroe', '#95eef4', 'geojson/9AwRZ9r9tYKh9ocVABGOPLlzlwtj4eaA9e7jKvHG.json', '2022-04-16 06:58:18', '2022-04-16 06:58:18'),
(62, 'Blang Oi', '#94ebe0', 'geojson/ycbOoX7MotKsbXlT4mvbUsF2bbgOF0kXBEwkczYS.json', '2022-04-16 06:58:37', '2022-04-16 06:58:37'),
(63, 'Cot Lam Kuweuh', '#7ee7bf', 'geojson/60zkBM9R5wwgWqlrnvdlrGMEFTNu18xlv7UE4CEv.json', '2022-04-16 06:59:00', '2022-04-16 06:59:00'),
(64, 'Deah Baro', '#94f5b1', 'geojson/BY1Vxlheurh2jeXYjfYTsph26YdZOkFz7aMH1PEw.json', '2022-04-16 06:59:21', '2022-04-16 06:59:21'),
(65, 'Deah Glumpang', '#9af788', 'geojson/6iEbtsRqsxasjOtl2JvshVEpxGXrvbZ1FMrVwVd3.json', '2022-04-16 06:59:47', '2022-05-17 05:04:14'),
(66, 'Gampong Baro', '#cbf278', 'geojson/BUTtuQ0jVSJUR8j2UDHWc6bKA4Neo98fhmWP3MOv.json', '2022-04-16 07:00:20', '2022-04-16 07:00:20'),
(67, 'Gampong Blang', '#e6eaa4', 'geojson/nGixoQm5V3WLS7f19xGE78sb470oQfOsgvl3oIiE.json', '2022-04-16 07:00:55', '2022-04-16 07:00:55'),
(68, 'Gampong Pie', '#ffed94', 'geojson/8GEtOWzDex09lRSBtN2I2bobQ6z4hM62JLxelVAM.json', '2022-04-16 07:01:14', '2022-04-16 07:01:14'),
(69, 'Lambung', '#ffef9e', 'geojson/KFHuh7Mzedq0b5KnKsOpaFM56B6WworN9bh9gjsJ.json', '2022-04-16 07:01:36', '2022-04-16 07:01:36'),
(70, 'Lamjabat', '#ffb980', 'geojson/1BCVfr4XZ83DCbAyaYzo7MqAYhtzAkvHB7WksvvS.json', '2022-04-16 07:01:59', '2022-04-16 07:01:59'),
(71, 'Lampaseh Aceh', '#ffcaad', 'geojson/FoLRssNYu51lZrnOkkR6ZLv1sdDgxwAKMPhFhSVO.json', '2022-04-16 07:02:26', '2022-04-16 07:02:26'),
(72, 'Punge Jurong', '#ff9f75', 'geojson/2MGR8SVCm5i0jQAs7Gpokr2gQZEDgdCqHOyCsiYL.json', '2022-04-16 07:02:51', '2022-04-16 07:03:21'),
(73, 'Punge Ujong', '#f9ad9f', 'geojson/7Ma9xrCgjf1cFpELGmusFyVdAz1wUn71r0eTmvr3.json', '2022-04-16 07:03:44', '2022-04-16 07:03:44'),
(74, 'Surien', '#ffdbdb', 'geojson/nXxxv32qLBZX9HYAw9LXCF06p239DwOniDQU880q.json', '2022-04-16 07:04:07', '2022-04-16 07:04:07'),
(75, 'Ulee Lheue', '#d1a8a8', 'geojson/RgMsItrx7iLgkUZxBRDnonNEZzHwoOwZGhf5p2xJ.json', '2022-04-16 07:17:47', '2022-04-16 07:17:47'),
(76, 'Alue Naga', '#990000', 'geojson/oJOaf8BFPQOlpLjFCtpZULDeL4BTdLl1cZYFWSw2.json', '2022-04-16 07:18:35', '2022-04-16 07:18:35'),
(77, 'Deah Raya', '#a3004f', 'geojson/RMaZETFZ3S1B6IgYZ2U6nRcFsjn3kDRbCpYalOCI.json', '2022-04-16 07:18:58', '2022-04-16 07:18:58'),
(78, 'Ie Masen Kayee Adang', '#ad0076', 'geojson/6mqbCobY1L3t3m9lzIA1OE73wTCVpoAmEmGpX1Mu.json', '2022-04-16 07:19:24', '2022-04-16 07:19:24'),
(79, 'Jeulingke', '#a800a3', 'geojson/VVtuEyD0hbJUDuFeHX2RoQUDXVUrRODbqa2uo64u.json', '2022-04-16 07:19:51', '2022-04-16 07:19:51'),
(80, 'Kopelma Darussalam', '#490085', 'geojson/x8zD58g0z5g846C7CNCVgyRNkmoOSEUJ3FMVNTO7.json', '2022-04-16 07:20:10', '2022-04-16 07:20:10'),
(81, 'Lamgugob', '#3d0099', 'geojson/IuR5lMQJVg9db5qiU0C2N0BAUsbKbL8OrH6LKatR.json', '2022-04-16 07:20:32', '2022-04-16 07:20:32'),
(82, 'Peurada', '#0300b3', 'geojson/H1OlHLJZItFRl1Jwy7zB2cs3zuZ4ot7eCERDMiZQ.json', '2022-04-16 07:20:59', '2022-04-16 07:20:59'),
(83, 'Pineung', '#004a99', 'geojson/Ia3H05GOZZR5dsc7yGmBfgbIGPCL1GlWvkJ3icSf.json', '2022-04-16 07:21:24', '2022-04-16 07:21:24'),
(84, 'Rukoh', '#006e8a', 'geojson/GhqbPQywYgLzuKHw1ZQHXeCsI6ad532xdkXecLkF.json', '2022-04-16 07:21:54', '2022-04-16 07:21:54'),
(85, 'Tibang', '#009194', 'geojson/4EEI4QnJS5hoS5JqLyAXEene7hDOq1fc6WKRwKSE.json', '2022-04-16 07:22:28', '2022-04-16 07:22:28'),
(86, 'Ceurih', '#008a3c', 'geojson/IQJzIH8lkCpeqMJ9uE82EobUfHtNyMZkZCHKjKYJ.json', '2022-04-16 07:22:50', '2022-04-16 07:22:50'),
(87, 'Doi', '#098a00', 'geojson/SimGNuNZ39QzF0puiH7jcSW7UI5sbX14sQzzCPBs.json', '2022-04-16 07:23:07', '2022-04-16 07:23:07'),
(88, 'Ie Masen Ulee Kareng', '#0a9900', 'geojson/FTwdVvwcLLQnnht4RSncgdtKyGEhB1VObuJfTnt2.json', '2022-04-16 07:23:29', '2022-04-16 07:23:29'),
(89, 'Ilie', '#84a800', 'geojson/wYBre9yrR8CitHxSsm3s3xm99X20jBqPf1BbQI8M.json', '2022-04-16 07:23:49', '2022-04-16 07:23:49'),
(90, 'Lambhuk', '#947b00', 'geojson/jROjwq4R6S6u7Ybgvao9n4vuawgGgsm7gIRQtzJV.json', '2022-04-16 07:24:07', '2022-04-16 07:24:07'),
(91, 'Lamglumpang', '#9e5c00', 'geojson/7Jp9VvMoU5Ilb33Pg64qSB5n2SJJDZZbYyk3cL2A.json', '2022-04-16 07:24:25', '2022-04-16 07:24:25'),
(92, 'Lamteh', '#a32100', 'geojson/78nVEu5QBu0JNDiaXeStpm10ANxJa0o18U8ABxPc.json', '2022-04-16 07:24:49', '2022-04-16 07:24:49'),
(93, 'Pango Deah', '#c93182', 'geojson/bkg3crh8bM0CekAGLRaIqAwJHE7B5e0aXwlhO2wF.json', '2022-04-16 07:25:15', '2022-04-16 07:25:15'),
(95, 'Pango Raya', '#c00acd', 'geojson/vojLXEAHNnfOU1GsNTFBaAFPxBCpPjGkoGTtg4IQ.json', '2022-04-23 00:12:34', '2022-04-23 00:12:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman_data`
--

CREATE TABLE `halaman_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tematik_id` bigint(20) UNSIGNED NOT NULL,
  `Kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakes` int(11) NOT NULL,
  `petugas_publik` int(11) NOT NULL,
  `lansia` int(11) NOT NULL,
  `masyarakat_umum` int(11) NOT NULL,
  `remaja` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `desa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `usia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_data`
--

INSERT INTO `halaman_data` (`id`, `tematik_id`, `Kelompok`, `nakes`, `petugas_publik`, `lansia`, `masyarakat_umum`, `remaja`, `created_at`, `updated_at`, `tanggal`, `desa_id`, `usia`) VALUES
(1883, 7, 'Target', 25, 170, 50, 578, 150, NULL, NULL, '2022-01-01', 7, 150),
(1884, 7, 'Target', 20, 130, 30, 376, 100, NULL, NULL, '2022-01-01', 6, 100),
(1885, 7, 'Target', 80, 350, 140, 2402, 400, NULL, NULL, '2022-01-01', 9, 400),
(1886, 7, 'Target', 35, 220, 60, 872, 200, NULL, NULL, '2022-01-01', 8, 200),
(1887, 7, 'Target', 52, 270, 110, 1645, 310, NULL, NULL, '2022-01-01', 11, 310),
(1888, 7, 'Target', 50, 250, 100, 1412, 290, NULL, NULL, '2022-01-01', 14, 290),
(1889, 7, 'Target', 90, 370, 130, 2150, 450, NULL, NULL, '2022-01-01', 15, 450),
(1890, 7, 'Target', 45, 245, 90, 980, 250, NULL, NULL, '2022-01-01', 12, 250),
(1891, 7, 'Target', 120, 420, 160, 2250, 500, NULL, NULL, '2022-01-01', 13, 500),
(1892, 7, 'Target', 62, 275, 130, 1618, 350, NULL, NULL, '2022-01-01', 10, 350),
(1893, 8, 'Target', 19, 150, 70, 876, 186, NULL, NULL, '2022-01-01', 22, 186),
(1894, 8, 'Target', 5, 15, 45, 196, 56, NULL, NULL, '2022-01-01', 24, 56),
(1895, 8, 'Target', 12, 120, 50, 382, 106, NULL, NULL, '2022-01-01', 27, 106),
(1896, 8, 'Target', 16, 135, 52, 461, 141, NULL, NULL, '2022-01-01', 25, 141),
(1897, 8, 'Target', 29, 155, 82, 1148, 246, NULL, NULL, '2022-01-01', 26, 246),
(1898, 8, 'Target', 26, 154, 80, 1009, 206, NULL, NULL, '2022-01-01', 28, 206),
(1899, 8, 'Target', 34, 321, 105, 2383, 426, NULL, NULL, '2022-01-01', 23, 426),
(1900, 8, 'Target', 31, 165, 93, 1264, 296, NULL, NULL, '2022-01-01', 19, 296),
(1901, 8, 'Target', 22, 140, 59, 854, 166, NULL, NULL, '2022-01-01', 16, 166),
(1902, 8, 'Target', 23, 145, 64, 949, 171, NULL, NULL, '2022-01-01', 18, 171),
(1903, 9, 'Target', 5, 60, 30, 734, 35, NULL, NULL, '2022-01-01', 34, 35),
(1904, 9, 'Target', 9, 350, 70, 636, 200, NULL, NULL, '2022-01-01', 29, 200),
(1905, 9, 'Target', 15, 300, 80, 827, 225, NULL, NULL, '2022-01-01', 30, 225),
(1906, 9, 'Target', 20, 200, 100, 1500, 245, NULL, NULL, '2022-01-01', 20, 245),
(1907, 9, 'Target', 25, 200, 150, 1776, 370, NULL, NULL, '2022-01-01', 21, 370),
(1908, 9, 'Target', 25, 250, 150, 1440, 350, NULL, NULL, '2022-01-01', 31, 350),
(1909, 9, 'Target', 20, 250, 75, 870, 180, NULL, NULL, '2022-01-01', 17, 180),
(1910, 9, 'Target', 27, 1490, 180, 2500, 530, NULL, NULL, '2022-01-01', 32, 530),
(1911, 9, 'Target', 35, 1400, 265, 4000, 865, NULL, NULL, '2022-01-01', 33, 865),
(1912, 10, 'Target', 253, 743, 454, 2373, 305, NULL, NULL, '2022-01-01', 51, 305),
(1913, 10, 'Target', 154, 1118, 623, 3622, 810, NULL, NULL, '2022-01-01', 46, 810),
(1914, 10, 'Target', 374, 974, 455, 2809, 590, NULL, NULL, '2022-01-01', 43, 590),
(1915, 10, 'Target', 354, 924, 454, 2774, 570, NULL, NULL, '2022-01-01', 45, 570),
(1916, 10, 'Target', 434, 1043, 623, 3265, 772, NULL, NULL, '2022-01-01', 42, 772),
(1917, 10, 'Target', 152, 643, 118, 1462, 250, NULL, NULL, '2022-01-01', 44, 250),
(1918, 10, 'Target', 454, 1243, 455, 3393, 838, NULL, NULL, '2022-01-01', 41, 838),
(1919, 10, 'Target', 154, 1088, 455, 2673, 600, NULL, NULL, '2022-01-01', 50, 600),
(1920, 10, 'Target', 384, 1113, 455, 2826, 628, NULL, NULL, '2022-01-01', 49, 628),
(1921, 10, 'Target', 202, 688, 454, 1064, 300, NULL, NULL, '2022-01-01', 48, 300),
(1922, 10, 'Target', 302, 823, 454, 2309, 380, NULL, NULL, '2022-01-01', 47, 380),
(1923, 11, 'Target', 10, 700, 70, 793, 167, NULL, NULL, '2022-01-01', 38, 167),
(1924, 11, 'Target', 14, 950, 95, 796, 167, NULL, NULL, '2022-01-01', 39, 167),
(1925, 11, 'Target', 6, 580, 58, 793, 166, NULL, NULL, '2022-01-01', 37, 166),
(1926, 11, 'Target', 8, 600, 60, 793, 167, NULL, NULL, '2022-01-01', 40, 167),
(1927, 11, 'Target', 9, 650, 65, 793, 167, NULL, NULL, '2022-01-01', 35, 167),
(1928, 11, 'Target', 4, 520, 52, 793, 166, NULL, NULL, '2022-01-01', 36, 166),
(1929, 12, 'Target', 4, 39, 25, 439, 55, NULL, NULL, '2022-01-01', 54, 55),
(1930, 12, 'Target', 12, 51, 75, 732, 275, NULL, NULL, '2022-01-01', 52, 275),
(1931, 12, 'Target', 11, 71, 65, 650, 189, NULL, NULL, '2022-01-01', 57, 189),
(1932, 12, 'Target', 10, 45, 37, 480, 65, NULL, NULL, '2022-01-01', 53, 65),
(1933, 12, 'Target', 2, 15, 23, 390, 45, NULL, NULL, '2022-01-01', 55, 45),
(1934, 12, 'Target', 9, 50, 50, 560, 90, NULL, NULL, '2022-01-01', 59, 90),
(1935, 12, 'Target', 3, 30, 20, 430, 111, NULL, NULL, '2022-01-01', 58, 111),
(1936, 12, 'Target', 5, 44, 45, 510, 70, NULL, NULL, '2022-01-01', 56, 70),
(1937, 13, 'Target', 119, 183, 209, 1190, 183, NULL, NULL, '2022-01-01', 74, 183),
(1938, 13, 'Target', 110, 180, 208, 1190, 180, NULL, NULL, '2022-01-01', 61, 180),
(1939, 13, 'Target', 45, 119, 100, 335, 119, NULL, NULL, '2022-01-01', 67, 119),
(1940, 13, 'Target', 108, 174, 208, 1190, 174, NULL, NULL, '2022-01-01', 70, 174),
(1941, 13, 'Target', 120, 220, 208, 1190, 220, NULL, NULL, '2022-01-01', 66, 220),
(1942, 13, 'Target', 127, 525, 263, 2046, 525, NULL, NULL, '2022-01-01', 72, 525),
(1943, 13, 'Target', 122, 220, 209, 1191, 220, NULL, NULL, '2022-01-01', 71, 220),
(1944, 13, 'Target', 120, 255, 209, 1190, 255, NULL, NULL, '2022-01-01', 73, 255),
(1945, 13, 'Target', 80, 314, 208, 1190, 314, NULL, NULL, '2022-01-01', 63, 314),
(1946, 13, 'Target', 109, 145, 155, 520, 145, NULL, NULL, '2022-01-01', 68, 145),
(1947, 13, 'Target', 124, 425, 263, 1526, 425, NULL, NULL, '2022-01-01', 75, 425),
(1948, 13, 'Target', 100, 169, 208, 1190, 169, NULL, NULL, '2022-01-01', 65, 169),
(1949, 13, 'Target', 112, 200, 208, 1190, 200, NULL, NULL, '2022-01-01', 69, 200),
(1950, 13, 'Target', 129, 469, 262, 1526, 469, NULL, NULL, '2022-01-01', 62, 469),
(1951, 13, 'Target', 115, 236, 208, 1190, 236, NULL, NULL, '2022-01-01', 60, 236),
(1952, 13, 'Target', 98, 166, 208, 1190, 166, NULL, NULL, '2022-01-01', 64, 166),
(1953, 14, 'Target', 27, 214, 122, 1587, 333, NULL, NULL, '2022-01-01', 78, 333),
(1954, 14, 'Target', 9, 138, 122, 1587, 333, NULL, NULL, '2022-01-01', 83, 333),
(1955, 14, 'Target', 14, 186, 122, 1587, 333, NULL, NULL, '2022-01-01', 81, 333),
(1956, 14, 'Target', 17, 201, 122, 1587, 333, NULL, NULL, '2022-01-01', 80, 333),
(1957, 14, 'Target', 30, 236, 123, 1587, 334, NULL, NULL, '2022-01-01', 84, 334),
(1958, 14, 'Target', 24, 238, 122, 1587, 333, NULL, NULL, '2022-01-01', 79, 333),
(1959, 14, 'Target', 40, 227, 123, 1587, 334, NULL, NULL, '2022-01-01', 85, 334),
(1960, 14, 'Target', 34, 270, 122, 1587, 334, NULL, NULL, '2022-01-01', 77, 334),
(1961, 14, 'Target', 23, 190, 122, 1587, 333, NULL, NULL, '2022-01-01', 76, 333),
(1962, 15, 'Target', 10, 65, 29, 665, 137, NULL, NULL, '2022-01-01', 95, 137),
(1963, 15, 'Target', 5, 27, 32, 197, 48, NULL, NULL, '2022-01-01', 93, 48),
(1964, 15, 'Target', 7, 87, 57, 998, 193, NULL, NULL, '2022-01-01', 89, 193),
(1965, 15, 'Target', 8, 81, 58, 876, 210, NULL, NULL, '2022-01-01', 92, 210),
(1966, 15, 'Target', 3, 54, 60, 1075, 250, NULL, NULL, '2022-01-01', 91, 250),
(1967, 15, 'Target', 9, 65, 63, 1167, 190, NULL, NULL, '2022-01-01', 86, 190),
(1968, 15, 'Target', 6, 50, 44, 988, 212, NULL, NULL, '2022-01-01', 88, 212),
(1969, 15, 'Target', 5, 68, 47, 967, 220, NULL, NULL, '2022-01-01', 87, 220),
(1970, 15, 'Target', 17, 93, 69, 2589, 540, NULL, NULL, '2022-01-01', 90, 540),
(1972, 7, 'Dosis 1', 60, 115, 20, 222, 42, NULL, NULL, '2022-01-04', 7, 37),
(1973, 7, 'Dosis 1', 61, 115, 20, 222, 42, NULL, NULL, '2022-01-05', 7, 37),
(1974, 7, 'Dosis 1', 64, 115, 20, 222, 42, NULL, '2022-05-18 23:47:38', '2022-01-06', 7, 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman_data2s`
--

CREATE TABLE `halaman_data2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tematik_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_data2s`
--

INSERT INTO `halaman_data2s` (`id`, `tematik_id`, `lokasi`, `alamat`, `deskripsi`, `long`, `lat`, `gambar`, `created_at`, `updated_at`, `kapasitas`) VALUES
(2, 10, 'RSUDZA', 'Jl. Teuku Moh. Daud Beureueh No.108, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415', '- Moderna', '95.33757686855104', '5.563910244341164', 'images/RRlB6E8bywr8SBsDc5IJquVncaEYdQYuUjyuqGdJ.png', '2022-01-30 01:53:17', '2022-05-08 21:15:26', 100),
(7, 13, 'Rumah Sakit Ibu dan Anak (RSIA) Aceh', 'Jalan Prof. A. Majid Ibrahim I No. 3, Meuraxa, Punge Jurong, Kec. Meuraxa, Kota Banda Aceh, Aceh 23116', 'Buka 24 Jam', '95.31198923874244', '5.550442980831453', '', '2022-02-13 00:32:17', '2022-02-13 00:32:17', 0),
(8, 10, 'Rumah Sakit Jiwa Aceh', 'Jl. Dr. Syarif Thayeb, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23126', 'senin-jumat 08.00-18.00', '95.34045449641519', '5.561207476140257', '', '2022-02-13 00:34:16', '2022-02-13 00:34:16', 0),
(9, 13, 'RSUD Meuraxa', 'Jl. Soekarno - Hatta No.1, Mibo, Kec. Banda Raya, Kota Banda Aceh, Aceh 23231', 'Buka 24 Jam', '95.31780826757873', '5.518268324506087', '', '2022-02-13 00:36:15', '2022-02-13 00:36:15', 0),
(10, 10, 'Rumah Sakit Kesdam Iskandar Muda', 'Jl. T. Angkasa Bendahara, Kuta Alam, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415', 'Buka 24 Jam', '95.32453163874237', '5.554979700400141', '', '2022-02-13 00:37:28', '2022-02-13 00:37:28', 0),
(11, 9, 'POLIKLINIK BIDDOKES POLDA ACEH', 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232', 'senin-jumat 08.00-16.00', '95.29501519641515', '5.5307128738308', '', '2022-02-13 00:39:00', '2022-02-13 00:39:00', 0),
(12, 14, 'Puskesmas Kopelma Darussalam', 'Jl. Inong Bale No.38, Rukoh, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415', 'Senin-kamis 09.00–14.00, Jumat,09.00–12.00, Sabtu,09.00–13.00', '95.36433709826991', '5.578395578482846', '', '2022-02-13 00:41:34', '2022-02-13 00:41:34', 0),
(13, 8, 'Puskesmas Banda Raya', 'Jl. Tengku Dilhong I, Lhong Raya, Kec. Banda Raya, Kota Banda Aceh, Aceh 23117', 'Senin - sabtu 08.15–12.00', '95.32060955408798', '5.530802142669318', '', '2022-02-13 00:53:41', '2022-02-13 00:53:41', 0),
(14, 9, 'PUSKESMAS JAYA BARU', 'G7MQ+XX5, Lampoh Daya, Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232', 'Senin-sabtu, 08.00–15.00', '95.29000672525156', '5.535119729864693', '', '2022-02-13 00:54:53', '2022-02-13 00:54:53', 0),
(15, 13, 'Puskesmas Meuraxa', 'H73W+86F, Blang Oi, Kec. Meuraxa, Kota Banda Aceh, Aceh', 'Senin-jumat, 08.00–15.00', '95.29552283874247', '5.553579757946271', '', '2022-02-13 00:55:46', '2022-02-13 00:55:46', 0),
(16, 15, 'Puskesmas Ulee Kareng', 'Jl. Puskesmas Pango Raya Kec. Ulee Kareng Kota Banda Aceh Aceh 23116', 'Buka 24 Jam', '95.34957229641515', '5.537332871435186', '', '2022-02-13 00:57:13', '2022-02-13 00:57:13', 0),
(17, 7, 'Puskesmas Baiturrahman', 'G8XG+H7F, Ateuk Pahlawan, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23127', 'Senin-sabtu, 08.00–12.00', '95.32566509641522', '5.549153545710776', '', '2022-02-13 00:58:11', '2022-02-13 00:58:11', 0),
(18, 12, 'UPTD PUSKESMAS BATOH', 'Jl. Unmuha, Batoh, Kec. Lueng Bata, Kota Banda Aceh, Aceh 23245', 'Senin-kamis 08.00–14.00, Jumat,08.00–11.30, Sabtu,08.00–13.00', '95.33307881176067', '5.536122256691597', '', '2022-02-13 00:59:33', '2022-02-13 00:59:33', 0),
(19, 14, 'Puskesmas Jeulingke', 'Jl. Bate Timoh, Jeulingke, Kec. Syiah Kuala, Kota Banda Aceh, Aceh', 'Senin-kamis 08.00–14.00, Jumat 08.00–11.30, Sabtu 08.00–12.00', '95.34378238292439', '5.576707591308667', '', '2022-02-13 01:01:04', '2022-02-13 01:01:04', 0),
(20, 10, 'PUSKESMAS LAMPULO', 'H8GG+833, Lampulo, Kec. Kuta Alam, Kota Banda Aceh, Aceh', 'Buka 24 Jam', '95.32521218292437', '5.57597245739572', '', '2022-02-13 01:02:14', '2022-02-13 01:02:14', 0),
(21, 11, 'UPTD. Puskesmas Lampaseh', 'H846+XCX, Lampaseh Kota, Kec. Kuta Raja, Kota Banda Aceh, Aceh', 'Senin-kamis 08.00–14.00, Jumat 08.00–11.30, Sabtu 08.00–12.00', '95.31121845590998', '5.55773229924059', '', '2022-02-13 01:03:25', '2022-02-13 01:03:25', 0),
(22, 10, 'Puskesmas Kuta Alam', 'Jl. Dharma, Mulia, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23123', 'Senin-sabtu 07.50–12.00', '95.3236101252516', '5.5633794619819925', '', '2022-02-13 01:04:23', '2022-02-13 01:04:23', 0),
(23, 13, 'Kantor Kesehatan Pelabuhan', 'H75P+M62, Ulee Lheue, Kec. Meuraxa, Kota Banda Aceh, Aceh', 'Senin-jumat, 08.00–15.00', '95.28539207736038', '5.559369329699564', '', '2022-02-13 01:05:43', '2022-02-13 01:05:43', 0),
(24, 9, 'RS Bhayangkara Banda Aceh', 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232', 'Buka 24 Jam', '95.29497272525154', '5.5307295738247415', '', '2022-02-13 01:06:47', '2022-02-13 01:06:47', 0),
(25, 14, 'RS Prince Nayef Unsyiah', 'Jl. Lingkar Kampus, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24411', 'Buka 24 Jam', '95.36977276572418', '5.564108961716578', '', '2022-02-13 01:07:42', '2022-02-13 01:07:42', 0),
(26, 8, 'RS Teungku Fakinah', 'Jl. Jenderal Sudirman No.27-29, Geuceu Iniem, Kec. Banda Raya, Kota Banda Aceh, Aceh 23239', 'Buka 24 Jam', '95.30400093874239', '5.529877116316177', '', '2022-02-13 01:08:26', '2022-02-13 01:08:26', 0),
(27, 7, 'Rumah Sakit Pertamedika', 'Jl. Sekolah No. 5 Gampoeng, Ateuk Pahlawan, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23241', 'Buka 24 Jam', '95.32658016757883', '5.549570459764817', '', '2022-02-13 01:09:30', '2022-02-13 01:09:30', 0),
(28, 7, 'RSU. Harapan Bunda', 'Jl. Teuku Umar No.181-211, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23243', 'Buka 24 Jam', '95.31005505408798', '5.540090598094974', '', '2022-02-13 01:10:09', '2022-02-13 01:10:09', 0),
(29, 10, 'RSIA Cempaka Az-Zahra', 'H88H+RPV, Mulia, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23123', 'Buka 24 Jam', '95.32918890805142', '5.567385251674277', '', '2022-02-13 01:11:06', '2022-02-13 01:11:06', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_22_064957_edit_halamandata_table', 3),
(7, '2021_11_22_091952_edit_halamandata2_table', 4),
(8, '2021_11_23_043218_create_tematiks_table', 5),
(9, '2021_11_28_084711_add_geojson_to_tematik_table', 6),
(12, '2021_11_07_065505_create_halaman_data_table', 7),
(15, '2022_01_30_081734_create_halaman_data2s_table', 8),
(16, '2022_02_13_084252_add_tanggal_to_halamandata', 9),
(17, '2022_04_03_044853_create_pendaftarans_table', 10),
(18, '2022_04_03_045651_add_level_to_user', 10),
(19, '2022_04_03_050709_create_rumah_sakits_table', 10),
(20, '2022_04_07_031225_create_desas_table', 11),
(21, '2022_04_14_052135_add_kapasitas_to_halaman_data2_table', 12),
(22, '2022_04_14_053400_add_data_to_pendaftaran', 13),
(25, '2022_04_14_064439_delete_column_to_halaman_data', 14),
(26, '2022_04_14_065914_change_column_to_halaman_data', 14),
(27, '2022_04_14_074425_add_verifikasi_to_pendaftaran', 15),
(29, '2022_05_25_030901_create_daftars_table', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `halaman_data2_id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_id` bigint(20) UNSIGNED NOT NULL,
  `tematik_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `halaman_data2_id`, `nik`, `name`, `jk`, `no_hp`, `alamat`, `created_at`, `updated_at`, `kelompok`, `dosis`, `desa_id`, `tematik_id`, `status`) VALUES
(8, 2, '112233445778', 'Admin Vaksinasi Banda Aceh', 'Laki-laki', '098765432345', 'keutapang', '2022-04-19 06:14:21', '2022-04-19 06:15:15', 'nakes', 'Dosis 2', 20, 9, 1),
(9, 2, '112233445566778', 'Jihan Mawaddah', 'Perempuan', '098765432345', 'Stadion Harapan Bangsa', '2022-04-25 06:59:59', '2022-05-10 01:05:09', 'masyarakat umum', 'Dosis 2', 20, 9, 1),
(10, 2, '112233445778', 'Admin', 'Laki-laki', '098765432345', 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232', '2022-04-25 07:01:13', '2022-05-10 01:05:26', 'nakes', 'Dosis 1', 17, 9, 1),
(11, 8, '123333333333', 'nahda', 'Perempuan', '0987654332445', 'keutapang', '2022-05-10 01:07:00', '2022-05-10 01:07:00', 'nakes', 'Dosis 2', 26, 15, 0),
(12, 2, '123333333333', 'nahda', 'Perempuan', '098765432345', 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232', '2022-05-10 01:07:39', '2022-05-10 01:07:39', 'usia 6-11 tahun', 'Dosis 3', 79, 14, 0),
(13, 12, 'w', 'w', 'Laki-laki', 'w', 'w', '2022-05-24 18:58:19', '2022-05-24 18:58:19', 'nakes', 'Dosis 1', 20, 7, 0),
(14, 12, '1234', 'Javascript', 'Laki-laki', 'wds', 'w', '2022-05-24 19:01:16', '2022-05-24 19:01:16', 'nakes', 'Dosis 1', 25, 7, 0),
(15, 10, 'qwe', 'qwe', 'Laki-laki', 'qwe', 'qwe', '2022-05-24 19:03:40', '2022-05-24 19:03:40', 'nakes', 'Dosis 1', 24, 8, 0),
(16, 25, '2', '2', 'Laki-laki', 'q', 'w', '2022-05-24 20:10:23', '2022-05-24 20:10:23', 'nakes', 'Dosis 1', 24, 7, 0),
(17, 25, '2qwe', '2qwe', 'Laki-laki', 'qqwe', 'wqwe', '2022-05-24 20:10:50', '2022-05-24 20:10:50', 'nakes', 'Dosis 1', 24, 7, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakits`
--

CREATE TABLE `rumah_sakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `halaman_data2_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rumah_sakits`
--

INSERT INTO `rumah_sakits` (`id`, `halaman_data2_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 9, 4, NULL, '2022-04-04 20:16:47', '2022-04-04 20:16:47'),
(4, 15, 5, NULL, '2022-04-06 20:54:12', '2022-04-06 20:54:12'),
(5, 2, 6, NULL, '2022-04-14 00:38:30', '2022-04-14 00:38:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tematiks`
--

CREATE TABLE `tematiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `geojson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tematiks`
--

INSERT INTO `tematiks` (`id`, `kecamatan`, `warna`, `created_at`, `updated_at`, `geojson`) VALUES
(7, 'Baiturrahman', '#f609ee', '2021-12-01 21:32:44', '2022-05-17 02:03:42', 'geojson/W65qkcm7JEeVjhxzo5t3Mz9YA357dW8Qx2ujJsJM.json'),
(8, 'Banda Raya', '#320ee1', '2021-12-01 21:34:39', '2022-05-17 02:04:10', 'geojson/D8qW9J3JzyZGWJd7tK84pQbQZR587OhXmDdX43V8.json'),
(9, 'Jaya Baru', '#24b0cc', '2021-12-01 21:35:36', '2022-05-17 02:04:37', 'geojson/BK3Iw19ZZIcdkw7aBw35Z8HELZF4s5fOcrYjFgnD.json'),
(10, 'Kuta Alam', '#0bef85', '2021-12-01 21:36:20', '2022-05-17 02:05:05', 'geojson/Or5ktwc3XDexIMjPFKpryYMFQAP1Eoco6ds3A5Y6.json'),
(11, 'Kuta Raja', '#01f43e', '2021-12-01 21:37:00', '2022-05-17 02:05:31', 'geojson/SdWpYTTQ8WfgvC7HaQukGfaLqOF1XmCLIgld9VlG.json'),
(12, 'Lueng Bata', '#96f901', '2021-12-01 21:37:44', '2022-05-17 02:06:21', 'geojson/WLUiI13L5Y6FwLnVOMrLvQhzewRWHDuGEcoGouA6.json'),
(13, 'Meuraxa', '#97c002', '2021-12-01 21:38:28', '2022-05-17 02:06:46', 'geojson/K6r0FjIJyJYejKC2ximIlqAgKh1Zz845xmsHhdvH.json'),
(14, 'Syiah Kuala', '#07d5e4', '2021-12-01 21:39:00', '2022-05-17 02:07:09', 'geojson/lAcx7PqEA8lNcU7Fnor9cM92r7s6CLm1X3bCs5H5.json'),
(15, 'Ulee Kareng', '#ff5d05', '2021-12-01 21:39:39', '2022-05-17 02:07:41', 'geojson/5MwR74cCZrNMYczjYs2EKbiSpxsvDSYvGIKqCYbi.json');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2a$12$p.YLo2Tb7v9ZD85V1I0CNO9V7UmUkBQvs06Zj3NtmukzBWLvvtmC6', NULL, '2021-11-06 23:03:20', '2021-11-06 23:03:20', 'admin'),
(4, 'RSUD Meuraxa', 'meuraxa@gmail.com', NULL, '$2y$10$hIvT5uHaREdbZXjH0eToRuGavCRCn7.lwp/gX5XfWuI46TThUpyr.', NULL, '2022-04-04 20:16:47', '2022-04-04 20:16:47', 'rs'),
(5, 'Puskesmas Meuraxa', 'puskesmasmeuraxa@gmail.com', NULL, '$2y$10$zXSZHFM8yOHWOexD56pOYeO5vU31JOQOR/VeEg4jCixYvNUi7Ec2u', NULL, '2022-04-06 20:54:12', '2022-04-06 20:54:12', 'rs'),
(6, 'RSUDZA', 'rsudza@gmail.com', NULL, '$2y$10$oxoO5jqIu3DWenhpn8EBKOTwD456aTH8VCGr..yG1xynBVZB6rP4.', NULL, '2022-04-14 00:38:30', '2022-04-14 00:38:30', 'rs');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `halaman_data`
--
ALTER TABLE `halaman_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `halaman_data_tematik_id_foreign` (`tematik_id`),
  ADD KEY `halaman_data_desa_id_foreign` (`desa_id`);

--
-- Indeks untuk tabel `halaman_data2s`
--
ALTER TABLE `halaman_data2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `halaman_data2s_tematik_id_foreign` (`tematik_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_halaman_data2_id_foreign` (`halaman_data2_id`),
  ADD KEY `pendaftarans_desa_id_foreign` (`desa_id`),
  ADD KEY `pendaftarans_tematik_id_foreign` (`tematik_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rumah_sakits_halaman_data2_id_foreign` (`halaman_data2_id`),
  ADD KEY `rumah_sakits_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tematiks`
--
ALTER TABLE `tematiks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `desas`
--
ALTER TABLE `desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `halaman_data`
--
ALTER TABLE `halaman_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1975;

--
-- AUTO_INCREMENT untuk tabel `halaman_data2s`
--
ALTER TABLE `halaman_data2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tematiks`
--
ALTER TABLE `tematiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `halaman_data`
--
ALTER TABLE `halaman_data`
  ADD CONSTRAINT `halaman_data_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desas` (`id`),
  ADD CONSTRAINT `halaman_data_tematik_id_foreign` FOREIGN KEY (`tematik_id`) REFERENCES `tematiks` (`id`);

--
-- Ketidakleluasaan untuk tabel `halaman_data2s`
--
ALTER TABLE `halaman_data2s`
  ADD CONSTRAINT `halaman_data2s_tematik_id_foreign` FOREIGN KEY (`tematik_id`) REFERENCES `tematiks` (`id`);

--
-- Ketidakleluasaan untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desas` (`id`),
  ADD CONSTRAINT `pendaftarans_halaman_data2_id_foreign` FOREIGN KEY (`halaman_data2_id`) REFERENCES `halaman_data2s` (`id`),
  ADD CONSTRAINT `pendaftarans_tematik_id_foreign` FOREIGN KEY (`tematik_id`) REFERENCES `tematiks` (`id`);

--
-- Ketidakleluasaan untuk tabel `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  ADD CONSTRAINT `rumah_sakits_halaman_data2_id_foreign` FOREIGN KEY (`halaman_data2_id`) REFERENCES `halaman_data2s` (`id`),
  ADD CONSTRAINT `rumah_sakits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
