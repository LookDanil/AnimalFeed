-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 18 2022 г., 16:18
-- Версия сервера: 5.7.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `animalfeed`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `login`, `password`) VALUES
(1, 'Николаев Илья Петрович', 'Kek', '111'),
(2, 'Бочкарева Анастасия', 'Nastya', '111');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Кошачий корм'),
(2, 'Собачий корм'),
(3, 'Корм для грызунов'),
(4, 'Корм для птиц'),
(5, 'Корм для насекомых');

-- --------------------------------------------------------

--
-- Структура таблицы `feeds`
--

CREATE TABLE `feeds` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `discription_product` varchar(1000) DEFAULT NULL,
  `photo_product` varchar(1000) DEFAULT NULL,
  `price_product` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feeds`
--

INSERT INTO `feeds` (`id_product`, `name_product`, `discription_product`, `photo_product`, `price_product`, `category`) VALUES
(1, 'Сухой корм для кошек Purina ONE', 'Сухой корм для кошек от 1 года, для кошек с чувствительным пищеварением', 'img/products/Feed1.jpg', '256', 'Кошачий корм'),
(33, 'Сухой корм CAT CHOW', 'Сухой корм для стерилизованных кошек и кастрированных котов CAT CHOW с высоким содержанием домашней птицы 7 кг', 'img/products/1657801875Feed2.jpg', '234', 'Кошачий корм'),
(44, 'Корм Happy dog для собак', 'Корм Happy dog для собак с 5 зерновыми культурами, овощами и сыром 15 кг', 'img/products/1657804267500x500.webp', '7353', 'Собачий корм'),
(46, 'Сухой корм для собак Brit Premium', 'Сухой корм для собак Brit Premium, при чувствительном пищеварении, ягненок с индейкой 3 кг', 'img/products/1657804529Feed3.jpg', '123123', 'Собачий корм'),
(47, 'Просо Триол Standart', 'Корм для птиц просо Триол standart, 500г (26 шт)', 'img/products/1657805175FeedBirds.jpg', '2346', 'Корм для птиц'),
(48, 'Vitapol ZVP-2700', 'Vitapol ZVP-2700 корм для домашних птиц 900 g', 'img/products/1657805319Popugai.jpg', '971', 'Корм для птиц'),
(49, 'Little One Hamsters', 'Корм для хомяков Little One Hamsters 400 г', 'img/products/1657805606500x500.jpg', '162', 'Корм для грызунов'),
(50, 'Зоомир Крысуня', 'Корм для крыс и мышей Зоомир Крысуня 500 г', 'img/products/1657805759600x600.jpg', '269', 'Корм для грызунов'),
(51, 'Корм JBL &#34;TerraCrick&#34;', 'Корм JBL &#34;TerraCrick&#34; сверчков и других кормовых насекомых, 100 мл (60 г)', 'img/products/1657807891600x600.jpg', '123123', 'Корм для насекомых'),
(55, 'Для мелких пород индейка с рисом 5 кг', 'Корм сертифицирован и имеет Декларацию соответствия Гост Р 55453-2013.\r\nПродукция имеет ветеринарно-сопроводительные документы.', 'img/products/1657811944Dlya_melkikh_porod_indeyka_s_risom_5_kg.jpg', '1200', 'Собачий корм'),
(56, 'Для мелких пород индейка с рисом 15 кг', 'Корм сертифицирован и имеет Декларацию соответствия Гост Р 55453-2013.\r\nПродукция имеет ветеринарно-сопроводительные документы.', 'img/products/1657812062Dlya_melkikh_porod_indeyka_s_risom_5_kg.jpg', '2800', 'Собачий корм'),
(57, 'Рыба для щенков с 2-х месяцев 5 кг', 'Корм сертифицирован и имеет Декларацию соответствия Гост Р 55453-2013.\r\nПродукция имеет ветеринарно-сопроводительные документы.', 'img/products/1657812398123123.jpg', '1450', 'Собачий корм'),
(58, 'Рыба для щенков с 2-х месяцев 12 кг', 'Корм сертифицирован и имеет Декларацию соответствия Гост Р 55453-2013.\r\nПродукция имеет ветеринарно-сопроводительные документы.', 'img/products/1657812452123123.jpg', '3000', 'Собачий корм'),
(59, 'Индейка для активных не стерилизованных кошек 5 кг', 'Корм сертифицирован и имеет Декларацию соответствия Гост Р 55453-2013.\r\nПродукция имеет ветеринарно-сопроводительные документы.', 'img/products/1657813359pNs0xO7IxQ5A1fiEkh2K1cQZaYJgMctAtlFn4OaJ_7IW9unaQGSPdU4RH90-Cqytouv34Jx-Nrq1utCv2dr7VWax.jpg', '1300', 'Кошачий корм'),
(60, 'Рыба для стерилизованных кошек 10 кг', 'Корм сертифицирован и имеет Декларацию соответствия Гост Р 55453-2013.\r\nПродукция имеет ветеринарно-сопроводительные документы.', 'img/products/1657813396pNs0xO7IxQ5A1fiEkh2K1cQZaYJgMctAtlFn4OaJ_7IW9unaQGSPdU4RH90-Cqytouv34Jx-Nrq1utCv2dr7VWax.jpg', '2600', 'Кошачий корм');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD UNIQUE KEY `id_category` (`id_category`);

--
-- Индексы таблицы `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
