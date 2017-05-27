
<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>

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
</head>

<body>


<?php
session_start();

$uid = $_SESSION['userID'];
// echo $uid;

if (isset($uid)) {



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

//Change API key here
include 'APIKEY.php';

    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=" .$_SESSION['max']. "&order=relevance&q=" .$_SESSION['search']. "&key=".$key."";

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


// $inactive = 120; 
// ini_set('session.gc_maxlifetime', $inactive); 

// session_start();

// if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
//     session_unset($_SESSION['search']);      
// }
// $_SESSION['testing'] = time(); 

?>

<div class = "navbar">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href="chart.php" class="a"><button class="button">ANALYTICS</button></a>
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



?>
<br>
<a href="next.php"><button class="button2">NEXT</button></a>

</div>
</div>
<div class="col-md-1"></div>
</div>

<?php


}

else
{
 echo "<a href='form.php'>Login To Continue</a>";
}


?>

</body>
</html>
