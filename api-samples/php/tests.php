<?php 
ini_set('session.gc_maxlifetime', 60);


session_start();

echo $_SESSION['nexttoken'];
echo "<br>";
echo $_SESSION['prevtoken'];





if (!isset($_SESSION['nexttoken']))

{


	$_SESSION['search'] = $_GET["q"]; 
$search2 = $_SESSION['search'];
echo $_SESSION['search'];
echo "<br>";
$_SESSION['max'] = $_GET['maxResults'];
$max2 = $_SESSION['max'];
echo $_SESSION['max'];

	$url = "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=" .$_SESSION['max']. "&order=relevance&q=" .$_SESSION['search']. "&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY";

	echo $url;

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

// session_destroy();

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="next.php">
  <input type="submit" value="NEXT">
</form>

<form action="prev.php">
	<input type="submit" value="PREV">
</form>
  

<?php
	foreach ($_SESSION['songlist']['items'] as $key => $value1) {

			echo $value1['snippet']['title']; 
			// echo "<br>";
			$id = $value1['id']['videoId'];
			echo $id;
			echo "<br>";
		echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";echo "<br>";

		}

?>


</body>
</html>
