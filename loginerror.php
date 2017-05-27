<?php
include 'databaseconfig.php';
session_start();
$email =  $_GET['email'];
$password = md5($_GET['password']);
$date = date("Y/m/d");

$row=array();
$result ="SELECT userID from users where EMAIL = '".$email."'";
$res=$db2->query($result);

if ($res > 0){
  

while($row = mysqli_fetch_array($res))
{
$_SESSION['userID'] = $row['userID'];
}
}
 

$sql = "SELECT * from users where EMAIL = '$email'";
$query = mysql_query($sql);
if (!$query) {
	echo "Failed".mysql_error();
}
$sql_row = mysql_num_rows($query);
$get_value = mysql_fetch_assoc($query);
$get_mail= $get_value['EMAIL'];
$get_pass= $get_value['password'];

  if($sql_row>0)       
   {
      if(strcasecmp($get_mail,$email)==0)
      {
          if(strcasecmp($get_pass,$password)==0)
            {	              
                  // header('location: welcome.php');
              }
              else
              {
                   echo"Invalid Password";
              }
      }

      else {
            echo "Username and password did not match";
           }
                        $sql2 = mysql_query("INSERT into datedb (Username,mail,date) values ( '".$name."' ,'".$mail."' , '".$date."')");
            if (!$sql2) {
          echo "Failed" .mysql_error();
              }
    }

    else
    {
    	?>
    	<a href="signupform.php"><p>Please Register</p></a>
    	<?php
    }
?>