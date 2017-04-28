<?php
session_start();
$uid = $_SESSION['userID'];
echo $uid;

if (isset($uid))
{
	echo "<html>
<body>

<form action='input.php' method='post'>
<input type='submit' value='Search Videos'>
</form>

<form action='createplaylist.php' method='post'>
<input type='submit' value='Create Playlist'>
</form>

<form action='showplaylist.php' method='post'>
<input type='submit' value='Show Playlist'>
</form>

</body>
</html>";

echo "<form action='logout.php'>
<input type='submit' value='Sign Out'>
</form>";

}

else {
echo "<a href='form.php'>Login To Continue</a>";
}

?>