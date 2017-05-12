<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>

<?php

$rem = $_GET['id'];
echo $rem;

session_start();
$uid = $_SESSION['userID'];

$sql = "DELETE from video where videoId = '".$rem."' and userID = '".$uid."' ";
// echo $sql;
$query = mysql_query($sql);

  if(!$query)
  {

    echo "Failed" .mysql_error();
  }

?>