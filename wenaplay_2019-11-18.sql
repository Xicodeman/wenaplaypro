# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: imperiumcms.net (MySQL 5.5.5-10.3.20-MariaDB)
# Database: wenaplay
# Generation Time: 2019-11-18 12:30:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table agents_filters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `agents_filters`;

CREATE TABLE `agents_filters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `goals` varchar(255) DEFAULT NULL,
  `games` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `agents_filters` WRITE;
/*!40000 ALTER TABLE `agents_filters` DISABLE KEYS */;

INSERT INTO `agents_filters` (`id`, `userID`, `position`, `goals`, `games`)
VALUES
	(1,4,1,'5','5');

/*!40000 ALTER TABLE `agents_filters` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `club` varchar(255) DEFAULT NULL,
  `league` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `goals` varchar(255) DEFAULT NULL,
  `games` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `summary` longtext DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `salt`, `password`, `photo`, `club`, `league`, `position`, `goals`, `games`, `video`, `summary`, `dob`, `date`, `type`, `active`)
VALUES
	(2,'Jac','Moussa','test@test.com','4af00fdea22217aa00aa71a6162313b6088ff04bb032bc44579920026bc28658','4a94225f5622c1dc7666fc98a313ffef8134c2f29e35b10139c4e8986364ec3fc32603a032a5f57f9b49b47e7095c0d45384a96369e82db1e37f6757e9f0a8b0','NOVA4_1573830610_1377411442.jpg','test','test','3','5','1','NOVA4_1573827355_604461053.mp4','Tenetur non cubilia? Vel, auctor scelerisque, laudantium, magni, occaecat senectus? Cumque minima! Vitae condimentum vero tenetur saepe semper! Quisque tempus! Ullam, tempora magnam voluptatum, do hac, laboris, pulvinar tenetur harum? Penatibus tempore, doloremque, at mi.\r\n\r\nCommodo nullam nascetur ipsa, primis dictum? Cras curabitur reiciendis, proident pharetra odit dolores anim aenean. Fames, esse porro duis erat wisi! Fugit! Quod mollis sociis, sollicitudin! Duis do, dictum neque senectus praesent. Quis neque! Litora.  ','2019-11-15','2019-11-15 10:52:32',1,1),
	(3,'Test','Account','hpro252@gmail.com','426dd9b4516734c819f9b3a77fbe21c96a0abe9c896b1c53e9f4fa22280429be','a931d79c95c53398c30c7969afb7ec67e738c5131a25590f4ba30a891233ad6f3d3982910c781fdf54392790577c33280654ecafbdf0d1467969c5c2931899d3','NOVA4_1573829102_1187549747.png','test','test','1','5','5','NOVA4_1573829119_81023119.mp4','test  ','2019-11-15','2019-11-15 14:44:23',1,1),
	(4,'Jac','Mousa','test@test1.com','c4705c4a289654a1c31c91a18eac75909a2eecab87903529530c45eafc30ca2d','d052b038a794b165c961e31b8d995bb9cde6cf328bd8ea27861c2b95b3b237b5c477d4c7c9283af3aba8e520b764be46f6f4ba85a64741692f467ae4857b2441','NOVA4_1574062145_125770967.png',NULL,NULL,NULL,NULL,NULL,NULL,'test',NULL,'2019-11-18 07:17:49',2,1),
	(5,'Lichaa','Tarabay','lichaa@nova4lb.com','7affe79be55a9fea1a57a1ab5b01ae7ccf4659b66fb31b4fe402ab34766fcefb','80cac09e8a9c167f0b1e626938eb24966dc986a74420bee8620449b6f33df3539611e5535a21305ea5258983495a4edd0b63b44befefdb8c752264a4342ebeac',NULL,'NOVA4','NOVA4','4','10','1',NULL,' test summary','1991-11-11','2019-11-18 12:24:14',1,1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
