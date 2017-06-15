<!DOCTYPE html>
<html>
<head>
	<title>Public Playlist</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 

<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

<script type="text/JavaScript">
function timeRefresh(timeoutPeriod) 
{
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        console.log( "ready!" );
        $("#demo > button").on("click", function(event) {
                    console.log(this.id);
                    var id = this.id;
                    var url = "../insertvideo.php?id=" + id;
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
                    var url = "../countvideo.php?id=" +id+"&title=" +title;
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
          "//www.youtube.com/embed/"+myvideoId+"?enablejsapi=1"); 
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


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onLoad="JavaScript:timeRefresh(10000);">

<div class = "nav">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href="../chart.php" class="a"><button class="button">ANALYTICS</button></a>
<a href="../input.php" class="a"><button class="button">SEARCH</button></a>
<a href="../showplaylist.php" class="a"><button class="button">PLAYLIST</button></a>
<a href="welcome.php" class="a"><button class="button">HOME</button></a>
<a href = "#" class = "left"><img src="../Images/logo.png"></a>
</div>

<div class="formsearch">

<h2 style="text-align: center;">Public Playlists</h2>

<?php

include '../databaseconfig.php';
$row = array();
$arr = array();
$data = array();
$sql = "SELECT * from video";
$result=mysql_query($sql);
// $result=$db2->query($sql);

if ($result > 0) {
	while ($row = mysql_fetch_array($result)) {
		$uid = $row['userID'];
		$vid = $row['videoId'];
		$query = "SELECT NAME from users where userID = '$uid'";
		$fetchtitle = "SELECT title from counter where videoId = '$vid'";
		$fetched = mysql_query($fetchtitle);
		$res = mysql_query($query);

		if (!$res) {
			echo "Failed".mysql_error();
		}

		if ($res > 0) {
			while ($arr = mysql_fetch_array($res)) {
				$Username = $arr['NAME'];
			}

			if (!$fetched) {
				echo "Failed".mysql_error();
			}

			if ($fetched > 0) {
				while ($data = mysql_fetch_array($fetched)) {
					$title = $data['title'];

					?>

					<p><li><?php echo $Username;?> added <strong><?php echo $title;?></strong> to Playlist</li></p>

					<span>
		            <button class="js-open-modal2 button2" data-id=<?php echo $vid;?> href="#" data-modal-id="popup">Show Video</button>

		            <a href="#" id="demo" ><button type='button' name='button' id=<?php echo $vid; ?> class=<?php echo $title;?> method='POST' style='background-color: #bb0000;color: #fff;font-family: Sans-serif;text-align: center;border: 0;transition: all 0.3s ease 0s;padding: 5px;'>Add To Playlist</button></a>
		            <br>
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
                      <br>
                      <button class="button2">Show <?php echo $Username;?>'s Playlist</button>
					</span>

					<?php
				}
			}

		}

	}
}




?>
</div>

</body>
</html>