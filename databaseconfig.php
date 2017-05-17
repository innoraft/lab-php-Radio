<?php

//Enter Your Credentials
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);
$db2=mysqli_connect("localhost","root","123","userdb");
$link = new mysqli( 'localhost', 'root', '123', 'userdb' );

?>