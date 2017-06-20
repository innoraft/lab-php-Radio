<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include '../databaseconfig.php';

?>
<?php



$vid = $_GET['id'];
session_start();
$uid = $_SESSION['userID'];

$date = date("Y-m-d");
$time = date("h:i:sa");
$stamp = date("G:i", strtotime($time));
echo $date;
echo "<br>";
echo $stamp;


// $vid = print_r($_GET);
echo $vid;
$tvideo = "SELECT * from video where videoId = '$vid' and userID = '$uid'";
$sql2 = mysql_query($tvideo);
if (!$sql2) {
	echo "Failed".mysql_error();
}
else
$sql_row = mysql_num_rows($sql2);

if ($sql_row > 0)

{
	echo "Already Added!";

}

else {
$sql = "INSERT into video (userID,videoId,date,time) values ('$uid','$vid','$date','$stamp')";
$query = mysql_query($sql);

  if(!$query)
  {

    echo "Failed" .mysql_error();
  }

}
?>

</body>
</html>

