-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: it202
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Student` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gpa` float DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Student`
--

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;
INSERT INTO `Student` VALUES (0,' Bob',' 123 ayy lmao street',2.2,1),(0,' Meme',' 919 ayy lmao street',3.23,5);
/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `clientId` int(11) NOT NULL AUTO_INCREMENT,
  `clientName` varchar(32) DEFAULT NULL,
  `clientPW` varchar(64) DEFAULT NULL,
  `activeSession` varchar(128) DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forumContent`
--

DROP TABLE IF EXISTS `forumContent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forumContent` (
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `articleId` int(11) DEFAULT NULL,
  `comment` varchar(32) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `userName` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forumContent`
--

LOCK TABLES `forumContent` WRITE;
/*!40000 ALTER TABLE `forumContent` DISABLE KEYS */;
INSERT INTO `forumContent` VALUES (1,1,'hello',1,'anthony'),(2,2,'12345',1,'anthony'),(3,3,'Yup',4,'John'),(4,4,'this is bad',8,'henry'),(5,1,'ayy lmao',1,'anthony');
/*!40000 ALTER TABLE `forumContent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forums` (
  `threadId` int(11) NOT NULL AUTO_INCREMENT,
  `opId` int(11) DEFAULT NULL,
  `opName` varchar(32) DEFAULT NULL,
  `threadName` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`threadId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,1,'anthony','Test'),(2,1,'anthony','ayy lmao'),(3,4,'John','This looks dumb'),(4,8,'henry','done?');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `userId` int(11) DEFAULT NULL,
  `userName` varchar(32) DEFAULT NULL,
  `friendId` int(11) DEFAULT NULL,
  `friendName` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (1,'anthony',4,'John'),(1,'anthony',2,'bob'),(1,'anthony',3,'shannon'),(1,'anthony',5,'Ray'),(7,'Janet',1,'anthony'),(8,'henry',1,'anthony'),(9,'Khanh',1,'anthony');
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(32) DEFAULT NULL,
  `userPW` varchar(64) DEFAULT NULL,
  `activeSession` varchar(128) DEFAULT NULL,
  `firstLogin` datetime DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'anthony','6a2660a4935a645d0cea3bceff154d8a54c94680',NULL,'2016-03-09 07:22:24','2016-03-09 07:22:24'),(2,'bob','6a2660a4935a645d0cea3bceff154d8a54c94680',NULL,'2016-03-09 07:39:38','2016-03-09 07:39:38'),(3,'shannon','70f8f0e872dfebb30f291aeb7b28d1fbec2a141c',NULL,'2016-03-09 08:04:06','2016-03-09 08:04:06'),(4,'john','6a2660a4935a645d0cea3bceff154d8a54c94680',NULL,'2016-03-17 05:02:19','2016-03-17 05:02:19'),(5,'Ray','6a2660a4935a645d0cea3bceff154d8a54c94680',NULL,'2016-03-18 12:13:01','2016-03-18 12:13:01'),(6,'SomePerson','6a2660a4935a645d0cea3bceff154d8a54c94680',NULL,'2016-03-18 12:14:09','2016-03-18 12:14:09'),(7,'Janet','fa0baeff6b4bf796dc621655fcb447fd29fb5f74',NULL,'2016-03-19 08:32:44','2016-03-19 08:32:44'),(8,'henry','fa0baeff6b4bf796dc621655fcb447fd29fb5f74',NULL,'2016-03-21 08:10:49','2016-03-21 08:10:49'),(9,'Khanh','6af0aefcd9ab7145123c0be5a916521a4b520880',NULL,'2016-03-23 01:29:52','2016-03-23 01:29:52');
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

-- Dump completed on 2016-03-23 19:46:29
