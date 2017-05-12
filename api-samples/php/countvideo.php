<?php
$conn = mysql_connect("localhost","root","123");
$db2 = mysql_select_db("userdb",$conn);

?>

<?php

// $vid =  '34Na4j8AVgA' ;
$vid = $_GET['id'];
echo $vid;
echo "<br>";
$title2 = $_GET['title'];
$title = rawurldecode($title2);
echo $title;

$arr = explode("|", $title, 2);
$first = $arr[0];
echo $first;


$row=array();
$db=mysqli_connect("localhost","root","123","userdb");
$result ="SELECT * from counter where videoId = '$vid'";

// $result2 = "SELECT playlistname FROM playlist where userID = '$uid'";

$res=$db->query($result);
// $res2=$db->query($result2);

if ($res > 0){
  

while($row = mysqli_fetch_array($res))
{

$id = $row['count'];
// echo $id;
}

}

else 

{
  echo "Failed" .mysql_error();

}

?>

<?php


$sql = mysql_query("SELECT * from counter where videoId = '$vid'");
$sql_row = mysql_num_rows($sql);


if ($sql_row > 0) {


	$inr = $id + 1;
	// echo $inr;
	$sql2 = mysql_query("UPDATE counter set count = '$inr' where videoId = '$vid' ");

	if (!$sql2)

	{
echo "Failed".mysql_error();
	}


}


else {
$cnt = 1;
$sql = mysql_query("INSERT into counter (videoId,count,title) values ('$vid','$cnt','$first')");
if(!$sql)
{
	echo "Failed" .mysql_error();
}
}




?>
