-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных super_mag
CREATE DATABASE IF NOT EXISTS `super_mag` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `super_mag`;

-- Дамп структуры для таблица super_mag.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы super_mag.category: ~8 rows (приблизительно)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
	(1, 'Рубашки', 1, 1),
	(2, 'Платья', 5, 1),
	(3, 'Футболки', 3, 1),
	(4, 'Майки', 4, 1),
	(5, 'Сумки', 2, 1),
	(6, 'Чемоданы', 6, 1),
	(7, 'Брюки', 7, 1),
	(8, 'Пиджаки', 8, 1),
	(9, 'Галстуки', 9, 1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Дамп структуры для таблица super_mag.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL DEFAULT '',
  `is_new` int(11) NOT NULL DEFAULT 0,
  `is_recommended` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы super_mag.product: ~29 rows (приблизительно)
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
	(1, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(2, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 0, 1, 1),
	(3, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(4, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(5, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(6, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(7, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(8, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(9, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(10, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(11, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(12, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(13, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(14, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(15, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(16, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(17, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(18, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(19, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(20, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(21, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(22, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(23, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(24, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(25, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(26, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(27, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(28, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1),
	(29, 'Tovar1', 1, 322315341, 54321, 1, 'faker', '/template/images/home/product1.jpg', 'faker tovar for everybody ', 1, 1, 1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Дамп структуры для таблица super_mag.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы super_mag.user: ~0 rows (приблизительно)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
	(1, 'NarimanEdited', 'sagiden@gmail.com', '12345678910'),
	(2, 'NarimanR', 'sagiden8@gmail.com', '1234568901-'),
	(3, 'NarimanR', 'sagiden13@gmail.com', '1234568901-'),
	(4, 'NarimanR', 'sagiden14@gmail.com', '1234568901-');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
