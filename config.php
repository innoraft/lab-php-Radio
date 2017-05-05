<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>

<?php

	$UserName = $_POST['username'];
	$password = $_POST['password'];
	$email= $_POST['email'];
	$sql = "INSERT into users (NAME,EMAIL,password) values ('".$UserName."' , '".$email."', '".$password."')";

	$query = mysql_query($sql);

	if(!$query)
	{

		echo "Failed" .mysql_error();
		echo "<br /><a href='signupform.php'>Signup</a>";
	}
	else

		echo "Successful";
		echo "<br /><a href='signupform.php'>Signup</a>";



?>