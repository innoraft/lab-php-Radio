<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css"/>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src = "script.js"></script>
  <title></title>
</head>
<body>

<div class = "form">

<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>




<?php

if(isset($_POST['submit']))
{
  // session_start();
  // $uid = $_SESSION['userID'];
  // echo $uid;
  session_start();
  $mail=$_POST['email'];
  $password=$_POST['password'];

  //Getting the username

  $link = new mysqli( 'localhost', 'root', '123', 'userdb' );
  $query = "SELECT NAME from users where EMAIL = '".$mail."' ";
  $result = $link->query( $query );
  $name = array();
// Print out rows
while ( $row = $result->fetch_assoc() ) {
  $name = ($row['NAME']);
 // echo $name;
}



  $password=md5($password);
  $sql=mysql_query("SELECT * FROM users WHERE EMAIL='".$mail."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  $get_mail= $get_value['EMAIL'];
  $get_pass= $get_value['password'];
  $date = date("Y/m/d");





}



  
  if($sql_row>0)       
   {
      if(strcasecmp($get_mail,$mail)==0)
      {
          if(strcasecmp($get_pass,$password)==0)
            {
              
                  $_SESSION['mail']= $get_mail;
                  header('location: welcome.php');
              }
              else
              {
                   echo"Invalid Password";
                   echo '<br>';
                   echo "<a href = 'form.php'>Try Again</a>";
              }
      }

      else {
            echo "not matched";
           }

             $sql2 = mysql_query("INSERT into datedb (Username,mail,date) values ( '".$name."' ,'".$mail."' , '".$date."')");
  if (!$sql2) {
    echo "Failed" .mysql_error();
  }
  
    }
       else

 {         echo "user does not exist please register";
         echo "<a href='signupform.php's>Sign Up</a>";}

   // }

   //  else
   //  echo "unsuccessful";


?>

<?php
$row=array();
$db=mysqli_connect("localhost","root","123","userdb");
$result ="SELECT userID from users where EMAIL = '".$mail."'";
$res=$db->query($result);

if ($res > 0){
  

while($row = mysqli_fetch_array($res))
{
$_SESSION['userID'] = $row['userID'];
}

echo "</table>";

mysqli_close($con);
}

?>  

<!-- Generating the Date -->
<?php

$sql3 = mysql_query("SELECT Username from analytics where Username = '".$name."' and date = '".$date."' ");
$sql_row3 = mysql_fetch_row($sql3);

if ($sql_row3 > 0) {
  echo "abc";
}

else
{ 

$time = date("h:i:sa");
$stamp =  date("G:i", strtotime($time));
$sql4 = "INSERT into analytics (Username,date,time) values ('".$name."' , '".$date."' , '".$stamp."')";

$query4 = mysql_query($sql4);

}


?>
</div>


</body>
</html>

