-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2019 г., 14:24
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
  `kod_avto` int(10) NOT NULL,
  `model` text NOT NULL,
  `gos_nomer` text NOT NULL,
  `strahovka` text
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `avto`
--

INSERT INTO `avto` (`kod_avto`, `model`, `gos_nomer`, `strahovka`) VALUES
(1, 'Волга ', 'р142ув178', '87AB999999'),
(2, 'Skoda Rapid', 'а275оу98', 'B23A789987'),
(3, 'Ваз 2115', 'о001оо111', 'A000B000000'),
(4, 'Toyota LC 200', 'а777мр777', '123EG123123'),
(5, 'Toyota Camry', 'у172вк01', '23FE1235129'),
(6, 'BMW X5', 'о022сс05', '442AE123512'),
(7, 'Porshe Cayenne', 'е001кх77', '98FP2929993'),
(8, 'Boeing 737', 'л555кх000', '76F827F7223'),
(9, 'Mercedes Benz S-class', 'а001аа178', '98FP2929991');

-- --------------------------------------------------------

--
-- Структура таблицы `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `kod_avto` int(11) NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `pasport` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drivers`
--

INSERT INTO `drivers` (`kod_avto`, `surname`, `name`, `fathername`, `pasport`) VALUES
(1, 'Савин', 'Денис', 'Алексеевич', '4012 954784'),
(2, 'Куралесов', 'Федор', 'Владимирович', '4013 955275'),
(3, 'Панян', 'Николай', 'Бластерович', '4023 847272'),
(4, 'Гребенюк', 'Владислав', 'Токсичников', '1488 228228'),
(5, 'Путилова', 'Ангелина', 'Львовна', '9823 284232'),
(6, 'Галаганов', 'Дмитрий', 'Игоревич', '4023 321391'),
(7, 'Шымкентов', 'Заур', 'Ахмедович', '1843 382252');

-- --------------------------------------------------------

--
-- Структура таблицы `narusheniya`
--

CREATE TABLE IF NOT EXISTS `narusheniya` (
  `kod_avto` int(11) NOT NULL,
  `id_narush` int(11) NOT NULL,
  `data` date NOT NULL,
  `time` time NOT NULL,
  `fio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `narusheniya`
--

INSERT INTO `narusheniya` (`kod_avto`, `id_narush`, `data`, `time`, `fio`) VALUES
(1, 1, '2019-02-03', '09:23:05', 'Савин Денис Алексеевич'),
(2, 2, '2019-02-04', '16:08:30', 'Куралесов Федор Владимирович');

-- --------------------------------------------------------

--
-- Структура таблицы `vid_narush`
--

CREATE TABLE IF NOT EXISTS `vid_narush` (
  `id_narush` int(11) NOT NULL,
  `name_narush` text NOT NULL,
  `price_narush` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vid_narush`
--

INSERT INTO `vid_narush` (`id_narush`, `name_narush`, `price_narush`) VALUES
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
  ADD PRIMARY KEY (`kod_avto`);

--
-- Индексы таблицы `vid_narush`
--
ALTER TABLE `vid_narush`
  ADD PRIMARY KEY (`id_narush`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avto`
--
ALTER TABLE `avto`
  MODIFY `kod_avto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `drivers`
--
ALTER TABLE `drivers`
  MODIFY `kod_avto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `vid_narush`
--
ALTER TABLE `vid_narush`
  MODIFY `id_narush` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
