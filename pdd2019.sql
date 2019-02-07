-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2019 г., 15:56
-- Версия сервера: 5.5.50
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
  `kod_avto` int(10) NOT NULL,
  `kod_driver` int(11) NOT NULL,
  `model` text NOT NULL,
  `gos_nomer` text NOT NULL,
  `strahovka` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `avto`
--

INSERT INTO `avto` (`kod_avto`, `kod_driver`, `model`, `gos_nomer`, `strahovka`) VALUES
(1, 1, 'Logan', 'р142ув178', 'WBD22100A28900011'),
(2, 2, 'Astra', 'а275оу98', 'ABE22199B29192');

-- --------------------------------------------------------

--
-- Структура таблицы `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `kod_driver` int(11) NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `pasport` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drivers`
--

INSERT INTO `drivers` (`kod_driver`, `surname`, `name`, `fathername`, `pasport`) VALUES
(1, 'Савин', 'Денис', 'Алексеевич', '4012 954784'),
(2, 'Куралесов', 'Федор', 'Владимирович', '4013 9552754');

-- --------------------------------------------------------

--
-- Структура таблицы `narusheniya`
--

CREATE TABLE IF NOT EXISTS `narusheniya` (
  `kod_narush` int(11) NOT NULL,
  `kod_avto` text NOT NULL,
  `vid_narush` text NOT NULL,
  `data` date NOT NULL,
  `fio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `narusheniya`
--

INSERT INTO `narusheniya` (`kod_narush`, `kod_avto`, `vid_narush`, `data`, `fio`) VALUES
(1, 'Волга', '1', '2019-02-03', 'Савин Денис Алексеевич'),
(2, 'Reno', '2', '2019-02-04', 'Куралесов Федор Владимирович');

-- --------------------------------------------------------

--
-- Структура таблицы `vid_narush`
--

CREATE TABLE IF NOT EXISTS `vid_narush` (
  `vid_narush` int(11) NOT NULL,
  `name_narush` text NOT NULL,
  `price_narush` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vid_narush`
--

INSERT INTO `vid_narush` (`vid_narush`, `name_narush`, `price_narush`) VALUES
(1, 'Статья 12.2 часть 2 КоАП РФ\r\nУправление транспортным средством без государственных регистрационных знаков', '5 000 рублей'),
(2, 'Статья 12.2 часть 3 КоАП РФ\r\nУстановка на транспортном средстве заведомо подложных государственных регистрационных знаков', '2 500 рублей');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `avto`
--
ALTER TABLE `avto`
  ADD PRIMARY KEY (`kod_avto`);

--
-- Индексы таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`kod_driver`);

--
-- Индексы таблицы `narusheniya`
--
ALTER TABLE `narusheniya`
  ADD PRIMARY KEY (`kod_narush`);

--
-- Индексы таблицы `vid_narush`
--
ALTER TABLE `vid_narush`
  ADD PRIMARY KEY (`vid_narush`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avto`
--
ALTER TABLE `avto`
  MODIFY `kod_avto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `drivers`
--
ALTER TABLE `drivers`
  MODIFY `kod_driver` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `narusheniya`
--
ALTER TABLE `narusheniya`
  MODIFY `kod_narush` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `vid_narush`
--
ALTER TABLE `vid_narush`
  MODIFY `vid_narush` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
