<?php
session_start();

$uid = $_SESSION['userID'];
if (isset($uid)) {
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="sweetalert-master/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css"/>

  <link rel="stylesheet" href="CSS/WOW-master/css/libs/animate.css">

 <script type="text/javascript" src="CSS/WOW-master/dist/wow.min.js"></script>

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
                    var url = "insertvideo.php?id=" + id;
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
                    var url = "countvideo.php?id=" +id+"&title=" +title;
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

</head>

<body>

<?php

  //For Next page
if (!isset($_SESSION['nexttoken']))

{
    //Change API key in this file
    include 'APIKEY.php';
    $search = $_GET["q"];
    $_SESSION['search'] = rawurlencode($search);
    $search2 = $_SESSION['search'];
    $_SESSION['max'] = $_GET['maxResults'];
    $max2 = $_SESSION['max'];
    $prev = $_SESSION['prevtoken'];

    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=" .$_SESSION['max']. "&order=relevance&q=" .$_SESSION['search']. "&key=".$key."";

    $ch = curl_init();  

    // set URL and other appropriate options  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HEADER, 0);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

    // grab URL and pass it to the browser  

    $output = curl_exec($ch);
    $abc = json_decode($output, true);
    $_SESSION['songlist'] = $abc;
    $_SESSION['nexttoken'] = $abc['nextPageToken'];
    $xyz = $_SESSION['nexttoken'];
}

// $inactive = 120; 
// ini_set('session.gc_maxlifetime', $inactive); 

// session_start();

// if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
//     session_unset($_SESSION['search']);      
// }
// $_SESSION['testing'] = time(); 

?>

<div class = "nav">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<button class="button"><a href="chart.php" class="a">ANALYTICS</a></button>
<a href="User_Data/publicplaylist.php" class="a"><button class="button">TIMELINE</button></a>
<a href="input.php" class="a"><button class="button">SEARCH</button></a>
<a href="showplaylist.php" class="a"><button class="button">PLAYLIST</button></a>
<a href="welcome.php" class="a"><button class="button">HOME</button></a>
<a href = "#" class = "left"><img src="Images/logo.png"></a>
</div>
<div class="container">
<div class="col-md-1"></div>
<div class="col-md-10">

<div class="formsearch">
<?php

    foreach ($_SESSION['songlist']['items'] as $key => $value1) {

        $name = $value1['snippet']['title'];
        $title = rawurlencode($name);
        $thumbnail = $value1['snippet']['thumbnails']['medium']['url'];
        ?>
                   <h4 class="title wow fadeInDown"> <?php echo $name; ?></h4>
      <?php
        echo "<br>";
        echo '<img src="'.$thumbnail.'" class = "wow fadeInDown" alt="thumbnail">';
            $id = $value1['id']['videoId'];

            session_start();
            $_SESSION['id'] = $id;
                    echo "<form id='demo' method='POST' action=''> 
                    <button type='button' 
                            name='button' 
                            id=" . $id . " class=" . $title . " method='POST'
                            style='background-color: #bb0000;
                            color: #fff;
                            font-family: Sans-serif;
                            text-align: center;
                            border: 0;
                            transition: all 0.3s ease 0s;
                            padding:7px;'
                            >Add to playlist</button>
                    </form>";

?>
            <br>
            <button class="js-open-modal2 button2" data-id=<?php echo $id;?> href="#" data-modal-id="popup">Show Video</button>
            <br>
<?php


}



?>

  
<br>
<a href="#"><button class="button2">PREVIOUS</button></a>
<a href="next.php"><button class="button2" style="float: right;">NEXT</button></a>

</div>
</div>
<div class="col-md-1"></div>
</div>

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

else
{  
$server = $_SERVER['SERVER_NAME'];
header('Location: http://'.$server.'/logout.php');
}


?>

</body>
</html>
