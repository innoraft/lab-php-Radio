-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: userdb
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `Playlist`
--

DROP TABLE IF EXISTS `Playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Playlist` (
  `ID` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Playlist`
--

LOCK TABLES `Playlist` WRITE;
/*!40000 ALTER TABLE `Playlist` DISABLE KEYS */;
INSERT INTO `Playlist` VALUES (1),(2),(3),(4),(5);
/*!40000 ALTER TABLE `Playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `duplicate`
--

DROP TABLE IF EXISTS `duplicate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duplicate` (
  `NAME` varchar(240) DEFAULT NULL,
  `EMAIL` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duplicate`
--

LOCK TABLES `duplicate` WRITE;
/*!40000 ALTER TABLE `duplicate` DISABLE KEYS */;
INSERT INTO `duplicate` VALUES ('Srijeeta Ghosh','srijeeta.ghosh@innoraft.com'),('Srijeeta Ghosh','srijeeta.ghosh@innoraft.com'),('New Entry','newentry@innoraft.com'),('Hello World','hello@innoraft.com'),('New entry2','entry@innoraft.com'),('New entry2','entry@innoraft.com'),('Srijeeta Ghosh','srijeeta.ghosh@innoraft.com'),('Sriju Ghosh','sriju@innoraft.com'),('Innoraft Radio','radio@innoraft.com');
/*!40000 ALTER TABLE `duplicate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playlist` (
  `Username` varchar(20) DEFAULT NULL,
  `playlistID` int(10) NOT NULL AUTO_INCREMENT,
  `playlistname` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`playlistID`)
) ENGINE=InnoDB AUTO_INCREMENT=1021 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist`
--

LOCK TABLES `playlist` WRITE;
/*!40000 ALTER TABLE `playlist` DISABLE KEYS */;
INSERT INTO `playlist` VALUES ('Srijeeta Ghosh',1001,'new songs'),('Srijeeta Ghosh',1002,'songs'),('Srijeeta Ghosh',1003,'new songs'),('Srijeeta Ghosh',1004,'songs'),('Srijeeta Ghosh',1005,'songs'),('Srijeeta Ghosh',1006,'songs'),('Srijeeta Ghosh',1007,'Testing'),('Srijeeta Ghosh',1008,'songs'),('Srijeeta Ghosh',1009,'TEST'),('Srijeeta Ghosh',1010,'news'),('Srijeeta Ghosh',1011,'songs'),('Srijeeta Ghosh',1012,'test'),('Srijeeta Ghosh',1013,'songs'),('Sriju',1014,'hello'),('Srijeeta Ghosh',1015,'testing'),('Srijeeta Ghosh',1016,'test'),('Srijeeta Ghosh',1017,'test'),('Srijeeta Ghosh',1018,'dd'),('shuva',1019,'playlist 1'),('nik',1020,'nik');
/*!40000 ALTER TABLE `playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(240) NOT NULL,
  `EMAIL` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `userID` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `users` (`ID`,`NAME`,`EMAIL`,`password`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Srijeeta Ghosh','srijeeta.ghosh@innoraft.com','202cb962ac59075b964b07152d234b70','1493968064'),(2,'Srijeeta Ghosh','srijeeta.ghosh@innoraft.com','202cb962ac59075b964b07152d234b70','1493968064');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `userID` varchar(10) NOT NULL,
  `videoId` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES ('1493965629','W6wVwfDvvSg');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-05 14:03:11
