# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: appshare2
# Generation Time: 2016-06-23 23:00:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table apps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) DEFAULT NULL,
  `app_body` text,
  `app_user_id` varchar(255) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `apps` WRITE;
/*!40000 ALTER TABLE `apps` DISABLE KEYS */;

INSERT INTO `apps` (`id`, `app_name`, `app_body`, `app_user_id`, `create_date`)
VALUES
	(8,'Ear Saver','Ear saver is an idea for a children\'s mobile app that reduces the max volume a user can play music while headphones are plugged in. With the rise of loud headphones I think it is important for kids not to damage their ear drums. Parents could set a max volume on their child\'s cell phone.','1','2016-05-18 11:16:43'),
	(9,'Face Size App','I work at a company that sells air filtration masks. An application that would be handy for our company and others, would be an app that takes a picture of your face and is able to determine the size mask you should buy. This would limit product returns.','1','2016-05-18 11:59:54'),
	(14,'My Awesome Idea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac consectetur ex. Donec convallis lorem vitae neque tempor, vel consequat mi semper. Proin tincidunt vel erat ut condimentum. Nam rhoncus purus ac odio condimentum lacinia. Aliquam ac ante ac purus eleifend condimentum vitae id nisi. Quisque lorem eros, feugiat eu facilisis vitae, aliquet eu lectus. Maecenas interdum dui sit amet lacinia venenatis.','11','2016-05-24 12:21:03');

/*!40000 ALTER TABLE `apps` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `register_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `register_date`)
VALUES
	(1,'daniel','plummer','dplummer1292@outlook.com','dplummer','e21d3c29f2cea4c675ced97f6d2605e3','2016-04-18 15:39:17'),
	(11,'Test','User','testuser@fullsail.edu','testuser99','5f4dcc3b5aa765d61d8327deb882cf99','2016-05-24 12:18:02');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
