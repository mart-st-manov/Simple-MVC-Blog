-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.27
-- Версия на PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `simpleblogdb`
--

-- --------------------------------------------------------

--
-- Структура на таблица `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(50) NOT NULL,
  `article_text` text NOT NULL,
  `article_exclusive` tinyint(1) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Ссхема на данните от таблица `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_text`, `article_exclusive`) VALUES
(1, 'test', 'this is a simple blog test, and this is a simple article test for registered users', 1),
(2, 'second test', 'this is a test article for all users', 0),
(3, 'test 3', 'agsdfgdghdjhdgjh', 1),
(4, 'test 4', 'not exclusive', 0),
(5, 'test 5', 'new exclusive test            ', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `user_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Ссхема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_admin`) VALUES
(1, 'admin', 'admin', 1),
(2, 'pesho', 'golemiya', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
