-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 02 2014 г., 20:24
-- Версия сервера: 5.1.50-community
-- Версия PHP: 5.3.9-ZS5.6.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `about` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `about`) VALUES
(1, 'Женская обувь', 0, 'Женская обувь оптом! Лучшее предложение для вашего бизнеса!\n\nЖенская обувь отличается невиданным разнообразием: яркие балетки и элегантные туфли, удобные лоферы и экстравагантные босоножки, легкие сандалии и надежные мокасины станут прекрасным дополнением любого женского образа.\n\nЖенщины всегда с особым трепетом относятся к выбору обуви, ведь каждая новая пара туфель – это маленький праздник! И чтобы выбор обуви приносил только позитивные эмоции Вашим покупательницам, заказывая женскую обувь оптом, позаботьтесь о том, чтобы ассортимент был как можно более разнообразным, а модели как можно точнее соответствовали предпочтениям Ваших клиентов и основным трендам сезона.\n\nЭтим летом большим спросом пользуются легкие сандалии и открытые босоножки, которые прекрасно  подойдут для повседневной носки, а модели дополненные украшениями, бусинами и стразами станут прекрасным завершением вечернего образа.\n\nПопулярностью также пользуются балетки на плоской подошве или небольшом каблучке, а также удобные мокасины и лоферы, которые прекрасно сочетаются с шортами, брюками и джинсами, и станут незаменимым предметом гардероба для активных жительниц больших и маленьких городов.\n\nЭлегантные туфли на каблуке и танкетке никогда не должны исчезать с полок Ваших магазинов, поскольку именно они позволяют любой девушке чувствовать себя на высоте, и соответственно пользуются спросом круглый год. \n\nУже несколько сезонов подряд в гардеробе настоящих модниц присутствуют летние сапоги. Производители обуви предлагают огромный ассортимент сапог для жаркого времени года. При этом  очень важно, чтобы такая обувь была выполнена из легких материалов, таких как лен, хлопок, деним, тонкая перфорированная кожа и замша. Летние сапожки станут отличной альтернативой традиционной летней обуви, ведь они прекрасно сочетаются с шортами, летними юбками, легкими сарафанами и платьями.\n\nПри выборе женской обуви в оптовом интернет магазине МНОГО ОБУВИ обратите внимание на разнообразие материалов. У нас Вы найдете модели, выполненные из натуральной и искусственной кожи, замши и нубука, гладкой и лаковой кожи. Большой популярностью летом пользуются модели из текстиля и перфорированной кожи, которые обеспечивают больший комфорт и легкость, поскольку способны регулировать воздухообмен.\n\nЖенская обувь оптом, предложенная нашим интернет магазином МНОГО ОБУВИ, - это самые актуальные и модные модели. Воспользовавшись удобным поиском и системой фильтров Вы сможете за считанные минуты выбрать интересующие Вас позиции согласно основным критериям: цвету, сезону, материалу и цене.\n\nОформленный Вами заказ поступит в обработку менеджеру интернет магазина МНОГО ОБУВИ: мы обязательно свяжемся с Вами для подтверждения наличия, способов оплаты и условий доставки. Доставка осуществляется по всей России.\n'),
(2, 'Мужская обувь', 0, 'Мужская обувь оптом.\n\nДля любого мужчины важно идти по жизни широкими шагами и уверенно стоять на ногах, для этого, прежде всего, стоит позаботиться о том, чтобы ноги были обуты в хорошие, качественные туфли.\n\nПредпочтения Ваших покупателей могут быть весьма разнообразны в зависимости от возраста и стиля жизни. Но, несомненно, большинство мужчин, прежде всего, предпочитают комфорт, который достигается формой колодки и качеством материалов. Материалом для изготовления мужской обуви чаще всего служит натуральная кожа черного или темного цвета, что делает их универсальными, простыми в уходе и износостойкими. При выборе классической обуви отдавайте предпочтение натуральным материалам.\n\nВ период летнего сезона большей популярностью пользуются легкие мокасины, сандалии и спортивные туфли, при этом производители предлагают широчайшую цветовую палитру такой обуви. Такие модели в основном выполнены из текстиля, перфорированной кожи, замши. Синтетические волокна в составе таких материалов обеспечивают их прочность и долговечность.\n\nПри выборе демисезонной и зимней мужской обуви оптом особое внимание стоит обратить на качество подошвы: желательно выбирать модели с прошитой нескользящей подошвой, выполненной из натуральных материалов. Такая обувь будет пользоваться наибольшим спросом.\n\nПо своему разнообразию фасоны мужской обуви не отстают от женских. Среди наиболее популярных моделей летнего сезона следует выделить мужские мокасины – всегда актуальные, модные и к тому же очень комфортные. Они по праву считаются наиболее универсальными, так как сочетаются практически с любой одеждой в гардеробе, и при этом их можно надеть как на прогулку, так и в офис.\n\nКлассические мужские туфли - это неотъемлемая часть гардероба сильной половины во все времена, они никогда не выходят из моды. В оптовом интернет магазине МНОГО ОБУВИ Вы сможете найти не только классические модели мужской обуви, но и интересные варианты дополненные шнуровками, декоративными пряжками, перфорацией, отстрочкой, что внесет разнообразие в мужской ассортимент Вашего магазина.\n\nВ интернет магазине МНОГО ОБУВИ представлена мужская обувь оптом в широком ассортименте. Вся обувь стильная и удобная, в многообразии моделей сориентироваться  поможет удобная система поиска и фильтров. Выбирайте интересующие Вас варианты, добавляете в корзину и оформляйте заказ, а наши менеджеры обязательно свяжутся с Вами для подтверждения заказа, уточнения способов оплаты и условий доставки.\n'),
(3, 'Детская обувь', 0, 'Детская обувь оптом. Детские резиновые сапоги оптом и многое другое.\n\nЛетная детская обувь отличается от моделей любого другого сезона. Яркий и привлекательный дизайн, дышащие, легкие и мягкие материалы, удобство и практичность, прекрасная сочетаемость с летним гардеробом – все это как нельзя точно отражает детское летнее радостное настроение. Разнообразие видов обуви, представленных в нашем оптовом интернет магазине, просто поражает: от легких сандалий и босоножек, до кроссовок и резиновых сапог для дождливой погоды.\n\nПри заказе детской обуви оптом стоит учесть, на что, прежде всего, ориентируются Ваши клиенты при совершении покупки.\n\nПри выборе детской обуви стоит помнить, что детская обувь должна быть не только красивой, но и максимально комфортной, что во многом зависит от формы колодки. Большинство детских моделей, представленных в оптовом интернет магазине MNOGO-OBUVI.ru имеют удобную стельку с супинатором и небольшой каблучок у моделей для девочек.\n\nНемаловажным является и качество материалов: наиболее комфортными для носки в летний период являются изделия из текстиля и перфорированной кожи, которые обеспечивают высокий уровень вентиляции в жаркую погоду, а использованные в составе изделий синтетические волокна обеспечат долгий срок службы изделий. Детская обувь оптом, представленная в нашем интернет магазине, прошла испытания технического регламента и сертификацию.  \n\nИ конечно же, при выборе Вас порадует разнообразие фасонов и расцветок:\n\n- комфортные и надежные сандалии и босоножки, пожалуй, самая подходящая обувь для детей в летний период. Они прекрасно сочетаются с любой летней одеждой, а привлекательный дизайн и яркие летние расцветки, безусловно, порадуют маленьких модниц.\n\n- более закрытые модели туфель отлично подойдут для межсезонья и в качестве сменной обуви. Модели для девочек отличаются яркой цветовой палитрой и разнообразием декоративных элементов: бантики, бабочки, бусины, стразы прекрасно подойдут для торжественных мероприятий и создадут праздничное настроение.\n\n- современные мокасины и лоферы представляют собой уменьшенные копии популярных женских моделей и станут мечтой любой модницы. Плоская подошва и особенности конструкции обеспечивают максимально комфортное ношение, прекрасно подходят для повседневной носки и отлично сочетаются как с джинсами и брючками, а так же юбками и шортами.\n\n- детские резиновые сапоги незаменимы для детей в межсезонье и дождливую летнюю погоду. Такая обувь препятствует проникновению влаги и позволит малышу чувствовать себя свободно, а родителям спокойно в любую погоду.\n\nВ оптовом интернет магазине MNOGO-OBUVI.ru Вы можете купить детскую обувь оптом по привлекательно низким ценам.\n\nУ нас очень просто сделать заказ:  нужно добавить интересующие Вас модели в корзину и при оформлении заказа заполнить стандартную форму покупателя. Доставка обуви осуществляется по всей России.\n'),
(4, 'Спортивная обувь', 0, ''),
(5, 'Балетки', 1, 'Балетки — классическая модель женских туфель с закрытым носком на плоской подошве или с маленьким устойчивым каблуком. Балетки получили своё название за сходство с профессиональной обувью в балете.\n\nБалетки были созданы Сальваторе Капецио в конце XIX века в Нью-Йорке. В 1949 году балетки попали на обложку модного журнала «Vogue» и обрели всемирную популярность благодаря киноэкрану, где в них появлялись Брижит Бардо и Одри Хепбёрн.\n'),
(6, 'Босоножки', 1, ''),
(7, 'Ботильоны', 1, ''),
(8, 'Ботинки Ж', 1, ''),
(9, 'Ботфорты', 1, ''),
(10, 'Валенки Ж', 1, ''),
(11, 'Кроссовки Ж', 1, ''),
(12, 'Лоферы', 1, ''),
(13, 'Мокасины', 1, ''),
(14, 'Сабо', 1, ''),
(15, 'Сандали', 1, ''),
(16, 'Туфли', 1, ''),
(17, 'Угги', 1, ''),
(18, 'Сандали М', 2, ''),
(19, 'Мокасины М', 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'Черный'),
(2, 'Серый');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_goods` int(10) NOT NULL,
  `comments` text NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_goods`, `comments`, `user_id`) VALUES
