# ************************************************************
# Sequel Ace SQL dump
# Version 20031
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.7.3-MariaDB-1:10.7.3+maria~focal)
# Database: pokemon-collection
# Generation Time: 2022-04-04 14:03:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table pokemon-species-data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pokemon-species-data`;

CREATE TABLE `pokemon-species-data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dex number` varchar(3) DEFAULT NULL,
  `name` varchar(11) DEFAULT NULL,
  `type1` int(11) DEFAULT NULL,
  `type2` int(11) DEFAULT NULL,
  `image-src` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `pokemon-species-data` WRITE;
/*!40000 ALTER TABLE `pokemon-species-data` DISABLE KEYS */;

INSERT INTO `pokemon-species-data` (`id`, `dex number`, `name`, `type1`, `type2`, `image-src`)
VALUES
	(1,'001','Bulbasaur',12,4,'https://img.pokemondb.net/sprites/home/normal/bulbasaur.png'),
	(2,'002','Ivysaur',12,4,'https://img.pokemondb.net/sprites/home/normal/ivysaur.png'),
	(3,'003','Venusaur',12,4,'https://img.pokemondb.net/sprites/home/normal/venusaur.png'),
	(4,'004','Charmander',10,NULL,'https://img.pokemondb.net/sprites/home/normal/charmander.png'),
	(5,'005','Charmeleon',10,NULL,'https://img.pokemondb.net/sprites/home/normal/charmeleon.png'),
	(6,'006','Charizard',10,3,'https://img.pokemondb.net/sprites/home/normal/charizard.png'),
	(7,'007','Squirtle',11,NULL,'https://img.pokemondb.net/sprites/home/normal/squirtle.png'),
	(8,'008','Wartortle',11,NULL,'https://img.pokemondb.net/sprites/home/normal/wartortle.png'),
	(9,'009','Blastioise',11,NULL,'https://img.pokemondb.net/sprites/home/normal/blastoise.png'),
	(10,'010','Caterpie',7,NULL,'https://img.pokemondb.net/sprites/home/normal/caterpie.png'),
	(11,'011','Metapod',7,NULL,'https://img.pokemondb.net/sprites/home/normal/metapod.png'),
	(12,'012','Butterfree',7,3,'https://img.pokemondb.net/sprites/home/normal/butterfree.png'),
	(13,'013','Weedle',7,4,'https://img.pokemondb.net/sprites/home/normal/weedle.png'),
	(14,'014','Kakuna',7,4,'https://img.pokemondb.net/sprites/home/normal/kakuna.png'),
	(15,'015','Beedrill',7,4,'https://img.pokemondb.net/sprites/home/normal/beedrill.png'),
	(16,'016','Pidgey',1,3,'https://img.pokemondb.net/sprites/home/normal/pidgey.png'),
	(17,'017','Pidgeotto',1,3,'https://img.pokemondb.net/sprites/home/normal/pidgeotto.png'),
	(18,'018','Pidgeot',1,3,'https://img.pokemondb.net/sprites/home/normal/pidgeot.png'),
	(19,'019','Rattata',1,NULL,'https://img.pokemondb.net/sprites/home/normal/rattata.png'),
	(20,'020','Raticate',1,NULL,'https://img.pokemondb.net/sprites/home/normal/raticate.png'),
	(21,'021','Spearow',1,3,'https://img.pokemondb.net/sprites/home/normal/spearow.png'),
	(22,'022','Fearow',1,3,'https://img.pokemondb.net/sprites/home/normal/fearow.png'),
	(23,'023','Ekans',4,NULL,'https://img.pokemondb.net/sprites/home/normal/ekans.png'),
	(24,'024','Arbok',4,NULL,'https://img.pokemondb.net/sprites/home/normal/arbok.png'),
	(25,'025','Pikachu',13,NULL,'https://img.pokemondb.net/sprites/home/normal/pikachu.png'),
	(26,'026','Raichu',13,NULL,'https://img.pokemondb.net/sprites/home/normal/raichu.png'),
	(27,'027','Sandshrew',5,NULL,'https://img.pokemondb.net/sprites/home/normal/sandshrew.png'),
	(28,'028','Sandslash',5,NULL,'https://img.pokemondb.net/sprites/home/normal/sandslash.png'),
	(29,'029','Nidoran♀',4,NULL,'https://img.pokemondb.net/sprites/home/normal/nidoran-f.png'),
	(30,'030','Nidorina',4,NULL,'https://img.pokemondb.net/sprites/home/normal/nidorina.png'),
	(31,'031','Nidoqueen',4,5,'https://img.pokemondb.net/sprites/home/normal/nidoqueen.png'),
	(32,'032','Nidoran♂',4,NULL,'https://img.pokemondb.net/sprites/home/normal/nidoran-m.png'),
	(33,'033','Nidorino',4,NULL,'https://img.pokemondb.net/sprites/home/normal/nidorino.png'),
	(34,'034','Nidoking',4,5,'https://img.pokemondb.net/sprites/home/normal/nidoking.png'),
	(35,'035','Clefairy',18,NULL,'https://img.pokemondb.net/sprites/home/normal/clefairy.png'),
	(36,'036','Clefable',18,NULL,'https://img.pokemondb.net/sprites/home/normal/clefable.png'),
	(37,'037','Vulpix',10,NULL,'https://img.pokemondb.net/sprites/home/normal/vulpix.png'),
	(38,'038','Ninetales',10,NULL,'https://img.pokemondb.net/sprites/home/normal/ninetales.png'),
	(39,'039','Jigglypuff',18,NULL,'https://img.pokemondb.net/sprites/home/normal/jigglypuff.png'),
	(40,'040','Wigglytuff',18,NULL,'https://img.pokemondb.net/sprites/home/normal/wigglytuff.png'),
	(41,'041','Zubat',4,3,'https://img.pokemondb.net/sprites/home/normal/zubat.png'),
	(42,'042','Golbat',4,3,'https://img.pokemondb.net/sprites/home/normal/golbat.png'),
	(43,'043','Oddish',12,4,'https://img.pokemondb.net/sprites/home/normal/oddish.png'),
	(44,'044','Gloom',12,4,'https://img.pokemondb.net/sprites/home/normal/gloom.png'),
	(45,'045','Vileplume',12,4,'https://img.pokemondb.net/sprites/home/normal/vileplume.png'),
	(46,'046','Paras',7,12,'https://img.pokemondb.net/sprites/home/normal/paras.png'),
	(47,'047','Parasect',7,12,'https://img.pokemondb.net/sprites/home/normal/parasect.png'),
	(48,'048','Venonat',7,4,'https://img.pokemondb.net/sprites/home/normal/venonat.png'),
	(49,'049','Venomoth',7,4,'https://img.pokemondb.net/sprites/home/normal/venomoth.png'),
	(50,'050','Diglett',5,NULL,'https://img.pokemondb.net/sprites/home/normal/diglett.png'),
	(51,'051','Dugtrio',5,NULL,'https://img.pokemondb.net/sprites/home/normal/dugtrio.png'),
	(52,'052','Meowth',1,NULL,'https://img.pokemondb.net/sprites/home/normal/meowth.png'),
	(53,'053','Persian',1,NULL,'https://img.pokemondb.net/sprites/home/normal/persian.png'),
	(54,'054','Psyduck',11,NULL,'https://img.pokemondb.net/sprites/home/normal/psyduck.png'),
	(55,'055','Golduck',11,NULL,'https://img.pokemondb.net/sprites/home/normal/golduck.png'),
	(56,'056','Mankey',2,NULL,'https://img.pokemondb.net/sprites/home/normal/mankey.png'),
	(57,'057','Primeape',2,NULL,'https://img.pokemondb.net/sprites/home/normal/primeape.png'),
	(58,'058','Growlithe',10,NULL,'https://img.pokemondb.net/sprites/home/normal/growlithe.png'),
	(59,'059','Arcanine',10,NULL,'https://img.pokemondb.net/sprites/home/normal/arcanine.png'),
	(60,'060','Poliwag',11,NULL,'https://img.pokemondb.net/sprites/home/normal/poliwag.png'),
	(61,'061','Poliwhirl',11,NULL,'https://img.pokemondb.net/sprites/home/normal/poliwhirl.png'),
	(62,'062','Poliwratch',11,2,'https://img.pokemondb.net/sprites/home/normal/poliwrath.png'),
	(63,'063','Abra',14,NULL,'https://img.pokemondb.net/sprites/home/normal/abra.png'),
	(64,'064','Kadabra',14,NULL,'https://img.pokemondb.net/sprites/home/normal/kadabra.png'),
	(65,'065','Alakazam',14,NULL,'https://img.pokemondb.net/sprites/home/normal/alakazam.png'),
	(66,'066','Machop',2,NULL,'https://img.pokemondb.net/sprites/home/normal/machop.png'),
	(67,'067','Machoke',2,NULL,'https://img.pokemondb.net/sprites/home/normal/machoke.png'),
	(68,'068','Machamp',2,NULL,'https://img.pokemondb.net/sprites/home/normal/machamp.png'),
	(69,'069','Bellsprout',12,4,'https://img.pokemondb.net/sprites/home/normal/bellsprout.png'),
	(70,'070','Weepinbell',12,4,'https://img.pokemondb.net/sprites/home/normal/weepinbell.png'),
	(71,'071','Victreebel',12,4,'https://img.pokemondb.net/sprites/home/normal/victreebel.png'),
	(72,'072','Tentacool',11,4,'https://img.pokemondb.net/sprites/home/normal/tentacool.png'),
	(73,'073','Tentacruel',11,4,'https://img.pokemondb.net/sprites/home/normal/tentacruel.png'),
	(74,'074','Geodude',6,5,'https://img.pokemondb.net/sprites/home/normal/geodude.png'),
	(75,'075','Graveler',6,5,'https://img.pokemondb.net/sprites/home/normal/graveler.png'),
	(76,'076','Golem',6,5,'https://img.pokemondb.net/sprites/home/normal/golem.png'),
	(77,'077','Ponyta',10,NULL,'https://img.pokemondb.net/sprites/home/normal/ponyta.png'),
	(78,'078','Rapidash',10,NULL,'https://img.pokemondb.net/sprites/home/normal/rapidash.png'),
	(79,'079','Slowpoke',11,14,'https://img.pokemondb.net/sprites/home/normal/slowpoke.png'),
	(80,'080','Slowbro',11,14,'https://img.pokemondb.net/sprites/home/normal/slowbro.png'),
	(81,'081','Magnemite',13,9,'https://img.pokemondb.net/sprites/home/normal/magnemite.png'),
	(82,'082','Magneton',13,9,'https://img.pokemondb.net/sprites/home/normal/magneton.png'),
	(83,'083','Farfetch\'d',1,3,'https://img.pokemondb.net/sprites/home/normal/farfetchd.png'),
	(84,'084','Doduo',1,3,'https://img.pokemondb.net/sprites/home/normal/doduo.png'),
	(85,'085','Dodrio',1,3,'https://img.pokemondb.net/sprites/home/normal/dodrio.png'),
	(86,'086','Seel',11,NULL,'https://img.pokemondb.net/sprites/home/normal/seel.png'),
	(87,'087','Dewgong',11,15,'https://img.pokemondb.net/sprites/home/normal/dewgong.png'),
	(88,'088','Grimer',4,NULL,'https://img.pokemondb.net/sprites/home/normal/grimer.png'),
	(89,'089','Muk',4,NULL,'https://img.pokemondb.net/sprites/home/normal/muk.png'),
	(90,'090','Shellder',11,NULL,'https://img.pokemondb.net/sprites/home/normal/shellder.png'),
	(91,'091','Cloyster',11,15,'https://img.pokemondb.net/sprites/home/normal/cloyster.png'),
	(92,'092','Gastly',8,4,'https://img.pokemondb.net/sprites/home/normal/gastly.png'),
	(93,'093','Haunter',8,4,'https://img.pokemondb.net/sprites/home/normal/haunter.png'),
	(94,'094','Gengar',8,4,'https://img.pokemondb.net/sprites/home/normal/gengar.png'),
	(95,'095','Onix',6,5,'https://img.pokemondb.net/sprites/home/normal/onix.png'),
	(96,'096','Drowzee',14,NULL,'https://img.pokemondb.net/sprites/home/normal/drowzee.png'),
	(97,'097','Hypno',14,NULL,'https://img.pokemondb.net/sprites/home/normal/hypno.png'),
	(98,'098','Krabby',11,NULL,'https://img.pokemondb.net/sprites/home/normal/krabby.png'),
	(99,'099','Kingler',11,NULL,'https://img.pokemondb.net/sprites/home/normal/kingler.png'),
	(100,'100','Voltorb',13,NULL,'https://img.pokemondb.net/sprites/home/normal/voltorb.png'),
	(101,'101','Electrode',13,NULL,'https://img.pokemondb.net/sprites/home/normal/electrode.png'),
	(102,'102','Exeggcute',12,14,'https://img.pokemondb.net/sprites/home/normal/exeggcute.png'),
	(103,'103','Exeggutor',12,14,'https://img.pokemondb.net/sprites/home/normal/exeggutor.png'),
	(104,'104','Cubone',5,NULL,'https://img.pokemondb.net/sprites/home/normal/cubone.png'),
	(105,'105','Marowak',5,NULL,'https://img.pokemondb.net/sprites/home/normal/marowak.png'),
	(106,'106','Hitmonlee',2,NULL,'https://img.pokemondb.net/sprites/home/normal/hitmonlee.png'),
	(107,'107','Hitmonchan',2,NULL,'https://img.pokemondb.net/sprites/home/normal/hitmonchan.png'),
	(108,'108','Lickitung',1,NULL,'https://img.pokemondb.net/sprites/home/normal/lickitung.png'),
	(109,'109','Koffing',4,NULL,'https://img.pokemondb.net/sprites/home/normal/koffing.png'),
	(110,'110','Weezing',4,NULL,'https://img.pokemondb.net/sprites/home/normal/weezing.png'),
	(111,'111','Rhyhorn',5,6,'https://img.pokemondb.net/sprites/home/normal/rhyhorn.png'),
	(112,'112','Rhydon',5,6,'https://img.pokemondb.net/sprites/home/normal/rhydon.png'),
	(113,'113','Chansey',1,NULL,'https://img.pokemondb.net/sprites/home/normal/chansey.png'),
	(114,'114','Tangela',12,NULL,'https://img.pokemondb.net/sprites/home/normal/tangela.png'),
	(115,'115','Kangaskhan',1,NULL,'https://img.pokemondb.net/sprites/home/normal/kangaskhan.png'),
	(116,'116','Horsea',11,NULL,'https://img.pokemondb.net/sprites/home/normal/horsea.png'),
	(117,'117','Seadra',11,NULL,'https://img.pokemondb.net/sprites/home/normal/seadra.png'),
	(118,'118','Goldeen',11,NULL,'https://img.pokemondb.net/sprites/home/normal/goldeen.png'),
	(119,'119','Seaking',11,NULL,'https://img.pokemondb.net/sprites/home/normal/seaking.png'),
	(120,'120','Staryu',11,NULL,'https://img.pokemondb.net/sprites/home/normal/staryu.png'),
	(121,'121','Starmie',11,14,'https://img.pokemondb.net/sprites/home/normal/starmie.png'),
	(122,'122','Mr. Mime',14,18,'https://img.pokemondb.net/sprites/home/normal/mr-mime.png'),
	(123,'123','Scyther',7,3,'https://img.pokemondb.net/sprites/home/normal/scyther.png'),
	(124,'124','Jynx',15,14,'https://img.pokemondb.net/sprites/home/normal/jynx.png'),
	(125,'125','Electabuzz',13,NULL,'https://img.pokemondb.net/sprites/home/normal/electabuzz.png'),
	(126,'126','Magmar',10,NULL,'https://img.pokemondb.net/sprites/home/normal/magmar.png'),
	(127,'127','Pinsir',7,NULL,'https://img.pokemondb.net/sprites/home/normal/pinsir.png'),
	(128,'128','Tauros',1,NULL,'https://img.pokemondb.net/sprites/home/normal/tauros.png'),
	(129,'129','Magikarp',11,NULL,'https://img.pokemondb.net/sprites/home/normal/magikarp.png'),
	(130,'130','Gyarados',11,3,'https://img.pokemondb.net/sprites/home/normal/gyarados.png'),
	(131,'131','Lapras',11,15,'https://img.pokemondb.net/sprites/home/normal/lapras.png'),
	(132,'132','Ditto',1,NULL,'https://img.pokemondb.net/sprites/home/normal/ditto.png'),
	(133,'133','Eevee',1,NULL,'https://img.pokemondb.net/sprites/home/normal/eevee.png'),
	(134,'134','Vaporeon',11,NULL,'https://img.pokemondb.net/sprites/home/normal/vaporeon.png'),
	(135,'135','Jolteon',13,NULL,'https://img.pokemondb.net/sprites/home/normal/jolteon.png'),
	(136,'136','Flareon',10,NULL,'https://img.pokemondb.net/sprites/home/normal/flareon.png'),
	(137,'137','Porygon',1,NULL,'https://img.pokemondb.net/sprites/home/normal/porygon.png'),
	(138,'138','Omanyte',6,11,'https://img.pokemondb.net/sprites/home/normal/omanyte.png'),
	(139,'139','Omastar',6,11,'https://img.pokemondb.net/sprites/home/normal/omastar.png'),
	(140,'140','Kabuto',6,11,'https://img.pokemondb.net/sprites/home/normal/kabuto.png'),
	(141,'141','Kabutops',6,11,'https://img.pokemondb.net/sprites/home/normal/kabutops.png'),
	(142,'142','Aerodactyl',6,3,'https://img.pokemondb.net/sprites/home/normal/aerodactyl.png'),
	(143,'143','Snorlax',1,NULL,'https://img.pokemondb.net/sprites/home/normal/snorlax.png'),
	(144,'144','Articuno',15,3,'https://img.pokemondb.net/sprites/home/normal/articuno.png'),
	(145,'145','Zapdos',13,3,'https://img.pokemondb.net/sprites/home/normal/zapdos.png'),
	(146,'146','Moltres',10,3,'https://img.pokemondb.net/sprites/home/normal/moltres.png'),
	(147,'147','Dratini',16,NULL,'https://img.pokemondb.net/sprites/home/normal/dratini.png'),
	(148,'148','Dragonair',16,NULL,'https://img.pokemondb.net/sprites/home/normal/dragonair.png'),
	(149,'149','Dragonite',16,3,'https://img.pokemondb.net/sprites/home/normal/dragonite.png'),
	(150,'150','Mewtwo',14,NULL,'https://img.pokemondb.net/sprites/home/normal/mewtwo.png'),
	(151,'151','Mew',15,NULL,'https://img.pokemondb.net/sprites/home/normal/mew.png');

