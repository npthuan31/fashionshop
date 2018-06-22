-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 05:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `name`, `image`) VALUES
(32, 'ao', 'Áo', 'gcWwG6G9poZ1vRqYim57jCfUbosWm23djRvZLbhr.jpeg'),
(33, 'quan', 'Quần', 'Cx6oBrgHyiB9sPSnyrrf1dsbWuS3jJPjmGlPpkpM.jpeg'),
(34, 'chan-vay', 'Chân Váy', 'BwWkKZbPjS6LQQ9j0ZsIqk4gSwnEx5fnrYYtj6lP.jpeg'),
(35, 'dam', 'Đầm', 'Js94D9CpW8qLNwFT32iHYGkpq922MLB1SxafCC8p.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `product_id`) VALUES
(5, 'vU1js0Q9GUNhICBgG8cIQnhJPWMELQ8mRpiM0WLQ.jpeg', 2),
(6, 'D3alBzeZBZbPn6p7fmpbR5SA2RRSFFcGYBgRmNSd.jpeg', 2),
(7, 'rf3UnN4rbY7R3eWw9oxViIQT4mYk5N2SuHGeUdlL.jpeg', 3),
(8, 'ZzNLSGJdS630FSEn9rAabztWnAPMtZCGfJvhhVCv.jpeg', 3),
(9, 'r4AeyLSq2GeFxVwgYbwwvOtx7Tcs3BIH73Y0WeqH.jpeg', 4),
(10, '7R1gygJYxfakmhkalGW1hPhPM88Qg5hCBMvMaRg5.jpeg', 4),
(11, 'syja0gNeWEZNayrUH0r6Wk67iuxn1Jd2oVAzm7yt.jpeg', 4),
(12, '2pxdiqneXIVraAicIxBKD5K8AYsDWlNmGg9T44wA.jpeg', 4),
(13, 'zhrQli4vzj4bX0S9Nv3luvGEe5RWmn3nPuSfYjKr.jpeg', 5),
(14, 'egxopbqTvgSV35UlRXFrEvGVHdKSqWXpw71m8rSF.jpeg', 5),
(15, '9wT5s2AH4ALxmPeGMM3aSIAxIYolPdbl3Aq8hRJM.jpeg', 5),
(16, 'jwYbeCf6DbDDiSZejcfeeqNXAMW4nWBVD9Q40duu.jpeg', 5),
(17, 'i0DmPrWeWEvYktHX8HWQNJH9LA7JsvzRDp4RYjp2.jpeg', 6),
(18, 'imgqhptpIm62QEKl4IhpRO1AGDAtKQK1Ikw4UlzL.jpeg', 6),
(19, 'IftWlzxw5siQ8kPnbhO6omEC29tme9HYuO6xdAV1.jpeg', 6),
(20, 'BycgQ1EJ2R1rXwgPGIdDTWtO8QIRsYrQhbXcAZSk.jpeg', 7),
(21, 'V5SCElsSYJAHHL9ADEn8VOSxBQWFDL3EMiTJ1TLD.jpeg', 7),
(22, 'dpBLSnCbsQhBTKiWgGi5xg9MkKDp4FJeA6ki99pM.jpeg', 7),
(23, 'n1S4oSfAlcUxfoIeaJNCk2khs9cD9L1Z3FHx72fA.jpeg', 7),
(24, 'FZ2Mi7YYnJszB8IzmdsrgDoxWi329qpv02NcE7a4.jpeg', 8),
(25, 'vML9fUoWm0rKYxz64EwaP2ZMUPAF5MUvkPlrbgXZ.jpeg', 8),
(26, 'hbtQq7ab6C9KZvWi8VIQV4XbemFk2PK5h0avFzNA.jpeg', 9),
(27, 'zobt2Z3BExrMx72t9ZDC8gbi31EPbldfVh0Ngmbm.jpeg', 9),
(28, 'Im4xMVkE65lipdu2W8jqRLKE8022IuEvROQ0pURW.jpeg', 10),
(29, 'zw0TxQ60M0xZQjRodr1rgUik77A2QJjvmIYPmQwj.jpeg', 10),
(30, 'Cio1IaPyEwKYXQd5xTGp4GUnFDK4KSnEQfTVqRUb.jpeg', 11),
(31, 'uCBSHioepRSr4x8TGDYLTowDVmiR1et3SMbWz7Kq.jpeg', 11),
(32, 'kstjtvzajVZCnKAki7KwzjC8VjylcPl4K0j2z4IS.jpeg', 12),
(33, 'PpGnXqsdjO3HwP6ehvGeXcuXzjQzg8gkE0hwebOh.jpeg', 12),
(34, 'ivaFyclGkI4U9HHfVV6tCJCtQ9X13pzgF0Xs9yFj.jpeg', 13),
(35, 'CDCHEk7CVkTJ09q7H420xATWuckML0i5g9bWN0JW.jpeg', 13),
(36, 'UcEKiPJnTUpKRWhsU8uXjteLi5DEIAoVrpJ74pK8.jpeg', 14),
(37, 'VGlkkkbfuQPoWks4PJuYN8FExu41RLBsgRQuOqbz.jpeg', 14),
(38, 'rP3sn7SI8wMEdTfxr7rBotFtXOFKuWT4IHCw9Lj8.jpeg', 15),
(39, 'YCa7QrWqAsewWrC5kHCHQtBOLV0oUsG885QBIDFn.jpeg', 15),
(40, 'fg8EIOSmnXXYuon9y4Y9yZG8Qs7ryu0JR46bx8DK.jpeg', 16),
(41, 'I3wCvPVTPNGyDpMfi8SabINBknAq1tVzikkZx3gG.jpeg', 16),
(42, 'DkL8iKVwF07YEgAe5f2fXEV5Vhj0rWWDjHcTLRIX.jpeg', 17),
(43, 'h29XvyOwL5dsZeJPcum5zCx0qmzv8VhDpjNfjRuG.jpeg', 17),
(44, 'ar7HDdCdYN9AlDJpdtCLZb3W6lwruMitoO4c1zia.jpeg', 18),
(45, 'BX3o3DpsrCYEe1UZhJ2SXftlv3qCtgFrFYnZeWQT.jpeg', 18),
(46, '0zf0vAO8z5wD70BR2mbLisuKB38tmFsFjPPiDGqL.jpeg', 19),
(47, '5AKm1Y1pjzpjk2Gbe3WO579bpREGUIrkpqL3rHWJ.jpeg', 19),
(54, 'llStmbl05mmhtdRuOt4y9sD5GtAgLe6JT4mNC8G7.jpeg', 20),
(55, 'ekE7H0XhQqymR4XZWRG45YYnCtrzI7yV4d6mf8AH.jpeg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured_image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `title`, `content`, `category_id`, `featured_image`, `create_day`) VALUES
(4, '3-cach-phoi-do-thu-chuan-khoi-chinh-voi-tong-nau-hot-trend', '3 cách phối đồ thu \'chuẩn khỏi chỉnh\' với tông nâu hot trend', '<p>C&ugrave;ng xem c&aacute;c hot girl H&agrave;n, Việt c&oacute; những gợi &yacute; mix đồ m&agrave;u đất n&agrave;o cho m&ugrave;a thu n&agrave;y nh&eacute;.</p>\r\n\r\n<p><strong>1. N&acirc;u/n&acirc;u be + trắng</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend\" src=\"https://i-ione.vnecdn.net/2017/09/08/53b2067c61731d0d48d5e212c55522-2044-1683-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trắng l&agrave; gam trung t&iacute;nh n&ecirc;n phối với bất cứ m&agrave;u hay sắc độ n&agrave;o cũng đều hợp rơ. Sắc trắng tinh kh&ocirc;i c&agrave;ng ăn &yacute; với những t&ocirc;ng n&acirc;u be, n&acirc;u v&agrave;ng nhẹ nh&agrave;ng, trầm lắng.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-1\" src=\"https://i-ione.vnecdn.net/2017/09/08/gt3t3t-7087-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Kết hợp c&aacute;c gam n&acirc;u c&ugrave;ng sắc trắng, con g&aacute;i sẽ c&oacute; một bộ đồ thanh lịch m&agrave; vẫn trẻ trung, đặc biệt l&agrave; cực kỳ t&ocirc;n da.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-2\" src=\"https://i-ione.vnecdn.net/2017/09/08/reh-5888-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Bạn c&oacute; thể phối item m&agrave;u n&acirc;u m&agrave; m&igrave;nh mới sắm được cho ph&ugrave; hợp xu hướng năm nay với bất cứ m&oacute;n đồ m&agrave;u trắng n&agrave;o c&oacute; sẵn trong tủ đồ.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-3\" src=\"https://i-ione.vnecdn.net/2017/09/08/21192043-10155558095108830-297-7306-6621-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Thậm ch&iacute; khi diện cả c&acirc;y trắng, chỉ cần th&ecirc;m một m&oacute;n phụ kiện m&agrave;u n&acirc;u như mũ, t&uacute;i x&aacute;ch hay gi&agrave;y l&agrave; con g&aacute;i cũng đ&atilde; c&oacute; diện mạo đậm chất H&agrave;n hơn hẳn.</p>\r\n\r\n<p><strong>2. N&acirc;u đậm + n&acirc;u nhạt</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-4\" src=\"https://i-ione.vnecdn.net/2017/09/08/3tt4t-9627-1504855834.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Thay v&igrave; kết hợp cả c&acirc;y c&ugrave;ng m&agrave;u n&acirc;u rất dễ bị &quot;dừ&quot;, bạn h&atilde;y kh&eacute;o phối c&aacute;c sắc độ của m&agrave;u n&acirc;u, k&eacute;o m&agrave;u th&ocirc;ng minh để tạo n&ecirc;n sự h&ograve;a hợp.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-5\" src=\"https://i-ione.vnecdn.net/2017/09/08/fwq-5188-1504855834.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Sắc đậm của n&acirc;u đất n&ecirc;n được đi c&ugrave;ng m&agrave;u n&acirc;u s&aacute;ng hay v&agrave;ng be, n&acirc;u da b&ograve;... để bộ trang phục c&oacute; điểm nhấn bắt mắt hơn.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-6\" src=\"https://i-ione.vnecdn.net/2017/09/08/nrrh-5904-1504855834.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Kết hợp nhiều m&agrave;u ăn &yacute; tr&ecirc;n c&ugrave;ng một bộ trang phục cũng sẽ gi&uacute;p tổng thể kh&ocirc;ng bị nh&agrave;m ch&aacute;n, thể hiện bạn l&agrave; người cực kỳ c&oacute; gu trong khoản chơi m&agrave;u.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-7\" src=\"https://i-ione.vnecdn.net/2017/09/08/r32t-9219-1504855834.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Gam n&acirc;u cũng dễ g&acirc;y li&ecirc;n tưởng l&agrave; gam m&agrave;u &quot;cổ lỗ sĩ&quot; hay &quot;b&agrave; gi&agrave;&quot; n&ecirc;n một v&agrave;i m&oacute;n đồ s&aacute;ng hơn đi c&ugrave;ng sẽ mang đến vẻ hiện đại cho bạn.</p>\r\n\r\n<p><strong>3. N&acirc;u + r&ecirc;u</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-8\" src=\"https://i-ione.vnecdn.net/2017/09/08/21106823-1926757937536484-2280-3743-2466-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>N&acirc;u l&agrave; gam m&agrave;u của đất, xanh r&ecirc;u l&agrave; gam m&agrave;u của l&aacute;, cỏ c&acirc;y, c&ograve;n sự kết hợp n&agrave;o c&oacute; thể ăn &yacute; hơn thế? Đ&acirc;y cũng l&agrave; l&yacute; do m&agrave; mix r&ecirc;u với n&acirc;u đang l&agrave; một trong những xu hướng hot nhất xứ kim chi.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-9\" src=\"https://i-ione.vnecdn.net/2017/09/08/dqw-1158-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Để mix đồ r&ecirc;u với n&acirc;u/n&acirc;u be cũng rất đơn giản. Bạn c&oacute; thể chọn &aacute;o quần đối m&agrave;u hoặc d&ugrave;ng phụ kiện l&agrave;m điểm nhấn.&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-10\" src=\"https://i-ione.vnecdn.net/2017/09/08/mac-dep-nhu-han-quoc-11-6170-1504846705.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>M&agrave;u r&ecirc;u tuy tr&ocirc;ng rất nền n&atilde; v&agrave; đẹp mắt nhưng lạ kh&aacute; k&eacute;n da, v&igrave; thế nếu kh&ocirc;ng c&oacute; l&agrave;n da trắng s&aacute;ng, bạn c&oacute; thể d&ugrave;ng phụ kiện m&agrave;u r&ecirc;u, hoặc mặc quần/v&aacute;y r&ecirc;u c&ugrave;ng đồ n&acirc;u thay v&igrave; diện &aacute;o, v&aacute;y liền m&agrave;u r&ecirc;u.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"3-cach-phoi-do-thu-chun-khoi-chinh-voi-tong-nau-hot-trend-11\" src=\"https://i-ione.vnecdn.net/2017/09/08/bnegeg-1149-1504855834.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 2, 'j2FfpmuSOjNkHKEDu865b85vy4a8UM13fNKZcUjV.jpeg', '2017-09-18'),
(8, 'muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay', 'Muốn có vẻ ngoài hoàn hảo, bạn đừng mắc 8 lỗi thời trang này', '<p>Trang phục qu&aacute; chật hay rộng, chất liệu nhăn nh&uacute;m, nội y kh&ocirc;ng ph&ugrave; hợp... khiến bạn mất đi phần n&agrave;o sức h&uacute;t.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/1-Last-minute-preparations-414-9781-9698-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>1. Thời gian chuẩn bị gấp g&aacute;p</strong><br />\r\n			Buổi s&aacute;ng thức dậy, bạn vừa lao đi đ&aacute;nh răng vừa nghĩ: &quot;H&ocirc;m nay mặc g&igrave; đ&acirc;y?&quot;. Cảnh tượng n&agrave;y hẳn kh&aacute; quen thuộc với nhiều c&ocirc; g&aacute;i. V&agrave; kết quả l&agrave;, chỉ với v&agrave;i ph&uacute;t sửa soạn vội v&agrave;ng, bạn kh&ocirc;ng thể c&oacute; được diện mạo ưng &yacute; trước khi ra ngo&agrave;i.<br />\r\n			Để tr&aacute;nh lặp lại t&igrave;nh trạng n&agrave;y, bạn n&ecirc;n chọn sẵn trang phục, phụ kiện từ tối h&ocirc;m trước.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-1\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/2-weather-1888-1505315877-3236-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>2. Trang phục kh&ocirc;ng hợp thời tiết</strong><br />\r\n			D&ugrave; muốn khẳng định c&aacute; t&iacute;nh v&agrave; phong c&aacute;ch ri&ecirc;ng, bạn vẫn n&ecirc;n ch&uacute; &yacute; tới yếu tố v&ocirc; c&ugrave;ng quan trọng: nhiệt độ v&agrave; t&igrave;nh trạng mưa nắng. Bởi chắc chắn bạn sẽ kh&ocirc;ng muốn ai nh&igrave;n m&igrave;nh bằng &aacute;nh mắt kỳ lạ khi bạn mặc &aacute;o kho&aacute;c d&agrave;y trong ng&agrave;y nắng n&oacute;ng, hoặc diện đầm maxi d&agrave;i qu&eacute;t đất dưới trời mưa ướt nhẹp.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-2\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/3-Dressing-out-of-place-4703-1-7690-1892-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>3. Trang phục kh&ocirc;ng hợp ho&agrave;n cảnh</strong><br />\r\n			Tương tự lỗi thời trang thứ hai, bạn sẽ kh&ocirc;ng thể ghi điểm nếu mang gi&agrave;y cao g&oacute;t khi đi picnic c&ugrave;ng bạn b&egrave;, hay mặc đồ qu&aacute; ngắn, cắt kho&eacute;t t&aacute;o bạo tới m&ocirc;i trường c&ocirc;ng sở...</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-3\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/4-clothes-not-fit-3467-1505315-8516-4608-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>4. Trang phục kh&ocirc;ng vừa vặn</strong><br />\r\n			D&ugrave; c&oacute; th&iacute;ch một chiếc &aacute;o đến đ&acirc;u, bạn cũng cần chắc chắn rằng n&oacute; vừa với cơ thể m&igrave;nh. Một m&oacute;n đồ qu&aacute; rộng hay qu&aacute; chật đều sẽ khiến bạn mất điểm.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-4\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/5-Substandard-materials-4732-1-7039-2289-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>5. Chất liệu kh&ocirc;ng tốt</strong><br />\r\n			H&igrave;nh minh hoạ n&agrave;y cho bạn thấy r&otilde; sự kh&aacute;c biệt. Với c&ugrave;ng kiểu d&aacute;ng mang phong c&aacute;ch c&ocirc;ng sở tương tự nhau, bộ suit chất liệu phẳng phiu, đứng d&aacute;ng tạo n&ecirc;n h&igrave;nh ảnh qu&yacute; c&ocirc; thanh lịch, trong khi v&aacute;y &aacute;o nhăn nh&uacute;m khiến người mặc tr&ocirc;ng k&eacute;m sang hơn hẳn.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-5\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/6-Wrong-choice-of-underwear-61-2721-1838-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>6. Chọn sai nội y</strong><br />\r\n			Một v&agrave;i người c&oacute; thể n&oacute;i: &quot;Đồ l&oacute;t quan trọng g&igrave; chứ? Chẳng ai nh&igrave;n thấy ch&uacute;ng cả&quot;. Tuy nhi&ecirc;n, đ&acirc;y l&agrave; một sai lầm! Vẻ ngo&agrave;i của bạn c&oacute; ho&agrave;n hảo hay kh&ocirc;ng, điều đ&oacute; phụ thuộc rất lớn v&agrave;o c&aacute;ch chọn nội y.<br />\r\n			Một chiếc bra hay quần ch&iacute;p vừa vặn, ph&ugrave; hợp trang phục, định h&igrave;nh đường cong hiệu quả sẽ gi&uacute;p bạn khai th&aacute;c trọn vẹn sức h&uacute;t bản th&acirc;n. Ngược lại, nếu nội y bị lộ ra ngo&agrave;i hay tạo th&agrave;nh ngấn cơ thể, bạn chắc chắn kh&ocirc;ng ghi được điểm.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-6\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/7-Color-combinations-7282-1505-1770-3335-1505355607.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>7. Kết hợp m&agrave;u sắc kỳ cục</strong><br />\r\n			Nếu kh&ocirc;ng tự tin về khả năng phối m&agrave;u của m&igrave;nh, tốt nhất bạn n&ecirc;n ưu ti&ecirc;n những gam trung t&iacute;nh, hoặc chỉ nhấn một t&ocirc;ng nổi bật tr&ecirc;n tổng thể. Ngo&agrave;i ra, sắc đen - trắng tương phản cũng l&agrave; bộ đ&ocirc;i dễ mặc v&agrave; kh&ocirc;ng bao giờ lỗi mốt.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:90.9091%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"muon-co-ve-ngoai-hoan-hao-ban-dung-mac-8-loi-thoi-trang-nay-7\" src=\"https://i-ngoisao.vnecdn.net/2017/09/14/8-Minor-flaws-1692-1505315877-4008-1505355608.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>8. Những lỗi nhỏ tr&ecirc;n trang phục</strong><br />\r\n			Đ&ocirc;i l&uacute;c, bạn c&oacute; thể cảm thấy bối rối, mất tự tin khi ph&aacute;t hiện &aacute;o m&igrave;nh bị sứt chỉ, tuột c&uacute;c hay b&aacute;m bẩn... Giải ph&aacute;p d&agrave;nh cho bạn l&agrave; h&atilde;y đem theo một g&oacute;i nhỏ gồm kim băng, kim v&agrave; chỉ kh&acirc;u (chỉ m&agrave;u đen v&agrave; trắng l&agrave; cần thiết nhất) trong t&uacute;i x&aacute;ch, nhằm sẵn s&agrave;ng đối ph&oacute; mọi sự cố.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 2, '5CCZ71oWKJj4AIadH2MinkSkbhnSO4r3Tgg83WqB.jpeg', '2017-09-18'),
(9, 'tung-bung-khuyen-mai-noel', 'Tưng bừng khuyến mãi NOEL', '<p>Mừng Gi&aacute;ng sinh sắp đến, A-HA Fashion Shop thực hiện chương tr&igrave;nh khuyến m&atilde;i giảm gi&aacute; <strong>10 &ndash; 40%</strong> tất cả c&aacute;c sản phẩm, &aacute;p dụng từ ng&agrave;y <strong>15/12</strong>&nbsp;đến hết ng&agrave;y <strong>24/12</strong> khi kh&aacute;ch h&agrave;ng đến mua sắm trực tiếp hay mua ONLINE<br />\r\nCh&uacute;ng t&ocirc;i cam kết gi&aacute; sản phẩm được thống nhất tr&ecirc;n to&agrave;n quốc<br />\r\nXin cảm ơn sự quan t&acirc;m của Qu&yacute; kh&aacute;ch h&agrave;ng!</p>', 1, '1qqXBEyiR9KbPsHylf4qefbUJieJfttd81LPInD1.jpeg', '2017-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `slug`, `name`) VALUES
(1, 'tin-khuyen-mai', 'Tin khuyến mãi'),
(2, 'tin-thoi-trang', 'Tin thời trang');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tel` bigint(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `order_day` date NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `address`, `tel`, `email`, `note`, `order_day`, `state`) VALUES
(11, 'Tester', '597/7 Tùng Thiện Vương P12 Q8 HCM', 979911454, 'thuanphuoc@gmail.com', 'Giao hàng sau 5h chiều!', '2017-09-21', 2),
(12, 'Tester', 'Q8 HCM', 979911454, 'test@gmail.com', 'Đơn hàng test!', '2017-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `name`, `price`, `image`) VALUES
(12, 11, 18, 1, 'Đầm J', 600000, 'ar7HDdCdYN9AlDJpdtCLZb3W6lwruMitoO4c1zia.jpeg'),
(13, 11, 9, 2, 'Đầm F', 500000, 'hbtQq7ab6C9KZvWi8VIQV4XbemFk2PK5h0avFzNA.jpeg'),
(14, 12, 19, 2, 'Đầm K', 600000, '0zf0vAO8z5wD70BR2mbLisuKB38tmFsFjPPiDGqL.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `full_description` text COLLATE utf8_unicode_ci NOT NULL,
  `regular_price` float NOT NULL,
  `sale_price` float DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `slug`, `name`, `category_id`, `short_description`, `full_description`, `regular_price`, `sale_price`, `featured`) VALUES
(2, 'ao-a', 'Áo A', 32, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 300000, 250000, 0),
(3, 'ao-b', 'Áo B', 32, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 400000, NULL, 1),
(4, 'dam-a', 'Đầm A', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 600000, NULL, 1),
(5, 'dam-b', 'Đầm B', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 700000, 600000, 0),
(6, 'dam-c', 'Đầm C', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 500000, 450000, 0),
(7, 'dam-d', 'Đầm D', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 800000, 700000, 1),
(8, 'dam-e', 'Đầm E', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 650000, 600000, 0),
(9, 'dam-f', 'Đầm F', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 550000, 500000, 0),
(10, 'dam-g', 'Đầm G', 35, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 700000, 600000, 0),
(11, 'quan-a', 'Quần A', 33, '<p>- D&aacute;ng high-low&nbsp;<br />\r\n- Phần vai may c&aacute;ch điệu, c&oacute; d&acirc;y nơ buộc hai b&ecirc;n&nbsp;<br />\r\n- Họa tiết in trẻ trung thanh lịch tr&ecirc;n nền m&agrave;u cam<br />\r\n- Chất liệu b&oacute;ng, đẹp, bền m&agrave;u</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 500000, 400000, 0),
(12, 'quan-b', 'Quần B', 33, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 400000, 300000, 0),
(13, 'chan-vay-a', 'Chân Váy A', 34, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 500000, NULL, 0),
(14, 'chan-vay-b', 'Chân Váy B', 34, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 500000, 400000, 0),
(15, 'quan-c', 'Quần C', 33, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 400000, 350000, 0),
(16, 'dam-h', 'Đầm H', 35, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 600000, 500000, 0),
(17, 'dam-i', 'Đầm I', 35, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 500000, NULL, 0),
(18, 'dam-j', 'Đầm J', 35, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 700000, 600000, 0),
(19, 'dam-k', 'Đầm K', 35, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 700000, 600000, 1),
(20, 'dam-suong-hoa-tiet-cao-cap', 'Đầm Suông Họa Tiết Cao Cấp', 35, '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', '<p>- M&agrave;u sắc: Nhiều m&agrave;u<br />\r\n- Hướng dẫn sử dụng: Kh&ocirc;ng d&ugrave;ng thuốc tẩy, Ủi ở nhiệt độ thấp.<br />\r\n- Material: Silk<br />\r\n- Xuất xứ: Việt Nam</p>', 500000, 400000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `url`) VALUES
(6, 'iSr0GizRgc0ktqL6FFMDVxsmFS2LuulmgXYjsVZY.jpeg', 'http://127.0.0.1:8000/danh-muc/dam'),
(8, 'AOIqyoCwpXWNnZvQJvA4CqzUuM9ZoeJDEEsDzOX4.jpeg', 'http://127.0.0.1:8000/tin-tuc/tung-bung-khuyen-mai-noel'),
(9, 'xalqpjR1al6YpmVkfTzY5KNav9XUp5VNJXxK3AFl.jpeg', 'http://127.0.0.1:8000/danh-muc');

-- --------------------------------------------------------

--
-- Table structure for table `static_page`
--

CREATE TABLE `static_page` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `static_page`
--

INSERT INTO `static_page` (`id`, `name`, `content`) VALUES
(1, 'Giới Thiệu', '<p>Nội dung trang giới thiệu...</p>'),
(2, 'Hướng dẫn mua hàng', '<p>Nội dung trang Hướng dẫn mua h&agrave;ng...</p>'),
(3, 'Liên hệ', '<p>Nội dung trang li&ecirc;n hệ....</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$zsGFgMRrZ2ted8DR8tj2sukCdhnA1jMagRrPHqt.NzekOBrVe8dQu', 'GJ7tVeL7WCIYUPUG22Lw8c4ZVSM3g50W3zTFRY0kGwJOqkKA3lbtSqsDwIUj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_image` (`product_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_news_category_news` (`category_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_order_detail` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category_product` (`category_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_page`
--
ALTER TABLE `static_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `static_page`
--
ALTER TABLE `static_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_product_image` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_category_news` FOREIGN KEY (`category_id`) REFERENCES `news_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_orders_order_detail` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_category_product` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
