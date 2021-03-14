-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: accounting
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `purchase_journal`
--

DROP TABLE IF EXISTS `purchase_journal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_journal` (
  `in_num` varchar(45) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `supplier` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `val` double DEFAULT NULL,
  `trade_discount` double DEFAULT NULL,
  `tot` double DEFAULT NULL,
  PRIMARY KEY (`in_num`),
  UNIQUE KEY `in_num_UNIQUE` (`in_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_journal`
--

LOCK TABLES `purchase_journal` WRITE;
/*!40000 ALTER TABLE `purchase_journal` DISABLE KEYS */;
INSERT INTO `purchase_journal` VALUES ('34123e41','2021-03-01','Bhanuka Uyanage','werwef',50,40,0,10,0),('34123e42','2021-03-08','Bhanuka Uyanage','werwef',30,40,1200,10,1080);
/*!40000 ALTER TABLE `purchase_journal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_return_journal`
--

DROP TABLE IF EXISTS `purchase_return_journal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_return_journal` (
  `db_num` varchar(45) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `supplier` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `val` double DEFAULT NULL,
  `trade_discount` double DEFAULT NULL,
  `tot` double DEFAULT NULL,
  PRIMARY KEY (`db_num`),
  UNIQUE KEY `db_num_UNIQUE` (`db_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_return_journal`
--

LOCK TABLES `purchase_return_journal` WRITE;
/*!40000 ALTER TABLE `purchase_return_journal` DISABLE KEYS */;
INSERT INTO `purchase_return_journal` VALUES ('34123e41','2021-03-08','Bhanuka Uyanage','werwef',300,40,12000,10,10800);
/*!40000 ALTER TABLE `purchase_return_journal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_journal`
--

DROP TABLE IF EXISTS `sales_journal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales_journal` (
  `in_num` varchar(45) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `supplier` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `val` double DEFAULT NULL,
  `trade_discount` double DEFAULT NULL,
  `tot` double DEFAULT NULL,
  PRIMARY KEY (`in_num`),
  UNIQUE KEY `in_num_UNIQUE` (`in_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_journal`
--

LOCK TABLES `sales_journal` WRITE;
/*!40000 ALTER TABLE `sales_journal` DISABLE KEYS */;
INSERT INTO `sales_journal` VALUES ('34123e41','2021-03-16','Bhanuka Uyanage','werwef',10,50,500,10,450);
/*!40000 ALTER TABLE `sales_journal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_return_journal`
--

DROP TABLE IF EXISTS `sales_return_journal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales_return_journal` (
  `cr_num` varchar(45) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `supplier` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `val` double DEFAULT NULL,
  `trade_discount` double DEFAULT NULL,
  `tot` double DEFAULT NULL,
  PRIMARY KEY (`cr_num`),
  UNIQUE KEY `cr_num_UNIQUE` (`cr_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_return_journal`
--

LOCK TABLES `sales_return_journal` WRITE;
/*!40000 ALTER TABLE `sales_return_journal` DISABLE KEYS */;
INSERT INTO `sales_return_journal` VALUES ('34123e41','2021-03-16','Bhanuka Uyanage','werwef',20,20,400,10,360),('34123e44','2021-03-02','Bhanuka Uyanage','werwef',10,20,200,10,180);
/*!40000 ALTER TABLE `sales_return_journal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-14  6:24:15
