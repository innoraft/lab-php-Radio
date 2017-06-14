<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

	<title>Playlist</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
function value()
{
    $('#player').empty();
}
</script>


       <script type="text/javascript">
       $( document ).ready(function() {
    console.log( "ready!" );
    $("#remove > button").on("click", function(event) {
                console.log(this.id);
                var id = this.id;
                var url = "removevideo.php?id=" + id;
          console.log(url);
                event.preventDefault();
                $.ajax({
                    type: "GET",
                    url: url,
                    data: '',
                    //id : $("#" . $id).val(),
                    success: function(data) {
                        window.location.reload();
                    },      
                });
            });
       
});     
        </script>

        <script>
  $(function(){
    console.log("fetchid!");
      var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");
      $('button[data-modal-id]').click(function(e) {
      var myvideoId = $(this).data('id');
      // $("#videoId").text( myvideoId);
          var iframe = document.createElement("iframe");
        iframe.setAttribute("src",
          "//www.youtube.com/embed/"+myvideoId+"?enablejsapi=1"); 
            iframe.style.width = "640px";
        iframe.style.height = "480px";
      $("#player").append(iframe);
      e.preventDefault();
      // $("body").append(appendthis);
      $(".modal-overlay").fadeTo(500, 0.7);

      var modalBox = $(this).attr('data-modal-id');
      $('#'+modalBox).fadeIn($(this).data());
      }); 
      $(".js-modal-close, .modal-overlay").click(function() {
      $(".modal-box, .modal-overlay").fadeOut(500, function() {
      $(".modal-overlay").remove();
      });
      });
      // clear();
      $(window).resize(function() {
      $(".modal-box").css({
      top: ($(window).height() - $(".modal-box").outerHeight()) / 50,
      left: ($(window).width() - $(".modal-box").outerWidth()) /14
      });
      });
      $(window).resize();
    });
</script>

</head>
<body>
<div class = "navbar">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href="chart.php" class="a"><button class="button">ANALYTICS</button></a>
<a href="input.php" class="a"><button class="button">SEARCH</button></a>
<a href="showplaylist.php" class="a"><button class="button">PLAYLIST</button></a>
<a href="welcome.php" class="a"><button class="button">HOME</button></a>
<a href = "#" class = "left"><img src="Images/logo.png"></a>
</div>
<div class="formsearch">
<h1 style="text-align: center;">YOUR PLAYLIST</h1>

<?php
include 'databaseconfig.php';

session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid))
{
$row=array();
$arr = array();
// $db=mysqli_connect("localhost","root","123","userdb");
$result ="SELECT videoId FROM video where userID = '$uid'";

// $result2 = "SELECT playlistname FROM playlist where userID = '$uid'";

$res=$db2->query($result);
// $res2=$db->query($result2);

if ($res > 0){
	

while($row = mysqli_fetch_array($res))
{

$id = $row['videoId'];

$selecttitle = "SELECT title from counter where videoId = '$id'";
$res2 = mysql_query($selecttitle);

if($res2 === FALSE) { 
      echo "Failed".msql_error();
}
else{

if ($res2 > 0) {
  while ($arr = mysql_fetch_array($res2)) {
    $title = $arr['title'];
    echo "<br>";
    ?>
    <h4 class="title"> <?php echo $title; ?></h4>
    <?php
  }
}
}
              ?>
              <form id = "remove" method="POST" >
              <button type="button" id="<?php echo $id;?>" name="button" class="button2" method = "POST">Remove From Playlist</button>
              </form>
              <br>
              <button class="js-open-modal2 button2" data-id="<?php echo $id;?>" href="#" data-modal-id="popup">Show Video</button>
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
              <?php


}


mysqli_close($con);
}
}
else
{
echo "<a href='form.php'>Login To Continue</a>";
}



?>
</div>

</body>
</html>


