-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2019 г., 13:27
-- Версия сервера: 5.7.13-log
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pdd2019`
--

-- --------------------------------------------------------

--
-- Структура таблицы `avto`
--

CREATE TABLE IF NOT EXISTS `avto` (
  `id` int(10) NOT NULL,
  `avto` text NOT NULL,
  `model` text NOT NULL,
  `gos_nomer` text NOT NULL,
  `stahovka` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `avto`
--

INSERT INTO `avto` (`id`, `avto`, `model`, `gos_nomer`, `stahovka`) VALUES
(1, 'Reno', 'Logan', 'р142ув 178', 'WBD22100A28900011'),
(2, 'Opel', 'Astra', 'а275оу 98', 'ABE22199B29192');

-- --------------------------------------------------------

--
-- Структура таблицы `Narusheniya`
--

CREATE TABLE IF NOT EXISTS `Narusheniya` (
  `id` int(11) NOT NULL,
  `avto` text NOT NULL,
  `vid.narush` text NOT NULL,
  `data` date NOT NULL,
  `fio` text NOT NULL,
  `pravo.upr` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Narusheniya`
--

INSERT INTO `Narusheniya` (`id`, `avto`, `vid.narush`, `data`, `fio`, `pravo.upr`) VALUES
(1, 'Волга', 'Вождение в состоянии алкогольного опьянения', '2019-02-03', 'Савин Денис Алексеевич', 'Нема'),
(2, 'Reno', 'Выехал на встречную полосу', '2019-02-04', 'Куралесов Федор Владимирович', 'Есть');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `avto`
--
ALTER TABLE `avto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Narusheniya`
--
ALTER TABLE `Narusheniya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avto`
--
ALTER TABLE `avto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Narusheniya`
--
ALTER TABLE `Narusheniya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
