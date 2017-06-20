<?php
include 'databaseconfig.php';

//Creating Database
mysql_query("CREATE database userdb");

//Selecting Database
mysql_query("use userdb");

//Creating the tables
mysql_query("CREATE TABLE IF NOT EXISTS `analytics` (
  `Username` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `logout` time DEFAULT NULL,
  `diff` varchar(100) DEFAULT NULL
)");

mysql_query("CREATE TABLE IF NOT EXISTS `counter` (
  `videoId` varchar(20) DEFAULT NULL,
  `count` int(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
)");

mysql_query("CREATE TABLE IF NOT EXISTS `datedb` (
  `mail` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
)");

mysql_query("CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(240) NOT NULL,
  `EMAIL` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `userID` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `users` (`ID`,`NAME`,`EMAIL`,`password`)
) ");

mysql_query("CREATE TABLE IF NOT EXISTS `video` (
  `userID` varchar(10) NOT NULL,
  `videoId` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
)");

mysql_query("CREATE TABLE IF NOT EXISTS `playlist` (
  `Username` varchar(20) DEFAULT NULL,
  `playlistname` varchar(20) DEFAULT NULL,
  `userID` varchar(10) DEFAULT NULL
)");

mysql_query("CREATE TABLE IF NOT EXISTS `watch` (
  `userID` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
)");

?>
