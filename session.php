<?php
include 'databaseconfig,php';
session_start();

$_SESSION['from'] = $_GET["from"];
$from = $_SESSION['from'];
// echo $_SESSION['from'];
echo "<br>";

$_SESSION['to'] = $_GET["to"];
$to = $_SESSION['to'];
// echo $_SESSION['to'];
echo "<br>";

$_SESSION['date'] = $_GET["date"];
// echo $_SESSION['date'];
$date = $_SESSION['date'];

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body>

<a href="onlineusers.php"><button class="button2">Show Users</button></a>
<a href="graph.php"><button class="button2">Show Time Analytics</button></a>

</body>
</html>









