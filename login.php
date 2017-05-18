
<?php
include 'databaseconfig.php';
session_start();

  $mail=$_GET['email'];
  $password=md5($_GET['password']);
$row=array();

include 'databaseconfig.php';
$result ="SELECT userID from users where EMAIL = '".$mail."'";
$res=$db2->query($result);

if ($res > 0){
  

while($row = mysqli_fetch_array($res))
{
$_SESSION['userID'] = $row['userID'];
}
}


  //Getting the username

  $query = "SELECT NAME from users where EMAIL = '".$mail."' ";
  $result = $link->query( $query );
  $name = array();
// Print out rows
while ( $row = $result->fetch_assoc() ) {
  $name = ($row['NAME']);

}



  $sql=mysql_query("SELECT * FROM users WHERE EMAIL='".$mail."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  $get_mail= $get_value['EMAIL'];
  $get_pass= $get_value['password'];
  $date = date("Y/m/d");



  
  if($sql_row>0)       
   {
      if(strcasecmp($get_mail,$mail)==0)
      {
          if(strcasecmp($get_pass,$password)==0)
            {

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
<a href="signupform.php">Please Register</a>
<?php
       }


$sql3 = mysql_query("SELECT Username from analytics where Username = '".$name."' and date = '".$date."' ");
$sql_row3 = mysql_fetch_row($sql3);

if ($sql_row3 > 0) {
  // echo "abc";
}

else
{ 

$time = date("h:i:sa");
$stamp =  date("G:i", strtotime($time));
$sql4 = "INSERT into analytics (Username,date,time) values ('".$name."' , '".$date."' , '".$stamp."')";

$query4 = mysql_query($sql4);

}


?>

