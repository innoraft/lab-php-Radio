<?php session_start();?>
<?php 
$servername = 'localhost';
$username = 'root';
$password = '123';
$dbname = 'userdb';
// 
// Create connection
$conn = mysql_connect($servername, $username, $password);
 mysql_select_db('userdb',$conn);
 ?>

<html>
<head></head>
<body>
<div id="tabs">                
  <div id="tabs-2">
    <form action="signup.php" method="post">
    <p><input id="name" name="name" type="text" placeholder="UserName"></p>
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
   </p>
    <p><input type="submit" name="submit" value="Signup" /></p>
  </form>
  </div>
</div>
</body>
</html>
