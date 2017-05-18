


<?php

include 'databaseconfig.php';


  $UserName = $_GET['name'];
  $password = md5($_GET['password']);
  $email= $_GET['email'];


$whitelist = array("innoraft.com");

function validateEmailDomain($email, $domains) {
    foreach ($domains as $domain) {
        $pos = strpos($email, $domain, strlen($email) - strlen($domain));

        if ($pos === false)
            continue;

        if ($pos == 0 || $email[(int) $pos - 1] == "@" || $email[(int) $pos - 1] == ".")
            return true;
    }

    return false;
}


$tname = "SELECT * from users where NAME = '".$UserName."' or EMAIL = '".$email."'";
$sql3 = mysql_query($tname);
if (!$sql3) {
  echo "Failed".mysql_error();
}
else
$sql_row = mysql_num_rows($sql3);

if ($sql_row> 0)
{

  echo "ALready Exists";
  echo "<br>";
  echo "<a href = 'form.php'>Please Login</a>";
}

else {


if (validateEmailDomain($email, $whitelist)){

  session_start();
$userID = strtotime("now");
$_SESSION['userID'] = $userID;
  // echo $userID;


  $sql = "INSERT into users (NAME,EMAIL,password,userID) values ('".$UserName."' , '".$email."', '".$password."', '".$userID."')";

  $query = mysql_query($sql);


  if(!$query)
  {

    echo "Failed" .mysql_error();
    echo "<br /><a href='signupform.php'>Signup Again</a>";
  }
  else
  {

  }
  }

  else
    echo "This domain name is not allowed";
}






?>




