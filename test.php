<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['action']))
{          
    if($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
            mysql_query("insert into users(NAME,EMAIL,password) values('".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password)."');
            $message = "Signup Sucessfully!!";
        }
    }
}


// $sql = "INSERT INTO users (NAME, EMAIL, password)
// VALUES ('$name','$email','$password')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>

<div id="tabs">                
  <div id="tabs-2">
    <form action="" method="post">
    <p><input id="name" name="name" type="text" placeholder="UserName"></p>
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="signup" /></p>
    <p><input type="submit" value="Signup" /></p>
  </form>
  </div>
</div>