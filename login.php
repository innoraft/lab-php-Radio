<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>
<?php

if(isset($_POST['submit']))
{
  $mail=$_POST['email'];
  $password=$_POST['password'];
  //$password=md5($passbeforehash);
  $sql=mysql_query("SELECT * FROM users WHERE EMAIL='".$mail."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  $get_mail= $get_value['EMAIL'];
  $get_pass= $get_value['password'];

  if($sql_row>0)
   {
      if(strcasecmp($get_mail,$mail)==0)
      {
          if(strcasecmp($get_pass,$password)==0)
            {
              
                  $_SESSION['mail']= $get_mail;
                  echo"welcome to Innoraft Radio";
              }
              else
              {
                   echo"password invalid";
              }
      }

      else {
            echo "not matched";
           }
    }
       else
          echo "user does not exist please register";
    }

    else
    echo "unsuccessful";


?>