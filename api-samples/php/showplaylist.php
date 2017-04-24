
<?php
$row=array();
$db=mysqli_connect("localhost","root","123","userdb");
$result ="SELECT * FROM video";
$res=$db->query($result);
// $sql_row = mysql_num_rows($result);

// echo "<table border='1'>
// <tr>
// <th>videoID</th>
// <th>playlistID</th>
// </tr>";
if ($res > 0){
	

while($row = mysqli_fetch_array($res))
{
// echo "<tr>";
// echo "<td>" . $row['videoID'] . "</td>";
// echo "<td>" . $row['playlistID'] . "</td>";
// echo "</tr>";
$id = $row['videoID'];
echo $row['videoID'];
echo "<br>";
echo $row['playlistID'];

		// echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";echo "<br>";


}

echo "</table>";

mysqli_close($con);
}

?>
