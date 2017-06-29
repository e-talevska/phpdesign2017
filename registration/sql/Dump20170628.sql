-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: exercise
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `users`
--

USE `exercise`;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('m','f','other') COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$9LWVMDSbGOMZcO//Y5bhIuoyx.wIycLhKS/ATl9T.l0uj6HV5VOgK','Martin','Gavrilovski','1992-02-16','123123123','test@test.com','m',NULL),(2,'admin1','$2y$10$AmAQWb1qWb4KzpNZ0MAccei2AKEmXX54lqNW5tRizZyt2qw0ULYoC','Martin','Gavrilovski','1992-02-16','213123','tes1t@test.com','m',NULL),(3,'babau','$2y$10$qUNr7jCPDzclsu0BwHSMTuQvE3LXV4lL3yk7Xk0GdqziX2f3MCLu2','Asdf','Asdfgdgd','1992-02-16','23423423','tes1t1111@test.com','m',NULL),(4,'IvanaD','$2y$10$S53GTindw8UN3.vM0rRVVeD2vSHcglefteQfn//cCO32esDrCwnC.','Ivana','Dimitrova','1993-11-22','0568347','ivanadimitrova@mail.com','f',NULL),(6,'DimitrovaI','$2y$10$RnLgXB.kYVARpcm/9ymaCOsTOoTk9YEj4MGW0lfZj4MSpICquJPf2','Martina','Linkova','1993-05-12','0568347','martina@linkova.com','f',NULL),(8,'JohnD','$2y$10$1dzz4IYIVgVoLYR2lWP3jep.RbMyJ169YsZL1k7/b4BofJLM2qHAS','John','Doe','2000-01-01','324234','john@doe.com','m',''),(10,'JaneS','$2y$10$QZj/cfPSFs8Ddk.MdCase.C67bY215T/ToRX5NVsSZi7zY.3ZWDKO','Jane','Smith','1990-03-03','43563653','jane@smith.com','other','images.jpg'),(12,'TestUser','$2y$10$3NDaC906IpnMH.n5B.BWIeU9IO0csTgxA1afthpY493DB6xi/NjvW','Mark','Antoni','2000-12-12','56423','mark@antony.com','m','images.jpg'),(14,'Magic Mike','$2y$10$.kiD1tQMqr58wdaXOKDlzOKSe4sQizlOcYow76WabGKm9RenUcwkm','Unicorn','Mike','2000-12-12','56423','unicorn@mike.com','other','download.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-28 20:20:38
