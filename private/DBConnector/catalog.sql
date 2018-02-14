-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2018 г., 20:45
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MyShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `category` varchar(25) DEFAULT 'other',
  `title` varchar(200) DEFAULT '',
  `image` varchar(50) DEFAULT 'defaul.png',
  `about` varchar(5000) DEFAULT '',
  `price` int(10) NOT NULL DEFAULT '0',
  `aviable` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `category`, `title`, `image`, `about`, `price`, `aviable`) VALUES
(1, 'other', 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret', '/static/images/item1.jpg', 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6+8 pin; блок питания не менее: 500Вт; тип поставки: Ret', 37590, b'1'),
(2, 'other', 'LED телевизор SAMSUNG UE32M5000AKXRU \"R\", 32\", FULL HD (1080p), черный', '/static/images/item3.jpg', 'диагональ: 32\"; разрешение: 1920 x 1080; HDTV FULL HD (1080p); DVB-T2; DVB-С; DVB-S2; тип USB: мультимедийный; цвет: черный', 19990, b'1'),
(3, 'other', 'Кресло игровое AEROCOOL AC80C-BR, на колесиках, кожа, черный/красный [428388]', '/static/images/item4.jpg', 'тип установки: на колесиках; подлокотники; эргономичная спинка (сетка); газлифт; ограничение по весу: 150кг; материал обивки: кожа', 13100, b'1'),
(4, 'other', 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret', '/static/images/item1.jpg', 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6+8 pin; блок питания не менее: 500Вт; тип поставки: Ret', 37590, b'1'),
(5, 'other', 'Мультиварка-скороварка REDMOND RMC-PM380, 1000Вт, серебристый/черный', '/static/images/item2.jpg', 'мощность 1000Вт, объем 6л, дисплей, таймер, антипригарное покрытие, пароварка в комплекте, книга рецептов цвет- серебристый/черный', 5500, b'1'),
(6, 'other', 'LED телевизор SAMSUNG UE32M5000AKXRU \"R\", 32\", FULL HD (1080p), черный', '/static/images/item3.jpg', 'диагональ: 32\"; разрешение: 1920 x 1080; HDTV FULL HD (1080p); DVB-T2; DVB-С; DVB-S2; тип USB: мультимедийный; цвет: черный', 19990, b'1'),
(7, 'other', 'Кресло игровое AEROCOOL AC80C-BR, на колесиках, кожа, черный/красный [428388]', '/static/images/item4.jpg', 'тип установки: на колесиках; подлокотники; эргономичная спинка (сетка); газлифт; ограничение по весу: 150кг; материал обивки: кожа', 13100, b'1'),
(8, 'other', 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret', '/static/images/item1.jpg', 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6+8 pin; блок питания не менее: 500Вт; тип поставки: Ret', 37590, b'1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
