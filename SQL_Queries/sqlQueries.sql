-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: grad
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(200) DEFAULT NULL,
  `forum_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` VALUES (1,'SOP/LOR','forum about SOP'),(2,'Profile Evaluation','forum about profile Evaluation'),(3,'VISA Interview and Experiences','forum about VISA'),(4,'Education Loans','forum about finance'),(5,'GRE/TOEFL','forum about GRE/TOEFL');
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_post`
--

DROP TABLE IF EXISTS `forum_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(200) DEFAULT NULL,
  `post_author` varchar(200) DEFAULT NULL,
  `post_body` text,
  `post_type` enum('o','r') DEFAULT 'o',
  `op_id` int(11) DEFAULT NULL,
  `forum_name` varchar(200) DEFAULT NULL,
  `forum_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_post`
--

LOCK TABLES `forum_post` WRITE;
/*!40000 ALTER TABLE `forum_post` DISABLE KEYS */;
INSERT INTO `forum_post` VALUES (1,'Content of SOP/LOR','Dipti','What should be the length of the SOP and LOR?','o',1,'SOP/LOR',1),(2,'How many LORs are required','Aakash','How many LORs should be submitted for MS courses?','o',1,'SOP/LOR',1),(3,'MS CS | GRE 302','Tanisha','GRE - 302, TOEFL-98, GPA-3.2, Work-ex: 2 years. Please suggest some safe universities.','o',1,'Profile Evaluation',2),(4,'Educational Loan Queries answered by Credila','Credila_agent','Visit our website to know about varios student benefits based on your score.','o',1,'Education Loans',4),(5,'LOR from??','Akanksha','Whom should we take the LOR from? College professor or Workplace supervisor?','o',1,'SOP/LOR',1),(6,'Average GRE/TOEFL Score','Akanksha','What is the average GRE and TOEFL accepted for MS-CS course in the US','o',1,'GRE/TOEFL',5),(7,'Score Reporting','Deepesh','How do I send my GRE and TOEFL scores to the universities?','o',1,'GRE/TOEFL',5),(8,'Retaking GRE / TOEFL','Aditya','Hi! I am planning to retake my GRE exam. Would that affect my chances of getting an admit?','o',1,'GRE/TOEFL',5),(9,'Loan Amount','Darshan','What is the minimum loan amount that is required for studying in the US?','o',1,'Education Loans',4),(10,'Recommendations','Dipti','Who should I ask to write recommendation letters?What does it mean to \"Waive Your Right to Review\" when entering the names of my recommenders?','o',1,'SOP/LOR',1),(11,'Tution Fees','Vishal',' What is the tuition rate for the M.S. program?Is there a different tuition rate for international students?','o',1,'Education Loans',4);
/*!40000 ALTER TABLE `forum_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES (37,'Dipti','Pamnani','abc@abc.com','abc123'),(38,'Tanisha','Jain','tanishajain.94@gmail.com','tani'),(39,'Vega','Shetty','vega@abc.com','vega123'),(40,'Dipti','P','bbb@bb.com','bbbbn');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-30 20:53:41
