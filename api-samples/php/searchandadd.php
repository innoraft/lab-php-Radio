
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <script src="update2.js"></script> -->
    <link rel="stylesheet" type="text/css" href="style.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>


<br>

<form action="welcome.php">
	<input type="submit" value="GO BACK TO HOME" class = "button2" style="padding: 11px;">
</form>

<br>





   <script>
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
                    //id : $("#" . $id).val(),
                    success: function(data) {
                        // $("#chatbox").append(data+"<br/>");
                        // alert (data);
                    },
                });
            });
       
});     
        </script>


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



$inactive = 60; 
ini_set('session.gc_maxlifetime', $inactive); 

session_start();

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); 


session_start();

// echo $_SESSION['nexttoken'];
echo "<br>";
echo $_SESSION['prevtoken'];





if (!isset($_SESSION['nexttoken']))

{


    $_SESSION['search'] = $_GET["q"]; 
$search2 = $_SESSION['search'];
// echo $_SESSION['search'];
echo "<br>";
$_SESSION['max'] = $_GET['maxResults'];
$max2 = $_SESSION['max'];
// echo $_SESSION['max'];

    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=" .$_SESSION['max']. "&order=relevance&q=" .$_SESSION['search']. "&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY";

    // echo $url;

    $ch = curl_init();  

    // set URL and other appropriate options  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HEADER, 0);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

    // grab URL and pass it to the browser  

    $output = curl_exec($ch);
    $abc = json_decode($output, true);
    $_SESSION['songlist'] = $abc;
    // $token = $abc['nextPageToken'];
    $results = $abc['pageInfo']['totalResults'];
    // $_SESSION['prevtoken']= $abc['prevPageToken'];
    $_SESSION['nexttoken'] = $abc['nextPageToken'];
    $xyz = $_SESSION['nexttoken'];
    // echo $xyz;

    // echo $_SESSION['prevtoken'];
    // echo "abc";

    

} 


    foreach ($_SESSION['songlist']['items'] as $key => $value1) {
        // echo $_SESSION['songlist']['items'];
        // echo $value1;

        ?>

           <h4 class="title"> <?php echo $value1['snippet']['title']; ?></h4>
           <?php 
            echo "<br>";
            $id = $value1['id']['videoId'];
            // $id2 = $_POST['id'];
            // echo $id;
            session_start();
            $_SESSION['id'] = $id;
            // $_SESSION['session_id'] = "ksjksjdksjd";
            // $_SESSION['id']++;

            // $_SESSION['id'] = $id;
            echo "<br>";
        echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";echo "<br>";

        
//  echo    "<form action='songlist.php' method='post'>
//  <input type='submit' value='Add To Playlist' id='$id' name = 'id'/>
// </form>";
            // echo $_SESSION['id'];

            


            echo "<form id='demo' method='POST' action=''>
                    <button type='button' 
                            name='button' 
                            id='$id' ,
                            method='POST'
                            style='background-color: #bb0000;
                            color: #fff;
                            font-family: Sans-serif;
                            text-align: center;
                            border: 0;
                            transition: all 0.3s ease 0s;
                            padding:11px;'
                            >Add to playlist</button>
                    </form>";

        // echo "
        // <form id='demo'method='POST'><input type='button' id='$id' onClick='reply_click(".$id.")' value='Add To Playlist'></form>";

// echo $_GET['id.id'];
}










}

else
{
 echo "<a href='form.php'>Login To Continue</a>";
}


?>

<br>

<form action="next.php">
  <input type="submit" value="NEXT" class = "button2" style="padding: 11px;"> 
</form>


</body>
</html>
