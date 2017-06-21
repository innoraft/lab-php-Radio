<?php
include 'databaseconfig.php';

session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid))
{
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <title>Playlist</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="CSS/WOW-master/css/libs/animate.css">

 <script type="text/javascript" src="CSS/WOW-master/dist/wow.min.js"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
                var url = "Includes/removevideo.php?id=" + id;
          console.log(url);
                event.preventDefault();
                $.ajax({
                    type: "GET",
                    url: url,
                    data: '',
                    //id : $("#" . $id).val(),
                    success: function(data) {
                        swal({
                          title: "Are you sure?",
                          text: "This song will be deleted!!",
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonColor: "#DD6B55",
                          confirmButtonText: "Yes, delete it!",
                          closeOnConfirm: false
                        },
                        function(){
                          swal("Deleted!", "Song has been removed from playlist", "success");
                        window.location.reload();
                        });
                    },      
                });
            });
       
});     
        </script>

<script type="text/javascript">
    $( document ).ready(function() {
        console.log( "countwatced!" );
        $("#count > button").on("click", function(event) {
                    console.log(this.id);
                    var id = this.id;
                    var url = "User_Data/mostwatched.php?id=" + id;
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

        <script>
  $(function(){
    console.log("fetchid!");
      var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");
      $('button[data-modal-id]').click(function(e) {
      var myvideoId = $(this).data('id');
      // $("#videoId").text( myvideoId);
          var iframe = document.createElement("iframe");
        iframe.setAttribute("src",
          "//www.youtube.com/embed/"+myvideoId+"?autoplay=1"); 
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

<div class="nav">
    <div class="col-sm-2 abc"><a href="http://www.innoraft.com/" class="left" style="background: none;"><img src="Images/logo.png"></a></div>
    <div class="col-sm-10">
        <div class="col-sm-2 xyz"><a href="welcome.php" class="a">HOME</a></div>
        <div class="col-sm-2 xyz"><a href="input.php" class="a">SEARCH</a></div>
        <div class="col-sm-2 xyz"><a href="showplaylist.php" class="a">PLAYLIST</a></div>
        <div class="col-sm-2 xyz"><a href="User_Data/publicplaylist.php" class="a">TIMELINE</a></div>
        <div class="col-sm-2 xyz"><a href="chart.php" class="a">ANALYTICS</a></div>
        <div class="col-sm-2 xyz"><a href="logout.php" class="a"><i class="fa fa-sign-out" aria-hidden="true"></i>SIGN OUT</a></div>
      </div>
</div>

<div class="formsearch">
<h1 style="text-align: center;" class="wow bounceInDown">YOUR PLAYLIST</h1>
<?php

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
    <h4 class="title wow fadeInDown"> <?php echo $title; ?></h4>
    <?php
  }
}
}
              ?>
              <form id = "remove" method="POST" >
              <button type="button" id="<?php echo $id;?>" name="button" class="button2" method = "POST">Remove From Playlist</button>
              </form>
              <br>
              <a href="#" id="count"><button class="js-open-modal2 button2" id ="<?php echo $id; ?>" data-id="<?php echo $id;?>" href="#" data-modal-id="popup">Show Video</button></a>
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
$server = $_SERVER['SERVER_NAME'];
header('Location: http://'.$server.'/logout.php');
}



?>
</div>

</body>
</html>
