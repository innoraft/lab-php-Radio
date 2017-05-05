<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>
<?php

$vid = $_GET['id'];


// $vid = print_r($_GET);
echo $vid;

$sql = "INSERT into video(videoID) values ('$vid')";
echo $sql;
$query = mysql_query($sql);

  if(!$query)
  {

    echo "Failed" .mysql_error();
  }

