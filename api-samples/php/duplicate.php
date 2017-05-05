<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>

<?php
$Username = "Srijeeta Ghosh";
$email = "srijeeta.ghosh@innoraft.com";

echo $Username;
echo "<br>";
echo $email;

$sql3 = "SELECT * from users where NAME ='".$Username."' and where EMAIL = '" .$email. "';";
$query = mysql_query($sql3);
// echo $sql3;

$sql_row= mysql_num_rows($query);
echo $sql_row;

if ($sql_row>0) {
  echo "Already Exists";
  echo "<br>";
  echo "<a href = 'signupform.php'>Sign Up Again</a>";
}

?>