<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>
<?php

$vid = $_GET['id'];
session_start();
$uid = $_SESSION['userID'];
echo $uid;


// $vid = print_r($_GET);
echo $vid;

$sql2 = mysql_query("SELECT * from video where videoId = '$vid' and userID = '$uid'");
$sql_row = mysql_num_rows($sql2);

if ($sql_row > 0)

{
	echo "Already Added!";

}

else {
$sql = "INSERT into video (userID,videoId) values ('$uid','$vid')";
echo $sql;
$query = mysql_query($sql);

  if(!$query)
  {

    echo "Failed" .mysql_error();
  }

}
?>

<p>ADDED!</p>


</body>
</html>

