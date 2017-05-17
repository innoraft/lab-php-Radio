<?php

// include 'tests.php';

session_start();

include 'APIKEY.php';



if (isset($_SESSION['nexttoken'])){
	$next = $_SESSION['nexttoken'];
    $search = $_SESSION['search'];
    $max = $_SESSION['max'];
	$url = "https://www.googleapis.com/youtube/v3/search?pageToken=" . $next . "&part=snippet&maxResults=". $max ."&order=relevance&q=". $search."&key=".$key.""; 

	echo $url;

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
	$_SESSION['nexttoken'] = $abc['nextPageToken'];
	$_SESSION['songlist'] = $abc;

}



// echo $next;

// $_SESSION['token'] = "def";
$server = $_SERVER['SERVER_NAME'];

header('Location: http://'.$server.'/searchandadd.php');



?>


