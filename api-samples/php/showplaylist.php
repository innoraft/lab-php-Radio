<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

	<title></title>
</head>
<body>

<form action="welcome.php">
	<input type="submit" value="GO BACK TO HOME" class = "button2" style="padding: 11px;">
</form>

<h1>YOUR PLAYLIST</h1>

<?php
session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid))
{
$row=array();
$db=mysqli_connect("localhost","root","123","userdb");
$result ="SELECT videoId FROM video where userID = '$uid'";

$res=$db->query($result);

if ($res > 0){
	

while($row = mysqli_fetch_array($res))
{
// echo "<tr>";
// echo "<td>" . $row['videoID'] . "</td>";
// echo "<td>" . $row['playlistID'] . "</td>";
// echo "</tr>";
$id = $row['videoId'];
// echo $row['videoId'];
echo "<br>";

		echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";echo "<br>";


}

echo "</table>";

mysqli_close($con);
}

echo "<form action='logout.php'>
<input type='submit' value='Sign Out' style='background-color: #bb0000;
                            color: #fff;
                            font-family: Sans-serif;
                            text-align: center;
                            border: 0;
                            transition: all 0.3s ease 0s;
                            font-size: 20px;
                            padding: 11px;
                            float:right;'>
</form>";
}
else
{
echo "<a href='form.php'>Login To Continue</a>";
}



?>

</body>
</html>


