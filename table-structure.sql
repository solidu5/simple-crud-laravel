-- MariaDB dump 10.19  Distrib 10.5.13-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: crud
-- ------------------------------------------------------
-- Server version	10.5.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'The Adventures of Duck and Goose','Sir Quackalot','Hachette Book Group',2012,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(2,'The Return of Duck and Goose','Sir Quackalot','Hachette Book Group',2010,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(3,'More Fun with Duck and Goose','Sir Quackalot','Hachette Book Group',2009,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(4,'Duck and Goose on Holiday','Sir Quackalot','Hachette Book Group',2011,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(5,'My Friend is a Duck','A. Parrot','Hachette Book Group',2013,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(6,'UFO Debunked','Anonymous','PT BukuBagus',2018,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(7,'Annotated Notes on the Duck and Goose chronicles','Prof Macaw','Macmillan',2013,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(8,'Duck and Goose Cheat Sheet for Students','Polly Parrot','Macmillan',2014,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(9,'Duck and Goose: an allegory for modern times?','Bor Ing','Macmillan',2014,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(12,'Data Smart','Foreman, John','Wiley',2021,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(13,'God Created the Integers','Hawking, Stephen','Penguin',2010,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(14,'Superfreakonomics','Dubner, Stephen','HarperCollins',2021,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(15,'Orientalism','Said, Edward','Penguin',2017,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(16,'Nature of Statistical Learning Theory, The','Vapnik, Vladimir','Springer',2018,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(17,'Integration of the Indian States','Menon, V P','Orient Blackswan',2016,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(18,'Drunkard\'s Walk, The','Mlodinow, Leonard','Penguin',2000,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(19,'Image Processing & Mathematical Morphology','Shih, Frank','CRC',1992,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(20,'How to Think Like Sherlock Holmes','Konnikova, Maria','Penguin',2010,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(21,'Data Scientists at Work','Sebastian Gutierrez','Apress',2011,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(22,'Slaughterhouse Five','Vonnegut, Kurt','Random House',2012,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(23,'Birth of a Theorem','Villani, Cedric','Bodley Head',2013,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(24,'Structure & Interpretation of Computer Programs','Sussman, Gerald','MIT Press',2014,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(25,'Age of Wrath, The','Eraly, Abraham','Penguin',2015,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(26,'Trial, The','Kafka, Frank','Random House',2016,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(27,'Statistical Decision Theory','Pratt, John','MIT Press',2017,'2022-02-20 13:25:09','2022-02-20 13:25:09'),(28,'Data Mining Handbook','Nisbet, Robert','Apress',2018,'2022-02-20 13:25:09','2022-02-20 13:25:09');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-21 12:21:23
