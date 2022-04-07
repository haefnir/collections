# ************************************************************
# Sequel Ace SQL dump
# Version 20031
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.7.3-MariaDB-1:10.7.3+maria~focal)
# Database: pokemon-collection
# Generation Time: 2022-04-07 09:40:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table user-pokemon
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user-pokemon`;

CREATE TABLE `user-pokemon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(12) DEFAULT NULL,
  `hasNickname` tinyint(1) DEFAULT NULL,
  `speciesID` int(11) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `routeCaught` varchar(24) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `user-pokemon` WRITE;
/*!40000 ALTER TABLE `user-pokemon` DISABLE KEYS */;

INSERT INTO `user-pokemon` (`id`, `nickname`, `hasNickname`, `speciesID`, `gender`, `routeCaught`, `deleted`)
VALUES
	(1,NULL,0,1,1,'Starter',1),
	(2,'steve',1,4,1,'Trade',0),
	(3,'Dav',1,16,0,'Route 1',0),
	(4,NULL,0,32,0,NULL,0),
	(5,'',0,143,NULL,NULL,0),
	(6,'',0,29,1,NULL,0),
	(7,'Kevin',1,56,0,NULL,0),
	(8,'Keith',1,143,1,NULL,0),
	(9,'',0,129,NULL,NULL,0),
	(10,'Bug',1,13,NULL,NULL,0),
	(11,'Bug',1,13,NULL,NULL,0),
	(12,'Barney',1,7,0,NULL,0),
	(13,'Charlie',1,6,0,NULL,0),
	(14,'',0,13,NULL,NULL,0),
	(15,NULL,0,39,NULL,NULL,0),
	(16,'',0,1,NULL,NULL,1),
	(17,'',0,1,NULL,NULL,0);

/*!40000 ALTER TABLE `user-pokemon` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
