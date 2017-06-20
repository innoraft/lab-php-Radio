<?php
include 'databaseconfig.php';
session_start();
$server = $_SERVER['SERVER_NAME'];
$uid = $_SESSION["userID"];
$date = date("Y-m-d");
$time = date("h:i:sa");
$stamp = date("G:i", strtotime($time));



$sql="SELECT NAME FROM users where userID = '$uid'";
$row = array();
if ($result=mysqli_query($db2,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    	$Username = $row[0];

    }
  // Free result set
  mysqli_free_result($result);
}

$query = "UPDATE analytics SET logout = '$stamp' where date = '$date' and Username = '$Username'";
$run = mysql_query($query);

if (!$run) {
	echo "Failed".mysql_error();
}

$sql = "SELECT time,logout from analytics where date = '$date' and Username = '$Username'";
$arr = array();
if ($res=mysqli_query($db2,$sql)) {
while ($arr=mysqli_fetch_row($res)) {
	$login = $arr[0];
	$logout = $arr[1];
  $conlogin = strtotime($login);
  $conlogout = strtotime($logout);
  $diff = ($conlogout - $conlogin)/60;

}
mysqli_free_result($res);
}

$insert = "UPDATE analytics SET diff = '$diff' where date = '$date' and Username = '$Username' ";
$update = mysql_query($insert);

if (!$update) {
echo "Failed".mysql_error();
}

unset($uid);
header('Location: http://'.$server.'/index.html');
session_destroy();
?>