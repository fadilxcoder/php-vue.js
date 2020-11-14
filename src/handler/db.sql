-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contacts` (`id`, `name`, `email`, `city`, `country`, `job`) VALUES
(1,	'fadilxcoder',	'fadil@xcoder.developer',	'MRTS',	'AZB',	'WD'),
(2,	'fadilxcoder',	'fadil@xcoder.developer',	'MRTS',	'ZXA',	'CSA'),
(6,	'john doe',	'john-doe@gmail.com',	'Texas',	'USA',	'FrontEnd Dev');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(70) NOT NULL,
  `region_name` varchar(80) NOT NULL,
  `flag` varchar(100) NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `country_name` (`country_name`),
  KEY `region_name` (`region_name`),
  CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`country_name`) REFERENCES `wines` (`country`),
  CONSTRAINT `countries_ibfk_2` FOREIGN KEY (`region_name`) REFERENCES `wines` (`region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` int(1) NOT NULL DEFAULT 0,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`user_id`, `admin`, `email`, `password`) VALUES
(1,	1,	'jul.az@hotmail.com',	'test');

DROP TABLE IF EXISTS `wines`;
CREATE TABLE `wines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `grapes` varchar(100) NOT NULL,
  `country` varchar(70) NOT NULL,
  `region` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `author` int(100) NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  KEY `country` (`country`),
  KEY `region` (`region`),
  CONSTRAINT `wines_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `wines` (`id`, `name`, `year`, `grapes`, `country`, `region`, `description`, `picture`, `author`, `publish_date`) VALUES
(15,	'CHATEAU SAINT COSME',	2009,	'Syrah',	'France',	'Southern Rhone / Gigondas',	'The aromas of fruit and spice give one a hint of the light drinkability of this lovely wine, which makes an excellent complement to fish dishes.\r\n',	'5f5f56e8dc565_saint_cosme.png',	1,	'2020-09-14 11:41:28'),
(16,	'LAN RIOJA CRIANZA',	2006,	'Tempranillo',	'Espagne',	'Riojo',	'A resurgence of interest in boutique vineyards has opened the door for this excellent foray into the dessert wine market. Light and bouncy, with a hint of black truffle, this wine will not fail to tickle the taste buds.\r\n',	'5f5f571c39dd8_lan_rioja.png',	1,	'2020-09-14 11:42:20'),
(17,	'MARGERUM SYBARITE',	2010,	'Sauvignon',	'USA',	'California Central Cosat',	'The cache of a fine Cabernet in ones wine cellar can now be replaced with a childishly playful wine bubbling over with tempting tastes of\r\nblack cherry and licorice. This is a taste sure to transport you back in time.',	'5f5f57438d480_margerum.png',	1,	'2020-09-14 11:42:59'),
(18,	'OWEN ROE',	2009,	'Syrah',	'USA',	'Washington',	'A one-two punch of black pepper and jalapeno will send your senses reeling, as the orange essence snaps you back to reality. Don\'t miss\r\nthis award-winning taste sensation.\r\n',	'5f5f57674a7ac_ex_umbris.png',	1,	'2020-09-14 11:43:35'),
(19,	'REX HILL',	2009,	'Pinot Noir',	'USA',	'Oregon',	'One cannot doubt that this will be the wine served at the Hollywood award shows, because it has undeniable star power. Be the first to catch\r\nthe debut that everyone will be talking about tomorrow.\r\n',	'5f5f57fe7aab3_rex_hill.png',	1,	'2020-09-14 11:46:06'),
(20,	'VITICCIO CLASSICO',	2007,	'Merlot',	'Italie',	'Tuscany',	'Though soft and rounded in texture, the body of this wine is full and rich and oh-so-appealing. This delivery is even more impressive when one takes note of the tender tannins that leave the taste buds wholly satisfied.\r\n',	'5f5f583627b86_viticcio.png',	1,	'2020-09-14 11:47:02'),
(21,	'CHATEAU LE DOYENNE',	2005,	'Merlot',	'France',	'Bordeaux',	'Though dense and chewy, this wine does not overpower with its finely balanced depth and structure. It is a truly luxurious experience for the\r\nsenses.',	'5f5f58970c0c4_le_doyenne.png',	1,	'2020-09-14 11:48:39'),
(22,	'DOMAINE DU BOUSCAT',	2009,	'Merlot',	'France',	'Bordeaux',	'The light golden color of this wine belies the bright flavor it holds. A true summer wine, it begs for a picnic lunch in a sun-soaked vineyard.\r\n',	'5f5f58b534a31_bouscat.png',	1,	'2020-09-14 11:49:09'),
(23,	'BLOCK NINE',	2009,	'Pinot Noir',	'USA',	'California',	'With hints of ginger and spice, this wine makes an excellent complement to light appetizer and dessert fare for a holiday gathering.\r\n',	'5f5f58e9ebad2_block_nine.png',	1,	'2020-09-14 11:50:01'),
(24,	'DOMAINE SERENE',	2007,	'Pinot Noir',	'USA',	'Oregon',	'Though subtle in its complexities, this wine is sure to please a wide range of enthusiasts. Notes of pomegranate will delight as the nutty finish completes the picture of a fine sipping experience.\r\n',	'5f5f59360caa7_domaine_serene.png',	1,	'2020-09-14 11:51:18'),
(25,	'BODEGA LURTON',	2011,	'Pinot Gris',	'Argentine',	'Mendoza',	'Solid notes of black currant blended with a light citrus make this wine an easy pour for varied palates.\r\nAprès de longues recherches dans plusieurs régions d\'Argentine, François Lurton implante son vignoble sur des terres d\'altitude et semi-désertiques, (des graves pauvres rappelant ceux de Pessac-Léognan) au piémont de la Cordillère : la Vallée de Uco. Cette terre inexplorée se trouve être dans le district de Chacayes, nom que François donnera à sa grande cuvée.\r\n',	'5f5f597177891_lurton-pinot-gris.png',	1,	'2020-09-14 11:52:17'),
(30,	'LES MORIZOTTES',	2009,	'Chardonnay',	'France',	'Bourgogne',	'Breaking the mold of the classics, this offering will surprise and undoubtedly get tongues wagging with the hints of coffee and tobacco in\r\nperfect alignment with more traditional notes. Breaking the mold of the classics, this offering will surprise and\r\nundoubtedly get tongues wagging with the hints of coffee and tobacco in\r\nperfect alignment with more traditional notes. Sure to please the late-night crowd with the slight jolt of adrenaline it brings.\r\n',	'5f60c98f470ff_5f5f599e39ad7_morizottes.png',	1,	'2020-09-15 14:02:55');

-- 2020-11-14 07:37:13