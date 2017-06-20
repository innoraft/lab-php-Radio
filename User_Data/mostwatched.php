<?php

include '../databaseconfig.php';

session_start();
$uid = $_SESSION['userID'];

$date = date("Y-m-d");
$time = date("h:i:sa");
$stamp = date("G:i", strtotime($time));
echo $date;
echo "<br>";
echo $stamp;

$title = $_GET['id'];
echo $title;

$sql = "INSERT into watch (userID,date,time,title) values ('$uid','$date','$stamp','$title')";
$query = mysql_query($sql);

if (!$query) {
echo "Failed".mysql_error();
}

?>