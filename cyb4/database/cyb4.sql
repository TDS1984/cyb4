-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 07 2022 г., 13:18
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cyb4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calcs`
--

CREATE TABLE `calcs` (
  `ID` int(11) NOT NULL,
  `Num1` int(11) NOT NULL,
  `Num2` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Timestemp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `calcs`
--

INSERT INTO `calcs` (`ID`, `Num1`, `Num2`, `User`, `Timestemp`) VALUES
(1, 11, 22, 'Anonim', NULL),
(2, 21, 22, 'Anonim', NULL),
(3, 1, 2, 'Anonim', NULL),
(4, 333, 333, 'Anonim', NULL),
(5, 111, 222, 'Anonim', NULL),
(6, 333, 444, 'Anonim', NULL),
(7, 11, 22, 'Anonim', NULL),
(8, 1, 2, 'Anonim', NULL),
(9, 3, 4, 'Anonim', NULL),
(10, 1, 2, 'Anonim', NULL),
(11, 3, 3, 'Anonim', NULL),
(12, 4, 45, 'Anonim', NULL),
(13, 33333, 44444, 'Anonim', NULL),
(14, 1111111, 22222222, 'Anonim', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `PwdHash` varchar(1000) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `login`, `PwdHash`, `Email`) VALUES
(1, 'user1', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'wdf@outlook.ru'),
(2, 'fgbe@ertneb .ru', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'wdf@3erb');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `calcs`
--
ALTER TABLE `calcs`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `calcs`
--
ALTER TABLE `calcs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
