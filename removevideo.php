
<?php
include 'databaseconfig.php';


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