(1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(3, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(4, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(5, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(6, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(7, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(10) NOT NULL,
  `cost` int(10) NOT NULL,
  `specification` text NOT NULL,
  `time` int(20) NOT NULL,
  `url` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `costall` int(10) NOT NULL,
  `material` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `complect` int(11) NOT NULL,
  `parent_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `type`, `cost`, `specification`, `time`, `url`, `color`, `costall`, `material`, `season`, `article`, `complect`, `parent_id`) VALUES
(1, 'Meitesi', 5, 350, 'Балеки Meitesi из искусственной кожи.', 1401295439, 'http://mnogo-obuvi.ru/image/cache/data/shoes/photo-4/IMG_7182-800x800.JPG', '', 10, '', 'Лето', '', 0, 1),
(2, 'Meitesi', 5, 350, 'Балеки Meitesi из искусственной кожи.', 1401381013, 'http://mnogo-obuvi.ru/image/cache/data/shoes/photo-4-1/IMG_7385-800x800.JPG', 'Черный', 2800, 'Иск. кожа', 'Лето', '6015-5_чер', 8, 1),
(3, 'Meitesi', 5, 350, 'Балеки Meitesi из искусственной кожи.', 1401381381, 'http://mnogo-obuvi.ru/image/cache/data/shoes/photo-4/IMG_7128-800x800.JPG', 'Серый', 2800, 'Иск. кожа', 'Лето', '6008-9-сер', 8, 1),
(4, 'AIWEIDE', 19, 190, 'Мокасины AIWEIDE текстильные.\r\n<p>Детали: эластичная подошва, удобно сидят на ноге, очень мягкие.\r\n', 1401443763, 'http://mnogo-obuvi.ru/image/cache/data/shoes/photo%2011%20nashi%20tapki/IMG_0915-800x800.JPG', 'Серый', 1520, 'Текстиль', 'Лето', 'B7-265_ser', 8, 2),
(5, 'Meitesi', 5, 350, 'Балеки Meitesi из искусственной кожи.', 1401444958, 'http://mnogo-obuvi.ru/image/cache/data/shoes/photo-4-1/IMG_7385-800x800.JPG', 'Черный', 2800, 'Искуственная кожа', 'Лето', '6015-5_чер', 8, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `material`
--

INSERT INTO `material` (`id`, `name`) VALUES
(1, 'Искуственная кожа'),
(2, 'Текстиль');

-- --------------------------------------------------------

--
-- Структура таблицы `ordered_goods`
--

CREATE TABLE IF NOT EXISTS `ordered_goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `id_goods` int(10) NOT NULL,
  `count` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `ordered_goods`
--

INSERT INTO `ordered_goods` (`id`, `key`, `id_goods`, `count`) VALUES
(1, 'ec3c4fb894db5b2b0b17a2f8cf66d41e', 1, 1),
(2, 'ec3c4fb894db5b2b0b17a2f8cf66d41e', 3, 1),
(3, 'ec3c4fb894db5b2b0b17a2f8cf66d41e', 2, 6),
(4, '0ce4082dc6bd9ab8355644a332f3a898', 2, 1),
(5, '0ce4082dc6bd9ab8355644a332f3a898', 3, 1),
(6, '0ce4082dc6bd9ab8355644a332f3a898', 1, 1),
(7, '0ce4082dc6bd9ab8355644a332f3a898', 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key_orders` varchar(255) NOT NULL,
  `id_users` int(10) NOT NULL,
  `time` varchar(255) NOT NULL,
  `new_orders` int(1) NOT NULL,
  `cancel` int(1) NOT NULL,
  `delete` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `key_orders`, `id_users`, `time`, `new_orders`, `cancel`, `delete`) VALUES
(1, 'ec3c4fb894db5b2b0b17a2f8cf66d41e', 1, '1401575454', 1, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE IF NOT EXISTS `season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`id`, `name`) VALUES
(1, 'Зима'),
(2, 'Весна'),
(3, 'Лето'),
(4, 'Осень');

-- --------------------------------------------------------

--
-- Структура таблицы `trademark`
--

CREATE TABLE IF NOT EXISTS `trademark` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `trademark`
--

INSERT INTO `trademark` (`id`, `name`) VALUES
(1, 'JARRISE'),
(2, 'AIWEIDE'),
(3, 'Meitesi');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `level`, `telephone`) VALUES
(1, 'Максим', 'Сирик', 'maxim.sirik@gmail.com', '5f7a38fb9d8669813af7b47c5c2f7300', 1, '+380667277779'),
(2, 'mri_', 'Сирик', 'm1axim.sirik@gmail.com', '5f7a38fb9d8669813af7b47c5c2f7300', 0, '+380667277779'),
(4, 'Федя', 'Торба', 'ivit@gmail.com', '5f7a38fb9d8669813af7b47c5c2f7300', 0, '+380667277779');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
