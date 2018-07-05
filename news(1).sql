-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 26 2018 г., 08:11
-- Версия сервера: 10.2.12-MariaDB
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `id6295563_news_api`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `is_published` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `image`, `date`, `is_published`) VALUES
(1, 'RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND PATHOLOG', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '', '2018-06-25 00:00:00', 1),
(41, '460991', 'В Выборге отметили 74-ю годовщину освобождения города<br>▬▬▬▬▬▬▬▬<br>Мероприятие прошло в военном музее Карельского перешейка.Песни военных лет исполнили студенты музыкальной школы им. Н. А. Римского-Корсакова. Выборгское бальное общество представило свою танцевальную программу.', NULL, '2018-06-26 00:00:00', 0),
(42, '461205', 'С 1 по 4 июля в Выборге пройдет IX Всероссийский театральный фестиваль \"ТЕАТРАЛЬНЫЕ ВИТРАЖИ 2018\".<br>▬▬▬▬▬▬▬▬<br>Выборгский Народный театр открывает конкурсную программу 1 июля в 12:00 на сцене Дворца культуры спектаклем \"Семейный портрет с посторонним\". А 3 июля в 13:20 играет одноактную пьесу Теннесси Уильямса \"Говори со мной словно дождь и не мешай слушать\". <br><br>Вход на спектакли фестиваля свободный. Программа фестиваля во вложении. Дворец культуры, ул. Советская 16.', NULL, '2018-06-26 00:00:00', 0),
(43, '461200', 'Забивака в Выборге!', NULL, '2018-06-26 00:00:00', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
