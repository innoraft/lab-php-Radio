<?php
session_start();
include '../databaseconfig.php';
$uid = $_SESSION['play'];

$server = $_SERVER['SERVER_NAME'];
$row = array();
$arr = array();

$userid = $_SESSION['userID']; 

if (isset($userid)) {

if ($uid == $userid) {

header('Location: http://'.$server.'/showplaylist.php');

	
}

else

{	
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Playlist</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 

<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="../sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">

 <link rel="stylesheet" href="../CSS/WOW-master/css/libs/animate.css">

 <script type="text/javascript" src="../CSS/WOW-master/dist/wow.min.js"></script>

 <script>
  wow = new WOW(
  {
  boxClass:     'wow', 
animateClass: 'animated',
offset:       100
}
);
wow.init();
</script>
 
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        console.log( "ready!" );
        $("#demo > button").on("click", function(event) {
                    console.log(this.id);
                    var id = this.id;
                    var url = "../Includes/insertvideo.php?id=" + id;
              console.log(url);
                    event.preventDefault();
                    $.ajax({
                        type: "GET",
                        url: url,
                        data: '',
                        success: function(data) {
                            // document.getElementById("demo").innerHTML = "ADDED! ";
                        },  
                    });
                });
       
});     
</script>

    <script type="text/javascript">
    $( document ).ready(function() {
        console.log( "count" );
        $("#demo > button").on("click", function(event) {
                    console.log(this.id);
                    var id = this.id;
                    var title = $(this).attr('class');
                    console.log(title);
                    var url = "../Includes/countvideo.php?id=" +id+"&title=" +title;
              console.log(url);
                    event.preventDefault();
                    $.ajax({
                        type: "GET",
                        url: url,
                        data: '',
                        success: function(data) {
                          swal("Added!", "Check Playlist", "success")
                        },  
                    });
                });
           });     
    </script>

    <script type="text/javascript">
    $( document ).ready(function() {
        console.log( "watch" );
        $("#count > button").on("click", function(event) {
                    console.log(this.id);
                    var id = this.id;
                    var title = $(this).attr('class');
                    console.log(title);
                    var url = "mostwatched.php?id=" +id+"&title=" +title;
              console.log(url);
                    event.preventDefault();
                    $.ajax({
                        type: "GET",
                        url: url,
                        data: '',
                        success: function(data) {
                        },  
                    });
                });
           });     
    </script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
function value()
{
    $('#player').empty();
}
</script>
<script>
  $(function(){
    console.log("fetchid!");
      var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");
      $('button[data-modal-id]').click(function(e) {
      var myvideoId = $(this).data('id');
      var iframe = document.createElement("iframe");
      iframe.setAttribute("src",
          "//www.youtube.com/embed/"+myvideoId+"?autoplay=1"); 
            iframe.style.width = "640px";
        iframe.style.height = "480px";
      $("#player").append(iframe);
      e.preventDefault();
      $(".modal-overlay").fadeTo(500, 0.7);

      var modalBox = $(this).attr('data-modal-id');
      $('#'+modalBox).fadeIn($(this).data());
      }); 
      $(".js-modal-close, .modal-overlay").click(function() {
      $(".modal-box, .modal-overlay").fadeOut(500, function() {
      $(".modal-overlay").remove();
      });
      });
      $(window).resize(function() {
      $(".modal-box").css({
      top: ($(window).height() - $(".modal-box").outerHeight()) / 50,
      left: ($(window).width() - $(".modal-box").outerWidth()) /14
      });
      });
      $(window).resize();
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

</head>
<body>

<div class="nav">
    <div class="col-sm-2 abc"><a href="http://www.innoraft.com/" class="left" style="background: none;"><img src="../Images/logo.png"></a></div>
    <div class="col-sm-10">
        <div class="col-sm-2 xyz"><a href="../welcome.php" class="a">HOME</a></div>
        <div class="col-sm-2 xyz"><a href="../input.php" class="a">SEARCH</a></div>
        <div class="col-sm-2 xyz"><a href="../showplaylist.php" class="a">PLAYLIST</a></div>
        <div class="col-sm-2 xyz"><a href="publicplaylist.php" class="a">TIMELINE</a></div>
        <div class="col-sm-2 xyz"><a href="../chart.php" class="a">ANALYTICS</a></div>
        <div class="col-sm-2 xyz"><a href="../logout.php" class="a"><i class="fa fa-sign-out" aria-hidden="true"></i>SIGN OUT</a></div>
      </div>
</div>

<div class="formsearch">
<h2 style="text-align: center;" class="wow bounceInDown"><strong>Playlist</strong></h2>

<?php

	$sql = "SELECT videoId from video where userID = '$uid'";
	$query = mysql_query($sql);

	if (!$query) {
		echo "Failed".mysql_error();
	}

	if ($query > 0) {
		while ($row = mysql_fetch_array($query)) {
			$vid = $row['videoId'];

			$querytitle = "SELECT title from counter where videoId ='$vid'";
			$res = mysql_query($querytitle);

			if (!$res) {
				echo "Failed".mysql_error();
			}

			if ($res > 0) {
				while ($arr = mysql_fetch_array($res)) {
					$title = $arr['title'];
					?>
    					<h4 class="title wow fadeInDown"> <?php echo $title; ?></h4>
    					<br>
    					<span>
		          <a href="#" id="count"><button class="js-open-modal2 button2" id = "<?php echo $vid;?>" data-id=<?php echo $vid;?> href="#" data-modal-id="popup">Show Video</button></a>

		            <a href="#" id="demo" ><button type='button' name='button' id=<?php echo $vid; ?> class=<?php echo $title;?> method='POST' style='background-color: #bb0000;color: #fff;font-family: Sans-serif;text-align: center;border: 0;transition: all 0.3s ease 0s;padding: 5px;'>Add To Playlist</button></a>
                      <br>
                      <br>

					</span>

					  <div id="popup" class="modal-box" role = "dialog"> 
                      <header>
                      <a href="#" class="js-modal-close close" onclick="value('clear')">CLOSE</a>
                      </header>
                      <div class="modal-body">
                      <div id="player"></div>
                      </div>
                      <footer>
                      <a href="#" class="js-modal-close" onclick="value('clear')">Close</a>
                      </footer>
                      </div>
              <?php

        }
      }
    }
  }
}

}

else
{
$server = $_SERVER['SERVER_NAME'];
header('Location: http://'.$server.'/logout.php');
}
?>
</div>
</body>
</html>