/*!40000 ALTER TABLE `pokemon-species-data` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(11) DEFAULT NULL,
  `image-src` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;

INSERT INTO `types` (`id`, `name`, `image-src`)
VALUES
	(1,'Normal','https://archives.bulbagarden.net/media/upload/3/39/NormalIC_Big.png'),
	(2,'Fighting','https://archives.bulbagarden.net/media/upload/6/67/FightingIC_Big.png'),
	(3,'Flying','https://archives.bulbagarden.net/media/upload/c/cb/FlyingIC_Big.png'),
	(4,'Poison','https://archives.bulbagarden.net/media/upload/3/3d/PoisonIC_Big.png'),
	(5,'Ground','https://archives.bulbagarden.net/media/upload/8/8f/GroundIC_Big.png'),
	(6,'Rock','https://archives.bulbagarden.net/media/upload/c/ce/RockIC_Big.png'),
	(7,'Bug','https://archives.bulbagarden.net/media/upload/c/c8/BugIC_Big.png'),
	(8,'Ghost','https://archives.bulbagarden.net/media/upload/7/73/GhostIC_Big.png'),
	(9,'Steel','https://archives.bulbagarden.net/media/upload/d/d4/SteelIC_Big.png'),
	(10,'Fire','https://archives.bulbagarden.net/media/upload/2/26/FireIC_Big.png'),
	(11,'Water','https://archives.bulbagarden.net/media/upload/5/56/WaterIC_Big.png'),
	(12,'Grass','https://archives.bulbagarden.net/media/upload/7/74/GrassIC_Big.png'),
	(13,'Electric','https://archives.bulbagarden.net/media/upload/4/4a/ElectricIC_Big.png'),
	(14,'Psychic','https://archives.bulbagarden.net/media/upload/6/60/PsychicIC_Big.png'),
	(15,'Ice','https://archives.bulbagarden.net/media/upload/6/6f/IceIC_Big.png'),
	(16,'Dragon','https://archives.bulbagarden.net/media/upload/4/48/DragonIC_Big.png'),
	(17,'Dark','https://archives.bulbagarden.net/media/upload/5/56/DarkIC_Big.png'),
	(18,'Fairy','https://archives.bulbagarden.net/media/upload/7/73/FairyIC_Big.png');

/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user-pokemon
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user-pokemon`;

CREATE TABLE `user-pokemon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(11) DEFAULT NULL,
  `hasNickname` tinyint(1) DEFAULT NULL,
  `speciesID` int(11) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `routeCaught` varchar(24) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `user-pokemon` WRITE;
/*!40000 ALTER TABLE `user-pokemon` DISABLE KEYS */;

INSERT INTO `user-pokemon` (`id`, `nickname`, `hasNickname`, `speciesID`, `gender`, `routeCaught`)
VALUES
	(1,NULL,0,1,1,'Starter'),
	(2,NULL,0,4,1,'Trade'),
	(3,'Birdo',1,16,0,'Route 1');

/*!40000 ALTER TABLE `user-pokemon` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
