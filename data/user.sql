-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 28 2020 г., 12:50
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
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `first_site_history` varchar(255) DEFAULT NULL,
  `second_site_history` varchar(255) DEFAULT NULL,
  `third_site_history` varchar(255) DEFAULT NULL,
  `fourth_site_history` varchar(255) DEFAULT NULL,
  `fifth_site_history` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `login_user`, `password_user`, `first_site_history`, `second_site_history`, `third_site_history`, `fourth_site_history`, `fifth_site_history`) VALUES
(1, 'Администратор', 'admin', '$2y$10$k5h15GzEKvG4IhY3CitxAOWm4pBUF71EkD/WhSgQ8/upnuZ2RUDw6', NULL, NULL, NULL, NULL, NULL),
(2, 'michese', 'michese', '$2y$10$HJ/8MEMm5R5pYkGAilksYe5qzNX..i91Y6MKZdBPS2kPlJG1bDTze', '/', '/goods/', '/gallery/image/?id_gallery=2', '/gallery/', '/goods/product/?id_goods=2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
