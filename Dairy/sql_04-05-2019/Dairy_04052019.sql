CREATE DATABASE  IF NOT EXISTS `dairy_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dairy_db`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: dairy_db
-- ------------------------------------------------------
-- Server version	5.7.24-log

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
-- Table structure for table `category_tb`
--

DROP TABLE IF EXISTS `category_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_tb` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_img` text NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_tb`
--

LOCK TABLES `category_tb` WRITE;
/*!40000 ALTER TABLE `category_tb` DISABLE KEYS */;
INSERT INTO `category_tb` VALUES (9,'Frozen Food','frozenfood.jpg'),(10,'Milk','milk.jpg'),(11,'Others','others.jpg');
/*!40000 ALTER TABLE `category_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback_tb`
--

DROP TABLE IF EXISTS `feedback_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback_tb` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `f_email` varchar(50) NOT NULL,
  `feedback` varchar(20) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_tb`
--

LOCK TABLES `feedback_tb` WRITE;
/*!40000 ALTER TABLE `feedback_tb` DISABLE KEYS */;
INSERT INTO `feedback_tb` VALUES (1,'NIyatu','niyati@gmail.com','Feedback','2019-05-01 16:05:45');
/*!40000 ALTER TABLE `feedback_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `final_order_tb`
--

DROP TABLE IF EXISTS `final_order_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `final_order_tb` (
  `fo_id` int(11) NOT NULL AUTO_INCREMENT,
  `fo_email` varchar(50) NOT NULL,
  `fo_total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fo_status` varchar(20) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`fo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `final_order_tb`
--

LOCK TABLES `final_order_tb` WRITE;
/*!40000 ALTER TABLE `final_order_tb` DISABLE KEYS */;
INSERT INTO `final_order_tb` VALUES (1,'khyati@gmail.com',500,'2017-03-04 07:06:13','Active'),(2,'twisha@gmail.com',240,'2017-03-04 07:06:13','Active');
/*!40000 ALTER TABLE `final_order_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_tb`
--

DROP TABLE IF EXISTS `login_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_tb`
--

LOCK TABLES `login_tb` WRITE;
/*!40000 ALTER TABLE `login_tb` DISABLE KEYS */;
INSERT INTO `login_tb` VALUES (1,'Seller','12345','Penguins.jpg','09-03-17 11:07:20 AM'),(2,'admin','12345','Jellyfish.jpg','01-05-19 09:37:37 PM');
/*!40000 ALTER TABLE `login_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer_tb`
--

DROP TABLE IF EXISTS `offer_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offer_tb` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_title` varchar(20) NOT NULL,
  `o_descr` text NOT NULL,
  `o_img` text NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer_tb`
--

LOCK TABLES `offer_tb` WRITE;
/*!40000 ALTER TABLE `offer_tb` DISABLE KEYS */;
INSERT INTO `offer_tb` VALUES (4,'Limited','Limited Offer','');
/*!40000 ALTER TABLE `offer_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_tb`
--

DROP TABLE IF EXISTS `order_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_tb` (
  `od_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `o_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `o_status` varchar(20) NOT NULL DEFAULT 'Active',
  `o_rate` int(11) NOT NULL,
  `o_qnty` int(11) NOT NULL,
  `o_total` int(11) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  PRIMARY KEY (`od_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_tb`
--

LOCK TABLES `order_tb` WRITE;
/*!40000 ALTER TABLE `order_tb` DISABLE KEYS */;
INSERT INTO `order_tb` VALUES (1,15,'2019-04-19 20:04:50','Active',500,1,500,'pranavmaheshwari7@gmail.com'),(2,25,'2019-04-20 09:03:25','Active',50,2,100,'pranavmaheshwari7@gmail.com');
/*!40000 ALTER TABLE `order_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packing_tb`
--

DROP TABLE IF EXISTS `packing_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packing_tb` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_descr` text NOT NULL,
  `p_weight` varchar(10) NOT NULL,
  `p_rate` int(10) NOT NULL,
  `p_fat` int(5) NOT NULL,
  `p_snf` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `s_id` int(11) NOT NULL,
  `p_exp_date` date NOT NULL,
  `p_tax` varchar(5) NOT NULL,
  `p_packing` int(5) NOT NULL,
  `p_total_amt` int(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packing_tb`
--

LOCK TABLES `packing_tb` WRITE;
/*!40000 ALTER TABLE `packing_tb` DISABLE KEYS */;
INSERT INTO `packing_tb` VALUES (15,'Maccain Aloo Tikki','mc-cain aloo tikki.jpg','Mccain Aloo Tikki','1',500,1,12,'2019-04-20',10,'2019-10-20','18',1,500),(16,'Amul Camel Milk','Amul camel milk.jpg','Amul Camel Milk','0.5',50,0,23,'2019-04-20',11,'2019-04-21','18',100,5000),(17,'Amul Cow Milk','Amul cow milk.jpg','Amul Cow Milk','0.5',50,0,12,'2019-04-20',11,'2019-04-21','18',100,5000),(18,'Amul Diamond','Amul diamond.jpg','Amul Diamond','0.5',50,0,3,'2019-04-20',11,'2019-04-21','18',20,1000),(19,'Amul Gold','Amul gold.jpg','Amul Gold','0.5',25,0,32,'2019-04-22',11,'2019-04-23','18',100,2500),(20,'Amul Shakti','Amul shakti.jpg','Amul Shakti','0.5',50,0,5,'2019-04-22',11,'2019-04-23','18',25,1250),(21,'Amul Tazza','Amul tazza.jpg','Amul Tazza','0.5',50,0,4,'2019-04-22',11,'2019-04-23','18',40,2000),(22,'Gayatri Shakti','Gayatri shakti.jpg','Gayatri Shakti','0.5',50,0,1,'2019-04-22',12,'2019-04-23','18',100,5000),(23,'Gayatri Tazza','Gayatri tazza.jpg','Gayatri Tazza','0.5',40,1,5,'2019-04-22',12,'2019-04-23','18',10,400),(24,'Gayatri Whole Milk','Gayatri whole milk.jpg','Gayatri Whole Milk','0.5',45,1,1,'2019-04-22',12,'2019-04-23','18',100,4500),(25,'Amul bun','Amul bun.jpg','Amul Bun','1',50,0,2,'2019-04-22',13,'2019-04-23','18',10,500),(26,'Amul butter cookies','Amul butter cookies.jpg','Amul butter cookies','1',100,0,1,'2019-04-20',13,'2019-05-20','18',10,1000),(27,'Amul Cone','Amul cone.jpg','Amul cone','1',100,0,4,'2019-04-20',13,'2019-04-21','12',10,1000),(28,'Amul Masti Dahi','Amul masti dahi.jpg','Amul Masti Dahi','1',50,1,7,'2019-04-22',13,'2019-04-23','18',10,500),(29,'Gayatri Paneer','Gayatri paneer.jpg','Gayatri Paneer','0.5',100,0,7,'2019-04-20',13,'2019-04-22','18',20,2000);
/*!40000 ALTER TABLE `packing_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_category_tb`
--

DROP TABLE IF EXISTS `sub_category_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_category_tb` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_img` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category_tb`
--

LOCK TABLES `sub_category_tb` WRITE;
/*!40000 ALTER TABLE `sub_category_tb` DISABLE KEYS */;
INSERT INTO `sub_category_tb` VALUES (4,4,'Butter','butter.png'),(5,5,'Butter Milk','buttermilk.png'),(8,6,'Milk','milk.png'),(9,5,'Butter','butter.png'),(10,9,'Maccain',''),(11,10,'Amul',''),(12,10,'Gayatri',''),(13,11,'Others','');
/*!40000 ALTER TABLE `sub_category_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tb`
--

DROP TABLE IF EXISTS `user_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tb` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) NOT NULL,
  `u_contact` double NOT NULL,
  `u_address` text NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `u_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tb`
--

LOCK TABLES `user_tb` WRITE;
/*!40000 ALTER TABLE `user_tb` DISABLE KEYS */;
INSERT INTO `user_tb` VALUES (1,'Saloni',9898292900,'Ahmedabad','salonipatel@gmail.com','123456','milk.jpg','Active','2019-05-01 15:53:13');
/*!40000 ALTER TABLE `user_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-04 11:05:49
