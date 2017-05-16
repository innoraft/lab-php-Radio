<?php
include 'databaseconfig.php';
mysql_query("CREATE TABLE `userss` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(240) NOT NULL,
  `EMAIL` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `userID` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `userss` (`ID`,`NAME`,`EMAIL`,`password`)
) ");
echo "done";
?>