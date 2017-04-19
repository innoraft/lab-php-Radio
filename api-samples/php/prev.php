<?php


// echo 'abc';

session_start();
// echo "abc";
echo $_SESSION['prevtoken'];

if (isset($_SESSION['prevtoken'])){

echo "abc";

	$prev = $_SESSION['prevtoken'];
	$url = "https://www.googleapis.com/youtube/v3/search?pageToken=" . $prev . "&part=snippet&maxResults=25&order=relevance&q=ShapeOfYou&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY"; 

	$ch = curl_init();  

	// set URL and other appropriate options  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_HEADER, 0);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

	// grab URL and pass it to the browser  

	$output = curl_exec($ch);
	$abc = json_decode($output, true);
	// $token = $abc['nextPageToken'];
	$results = $abc['pageInfo']['totalResults'];
	$_SESSION['prevtoken'] = $abc['prevPageToken'];
	echo $_SESSION['prevtoken'];

}


// echo $next;

// $_SESSION['token'] = "def";

header('Location: http://radio1.com/api-samples/php/tests.php');



?>


