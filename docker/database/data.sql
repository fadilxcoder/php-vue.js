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
(2,	'fadilxcoder',	'fadil@xcoder.developer',	'MRTS',	'ZXA',	'CSA');

-- 2020-10-08 18:26:18