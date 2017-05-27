<?php 
session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid)) {

?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" type="text/css" href="CSS/style2.css"/>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 <link rel="stylesheet" href="WOW-master/css/libs/animate.css">




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src = "script.js"></script>



</head>
<body>

<div class = "nav">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href="chart.php" class="a"><button class="button">ANALYTICS</button></a>
<a href="input.php" class="a"><button class="button">SEARCH</button></a>
<a href="showplaylist.php" class="a"><button class="button">PLAYLIST</button></a>
<a href="welcome.php" class="a"><button class="button">HOME</button></a>
<a href = "#" class = "left"><img src="Images/logo.png"></a>
</div>

<div class = "banner">
<p class = "tag">WELCOME TO INNORAFT RADIO</p>
<p class = "tag2">Where words leave off, music begins</p>

</div>

<div class="bounce"><i class="fa fa-angle-double-down" style="font-size: 49px;" id="faa"></i></div>

<div class = "container-fluid bg-3 text-center boot">
<div class = "row">

<h2 class = "heading">SEARCH,CREATE & ANALIZE</h2>

<div class = "col-md-4 name">

<div class= "content">
  <div class='description'>
    <!-- description content -->
    <p class='description_content'>Search</p>
    <!-- end description content -->
  </div>
<div class= "overlay">
  <div class = "text"><a href="input.php" class = "a" style="font-size: 30px;"><span class="glyphicon glyphicon-search"></span>SEARCH</a></div>
</div>
   </div>
</div>

<div class = "col-md-4 name">
<div class = "content2">
  <div class='description'>
    <!-- description content -->
    <p class='description_content'>Show Analytics</p>
    <!-- end description content -->
  </div>
<div class="overlay"> 
  <div class = "text"><a href="chart.php" class = "a" style="font-size: 30px;"><span class="glyphicon glyphicon-stats"></span>SHOW ANALYTICS</a></div>
  </div>
</div>
  
</div>

<div class = "col-md-4 name">
<div class = "content3">
  <div class='description'>
    <!-- description content -->
    <p class='description_content'>Show Playlist</p>
    <!-- end description content -->
  </div>
<div class= "overlay">
<div class="overlay">
  <div class = "text"><a href = "showplaylist.php" class = "a" style="font-size: 30px;"><span class="glyphicon glyphicon-play-circle"></span>SHOW PLAYLIST</a></div>
  </div>
</div>
  
</div>

</div>
</div>
</div>

<!-- <div class = "footer">
<div class = "overlay2"></div>
<div class = "container-fluid bg-3 text-center boot">
<div class = "row">

<h2>FOLLOW US</h2>

<div class = "wrapper">

<div class = "col-md-6">
<img src="Images/logo.png">
</div>
<div class = "col-md-6">
<p>Official Website</p>
<div class = "link">
<p class = "link"><a href="http://www.innoraft.com/" target="_blank">www.innoraft.com</a></p>
</div>

<ul class = "icons">

          <li><a href="https://twitter.com/innoraft" target="_blank" class = "margin"><i class="fa fa-twitter fa-2x"></i></a></li>

                      <li><a href="https://www.linkedin.com/company/innoraft" target="_blank" class = "margin"><i class="fa fa-linkedin fa-2x"></i></a></li>

                      <li><a href="https://www.facebook.com/Innoraft/" target="_blank" class = "margin"><i class="fa fa-facebook fa-2x"></i></a></li>

                      <li><a href="https://www.drupal.org/innoraft" target="_blank" class = "margin"><i class="fa fa-dribbble fa-2x"></i></a></li>

                      <li><a href="https://github.com/innoraft" target="_blank" class = "margin"><i class="fa fa-github-square fa-2x"></i></a></li>

</ul>


</div>
</div>
</div>

 -->




 </body>
</html>
<?php

}

else
{

echo "<a href = 'form.php'>Login To Continue</a>";
}

?>
