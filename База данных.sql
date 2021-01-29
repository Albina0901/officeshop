-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 16 2020 г., 12:13
-- Версия сервера: 5.7.23-24
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u1064620_officeshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Categoria`
--

CREATE TABLE `Categoria` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Categoria`
--

INSERT INTO `Categoria` (`id_categoria`, `title`) VALUES
(3, 'Бумажные изделия'),
(4, 'Канцелярия'),
(5, 'Техника'),
(6, 'Мебель'),
(7, 'Конференции'),
(8, 'Демооборудование');

-- --------------------------------------------------------

--
-- Структура таблицы `Comments`
--

CREATE TABLE `Comments` (
  `id_comment` int(10) NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `added` varchar(255) NOT NULL,
  `ozenka` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `view` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Comments`
--

INSERT INTO `Comments` (`id_comment`, `id_product`, `added`, `ozenka`, `text`, `view`) VALUES
(1, 12, 'Виктория', '5', 'Супер товар', NULL),
(2, 12, 'Кльсым', '4', 'Интересный товар', NULL),
(26, 10, 'Павел', '4', 'Нормально', NULL),
(39, 11, 'Альбина', '4', 'Класс', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Korsina`
--

CREATE TABLE `Korsina` (
  `id_korsina` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED DEFAULT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `kolichestvo` int(10) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_sotrudnic` int(10) UNSIGNED NOT NULL,
  `date_order` int(10) DEFAULT NULL,
  `price` int(50) NOT NULL,
  `tip_dostavki` varchar(255) NOT NULL,
  `tip_oplati` varchar(255) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Podcategoria`
--

CREATE TABLE `Podcategoria` (
  `id_podcategoria` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `titlee` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Podcategoria`
--

INSERT INTO `Podcategoria` (`id_podcategoria`, `id_categoria`, `titlee`) VALUES
(1, 3, 'Бумага для принтеров'),
(2, 3, 'Бумага для чертежных работ'),
(3, 3, 'Картон'),
(4, 3, 'Рулонная бумага'),
(5, 3, 'Бумажные изделия'),
(6, 4, 'Письменные принадлежности'),
(7, 4, 'Клеящие средства'),
(8, 4, 'Корректирующие средства'),
(9, 4, 'Конторское оборудование'),
(10, 5, 'Принтеры и сканеры'),
(11, 5, 'Картриджи'),
(12, 5, 'Офисная телефония'),
(13, 5, 'Калькуляторы'),
(14, 6, 'Кресла и стулья'),
(15, 6, 'Шкафы'),
(16, 6, 'Сейфы'),
(17, 6, 'Столы'),
(18, 6, 'Стеллажи'),
(19, 7, 'Папки'),
(20, 7, 'Бейджики'),
(21, 8, 'Демонстрационные системы'),
(22, 8, 'Стойки и стенды'),
(23, 8, 'Доски для письма и информации'),
(24, 8, 'Держатели и подставки');

-- --------------------------------------------------------

--
-- Структура таблицы `Postavka`
--

CREATE TABLE `Postavka` (
  `id_postavki` int(10) UNSIGNED NOT NULL,
  `id_postavshik` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `date_postavki` int(10) NOT NULL,
  `kolichestvo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Postavshik`
--

CREATE TABLE `Postavshik` (
  `id_ postavshik` int(10) UNSIGNED NOT NULL,
  `nasvanie_ postavshik` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `gorod` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Postavshik`
--

INSERT INTO `Postavshik` (`id_ postavshik`, `nasvanie_ postavshik`, `telephone`, `gorod`, `adress`) VALUES
(1, 'Конвой', '89348765555', 'Тюмень', 'Пермякова, 54');

-- --------------------------------------------------------

--
-- Структура таблицы `Prodazhi`
--

CREATE TABLE `Prodazhi` (
  `id_prodazhi` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `kolichestvo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_podcategoria` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `characteristic` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `nalichie` int(255) NOT NULL,
  `sale` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`id_product`, `id_podcategoria`, `title`, `characteristic`, `description`, `img`, `price`, `nalichie`, `sale`) VALUES
(6, 1, 'Бумага 1', 'Белая бумага', NULL, 'Бумага1.jpg', 120, 10, NULL),
(7, 1, 'Бумага 2', 'Белая бумага', NULL, 'Бумага2.jpeg', 150, 10, NULL),
(10, 2, 'Чертеж 1', 'Белая бумага', NULL, 'Чертеж1.jpg', 200, 20, 1),
(11, 2, 'Чертеж 2', 'Белая бумага', NULL, 'Чертеж2.jpg', 300, 20, 1),
(12, 20, 'ddddd', 'dddd', NULL, 'Чертеж2.jpg', 10, 10, 1),
(13, 1, 'Бумага Бумага Бумага Бумага Бумага Бумага', '', NULL, 'Чертеж2.jpg', 10, 10, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Sotrudnic`
--

CREATE TABLE `Sotrudnic` (
  `id_sotrudnic` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `dolzhnost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Sotrudnic`
--

INSERT INTO `Sotrudnic` (`id_sotrudnic`, `name`, `surname`, `patronymic`, `dolzhnost`) VALUES
(1, 'Анна', 'Пирсова', 'Ивановна', 'Оператор'),
(2, 'Александр', 'Смирнов', 'Алексеевич', 'Курьер'),
(3, 'Иван', 'Иванов', 'Сергеевич', 'Кладовщик'),
(4, 'Альбина', 'Бийболатова', 'Арсланхановна', 'Веб-разработчик');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id_user`, `name`, `surname`, `patronymic`, `email`, `password`, `telephone`, `adress`, `role`) VALUES
(1, 'Альбина', 'Бийболатова', '', 'admidddn@admin.ru', 'cf8d9ad596787c0e3406f2a49b1debca', '89026283114', NULL, NULL),
(2, 'Виктория', 'Миллер', '', 'victoria@gmail.com', '34f361bfef9cda8307a6986795ed3bc4', '305670890', NULL, NULL),
(3, 'Dima', 'D', '', 'dima@b.ty', '48941f4c4e8861036ca8bf60faaba59e', '456', NULL, NULL),
(4, 'f', 'f', '', 'd@f.c', '35cdce4f80f4cad85b7540d28068b037', '3', NULL, NULL),
(5, 'r', 'r', '', 'f@f.f', '35cdce4f80f4cad85b7540d28068b037', '3', NULL, NULL),
(6, 'd', 'd', '', 'd@d.d', '35cdce4f80f4cad85b7540d28068b037', '2', NULL, NULL),
(7, 'Кльсым', 'Кабенова', '', 'kl@k.r', 'ff1668953d8a7d192ebd6e4afb779e7e', '3453265423', NULL, NULL),
(8, 'goga', 'aa', '', 'fr@f.e', '48941f4c4e8861036ca8bf60faaba59e', '123', NULL, NULL),
(9, 'cc', 'cc', '', 'cc@c.c', '35cdce4f80f4cad85b7540d28068b037', '3', NULL, NULL),
(10, 'fff', 'fff', '', 'sddsd@dd.d', '35cdce4f80f4cad85b7540d28068b037', '332', NULL, NULL),
(11, 'ddd', 'ddd', '', 'admin@admin.ru', '35cdce4f80f4cad85b7540d28068b037', '33322', NULL, '1'),
(12, 'Альбина', 'Бийболатова', '', 'albina@gmail.ru', '828fb858a00aa3b1cc877015c9328dbd', '6838783783', NULL, NULL),
(13, 'Макс', 'Корж', '', 'max@x.c', '48941f4c4e8861036ca8bf60faaba59e', '8989898', NULL, NULL),
(14, 'Макс', 'Корж', '', 'max@m.ru', '7272c0af4b300c27abb97add3f848c55', '6736767', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Индексы таблицы `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `Korsina`
--
ALTER TABLE `Korsina`
  ADD PRIMARY KEY (`id_korsina`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sotrudnic` (`id_sotrudnic`);

--
-- Индексы таблицы `Podcategoria`
--
ALTER TABLE `Podcategoria`
  ADD PRIMARY KEY (`id_podcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Индексы таблицы `Postavka`
--
ALTER TABLE `Postavka`
  ADD PRIMARY KEY (`id_postavki`),
  ADD KEY `postavka_ibfk_1` (`id_product`),
  ADD KEY `id_postavshik` (`id_postavshik`);

--
-- Индексы таблицы `Postavshik`
--
ALTER TABLE `Postavshik`
  ADD PRIMARY KEY (`id_ postavshik`);

--
-- Индексы таблицы `Prodazhi`
--
ALTER TABLE `Prodazhi`
  ADD PRIMARY KEY (`id_prodazhi`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_podcategoria` (`id_podcategoria`);

--
-- Индексы таблицы `Sotrudnic`
--
ALTER TABLE `Sotrudnic`
  ADD PRIMARY KEY (`id_sotrudnic`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `Korsina`
--
ALTER TABLE `Korsina`
  MODIFY `id_korsina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Podcategoria`
--
ALTER TABLE `Podcategoria`
  MODIFY `id_podcategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `Postavka`
--
ALTER TABLE `Postavka`
  MODIFY `id_postavki` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Postavshik`
--
ALTER TABLE `Postavshik`
  MODIFY `id_ postavshik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Prodazhi`
--
ALTER TABLE `Prodazhi`
  MODIFY `id_prodazhi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `Sotrudnic`
--
ALTER TABLE `Sotrudnic`
  MODIFY `id_sotrudnic` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `Comments_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `Korsina`
--
ALTER TABLE `Korsina`
  ADD CONSTRAINT `korsina_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `Orders` (`id_order`),
  ADD CONSTRAINT `korsina_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_sotrudnic`) REFERENCES `Sotrudnic` (`id_sotrudnic`);

--
-- Ограничения внешнего ключа таблицы `Podcategoria`
--
ALTER TABLE `Podcategoria`
  ADD CONSTRAINT `podcategoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `Categoria` (`id_categoria`);

--
-- Ограничения внешнего ключа таблицы `Postavka`
--
ALTER TABLE `Postavka`
  ADD CONSTRAINT `postavka_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`),
  ADD CONSTRAINT `postavka_ibfk_2` FOREIGN KEY (`id_postavshik`) REFERENCES `Postavshik` (`id_ postavshik`);

--
-- Ограничения внешнего ключа таблицы `Prodazhi`
--
ALTER TABLE `Prodazhi`
  ADD CONSTRAINT `prodazhi_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_podcategoria`) REFERENCES `Podcategoria` (`id_podcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
