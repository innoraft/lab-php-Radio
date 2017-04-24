<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>

<?php

  $UserName = $_POST['username'];
  $Playlist = $_POST['playlist'];

 
  $sql2=mysql_query("SELECT * FROM users WHERE NAME ='".$UserName."'");
  $sql_row= mysql_num_rows($sql2);

  if($sql_row>0)
  {
  
      // echo "abc";
  
  $sql = "INSERT into playlist (Username,playlistname) values ('".$UserName."' , '".$Playlist."')";

  $query = mysql_query($sql);

  if(!$query)
  {

    echo "Failed" .mysql_error();
    echo "<br /><a href='createplaylist.php'>Create Again</a>";
  }
  else

    echo "Successful";
    echo "<br /><a href='input.html'>Let's get started</a>";
}

else
{

  echo "User does not exists";
  echo "<br /><a href='signupform.php'>Sign Up</a>";


}


?>