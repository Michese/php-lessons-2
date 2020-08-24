-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2020 г., 19:28
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trialdb2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_goods` int NOT NULL,
  `title_goods` varchar(255) NOT NULL,
  `description_goods` varchar(1024) NOT NULL,
  `price_goods` float NOT NULL,
  `src_big_goods` varchar(255) NOT NULL,
  `src_small_goods` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_goods`, `title_goods`, `description_goods`, `price_goods`, `src_big_goods`, `src_small_goods`) VALUES
(1, 'product random_title', 'description random_title', 20.1, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(2, 'product 759', 'description 759', 67785, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(3, 'product 11', 'description 11', 52514, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(4, 'product 274', 'description 274', 38876, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(5, 'product 85', 'description 85', 8003, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(6, 'product 583', 'description 583', 90498, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(7, 'product 734', 'description 734', 53124, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(8, 'product 643', 'description 643', 11927, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(9, 'product 231', 'description 231', 81356, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(10, 'product 731', 'description 731', 79250, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(11, 'product 422', 'description 422', 30280, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(12, 'product 418', 'description 418', 46945, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(13, 'product 287', 'description 287', 50132, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(14, 'product 360', 'description 360', 34594, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(15, 'product 146', 'description 146', 36092, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(16, 'product 960', 'description 960', 42901, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(17, 'product 26', 'description 26', 6134, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(18, 'product 112', 'description 112', 96855, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(19, 'product 923', 'description 923', 17131, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(20, 'product 885', 'description 885', 13508, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(21, 'product 842', 'description 842', 76296, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(22, 'product 873', 'description 873', 95814, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(23, 'product 379', 'description 379', 62909, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(24, 'product 198', 'description 198', 76261, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(25, 'product 821', 'description 821', 3545, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(26, 'product 867', 'description 867', 57671, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(27, 'product 4', 'description 4', 75231, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(28, 'product 83', 'description 83', 55492, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(29, 'product 112', 'description 112', 67611, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(30, 'product 952', 'description 952', 28838, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(31, 'product 933', 'description 933', 33324, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(32, 'product 58', 'description 58', 67436, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(33, 'product 408', 'description 408', 3113, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(34, 'product 5', 'description 5', 23447, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(35, 'product 283', 'description 283', 64890, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(36, 'product 205', 'description 205', 58397, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(37, 'product 929', 'description 929', 95739, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(38, 'product 337', 'description 337', 79844, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(39, 'product 895', 'description 895', 37504, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(40, 'product 648', 'description 648', 88115, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(41, 'product 1000', 'description 1000', 4442, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(42, 'product 911', 'description 911', 53776, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(43, 'product 728', 'description 728', 96641, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(44, 'product 627', 'description 627', 92553, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(45, 'product 813', 'description 813', 25919, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(46, 'product 648', 'description 648', 59641, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(47, 'product 310', 'description 310', 68351, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(48, 'product 292', 'description 292', 21814, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(49, 'product 165', 'description 165', 91537, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(50, 'product 686', 'description 686', 76999, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(51, 'product 619', 'description 619', 75136, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(52, 'product 738', 'description 738', 9790, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(53, 'product 686', 'description 686', 78596, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(54, 'product 61', 'description 61', 37207, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(55, 'product 791', 'description 791', 53538, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(56, 'product 966', 'description 966', 67362, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(57, 'product 717', 'description 717', 97233, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(58, 'product 611', 'description 611', 53701, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(59, 'product 211', 'description 211', 44628, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(60, 'product 475', 'description 475', 21895, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(61, 'product 894', 'description 894', 55686, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(62, 'product 261', 'description 261', 39974, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(63, 'product 574', 'description 574', 84879, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(64, 'product 215', 'description 215', 59124, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(65, 'product 610', 'description 610', 91478, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(66, 'product 291', 'description 291', 88445, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(67, 'product 946', 'description 946', 88585, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(68, 'product 1', 'description 1', 13596, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(69, 'product 796', 'description 796', 6197, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(70, 'product 665', 'description 665', 98070, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(71, 'product 99', 'description 99', 32122, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(72, 'product 809', 'description 809', 3192, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(73, 'product 996', 'description 996', 7414, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(74, 'product 363', 'description 363', 74169, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(75, 'product 432', 'description 432', 37907, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(76, 'product 872', 'description 872', 74343, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(77, 'product 867', 'description 867', 20657, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(78, 'product 52', 'description 52', 54160, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(79, 'product 209', 'description 209', 86115, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(80, 'product 686', 'description 686', 66416, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(81, 'product 255', 'description 255', 65922, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(82, 'product 424', 'description 424', 63109, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(83, 'product 217', 'description 217', 64901, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(84, 'product 87', 'description 87', 26857, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(85, 'product 989', 'description 989', 3248, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(86, 'product 276', 'description 276', 85695, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(87, 'product 494', 'description 494', 30926, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(88, 'product 472', 'description 472', 26090, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(89, 'product 854', 'description 854', 78496, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(90, 'product 920', 'description 920', 95145, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(91, 'product 286', 'description 286', 70463, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(92, 'product 668', 'description 668', 58962, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(93, 'product 200', 'description 200', 4123, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(94, 'product 689', 'description 689', 24634, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(95, 'product 868', 'description 868', 79109, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(96, 'product 581', 'description 581', 75113, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(97, 'product 635', 'description 635', 83953, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(98, 'product 496', 'description 496', 2722, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(99, 'product 820', 'description 820', 33914, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(100, 'product 367', 'description 367', 93090, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(101, 'product 718', 'description 718', 55080, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(102, 'product 835', 'description 835', 4702, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(103, 'product 407', 'description 407', 20342, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(104, 'product 970', 'description 970', 58249, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(105, 'product 3', 'description 3', 94274, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(106, 'product 926', 'description 926', 38195, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(107, 'product 888', 'description 888', 76528, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(108, 'product 384', 'description 384', 39623, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(109, 'product 122', 'description 122', 94009, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(110, 'product 945', 'description 945', 72795, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(111, 'product 256', 'description 256', 97488, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(112, 'product 346', 'description 346', 12463, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(113, 'product 461', 'description 461', 4419, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(114, 'product 759', 'description 759', 8255, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(115, 'product 499', 'description 499', 27443, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(116, 'product 959', 'description 959', 40963, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(117, 'product 599', 'description 599', 60607, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(118, 'product 87', 'description 87', 98073, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(119, 'product 395', 'description 395', 45625, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(120, 'product 468', 'description 468', 76604, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(121, 'product 455', 'description 455', 97631, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(122, 'product 42', 'description 42', 62052, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(123, 'product 370', 'description 370', 52188, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(124, 'product 573', 'description 573', 48013, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(125, 'product 157', 'description 157', 98276, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(126, 'product 712', 'description 712', 34070, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(127, 'product 557', 'description 557', 13908, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(128, 'product 842', 'description 842', 76509, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(129, 'product 560', 'description 560', 74631, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(130, 'product 781', 'description 781', 59932, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(131, 'product 871', 'description 871', 73893, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(132, 'product 614', 'description 614', 70395, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(133, 'product 911', 'description 911', 75501, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(134, 'product 918', 'description 918', 41715, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(135, 'product 293', 'description 293', 27319, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(136, 'product 895', 'description 895', 13434, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(137, 'product 863', 'description 863', 81527, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(138, 'product 278', 'description 278', 71368, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(139, 'product 859', 'description 859', 84907, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(140, 'product 808', 'description 808', 84072, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(141, 'product 511', 'description 511', 67992, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(142, 'product 193', 'description 193', 80693, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(143, 'product 926', 'description 926', 80236, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(144, 'product 212', 'description 212', 78790, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(145, 'product 22', 'description 22', 47111, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(146, 'product 662', 'description 662', 44835, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(147, 'product 327', 'description 327', 71066, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(148, 'product 619', 'description 619', 34859, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(149, 'product 259', 'description 259', 65758, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(150, 'product 829', 'description 829', 93756, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(151, 'product 831', 'description 831', 45105, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(152, 'product 58', 'description 58', 7257, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(153, 'product 809', 'description 809', 10834, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(154, 'product 433', 'description 433', 42091, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(155, 'product 555', 'description 555', 65653, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(156, 'product 902', 'description 902', 64374, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(157, 'product 401', 'description 401', 7395, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(158, 'product 415', 'description 415', 64780, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(159, 'product 92', 'description 92', 78714, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(160, 'product 855', 'description 855', 78984, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(161, 'product 548', 'description 548', 40851, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(162, 'product 327', 'description 327', 981, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(163, 'product 819', 'description 819', 76044, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(164, 'product 507', 'description 507', 17380, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(165, 'product 442', 'description 442', 15462, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(166, 'product 734', 'description 734', 64153, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(167, 'product 597', 'description 597', 52969, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(168, 'product 796', 'description 796', 74456, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(169, 'product 959', 'description 959', 26107, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(170, 'product 271', 'description 271', 81377, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(171, 'product 303', 'description 303', 71088, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(172, 'product 76', 'description 76', 41526, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(173, 'product 627', 'description 627', 90973, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(174, 'product 593', 'description 593', 5745, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(175, 'product 752', 'description 752', 47053, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(176, 'product 976', 'description 976', 87809, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(177, 'product 524', 'description 524', 2509, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(178, 'product 991', 'description 991', 64723, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(179, 'product 931', 'description 931', 92235, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(180, 'product 536', 'description 536', 76192, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(181, 'product 859', 'description 859', 87105, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(182, 'product 891', 'description 891', 76168, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(183, 'product 863', 'description 863', 60629, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(184, 'product 98', 'description 98', 85852, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(185, 'product 298', 'description 298', 29593, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(186, 'product 262', 'description 262', 77898, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(187, 'product 967', 'description 967', 28912, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(188, 'product 276', 'description 276', 6807, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(189, 'product 118', 'description 118', 55618, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(190, 'product 666', 'description 666', 9838, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(191, 'product 260', 'description 260', 2814, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(192, 'product 94', 'description 94', 39206, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(193, 'product 143', 'description 143', 97880, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(194, 'product 735', 'description 735', 16075, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(195, 'product 161', 'description 161', 85799, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(196, 'product 380', 'description 380', 36288, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(197, 'product 508', 'description 508', 50533, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(198, 'product 945', 'description 945', 37555, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(199, 'product 663', 'description 663', 42917, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(200, 'product 888', 'description 888', 2624, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(201, 'product 777', 'description 777', 25904, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(202, 'product 789', 'description 789', 80596, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(203, 'product 973', 'description 973', 54828, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(204, 'product 939', 'description 939', 95547, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(205, 'product 971', 'description 971', 55894, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(206, 'product 406', 'description 406', 93585, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(207, 'product 883', 'description 883', 87845, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(208, 'product 992', 'description 992', 26659, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(209, 'product 449', 'description 449', 85892, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(210, 'product 512', 'description 512', 61380, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(211, 'product 40', 'description 40', 94628, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(212, 'product 214', 'description 214', 86377, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(213, 'product 763', 'description 763', 42725, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(214, 'product 783', 'description 783', 4279, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(215, 'product 371', 'description 371', 57922, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(216, 'product 556', 'description 556', 72754, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(217, 'product 255', 'description 255', 5423, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(218, 'product 222', 'description 222', 30024, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(219, 'product 284', 'description 284', 32062, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(220, 'product 168', 'description 168', 58654, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(221, 'product 569', 'description 569', 2418, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(222, 'product 229', 'description 229', 30243, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(223, 'product 879', 'description 879', 38989, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(224, 'product 712', 'description 712', 94312, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(225, 'product 891', 'description 891', 58494, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(226, 'product 297', 'description 297', 38648, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(227, 'product 435', 'description 435', 25352, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(228, 'product 436', 'description 436', 78463, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(229, 'product 886', 'description 886', 83383, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(230, 'product 859', 'description 859', 34059, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(231, 'product 504', 'description 504', 28757, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(232, 'product 972', 'description 972', 2054, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(233, 'product 268', 'description 268', 58191, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(234, 'product 282', 'description 282', 71780, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(235, 'product 709', 'description 709', 82148, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(236, 'product 446', 'description 446', 36749, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(237, 'product 853', 'description 853', 99212, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(238, 'product 142', 'description 142', 4216, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(239, 'product 875', 'description 875', 88062, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(240, 'product 487', 'description 487', 97313, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(241, 'product 250', 'description 250', 8157, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(242, 'product 479', 'description 479', 26835, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(243, 'product 243', 'description 243', 81073, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(244, 'product 938', 'description 938', 48911, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(245, 'product 542', 'description 542', 20190, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(246, 'product 430', 'description 430', 13368, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(247, 'product 967', 'description 967', 66191, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(248, 'product 600', 'description 600', 98916, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(249, 'product 502', 'description 502', 71515, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(250, 'product 270', 'description 270', 40196, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600'),
(251, 'product 382', 'description 382', 50112, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_goods`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_goods` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
