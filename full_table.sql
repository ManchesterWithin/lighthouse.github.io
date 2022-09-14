-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 14 2022 г., 07:30
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `full_table`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cancell`
--

CREATE TABLE `cancell` (
  `id` int NOT NULL,
  `status` varchar(5) DEFAULT NULL,
  `title_company` varchar(25) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` text,
  `franchise` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cancell`
--

INSERT INTO `cancell` (`id`, `status`, `title_company`, `date`, `comment`, `franchise`) VALUES
(1, 'Да', 'CD Projekt', '2022-03-03', 'CD Projekt останавливает продажу своих игр в России и Беларуси. «Это коснется цифровых и физических копий. Мы надеемся на понимание всех игроков, которых это затронет. Ранее купленные копии игр, а также патчи и хотфиксы к ним продолжат работать», — указано в заявлении.', 'Cyberpunk 2077, Thronebreaker: The Witcher Tales, GWENT, The Witcher.'),
(2, 'Да', 'Microsoft', '2022-03-04', 'Microsoft официально прекращает продажу своих продуктов и услуг на территории России. Также компания останавливает работу многих своих подразделений в России.', 'Forza Horizon, Age of Empires, Halo, Gears, Fable.'),
(3, 'Да', 'Electronic Arts	', '2022-03-04', 'EA также официально прекращает продажу своих игр и микротранзакций на территории России.', 'Dead Space, Battlefield, Dragon Age, FIFA, Mass Effect, Mirror’s Edge.'),
(4, 'Да', 'Sony', '2022-03-14', 'Sony и SEGA убрали свои игры из продаж в российском Steam. Если от Sony это было ожидаемо, то SEGA не делала никаких заявлений по поводу снятия игр с продаж.', 'Infamous, Uncharted, Gran Turismo, God of War, Spider-Man, Days Gone, Horizon.'),
(5, 'Да', 'Ubisoft', '2022-03-07', 'Ubisoft официально приостанавливает продажи своих игр на территории России. Теперь если и работать с усердием, то только на заводе, а не в огромном и пустом мире новой Assassin\'s Creed.', 'Far Cry, Tom Clancy\'s Splinter Cell, Rayman, Prince of Persia, Assassin\'s Creed.');

-- --------------------------------------------------------

--
-- Структура таблицы `mails`
--

CREATE TABLE `mails` (
  `id` int NOT NULL,
  `emails` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cancell`
--
ALTER TABLE `cancell`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cancell`
--
ALTER TABLE `cancell`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
