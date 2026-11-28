-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2026 at 09:44 AM
-- Server version: 10.11.19-MariaDB
-- PHP Version: 8.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfirstdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment_txt` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime(),
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment_txt`, `created_at`, `users_id`) VALUES
(1, 'tpos', 'EVERYONE NEEDS TO READ SHUUKURA RIGHT NOW!', '2026-11-23 22:16:37', NULL),
(2, 'Sendai Hazuki', 'I want to kiss and touch Miyagi-san', '2026-11-23 22:32:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `courseType` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `username`, `dish_id`, `courseType`, `user_id`, `created_at`) VALUES
(1, 'tposu', 1, 'max_main', 15, '2026-11-25 00:02:32'),
(2, 'tposu', 6, 'max_side', 15, '2026-11-25 00:45:51'),
(3, 'tposu', 3, 'max_main', 15, '2026-11-25 01:33:16'),
(6, 'ileftclick', 8, 'max_main', 19, '2026-11-25 01:37:39'),
(7, 'ileftclick', 8, 'max_side', 19, '2026-11-25 01:37:40'),
(8, 'ileftclick', 4, 'max_drink', 19, '2026-11-25 01:37:41'),
(10, 'godleh', 5, 'max_main', 18, '2026-11-26 13:44:47'),
(11, 'godleh', 7, 'max_side', 18, '2026-11-26 15:37:03'),
(14, 'godleh', 10, 'max_main', 18, '2026-11-27 17:58:40'),
(15, 'godleh', 10, 'max_side', 18, '2026-11-27 17:58:41'),
(16, 'godleh', 10, 'max_drink', 18, '2026-11-27 17:58:42'),
(17, 'tposu', 9, 'max_side', 15, '2026-11-27 17:58:55'),
(18, 'tposu', 9, 'max_drink', 15, '2026-11-27 17:58:58'),
(19, 'ileftclick', 2, 'max_main', 19, '2026-11-27 18:01:16'),
(21, 'godleh', 1, 'max_main', 18, '2026-11-27 18:59:10'),
(22, 'godleh', 8, 'max_side', 18, '2026-11-27 19:14:00'),
(24, 'godleh', 1, 'max_side', 18, '2026-11-27 23:28:31'),
(25, 'godleh', 5, 'max_drink', 18, '2026-11-27 23:54:26'),
(26, 'tposu', 1, 'max_drink', 15, '2026-11-28 00:07:09'),
(27, 'tposu', 3, 'max_drink', 15, '2026-11-28 00:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `max_drink`
--

CREATE TABLE `max_drink` (
  `id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `max_drink`
--

INSERT INTO `max_drink` (`id`, `food_name`, `description`, `image`, `link`, `date_added`) VALUES
(1, 'Sinh Tố Bo', 'Vietnamese avocado smoothie', '../Images/sinhtobo.png', 'https://www.cooking-therapy.com/sinh-to-bo/', '2026-11-24 14:36:25'),
(2, 'Nước Sâm', 'Vietnamese herbal tea', '../Images/nuocsam.png', 'https://vickypham.com/blog/vietnamese-herbal-tea-nuoc-sam/', '2026-11-24 14:36:25'),
(3, 'Nước Mía', 'Vietnamese sugarcane juice', '../Images/nuocmia.png', 'https://phostreet.com.sg/vietnamese-sugarcane-juice-nuoc-mia-recipe/', '2026-11-24 14:36:25'),
(4, 'Trà Atisô', 'Vietnamese artichoke tea', '../Images/traatiso.png', 'https://teerangathome.com/vietnamese-artichoke-tea-cha-atiso/', '2026-11-24 14:36:25'),
(5, 'Nước Rau Má', 'Pennywort drink', '../Images/nuocrauma.png', 'https://www.wokandkin.com/pennywort-drink/', '2026-11-24 14:36:25'),
(6, 'Tra Sen', 'Lotus tea', '../Images/trasen.png', 'https://feastio.com/vietnamese-drinks/', '2026-11-24 14:36:25'),
(7, 'Trà đá', 'Vietnamese iced tea', '../Images/trada.png', 'https://www.ramenheaven.de/en/blogs/rezepte/vietnamese-iced-tea-tra-da', '2026-11-24 14:36:25'),
(8, 'Cà Phê Trứng', 'Vietnamese egg coffee', '../Images/caphetrung.png', 'https://vickypham.com/blog/vietnamese-egg-coffee-ca-phe-trung-1/', '2026-11-24 14:36:25'),
(9, 'Cà Phê Sữa Đá', 'Vietnamese coffee', '../Images/caphesuada.png', 'https://www.hungryhuy.com/vietnamese-coffee-recipe-cafe-sua-da-recipe/', '2026-11-24 14:36:25'),
(10, 'Cà Phê Đen', 'Vietnamese black coffee', '../Images/capheden.png', 'https://dailyphin.com/how-to-make-vietnamese-black-coffee/', '2026-11-24 14:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `max_main`
--

CREATE TABLE `max_main` (
  `id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `max_main`
--

INSERT INTO `max_main` (`id`, `food_name`, `description`, `image`, `link`, `date_added`) VALUES
(1, 'Bánh Mì', 'Vietnamese sandwich made with chicken and many pickled vegetables', '../Images/bahnmi.png', 'https://www.allrecipes.com/recipe/187342/banh-mi/', '2026-11-24 14:26:40'),
(2, 'Pho', 'Vietnamese noodle soup with a signature delicious broth', '../Images/pho.png', 'https://www.recipetineats.com/vietnamese-pho-recipe/', '2026-11-24 14:26:40'),
(3, 'Bun Cha', 'Caramelised pork meatballs from Hanoi', '../Images/buncha.png', 'https://www.recipetineats.com/bun-cha-vietnamese-meatballs/', '2026-11-24 14:26:40'),
(4, 'Bahn Xeo', 'Crispy and savory Vietnamese crêpes', '../Images/bahnxeo.png', 'https://www.hungryhuy.com/banh-xeo-savory-vietnamese-crepes/', '2026-11-24 14:26:40'),
(5, 'Mi Quang', 'Vietnamese turmeric noodle soup from Quang Nam', '../Images/miquang.png', 'https://www.cooking-therapy.com/mi-quang/', '2026-11-24 14:26:40'),
(6, 'Canh Cua', 'Vietnamese sweet and sour soup', '../Images/canhcua.png', 'https://www.cooking-therapy.com/canh-chua/', '2026-11-24 14:26:40'),
(7, 'Bò Lá Lốt', 'Vietnamese grilled beef wrapped in betel leaves', '../Images/bolalot.png', 'https://beyondsweetandsavory.com/vietnamese-grilled-beef-wrapped-in-betel-leaves-bo-la-lot/', '2026-11-24 14:26:40'),
(8, 'Bún Bò Huế', 'Spicy beef and pork noodle soup', '../Images/bunbohue.png', 'https://www.hungryhuy.com/bun-bo-hue-recipe/', '2026-11-24 14:26:40'),
(9, 'Chao', 'Vietnamese rice porridge', '../Images/chao.png', 'https://www.hungryhuy.com/chao-ga-vietnamese-porridge/', '2026-11-24 14:26:40'),
(10, 'Gỏi Gà', 'Vietnamese shredded chicken and cabbage salad', '../Images/goiga.png', 'https://www.thekitchn.com/vietnamese-goi-ga-chicken-slaw-salad-23341327', '2026-11-24 14:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `max_side`
--

CREATE TABLE `max_side` (
  `id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `max_side`
--

INSERT INTO `max_side` (`id`, `food_name`, `description`, `image`, `link`, `date_added`) VALUES
(1, 'Bánh Cuốn', 'Vietnamese rice rolls', '../Images/banhcuon.png', 'https://www.hungryhuy.com/banh-cuon/', '2026-11-24 14:37:08'),
(2, 'Xôi Đậu Đen', 'Black beans and sticky rice', '../Images/xoidauden.png', 'https://www.hungryhuy.com/noodle-salad/', '2026-11-24 14:37:08'),
(3, 'Cà Tím Nướng', 'Grilled eggplants with scallion oil', '../Images/catimnuong.png', 'https://simplevietnamesefood.com/ca-tim-nuong-grilled-eggplants-with-scallion-oil/', '2026-11-24 14:37:08'),
(4, 'Khoai Chiên', 'Pan fried potatoes', '../Images/khoaichien.png', 'https://simplevietnamesefood.com/pan-fried-potatoes-khoai-chien/', '2026-11-24 14:37:08'),
(5, 'Su Su Xào', 'Chayote squash and carrot stir fry', '../Images/susuxao.png', 'https://simplevietnamesefood.com/chayote-squash-carrot-stir-fry-su-su-xao/', '2026-11-24 14:37:08'),
(6, 'Đồ Chua', 'Pickled daikon and carrots', '../Images/dochua.png', 'https://www.seriouseats.com/pickled-daikon-and-carrot-do-chua', '2026-11-24 14:37:08'),
(7, 'Gỏi Cuốn', 'Vietnamese spring rolls', '../Images/goicuon.png', 'https://healthynibblesandbits.com/fresh-vietnamese-spring-rolls-with-video/', '2026-11-24 14:37:08'),
(8, 'Gà Nấu Đậu', 'Vietnamese chicken and bean stew', '../Images/ganaudau.png', 'https://bunbobae.com/vietnamese-chicken-and-bean-stew-ga-nau-dau/', '2026-11-24 14:37:08'),
(9, 'Chè Bắp', 'Vietnamese sweet corn pudding', '../Images/chebap.png', 'https://bunbobae.com/vietnamese-sweet-corn-pudding-che-bap/', '2026-11-24 14:37:08'),
(10, 'Chả Giò', 'Vietnamese egg rolls', '../Images/chagio.png', 'https://bunbobae.com/vietnamese-egg-rolls-cha-gio/', '2026-11-24 14:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `email`, `created_at`) VALUES
(13, 'tpos', '$2y$12$UGf.lqkUNUc38Bd5Oq3rru3N.K8L0GMLUB0yE9pN3.d66Jc.mdToi', 'test@gmail.com', '2026-11-24 04:53:36'),
(14, 'test2', '$2y$12$wWSoS48tPr/u4kjr6YbfvOUClVqyRiuzap/UQ51UlSAK8/FgTEHi.', 'test2@gmail.com', '2026-11-24 15:02:31'),
(15, 'tposu', '$2y$12$Ga84hI41N97aRrRk3zndy.g0nOTsKHSTWsxoo1ZGcm06LL9p7GzuW', 'testing@gmail.com', '2026-11-24 22:28:26'),
(16, 'hazuki', '$2y$12$BJe6lc2StmKQYLpwxs.Mn.DlEGl64mgOMRrXtIrl.AoCNHbWZI1My', 'test3@gmail.com', '2026-11-24 22:39:04'),
(17, 'meowmeow', '$2y$12$orOa42qNgKU88uZ6wQdDD.1h0qEg0eHQyZQuI61UGPFBQq0qI8jXi', 'test4@gmail.com', '2026-11-24 22:39:55'),
(18, 'godleh', '$2y$12$Rv1knGTweB0YVXCUGGUjg.L.VnsLxifpXAFS8PMSptkNU.wJWhGZu', 'godleh@godleh.com', '2026-11-25 01:33:46'),
(19, 'ileftclick', '$2y$12$9u7NStr.cTs0GoR2oTSAluLDFd79GXfqpo.oP4Llq.XkmvfoyTOUK', 'ileftclick@gmail.com', '2026-11-25 01:37:13'),
(20, 'Tokai Teio', '$2y$12$iO1zzs6JL660wO.sJG74e.moS/r3Bxvb3exy9Wttoc2.Rl3DhNM26', 'honeymonarch@gmail.com', '2026-11-28 00:41:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `max_drink`
--
ALTER TABLE `max_drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `max_main`
--
ALTER TABLE `max_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `max_side`
--
ALTER TABLE `max_side`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `max_drink`
--
ALTER TABLE `max_drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `max_main`
--
ALTER TABLE `max_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `max_side`
--
ALTER TABLE `max_side`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
