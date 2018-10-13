-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 11 2015 г., 05:03
-- Версия сервера: 5.6.27
-- Версия PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `garaj`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addres`
--

CREATE TABLE `addres` (
  `id_add` int(11) NOT NULL,
  `id_garaj` int(11) NOT NULL,
  `addres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `addres`
--

INSERT INTO `addres` (`id_add`, `id_garaj`, `addres`) VALUES
(1, 1, 'улица 8 Марта, 46'),
(2, 2, 'улица Амундсена, 65'),
(3, 3, 'Ясная улица, 2'),
(4, 4, 'проспект Ленина, 25'),
(5, 5, 'улица Репина, 94'),
(6, 6, 'улица Героев России, 2'),
(7, 7, 'улица Сулимова, 50'),
(8, 8, 'Сибирский тракт, 2'),
(9, 9, 'улица Сакко и Ванцетти, 74'),
(10, 10, 'проспект Космонавтов, 102А'),
(11, 11, 'г.Екатеринбург, проспект Ленина, 24А');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `UserID` int(25) NOT NULL,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`UserID`, `Username`, `Password`, `EmailAddress`) VALUES
(1, 'admin', 'admin', 'kekc_andrey@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `cena`
--

CREATE TABLE `cena` (
  `id_stoimost` int(11) NOT NULL,
  `cena_za_chas` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cena`
--

INSERT INTO `cena` (`id_stoimost`, `cena_za_chas`) VALUES
(1, '100.00'),
(2, '150.00'),
(3, '200.00'),
(4, '250.00'),
(5, '300.00'),
(6, '400.00'),
(7, '450.00'),
(8, '500.00'),
(9, '700.00'),
(10, '1000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `garaj`
--

CREATE TABLE `garaj` (
  `id_garaj` int(11) NOT NULL,
  `id_tip_garaja` int(11) NOT NULL,
  `name_garaj` varchar(50) NOT NULL,
  `id_add` int(11) NOT NULL,
  `id_sotrud` int(11) NOT NULL,
  `id_cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `garaj`
--

INSERT INTO `garaj` (`id_garaj`, `id_tip_garaja`, `name_garaj`, `id_add`, `id_sotrud`, `id_cena`) VALUES
(1, 1, 'Гараж Бокс', 2, 3, 1),
(2, 2, 'Парковка Малевича', 1, 4, 2),
(3, 3, 'ПаркингСан', 3, 5, 3),
(4, 4, 'Паркинг Хаос', 4, 6, 4),
(5, 5, 'Гринпаркинг', 5, 7, 5),
(6, 6, 'РадугаПаркинг', 6, 8, 6),
(7, 7, 'МегаПаркинг', 7, 10, 7),
(8, 8, 'СельхозПаркинг', 8, 11, 8),
(9, 9, 'ГалилеоПаркинг', 9, 9, 9),
(10, 10, 'ГаражКласс', 10, 12, 10),
(11, 11, 'Главный офис', 11, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `mesta`
--

CREATE TABLE `mesta` (
  `id_mesta` int(11) NOT NULL,
  `id_garaj` int(11) NOT NULL,
  `kolvo_mest` int(11) NOT NULL,
  `kolvo_svobod_mest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mesta`
--

INSERT INTO `mesta` (`id_mesta`, `id_garaj`, `kolvo_mest`, `kolvo_svobod_mest`) VALUES
(1, 1, 5, 3),
(2, 2, 15, 10),
(3, 3, 53, 11),
(4, 4, 120, 54),
(5, 5, 120, 67),
(6, 6, 234, 105),
(7, 7, 64, 13),
(8, 8, 350, 85),
(9, 9, 2500, 800),
(10, 10, 180, 56);

-- --------------------------------------------------------

--
-- Структура таблицы `schet`
--

CREATE TABLE `schet` (
  `id_scheta` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_garaj` int(11) NOT NULL,
  `id_cena` int(11) NOT NULL,
  `id_zapis` int(11) NOT NULL,
  `obshay_cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schet`
--

INSERT INTO `schet` (`id_scheta`, `id_klienta`, `id_garaj`, `id_cena`, `id_zapis`, `obshay_cena`) VALUES
(1, 1, 1, 1, 1, '500.00'),
(2, 2, 2, 2, 2, '1500.00'),
(3, 3, 3, 3, 3, '1600.00'),
(4, 4, 4, 4, 4, '1000.00'),
(5, 5, 5, 5, 5, '2100.00'),
(6, 6, 6, 6, 6, '400.00'),
(7, 7, 7, 7, 7, '2700.00'),
(8, 8, 8, 8, 8, '12000.00'),
(9, 9, 9, 9, 9, '2800.00'),
(10, 10, 10, 10, 10, '12000.00'),
(11, 3, 4, 4, 11, '750.00'),
(12, 5, 8, 8, 12, '4000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `sotrudniki`
--

CREATE TABLE `sotrudniki` (
  `id_sotrud` int(11) NOT NULL,
  `FIO` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Doljnost` varchar(50) NOT NULL,
  `Addres` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sotrudniki`
--

INSERT INTO `sotrudniki` (`id_sotrud`, `FIO`, `Doljnost`, `Addres`, `Phone`) VALUES
(1, 'Ушаков Андрей Павлович', 'Директор', 'г.Екатеринбург, ул.Краснолесья 25-15', '+79678517414'),
(2, 'Ганенко Анастасия Сергеевна', 'Секретарь', 'г.Екатеринбург, ул.Краснолесья 25-16', '+79655466515'),
(3, 'Пирожков Павел Петрович', 'сторож', 'г.Екатеринбург, ул.Армейская 45', '+79685748595'),
(4, 'Емельянов Сергей Борисович', 'сторож', 'г.Екатеринбург, ул.Володарского 85-78', '+79685896352'),
(5, 'Арматурин Кирилл Васильевич', 'сторож', 'г.Екатеринбург, ул.Армейская 98', '+79874563258'),
(6, 'Иванов Дмитрий Павлович', 'сторож', 'г.Екатеринбург, ул.Савельева 15-15', '+79658965412'),
(7, 'Мартышкин Антон Кириллович', 'сторож', 'г.Екатеринбург, ул.Северская 78-52', '+79875412657'),
(8, 'Матыльков Федор Евгеньевич', 'сторож', 'г.Екатеринбург, ул.Сафронова 96-65', '+79865214785'),
(9, 'Теткин Денис Федорович', 'сторож', 'г.Екатеринбург, ул.Тветрская 46-69', '+79875236458'),
(10, 'Тараканов Даниил Алексеевич', 'сторож', 'г.Екатеринбург, ул.Арматурина 245-169', '+79632587412'),
(11, 'Нагаров Эдуард Алексеевич', 'сторож', 'г.Екатеринбург, ул.Малышева 15-85', '+79512357896'),
(12, 'Гаражов Федор Игоревич', 'сторож', 'г.Екатеринбург, ул.Окружная 1-8', '+79512357894'),
(13, 'Федунько Михаил Олегович', 'Разнорабочий', 'г.Екатеринбург, ул.8 марта 145-78', '+79159637415');

-- --------------------------------------------------------

--
-- Структура таблицы `tip_garaja`
--

CREATE TABLE `tip_garaja` (
  `id_tip_garaj` int(11) NOT NULL,
  `tip_garaja` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tip_garaja`
--

INSERT INTO `tip_garaja` (`id_tip_garaj`, `tip_garaja`) VALUES
(1, 'одноэтажный, неотапливаемый'),
(2, 'одноэтажный, отапливаемый'),
(3, 'одноэтажный, открытый'),
(4, 'двухэтажный, неотапливаемый с рамповым подъемом'),
(5, 'двухэтажный, отапливаемый с рамповым подъемом'),
(6, 'двухэтажный, отапливаемый с автоматизированным подъемом'),
(7, 'подземный, неотапливаемый, боксовый'),
(8, 'трехэтажный, отапливаемый, боксовый с механизированным подъемом'),
(9, 'семиэтажный, комбинированный с автоматизированным подъемом'),
(10, 'двухэтажный, подземный, отапливаемый'),
(11, 'Офис');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `UserID` int(25) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`UserID`, `Surname`, `Name`, `Lastname`, `addres`, `phone`, `Username`, `Password`, `Email`) VALUES
(1, 'Петренко ', 'Федор', 'Ильич', 'ул. Ленина 18', '89678596857', '1111', 'b59c67bf196a4758191e42f76670ceba', 'kotru@mail.ru'),
(2, 'Групповых', 'Василий ', 'Степанович', 'ул. Свердлова 14-56', '89635896753', 'jakov', '81dc9bdb52d04dc20036dbd8313ed055', 'roiuy@gmail.com'),
(3, 'Гудияров', 'Михаил', 'Хабибулович', 'ул. Вершинина 90-14', '89785896259', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'lexus@yandex.ru'),
(4, 'Маратов ', 'Григорий', 'Викторович', 'ул. Розы Люксембург 44-14', '89688596578', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'rota@mail.ru'),
(5, 'Паленых ', 'Георгий', 'Геннадьевич', 'ул. Антропова 87', '896785745659', 'rix', 'b59c67bf196a4758191e42f76670ceba', 'losy@gmail.com'),
(6, 'Жарких', 'Ольга', 'Павловна', 'ул.Мичурина 18', '87778596851', 'bochkov', '2be9bd7a3434f7038ca27d1918de58bd', 'kosty@yandex.com'),
(7, 'Абажоев', 'Николай ', 'Олеговиич', 'ул. Салтыкова 18-54', '89512589635', '999', 'b706835de79a2b4e80506f582af3676a', 'gonxha@yandex.com'),
(8, 'Хлебалов', 'Антон', 'Львович', 'ул. Абрамович 54', '87965896753', '456', '250cf8b51c773f3f8dc8b4be867a9a02', 'gore@mail.ru'),
(9, 'Чертилов', 'Олег', 'Васильевич', 'ул.Ленина 15-15', '89514569852', 'plyuha', 'd1fe173d08e959397adf34b1d77e88d7', 'gonza@mail.ru'),
(10, 'Клюева', 'Татьяна ', 'Валерьевна', 'ул.Зюзикова 18-88', '97894561236', 'torro', '250cf8b51c773f3f8dc8b4be867a9a02', 'torro@gmail.com'),
(11, 'Федюкова', 'Тамара', 'Олеговна', 'ул.8 марта 28-65', '891233578916', 'valera', '202cb962ac59075b964b07152d234b70', 'Gena@mail.ru'),
(12, 'Офигительных', 'Николай', 'Борисович', 'ул.7 морей 98', '85621485951', 'true', '827ccb0eea8a706c4c34a16891f84e7b', 'true_gold@gmail.com'),
(13, 'Ушаков', 'Андрей', 'Павлович', 'Зеленый Бор 2, 28-4', '89678547859', 'andreyka', '21232f297a57a5a743894a0e4a801fc3', 'kekc_andrey@mail.ru'),
(14, '123', '123', '123', '13', '13', '123', '202cb962ac59075b964b07152d234b70', '123'),
(15, 'Федотов', 'Некифор ', 'Львович', 'Крылова 27-65', '+79685896321', 'nik', '202cb962ac59075b964b07152d234b70', 'nekif@gmail.com'),
(16, '12', '12', '12', '12', '12', '155', '2a79ea27c279e471f4d180b08d62b00a', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `users2`
--

CREATE TABLE `users2` (
  `Id` int(11) NOT NULL,
  `Family` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Otchestvo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users2`
--

INSERT INTO `users2` (`Id`, `Family`, `Name`, `Otchestvo`) VALUES
(1, 'Ushakov', 'Andrey', 'Pavlovich'),
(2, 'Ganenko', 'Anastasya', 'Sergeevna'),
(3, 'Djigitov ', 'Mafusoil', 'Baranovich');

-- --------------------------------------------------------

--
-- Структура таблицы `users3`
--

CREATE TABLE `users3` (
  `id` int(11) NOT NULL,
  `Marka` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Gos.namber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users3`
--

INSERT INTO `users3` (`id`, `Marka`, `Model`, `Gos.namber`) VALUES
(1, 'Toyota', 'Celica', 'c513pm'),
(2, 'Lada', '2114', 'x224pm'),
(3, 'Chevrolet', 'Lanos', 'o954ka');

-- --------------------------------------------------------

--
-- Структура таблицы `zapis`
--

CREATE TABLE `zapis` (
  `id_zap` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `garaj` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zapis`
--

INSERT INTO `zapis` (`id_zap`, `name`, `garaj`, `datetime`, `time`) VALUES
(1, 'nik', 'РадугаПаркинг', '2015-09-02 10:00:00', 5),
(2, 'andrey', 'МегаПаркинг', '2015-09-04 19:00:00', 10),
(3, 'andreyka', 'ГалилеоПаркинг', '2015-09-06 22:00:00', 8),
(4, 'nik', 'ГалилеоПаркинг', '2015-09-08 08:00:00', 2),
(5, '123', 'Парковка Малевича', '2015-09-09 10:30:00', 7),
(6, 'nik', 'РадугаПаркинг', '2015-09-12 13:00:00', 1),
(7, 'reed', 'Парковка Малевича', '2015-09-15 13:30:00', 6),
(8, 'name', 'ПаркингСан', '2015-09-17 07:30:00', 24),
(9, 'andrey', 'Парковка Малевича', '2015-09-17 10:10:00', 4),
(10, '123', 'Парковка Малевича', '2015-09-20 00:00:00', 12),
(11, 'nik', 'РадугаПаркинг', '2015-09-22 16:30:00', 3),
(13, 'nik', 'РадугаПаркинг', '2010-10-10 15:20:00', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `zarplata`
--

CREATE TABLE `zarplata` (
  `id_zarp` int(11) NOT NULL,
  `id_sotrud` int(11) NOT NULL,
  `oklad` decimal(10,2) NOT NULL,
  `premia` decimal(10,2) NOT NULL,
  `zarplata` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zarplata`
--

INSERT INTO `zarplata` (`id_zarp`, `id_sotrud`, `oklad`, `premia`, `zarplata`) VALUES
(1, 1, '80550.00', '15070.00', '95620.00'),
(2, 2, '55300.00', '10800.00', '66100.00'),
(3, 3, '15000.00', '3000.00', '18000.00'),
(4, 4, '15000.00', '3000.00', '18000.00'),
(5, 5, '15000.00', '3000.00', '18000.00'),
(6, 6, '15000.00', '3000.00', '18000.00'),
(7, 7, '15000.00', '3000.00', '18000.00'),
(8, 8, '15000.00', '3000.00', '18000.00'),
(9, 9, '15000.00', '3000.00', '18000.00'),
(10, 10, '15000.00', '3000.00', '18000.00'),
(11, 11, '15000.00', '3000.00', '18000.00'),
(12, 12, '15000.00', '3000.00', '18000.00'),
(13, 13, '23000.00', '6050.00', '29050.00');

-- --------------------------------------------------------

--
-- Структура таблицы `клиенты`
--

CREATE TABLE `клиенты` (
  `код_клиента` int(11) NOT NULL,
  `ФИО` varchar(100) CHARACTER SET utf8 NOT NULL,
  `адрес_клиента` varchar(100) CHARACTER SET utf8 NOT NULL,
  `телефон` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `клиенты`
--

INSERT INTO `клиенты` (`код_клиента`, `ФИО`, `адрес_клиента`, `телефон`) VALUES
(1, 'Грачев Николай Никифорович', 'г.Екатеринбург, проспект Ленина, 63-3', '+7968574515'),
(2, 'Петрова Наталья Павловна', 'г.Екатеринбург, ул.Амудсена 45-45', '+79544885754'),
(3, 'Гульчитай Никита Петрович', 'г.Екатеринбург, 8 марта 129-19', '+79658578545'),
(4, 'Колпакова Василина Ивановна', 'г.Екатеринбург, ул.Декабристов 65-56', '+79325689674'),
(5, 'Ниагарова Анна Витальевна', 'г.Екатеринбург, ул.Карла Либрихта 295-23', '+79857485962'),
(6, 'Абдулин Владислав Валерьевич', 'г.Пермь, ул.Степана Разина 13-96', '+79868475952'),
(7, 'Иртуганов Валерий Львович', 'г.Екатеринбург, ул. Малышева 48-15', '+79847589645'),
(8, 'Дружинин Антон Павлович', 'г.Полевской, Зеленый Бор-2, 25-16', '+7967851746'),
(9, 'Глинская Дарья Ивановна', 'г.Екатеринбург, ул.Максима Горького 86-54', '+79852369874'),
(10, 'Горбунов Константин Геннадьевич', 'г.Екатеринбург, ул.Вершинина 119-23', '+89632587414');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addres`
--
ALTER TABLE `addres`
  ADD PRIMARY KEY (`id_add`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserID`);

--
-- Индексы таблицы `cena`
--
ALTER TABLE `cena`
  ADD PRIMARY KEY (`id_stoimost`);

--
-- Индексы таблицы `garaj`
--
ALTER TABLE `garaj`
  ADD PRIMARY KEY (`id_garaj`);

--
-- Индексы таблицы `mesta`
--
ALTER TABLE `mesta`
  ADD PRIMARY KEY (`id_mesta`);

--
-- Индексы таблицы `schet`
--
ALTER TABLE `schet`
  ADD PRIMARY KEY (`id_scheta`);

--
-- Индексы таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  ADD PRIMARY KEY (`id_sotrud`);

--
-- Индексы таблицы `tip_garaja`
--
ALTER TABLE `tip_garaja`
  ADD PRIMARY KEY (`id_tip_garaj`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Индексы таблицы `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `users3`
--
ALTER TABLE `users3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zapis`
--
ALTER TABLE `zapis`
  ADD PRIMARY KEY (`id_zap`);

--
-- Индексы таблицы `zarplata`
--
ALTER TABLE `zarplata`
  ADD PRIMARY KEY (`id_zarp`);

--
-- Индексы таблицы `клиенты`
--
ALTER TABLE `клиенты`
  ADD PRIMARY KEY (`код_клиента`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addres`
--
ALTER TABLE `addres`
  MODIFY `id_add` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `UserID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `cena`
--
ALTER TABLE `cena`
  MODIFY `id_stoimost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `garaj`
--
ALTER TABLE `garaj`
  MODIFY `id_garaj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `mesta`
--
ALTER TABLE `mesta`
  MODIFY `id_mesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `schet`
--
ALTER TABLE `schet`
  MODIFY `id_scheta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  MODIFY `id_sotrud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `tip_garaja`
--
ALTER TABLE `tip_garaja`
  MODIFY `id_tip_garaj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `users2`
--
ALTER TABLE `users2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users3`
--
ALTER TABLE `users3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `zapis`
--
ALTER TABLE `zapis`
  MODIFY `id_zap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `zarplata`
--
ALTER TABLE `zarplata`
  MODIFY `id_zarp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `клиенты`
--
ALTER TABLE `клиенты`
  MODIFY `код_клиента` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
