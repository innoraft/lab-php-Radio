<?php 

session_start();

//URL of targeted site  
$url = "https://www.googleapis.com/youtube/v3/search?pageToken=$token&part=snippet&maxResults=25&order=relevance&q=ShapeOfYou&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch);
$abc = json_decode($output, true);
$token = $abc['nextPageToken'];
$results = $abc['pageInfo']['totalResults'];
$prev = $abc['prevPageToken'];
echo $token;
echo $prev;
// echo $output;

foreach ($abc['items'] as $key => $value1) {

		echo $value1['snippet']['title']; 
		?> <br> <?php
		$id = $value1['id']['videoId'];
		echo $id;
		?> <br> <?php
	// echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";

	}


?>

<?php 

session_start();

//URL of targeted site  
$url = "https://www.googleapis.com/youtube/v3/search?pageToken=$token&part=snippet&maxResults=25&order=relevance&q=ShapeOfYou&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch);
$abc = json_decode($output, true);
$token = $abc['nextPageToken'];
$results = $abc['pageInfo']['totalResults'];
$prev = $abc['prevPageToken'];
echo $token;
echo $prev;
// echo $output;

foreach ($abc['items'] as $key => $value1) {

		echo $value1['snippet']['title']; 
		?> <br> <?php
		$id = $value1['id']['videoId'];
		echo $id;
		?> <br> <?php
	// echo "<iframe src='//www.youtube.com/embed/$id?enablejsapi=1' frameborder='0' allowfullscreen id='video'></iframe>";

	}




?>



