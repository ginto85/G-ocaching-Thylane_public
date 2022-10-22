-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: db.3wa.io	Database: gregoryram_geocaching_thylane
-- ------------------------------------------------------
-- Server version 	5.7.33-0ubuntu0.18.04.1-log
-- Date: Sat, 22 Oct 2022 15:47:08 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `geo_cache`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `resp1` varchar(255) NOT NULL,
  `resp2` varchar(255) NOT NULL,
  `resp3` varchar(255) NOT NULL,
  `good_resp` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_cache`
--

LOCK TABLES `geo_cache` WRITE;
/*!40000 ALTER TABLE `geo_cache` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `geo_cache` VALUES (112,'Cache1',47.3388955,-1.1034968,'LOU','PHYLIS','MARINA','resp1'),(113,'Cache2',47.3390114,-1.1053742,'La Roche sur Yon','Angers','Nantes','resp3'),(114,'Cache3',47.3391023,-1.1063067,'Continuez','C&#039;est trop tard','Faites demi tour','resp1'),(115,'Cache 4',47.3390066,-1.1073383,'C&#039;est papa qui les aura','Pas de clés pas de récompenses','Pas de clés Pas de récompenses','resp1'),(116,'Cache5',47.3383336,-1.1076938,'Placard de la cuisine','Coffre à jouet','Boîte aux lettre','resp3'),(117,'test3',47.213608,-1.104624,'ertyu','rthj','sdfghj','resp1');
/*!40000 ALTER TABLE `geo_cache` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `geo_cache` with 6 row(s)
--

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `points` int(3) NOT NULL DEFAULT '0',
  `answered_questions` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (2,'admin','$2y$10$cNn/.Ax4msDoMmSejD/gpeCvs.5nx3XlpD/Z7vC2h.w2TqW4fD6DW',1,40,'111'),(6,'equipe1','$2y$10$xao8MsIXyURurBluDw6T9uSh9WaCXnwYxtYAfCFvJuJ8Ci2mxXsdK',0,0,NULL),(7,'equipe2','$2y$10$nkQGoVaNmUcTrzOTLGmOkevE5VELMDFybirLNc5cd9hbxt1b/bWyO',0,0,NULL),(20,'equipe3','$2y$10$we3lxE9EwLxk4rxF4pJ4Ze5SyEFafwlRWSzz4EIgOdHp0FIcl2ZC2',0,0,NULL),(30,'equipe4','$2y$10$sONDKhdJhBQq0szTwySQ1OU2hC8epr2bb9Bd952dNq7tdeYJPczfa',0,0,NULL),(31,'equipe5','$2y$10$IIWUPx3dsCykI2k4IU3HiOEHuq8AMc33t/6PmWrR/h.K3nWZZcTBa',0,0,NULL),(32,'equipe6','$2y$10$jn1.Z5lSChx0Te3DiOle1eRNv9UTsx/IAM0qgxiLomGCqznYWwC8.',0,0,NULL),(33,'equipe7','$2y$10$sdDl5REgQSy6Wzk7LhxGDeoBVVkvN/5gtlBEmmFKolXVg7FHsaVim',0,0,NULL),(34,'equipe8','$2y$10$1Ocvz70RSGHk/OJaN.gDBet/WtCC4LuAqk/xK2Cc.xlasHbEVhdBK',0,0,NULL),(35,'TyTy#49','$2y$10$djtvATXilQvAVyK1KIgZXe/Gn7kRaCe4oJHNlUk.nmW4QLRGTQYCC',0,0,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 10 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Sat, 22 Oct 2022 15:47:08 +0000
