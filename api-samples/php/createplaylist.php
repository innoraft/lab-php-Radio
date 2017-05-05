<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

	<title></title>
</head>
<body>

<form action="welcome.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>
	<input type="submit" value="GO BACK TO HOME" class = "button2" style="padding: 11px;">
</form>

<?php
session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid))
{

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

	 echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

	<title></title>
</head>
<body>
<div class = "background">
<div class="form">
<form action = "playconfig.php" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "boxx"/><br /><br />
                  <label>Playlist Name  :</label><input type = "text" name = "playlist"/><br/><br />
                  <input type = "submit" name="submit" value = " CREATE " class = "button2"/>
    </form>
    </div>
</div>

</body>
</html>';
}

else
{
	echo "<a href='form.php'>Login To Continue</a>";
}

?>

</body>
</html>

   
    

