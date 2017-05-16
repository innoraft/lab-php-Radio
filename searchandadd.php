
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

<a href="welcome.php"><button class="button2">Go Back To Home</button></a>
<a href="showplaylist.php"><button class="button2">Go To Playlist</button></a>
<a href="logout.php"><button class="button2" style="float: right;">Sign Out</button></a>
<!-- <form action="welcome.php">
	<input type="submit" value="GO BACK TO HOME" class = "button2" style="padding: 11px;">
</form> -->

<br>





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
                    //id : $("#" . $id).val(),
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
                        alert('Added!');
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


$inactive = 120; 
ini_set('session.gc_maxlifetime', $inactive); 

session_start();

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    session_unset($_SESSION['search']);     
}
$_SESSION['testing'] = time(); 


session_start();

// echo $_SESSION['nexttoken'];
echo "<br>";
echo $_SESSION['prevtoken'];





if (!isset($_SESSION['nexttoken']))

{
    $search = $_GET["q"];

    $_SESSION['search'] = rawurlencode($search);
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

        $name = $value1['snippet']['title'];
        $title = rawurlencode($name);


        ?>

           <h4 class="title"> <?php echo $name; ?></h4>
           <?php 
            echo "<br>";
            $id = $value1['id']['videoId'];

            session_start();
            $_SESSION['id'] = $id;

            echo "<br>";
        echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";echo "<br>";

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
                            padding:11px;'
                            >Add to playlist</button>
                    </form>";


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
