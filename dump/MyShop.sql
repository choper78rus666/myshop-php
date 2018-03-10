-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2018 г., 12:54
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
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `login`, `pwd`, `email`, `state`) VALUES
(1, 'choper78rus', '$2y$10$zKDuSQkLlDb1zsdvgxDb7OWsbJsI.tLlK.XU.ym3.sT06IZFUaelG', 'choper78rus@gmail.com', 'admin'),
(3, 'driver', '$2y$10$FTWoPBGlcVF/9GfldFaSyegJ4UANWBBOP7taJDX2.9ftT.2H.Lg7q', 'driver-tt@mail.ru', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `accountsVK`
--

CREATE TABLE `accountsVK` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `login` varchar(25) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accountsVK`
--

INSERT INTO `accountsVK` (`id`, `first_name`, `last_name`, `nickname`, `login`) VALUES
(7783178, 'Дмитрий', 'Ерин', 'Григорьевич', 'driver');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `login` varchar(25) DEFAULT '',
  `last_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id_cart`, `session_id`, `login`, `last_time`) VALUES
(1, '8qnjkohorkavdc611a3t50cdqediabh6', 'driver', '2018-03-10 09:42:01');

-- --------------------------------------------------------

--
-- Структура таблицы `cart_item`
--

CREATE TABLE `cart_item` (
  `id_cart` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `category` varchar(25) DEFAULT 'other',
  `title` varchar(200) DEFAULT '',
  `image` varchar(50) DEFAULT 'defaul.png',
  `about` varchar(1000) DEFAULT '',
  `price` int(10) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `category`, `title`, `image`, `about`, `price`, `count`) VALUES
(1, 'PC', 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret', '/static/images/item1.jpg', 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6 8 pin; блок питания не менее: 500Вт; тип поставки: Ret', 37590, 10),
(2, 'other', 'LED телевизор SAMSUNG UE32M5000AKXRU \"R\", 32\", FULL HD (1080p), черный', '/static/images/item3.jpg', 'диагональ: 32\"; разрешение: 1920 x 1080; HDTV FULL HD (1080p); DVB-T2; DVB-С; DVB-S2; тип USB: мультимедийный; цвет: черный', 19990, 1),
(3, 'other', 'Кресло игровое AEROCOOL AC80C-BR, на колесиках, кожа, черный/красный [428388]', '/static/images/item4.jpg', 'тип установки: на колесиках; подлокотники; эргономичная спинка (сетка); газлифт; ограничение по весу: 150кг; материал обивки: кожа', 13100, 4),
(4, 'other', 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret', '/static/images/item1.jpg', 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6 8 pin; блок питания не менее: 500Вт; тип поставки: Ret', 37590, 15),
(5, 'other', 'Мультиварка-скороварка REDMOND RMC-PM380, 1000Вт, серебристый/черный', '/static/images/item2.jpg', 'мощность 1000Вт, объем 6л, дисплей, таймер, антипригарное покрытие, пароварка в комплекте, книга рецептов цвет- серебристый/черный', 5500, 1),
(6, 'other', 'LED телевизор SAMSUNG UE32M5000AKXRU \"R\", 32\", FULL HD (1080p), черный', '/static/images/item3.jpg', 'диагональ: 32\"; разрешение: 1920 x 1080; HDTV FULL HD (1080p); DVB-T2; DVB-С; DVB-S2; тип USB: мультимедийный; цвет: черный', 19990, 1),
(7, 'other', 'Кресло игровое AEROCOOL AC80C-BR, на колесиках, кожа, черный/красный [428388]', '/static/images/item4.jpg', 'тип установки: на колесиках; подлокотники; эргономичная спинка (сетка); газлифт; ограничение по весу: 150кг; материал обивки: кожа', 13100, 1),
(8, 'PC', 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret', '/static/images/item1.jpg', 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6 8 pin; блок питания не менее: 500Вт; тип поставки: Ret', 37590, 6),
(9, 'Appliances', 'Чайник braun', '/static/images/Чайник.jpg', '1500w кипятит быстро', 2500, 15),
(10, 'Appliances', 'Пылесос', '/static/images/Пылесос.jpg', 'Работает отлично!', 45000, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `user_info`
--

CREATE TABLE `user_info` (
  `login` varchar(25) NOT NULL,
  `name` varchar(25) DEFAULT '',
  `surname` varchar(100) DEFAULT '',
  `middle_name` varchar(25) DEFAULT '',
  `birthday` date DEFAULT NULL,
  `sex` varchar(25) DEFAULT 'male',
  `about` varchar(150) DEFAULT '',
  `avatar` varchar(25) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`login`, `name`, `surname`, `middle_name`, `birthday`, `sex`, `about`, `avatar`) VALUES
('choper78rus', 'Дмитрий', 'Ерин', 'Григорьевич', '1979-11-13', 'male', 'Кодить люблю =)', 'photo-1.jpg'),
('driver', 'Василий', 'Петров', 'Игнатьевич', '1956-01-01', 'male', 'живу хорошо, даже лучше чем хорошо =)', 'gold.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `accountsVK`
--
ALTER TABLE `accountsVK`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
