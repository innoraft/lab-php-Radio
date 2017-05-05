<?php 
session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid)) {

echo '<html>
<head>

<link rel="stylesheet" type="text/css" href="animate.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" type="text/css" href="style2.css"/>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 <link rel="stylesheet" href="WOW-master/css/libs/animate.css">




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src = "script.js"></script>



</head>
<body>

<div class = "nav">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href = "#" class = "left"><img src="logo.png"></a>
</div>

<div class = "banner">
<p class = "tag">WELCOME TO INNORAFT RADIO</p>
<p class = "tag2">Where words leave off, music begins</p>

</div>

<div class = "container-fluid bg-3 text-center boot">
<div class = "row">

<h2 class = "heading">SEARCH,CREATE & LISTEN</h2>

<div class = "col-md-4 name">
<div class= "content">
<div class= "overlay">
  <div class = "text"><a href="input.php" class = "a">SEARCH</a></div>
</div>
   </div>
</div>

<div class = "col-md-4 name">
<div class = "content2">
<div class="overlay"> 
  <div class = "text"><a href="createplaylist.php" class = "a">CREATE PLAYLIST</a></div>
  </div>
</div>
  
</div>

<div class = "col-md-4 name">
<div class = "content3">
<div class="overlay">
  <div class = "text"><a href = "showplaylist.php" class = "a">SHOW PLAYLIST</a></div>
  </div>
</div>
  
</div>

</div>
</div>

<div class = "footer">
<div class = "overlay2"></div>
<div class = "container-fluid bg-3 text-center boot">
<div class = "row">

<h2>FOLLOW US</h2>

<div class = "wrapper">

<div class = "col-md-6">
<img src="logo.png">
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

<div class = "container">
<div class = "row">

<h2>CONTACT US</h2>

<div class = "col-md-2"></div>
<div class="col-md-8">

<ul class="footer_address">
	<li class = "left2"><i class="fa fa-map-marker fontsize"></i>Kredent Tower, J-1/14, Block - EP &amp; GP, Sector - 5,Salt Lake City,Kolkata, India</li>
	<br>
	<li class = "left2"><i class="fa fa-map-marker fontsize"></i>3/283, Chitrakoot Yojna, Near Pratap Stadium, Jaipur, India </li>
	<br>
	<li class = "left2"><i class="fa fa-mobile fontsize"></i>tel:+91-033-40010578</li>
</ul>

</div>
<div class="col-md-2"></div>

</div>



</div>
</div>
</div>






 </body>
</html> ';

}

else
{

echo "<a href = 'form.php'>Login To Continue</a>";

}

?>
