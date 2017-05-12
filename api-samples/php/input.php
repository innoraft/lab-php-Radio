<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <title>
    
  </title>
</head>
<body>

<form action="welcome.php">
  <input type="submit" value="GO BACK TO HOME" class = "button2" style="padding: 11px;">
</form>

<?php

session_start();

$uid = $_SESSION['userID'];
// echo $uid;

if (isset($uid)) {
 
echo "<form action='logout.php'>
<input type='submit' value='Sign Out' style='background-color: #bb0000;
                            color: #fff;
                            font-family: Sans-serif;
                            text-align: center;
                            border: 0;
                            transition: all 0.3s ease 0s;
                            font-size: 20px;
                            padding: 11px;
                            float:right;'>
</form>";


echo '
<html>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css"/>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src = "script.js"></script>

</head>
<body>


<div class = "background">
<div class = "form">
<form action="searchandadd.php">

<div>
    Search Videos: <input type="search" id="q" name="q" plceholder="Search Videos">
  </div>
  <div>

<br>

    Max Results: <input type="number" id="maxResults" name="maxResults" min="1" max="50" step="1" value="25" class = "box2">
  </div>

<br>

  <input type="submit" value="Search" class = "button2"> 
  <br> 
  </form>
</div>
  
 </body>
</html> 

  ';


}

else
echo "<a href='form.php'>Login To Continue</a>";

  ?>


</body>
</html>

