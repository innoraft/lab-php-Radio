

<?php

$row=array();
$db=mysqli_connect("localhost","root","123","userdb");
$result ="SELECT * from counter where videoId = 'ixLHwaWAtdM'";

// $result2 = "SELECT playlistname FROM playlist where userID = '$uid'";

$res=$db->query($result);
// $res2=$db->query($result2);

if ($res > 0){
  

while($row = mysqli_fetch_array($res))
{

$id = $row['count'];
echo $id;
$inr = $id + 1;
echo $inr;


}

}

else 

{
  echo "Failed" .mysql_error();

}




?>

