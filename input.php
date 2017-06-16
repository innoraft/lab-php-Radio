<?php
session_set_cookie_params(0);
session_start();

$uid = $_SESSION['userID'];
// echo $uid;

if (isset($uid)) {
 

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>
    SEARCH
  </title>
</head>
<body>

<div class = "nav">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href="chart.php" class="a"><button class="button">ANALYTICS</button></a>
<a href="User_Data/publicplaylist.php" class="a"><button class="button">TIMELINE</button></a>
<a href="input.php" class="a"><button class="button">SEARCH</button></a>
<a href="showplaylist.php" class="a"><button class="button">PLAYLIST</button></a>
<a href="welcome.php" class="a"><button class="button">HOME</button></a>
<a href = "#" class = "left"><img src="Images/logo.png"></a>
</div>

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
    Search Videos: <input type="search" id="q" name="q" plceholder="Search Videos" required>
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

<?php
}

else
{  
$server = $_SERVER['SERVER_NAME'];
header('Location: http://'.$server.'/logout.php');
}

?>


</body>
</html>

