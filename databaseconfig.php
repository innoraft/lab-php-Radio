<?php

//Enter Your Credentials
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);
$db2=mysqli_connect("localhost","root","123","userdb");
$link = new mysqli( 'localhost', 'root', '123', 'userdb' );
$client_id = "195495926744-ud8oh3gpij37tejdttq2e6trda7aqrsa.apps.googleusercontent.com";
$client_secret = "J1Q3Fn5nKeF0Jn9oEYajztpr";

?>