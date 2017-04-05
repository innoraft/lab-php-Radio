<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($dbname,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbname,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($dbname,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:22px;
         }
         
         label {
                  font-weight:bold;
                  width:100px;
                  font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
            font-size: 20px;
         }

         .bg{

            background-image: url(bg.jpg);
            background-size: 100% 100%;
         }

         .su{
            background: transparent;
            float: right;
            border-width: 6px;
            border-style: double;
            border-color: black;
         }

         .sign{
            color: black;
            text-decoration: none;
            font-size: 21px;
         }
      </style>
      
   </head>
   
   <body class="bg">
   <div style = "background-color:transparent; color:black; padding:3px;font-size: 57px;text-align: center;">Innoraft Radio</div>

   <button class="su"><a href="signup.php" class="sign">Sign Up</a></button>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; margin-top: 153px; " align = "left">
            
            
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
               
            </div>
            
         </div>
         
      </div>

   </body>
</html>