<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <title></title>
</head>
<body>

<div class = "background">
<div class = "form">

<?php
$conn = mysql_connect("localhost","root","123");
$db = mysql_select_db("userdb",$conn);

?>



<?php



  $UserName = $_POST['username'];
  $password = md5($_POST['password']);
  $email= $_POST['email'];

$whitelist = array("innoraft.com");

function validateEmailDomain($email, $domains) {
    foreach ($domains as $domain) {
        $pos = strpos($email, $domain, strlen($email) - strlen($domain));

        if ($pos === false)
            continue;

        if ($pos == 0 || $email[(int) $pos - 1] == "@" || $email[(int) $pos - 1] == ".")
            return true;
    }

    return false;$sql_row= mysql_num_rows($sql3);
}


// mysql_query("INSERT into duplicate(NAME,EMAIL) values ('".$UserName."' ,  '".$email."')");



$sql3 = mysql_query("SELECT NAME,EMAIL from users where NAME = '".$UserName."' and where EMAIL = '".$email."';");
// echo $sql3;
$sql_row= mysql_num_rows($sql3);

if ($sql_row>0) {
  echo "Already Exists";
  echo "<br>";
  echo "<a href = 'signupform.php'>Sign Up Again</a>";
}

else {

if (validateEmailDomain($email, $whitelist)){


  $sql = "INSERT into users (NAME,EMAIL,password) values ('".$UserName."' , '".$email."', '".$password."')";

  $query = mysql_query($sql);


  if(!$query)
  {

    echo "Failed" .mysql_error();
    echo "<br /><a href='signupform.php'>Signup Again</a>";
  }
  else

    echo "Successful";
    echo "<br /><a href='form.php'>Please Login</a>";
  }

  else
    echo "This domain name is not allowed";



// Generating userID

session_start();
$userID = strtotime("now");
  echo $userID;

  $sql2 = mysql_query("SELECT * FROM users where NAME = '".$UserName."'");
  $sql_row2 = mysql_num_rows($sql2);
  echo $sql_row2; 

  if ($sql_row2>0){

    $query = mysql_query("UPDATE users set userID = '".$userID."' where NAME = '".$UserName."'");

  }

  else
  {
    $query = mysql_query("INSERT into users(userID) values ('".$userID."') where NAME = '".$UserName."' ");
    if (!query){
      echo "Failed" .mysql_error();
    }

  }

}

?>

</div>
</div>



</body>
</html>


