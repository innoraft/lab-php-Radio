
<?php
session_start();?>
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
<?php
if(isset($_POST['submit']))
{          
    //if($_POST['action']=="signup")
    //{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $result= mysql_query("SELECT EMAIL FROM users WHERE EMAIL='".$email."'");
        $numResults = mysql_num_rows($result);
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        // {
        //     $message =  "Invalid email address please type a valid email!!";
        // }
        // elseif($numResults>=1)
        // {
        //     $message = $email." Email already exist!!";
        // }
        if($numResults>0)
        {
            header('location:signup.php?msg=successful');
        }

        else{

            header('location:signup.php?msg=unsuccessful');
        }
   // }
}

else
{
   header('location:signup.php?msg=unsuccessfullogin');
}

?>
<!-- Login and Signup forms -->
